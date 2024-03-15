import {useGlobalState} from "@/store.js";

const state = useGlobalState()

export const isHomeActive = () => (state.menuActive.value === '#home' || state.menuActive.value === '#')
export const isAboutActive = () => state.menuActive.value === '#about'
export const isServiceActive = () => state.menuActive.value === '#services'
export const isPortfolioActive = () => state.menuActive.value === '#portfolio'
