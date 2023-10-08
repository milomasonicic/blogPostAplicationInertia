<script setup>

import { Link } from '@inertiajs/vue3';

</script>

<template>


        <div class="header">
            <Link href="/posts">Blogposts</Link>
            <Link href="/create">Create</Link>
            <Link href="/list">List</Link>

        </div>

    
</template>

<style>
.header{
    background-color: red;
}
</style>