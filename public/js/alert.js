console.log('alertJs');
const alert_container = document.querySelector("#alert_container");

function removeAlert()
{
	setTimeout(function() {
		alert_container.innerHTML = "";
		//3000 millisecond or 3 seconds
	}, 3000);
}

