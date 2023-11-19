<div>
	<h1>Room Details</h1>
	<div class="text-center">
		<img id="img_container" style="width: 350px;" />
		<div class="text-center text-danger">Note: Click image to reupload a new image</div>
	</div>

	<hr>

	<form id="room_edit">
		<div class="row">
			<input type="file" id="photo_container" name="photo_container" class="d-none" />

			<div class="col-md-12">
				<b>Description</b>
				<input class="form-control" name="description_container" id="description_container"></span>
			</div>

			<div class="col-md-6">
				<b>Price</b>
				<input class="form-control" name="price_container" id="price_container"></span>
			</div>

			<div class="col-md-6">
				<b>Duration</b>
				<input class="form-control" name="duration_container" id="duration_container"></span>
			</div>
			<div class="col-md-6">
				<b>Type</b>
				<input class="form-control" name="type_container" id="type_container"></span>
			</div>
			<div class="col-md-6">
				<b>Room No#</b>
				<input class="form-control" name="roomNo_container" id="roomNo_container"></span>
			</div>
		</div>
	</form>



	<div id="buttons_container" class="d-flex flex-row-reverse">
		<button class="btn btn-danger m-1" onclick="bootbox.hideAll();">Close</button>
		<button class="btn btn-primary m-1" id="save_btn">Save Edits</button>
	</div>
</div>

<script type="text/javascript">
	$("#img_container").attr('src', "../assets/img/" + selectedData.photo);

	$("#description_container").val(selectedData.description);
	$("#price_container").val(selectedData.price);
	$("#duration_container").val(selectedData.duration);
	$("#type_container").val(selectedData.type);
	$("#roomNo_container").val(selectedData.roomNo);

	$("#img_container").on("click", function() {
		$("#photo_container").trigger("click");
	});

	document.getElementById('photo_container').onchange = function(evt) {
		console.log(this, evt);
		var tgt = evt.target || window.event.srcElement,
			files = tgt.files;

		// FileReader support
		if (FileReader && files && files.length) {
			var fr = new FileReader();
			fr.onload = function() {
				document.getElementById("img_container").src = fr.result;
			}
			fr.readAsDataURL(files[0]);
		}

		// Not supported
		else {
			// fallback -- perhaps submit the input to an iframe and temporarily store
			// them on the server until the user's session ends.
		}
	}

	$("#save_btn").on("click", function() {
		var formSerial = $("#room_edit").serializeArray();

		// formData.push({
		// 	'name': "action",
		// 	'value': "updateRoomDetails"
		// }, {
		// 	'name': "id",
		// 	'value': selectedData.id
		// });

		// var res = ajaxPostLink(formData);
		// console.log(res);

		var formData = new FormData();


		if (document.getElementById('photo_container').files[0] != undefined) {
			formData.append("photo_container", document.getElementById('photo_container').files[0]);
		}

		formData.append("action", "updateRoomDetails");

		formData.append("fileName", selectedData.photo);
		formData.append("id", selectedData.id);

		for (var i = 0; i < formSerial.length; i++) {
			formData.append(formSerial[i].name, formSerial[i].value);
		}

		for (var pair of formData.entries()) {
			console.log(pair[0] + ', ' + pair[1]);
		}

		var res = backendHandleFormData(formData);
		console.log(res);

		if (res.isProceed == false) {
			Swal.fire({
				text: res.msg,
				icon: 'error',
			})

			return;
		}

		Swal.fire(
			'Successfully saved edits',
			'Refreshing for fresh data',
			'success'
		).then(function() {
			location.reload(true);
		});
	})
</script>