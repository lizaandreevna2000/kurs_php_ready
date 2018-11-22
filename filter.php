<?php  
 if(isset($_POST["from_date"]))  
 {
      if(empty($_POST["from_date"])){
	$where = 1;
     }else{
		$where = "event_date ='".$_POST["from_date"]."'";
	}

      $connect = mysqli_connect("localhost", "root", "", "yubik");  
      $output = '';  
      $query = "  
           SELECT  event_date, event_name,picture FROM event  
           WHERE $where ORDER BY event_date ASC
      ";  
//die(var_dump($query));
      $result = mysqli_query($connect, $query);  
      $output .= '  <div class="kalendar_line main_flex flex__jcontent_between flex__align-items_start">
           
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                
      <div class="card"> 
             <img class="card-img-top" src="img/'.$row["picture"].'" alt="Card image cap">
              <div class="card-body">   
                          
                               <h5 class="card-title">'. $row["event_date"] .'</h5>  
                               <p class="card-text"><span class="blue">'. $row["event_name"] .'</span></p>  
           
                      </div> 
           </div>
                          
                   
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                
                    <div class="card-body">  
                      <h5 class="card-title">Not Found</h5>
                       <p class="card-text"><span class="blue">Not Found</p>
                       </div>
                  
           ';  
      }  
      $output .= '</div>';  
      echo $output;  
 }  
 ?>