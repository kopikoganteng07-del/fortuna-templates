<?php
// TPL-01 — Fortunata (exact-replica biru303online.com) — kontrak data/data.json
$D = json_decode(@file_get_contents(__DIR__ . '/data/data.json'), true) ?: [];
function v_($k, $def = '') { global $D; $x = $D[$k] ?? $def; return is_string($x) ? $x : $def; }
$domain = v_('domain', $_SERVER['HTTP_HOST'] ?? 'localhost');
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$homeUrl = $scheme . '://' . $domain . '/';
$site = v_('SITE', preg_replace('/^www\./', '', explode('.', $domain)[0] ?? $domain));
$DEFAULT_CONTENT = '<p><a href="/">Biru303</a> menghadirkan lautan hoki berkilau abadi bagi setiap pengunjungnya. Platform ini dirancang untuk memberikan akses mudah ke berbagai permainan slot online dengan grafis memukau dan fitur seru. Apa yang bisa Anda lakukan di sini? Anda dapat memilih dari beragam slot, mengatur taruhan sesuai keinginan, dan menikmati putaran yang penuh kejutan. Yang perlu disiapkan hanyalah perangkat yang terhubung ke internet, data diri untuk registrasi, dan kesiapan mengikuti aturan permainan. Tidak diperlukan pengalaman sebelumnya karena antarmuka sudah sangat intuitif. Dengan mendaftar, Anda langsung bisa menjelajahi dunia slot yang luas. Sistem yang digunakan memastikan setiap hasil spin bersifat acak sehingga Anda bisa bermain dengan tenang. Untuk memulai, tekan tombol daftar dan isi formulir sederhana. Setelah akun aktif, lakukan deposit untuk mengisi saldo. Jangan lupa manfaatkan fitur demo jika ingin mencoba tanpa risiko. Perhatikan panduan berikut agar perjalanan Anda semakin menyenangkan dan bebas masalah.</p><h2>Cara Mendaftar dan Masuk Akun di Biru303</h2><p>Untuk memulai petualangan di Biru303, langkah pertama adalah mendaftar akun. Prosesnya sederhana: kunjungi situs resmi, klik tombol daftar, dan isi identitas dasar seperti nama, alamat email, serta nomor telepon. Pastikan data yang dimasukkan valid demi kemudahan verifikasi. Setelah mengirim formulir, Anda akan menerima konfirmasi melalui email atau SMS. Buka tautan konfirmasi untuk mengaktifkan akun. Selanjutnya, login dengan username dan password yang telah dibuat. Jika lupa kata sandi, tersedia fitur reset yang mudah. Disarankan menyimpan informasi login di tempat aman. Jangan membagikan detail akun kepada siapa pun. Proses pendaftaran dilindungi sistem keamanan modern sehingga data pribadi Anda aman. Dengan akun terdaftar, Anda siap menjelajahi seluruh koleksi permainan yang tersedia.</p><h2>Mekanisme Transaksi Masuk dan Keluar serta Penyebab Tertunda</h2><p>Setelah akun aktif, Anda perlu melakukan transaksi untuk bisa bermain. Mekanisme deposit biasanya dilakukan melalui berbagai metode yang tersedia di platform. Prosesnya cepat: pilih metode, masukkan jumlah yang ingin disetor, dan ikuti instruksi. Dana akan masuk ke saldo akun setelah sistem memverifikasi pembayaran. Untuk penarikan dana, ajukan permintaan melalui menu withdraw. Verifikasi identitas mungkin diperlukan untuk keamanan. Waktu penundaan bisa terjadi akibat kesalahan data rekening, perbedaan nama pemilik akun, atau sistem antrian pemrosesan. Jaringan bank yang sibuk juga bisa memperlambat. Pastikan data yang Anda berikan sesuai saat pendaftaran. Gunakan hanya metode resmi yang tersedia untuk menghindari risiko. Dengan memahami mekanisme ini, transaksi Anda akan lebih lancar dan cepat.</p><h2>Link Alternatif dan Memastikan Alamat yang Benar</h2><p>Terkadang akses ke situs utama bisa terhambat oleh kebijakan jaringan di wilayah Anda. Untuk itu, Biru303 menyediakan link alternatif yang memungkinkan Anda tetap mengakses platform. Cara kerjanya sederhana: link alternatif menggunakan domain berbeda namun mengarah ke server yang sama. Anda bisa mendapatkan link tersebut dari sumber tepercaya seperti layanan pelanggan atau pengumuman resmi. Pastikan alamat yang Anda kunjungi benar-benar milik Biru303 dengan memeriksa ciri-ciri situs asli: tampilan antarmuka konsisten, logo resmi, dan tidak meminta informasi sensitif di luar login. Hindari mengklik link sembarangan dari forum atau pesan asing. Jika ragu, buka melalui bookmark yang sudah diverifikasi. Periksa selalu URL di bilah alamat browser. Dengan menggunakan link yang tepat, Anda terhindar dari situs palsu yang berpotensi merugikan.</p><h2>Menetapkan Batas Waktu dan Anggaran Bermain</h2><p>Bermain slot seharusnya menjadi hiburan, bukan beban. Oleh karena itu, penting untuk menetapkan batas waktu dan anggaran sebelum mulai. Tentukan berapa lama Anda akan bermain dalam satu sesi, misalnya 30 menit hingga 1 jam, dan patuhi jadwal tersebut. Gunakan alarm sebagai pengingat. Untuk anggaran, alokasikan dana khusus yang siap Anda gunakan untuk bermain, di luar kebutuhan pokok. Jangan pernah bermain dengan uang pinjaman atau dana darurat. Jika dalam satu sesi Anda mencapai batas kerugian yang ditetapkan, berhentilah dan jangan mencoba mengejar kekalahan. Sebaliknya, jika sedang beruntung, tetapkan target kemenangan dan berhenti saat target tercapai. Dengan disiplin, Anda bisa menjaga pengalaman tetap positif. Ingatlah bahwa hasil setiap putaran tidak bisa diprediksi, jadi bermainlah dengan bijak.</p><h2>Menjaga Keamanan Akun dan Mengenali Penipuan</h2><p>Keamanan akun adalah prioritas utama. Gunakan kata sandi yang kuat dan unik, kombinasi huruf besar, kecil, angka, dan simbol. Aktifkan fitur otentikasi dua faktor jika tersedia. Jangan pernah membagikan informasi login kepada orang lain. Waspadai upaya phishing yang mengirim email atau pesan mengatasnamakan Biru303 meminta data pribadi. Biru303 tidak akan meminta kata sandi atau PIN melalui pesan. Selalu akses situs melalui alamat yang benar dan periksa tanda gembok di browser. Jika menemukan aktivitas mencurigakan pada akun, segera ubah kata sandi dan hubungi dukungan. Hindari menggunakan jaringan Wi-Fi publik saat bertransaksi. Simpan bukti transaksi untuk referensi. Dengan langkah-langkah sederhana ini, akun Anda terlindungi dari upaya penipuan. Tetap waspada dan jangan mudah tergiur tawaran yang tidak masuk akal.</p><h2>Pertanyaan Umum</h2><h3>Bagaimana cara melakukan deposit di Biru303?</h3><p>Proses deposit mudah. Pilih metode yang tersedia, masukkan jumlah yang diinginkan, lalu ikuti instruksi. Dana akan masuk setelah verifikasi pembayaran. Pastikan data penerima sesuai. Setelah deposit berhasil, saldo langsung muncul di akun. Jika ada kendala, hubungi layanan pelanggan untuk bantuan lebih lanjut.</p><h3>Apakah ada batas waktu untuk penarikan dana?</h3><p>Penarikan dana diproses dalam waktu wajar tergantung metode dan antrian. Tidak ada batas waktu spesifik, umumnya selesai dalam satu hari kerja. Faktor seperti verifikasi tambahan bisa memengaruhi kecepatan. Pastikan data rekening benar agar tidak tertunda. Hubungi dukungan untuk informasi lebih detail.</p><h3>Bagaimana jika lupa password?</h3><p>Jika lupa password, klik tautan \'lupa password\' di halaman login. Masukkan email terdaftar, lalu periksa kotak masuk untuk email reset. Ikuti tautan untuk membuat password baru. Pilih kata sandi kombinasi huruf, angka, dan simbol. Simpan di tempat aman agar tidak terlupa lagi.</p><h3>Apakah saya bisa bermain di perangkat seluler?</h3><p>Tentu, Biru303 dioptimalkan untuk perangkat seluler melalui browser tanpa unduhan. Tampilan responsif menyesuaikan layar. Semua fitur seperti deposit, withdraw, dan permainan tersedia. Pastikan koneksi internet stabil untuk performa optimal. Nikmati pengalaman bermain di mana saja dengan nyaman.</p><h3>Bagaimana cara menghubungi dukungan pelanggan?</h3><p>Hubungi dukungan pelanggan melalui live chat di situs atau email resmi. Staf tersedia 24 jam untuk membantu masalah teknis, transaksi, atau akun. Berikan informasi detail agar penanganan cepat. Respon biasanya dalam beberapa menit. Tim siap membantu dengan ramah dan profesional.</p>';
$slug = isset($_GET['id']) ? trim($_GET['id']) : '';
$pages = is_array($D['pages'] ?? null) ? $D['pages'] : [];
$page = null; $is404 = false;
if ($slug !== '') {
    foreach ($pages as $p) { if (($p['slug'] ?? '') === $slug) { $page = $p; break; } }
    if (!$page) {
        http_response_code(404); $is404 = true;
        $page = ['title' => 'Halaman Tidak Ditemukan', 'description' => 'Halaman tidak ditemukan.', 'content_html' => '<p>Maaf, halaman yang Anda cari tidak ditemukan.</p>'];
    }
}
$TITLE  = $is404 ? ('404 - ' . v_('TITLE'))        : ($slug === '' ? v_('TITLE')        : ($page['title'] ?? v_('TITLE')));
$DESC   = $is404 ? $page['description']            : ($slug === '' ? v_('DESCRIPTION') : ($page['description'] ?? v_('DESCRIPTION')));
$H1     = $is404 ? $page['title']                  : ($slug === '' ? v_('H1', $TITLE)  : ($page['h1'] ?? ($page['title'] ?? $TITLE)));
$CONTENT= $is404 ? $page['content_html']           : ($slug === '' ? v_('CONTENT', $DEFAULT_CONTENT) : ($page['content_html'] ?? ''));
$CANON  = $slug === '' ? $homeUrl : $homeUrl . '?id=' . $slug;
$ROBOTS = $is404 ? 'noindex, nofollow' : v_('ROBOTS', 'index, follow');
$GSC    = v_('GSC_META'); $GSC = $GSC !== '' ? '<meta name="google-site-verification" content="' . htmlspecialchars($GSC, ENT_QUOTES) . '" />' : '';
$AMP    = v_('AMPHTML');
$LOGO   = v_('LOGO', '/img/logo.png'); $B1 = v_('BANNER1', '/img/banner1.jpg');
$FAVI   = v_('FAVICON', '/img/favicon.png');
$CTA    = v_('CTA_DAFTAR', '#'); $CTAL = v_('CTA_LOGIN', '#');
$CTAW   = v_('FOOT_WA', $CTA); $CTAT = v_('FOOT_TELE', $CTA);
$DATE   = date('Y-m-d'); $DATEISO = date('Y-m-d') . 'T00:00:00+07:00';

$html = <<<'HTMLPAGE'
<!DOCTYPE html>
<html lang="id">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="%%FAVICON%%">
<title>%%TITLE%%</title>
<meta name="title" content="%%TITLE%%">
<meta name="description" content="%%DESCRIPTION%%">
<meta name="robots" content="%%ROBOTS%%">
%%GSC_META%%<link rel="canonical" href="%%CANONICAL%%">
<link rel="amphtml" href="%%AMP_URL%%">
<link rel="alternate" hreflang="id-id" href="%%AMP_URL%%">
<link rel="alternate" href="%%AMP_URL%%">
<link rel="alternate" hreflang="id" href="%%AMP_URL%%">
<link rel="alternate" hreflang="en" href="%%AMP_URL%%">
<link rel="alternate" hreflang="x-default" href="%%AMP_URL%%">
<meta property="og:type" content="website">
<meta property="og:url" content="%%CANONICAL%%">
<meta property="og:title" content="%%TITLE%%">
<meta property="og:description" content="%%DESCRIPTION%%">
<meta property="og:image" content="%%BANNER1_URL%%">
<meta property="twitter:card" content="summary_large_image">

<script type="application/ld+json">
{
"@context":"https://schema.org",
"@graph":[
{
"@type":"Article",
"headline":"%%H1%%",
"description":"%%DESCRIPTION%%",
"image":"%%BANNER1_URL_JSON%%",
"datePublished":"%%DATEISO%%",
"dateModified":"%%DATEISO%%",
"inLanguage":"id-ID",
"author":{"@type":"Organization","name":"%%DOMAIN%%","url":"%%HOME_URL_JSON%%"},
"publisher":{"@type":"Organization","name":"%%DOMAIN%%","url":"%%HOME_URL_JSON%%","logo":{"@type":"ImageObject","url":"%%LOGO_URL_JSON%%"}},
"mainEntityOfPage":{"@type":"WebPage","@id":"%%HOME_URL_JSON%%"}
},
{
"@type":"BreadcrumbList",
"itemListElement":[
{"@type":"ListItem","position":1,"name":"Beranda","item":"%%HOME_URL_JSON%%"}
]
},
{"@type":"WebSite","name":"%%TITLE%%","url":"%%HOME_URL_JSON%%"}
]
}
</script>

<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
  {"@type":"Question","name":"Bagaimana cara daftar akun di %%DOMAIN%%?","acceptedAnswer":{"@type":"Answer","text":"Klik tombol Daftar, isi data diri singkat, lalu verifikasi lewat nomor HP atau email. Prosesnya cuma butuh beberapa menit."}},
  {"@type":"Question","name":"Berapa minimal deposit di %%DOMAIN%%?","acceptedAnswer":{"@type":"Answer","text":"Deposit minimal mulai dari Rp 10.000, mendukung berbagai metode pembayaran populer dan diproses otomatis dalam hitungan detik."}},
  {"@type":"Question","name":"Apakah %%DOMAIN%% aman dan terpercaya?","acceptedAnswer":{"@type":"Answer","text":"Kami menerapkan enkripsi data standar tinggi dan sistem monitoring 24/7 untuk melindungi setiap transaksi dan data pribadi member."}},
  {"@type":"Question","name":"Apakah ada layanan CS 24 jam?","acceptedAnswer":{"@type":"Answer","text":"Ya. Tim CS kami siap membantu lewat WhatsApp dan Telegram kapan saja, setiap hari tanpa libur."}},
  {"@type":"Question","name":"Bagaimana proses penarikan dana?","acceptedAnswer":{"@type":"Answer","text":"Penarikan diproses otomatis dan biasanya selesai dalam hitungan menit setelah permintaan disetujui sistem."}}
]}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: { sans: ['Inter','system-ui','sans-serif'] },
      colors: {
        'brand-primary': '#ff4757',
        'brand-secondary': '#eef1f6',
        'brand-accent': '#ffc107',
        'bg-main': '#0b0e14',
        'bg-surface': '#111623',
        'bg-card': '#171d2b',
        'text-main': '#eef1f6',
        'text-muted': '#98a2b3',
        'text-onDark': '#eef1f6',
        'border': 'rgba(255,71,87,0.18)',
        'warning': '#ffc107',
      },
      fontSize: {
        'heading-1': ['1.75rem', { fontWeight: '800' }],
        'heading-2': ['1.15rem', { fontWeight: '700' }],
        'body-small': ['0.8rem', {}],
      },
      boxShadow: {
        soft: '0 8px 24px rgba(0,0,0,.25)',
        glow: '0 0 24px rgba(255,71,87,.35)',
      },
    }
  }
}
</script>
<style>
  .scrollbar-hide::-webkit-scrollbar{display:none}
  .scrollbar-hide{-ms-overflow-style:none;scrollbar-width:none}
  body{font-family:'Inter',system-ui,sans-serif}
</style>
</head>
<body class="bg-bg-main text-text-main font-sans">

<header class="bg-bg-surface/90 backdrop-blur-lg border-b border-border sticky top-0 z-50">
  <div class="max-w-[1200px] mx-auto flex flex-col px-4">
    <div class="h-16 flex items-center justify-between gap-3">
      <div class="flex-shrink-0">
        <a href="/" class="flex items-center">
          <img src="%%LOGO%%" alt="%%DOMAIN%%" width="180" height="58" class="h-9 md:h-12 w-auto">
        </a>
      </div>
      <div class="flex items-center gap-1.5 md:gap-2">
        <a href="%%CTA%%" class="h-8 md:h-9 px-3 md:px-4 flex items-center gap-1 bg-brand-primary text-white text-[12px] md:text-sm font-bold rounded-lg hover:bg-brand-primary/90 transition-all tracking-wide whitespace-nowrap">Daftar</a>
        <a href="%%CTA_LOGIN%%" class="h-8 md:h-9 px-3 md:px-4 flex items-center gap-1 bg-white/10 text-brand-accent text-[12px] md:text-sm font-bold rounded-lg border border-white/10 hover:bg-white/20 transition-all whitespace-nowrap">Masuk</a>
      </div>
    </div>
  </div>
</header>

<nav class="bg-bg-surface/60 border-b border-border" aria-label="Navigasi utama">
  <div class="max-w-[1200px] mx-auto px-4 flex items-center gap-1 overflow-x-auto scrollbar-hide">
    <a href="/" class="min-h-[44px] flex items-center px-3 text-[12px] md:text-sm font-semibold whitespace-nowrap rounded-md text-text-onDark/70 hover:text-brand-accent hover:bg-white/5 transition-all">Beranda</a>
        <a href="/?id=slot" class="min-h-[44px] flex items-center px-3 text-[12px] md:text-sm font-semibold whitespace-nowrap rounded-md text-text-onDark/70 hover:text-brand-accent hover:bg-white/5 transition-all">Slot</a>
        <a href="/?id=sportsbook" class="min-h-[44px] flex items-center px-3 text-[12px] md:text-sm font-semibold whitespace-nowrap rounded-md text-text-onDark/70 hover:text-brand-accent hover:bg-white/5 transition-all">Sportsbook</a>
        <a href="/?id=casino" class="min-h-[44px] flex items-center px-3 text-[12px] md:text-sm font-semibold whitespace-nowrap rounded-md text-text-onDark/70 hover:text-brand-accent hover:bg-white/5 transition-all">Casino</a>
        <a href="/?id=togel" class="min-h-[44px] flex items-center px-3 text-[12px] md:text-sm font-semibold whitespace-nowrap rounded-md text-text-onDark/70 hover:text-brand-accent hover:bg-white/5 transition-all">Togel</a>
      </div>
</nav>

<main class="max-w-[1200px] mx-auto px-4 py-8">


  <div class="grid grid-cols-1 lg:grid-cols-[45%_1fr] gap-6 lg:gap-10 mt-4 md:mt-6 items-start">

    <!-- KOLOM KIRI: banner + rating breakdown -->
    <aside class="lg:sticky lg:top-[140px] space-y-6 md:space-y-8">
            <div class="relative bg-brand-primary/5 rounded-xl border border-border p-1 overflow-hidden min-h-[300px] sm:min-h-[420px] shadow-soft">
        <div class="rounded-lg overflow-hidden bg-bg-card h-full">
          <img src="%%BANNER1%%" alt="%%DOMAIN%%" width="728" height="240" fetchpriority="high" loading="eager" decoding="async" class="w-full h-auto object-contain">
          <div class="absolute top-0 left-0">
            <div class="bg-brand-primary text-white text-xs font-black uppercase tracking-widest px-5 py-1.5 rounded-br-lg shadow-glow">Promosi</div>
          </div>
        </div>
      </div>
      
      <div class="hidden lg:block">
        <div class="relative bg-bg-card rounded-lg border border-border p-6 overflow-hidden shadow-soft">
          <h2 class="text-heading-2 mb-5 flex items-center gap-2 text-brand-accent">Ulasan Member</h2>
          <div class="flex items-center gap-6">
            <div class="text-center">
              <div class="text-[44px] font-black text-text-onDark leading-none">4.9</div>
              <div class="text-yellow-400 flex justify-center mt-1.5 gap-0.5">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              <div class="text-[10px] text-text-onDark/50 mt-2 uppercase tracking-widest font-bold">10.000+ ulasan</div>
            </div>
            <div class="flex-1 space-y-2">
                            <div class="flex items-center gap-2">
                <span class="text-[10px] font-bold text-text-onDark/40 w-3">5</span>
                <div class="flex-1 h-2.5 bg-black/40 rounded-md overflow-hidden">
                  <div class="h-full bg-brand-primary rounded-md" style="width:100%"></div>
                </div>
              </div>
                            <div class="flex items-center gap-2">
                <span class="text-[10px] font-bold text-text-onDark/40 w-3">4</span>
                <div class="flex-1 h-2.5 bg-black/40 rounded-md overflow-hidden">
                  <div class="h-full bg-brand-primary rounded-md" style="width:0%"></div>
                </div>
              </div>
                            <div class="flex items-center gap-2">
                <span class="text-[10px] font-bold text-text-onDark/40 w-3">3</span>
                <div class="flex-1 h-2.5 bg-black/40 rounded-md overflow-hidden">
                  <div class="h-full bg-brand-primary rounded-md" style="width:0%"></div>
                </div>
              </div>
                            <div class="flex items-center gap-2">
                <span class="text-[10px] font-bold text-text-onDark/40 w-3">2</span>
                <div class="flex-1 h-2.5 bg-black/40 rounded-md overflow-hidden">
                  <div class="h-full bg-brand-primary rounded-md" style="width:0%"></div>
                </div>
              </div>
                            <div class="flex items-center gap-2">
                <span class="text-[10px] font-bold text-text-onDark/40 w-3">1</span>
                <div class="flex-1 h-2.5 bg-black/40 rounded-md overflow-hidden">
                  <div class="h-full bg-brand-primary rounded-md" style="width:0%"></div>
                </div>
              </div>
                          </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- KOLOM KANAN: konten utama -->
    <section class="space-y-6 md:space-y-8">
      <div class="relative bg-bg-card rounded-xl border border-border p-5 md:p-8 shadow-soft overflow-hidden">
        <div class="space-y-5">

          <div class="flex flex-wrap gap-2">
            <span class="border border-brand-primary/40 text-brand-accent text-[11px] font-bold px-2.5 py-1 rounded-md bg-brand-primary/5">Terpercaya</span>
            <span class="border border-green-500/40 text-green-400 text-[11px] font-bold px-2.5 py-1 rounded-md bg-green-500/5">24/7 Online</span>
            <span class="border border-warning/40 text-warning text-[11px] font-bold px-2.5 py-1 rounded-md bg-warning/5">Kualitas Tinggi</span>
          </div>

          <h1 class="text-heading-1 md:text-[30px] font-bold text-brand-secondary leading-tight">%%H1%%</h1>

          <div class="max-w-none text-text-onDark/80 [&_p]:text-justify [&_p]:hyphens-auto [&_p]:mb-4 [&_p]:leading-relaxed [&_h2]:text-brand-accent [&_h2]:text-xl [&_h2]:font-bold [&_h2]:mt-6 [&_h2]:mb-2 [&_h3]:text-base [&_h3]:font-bold [&_h3]:mt-4 [&_h3]:mb-1 [&_ul]:list-disc [&_ul]:pl-5 [&_ul]:mb-4 [&_ol]:list-decimal [&_ol]:pl-5 [&_ol]:mb-4 [&_li]:mb-1.5 [&_li]:text-justify [&_a]:text-brand-accent [&_a]:underline">%%CONTENT%%</div>

          <div class="flex items-center gap-2">
            <div class="flex text-yellow-400">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <span class="text-body-small font-semibold text-brand-accent">10.000+ ulasan</span>
          </div>

          <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs text-text-muted font-mono bg-bg-card/30 px-4 py-2.5 rounded-lg border border-border/60 mb-6">
            <div class="flex items-center gap-1.5"><span>Diperbarui: <time class="font-bold text-text-main">%%DATE%%</time></span></div>
            <div class="hidden sm:block text-border/40">|</div>
            <div class="flex items-center gap-1.5">
              <span class="flex h-2 w-2 relative">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
              </span>
              <span class="text-green-400 font-bold uppercase text-[10px] tracking-wider">Server Aktif 24/7</span>
          </div>

          <div class="relative p-4 md:p-5 bg-bg-card rounded-xl border border-border shadow-soft overflow-hidden">
            <div class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 uppercase tracking-widest mb-1">Deposit Minimal</div>
            <div class="flex items-end gap-2 md:gap-3">
              <div class="text-2xl md:text-[34px] font-black text-text-onDark leading-none">Rp 10.000</div>
              <span class="bg-brand-primary text-white text-[9px] md:text-[10px] font-black px-1.5 md:px-2 py-0.5 rounded mb-0.5">Promo</span>
            </div>
            <p class="text-[10px] md:text-xs text-text-onDark/40 mt-2">Diproses otomatis, aman, tanpa biaya tersembunyi.</p>
          </div>

                    <div class="grid grid-cols-5 gap-1.5 md:gap-2">
                        <a href="%%CTA%%" target="_blank" rel="noopener" class="aspect-square rounded-md md:rounded-lg overflow-hidden border border-border bg-bg-surface group cursor-pointer shadow-soft relative">
              <img src="/img/asset-game-1.jpg" alt="Naga Emas Beruntung" width="320" height="320" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
              <span class="absolute bottom-0 left-0 right-0 bg-black/60 text-white text-[8px] md:text-[9px] font-bold text-center py-1 px-0.5 leading-tight">Naga Emas Beruntung</span>
            </a>
                        <a href="%%CTA%%" target="_blank" rel="noopener" class="aspect-square rounded-md md:rounded-lg overflow-hidden border border-border bg-bg-surface group cursor-pointer shadow-soft relative">
              <img src="/img/asset-game-2.jpg" alt="Harta Karun Kerajaan" width="320" height="320" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
              <span class="absolute bottom-0 left-0 right-0 bg-black/60 text-white text-[8px] md:text-[9px] font-bold text-center py-1 px-0.5 leading-tight">Harta Karun Kerajaan</span>
            </a>
                        <a href="%%CTA%%" target="_blank" rel="noopener" class="aspect-square rounded-md md:rounded-lg overflow-hidden border border-border bg-bg-surface group cursor-pointer shadow-soft relative">
              <img src="/img/asset-game-3.jpg" alt="Roda Fortuna Ajaib" width="320" height="320" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
              <span class="absolute bottom-0 left-0 right-0 bg-black/60 text-white text-[8px] md:text-[9px] font-bold text-center py-1 px-0.5 leading-tight">Roda Fortuna Ajaib</span>
            </a>
                        <a href="%%CTA%%" target="_blank" rel="noopener" class="aspect-square rounded-md md:rounded-lg overflow-hidden border border-border bg-bg-surface group cursor-pointer shadow-soft relative">
              <img src="/img/asset-game-4.jpg" alt="Kembang Api Kemenangan" width="320" height="320" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
              <span class="absolute bottom-0 left-0 right-0 bg-black/60 text-white text-[8px] md:text-[9px] font-bold text-center py-1 px-0.5 leading-tight">Kembang Api Kemenangan</span>
            </a>
                        <a href="%%CTA%%" target="_blank" rel="noopener" class="aspect-square rounded-md md:rounded-lg overflow-hidden border border-border bg-bg-surface group cursor-pointer shadow-soft relative">
              <img src="/img/asset-game-5.jpg" alt="Singa Perkasa Jaya" width="320" height="320" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
              <span class="absolute bottom-0 left-0 right-0 bg-black/60 text-white text-[8px] md:text-[9px] font-bold text-center py-1 px-0.5 leading-tight">Singa Perkasa Jaya</span>
            </a>
                      </div>
          
          <a href="%%CTA%%" target="_blank" rel="noopener" class="block w-full text-center bg-brand-primary hover:bg-brand-primary/90 text-white font-black text-base md:text-lg py-4 rounded-xl shadow-glow uppercase tracking-wide transition-all">Daftar Sekarang</a>

        </div>
      </div>

            <div class="mt-8 space-y-6">
        <div class="flex items-center gap-3">
          <div class="h-px flex-1 bg-border"></div>
          <h2 class="text-sm font-bold uppercase tracking-widest text-brand-accent">Provider Game</h2>
          <div class="h-px flex-1 bg-border"></div>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-8 gap-2 md:gap-3">
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">Pragmatic Play</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">PG Soft</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">Habanero</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">Microgaming</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">Playtech</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">Evolution</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">JILI</span>
          </div>
                    <div class="aspect-[3/2] bg-bg-card border border-border rounded-lg p-1.5 md:p-2 flex items-center justify-center hover:border-brand-primary/30 hover:shadow-glow transition-all">
            <span class="text-[9px] md:text-[10px] font-bold text-text-onDark/50 text-center">CQ9</span>
          </div>
                  </div>
      </div>

      <div class="mt-8 space-y-4">
        <h2 class="text-sm font-bold uppercase tracking-widest text-brand-accent">Pertanyaan yang Sering Diajukan</h2>
        <div class="space-y-2">
                    <details class="group bg-bg-card border border-border rounded-lg px-4 py-3">
            <summary class="cursor-pointer list-none flex items-center justify-between gap-3 text-sm font-semibold text-text-onDark">
              <span>Bagaimana cara daftar akun di %%DOMAIN%%?</span>
              <span class="text-brand-accent group-open:rotate-45 transition-transform text-lg leading-none">+</span>
            </summary>
            <p class="mt-2 text-sm text-text-onDark/60 leading-relaxed">Klik tombol &quot;Daftar&quot;, isi data diri singkat, lalu verifikasi lewat nomor HP atau email. Prosesnya cuma butuh beberapa menit.</p>
          </details>
                    <details class="group bg-bg-card border border-border rounded-lg px-4 py-3">
            <summary class="cursor-pointer list-none flex items-center justify-between gap-3 text-sm font-semibold text-text-onDark">
              <span>Berapa minimal deposit di %%DOMAIN%%?</span>
              <span class="text-brand-accent group-open:rotate-45 transition-transform text-lg leading-none">+</span>
            </summary>
            <p class="mt-2 text-sm text-text-onDark/60 leading-relaxed">Deposit minimal mulai dari Rp 10.000, mendukung berbagai metode pembayaran populer dan diproses otomatis dalam hitungan detik.</p>
          </details>
                    <details class="group bg-bg-card border border-border rounded-lg px-4 py-3">
            <summary class="cursor-pointer list-none flex items-center justify-between gap-3 text-sm font-semibold text-text-onDark">
              <span>%%DOMAIN%% aman dan terpercaya tidak?</span>
              <span class="text-brand-accent group-open:rotate-45 transition-transform text-lg leading-none">+</span>
            </summary>
            <p class="mt-2 text-sm text-text-onDark/60 leading-relaxed">Kami menerapkan enkripsi data standar tinggi dan sistem monitoring 24/7 untuk melindungi setiap transaksi dan data pribadi member.</p>
          </details>
                    <details class="group bg-bg-card border border-border rounded-lg px-4 py-3">
            <summary class="cursor-pointer list-none flex items-center justify-between gap-3 text-sm font-semibold text-text-onDark">
              <span>Apakah ada layanan CS 24 jam?</span>
              <span class="text-brand-accent group-open:rotate-45 transition-transform text-lg leading-none">+</span>
            </summary>
            <p class="mt-2 text-sm text-text-onDark/60 leading-relaxed">Ada. Tim CS kami siap membantu lewat WhatsApp dan Telegram kapan saja, setiap hari tanpa libur.</p>
          </details>
                    <details class="group bg-bg-card border border-border rounded-lg px-4 py-3">
            <summary class="cursor-pointer list-none flex items-center justify-between gap-3 text-sm font-semibold text-text-onDark">
              <span>Bagaimana proses penarikan dana?</span>
              <span class="text-brand-accent group-open:rotate-45 transition-transform text-lg leading-none">+</span>
            </summary>
            <p class="mt-2 text-sm text-text-onDark/60 leading-relaxed">Penarikan diproses otomatis, biasanya selesai dalam hitungan menit setelah permintaan disetujui sistem.</p>
          </details>
                  </div>
      </div>

            <div class="mt-8 space-y-4">
        <h2 class="text-sm font-bold uppercase tracking-widest text-brand-accent">Artikel Terbaru</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <a href="/%%SITE%%-aman" class="bg-bg-card border border-border rounded-lg overflow-hidden hover:border-brand-primary/40 transition-all">
            <img src="%%BANNER1%%" alt="%%SITE%% Aman | Biru Tenang Memberi Rasa Percaya" width="320" height="240" loading="lazy" decoding="async" class="aspect-[4/3] object-cover w-full">
            <span class="block p-3 text-xs font-semibold text-text-onDark">%%SITE%% Aman | Biru Tenang Memberi Rasa Percaya</span>
          </a>
                    <a href="/%%SITE%%-turnover" class="bg-bg-card border border-border rounded-lg overflow-hidden hover:border-brand-primary/40 transition-all">
            <img src="%%BANNER1%%" alt="%%SITE%% Turnover | Daya Tarik Keberuntungan Cuan" width="320" height="240" loading="lazy" decoding="async" class="aspect-[4/3] object-cover w-full">
            <span class="block p-3 text-xs font-semibold text-text-onDark">%%SITE%% Turnover | Daya Tarik Keberuntungan Cuan</span>
          </a>
                  </div>
      </div>
            
    </section>
  </div>
</main>

<footer class="bg-bg-surface border-t border-white/5 mt-16">
  <div class="max-w-[1200px] mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="space-y-4">
        <img src="%%LOGO%%" alt="%%DOMAIN%%" width="180" height="58" loading="lazy" decoding="async" class="h-10 w-auto">
        <p class="text-sm text-text-onDark/70 leading-relaxed">%%DOMAIN%% adalah platform hiburan online terpercaya dengan RTP Live tertinggi, menghadirkan pengalaman gaming yang aman dan adil bagi para pemain.</p>
      </div>
      <div class="space-y-4 md:text-right">
        <h3 class="text-sm font-bold text-text-onDark uppercase tracking-wider">Hubungi Kami</h3>
        <div class="space-y-3 flex flex-col md:items-end">
          <a href="%%CTA_WA%%" target="_blank" rel="noopener" class="flex items-center gap-3 text-sm text-text-onDark/70 hover:text-brand-accent transition-colors">
            <span class="w-9 h-9 rounded-lg bg-brand-primary/10 border border-brand-primary/20 flex items-center justify-center text-brand-accent">W</span>
            <span>WhatsApp</span>
          </a>
          <a href="%%CTA_TELE%%" target="_blank" rel="noopener" class="flex items-center gap-3 text-sm text-text-onDark/70 hover:text-brand-accent transition-colors">
            <span class="w-9 h-9 rounded-lg bg-brand-primary/10 border border-brand-primary/20 flex items-center justify-center text-brand-accent">T</span>
            <span>Telegram</span>
          </a>
        </div>
      </div>
    </div>
    <nav class="border-t border-white/5 mt-8 pt-6 flex flex-wrap justify-center gap-2" aria-label="Halaman informasi">
      <a href="/" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Beranda</a>
            <a href="/?id=slot" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Slot</a>
            <a href="/?id=sportsbook" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Sportsbook</a>
            <a href="/?id=casino" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Casino</a>
            <a href="/?id=togel" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Togel</a>
            <a href="/?id=about-us" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Tentang Kami</a>
            <a href="/?id=contact-us" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Kontak</a>
            <a href="/?id=disclaimer" class="inline-flex items-center min-h-[44px] px-4 text-xs font-semibold text-text-onDark/70 hover:text-brand-accent border border-border rounded-lg bg-bg-card transition-all">Disclaimer</a>
          </nav>
    <div class="border-t border-white/5 mt-8 pt-6 text-center">
      <p class="text-xs text-text-onDark/40">&copy; 2026 <span class="text-brand-accent font-bold">%%DOMAIN%%</span>. Hak Cipta Dilindungi</p>
    </div>
    <div class="border-t border-white/5 pt-4 mt-4 text-center max-w-[800px] mx-auto">
      <p class="text-[11px] text-text-onDark/40 leading-relaxed"><strong>Peringatan Penting:</strong> Situs ini hanya ditujukan untuk pengguna berusia di atas 18 tahun. Mohon bermain secara bertanggung jawab dan pahami risiko finansial sebelum berpartisipasi. Ini adalah konten hiburan, tidak menjamin kemenangan.</p>
    </div>
  </div>
</footer>

</body>
</html>

HTMLPAGE;

$r = [
  '%%TITLE%%' => $TITLE, '%%H1%%' => $H1, '%%CONTENT%%' => $CONTENT, '%%DESCRIPTION%%' => $DESC,
  '%%CANONICAL%%' => $CANON, '%%HOME_URL%%' => $homeUrl, '%%HOME_URL_JSON%%' => addcslashes($homeUrl, '/'),
  '%%DOMAIN_URL%%' => $scheme . '://' . $domain, '%%DOMAIN%%' => $domain, '%%SITE%%' => $site,
  '%%ROBOTS%%' => $ROBOTS, '%%GSC_META%%' => $GSC, '%%AMP_URL%%' => $AMP,
  '%%BANNER1%%' => $B1, '%%BANNER1_URL%%' => $homeUrl . ltrim($B1, '/'),
  '%%BANNER1_URL_JSON%%' => addcslashes($homeUrl . ltrim($B1, '/'), '/'),
  '%%LOGO%%' => $LOGO, '%%LOGO_URL_JSON%%' => addcslashes($homeUrl . ltrim($LOGO, '/'), '/'),
  '%%FAVICON%%' => $FAVI, '%%CTA%%' => $CTA, '%%CTA_LOGIN%%' => $CTAL,
  '%%CTA_WA%%' => $CTAW, '%%CTA_TELE%%' => $CTAT, '%%DATE%%' => $DATE, '%%DATEISO%%' => $DATEISO,
];
echo str_replace(array_keys($r), array_values($r), $html);
