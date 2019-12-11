<?php 
$fileperhitunganungan="counter.txt";
$filenya=fopen($fileperhitunganungan,"r+");
$hitungan=fread($filenya,filesize($fileperhitunganungan));

echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>"); echo("<font face=verdana size=2 color=#FF0000><b>"); echo("Anda pengunjung yang ke:");
echo($hitungan); echo("</b></font>"); echo("</td>"); echo("</tr></table>"); fclose($filenya);

$filenya=fopen($fileperhitunganungan,"w+");
$hitungan=$hitungan+1; fwrite($filenya,$hitungan,strlen($hitungan)); fclose($filenya);
?>