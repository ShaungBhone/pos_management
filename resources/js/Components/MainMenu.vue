<template>
  <div>
    <div>
      <Link :href="route('dashboard')">
        <div
          :class="
            isUrl('dashboard')
              ? 'flex flex-col items-center p-4 focus:shadow-outline focus:outline-none'
              : 'text-gray-500 flex flex-col items-center p-4 focus:shadow-outline focus:outline-none'
          "
        >
          <HomeIcon name="dashboard" class="w-7 h-7" />
          <span class="text-sm mt-2"> Home </span>
        </div>
      </Link>
    </div>
    <div>
      <Link :href="route('users')">
        <div
          :class="
            isUrl('users')
              ? 'flex flex-col items-center p-4 focus:shadow-outline focus:outline-none'
              : 'text-gray-500 flex flex-col items-center p-4 focus:shadow-outline focus:outline-none'
          "
        >
          <UsersIcon name="users" class="w-7 h-7" />
          <span class="text-sm mt-2"> Users </span>
        </div>
      </Link>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import {
  HomeIcon,
  UsersIcon,
  ShoppingBagIcon,
  CubeIcon,
} from "@heroicons/vue/outline";
export default {
  components: {
    Link,
    HomeIcon,
    UsersIcon,
    ShoppingBagIcon,
    CubeIcon,
  },
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1);
      if (urls[0] === "") {
        return currentUrl === "";
      }
      return urls.filter((url) => currentUrl.startsWith(url)).length;
    },
  },
};
</script>
