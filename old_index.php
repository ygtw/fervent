﻿<html>

<head>
<meta http-equiv="Refresh"; content=7;URL=menu.htm>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="default.css" type="text/css">
<title>\\ 熱血物語の高校傳說</title>
<meta name="keywords" content="熱血高校、熱血物語">
</head>

<body>



</body>

</html>

<style type="text/css">
.style1 {
	text-align: center;
	border-width: 0;
}
.style2 {
	text-align: right;
	border-width: 0;
}
</style>

<table style="width: 100%; height: 100%">
	<tr>
		<td class="style1" style="height: 99%; width: 100%">
		<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj1" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" border="0" style="width: 90%; height: 90%; float: middle">
	<param name="movie" value="welcome.swf" />
	<param name="quality" value="High" />
	<param name="loop" value="false" />
	<param name="menu" value="false" />
	<param name="bgcolor" value="#000000">
	<embed src="welcome.swf" pluginspage="http://r.office.microsoft.com/r/rlidFPGetFlash?clid=1028&amp;ver=12&amp;app=spdesign.exe" type="application/x-shockwave-flash" name="obj1" style="width: 90%; height: 90%" quality="High" loop="false" menu="false" bgcolor="#000000" /></object>
&nbsp;<br>
		<img src="Blogo.png" width="300" height="50"></td>
	</tr>
	<tr>
		<td class="style2">&nbsp;<?php
        $counter = "counter.txt";
        $fd = fopen($counter, "r");
        $num =  fread($fd, filesize( $counter ));
        fclose($fd);
        $fd = fopen($counter, "w");
        $users = $num + 1;
        echo "回憶人次: $users  ";
        fwrite($fd, $users);
        fclose($fd);
?>&nbsp;&nbsp; 七秒後進入選單...... <a href="menu.htm">skip</a></td>
	</tr>
</table>

