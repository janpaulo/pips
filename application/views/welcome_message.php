<script
    src='<?php echo base_url();?>asset/fullcalendar-scheduler-6.1.9/dist/index.global.min.js?version=<?php echo rand(10,100); ?>'>
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events: [{
                id: 'a',
                title: 'CPO Python 101 Training ',
                start: '2023-11-10',
                end: '2023-10-15'
            },
            {
                id: 'a',
                title: 'CPO  Training ',
                start: '2023-11-10',
                color: 'green',
                end: '2023-11-10'
            },
            {
                id: 'a',
                title: 'CPO  Training ',
                start: '2023-11-10',
                color: 'red',
                end: '2023-11-10'
            },
            {
                id: 'as',
                title: 'Web Content Management Using WordPress (DICT Central) ',
                start: '2023-10-25',
                color: 'green',
                end: '2023-11-08'
            }
        ]


        // initialView: 'resourceTimelineWeek'
    });
    calendar.render();


});
</script>



<div class="content-wrapper">
    <section class="content">
        <div id='calendar'>

            <div id='draggable-el' data-event='{ "title": "my event", "duration": "02:00" }'></div>
        </div>
    </section>
</div>