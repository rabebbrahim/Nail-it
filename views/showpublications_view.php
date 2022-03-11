
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './includes/head.php';?>
    <title> <?= ucFirst($page); ?> Publication</title>
</head>
<body>
    <?php include_once './includes/header.php'; ?>
    <main>
    <section class="publications">
        <div class="my-publication">
        <?php foreach($showMyPublication as $publi): ?>
            <div class="card" style="width: 40rem;">
                <img class="card-img-top" src="<?= $publi['img'];?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $publi['titre'];?></h5>
                  <p class="card-text"><?= $publi['description'];?></p>
                  <div class="like"><button name="like" id="like" value="likeIt">&hearts;</button></div>
                  <i><?php echo 'votre publication a été liké '. $like.' fois!'; ?> </i>
                </div>
              </div>
           <?php endforeach; ?>
           </div>
      </section>
      <section class="publications">
         <div class="all-publications">
          <?php foreach($showAllPublications as $publi): ?>
                    <div class="all-publication">
                      <div class="card" style="width: 40rem;">
                          <img class="card-img-top" src="<?=$publi['img'];?>" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?= $publi['titre'];?> </h5>
                            <p class="card-text"><?= $publi['description'];?></p>
                            <div class="like"><button name="like" id="like" value="likeIt">&hearts;</button></div>
                            <script type/></script>
                          
                          </div>
                        </div>
                    </div>

         <?php endforeach; ?> 
       </div>
       </section> 


      </main>
      <?php include_once './includes/footer.php'; ?> 
      </body>
      </html>
        
