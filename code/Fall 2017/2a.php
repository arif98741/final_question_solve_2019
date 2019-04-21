<?php
	//demo products 500
	function searchProduct($product)
	{
		$products = array(
			'pro1'=> ['product1',100,'detals1'],
			'pro2'=> ['product2',15,'detals1'],
			'pro3'=> ['product3',150,'detals1'],
			'pro4'=> ['product4',120,'detals1'],
			'pro5'=> ['product5',90,'detals1']
		);

		$status = '';
		foreach ($products as $key =>  $value) {
			
			foreach ($value as $pro) {
					if($product == $pro){
						
						$status = "Product Found";
						break;
					}else{
	
						$status = "Product not found";
					}
			}
		}
		return $status;
	}

	echo searchProduct("product4");


 ?>