$("#add-new-submit").click(function(){
   var text = $("#new-list-item-text").val();
   type="insert";
   $.ajax({
    url: "includes/ajax.php",
    method: "post",
    data:{type:type,text:text},
    success: function(html){
      $("#list").html(html);
    }
  });
})
$(document).ready(function(){
    $( ".deletetab" ).on( "click", function() {
        var id = $(this).closest( "li" ).attr("rel");
        console.log(id);
        type="delete";
        $.ajax({
        url: "includes/ajax.php",
        method: "post",
        data:{type:type,id:id},
        success: function(html){
        $("#list").html(html);
        //window.location.reload();
        }
    });
    })
})
 $('span').bind('dblclick', function() {
    $(this).attr('contentEditable', true);

})
$( "span" ).on( "change", function() {
  alert();
})
//  $(document).on('dblclick','.deletetab',function(){
//     var id = $(this).closest( "li" ).attr("rel");
//     console.log(id);
//     type="delete";
//     $.ajax({
//      url: "includes/ajax.php",
//      method: "post",
//      data:{type:type,id:id},
//      success: function(html){
//        $("#list").html(html);
//      }
//    });
//  })