<?php

function process_template($template_name)
{
  ob_start();
  require "$template_name";
  $res = ob_get_contents();
  ob_end_clean();
  return $res;
}

$template_data = [];

if (count($_REQUEST) === 0) {
    $template_data["title"] = "Выбор11";
    echo process_template(__DIR__ . "/view/firstScreen.php");
} else {
    $login = $_REQUEST["login"];

    if ($login === "yes") {
        echo process_template(__DIR__ . "/view/loginYes.php");
    } else {
        echo process_template(__DIR__ . "/view/loginNo.php");
    }
}


?>
