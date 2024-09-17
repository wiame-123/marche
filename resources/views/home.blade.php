<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Ajoutez vos styles CSS ici -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    <style>
        .navbar-dark-custom {
            background-color: #003366; /* Bleu marine */
            padding: 20px; /* Augmente la taille du header */
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            height: 70px; /* Ajustez la hauteur du logo selon vos besoins */
            margin-right: 10px; /* Espace entre l'image et le texte */
        }
        .navbar-text {
            color: white; /* Couleur du texte dans la barre de navigation */
            font-size: 1.2rem; /* Augmente la taille du texte */
        }
        .navbar-text span {
            display: block; /* Force le retour à la ligne */

        }
        .navbar-nav {
            margin-left: auto; /* Décale la navigation à droite */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-dark-custom">
            <div class="container-fluid">
                <!-- Logo et texte -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo_pmp.png') }}"  alt="Logo"> <!-- Remplacez par le chemin de votre image -->
                    <span class="navbar-text">
                        Royaume du Maroc<br>
                        Présidence du Ministère Public
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}">Accueil
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="text-center my-5">
        <h1>Bienvenue sur notre site !</h1>
        <p>Ceci est la page d'accueil de notre application Laravel.</p>
    </main>

    <footer class="bg-light text-center py-3">
        <p>&copy; {{ date('Y') }} Mon Application. Tous droits réservés.</p>
    </footer>

    <!-- Ajoutez vos scripts JS ici -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
