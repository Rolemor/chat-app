<template>
    <div>
        Friends:
    </div>
    <div class="h-96 w-full">
        <div class="p-2 overflow-auto">
            <div v-for="(friend, index) in friends" :key="index">
                <friend :friend="friend" />
            </div>
        </div>
    </div>
</template>

<script>
import friend from '@/Pages/FriendRequest/friend'

export default {
    components: { friend },
    props: ['friends']
}
</script>
