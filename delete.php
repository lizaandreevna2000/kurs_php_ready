<?php 
$connect = mysqli_connect("localhost", "root", "", "yubik");
if(!empty($_POST)){
$output = '';
$name = mysqli_real_escape_string($connect, $_POST["name"]);  
$output = '';
$data=array();
$q_del="SELECT id_ped FROM ped_sostav WHERE FIO='$name'";
$query = "
   DELETE ped_sostav,sotr_otr FROM ped_sostav INNER JOIN sotr_otr ON ped_sostav.id_ped=sotr_otr.id_ped WHERE FIO='$name'
    ";
    $res = mysqli_query($connect, $q_del);
    while ($stroka = $res->fetch_assoc()) {
    $data[] = $stroka;
    }
    json_encode($data);   
   // die (json_encode($data));   
    if(mysqli_query($connect,$query))
    {
     $select_query="SELECT ped_sostav.FIO, ped_sostav.Info,ped_sostav.dolzhn,sotr_otr.picture FROM ped_sostav INNER JOIN sotr_otr ON ped_sostav.id_ped=sotr_otr.id_ped ORDER BY id_otr";
     $result = mysqli_query($connect, $select_query);
    /* $output .= '<div class="wrap main_flex__nowrap
			flex__jcontent_between" id="slider">
    		
     ';*/
   
     while($row = mysqli_fetch_array($result))
     {
     	
      $output .= '
      				
                    <div class="box_tm slick-slide slick-current slick-active" data-slick-index="'.$i.'" aria-hidden="true" style="width: 288px;" tabindex="-1">
                    <div class="img_tm">
                        <div class="box_img_tm main_flex__nowrap flex__align-content_center flex__align-items_center flex__jcontent_center">
                            <img src="img/'.$row["picture"].'" alt="">
                        </div>
                    </div>
                    <div class="name_tm">
                        <h3>'.$row["FIO"].'</h3>
                        <h4>'.$row["dolzhn"].'</h4>
                    </div>
                    <div class="text_tm">
                        '.$row["Info"].'
                    </div>
                    
                </div>
				
			


      ';
    
     }
     $output .= '<div>';
    }
    echo $output;
}

?>