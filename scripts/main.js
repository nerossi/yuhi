$("#rs").css("font-family",'THEsuperpower');
$(function() {

    var maxLength = 15;
    var mawRow = 3;

    $('#T').on('input focus keydown keyup', function() {

        //get Textearea text
        var text = $(this).val();

        //Split with \n carriage return
        var lines = text.split("\n"); 

        for (var i = 0; i < lines.length; i++) {
            if (lines[i].length > maxLength) {
                lines[i] = lines[i].substring(0, maxLength);
            }     
        }

        //On supprime ce qui dépasse... :)
        while (lines.length > 3){    
            lines.pop();
        }

        //Join with \n.
        //Set textarea
        $(this).val(lines.join("\n"));

        var content = document.createElement("div");
        content.innerHTML = $("#T").val().replace(/(\n|\r|\r\n)/g, '<br>');
        $("#rs").empty();
        $('#rs').append(content);
    });
});
$("#sel").change(function() {
    $("#rs").css("font-family",$(this).val())
});

function ClickToKakao(){
    var win = window.open('http://pf.kakao.com/_xlxixmlj', '_blank');
    win.focus();
}
