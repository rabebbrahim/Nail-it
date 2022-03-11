
<!DOCTYPE html>
<html lang="fr">
<head>
     <?php include_once '../includes/head.php';?>
    <title><?= ucFirst($page);?>Login-Page</title>
    
</head>
<body>
    <section class="content">
        <form action="", method="POST">
            <h2>Nail-It</h2>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" placeholder="email" name="email" class="email" required/>
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" placeholder="Password" name="password"  class="password" required/>
            </div>
            <a href="#" class="lnkforget">Forgot?</a>
            <button type="submit" classe="btn btn-success" name="login" value="done">Login</button>
        </form>        
    </section>
    <div class = "no_account">
        <h4>Don't have an account?<a href="./signup"> Sign up here</a></h4>
    </div>
    <section id="carouselExampleSlidesOnly" class= "carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval = "2000">
                <img class="d-block w-100" src="./design/image/nail-2021.jpg" >
            </div>
            <div class="carousel-item" data-interval = "2000">
                <img class="d-block w-100" src="./design/image/nail-paillette.jpg" >
            </div>
            <div class="carousel-item" data-interval = "2000">
                <img class="d-block w-100" src="./design/image/nail-freestyle.jpg">
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>

