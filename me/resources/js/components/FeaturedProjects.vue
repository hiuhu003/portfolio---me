<template>
  <section id="projects" class="relative min-h-screen text-white py-16 sm:py-20 px-6 sm:px-12 md:px-20 overflow-hidden">
    <!-- Video Background -->
    <video
      ref="videoPlayer"
      autoplay
      loop
      muted
      playsinline
      class="absolute top-0 left-0 w-full h-full object-cover object-bottom z-0"
      style="clip-path: inset(50% 0 0 0);"
    >
      <source :src="videoUrl" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-purple-900/80 to-black/80 z-5"></div>

    <!-- Header -->
    <div class="relative z-10 text-center mb-12">
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
        Featured <span class="bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">Projects</span>
      </h2>
      <p class="text-gray-300 text-base sm:text-lg md:text-xl max-w-2xl mx-auto">
        A selection of projects that showcase my passion for creating beautiful digital experiences.
      </p>
    </div>

    <!-- Slide Toggle -->
    <div class="relative z-10 flex justify-center mb-12">
      <div class="bg-gray-800 rounded-full p-1 flex items-center cursor-pointer w-[240px] relative select-none">
        <div
          class="absolute top-1 left-1 w-1/2 h-[calc(100%-2px)] bg-pink-400 rounded-full transition-all duration-300"
          :class="selectedCategory === 'mobile' ? 'translate-x-full bg-blue-400' : ''"
        ></div>
        <div class="flex w-full z-10">
          <span
            class="w-1/2 text-center font-semibold py-2 cursor-pointer transition-colors duration-300"
            :class="selectedCategory === 'web' ? 'text-black' : 'text-gray-300'"
            @click="selectedCategory = 'web'"
          >Web</span>
          <span
            class="w-1/2 text-center font-semibold py-2 cursor-pointer transition-colors duration-300"
            :class="selectedCategory === 'mobile' ? 'text-black' : 'text-gray-300'"
            @click="selectedCategory = 'mobile'"
          >Mobile</span>
        </div>
      </div>
    </div>

    <!-- Projects Grid -->
    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
      <div
        v-for="project in filteredProjects"
        :key="project.name"
        class="relative group bg-gray-900/40 backdrop-blur-md rounded-2xl p-6 overflow-hidden cursor-pointer transition-transform duration-300 hover:scale-105"
      >
        <!-- Glowing animated background -->
        <div class="absolute inset-0 bg-gradient-to-br from-pink-400 via-purple-500 to-blue-400 opacity-20 blur-3xl scale-125 group-hover:scale-150 transition-transform duration-500"></div>

        <!-- Card content -->
        <div class="relative z-10">
          <h3 class="text-lg sm:text-xl font-bold mb-2 text-gradient">{{ project.name }}</h3>
          <p class="text-gray-300 text-sm sm:text-base mb-4">{{ project.description }}</p>
          <a
            :href="project.link"
            target="_blank"
            class="inline-block px-4 py-2 sm:px-6 sm:py-3 bg-pink-400 hover:bg-purple-500 text-black rounded-lg font-semibold transition duration-300"
          >
            View Project →
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import videoFile from '../../videos/background.mp4';

export default {
  name: "FeaturedProjects",
  data() {
    return {
      selectedCategory: 'web',
      videoUrl: videoFile,
      projects: [
        { name: "E-Commerce Platform", description: "A full-stack e-commerce web app built with Laravel & Vue.js.", link: "#", category: "web" },
        { name: "Library System", description: "Manage books, users, and loans efficiently.", link: "#", category: "web" },
        { name: "Portfolio Website", description: "Showcase my work with a modern UI/UX.", link: "#", category: "web" },
        { name: "Avocado Growth App", description: "Track avocado growth and nutrition on mobile.", link: "#", category: "mobile" },
        { name: "Booking App", description: "Book sessions with specialists easily via Flutter.", link: "#", category: "mobile" },
        { name: "Nutrition Planner", description: "Plan meals and nutrients for healthy growth.", link: "#", category: "mobile" },
      ]
    }
  },
  computed: {
    filteredProjects() {
      return this.projects.filter(project => project.category === this.selectedCategory);
    }
  },
  mounted() {
    const videos = document.querySelectorAll('video');
    videos.forEach(video => {
        video.currentTime = 0;
        video.play().catch(() => {});
    });
  }
}
</script>

<style scoped>
.text-gradient {
  background: linear-gradient(to right, #a78bfa, #f472b6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>
