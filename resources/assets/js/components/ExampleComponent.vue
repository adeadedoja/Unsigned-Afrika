<template>
    <div class="container">
<router-link to="/Bar">Go to Foo</router-link>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                id: 2
            }
        },
    }
</script>
