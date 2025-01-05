import { Link } from "react-router-dom";

const Register = (): JSX.Element => {
  return (
    <div className="lg:w-1/2 md:w-2/3 mx-auto border border-gray-300 p-4">
      <div className="text-center">
        <h2 className="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
          Register
        </h2>
      </div>
      <div className="p-2 w-full">
        <div className="relative">
          <label htmlFor="email" className="leading-7 text-sm text-gray-600">
            Email
          </label>
          <input
            type="email"
            id="email"
            name="email"
            className="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
          />
        </div>
      </div>
      <div className="p-2 w-full">
        <div className="relative">
          <label htmlFor="password" className="leading-7 text-sm text-gray-600">
            Password
          </label>
          <input
            type="password"
            id="password"
            name="password"
            className="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
          />
        </div>
      </div>
      <div className="p-2 mt-4 w-full mb-4">
        <button>Login</button>
      </div>
      <div className="text-right text-indigo-500 underline">
        <Link to="/login">You already have an account?</Link>
      </div>
    </div>
  );
};

export default Register;
