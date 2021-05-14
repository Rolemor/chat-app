<template>
    <div class="p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
        Friends:
    </div>
    <div class="h-64 w-full">
        <div class="p-2 overflow-auto flex flex-wrap">
            <div v-for="(friend, index) in friends" :key="index" class="w-200">
                <friend
                    v-on:frienddeleted="friendDeleted"
                    :friend="friend" />
            </div>
        </div>
    </div>
</template>

<script>
import friend from '@/Pages/FriendRequest/friend'

export default {
    components: { friend },
    props: ['friends'],
    methods: {
        friendDeleted() {
            this.$emit('frienddeleted');
        }
    }
}
</script>

<style scoped>
.w-200 {
    width: 202px;
    max-width: 100%;
}
</style>
