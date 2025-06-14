<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
        }
        .card {
            border-radius: 1rem;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 400px;">
        <h2 class="text-center text-success mb-4">Connexion Étudiant</h2>
        <form method="POST" action="#">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="etudiant@ensa.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="********">
            </div>
            <button type="submit" class="btn btn-success w-100">Se connecter</button>
        </form>
        <div class="mt-3 text-center">
            <a href="{{ route('login.admin') }}">Je suis un admin</a>
        </div>
    </div>
</body>
</html>
