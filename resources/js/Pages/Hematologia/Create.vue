<template>
    <app-layout title="Hematologia">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hematologia Especial
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
                            <jet-input class="mt-1 mb-4 block w-full" type="text" :value="request.paciente" v-model="form.pacientes_id"/>
                            <alerta-error :message="errors.pacientes_id" />
                        

                             <jet-label class="text-white" value="Eritrocitos" />
                            <jet-input class="mt-1 mb-4 mb-4 block w-full" type="text" v-model="form.eritrocitos" />
                             <alerta-error :message="errors.eritrocitos" />

                            <jet-label class="text-white" value="Hemoglobina" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.hemoglobina" />
                            <alerta-error :message="errors.hemoglobina" />


                            <jet-label class="text-white" value="Hematocrito" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.hematocrito" />
                            <alerta-error :message="errors.hematocrito" />


                            <jet-label class="text-white" value="VCM" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.vcm" />
                            <alerta-error :message="errors.vcm" />


                            <jet-label class="text-white" value="CHCM" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.chcm" />
                            <alerta-error :message="errors.chcm" />


                            <jet-label class="text-white" value="Reticulocitos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.reticulocitos" />
                            <alerta-error :message="errors.reticulocitos" />


                            <jet-label class="text-white" value="Leucocitos Totales" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.leucocitosT" />
                             <alerta-error :message="errors.leucocitosT" />


                            <jet-label class="text-white" value="Plaquetas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.plaquetas" />
                             <alerta-error :message="errors.plaquetas " />

                            <jet-label class="text-white" value="Proteinas plasmaticas totales" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.proteinasPT" />
                             <alerta-error :message="errors.proteinasPT" />

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

                            <jet-label class="text-white" value="Eosinofolos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.eosinofilos" />
                            <alerta-error :message="errors.eosinofilos" />

                            <jet-label class="text-white" value="Eosinofolos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.observacion" />
                            <alerta-error :message="errors.observacion" />

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
                pacientes_id: "",
                eritrocitos:"",
                hemoglobina:"",
                hematocrito:"",
                vcm:"",
                chcm:"",
                reticulocitos:"",
                leucotiosT: "",
                plaquetas:"",
                proteinasPT:"",
                neutrofilosS:"",
                neutrofilosB:"",
                linfocitos:"",
                monocitos:"",
                eosinofilos:"",
                observacion:"",
                fecha : "",
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
                 Inertia.post(route('hematologia.store'),this.form)                      
         },
            },
    })
   
</script>

