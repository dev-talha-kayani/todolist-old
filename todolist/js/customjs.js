$(document).ready(function(){
    $(".buttonsave").hide();
})
$("#add-new-submit").click(function(){
    var check = $("#new-list-item-text").val();
    if(check ==""){
        alert("insert data");
    }else{
        var form = $("#add-new").serialize();
        //console.log(form);
        $.ajax({
            url: "includes/ajax.php",
            data: form+"&type=insert",
            method:"POST",
            success: function(data) {
                $("#list").html(data);
            }
        })
    }
})

$(function(){
    var index = 0;
    var class_list = ["colorGreen", "colorRed", "colorBlue"];
    $(document).on("click",".colortab",function() { 
        $(this).closest('li').removeClass();
            $(this).closest('li').toggleClass(class_list[index++],class_list[index]);
             index %= class_list.length;
             var id = $(this).closest('li').attr('rel');
             var color =  $(this).closest('li').attr("class");
             type="updatecolor";    
            $.ajax({
                url: "includes/ajax.php",
                data:{id:id,type:type,color:color},
                method:"POST",
                success: function(data) {
                    $("#list").html(data);
                }
            })
    });
});
$(document).on("dblclick",".deletetab",function() {
    var id = $(this).closest('li').attr('rel');
        type="delete";    
    //console.log(form);
        $.ajax({
            url: "includes/ajax.php",
            data:{id:id,type:type},
            method:"POST",
            success: function(data) {
                $("#list").html(data);
            }
        })
})
$('span').bind('dblclick',function(){
        $(this).attr('contentEditable',true);
        $(this).append('<a class="buttonsave">Save</a>');
});
$(document).on("click",".buttonsave",function() {
    var text = $(this).closest('li').find("span").html();
    var id = $(this).closest('li').attr('rel');
 //   var color =  $(this).closest('li').attr("class");
   // alert(color);
    type="updatetext";    
        $.ajax({
            url: "includes/ajax.php",
            data:{id:id,type:type,text:text},
            method:"POST",
            success: function(data) {
                $("#list").html(data);
                $(".buttonsave").hide();
                location.reload();
            }
        })
})
$(document).on("click",".donetab",function() {
    var id = $(this).closest('li').attr('rel');
    var type="markread";    
    $.ajax({
        url: "includes/ajax.php",
        data:{id:id,type:type},
        method:"POST",
        success: function(data) {
            $("#list").html(data);
            $(".buttonsave").hide();
        }
    })
})
$(document).on("click",".draggertab ",function() {
var $sortable = $( "#list" );
$sortable.sortable({
    stop: function ( event, ui ) {
        var type = "sorting";
        var parameters = $sortable.sortable( "toArray" );

        $.post("includes/ajax.php",{value:parameters,type:type},function(result){
            $("#list").html(data);
        });
    }
});
})