<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import navigation from '@/Layouts/navigation.vue'

const form = reactive({
  title: null,
  content: null,
 
})

function submit() {
  router.post('/postStore', form)
}
</script>

<template>

  <navigation></navigation>

  <form @submit.prevent="submit">
    <label for=" title">Title:</label>
    <input id=" title" v-model="form.title" />
    <label for="content">content:</label>
    <input id="content" v-model="form.content" />
   
    <button type="submit">Submit</button>
  </form>
</template>

