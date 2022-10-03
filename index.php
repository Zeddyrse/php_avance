<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="/menu.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Récapitulatif</h1>

        <p class="row">
            <label for="name" class="form-label">Nom : </label>
            <input type="text" name="name" id="name" class="form-control">
        </p>

        <p class="row">
            <label for="firstName" class="form-label">Prénom : </label>
            <input type="text" name="firstName" id="firstName" class="form-control">
        </p>

        <p class="row">
            <label for="mail" class="form-label">Mail : </label>
            <input type="text" name="mail" id="mail" class="form-control">
        </p>

        <p class="row">
            <label for="telephone" class="form-label">Téléphone : </label>
            <input type="text" name="telephone" id="telephone" class="form-control">
        </p>

        <div class="sujet row mb-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sujet
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" name="reclamation" type="button">Réclamation</button></li>
                <li><button class="dropdown-item" name="vendeur" type="button">Contacter Vendeur</button></li>
                <li><button class="dropdown-item" name="assistance" type="button">Assistance Technique</button></li>
            </ul>
        </div>

        <div class="row form-floating">
            <textarea class="form-control mb-3" name="message" placeholder="Leave a comment here" id="message" style="height: 100px " ></textarea>
            <label for="message"> Message</label>
        </div>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>