import { gsap, TimelineMax, Power1, Power4 } from "gsap"
gsap.registerPlugin()

class AppearElements {
  constructor() {
    this.preloader = document.querySelector(".preloader")
    this.tlShowElements = new TimelineMax({})

    this.events()
  }

  events() {
    document.addEventListener("DOMContentLoaded", event => {
      window.onload = () => {
        window.requestAnimationFrame(() => {
          this.showElements()
        })
      }
    })
  }

  showElements() {
    this.tlShowElements.from(".preloader__cover", { duration: 1.5, x: "200%", ease: Power1.easeOut })
    this.tlShowElements.to(".preloader__outer-circle", { duration: 0.5, opacity: 0, ease: Power4.easeOut }, "=-1.5")
    this.tlShowElements.to(".preloader", { duration: 1.5, x: "-100%", ease: Power4.easeOut }, "=-1")
    this.tlShowElements.from(".section__desc, .section__heading", { duration: 0.75, y: "50%", opacity: 0, ease: Power1.easeOut }, "=-1.5")
    this.tlShowElements.from(".slider__slide", { duration: 1.5, x: "10%", opacity: 0, stagger: 0.15, ease: Power4.easeOut }, 0.1)
    this.tlShowElements.from(".container .box, .single .container", { duration: 1.5, x: "10%", opacity: 0, stagger: 0.15, ease: Power4.easeOut }, 0.1)
    setTimeout(() => {
      this.preloader.remove()
    }, 2500)
  }
}

export default AppearElements
