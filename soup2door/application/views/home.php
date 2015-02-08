<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		width: 970px;
	}

	.sidenav{
		width: 225px;
		height: 300px;
		border: 1px solid black;
	}

	.sidenav form,.sidenav h3{
		margin: 15px;
	}
	.sidenav li{
		margin-left: 20px;
		margin-bottom: 5px;
	}

	.sidenav, .contents{
		display: inline-block;
		vertical-align: top;
		margin: 10px;
	}
	.contents{
		width: 750px;
		height: 650px;
		border: 1px solid black;
	}
	input[type=submit]{
		background: url(http://www.clker.com/cliparts/Y/x/X/j/U/f/search-button-without-text-md.png);
	}
	ul{
		list-style-type: none;
	}

	.contents li,.contents ul,.contents h2{
		display: inline;
	}
	.contents h2{
		margin-top: 10px;
		margin-left: 30px;
	}
	ul.pagenav{
		margin-left: 250px;
	}
	.pagenav li{
		padding-left: 10px;
		padding-right: 10px;
		border-right: 1px solid black;
	}
	.sort{
		margin-left: 550px;
		margin-top: 10px;
	}
	.itemHolder{
		margin-top: 30px;
	}
	.item {
		width: 130px;
		height: 130px;
		border: 1px solid black;
		margin: 8px;
	}

	.inline {
		display: inline-block;
		vertical-align: top;
	}
	.pagnationlink{
		margin-left: 120px;
		margin-top: 40px;
	}
	.pagnationlink li{
		margin-top: 30px;
		padding-right: 40px;
		margin: 30px;
		border-right: 1px solid black;
	}

	</style>
</head>
<body>
<div class="container">
<!-- 	<div class="row">
		<div class="col-md-4"><h2>Hello World</h2></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-md-3">.col-xs-6 .col-md-3</div>
 		<div class="col-xs-6 col-md-3">.col-xs-6 .col-md-3</div>
 		<div class="col-xs-6 col-md-3">.col-xs-6 .col-md-3</div>
 		<div class="col-xs-6 col-md-3">.col-xs-6 .col-md-4</div>
	</div> -->

	<div class='sidenav'>
		<form>
			<input type='search' placeholder='product name'>
			<input type='submit' value='search'>
		</form>
		<h3>Categories</h3>
		<ul>
			<li><a href="">Asia (25)</a></li>
			<li><a href="">Europe (35)</a></li>
			<li><a href="">Americas (5)</a></li>
			<li><a href="">Antartica (105)</a></li>
			<li><a href="">Show All</a></li>
		</ul>
		
	</div>
 
	<div class='contents'>
		<h2>Soups (page 2)</h2>
		<ul class='pagenav'>
			<li><a href="">first</a></li>
			<li><a href="">prev</a></li>
			<li><a href="">2</a></li>
			<li><a href="">next</a></li>
		</ul>

		<form class='sort'>
			Sorted by <select>
						<option>Price</option>
						<option>Most Popular</option>
						<option></option>
					  </select>
		</form>

		<div class='itemHolder'>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
			<div class="item inline">Hello</div>
		</div>

		<div class='pagnationlink'>
		<ul>
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href="">4</a></li>
		</ul>
		</div>
//
	</div>

</div>
</body>
</html>

