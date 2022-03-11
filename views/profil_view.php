<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../includes/head.php';?>
    <title><?= ucFirst($page); ?> Profil</title>
</head>
<body>
      <?php include_once '../includes/header.php'; ?>
        <div class="profil">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?=$getProfil['avatar'];?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pseudo:<?= $getProfil['pseudo']; ?></h5>
                <h5>Date de Naissance: <?= $getProfil['dateNaiss'];?></h5>
                <h5>Pays :<?= $getProfil['pays'] ;?> </h5>
                <h5></h5>
                <p class="card-text">BIOGRAPHIE :<br/> <?= $getProfil['biographie'];?></p>
                <a href="#" class="btn btn-primary">Home</a>
            </div>
            </div>

        </div>
        <?php include_once '../includes/footer.php'; ?>
</body>
</html>