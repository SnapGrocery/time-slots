
<template>
  <div>
    <h1>Time Slot Manager</h1>
    <time-slot-create-component></time-slot-create-component>
    <time-slot-list-component></time-slot-list-component>
  </div>
</template>

<script>
import TimeSlotCreateComponent from './TimeSlotCreateComponent.vue';
import TimeSlotListComponent from './TimeSlotListComponent.vue';

export default {
  components: {
    TimeSlotCreateComponent,
    TimeSlotListComponent,
  },
};
</script>
