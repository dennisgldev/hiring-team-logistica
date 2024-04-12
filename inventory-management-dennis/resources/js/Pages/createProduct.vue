<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Product</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="submit" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Name</label>
                                <input v-model="form.name" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Name" />
                            </div>
                            <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Code</label>
                                <input v-model="form.code" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Code" />
                            </div>
                            <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Category</label>
                                <input v-model="form.category" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Category" />
                            </div>
                            <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Has Stock</label>
                                <select v-model="form.hasStock" @change="checkStock" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="1">Yes</option>
                                    <option :value="0">No</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-1" v-if="form.hasStock === 1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Stock</label>
                                <input v-model="form.stock" :min="form.hasStock === 1 ? 1 : 0"  lang="en" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" placeholder="Stock" />
                            </div>
                            <div class="grid grid-cols-1" v-else>
                                <input v-model="form.stock" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" min="0" placeholder="0" disabled />
                            </div>
                        </div>
                        <div class="flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5">
                            <Link :href="route('products.index')" class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2" type="button">Cancel</Link>
                            <button :disabled="submitDisabled" type="submit" class="w-auto bg-blue-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    components: {
        Link,
        AppLayout
    },
    props: {
        errors: Object
    },
    data() {
        return {
            form: {
                name: null,
                code: null,
                category: null,
                hasStock: 1,
                stock: 1
            }
        };
    },
    computed: {
        submitDisabled() {
            return !this.form.name || !this.form.code || !this.form.category || (this.form.hasStock === 1 && this.form.stock < 1);
        }
    },
    methods: {
        checkStock() {
            if (this.form.hasStock === 0) {
                this.form.stock = 0;
            } else {
                this.form.stock = 1;
            }
        },
        submit() {
            this.$inertia.post(route('products.store'), this.form);
        }
    }
};
</script>
