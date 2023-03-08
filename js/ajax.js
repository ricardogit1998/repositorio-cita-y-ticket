$(document).ready(function() {
  $('#search-form').submit(function(event) {
    event.preventDefault();
    var searchTerm = $('#search-term').val().trim().toLowerCase();
    if (searchTerm === '') {
      $('#search-results').html('');
      return;
    }
    $.ajax({
      url: 'detalle_ticket_cliente.php',
      type: 'GET',
      data: { search: searchTerm },
      success: function(response) {
        $('#search-results').html(response);
        $('#search-results').find('.searchable').each(function() {
          const contenido = $(this).text().trim().toLowerCase();
          if (contenido.includes(searchTerm)) {
            $(this).hide();
          } else {
            $(this).hide();
          }
        });
      }
    });
  });
  
  $('#boton-buscar').click(function() {
    const searchTerm = $('#search-term').val().trim().toLowerCase();
    if (searchTerm === '') {
      $('#search-results').html('');
      return;
    }
    $('#search-results').find('.searchable').each(function() {
      const contenido = $(this).text().trim().toLowerCase();
      if (contenido.includes(searchTerm)) {
        $(this).hide();
      } else {
        $(this).hide();
      }
    });
  });
});