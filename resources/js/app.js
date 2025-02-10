import "aos/dist/aos.css";

if (typeof window !== "undefined") {
    import("aos").then((AOS) => {
        AOS.init({
            duration: 1500,
            once: false,
            easing: "ease-out-quart",
        });
    });
}
