"""Builds every page, README, sitemap and robots.txt from designs.py.
Run from the repo root:  python scripts/build.py
"""
import json, os, html
from designs import SITE, CATEGORIES, DESIGNS

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
B = SITE["base"]
E = html.escape

CSS = """
:root{--bg:#fbfbf8;--ink:#17191f;--muted:#5a5f6b;--line:#e4e3dc;--blue:#2445d6;--card:#fff}
*{box-sizing:border-box;margin:0}
body{font-family:"Instrument Sans",system-ui,sans-serif;background:var(--bg);color:var(--ink);line-height:1.65;font-size:17px}
a{color:var(--blue)}
a:focus-visible,button:focus-visible,summary:focus-visible{outline:3px solid var(--blue);outline-offset:3px}
.bar{border-bottom:1px solid var(--line);background:#fff}
.bar div{max-width:1120px;margin:0 auto;padding:14px 22px;display:flex;justify-content:space-between;align-items:center;gap:16px}
.bar a.logo{font-family:"Bricolage Grotesque",sans-serif;font-weight:800;font-size:1.25rem;color:var(--ink);text-decoration:none}
.bar nav a{margin-left:18px;color:var(--ink);font-weight:600;text-decoration:none}
.wrap{max-width:1120px;margin:0 auto;padding:0 22px}
.crumbs{font-size:.9rem;color:var(--muted);padding:22px 0 0}
.crumbs a{color:var(--muted)}
h1,h2,h3{font-family:"Bricolage Grotesque",sans-serif;line-height:1.15;letter-spacing:-.01em}
h1{font-size:clamp(2rem,4.5vw,3.2rem);font-weight:800;margin:14px 0 14px;max-width:22ch}
h2{font-size:1.6rem;margin:0 0 14px}
h3{font-size:1.15rem}
.lead{font-size:1.15rem;color:var(--muted);max-width:62ch}
.actions{display:flex;flex-wrap:wrap;gap:12px;margin:26px 0}
.btn{display:inline-block;padding:12px 20px;border-radius:10px;font-weight:700;text-decoration:none;border:2px solid var(--ink);color:var(--ink);background:#fff}
.btn.main{background:var(--ink);color:#fff}
.shot{display:block;border-radius:14px;overflow:hidden;border:1px solid var(--line);box-shadow:0 20px 50px rgba(20,20,40,.12)}
.shot img{display:block;width:100%;height:auto}
.cols{display:grid;grid-template-columns:1.4fr 1fr;gap:50px;padding:60px 0}
.cols p{margin-bottom:14px;max-width:65ch}
ul.list{padding-left:20px}
ul.list li{margin-bottom:6px}
.box{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:24px}
.code{position:relative;margin:0 0 60px}
pre{background:#1d2030;color:#e8eaf3;border-radius:14px;padding:24px;overflow-x:auto;font-size:.9rem;line-height:1.6}
.copy{position:absolute;top:12px;right:12px;font:inherit;font-size:.85rem;font-weight:700;border:0;border-radius:8px;padding:6px 12px;background:#fff;color:var(--ink);cursor:pointer}
ol.steps{padding-left:22px;max-width:65ch;margin-bottom:60px}
ol.steps li{margin-bottom:8px}
details{border-top:1px solid var(--line);padding:16px 0}
details:last-child{border-bottom:1px solid var(--line)}
summary{font-weight:700;cursor:pointer;font-size:1.05rem}
details p{margin-top:10px;color:var(--muted);max-width:70ch}
.faq{margin-bottom:60px}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:24px;margin:26px 0 60px}
.tile{display:block;text-decoration:none;color:var(--ink);background:#fff;border:1px solid var(--line);border-radius:14px;overflow:hidden}
.tile img{display:block;width:100%;height:auto;aspect-ratio:16/10;object-fit:cover;object-position:top;border-bottom:1px solid var(--line)}
.tile div{padding:14px 16px}
.tile small{color:var(--muted)}
.tile:hover{border-color:var(--ink)}
.cat{margin:50px 0 10px;display:flex;justify-content:space-between;align-items:baseline;gap:16px;flex-wrap:wrap}
.soon{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:14px;margin:20px 0 70px}
.soon div{border:1px dashed #c9c7bd;border-radius:12px;padding:18px;color:var(--muted)}
.soon b{color:var(--ink);display:block}
.pager{display:flex;justify-content:space-between;gap:16px;margin:0 0 60px;flex-wrap:wrap}
footer{border-top:1px solid var(--line);padding:30px 22px;text-align:center;color:var(--muted);font-size:.95rem}
@media(max-width:820px){.cols{grid-template-columns:1fr;gap:30px;padding:40px 0}.bar nav a:first-child{display:none}}
"""

FONTS = '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,800&family=Instrument+Sans:wght@400;600;700&display=swap" rel="stylesheet">'


def head(title, desc, url, image, keywords, schema):
    return f"""<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{E(title)}</title>
<meta name="description" content="{E(desc)}">
<meta name="keywords" content="{E(keywords)}">
<meta name="author" content="{E(SITE['author'])}">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="{url}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{SITE['name']}">
<meta property="og:title" content="{E(title)}">
<meta property="og:description" content="{E(desc)}">
<meta property="og:url" content="{url}">
<meta property="og:image" content="{image}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{E(title)}">
<meta name="twitter:description" content="{E(desc)}">
<meta name="twitter:image" content="{image}">
{FONTS}
<style>{CSS}</style>
<script type="application/ld+json">{json.dumps(schema, ensure_ascii=False)}</script>
</head>
<body>
<header class="bar"><div><a class="logo" href="{B}">100 CSS Designs</a><nav><a href="{B}#categories">Categories</a><a href="{SITE['repo']}">GitHub</a></nav></div></header>
"""


def foot():
    return f"""<footer>Free under the MIT license. Made by <a href="{SITE['author_url']}">{SITE['author']}</a>. <a href="{SITE['repo']}">Star the repo on GitHub</a> to get new designs.</footer>
<script>document.querySelectorAll('.copy').forEach(b=>b.onclick=()=>{{navigator.clipboard.writeText(b.nextElementSibling.innerText).then(()=>{{b.textContent='Copied';setTimeout(()=>b.textContent='Copy CSS',1500)}})}})</script>
</body>
</html>"""


def crumbs_schema(items):
    return {"@type": "BreadcrumbList", "itemListElement": [
        {"@type": "ListItem", "position": i + 1, "name": n, "item": u} for i, (n, u) in enumerate(items)]}


def faq_schema(faq):
    return {"@type": "FAQPage", "mainEntity": [
        {"@type": "Question", "name": q, "acceptedAnswer": {"@type": "Answer", "text": a}} for q, a in faq]}


def cat_of(slug):
    return next(c for c in CATEGORIES if c["slug"] == slug)


def durl(d):
    return f"{B}{d['cat']}/{d['slug']}/"


def tile(d, prefix):
    return f'<a class="tile" href="{prefix}{d["slug"]}/"><img src="{prefix}{d["slug"]}/preview.png" alt="{E(d["name"])} CSS template preview" loading="lazy" width="1280" height="800"><div><h3>{d["num"]:03d}. {E(d["name"])}</h3><small>{E(d["example"])}</small></div></a>'


def write(path, text):
    full = os.path.join(ROOT, path)
    os.makedirs(os.path.dirname(full), exist_ok=True)
    with open(full, "w", encoding="utf-8") as f:
        f.write(text)


def design_page(d, i, siblings):
    c = cat_of(d["cat"])
    url, img = durl(d), durl(d) + "preview.png"
    fname = d["slug"][4:] + "-template.html"
    schema = {"@context": "https://schema.org", "@graph": [
        {"@type": "WebPage", "@id": url, "url": url, "name": d["title"], "description": d["desc"],
         "isPartOf": {"@type": "WebSite", "name": SITE["name"], "url": B},
         "primaryImageOfPage": {"@type": "ImageObject", "url": img, "width": 1280, "height": 800},
         "datePublished": SITE["published"], "dateModified": SITE["published"], "inLanguage": "en"},
        {"@type": "SoftwareSourceCode", "name": f"{d['name']} CSS Template", "description": d["desc"],
         "image": img, "url": url, "codeRepository": SITE["repo"], "programmingLanguage": ["HTML", "CSS"],
         "license": "https://opensource.org/licenses/MIT", "isAccessibleForFree": True,
         "keywords": d["keywords"], "author": {"@type": "Person", "name": SITE["author"], "url": SITE["author_url"]},
         "offers": {"@type": "Offer", "price": "0", "priceCurrency": "USD"}},
        crumbs_schema([("Home", B), (c["name"], B + c["slug"] + "/"), (d["name"], url)]),
        faq_schema(d["faq"])]}
    what = "".join(f"<p>{E(p)}</p>" for p in d["what"])
    when = "".join(f"<li>{E(x)}</li>" for x in d["when"])
    feats = "".join(f"<li>{E(x)}</li>" for x in d["features"])
    faq = "".join(f"<details><summary>{E(q)}</summary><p>{E(a)}</p></details>" for q, a in d["faq"])
    prev_d = siblings[i - 1] if i > 0 else None
    next_d = siblings[i + 1] if i < len(siblings) - 1 else None
    pager = '<nav class="pager" aria-label="More designs">'
    pager += f'<a href="../{prev_d["slug"]}/">Previous: {E(prev_d["name"])}</a>' if prev_d else "<span></span>"
    pager += f'<a href="../{next_d["slug"]}/">Next: {E(next_d["name"])}</a>' if next_d else "<span></span>"
    pager += "</nav>"
    related = "".join(tile(s, "../") for s in siblings if s is not d)[: 10**6]
    body = f"""<main class="wrap">
<p class="crumbs"><a href="{B}">Home</a> / <a href="../">{E(c['name'])}</a> / {E(d['name'])}</p>
<h1>{E(d['name'])} CSS Template, Free with Live Demo</h1>
<p class="lead">{E(d['desc'])} The example is {E(d['example'])}.</p>
<div class="actions"><a class="btn main" href="demo.html">Open live demo</a><a class="btn" href="demo.html" download="{fname}">Download HTML file</a><a class="btn" href="{SITE['repo']}/tree/main/{d['cat']}/{d['slug']}">View code on GitHub</a></div>
<a class="shot" href="demo.html"><img src="preview.png" alt="{E(d['name'])} CSS template example: {E(d['example'])}" width="1280" height="800"></a>
<section class="cols"><div><h2>What is {E(d['name'].lower())}?</h2>{what}</div>
<div class="box"><h3>Good for</h3><ul class="list">{when}</ul></div></section>
<section><h2>What you get in this template</h2><ul class="list" style="margin-bottom:40px">{feats}</ul></section>
<section><h2>The key CSS</h2><p style="margin-bottom:14px">This is the part that makes the {E(d['name'].lower())} look work. Copy it into your own project.</p>
<div class="code"><button class="copy" type="button">Copy CSS</button><pre><code>{E(d['css'])}</code></pre></div></section>
<section><h2>How to use it</h2><ol class="steps"><li>Click Download HTML file above.</li><li>Open the file in any code editor, like VS Code.</li><li>Change the text, colors and links to match your project. Colors are at the top of the style tag.</li><li>Upload it to any host, such as GitHub Pages, Netlify or your own server. It is one file with no build step.</li></ol></section>
<section class="faq"><h2>Questions people ask</h2>{faq}</section>
{pager}
<section><h2>More {E(c["name"])} designs</h2><div class="grid">{related}</div></section>
</main>
"""
    write(f"{d['cat']}/{d['slug']}/index.html", head(d["title"], d["desc"], url, img, d["keywords"], schema) + body + foot())
    readme = f"""# {d['name']} CSS Template (Free)

![{d['name']} CSS template preview](preview.png)

**Live demo:** {url}demo.html
**Details and code:** {url}

{d['desc']}

## What is {d['name'].lower()}?

{chr(10).join(p + chr(10) for p in d['what'])}
## What you get

{chr(10).join('- ' + x for x in d['features'])}

## The key CSS

```css
{d['css']}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
"""
    write(f"{d['cat']}/{d['slug']}/README.md", readme)


def category_page(c):
    items = [d for d in DESIGNS if d["cat"] == c["slug"]]
    url = B + c["slug"] + "/"
    img = durl(items[0]) + "preview.png"
    schema = {"@context": "https://schema.org", "@graph": [
        {"@type": "CollectionPage", "@id": url, "url": url, "name": c["title"], "description": c["desc"],
         "isPartOf": {"@type": "WebSite", "name": SITE["name"], "url": B}, "inLanguage": "en",
         "mainEntity": {"@type": "ItemList", "numberOfItems": len(items), "itemListElement": [
             {"@type": "ListItem", "position": k + 1, "url": durl(d), "name": d["name"] + " CSS Template"} for k, d in enumerate(items)]}},
        crumbs_schema([("Home", B), (c["name"], url)])]}
    tiles = "".join(tile(d, "") for d in items)
    body = f"""<main class="wrap">
<p class="crumbs"><a href="{B}">Home</a> / {E(c['name'])}</p>
<h1>{E(c['name'])} CSS Templates</h1>
<p class="lead">{E(c['intro'])}</p>
<div class="grid">{tiles}</div>
</main>
"""
    write(f"{c['slug']}/index.html", head(c["title"], c["desc"], url, img, "soft ui css, glassmorphism, neumorphism, claymorphism, css templates free", schema) + body + foot())


def home():
    title = "100 Free CSS Designs: Trending UI Styles with Live Demos and Downloads"
    desc = "100 free CSS design templates in the styles people search for most: glassmorphism, bento grid, neo brutalism, AI dashboards and more. Live demo and single HTML download for each."
    img = durl(DESIGNS[0]) + "preview.png"
    ready = [d for d in DESIGNS]
    faq = [
        ["Are these CSS templates really free?", "Yes. Every design is released under the MIT license. You can use them for personal sites, client work and paid products without asking."],
        ["Do I need a framework to use them?", "No. Each template is one HTML file with the CSS inside it. There is no build step, no npm and no framework. Open it in a browser and it works."],
        ["How often are new designs added?", "New designs are added in batches until all 100 are live. Star the GitHub repo to see new ones as they arrive."],
        ["Can I use these templates for client projects?", "Yes. The MIT license allows commercial use. A link back is welcome but not required."],
    ]
    schema = {"@context": "https://schema.org", "@graph": [
        {"@type": "WebSite", "@id": B + "#site", "url": B, "name": SITE["name"], "description": desc, "inLanguage": "en",
         "publisher": {"@type": "Person", "name": SITE["author"], "url": SITE["author_url"]}},
        {"@type": "CollectionPage", "url": B, "name": title, "description": desc, "isPartOf": {"@id": B + "#site"},
         "mainEntity": {"@type": "ItemList", "numberOfItems": len(ready), "itemListElement": [
             {"@type": "ListItem", "position": k + 1, "url": durl(d), "name": d["name"] + " CSS Template"} for k, d in enumerate(ready)]}},
        faq_schema(faq)]}
    sections = ""
    for c in CATEGORIES:
        if c["ready"]:
            items = [d for d in DESIGNS if d["cat"] == c["slug"]]
            sections += f'<div class="cat"><h2>{c["num"]}. {E(c["name"])}</h2><a href="{c["slug"]}/">See all {len(items)} {E(c["name"])} designs</a></div><div class="grid">' + "".join(tile(d, c["slug"] + "/") for d in items) + "</div>"
    soon = "".join(f'<div><b>{c["num"]}. {E(c["name"])}</b>Coming soon</div>' for c in CATEGORIES if not c["ready"])
    faqh = "".join(f"<details><summary>{E(q)}</summary><p>{E(a)}</p></details>" for q, a in faq)
    body = f"""<main class="wrap">
<h1 style="margin-top:50px">100 free CSS designs you can use today</h1>
<p class="lead">The UI styles people are searching for right now, each built as a real page you can open and try. Glassmorphism, neumorphism, bento grids, neo brutalism, AI dashboards and more. Every design comes with a live demo, the key CSS to copy, and a single HTML file to download. No sign up, no framework, free for commercial use.</p>
<div class="actions"><a class="btn main" href="#categories">Browse the designs</a><a class="btn" href="{SITE['repo']}/archive/refs/heads/main.zip">Download everything (ZIP)</a><a class="btn" href="{SITE['repo']}">Star on GitHub</a></div>
<section id="categories">{sections}
<h2 style="margin-top:30px">More categories on the way</h2><div class="soon">{soon}</div></section>
<section class="faq"><h2>Questions people ask</h2>{faqh}</section>
</main>
"""
    write("index.html", head(title, desc, B, img, "free css templates, css designs, html templates free download, glassmorphism template, neumorphism template, ui design trends", schema) + body + foot())


def root_readme():
    rows = "\n".join(
        f"| {d['num']:03d} | [{d['name']}]({durl(d)}) | {d['example']} | [Demo]({durl(d)}demo.html) | <img src=\"{d['cat']}/{d['slug']}/preview.png\" width=\"260\" alt=\"{d['name']} preview\"> |"
        for d in DESIGNS)
    cats = "\n".join(f"- {'✅' if c['ready'] else '⏳'} {c['num']}. {c['name']}" for c in CATEGORIES)
    txt = f"""# 100 Free CSS Designs

Trending UI styles built as real pages, with a live demo and a single HTML file for each one. No framework, no build step, free for commercial use.

**Live gallery:** {B}

![Preview of the first designs](01-soft-tactile-ui/001-glassmorphism/preview.png)

## Designs so far

| # | Design | Example | Live | Preview |
|---|---|---|---|---|
{rows}

## Categories

{cats}

## How to use a design

1. Open the design folder and download `demo.html`.
2. Change the text, colors and links.
3. Upload it anywhere: GitHub Pages, Netlify, Vercel or your own server.

## License

MIT. Use these designs in personal and commercial projects. A star on the repo helps more people find them.
"""
    write("README.md", txt)


def sitemap():
    urls = [B] + [B + c["slug"] + "/" for c in CATEGORIES if c["ready"]] + [durl(d) for d in DESIGNS]
    body = "".join(f"<url><loc>{u}</loc><lastmod>{SITE['published']}</lastmod></url>" for u in urls)
    write("sitemap.xml", f'<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">{body}</urlset>\n')



if __name__ == "__main__":
    for c in CATEGORIES:
        if c["ready"]:
            sib = [d for d in DESIGNS if d["cat"] == c["slug"]]
            for i, d in enumerate(sib):
                design_page(d, i, sib)
            category_page(c)
    home(); root_readme(); sitemap()
    print("Built", len(DESIGNS), "designs")
