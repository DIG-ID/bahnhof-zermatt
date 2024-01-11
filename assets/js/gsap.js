import imagesLoaded from 'imagesloaded';
import { gsap } from "gsap";
import Lenis from '@studio-freight/lenis';
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);


//Lenis configuration
const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true
});

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})

$(function() {

  const xl = 1280

  //Default values for almost all animations
  const animationConfig = {
    default: {
      scrubSpeed: 1,
      animDuration: 1.2,
      fadeDistance: "50px",
      defaultStart: "top 80%",
      defaultEnd: "bottom 90%",
      defaultActions: "play none reverse none"
    },
    intro: {
      scrubSpeed: 1,
      animDuration: 1.2,
      fadeDistance: "50px",
      defaultStart: "top 80%",
      defaultEnd: "bottom 80%",
      defaultActions: "play none reverse none"
    },
  };

  const defaultCfg = animationConfig.default;
  const introCfg = animationConfig.intro;

  const defaultitemcfg = {opacity: 0, y: defaultCfg.fadeDistance, autoAlpha: 0};
  const introitemcfg = {opacity: 0, y: introCfg.fadeDistance, autoAlpha: 0};


  /*****************************************
   *                                       *
   *               Home Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-home")[0] ) {
    

  }




});