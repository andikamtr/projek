import FormLogin from "../fragment/formLogin";
const AuthLayout = (prop) => {
  const { title, children } = prop;
  return (
    <div className="flex justify-center items-center min-h-screen">
      <div className="w-full max-w-xs">
        <h1 className="font-bold text-2xl text-blue-700 text-center">
          {title}
        </h1>
        <p className="text-center">Welcome, Please enter your details</p>
        {children}
      </div>
    </div>
  );
};

export default AuthLayout;
