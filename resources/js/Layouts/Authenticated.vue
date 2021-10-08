<template>
  <div class="flex flex-col">
    <div class="h-screen flex flex-col">
      <div class="flex flex-grow">
        <MainMenu class="shadow-xl flex-shrink-0 w-24" />
        <div class="flex-1 p-8 bg-gray-300">
          <slot />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import MainMenu from "@/Components/MainMenu.vue";

export default {
  components: {
    Link,
    MainMenu,
  },
};
</script>
