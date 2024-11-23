import React from "react";
import MainLayout from "../components/layouts/mainLayout";
import Search from "../components/element/search";
import SliderItem from "../components/element/slider";
import MenuPromo from "../components/fragment/menuPromo";

const Product = () => {
  return (
    <div>
      <MainLayout />
      <Search />
      <SliderItem />
      <MenuPromo />
    </div>
  );
};

export default Product;
