function call() {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: 'add.php',
          data: msg,
          success: function(data) {
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }
