<template>
    <div class="flex flex-col p-1 m-1 bg-green-300 rounded-lg shadow-lg">
        <div>
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img class="h-8 w-8 rounded-full object-cover" :src="request.profile_photo_url" :alt="request.name" />
            </div>
            <div>
                <div>Name: {{ request.name }}</div>
                <div>Email: {{ request.email }}</div>
            </div>
        </div>
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
