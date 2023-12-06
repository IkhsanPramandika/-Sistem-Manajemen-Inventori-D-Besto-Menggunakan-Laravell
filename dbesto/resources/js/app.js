import './bootstrap';
import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import 'fullcalendar';

$(document).ready(function() {
    $('#calendar').fullCalendar({
        events: [
            // Daftar event yang ingin ditampilkan pada kalender
            {
                title: 'Pertemuan dengan klien',
                start: '2023-07-12'
            },
            {
                title: 'Presentasi produk',
                start: '2023-07-15',
                end: '2023-07-17'
            },
            // Tambahkan event lain sesuai kebutuhan Anda
        ]
    });
});
