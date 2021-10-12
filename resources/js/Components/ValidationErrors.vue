<template>
  <div v-if="hasErrors">
    <ul class="bg-red-600 text-sm p-2 text-gray-200 rounded-md">
      <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  computed: {
    errors() {
      return this.$page.props.errors;
    },

    hasErrors() {
      return Object.keys(this.errors).length > 0;
    },
  },
};
</script>
