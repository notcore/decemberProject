<template>
    <div>
      <button ref="delayButton" @click="handleClick" :disabled="isDisabled">
        Klik Aku
      </button>
      <p>{{ message }}</p>
      <p>Waktu delay saat ini: {{ delay / 1000 }} detik</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isDisabled: false,
        message: "Silakan klik tombol",
        delay: 0,
      };
    },
    methods: {
      handleClick() {
        this.delay += 25000; // 25000 ms = 25 detik
        this.message = `Tombol diklik! Tunggu ${this.delay / 1000} detik...`;
        this.isDisabled = true;
        setTimeout(() => {
          this.isDisabled = false;
          this.message = "Kamu bisa klik lagi!";
          this.delay = 0; 
        }, this.delay);
      },
    },
  };
  </script>
  