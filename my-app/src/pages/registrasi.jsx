import FormRegistrasi from "../components/fragment/formRegistrasi";
import AuthLayout from "../components/layouts/authLayout";

const Registrasi = () => {
  return (
    <>
      <AuthLayout title="Registrasi">
        <FormRegistrasi />
      </AuthLayout>
    </>
  );
};

export default Registrasi;
