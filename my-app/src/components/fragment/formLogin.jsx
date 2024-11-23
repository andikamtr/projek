import Button from "../element/button";
import Inputan from "../element/inputan/index";
import { Link } from "react-router-dom";
const FormLogin = () => {
  const handleLogin = (e) => {
    e.preventDefault();
    localStorage.setItem("username", e.target.Username.value);
    localStorage.setItem("password", e.target.Password.value);
  };
  return (
    <>
      <form onSubmit={handleLogin}>
        <Inputan name="Username" type="text" />
        <Inputan name="Password" type="password" />
        <Button type="submit">Login</Button>
        <p className="px-2">
          Please create new a account{" "}
          <Link to="/registrasi" className="text-blue-700">
            Registrasi!
          </Link>
        </p>
      </form>
    </>
  );
};

export default FormLogin;
