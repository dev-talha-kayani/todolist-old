<?php require (__DIR__. "/classes.php");

if($_POST['type']=="insert"){
    $obj->insert($_POST['text']);
    echo $obj->viewallspecified();

}
if($_POST['type']=="delete"){
    $obj->deletethat($_POST['id']);
    echo $obj->viewallspecified();
}
if($_POST['type']=="update"){
    $obj->update($_POST['id'],$value);
    echo $obj->viewallspecified();
}



?>