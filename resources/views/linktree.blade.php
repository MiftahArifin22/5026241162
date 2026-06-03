<!doctype html>
<html lang="en">
  <head>
    <title>Linktree IE Fair ITS</title>
    <meta charset="utf-8" />

    <!-- Responsive viewport untuk memastikan tampilan optimal di mobile & desktop -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap 4 CSS sebagai framework utama untuk layout -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- Bootstrap Icons untuk kebutuhan icon berbasis vector -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />

    <!-- Font Link Sans Product berdasarkan inspect dari Lintree IE Fair -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- /*ini belajar javascript*/ -->
    <script>
      function showme() {
        // alert("Halo selamat siang");
        Swal.fire({
          title: "Goodjob",
          text: "you clicked on the button",
          icon: "success",
          confirmButtonText: "Cool",
        });
      }
      function changeName(newText) {
        const element = document.getElementById("intro");
        if (element) {
          element.innerText = newText;
        }
      }
      function changeStyle() {
        const element = document.getElementById("tombol");
        element.style.color = "red";
        element.style.background = "yellow";
      }
      function sweetAlert() {
        Swal.fire({
          title: "Hello!",
          text: "This is a SweetAlert example.",
          icon: "success",
          confirmButtonText: "Cool",
        });
      }
    </script>

    <style>
      /* GLOBAL STYLE: mengatur background, font, dan warna dasar */
      body {
        background: #1f6f3d;
        font-family: "Inter", sans-serif;
        color: white;
        text-dark: #1a1a1a;
      }
      /* WRAPPER UTAMA:
       Membatasi lebar konten (max 500px) dan memusatkan layout seperti Linktree */
      .page-wrapper {
        width: 100%;
        max-width: 500px;
        margin: 40px auto;
        background: #2fa24d;
        border-radius: 30px;
        padding-bottom: 30px;
      }
      /* NAVBAR:
       Menggunakan flexbox untuk distribusi kiri-kanan (logo & share button) */
      .navbar-custom {
        padding: 14px 28px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      /* NAV ICON:
       Container berbentuk lingkaran untuk icon navbar */
      .nav-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      /* NAV ICON IMAGE:
       Mengatur ukuran dan scaling gambar di dalam icon */
      .nav-icon img {
        width: 87px;
        height: 87px;
        object-fit: contain;
      }
      /* PROFILE SECTION:
       Container logo utama berbentuk lingkaran */
      .profile-img {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        background: white;
        margin: 10px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }
      /* PROFILE IMAGE:
       Menyesuaikan gambar agar memenuhi container */
      .profile-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      /* TITLE:
       Judul utama halaman (IE Fair ITS) */
      .title {
        font-size: 24px;
        font-weight: 800;
        text-align: center;
      }
      /* SUBTITLE:
       Deskripsi singkat di bawah judul */
      .subtitle {
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 15px;
      }
      /* SOCIAL ICONS CONTAINER:
       Menggunakan inline-flex agar width mengikuti konten dan tetap center */
      .social-icons {
        display: inline-flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
      }
      /* SOCIAL ICON IMAGE:
       Ukuran icon sosial media (Instagram, WhatsApp, dll) */
      .social-icons img {
        width: 34px;
        height: 34px;
        object-fit: contain;
      }
      /* SOCIAL WRAPPER:
       Wrapper untuk memastikan icon berada di tengah halaman */
      .social-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
      }
      /* LINK CARD:
       Komponen utama berupa tombol link (mirip Linktree button) */
      .link-card {
        width: 100%;
        height: 60px;
        max-width: 440px;
        margin: 12px auto;
        background: #fffbe6;
        color: black;
        border-radius: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 16px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0px 6px 0px black;
        transition: all 0.15s ease;
        padding: 0 16px;
        position: relative;
        /* Handling text overflow agar tetap satu baris */
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
      }
      .card-label {
        flex: 1;
        text-align: center;
        padding-left: 18px;
      }
      .showme-button {
        border: none;
        background: #1f6f3d;
        color: white;
        padding: 8px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        flex-shrink: 0;
        margin-right: 8px;
      }
      .showme-button:hover {
        opacity: 0.9;
      }
      .card-menu {
        font-size: 18px;
        flex-shrink: 0;
        width: 18px;
        text-align: center;
        cursor: pointer;
      }
      /* RESPONSIVE (MOBILE):
       Penyesuaian layout saat layar <768px */
      @media (max-width: 768px) {
        .page-wrapper {
          margin: 0;
          border-radius: 0;
        }

        .link-card {
          max-width: 100%;
        }
      }
      .cta-button {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 200px;
        margin: 30px auto 15px;
        padding: 15px 120px;
        background-color: #ffffff;
        color: #000;
        border: 1px solid #ddd;
        border-radius: 9999px;
        font-weight: bold;
        font-size: 16px;
        font-family: "LinkSans", sans-serif;
        white-space: nowrap;
        box-shadow: 0px 4px 8px #00000033;
      }
      .footer-links {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0px 4px;
        padding: 10px 12px 24px;
        font-size: 10px;
        font-weight: 500;
        color: #ffffff;
      }
      .footer-links a {
        color: #ffffff;
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <!-- PAGE WRAPPER: seluruh konten utama berada di dalam container ini -->
    <div class="page-wrapper">
      <!-- NAVBAR: berisi logo kiri dan tombol share kanan -->
      <div class="navbar-custom">
        <!-- LEFT ICON: logo Linktree / brand -->
        <div class="nav-icon">
          <img src="assets/img/LINKTREE.png" />
        </div>
        <!-- RIGHT ICON: tombol share -->
        <div class="nav-icon">
          <img src="assets/img/SHARE.png" />
        </div>
      </div>
      <!-- PROFILE SECTION: logo utama IE Fair -->
      <div class="profile-img">
        <img src="assets/img/Logo IE Fair.png" />
      </div>
      <!-- TITLE & SUBTITLE -->
      <h1 id="intro" onclick="changeName('SISTEM INFORMASI ITS')" class="title">
        IE Fair ITS
      </h1>
      <div id="tombol" onclick="changeStyle()" class="subtitle">
        INDUSTRIAL ENGINEERING FAIR HMTI ITS!
      </div>

      <!-- SOCIAL MEDIA SECTION -->
      <div class="social-wrapper">
        <div class="social-icons">
          <img src="assets/img/IG.png" alt="" />
          <img src="assets/img/WA.png" alt="" />
          <img src="assets/img/TIKTOK.png" alt="" />
          <img src="assets/img/X.png" alt="" />
        </div>
      </div>
      <!-- LINK BUTTONS: navigasi utama ke berbagai halaman -->
      <a
        href="https://docs.google.com/forms/d/e/1FAIpQLSci1feOYwfxB_WLmiywHtMniMcwTyTmlj06mCl78bM6s73c8w/closedform"
        class="link-card"
      >
        <span class="card-label">Merchandise 🛍️</span>
        <span class="card-menu">⋮</span>
      </a>
      <button class="btn btn-primary" onclick="showme()">Show me</button>
      <button
        class="btn btn-primary"
        onclick="changeName('SISTEM INFORMASI ITS')"
      >
        Change name
      </button>
      <button class="btn btn-primary" onclick="changeStyle()">
        Change Style
      </button>

      <a href="https://iegames.id/" class="link-card">
        <span class="card-label">REGISTRATION IE GAMES ‼️</span>
        <span class="card-menu">⋮</span>
      </a>
      <a
        href="https://drive.google.com/file/d/1WcVoSVYllWAPcb-El54-7xPhs98AKXSy/view"
        class="link-card"
      >
        <span class="card-label">Registration Guidebook 📚</span>
        <span class="card-menu">⋮</span>
      </a>
      <a href="https://intip.in/TwibbonRegistration/" class="link-card">
        <span class="card-label">Twibbon IE Games 21st Edition</span>
        <span class="card-menu">⋮</span>
      </a>
      <a
        href="https://chat.whatsapp.com/FD8FBmDNP276JnuniRd1SJ"
        class="link-card"
      >
        <span class="card-label">Information Community ✨</span>
        <span class="card-menu">⋮</span>
      </a>
      <!-- Join Linktree -->
      <a
        href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=photoismid"
        class="cta-button"
      >
        <span>Join IEGAMES21 on Linktree</span>
      </a>
      <div class="footer-links">
        <a href="#">Cookie Preferences</a>
        <span>·</span>
        <a href="#">Report</a>
        <span>·</span>
        <a href="#">Privacy</a>
        <span>·</span>
        <a href="#">Explore</a>
      </div>
    </div>
  </body>
</html>
