<?php
	
	include 'includes/dbcon.php';

  $sql_cats= "SELECT * FROM tbl_categories";

  $result = $link->prepare($sql_cats);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>E-Rozgaar Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <?php 
              $home_active = isset($_GET['category']) ? "<a class=\"nav-link\" href=\"index.php\">Home</a>" : "<a class=\"nav-link active\" href=\"index.php\">Home</a>";
               echo $home_active; 
               $result->execute();
               $num_rows= ($result->fetchColumn() >0 ) ? true: false;
             
              if($num_rows){
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                  $cat_active = ( isset($_GET['category']) && $row['id'] == $_GET['category'] ) ? "active" : "";
                  ?>
                    <a class="nav-link <?php echo $cat_active; ?>" href="index.php?category=<?php echo $row['id']; ?>"><?php echo $row['cat_text']; ?></a>
                  <?php
                }
              }
            ?>
          </nav>
        </div>
      </div>

      
    </header>

    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
