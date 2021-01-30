import $ from "jquery"
import slick from "slick-carousel"

class Slider {
  constructor() {
    this.slider = $(".slider")
    this.initSlider()
  }

  initSlider() {
    this.slider.slick({
      // infinite: false,
      autoplay: false,
      slidesToShow: 3,
      arrows: true,
      prevArrow: "<button class='slick-arrow-prev' type='button'></button>",
      nextArrow: "<button class='slick-arrow-next' type='button'></button>",
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    })
  }
}

export default Slider
