<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/ui/4.7.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.7.1/firebase-ui-auth.css" />
    <link rel="stylesheet" type="text/css" href="/wogomin/public/vendor/fontawesome-free/css/font-awesome.min.css">
    <link href="/wogomin/public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="/wogomin/public/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/wogomin/public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/wogomin/public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/wogomin/public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/wogomin/public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/wogomin/public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/wogomin/public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="/wogomin/public/css/user/payment.css">
	<link rel="stylesheet" href="/wogomin/public/css/user/huan/main.css">
	<link rel="stylesheet" href="/wogomin/public/css/user/huan/homepage.css">
	<title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <form class="form form-inline my-2 my-lg-0 mr-9">
    <input class="form-control mr-sm-2" type="search" placeholder="Search">
  </form>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar-1" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="mx-auto">
  <a class="nav-link" href="./index"><img src="/wogomin/public/images/user/huan/WoGoMin_W.png" style="width:150px"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-ul-1 collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ">
      <li class="nav-item" id="nav-item-1">
        <a class="nav-link" href="./homepage1"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-house-door" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </svg></a>
      </li>
      <li class="nav-item" id="nav-item-1">
        <a class="nav-link" href="./payByATM"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-wallet" viewBox="0 0 16 16">
        <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
        </svg></a>
      </li>
      <li class="nav-item" style="width: 50px;">
                  		<a class="nav-link" href="./profile"><img id="icavt" src="/wogomin/public/images/user/avt.jpg"></a>
                      
                	</li>
                  <li class="nav-item">
                    <a style="color: white;" href="./login">Log out</a>
                  </li>
    </ul>
  </div>
</nav>
<div class="sidebar">
<nav class="navbar-1 navbar navbar-expand-sm" id="nav-1">
  <div class="collapse navbar-collapse" id="myNavbar-1">
  <ul class="navbar-nav" id="sidebar-1">
    <li class="nav-item">
      <a class="nav-link" id="nav-item-2"  href="./index"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-item-2" href="./news"><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-item-2" href=".chatting"><i class="fa fa-commenting fa-2x" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-item-2" href="#"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></a>
    </li>
  </ul>
  </div>
</nav>
</div>
	<div class="p-3" style="margin-left: 10%;">
		<div id="option" class="d-flex mt-3 mb-3">
			<div id="QR-item" class="option-item text-center ml-3 p-2">
				<a href="./payByQR">
					<div class="item-header">
						<img class="h-100" src="/wogomin/public/images/user/qr-code [Converted].png">
					</div>
					<div class="item-content w-100">
						<span>QR Code</span>
					</div>
					<div class=" d-flex justify-content-center">
						<div class="arrow-down">
						</div>
					</div>
				</a>
			</div>
			<div id="ATM-item" class="option-item text-center ml-3 p-2">
				<a href="./payByATM">
					<div class="item-header">
						<img class="h-100" src="/wogomin/public/images/user/CARD READER 3 [Converted].png">
					</div>
					<div class="item-content w-100">
						<span>ATM Online</span>
					</div>
					<div class=" d-flex justify-content-center">
						<div class="arrow-down">
						</div>
					</div>
				</a>
			</div>
			<div id="card-item" class="option-item text-center ml-3 p-2">
				<a href="./payByCard">
					<div class="item-header">
						<img class="h-100" src="/wogomin/public/images/user/CARD READER 4[Converted].png">
					</div>
					<div class="item-content w-100">
						<span>Mobile Card</span>
					</div>
					<div class=" d-flex justify-content-center">
						<div class="arrow-down">
						</div>
					</div>
				</a>
			</div>
		</div>
		<div id="ATM" class="payment w-100 m-0 p-3">
			<h3>ATM Online</h3>
			<hr>
			<div class="row">
				<div class="col-md-5">
					<form>
						<select name="" id="bank_code" class="">
							<option value="">Choose the bank *</option>
							<option value="NCB"> Ngan hang NCB</option>
                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                            <option value="SCB"> Ngan hang SCB</option>
                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                            <option value="MSBANK"> Ngan hang MSBANK</option>
                            <option value="NAMABANK"> Ngan hang NamABank</option>
                            <option value="VNMART"> Vi dien tu VnMart</option>
                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                            <option value="HDBANK">Ngan hang HDBank</option>
                            <option value="DONGABANK"> Ngan hang Dong A</option>
                            <option value="TPBANK"> Ngan hang TPBank</option>
                            <option value="OJB"> Ngan hang OceanBank</option>
                            <option value="BIDV"> Ngan hang BIDV</option>
                            <option value="TECHCOMBANK"> Ngan hang Techcombank</option>
                            <option value="VPBANK"> Ngan hang VPBank</option>
                            <option value="MBBANK"> Ngan hang MBBank</option>
                            <option value="ACB"> Ngan hang ACB</option>
                            <option value="OCB"> Ngan hang OCB</option>
                            <option value="IVB"> Ngan hang IVB</option>
						</select><br>
						<small class="error" id="bank_codeE"></small>
						<input type="number" name="amount" id="amount" placeholder="Minimum 10000 VND" value="10000">
						<small class="error" id="amountE"></small>
						<div id="reCAPTCHA"></div>
						<button class="btn btn-confirm" id="btnPopup">Confirm Payment</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/wogomin/public/vendor/jquery/jquery.min.js"></script>
    <script src="/wogomin/public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/wogomin/public/vendor/slick/slick.min.js"></script>
    <script src="/wogomin/public/vendor/wow/wow.min.js"></script>
    <script src="/wogomin/public/vendor/animsition/animsition.min.js"></script>
    <script src="/wogomin/public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/wogomin/public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/wogomin/public/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="/wogomin/public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/wogomin/public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/wogomin/public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/wogomin/public/vendor/select2/select2.min.js"></script>
    <script src="/wogomin/public/js/user/md5.min.js"></script>
    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
	<script>
	// Initialize Firebase
		var config = {
			apiKey: "AIzaSyDOmItKUAnSIk3l47vVpyk9B4uQEknHytE",
			authDomain: "chatappntu.firebaseapp.com",
			projectId: "chatappntu",
			storageBucket: "chatappntu.appspot.com",
			messagingSenderId: "510940698531",
			appId: "1:510940698531:web:6e37350055e5fa9d3bec16",
			measurementId: "G-3T2MHNC7DF"
		};
		firebase.initializeApp(config);
	</script>
	<script type="text/javascript">
		window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCAPTCHA', {
			size: "invisible",
			'callback': (response) => {
			},
			'expired-callback': () => {
			}
		});
		window.recaptchaVerifier.render();
		$("#btnPopup").click(function () {
			var amount = $('#amount').val();
			var bank_code = $('#bank_code').val();
			// swal(amount + " " + bank_code);
			if (amount == '') {
				$("#amountE").text("Please fill in this field");
	            return false;
			} else {
				$("#amountE").text("");
			}
			if (bank_code == '') {
				$("#bank_codeE").text("Please choose the bank");
	            return false;
			} else {
				$("#bank_codeE").text("");
			}
			if (amount != '' && bank_code != '') {
				$.post("/wogomin/home/ATMPayment", { 
		     		amount: amount,
		     		bank_code: bank_code
		     	}, function(x) {
		     		var data = JSON.parse(x);
		     		window.location.href = data.data;
				});
			}
        });
	</script>
</body>
</html>