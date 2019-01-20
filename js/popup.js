
document.addEventListener('DOMContentLoaded', function(){
/*@Ola khoja*/
	//sign up pop up window
	document.querySelector('#signuplink a').onclick = function(){
	if ( document.querySelector('#contact').style.display == 'block')
	{
		document.querySelector('#contact').style.display = 'none';
	}
	else
	{
		console.log('we entered here')
		document.querySelector('#contact').style.display = 'block';
	}
	
	
	};
	document.addEventListener("click",function(event)
	{
		var element = event.target;
		if(element.matches('#contact'))
		{
			document.querySelector('#contact').style.display = 'none';
		}
	
	})
})
/* @Ola Khoja*/
	//login pop up window
$(document).ready(function() {

	$("#loginLink a").click(function(){
		
		$("#contact2").toggle();
	})
	$("#contact2").click(function(){
		event.stopPropagation();
		$("#contact2").toggle();
	})
	$("#features").click(function(){
		event.stopPropagation();
		})
})


