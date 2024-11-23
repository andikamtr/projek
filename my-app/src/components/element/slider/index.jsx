import React from "react";
import Slider from "react-slick";
import sliders from "../../../data/sliders.json";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
const SliderItem = () => {
  const settings = {
    dots: false,
    infinite: true,
    speed: 500,
    lazyload: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          initialSlide: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  };

  return (
    <div>
      <Slider {...settings}>
        {sliders.map((slider, index) => (
          <div key={index} className="p-4">
            <img
              src={slider.gambar}
              alt={slider.gambar}
              className="h-[150px] md:h-[300px] mx-auto w-full rounded-md"
            />
          </div>
        ))}
      </Slider>
    </div>
  );
};

export default SliderItem;
