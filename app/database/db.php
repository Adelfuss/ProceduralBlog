<?php
session_start();
require_once "connect.php";
$conditions = [
    'admin' => 1,
    'username' => 'Bohdan_Lyhoshapko',
    'email' => 'bohdan19022010@gmail.com',
    'password' => 'testadmin'
];
//$users = selectAll('users',$conditions);
//dd($users);
//$user = selectOne('users',$conditions);
//dd($user);
//$id = create('users',$conditions);
////dd($id);

//$updateId = update('users',2,$conditions);
//dd($updateId);

//$id = delete('users',2);
//echo $id;

function selectAll($table,$conditions = []){
     global $conn;
    $sql = "SELECT * FROM $table";
     if (empty($conditions)){
         $stmt = executeQuery($sql,$conditions);
         $users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
         return $users;
     }
     else {
       $i=0;
       foreach ($conditions as $key =>$value){
           if ($i === 0){
               $sql = $sql . " WHERE $key = ?";
           }
           else {
               $sql = $sql . " AND $key = ?";
           }
           $i++;
       }
       $stmt = executeQuery($sql,$conditions);
       $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
       return $records;
     }
}

function selectOne($table,$conditions){
    global $conn;
    $sql = "SELECT * FROM $table";
        $i=0;
        foreach ($conditions as $key =>$value){
            if ($i === 0){
                $sql = $sql . " WHERE $key = ?";
            }
            else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql,$conditions);
        $users = $stmt->get_result()->fetch_assoc();
        return $users;
        //dd($sql);
}

function create($table,$data){
    global $conn;
    $sql = "INSERT INTO $table SET ";    //remember
    $i=0;
    foreach ($data as $key =>$value){
        if ($i === 0){
            $sql = $sql . " $key = ?";
        }
        else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table,$id,$data){
    global $conn;
    $sql = "UPDATE $table SET ";    //remember
    $i=0;
    foreach ($data as $key =>$value){
        if ($i === 0){
            $sql = $sql . " $key = ?";
        }
        else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id = ?";
    $data['id'] = $id;
    $stmt = executeQuery($sql,$data);
    $id = $stmt->affected_rows;
    return $id;
}

function delete($table,$id){
    global $conn;
    $sql = "DELETE FROM $table WHERE id = ?";    //remember

    $stmt = executeQuery($sql,['id'=>$id]);
    $id = $stmt->affected_rows;
    return $id;
}

function executeQuery($sql,$data){
    global  $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s',count($values));
    $stmt->bind_param($types,...$values);      //remember
    $stmt->execute();
    return $stmt;
}
function dd($data){
    echo "<pre>", print_r($data) , "</pre>";
    die();
}