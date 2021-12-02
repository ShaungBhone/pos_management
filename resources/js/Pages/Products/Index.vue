<template>
  <Head title="Products" />
  <div class="space-y-6">
    <header class="flex justify-between">
      <h1 class="font-bold text-3xl">Products</h1>
      <SuccessMessage />
    </header>
    <div class="flex justify-between">
      <header>
        <div class="inline-flex flex-col justify-center relative text-gray-500">
          <div class="relative">
            <input
              type="text"
              class="
                p-2
                pl-8
                rounded
                border border-gray-200
                bg-gray-200
                focus:bg-white
                focus:outline-none
                focus:ring-2
                focus:ring-blue-500
                focus:border-transparent
              "
              placeholder="search..."
              value=""
            />
            <svg
              class="w-4 h-4 absolute left-2.5 top-3.5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </div>
        </div>
        <SearchFilter />
      </header>
      <Link
        :href="route('products.create')"
        class="
          rounded-md
          border border-gray-300
          shadow-sm
          px-4
          py-2
          bg-blue-700
          text-md
          font-medium
          text-white
          hover:bg-blue-600
          focus:outline-none
        "
      >
        Create Product
      </Link>
    </div>

    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div
            class="
              shadow
              overflow-hidden
              border-b border-gray-200
              sm:rounded-lg
            "
          >
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                  >
                    Name
                  </th>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                  >
                    Title
                  </th>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                  >
                    Status
                  </th>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-500
                      uppercase
                      tracking-wider
                    "
                  >
                    Role
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="product in products.data" :key="product.id">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-20 w-20">
                        <img
                          class="h-20 w-20 rounded-sm"
                          :src="product.image"
                          :key="product.image"
                          :alt="product.name"
                        />
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          {{ product.name }}
                        </div>
                        <div class="text-sm text-gray-500">
                          <!-- {{ product.barcode }} -->
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">
                      Regional Paradigm Technician
                    </div>
                    <div class="text-sm text-gray-500">Optimization</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span
                      class="
                        px-2
                        inline-flex
                        text-xs
                        leading-5
                        font-semibold
                        rounded-full
                        bg-green-100
                        text-green-800
                      "
                    >
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <!-- Todos -->
                  </td>
                  <td
                    class="
                      px-6
                      py-4
                      whitespace-nowrap
                      text-right text-sm
                      font-medium
                    "
                  >
                    <Link
                      :href="route('products.edit', product.id)"
                      class="text-indigo-600 hover:text-indigo-900"
                      >Edit</Link
                    >
                  </td>
                </tr>
                <!-- More people... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import SearchFilter from "@/Components/SearchFilter.vue";
import SuccessMessage from "@/Components/SuccessMessage.vue";

defineProps({ products: Object });
</script>
