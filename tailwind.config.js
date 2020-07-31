module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {
            colors: {
                primary: "#21409A",
                secondary: "#006bbd"
            }
        }
    },
    variants: {},
    plugins: [require("@tailwindcss/custom-forms")]
};
