<script setup>
import { ref, onMounted, reactive } from 'vue';

const state = reactive({
    flights : []
})

const fetchPlanes = async () => {
    const response = await fetch('http://localhost:8000/flights',);
    const data = await response.json();
    setTimeout(()=>{
        state.flights = data;
    },300)
    console.log(state.flights);
}

await fetchPlanes();


</script>

<template>
  <div>
    <H1>Flights  Goes Here </H1>
    <div class="planes">
        <ul class="list-planes">
            <li v-for="item in state.flights" :key="item.id">
                <a href="">
                    {{item.id}}
                    {{ item.origin_id }}
                </a>
            </li>
        </ul>
    </div>
  </div>
</template>

<style scoped>
    h1,a{
        color : gold ;
    }
    a:hover{
        color: yellowgreen
    }
    .planes{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1em;
    }
    .list-planes{
        list-style: none;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 1em;
    }
    .list-planes li{
        background: rgb(28, 26, 26);
        color: gold;
        padding: 1em;
        border-radius: 1em;
    }
</style>