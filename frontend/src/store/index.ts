import { combineReducers, configureStore } from "@reduxjs/toolkit";
import storage from "redux-persist/lib/storage";
import wordDetailReducer from "./slices/wordDetailSlice";
import { persistReducer, persistStore } from "redux-persist";

// Create the root reducer
const rootReducer = combineReducers({
  word: wordDetailReducer,
});

// Create the persist config and reducer
const persistConfig = {
  key: "root",
  storage,
};
const persistedReducer = persistReducer(persistConfig, rootReducer);

// Create store and persistor
const store = configureStore({
  reducer: persistedReducer,
});
const persistor = persistStore(store);

export { store, persistor };
export type AppDispatch = typeof store.dispatch;
export type RootState = ReturnType<typeof store.getState>;
