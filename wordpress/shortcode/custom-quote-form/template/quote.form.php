
<div class="row">
			<div class="col-12 text-center">
				<h1>House Moving Quote Form</h1>
				<p>Please fill the below form to get the Quote from our agents.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<label>Rooms</label><input type="number" id="txtRooms" class="form-control"  required/>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<label>Kitchens</label><input type="number" id="txtKitchens" class="form-control"  required/>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<label>Washing Machine</label><input type="number" id="txtWashingMachines" class="form-control" required/>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<label>AC's</label><input type="number" id="txtAC" class="form-control" required/>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<label>Heaters</label><input type="number" id="txtHeaters" class="form-control" required/>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<label>Fridge</label><input type="number" id="txtFridge" class="form-control" required/>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-right">
					<label>Total Amount USD</label>
					<input type="text" disabled id="txtTotalAmount" value="0.00" />
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-right">
					<button class="btn btn-primary" id="btnCalc">Calculate</button>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#btnCalc").click(function(){
					var Rooms=$("#txtRooms").val();
					var Kit=$("#txtKitchens").val();
					var WM=$("#txtWashingMachines").val();
					var AC=$("#txtAC").val();
					var Heater=$("#txtHeaters").val();
					var Fridge=$("#txtFridge").val();

					//You need to Validate all the Inputs before calculating any stuff.

					var TotalAmount=(Rooms*75)+(Kit*150)+(WM*15)+(AC*20)+(Heater*50)+(Fridge*200);

					$("#txtTotalAmount").val(TotalAmount);

				});
			});
		</script>
