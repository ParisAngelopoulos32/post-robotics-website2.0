// import theme styling
import "@styling/theme.scss";
import "@/ts/main.ts";

window.addEventListener('load', () => {
    import('./after-load/load').then();
});
