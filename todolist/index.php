<?php require (__DIR__. "/includes/classes.php");?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <title></title>
</head>

<body>
  <div id="page-wrap">
    <div id="header">
      <h1><a href="">PHP Sample Test App</a></h1>
    </div>

    <div id="main">
      <noscript>This site just doesn't work, period, without JavaScript</noscript>

      <ul id="list" class="ui-sortable">
     <?php  $allcities = $obj->viewall();
        foreach($allcities as $worldcities){
            $id = $worldcities['id'];
            $text = $worldcities['text'];
            $color = $worldcities['color'];
    ?>
        <li color="1" class="colorBlue" rel="<?php echo $id;?>" id="<?php echo $id;?>">
          <span id="2listitem" title="Double-click to edit..." style="opacity: 1;"><?php echo $text;?></span>

          <div class="draggertab tab"></div>

          <div class="colortab tab"></div>

          <div class="deletetab tab" style="width: 44px; display: block; right: -64px;">
          </div>

          <div class="donetab tab"></div>
        </li>
        <?php } ?>

      </ul>
	  <br />

      <form action="" id="add-new" method="post">
        <input type="text" id="new-list-item-text" name="new-list-item-text" />
        
        <a id="add-new-submit" class="button" href="javascript:;">Add</a>
      </form>

      <div class="clear"></div>
    </div>
  </div>
</body>
<script src="js/customjs.js"></script>
</html>
