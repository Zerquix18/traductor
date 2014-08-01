<?php
/**
*
*
* Traductor: De normal a subnormal
*
* @author Zerquix18
* @version 0.1
* @copyright Copyright (c) 2014, Luis A. Martínez
*
*
**/
// Code is poetry... :)
if( ! ('POST' == getenv('REQUEST_METHOD') ) )
	die();

if( ! isset($_POST['texto']) || ! is_string($_POST['texto']) )
	die();

$texto = trim( $_POST['texto'] );

if( empty($texto) )
	die();

/* Traducciones: Reemplaza aleatoriamente por una de esas letras */

$abecedario = array(
		"a" => array('ah', 'A', 'a', 'Aa', 'aA', '4',),
		"á" => array('ah', 'A', 'a', 'Aa', 'aA', '4',),
		"b" => array('B', 'v', 'V', 'b', 'B'),
		"c" => array("c", "C"),
	   	"ch" => array("ch", "cH", "Ch", "CH"),
		"d" => array("D", "d", "dD", "Dd"),
		"e" => array("E", "e", "Ee", "eE", "3",),
		"é" => array("E", "e", "Ee", "eE", "3",),
		"f" => array("f", "F", "fF"),
		"g" => array("g", "G", "q"),
		"h" => array("", "H", "h"),
		"i" => array("y", "i", "I", "j"),
		"í" => array("y", "i", "I", "j"),
		"j" => array("i", "j", "J", "jJ"),
		"k" => array("kk", "K", "k"),
		"l" => array("L", "l"),
		"m" => array("m", "M", "mM"),
		"n" => array("n", "N",),
		"o" => array("o", "O", "Oo", "oO"),
		"ó" => array("o", "O", "Oo", "oO"),
		"p" => array("p", "P"),
		"q" => array("q", "Q", "K", "k"),
		"r" => array("r", "R", "rr", "Rr"),
		"s" => array("S", "s", "z", "Z"),
		"t" => array("t", "T"),
		"u" => array("u", "U", "ú"),
		"ú" => array("u", "U", "ú"),
		"v" => array("b", "v"),
		"w" => array("w", "W"),
		"x" => array("x", "X"),
		"y" => array("Y", "y", "i",),
		"z" => array("z", "Z"),
		"¿" => array(""), //no lo usan ni para cagar xddd
		"?" => array("?", "???", "", "??", ""),
		"." => array(""), // no lo usan
		"," => array(""), // no lo usan
		"—" => array("-", "_", "—"),
		"¡" => array("¡¡", "¡", "", "", "¡¡¡", "",)
	);
/* Reemplaza a base de expresiones regulares */
	$abc = array(
			"/[\s]+(y)+[\s]+/" => " i ",
		);
function reemplazar( $letra ) {
	global $abc, $abecedario;
	if( array_key_exists($letra, $abecedario) )
		$letra = str_replace($letra, $abecedario[$letra][ array_rand($abecedario[$letra]) ] , $letra);
	foreach($abc as $a => $b)
		$letra = preg_replace($a, $b, $letra);

	return $letra;
}
/** a diferencia del de arriba, este reemplaza cosas que van en el texto completo y no una sola letra **/
$t_ = array(
		"/\s\s+/",
		'/\n\n+/',
		'/\t\t+/'
	);
$texto = preg_replace($t_, "", $texto);
$texto_ = str_split( strtolower($texto));
$texto_final = array();
foreach($texto_ as $a )
	$texto_final[] = reemplazar($a);
$texto_final = implode($texto_final);
$texto_final = preg_replace( array_keys($abc), array_values($abc), $texto_final);
if( preg_match("/(a|e|i|o|u)$/i", $texto_final) )
	$texto_final .= '\'';
else
	$texto_final .= $lol[ array_rand($lol = array("", "", "!!", "!", "¡", "", "", " :D") ) ];

echo htmlspecialchars(stripslashes($texto_final));