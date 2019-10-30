<!DOCTYPE html>
<html>

<head>
	<title>Data Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>

<body class="bg-dark">

	<div class="container p-5">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6">
				<div class="card">
					<div class="card-header bg-primary text-center">
						<h4 class="text-white">Student Registration Form</h4>
					</div>
					<div class="card-body">
						<form id="studentForm" enctype="multipart/form-data">
							<input type="hidden" name="action" value="insert">
							<div class="row form-group">
								<div class="col-sm-4"><label for="name">Name</label></div>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
									<div class="error name-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="gender">Gender</label></div>
								<div class="col-sm-8">
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="gender" value="M">Male
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="gender" value="F">Female
										</label>
									</div>
									<div class="error gender-error"></div>
								</div>

							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="dob">Date of birth</label></div>
								<div class="col-sm-8"><input type="date" name="dob" class="form-control" id="dob">
									<div class="error dob-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="email">Email address</label></div>
								<div class="col-sm-8"><input type="text" name="email" class="form-control" placeholder="Enter email address" id="email">
									<div class="error email-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="mobile">Mobile</label></div>
								<div class="col-sm-8"><input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" id="mobile">
									<div class="error mobile-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="State">State</label></div>
								<div class="col-sm-8">
									<select class="form-control" name="state" id="city">
										<option value="">Select state</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Maharastra">Maharastra</option>
										<option value="Madhya pradesh">Madhya pradesh</option>
										<option value="Himachal pradesh">Himachal pradesh</option>
									</select>
									<div class="error state-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="city">City</label></div>
								<div class="col-sm-8">
									<select class="form-control" name="city" id="city">
										<option value="">Select City</option>
										<option value="Ahmedabad">Ahmedabad</option>
										<option value="Kheda">Kheda</option>
										<option value="Rajkot">Rajkot</option>
										<option value="Surat">Surat</option>
										<option value="Gandhinagar">Gandhinager</option>
									</select>
									<div class="error city-error"></div>
								</div>
							</div>
							<div class="row form-group hori">
								<div class="col-sm-4"><label for="address">Address</label></div>
								<div class="col-sm-8"><textarea class="form-control" name="address"></textarea>
									<div class="error address-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="hobbies">Hobbies</label></div>
								<div class="col-sm-8">
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="checkbox" name="hobbies[]" class="form-check-input" value="Reading">Reading
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="checkbox" name="hobbies[]" class="form-check-input" value="Drowing">Drowing
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="checkbox" name="hobbies[]" class="form-check-input" value="Leasing music">Leasing music
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="checkbox" name="hobbies[]" class="form-check-input" value="Travelling">Travelling
										</label>
									</div>
									<div class="error hobbies-error"></div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4"><label for="photo">Photo</label></div>
								<div class="col-sm-8"><input type="file" name="photo" class="form-control" id="photo">
									<div class="error photo-error"></div>
									<div class="error other-error"></div>
									<div class="error database-error"></div>
								</div>
							</div>
							<div class="row justify-content-end">
								<div class="col-sm-8 text-right mt-3">
									<button class="btn btn-primary" id="submitButton">Submit</button>
									<input type="reset" name="reset" value="Reset" class="btn btn-info">
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(document).ready(function() {

			//ON CLICK SUBMIT WITH ID "submitButton" BUTTON

			$("#submitButton").on("click", function(e) {

				// ADD METHOD FOR REGULAR EXPRESSION	
				$.validator.addMethod("regex", function(value, element, regexpr) {
					return regexpr.test(value);
				});

				//VALIDATING STUDENT SUBMIT FORM WITH ID "studentForm"
				$("#studentForm").validate({

					//errorElement:"div", //display error in div , by default display in label element 
					errorClass: "error", // for display error in red color

					//HIGHLIGHT INPUT ELEMENT IF VALIDATION FALSE
					highlight: function(element, errorClass, validClass) {
						$(element).addClass('error');
					},

					//UNHIGHLIGHT INPUT ELEMENT IF VALIDATION TRUE
					unhighlight: function(element, errorClass, validClass) {
						$(element).removeClass('error');
					},

					//SET ERROR PLACEMENT FOR GENDER AND HOBBIES[] INPUT, b'cos in two field error not display at proper place  
					errorPlacement: function(error, element) {

						if (element.attr("name") == "gender") {
							$(".gender-error").html(error); //for gender
						} else if (element.attr("name") == "hobbies[]") {
							$(".hobbies-error").html(error); //for hobbies
						} else {
							error.insertAfter(element); // MENDATORY; display at default place for other input;
						}
					},

					//CREATE RULES
					rules: {

						name: {
							required: true,
							maxlength: 50,
							minlength: 3,
							regex: /^[A-Za-z ]*$/ // for regex we have add method add method on line 151
						},

						gender: {
							required: true
						},

						dob: {
							required: true,
						},

						email: {
							required: true,
							regex: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
						},

						mobile: {
							required: true,
							regex: /^[0-9]{10}$/ //10 digit mobile number
							//regex:/^([+]\d{2})?\d{10}$/ for +910123456789 or 0123456789
						},

						state: {
							required: true
						},

						city: {
							required: true
						},

						address: {
							required: true,
							regex: /^[#.0-9a-zA-Z\s,-]+$/
						},

						"hobbies[]": {
							required: true, // "hobbies[]" for multi array field
						},

						photo: {
							required: true,
							extension: "jpg|png|gif" //for extension "additional-methods.min.js" required.
						}

					},

					//CREATE MESSAGES
					messages: {

						name: {
							required: "Name is required.",
							maxlength: "Text entered exceeds the maximum length. ",
							minlength: "Please enter valid name.",
							regex: "Please enter valid name."
						},

						gender: {
							required: "Gender is required."
						},

						dob: {
							required: "Date of birth is required."
						},

						email: {
							required: "Email is required.",
							regex: "Please enter valid email address."
						},

						mobile: {
							required: "Mobile number is required.",
							regex: "Please enter valid mobile number."
						},

						city: {
							required: "Select your city."
						},

						state: {
							required: "Select your state."
						},

						address: {
							required: "Address is required.",
							regex: "Enter valid address."
						},

						"hobbies[]": {
							required: "Please select at least one hobbie."
						},

						photo: {
							required: "Please select photo.",
							extension: "Only JPG, PNG and GIF files are allowed."
						}
					},

					//CREATE AJAX CODE INSIDE SUBMIT HANDLER FOR SUBMITTING DATA
					submitHandler: function(form) {

						$.ajax({

							url: "student.php",
							type: "POST",
							data: new FormData(form),
							cache: false,
							dataType:"JSON",
							contentType: false,
							processData: false,
							beforeSend: function() {
								//disabled button and add spinner to button
								$("#submitButton").attr("disabled", true).html("<span class='spinner-border spinner-border-sm'></span> Submitting...");
								$(".error").text(""); //remove previous error message
							},
							success: function(result) {
									
									if (result.status == "error") {
										$.each(result.message, function(key, value) {
											$("." + key).text(value); // display error message
										})
									} else if (result.status == "success") {
										console.log(result.message);
										//redirect page to datatable
									}
							},
							error: function(jqXHR, exception) {

								if (jqXHR.status === 0) {
									msg = 'Not connect.\n Verify Network.';
								} else if (jqXHR.status == 404) {
									msg = 'Requested page not found. [404]';
								} else if (jqXHR.status == 500) {
									msg = 'Internal Server Error [500].';
								} else if (exception === 'parsererror') {
									msg = 'Requested JSON parse failed.';
								} else if (exception === 'timeout') {
									msg = 'Time out error.';
								} else if (exception === 'abort') {
									msg = 'Ajax request aborted.';
								} else {
									msg = 'Uncaught Error.\n' + jqXHR.responseText;
								}
								alert(msg);
							},
							complete: function() {
								//anabled button and remove spinner from button
								$("#submitButton").attr("disabled", false).html("Submit");
							}

						});
					}
				});
			});			
		});
	</script>
</body>

</html>