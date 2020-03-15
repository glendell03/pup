<?php include ('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Css -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="book-container">
    <form class="form-inline my-2 my-lg-0" id="book-srch">
        <input class="form book-srch" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>
    
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">PHOTO</th>
      <th scope="col">ISBN</th>
      <th scope="col">TITLE</th>
      <th scope="col">YEAR</th>
      <th scope="col">AUTHOR</th>
      <th scope="col">CATEGORY</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="book" scope="row"><img src="./photos/book.jpg" alt="book"></th>
      <td>1231412</td>
      <td>Trigonometry</td>
      <td>2009</td>
      <td>Jane Doe</td>
      <td>Mathematics</td>
    </tr>
</table>
</div>
    

</body>
</html>