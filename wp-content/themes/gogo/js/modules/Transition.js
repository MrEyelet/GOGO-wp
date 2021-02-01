import barba from "@barba/core"
import Slider from "./Slider"
import { gsap } from "gsap"
import $ from "jquery"

class Transition {
  constructor() {
    this.events()
  }

  events() {
    barba.hooks.afterLeave(data => {
      let nextHtml = data.next.html
      let response = nextHtml.replace(/(<\/?)body( .+?)?>/gi, "$1notbody$2>", nextHtml)
      let bodyClasses = $(response).filter("notbody").attr("class")
      $("body").attr("class", bodyClasses)
      // console.log($("body").attr("class", bodyClasses))
    })
    barba.hooks.after(() => {
      window.scrollTo(0, 0)
      var slider = new Slider()
    })
    barba.init({
      transitions: [
        {
          name: "opacity-transition",
          leave(data) {
            return gsap.to(data.current.container, {
              opacity: 0
            })
          },
          enter(data) {
            return gsap.from(data.next.container, {
              opacity: 0
            })
          }
        }
      ]
    })
  }
}

export default Transition
