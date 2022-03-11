<!DOCTYPE html>
<html lang="en">
<head>
     <?php include_once './includes/head.php'; ?>  
	<title><?= ucFirst($page); ?> Market-Nail </title>
</head>
<body>
<?php include_once './includes/header.php'; ?> 

<main>
        <?php foreach($prodId as $prod) : ?>
          <div class="row  containerSearchDetail" style="display:flex;justify-content:center;padding:0 30px;margin:50px 30px;">
                         <div class="col-sm">    
                               <img src="<?= $prod['image']; ?>" alt="image" height="400" width="400" >
                        </div>
                         <div class="col-sm formsearchText" style="margin-left:30px;">
                             <h3 ><?= ucFirst($prod['nom']); ?></h3>
                             <p ><?= $prod['description']; ?></p>
                             <br>
                             <h1 style=" color:red;padding-top:20px;"><?php echo number_format($prod['prix'],2); ?>€</h1>
                             <br>
                             <br>
            
                             <a class="btn btn-primary" href="index.php?page=marketnails">Retour</a>
                         </div>
                        
                         <div class="formSearchDetail col-sm" style="border:1px solid lightgrey;height=350px;">
                                
                                <h3 style="text-align:center;"><span style="border:2px solid Pink;background-color:pink;font-size:50px;"><?=ucfirst($prod['propriétaire']);?></span><br>est le propriétaire de ce Produit </h3>
                                <br><br>
                                <h3>Si ce produit vous interresse ! </h3>, 
                                <h4>veuillez contacter son proprietaire ci-dessous : </h4>
                                <br>
                                <label for="mail">Your Email:</label>
                                <input type="email" name="mail" placeholder="put your email">
                                <br>
                                <label for="message">ecrire votre message</label>
                                <textarea name="message" id="message" cols="20" rows="10"></textarea>
                                <br>
                                <button type="submit" name="validMail" value="send">Contactez-<?=ucfirst($prod['propriétaire'])?></button>
                        
                        
                        
                        </div>     
                         <div class="contact-proprietaire">
                            
                        </div>
                                
                              
                                         
                         
                                    
                     </div>
        <?php endforeach; ?>
</main>
<?php include_once './includes/footer.php';?>
</body>
</html>