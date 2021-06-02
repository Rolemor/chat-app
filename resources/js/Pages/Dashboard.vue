<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                    <div class="p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
                        <div class="inline-block w-3/4">Username: Username</div>
                        <div class="inline-block w-1/4">Created at: Date</div>
                    </div>
                    <div class="h-48 p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
                        Shared info: Nothing to see here, move along!
                    </div>
                    <div class="p-2 m-3 flex-row">
                        <button class="p-1 mr-1 bg-blue-400 hover:bg-red-500 hover:text-white rounded-md shadow-lg">This is just a button</button>
                        <button class="p-1 mr-1 bg-green-300 hover:bg-red-500 hover:text-white rounded-md shadow-lg">And another one</button>
                        <button class="p-1 mr-1 bg-yellow-300 hover:bg-red-500 hover:text-white rounded-md shadow-lg">And another..</button>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                    <div class="p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
                        <div class="inline-block w-3/4">Username: Username</div>
                        <div class="inline-block w-1/4">Created at: Date</div>
                    </div>
                    <div class="h-48 p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
                        Shared info: Nothing to see here, move along!
                    </div>
                    <div class="p-2 m-3 flex-row">
                        <button class="p-1 mr-1 bg-blue-400 hover:bg-red-500 hover:text-white rounded-md shadow-lg">This is just a button</button>
                        <button class="p-1 mr-1 bg-green-300 hover:bg-red-500 hover:text-white rounded-md shadow-lg">And another one</button>
                        <button class="p-1 mr-1 bg-yellow-300 hover:bg-red-500 hover:text-white rounded-md shadow-lg">And another..</button>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                    <div class="p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
                        <div class="inline-block w-3/4">Username: Username</div>
                        <div class="inline-block w-1/4">Created at: Date</div>
                    </div>
                    <div class="h-48 p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
                        Shared info: Nothing to see here, move along!
                    </div>
                    <div class="p-2 m-3 flex-row">
                        <button class="p-1 mr-1 bg-blue-400 hover:bg-red-500 hover:text-white rounded-md shadow-lg">This is just a button</button>
                        <button class="p-1 mr-1 bg-green-300 hover:bg-red-500 hover:text-white rounded-md shadow-lg">And another one</button>
                        <button class="p-1 mr-1 bg-yellow-300 hover:bg-red-500 hover:text-white rounded-md shadow-lg">And another..</button>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import Button from "@/Jetstream/Button";

    export default {
        components: {
            Button,
            AppLayout,
            Welcome,
        },
    }
</script>
