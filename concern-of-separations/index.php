<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Faster and worse | Concern of separations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#EDEDEF">
        <meta name="author" content="Stephen Farrugia">
        <meta name="Title" content="Concern of separations">
        <meta name="Description" content="In a parallel universe there are two key differences to the one we're living in now.">
        <meta name="Keywords" content="Steve Farrugia, Stephen Farrugia, design, responsive, semantics">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://fasterandworse.com/concern-of-separations/">
        <meta property="og:title" content="Concern of separations">
        <meta property="og:description" content="In a parallel universe there are two key differences to the one we're living in now.">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:domain" content="fasterandworse.com">
        <meta name="twitter:title" content="Concern of separations">
        <meta name="twitter:description" content="In a parallel universe there are two key differences to the one we're living in now.">
        <meta name="twitter:url" content="https://fasterandworse.com/concern-of-separations/">
        <link href="/main.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <article itemscope itemtype="http://schema.org/BlogPosting">
            <header>
                <h1 itemprop="title">Concern of separations</h1>
                <time itemprop="dateCreated pubdate datePublished" datetime="2019-02-15" hidden>February 15, 2019</time>
            </header>
            <main>
                <p>In a parallel universe there are two key differences to the one we're living in now.</p>
                <ol>
                    <li>The Big Mac's two all-beef patties are injected with the special sauce, liquified lettuce, cheese, pickles, and onions.</li>
                    <li>It's easier than ever to build web applications with clean separation between each layer of concern.</li>
                </ol>
                <p>The Big Mac tastes odd but now only one person is required to cook and assemble it. There are massive cost savings, but nothing is gained because the customers aren't loving it and they're not buying it.</p>
                <p>Meanwhile the web is reaching more and more people all over the world.</p>
                <p>Regardless of the quality of their internet connection.<br>Regardless of their disabilities.<br>Regardless of their device's processing power, screen size, screen shape, pixel density, colour palette, browser version.</p>
                <p>The internet is accessible and it works as it was designed to work.</p>
                <p>This is because the web didn't go the same way as the Big Mac.</p>
                <p>The web development community knew that liquifying the separate layers of concern - semantic document structure, visual design, accessibility, layout, animation, interactivity, content - and injecting them into a Javascript patty was not going to make the web a better place. For users and developers alike.</p>
                <p>CSS preprocessors like SASS and LESS did have some popularity for a while though it didn't take long to realise some serious issues with them.</p>
                <p>The benefits of preprocessors were all on the developers side. Better workflows, collaborative coding, no more <em>find and replace</em> to change a colour site wide.</p>
                <p>But how did this benefit the user? CSS as a language hadn't changed, but now the developers and the users were separated by a machine layer. A machine which generated regular CSS from this pseudo-CSS.</p>
                <p>The user's experience could only stay the same or get worse.</p>
                <p>Despite that, the improvement to the developer experience was seductive. Plugins which automatically add CSS polyfills for better browser compatibility. For-loops for generating full CSS grid layouts from a few lines of code.</p>
                <p>Imagine if the same principles were applied to Javascript?</p>
                <p>There would be complete freedom from the limitations imposed by patchy browser support for Javascript’s best features. And there wouldn’t be any more reliance on libraries like jQuery.</p>
                <p>Developers would be able to build web applications with the same componentisation and modularity of <em>real</em> software development.</p>
                <p>Workflows would be streamlined.</p>
                <p>Collaboration and productivity would skyrocket.</p>
                <p>Codebases would scale with the product.</p>
                <p>&hellip;and a machine layer will convert all the code into a single Javascript file compatible with all the browsers.</p>
                <p>Again, the benefit was not for the user.</p>
                <p>So the concepts of CSS preprocessing and Javascript transpiling died away.</p>
                <p>It was clear that the gains for the <em>makers</em> were pointless if they weren't also providing gains to the ecosystem they lived in.</p>
                <p itemprop="author"><a href="mailto:sfarrugia@gmail.com">Stephen Farrugia</a></p>

            </main>
        </article>
    </body>
</html>
