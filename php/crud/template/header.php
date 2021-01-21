<!doctype html>
<html lang="en">
  <head>
    <title>PHP/MySQL CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!--Nav Bar Start-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="product.php">Products<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <?php  
                $FileName=explode("/",$_SERVER['PHP_SELF']);

             if($FileName[count($FileName)-1]!="login.php"){ ?>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                
                <li class="nav-item">
                <p>Hi, <?php echo $_SESSION['UserName']; ?> Welcome to Admin Panel <a  href="logout.php">Logout<span class="sr-only">(current)</span></a></p>
                </li>
    
            </ul>
            <?php }?>
        </div>
    </nav>
      <!--Nav Bar End-->