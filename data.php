<?php

			$data = file_get_contents('data.json');
			$desired_data = json_decode($data,true);
			$my_array = array();
			if(isset($_POST['start_d']) && isset($_POST['end_d'])){

				$start_d = $_POST['start_d'];
				$end_d = $_POST['end_d'];

				for($k=0;$k<count($desired_data['priceArray']); $k++){
				//echo $desired_data['priceArray'][$k]['price'].'<br>';

				if($desired_data['priceArray'][$k]['start']>=$start_d && $desired_data['priceArray'][$k]['end']<=$end_d){
					$my_array[]=array('price'=>$desired_data['priceArray'][$k]['price'],
						'start'=>$desired_data['priceArray'][$k]['start'],
						'end'=>$desired_data['priceArray'][$k]['end']);
				} 
				
			}

			print_r(json_encode($my_array,true));
			
			}

			elseif(isset($_POST['start_d']) && isset($_POST['end_d']) && isset($_POST['price'])){
				$start_d = $_POST['start_d'];
				$end_d = $_POST['end_d'];
				$price = $_POST['price'];
				for($k=0;$k<count($desired_data['priceArray']); $k++){
				//echo $desired_data['priceArray'][$k]['price'].'<br>';
				if($desired_data['priceArray'][$k]['start']>=$start_d && $desired_data['priceArray'][$k]['end']<$end_d && $desired_data['priceArray'][$k]['end'] == $price){
					$my_array[]=array('price'=>$desired_data['priceArray'][$k]['price'],
						'start'=>$desired_data['priceArray'][$k]['start'],
						'end'=>$desired_data['priceArray'][$k]['end']);
				} 
				
			}
			}



			//print_r($desired_data);
			//echo $desired_data['priceArray'][0]['price'];

?>