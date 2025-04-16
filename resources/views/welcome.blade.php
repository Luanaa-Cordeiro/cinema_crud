<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color:rgb(137, 26, 26); /* Fundo branco */
        }
        .card {
            border-radius: 15px;
        }
        .btn-custom {
            background-color: #6c757d;
            color: white;
        }
        .btn-custom:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    @if (Route::has('login'))
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
            <div class="card bg-light shadow-lg" style="width: 20rem;">
                <div class="card-body text-center">
                    <h4 class="card-title">Cinema</h4>
                    <h6 class="card-subtitle mt-2 mb-2">Bem-vindo!</h6>
                    <p class="card-subtitle text-muted mb-2">Mantenha seu cinema organizado.</p>
                
                    <div class="mb-2">
                        <nav class="d-flex flex-column align-items-center">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-custom mb-2">Painel Inicial</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-danger mb-2">Entrar</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-danger">Cadastre-se</a>
                                @endif
                            @endauth
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    @endif
</body>
</html>