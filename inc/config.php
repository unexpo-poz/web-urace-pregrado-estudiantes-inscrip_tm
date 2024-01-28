<?php
$enProduccion = true; //cambiar luego a true, esto es para que no sea necesario recargar el codigo

$raizDelSitio		= 'http://'.$_SERVER['SERVER_NAME'].'/web/urace/pregrado/estudiantes/inscrip_tm/';
$urlDelSitio		= 'http://'.$_SERVER['SERVER_NAME'].'/web/urace';

$lapsoProceso		= '2023-1';
$tLapso				= ' Lapso '.$lapsoProceso;
$laBitacora			= $_SERVER[DOCUMENT_ROOT].'/log/pregrado/estudiantes/inscripcion/inscripcion_5mat'.$lapsoProceso.'.log';

$inscHabilitada		= false;
$modoInscripcion	= '2'; // 1: Inscripcion, 2: Inclusion y Retiro

if ($modoInscripcion == '1'){
	$tProceso	= 'Inscripci&oacute;n de Alumnos Regulares Pregrado Ingenier&iacute;a (Cola) MODO 1';
}
else if ($modoInscripcion == '2'){
	$tProceso	= 'Inscripci&oacute;n de Estudiantes Regulares Pregrado Ingenier&iacute;a';
}

// Mensajes del sistema
$mensajepopup		= "RECUERDA QUE PARA FORMALIZAR TU INSCRIPCI&Oacute;N, DEBES LLEVAR DOS PLANILLAS IMPRESAS PARA SELLARLAS EN CONTROL DE ESTUDIOS.";

$mensajeplanilla	= "<strong>ATENCI&Oacute;N:</strong> Inicio del Lapso Acad&eacute;mico ".$lapsoProceso.": Lunes 11/06/2018.";

//$mensajeppal = "Disculpe, el proceso de inscripci&oacute;n culmin&oacute; el 12/06/2018 a las 09:00am.";
$mensajeppal = "Disculpe, el proceso de Inscripci&oacuten finaliz&oacute 07/05/2023";
// Variables 

# valores no bloqueados en dace003
$nobloqueados = '16'; // separar con coma(,) multiples valores. Ej 15,16,120

// Si se requiere imprimir en planilla un mensaje extra, activar esto y colocarlo
// en inc/msgExtra.php
$mensajeExtra		= false; 
//Las distintas sedes de UNEXPO - actualizar de acuerdo a la necesidad
$sedesUNEXPO = array (	'CCS'	=> array('BQTO','CARORA'), 
						'CCS_'  => array('DACECCS'),
						'POZ'	=> array('CENTURA-DACE')
						//'POZ'	=> array('DACEPOZ')
				);

//$sedeActiva = 'BQTO';
//$sedeActiva = 'CCS';
$sedeActiva = 'POZ';
$virtuales = array(
				//'300101' => array('M8','M9','T8','T9','N3','N4')
			);
$minv = 2.5;

$nucleos = $sedesUNEXPO[$sedeActiva];

//$vicerrectorado		= "Luis Caballero Mej&iacute;as";
//$vicerrectorado		= "Barquisimeto";
$vicerrectorado		= "Puerto Ordaz";
$nombreDependencia = 'Unidad Regional de Admisi&oacute;n y Control de Estudios';

// * * * * * OJO OJO OJO OJO * * * * * 
// Cambiar esto manualmente de acuerdo a la jornada.
// Tipo de jornada
//	0 : deshabilitado 
//	1 : solo preinscritos en las materias preinscritas.
//	2 : solo preinscritos, pero pueden cambiar las materias.
//	3 : todos preinscritos o no preinscritos
$tipoJornada = 0;
$tablaOrdenInsc = 'ORDEN_INSCRIPCION';

// Proteccion de las paginas contra boton derecho, no javascript y navegadores no soportados:
if ($enProduccion){
	$botonDerecho = 'oncontextmenu="return false"';
	$noJavaScript = '<noscript><meta http-equiv="REFRESH" content="0;URL=no-javascript.php"></noscript>';
	$noCache	  = "<meta http-equiv=\"Pragma\" content=\"no-cache\">\n";
	$noCache	 .= '<meta http-equiv="Expires" content="-1">';
	$noCacheFin	  = '<head><meta http-equiv="Pragma" content="no-cache"></head>';
}
else {
	$botonDerecho = '';
	$noJavaScript = '';
	$noCache	  = '';
	$noCacheFin	  = '';
}
?>