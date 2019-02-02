
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


/*@Ola khoja */
/* validating login form*/

	$(document).ready(function (){
			$("#login").on('click',function(){  
				var uid = $("#uid").val();
				var pwd = $("#pwd").val();
				if (uid == "" || pwd == "")
					alert('please Fill in all inputs');
				else{
					$.ajax(
					{
						url:'mylogin.php',
						method:'POST',
						data: {
							login:1,
							uid: uid,
							pwd: pwd
						},
						success: function(response){
							$("#response").html(response);
							
							if (response.indexOf('success') >= 0)
								window.location = 'index.php';
						},
						dataType: 'text'
					}
					);
				}
			});
		});
	

