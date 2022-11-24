<template>
    <app-layout title="Pacientes">
        <template #header>
        <Header>
           </Header>         
        </template>
        <div class="py-12">
                    <Link :href="route('pacientes.index')"><i  class=" mx-10 mb-5  text-6xl  fa-solid fa-circle-arrow-left text-green-400 hover:text-green-700"></i></Link>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-green-400 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-indigo-400 border-b border-gray-200">
                        <form @submit.prevent="submit" method="post">
                            <div v-if="form.validar === true">
                                <div v-if="Object.keys(errors).length">
                                  <jet-modal  :show="modalClose">
                                        <template v-slot:title >
                                                <h1><i class="text-4xl text-red-500 fa-solid fa-circle-exclamation"></i></h1>
                                                <h1 class="mt-4 ">Hay un error en el envio del formulario</h1>
                                        </template>
                                        <template v-slot:content >
                                             <div v-for="error in errors" :key="error.fecha">
                                                 <ul>
                                                        <li><i class=" mr-3  text-2xl text-red-500 fa-solid fa-circle-exclamation"></i>{{error}}</li>
                                                 </ul>
                                                
                                             </div>
                                        </template>
                                        
                                        <template v-slot:footer >
                                         <jet-button @click="modalClose=false" class="mt-4 bg-red-500 hover:bg-red-800" >Cerrar</jet-button>
                                        </template>
                                  </jet-modal>
                                </div>
                            <div v-else class="correcto">
                                    <strong>Enviado!</strong>
                            </div>
                        </div>
                            

                            
                            <jet-label class="text-white"  value="Nombre" />
                            <jet-input class="my-2 block w-full" type="text" v-model="form.nombre" />
                            <alerta-error :message="errors.nombre" />
                            
                            <jet-label class="text-white" value="Especie" /> 
                            <select class="my-2" name="especie" v-model="form.especie">
                            <option value="canino">Canino</option>
                            <option value="felino" selected>Felino</option>
                            <option value="equino" selected>Equino</option>
                            </select>
                            <alerta-error :message="errors.especie" />
                            
                            <jet-label class="text-white" value="Sexo" /> 
                            <select class="my-2" name="sexo" v-model="form.sexo">
                            <option value="hembra">Hembra</option>
                            <option value="macho" selected>Macho</option>
                            </select>
                            <alerta-error :message="errors.sexo" />
                            
                             <jet-label class="text-white" value="Raza" />
                            <jet-input class="my-2 block w-full" type="text" v-model="form.raza" />
                            <alerta-error :message="errors.raza" />
                            
                            <jet-label class="text-white" value="Edad" />
                            <jet-input class="my-2 block w-full" type="text" v-model="form.edad" />
                            <alerta-error :message="errors.edad" />
                            
                             <jet-label class="text-white" value="Remitente" />
                            <jet-input class="my-2 block w-full" type="text" v-model="form.remitente" />
                           
                           <jet-label class="text-white"  value="Propietario" />
                            <jet-input class="my-2 block w-full" type="text" v-model="form.propietario" />
                            <alerta-error :message="errors.propietario" />
                            
                            <jet-button class="mt-4" type="submit">Enviar</jet-button>
                        </form>
                    </div>   
                </div>
            </div>
        </div>

   
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Inertia } from '@inertiajs/inertia';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import AlertaError from '@/Jetstream/componentes/AlertaError.vue';
    import JetInput from '@/Jetstream/Input.vue';
    import JetLabel from '@/Jetstream/Label.vue';
    import JetButton from '@/Jetstream/Button.vue';
    import JetModal from '@/Jetstream/DialogModal.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Header from '@/Jetstream/Header.vue';


    export default defineComponent({
        props:['errors'],
        data() {
            return {
                modalClose: 'false',
                form:{
                especie:"",    
                nombre:"",
                remitente:"",
                raza:"",
                sexo:"",
                edad:"",
                propietario : "",
                validar: false,
                }
            }
        },
        components: {
            AppLayout,
            AlertaError,
            JetInput,
            JetLabel,
            JetButton,
            JetModal,
            Head,
            Link,
            Header,
        },
        methods: {
            submit(){
                 this.modalClose =  true;
                this.form.validar = true;
                 Inertia.post(route('pacientes.store'),this.form)                      
         },
            },
    })
   
</script>

