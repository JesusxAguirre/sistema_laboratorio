<template>
    <app-layout title="Pacientes Show">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mostrar Pacientes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                         <div class="bg-gray-100 shadow mx-auto lg:max-w-4xl">
                            
                            <form @submit.prevent="submit" action="/hematologia" ref="form">
                                <div class="p-5">
                                <label for="param">Id de hematologia</label>
                                <input type='text' :value="hematologium.id" name="id" class="px-2 ml-2 rounded-lg border">
                                <button type="submit" class="px-2 py-1 ml-2 rounded-lg border bg-gray-500 text-white hover:bg-black">Generate PDF</button>
                                </div>
                            </form>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

   
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import JetLabel from '@/Jetstream/Label.vue';

    export default defineComponent({
        props:['hematologium'],
        components: {
            AppLayout,
            JetLabel         
        },
        methods:{
      submit: function(){
         this.$refs.form.submit()
      },
        },
        
    })
   
</script>

