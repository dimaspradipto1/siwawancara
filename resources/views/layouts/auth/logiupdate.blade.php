<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIWAWANCARA</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logouis.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logouis.png') }}">
    
    <style>
        html {
            font-size: 12.5px;
        }

        :root {
            --uis-green: #075f28;
            --uis-yellow: #f5a623;
            --bg-light: #f4f6f8;
            --text-dark: #1f2937;
            --text-gray: #4b5563;
            --border-color: #e5e7eb;
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            position: relative;
            background-color: var(--bg-light);
            background-image: radial-gradient(#cbd5e1 1.5px, transparent 1.5px);
            background-size: 24px 24px;
        }

        /* Full page background */
        .page-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: url("{{ asset('assets/img/gedung.png') }}") bottom right / cover no-repeat;
            opacity: 0.95;
        }

        .page-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(248, 250, 252, 0.98) 0%, rgba(248, 250, 252, 0.7) 45%, transparent 100%);
            z-index: -1;
        }

        /* Main Container */
        .main-wrapper {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 3%; /* Reduced padding */
            position: relative;
            z-index: 10;
        }

        .login-layout {
            display: flex;
            width: 100%;
            max-width: 1300px;
            align-items: center;
            gap: 3rem; /* Reduced gap */
        }

        /* Left Panel */
        .left-panel {
            flex: 1.2;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .badge-portal {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: transparent;
            border: 1px solid var(--uis-green);
            color: var(--uis-green);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            width: fit-content;
            margin-bottom: 1rem;
        }

        .left-panel h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
            color: var(--uis-green);
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
        }

        .left-panel h1 span {
            color: var(--uis-yellow);
        }

        .h1-underline {
            width: 80px;
            height: 4px;
            background-color: var(--uis-yellow);
            margin-bottom: 1.5rem;
            border-radius: 2px;
        }

        .left-panel p.subtitle {
            font-size: 1.1rem;
            color: #333;
            max-width: 95%;
            line-height: 1.5;
            margin-bottom: 2.5rem;
            font-weight: 500;
        }

        /* Steps */
        .steps-container {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin-bottom: 2.5rem;
            position: relative;
        }

        .steps-container::before {
            content: '';
            position: absolute;
            top: 1.92rem;
            left: 10%;
            right: 10%;
            border-top: 2px dashed var(--uis-green);
            z-index: -1;
        }

        .step-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            flex: 1;
            text-align: center;
            position: relative;
        }

        .step-item:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 1.68rem;
            right: -0.32rem;
            width: 0.64rem;
            height: 0.64rem;
            border-radius: 50%;
            z-index: 1;
        }
        
        .step-item:nth-child(1)::after, .step-item:nth-child(3)::after {
            background-color: var(--uis-green);
        }
        
        .step-item:nth-child(2)::after, .step-item:nth-child(4)::after {
            background-color: var(--uis-yellow);
        }

        .step-icon {
            width: 4rem;
            height: 4rem;
            background: #ffffff;
            border: none;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: var(--uis-green);
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            position: relative;
            z-index: 2;
        }

        .step-icon.active {
            border: 2px solid var(--uis-green);
        }

        .step-icon.active .check-badge {
            position: absolute;
            bottom: -5px;
            right: -5px;
            background: #f59e0b;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #fff;
        }

        .step-text {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.2;
        }

        /* Features Card */
        .features-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 1.5rem;
            display: flex;
            gap: 1.5rem;
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .feature-item {
            flex: 1;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem; /* Reduced gap */
            padding-right: 0.75rem;
        }
        
        .feature-item:not(:last-child) {
            border-right: 1px solid var(--border-color);
        }

        .feature-icon {
            width: 3.8rem;
            height: 3.8rem;
            background: rgba(7, 95, 40, 0.05);
            color: var(--uis-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }
        
        .feature-icon.yellow {
            background: rgba(245, 166, 35, 0.1);
            color: var(--uis-yellow);
        }

        .feature-item h4 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 2px;
        }

        .feature-item p {
            font-size: 0.7rem; /* Reduced from 0.8rem */
            color: var(--text-gray);
            margin: 0;
            line-height: 1.3;
        }

        /* Right Panel (Form) */
        .right-panel {
            flex: 0.9;
            max-width: 440px;
            padding: 2rem;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 15px 30px -10px rgba(0,0,0,0.15);
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 5;
        }

        .form-header {
            text-align: center;
            margin-bottom: 1.5rem; /* Reduced from 2rem */
        }
        
        .header-title-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 0.5rem; /* Reduced */
        }
        
        .header-title-container img {
            height: 35px; /* Reduced from 45px */
            margin: 0;
        }

        .header-title-container h2 {
            font-size: 0.9rem; /* Reduced from 1.1rem */
            font-weight: 700;
            color: var(--uis-green);
            margin: 0;
            text-transform: uppercase;
            text-align: left;
            line-height: 1.2;
        }

        .form-header h3 {
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 0.2rem;
            letter-spacing: -0.5px;
        }
        .form-header h3 .si { color: var(--uis-green); }
        .form-header h3 .wawancara { color: var(--uis-yellow); }

        .form-header p {
            color: var(--text-gray);
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }

        .badge-resmi-form {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(7, 95, 40, 0.2);
            background: rgba(7, 95, 40, 0.05);
            color: var(--uis-green);
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Role Tabs */
        .role-tabs {
            display: flex;
            gap: 8px; /* Reduced from 10px */
            margin-bottom: 1.5rem; /* Reduced from 2rem */
        }

        .role-tab {
            flex: 1;
            padding: 8px; /* Reduced from 10px */
            border: 1px solid var(--border-color);
            border-radius: 10px; /* Reduced radius */
            background: #ffffff;
            color: var(--text-gray);
            font-weight: 600;
            font-size: 0.8rem; /* Reduced */
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .role-tab.active {
            background: var(--uis-green);
            color: #ffffff;
            border-color: var(--uis-green);
            box-shadow: 0 4px 10px rgba(7, 95, 40, 0.2);
        }

        .role-tab:hover:not(.active) {
            border-color: var(--uis-green);
            color: var(--uis-green);
        }

        /* Form Inputs */
        .form-label {
            font-weight: 600;
            font-size: 0.75rem;
            color: var(--text-dark);
            margin-bottom: 4px;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 0.75rem;
        }

        .input-group-custom .icon-left {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 0.8rem;
        }

        .input-group-custom input {
            width: 100%;
            padding: 10px 12px 10px 32px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 0.8rem;
            color: var(--text-dark);
            transition: all 0.2s;
        }

        .input-group-custom input:focus {
            outline: none;
            border-color: var(--uis-green);
            box-shadow: 0 0 0 3px rgba(7, 95, 40, 0.1);
        }

        .input-group-custom .icon-right {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.25rem;
            font-size: 0.75rem;
        }

        .btn-primary-custom {
            background: var(--uis-green);
            color: #ffffff;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 10px rgba(7, 95, 40, 0.2);
        }

        .btn-primary-custom:hover {
            background: #054f21;
            transform: translateY(-1px);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #94a3b8;
            font-size: 0.75rem;
            margin: 0.75rem 0;
        }
        
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--border-color);
        }
        
        .divider::before { margin-right: 1em; }
        .divider::after { margin-left: 1em; }

        .btn-sso {
            background: #ffffff;
            color: var(--uis-green);
            border: 1px solid var(--uis-green);
            width: 100%;
            padding: 8px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .btn-sso:hover {
            background: rgba(7, 95, 40, 0.05);
        }

        .help-section {
            text-align: center;
            margin-top: 1.25rem; /* Reduced */
            font-size: 0.8rem; /* Reduced */
            color: var(--text-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .help-section a {
            color: var(--uis-green);
            font-weight: 600;
            text-decoration: none;
        }

        .security-badge {
            margin-top: 1.25rem;
            background: rgba(7, 95, 40, 0.05);
            border-radius: 8px;
            padding: 8px 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            border: 1px solid rgba(7, 95, 40, 0.1);
        }

        .security-badge i {
            color: var(--uis-green);
            font-size: 1.1rem;
        }

        .security-text h5 {
            margin: 0 0 2px 0;
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--uis-green);
        }
        
        .security-text p {
            margin: 0;
            font-size: 0.65rem;
            color: var(--text-gray);
            line-height: 1.2;
        }

        /* Footer */
        .footer {
            background: var(--uis-green);
            padding: 8px 2rem;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            width: 100%;
            position: relative;
            z-index: 10;
            margin-top: auto;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            position: absolute;
            left: 2rem;
        }
        
        .footer-logo img {
            height: 18px;
        }

        .bottom-waves {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 45vw;
            height: 25vh;
            z-index: 0;
            pointer-events: none;
        }
        
        .bottom-waves svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        @media (max-width: 1200px) and (min-width: 768px) {
            html {
                font-size: 8px; /* Scale down the desktop layout to perfectly fit a tablet */
            }
            body {
                overflow-y: auto !important;
            }
            .main-wrapper {
                height: auto;
                min-height: auto;
                padding: 4rem 2%;
            }
            .login-layout {
                gap: 2rem;
            }
            .right-panel {
                flex: 0 0 380px;
                max-width: 380px;
            }
            .bottom-waves {
                width: 70vw;
                height: 35vh;
            }
            .footer {
                position: relative;
                margin-top: auto;
            }
        }
        
        @media (max-width: 767px) {
            body {
                overflow-y: auto !important;
            }
            .main-wrapper {
                height: auto;
                min-height: auto; 
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
            .login-layout {
                justify-content: center;
                gap: 0;
            }
            .left-panel {
                display: none !important; /* Mobile keeps only the form */
            }
            .right-panel {
                flex: none;
                width: 100%;
                max-width: 420px;
                margin: 0 auto;
            }
            .page-overlay {
                width: 100%;
                background: rgba(255,255,255,0.85);
            }
            .bottom-waves {
                display: none;
            }
            .footer {
                position: relative;
                margin-top: auto;
                flex-direction: column;
                gap: 8px;
                padding: 15px;
                text-align: center;
            }
            .footer-logo {
                position: static;
                justify-content: center;
            }
            .footer-copyright {
                font-size: 0.85em;
            }
        }
    </style>
</head>
<body>
    <div class="page-background"></div>
    <div class="page-overlay"></div>

    @include('sweetalert::alert')
    
    <div class="main-wrapper">
        <div class="login-layout">
            <!-- Left Panel -->
            <div class="left-panel">
                <div class="badge-portal">
                    <i class="far fa-check-circle"></i> Portal Resmi Universitas Ibnu Sina
                </div>
                
                <h1>Seleksi Wawancara yang <br><span>Profesional, Cepat, dan <br>Terintegrasi.</span></h1>
                <div class="h1-underline"></div>
                
                <p class="subtitle">SIWAWANCARA membantu proses rekrutmen dan wawancara menjadi lebih terstruktur, transparan, efisien, dan aman dalam satu sistem terintegrasi.</p>
                
                <div class="steps-container">
                    <div class="step-item">
                        <div class="step-icon active" style="position: relative;">
                            <i class="far fa-calendar-alt"></i>
                            <div class="check-badge" style="position: absolute; bottom: -5px; right: -5px; background: var(--uis-yellow); color: white; border-radius: 50%; width: 20px; height: 20px; font-size: 0.7rem; display: flex; align-items: center; justify-content: center; border: 2px solid #fff;"><i class="fas fa-check"></i></div>
                        </div>
                        <div class="step-text">Penjadwalan<br>Otomatis</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon" style="position: relative;">
                            <i class="fas fa-clipboard-list" style="color: transparent; -webkit-text-stroke: 1.5px var(--uis-green);"></i>
                            <i class="fas fa-pen" style="position: absolute; bottom: 8px; right: 8px; font-size: 0.6rem; color: var(--uis-yellow); -webkit-text-stroke: 0;"></i>
                        </div>
                        <div class="step-text">Penilaian<br>Terstruktur</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon" style="position: relative;">
                            <i class="fas fa-user-friends" style="color: transparent; -webkit-text-stroke: 1.5px var(--uis-green);"></i>
                            <i class="fas fa-comment-dots" style="position: absolute; top: 8px; right: 6px; font-size: 0.8rem; color: var(--uis-green); -webkit-text-stroke: 0;"></i>
                        </div>
                        <div class="step-text">Wawancara<br>Terintegrasi</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon">
                            <i class="far fa-id-badge"></i>
                        </div>
                        <div class="step-text">Review<br>Dokumen</div>
                    </div>
                    <div class="step-item">
                        <div class="step-icon" style="position: relative;">
                            <i class="fas fa-shield-alt" style="color: transparent; -webkit-text-stroke: 1.5px var(--uis-green);"></i>
                            <i class="fas fa-check" style="position: absolute; font-size: 0.75rem; color: var(--uis-green); -webkit-text-stroke: 0;"></i>
                        </div>
                        <div class="step-text">Transparansi &<br>Akuntabilitas</div>
                    </div>
                </div>

                <div class="features-card">
                    <div class="feature-item">
                        <div class="feature-icon" style="position: relative;">
                            <i class="far fa-clock"></i>
                            <div style="position: absolute; bottom: 4px; right: 4px; background: #eef5f0; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bolt" style="color: var(--uis-yellow); font-size: 0.8rem;"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Penjadwalan otomatis</h4>
                            <p>Hemat waktu dan minim bentrok jadwal.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" style="position: relative;">
                            <i class="far fa-chart-bar"></i>
                            <i class="fas fa-arrow-up" style="position: absolute; top: 12px; right: 10px; font-size: 0.65rem; color: var(--uis-green);"></i>
                        </div>
                        <div>
                            <h4>Penilaian terstruktur</h4>
                            <p>Standar penilaian jelas, objektif, dan konsisten.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" style="position: relative;">
                            <i class="fas fa-shield-alt" style="color: transparent; -webkit-text-stroke: 1.5px var(--uis-green);"></i>
                            <i class="fas fa-lock" style="position: absolute; font-size: 0.75rem; color: var(--uis-green); -webkit-text-stroke: 0;"></i>
                        </div>
                        <div>
                            <h4>Akses aman & terintegrasi</h4>
                            <p>Data terlindungi dengan sistem terenkripsi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="right-panel">
                <div class="form-header">
                    <div class="header-title-container">
                        <img src="{{ asset('assets/img/logouis.png') }}" alt="Logo UIS" style="height: 45px; max-width: 100%; object-fit: contain;">
                    </div>
                    <h3><span class="si">SI</span><span class="wawancara">WAWANCARA</span></h3>
                    <p>Sistem Wawancara Universitas Ibnu Sina</p>
                    <div class="badge-resmi-form">
                        <i class="fas fa-shield-alt"></i> Portal Resmi
                    </div>
                </div>

                <form action="{{ route('loginproses') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Username / Email</label>
                        <div class="input-group-custom">
                            <i class="far fa-user icon-left"></i>
                            <input type="text" name="email" class="@error('email') is-invalid @enderror" placeholder="Masukkan username atau email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <div class="input-group-custom">
                            <i class="fas fa-lock icon-left"></i>
                            <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" placeholder="Masukkan kata sandi" required>
                            <i class="far fa-eye icon-right" id="togglePassword"></i>
                        </div>
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary-custom" style="margin-top: 1.5rem;">
                        Masuk <i class="fas fa-arrow-right"></i>
                    </button>
                </form>

                <div class="help-section">
                    <i class="fas fa-headset" style="color: var(--text-gray);"></i>
                    <span>Butuh bantuan?</span>
                    <a href="mailto:helpdesk@uis.ac.id">helpdesk@uis.ac.id</a>
                </div>

                <div class="security-badge">
                    <i class="fas fa-shield-alt"></i>
                    <div class="security-text">
                        <h5>Aman & terenkripsi</h5>
                        <p>Sistem kami menggunakan enkripsi untuk melindungi data Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-waves">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M 0 0 C 40 0, 70 100, 100 100 L 0 100 Z" fill="#f5a623" />
            <path d="M 0 35 C 30 35, 50 100, 70 100 L 0 100 Z" fill="#035b27" />
        </svg>
    </div>

    <footer class="footer">
        <div class="footer-logo">
            <img src="{{ asset('assets/img/logouis.png') }}" alt="Logo UIS">
            <span>UNIVERSITAS IBNU SINA</span>
        </div>
        <div class="footer-copyright">
            &copy; Universitas Ibnu Sina. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        // Role tab interaction
        const tabs = document.querySelectorAll('.role-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>
</body>
</html>
