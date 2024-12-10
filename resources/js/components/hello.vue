<template>
    <h1 class="text-2xl text-slate-600">hello {{ msg }},</h1>
    <p class="text-lg text-slate-600">buat akunmu dan ikuti perjalanan kami.</p>
    <div class="relative grid grid-cols-1">
        <label class="absolute text-xl bg-white px-2 mx-4 text-slate-300 -mb-2" for="name">name</label>
        <input type="text" name="name" id="name" class="border rounded-lg h-12 focus:outline-none px-5 mt-5" v-model="msg" />
    </div>
</template>

<script>
export default {
    data() {
        return {
                msg: 'user'
            };
        }
    };
</script>
