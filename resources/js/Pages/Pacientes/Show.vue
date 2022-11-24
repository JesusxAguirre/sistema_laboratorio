<template>
    <app-layout title="Pacientes Show">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Generar PDF 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                         <div class="bg-gray-100 shadow mx-auto lg:max-w-4xl">
                                <div v-if="paciente.especie == 'canino'">
                                    <form @submit.prevent="submit" action="/hematologia" ref="form">
                                        <div class="p-5">

                                        <jet-label  value="ID del paciente" />
                                        <jet-input type='text' :value="paciente.id" name="id" class="px-2 ml-2 rounded-lg border" />
                                        
                                        <jet-label value="Nombre del PDF" />
                                        <jet-input type='text'  name="nombre" class="px-2 ml-2 rounded-lg border" />
                                        
                                                               
                                        <jet-label value="Interlineado de quimica" />
                                        <jet-input type='text'  name="variable" class="px-2 ml-2 rounded-lg border" />

                                
                                        <jet-label class="text-white" value="Fecha" />
                                        <jet-input class="my-2 block w-full" type="date" name="fecha" />
                                         
                                        
                                        <button type="submit" class="px-2 py-1 ml-2 rounded-lg border bg-gray-500 text-white hover:bg-black">Generate PDF</button>
                                        
                                        </div>
                                    
                                    </form>
                                </div>
                                <div v-else-if="paciente.especie == 'felino'">
                                     <form @submit.prevent="submit" action="/felino" ref="form">
                                        <div class="p-5">
                                         <jet-label  value="ID del paciente" />
                                        <jet-input type='text' :value="paciente.id" name="id" class="px-2 ml-2 rounded-lg border" />

                                        <jet-label class="text-white" value="Fecha" />
                                        <jet-input class="my-2 block w-full" type="date" name="fecha" />

                                         <jet-label value="Nombre del PDF" />
                                        <jet-input type='text'  name="nombre" class="px-2 ml-2 rounded-lg border" />
                                          
                                          <jet-label value="Interlineado de quimica" />
                                        <jet-input type='text'  name="variable" class="px-2 ml-2 rounded-lg border" />
                                        
                                        <button type="submit" class="px-2 py-1 ml-2 rounded-lg border bg-gray-500 text-white hover:bg-black">Generate PDF</button>
                                        
                                        </div>
                                    
                                    </form>
                                </div>
                                <div v-else-if="paciente.especie == 'equino'">
                                     <form @submit.prevent="submit" action="/equino" ref="form">
                                        <div class="p-5">
                                         <jet-label  value="ID del paciente" />
                                        <jet-input type='text' :value="paciente.id" name="id" class="px-2 ml-2 rounded-lg border" />
                                        
                                        <jet-label value="Nombre del PDF" />
                                        <jet-input type='text'  name="nombre" class="px-2 ml-2 rounded-lg border" />

                                         <jet-label value="Interlineado de quimica" />
                                        <jet-input type='text'  name="variable" class="px-2 ml-2 rounded-lg border" />

                                        <jet-label class="text-white" value="Fecha" />
                                        <jet-input class="my-2 block w-full" type="date" name="fecha" />
                                         
                                        
                                        <button type="submit" class="px-2 py-1 ml-2 rounded-lg border bg-gray-500 text-white hover:bg-black">Generate PDF</button>
                                        
                                        </div>
                                    
                                    </form>
                                </div>
                                <div v-else>

                                </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

   
    </app-layout>
</template>
<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>
<script>
    import { defineComponent } from 'vue';
    import { Inertia } from '@inertiajs/inertia';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import AlertaError from '@/Jetstream/componentes/AlertaError.vue';
    import JetInput from '@/Jetstream/Input.vue';
    import JetLabel from '@/Jetstream/Label.vue';
    import JetButton from '@/Jetstream/Button.vue';
    export default defineComponent({
        props:['paciente'],
        components: {
            AppLayout,
            JetLabel,
            AlertaError,
            JetInput,
            JetButton,

        },
        methods:{
      submit: function(){
         this.$refs.form.submit()
      },
        },
        
    })
   
</script>

