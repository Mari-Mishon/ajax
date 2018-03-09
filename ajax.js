$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: jQuery("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result = jQuery.parseJSON(response);
        	
			
			document.getElementById(result_form).innerHTML = "Адрес 1: "+result.adress1+"<br>Modbus адрес 1: "+result.Madress1+"<br>Код функции: "+result.Code1+"<br>Тип данных: "+result.Type1+"<br>GPIO 1: "+result.gpio1+"<br>Адрес 2: "+result.adress2+"<br>Modbus адрес 2: "+result.Madress2+"<br>Код функции: "+result.Code2+"<br>Тип данных: "+result.Type2+"<br>GPIO 2: "+result.gpio2+"<br>Адрес 3: "+result.adress1+"<br>Modbus адрес 3: "+result.Madress1+"<br>Код функции: "+result.Code3+"<br>Тип данных: "+result.Type3+"<br>GPIO 3: "+result.gpio3+"<br>Адрес 4: "+result.adress4+"<br>Modbus адрес 4: "+result.Madress4+"<br>Код функции: "+result.Code4+"<br>Тип данных: "+result.Type4+"<br>GPIO 4: "+result.gpio4;
    	},
    	error: function(response) { // Данные не отправлены
    		document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.";
    	}
 	});
}