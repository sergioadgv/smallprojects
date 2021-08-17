$(document).ready(function() {
    
	
	
	
	
	
	// setCookie("cookieConsent", "YES", 60);
	
	
	if(getCookie("cookieforConsent") === "YES"){
		// alert("Cookie is yes");
	}
	else if (getCookie("cookieforConsent") === "") {
		
		$('#mycookiemodal').modal('show'); 
		
	}
	
	else{
		$('#mycookiemodal').modal('show');
	}
	
	
	$("#cookiebutton").click(function(){
		
		// alert("here");
		setCookie("cookieforConsent", "YES");
		

		
		// alert("h");
		
		
		$('#mycookiemodal').modal('hide'); 
		
		
		
	});
	
	
	// alert(x);
	
	
	
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		var expires = "expires=" + d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/; sameSite=Strict";
	}

	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
}
	
	
	
	
	
});