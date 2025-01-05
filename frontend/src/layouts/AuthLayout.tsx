import { Outlet } from "react-router-dom";

const AuthLayout = (): JSX.Element => {
  return (
    <section className="text-gray-600 body-font relative">
      <div className="container px-5 py-24 mx-auto">
        <div className="flex flex-col text-center items-center w-full mb-12">
          <img
            className="mb-4"
            src="https://cdn.pixabay.com/photo/2012/04/12/12/13/man-29749_1280.png"
            alt="logo"
            width="72"
            height="57"
          />
          <h1 className="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
            Word Dictionary
          </h1>
        </div>
        <section className="text-gray-600 body-font relative">
          <div className="container px-5 mx-auto">
            <Outlet />
          </div>
        </section>
      </div>
    </section>
  );
};

export default AuthLayout;
