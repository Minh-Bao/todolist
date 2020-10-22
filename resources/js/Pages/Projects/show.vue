<template>
    <app-layout>
        <template #header>
            
            {{ project.title }}
        </template>
        <div class="py-3">
            <div class="text-2xl">{{ project.themes[0].title }}</div>
            <iframe class="w-full h-screen" :src="project.themes[0].task-url" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="text-sm text-gray-500">{{ project.themes[0].description }}</div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout';

export default {
    components: {
        AppLayout
    },
    
    props: ['project'],

    data(){
        return {
            projectShow: this.project
        }
    },


    mounted() {
        //console.log(this.projectList);
    }
}
</script>