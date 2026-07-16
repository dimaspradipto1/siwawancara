<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Siwawancara</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logouis.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logouis.png') }}">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            margin: 0;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(135deg, #021a0b 0%, #056B27 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }

        /* Decorative background elements */
        .bg-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 0;
        }
        .shape-1 {
            width: 400px;
            height: 400px;
            background: rgba(254, 216, 2, 0.15); /* UIS Yellow */
            top: -100px;
            left: -100px;
        }
        .shape-2 {
            width: 500px;
            height: 500px;
            background: rgba(5, 107, 39, 0.4); /* UIS Green */
            bottom: -150px;
            right: -150px;
        }

        .login-wrapper {
            display: flex;
            width: 100%;
            max-width: 1100px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            overflow: hidden;
            z-index: 2;
            box-shadow: 0 40px 80px rgba(0,0,0,0.4);
        }

        .login-animation {
            flex: 1.2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.02);
            border-right: 1px solid rgba(255,255,255,0.05);
        }

        .login-animation h2 {
            font-weight: 700;
            font-size: 2rem;
            margin-top: 20px;
            background: linear-gradient(135deg, #FED802 0%, #ffeba1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
        }

        .login-animation p {
            color: #e2e8f0;
            text-align: center;
            font-weight: 300;
        }

        .glass-form-container {
            flex: 1;
            padding: 50px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(255, 255, 255, 0.03);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header img {
            width: 80px;
            margin-bottom: 15px;
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.3));
        }

        .login-header h3 {
            font-weight: 700;
            font-size: 1.6rem;
            margin-bottom: 8px;
            letter-spacing: 1px;
            color: #ffffff;
        }

        .form-floating > label {
            color: #cbd5e1;
            padding-left: 1.25rem;
        }

        .form-control {
            background: rgba(5, 107, 39, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 12px;
            padding: 12px 20px;
            height: 3.5rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background: rgba(5, 107, 39, 0.4);
            border-color: #FED802;
            box-shadow: 0 0 15px rgba(254, 216, 2, 0.3);
            color: white;
        }

        .form-control::placeholder {
            color: transparent;
        }

        .input-group-text {
            border: none;
            background: transparent;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            color: #cbd5e1;
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .input-group-text:hover {
            color: #FED802;
        }

        .btn-login {
            background: #FED802; /* UIS Yellow Button */
            color: #021a0b;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 700;
            font-size: 1.05rem;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 15px;
            box-shadow: 0 10px 25px -5px rgba(254, 216, 2, 0.4);
            letter-spacing: 0.5px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            background: #ffeba1;
            box-shadow: 0 15px 30px -5px rgba(254, 216, 2, 0.6);
            color: #021a0b;
        }

        .form-check-label {
            color: #e2e8f0;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .form-check-input {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
        }
        
        .form-check-input:checked {
            background-color: #FED802;
            border-color: #FED802;
        }

        @media (max-width: 992px) {
            body {
                height: auto;
                min-height: 100vh;
                overflow-y: auto;
                padding: 20px 15px;
            }
            .login-wrapper {
                flex-direction: column;
                max-width: 500px;
                width: 100%;
                margin: 0 auto;
                height: auto; /* Allows wrapper to expand with content */
                overflow: hidden; /* Keeps border-radius intact */
            }
            .login-animation {
                padding: 25px 20px 15px;
                border-right: none;
                border-bottom: 1px solid rgba(255,255,255,0.05);
            }
            .glass-form-container {
                padding: 30px 25px 40px;
            }
            lottie-player {
                height: 220px !important;
            }
            .login-animation h2 {
                font-size: 1.6rem;
                margin-top: 10px;
            }
            .login-header h3 {
                font-size: 1.4rem;
            }
            .bg-shape {
                display: none; /* Hide decorative shapes on mobile to improve performance and prevent weird scroll */
            }
        }
    </style>
</head>
<body>
    <!-- Background Decor -->
    <div class="bg-shape shape-1"></div>
    <div class="bg-shape shape-2"></div>

    @include('sweetalert::alert')

    <div class="login-wrapper">
        <!-- Lottie Animation Section -->
        <div class="login-animation">
            <!-- Lottie Player for Web Animation -->
            <lottie-player 
                src="https://assets3.lottiefiles.com/packages/lf20_jcikwtux.json"  
                background="transparent"  
                speed="1"  
                style="width: 100%; height: 350px;"  
                loop  
                autoplay>
            </lottie-player>
            <h2>SIWAWANCARA</h2>
            <p>Portal Seleksi Calon Mahasiswa Baru</p>
        </div>

        <!-- Glassmorphism Form Section -->
        <div class="glass-form-container">
            <div class="login-header">
                <img src="{{ asset('assets/img/logouis.png') }}" alt="Logo UIS">
                <h3>Selamat Datang</h3>
            </div>

            <form action="{{ route('loginproses') }}" method="POST">
                @csrf
                <div class="form-floating mb-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback text-warning mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-4 position-relative">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    <span class="input-group-text" onclick="togglePassword()">
                        <i class="far fa-eye" id="toggleIcon"></i>
                    </span>
                    @error('password')
                        <div class="invalid-feedback text-warning mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-login">Masuk ke Portal</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
