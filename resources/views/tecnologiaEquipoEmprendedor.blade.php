<!-- Bloque cero y uno -->
  <div class="row">
 		<h2 style="margin: 20px 0px 20px 0px;">0. Tecnología / proyecto</h2>     
            	<!-- Input titulo -->
                <div class="col-xs-12" style="padding-top: 20px;">
                    <div class="col-xs-2"><label for="titulo" >Título:</label></div> 
                    <div class="col-xs-10"><input type="text" class="form-control" id="titulo" placeholder=""></div>
                </div>
            	<!-- Input titulo comercial -->
              	<div class="col-xs-12" style="padding-top: 20px;">
                	 <div class="col-xs-2"><label for="tituloComercial">Título comercial:</label></div>
                	 <div class="col-xs-10"><input type="text" class="form-control" id="tituloComercial" placeholder=""></div>
              	</div>
            	<!-- Input problematica -->
              	<div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="problematica">Problematica a resolver:</label></div>
                	<div class="col-xs-10"><input type="text" class="form-control" id="problematica" placeholder=""></div>
              	</div>
                <!-- Input descripcion -->
              	<div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="descripcion">Descripción / resumen:</label></div>
                	<div class="col-xs-10"><input type="text" class="form-control" id="descripcion" placeholder=""></div>
              	</div>   
      
            <div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="name">Intitución:</label></div>
                	<div class="col-xs-10"><select id="intitucion" class="form-control selectpicker" data-style="btn-green">
                  		<option>Seleccione una opción</option>
                  		<option>Opción 01</option>
                  		<option>Opción 02</option>
                  		<option>Opción 03</option>
                	</select>
                    </div>
            </div>  
              
            <div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="name">Tipo de invención:</label></div>
                	<div class="col-xs-4"><select id="tipoInvension" class="form-control selectpicker" data-style="btn-green">
                  		<option>Seleccione una opción</option>
                  		<option>Opción 01</option>
                  		<option>Opción 02</option>
                  		<option>Opción 03</option>
                	</select>
                    </div>
            </div> 
                    
        <div class="col-xs-12" style="padding-top: 20px;"></div>
		<h2>1. Equipo emprendeor / inventor</h2>
        
        <table id="altaEquipo" class="table table-striped table-hover sortable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Último grado de estudios</th>
                                <th>Área de conocimiento</th>
                                <th>Correo electronico</th>
                                <th>Número celular personal</th>
                                <th>Institución</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre 1</td>
                                <td class="text-center"> <select id="estudios1" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Estudiante</option>
                  		          <option>Licenciatura</option>
                  		          <option>Maestria</option>
                                  <option>Doctorado</option>
                	            </select></td>
                                <td class="text-center"> <select id="area1" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Opción 01</option>
                  		          <option>Opción 02</option>
                  		          <option>Opción 03</option>
                	            </select></td>
                                <td class="text-center">correo1@cenidet.edu.mx</td>
                                <td class="text-center">77711111</td>
                                <td class="text-center"> <select id="institucion1" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Instituto Tecnológico de Aguascalientes</option>
                  		          <option>Instituto Tecnológico de Ensenada</option>
                  		          <option>Instituto Tecnológico de Zacatepec</option>
                	            </select></td>
                            </tr>
                            <tr>
                                <td>Nombre 2</td>
                                <td class="text-center"> <select id="estudios2" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Estudiante</option>
                  		          <option>Licenciatura</option>
                  		          <option>Maestria</option>
                                  <option>Doctorado</option>
                	            </select></td>
                                <td class="text-center"> <select id="area2" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Opción 01</option>
                  		          <option>Opción 02</option>
                  		          <option>Opción 03</option>
                	            </select></td>
                                <td class="text-center">correo2@cenidet.edu.mx</td>
                                <td class="text-center">77722222</td>
                                <td class="text-center"> <select id="institucion2" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Instituto Tecnológico de Aguascalientes</option>
                  		          <option>Instituto Tecnológico de Ensenada</option>
                  		          <option>Instituto Tecnológico de Zacatepec</option>
                	            </select></td>
                            </tr>
                            <tr>
                                <td>Nombre 3</td>
                                <td class="text-center"> <select id="estudios3" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Estudiante</option>
                  		          <option>Licenciatura</option>
                  		          <option>Maestria</option>
                                  <option>Doctorado</option>
                	            </select></td>
                                <td class="text-center"> <select id="area3" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Opción 01</option>
                  		          <option>Opción 02</option>
                  		          <option>Opción 03</option>
                	            </select></td>
                                <td class="text-center">correo3@cenidet.edu.mx</td>
                                <td class="text-center">77733333</td>
                                <td class="text-center"> <select id="institucion3" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Instituto Tecnológico de Aguascalientes</option>
                  		          <option>Instituto Tecnológico de Ensenada</option>
                  		          <option>Instituto Tecnológico de Zacatepec</option>
                	            </select></td>
                            </tr>
                            <tr>
                                <td>Nombre 4</td>
                                <td class="text-center"> <select id="estudios4" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Estudiante</option>
                  		          <option>Licenciatura</option>
                  		          <option>Maestria</option>
                                  <option>Doctorado</option>
                	            </select></td>
                                <td class="text-center"> <select id="area4" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Opción 01</option>
                  		          <option>Opción 02</option>
                  		          <option>Opción 03</option>
                	            </select></td>
                                <td class="text-center">correo4@cenidet.edu.mx</td>
                                <td class="text-center">77744444</td>
                                <td class="text-center"> <select id="institucion4" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Instituto Tecnológico de Aguascalientes</option>
                  		          <option>Instituto Tecnológico de Ensenada</option>
                  		          <option>Instituto Tecnológico de Zacatepec</option>
                	            </select></td>
                            </tr>
                            <tr>
                                <td>Nombre 5</td>
                                <td class="text-center"> <select id="estudios5" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Estudiante</option>
                  		          <option>Licenciatura</option>
                  		          <option>Maestria</option>
                                  <option>Doctorado</option>
                	            </select></td>
                                <td class="text-center"> <select id="area5" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Opción 01</option>
                  		          <option>Opción 02</option>
                  		          <option>Opción 03</option>
                	            </select></td>
                                <td class="text-center">correo5@cenidet.edu.mx</td>
                                <td class="text-center">77755555</td>
                                <td class="text-center"> <select id="institucion5" class="form-control selectpicker" data-style="btn-green">
                  		          <option>Seleccione una opción</option>
                  		          <option>Instituto Tecnológico de Aguascalientes</option>
                  		          <option>Instituto Tecnológico de Ensenada</option>
                  		          <option>Instituto Tecnológico de Zacatepec</option>
                	            </select></td>
                            </tr>
                        </tbody>
                    </table>        
            </div>
              
                 
