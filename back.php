<?php
$data=json_decode(file_get_contents('php://input'), true);
print_r($data);
echo $data['name'];
?>
<html>
<head>
<h1></h1>
</head>
<body>
</body>
</html>