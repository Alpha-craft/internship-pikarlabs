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
    foreach ($data as $value){
        echo "<tr>";
        echo "<td>".$value['id']."</td>";
        echo "<td>".$value['nama']."</td>";
        echo "<td>".$value['asal']."</td>";
        echo "<td><a href=?id=".$value['id'].">profil</a></td>";
        echo "</tr>";
    }
        
    
}
?>