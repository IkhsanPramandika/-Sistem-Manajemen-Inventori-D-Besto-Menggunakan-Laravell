$(document).ready(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: [
            // Daftar acara disini
            {
                title: 'Acara 1',
                start: '2023-07-01'
            },
            {
                title: 'Acara 2',
                start: '2023-07-05',
                end: '2023-07-07'
            },
            // ...
        ]
    });
});
