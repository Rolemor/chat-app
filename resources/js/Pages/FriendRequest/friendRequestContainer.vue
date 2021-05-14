<template>
    <div class="p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
        Friend Requests:
    </div>
    <div class="h-64 w-full overflow-auto">
        <div class="small-screen p-2">
            <div class="half-w">
                <div class="p-1 m-1 bg-green-300 rounded-lg shadow-lg">My Requests:</div>
                <div class="flex flex-wrap">
                    <div v-for="(request, index) in friendRequests" :key="index" class="w-200">
                        <friend-request
                            v-on:requestdeleted="requestDeleted"
                            :request="request" />
                    </div>
                </div>
            </div>
            <div class="half-w">
                <div class="p-1 m-1 bg-yellow-300 rounded-lg shadow-lg">Requests for me:</div>
                <div class="flex flex-wrap">
                    <div v-for="(requestOf, index) in friendRequestsOf" :key="index" class="w-200">
                        <friend-request-of
                            v-on:requestofdeleted="requestOfDeleted"
                            v-on:requestaccepted="requestAccepted"
                            :requestOf="requestOf" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import friendRequest from '@/Pages/FriendRequest/friendRequest';
import friendRequestOf from "@/Pages/FriendRequest/friendRequestOf";

export default {
    components: { friendRequest, friendRequestOf },
    props: ['friendRequests', 'friendRequestsOf'],
    methods: {
        requestDeleted() {
            this.$emit('requestdeleted');
        },
        requestOfDeleted() {
            this.$emit('requestofdeleted');
        },
        requestAccepted() {
            this.$emit('requestaccepted');
        },
    }
}
</script>

<style scoped>
.w-200 {
    width: 200px;
    max-width: 100%;
}
.small-screen {
    min-width: 50%;
}

@media (min-width: 420px) {
    .small-screen {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .half-w {
        width: 50%;
    }
}

@media (max-width: 420px) {
    .half-w {
        width: 100%;
    }
}

</style>
