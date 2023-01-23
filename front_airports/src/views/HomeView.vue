<script setup>
import planes from '../components/planes.vue';
</script>

<template>
  <main>
    <h1>Air Ports View </h1>
    <p>This is the List of Planes </p>
    <Suspense>
      <template #default>
        <planes />
      </template>
      <template #fallback>
        <div>
          <h1>Loading...</h1>
        </div>
      </template>
    </Suspense>
  </main>
</template>