var count_tr = 0;
var count_tr1 = 0;
var ParArreglo = [];
function obtenerDatosEquipo()
{
    var nombreMiembro = document.getElementById("nomPart").value;

    var comboGradoEstudio = document.getElementById("gradoEstP");
    var gradoEstudio = comboGradoEstudio.options[comboGradoEstudio.selectedIndex].text;

    var comboAreaConocimiento = document.getElementById("areaConocimiento");
    var areaConocimiento = comboAreaConocimiento.options[comboAreaConocimiento.selectedIndex].text;

    var correo = document.getElementById("correoPart").value;

    var telefonoMovil = document.getElementById("telPart").value;

    var comboInstitucion = document.getElementById("instPart");
    var institucion = comboInstitucion.options[comboInstitucion.selectedIndex].text;


    var tbody = document.getElementById("contenidoTablaMiembros");
    var tr = document.createElement('tr');
    count_tr++;
    ParArreglo.push({nombre:nombreMiembro,grado:gradoEstudio,area:areaConocimiento,correo:correo,tel:telefonoMovil,institucion:institucion});

    tr.id= "miembro_" + count_tr;
    
    var info = "<td classs='' id='nombreParticipante_"+ count_tr +"' name='nombreParticipante_"+ count_tr +"'>"+ nombreMiembro+"</td>";
    
	info += "<td classs='' id='gradoEstudioParticipante_"+ count_tr +"' name='gradoEstudioParticipante_"+ count_tr +"'>"+ gradoEstudio+"</td>";
  
    info += "<td classs='' id='areaConocimientoParticipante_"+ count_tr +"' name='areaConocimientoParticipante_"+ count_tr +"'>"+ areaConocimiento+"</td>";
    
    info += "<td classs='' id='correoParticipante_"+ count_tr +"' name='correoParticipante_"+ count_tr +"'>"+ correo+"&nbsp&nbsp"+"</td>";
    
    info += "<td classs='' id='telefonoMovilParticipante_"+ count_tr +"' name='telefonoMovilParticipante_"+ count_tr +"'>"+ telefonoMovil+"</td>";
    
    info += "<td classs='' id='institucionParticipante_"+ count_tr +"' name='institucionParticipante_"+ count_tr +"'>"+ institucion+"</td>";
    
	info += "<td classs='' id='botonParticipante_"+ count_tr +"' name='botonParticipante_"+ count_tr +"'>"
            +"<button type='submit' class='btn btn-red' onclick='eliminarParticipante("+tr.id+")'>"
            +"<span class='glyphicon glyphicon-remove'></span>"
            +"</button></td>";
    
  tr.innerHTML = info;
  tbody.appendChild(tr);
  console.log("objetvo BD",ParArreglo);
  limpiarComponentesParticipate();

}
function obtenerDatosRiesgos()
{

    var comboTipoRiesgo = document.getElementById("tipoRiesgo");
    var tipoRiesgo = comboTipoRiesgo.options[comboTipoRiesgo.selectedIndex].text;

    console.log(tipoRiesgo);

    var descripcion = document.getElementById("descRiesgo").value;

    var estrategiaMitigacion = document.getElementById("estMitigacion").value;



    var tbody = document.getElementById("contenidoTablaRiesgos");
    var tr = document.createElement('tr');
    count_tr1++;

    tr.id= "riesgo_" + count_tr1;

    var info="<td classs='' id='nombreRiesgo_"+ count_tr1+"' name='nombreRiesgo_"+ count_tr1 +"'>"+ tipoRiesgo+"</td>";

	info+="<td classs='' id='descripcionRiesgo_"+ count_tr1+"' name='descripcionRiesgo_"+ count_tr1+"'>"+descripcion+"</td>";
    info+="<td classs='' id='estrategiaMitigacion_"+ count_tr1+"' name='estrategiaMitigacion_"+ count_tr1+"'>"+ estrategiaMitigacion+"</td>";

	info += "<td classs='' id='botonRiesgo_"+ count_tr1 +"' name='botonRiesgo_"+  count_tr1 +"'>"
            +"<button type='submit' class='btn btn-red' onclick='eliminarRiesgo("+tr.id+")'>"
            +"<span class='glyphicon glyphicon-remove'></span>"
            +"</button></td>";

  tr.innerHTML = info;
  tbody.appendChild(tr);

  limpiarComponentesRiesgo();
    
}


function eliminarParticipante(idRegistroParticipante)
{
    var registroEliminarParticipante = idRegistroParticipante.id;
    var campoEliminarParticipante = document.getElementById(registroEliminarParticipante);
    campoEliminarParticipante.remove();
    
}

function eliminarRiesgo(idRegistroRiesgo)
{
    var registroEliminarRiesgo = idRegistroRiesgo.id;
    var campoEliminarRiesgo = document.getElementById(registroEliminarRiesgo);
    campoEliminarRiesgo.remove();
    
    console.log(idRegistroRiesgo);
    console.log(registroEliminarRiesgo);
    
}


function limpiarComponentesParticipate() {
    document.getElementById("nomPart").value="";
    document.getElementById("correoPart").value="";
    document.getElementById("telPart").value="";
    document.getElementById("gradoEstP").select_[0].selected = true;
}

function limpiarComponentesRiesgo() {
    document.getElementById("descRiesgo").value="";
    document.getElementById("estMitigacion").value="";
    document.getElementById("tipoRiesgo").select_[0].selected = true;
}



$("#aceptar").click(function() {
    event.preventDefault();
   // var token = $("#token").val();
    $.ajax({
        url:'./insertar',
        type: 'POST',
        contentType: 'application/json',
        data:{Arre:ParArreglo},
        success: function() {
            console.log("Sent");
        },
        dataType:'json'
    });
});
