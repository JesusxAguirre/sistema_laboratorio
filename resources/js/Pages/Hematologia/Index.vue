<template>
    <app-layout title="Pacientes">
        <template #header>
           <Header>

           </Header>
        </template>

       
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        
                        <div class="overflow-auto  rounded-lg  hidden md:block">
                                <table class="table-auto w-full">
                                    <thead class="bg-black border-b-2 border-gray-200">
                                    <tr>
                                        <th class=" w-12 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Paciente_id
                                        </th>
                                        <th class=" w-24 border border-gray-500 px-4 py-2 text-white p-3 text-sm  font-semibold  tracking-wide ">
                                            Hematologia_id
                                            </th>
                                        <th class=" bg border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Generar PDF 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-blue-200" v-for="h in hematologia" :key="h">
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700  whitespace-nowrap">{{h.paciente_id}}</td>
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">{{h.id}}</td>                                        
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">
                                             <Link class="px-4 py-1" :href="route('hematologia.show', { hematologium : h})" ><i  class="text-4xl fa-solid fa-file-pdf  text-red-400 hover:text-green-700"></i></Link>
                                            <Link class="px-4 py-1" :href="route('hematologia.edit', { hematologium : h})" ><i  class="text-4xl fa-solid fa-user-pen  text-green-400 hover:text-green-700"></i></Link>
                                            <i @click="modalClose=true; selectedPaciente= p" class="text-4xl fa-solid fa-trash-can text-red-400 hover:text-red-800"></i> 
                                            </td>
                                    </tr>
                                
                                </tbody>                            
                            </table>
                        </div>
                            <div v-for="h in paciente" :key="h" >
                                <div class="grid grid-cols-1 gap-4 md:hidden">
                                    <div class="mt-6 bg-blue-400 p-4 rounded-lg shadow">
                                        <div class="flex  space-x-2 mb-4 text-sm">
                                            <div>
                                            ID de hematologia {{h.id}}
                                            </div>
                                        </div>
                                        <div class="space-y-4">
                                            <div>
                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wide bg-green-500">Fecha:</span> {{h.fecha}}
                                            </div>
                                           
                                        </div>
                                    <div class="float-right">
                                        <Link class="px-4 py-1" :href="route('hematologia.show', { hematologium : h})" ><jet-button class=" float-left bg-red-500 hover:bg-red-800" >Exportar PDF</jet-button></Link>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>   
                </div>
            </div>
        </div>
        <jet-modal  :show="modalClose"> 
            <template v-slot:title >
                 <h1><i class="text-4xl text-red-500 fa-solid fa-circle-exclamation"></i></h1>
                <h1 class="mt-4 ">Eliminar usuario</h1>
            </template>
            <template v-slot:content >
                <p v-if="selectedPaciente">¿Esta seguro que desea eliminar este paciente? {{selectedPaciente.nombre}}</p>
            </template>
                                        
            <template v-slot:footer >
            <jet-button @click="deletePaciente()" class=" float-left bg-red-500 hover:bg-red-800" >Eliminar</jet-button>
            <jet-button @click="modalClose=false" >Cerrar</jet-button>
            </template>
        </jet-modal>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Inertia } from '@inertiajs/inertia';
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetButton from '@/Jetstream/Button.vue';
    import Header from '@/Jetstream/HeaderH.vue';
    import JetModal from '@/Jetstream/componentes/EliminacionModal.vue';


    export default defineComponent({
        props:['hematologia','paciente'],
        components: {
            AppLayout,
            Head,
            Link,
            JetButton,
            Header,
            JetModal,
        },
        data() {
            return {
                modalClose : false,
                selectedPaciente: Object,
            }
        },
        methods: {
           deletePaciente(){

               Inertia.delete(route('hematologia.destroy', {hematologia: this.selectedPaciente}));

               this.modalClose = false;
           }
        },
    })
</script>

