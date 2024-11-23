import React from "react";
import { FaCoins } from "react-icons/fa";
import Slider from "react-slick";
import promos from "../../data/promos.json";
const MenuPromo = () => {
  const settings = {
    dots: false,
    infinite: true,
    speed: 500,
    lazyload: true,
    slidesToShow: 7,
    slidesToScroll: 4,
  };
  return (
    <div className=" ">
      <Slider {...settings}>
        {promos.map((promo, index) => (
          <div key={index} className="text-center">
            <FaCoins className="inline-block" />
            <p className="text-[10px]">{promo.name}</p>
          </div>
        ))}
      </Slider>
    </div>
  );
};

export default MenuPromo;
