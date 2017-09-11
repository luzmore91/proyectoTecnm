var count_tr = 0;
var count_tr1 = 0;
var ParArreglo = [];
var RiesArreglo = [];
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


    var tbodyPart = document.getElementById("cuerpoTabla");
    var trPart = document.createElement('tr');
    count_tr++;
    
    var nom = getNombreBien(nombreMiembro);

    ParArreglo.push({fk_institucion:institucion,
                     fk_idGradoEstudios:gradoEstudio,
                     fk_idAreaConocimientos:areaConocimiento,
                     fk_direccion:'',
                     correoElectronico:correo,
                     nombre:nom[0],
                     apellidoPaterno:nom[1],
                     apellidoMaterno:nom[2],
                     numeroMovil:telefonoMovil,
                     fechaNacimiento:'0000-00-00',
                     curp:'',
                     genero:0,
                     telefonoFijo:0,
                     numeroControl:'',
                     correoInstitucional:correo,
                     bajaLogica:1
                    });

    trPart.id= "miembro_" + count_tr;
    
    var infoPart = "<td classs='' id='nombreParticipante_"+ count_tr +"' name='nombreParticipante_"+ count_tr +"'>"+ nombreMiembro+"</td>";

	infoPart += "<td classs='' id='gradoEstudioParticipante_"+ count_tr +"' name='gradoEstudioParticipante_"+ count_tr +"'>"+ gradoEstudio+"</td>";
  
    infoPart += "<td classs='' id='areaConocimientoParticipante_"+ count_tr +"' name='areaConocimientoParticipante_"+ count_tr +"'>"+ areaConocimiento+"</td>";
    
    infoPart += "<td classs='' id='correoParticipante_"+ count_tr +"' name='correoParticipante_"+ count_tr +"'>"+ correo+"&nbsp&nbsp"+"</td>";
    
    infoPart += "<td classs='' id='telefonoMovilParticipante_"+ count_tr +"' name='telefonoMovilParticipante_"+ count_tr +"'>"+ telefonoMovil+"</td>";
    
    infoPart += "<td classs='' id='institucionParticipante_"+ count_tr +"' name='institucionParticipante_"+ count_tr +"'>"+ institucion+"</td>";
    
	infoPart += "<td classs='' id='botonParticipante_"+ count_tr +"' name='botonParticipante_"+ count_tr +"'>"
            +"<button type='submit' class='btn btn-red' onclick='eliminarParticipante("+trPart.id+")'>"
            +"<span class='glyphicon glyphicon-remove'></span>"
            +"</button></td>";
    
  trPart.innerHTML = infoPart;
  tbodyPart.appendChild(trPart);

  limpiarComponentesParticipate();

}

function getIDEliminar(validandoId){
     var numeroID = validandoId.split("_");
    console.log("id",numeroID);
         return numeroID;
}
function getNombreBien(nombre){
    var nombreC = nombre.split(" ");
    var nombresArray = new Array(2);
    console.log("numero de valores "+nombreC.length);

    //obtener apellidos
        nombresArray[2] = nombreC[nombreC.length-1];
            nombresArray[1] = nombreC[nombreC.length-2];

    //obtener nombres
    numeroNombres = nombreC.length-2;
      console.log(numeroNombres);

    switch(numeroNombres){
        case 1:
              nombresArray[0] =nombreC[nombreC.length-3];
            break;
        case 2:
              nombresArray[0] =nombreC[nombreC.length-4]+" "+nombreC[nombreC.length-3];
            break;

        case 3:
              nombresArray[0] =nombreC[nombreC.length-5]+" "+nombreC[nombreC.length-4]+" "+nombreC[nombreC.length-3];
            break;
                        }

     console.log(nombresArray);
     return nombreC;

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



    RiesArreglo.push({fk_idTipoRiesgo:document.getElementById("tipoRiesgo").value,
                      estrategiaMitigacion:estrategiaMitigacion ,
                      descripcion:descripcion,
                      bajaLogica:1});


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
    ParArreglo.splice(getIDEliminar(registroEliminarParticipante), 1);
}

function eliminarRiesgo(idRegistroRiesgo)
{
    var registroEliminarRiesgo = idRegistroRiesgo.id;
    var campoEliminarRiesgo = document.getElementById(registroEliminarRiesgo);
    campoEliminarRiesgo.remove();

    console.log(idRegistroRiesgo);
    console.log(campoEliminarRiesgo);
  RiesArreglo.splice(getIDEliminar(registroEliminarRiesgo), 1);
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
        data:{Participante:ParArreglo,Riesgos:RiesArreglo},
        success: function() {
            console.log("Sent");
        },
        dataType:'json'
    });
});
