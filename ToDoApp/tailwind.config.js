/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",],
  theme: {
    extend: {
        colors: {
            backgroundBase: "var(--backgroundBase)",
            backgroundElevated: "var(--backgroundElevated)",
            accent: "var(--accent)",
            textColor: "var(--textColor)",
        },
    },
  },
  plugins: [],
}

