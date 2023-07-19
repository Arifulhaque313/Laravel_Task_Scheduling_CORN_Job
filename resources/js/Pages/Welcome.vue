<script setup>
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    data:{
        type:Object
    }
})

</script>

<template>
    <Head title="Welcome" />
    <div class="max-w-7xl mx-auto my-10 p-10 border border-violet-600 hover:border-yellow-600 rounded-md">
        <h1 class="text-center text-3xl font-bold">Laravel Task Scheduling</h1>
        
        <div class="mt-20 gap-4">
            <p>This Task Scheduling Mainly Sending Email After 1 min and Create a log after one min.
            to check the <span class="underline text-blue-600">app/console/karnel.php</span>. and for the output check the <span class="underline text-blue-600">storage/logs/laravel.log</span></p>
        </div>
    </div>

</template>
