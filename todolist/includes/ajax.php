<?php 
require(__DIR__."/functions.php");
if($_POST['type']=="insert"){
   $text = $_POST['new-list-item-text'];
   $insert = toinsert($text,$order="null");
   if($insert =="success"){
    $view = selectforview();
    echo $view;
   }

}
if($_POST['type']=="delete"){
    $id = $_POST['id'];
    todelete($id);
    $view = selectforview();
    echo $view;
}
if($_POST['type']=="updatecolor"){
    $id = $_POST['id'];
    //  $text = $_POST['text'];
    $color = $_POST['color'];
    //updatetext($text,$id);
    updatecolor($color,$id);
    $view = selectforview();
    echo $view;
}
if($_POST['type']=="updatetext"){
    $id = $_POST['id'];
    $text = $_POST['text'];
    $result = explode('<a',$text);
    $data = $result[0];
    updatetext($data,$id);
    $view = selectforview();
    echo $view;
}
if($_POST['type']=="markread"){
    $id = $_POST['id'];
    markread($id);
    $view = selectforview();
    echo $view;
}
if($_POST['type']=="sorting"){
    foreach ($_POST["value"] as $key => $value) {
        updateposition($key,$value);
        $view = selectforview();
        echo $view;
        //$data["Position"]=$key+1;
        //updatePosition($data, $value);
    }
}
?>