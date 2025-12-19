<template>
  <section id="contact" class="relative bg-gradient-to-br from-purple-900 to-pink-900 text-white py-16 sm:py-24 px-6 sm:px-12 md:px-20 overflow-hidden">
    <!-- Background Video -->
    <video
      ref="videoPlayer"
      autoplay
      loop
      muted
      playsinline
      class="absolute bottom-0 left-0 w-full h-full object-cover object-bottom opacity-10 z-0"
      style="clip-path: inset(50% 0 0 0);"
    >
      <source :src="videoUrl" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Overlay for contrast -->
    <div class="absolute inset-0 bg-black/50 z-0"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
        Let's <span class="text-pink-400">Work Together</span>
      </h2>
      <p class="text-gray-200 text-base sm:text-lg md:text-xl mb-10 sm:mb-12">
        Have a project in mind? I'd love to hear about it. Let's create something beautiful together.
      </p>

      <!-- Form -->
      <form @submit.prevent="sendMessage" class="space-y-6">
        <!-- Name and Email side by side on medium screens -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input
            v-model="form.name"
            type="text"
            placeholder="Your Name"
            class="w-full p-4 rounded-lg bg-white/10 border border-gray-400 placeholder-gray-300 text-white focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
            required
          />
          <input
            v-model="form.email"
            type="email"
            placeholder="Your Email"
            class="w-full p-4 rounded-lg bg-white/10 border border-gray-400 placeholder-gray-300 text-white focus:outline-none focus:ring-2 focus:ring-purple-400 transition"
            required
          />
        </div>

        <!-- Message Box -->
        <textarea
          v-model="form.message"
          placeholder="Your Message"
          rows="5"
          class="w-full p-4 rounded-lg bg-white/10 border border-gray-400 placeholder-gray-300 text-white focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
          required
        ></textarea>

        <!-- Send Button -->
        <button
          type="submit"
          class="w-full md:w-auto bg-pink-400 hover:bg-purple-500 text-black font-semibold px-8 py-3 rounded-lg transition duration-300"
        >
          Send Message
        </button>
      </form>
    </div>
  </section>
</template>

<script>
import videoFile from '../../videos/background.mp4';

export default {
  name: "WorkTogetherSection",
  data() {
    return {
      videoUrl: videoFile,
      form: {
        name: '',
        email: '',
        message: ''
      }
    };
  },
  mounted() {
    const videos = document.querySelectorAll('video');
    videos.forEach(video => {
      video.currentTime = 0;
      video.play().catch(() => {});
    });
  },
  methods: {
    sendMessage() {
      console.log("Message Sent:", this.form);
      alert("Thank you! Your message has been sent.");
      this.form.name = '';
      this.form.email = '';
      this.form.message = '';
    }
  }
};
</script>

<style scoped>
input:focus,
textarea:focus {
  transition: all 0.3s ease;
}
</style>
