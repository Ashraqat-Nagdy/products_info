<?php
     $jsonData =   file_get_contents("http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz?fbclid=IwAR2WTFvHNEYBU2ym6E77CYtYmTAVg_7zsyHkn8j6c5obkAmUPg_G2BQ8Lhk");
     $dataArray = json_decode($jsonData,true);
     //print_r($dataArray);
     echo '<h1> Products </h1>';
     $file =  fopen("product1.txt","a")  or die("Can't open File");
      foreach ($dataArray['data'] as $key => $value) {  
       $x = array ($value['products_id']);
         foreach ($x as $value1) {
             # code...
             //echo $value1 . '</br>';


             $text= '<p> product</p>'.
             'product ID  >'. $value1 . ' \n'.
             'Product Name  >   '. $value['products_name'] . '\n '.
               'Products Quantity  > '. $value['products_quantity'] .'\n' .
               'products Model  > '. $value['products_model']. '\n'.
               'product Image >  '. $value['products_image'].'\n'.
               'product Data  > '. $value['products_date_added'].'\n'.
               'Products Liked > '. $value['products_liked'] .'\n'.
               'Product Description > '. $value['products_description'] .'\n'
               ;

               fwrite($file,$text);

               
            }
        }
  fclose($file);


       
?>
