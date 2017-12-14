<?php
	include 'includes/header.php';

  $sql_get_post = isset($_GET['post']) ? "SELECT * FROM tbl_posts WHERE id='".mysqli_real_escape_string($link,$_GET['post'])."'" : "" ;

  $result= $link->query($sql_get_post);
?>
           <?php 
            if($result->num_rows >0){

              while ($row = $result->fetch_assoc()) {
           ?>
           <div class="blog-post">
            <h1 class="blog-post-title"><?php echo $row['post_title']; ?></h1>
            <p class="blog-post-meta"><?php echo $row['date_time']; ?> by <a href="#"><?php echo $row['post_author']; ?></a></p>
            <?php
              echo $row['post_body'];  
             ?>
            </div><!-- /.blog-post -->
          <?php
              }
           } 
          ?>
           


            

          <blockquote class="alert alert-info">2 Comments</blockquote>

          <div class="comment-area">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Website</label>
                <input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Website (optional)">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Comment</label>
                <textarea name="comment" class="form-control" placeholder="Your comments here"></textarea>
              </div>
              <button type="submit" name="post_comment" class="btn btn-primary">Post comment</button>
            </form>
            <br><br>
            <h5>Comments</h5><hr>
            <div class="comment">
              <div class="comment-head">
                <a href="#">Shoaib Faruqi:</a>
              <img width="50" height="50" src="img/noimg.jpg">
              </div>
              
              This is test comment
              
            </div>
            <div class="comment">
              <div class="comment-head">
                <a href="#">Muneeb Faruqi:</a><button class="btn btn-sm btn-info badge">Admin</button> 
              <img width="50" height="50" src="img/noimg.jpg">
              </div>
              
              This is test comment
              
            </div>
          </div>

          <br>

        <?php 
        	include "includes/sidebar.php";
        	include "includes/footer.php";

        ?>
