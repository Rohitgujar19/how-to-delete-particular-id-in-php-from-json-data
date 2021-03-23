<?php 
$key1=$_REQUEST['q'];
$strJsonFileContents=file_get_contents('rohit.json');
$ar1=json_decode($strJsonFileContents,true,);
			 $arr_index = array();
			 echo$key;
    //          echo '<pre>';
			 // print_r($ar1);
			 // echo '</pre>';


		foreach($ar1['products'] as $key=>$value)
			{
				// 
				if($key==$key1)
				{
		           unset($ar1['products'][$key]);
		           header("location:rohit.php?success=1");
				}

		// 		if($value['id']==$id)
		// 		{
		// 			//$arr_index[]=$key;
                       
  //                      echo$key
		// 			//unset($ar1['id']);
		// 		//unset($value['id']);
		// 			//unset($ar1['id']);
		// 			//
	 //           // unset($ar1['products'][$id]);
		// 			//echo$ar1['$key'];

					
		// }
	}
		//var_dump($ar1);

	

		
		//print_r($ar1['products']);

       $newJsonString = json_encode($ar1,JSON_PRETTY_PRINT);
	//   // print_r($newJsonString);
            
		 file_put_contents('rohit.json',$newJsonString);
		

	
	
	?>