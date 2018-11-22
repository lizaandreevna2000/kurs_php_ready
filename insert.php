<?php 

$connect = mysqli_connect("localhost", "root", "", "yubik");
if(!empty($_POST))
{
 $output = '';
 $name = mysqli_real_escape_string($connect, $_POST["name"]);  
    $info = mysqli_real_escape_string($connect, $_POST["Info"]);  
    $dolzhn = mysqli_real_escape_string($connect, $_POST["dolzhn"]);  
    $otr = mysqli_real_escape_string($connect, $_POST["otr"]);  
    $img = mysqli_real_escape_string($connect, $_POST["img"]);
    $query = "
    INSERT INTO ped_sostav(FIO, Info, dolzhn)  
     VALUES('$name', '$info', '$dolzhn')
    ";
   
    $query2="INSERT INTO sotr_otr(id_otr, picture, id_ped)
     VALUES('$otr', '$img',last_insert_id() )";
    /*$query3="DELETE FROM ped_sostav WHERE FIO='".$_POST["delete_val"]."'";
    $query4="DELETE FROM sotr_otr"*/
    if (mysqli_query($connect,$query))
    	if(mysqli_query($connect,$query2))
    {
     $select_query="SELECT ped_sostav.FIO, ped_sostav.Info,ped_sostav.dolzhn,sotr_otr.picture FROM ped_sostav INNER JOIN sotr_otr ON ped_sostav.id_ped=sotr_otr.id_ped ORDER BY id_otr";
     $result = mysqli_query($connect, $select_query);
     $output .= '<div class="wrap main_flex__nowrap
			flex__jcontent_between" id="slider">
    		
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
      
                    <div class="box_tm">
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
				<div>



      ';
     }
     $output .= '<div>';
    }
    echo $output;
}

?>
