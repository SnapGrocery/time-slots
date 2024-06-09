
<template>
  <div>
    <h2>Time Slots</h2>
    <ul>
      <li v-for="slot in timeSlots" :key="slot.id">
        {{ slot.opening_time }} - {{ slot.closing_time }} ({{ slot.dayName }})
        <button @click="remove(slot.id)">Delete</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  computed: {
    timeSlots() {
      return this.$store.getters['timeSlot/lists'];
    },
  },
  methods: {
    remove(id) {
      this.$store.dispatch('timeSlot/destroy', id);
    },
  },
};
</script>
