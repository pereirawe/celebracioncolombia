function counter(){
    var fecha=new Date('2019','9','20','0','00','00')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0
    if (fecha>hoy){
       
        var diferencia=((fecha.getTime()-hoy.getTime())/1000) - (86400*30)
        //console.log(diferencia)
        semanas = Math.floor(diferencia/604800)

        diferencia=diferencia-(604800*semanas)
        dias=Math.floor(diferencia/86400)

        diferencia=diferencia-(86400*dias)
        horas=Math.floor(diferencia/3600)
        
        diferencia=diferencia-(3600*horas)        
        minutos=Math.floor(diferencia/60)
        
        diferencia=diferencia-(60*minutos)
        segundos=Math.floor(diferencia)

        $('#countWeeks').html(semanas)
        $('#countDays').html(dias)
        $('#countHours').html(horas)
        $('#countMinutes').html(minutos)
        $('#countSeconds').html(segundos)

    } else{
        //  alert(hoy);
    }
}

timer = setInterval(counter, 1000);



$('#clock').countdown('2019/09/20 01:00:00')
    .on('update.countdown', function(event) {
    var format = '%H:%M:%S';
    if(event.offset.totalDays > 0) {
        format = '%-d day%!d ' + format;
    }
    if(event.offset.weeks > 0) {
        format = '%-w week%!w ' + format;
    }
    $(this).html(event.strftime(format));
    })
    .on('finish.countdown', function(event) {
    $(this).html('This offer has expired!')
        .parent().addClass('disabled');

});

/*
    <div class="countdown">
        <span id="clock"></span>
    </div>
        */

