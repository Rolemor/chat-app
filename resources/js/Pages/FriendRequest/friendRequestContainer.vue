<template>
    <div>
        Friend Requests:
    </div>
    <div class="h-48 w-full">
        <div class="p-2 overflow-auto">
            <div v-for="(request, index) in friendRequests" :key="index">
                <friend-request :request="request" />
            </div>
        </div>
    </div>
</template>

<script>
import friendRequest from '@/Pages/FriendRequest/friendRequest'

export default {
    components: { friendRequest },
    props: ['friendRequests']
}
</script>
