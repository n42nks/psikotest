
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem CAT Seleksi Perangkat Desa</title>
  <link rel="shortcut icon" href="<?php echo e(asset('img/logo_tok.png')); ?>" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <style>
    :root {
      --navy: #0b2f69;
      --navy-deep: #082552;
      --blue: #114ab8;
      --blue-soft: #edf4ff;
      --orange: #ff7d10;
      --orange-deep: #f36b00;
      --text: #17315f;
      --muted: #58709c;
      --line: #d8e4fb;
      --surface: #f7faff;
    }

    html, body {
      height: 100%;
    }

    body {
      min-height: 100vh;
      font-family: "Plus Jakarta Sans", sans-serif;
      color: var(--text);
      background:
        radial-gradient(circle at top left, rgba(17, 74, 184, 0.08), transparent 28%),
        linear-gradient(180deg, #f7faff 0%, #eef4ff 48%, #e8f0ff 100%);
      overflow-x: hidden;
    }

    .main-header {
      background: linear-gradient(90deg, var(--navy-deep), var(--navy));
      border-bottom: 0;
      box-shadow: 0 10px 30px rgba(11, 47, 105, 0.18);
    }

    .brand-cluster {
      display: flex;
      align-items: center;
      gap: 12px;
      color: #fff;
      font-weight: 800;
      letter-spacing: 0.02em;
      text-transform: uppercase;
    }

    .brand-mark {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      background: linear-gradient(135deg, #ffffff 0%, #d8e7ff 100%);
      color: var(--orange);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.8);
    }

    .brand-copy {
      line-height: 1.05;
      font-size: 12px;
    }

    .brand-copy strong {
      display: block;
      font-size: 15px;
    }

    .login-pill {
      border: 1px solid rgba(255, 255, 255, 0.45);
      border-radius: 12px;
      padding: 10px 16px;
      color: #fff !important;
      font-weight: 700;
      transition: 0.2s ease;
    }

    .login-pill:hover {
      background: rgba(255, 255, 255, 0.08);
    }

    .content-wrapper {
      background: transparent;
    }

    .wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .hero-wrap {
      position: relative;
      overflow: hidden;
      padding: 22px 0 8px;
      background:
        radial-gradient(circle at 8% 15%, rgba(17, 74, 184, 0.1) 0, rgba(17, 74, 184, 0.1) 2px, transparent 2px) 0 0/12px 12px,
        linear-gradient(120deg, rgba(255, 255, 255, 0.98), rgba(240, 246, 255, 0.93));
      border-bottom: 1px solid rgba(17, 74, 184, 0.08);
    }

    .hero-wrap::before {
      content: "";
      position: absolute;
      right: -120px;
      top: 40px;
      width: 380px;
      height: 380px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(17, 74, 184, 0.12), rgba(17, 74, 184, 0));
      filter: blur(6px);
    }

    .hero-text {
      padding: 8px 0;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
      margin-bottom: 14px;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--blue), #185fe2);
      color: #fff;
      font-weight: 800;
      font-size: 13px;
      text-transform: uppercase;
      box-shadow: 0 12px 25px rgba(17, 74, 184, 0.2);
    }

    .hero-title {
      max-width: 540px;
      margin: 0 0 10px;
      font-size: clamp(2rem, 3.5vw, 3.25rem);
      line-height: 1.02;
      font-weight: 800;
      letter-spacing: -0.04em;
      color: var(--navy);
    }

    .hero-title span {
      display: block;
      color: var(--orange);
    }

    .hero-desc {
      max-width: 510px;
      margin-bottom: 18px;
      font-size: 1rem;
      line-height: 1.65;
      color: var(--muted);
    }

    .feature-list {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 14px;
      margin-bottom: 18px;
    }

    .feature-item {
      display: flex;
      gap: 14px;
      align-items: flex-start;
    }

    .feature-icon {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      flex: 0 0 auto;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--navy);
      color: #fff;
      box-shadow: 0 10px 20px rgba(11, 47, 105, 0.15);
    }

    .feature-title {
      margin: 3px 0 4px;
      font-size: 15px;
      font-weight: 800;
      color: var(--navy);
    }

    .feature-copy {
      margin: 0;
      font-size: 13px;
      line-height: 1.6;
      color: var(--muted);
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
    }

    .btn-hero-primary,
    .btn-hero-secondary {
      min-width: 198px;
      padding: 12px 18px;
      border-radius: 12px;
      font-weight: 800;
      font-size: 15px;
      box-shadow: 0 14px 30px rgba(11, 47, 105, 0.08);
    }

    .btn-hero-primary {
      color: #fff;
      background: linear-gradient(180deg, #ff962b, var(--orange-deep));
      border: 0;
    }

    .btn-hero-secondary {
      color: var(--blue);
      background: rgba(255, 255, 255, 0.9);
      border: 1px solid var(--line);
    }

    .hero-visual {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 360px;
    }

    .scene {
      position: relative;
      width: min(100%, 600px);
      height: 350px;
      transform: scale(0.92);
      transform-origin: center center;
    }

    .cloud {
      position: absolute;
      background: rgba(205, 225, 255, 0.7);
      border-radius: 999px;
      filter: blur(2px);
    }

    .cloud::before,
    .cloud::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      background: inherit;
    }

    .cloud-1 {
      top: 44px;
      left: 38px;
      width: 110px;
      height: 32px;
    }

    .cloud-1::before {
      width: 36px;
      height: 36px;
      left: 12px;
      top: -16px;
    }

    .cloud-1::after {
      width: 42px;
      height: 42px;
      right: 16px;
      top: -20px;
    }

    .cloud-2 {
      top: 88px;
      right: 40px;
      width: 142px;
      height: 36px;
      opacity: 0.7;
    }

    .cloud-2::before {
      width: 40px;
      height: 40px;
      left: 18px;
      top: -16px;
    }

    .cloud-2::after {
      width: 48px;
      height: 48px;
      right: 22px;
      top: -20px;
    }

    .monitor {
      position: absolute;
      left: 54px;
      top: 18px;
      width: 350px;
      height: 224px;
      transform: rotate(-4deg);
      border-radius: 18px 18px 16px 16px;
      background: linear-gradient(180deg, #2e4b7f, #1d3158);
      box-shadow: 0 26px 44px rgba(31, 54, 97, 0.26);
      z-index: 4;
    }

    .monitor-screen {
      position: absolute;
      inset: 12px;
      border-radius: 12px;
      background: linear-gradient(180deg, #ffffff, #f2f6ff);
      overflow: hidden;
      display: grid;
      grid-template-columns: 1.6fr 0.72fr;
    }

    .screen-topbar {
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      height: 20px;
      background: #f4f7ff;
      border-bottom: 1px solid #e6eeff;
    }

    .screen-topbar::before {
      content: "";
      position: absolute;
      left: 12px;
      top: 7px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #ff8d7f;
      box-shadow: 11px 0 0 #ffd66d, 22px 0 0 #7fd49b;
    }

    .question-panel {
      padding: 36px 16px 14px;
    }

    .question-line {
      height: 8px;
      margin-bottom: 12px;
      border-radius: 999px;
      background: #dbe6fb;
    }

    .question-line.short {
      width: 68%;
    }

    .question-line.mid {
      width: 82%;
    }

    .question-row {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 14px;
      align-items: center;
      margin-top: 16px;
    }

    .choices {
      display: flex;
      gap: 9px;
    }

    .choice-dot {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      border: 2px solid #adc2eb;
      color: var(--navy);
      font-size: 11px;
      font-weight: 800;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #fff;
    }

    .profile-panel {
      padding: 28px 14px 14px;
      border-left: 1px solid #e8efff;
      background: linear-gradient(180deg, #f7faff, #edf3ff);
    }

    .profile-tab {
      position: absolute;
      top: 0;
      right: 0;
      width: 88px;
      height: 20px;
      background: linear-gradient(90deg, #2f63da, #104bbd);
      border-bottom-left-radius: 10px;
    }

    .avatar {
      width: 60px;
      height: 60px;
      margin: 0 auto 16px;
      border-radius: 50%;
      background: linear-gradient(180deg, #eff5ff, #d9e8ff);
      color: #2961d3;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
    }

    .profile-line {
      height: 8px;
      border-radius: 999px;
      margin-bottom: 10px;
      background: #c9daf8;
    }

    .monitor-stand {
      position: absolute;
      left: 178px;
      top: 230px;
      width: 95px;
      height: 78px;
      z-index: 3;
    }

    .monitor-stand::before {
      content: "";
      position: absolute;
      left: 35px;
      top: 0;
      width: 24px;
      height: 46px;
      background: linear-gradient(180deg, #b8c7e6, #96aed7);
      clip-path: polygon(22% 0, 78% 0, 100% 100%, 0 100%);
    }

    .monitor-stand::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 95px;
      height: 18px;
      border-radius: 50%;
      background: linear-gradient(180deg, #ced9ed, #a9bddf);
      box-shadow: 0 8px 16px rgba(76, 108, 160, 0.18);
    }

    .keyboard {
      position: absolute;
      left: 132px;
      bottom: 35px;
      width: 180px;
      height: 42px;
      border-radius: 10px;
      transform: skew(-18deg);
      background: linear-gradient(180deg, #ffffff, #dce7f9);
      box-shadow: 0 18px 26px rgba(112, 139, 189, 0.2);
      z-index: 2;
    }

    .keyboard::before {
      content: "";
      position: absolute;
      left: 12px;
      right: 12px;
      top: 10px;
      bottom: 11px;
      background:
        repeating-linear-gradient(90deg, rgba(161, 183, 222, 0.9) 0 9px, transparent 9px 12px),
        repeating-linear-gradient(180deg, rgba(161, 183, 222, 0.85) 0 4px, transparent 4px 10px);
      opacity: 0.55;
      border-radius: 6px;
    }

    .mouse {
      position: absolute;
      left: 344px;
      bottom: 32px;
      width: 44px;
      height: 62px;
      border-radius: 50% 50% 46% 46%;
      background: linear-gradient(180deg, #ffffff, #dfe9fb);
      box-shadow: 0 18px 26px rgba(112, 139, 189, 0.2);
      z-index: 2;
    }

    .mouse::before {
      content: "";
      position: absolute;
      left: 21px;
      top: 13px;
      width: 2px;
      height: 10px;
      border-radius: 999px;
      background: #aec0e0;
    }

    .building {
      position: absolute;
      right: 14px;
      bottom: 40px;
      width: 126px;
      height: 140px;
      z-index: 3;
    }

    .flag {
      position: absolute;
      right: 95px;
      top: -10px;
      width: 4px;
      height: 56px;
      background: #6b84ae;
    }

    .flag::before,
    .flag::after {
      content: "";
      position: absolute;
      left: 4px;
      width: 24px;
      height: 12px;
    }

    .flag::before {
      top: 4px;
      background: #ff6138;
      border-top-right-radius: 4px;
    }

    .flag::after {
      top: 16px;
      background: #ffffff;
      border-bottom-right-radius: 4px;
      box-shadow: 0 0 0 1px rgba(107, 132, 174, 0.1);
    }

    .building-roof {
      position: absolute;
      left: 4px;
      right: 4px;
      top: 10px;
      height: 40px;
      background: linear-gradient(180deg, #5c7ec1, #35548f);
      clip-path: polygon(50% 0, 100% 58%, 100% 100%, 0 100%, 0 58%);
    }

    .building-body {
      position: absolute;
      left: 12px;
      right: 12px;
      top: 42px;
      bottom: 0;
      border-radius: 8px 8px 0 0;
      background: linear-gradient(180deg, #ffffff, #e2ecff);
      border: 2px solid #9cb6e7;
      box-shadow: 0 16px 24px rgba(104, 131, 182, 0.12);
    }

    .building-sign {
      position: absolute;
      left: 22px;
      right: 22px;
      top: 20px;
      padding: 7px 6px;
      border-radius: 6px;
      text-align: center;
      background: #f4f8ff;
      border: 2px solid #90ace2;
      color: var(--blue);
      font-size: 10px;
      font-weight: 800;
      line-height: 1.15;
      letter-spacing: 0.04em;
    }

    .door {
      position: absolute;
      left: 48px;
      bottom: 0;
      width: 24px;
      height: 44px;
      border-radius: 6px 6px 0 0;
      background: linear-gradient(180deg, #9cb6e7, #6f8fcf);
    }

    .window {
      position: absolute;
      width: 18px;
      height: 22px;
      border-radius: 4px;
      background: #c8daf8;
      border: 2px solid #96afe2;
    }

    .window.left {
      left: 20px;
      top: 66px;
    }

    .window.right {
      right: 20px;
      top: 66px;
    }

    .tree {
      position: absolute;
      right: 116px;
      bottom: 44px;
      width: 90px;
      height: 132px;
      z-index: 1;
    }

    .tree::before {
      content: "";
      position: absolute;
      left: 34px;
      bottom: 0;
      width: 14px;
      height: 44px;
      border-radius: 10px;
      background: #9b7b55;
    }

    .tree::after {
      content: "";
      position: absolute;
      inset: 0;
      border-radius: 46% 54% 42% 58%;
      background: radial-gradient(circle at 35% 30%, #d7f4ff, #87b8db 55%, #6498c4 100%);
      box-shadow: 0 18px 24px rgba(117, 152, 198, 0.16);
    }

    .ground {
      position: absolute;
      inset: auto 20px 18px 20px;
      height: 56px;
      border-radius: 50%;
      background: linear-gradient(180deg, rgba(187, 208, 245, 0), rgba(170, 196, 238, 0.45));
      z-index: 0;
    }

    .section-title {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 16px;
      margin: 4px 0 14px;
      font-size: 1.55rem;
      font-weight: 800;
      color: var(--navy);
    }

    .section-title::before,
    .section-title::after {
      content: "";
      width: 40px;
      height: 2px;
      background: linear-gradient(90deg, transparent, #bed0f5, transparent);
    }

    .info-card {
      height: 100%;
      border: 1px solid rgba(152, 181, 235, 0.35);
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.88);
      box-shadow: 0 18px 40px rgba(116, 146, 199, 0.08);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .info-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 24px 44px rgba(116, 146, 199, 0.14);
    }

    .info-card .card-body {
      display: flex;
      gap: 16px;
      align-items: center;
      padding: 20px 18px;
    }

    .info-icon {
      width: 56px;
      height: 56px;
      border-radius: 14px;
      background: linear-gradient(180deg, #eff5ff, #dfeaff);
      color: var(--blue);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      flex: 0 0 auto;
    }

    .info-title {
      margin: 0 0 6px;
      font-size: 18px;
      font-weight: 800;
      color: var(--navy);
    }

    .info-copy {
      margin: 0;
      color: var(--muted);
      line-height: 1.65;
      font-size: 14px;
    }

    .main-footer {
      margin-top: 8px;
      padding: 0;
      border-top: 0;
      color: #fff;
      background: linear-gradient(180deg, var(--navy), var(--navy-deep));
    }

    .footer-top {
      padding: 16px 0 10px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .footer-title {
      margin-bottom: 8px;
      font-size: 16px;
      font-weight: 800;
    }

    .footer-copy,
    .footer-link,
    .footer-meta {
      color: rgba(255, 255, 255, 0.82);
      line-height: 1.55;
      font-size: 13px;
    }

    .footer-link {
      display: block;
      margin-bottom: 6px;
    }

    .support-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.35);
      color: #fff !important;
      font-weight: 700;
    }

    .footer-bottom {
      padding: 10px 0 14px;
      font-size: 13px;
    }

    .footer-bottom-links a {
      color: rgba(255, 255, 255, 0.82);
      margin-left: 18px;
    }

    .dual-logo {
      display: flex;
      align-items: center;
      gap: 18px;
      flex-wrap: wrap;
    }

    .dual-logo img {
      display: block;
      height: auto;
      object-fit: contain;
    }

    .nav-logo-atc {
      width: 168px;
    }

    .nav-logo-asia {
      width: 178px;
    }

    .footer-logos {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
      margin-bottom: 10px;
    }

    .footer-logo-atc {
      width: 152px;
    }

    .footer-logo-asia {
      width: 158px;
    }

    .viewport-shell {
      flex: 1 0 auto;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .compact-grid .mb-4 {
      margin-bottom: 12px !important;
    }

    .compact-grid .info-card .card-body {
      padding: 16px 16px;
    }

    .compact-grid .info-title {
      font-size: 16px;
      margin-bottom: 4px;
    }

    .compact-grid .info-copy {
      font-size: 13px;
      line-height: 1.5;
    }

    @media (max-width: 991.98px) {
      body {
        overflow-y: auto;
      }

      .feature-list {
        grid-template-columns: 1fr;
      }

      .hero-visual {
        min-height: 320px;
        margin-top: 8px;
      }

      .scene {
        transform: scale(0.82);
      }

      .dual-logo {
        gap: 12px;
      }

      .nav-logo-atc {
        width: 146px;
      }

      .nav-logo-asia {
        width: 148px;
      }
    }

    @media (max-width: 767.98px) {
      .wrapper {
        min-height: auto;
      }

      .hero-wrap {
        padding-top: 20px;
      }

      .hero-title {
        font-size: 2rem;
      }

      .hero-desc {
        font-size: 1rem;
      }

      .hero-actions .btn {
        width: 100%;
      }

      .section-title {
        font-size: 1.5rem;
      }

      .scene {
        height: 300px;
        transform: scale(0.68);
        transform-origin: center top;
      }

      .dual-logo,
      .footer-logos {
        justify-content: center;
      }

      .nav-logo-atc {
        width: 136px;
      }

      .nav-logo-asia {
        width: 138px;
      }

      .footer-logo-atc {
        width: 130px;
      }

      .footer-logo-asia {
        width: 136px;
      }

      .footer-bottom,
      .footer-bottom-links {
        text-align: center !important;
      }

      .footer-bottom-links a {
        margin: 0 10px;
      }
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand-md navbar-dark">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <i class="fas fa-bars mr-3"></i>
          <span class="dual-logo">
            <img src="<?php echo e(asset('img/atc_putih.png')); ?>" alt="Asia Training Center" class="nav-logo-atc">
            <img src="<?php echo e(asset('img/asia-putih.png')); ?>" alt="Institut Asia" class="nav-logo-asia">
          </span>
        </a>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item">
            <a class="nav-link login-pill" href="<?php echo e(url('/pendaftar-login')); ?>">
              <i class="far fa-user mr-2"></i>Login
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper viewport-shell">
      <section class="hero-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-text">
                <span class="eyebrow">Selamat Datang</span>
                <h1 class="hero-title">
                  Sistem CAT Seleksi
                  <span>Perangkat Desa</span>
                </h1>
                <p class="hero-desc">
                  Seleksi Perangkat Desa yang transparan, objektif dan akuntabel dengan sistem Computer Assisted Test (CAT).
                </p>

                <div class="feature-list">
                  <div class="feature-item">
                    <span class="feature-icon"><i class="fas fa-shield-heart"></i></span>
                    <div>
                      <h3 class="feature-title">Transparan</h3>
                      <p class="feature-copy">Proses seleksi terbuka dan dapat dipertanggungjawabkan.</p>
                    </div>
                  </div>
                  <div class="feature-item">
                    <span class="feature-icon"><i class="fas fa-crosshairs"></i></span>
                    <div>
                      <h3 class="feature-title">Objektif</h3>
                      <p class="feature-copy">Penilaian berbasis komputer tanpa intervensi manusia.</p>
                    </div>
                  </div>
                  <div class="feature-item">
                    <span class="feature-icon"><i class="fas fa-lock"></i></span>
                    <div>
                      <h3 class="feature-title">Aman</h3>
                      <p class="feature-copy">Sistem terjaga kerahasiaan dan keamanannya secara menyeluruh.</p>
                    </div>
                  </div>
                </div>

                <div class="hero-actions">
                  <a href="<?php echo e(url('/pendaftar-login')); ?>" class="btn btn-hero-primary">
                    <i class="fas fa-user-lock mr-2"></i>Login ke Sistem CAT
                  </a>
                  <a href="<?php echo e(url('daftarsiswa')); ?>" class="btn btn-hero-secondary">
                    <i class="far fa-file-lines mr-2"></i>Pendaftaran Peserta
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="hero-visual">
                <div class="scene">
                  <div class="cloud cloud-1"></div>
                  <div class="cloud cloud-2"></div>
                  <div class="ground"></div>
                  <div class="tree"></div>
                  <div class="building">
                    <div class="flag"></div>
                    <div class="building-roof"></div>
                    <div class="building-body">
                      <div class="building-sign">KANTOR<br>DESA</div>
                      <div class="window left"></div>
                      <div class="window right"></div>
                      <div class="door"></div>
                    </div>
                  </div>
                  <div class="monitor">
                    <div class="profile-tab"></div>
                    <div class="monitor-screen">
                      <div class="screen-topbar"></div>
                      <div class="question-panel">
                        <div class="question-line mid"></div>
                        <div class="question-line short"></div>
                        <div class="question-row">
                          <div class="question-line"></div>
                          <div class="choices">
                            <span class="choice-dot">A</span>
                            <span class="choice-dot">B</span>
                            <span class="choice-dot">C</span>
                            <span class="choice-dot">D</span>
                          </div>
                        </div>
                        <div class="question-row">
                          <div class="question-line"></div>
                          <div class="choices">
                            <span class="choice-dot">A</span>
                            <span class="choice-dot">B</span>
                            <span class="choice-dot">C</span>
                            <span class="choice-dot">D</span>
                          </div>
                        </div>
                        <div class="question-row">
                          <div class="question-line"></div>
                          <div class="choices">
                            <span class="choice-dot">A</span>
                            <span class="choice-dot">B</span>
                            <span class="choice-dot">C</span>
                            <span class="choice-dot">D</span>
                          </div>
                        </div>
                      </div>
                      <div class="profile-panel">
                        <div class="avatar"><i class="fas fa-user"></i></div>
                        <div class="profile-line"></div>
                        <div class="profile-line" style="width: 84%;"></div>
                        <div class="profile-line" style="width: 78%;"></div>
                        <div class="profile-line" style="width: 70%; margin-top: 18px;"></div>
                        <div class="profile-line" style="width: 92%;"></div>
                        <div class="profile-line" style="width: 66%;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="monitor-stand"></div>
                  <div class="keyboard"></div>
                  <div class="mouse"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="content pt-2 pb-1">
        <div class="container">
          <h2 class="section-title">Informasi Seleksi</h2>
          <div class="row compact-grid">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card info-card">
                <div class="card-body">
                  <span class="info-icon"><i class="fas fa-calendar-days"></i></span>
                  <div>
                    <h3 class="info-title">Tahapan Seleksi</h3>
                    <p class="info-copy">Informasi lengkap tahapan seleksi perangkat desa.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card info-card">
                <div class="card-body">
                  <span class="info-icon"><i class="fas fa-users"></i></span>
                  <div>
                    <h3 class="info-title">Formasi yang Dibuka</h3>
                    <p class="info-copy">Daftar formasi dan kebutuhan perangkat desa.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card info-card">
                <div class="card-body">
                  <span class="info-icon"><i class="fas fa-file-alt"></i></span>
                  <div>
                    <h3 class="info-title">Persyaratan</h3>
                    <p class="info-copy">Persyaratan dan ketentuan seleksi perangkat desa.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card info-card">
                <div class="card-body">
                  <span class="info-icon"><i class="fas fa-bullhorn"></i></span>
                  <div>
                    <h3 class="info-title">Pengumuman</h3>
                    <p class="info-copy">Informasi dan pengumuman terbaru terkait seleksi.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="footer-logos">
                <img src="<?php echo e(asset('img/atc_putih.png')); ?>" alt="Asia Training Center" class="footer-logo-atc">
                <img src="<?php echo e(asset('img/asia-putih.png')); ?>" class="footer-logo-asia">
              </div>
              <div class="footer-title">Sistem CAT Seleksi Perangkat Desa</div>
              <p class="footer-copy mb-0">
                Solusi seleksi berbasis komputer untuk mewujudkan proses yang transparan, objektif dan akuntabel.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="footer-title">Kontak</div>
              <div class="footer-meta"><i class="fas fa-phone mr-2"></i>(0822) 5708 0011</div>
              <div class="footer-meta"><i class="fas fa-envelope mr-2"></i>rpl@asia.ac.id</div>
              <div class="footer-meta"><i class="fas fa-globe mr-2"></i>www.rpl.s2asia.ac.id</div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="footer-title">Support</div>
              <p class="footer-copy">Jika ada kendala saat menggunakan sistem, silakan hubungi tim support kami.</p>
              <a href="#" class="support-btn">
                <i class="fas fa-headset"></i>Hubungi Support
              </a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
              <div class="footer-title">Tautan</div>
              <a href="#" class="footer-link">Beranda</a>
              <a href="#" class="footer-link">Informasi Seleksi</a>
              <a href="#" class="footer-link">Login Sistem CAT</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-left text-center">
              <span class="footer-meta">&copy; <?php echo date('Y') ?> Asia Training Center. All rights reserved.</span>
            </div>
            <div class="col-md-6 text-md-right footer-bottom-links">
              <a href="#">Kebijakan Privasi</a>
              <a href="#">Syarat &amp; Ketentuan</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\psikotest\resources\views/frontend/landing.blade.php ENDPATH**/ ?>