<template>
  <input
    class="
      mt-1
      block
      w-full
      py-2
      px-3
      border border-gray-300
      bg-white
      rounded-md
      shadow-sm
      focus:outline-none
      focus:ring-blue-500
      focus:border-blue-500
      sm:text-sm
    "
    :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value)"
    ref="input"
  />
</template>

<script>
export default {
  props: ["modelValue"],

  emits: ["update:modelValue"],

  methods: {
    focus() {
      this.$refs.input.focus();
    },
  },
};
</script>
