<template>
  <div>
    <Navbar />
    <HeroSection />
    <AboutMe/>
    <Skills/>
    <FeaturedProjects/>
    <ContactMe/>
    <Footer/>
    <!-- other components -->
  </div>
</template>

<script>
import HeroSection from './components/HeroSection.vue'
import Navbar from './components/Navbar.vue';
import AboutMe from './components/AboutMe.vue';
import Skills from './components/Skills.vue';
import FeaturedProjects from './components/FeaturedProjects.vue';
import ContactMe from './components/ContactMe.vue';
import Footer from './components/Footer.vue';
export default {
  components: {
    HeroSection,
    Navbar,
    AboutMe,
    Skills,
    FeaturedProjects,
    ContactMe,
    Footer
  }
}
</script>
