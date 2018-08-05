$('.remove').on('click', function () {
	if (!confirm('Сигурни ли сте, че искате да изтриете записа?')) {
		return false;
	}
	return true;
});

$("#login").validate({
    
    // Specify the validation rules
    rules: {
    	username: {
    		required: true,
    		email: true
    	},
        password: "required"
    },
    onfocusout: false,
    onkeyup: false,
    // Specify the validation error messages
    messages: {
    	username: {
    		required: "Полето е задължително",
    		email: "Невалиден и-мейл"
    	},
    	password: "Полето е задължително"
    },
   
    submitHandler: function(form) {
        form.submit();
    }
});

$("#employee-add").validate({
    
    // Specify the validation rules
    rules: {
    	first_name: "required",
        middle_name: "required",
        last_name: "required",
        address: "required",
        phone: "required",
        position_id: "required",
        department_id: "required",
        salary: {
        	required: true,
        	number: true,
        	min: 0.01
        },
    },
    onfocusout: false,
    onkeyup: false,
    // Specify the validation error messages
    messages: {
    	first_name: "Полето е задължително",
    	middle_name: "Полето е задължително",
    	last_name: "Полето е задължително",
    	address: "Полето е задължително",
    	phone: "Полето е задължително",
    	position_id: "Полето е задължително",
    	department_id: "Полето е задължително",
    	salary: {
    		required: "Полето е задължително",
			number: "Въведете число",
		    min: "Въведете число по-голямо от 0"
    	},
    },
   
    submitHandler: function(form) {
        form.submit();
    }
});

$('input[type="submit"]').on('click', function () {
	$('span.errors').remove();
});