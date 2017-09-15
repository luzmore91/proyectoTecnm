<?php

Excel::create('Filename', function($excel) {

	 // Set the title
    $excel->setTitle('Our new awesome title');

    // Chain the setters
    $excel->setCreator('Maatwebsite')
          ->setCompany('Maatwebsite');

    // Call them separately
    $excel->setDescription('A demonstration to change the file properties');

////////////////////////////////////////////////////////// Hojas (pestaña)////
 	$excel->sheet('Admin', function($sheet) {


 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Nombre');
		});

 		$sheet->cell('B1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Institucion');
		});

		$sheet->cell('C1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Tipo');
		});

		//Escribir una columna con datos de prueba:
		for($i = 2; $i <= 100; $i++)
		{
		$sheet->cell('A'.$i.'', function($cell) {
		    // manipulate the cell
		    $n = rand();
		    $cell->setValue('NombrePrueba_'.$n.'');
		});
		}

		//Escribir una columna con datos de prueba:
		for($i = 2; $i <= 100; $i++)
		{
		$sheet->cell('B'.$i.'', function($cell) {
		    // manipulate the cell
		    $n = rand();
		    $cell->setValue($n);
		});
		}

		//Escribir una columna con datos de prueba:
		for($i = 2; $i <= 100; $i++)
		{
		$sheet->cell('C'.$i.'', function($cell) {
		    // manipulate the cell
		    $n = rand();
  		    $cell->setValue($n);
		});
		}

    });
/////////////////////////////////////////////////////////////////////////////
 	 	$excel->sheet('Tecnologia-Proyecto', function($sheet) {

 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('ID');
		});

 		$sheet->cell('B1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Titulo');
		});

		$sheet->cell('C1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Titulo Comercial');
		});

		$sheet->cell('D1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Problematica a resolver');
		});

		$sheet->cell('E1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Descripcion');
		});

		$sheet->cell('F1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Institucion');
		});

		$sheet->cell('G1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Tipo de Invencion');
		});

    });
/////////////////////////////////////////////////////////////////////////////
 	 	$excel->sheet('Equipo emprendendor', function($sheet) {

 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('ID');
		});

 		$sheet->cell('B1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Ultimo grado estudios');
		});

		$sheet->cell('C1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Area de Conocimiento');
		});

		$sheet->cell('D1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Email');
		});

		$sheet->cell('E1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Telefono Celular');
		});

    });
/////////////////////////////////////////////////////////////////////////////
 	 	$excel->sheet('Descripcion', function($sheet) {

 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('ID');
		});

 		$sheet->cell('B1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Madurez del proyecto(TLR)');
		});

		$sheet->cell('C1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Sector estrategico');
		});

		$sheet->cell('D1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Estado Actual');
		});

		$sheet->cell('E1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Tipo de proteccion');
		});

		$sheet->cell('F1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Que persigue?');
		});

		$sheet->cell('G1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Riesgos');
		});

    });
///////////////////////////////////////////////////////////////////////////// 	

 	 	$excel->sheet('Recursos', function($sheet) {

 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('ID');
		});

 		$sheet->cell('B1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Recursos Humanos');
		});

		$sheet->cell('C1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Recursos Tecnologicos');
		});

		$sheet->cell('D1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Recursos Financieros');
		});

    });
///////////////////////////////////////////////////////////////////////////// 	

 	 	$excel->sheet('AplicacionesBeneficios', function($sheet) {

 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('ID');
		});

 		$sheet->cell('B1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Usos/Aplicaciones');
		});

		$sheet->cell('C1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Viabilidad');
		});

		$sheet->cell('D1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Beneficios');
		});

    });
///////////////////////////////////////////////////////////////////////////// 	

 	 	$excel->sheet('Graficas', function($sheet) {

 		$sheet->cell('A1', function($cell) {
		    // manipulate the cell
		    $cell->setValue('Colocar grafica aqui.');
		});
		
    });
///////////////////////////////////////////////////////////////////////////// 	


})->download('xlsx');

?>