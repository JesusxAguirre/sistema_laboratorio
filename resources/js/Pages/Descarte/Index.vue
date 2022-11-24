<template>
    <app-layout title="Hematologia especial">
        <template #header>
            Descartes
        </template>

       
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        
                       <div class=" overflow-auto rounded-lg  hidden md:block">
                                <table class="table-auto w-full">
                                    <thead class="bg-black border-b-2 border-gray-200">
                                    <tr>
                                        <th class=" w-12 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            ID De Paciente
                                        </th>
                                      
                                        <th class=" bg border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                           Fecha
                                        </th>
                                        <th class=" w-20 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Acciones
                                        </th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-blue-200" v-for="d in descarte.data" :key="d.id">
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700  whitespace-nowrap">{{d.pacientes_id}}</td>
                                
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">{{ moment(d.fecha).format("DD-MM-YYYY") }}</td>
                                       
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">
                                            
                                            <i @click="modalClose=true; selectedDescarte= d" class="text-4xl fa-solid fa-trash-can text-red-400 hover:text-red-800"></i>                                            
                                            </td>
                                           
                                    </tr>
                                
                                </tbody>                            
                            </table>
                        </div>
                        
                            <div v-for="d in descarte.data" :key="d" >
                                <div class="grid grid-cols-1 gap-4 md:hidden">
                                    <div class="mt-6 bg-blue-300 p-4 rounded-lg shadow">
                                        <div class="flex  space-x-2 mb-4 text-sm">
                                           
                                           
                                        </div>
                                        <div class="space-y-4">
                                            <div>
                                            <span class="p-1.5 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">ID de paciente:</span> {{d.pacientes_id}}
                                            </div>
                                             <div>
                                            <span class="p-1.5 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">Fecha:</span>  {{ moment(d.fecha).format("DD-MM-YYYY") }}
                                            </div>
                                        </div>
                                    <div class="mt-5 space-y-5 float-left">
                                    
                        <i @click="modalClose=true; selectedDescarte= d" class="text-4xl fa-solid fa-trash-can text-red-400 hover:text-red-800"></i>                                            
                                    </div>
                                </div>
                            </div>
                            
                        </div>  
                        <paginator class="mt-3" :paginator="descarte" />                     
                    </div>   
                </div>
            </div>
        </div>
       <jet-modal  :show="modalClose">
            <template v-slot:title >
                 <h1><i class="text-4xl text-red-500 fa-solid fa-circle-exclamation"></i></h1>
                <h1 class="mt-4 ">Eliminar Descarte</h1>
            </template>
            <template v-slot:content >
                <p v-if="selectedDescarte">¿Esta seguro que desea eliminar este Descarte? </p>
            </template>
                                        
            <template v-slot:footer >
            <jet-button @click="deleteDescarte()" class=" float-left bg-red-500 hover:bg-red-800" >Eliminar</jet-button>
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
     import paginator from '@/Jetstream/componentes/Paginacion.vue';
    import moment from "moment";
    export default defineComponent({
        props:['descarte'],
        components: {
            AppLayout,
            Head,
            Link,
            JetButton,
            JetModal,
            Header,
            paginator,
           
        },
        methods: {
        
        },
        data() {
            return {
                 moment: moment,
                  modalClose : false,
                selectedDescarte: Object,
            };
        },
        methods: {
           deleteDescarte(){

               Inertia.delete(route('Descarte.destroy', {Descarte: this.selectedDescarte}));

               this.modalClose = false;
           }
        },
    })
</script>

