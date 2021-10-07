<template>
  <div
    class="flex-col w-full md:flex md:flex-row md:min-h-screen bg-blueGray-50"
  >
    <div
      class="
        flex flex-col flex-shrink-0
        w-full
        text-blueGray-700
        bg-white
        shadow-xl
        md:w-48
      "
    >
      <div class="flex flex-col items-center flex-shrink-0 py-4 bg-gray-300">
        <a href="/" class="w-full flex justify-center focus:outline-none">
          <div class="inline-flex items-center">
            <div
              class="
                w-2
                h-2
                p-2
                mr-2
                rounded-full
                bg-gradient-to-tr
                from-blue-500
                to-blue-600
              "
            ></div>
            <h2
              class="
                block
                text-xl
                font-medium
                tracking-tighter
                text-black
                transition
                duration-500
                ease-in-out
                transform
                cursor-pointer
                hover:text-blueGray-500
                lg:text-x
                lg:mr-8
              "
            >
              POS
            </h2>
          </div>
        </a>
      </div>
      <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
        <ul>
          <li>
            <a
              class="
                inline-flex
                items-center
                px-4
                py-2
                mt-2
                text-base text-blueGray-500
                transition
                duration-500
                ease-in-out
                transform
                border-l-4 border-blue-600
                focus:outline-none
                hover:text-blue-600
              "
              href="#"
            >
              <ViewBoardsIcon class="w-5 h-5" />
              <span class="ml-4">Dashboard</span>
            </a>
          </li>
          <li>
            <a
              class="
                inline-flex
                items-center
                px-4
                py-2
                mt-2
                text-base text-blueGray-500
                transition
                duration-500
                ease-in-out
                transform
                border-l-4 border-white
                hover:border-blue-600
                focus:outline-none
                hover:text-blue-600
              "
              href="#"
            >
              <ShoppingBagIcon class="w-5 h-5" />
              <span class="ml-4">Orders</span>
            </a>
          </li>
          <li>
            <a
              class="
                inline-flex
                items-center
                px-4
                py-2
                mt-2
                text-base text-blueGray-500
                transition
                duration-500
                ease-in-out
                transform
                border-l-4 border-white
                hover:border-blue-600
                focus:outline-none
                hover:text-blue-600
              "
              href="#"
            >
              <CubeIcon class="w-5 h-5" />
              <span class="ml-4">Products</span>
            </a>
          </li>
          <li>
            <a
              class="
                inline-flex
                items-center
                px-4
                py-2
                mt-2
                text-base text-blueGray-500
                transition
                duration-500
                ease-in-out
                transform
                border-l-4 border-white
                hover:border-blue-600
                focus:outline-none
                hover:text-blue-600
              "
              href="#"
            >
              <UsersIcon class="w-5 h-5" />
              <span class="ml-4">Users</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="flex items-center w-full p-4 rounded-lg">
        <div>
          <h2
            class="
              text-sm
              font-medium
              tracking-widest
              text-black
              uppercase
              title-font
            "
          >
            User Name
          </h2>
          <p class="text-blueGray-500">Cashier or Admin</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {
  ViewBoardsIcon,
  UsersIcon,
  ShoppingBagIcon,
  CubeIcon,
} from "@heroicons/vue/outline";

export default {
  components: { ViewBoardsIcon, UsersIcon, ShoppingBagIcon, CubeIcon },
};
</script>
