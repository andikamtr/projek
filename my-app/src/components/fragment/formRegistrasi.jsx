import Button from "../element/button";
import Inputan from "../element/inputan/index";
import { Link } from "react-router-dom";
const FormRegistrasi = () => {
  const handleRegistrasi = (e) => {
    e.preventDefault();
    localStorage.setItem("username", e.target.Username.value);
    localStorage.setItem("email", e.target.Email.value);
    localStorage.setItem("password", e.target.Password.value);

    window.location.href = "/";
  };
  return (
    <>
      <form onSubmit={handleRegistrasi}>
        <Inputan name="Username" type="text" />
        <Inputan name="Email" type="text" />
        <Inputan name="Password" type="password" />
        <Button type="submit">Registrasi</Button>
        <p className="px-2">
          Please already{" "}
          <Link to="/" className="text-blue-700">
            Login!
          </Link>
        </p>
      </form>
    </>
  );
};

export default FormRegistrasi;
