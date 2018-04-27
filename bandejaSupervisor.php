<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
body{
  background-image: url('imagenes/fondoportal.png');
  background-repeat: no-repeat;
  background-size: cover;
  font-size: 11px;
}
.table{
  font-size:11px;
}
.form-group{
  margin-top: 5px;
}
.Fields {
  background-color: #F39C12 !important;
  color: white;
  font-size:11px;
  height: 20px;
}
.InputStyle {
  font-size:11px;
  height: 20px;
  padding: 2px;
}
.Titulo {
  margin-top: -20px;
  padding: 5px;
  font-family: verdana, sans-serif;
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: 300;
}
.InputStyleTable {
  font-size:11px;
  height: 20px;
}
.btn-default {
  background-color: #F8F9F9  ;
  border-color: #AAB7B8  ;
  font-size:11px;
}

.btn-secondary {
  background-color: #F8F9F9  ;
  border-color: #AAB7B8  ;
  font-size:9px;
  padding: 2px 7px;
}

.tdTable{
  padding: 2px !important;
}

.well{
  }
  .well-2{
    background-color: white;
    }
.img{
  width: auto;
  height: 30px;
}
.ctn {
  border-radius: 10px;
}
/*    --------------------------------------------------
	:: General
	-------------------------------------------------- */
body {
	font-family: 'Open Sans', sans-serif;
	color: #353535;
}
.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}
.ckbox label {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ckbox label:before {
	content: '';
	top: 1px;
	left: 0;
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	border-radius: 2px;
	border: 1px solid #bbb;
	background-color: #fff;
}
.ckbox input[type="checkbox"]:checked + label:before {
	border-color: #2BBCDE;
	background-color: #2BBCDE;
}
.ckbox input[type="checkbox"]:checked + label:after {
    top: 3px;
  	left: 3.5px;
  	content: '\e014';/*\e013 -- checked*/
  	color: #fff;
  	font-size: 11px;
  	font-family: 'Glyphicons Halflings';
  	position: absolute;
}
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}
.table-filter .media-photo {
	width: 35px;
}
.table-filter .media-body {
    /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
}
.table-filter .media-meta {
	font-size: 11px;
	color: #999;
}
.table-filter .media .title {
	color: #2BBCDE;
	font-size: 14px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.aceptado {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.rechazado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}
.btn-success{


}
.btn-danger{


}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <div class="container" style="margin-top:20px; margin-bottom:20px">
    			<div class="col-md-8 col-md-offset-2">
    				<div class="panel panel-default">
              <img src="imagenes/logosendero.jpg" style=" padding-left: 5px; padding-top: 5px; width:120px; margin-bottom:-40px">
    					<div class="panel-body">
    						<div class="pull-right">
    							<div class="btn-group">
    								<button type="button" class="btn btn-success btn-filter" style="background-color:rgb(150,191,12);border-color: rgb(150,191,12);" data-target="aceptado">Aceptado</button>
    								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
    								<button type="button" class="btn btn-danger btn-filter" style="border-color: rgb(201,80,107);background-color:rgb(201,80,107);" data-target="rechazado">Rechazado</button>
    								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
    							</div>
    						</div>
    						<div class="table-container">
    							<table class="table table-filter">
    								<tbody>
                      <!--  Aqui empieza lo replicable -->
    									<tr data-status="aceptado">
    										<td>
    											<div class="ckbox">
    												<input type="checkbox" id="checkbox1">
    												<label for="checkbox1"></label>
    											</div>
    										</td>
    										<td>
    											<a class="star star-checked">
    												<i class="glyphicon glyphicon-star"></i>
    											</a>
    										</td>
    										<td>
    											<div class="media">
    												<a href="#" class="pull-left">
    													<img style="border-radius:50%" src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
    												</a>
    												<div class="media-body">
    													<span class="media-meta pull-right">Febrero 13, 2016</span>
    													<h4 class="title">
    														Lorem Impsum
    														<span class="pull-right aceptado">(Aceptado)</span>
    													</h4>
    													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
    												</div>
    											</div>
    										</td>
    									</tr>
                      <!-- Aqui termina lo replicable -->
    									<tr data-status="pendiente">
    										<td>
    											<div class="ckbox">
    												<input type="checkbox" id="checkbox3">
    												<label for="checkbox3"></label>
    											</div>
    										</td>
    										<td>
    											<a href="#" class="star">
    												<i class="glyphicon glyphicon-star"></i>
    											</a>
    										</td>
    										<td>
    											<div class="media">
    												<a href="#" class="pull-left">
    													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
    												</a>
    												<div class="media-body">
    													<span class="media-meta pull-right">Febrero 13, 2016</span>
    													<h4 class="title">
    														Lorem Impsum
    														<span class="pull-right pendiente">(Pendiente)</span>
    													</h4>
    													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
    												</div>
    											</div>
    										</td>
    									</tr>
    									<tr data-status="rechazado">
    										<td>
    											<div class="ckbox">
    												<input type="checkbox" id="checkbox2">
    												<label for="checkbox2"></label>
    											</div>
    										</td>
    										<td>
    											<a href="javascript:;" class="star">
    												<i class="glyphicon glyphicon-star"></i>
    											</a>
    										</td>
    										<td>
    											<div class="media">
    												<a href="#" class="pull-left">
    													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
    												</a>
    												<div class="media-body">
    													<span class="media-meta pull-right">Febrero 13, 2016</span>
    													<h4 class="title">
    														Lorem Impsum
    														<span class="pull-right rechazado">(Rechazado)</span>
    													</h4>
    													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
    												</div>
    											</div>
    										</td>
    									</tr>
    									<tr data-status="aceptado" class="selected">
    										<td>
    											<div class="ckbox">
    												<input type="checkbox" id="checkbox4" checked>
    												<label for="checkbox4"></label>
    											</div>
    										</td>
    										<td>
    											<a href="javascript:;" class="star star-checked">
    												<i class="glyphicon glyphicon-star"></i>
    											</a>
    										</td>
    										<td>
    											<div class="media">
    												<a href="#" class="pull-left">
    													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
    												</a>
    												<div class="media-body">
    													<span class="media-meta pull-right">Febrero 13, 2016</span>
    													<h4 class="title">
    														Lorem Impsum
    														<span class="pull-right aceptado">(Aceptado)</span>
    													</h4>
    													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
    												</div>
    											</div>
    										</td>
    									</tr>
    									<tr data-status="pendiente">
    										<td>
    											<div class="ckbox">
    												<input type="checkbox" id="checkbox5">
    												<label for="checkbox5"></label>
    											</div>
    										</td>
    										<td>
    											<a href="javascript:;" class="star">
    												<i class="glyphicon glyphicon-star"></i>
    											</a>
    										</td>
    										<td>
    											<div class="media">
    												<a href="#" class="pull-left">
    													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
    												</a>
    												<div class="media-body">
    													<span class="media-meta pull-right">Febrero 13, 2016</span>
    													<h4 class="title">
    														Lorem Impsum
    														<span class="pull-right pendiente">(Pendiente)</span>
    													</h4>
    													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
    												</div>
    											</div>
    										</td>
    									</tr>
    								</tbody>
    							</table>
    						</div>
    					</div>
    				</div>
    			</div>
    	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {

    });
$('.table-filter tr').on('click', function () {
  window.location = './detalleVendedor.php?rut=222222';
});
    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
 </script>
  </body>
</html>
