<?php
include'header.php';
$res=$_REQUEST['success'];
if($_REQUEST)
{
	?><script>
	alert("deleted Success fully");
</script>
<?php
}

//include 'header.php';
$strJsonFileContents = file_get_contents("rohit.json");
$ar=json_decode($strJsonFileContents,true,);
// echo$ar[2][2],"hello";
   // echo "<pre>";
   //      print_r($ar);
   // echo "</pre>";
?>
<table class="table table-striped table-bordered"style="margin-top:100px">
	<tr>
		<th>sno</th>
		<th>Product title</th>
		<th>product type</th>
		<th>variants</th>
	</tr>
	<?php
	$count=0;
	$v=0;

foreach($ar['products'] as $key=>$value)
{
	?><tr>
		<td>
			<?php
	echo$count+=1;?></td><td><?php
	echo$value['title'];?>
		<a href="title.php?q=<?php echo $value['id']?>"> show</a>
	</td>
	<td><?php
	echo$value['product_type'];?></td>
	<td><?php echo count($value['variants'])?></td>
	
</tr>
	<?php
     // echo "$key => $value";
	/*foreach($value as $key1=>$value1)
{    
	$v=0;
        
        </tr>
       if($key1=='variants')
       {
       	$v+=1;
       }
	
		if($key1=='title')
	{
 
		$count+=1;
	?><tr><td><?php echo$count; ?></td>
	  <td><?php
     echo $value1,"".$value['id']." <br>";
  
      ?>
     </td><?php

	}
	if($key1=='product_type')
	{
		?>
	  <td><?php
     echo "$value1 <br>";?></td><?php
	}
	if($key=='image')
	{
		?>
	  <td><?php echo $value1?></td><?php
	}
		
}
?>
<td><?php echo $v?></td><?php
$v+=1;
	*/

}

// Call function
?>
</table>