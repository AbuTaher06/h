
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <h5 class="text-white">Hospital Management System</h5>
    <div class="mr-auto"></div>

    <ul class="navbar nav">
        <!-- <li class="nav-item"><a href="#" class="nav-link text-white">Admin</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Doctor</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li> -->
        <?php
if(isset($_SESSION['admin'])){
    $user=$_SESSION['admin'];
    echo '
    <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li> 
        ';
}
    else{
        echo '
        <li class="nav-item"><a href="adminLogin.php" class="nav-link text-white">Admin</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Doctor</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li>
        ';
    
}

        ?>
    </ul>
    </nav>
</body>
</html>