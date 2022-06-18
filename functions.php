<?php 

// TODOをすべて取得
function fetchAll()
{
    $sql = "SELECT * FROM tasks";
    $query = dbConnect()->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// TODO作成
function create($title)
{
    $now = date('Y/m/d');
    $sql = 'insert into tasks (title,created) values(?,?)';
    $stmt = dbConnect()->prepare($sql);
    $stmt->execute([$title, $now]);
}

function update($id, $title)
{
    $sql = 'UPDATE tasks SET title=?, modified = ? WHERE tasks.id = ?';
    $stmt = dbConnect()->prepare($sql);
    $stmt->execute([$title, date('Y/m/d'), $id]);
}

// 削除
function delete($id)
{
    $sql = 'delete from tasks WHERE tasks.id = ?';
    $stmt = dbConnect()->prepare($sql);
    $stmt->execute([$id]);
}
