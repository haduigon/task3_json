<?php


function drawTable(array $array): void {


    $html='<table border="1">';
    $html.='<tbody>';

    foreach($array as $row){


        $html.=""<th width='200px'>$row</th>;

    }

    $html.='</tbody>';
    $html.='</html>'

        echo $html;

}


?>