<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @if (Route::has('login'))
        <div class="container-fluid bg-red-900 vh-100 d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <div class="card bg-light shadow-lg" style="width: 18rem; height: 11rem">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Cinema</h5>
                    <p class="card-subtitle text-muted mb-4">Mantenha seu cinema organizado.</p>
                    <h6 class="card-subtitle mb-2 text-center ">Bem vindo!</h6>
                    <div class="mb-2">
                        <nav class="d-flex justify-content-center">

                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-info me-2">Painel Inicial</a>

                                @else
                                    <a href="{{ route('login') }}" class="btn btn-outline-danger me-2">Entrar</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-danger">Cadastre-se</a>
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