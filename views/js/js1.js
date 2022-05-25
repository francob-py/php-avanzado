jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});





// ACTUALIZAR LISTADOS CON AJAX 

function actualizar_empleados(){
	
	$.ajax({
		type: 'get',
		url: '../../views/empleados/ajax_update_emp.php',
		success: function(respuesta) {
			
			//Pegamos el contenido 
			$('#data_emp').html(respuesta);
	   }
	});
	
};

function actualizar_tareas(){
	
	$.ajax({
		type: 'get',
		url: '../../views/tareas/ajax_update_tareas.php',
		success: function(respuesta) {
			
			//Pegamos el contenido 
			$('#data_tareas').html(respuesta);
	   }
	});
	
};

//Actualizo cada 1 segundo

setInterval( function(){
  actualizar_empleados();
	actualizar_tareas();  	
},1000)

$(document).ready( function() {
  actualizar_empleados();
  actualizar_tareas();
})
})