<?php
global $template_data;

$title = $template_data["title"];
?>

<html>
<head>
</head>
<body>
    <h1><?= $title ?></h1>

    <div>
        <a href="?login=yes">ХОРОШО</a>
    </div>

    <div>
        <a href="?login=no">ПЛОХО</a>
    </div>

</body>
</html>
