window.onload = inicio

function inicio() {
	document.getElementById("formu_1").onsubmit = validamos; }

function validamos() {
	if(document.getElementById("nombre").value.length < 5 || document.getElementById("nombre").value.length > 10){
		alert ("El campo nombre solo admite de 5 a 10 caracteres");
		return false; }
	if(document.getElementById("app").value.length<3 || document.getElementById("app").value.length > 10){
		alert ("El campo apellido solo admite de 3 a 10 caracteres");
		return false; }
	if(document.getElementById("dni").value.length !== 8){
		alert ("El campo Dni solo admite 8 numeros");
		return false; }
	 var email = document.getElementById("mail").value;

	if( !(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email))){
		alert ("El campo Mail es incorrecto");
		return false; }
	if(!document.getElementById("sexo1").checked && !document.getElementById("sexo2").checked){
		alert ("El campo sexo es obligatorio");
		return false; }
	return true;
}


$(function() {
	$( "#datepicker" ).datepicker();
});
$(function() {
	$( "#datepicker1" ).datepicker();
});


function ocultar(elemento) {

  if(elemento.value == "si") {
      document.getElementById("ocultarDiv").style.display = "none";
   } else {
     document.getElementById("ocultarDiv").style.display = "block";
   }
}

var data = ["Laura", "Lauren", "Lily", "Lindsay", "Lisa"];

$(function() {

	$(".search").autocomplete(
	{
		source:data,
		minLength:2
	});	
});
