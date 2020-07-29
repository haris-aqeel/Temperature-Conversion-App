<!DOCTYPE html>
<html>
	<head>
		<title>Temperature Conversion App</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

		<style>
			
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}

			body{
				height: 100vh;
				width: 100%;
				display: flex;
				align-items: center;
				justify-content: center;
				font-family: 'Roboto Slab', serif;
				background: grey;
			}

			.mainclass{
				border: black 2px solid;
				height: 60%;
				width: 40%;
				display: flex;
				flex-flow: column nowrap;
				padding: 40px 60px;
				background: #fff;
				border-radius: 8px;

			}
			.mainclass:hover{
				height: 62%;
				box-shadow: white 2px solid;
			}

			form{
				font-size: 1.1rem;
			}

			form h1{
				font-size: 2rem;
				text-align: center;
				margin-bottom: 50px;
				letter-spacing: 0.5px;
				word-spacing: 1px;
			}

			form div{
				padding:10px auto;
				margin:25px 0;
			}

			.myinput{
				width: 300px;
				padding: 10px 8px;
				border-radius: 16px;
				outline: none;
				border: grey 1px solid;
			}

			.gap{
				margin-left: 20px;
				letter-spacing: 0.7px;
			}
			
			.submits{

				padding: 5px 8px;
				border-radius: 16px;
				border: purple 1px solid;
				outline: none;
				cursor: pointer;
				font-size: 1.2rem;
				text-transform: uppercase;
			}

			.submits:hover{

				background: purple;
				color: #fff;
				font-size: 1.3rem;
				transition-delay: 0.2s;
				border: white;
				font-weight: bold;

			}
		</style>
	</head>



	<body>

		

		<div class="mainclass">
			<form method="POST">
				<h1>Temperature Conversion App</h1>
				<div class="unit">
					<label for="Unit">ENTER UNIT:   
						<input id="Unit" name= "Units" type="radio" value="C" class="gap">Celcius
						<input id="Unit" name= "Units" type="radio" value="F" class="gap">Fahrenheit
					</label>
				</div>

				<div class="temperature">
					<label for="Temperature">ENTER TEMPERATURE: </label>
					<input id="Temperature" name="Temperature" class="myinput" required>
				</div>

				<div class="submit">
					<input type="submit" name="submit" value="Convert" required class="submits">
				</div>
			</form>


			<div class="calculation">
				<p>
					<?php

					if (isset($_POST['submit'])){
						$unit = $_POST['Units'];
						$temp = $_POST['Temperature'];

						switch($unit){
							case 'C':
								$result = $temp * 9 / 5 +32;
								echo 'The '.$temp.'C '.'is equivalent to '.$result. 'F';
								break;
							case 'F':
								$result = ($temp - 32) * 5 / 9;
								echo 'The '.$temp.'F '.'is equivalent to '.$result. 'C';
								break;
							default:
								echo 'NOT POSSIBLE';
						}
					}else{
						echo "";
					}


					?>
				</p>

			</div>

		</div>
	</body>
</html>