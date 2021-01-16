$(document).ready(function() {
    $("#search").keyup(function() {

        var search = $(this).val();
        $.post("/wogomin/admin/search", { s: search }, function(data) {
            $("#dataSearch").html(data);
        });

        $("#table-after").css("display","none");
        
    });

    $("#roomname").keyup(function() {

        var roomname = $(this).val();
        $.post("/wogomin/admin/checkRoom", { r: roomname }, function(data) {
            
            if(data == '0'){
                data = 'Room name not null';
                $('input#roomname').removeAttr("name");
            }
            else
            if(data == 'true'){
                data = '';
                $('input#roomname').attr("name", "roomname");
            }
            else {
                data = 'Room is exist';
                $('input#roomname').removeAttr("name");
            }

            $("#roomE").html(data);
        });
        
    });

});

$(document).ready(function() {
    $("#search-history").keyup(function() {

        var search = $(this).val();
        $.post("/wogomin/admin/search_history", { s: search }, function(data) {
            $("#dataSearch").html(data);
        });

        $("#table-after").css("display","none");
        
    });

    $('#js-select2').on('change', function() {
        var value = $(this).val();
        $.post("/wogomin/admin/filter_history", { v: value }, function(data) {
            $("#dataSearch").html(data);
        });

        $("#table-after").css("display","none");
      });
});
