$(document).ready(function() {

    // Initialisation du Calendrier

    $('#calendar').fullCalendar({
        dayClick: function() {
            alert('a day has been clicked!');
        }
    })

});