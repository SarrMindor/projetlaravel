<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Compétitions Sportives</title>
    <!-- Inclure les fichiers CSS et JS ici -->
    
    <style>
        .navbar {
            background: #000;
            box-shadow: 0 5px 15px -10px #000;
            padding: 10px 20px;
        }

        .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #000;
            box-shadow: 0 0 0 0px #beddef, 0 0 0 0px #111;
            font-size: 64px;
            color: #beddef;
            line-height: 100px;
            text-align: center;
        }

        .nav-left, .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-right {
            justify-content: flex-end;
        }

        .item {
            color: #fff;
            font-size: 16px;
            font-weight: 800;
            text-decoration: none;
            text-transform: uppercase;
            font-family: sans-serif;
            padding: 10px 15px;
        }
        .item:hover {
            background:#fff;
            color:#000; 
        }

        .item form {
            display: inline;
        }

        .item button {
            background: none;
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: 800;
            text-transform: uppercase;
            cursor: pointer;
        }
        .item:hover {
            background:#fff;
            color:#000; 
        }

        @media all and (max-width: 800px) {
            .container-fluid {
                flex-direction: column;
                align-items: stretch;
            }

            .logo {
                order: 0;
                margin: 10px auto;
            }

            .nav-left, .nav-right {
                justify-content: center;
            }

            .item {
                text-align: center;
                border-bottom: 1px solid #111;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <!-- Barre de navigation principale -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="nav-left">
                    <a href="{{ route('home') }}" class="item">Accueil</a>
                    <a href="{{ route('competitions.index') }}" class="item">Compétitions</a>
                    <a href="{{ route('teams.index') }}" class="item">Équipes</a>
                    <a href="{{ route('players.index') }}" class="item">Joueurs</a>
                </div>
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Services" style="width:100%; height:100%; object-fit:cover;">
                </a>
                <div class="nav-right">
                    <a href="{{ route('results.index') }}" class="item">Résultats</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="item">Dashboard</a>
                        <a href="{{ route('profile.edit') }}" class="item">Profil</a>
                        <form action="{{ route('logout') }}" method="POST" class="item">
                            @csrf
                            <button type="submit">Déconnexion</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="item">Connexion</a>
                        <a href="{{ route('register') }}" class="item">Inscription</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    

</body>
</html>

