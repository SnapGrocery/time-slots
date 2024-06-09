
<template>
  <div>
    <button @click="showModal = true">Create Time Slot</button>
    <div v-if="showModal">
      <div class="modal">
        <h2>Create Time Slot</h2>
        <form @submit.prevent="save">
          <label for="opening_time">Opening Time</label>
          <input type="time" v-model="opening_time" id="opening_time">
          <label for="closing_time">Closing Time</label>
          <input type="time" v-model="closing_time" id="closing_time">
          <label for="day">Day</label>
          <select v-model="day" id="day">
            <option v-for="day in days" :value="day.value">{{ day.name }}</option>
          </select>
          <button type="submit">Save</button>
        </form>
        <button @click="showModal = false">Close</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showModal: false,
      opening_time: '',
      closing_time: '',
      day: '',
      days: [
        { value: 0, name: 'Sunday' },
        { value: 1, name: 'Monday' },
        { value: 2, name: 'Tuesday' },
        { value: 3, name: 'Wednesday' },
        { value: 4, name: 'Thursday' },
        { value: 5, name: 'Friday' },
        { value: 6, name: 'Saturday' },
      ],
    };
  },
  methods: {
    save() {
      this.$store.dispatch('timeSlot/save', {
        opening_time: this.opening_time,
        closing_time: this.closing_time,
        day: this.day,
      }).then(() => {
        this.showModal = false;
        this.$emit('saved');
      });
    },
  },
};
</script>
