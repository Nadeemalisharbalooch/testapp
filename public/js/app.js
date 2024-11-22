import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new Calendar(calendarEl, {
    plugins: [ dayGridPlugin, interactionPlugin ],
    editable: true,
    events: '/events', // URL to fetch events
    eventClick: function(info) {
      // Handle event click (e.g., open a modal)
    }
  });
  calendar.render();
});
