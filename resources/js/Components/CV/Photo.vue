<template>
    <div class="flex justify-center w-28 h-36 border border-gray-300 rounded overflow-hidden mx-auto">
      <img :src="photoUrl" alt="Your Name" class="w-full h-full object-cover rounded">
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        photoUrl: 'imgs/pfp.jpeg' // replace with your photo URL
      }
    }
  }
  </script>
