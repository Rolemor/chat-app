<template>
    <div class="flex flex-col p-1 m-1 bg-blue-400 rounded-lg shadow-lg" v-if="user.relationship === 1">
        <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
            <img class="h-8 w-8 rounded-full object-cover" :src="'/storage/' + user.profile_photo_path" :alt="user.name" />
        </div>
        <div>{{ user.name }}</div>
        <div>Friend</div>
        <div class="flex-row">
            <button v-on:click="deleteFriend(user.id)" class="place-self-end p-1 bg-white hover:bg-red-500 hover:text-white rounded-md shadow">Delete</button>
        </div>
    </div>
    <div class="flex flex-col p-1 m-1 bg-green-400 rounded-lg shadow-lg" v-else-if="user.relationship === 2">
        <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
            <img class="h-8 w-8 rounded-full object-cover" :src="'/storage/' + user.profile_photo_path" :alt="user.name" />
        </div>
        <div>{{ user.name }}</div>
        <div>My Request</div>
        <div class="flex-row">
            <button v-on:click="deleteFriendRequest(user.id)" class="place-self-end p-1 bg-white hover:bg-red-500 hover:text-white rounded-md">Delete</button>
        </div>
    </div>
    <div class="flex flex-col p-1 m-1 bg-yellow-400 rounded-lg shadow-lg" v-else-if="user.relationship === 3">
        <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
            <img class="h-8 w-8 rounded-full object-cover" :src="'/storage/' + user.profile_photo_path" :alt="user.name" />
        </div>
        <div>{{ user.name }}</div>
        <div>Request to me</div>
        <div class="flex-row">
            <button v-on:click="acceptFriendRequest(user.id)" class="p-1 mr-1 bg-white hover:bg-blue-400 hover:text-white rounded-md">Accept</button>
            <button v-on:click="deleteFriendRequestOf(user.id)" class="place-self-end p-1 bg-white hover:bg-red-500 hover:text-white rounded-md">Delete</button>
        </div>
    </div>
    <div class="flex flex-col p-1 m-1 bg-gray-200 rounded-lg shadow-lg" v-else>
        <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
            <img class="h-8 w-8 rounded-full object-cover" :src="'/storage/' + user.profile_photo_path" :alt="user.name" />
        </div>
        <div>{{ user.name }}</div>
        <div>Not Friend</div>
        <div class="flex-row">
            <button v-on:click="addFriendRequest(user.id)" class="place-self-end p-1 bg-white hover:bg-green-500 hover:text-white rounded-md shadow">Add Friend Request</button>
        </div>
    </div>
</template>

<script>
import Button from "@/Jetstream/Button";

export default {
    components: {Button},
    props: ['user'],
    methods: {
        addFriendRequest(id) {
            axios.get('/addFriendRequest/' + id)
                .then( response => {
                    this.$emit('addrequest');
                })
                .catch( error => {
                    console.log( error );
                })
        },
        deleteFriend(id) {
            axios.get('/toggleFriend/' + id)
                .then( response => {
                    this.$emit('frienddeleted');
                })
                .catch( error => {
                    console.log( error );
                })
        },
        deleteFriendRequest(id) {
            axios.get('/removeFriendRequest/' + id)
                .then( response => {
                    this.$emit('requestdeleted');
                })
                .catch( error => {
                    console.log( error );
                })
        },
        deleteFriendRequestOf(id) {
            axios.get('/removeFriendRequestOf/' + id)
                .then( response => {
                    this.$emit('requestofdeleted');
                })
                .catch( error => {
                    console.log( error );
                })
        },
        acceptFriendRequest(id) {
            axios.get('/acceptFriendRequest/' + id)
                .then( response => {
                    this.$emit('requestaccepted');
                })
                .catch( error => {
                    console.log( error );
                })
        }
    }
}
</script>
