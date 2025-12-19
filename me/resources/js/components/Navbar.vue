<template>
  <nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md px-6 py-6" style="background-color: rgba(28, 24, 32, 0.3);">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <!-- Logo -->
      <button 
      class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent"
        @click="scrollToSection('hero')">
        Hiuhu
    </button>

      <!-- Navigation Links -->
      <div class="flex items-center gap-8">
        <button
          class="text-pink-300 hover:text-pink-500 transition-colors duration-300 text-lg"
          @click="scrollToSection('about')"
        >
          About
        </button>
        <button
          class="text-pink-300 hover:text-pink-500 transition-colors duration-300 text-lg"
          @click="scrollToSection('skills')"
        >
          Skills
        </button>
        <button
          class="text-pink-300 hover:text-pink-500 transition-colors duration-300 text-lg"
          @click="scrollToSection('projects')"
        >
          Projects
        </button>

        <!-- Hire Me Button -->
        <button
         class="bg-gradient-to-r from-blue-900 to-pink-500 hover:from-blue-800 hover:to-pink-400 text-white font-semibold px-6 py-3 rounded-full transition-all duration-300"
         @click="scrollToSection('contact')">
          Contact Me
          
        </button>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Navbar",
  methods: {
    scrollToSection(id) {
      const el = document.getElementById(id);
      if (el) {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  }
};
</script>
