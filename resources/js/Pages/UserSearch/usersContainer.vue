<template>
    <div class="p-2 m-3 bg-gray-200 text-xl rounded-lg shadow-lg">
        Users:
    </div>
    <div class="h-92 w-full">
        <div class="p-2 overflow-auto flex flex-wrap">
            <div v-for="(user, index) in users" :key="index" class="w-200 w-">
                <user-item
                    v-on:addrequest="addRequest"
                    v-on:frienddeleted="deleteFriend"
                    v-on:requestdeleted="deleteRequest"
                    v-on:requestofdeleted="deleteRequestOf"
                    v-on:requestaccepted="acceptRequest"
                    :user="user"
                />
            </div>
        </div>
    </div>
</template>

<script>
import UserItem from '@/Pages/UserSearch/userItem'

export default {
    components: {UserItem},
    props: ['users'],
    methods: {
        addRequest() {
            this.$emit('addrequest');
        },
        deleteFriend() {
            this.$emit('frienddeleted');
        },
        deleteRequest() {
            this.$emit('requestdeleted');
        },
        deleteRequestOf() {
            this.$emit('requestofdeleted');
        },
        acceptRequest() {
            this.$emit('requestaccepted');
        }

    }
}
</script>

<style scoped>
.w-200 {
    width: 200px;
    max-width: 50%;
}
</style>
