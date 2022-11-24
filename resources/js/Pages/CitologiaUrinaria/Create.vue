<template>
    <app-layout title="Hematologia">
        <template #header>
               <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Descarte 
            </h2>
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
                                             <div v-for="error in errors" :key="error.pacientes_id">
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
               
                            <jet-label class="text-white" value="ID_Paciente" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" :value="request.paciente" v-model="form.pacientes_id"/>
                            <alerta-error :message="errors.pacientes_id" />

                            <jet-label class="text-white" value="Muestra obtenida por:" /> 
                            <select class="my-2" name="diagnostico" v-model="form.extraccion">
                            <option value="Post Sondaje">Sondaje</option>
                             <option value="Cistosentésis" selected>Cistosentésis</option>
                            <option value="Micción Natural" selected>Micción </option>                            
                         
                            </select>
                            

                            <jet-label class="text-white" value="Diagnostico" /> 
                            <select class="my-2" name="diagnostico" v-model="form.diagnostico">
                            <option value="neoplasia">Neoplasia</option>
                             <option value="infeccionb" >Infección Bacteriana</option>
                            <option value="inflamciona" >Inflamación Aséptica  </option>                            
                            <option value="inflamacionu" > Inflamación Urolitiasis</option>
                            <option value="inflamacionu" > Normal</option>
                            </select>
                            
                            <alerta-error :message="errors.diagnostico" />


                            <jet-label class="text-white" value="Fecha" />
                            <jet-input name="fecha" class="my-2 block w-full" type="date" v-model="form.fecha" />
                            <alerta-error :message="errors.fecha" />

                           <jet-label class="text-white" value="Primera imagen" />
                            <jet-input 
                            class="mt-1 mb-4 block w-full" 
                            type="file" 
                            @input="form.imagen1 = $event.target.files[0]"/>
                            <alerta-error :message="errors.imagen1" />

                            <jet-label class="text-white" value="Segunda imagen" />
                            <jet-input 
                            class="mt-1 mb-4 block"
                            type="file" 
                             @input="form.imagen2 = $event.target.files[0]"
                             />
                            <alerta-error :message="errors.imagen2" />
                            
                            <jet-label class="text-white" value="Tercera imagen" />
                            <jet-input 
                            class="mt-1 mb-4 block w-full" 
                            type="file" 
                            @input="form.imagen3 = $event.target.files[0]"/>
                            <alerta-error :message="errors.imagen3" /> 

                            <jet-label class="text-white" value="Cuarta imagen" />
                            <jet-input 
                            class="mt-1 mb-4 block w-full" 
                            type="file" 
                            @input="form.imagen4 = $event.target.files[0]"/>
                            <alerta-error :message="errors.imagen4" /> 

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
    import Header from '@/Jetstream/HeaderH.vue';


    export default defineComponent({
        props:['errors','request'],
        data() {
            return {
                modalClose: 'false',
                form:{
                pacientes_id: this.request.paciente,
                diagnostico:"",
                extraccion:"",
                imagen1:"",
                imagen2:"",
                imagen3:"",
                imagen4:"",
                fecha: "",
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
                 Inertia.post(route('citologiaurinaria.store'),this.form)                      
         },
            },
    })
   
</script>

