import barba from "@barba/core"
import Slider from "./Slider"
import { gsap } from "gsap"

class Transition {
  constructor() {
    this.events()
  }

  events() {
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
