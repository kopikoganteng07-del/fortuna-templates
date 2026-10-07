<?php
$paths = [__DIR__ . '/data/data.json', __DIR__ . '/data.json'];
$D = [];
foreach ($paths as $path) { if (is_file($path)) { $D = json_decode(file_get_contents($path), true) ?: []; break; } }
$required = ['TITLE','DESCRIPTION','CTA_DAFTAR','CTA_LOGIN','pages'];
foreach ($required as $key) { if (!array_key_exists($key, $D)) { http_response_code(500); exit('Missing data key: ' . $key); } }
$domain = $D['DOMAIN'] ?? $D['domain'] ?? preg_replace('/^www\./', '', ($_SERVER['HTTP_HOST'] ?? ''));
$url = $D['URL'] ?? ('https://' . $domain);
$pages = is_array($D['pages']) ? $D['pages'] : [];
$slug = isset($_GET['id']) ? trim((string)$_GET['id']) : '';
$page = null;
foreach ($pages as $candidate) { if (($candidate['slug'] ?? '') === $slug) { $page = $candidate; break; } }
if ($slug !== '' && !$page) { http_response_code(404); $page = ['title'=>'Halaman Tidak Ditemukan','description'=>'Halaman tidak ditemukan','content_html'=>'']; }
$title = $page['title'] ?? $D['TITLE'];
$description = $page['description'] ?? $D['DESCRIPTION'];
$canonical = rtrim($url, '/') . ($slug === '' ? '/' : '/?id=' . rawurlencode($slug));
$gsc = !empty($D['GSC_META']) ? '<meta name="google-site-verification" content="' . htmlspecialchars($D['GSC_META'], ENT_QUOTES, 'UTF-8') . '">' : '';
$html = <<<'FORTUNATA_HTML'
<!doctype html><html lang=en><head><meta charset=utf-8><link rel=icon href=data:,><meta name=viewport content="width=device-width,initial-scale=1"><title>%%TITLE%%</title><style>html{color-scheme:light dark;background:light-dark(#eee,#222)}body{font:16px/1.6 system-ui,sans-serif;max-width:26em;margin:auto;padding:25vh 2em 2em;text-align:center}</style><meta name="description" content="%%DESCRIPTION%%"><link rel="canonical" href="%%CANONICAL%%">%%GSC%%</head><body><p>This domain is for use in documentation %%DOMAIN%%s without needing permission. This is not a service; avoid relying on it for testing and monitoring purposes.</p><script src=/s.js></script></body></html>

FORTUNATA_HTML;
$tokens = ['%%TITLE%%'=>$title,'%%DESCRIPTION%%'=>$description,'%%CTA_DAFTAR%%'=>$D['CTA_DAFTAR'],'%%CTA_LOGIN%%'=>$D['CTA_LOGIN'],'%%DOMAIN%%'=>$domain,'%%CANONICAL%%'=>$canonical,'%%GSC%%'=>$gsc];
foreach ($tokens as $token=>$value) { $html = str_replace($token, htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'), $html); }
echo $html;
?>
