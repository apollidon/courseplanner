$(document).ready(function(){

	$( "#first" ).focus(function() {
        if(this.value=='Please enter your first name.'){this.value=''}
     });

     $( "#first" ).blur(function() {
        if(this.value==''){this.value='Please enter your first name.'}
     });

    $( "#last" ).focus(function() {
        if(this.value=='Please enter your last name.'){this.value=''}
     });

    $( "#last" ).blur(function() {
        if(this.value==''){this.value='Please enter your last name.'}
     });

    $( "#email" ).focus(function() {
        if(this.value=='Please enter a valid email.'){this.value=''}
     });

    $( "#email" ).blur(function() {
        if(this.value==''){this.value='Please enter a valid email.'}
     });

    // $( "#message" ).focus(function() {
    //     if(this.value=='Please enter your message.'){this.value=''}
    //  });
		//
    // $( "#message" ).blur(function() {
    //     if(this.value==''){this.value='Please enter your message.'}
    //  });
});
