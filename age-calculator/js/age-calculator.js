$(function() {
    $("#success").css('display','none');
    $("#failed").css('display','none');
    $( "#birthdate" ).datepicker({yearRange:'1900:c+1'});
    $( "#birthdate" ).datepicker( "option", "changeYear", true );
    $( "#birthdate" ).datepicker( "option", "changeMonth", true );
    $( "#saildate" ).datepicker({yearRange:'1900:c+20'});
    $( "#saildate" ).datepicker( "option", "changeYear", true );
    $( "#saildate" ).datepicker( "option", "changeMonth", true );

    $("button[type=reset]").click(function() {
        $("#success").css('display','none');
        $("#failed").css('display','none');
    });     
});
$(document).ready(function() {
    $("#age-calculator").submit(function(event) {
        $.ajax({
            method: "POST",
            url: $(this).attr('action'),
            dataType: 'json',
            data: { 
                birthdate: $('#birthdate').val(),   
                saildate: $('#saildate').val()
            }
        })
        .done(function( data ) {
            if (data.result) {
                $("#success").css('display','block');
                $("#result-text").html(data.result);
                $('#age-calculator').each(function(){
                    this.reset();
                });    
            }
            else {
                $("#failed").css('display','block');
            }
        });

        event.preventDefault();
    });
});
