/*@Roaa Mashina*/
document.addEventListener('DOMContentLoaded', function(){

	//adman settings pop up 
	document.querySelector('#admen a').onclick = function(){
	if ( document.querySelector('#a').style.display == 'block')
	{
		document.querySelector('#a').style.display = 'none';
	}
	else
	{
		console.log('we entered here')
		document.querySelector('#a').style.display = 'block';
	}
	
	
	};
	document.addEventListener("click",function(event)
	{
		var element = event.target;
		if(element.matches('#a'))
		{
			document.querySelector('#a').style.display = 'none';
		}
	
	})
})