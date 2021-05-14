<template>
    <div class="flex flex-col p-1 m-1 bg-yellow-300 rounded-lg shadow-lg">
        <div>Name: {{ requestOf.name }}</div>
        <div>Email: {{ requestOf.email }}</div>
        <div class="flex-row">
            <button v-on:click="acceptFriendRequest(requestOf.id)" class="p-1 mr-1 bg-white hover:bg-blue-400 hover:text-white rounded-md">Accept</button>
            <button v-on:click="deleteFriendRequestOf(requestOf.id)" class="place-self-end p-1 bg-white hover:bg-red-500 hover:text-white rounded-md">Delete</button>
        </div>
    </div>
</template>

<script>
import Button from "@/Jetstream/Button";

export default {
    components: {Button},
    props: ['requestOf'],
    methods: {
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
