# Directory Listing CSS Template (Free)

![Directory Listing CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/10-business-ready/100-directory-listing/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/10-business-ready/100-directory-listing/

Free directory listing template for a college finder. Live search, filters by city, subject and fees, sort, result count and listing cards. Live demo.

## What is directory listing?

A directory helps people narrow a long list down to a few good options. Search at the top, filters on the side, a live count of results and cards with the facts that matter most.

Everything filters instantly as you type, tick or slide. The fee slider, applications open checkbox and sort menu all work together, and there is a helpful message when nothing matches.

## What you get

- Live search by name or subject
- City and subject checkboxes built from the data
- Maximum fee slider
- Sort by name or fees
- Empty state with advice when nothing matches

## The key CSS

```css
.layout { display: grid; grid-template-columns: 240px 1fr; gap: 28px; }
aside { position: sticky; top: 16px; align-self: start; }
.card { display: grid; grid-template-columns: 88px 1fr auto; gap: 18px; border-radius: 14px; }
.search div:focus-within { box-shadow: 0 0 0 3px #e0621f, 0 12px 30px rgba(23,32,43,.12); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
