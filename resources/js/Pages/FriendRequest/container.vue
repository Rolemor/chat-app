<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Friends
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex-col">
                    <friend-request-container :friendRequests="friendRequests" />
                    <friends-container :friends="friends" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import FriendsContainer from '@/Pages/FriendRequest/friendsContainer'
import FriendRequestContainer from '@/Pages/FriendRequest/friendRequestContainer'

export default {
    components: {
        AppLayout,
        FriendsContainer,
        FriendRequestContainer

    },
    data: function () {
        return {
            friendRequests: [],
            friends: []
        }
    },
    methods: {
        getFriends() {
            axios.get('/getFriends')
            .then( response => {
                this.friends = response.data;
            })
            .catch(error => {
                console.log(error);
            })
        },
        getFriendRequests() {
            axios.get('/getFriendRequests')
            .then( response => {
                this.friendRequests = response.data;
            })
            .catch(error => {
                console.log(error);
            })
        }
    },
    created() {
        this.getFriends();
        this.getFriendRequests();
    }
}
</script>
