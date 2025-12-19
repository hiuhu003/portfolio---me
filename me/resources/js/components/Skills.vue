<template>
  <section
    id="skills"
    class="relative min-h-screen text-white py-16 px-6 md:px-20 overflow-hidden"
  >
    <!-- Video Background -->
    <video
      autoplay
      loop
      muted
      playsinline
      class="absolute inset-0 w-full h-full object-cover object-bottom z-0"
    >
      <source :src="videoUrl" type="video/mp4" />
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-purple-900/70 to-black/80 z-10"></div>

    <!-- Content -->
    <div class="relative z-20 max-w-7xl mx-auto">
      <!-- Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">
          Tech <span class="bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">Stack</span>
        </h2>
        <p class="text-gray-200 text-lg">
          Technologies and tools I use to bring products to life
        </p>
      </div>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">

        <!-- WEB CARD -->
        <div
          class="flip-card h-96 cursor-pointer"
          :class="{ flipped: isWebFlipped }"
          @click="toggleWebFlip"
        >
          <div class="flip-card-inner">

            <!-- Front -->
            <div class="flip-card-front glass-card">
              <div class="flex flex-wrap justify-center gap-4 mb-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" class="tech-icon" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg" class="tech-icon" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" class="tech-icon" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" class="tech-icon" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" class="tech-icon" />
              </div>

              <h3 class="title-gradient">Web Development</h3>
              <p class="hint-text">Click to see skills</p>
            </div>

            <!-- Back -->
            <div class="flip-card-back web-back">
              <h3 class="back-title">Web Skills</h3>

              <div v-for="skill in webSkills" :key="skill.name" class="w-full mb-4">
                <div class="flex justify-between text-sm font-semibold mb-1">
                  <span>{{ skill.name }}</span>
                  <span>{{ skill.percentage }}%</span>
                </div>
                <div class="progress-bg">
                  <div
                    class="progress-fill pink"
                    :style="{ width: isWebFlipped ? skill.percentage + '%' : '0%' }"
                  ></div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- MOBILE CARD -->
        <div
          class="flip-card h-96 cursor-pointer"
          :class="{ flipped: isMobileFlipped }"
          @click="toggleMobileFlip"
        >
          <div class="flip-card-inner">

            <!-- Front -->
            <div class="flip-card-front glass-card border-blue">
              <div class="flex gap-6 mb-6">
                <img
                  src="https://upload.wikimedia.org/wikipedia/en/3/30/Java_programming_language_logo.svg"
                  class="tech-icon"
                />
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png"
                  class="tech-icon-wide"
                />
              </div>

              <h3 class="title-gradient blue">Mobile Development</h3>
              <p class="hint-text">Click to see skills</p>
            </div>

            <!-- Back -->
            <div class="flip-card-back mobile-back">
              <h3 class="back-title blue">Mobile Skills</h3>

              <div v-for="skill in mobileSkills" :key="skill.name" class="w-full mb-4">
                <div class="flex justify-between text-sm font-semibold mb-1">
                  <span>{{ skill.name }}</span>
                  <span>{{ skill.percentage }}%</span>
                </div>
                <div class="progress-bg">
                  <div
                    class="progress-fill blue"
                    :style="{ width: isMobileFlipped ? skill.percentage + '%' : '0%' }"
                  ></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
import videoFile from '../../videos/background.mp4';

export default {
  name: "SkillsSection",
  data() {
    return {
      isWebFlipped: false,
      isMobileFlipped: false,
      webSkills: [
        { name: "Laravel + Vue.js", percentage: 95 },
        { name: "React + Node.js", percentage: 90 },
        { name: "Tailwind CSS", percentage: 92 },
        { name: "UI/UX Design", percentage: 85 }
      ],
      mobileSkills: [
        { name: "Java", percentage: 85 },
        { name: "Flutter", percentage: 88 }
      ],
      videoUrl: videoFile,
      hasFlippedOnScroll: false
    };
  },
  mounted() {
    // Auto-play video
    this.$refs.videoPlayer?.play().catch(() => {});

    // Auto-flip on scroll
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !this.hasFlippedOnScroll) {
          this.hasFlippedOnScroll = true;

          // Flip web card 1 second after scrolling into view
          setTimeout(() => { this.isWebFlipped = true; }, 1000);

          // Flip mobile card 4 seconds after web card
          setTimeout(() => { this.isMobileFlipped = true; }, 5000);
        }
      });
    }, { threshold: 0.3 });

    observer.observe(this.$el);
  },
  methods: {
    toggleWebFlip() {
      this.isWebFlipped = !this.isWebFlipped;
    },
    toggleMobileFlip() {
      this.isMobileFlipped = !this.isMobileFlipped;
    }
  }
};
</script>

<style scoped>
/* Flip */
.flip-card { perspective: 1200px; }
.flip-card-inner {
  width: 100%;
  height: 100%;
  transition: transform 0.8s ease;
  transform-style: preserve-3d;
}
.flip-card.flipped .flip-card-inner { transform: rotateY(180deg); }
.flip-card-front,
.flip-card-back {
  position: absolute;
  inset: 0;
  backface-visibility: hidden;
  border-radius: 1rem;
  padding: 2rem;
}
.flip-card-back { transform: rotateY(180deg); }

/* Cards */
.glass-card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: rgba(17, 17, 17, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(236, 72, 153, 0.3);
}
.border-blue { border-color: rgba(59, 130, 246, 0.4); }

.web-back {
  background: linear-gradient(135deg, rgba(126,34,206,0.7), rgba(236,72,153,0.7));
}
.mobile-back {
  background: linear-gradient(135deg, rgba(30,58,138,0.7), rgba(59,130,246,0.7));
}

/* Text */
.title-gradient {
  font-size: 1.5rem;
  font-weight: bold;
  background: linear-gradient(to right, #f472b6, #c084fc);
  -webkit-background-clip: text;
  color: transparent;
}
.title-gradient.blue {
  background: linear-gradient(to right, #60a5fa, #22d3ee);
  -webkit-background-clip: text;
}
.back-title {
  font-size: 1.4rem;
  font-weight: bold;
  margin-bottom: 1.5rem;
  color: #f9a8d4;
}
.back-title.blue { color: #93c5fd; }
.hint-text { color: #e5e7eb; }

/* Icons */
.tech-icon {
  width: 3rem;
  height: 3rem;
  animation: bounce 3s infinite ease-in-out;
}
.tech-icon-wide {
  width: 3.5rem;
  animation: bounce 3s infinite ease-in-out;
}

/* Progress */
.progress-bg {
  width: 100%;
  height: 0.5rem;
  background: rgba(0,0,0,0.4);
  border-radius: 999px;
  overflow: hidden;
}
.progress-fill {
  height: 100%;
  transition: width 1s ease;
}
.progress-fill.pink {
  background: linear-gradient(to right, #f472b6, #c084fc);
}
.progress-fill.blue {
  background: linear-gradient(to right, #60a5fa, #22d3ee);
}

/* Animations */
@keyframes bounce {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
</style>
