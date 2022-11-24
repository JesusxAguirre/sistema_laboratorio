<template>
    <app-layout title="Pacientes">
        <template #header>
        Editar Quimica       
        </template>
        <div class="py-12">
            
                    <Link :href="route('quimica.index')"><i  class=" mx-10 mb-5  text-6xl  fa-solid fa-circle-arrow-left text-green-400 hover:text-green-700"></i></Link>
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
                            <jet-input class="mt-1 mb-4 block w-full" type="text"  v-model="form.pacientes_id"/>
                            <alerta-error :message="errors.pacientes_id" />
                            
                            <jet-label class="text-white" value="Glucosa" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.glucosa"/>
                            <alerta-error :message="errors.glucosa" />

                            <jet-label class="text-white" value="UREA" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.urea"/>
                            <alerta-error :message="errors.urea" />
                            
                            
                            <jet-label class="text-white" value="Creatinina" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.creatinina"/>
                            <alerta-error :message="errors.creatinina" />
                            
                            
                            <jet-label class="text-white" value="ALT" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.alt"/>
                            <alerta-error :message="errors.alt" />
                            
                            <jet-label class="text-white" value="AST" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.ast"/>
                            <alerta-error :message="errors.ast" />
                            
                            <jet-label class="text-white" value="GGT" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.ggt"/>
                            <alerta-error :message="errors.ggt" />
                            
                            <jet-label class="text-white" value="LDH" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.LDH"/>
                            <alerta-error :message="errors.LDH" />
                            

                            <jet-label class="text-white" value="Fosfatasa Alcalina" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.fosfatasa"/>
                            <alerta-error :message="errors.fosfatasa" />

                            <jet-label class="text-white" value="Amilasa" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.amilasa"/>
                            <alerta-error :message="errors.amilasa" />
                            
                            <jet-label class="text-white" value="Lipasa" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.lipasa"/>
                            <alerta-error :message="errors.lipasa" />
                            
                            <jet-label class="text-white" value="Bilirrubina Total" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.bilirrubinaT"/>
                            <alerta-error :message="errors.bilirrubinaT" />
                            
                            <jet-label class="text-white" value="Bilirrubina Directa" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.bilirrubinaD"/>
                            <alerta-error :message="errors.bilirrubinaD" />
                            
                            <jet-label class="text-white" value="Bilirrubina Indirecta" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.bilirrubinaI"/>
                            <alerta-error :message="errors.bilirrubinaI" />
                            
                            <jet-label class="text-white" value="Protienas Totales Séricas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.proteinasT"/>
                            <alerta-error :message="errors.proteinasT" />
                            
                            <jet-label class="text-white" value="Albúmina" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.albumina"/>
                            <alerta-error :message="errors.albumina" />
                            
                            
                            <jet-label class="text-white" value="Globulinas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.globulinas"/>
                            <alerta-error :message="errors.globulinas" />
                            
                            <jet-label class="text-white" value="Relacion A/G" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.relacionag"/>
                            <alerta-error :message="errors.relacionag" />
                            
                            
                            <jet-label class="text-white" value="Colesterol Total" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.colesterolT"/>
                            <alerta-error :message="errors.colesterolT" />
                            
                            <jet-label class="text-white" value="Calcio" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.calcio"/>
                            <alerta-error :message="errors.calcio" />

                            <jet-label class="text-white" value="Fosforo" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.fosforo"/>
                            <alerta-error :message="errors.fosforo" />

                            <jet-label class="text-white" value="Sodio" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.sodio"/>
                            <alerta-error :message="errors.sodio" />

                            <jet-label class="text-white" value="Cloro" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.cloro"/>
                            <alerta-error :message="errors.cloro" />
                            
                            <jet-label class="text-white" value="Potasio" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.potasio"/>
                            <alerta-error :message="errors.potasio" />
                            

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
    

    export default defineComponent({
        props:['quimica','errors'],
        data() {
            return {
                modalClose: '',
                validar: false,
                form:{
                 pacientes_id: this.quimica.pacientes_id,
                glucosa:this.quimica.glucosa,
                urea:this.quimica.urea,
                creatinina:this.quimica.creatinina,
                alt:this.quimica.alt,
                ast:this.quimica.ast,
                ggt:this.quimica.ggt,
                LDH:this.quimica.LDH,
                fosfatasa:this.quimica.fosfatasa,
                amilasa:this.quimica.amilasa,
                lipasa:this.quimica.lipasa,
                bilirrubinaT: this.quimica.bilirrubinaT,
                bilirrubinaD: this.quimica.bilirrubinaD,
                bilirrubinaI: this.quimica.bilirrubinaI,
                proteinasT: this.quimica.proteinasT,
                albumina: this.quimica.albumina,
                globulinas: this.quimica.globulinas,
                relacionag: this.quimica.relacionag,
                colesterolT: this.quimica.colesterolT,
                calcio: this.quimica.calcio,
                fosforo: this.quimica.fosforo,
                sodio: this.quimica.sodio,
                cloro: this.quimica.cloro,
                potasio: this.quimica.potasio,
                fecha : this.quimica.fecha,
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
                 Inertia.put(route('quimica.update',{'quimica' :this.quimica}),this.form);                      
         },
            },
    })
   
</script>

