<template>
    <div class="h-96 w-full">
        <div class="h-full p-2 flex flex-col-reverse overflow-auto">
            <div v-for="(message, index) in messages" :key="index">
                <message-item :message="message" :user_id="user_id"/>
            </div>
        </div>
    </div>
</template>

<script>
import messageItem from "./messageItem.vue";
export default {
    components: { messageItem },
    props: ['messages', 'user_id']
}
</script>
