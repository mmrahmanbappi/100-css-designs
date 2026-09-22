# Long Form Page CSS Template (Free)

![Long Form Page CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/030-long-form-page/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/030-long-form-page/

Free long form single page template with a sticky table of contents, reading progress bar and big number blocks. Built for a charity report. Live demo and download.

## What is long form page?

A long form page puts a whole story on one page instead of many. Readers scroll from start to end, with a table of contents on the side so they always know where they are.

It is great for reports, guides and case studies, and it is good for SEO too, because one strong page with all the detail often ranks better than five thin ones.

## What you get

- Sticky table of contents that highlights the current section
- Reading progress bar across the top
- Big number cards for key facts
- Comfortable serif body text at 19px
- Anchor links with smooth scroll

## The key CSS

```css
.layout { display: grid; grid-template-columns: 220px 1fr; gap: 60px; }
.toc { position: sticky; top: 30px; align-self: start; }
article section { max-width: 66ch; scroll-margin-top: 30px; }
.progress { position: fixed; top: 0; left: 0; height: 4px; background: #2f7d4f; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
