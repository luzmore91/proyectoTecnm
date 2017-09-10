<div class="row" style="padding-top:20px;padding-bottom:20px" >

<div class="col-xs-12 espacioTitulosContenido">
    <div class="col-xs-7"><h2>2. Estado de desarrollo/madurez del proyecto/tecnología (TRL)</h2></div>
   <div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Seleccionar el nivel de madurez del proyecto o tecnologia que se esta capturando">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
    </div>

<div class="col-xs-12">
<div class="col-xs-5" style="padding-bottom:20px" >

 	<select class="form-control selectpicker" data-style="btn-green" name="madurezProy">
                  		 @foreach ($TRL as $trl)
                                        <option> {{ $trl->descripcion }}</option>
                                          @endforeach
                	</select>
</div>
    </div>

    <div class="col-xs-12 espacioTitulosContenido">
    <div class="col-xs-3"><h2>3. Sector estratégico</h2></div>
    <div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Seleccionar el sector estrategico al que pertenece el proyecto o tecnologia que se esta capturando">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
    </div>

           <div class="col-xs-12">
<div class="col-xs-5" style="padding-bottom:20px" >
 	<select class="form-control selectpicker" data-style="btn-green" name="sectorEst">
                  		@foreach ($sector as $sector)
                                        <option value="{{$sector->idSector}}"> {{ $sector->descripcion }}</option>
                                          @endforeach
                	</select>

</div>

    </div>
     <div class="col-xs-12 espacioTitulosContenido">
    <div class="col-xs-3"><h2>4. Propiedad Intelectual</h2></div>
    <div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Seleccionar la categoria de propiedad intelectual que pertenece el proyecto o tecnologia que se esta capturando">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
    </div>

<div class="col-xs-12" style="padding-top:20px">

<div class="col-xs-2"><label style="font-style:italic"> Estado actual</label></div>
<div class="col-xs-3">
 	<select class="form-control selectpicker" data-style="btn-green" name="estadoAct">
        @foreach ($propInt as $itera)
        <option> {{ $itera->descripcion }}</option>
        @endforeach
    </select>
</div>

        <div class="col-xs-3"><label>En caso de que esté en proceso, revisión y otorgada la protección</label> <label style="font-style:italic">  favor de indicar el tipo de protección</label></div>
<div class="col-xs-4">
    <select class="form-control selectpicker" data-style="btn-green" name="tipoProt">
        @foreach ($prot as $itera)
        <option> {{ $itera->descripcion }}</option>
        @endforeach
    </select>
</div>

</div>
     <div class="col-xs-12 espacioTitulosContenido">
    <div class="col-xs-5"><h2>5. Lo que persigue el proyecto/tecnología es</h2></div>
    <div class="col-xs-1"><button type="button" class="btn btn-green popAyuda" title="Ayuda"
              data-container="body" data-toggle="popover" data-placement="right"
              data-content="Seleccionar la opción mas adecuada sobre el objetivo que persigue el proyecto o tecnologia que se esta capturando">
              <span class="glyphicon glyphicon-question-sign"></span>
           </button></div>
    </div>

<div class="col-xs-12" style="padding-top:20px">

           <div class="col-xs-2"></div>
<div class="col-xs-3">
 	<select class="form-control selectpicker" data-style="btn-green" name="perProy">
                  		 @foreach ($objProy as $op)
                                        <option> {{ $op->descripcion }}</option>
                                          @endforeach
                	</select>
</div>

        <div class="col-xs-3"><label>En caso de seleccionar la opción "Otro", describir en el recuadro anexo.</label> </div>
<div class="col-xs-4">
 	 <input class="form-control" type="text" name="otro_ObjetivoProyecto" name="otroPerProy"  placeholder="¿Qué persigue el proyecto o tecnologia?"/>
</div>

</div>

