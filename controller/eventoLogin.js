$(document).ready(function(){
	
	$("#ConectaDB").click(function(){
		CargarDatos();
	});
	function CargarDatos(){
		$.post("../controller/datosLogin.php",{},function(r){
			$("#formulario tbody").empty(r);
			$("#formulario tbody").append(r);
		});
	}
});

// html
// <script type="text/javascript" src="eventos/jquerry3"></script>
// <script type="text/javascript" src="eventos/"></script>

// <tbody></tbody>