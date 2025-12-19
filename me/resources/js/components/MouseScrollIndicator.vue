<template>
  <div class="mouse-scroll-indicator">
    <div class="mouse">
      <div class="mouse-wheel"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MouseScrollIndicator"
};
</script>

<style scoped>
.mouse-scroll-indicator {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 2rem;
}

.mouse {
  width: 26px;
  height: 40px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  position: relative;
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