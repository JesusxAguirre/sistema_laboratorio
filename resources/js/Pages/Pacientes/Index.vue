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
                        <div class="mb-60  rounded-lg  hidden md:block">
                                <table class="table-auto w-full">
                                    <thead class="bg-black border-b-2 border-gray-200">
                                    <tr>
                                        <th class=" w-12 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            ID
                                        </th>
                                        <th class=" w-24 border border-gray-500 px-4 py-2 text-white p-3 text-sm  font-semibold  tracking-wide ">
                                        Nombre
                                        </th>
                                        <th class=" bg border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Especie
                                        </th>
                                        <th class=" w-52 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Remitente
                                        </th>
                                        <th class=" w-20 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Acciones
                                        </th>
                                        <th class=" w-20 border border-gray-500 px-4 py-2  text-white p-3 text-sm  font-semibold  tracking-wide">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-blue-200" v-for="p in pacientes.data" :key="p.id">
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700  whitespace-nowrap">{{p.id}}</td>
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">{{p.nombre}}</td>
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">{{p.especie}}</td>
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">{{p.remitente}}</td>
                                        <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">
                                            
                                            <Link class="px-4 py-1" :href="route('pacientes.edit', { paciente : p})" ><i  class="text-4xl fa-solid fa-user-pen  text-green-400 hover:text-green-700"></i></Link>
                                            <i @click="modalClose=true; selectedPaciente= p" class="text-4xl fa-solid fa-trash-can text-red-400 hover:text-red-800"></i>
                                             <Link class="px-4 py-1" :href="route('pacientes.show', { paciente : p})" ><i class="text-4xl fa-solid fa-file-pdf text-red-600 hover:text-green-700"></i></Link>
                                            </td>
                                            <td class=" border border-gray-500 px-4 py-2 p-3 text-sm  text-gray-700 whitespace-nowrap">
                                             <jet-dropdown class="mt-4" align="left" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                Selecciona una accion

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Selecciona una accion
                                        </div>

                                        <jet-dropdown-link :href="route('hematologiac.create', { paciente : p.id})">
                                            Hematologia Completa
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('hematologia.create', { paciente : p.id})">
                                            Hematologia Especial
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('Descarte.create', { paciente : p.id})">
                                            Descartes
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('urianalisis.create', { paciente : p.id})">
                                            Urianalisis
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('citologiaurinaria.create', { paciente : p.id})">
                                            Citologia Urinaria
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('Frotis.create', { paciente : p.id})">
                                            Frotis
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('quimica.create', { paciente : p.id})">
                                            Quimica sanguinea
                                        </jet-dropdown-link>

                                    </template>
                                </jet-dropdown>
                                            </td>
                                    </tr>
                                
                                </tbody>                            
                            </table>
                        </div>
                        
                         <div v-for="p in pacientes.data" :key="p" >
                                <div class="grid grid-cols-1 gap-4 md:hidden">
                                    <div class="mt-6 bg-blue-300 p-4 rounded-lg shadow">
                                        <div class="flex  space-x-2 mb-4 text-sm">
                                           
                                            <div class="space-y-5 float-right">
                                            <jet-dropdown class="mt-4" align="left" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                Selecciona una accion

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Selecciona una accion
                                        </div>

                                        <jet-dropdown-link :href="route('hematologiac.create', { paciente : p.id})">
                                            Hematologia Completa
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('hematologia.create', { paciente : p.id})">
                                            Hematologia Especial
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('Descarte.create', { paciente : p.id})">
                                            Descartes
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('Frotis.create', { paciente : p.id})">
                                            Frotis
                                        </jet-dropdown-link>
                                        <jet-dropdown-link :href="route('quimica.create', { paciente : p.id})">
                                            Quimica sanguinea
                                        </jet-dropdown-link>

                                    </template>
                                </jet-dropdown>
                                            </div>
                                        </div>
                                        <div class="space-y-4">
                                            <div>
                                            <span class="p-1.5 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">Nombre:</span> {{p.nombre}}
                                                                                       <span class="p-1.5 ml-3 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">Especie:</span> {{p.especie}}

                                            </div>
                                             <div>
                                            <span class="p-1.5 rounded-lg text-xs font-medium uppercase tracking-wide bg-green-500">Remitente:</span> {{p.remitente}}
                                            </div>
                                        </div>
                                    <div class="space-y-5 float-left">
                                    
                                        <Link class="px-4 py-1" :href="route('pacientes.edit', { paciente : p})" ><i  class="text-4xl fa-solid fa-user-pen  text-green-500 hover:text-green-700"></i></Link>
                                            <i @click="modalClose=true; selectedPaciente= p" class="text-4xl fa-solid fa-trash-can text-red-400 hover:text-red-800"></i>
                                        <Link class="px-4 py-1" :href="route('pacientes.show', { paciente : p})" ><jet-button class="  bg-red-500 hover:bg-red-800" >Exportar PDF</jet-button></Link>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                     <paginator class="mt-3" :paginator="pacientes" />
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
    import Header from '@/Jetstream/Header.vue';
    import JetModal from '@/Jetstream/componentes/EliminacionModal.vue';
    import paginator from '@/Jetstream/componentes/Paginacion.vue';
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    export default defineComponent({
        props:['pacientes'],
        components: {
            AppLayout,
            Head,
            Link,
            JetButton,
            Header,
             JetDropdown,
            JetDropdownLink,
            JetModal,
            paginator,
        },
        data() {
            return {
                modalClose : false,
                selectedPaciente: Object,
            }
        },
        methods: {
           deletePaciente(){

               Inertia.delete(route('pacientes.destroy', {paciente: this.selectedPaciente}));

               this.modalClose = false;
           }
        },
    })
</script>

