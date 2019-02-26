<?php
  $target_dir = "uploads/";
  $images_arr = array();
  $allow_types = array('jpg','png','jpeg','gif');
  //echo "<pre>";
  //print_r($_FILES['files']['name']);
  
    foreach($_FILES['files']['name'] as $key=>$val){
        $image_name = $_FILES['files']['name'][$key];
        $tmp_name   = $_FILES['files']['tmp_name'][$key];
        $size       = $_FILES['files']['size'][$key];
        $type       = $_FILES['files']['type'][$key];
        $error      = $_FILES['files']['error'][$key];
        $file_name = basename($_FILES['files']['name'][$key]);
        $targetFilePath = $target_dir . $file_name;
        
		$file_type = pathinfo($targetFilePath , PATHINFO_EXTENSION);
            if(move_uploaded_file($_FILES['files']['tmp_name'][$key] , $targetFilePath)){
                $images_arr[] = $targetFilePath;
            }
    }
    
	if(!empty($images_arr)){ ?>
        <ul>
        <?php foreach($images_arr as $image_src){ ?>
            <li><img src="<?php echo $image_src; ?>" alt=""></li>
        <?php } ?>
        </ul>
    <?php }
 	?>