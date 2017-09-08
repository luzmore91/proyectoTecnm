<div class="row">
<div class="col-xs-13 espacioTitulosContenido">
<div class="col-xs-4"><h2>6. Colaboración con otras IES.</h2></div>
<div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Realizar descripción de Institución de Educación Superior y el tipo de colaboración de proyecto.">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
</div>
<div class="col-xs-12">
<label style="font-style:italic">Describa las IES y el tipo de colaboración que el proyecto tiene con éstas.</label> </div>

<div class="col-xs-12">
<textarea style="resize: vertical" class="form-control" rows="6" placeholder= "Descripción de Institución de Educación Superior
" title="Descripción IES y tipo de colaboración" required></textarea></div>
             
<div class="col-xs-13 espacioTitulosContenido">
<div class="col-xs-2"><h2>7. Riesgos.</h2></div>
<div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Describa los riesgos asociados con su proyecto y sus estrategias de mitigación.">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
</div>
<div class="col-xs-12">
<label style="font-style:italic">Describa los riesgos asociados con su proyecto/tecnología, y sus estrategias de mitigación.</label></div>

<div class="col-xs-12">
<table id="altaEquipo" class="table table-striped table-hover sortable">
                        <thead>
                            <tr>
                                <th><center>Tipo de riesgo</center></th>
                                <th><center>Descripción</center></th>
                                <th><center>Estrategia de mitigación</center></th>                             
                            </tr>
                        </thead>
             
                        <tbody>
                             <tr>
                                <td class="text-center"> <select id="estudios1" class="form-control selectpicker" data-style="btn-green">
                  		          @foreach ($riesgos as $ri)
                                        <option> {{ $ri->descripcion }}</option>
                                          @endforeach
                	            </select></td>
                <td><textarea class="form-control" id="Decripcion1" placeholder="Descripción" style="resize: none" title="Se requiere una descripción" required></textarea></td>
                <td><textarea class="form-control" id="Estrategia1" placeholder="Estrategia" style="resize: none" title="Se requiere una estrategia" required="required"></textarea></td>
                   
        
                       


            </tbody>
</table></div>

<div class="col-xs-13 espacioTitulosContenido">
<div class="col-xs-3"><h2>8. Análisis del entorno.</h2></div>
<div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Indique el tamaño de la industria a la que va dirigida su proyecto">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
</div>

<div class="col-xs-12">
<label style="font-style:italic">Indique el tamaño de la industria a la que va dirigida su tecnología/proyecto, la industria que le proveería sus insumos, clientes/consumidores de su tecnología/proyecto, las tecnologías/proyectos competidores y sus ofertas, y sus factores de demanda.</label>
<textarea style="resize: vertical" class="form-control" rows="6" placeholder= "Indique el tamaño de la industria a la que va dirigida su tecnología
" title="Indique el tamaño de la industria" required></textarea>
</div></div>
