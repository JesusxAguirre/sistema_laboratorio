<template>
   <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <jet-nav-link :href="route('pacientes.create')" :active="route().current('pacientes.create')">
            Agregar pacientes
        </jet-nav-link>

    </div>
    <div class=" space-x-8 sm:-my-px sm:ml-5 flex md:hidden">
        <jet-nav-link :href="route('pacientes.create')" :active="route().current('pacientes.create')">
            Agregar pacientes
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
