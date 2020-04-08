<?php
session_start();
$capnum=$_SESSION['capnum'];
	//echo $capnum

$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("abc.xml");
if (!$xml)
{
	$ehr=$xml->createElement("ehr");
	$xml->appendChild($ehr);
}
else
{
	$ehr=$xml->firstChild;
}
if (isset($_POST['submit']))
{
	$fname=$_POST['firstname'];
	$sname=$_POST['lastname'];
	$sage=$_POST['age'];
	$sgen=$_POST['gender'];
	$sadd=$_POST['address'];
	$sdoc=$_POST['doctor'];
	$sdate=$_POST['date'];
	$ssum=$_POST['summary'];
	$sdiag=$_POST['diagnostics'];
	$sinvest=$_POST['investigation'];
	$sreport=$_POST['report'];
	$sadvice=$_POST['advice'];
	$sobserve=$_POST['observation'];
	$sfollow=$_POST['followup'];
	
	$form=$xml->createElement("form");
	$ehr->appendChild($form);
	
	$name=$xml->createElement("name",$fname);
	$form->appendChild($name);
	
	$sur_name=$xml->createElement("sur_name",$sname);
	$form->appendChild($sur_name);
	
	$s_age=$xml->createElement("s_age",$sage);
	$form->appendChild($s_age);
	
	$gen_der=$xml->createElement("gen_der",$sgen);
	$form->appendChild($gen_der);
	
	$add_ress=$xml->createElement("add_ress",$sadd);
	$form->appendChild($add_ress);
	
	$doc_tor=$xml->createElement("doc_tor",$sdoc);
	$form->appendChild($doc_tor);
	
	$da_te=$xml->createElement("da_te",$sdate);
	$form->appendChild($da_te);
	
	$sum_mary=$xml->createElement("sum_mary",$ssum);
	$form->appendChild($sum_mary);
	
	$diag_nose=$xml->createElement("diag_nose",$sdiag);
	$form->appendChild($diag_nose);
	
	$invest_gt=$xml->createElement("invest_gt",$sinvest);
	$form->appendChild($invest_gt);
	
	$rep_ort=$xml->createElement("rep_ort",$sreport);
	$form->appendChild($rep_ort);
	
	$ad_vice=$xml->createElement("ad_vice",$sadvice);
	$form->appendChild($ad_vice);
	
	$ob_serve=$xml->createElement("ob_serve",$sobserve);
	$form->appendChild($ob_serve);
	
	$follow_up=$xml->createElement("follow_up",$sfollow);
	$form->appendChild($follow_up);
	
	//echo"<xmp>".$xml->saveXML()."</xmp>";
	$xml->save("abc.xml");
	$temp=file_get_contents("abc.xml");

	file_put_contents("$fname$capnum.xml",$temp);
	
}
?>
<html>
<body>
ur ehr is saved 
</body>
</html>
