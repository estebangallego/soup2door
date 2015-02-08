<!doctype html>
<html lang = "en">
<head>
	<title> Pho </title>
	<meta charset = "UTF-8">
	<meta name = "description" content="Pho">
</head>

<style>
	#container{
		width: 1000px;
	}
	#side_pics{
		width: 350px;
		height: 450px;
		display: inline-block;
		vertical-align: top;
		margin: 0px;
	}	

	#description{
		width: 560px;
		height: 450px;
		display: inline-block;
		margin-left: -5px;
		padding: 0px 0px 0px 70px;
	}

	#header{
		background: black;
		width: 1000px;
		height: 50px;
		padding: 5px;
	}
	#header h2, h4{
		color: white;
		display: inline-block;
	}

	#header a{
		color: white;
		display: inline-block;
		text-decoration: none;
		margin-left: 720px;
	}

	#main_pic{
		padding-left: 60px;
		width: 250px;
		height: 250px;
	}

	#footer img{
		width: 110px;
		height: 110px;
		margin-left: 109px;
	}

	#footer_caption h5{
		display: inline-block;
		margin-top: 0px;
		margin-left: 115px;
	}

</style>

<body>
	<div id ="container">
		<div id = "header">
			<h2>Soup2Door</h2>
			<h4> <a href="#"> Shopping Cart (0) </a> </h4>
		</div>
		<div id = "side_pics">
			<h5><a href ="#"> Go Back</a></h5>
			<img id = "main_pic" src = "assets/pictures/pho.jpg">
		</div>
		<div id = "description">
			<h3>Origin: Vietnam</h3>
			<p> Pho [pronounced fuh] is the Vietnamese national dish; an aromatic, nutritious^ and delicious rice noodle soup served with a side plate of fresh herbs to add as you please. The addition of these herbs and table condiments is an essential part of eating phở and adds another dimension to the dish.</p>
			<h5> Ingredients </h5>
			<ul>
				<li> beef marrow </li>
				<li> beef chuck</li>
				<li> ginger </li>
				<li> yellow onions</li>
				<li> fish sauce </li>
				<li> rock sugar </li>
				<li> cloves</li>
				<li> sea salt</li>
				<li> yellow onion </li>
				<li> scallions </li>
				<li> chopped cilantro </li>
				<li> bean sprouts </li>
				<li> basil</li>
				<li> saw-leaf herb leaves </li>
				<li> Thai bird chilies</li>
				<li> 1 lime</li>
				<li> ground black pepper</li>
			</ul>
			<form>
				<select>
					<option> 1 ($19.99) </option>
					<option> 2 ($39.98) </option>
					<option> 3 ($59.97) </option>
				</select>
				<input type = "submit" value = "Buy">
				<input type = "hidden" name = "action" value="buy">
			</form>
		</div>
		<div id = "footer">
			<h3> Suggested items: </h3>
			<a href="#"><img src="assets/pictures/sanchocho.jpeg" alt = "pho"></a>
			<a href="#"><img src="assets/pictures/minestrone.jpg" alt = "minestrone"></a>
			<a href="#"><img src="assets/pictures/shark_fin.jpg" alt = "shark fin"></a>
			<a href="#"><img src="assets/pictures/arroz_caldo.jpg" alt = "arroz caldo"></a>
		</div>
		<div id = "footer_caption">
			<h5> Sanchocho $20.00 </h5>
			<h5> Minestrone $15.00 </h5>
			<h5> Shark Fin $150.00 </h5>
			<h5> Arroz Caldo $17.99 </h5>
		</div>
	</div>
</body>
</html>