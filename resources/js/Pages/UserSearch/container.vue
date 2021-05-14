<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Search
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex-col">
                    <InputSearch
                    v-on:namesearched="getUsers"/>
                    <UsersContainer
                    v-on:addrequest="getUsers(searchValue)"
                    v-on:frienddeleted="getUsers(searchValue)"
                    v-on:requestdeleted="getUsers(searchValue)"
                    v-on:requestofdeleted="getUsers(searchValue)"
                    v-on:requestaccepted="getUsers(searchValue)"
                    :users="users"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import InputSearch from '@/Pages/UserSearch/inputSearch'
import UsersContainer from '@/Pages/UserSearch/usersContainer'

export default {
    components: {AppLayout, InputSearch, UsersContainer},
    data: function () {
        return {
            users: [],
            searchValue: ''
        }
    },
    methods: {
        getUsers(value) {
            this.searchValue = value
            axios.post('/getUsersByName', {
                name: value
            })
            .then( response => {
                this.users = response.data;
            })
            .catch(error => {
                console.log(error);
            })
        },
    },
}

</script>
