<script setup>
import Flights from '../components/Flights.vue';
</script>

<template>
  <main>
    <h1>Air Ports View </h1>
    <p>This is the List of Flights  </p>
    <Suspense>
      <template #default>
        <Flights />
      </template>
      <template #fallback>
        <div>
          <h1>Loading...</h1>
        </div>
      </template>
    </Suspense>
  </main>
</template>