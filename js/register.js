function registerUser(){

	const name = $('#name').val();
	const email = $('#email').val();
	const password = $('#password').val();
	const conf_password = $('#conf_password').val();
	var haserror = false;

	if (!$('#name').val()) {
        if ($("#name").parent().next(".validation").length == 0) // only add if not added
            {
                $("#name").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Username.</div>");
                haserror = false;
            }
        } else {
                $("#name").parent().next(".validation").remove(); // remove it
                haserror = true;
            }

	if (!$('#email').val()) {
        if ($("#email").parent().next(".validation").length == 0) // only add if not added
            {
                $("#email").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Email address.</div>");
                haserror = false;
            }
        } else {
                $("#email").parent().next(".validation").remove(); // remove it
                haserror = true;
            }

	if (!$('#password').val()) {
        if ($("#password").parent().next(".validation").length == 0) // only add if not added
            {
                $("#password").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Password.</div>");
                haserror = false;
            }
        } else {
                $("#password").parent().next(".validation").remove(); // remove it
                haserror = true;
            }

    if (!$('#conf_password').val()) {
        if ($("#conf_password").parent().next(".validation").length == 0) // only add if not added
            {
                $("#conf_password").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please re-enter your Password.</div>");
                haserror = false;
            }
        } else {
                $("#conf_password").parent().next(".validation").remove(); // remove it
                haserror = true;
            }   

    if(!haserror){
    	return;
    }             
	
	// $('#registerbtn').prop('disabled', true);

	$.ajax({
		url: '/auth_system/register.php',
		data: {
			'name': name,
			'email':email,
			'password':password,
			'conf_password':conf_password

		},
		error: function(){
			console.log('Insert User Call failed');
			$('#registerbtn').prop('disabled', false);
		},
		datatype: 'json',
		success: function(res){
			if(res.status == 'success'){
			
				alert(res.message);

				window.location.href = 'login.php';

			}else{
				if (res.stage == 1){
					alert(res.message);
				}else if(res.stage == 2 || res.stage == 6){
					alert(res.message);
				}else if(res.stage == 3){
					alert(res.message);
				}else if(res.stage == 4){
					alert(res.message);
				}else if(res.stage == 5){
					alert(res.message);
				}
			}
		},
		type: 'POST'
	});
}
$(document).ready(function() {
	

	$('#registerbtn').on('click', function (e) {

		e.preventDefault();
		e.stopPropagation();
		registerUser();
	});

});
