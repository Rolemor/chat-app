<template>
    <register />
</template>

<script>
import Register from "@/Pages/Auth/Register";

export default {
    components: {
        Register,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
}
</script>
