const Button = (prop) => {
  const { children, type } = prop;
  return (
    <div className="my-5 px-2">
      <button
        type={type}
        className="bg-blue-700 text-white border px-2 py-[2px] w-full rounded-md"
      >
        {children}
      </button>
    </div>
  );
};

export default Button;
