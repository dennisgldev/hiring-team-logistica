<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Product Change History</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div v-if="history.length === 0" class="text-gray-500">No history available.</div>
                    <div v-else>
                        <table class="min-w-full divide-y divide-gray-200 rounded-lg">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">User</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Stock Change</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="change in history" :key="change.id" class="bg-gray-700 text-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ change.user.name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ change.stock }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ new Date(change.created_at).toLocaleString() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-4 text-right">
    <Link 
        :href="route('products.index')" 
        class='w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-4 py-2 inline-block'>
        Back to Products
    </Link>
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
        history: Array
    }
}
</script>
