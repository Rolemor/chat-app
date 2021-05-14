<template>
    <div class="text-white grid justify-items-stretch">
        <div class="rounded-lg mt-1 p-2 bg-blue-500 max-w-3xl justify-self-end shadow-lg" v-if="message.user.id === user_id">
            <div class="inline-block mr-2 text-xl">{{ message.user.name }}:</div>
            <div class="inline-block">{{ message.message }}</div>
        </div>
        <div class="rounded-lg mt-1 p-2 bg-green-500 max-w-3xl justify-self-start shadow-lg" v-else>
            <div class="inline-block mr-2 text-xl">{{ message.user.name }}:</div>
            <div class="inline-block">{{ message.message }}</div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['message', 'user_id'],
}
</script>
