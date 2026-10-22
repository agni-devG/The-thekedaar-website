module.exports = {
  proxy: "http://127.0.0.1:8000/",
  listen: "127.0.0.1",
  files: [
    "**/*.php",
    "assets/css/**/*.css",
    "assets/js/**/*.js"
  ],
  ignore: [
    "blogs/**",
    "vendor/**",
    "node_modules/**"
  ],
  open: false,
  notify: false,
  ui: false
};
