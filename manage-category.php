<?php include('menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Manage Category</h1>
		<br> <br>


        <?php  
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }

     ?>
     <br><br>

            <a href="add-category.php" class="btn-primary">Add Category</a>
            <br> <br> <br>

            <table class="tbl-full">
                <tr>
                    <th>Serial No</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Shipa Chowdhury</td>
                    <td>shipa</td>
                    <td>
                        <a href="#" class="btn-secondary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Shipa Chowdhury</td>
                    <td>shipa</td>
                    <td>
                        <a href="#" class="btn-secondary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Shipa Chowdhury</td>
                    <td>shipa</td>
                    <td>
                         <a href="#" class="btn-secondary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
            </table>
    		
	</div>
</div>

<?php include('footer.php'); ?>
