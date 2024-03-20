<!--<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const images = [
  { src: '../../img/dice_img/Dice (1).png' },
  { src: '../../img/dice_img/Dice (2).png' },
  { src: '../../img/dice_img/Dice (3).png' },
  { src: '../../img/dice_img/Dice (4).png' },
  { src: '../../img/dice_img/Dice (5).png' },
  { src: '../../img/dice_img/Dice (6).png' }
];

const getRandomImage = () => {
  const randomIndex = Math.floor(Math.random() * images.length);
  return images[randomIndex];
}
</script>

<template>
    <Head title="Animations_Dice" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Animation (Dice)</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Rocket Dice (Animations)</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="animation-container p-6 text-gray-900 dark:text-gray-100">
                        <img :src="getRandomImage().src" class="image"> 
                    </div>
                </div>
            </div>    
        </div>    
    </AuthenticatedLayout>
</template>

<style scoped>
.animation-container {
  position: relative;
  width: 200px; /* Adjust width as needed */
  height: 200px; /* Adjust height as needed */
  overflow: hidden;
}

.image {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  animation: fadeInOut 1s infinite linear;
}

@keyframes fadeInOut {
  0%, 16.666% {
    opacity: 0;
  }
  17% {
    opacity: 1;
    animation-timing-function: step-start;
  }
  
  83.333% {
    opacity: 1;
  }
  84.666% {
    opacity: 0;
    animation-timing-function: step-end;
  }

}
</style>-->


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const images = [
  { src: '../../img/dice_img/Dice (1).png' },
  { src: '../../img/dice_img/Dice (2).png' },
  { src: '../../img/dice_img/Dice (3).png' },
  { src: '../../img/dice_img/Dice (4).png' },
  { src: '../../img/dice_img/Dice (5).png' },
  { src: '../../img/dice_img/Dice (6).png' }
];

const shuffleImages = () => {
  var container = document.querySelector('.animation-container');
  for (var i = container.children.length; i >= 0; i--) {
    container.appendChild(container.children[Math.random() * i | 0]);
  }
}

</script>

<template>
    <Head title="Animations_Dice" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Animation (Dice)</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Rocket Dice (Animations)</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="animation-container p-6 text-gray-900 dark:text-gray-100">
                        <img v-for="(image, index) in images" :key="index" class="image" :src="image.src" :alt="'Image ' + (index + 1)"> 
                    </div>
                </div>
            </div>    
        </div>    
    </AuthenticatedLayout>
</template>

<script>
export default {
  mounted() {
    shuffleImages();
  }
};
</script>

<style scoped>
.animation-container {
  position: relative;
  width: 200px; /* Adjust width as needed */
  height: 200px; /* Adjust height as needed */
  overflow: hidden;
}

.image {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  animation: fadeInOut 0.7s infinite linear;
}

@keyframes fadeInOut {
  0% {
    opacity: 1;
  }
  16.666% {
    opacity: 0;
  }
  16.667% {
    opacity: 0;
  }
  33.333% {
    opacity: 1;
  }
  50% {
    opacity: 1;
  }
  66.666% {
    opacity: 0;
  }
  66.667% {
    opacity: 0;
  }
  83.333% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }

  83.333% {
    opacity: 1;
  }

  0% {
    opacity: 1;
  }
}
</style>

