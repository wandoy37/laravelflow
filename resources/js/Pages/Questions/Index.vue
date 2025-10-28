<template>
      <h1>Welcome!</h1>
      <div v-for="question in questions" :key="question.id">
            {{ question.title }}
      </div>
</template>

<script setup>
defineProps({
      questions: {
            type: Array,
            required: true
      }
})
</script>