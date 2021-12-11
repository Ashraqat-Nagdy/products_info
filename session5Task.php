<?php
     $jsonData =   file_get_contents("http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz?fbclid=IwAR2WTFvHNEYBU2ym6E77CYtYmTAVg_7zsyHkn8j6c5obkAmUPg_G2BQ8Lhk");
     $dataArray = json_decode($jsonData,true);
     //print_r($dataArray);
     echo '<h1> Products </h1>';
      foreach ($dataArray['data'] as $key => $value) {  
       $x = array ($value['products_id']);
         foreach ($x as $value1) {
             # code...
             //echo $value1 . '</br>';


             echo '<p> product</p>'.
             'product ID  >'. $value1 . ' <br>'.
             'Product Name  >   '. $value['products_name'] . '<br> '.
               'Products Quantity  > '. $value['products_quantity'] .'<br>' .
               'products Model  > '. $value['products_model']. '<br>'.
               'product Image >  '. $value['products_image'].'<br>'.
               'product Data  > '. $value['products_date_added'].'<br>'.
               'Products Liked > '. $value['products_liked'] .'<br>'.
               'Product Description > '. $value['products_description'] .'<br>'
               ;
               
            }
        }


       
?>
