<?php

function getID($id){
$index = null;
global $input;
foreach($input as $i => $value){
        if($value['id'] == $id){
            $index = $i;
        }
    }
    return $index;
}
function showProfile($input,$get_id){
    echo "<h4>profil siswa id = ".$input[$get_id]['id']."</h4>";
    echo "<div class='list-group'>";
    echo "<ul>";
    echo "<li class='list-group-item' >id : ".$input[$get_id]['id']."</li>";
    echo "<li class='list-group-item' >nama :".$input[$get_id]['nama']."</li>";
    echo "<li class='list-group-item' >asal : ".$input[$get_id]['asal']."</li>";
    echo "</ul>";
    echo "</div>";
    echo "<a class='btn btn-primary' href='?'>Kembali</a>";

}
function showTable($data){
    echo "<table class='table table-hover' border='1' >";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>nama</th>";
    echo "<th>asal</th>";
    echo "<th>profil</th>";
    echo "</tr>";
    foreach ($data as $value){
        echo "<tr>";
        echo "<td>".$value['id']."</td>";
        echo "<td>".$value['nama']."</td>";
        echo "<td>".$value['asal']."</td>";
        echo "<td><a href=?id=".$value['id']."&profil=".$value['id'].">profil</a></td>";
        echo "</tr>";
    }       
    echo "</table>";
}
function search($input,$find){
    $wadah = [];
    foreach($input as $i => $value){
        if(strpos($value['id'],$find) !== false){
            array_push($wadah,$value);
        }
    }
    if(isset($wadah)){
        showTable($wadah);
    }
}
?>