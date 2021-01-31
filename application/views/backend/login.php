<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Panel de Control</title>
	<!--link rel="shortcut icon" href="http://org-www.kia.com/etc/designs/kia/favicon.ico" type="image/x-icon"-->
    <link rel="shortcut icon" type="image/x-icon" href="http://www.bodegavistalba.com/wp-content/themes/vistalba/vistalba.ico">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
		html {
			height: 100%;
		}
		body {
			background: #DE6262;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.login-block{
			float:left;
			width:100%;
			padding : 50px 0;
		}
		.banner-sec{background:url(/assets/img/logo.png)  no-repeat center; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
		.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
		.login-sec{padding: 50px 30px; position:relative;}
		.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
		.login-sec .copy-text i{color:#FEB58A;}
		.login-sec .copy-text a{color:#E36262;}
		.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
		.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
		.btn-login{background: #DE6262; color:#fff; font-weight:600;}
		.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
		.banner-text h2{color:#fff; font-weight:600;}
		.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
		.banner-text p{color:#fff;}
	</style>
</head>
<body>

	<!------ Include the above in your HEAD tag ---------->
	<section class="login-block">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-sm-6 col-md-4 login-sec">
					<div class="row">
						<div class="col-sm-12 text-center">
							<img src="<?= site_url("/assets/img/logo.png") ?>" style="display: block; margin:auto" class="img-fluid" />
						</div>
					</div>
					<!--div class="row">
						<div class="col-sm-12 text-center">
							<h4 style="color: #d3d3d3">eCommerce</h4>
						</div>
					</div-->
					<?= form_open(site_url(array('portal', 'login')), array("method" => "post")) ?>
						<div class="form-group">
							<label for="emailIngreso" class="text-uppercase">Email</label>
							<input type="email" name="emailIngreso" id="emailIngreso" class="form-control" placeholder="">

						</div>
						<div class="form-group">
							<label for="claveIngreso" class="text-uppercase">Password</label>
							<input type="password" name="claveIngreso" id="claveIngreso" class="form-control" placeholder="">
						</div>


						<div class="form-check">
							<!--label class="form-check-label">
								<input type="checkbox" class="form-check-input">
								<small>Recordarme</small>
							</label-->
							<button type="submit" class="btn btn-login float-right">Ingresar</button>
						</div>
					<?= form_close() ?>

                    <?php if(!empty($invalidInfo)): ?>
                        <div class="row" style="margin: 10px 0;">
                            <div class="col-xs-12">
                                <div class="alert alert-danger">
                                    Las credenciales ingresadas no son válidas
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

				</div>
				<div class="col-6 col-md-8 d-xs-none banner-sec">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="<?= base_url("assets/img/warehousing.png") ?>" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									&nbsp;
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

	</section>
</body>
</html>