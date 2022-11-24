<template>
    <Link :href="'/'">
        <img src="/images/Logonuevo.jpg" alt="" style="width:128px;">
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
