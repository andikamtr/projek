import React, { useState } from "react";
import { FaBell, FaShoppingCart, FaShoppingBag } from "react-icons/fa";

const Navbar = () => {
  const [open, setOpen] = useState(false);
  return (
    <>
      <div className="flex justify-between items-center p-4 bg-blue-700 text-white">
        <span className="flex items-center font-bold">
          <FaShoppingBag />
          SourceCodeShop
        </span>
        <div className="flex gap-4">
          <FaShoppingCart />
          <FaBell />
        </div>
      </div>
    </>
  );
};

export default Navbar;
