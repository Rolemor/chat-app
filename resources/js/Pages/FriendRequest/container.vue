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
                    <friend-request-container
                        v-on:requestdeleted="getFriendRequests()"
                        v-on:requestofdeleted="getFriendRequestsOf()"
                        v-on:requestaccepted="requestAccepted()"
                        :friendRequests="friendRequests"
                        :friendRequestsOf="friendRequestsOf"/>
                    <friends-container
                        v-on:frienddeleted="getFriends()"
                        :friends="friends" />
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
            friendRequestsOf: [],
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
        },
        getFriendRequestsOf() {
            axios.get('/getFriendRequestsOf')
                .then( response => {
                    this.friendRequestsOf = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        requestAccepted() {
            this.getFriendRequestsOf();
            this.getFriends();
        }
    },
    created() {
        this.getFriends();
        this.getFriendRequests();
        this.getFriendRequestsOf();
    }
}
</script>
