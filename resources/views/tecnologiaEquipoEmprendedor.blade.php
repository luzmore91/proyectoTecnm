<!-- Bloque cero y uno -->
  <div class="row">
   <div class="espacioTitulosContenido">
    <div class="col-xs-3"><h2>0. Tecnología / proyecto</h2></div>
     <div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Captura la información solicitada del proyecto o tecnologia que estas desarrollando">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
    </div>

            	<!-- Input titulo -->
                <div class="col-xs-12" style="padding-top: 20px;">
                    <div class="col-xs-2"><label for="titulo" >Título:</label></div> 
                    <div class="col-xs-10"><textarea style="resize: vertical" class="form-control"  required id="titulo" rows="1" placeholder="Título del proyecto o tecnología" name="titulo"></textarea></div>
                </div>
            	<!-- Input titulo comercial -->
              	<div class="col-xs-12" style="padding-top: 20px;">
                	 <div class="col-xs-2"><label for="tituloComercial">Título comercial:</label></div>
                	 <div class="col-xs-10"><textarea style="resize: vertical" class="form-control" required id="tituloComercial" rows="1" placeholder="Titulo comercial del proyecto o tecnología" name="tituloComercial"></textarea></div>
              	</div>
            	<!-- Input problematica -->
              	<div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="problematica">Problematica a resolver:</label></div>
                	<div class="col-xs-10"><textarea style="resize: vertical" class="form-control" required id="problematica" rows="1" placeholder="Problematica que resolvera" name="problematica"></textarea></div>
              	</div>
                <!-- Input descripcion -->
              	<div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="descripcion">Descripción / resumen:</label></div>
                	<div class="col-xs-10"><textarea style="resize: vertical" class="form-control" required id="descripcion" rows="1" placeholder="Descripción o resumen del proyecto o tecnología" name="descripcion"></textarea></div>
              	</div>   
      
            <div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="name">Institución:</label></div>
                	<div class="col-xs-4"><select id="intitucion" required class="form-control selectpicker" data-style="btn-green" name="instEq">
                  		 @foreach ($institucion as $int)
                                        <option value="{{$int->idInstitucion}}"> {{ $int->nombreInstitucion }}</option>
                                          @endforeach

                	</select>
                    </div>
            </div>  
              
            <div class="col-xs-12" style="padding-top: 20px;">
                	<div class="col-xs-2"><label for="name">Tipo de invención:</label></div>
                	<div class="col-xs-4"><select required id="tipoInvension" class="form-control selectpicker" data-style="btn-green" name="tipoInv">
                  		 @foreach ($inv as $in)
                                        <option value="{{$in->idTipoInvencion}}"> {{ $in->descripcion }}</option>
                                          @endforeach
                	</select>
                    </div>
            </div> 
                    
        <div class="col-xs-12" style="padding-top: 20px;"></div>

          <div class="espacioTitulosContenido">
    <div class="col-xs-4"><h2>1. Equipo emprendedor / inventor</h2></div>
   <div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Captura la información solicitada del equipo que esta participando en el proyecto o tecnologia">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
    </div>
      <div class="col-xs-12">
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
                                <td><input type="text" class="form-control" required id="Nombre1" placeholder="" name="nomPart"/></td>
                                <td class="text-center"> <select id="estudios1" required class="form-control selectpicker" data-style="btn-green" name="gradoEstP">

                                @foreach ($gradoEstudios as $grado)
                                        <option> {{ $grado->nivel }}</option>
                                          @endforeach

                	            </select></td>
                                <td class="text-center"> <select id="area1" required class="form-control selectpicker" data-style="btn-green" name="areaConocimiento">
                 

                                      @foreach ($areaConocimiento as $areaC)
                                      <option> {{ $areaC->descripcion }}</option>
                                      @endforeach

                                    
                	            </select></td>
                                <td><input type="email" required class="form-control" id="correo1" placeholder="" name="correoPart"/></td>
                                <td><input type="tel" required class="form-control" id="telefono1" placeholder="" name="telPart"/></td>
                                <td class="text-center">
                                    <select id="institucion1" required class="form-control selectpicker" data-style="btn-green" name="instPart">

                               @foreach ($institucion as $ti)
                                        <option> {{ $ti->nombreInstitucion }}</option>
                                          @endforeach
                	            </select>
                                </td>


                            </tr>

                        </tbody>
                    </table>        
            </div>
          </div>
                 
