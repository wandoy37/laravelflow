<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
      question: {
            type: Object,
            required: true
      }
})
</script>

<template>
      <Link :href="`/`">
      Kembali
      </Link>
      <p>ID : {{ question.id }}</p>
      <p>Title : {{ question.title }}</p>
</template>