<template>
    <div class="text-white grid justify-items-stretch">
        <div class="justify-self-end shadow-lg" v-if="message.user.id === user_id">
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img class="h-8 w-8 rounded-full object-cover" :src="message.user.profile_photo_url" :alt="message.user.name" />
            </div>
            <div class="rounded-lg mt-1 p-2 bg-blue-500 max-w-3xl">
                <div class="inline-block mr-2 text-xl">{{ message.user.name }}:</div>
                <div class="inline-block">{{ message.message }}</div>
            </div>

        </div>
        <div class=" justify-self-start shadow-lg" v-else>
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out inline-block">
                <img class="h-8 w-8 rounded-full object-cover" :src="message.user.profile_photo_url" :alt="message.user.name" />
            </div>
            <div class="rounded-lg mt-1 p-2 bg-green-500 max-w-3xl inline-block">
                <div class="inline-block mr-2 text-xl">{{ message.user.name }}:</div>
                <div class="inline-block">{{ message.message }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['message', 'user_id'],
}
</script>
