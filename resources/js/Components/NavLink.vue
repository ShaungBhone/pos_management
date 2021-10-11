<template>
  <Link :href="href" :class="classes">
    <slot />
  </Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Link,
  },

  props: ["href", "active"],

  computed: {
    classes() {
      return this.active
        ? "flex flex-col items-center focus:shadow-outline focus:outline-none text-blue-500 focus:outline-none transition  duration-150 ease-in-out"
        : "flex flex-col items-center focus:shadow-outline focus:outline-none text-gray-500 focus:outline-none transition  duration-150 ease-in-out";
    },
  },
};
</script>
