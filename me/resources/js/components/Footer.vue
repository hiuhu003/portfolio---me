<template>
  <footer class="bg-purple-400 text-black py-8 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
      <!-- Copyright -->
      <p class="text-sm text-center md:text-left">
        © 2025 Ursula Hiuhu Portfolio. Crafted with <span class="text-pink-400">💖</span>
      </p>

      <!-- Social Links -->
      <div class="flex gap-4">
        <a href="https://github.com/hiuhu003" target="_blank" class="hover:text-white transition-colors">
          GitHub
        </a>
        <a href="https://www.linkedin.com/in/ursula-hiuhu-97170924b/" target="_blank" class="hover:text-white transition-colors">
          LinkedIn
        </a>
        
      </div>
    </div>
  </footer>
</template>

<style scoped>
/* Optional hover effect: smooth underline */
a {
  position: relative;
}
a::after {
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  bottom: -2px;
  left: 0;
  background-color: #ec4899; /* pink underline */
  transition: width 0.3s;
}
a:hover::after {
  width: 100%;
}
</style>
