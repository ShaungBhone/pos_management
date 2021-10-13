<template>
  <div
    v-if="$page.props.flash.success && show"
    class="bg-green-400 px-4 py-2 rounded-md shadow-sm flex"
  >
    {{ $page.props.flash.success }}
    <button @click="show = false" class="inline-flex m-auto ml-4">
      <XIcon class="w-4 h-4 hover:bg-gray-100 rounded" />
    </button>
  </div>
</template>


<script>
import { XIcon } from "@heroicons/vue/outline";

export default {
  data() {
    return {
      show: true,
    };
  },

  components: {
    XIcon,
  },
};
</script>

