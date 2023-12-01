<template>
  <div>
    <FullCalendar
      :plugins="calendarPlugins"
      :initialView="calendarView"
      :events="calendarEvents"
    />
  </div>
</template>

<script>
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'

export default {
  components: {
    FullCalendar,
  },
  data() {
    return {
      calendarPlugins: [dayGridPlugin],
      calendarView: 'dayGridMonth',
      calendarEvents: [
        // Tus eventos pueden ir aquí
      ],
    }
  },
}
</script>
