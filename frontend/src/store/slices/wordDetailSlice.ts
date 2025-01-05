import { createSlice } from "@reduxjs/toolkit";

interface IState {
  wordDetails: unknown; // TODO
  message: string;
}

const initialState: IState = {
  wordDetails: null,
  message: "",
};

export const wordDetailSlice = createSlice({
  name: "wordDetail",
  initialState,
  reducers: {
    setWordDetails: (state, { payload }) => {
      state.wordDetails = payload;
    },
    setMessage: (state, { payload }) => {
      state.message = payload;
    },
  },
});

export const { setWordDetails, setMessage } = wordDetailSlice.actions;
export default wordDetailSlice.reducer;
