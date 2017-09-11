$('.Send').on('click',function(){
 
   var message =  $('.Message textarea').val();
   $('.Message textarea').attr('disabled','disabled');
    if(message.length >= 1){
        $.ajax({
            url: 'http://lar.loc/action.php',
            type: 'post',
            data: 'target=send&message='+message,
            success: function(data){
               
                if(data == 1){
                  setTimeout(function() {
                    $('.Message textarea').removeAttr('disabled').val('');
                    $('.status').html('<h3>Сообщение отправлено!</h3>');
                  },1000);
                }else{
                    $('.status').html('<h3>Сообщение не отправлено!</h3>');
                }
            }
        });
    }
});
var clas;
setInterval(function(){
    $.ajax({
        url: 'http://lar.loc/action.php',
        type: 'post',
        data: 'target=get',
        success: function(data){
          /*$('.MainWindow').html(data);*/
            var mass = data.split('|');
            console.log(mass);
            mass[1];
            var obj = JSON.parse(mass[0]);
            $('.MainWindow').html('');
            $.each(obj, function(key,value){
                if(mass[1] == value.m_id_user){
                    clas = 'question';
                }else{
                    clas = 'answer';
                }
                $('.MainWindow').append("<div class='UserMessage "+clas+"'><span class='date'>"+value.m_time+"</span>"+value.m_message+"</div>");
               
            });
            
            var h = $('.UserMessage').last().offset().top;
            $('.MainWindow').scrollTop(h);
        }
    })
},4000);