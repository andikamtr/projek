import React from "react";
import { FaSearch } from "react-icons/fa";
const Search = () => {
  return (
    <div>
      <form className="flex items-center border border-black rounded-md m-4 p-2">
        <label htmlFor="search">
          <FaSearch />
        </label>
        <input
          type="text"
          id="search"
          name="search"
          className="w-full rounded-md ml-2"
          placeholder="Searching..."
        />
      </form>
    </div>
  );
};

export default Search;
