
<script setup>
import { RouterLink } from 'vue-router';
</script>


<template>
    <div class="header">
        <p>This is Header </p>
        <ul>
            <RouterLink to="/about">About </RouterLink>
            <RouterLink to="/">Home </RouterLink>
            <RouterLink to="/counter">Counter  </RouterLink>
        </ul>
    </div>
</template>

<style  scoped>
.header{
    padding: 1em;
    width:  100%;
    background: black;
    color: gold;
}
</style>