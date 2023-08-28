$(document).ready(function() {
    // Función para manejar el evento de búsqueda
    function handleSearch() {
        var location = $('#location').val();
        var propertyType = $('#propertyType').val();
        var offerType = $('#offerType').val();

        // Realizar la solicitud AJAX
        $.ajax({
            url: '/buscar-propiedades', // Cambia la URL a la que maneje el filtrado en el backend
            method: 'GET',
            data: {
                location: location,
                propertyType: propertyType,
                offerType: offerType
            },
            success: function(response) {
                // Actualizar el contenido del div con las propiedades filtradas
                $('#filtered-properties').html(response);
            }
        });
    }

    // Manejar el evento de clic en el botón de búsqueda
    $('#search-button').click(function() {
        handleSearch();
    });
});