<script setup>
import Navbar from '../Components/Navbar.vue';
import Toast from '../Components/Toast.vue';
import { onMounted, reactive } from 'vue';
import * as bootstrap from 'bootstrap';
import { router, usePage } from '@inertiajs/vue3';

const state = reactive({
    toastRef: null,
    toastMessage: ""
})

const page = usePage()
router.on('finish', () => {
    state.toastMessage = page.props.toast.success
    showToast()
})

onMounted(() => {
    state.toastRef = new bootstrap.Toast('#app-toast', {
        delay: 3000
    })
})

const showToast = () => state.toastRef.show()
</script>
<template>
    <Navbar />

    <main class="py-4">
        <slot />
    </main>
    <Toast id="app-toast" message="state.toastMessage" />
</template>
