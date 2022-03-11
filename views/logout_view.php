<!DOCTYPE html>
<html lang="en">
<head>
     <?php include_once '../includes/head.php'; ?>  
	<title><?= ucFirst($page); ?>Deconnextion</title>
</head>
<body>

<div class="container">
    
    <script type="text/javascript">
        var count = 5; // Timer
        var redirect = "index.php?page=home"; // Target URL
      
        function countDown() {
          var timer = document.getElementById("timer"); // Timer ID
          if (count > 0) {
            count--;
            timer.innerHTML = "Vous allé etre redirigé vers la page d'accueil dans " + count + " secondes."; 
            setTimeout("countDown()", 1000);
          } else {
            window.location.href = redirect;
          }
        }
    </script>

    <div id="master-wrap">
        <div id="logo-box">
      
          <div class="animated fast fadeInUp">
            <div class="icon"></div>
                <div class="logo">
                <h1>Merci de votre visite sur </h1>
                     <p class="title">Nail-It  Network</p>
                </div>
          </div>
      
          <div class="notice animated fadeInUp">
            <p class="lead">Vous êtes à présent deconnecté</p>
          </div>
      
          <div class="footer animated slow fadeInUp">
            <p id="timer">
              <script type="text/javascript">
                countDown();
              </script>
            </p>
          </div>

</div>
</body>
</html>