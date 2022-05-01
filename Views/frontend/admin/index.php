<?php 
//localhost:88/QLThuVien/index.php&controller=customer
if(isset($data)){
    foreach($datas as $data){
        echo $data['id_cate'].":". $data['name_cate'];
    }
}
?>
