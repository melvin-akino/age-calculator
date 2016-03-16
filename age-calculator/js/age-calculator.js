$(function() {
    $( "#birthdate" ).datepicker({yearRange:'1900:now', maxDate:'now'});
    $( "#birthdate" ).datepicker( "option", "changeYear", true );
    $( "#birthdate" ).datepicker( "option", "changeMonth", true );
    $( "#saildate" ).datepicker();
    $( "#saildate" ).datepicker( "option", "changeYear", true );
    $( "#saildate" ).datepicker( "option", "changeMonth", true );

    $("button[type=reset]").click(function() {
        $("#result").css('display','none');
    });     
});
$(document).ready(function() {
    $("#result").css('display','none');
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
            $("#result").css('display','block');
            if (data.result) {
                $("#result-text").html(data.result);
                $('#age-calculator').each(function(){
                    this.reset();
                });    
            }
            else {
                alert("error");
            }
        });

        event.preventDefault();
    });
});