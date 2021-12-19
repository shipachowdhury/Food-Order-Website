<?php include('menu.php'); ?>
     <!--Main Section Starts -->
    <div class="main-content">
    	<div class="wrapper">
    		<h1>DASHBOARD</h1>

            <?php 
     
                if(isset($_SESSION['login']))
                  {
                    echo $_SESSION['login'];
                    unset ($_SESSION['login']);

                  } 
            ?>

            
    		<div class="col-4">
    			<h1>5</h1>
    			<br>
    			Categories
    		</div>
    		<div class="col-4">
    			<h1>5</h1>
    			<br>
    			Categories
    		</div>
    		<div class="col-4">
    			<h1>5</h1>
    			<br>
    			Categories
    		</div>
    		<div class="col-4">
    			<h1>5</h1>
    			<br>
    			Categories
    		</div>
    		<div class="clearfix"></div>
    	</div>
    </div>
     <!--Main Section Ends  -->

     <?php include('footer.php'); ?>