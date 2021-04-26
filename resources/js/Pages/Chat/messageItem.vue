<template>
    <div class="text-white grid justify-items-stretch">
        <div class="rounded-lg mt-1 p-2 bg-blue-500 max-w-3xl justify-self-end" v-if="message.user.id === user_id">
            {{ message.user.name }}: {{ message.message }}
        </div>
        <div class="rounded-lg mt-1 p-2 bg-green-500 max-w-3xl justify-self-start" v-else>
            {{ message.user.name }}: {{ message.message }}
        </div>
    </div>
</template>

<script>
export default {
    props: ['message', 'user_id'],
}
</script>
