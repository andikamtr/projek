import FormLogin from "../components/fragment/formLogin";
import AuthLayout from "../components/layouts/authLayout";

const Login = () => {
  return (
    <>
      <AuthLayout title="Login">
        <FormLogin />
      </AuthLayout>
    </>
  );
};

export default Login;
