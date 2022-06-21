<?php 

function fetchAll() {
    $sql = "SELECT * FROM cards";
    $query = dbConnect()->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

 function create($list_title) {
    $sql = "INSERT INTO cards (list_title) values(?)";
    $stmt = dbConnect()->prepare($sql);
    $stmt->execute([$list_title]);
 }