<template>
  <Head title="Welcome" />

  <div
    class="
      relative
      flex
      items-top
      justify-center
      min-h-screen
      bg-gray-100
      dark:bg-gray-900
      sm:items-center
      sm:pt-0
    "
  >
    <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      <Link
        v-if="$page.props.auth.user"
        href="/dashboard"
        class="text-md text-gray-700 underline"
      >
        Dashboard
      </Link>

      <template v-else>
        <Link :href="route('login')" class="text-md text-gray-700 underline">
          Log in
        </Link>

        <Link
          v-if="canRegister"
          :href="route('register')"
          class="ml-4 text-md text-gray-700 underline"
        >
          Register
        </Link>
      </template>
    </div>
  </div>
</template>



<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  layout: null,
  components: {
    Head,
    Link,
  },
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>
