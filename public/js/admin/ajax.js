$(document).ready(function() {
    $("#search").keyup(function() {

        var search = $(this).val();
        $.post("/wogomin/admin/search", { s: search }, function(data) {
            $("#dataSearch").html(data);
        });

        $("#table-after").css("display","none");
        
    });
});
