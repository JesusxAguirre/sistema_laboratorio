<template>
   <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <jet-nav-link :href="route('hematologia.create')" :active="route().current('hematologia.create')">
            Agregar hematologia
        </jet-nav-link>

    </div>
    <div class="flex space-x-8 sm:-my-px sm:ml-5 md:hidden ">
        <jet-nav-link :href="route('hematologia.create')" :active="route().current('hematologia.create')">
            Agregar hematologia
        </jet-nav-link>

    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import JetNavLink from '@/Jetstream/NavLink.vue';

    export default defineComponent({
        components: {
            JetNavLink,
        },
        props: [],
    })
</script>