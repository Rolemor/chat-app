<template>
    <div class="grid grid-cols-6">
        <div class="flex flex-col p-1 m-1 bg-blue-300 rounded-lg">
            <div>Name: {{ friend.name }}</div>
            <div>Email: {{ friend.email }}</div>
            <button class="bg-white rounded-lg">Delete</button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['friend']
}
</script>
