<template>
    <app-layout>
        <template #header>
            Liste des projets:
        </template>
        <div class="py-3" v-for="project in this.projectList" v-bind:key="project.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-sm text-gray-500">Initialisé par {{ project.user.name }}</div>
                <div class="flex justify-between items-center">
                    <div class="text-3xl">{{ project.title }} </div>
                    <div class="text-sm text-gray-400">{{ project.theme_count }} taches en cours...</div>
                </div>
                <div class="text-sm text-gray-500">{{ project.description }}</div>
                <a :href="'project/' + project.id" class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">Voir le projet</a>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout';

export default {
    components: {
        AppLayout
    },

    props: ['projects'],
   
   data(){
        return {
            projectList: this.projects
        }
    },

    mounted() {
        console.log(this.projectList);
    }
}
</script>