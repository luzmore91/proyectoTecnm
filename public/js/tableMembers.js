var count_tr=0;
function obtenerDatosEquipo()
{ 
    
    var nombreMiembro = document.getElementById("nomPart").value;
    var gradoEstudio = document.getElementById("gradoEstP").value;
    var areaConocimiento = document.getElementById("areaConocimiento").value;
    var correo = document.getElementById("correoPart").value;
    var telefonoMovil = document.getElementById("telPart").value;
    var institucion = document.getElementById("instPart").value;
     

    var tbody = document.getElementById("altaEquipo");
    var tr = document.createElement('tr');
    count_tr++;
    

    tr.id= "miembro_" + count_tr;
    
    var info = "<td classs='' id='nombreParticipante_"+ count_tr +"' name='nombreParticipante_"+ count_tr +"'><input name="'cont'" style="'display: none;'" value='"count_tr"'/>"+ nombreMiembro+"</td>";
    
	info += "<td classs='' id='gradoEstudioParticipante_"+ count_tr +"' name='gradoEstudioParticipante_"+ count_tr +"'>"+ gradoEstudio+"</td>";
  
    info += "<td classs='' id='areaConocimientoParticipante_"+ count_tr +"' name='areaConocimientoParticipante_"+ count_tr +"'>"+ areaConocimiento+"</td>";
    
    info += "<td classs='' id='correoParticipante_"+ count_tr +"' name='correoParticipante_"+ count_tr +"'>"+ correo+"&nbsp&nbsp"+"</td>";
    
    info += "<td classs='' id='telefonoMovilParticipante_"+ count_tr +"' name='telefonoMovilParticipante_"+ count_tr +"'>"+ telefonoMovil+"</td>";
    
    info += "<td classs='' id='institucionParticipante_"+ count_tr +"' name='institucionParticipante_"+ count_tr +"'>"+ institucion+"</td>";
    
	info += "<td classs=''  id='botonParticipante_"+ count_tr +"' name='botonParticipante_"+ count_tr +"'>"
            +"<button type='submit' class='btn btn-red' onclick='eliminarParticipante("+tr.id+")'>"
            +"<span class='glyphicon glyphicon-remove'></span>"
            +"</button></td>";
    
tr.innerHTML = info;
tbody.appendChild(tr);
    
}


function eliminarParticipante(idRegistro)
{
    var registroeliminar = idRegistro.id;
    var campoEliminar = document.getElementById(registroeliminar);
    campoEliminar.remove();
    
    console.log(registroeliminar);
    console.log(idRegistro);

    
    
    
}
