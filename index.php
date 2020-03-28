

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book Manager</title>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    <script src="https://kit.fontawesome.com/d13d21d11b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./landing/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    .btn a{
        color: white;
        text-decoration: none;
    }
</style>
</head>
<body>
<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#">
      <img src="./photos/PUPLogo.png" width="45" height="45" class="d-inline-block align-top" alt="logo">
<span class="library">Library Book Manager</span>
    </a>

    <button type="button" class="btn btn-danger" ><a href="./include/login.php">LOG IN</a></button>
    
  </nav>

<div class="container-fluid">
  <h1>Library</h1>
  <form action="books.php">
  <div class="search">
    <div>
    <div class="input-group">
      <div class="input-group-prepend">
          <div class="dropdown">
          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">ENGLISH</a>
            <a class="dropdown-item" href="#">FILIPINO</a>
            <a class="dropdown-item" href="#">SCIENCE</a>
            <a class="dropdown-item" href="#">MATHEMATICS</a>
            <a class="dropdown-item" href="#">COMPUTER</a>
            <a class="dropdown-item" href="#">HISTORY</a>
            <a class="dropdown-item" href="#">LAW</a>
            <a class="dropdown-item" href="#">LITERATURE</a>
            <a class="dropdown-item" href="#">ACCOUNTANCY</a>
          </div>
        </div>

  </form>
      </div>
      <input type="text" class="form" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
      <div class="input-group-prepend">
        <button type="button" class="btn btn-danger" id="search-btn"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </div>
  </div>

  <footer>
    <nav class="navbar navbar-light">
      <p>Polytechnic University of the Philippines</p>
      <p>ALRIGHT RESERVED 2020</p>
    </nav>
  </footer>



  </div>
</div>

</body>
</html>