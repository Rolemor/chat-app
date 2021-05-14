<template>
    <div class="flex flex-col p-1 m-1 bg-green-300 rounded-lg shadow-lg">
        <div>Name: {{ request.name }}</div>
        <div>Email: {{ request.email }}</div>
        <div class="flex-row">
            <button v-on:click="deleteFriendRequest(request.id)" class="place-self-end p-1 bg-white hover:bg-red-500 hover:text-white rounded-md">Delete</button>
        </div>
    </div>
</template>

<script>
import Button from "@/Jetstream/Button";

export default {
    components: {Button},
    props: ['request'],
    methods: {
        deleteFriendRequest(id) {
            axios.get('/removeFriendRequest/' + id)
                .then( response => {
                    this.$emit('requestdeleted');
                })
                .catch( error => {
                    console.log( error );
                })
        }
    }
}
</script>
