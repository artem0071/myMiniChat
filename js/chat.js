$(document).ready(function () {

    //cookie

    var session = $.cookie('session');
    
    function newId() {
        $.ajax({
            url: 'php/lastid.php',
            type: 'POST',
            success: function (data) {
                $.cookie('session',data);
            }
        });
    }

    if (session == null) {
        newId();
    }
    $('#id').text(session);

    // -cookie

    update();

    function update() {
        $('#inchat1').html('');
        $('#inchat2').html('');
        $.ajax({
            url: 'php/fill.php',
            type: 'POST',
            data: {session: session},
            success:function (data) {
                data = JSON.parse(data);
                for (var id in data){
                    fill(data[id]);
                }
                var down1 = $('#inchat1').height();
                $('#chatbody1').scrollTop(down1);
                $('#chatbody2').scrollTop(down1);
                setTimeout(update, 4000);
                $('#info').text('');

            }
        });
    }

    function fill(data) {
        var ChatID = data.Chat_ID;
        var ID = data.Session_ID;
        var text = data.Chat_Text;
        var time = data.Chat_Time;
        var By = data.Sand_By;

        if (By == 1){
            $('#inchat1').append('<div class="col-md-offset-2 col-md-10">'+'<div class="well">'+'<p>'+text+'</p>'+'</div>'+'</div>');
            $('#inchat2').append('<div class="col-md-10">'+'<div class="well">'+'<p>'+text+'</p>'+'</div>'+'</div>'+'<div class="col-md-2"></div>');
        } else {
            $('#inchat1').append('<div class="col-md-10">'+'<div class="well">'+'<p>'+text+'</p>'+'</div>'+'</div>'+'<div class="col-md-2"></div>');
            $('#inchat2').append('<div class="col-md-offset-2 col-md-10">'+'<div class="well">'+'<p>'+text+'</p>'+'</div>'+'</div>');
        }
    }

    function send(text,by) {
        $.ajax({
            url: 'php/send.php',
            type: 'POST',
            data: {session: session, text: text, sender: by},
            success: $('#info').text('Sending')
        });
    }

    $('#send_text_but').click(function () {
        var text = $('#send_text').val();
        send(text,1);
        $('#send_text').val('');
        // update();
    });

    $('#answer_text_but').click(function () {
        var text = $('#answer_text').val();
        send(text,2);
        $('#answer_text').val('');
        // update();
    });

});