<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../includes/head.php'; ?>
    <title><?= ucFirst($page);?>Créer-Profil</title>
</head>
<body>
    <header> <?php include_once '../includes/header.php'; ?></header>
    <main>
       
            <h1>Créer votre profil</h1>
        <div class="container">
            <form action="profil_view.php" method="post">
              <div class="pseudo">
                <label for="pseudo">Pseudo: </label>
                <input type="text" name="pseudo" id="pseudo" required>
             </div>
             <div class="date-naissance">
                <label for="dateNaissance">Date de Naissance : </label>
                <input type="date" name="dateNaissance" id="dateNaissance" required>
            </div>
            <div class="pays">
                <label for="pays">Pays :</label>
                <select name="pays" id="pays" required>
                    <option value="France">France</option>
                    <option value="USA">USA</option>
                    <option value="Italie">Italie</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Algerie">Algerie</option>
                    <option value="Maroc">Maroc</option>
                    <option value="Tunisie">Tunisie</option>
                    <option value="Liban">Liban</option>
                </select>
            </div>
            <div class="biographie">
                <label for="biographie">Biographie :</label>
                <textarea name="biographie" id="bio" cols="30" rows="30" required></textarea>
            </div>
            </form>
            <div class="avatar">
            <form action="profil_view.php" method="post" enctype="multipart/form-data">
                <label for="avatar">télécharger votre avatar:</label>
                <input type="file" name="avatar" id="avatar">
            </form>
            </div>
                <div class="submit">
                    <button class="btn btn-primary" value="enregistrer" name="profil">Enregistrer</button>
                </div>

                <a href="index.php?page=home">Retour à l'acceuil</a>

            

        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>
</html>