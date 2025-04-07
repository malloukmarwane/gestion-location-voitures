<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de location de voitures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Couleurs personnalisées */
        body {
            background-color: #f8f9fa; /* Fond clair */
        }

        .navbar {
            background-color: #007bff !important; /* Bleu vif pour la navbar */
        }

        .navbar-brand, .nav-link {
            color: #ffffff !important; /* Texte blanc */
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #ffcc00 !important; /* Jaune au survol */
        }

        .btn-primary {
            background-color: #28a745; /* Vert pour les boutons */
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838; /* Vert plus foncé au survol */
            border-color: #1e7e34;
        }

        .btn-warning {
            background-color: #ffc107; /* Jaune pour les boutons d'édition */
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Jaune plus foncé au survol */
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545; /* Rouge pour les boutons de suppression */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Rouge plus foncé au survol */
            border-color: #bd2130;
        }

        footer {
            background-color: #343a40; /* Fond sombre pour le footer */
            color: #ffffff; /* Texte blanc */
        }

        .table {
            background-color: #ffffff; /* Fond blanc pour les tables */
        }

        .table th {
            background-color:rgb(123, 123, 124); /* Bleu pour les en-têtes de table */
            color: #ffffff; /* Texte blanc */
        }

        .table td {
            background-color: #f8f9fa; /* Fond clair pour les cellules */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('voitures.index') }}">Location de voitures</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('voitures.index') }}">Voitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('voitures.create') }}">Ajouter une voiture</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-center py-3 mt-4">
        <p>&copy; 2025 Gestion de location de voitures</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>