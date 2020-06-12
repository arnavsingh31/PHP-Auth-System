function loginUser(){
	
	const email = $('#email').val();
	const password = $('#password').val();
	var haserror = false;
	if (!$('#email').val()) {
        if ($("#email").parent().next(".authentication").length == 0) // only add if not added
            {
                $("#email").parent().after("<div class='authentication' style='color:red;margin-bottom: 20px;'>Please enter Email address.</div>");
                haserror = false;
            }
        } else {
                $("#email").parent().next(".authentication").remove(); // remove it
                haserror = true;
            }

	if (!$('#password').val()) {
        if ($("#password").parent().next(".authentication").length == 0) // only add if not added
            {
                $("#password").parent().after("<div class='authentication' style='color:red;margin-bottom: 20px;'>Please enter Password.</div>");
                haserror = false;
            }
        } else {
                $("#password").parent().next(".authentication").remove(); // remove it
                haserror = true;
            }	

    if (!haserror){
    	return;
    }        
        $('#loginbtn').prop('disabled', true);    

    	$.ajax({
		url: '/auth_system/login.php',
		data: {
			
			'email':email,
			'password':password,
			
		},
		error: function(){
			console.log('Insert User Call failed');
			$('#loginbtn').prop('disabled', false);
		},
		datatype: 'json',
		success: function(res){
			if(res.status == 'authorised'){
				// alert(res.message);

				window.location.href = 'dashboard.php';


			}else{
				if (res.stage == 1){
					alert(res.message);
				}else if(res.stage == 2){
					alert(res.message);
				}
			}
		},
		type: 'POST'
	});        
}

$(document).ready(function() {
	

	$('#loginbtn').on('click', function (e) {

		e.preventDefault();
		e.stopPropagation();
		loginUser();
	});

});