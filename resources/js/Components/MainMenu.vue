<template>
  <article class="flex flex-col justify-between py-4">
    <div class="flex flex-col space-y-6">
      <BreezeApplicationLogo class="w-10 h-10 m-auto fill-current" />

      <!-- Home Page -->
      <NavLink
        :href="route('dashboard')"
        :active="$page.component === 'Dashboard'"
      >
        <HomeIcon name="home" class="w-7 h-7" />
        <span class="text-sm mt-1"> Home </span>
      </NavLink>

      <!-- Users Page -->
      <NavLink
        :href="route('users.index')"
        :active="$page.component === 'Users/Index'"
      >
        <UsersIcon name="users" class="w-7 h-7" />
        <span class="text-sm mt-1"> Users </span>
      </NavLink>

      <!-- Products Page -->
      <NavLink
        :href="route('products.index')"
        :active="$page.component === 'Products/Index'"
      >
        <CubeIcon name="users" class="w-7 h-7" />
        <span class="text-sm mt-1"> Products </span>
      </NavLink>
    </div>

    <!-- Log Out -->
    <div class="flex flex-col">
      <NavLink :href="route('logout')" method="post" as="button">
        <LogoutIcon class="w-7 h-7" />
        <span class="text-sm mt-1">Logout</span>
      </NavLink>
    </div>
  </article>
</template>

<script setup>
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import NavLink from "@/Components/NavLink.vue";

// heroicons
import {
  HomeIcon,
  UsersIcon,
  ShoppingBagIcon,
  CubeIcon,
  LogoutIcon,
} from "@heroicons/vue/outline";
</script>
