<template>
    <div class="flex flex-col p-1 m-1 bg-blue-400 rounded-lg shadow-lg">
        <div>
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img class="h-8 w-8 rounded-full object-cover" :src="friend.profile_photo_url" :alt="friend.name" />
            </div>
            <div>
                <div>Name: {{ friend.name }}</div>
                <div>Email: {{ friend.email }}</div>
            </div>
        </div>

        <div class="flex-row">
            <button v-on:click="deleteFriend(friend.id)" class="place-self-end p-1 bg-white hover:bg-red-500 hover:text-white rounded-md shadow">Delete</button>
        </div>
    </div>
</template>

<script>
import Button from "@/Jetstream/Button";

export default {
    components: {Button},
    props: ['friend'],
    methods: {
        deleteFriend(id) {
            axios.get('/toggleFriend/' + id)
                .then( response => {
                    this.$emit('frienddeleted');
                })
                .catch( error => {
                    console.log( error );
                })
        }
    }
}
</script>
