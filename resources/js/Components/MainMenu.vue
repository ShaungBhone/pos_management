<template>
  <article class="flex flex-col justify-between py-4">
    <div class="flex flex-col space-y-6">
      <BreezeApplicationLogo
        class="w-10 h-10 m-auto fill-current text-gray-500"
      />
      <Link :href="route('dashboard')">
        <div
          :class="
            isUrl('home')
              ? 'flex flex-col items-center focus:shadow-outline focus:outline-none'
              : 'text-gray-500 flex flex-col items-center focus:shadow-outline focus:outline-none'
          "
        >
          <HomeIcon name="home" class="w-7 h-7" />
          <span class="text-sm mt-2"> Home </span>
        </div>
      </Link>
      <Link :href="route('users.index')">
        <div
          :class="
            isUrl('users')
              ? 'flex flex-col items-center focus:shadow-outline focus:outline-none'
              : 'text-gray-500 flex flex-col items-center focus:shadow-outline focus:outline-none'
          "
        >
          <UsersIcon name="users" class="w-7 h-7" />
          <span class="text-sm mt-2"> Users </span>
        </div>
      </Link>
    </div>
    <div class="flex flex-col">
      <Link
        :href="route('logout')"
        method="post"
        as="button"
        class="flex flex-col items-center"
      >
        <LogoutIcon class="w-7 h-7" />
        <span class="text-sm mt-2">Logout</span>
      </Link>
    </div>
  </article>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import {
  HomeIcon,
  UsersIcon,
  ShoppingBagIcon,
  CubeIcon,
  LogoutIcon,
} from "@heroicons/vue/outline";
export default {
  components: {
    BreezeApplicationLogo,
    Link,
    HomeIcon,
    UsersIcon,
    ShoppingBagIcon,
    CubeIcon,
    LogoutIcon,
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
