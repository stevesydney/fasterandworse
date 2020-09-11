const pluginSass = require("eleventy-plugin-sass");
const sassPluginOptions = {
  sourcemaps: true
};
module.exports = eleventyConfig => {
  eleventyConfig.addPlugin(pluginSass, sassPluginOptions);
  eleventyConfig.setTemplateFormats([
    "md",
    "html"
  ]);
  eleventyConfig.addPassthroughCopy("images");
  eleventyConfig.addPassthroughCopy("js");
  eleventyConfig.addPassthroughCopy("favicon.ico");
  eleventyConfig.addPassthroughCopy("favicon-16x16.png");
  eleventyConfig.addPassthroughCopy("favicon-32x32.png");
};
