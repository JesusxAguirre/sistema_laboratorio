<template>
    <app-layout title="Pacientes">
        <template #header>
        Editar Hematologia completa        
        </template>
        <div class="py-12">
            
                    <Link :href="route('hematologiac.index')"><i  class=" mx-10 mb-5  text-6xl  fa-solid fa-circle-arrow-left text-green-400 hover:text-green-700"></i></Link>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-green-400 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-orange-300 border-b border-gray-200">
                        <form @submit.prevent="submit">
                                
                             <div v-if="validar === true">
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
                           <jet-label class="text-white" value="ID_Paciente" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.pacientes_id"/>
                            <alerta-error :message="errors.pacientes_id" />

                            <jet-label class="text-white" value="Hemoglobina" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.hemoglobina" />
                            <alerta-error :message="errors.hemoglobina" />


                            <jet-label class="text-white" value="Hematocrito" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.hematocrito" />
                            <alerta-error :message="errors.hematocrito" />


                            <jet-label class="text-white" value="Leucocitos Totales" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.leucocitosT" />
                             <alerta-error :message="errors.leucocitosT" />


                            <jet-label class="text-white" value="Plaquetas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.plaquetas" />
                             <alerta-error :message="errors.plaquetas " />


                            <jet-label class="text-white" value="Neutrofilos Segmentados" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.neutrofilosS" />
                             <alerta-error :message="errors.neutrofilosS" />

                            <jet-label class="text-white" value="Neutrofilos en Banda" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.neutrofilosB" />
                             <alerta-error :message="errors.neutrofilosB" />

                             <jet-label class="text-white" value="Linfocitos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.linfocitos" />
                            <alerta-error :message="errors.linfocitos" />
                            
                            <jet-label class="text-white" value="Monocitos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.monocitos" />
                            <alerta-error :message="errors.monocitos" />

                            <jet-label class="text-white" value="Eosinofilos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.eosinofilos" />
                            <alerta-error :message="errors.eosinofilos" />

                            <jet-label class="text-white" value="Basofilos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.basofilos" />
                            <alerta-error :message="errors.basofilos" />

                            <jet-label class="text-white" value="Fecha" />
                            <jet-input class="mt-1 mb-4 block w-full" type="date" v-model="form.fecha" />
                            <alerta-error :message="errors.fecha" />
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
    import inertia, { Inertia } from '@inertiajs/inertia';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import AlertaError from '@/Jetstream/componentes/AlertaError.vue';
    import JetInput from '@/Jetstream/Input.vue';
    import JetLabel from '@/Jetstream/Label.vue';
    import JetButton from '@/Jetstream/Button.vue';
    import JetModal from '@/Jetstream/DialogModal.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Header from '@/Jetstream/Header.vue';
    import moment from "moment";

    export default defineComponent({
        props:['hematologiac','errors'],
        data() {
            return {
                modalClose: '',
                 moment: moment,
                validar: false,
                form:{
                 pacientes_id: this.hematologiac.pacientes_id,
                hemoglobina:this.hematologiac.hemoglobina,
                hematocrito:this.hematologiac.hematocrito,  
                leucocitosT: this.hematologiac.leucocitosT,
                plaquetas:this.hematologiac.plaquetas,
                neutrofilosS:this.hematologiac.neutrofilosS,
                neutrofilosB:this.hematologiac.neutrofilosB,
                linfocitos:this.hematologiac.linfocitos,
                monocitos:this.hematologiac.monocitos,
                eosinofilos:this.hematologiac.eosinofilos,
                basofilos:this.hematologiac.basofilos,
                fecha : this.hematologiac.fecha,
                },
            };
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
                this.validar = true;
                 Inertia.put(route('hematologiac.update',{'hematologiac' :this.hematologiac}),this.form);                      
         },
            },
    })
   
</script>

