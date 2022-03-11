<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once '../includes/head.php';?>
    <title><?= ucFirst($page)?>Créer publication</title>
</head>
<body>
 <?php include_once '../includes/header.php';?>
       <h1>Créér votre propre publication</h1> 
    <div class="container">
            
          <h2>Veuillez inserer votre photo et Rajouter son titre et sa description </h2>
          <form action="showpublications_view.php" method="post">
          <div class="titre">
            <label for="titre">Title</label><br/>
            <input type="text" name="titre" id="titre" placeholder="title" required/>
            </div>
            <div class="desctiption">
            <label for="description">Description</label><br/>
            <textarea name="description" id="description" cols="40" rows="30" placeholder="describe your article here !" required></textarea>
            </div>
            </form>
            <form action="showpublications_view.php" method="post" enctype="multipart/form-data">
            <div class="image">
                <label for="image">Choose a photo for your publication</label>
                <input type="file" name="image" id="image"></br>

            </div>
            </form>
            <div class="btn btn-primary">
                <button type="submit" name="publication" value="addPublication">Ajouter Publication</button>
            </div>
            
           
            
            <?php if( isset($error) && $error ==0):?>
                 <?=' <div class="progress>';?>
                 <?='<div class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar" style="width:60%;" aria-valuenow="100"
                  aria-valuemin="0" aria-valuemax="100"> 100 %</div>';?>
                  <?='<h5> Envoi réussi !</h5>';?>
                  <?php endif; ?>

          </p>
               <a href="index.php?page=showpublications">CONSULTER VOTRE PUBLICATION</a>
         
      </div>
       
    <?php include_once '../includes/footer.php'; ?>    
</body>
</html>

