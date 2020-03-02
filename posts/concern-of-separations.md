---
title: Concern of separations
---
In a parallel universe there are two key differences to the one we're living in now.

1. The Big Mac's two all-beef patties are injected with the special sauce, liquified lettuce, cheese, pickles, and onions.
2. It's easier than ever to build web applications with clean separation between each layer of concern.
The Big Mac tastes odd but now only one person is required to cook and assemble it. There are massive cost savings, but nothing is gained because the customers aren't loving it and they're not buying it.

Meanwhile the web is reaching more and more people all over the world.

Regardless of the quality of their internet connection.

Regardless of their disabilities.

Regardless of their device's processing power, screen size, screen shape, pixel density, colour palette, browser version.

The internet is accessible and it works as it was designed to work.

This is because the web didn't go the same way as the Big Mac.

The web development community knew that liquifying the separate layers of concern - semantic document structure, visual design, accessibility, layout, animation, interactivity, content - and injecting them into a Javascript patty was not going to make the web a better place. For users and developers alike.

CSS preprocessors like SASS and LESS did have some popularity for a while though it didn't take long to realise some serious issues with them.

The benefits of preprocessors were all on the developers side. Better workflows, collaborative coding, no more find and replace to change a colour site wide.

But how did this benefit the user? CSS as a language hadn't changed, but now the developers and the users were separated by a machine layer. A machine which generated regular CSS from this pseudo-CSS.

The user's experience could only stay the same or get worse.

Despite that, the improvement to the developer experience was seductive. Plugins which automatically add CSS polyfills for better browser compatibility. For-loops for generating full CSS grid layouts from a few lines of code.

Imagine if the same principles were applied to Javascript?

There would be complete freedom from the limitations imposed by patchy browser support for Javascript’s best features. And there wouldn’t be any more reliance on libraries like jQuery.

Developers would be able to build web applications with the same componentisation and modularity of real software development.

Workflows would be streamlined.

Collaboration and productivity would skyrocket.

Codebases would scale with the product.

…and a machine layer will convert all the code into a single Javascript file compatible with all the browsers.

Again, the benefit was not for the user.

So the concepts of CSS preprocessing and Javascript transpiling died away.

It was clear that the gains for the makers were pointless if they weren't also providing gains to the ecosystem they lived in.
