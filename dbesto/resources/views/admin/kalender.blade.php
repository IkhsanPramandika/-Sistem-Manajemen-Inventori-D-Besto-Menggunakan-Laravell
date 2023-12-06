<!DOCTYPE html>
<html>
<head>
    <title>Halaman Kalender</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
</head>
<body>
    @extends('admin.utama')

    <div id="kalender"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
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
    </script>
</body>
</html>
