<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cine 1</title>
	<link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
	<header>
		<img src="../public/img/" alt="">
	</header>
	<div class="panel-body" style="height: 750px">
    <div class="formulario">
        <div class="form-advice text-blue">
            Por favor ingrese los datos de la pelicula.
        </div>
    <form class="col-xs-12 col-sm-8 col-sm-offset-2" name="formulario" id="formulario" method="POST">
        <div class="form-group">
        	<label class="text-green">RUC/DNI</label>
            <input type="hidden" name="idreferido" id="idreferido">
            <input type="text" class="material-control tooltips-general" name="docreferido" id="docreferido" placeholder="RUC o DNI" pattern="[0-9]{1,12}" maxlength="11" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 12 caracteres" required>
        </div>
        <div class="form-group">
        	<label class="text-green">Razon Social</label>
            <input type="text" class="material-control tooltips-general" name="razonsocial" id="razonsocial" placeholder="Razon Social" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="150" data-toggle="tooltip" data-placement="top" title="Escribe la razon social" required="">
        </div>
        <div class="form-group">
        	<label class="text-green">Telefono</label>
            <input type="text" class="material-control tooltips-general" name="telefono" id="telefono" placeholder="Telefono" pattern="[0-9]{1,20}" maxlength="30" data-toggle="tooltip" data-placement="top" title="Ingrese el numero telefonico del referido" required>
        </div>
        <div class="form-group">
        	<label class="text-green">Contacto</label>
            <input type="text" class="material-control tooltips-general" name="contacto" id="contacto" placeholder="Contacto" maxlength="20" data-toggle="tooltip" data-placement="top" title="Ingrese el nombre del contacto" required>
        </div>
        <div class="form-group">
        	<label class="text-green">Correo</label>
            <input type="email" class="material-control tooltips-general" name="correo" id="correo" placeholder="Correo" required="" maxlength="100" data-toggle="tooltip" data-placement="top" title="Ingrese el correo del referido">
        </div>
        <div class="form-group">
        	<label class="text-green">Comentario</label>
            <textarea class="form-control" name="comentario" id="comentario" rows="3" maxlength="20000"></textarea>
        </div>
        <div class="form-group div-btn-refer">
         <button type="submit" class="btnrefer" id="btnGuardar">Enviar</button>
        </div>
   </form>
   </div>
</div>
</body>
</html>