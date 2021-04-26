<template>
    <div class="grid grid-cols-6">
        <div class="flex flex-col p-1 m-1 bg-green-300 rounded-lg">
            <div>Name: {{ request.name }}</div>
            <div>Email: {{ request.email }}</div>
            <div class="flex-row">
                <button v-on="" class="p-1 bg-white rounded-md">Accept</button>
                <button class="p-1 bg-white rounded-md">Delete</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['request']
}
</script>
