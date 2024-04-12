<template>
    <app-layout>
        <template #header>
            <h1 class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800 ">Dennis Gutierrez - Development Test - CT Funiber Ecuador</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <Link
                              :href="route('products.create')"
                              class="bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                 New Product
                             </Link>
                        </div>
                        <div>
                            <input type="text" v-model="searchQuery" placeholder="Filter by typing..." class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        </div>
                    </div>

                    <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                        <thead>
                            <tr class="text-left border-b border-gray-300">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Code</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Category</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Has Stock</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-700 border-b border-gray-600 text-gray-200">
                            <tr v-for="product in filteredProducts" :key="product.id">
                                <td class="px-6 py-4 whitespace-nowrap text-left">{{ product.name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-left">{{ product.code }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">{{ product.category }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">{{ product.hasStock === 1 ? 'Yes' : 'No' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex justify-center space-x-4">
                                        <Link 
                                            :href="route('products.edit', product.id)"
                                            class="flex-shrink-0 bg-blue-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="button">
                                            Edit
                                        </Link>
                                        <Link
                                            method="delete"
                                            :href="route('products.destroy', product.id)"
                                            class="flex-shrink-0 bg-red-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-pink-200" type="button">
                                            Delete
                                        </Link>
                                        <Link
                                            :href="route('products.history', product.id)"
                                            class="flex-shrink-0 bg-gray-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-200" type="button">
                                            History
                                        </Link>
                                    </div>
                                </td>
                            </tr>   
                        </tbody>
                    </table>

                </div>    
            </div>
        </div>    
    </app-layout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    props:{
        products: Array
    },
    components:{
        Link,
        AppLayout
    },
    data() {
        return {
            searchQuery: ''
        };
    },
    computed: {
        filteredProducts() {
            return this.products.filter(product => {
                return (
                    product.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    product.code.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    product.category.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    (product.hasStock === 1 && 'yes'.includes(this.searchQuery.toLowerCase())) ||
                    (product.hasStock === 0 && 'no'.includes(this.searchQuery.toLowerCase()))
                );
            });
        }
    }
};
</script>