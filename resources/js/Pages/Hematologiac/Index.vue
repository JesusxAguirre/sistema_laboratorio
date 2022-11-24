<template>
    <app-layout title="Hematologia especial">
        <template #header>
           <Header>

           </Header>
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
                                    <tr class="bg-blue-200" v-for="h in hematologia.data" :key="h.id">
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700  whitespace-nowrap">{{h.pacientes_id}}</td>
                                
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">{{ moment(h.fecha).format("DD-MM-YYYY") }}</td>
                                       
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">
                                            
                                            <Link class="px-4 py-1" :href="route('hematologiac.edit', { hematologiac : h})" ><i  class="text-4xl fa-solid fa-user-pen  text-green-400 hover:text-green-700"></i></Link>
                                            
                                            </td>
                                           
                                    </tr>
                                
                                </tbody>                            
                            </table>
                        </div>
                        
                            <div v-for="h in hematologia.data" :key="h" >
                                <div class="grid grid-cols-1 gap-4 md:hidden">
                                    <div class="mt-6 bg-blue-300 p-4 rounded-lg shadow">
                                        <div class="flex  space-x-2 mb-4 text-sm">
                                           
                                           
                                        </div>
                                        <div class="space-y-4">
                                            <div>
                                            <span class="p-1.5 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">ID de paciente:</span> {{h.pacientes_id}}
                                            </div>
                                             <div>
                                            <span class="p-1.5 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">Fecha:</span>  {{ moment(h.fecha).format("DD-MM-YYYY") }}
                                            </div>
                                        </div>
                                    <div class="mt-5 space-y-5 float-left">
                                    
                                        <Link class="px-4 py-1" :href="route('hematologiac.edit', { hematologiac : h})" ><i  class="text-4xl fa-solid fa-user-pen  text-green-500 hover:text-green-700"></i></Link>
                                            
                                    </div>
                                </div>
                            </div>
                            
                        </div>  
                        <paginator class="mt-3" :paginator="hematologia" />                     
                    </div>   
                </div>
            </div>
        </div>
      
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    
    import { Inertia } from '@inertiajs/inertia';
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetButton from '@/Jetstream/Button.vue';
    import Header from '@/Jetstream/Headerhc.vue';
     import paginator from '@/Jetstream/componentes/Paginacion.vue';
    import moment from "moment";
    export default defineComponent({
        props:['hematologia'],
        components: {
            AppLayout,
            Head,
            Link,
            JetButton,
            Header,
            paginator,
           
        },
        methods: {
        
        },
        data() {
            return {
                 moment: moment,
            };
        },
    })
</script>

