<?php
// header("Content-type: application/vnd.ms-excel");
// header("Content-Disposition: attachment; filename=data.xls");
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=Report-".date('dmYHi').".xls"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body>
	<?=$html;?>
</body>
</html>