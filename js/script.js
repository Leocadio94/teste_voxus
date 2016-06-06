$(document).ready(function() {
	var pathname = window.location.pathname;

	if (pathname == "/teste_voxus/create_noticias.php") {
		$("#menu1").addClass('active');
	} else if (pathname == "/teste_voxus/read_noticias.php") {
		$("#menu2").addClass('active');
	}
	
});