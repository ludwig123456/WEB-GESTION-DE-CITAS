$(document).ready(function(){

	$("#ConectaDB").click(function(){
		cargarDatos();
	});

	function cargarDatos(){
		$.post("model/reception.php",{},function(r){
			$("#tbl tbody").empty(r);
			$("#tbl tbody").append(r);
		});
	}
});