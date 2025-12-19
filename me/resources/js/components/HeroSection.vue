<template>
  <section id="hero" class="relative text-white min-h-screen flex flex-col justify-center items-center px-6 sm:px-12 md:px-20 overflow-hidden pt-24">
    <!-- Video Background -->
    <video
      ref="videoPlayer"
      autoplay
      loop
      muted
      playsinline
      class="absolute top-0 left-0 w-full h-full object-cover object-top z-0"
    >
      <source :src="videoUrl" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Overlay for readability -->
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-gray-900/80 via-purple-900/70 to-black/80 z-0"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center text-center max-w-4xl">
      <!-- Badge -->
      <div class="mb-6 px-5 py-2 border border-purple-400 rounded-full text-purple-200 text-sm flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
        </svg>
        Web & Mobile Developer
      </div>

      <!-- Heading -->
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-snug">
        Crafting <span class="text-gradient">Digital</span> <span class="text-pink-400 italic">Experiences</span>
      </h1>

      <!-- Subheading -->
      <p class="text-gray-300 text-base sm:text-lg md:text-xl mb-10 px-2 sm:px-0">
        I transform ideas into beautiful, functional applications that users love.
        Specializing in web and mobile development with a creative, feminine touch.
      </p>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row gap-4 mb-12 w-full sm:w-auto justify-center">
        <button class="bg-pink-400 hover:bg-purple-500 text-black font-semibold px-6 py-3 rounded-lg transition duration-300 w-full sm:w-auto">
          View My Work →
        </button>
        <button class="bg-black hover:bg-gray-800 border border-gray-600 text-white font-semibold px-6 py-3 rounded-lg transition duration-300 w-full sm:w-auto">
          Get In Touch
        </button>
      </div>

      <!-- Mouse Scroll Indicator -->
      <div class="mouse-scroll-indicator mt-8">
        <div class="mouse">
          <div class="mouse-wheel"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import videoFile from '../../videos/background.mp4';

export default {
  name: "HeroSection",
  data() {
    return {
      videoUrl: videoFile
    };
  },
  mounted() {
    const videos = document.querySelectorAll('video');
    videos.forEach(video => {
      video.currentTime = 0;
      video.play().catch(() => {});
    });
  }
};
</script>

<style scoped>
.text-gradient {
  background: linear-gradient(to right, #a78bfa, #f472b6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.mouse-scroll-indicator {
  display: flex;
  justify-content: center;
  align-items: center;
}

.mouse {
  width: 28px;
  height: 44px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  display: flex;
  justify-content: center;
  padding-top: 8px;
  transition: border-color 0.3s ease;
}

.mouse:hover {
  border-color: rgba(244, 114, 182, 0.8);
}

.mouse-wheel {
  width: 4px;
  height: 8px;
  background: linear-gradient(to bottom, #ec4899, #a855f7);
  border-radius: 4px;
  animation: scroll 1.5s infinite;
  box-shadow: 0 0 8px rgba(236, 72, 153, 0.6);
}

@keyframes scroll {
  0% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(16px);
  }
}
</style>
