<?php
	$token = $_POST['token'];
	$cUF = 43;
	$tpAmb = 2;
	$ano = 17;
	$CNPJEmitente = $_POST['CNPJ'];
    $serie = 0;
    $nCTIni = 10148;
    $nCTFin = 10148;
    $xJust = "teste para api nsnfe";

	$NFeAPI = new NFeAPI(2);

	$retorno = $NFeAPI->inutilizaNFe($token, $cUF, $tpAmb, $ano, $CNPJEmitente, $serie, $nCTIni, $nCTFin, $xJust);
	print_r($retorno);
?>