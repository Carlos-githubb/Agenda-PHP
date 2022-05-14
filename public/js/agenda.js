
<script>

    document.addEventListener('DOMContentLoaded', function(){

        let form = document.querySelector("form");

        var calendarEl = document.getElementById('agenda');

        var calendar = new FullCalendar.Calendar(calendarEl, {

            initialView: 'dayGridMonth',
            locale: "es",

            headerToolbar: {
                left: 'prev, next, today',
                center: 'title',
                right: 'dayGridMonth, timeGridWeek, listWeek'
            
            },

            dateClick: function(){
                $("#event").modal("show");
            }

        });
        calendar.render();

        document.getElementById("btnSave").addEventListener("click", function(){
            const data= new FormData('form');
            console.log(data);
        })
    });

</script>