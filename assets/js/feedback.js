$('.form').submit(function(e){
    e.preventDefault();
    let th = $(this);
    $.ajax({
        url: 'vendor/action/tic.php',
        type: 'POST',
        data: th.serialize(),
        success: function(data){
            if(data == '1{"result":"error","resultfile":null,"status":null}'){
            console.log(data);
            $("#erconts").html("Неверный email");
        }else{
            console.log(data);
            setTimeout(function(){
                th.trigger('reset');
                $("#erconts").html("Ваше сообщение успешно отправлено");
            }, 1000)
        }
        },
    })
})