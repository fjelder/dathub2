const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",
    mode: "jit",
    purge: {
        enabled: false,
        content: [
            "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
            "./vendor/laravel/jetstream/**/*.blade.php",
            "./storage/framework/views/*.php",
            "./resources/views/**/*.blade.php",
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            zIndex: {
                "-10": "-10",
                "-20": "-20",
                "-30": "-30",
                "-40": "-40",
                "-50": "-50",
            },
            minHeight: {
                40: "10rem",
            },
            fontWeight: ["hover"],
            outline: {
                gray: ["1px dashed #ccc", "2px"],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
