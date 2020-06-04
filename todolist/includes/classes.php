<?php require (__DIR__. "/connect.php");
class Lists {
    function viewall(){
        $lists = ORM::for_table('lists')->limit(50)->find_many();
        return $lists;
        

    }
    function update($id,$value){
        $lists = ORM::for_table('lists') ->where(array(
            'id' => $id
        ))->find_one();
        $lists->text=$value;
        $lists->save();
    }
    function updateclr($id,$value){
        $lists = ORM::for_table('lists') ->where(array(
            'id' => $id
        ))->find_one();
        $lists->color=$value;
        $lists->save();
    }
    function deletethat($id){
        $lists = ORM::for_table('lists') ->where(array(
            'id' => $id
        ))->find_one();
        $lists->delete();
    }
    function insert($value){
        $lists = ORM::for_table('lists')->create();
        $lists->text = $value;
        $lists->save();
    }
    function viewallspecified(){
        $lists = ORM::for_table('lists')->limit(50)->find_many();
        $textdata="";
        foreach($lists as $listst){
            $id = $listst['id'];
            $text = $listst['text'];
            $color = $listst['color'];
            $textdata .='
        <li color="1" class="colorBlue" rel="1" id="'.$id.'">
          <span id="2listitem" title="Double-click to edit..." style="opacity: 1;">'.$text.'</span>

          <div class="draggertab tab"></div>

          <div class="colortab tab"></div>

          <div class="deletetab tab" style="width: 44px; display: block; right: -64px;">
          </div>

          <div class="donetab tab"></div>
        </li>';
        }
        return $textdata;

        

    }
}
$obj = new Lists();





?>