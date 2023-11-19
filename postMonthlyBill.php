<div>
	<div class="text-center text-primary h1">Posting Monthly bills</div>

	<form id="monthly_bill_form">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label>Water Bill</label>
				    <input type="number" class="form-control" id="water_input" name="water_input" />
			  	</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				    <label>Electricity Bill</label>
				    <input type="number" class="form-control" id="electricity_input" name="electricity_input" />
			  	</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				    <label>Rent Bill</label>
				    <input type="number" class="form-control" id="rent_input" name="rent_input" />
			  	</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				    <label>Other Bills</label>
				    <input type="number" class="form-control" id="other_input" name="other_input" />
			  	</div>
			</div>

			<!-- <div class="col-md-12">
				<div class="form-group">
				    <label>Month Posting</label>
				    <select class="form-control" id="month_posting" name="month_posting">
				    	<option value="01">January</option>
				    	<option value="02">February</option>
				    	<option value="03">March</option>
				    	<option value="04">April</option>
				    	<option value="05">May</option>
				    	<option value="06">June</option>
				    	<option value="07">July</option>
				    	<option value="08">August</option>
				    	<option value="09">September</option>
				    	<option value="10">October</option>
				    	<option value="11">November</option>
				    	<option value="12">December</option>
				    </select>
			  	</div>
			</div> -->

			<div id="buttons_container" class="d-flex flex-row-reverse">
				<button class="btn btn-success m-1" id="submit_btn" type="submit">Post Bills</button>
				<button class="btn btn-danger m-1" onclick="bootbox.hideAll()" type="button">Close</button>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$("#monthly_bill_form").validate({
	  errorClass: 'text-danger',
	  rules: {
	    water_input: "required",
	    electricity_input: "required",
	    rent_input: "required",
	    other_input: "required",
	  },
	  submitHandler: function(form) {
	    var formData = $(form).serializeArray();

	    formData.push({
	        'name' : "action",
	        'value' : "postMonthlyBill"
	      },{
	        'name' : "reservationID",
	        'value' : selectedData.id
	      }
	    );


	    var res = ajaxPostLink(formData);
	    console.log(res);

	    if (res.isProceed == false) {
	      Swal.fire({
	        text: res.msg,
	        icon: 'error',
	      })

	      return;
	    }

	    Swal.fire(
	      'Successfully posted new bills',
	      '',
	      'success'
	    ).then(function(){
	    	reservations = ajaxPostLink({"action":"getAllReservationsWithMonthlyPosting"});
	    	loadDatatable(reservations);
	    	bootbox.hideAll();
	    });


	  }
	});
</script>