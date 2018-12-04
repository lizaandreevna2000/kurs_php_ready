<?php
session_start();
$admin = 'admin';
$pass = 'mypass';
$connect=mysqli_connect("localhost","root","","yubik");
mysqli_query($connect,"SET NAMES UTF8");
$query = "SELECT event_date, event_name,picture FROM event ORDER BY id_event";  
$result = mysqli_query($connect, $query);  

$q="SELECT ped_sostav.id_ped, ped_sostav.FIO, ped_sostav.Info, ped_sostav.dolzhn, sotr_otr.picture FROM ped_sostav INNER JOIN sotr_otr ON ped_sostav.id_ped=sotr_otr.id_ped ORDER BY id_otr";
$res=mysqli_query($connect, $q); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
	<title>Yubileyniy</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
</head>
<body>
	
	<div id="header" class="main_flex flex__jcontent_center flex__align-content_space-between">
			<div id="top header" class="wrap main_flex__nowrap flex__align-items_start flex__jcontent_center">
					<div id="logo">
						<img src="img/logo.png">
					</div>
			</div>
				
			<div id="bottom_header">
				<nav class="wrap main_flex__nowrap flex__align-items_end flex__jcontent_between">
					<li><a href="#about">Про нас</a></li>
					<li><a href="#news">Новини табору</a></li>
					<li><a href="#rozklad">Розклад дня</a></li>
					<li><a href="#kalendar">Календар зміни</a></li>
					<li><a href="#vozhati">Педагогічний склад</a></li>
				</nav>		
			</div>
	</div>
	<div id="about">
		<div class="wrap main_flex__nowrap flex__jcontent_between flex__align-items_start">
			<div id="title_about">
				<p>"Ювілейний"-</p>
				<p class="blue">це перлина Азовського моря</p>
			</div>
			<div id="text_about">
				<p>
					Табір"Ювілейний"-це велика дружня родина!
				</p>
				<p>
				  	Ми даруємо тобі незабутні спогади, щасливу посмішку та щирі емоції. 
				</p>
				
				<ul>
					<p>На тебе чекають:</p>
					<li>Яскраве сонце та тепле море</li>
					<li>Велике коло друзів</li>
					<li>Найкращі вожаті</li>
					<li>Цікаві ігри та квести</li>
					<li>Запальні дискотеки</li>
	
				</ul>
				<p>Тож не зволікай!</p> 
				<p>У "Юбік" поспішай.</p>
			</div>
		</div>
	</div>
		<div id="news">
		<div class="title">
			<h2>Новини табору</h2>
		</div>
		<div class=wrap>
		<div class="news_line main_flex__nowrap flex__jcontent_between">
			<div id="img_news">
			<img src="img/11.jpg" alt="">

			</div>
			<div id="text_news_title">
				<h2>У "Ювілейний" завітали <span class="blue">справжні зірки.</span></h2>
				<p>Прийняти учась у проекті "Танці з зірками" приїхали супер-зірки шоу бізнесу.</p><p>Майкл Джексон, Дзідзьо, Світлана Лобода, Артур Пірожков.Всі були у захвоті від шалених зіркових танців!</p>
			</div>
		</div>

			<div class="news_line main_flex__nowrap flex__jcontent_between ">
			<div id="img_news">
			<img src="img/волейбол.jpg" alt="">

			</div>
			<div id="text_news_title">
				<h2>Відбувся турнір з волейболу </h2>
				<p>Захоплюючу гру показали супердітки проти супервожатих.</p><p>У запеклому протистоянні перемогли супердітки</p>
				<p>З рахунком 28:26</p>
			</div>
	
		</div>
	</div>

</div>		
<div id="rozklad">
		<div class="title">
			<h2>Розклад дня</h2>
		</div>	
		<div class="rozklad_line main_flex__nowrap 	flex__jcontent_center">
			<div id="text_rozkl">
				<p>08:00 — 08:30   Підйом</p>
				<p>08:30 — 08:45   Зарядка</p>
				<p>08:45 — 09:00   Планування дня у загонах</p>
				<p>09:00 — 09:45   Сніданок</p>
				<p>10:00 — 11:30   Пляж</p>
				<p>11:45 — 12:45   Спорт, ігри, репетиції</p>
				<p>13:00 — 13:45   Обід</p>
				<p>14:00 — 16:00   Після обідній сон</p>
				<p>16:30 — 16:45   Полдник</p>
				<p>17:00 — 18:00   Пляж</p>
				<p>17:00 — 18:30   Спорт,ігри, репетиції</p>
				<p>19:00 — 19:45   Вечеря</p>
				<p>20:00 — 21:00   Вечірній захід</p>
				<p>21:00 — 22:30   Дискотека</p>
				<p>21:30 — 22:00 Друга вечеря у молодших загонах</p>
				<p>22:00   Відбій у молодших загонах </p>
				<p>22:30 — 23:00 Друга вечеря у cтарших загонах</p>
				<p>23:00   Відбій у старших загонах</p>
				
			</div>

		</div>

</div>
	<div id="kalendar">
		<div class="title">
			<h2>Календар зміни</h2>
		</div>	
		<div class="btn-query main_flex__nowrap flex__jcontent_center">
		<div class="col-md-3">

                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
               </div>
               
                  
                <div class="col-md-5">
                     <input type="button" name="çíàéòè" id="filter" value="Знайти" class="btn btn-info" />  

                     <input type="button" name="çíàéòè" id="cancel" value="Скасувати" class="btn btn-info" />  


				</div>
               
		</div>
		<div class=wrap>
			<div class="kalendar_line main_flex flex__jcontent_between flex__align-items_start">
					
				<?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>		
                         		<div class="card">	
		  			<img class="card-img-top" src="img/<?php echo $row["picture"];?>" alt="Card image cap">
		  			
		  				<div class="card-body">   
                               <h5 class="card-title"><?php echo $row["event_date"]; ?></h5>  
                               <p class="card-text"><span class="blue"><?php echo $row["event_name"]; ?></span></p>  </div>
           
                          </div>
					
                          
                     <?php  
                     }  
                     ?>  
                     		 
                       
                  </div>   
		  		<!--<div class="card-body">
				<h5 class="card-title"><span class="blue">22.06 Äåíü çíàéîìñòâ</span></h5>
			<p class="card-text">Ïåðø í³æ ïî÷àòè íàøó âèáóõîâó òàáîðíó çì³íó òðåáà ïîçíàéîìèòèñü.Òîìó íå ãàé ÷àñó!</p>-->
			
		</div>
		
	</div>

	<div id="vozhati">
		<div class="title">
			<h2>Педагогічний склад</h2>
		</div>
			<div class="wrap main_flex__nowrap
			flex__jcontent_between" id="slider">
			<?php
		
                     while($row = mysqli_fetch_array($res))  
                     {  
                     ?>		
				<div class="box_tm" id="vash-<?php echo $row['id_ped'];?>">
					
					<div class="img_tm">
						<div class="box_img_tm main_flex__nowrap flex__align-content_center flex__align-items_center flex__jcontent_center">
							<img src="img/<?php echo $row["picture"];?>" alt="">
						</div>
					</div>
					<div class="name_tm">
						<h3><?php echo $row["FIO"];?></h3>
						<h4><?php echo $row["dolzhn"];?></h4>
					</div>
					<div class="text_tm">
						<?php echo $row["Info"];?>
					</div>
					
				</div>

				 <?php  
                     }  
                     ?>  
			</div>
	</div>


	
	<footer>
	<div id="cooper">
	<?php if(isset($_COOKIE['admin'])){?>
		<a href="#admin_form" id="adminka" data-toggle="modal" data-target="#add_data_Modal">@2018 Kosenko</a>
	<?php }else{?>
		<a href="#admin_form" id="adminka" data-toggle="modal" data-target="#admin_form">@2018 Kosenko</a>
	<?php } ?>
	</div>
	
	
	</div>
	
	</footer>
</body>

</html>



<div id="admin_form" class="modal fade">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<div class="modal-body">


<form method="post" id="admin" action="add_data_Modal">

     <label>Логин</label>
		<input type="text" name="login" id="login" class="form-control" />
		<br />
     <label>Пароль</label>
		<input type="password" name="pass" id="pass" class="form-control" />
		<br/>
	 <input type="submit" name="submit" id="ok" value="Ok" class="btn btn-success" />
</form>

	</div>
</div>
</div>
</div>
</div>


<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Додавання та видалення даних на сторінці "Yubileyniy"</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>ПІБ вожатого</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Інформація про вожатого</label>
     <textarea name="Info" id="Info" class="form-control"></textarea>
     <br />
     <label>Посада</label>
     <select name="dolzhn" id="dolzhn" class="form-control">
      <option value="Вихователь">Вихователь</option>  
      <option value="Вожатий">Вожатий</option>
      <option value="Вожатий">Старший вожатий</option>
     </select>
     <br />  
     <label>Номер загону</label>
     <input type="text" name="otr" id="otr" class="form-control" />
     <br />  
     <label>Зображення</label>
     <input type="text" name="img" id="img" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
	<button type="button" name="delete" class="btn btn-danger btn-xs delete"> Delete </button>
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

   </div>
  </div>
 </div>
</div>

<!--<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Employee Details</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>-->

<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                
                if(from_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date},  
                          success:function(data)  
                          {  
                               $('.kalendar_line').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
             $('#cancel').click(function(){  
                var from_date = '';  
                
 
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date},  
                          success:function(data)  
                          {  
                               $('.kalendar_line').html(data);  
                          }  
                     });  
  
           });  

        
		$('#insert_form').on("submit", function(event){  
		event.preventDefault(); 
		if($('#name').val() == "")  
		{  
			alert("Name is required");  
		}  
		else if($('#Info').val() == '')  
		{  
			alert("Address is required");  
		}  
		else if($('#dolzhn').val() == '')  
		{  
			alert("Designation is required");  
		}  
		else if($('#img').val() == '')  
		{  
			alert("Age is required");  
		}  
		else  
		{  
			$.ajax({  
				url:"insert.php",  
				method:"POST",  
				data:$('#insert_form').serialize(),  
				beforeSend:function(){  
					$('#insert').val("Inserting");  
				},  
				success:function(data){  
					$('#insert_form')[0].reset();  
					$('#add_data_Modal').modal('hide');  
					//$('#slider').html(data);  
					//alert(data);
					$('#slider').slick('slickAdd',data);
				}  
			});  
		}  

      }); 
		$('#insert_form').on('click', '.delete', function(event){
			event.preventDefault();
			 var delete_val = $('#name').val();  
			  if(delete_val != '')  
			  {  
			  	 
			  	 $.ajax({  
						url:"delete.php",  
                      	method:"POST", 
                       	data:$('#insert_form').serialize(),
					   	dataType:"json",
                    	success:function(data){ 
						$('#insert_form')[0].reset();  
						$('#add_data_Modal').modal('hide');
						alert(data);
						$('#vash-'+data).remove();
						},
						error: function(er){
							console.log(er);
						}
			
			  })

			 }
		 });
		 $('#admin').submit(function(event){  
			event.preventDefault();
		 	var login=$('#login').val();
			var pass=$('#pass').val();
			if((login!='')||(pass!='')){
				$.ajax({  
				url:"user.php",  
                method:"POST", 
				dataType:"json",
				data:$('#admin').serialize(),
				success:function(data){
					if(data==true){
						$('#admin_form').modal('hide'); 
						$('#add_data_Modal').modal('show');  
					}else{
						alert(data);
					}
				}				
			});
		}
    		 }); 

     }); 
 </script>