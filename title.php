<?php
include'header.php';
$id=$_REQUEST['q'];
$strJsonFileContents=file_get_contents('rohit.json');
$ar1=json_decode($strJsonFileContents,true,);
// echo "<pre>";
//         print_r($ar1);
//    echo "</pre>";
?>
	<script>
		$(document).ready(function()
		{
			$(".upshow").click(function()
			{
				$(".show1").hide(1000);
			});
			$(".upshow").click(function()
			{
				$(".show1").show();
			});
		});
	</script>
<div class="container">
	<div class="col-md-6"style="margin-top:100px;width:200px;background-color:#92A8D1">
		<div>
			<h2>product title</h2>
		</div>
		<div>
			<h2>product type</h2>
		</div>
		<div>
			<h2>variants no</h2>
		</div>

	</div>
	<div class="col-md-6"style="margin-top:100px;width:230px;background-color:#DFCFBE;padding:12px">
		<?php
		// $c=0;
		// $i=0;
		foreach($ar1['products'] as $key=>$value)
			{
				if($value['id']==$id)
				{
					?>
					<div><h3>
						<?php
					echo$value['title'];
					?>
				</h3>
				</div>
				<div>
					<h3>
						<?php
					echo$value['product_type'];
					
					?>
				</h3>
				</div>
				<div>
					<h3>
						<?php 
						echo count($value['variants']);
                         ?>
                     </h3>
                 </div>
             </div>
           <div >
                 	<button class="upshow btn-danger">update</button>
                 </div>
                 <div class="col col-md-6 "style="padding-left:60px">
                 	<form>
                 		<input type="hidden"name="id"value="<?php echo $id?>"/>
                 	<a href="delete.php?q=<?php echo$key ?>" class="btn-danger"name="delete">Delete</a>
                 </form>
             </div>

              

				<div style="margin-top:100px;width:230px;padding:12px;margin-left:460px;background-color:#7FCDCD">
					<div>
								<h2>Variants Detail</h2>
							</div>
						<?php
						foreach($value['variants'] as $key1=>$value1)
						{
							?>
							
							
							<div>
					<h3>  

						<?php
							echo"Title:".$value1['title'];
				              ?>
				</h3>
				</div>
				<div>
					<h3>  

						<?php
							echo"Price:".$value1['price'];
				              ?>
				</h3>
				</div>

				<?php
				}
			}
			}
			?>
		</div>
		<div class="show1"style="margin-top:-390px;display:none">
			<form method="POST"action="update.php">
			<div>
			<input type="hidden"name="id"value="<?php echo $id?>"/>
		</div>
		<div>
			<input type="text"name="title"value="<?php echo $value['title']?>"/>
		</div>
		<div>
			<input type="text"name="type"value="<?php echo $value['product_type']?>"/>
		</div>
		<div>
			<input type="submit"name="btn"value="Edit"class="btn btn-success"/>
		</div>
	</form>
	</div>
	
	
	