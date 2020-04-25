(function ($) {

    "use strict";

	// JQUERY LIGHT BOX
	
	if ( $.isFunction($.fn.fluidbox) ) {
		$('a').fluidbox();
	}
	
	//ROUNDED TIMES COUNTDOWN
	
	if(isExists('#rounded-countdown')){
		var remainingSec = $('.countdown').data('remaining-sec');
		$('.countdown').ClassyCountdown({
			theme: "flat-colors-very-wide",
			end: $.now() + remainingSec
		});
	}	
	// Circular Progress Bar
	var isAnimated = false;
})(jQuery);

function isExists(elem){
	if ($(elem).length > 0) { 
		return true;
	}
	return false;
}

const submit = document.getElementById('submit');

submit.addEventListener('click', (e)=>{
	e.preventDefault;
	let email = document.getElementById("email").value;
	let msg = document.getElementById('msg');
	if(email.length == 0){
		let message = 'Please provide an email address';
		msg.innerHTML = alertMessage('danger', message);
		interval(4000);

	}else if(validate(email) == false){
		let message = 'Please provide a valid email address';
		msg.innerHTML = alertMessage('danger', message);
		interval(4000);
		
	}else{
		subscribe(email);
	}

});

function validate(input){
	const emailreg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	return emailreg.test(input.toLowerCase());
}

function subscribe(email){
	const url = './subscribe.php'; 
	const data = {email: email}
	fetch(url, {
		method: 'POST', // or 'PUT'
		headers: {
			'Content-Type': 'application/json',
		},
		body: JSON.stringify(data),
		})
		.then((response) => response.json())
		.then((data) => {
			if(data.success){
				console.log('Success:', data);
				let message = data.success;
				msg.innerHTML = alertMessage('success', message);
				interval(5000);
			}else{
				console.log('Failure:', data);
				let message = data.error;
				msg.innerHTML = alertMessage('danger', message);
				interval(5000);
			}
			
		})
		.catch((error) => {
		console.error('Error:', error);
	});
}

function alertMessage(status, message){
	return `<div class="alert alert-${status} m-t-20 alert-dismissible fade show" role="alert" style="z-index:10; position:absolute;right:10px; min-width:320px;">
	${message}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close" style='padding:0;top: .05rem;right: .1rem;'>
	<span aria-hidden="true">&times;</span>
	</button>
</div>`;
}

function interval(duration){
	setTimeout(()=>{
		$(".alert").alert('close');
	}, duration);
}

