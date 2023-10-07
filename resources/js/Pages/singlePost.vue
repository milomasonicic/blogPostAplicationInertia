<script>


export default{
    props:{
        post:{
            type:Object
        }
    }
}
</script>

<template>
    <h1>Posts</h1>


    
    <h1> {{ post.title }}</h1>
    <p> {{ post.content }}</p>
    
 

</template>