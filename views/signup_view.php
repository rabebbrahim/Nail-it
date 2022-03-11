<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title><?= ucFirst($page);?>Nail-It | Sign Up</title>
</head>
<body>
    <section class="container">
    <h5 class="mb-5" > NEW ACCOUNT</h5>
    <?php if (isset($alertSign)){echo $alertSign;} ?>
    <form action="" class="" method="POST">
        <h2 class="mt-5">Nail-It</h2>
        <h3> Sign Up </h3>
        <div id="firstname">
            <h4 class="entry"> First-Name :</h4>
            <input type = "text" placeholder="FirstName"  name="firstname"/>
        </div>
        <div id="lastname">
            <h4 class="entry"> Last-Name :</h4>
            <input type = "text" placeholder="Last-Name"  name="lastname"/>
        </div>
        <div id="email">
            <h4 class="entry">E-mail:</h4>
            <input type="email" placeholder="you email" name="email"  />

        </div>
        <div id="password">
            <h4 class="entry">Password:</h4>
            <input type="password" placeholder="password" name="password"/>
        </div>
        <div id="submit">
            <button type="submit" class="btn btn-primary" name="signup" value="done">Register</button>
        </div>

    </form>
    </section>
</body>
</html>