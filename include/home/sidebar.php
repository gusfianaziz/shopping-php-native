<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
                        <div class="list-group">
                        <?php                            
                            $q = "Select * from category order by title asc";
                            $r = mysqli_query($conn,$q);

                            if($r){
                                while($row = mysqli_fetch_array($r)){
                                    $link = '<a href="category.php?filter='.$row['title'].'" class="list-group-item ">';
                                    if (
                                        isset($_GET['filter']) &&
                                        $_GET['filter'] == $row['title']
                                        ) {
                                        $link ='<a href="category.php?filter='.$row['title'].'" class="list-group-item active">';
                                    }                                    
                                    $link .= $row['title'].'</a>';
                                    echo $link;
                                }
                            }
                        ?>                    
                        </div> 
                        <!--/category-products-->
                        </div>
                        </div>