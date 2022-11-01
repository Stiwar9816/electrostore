<h2>Registro</h2>

		<form role="form" name="registro_usuario" id="registro_usuarios" method="post">
        <div id="mensaje_respuesta"></div>
		  <div class="form-group">
		    <label for="usuario">Nombre de usuario</label>
		    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="nombre">Nombre Completo</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for="correo">Correo Electronico</label>
		    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
		  </div>
		  <div class="form-group">
		    <label for="password">Contraseña</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contraseña</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>

		  <button type="submit" id="guardar_usuario" Class="btn btn-primary btn-sm" class="btn btn-default">Registrar</button>
		</form>
