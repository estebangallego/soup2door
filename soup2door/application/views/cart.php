<div class="container">
	<table class="table zebra-striped">
		<tr>
			<td>Article</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Total</td>
		</tr>
		<tr>
			<td>Dog on a sup</td>
			<td>10000</td>
			<td>12 <a href="#">Update</a> <a href="#">Delete</a></td>
			<td>$1111111</td>
		</tr>
		<tr>
			<td>Pig on a sup</td>
			<td>10000</td>
			<td>12 <a href="#">Update</a> <a href="#">Delete</a></td>
			<td>$1111111</td>
		</tr>
		<tr>
			<td>Cat on a sup</td>
			<td>10000</td>
			<td>12 <a href="#">Update</a> <a href="#">Delete</a></td>
			<td>$1111111</td>
		</tr>
	</table>

	
	<h3>Total = $1000000</h3>
	<button class="btn btn-primary" src="/">Continue Shipping</button>	
	<hr />	

	<div class="container">
		<h3>Shipping information</h3>
		<form action="shiping_info" method="post">
			<div class="form-group">
			    <label class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input name="s_first_name" type="text" class="form-control" placeholder="First Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input name="s_last_name" type="text" class="form-control" placeholder="Last Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input name="s_address" type="text" class="form-control" placeholder="Address">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Address 2</label>
			    <div class="col-sm-10">
			      <input name="s_address_2" type="text" class="form-control" placeholder="Address 2">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input name="s_city" type="text" class="form-control" placeholder="City">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input name="s_State" type="text" class="form-control" placeholder="State">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Zip</label>
			    <div class="col-sm-10">
			      <input name="s_zip" type="text" class="form-control" placeholder="Zip">
			    </div>
			</div>
		<hr />
		<h3>Billing information</h3>
		
			<div class="checkbox">
			    <label>
			      <input name="same_as_shipping" type="checkbox">Same as shipping</label>
			  </div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input name="b_first_name" type="text" class="form-control" placeholder="First Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input name="b_last_name" type="text" class="form-control" placeholder="Last Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input name="b_address" type="text" class="form-control" placeholder="Address">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Address 2</label>
			    <div class="col-sm-10">
			      <input name="b_address_2" type="text" class="form-control" placeholder="Address 2">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input name="b_city" type="text" class="form-control" placeholder="City">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input name="b_State" type="text" class="form-control" placeholder="State">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Zip</label>
			    <div class="col-sm-10">
			      <input name="b_zip" type="text" class="form-control" placeholder="Zip">
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Credit card information</label>
			    <div class="col-sm-10">
			      <input name="b_c_card" type="number" class="form-control" placeholder="Credit card information">
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Secure code</label>
			    <div class="col-sm-10">
			      <input name="b_code" maxlength="3" type="number" class="form-control" placeholder="Secure code">
			    </div>
			</div>
			<label class="col-sm-2 control-label">Expedition</label>
			<div class="row form-group">
				<div class="col-md-6">
					<select name="exp_month">
						<option name="January">January</option>
						<option name="February">February</option>
						<option name="March">March</option>
						<option name="April">April</option>
						<option name="May">May</option>
						<option name="June">June</option>
						<option name="July">July</option>
						<option name="August">August</option>
						<option name="September">September</option>
						<option name="October">October</option>
						<option name="November">November</option>
						<option name="December">December</option>
					</select>
				</div>
				<div class="col-md-6">
					<select name="exp_year">
						<option name="2012">2012</option>
						<option name="2013">2013</option>
						<option name="2014">2014</option>
						<option name="2015">2015</option>
						<option name="2016">2016</option>
						<option name="2017">2017</option>
						<option name="2018">2018</option>
						<option name="2019">2019</option>
						<option name="2020">2020</option>
						<option name="2021">2021</option>
					</select>
				</div>
			</div>
			<input class="btn btn-primary" type="submit" name="pay" value="Pay">
		</form>
	</div>
</div>