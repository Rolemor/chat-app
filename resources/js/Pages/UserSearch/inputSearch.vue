<template>
    <div class="relative h-10 m-1">
        <div style="border-top: 1px solid #e6e6e6;" class="grid grid-cols-6 flex">
            <input
                type="text"
                v-model="searchName"
                @keyup.enter="sendSearchName"
                placeholder="Search somebody..."
                class="col-span-2 outline-none p-1"
            />
            <button
                @click="sendSearchName"
                class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white">
                Send
            </button>
        </div>
    </div>
</template>

<script>
import Input from "@/Jetstream/Input";
import Button from "@/Jetstream/Button";

export default {
    components: {Input, Button},
    data: function () {
        return {
            searchName: ""
        }
    },
    methods: {
        sendSearchName() {
            if( this.searchName === " ") {
                return;
            }
            this.$emit('namesearched', this.searchName);
        }
    }
}
</script>
