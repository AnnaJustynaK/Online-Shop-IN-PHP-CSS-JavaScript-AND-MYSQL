<?php 
      include('controllers/database.controller.php');
	  $sql = "SELECT * FROM sku NATURAL JOIN  sku_details NATURAL JOIN product_variant NATURAL JOIN product_variant_type NATURAL JOIN product WHERE  sku.sku_id='1' ";
      $result = mysqli_query($db,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$detail_array[]=$row;
	 }
	foreach($detail_array as $detail){
		$detail_value=$detail['variant_type']." : ".$detail['variant_value'];
		echo "<li>$detail_value</li>";
}?>