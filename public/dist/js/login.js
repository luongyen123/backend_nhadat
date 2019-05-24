//form validate
var form = $( "#loginform" );
const formValidate = true;
form.validate();
$( "button" ).click(function() {
    var validate = form.valid();
    if(validate === formValidate){
        var email = $("#email").val();
        var password = $("#password").val();
        
    }
});
