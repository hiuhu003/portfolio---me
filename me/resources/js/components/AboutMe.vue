<template>
  <section id="about" class="relative min-h-screen text-white py-16 sm:py-20 px-6 sm:px-12 md:px-20 overflow-hidden">
    <!-- Background Video -->
    <video
      ref="videoPlayer"
      autoplay
      loop
      muted
      playsinline
      class="absolute bottom-0 left-0 w-full h-full object-cover object-center z-0 opacity-20"
      style="clip-path: inset(0% 0 0 0);"
    >
      <source :src="videoUrl" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-pink-300/80 via-purple-700/70 to-blue-900/80 z-0"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto">
      <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
        <!-- Left Side - Photo -->
        <div class="flex justify-center mb-10 md:mb-0">
          <div class="relative">
            <!-- Decorative border -->
            <div class="absolute inset-0 rounded-3xl blur-xl bg-gradient-to-br from-pink-500/30 to-purple-500/30"></div>

            <!-- Photo container -->
            <div class="relative bg-gray-800/50 backdrop-blur-sm rounded-3xl p-6 sm:p-8 border border-gray-700/50">
              <!-- Gradient circle with "Hi!" -->
              <div class="w-48 sm:w-56 md:w-64 h-48 sm:h-56 md:h-64 mx-auto rounded-full bg-gradient-to-br from-pink-400 via-purple-400 to-blue-500 flex items-center justify-center mb-6">
                <span class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900">Hi!</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side - Content -->
        <div class="space-y-4 sm:space-y-6 md:space-y-6 text-center md:text-left">
          <!-- Heading -->
          <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-snug">
            Ursula  <span class="bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">Hiuhu</span>
          </h2>

          <!-- Paragraphs -->
          <p class="text-gray-100 text-base sm:text-lg md:text-lg leading-relaxed">
            Hello! I'm a passionate web and mobile developer with a love for creating beautiful, user-centric digital experiences. With an eye for design and a heart for clean code, I bring ideas to life.
          </p>

          <p class="text-gray-100 text-base sm:text-lg md:text-lg leading-relaxed">
            My journey in tech is driven by curiosity and creativity. I believe that great software should not only function flawlessly but also delight users with thoughtful interactions and stunning visuals.
          </p>

          <p class="text-gray-100 text-base sm:text-lg md:text-lg leading-relaxed">
            When I'm not coding, you'll find me exploring new design trends, experimenting with creative projects, or enjoying a good cup of tea.
          </p>

          <!-- Social Icons -->
          <div class="flex justify-center md:justify-start gap-4 pt-4 sm:pt-6">
            <a href="https://github.com/hiuhu003" class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-5 sm:h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
              </svg>
            </a>

            <a href="https://www.linkedin.com/in/ursula-hiuhu-97170924b/" class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-5 sm:h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>

            <a :href="emailLink" class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-5 sm:h-5 md:w-6 md:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import videoFile from '../../videos/background.mp4';

export default {
  name: "AboutSection",
  data() {
    return {
      videoUrl: videoFile,
      emailLink: 'mailto:ursulahiuhu033@gmail.com?subject=Contact%20from%20Portfolio%20Website&body=Hello%20Ursula,',
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
.social-icon {
  width: 48px;
  height: 48px;
  border-radius: 9999px;
  background: rgba(31, 41, 55, 0.5);
  border: 1px solid rgba(55, 65, 81, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
.social-icon:hover {
  border-color: #ec4899;
  background: rgba(55, 65, 81, 0.7);
  transform: scale(1.1);
}
</style>
