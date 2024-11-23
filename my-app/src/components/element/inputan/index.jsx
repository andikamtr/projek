const Inputan = (prop) => {
  const { name, type } = prop;
  return (
    <>
      <div className="grid grid-flow-row p-2">
        <label htmlFor={name} className="pb-2">
          {name}
        </label>
        <input
          type={type}
          name={name}
          id={name}
          className="border-2 border-black rounded-full px-3"
          placeholder={name}
        />
      </div>
    </>
  );
};

export default Inputan;
