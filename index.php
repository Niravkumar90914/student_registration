<!DOCTYPE html>
<html>

<head>
	<title>Data Table</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css" />
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
	<style type="text/css">
		.error {
			color: red;
		}

		thead {
			//background-color:steelblue;
		}

		.link-head {}
	</style>
</head>

<body>
	<div class="container-fluid ">
		<div class="jumbotron p-2 m-2 bg-info ">
			<h2 class="text-white"> Student data</h2>
		</div>
		<div class="row w-100">
			<div class="col-sm-2">

				<ul class="list-group m-1 ml-2">
					<li class="list-group-item bg-dark text-white">Links</li>
					<li class="list-group-item bg-secondary">Add data</li>
					<li class="list-group-item bg-secondary">Image gallery</li>
				</ul>

			</div>
			<div class="col-sm-10">
				<div class="card m-1 bg-gray">
					<div class="text-right p-1"><button class="btn btn-primary w-25 ">Add data</button></div>
				</div>
				<table id="student-list" class="table  table-responsive table-bordered">
					<thead class="bg-dark">
						<tr class="text-white">
							<th>Name</th>
							<th>Photo</th>
							<th>Gender</th>
							<th> Date of birth</th>
							<th>Email address</th>
							<th>Mobile number</th>
							<th>State</th>
							<th>City</th>
							<th>Address</th>
							<th>Hobbies</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot></tfoot>
				</table>


			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function() {
		$("#student-list").dataTable({
			responsive: true,
			autoWidth: false,
			ajax: {
				url: 'student.php',
				method: 'post',
				data: {
					"action": "display_student_data"
				},
				"dataSrc": function(json) {

					for (var i = 0, ien = json.length; i < ien; i++) {
						json[i].action = '<button id="deleteRow" value="'+json[i].student_id+'">delete</button>'
						json[i].student_image_name = '<img width="150px" height="80px" src="assets/img/' + json[i].student_image_name + '">';
					}
					return json;

				}
			},
			columns: [

				{
					data: "student_name",
					"width": "100px"
				},
				{
					data: "student_image_name",
					"width": "150px"
				},
				{
					data: "gender",
					"width": "30px"
				},
				{
					data: "date_of_birth",
					"width": "70px"
				},
				{
					data: "email_address",
					"width": "60px"
				},
				{
					data: "mobile_number"
				},
				{
					data: "student_state"
				},
				{
					data: "student_city"
				},
				{
					data: "student_address"
				},
				{
					data: "student_hobbies",
					width: "50px"
				},
				{
					data: "registration_date"
				},
				{ data:"action"}
			],
			"columnDefs": [{
					"orderable": false,
					"targets": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
				}

			]

		});

	});
</script>

</html>