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
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 230px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
.img{
  width: auto;
  height: 30px;
}
.ctn {
  border-radius: 10px;
}
.btn-success{
  background-color:rgb(150,191,12);
  border-color: rgb(150,191,12);
}
.btn-danger{
  background-color:rgb(201,80,107);
  border-color: rgb(201,80,107);
}
</style>

  </head>
  <body>
    <div class="container-fluid" align="center" style="margin-top:140px;">
      <div class="row well" style="width: 600px; height: 130px; padding-top:0px; padding-bottom:0px;">
          <div class="well" align="left" style=" height: 0px; margin-left:-20px; margin-right:-20px;">
            <img src="imagenes/minilogo.png" class="img" style="margin-top:-20px">

           <small><label class="Titulo" style="">Menú Principal</label></small>
          </div>
      <div class="row well-2" style="margin-top:-20px; margin-left:-20px; margin-right:-20px; height:240px;">

<div class="col-sm-6" style="padding:20px">
   Ingresar rut.
  <input type="nombre" name="" class="form-control" placeholder="Rut : 18.250.475-0" style="width: 250px; right: 100px; height: auto;">

     Excepción.
<select class="form-control" style="width: 250px; right: 100px; height: auto;">
  <option value="volvo">DESCUENTO CUOTAS A PAGAR.</option>
  <option value="saab">DESCUENTO CUOTAS A PAGAR.</option>
  <option value="mercedes">DESCUENTO CUOTAS A PAGAR.</option>
  <option value="audi">DESCUENTO CUOTAS A PAGAR.</option>
</select>
 
 <br>
  <button class="form-control btn btn-success" name="Agregar" style="width: 250px; margin-left: : 100px;">Guardar Excepción</button>
    
</div>
   

<div class="col-sm-6" style="padding:20px;">
Observación.
    
    <textarea class="form-control" style="width: 250px; right: 100px; height: 132px;"></textarea>

</div>
     

      </div>
      
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
