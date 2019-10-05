<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/hw34/chat/_db.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/hw34/chat/index.html');

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);
$link = Db::getDbLink();


var_dump($data['func']);


if ($data['func'] == 'addMessage'){

    $query = 'INSERT INTO messages (name, message) VALUES ("' .$data['nick']. '", "' . $data['message'].'");';

}
if ($data['func'] == 'getMessage'){

    $query = 'SELECT * FROM messages;';
}
var_dump($query);

$result = mysqli_query($link, $query);
$resultGet = json_encode(mysqli_fetch_all($result));

//var_dump(json_encode($resultGet));
var_dump($resultGet);
//$count = mysqli_num_rows($result);


//for ($i = 0; $i < $count; $i++) {
//    $row = mysqli_fetch_assoc($result);
//
//    echo '<tr>
//                            <td>' . $row['id'] . '</td>
//                            <td>' . $row['name'] . '</td>
//                            <td>' . $row['message'] . '</td>
//
//                    </tr>';
//}
