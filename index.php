<?php
$dbc = mysqli_connect('localhost', 'root', '170170', 'lesson');
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>OddZona</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style_down_player.css">
		<link rel= "stylesheet" href="style_down_player_ph.css" media="handheld,only screen and (max-device-width:480px)"/>
	<link rel= "stylesheet" href="style_ph.css" media="handheld,only screen and (max-device-width:480px)"/>
	</head>
 <body>
 
 
 <div class="refffe">
 
 <section>
<?php
	if(empty($_COOKIE['username'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Логин:</label>
	<input type="text" name="username">
	<label for="password">Пароль:</label>
	<input type="password" name="password">
	<button type="submit" name="submit">Вход</button>
	<a href="signup.php">Регистрация</a>
	</form>
<?php
}
else {
	?>
	<p><a href="myprofile.php">Мой профиль</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
<?php	
}
?>
</section>
 
 </div>
 
 
 <div>
<h1 class="text">?</h1>
 </div>
   <div class="all">
       <img class="img1" src="mossawi_519615482775_20180410163607_1743544177491.jpg"></img>
	     <div  class="cont">
		   <div  class="cont-text-play">
		   		      <a href="play.html" class="contact">Играть</a> 
		   </div>
		 </div>
		     <div>
		 <div  class="cont-text-pleyer-info">
		   </div>
 <div class="data_player_1">
   <div id="wrapper">
	<div>
		<ul id="bar">
			<li id="ipod">
				<div class="bottom">
			<h1 class="text1">?</h1>
			<div id="informat" class="infobox">
						<h5>Name:&nbsp;Stas</h5>
						<p>NickName:&nbsp;Pain</p>
						<div class="top">
						   <img id="informat1" class="toop1 " src="toop.png" ></img>
						     </div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
 <div class="data_player_2">
   <div id="wrapper">
	<div>
		<ul id="bar">
			<li id="ipod">
				<div class="bottom">
			<h1 class="text2">?</h1>
			<div id="informat" class="infobox">
						<h5>Name:&nbsp;Vova</h5>
						<p>NickName:&nbsp;C1</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
 <div class="data_player_3">
   <div id="wrapper">
	<div>
		<ul id="bar">
			<li id="ipod">
				<div class="bottom">
			<h1 class="text3">?</h1>
			<div id="informat" class="infobox">
						<h5>Name:&nbsp;Vlad</h5>
						<p>NickName:&nbsp;N1ntendo</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
 <div class="data_player_4">
   <div id="wrapper">
	<div>
		<ul id="bar">
			<li id="ipod">
				<div class="bottom">
			<h1 class="text3">?</h1>
			<div id="informat" class="infobox">
						<h5>Name:&nbsp;MISHA</h5>
						<p>NickName:&nbsp;Azzer&nbsp;Raa</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
 <div class="data_player_5 botoon">
   <div id="wrapper">
	<div>
		<ul id="bar">
			<li id="ipod">
				<div class="bottom">
			<h1 class="text3">?</h1>
			<div id="informat" class="infobox">
						<h5>Name:&nbsp;noName</h5>
						<p>NickName:&nbsp;noName</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>



      <div class="lord_home">  
         <div id="open_lord_1">
		   <img class="lord_1" src="lord1-black.png"></img>
		   		   <img class="lord_1_left" src="lord1-black.png"></img>
		      <h1 class="text-photo1-1">PHOTO</h1>
		        <div class="informat1">
			      <img class="lord_1" src="lord1.png"></img>
			        <img  class="lord_3_photo" src="im578x383-yanik_spiegel.png"></img>
            </div>
		  </div>
		  
		  
    <div id="open_lord_2">
			               <div class="ontop" id="informat1"> 
					   <img class="lord_1-2-3" src="lord1.png"></img></div>
					   <div class="ontop" id="informat1"> 
					      <h1 class="text-dk1-2">INFO</h1> 
		                     </div>
							 
	                            
         <img class="lord_1-2" src="lord1.png"> </img>
		     <div id="informat3" class="intop">
		        <h1 class="text-dk1-1">Dead/Kill</h1>
		           </div>
				  
								
		     <div class="lord_2">
				<img class="lord_2_polosa_2" src="lord3.png"></img>
				   <div class="text_AWP">
				     <h1 class="text_Awp1_A">A</h1>
				     <h1 class="text_Awp2_W">W</h1>
				     <h1 class="text_Awp3_P">P</h1>
				       </div>
				         <img class="lord_2_polosa_1" src="lord1-1.png"></img>
				           </div>  
                             </div>
							 </div>
							 </div>
							 </div>
							 <div>
 
 
 </div>
   </body>
</html>
