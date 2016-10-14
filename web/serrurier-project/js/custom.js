$(document).ready(function() {

    // Initialisation du Calendrier

    console.log('test');

    $('#calendar').fullCalendar({
        dayClick: function() {
            alert('a day has been clicked!');
        }
    })

});