    <template>
    <app-layout title="Hematologia">
        <template #header>
               <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Urianalisis
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
                                             <div v-for="error in errors" >
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
                            
                            <jet-label class="text-white" value="Color" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.color"/>
                            <alerta-error :message="errors.color" />

                            <jet-label class="text-white" value="Olor" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.olor"/>
                            <alerta-error :message="errors.olor" />
                            
                               
                            <jet-label class="text-white" value="Aspecto" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.aspecto"/>
                            <alerta-error :message="errors.aspecto" />

                             <jet-label class="text-white" value="Densidad" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.densidad"/>
                            <alerta-error :message="errors.densidad" />

                               <jet-label class="text-white" value="PH" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.ph"/>
                            <alerta-error :message="errors.ph" />

                            
                         <jet-label class="text-white" value="Glucosa" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.glucosa"/>
                            <alerta-error :message="errors.glucosa" />

                             
                            <jet-label class="text-white" value="Proteínas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.proteinas"/>
                            <alerta-error :message="errors.proteinas" />

   
                            <jet-label class="text-white" value="Nitritos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.nitritos"/>
                            <alerta-error :message="errors.nitritos" />
                            
                              
                            <jet-label class="text-white" value="Cetonas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.cetonas"/>
                            <alerta-error :message="errors.cetonas" />

                                     <jet-label class="text-white" value="Bilirrubina" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.bilirrubina"/>
                            <alerta-error :message="errors.bilirrubina" />

                            
                            <jet-label class="text-white" value="Urobilinógeno" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.urobilinogeno"/>
                            <alerta-error :message="errors.urobilinogeno" />

                              <jet-label class="text-white" value="Sangre" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.sangre"/>
                            <alerta-error :message="errors.sangre" />
                            

                            <jet-label class="text-white" value="Hematies" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.hematies"/>
                            <alerta-error :message="errors.hematies" />
                            
                            
                            <jet-label class="text-white" value="Leucocitos" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.leucocitos"/>
                            <alerta-error :message="errors.leucocitos" />
                            
                         
                            
                            <jet-label class="text-white" value="Bacterias" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.bacterias"/>
                            <alerta-error :message="errors.bacterias" />
                            
                           
                            
                            <jet-label class="text-white" value="Otros" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.otros"/>
                            <alerta-error :message="errors.otros" />
                            

                         
                            <jet-label class="text-white" value="Planas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.planas"/>
                            <alerta-error :message="errors.planas" />

                            
                            <jet-label class="text-white" value="Uroteliales" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.transcicionales"/>
                            <alerta-error :message="errors.transcicionales" />
                           
                            
                            <jet-label class="text-white" value="Redondas Pequeñas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.redondasp"/>
                            <alerta-error :message="errors.rendondasp" />
                         
                            <jet-label class="text-white" value="Redondas Grandes" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.redondasg"/>
                            <alerta-error :message="errors.rendondasg" />
                            
                          
                            
                            <jet-label class="text-white" value="Caudadas" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.caudadas"/>
                            <alerta-error :message="errors.caudadas" />
                            
                            
                   
                            
                            <jet-label class="text-white" value="Cúmulos célulares" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.cumulos"/>
                            <alerta-error :message="errors.cumulos" />


                            <jet-label class="text-white" value="Cilindros" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.cilindros"/>
                            <alerta-error :message="errors.cilindros" />

                          
                            
                          
                            <jet-label class="text-white" value="Cristales" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.cristales"/>
                            <alerta-error :message="errors.cristales" />
                            
                            <jet-label class="text-white" value="Observacion" />
                            <jet-input class="mt-1 mb-4 block w-full" type="text" v-model="form.observacion"/>
                            <alerta-error :message="errors.observacion" />
                            
                            <jet-label class="text-white" value="Fecha" />
                            <jet-input class="my-2 block w-full" type="date" v-model="form.fecha" />
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
                pacientes_id: this.request.paciente,
                color:"",
                hematies:"",
                olor:"",
                leucocitos:"",
                aspecto:"",
                bacterias:"",
                densidad:"",
                otros:"",
                ph:"",
                planas:"",
                glucosa: "",
                transcicionales: "",
                proteinas: "",
                redondasp: "",
                nitritos: "",
                rendondasg: "",
                cetonas: "",
                caudadas: "",
                bilirrubina: "",
                cumulos: "",
                urobilinogeno: "",
                cilindros: "",
                sangre: "",
                cristales: "",
                observacion: "",
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
                 Inertia.post(route('urianalisis.store'),this.form)                      
         },
            },
    })
   
</script>

