$(document).ready(function(){
    $("#signup").click(function(){
        var mail = $("#mail").val();
        $( "#mail" ).attr( 'disabled', true );
	$( "#signup" ).off( 'click' );
	$( "#mail" ).next().html( "Thanks!" )
        $.ajax({
            url: 'mail.php',
            type: 'GET',
            data : 'mail='+mail,
            beforeSend: function(){},
            success: function(){
                $( '#feedback' ).html( "<div style='background-color: #449d44;'>Got it :)</div>" );
            },
	    error : function(){
                $( '#feedback' ).html( "<div style='background-color: #c9302c;'>:( Something went wrong.</div>" );
	    }
        });
    });
});
