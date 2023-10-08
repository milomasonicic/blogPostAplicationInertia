<script>

import { Link } from '@inertiajs/vue3'
import navigation from '@/Layouts/navigation.vue'

export default{
    props:{
        posts:{
            type:Object
        }
    },
   
    components:{
        Link,
        navigation
    }
}
</script>


<template>
    <navigation></navigation>
    <h1>List of posts</h1>

    <div v-for="post in posts" :key="post.id">
        <li>

            <Link :href="route('singlePost', { id: post.id })"> {{ post.title }}</Link>
        </li>
        
      

    </div>
</template>