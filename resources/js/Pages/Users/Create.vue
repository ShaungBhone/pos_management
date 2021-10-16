<template>
  <Head title="Users" />

  <h1 class="mb-8 font-bold text-3xl">
    <Link class="text-blue-700" :href="route('users.index')">Users</Link>
    <span class="font-medium"> /</span> Create
  </h1>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">
            Personal Information
          </h3>
          <p class="mt-1 text-sm text-gray-600">
            Use a permanent address where you can receive mail.
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <BreezeValidationErrors class="mb-4" />
        <form @submit.prevent="store">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <BreezeLabel for="first-name" value="First Name" />
                  <BreezeInput
                    id="first_name"
                    type="text"
                    v-model="form.first_name"
                    required
                    autofocus
                    autocomplete="first_name"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <BreezeLabel for="last-name" value="Last Name" />
                  <BreezeInput
                    id="last_name"
                    type="text"
                    v-model="form.last_name"
                    required
                    autofocus
                    autocomplete="last_name"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <BreezeLabel for="email" value="Email" />
                  <BreezeInput
                    id="email"
                    type="email"
                    v-model="form.email"
                    required
                    autocomplete="username"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <BreezeLabel for="password" value="Password" />
                  <BreezeInput
                    id="password"
                    type="password"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                  />
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <BreezeLabel
                    for="password_confirmation"
                    value="Confirm Password"
                  />
                  <BreezeInput
                    id="password_confirmation"
                    type="password"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <BreezeLabel for="role" value="Role" />
                  <select
                    v-model="form.user_type"
                    id="role"
                    name="role"
                    required
                    autocomplete="role"
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
                  >
                    <option :value="3">Manager</option>
                    <option :value="4">Supervisor</option>
                    <option :value="5">Cashier</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <BreezeButton
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                Save
              </BreezeButton>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeInput from "@/Components/Input.vue";
export default {
  components: {
    BreezeValidationErrors,
    BreezeButton,
    BreezeLabel,
    BreezeInput,
  },
  data() {
    return {
      form: this.$inertia.form({
        first_name: "",
        last_name: "",
        email: "",
        password: "",
        password_confirmation: "",
        user_type: "",
      }),
    };
  },
  methods: {
    store() {
      this.form.post(this.route("users.store"));
    },
  },
};
</script>
