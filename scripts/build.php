<?php
/**
 * Builds every page, README and the sitemap from designs.php.
 * Run from the repo root:  php scripts/build.php
 */
require __DIR__ . '/designs.php';

$ROOT = dirname(__DIR__);
$B = $SITE['base'];

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function jsonld($a) { return json_encode($a, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); }

const CSS = <<<'CSS'
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
CSS;

const MMCSS = <<<'MMCSS'
/* Shared look with mmrahmanbappi.github.io */
:root{--bg:#eeeeea;--ink:#171518;--muted:#5f5d61;--line:#d9d8d2;--blue:#b23a0a;--card:#fff;--mt-soft:#f6f6f2;--mt-accink:#fff;color-scheme:light}
@media (prefers-color-scheme:dark){:root{--bg:#141316;--ink:#f2f1ed;--muted:#a3a1a6;--line:#302f35;--blue:#ff7b4f;--card:#222126;--mt-soft:#1b1a1e;--mt-accink:#141316;color-scheme:dark}}
body{font-family:"Inter",system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--ink)}
h1,h2,h3,h4,.bar a.logo{font-family:"Inter",system-ui,-apple-system,"Segoe UI",Roboto,sans-serif!important;letter-spacing:-.035em}
h1{font-weight:560!important;line-height:1.05}h2{font-weight:600!important}h3{font-weight:600!important;letter-spacing:-.02em}
a{color:var(--ink)}
.bar{position:sticky;top:0;z-index:5;background:color-mix(in srgb,var(--bg) 88%,transparent)!important;backdrop-filter:saturate(1.4) blur(10px);border-bottom:1px solid var(--line)}
.bar a.logo{display:flex;align-items:center;gap:.6rem;font-weight:700!important;font-size:1.02rem!important;letter-spacing:-.01em}
.bar a.logo i{width:2.1rem;height:2.1rem;border-radius:50%;background:var(--ink);color:var(--bg);display:grid;place-items:center;font-style:normal;font-size:.7rem;font-weight:800;flex:none}
.bar nav{display:flex;align-items:center;gap:1.4rem}.bar nav a{color:var(--muted);text-decoration:none}.bar nav a:hover{color:var(--ink)}
.bar nav a.gh{border:1.5px solid var(--ink);border-radius:999px;padding:.35rem 1rem;color:var(--ink);font-weight:600}
.btn{border-radius:999px!important;font-weight:600}.btn.main{background:var(--ink)!important;border-color:var(--ink)!important;color:var(--bg)!important}
.tile,.card{border-radius:18px;background:var(--card);border-color:var(--line)}
.cat,.eyebrow,.kick{color:var(--blue)}
details{border-color:var(--line)}
.btn{background:var(--card);color:var(--ink);border-color:var(--ink)}.copy{background:var(--card)!important;color:var(--ink)!important;border:1px solid var(--line)!important}
@media (max-width:700px){.bar nav a:not(.gh){display:none}}
.mthero{padding:28px 0 36px}.mthero h1{margin-top:14px!important;font-size:clamp(2.2rem,3.6vw,3.2rem)!important}
.hgrid{display:grid;grid-template-columns:1.05fr 1.15fr .9fr;gap:26px;align-items:center;min-height:470px}
.mtbadge{display:inline-flex;align-items:center;gap:.5rem;font-size:.72rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--muted);background:var(--mt-soft);border:1px solid var(--line);border-radius:999px;padding:.25rem .7rem .25rem .3rem}
.mtbadge b{background:#b23a0a;color:#fff;border-radius:999px;padding:.1rem .5rem}
.stack{position:relative;height:440px;-webkit-mask-image:linear-gradient(#000 70%,transparent);mask-image:linear-gradient(#000 70%,transparent)}
.stack figure{position:absolute;margin:0;width:62%;aspect-ratio:16/10;border-radius:14px;overflow:hidden;box-shadow:0 1px 2px rgba(23,21,24,.06),0 18px 40px -22px rgba(23,21,24,.35);border:1px solid var(--line);background:var(--card);animation:mtfloat 7s ease-in-out infinite}
.stack figure img{width:100%;height:100%;object-fit:cover;object-position:top}
.stack figure:nth-child(1){left:2%;top:4%;transform:rotate(-7deg);animation-delay:-1s}.stack figure:nth-child(2){right:0;top:0;transform:rotate(5deg);animation-delay:-3s}
.stack figure:nth-child(3){left:18%;top:26%;transform:rotate(-1deg);z-index:3;width:70%;animation-delay:-2s}.stack figure:nth-child(4){left:0;top:52%;transform:rotate(4deg);animation-delay:-4s}
.stack figure:nth-child(5){right:2%;top:48%;transform:rotate(-5deg);animation-delay:-5s}.stack figure:nth-child(6){left:24%;top:70%;transform:rotate(2deg);animation-delay:-6s}
@keyframes mtfloat{50%{translate:0 -8px}}
.mtside{display:flex;flex-direction:column;gap:16px}
.mtcycle,.mtstat{background:var(--card);border:1px solid var(--line);border-radius:18px;padding:15px 17px}.mtcycle{box-shadow:0 18px 40px -26px rgba(23,21,24,.35)}
.mtcycle .hd{display:flex;align-items:center;gap:11px}.mtcycle .hd i{width:36px;height:36px;border-radius:10px;background:var(--ink);color:var(--bg);display:grid;place-items:center;font-style:normal;font-weight:800;font-size:.7rem;flex:none}
.mtcycle small{display:block;color:var(--muted);font-size:.78rem}.mtcycle strong{color:var(--ink);font-size:.95rem;display:block;min-height:1.5em;transition:opacity .35s}
.mtcycle ul{list-style:none;margin:12px 0 0;padding:0 0 0 47px;font-size:.9rem;display:flex;flex-direction:column;gap:7px}
.mtcycle li:nth-child(1){opacity:.9}.mtcycle li:nth-child(2){opacity:.65}.mtcycle li:nth-child(3){opacity:.4}.mtcycle li:nth-child(4){opacity:.18}
.mtstat{display:flex;justify-content:space-between;align-items:flex-start;gap:14px}.mtstat small{color:var(--muted);font-size:.85rem;line-height:1.4}
.mtstat b{display:block;font-size:2rem;color:var(--ink);letter-spacing:-.03em;line-height:1;text-align:right}.mtstat em{font-style:normal;font-size:.78rem;color:var(--blue);font-weight:600;display:block;text-align:right;margin-top:6px}
.mtbig{font-size:clamp(1.9rem,3.2vw,2.6rem);line-height:1.02;color:var(--ink);font-weight:560;letter-spacing:-.035em;margin:0}
@media (max-width:1060px){.hgrid{grid-template-columns:1fr 1fr}.mtside{grid-column:1/-1;display:grid;grid-template-columns:1fr 1fr;align-items:start}.mtbig{grid-column:1/-1}}
@media (max-width:760px){.hgrid{grid-template-columns:1fr;min-height:0}.stack{height:280px;order:2}.mtside{grid-template-columns:1fr;order:3}}
@media (prefers-reduced-motion:reduce){.stack figure{animation:none}}
MMCSS;
const MMFONT = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">';
const FONTS = '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,800&family=Instrument+Sans:wght@400;600;700&display=swap" rel="stylesheet">';

// ---- SEO helpers: keep titles within 60 characters and descriptions within 110 to 160 ----
function mm_trim_stop(array $w): array { $stop = ['and','with','for','in','of','the','a','an','to','&','on','by','your','or']; while ($w && in_array(strtolower(end($w)), $stop, true)) array_pop($w); return $w; }
function mm_clean(string $t): string {
    $t = trim($t);
    if (substr_count($t, '(') > substr_count($t, ')')) $t = trim(substr($t, 0, strrpos($t, '(')));
    $w = mm_trim_stop(explode(' ', $t)); $t = implode(' ', $w);
    return rtrim($t, " ,;:-");
}
function mm_title(string $t): string {
    if (mb_strlen($t) <= 60) return $t;
    while (mb_strlen($t) > 60 && preg_match('/\s*\([^()]*\)/', $t)) {
        preg_match_all('/\s*\([^()]*\)/', $t, $m, PREG_OFFSET_CAPTURE); $last = end($m[0]);
        $t = trim(substr($t, 0, $last[1]) . substr($t, $last[1] + strlen($last[0])));
    }
    if (mb_strlen($t) <= 60) return mm_clean($t);
    foreach ([': ', ' | ', ' - '] as $sep) {
        $p = strpos($t, $sep);
        if ($p !== false) {
            $h = substr($t, 0, $p); $s = substr($t, $p + strlen($sep));
            if (strpos($s, ',') !== false && mb_strlen($h) <= 60) return mm_clean($h);
            $w = explode(' ', $s);
            while ($w && mb_strlen($h . $sep . implode(' ', $w)) > 60) array_pop($w);
            $r = mm_clean(implode(' ', $w));
            if ($r !== '') return $h . $sep . $r;
            $t = $h; break;
        }
    }
    if (mb_strlen($t) <= 60) return mm_clean($t);
    $w = explode(' ', $t); while ($w && mb_strlen(implode(' ', $w)) > 60) array_pop($w);
    return mm_clean(implode(' ', $w));
}
function mm_desc(string $d, string $tail): string {
    $d = trim($d);
    if (mb_strlen($d) > 160) {
        $cut = mb_substr($d, 0, 159); $p = mb_strrpos($cut, '. ');
        if ($p !== false && $p > 100) $d = mb_substr($cut, 0, $p + 1);
        else { $w = explode(' ', mb_substr($d, 0, 158)); array_pop($w); $d = rtrim(implode(' ', mm_trim_stop($w)), ',;:') . '.'; }
    }
    if (mb_strlen($d) < 110 && mb_strlen($d . ' ' . $tail) <= 160) $d .= ' ' . $tail;
    return $d;
}
const MMTAIL = 'Free, with a live demo and one HTML file to download.';

function mm_hero(string $badge, string $mark, string $label, array $items, array $imgs, string $statLabel, string $statValue, string $statNote, string $big): array {
    $figs = ''; foreach (array_slice($imgs, 0, 6) as $im) $figs .= '<figure><img src="' . e($im) . '" alt="" width="640" height="400" loading="lazy"></figure>';
    $nx = ''; foreach (array_slice($items, 1, 4) as $it) $nx .= '<li>' . e($it) . '</li>';
    $open = '<section class="mthero"><div class="hgrid"><div><span class="mtbadge"><b>Free</b>' . e($badge) . '</span>';
    $close = '</div><div class="stack" aria-hidden="true">' . $figs . '</div><div class="mtside"><div class="mtcycle"><div class="hd"><i aria-hidden="true">' . e($mark) . '</i><div><small>' . e($label) . '</small>'
        . '<strong id="mtcur" data-items="' . e(json_encode(array_values($items))) . '">' . e($items[0]) . '</strong></div></div><ul id="mtnx" aria-hidden="true">' . $nx . '</ul></div>'
        . '<div class="mtstat"><small>' . $statLabel . '</small><div><b>' . e($statValue) . '</b><em>' . e($statNote) . '</em></div></div><p class="mtbig">' . e($big) . '</p></div></div></section>';
    return [$open, $close];
}
const MMHEROJS = <<<'MMJS'
<script>(function(){var cur=document.getElementById('mtcur'),nx=document.getElementById('mtnx');if(!cur||matchMedia('(prefers-reduced-motion: reduce)').matches)return;var items=JSON.parse(cur.dataset.items),i=0;
setInterval(function(){i=(i+1)%items.length;cur.style.opacity=0;setTimeout(function(){cur.textContent=items[i];cur.style.opacity=1;nx.innerHTML='';for(var k=1;k<5;k++){var li=document.createElement('li');li.textContent=items[(i+k)%items.length];nx.appendChild(li);}},350);},2600);})();</script>
MMJS;
function head($title, $desc, $url, $image, $keywords, $schema) {
    global $SITE, $B;
    $title = mm_title($title); $desc = mm_desc($desc, MMTAIL);
    $ogimg = rtrim($url, '/') . '/og.jpg';
    $t = e($title); $d = e($desc);
    return "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>$t</title>
<meta name=\"description\" content=\"$d\">
<meta name=\"keywords\" content=\"" . e($keywords) . "\">
<meta name=\"author\" content=\"" . e($SITE['author']) . "\">
<meta name=\"robots\" content=\"index, follow, max-image-preview:large\">
<link rel=\"canonical\" href=\"$url\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:site_name\" content=\"{$SITE['name']}\">
<meta property=\"og:title\" content=\"$t\">
<meta property=\"og:description\" content=\"$d\">
<meta property=\"og:url\" content=\"$url\">
<meta property=\"og:image\" content=\"$ogimg\">
<meta property=\"og:image:alt\" content=\"$t\">
<meta property=\"og:image:width\" content=\"1200\">
<meta property=\"og:image:height\" content=\"630\">
<link rel=\"image_src\" href=\"$image\">
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:title\" content=\"$t\">
<meta name=\"twitter:description\" content=\"$d\">
<meta name=\"twitter:image\" content=\"$ogimg\">
" . FONTS . MMFONT . "
<style>" . CSS . MMCSS . "</style>
<script type=\"application/ld+json\">" . jsonld($schema) . "</script>
</head>
<body>
<header class=\"bar\"><div><a class=\"logo\" href=\"$B\"><i aria-hidden=\"true\">CSS</i>100 CSS Designs</a><nav><a href=\"{$B}#categories\">Categories</a><a href=\"https://mmrahmanbappi.github.io/\">All projects</a><a class=\"gh\" href=\"{$SITE['repo']}\">GitHub</a></nav></div></header>
";
}

function foot() {
    global $SITE;
    return "<footer>Free under the MIT license. Made by <a href=\"{$SITE['author_url']}\">{$SITE['author']}</a>. <a href=\"{$SITE['repo']}\">Star the repo on GitHub</a> to get new designs.</footer>
<script>document.querySelectorAll('.copy').forEach(b=>b.onclick=()=>{navigator.clipboard.writeText(b.nextElementSibling.innerText).then(()=>{b.textContent='Copied';setTimeout(()=>b.textContent='Copy CSS',1500)})})</script>
</body>
</html>";
}

function crumbs_schema($items) {
    $list = [];
    foreach ($items as $i => [$n, $u]) $list[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $n, 'item' => $u];
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $list];
}

function faq_schema($faq) {
    $q = [];
    foreach ($faq as [$question, $answer]) $q[] = ['@type' => 'Question', 'name' => $question, 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $answer]];
    return ['@type' => 'FAQPage', 'mainEntity' => $q];
}

function cat_of($slug) { global $CATEGORIES; foreach ($CATEGORIES as $c) if ($c['slug'] === $slug) return $c; }
function durl($d) { global $B; return "$B{$d['cat']}/{$d['slug']}/"; }
function in_cat($slug) { global $DESIGNS; return array_values(array_filter($DESIGNS, fn($d) => $d['cat'] === $slug)); }

function tile($d, $prefix) {
    $n = e($d['name']);
    return sprintf('<a class="tile" href="%s%s/"><img src="%s%s/preview.png" alt="%s CSS template preview" loading="lazy" width="1280" height="800"><div><h3>%03d. %s</h3><small>%s</small></div></a>',
        $prefix, $d['slug'], $prefix, $d['slug'], $n, $d['num'], $n, e($d['example']));
}

function out($path, $text) {
    global $ROOT;
    $full = "$ROOT/$path";
    if (!is_dir(dirname($full))) mkdir(dirname($full), 0777, true);
    file_put_contents($full, $text);
}

function items_list($items) {
    $l = [];
    foreach ($items as $k => $d) $l[] = ['@type' => 'ListItem', 'position' => $k + 1, 'url' => durl($d), 'name' => $d['name'] . ' CSS Template'];
    return $l;
}

function lis($arr) { return implode('', array_map(fn($x) => '<li>' . e($x) . '</li>', $arr)); }
function faq_html($faq) { return implode('', array_map(fn($f) => '<details><summary>' . e($f[0]) . '</summary><p>' . e($f[1]) . '</p></details>', $faq)); }

function design_page($d, $i, $sib) {
    global $SITE, $B;
    $c = cat_of($d['cat']);
    $url = durl($d); $img = $url . 'preview.png';
    $fname = substr($d['slug'], 4) . '-template.html';
    $person = ['@type' => 'Person', 'name' => $SITE['author'], 'url' => $SITE['author_url']];
    $schema = ['@context' => 'https://schema.org', '@graph' => [
        ['@type' => 'WebPage', '@id' => $url, 'url' => $url, 'name' => $d['title'], 'description' => $d['desc'],
         'isPartOf' => ['@type' => 'WebSite', 'name' => $SITE['name'], 'url' => $B],
         'primaryImageOfPage' => ['@type' => 'ImageObject', 'url' => $img, 'width' => 1280, 'height' => 800],
         'datePublished' => $SITE['published'], 'dateModified' => $SITE['published'], 'inLanguage' => 'en'],
        ['@type' => 'SoftwareSourceCode', 'name' => "{$d['name']} CSS Template", 'description' => $d['desc'],
         'image' => $img, 'url' => $url, 'codeRepository' => $SITE['repo'], 'programmingLanguage' => ['HTML', 'CSS'],
         'license' => 'https://opensource.org/licenses/MIT', 'isAccessibleForFree' => true,
         'keywords' => $d['keywords'], 'author' => $person,
         'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD']],
        crumbs_schema([['Home', $B], [$c['name'], $B . $c['slug'] . '/'], [$d['name'], $url]]),
        faq_schema($d['faq'])]];
    $n = e($d['name']); $nl = e(strtolower($d['name'])); $cn = e($c['name']);
    $what = implode('', array_map(fn($p) => '<p>' . e($p) . '</p>', $d['what']));
    $prev = $sib[$i - 1] ?? null; $next = $sib[$i + 1] ?? null;
    $pager = '<nav class="pager" aria-label="More designs">'
        . ($prev ? "<a href=\"../{$prev['slug']}/\">Previous: " . e($prev['name']) . '</a>' : '<span></span>')
        . ($next ? "<a href=\"../{$next['slug']}/\">Next: " . e($next['name']) . '</a>' : '<span></span>') . '</nav>';
    $related = implode('', array_map(fn($s) => tile($s, '../'), array_filter($sib, fn($s) => $s['slug'] !== $d['slug'])));
    $body = "<main class=\"wrap\">
<p class=\"crumbs\"><a href=\"$B\">Home</a> / <a href=\"../\">$cn</a> / $n</p>
<h1>$n CSS Template, Free with Live Demo</h1>
<p class=\"lead\">" . e($d['desc']) . " The example is " . e($d['example']) . ".</p>
<div class=\"actions\"><a class=\"btn main\" href=\"demo.html\">Open live demo</a><a class=\"btn\" href=\"demo.html\" download=\"$fname\">Download HTML file</a><a class=\"btn\" href=\"{$SITE['repo']}/tree/main/{$d['cat']}/{$d['slug']}\">View code on GitHub</a></div>
<a class=\"shot\" href=\"demo.html\"><img src=\"preview.png\" alt=\"$n CSS template example: " . e($d['example']) . "\" width=\"1280\" height=\"800\"></a>
<section class=\"cols\"><div><h2>What is $nl?</h2>$what</div>
<div class=\"box\"><h3>Good for</h3><ul class=\"list\">" . lis($d['when']) . "</ul></div></section>
<section><h2>What you get in this template</h2><ul class=\"list\" style=\"margin-bottom:40px\">" . lis($d['features']) . "</ul></section>
<section><h2>The key CSS</h2><p style=\"margin-bottom:14px\">This is the part that makes the $nl look work. Copy it into your own project.</p>
<div class=\"code\"><button class=\"copy\" type=\"button\">Copy CSS</button><pre><code>" . e($d['css']) . "</code></pre></div></section>
<section><h2>How to use it</h2><ol class=\"steps\"><li>Click Download HTML file above.</li><li>Open the file in any code editor, like VS Code.</li><li>Change the text, colors and links to match your project. Colors are at the top of the style tag.</li><li>Upload it to any host, such as GitHub Pages, Netlify or your own server. It is one file with no build step.</li></ol></section>
<section class=\"faq\"><h2>Questions people ask</h2>" . faq_html($d['faq']) . "</section>
$pager
<section><h2>More $cn designs</h2><div class=\"grid\">$related</div></section>
</main>
";
    out("{$d['cat']}/{$d['slug']}/index.html", head($d['title'], $d['desc'], $url, $img, $d['keywords'], $schema) . $body . foot());

    $paras = implode("\n", array_map(fn($p) => $p . "\n", $d['what']));
    $feats = implode("\n", array_map(fn($x) => "- $x", $d['features']));
    $readme = "# {$d['name']} CSS Template (Free)

![{$d['name']} CSS template preview](preview.png)

**Live demo:** {$url}demo.html
**Details and code:** $url

{$d['desc']}

## What is " . strtolower($d['name']) . "?

$paras
## What you get

$feats

## The key CSS

```css
{$d['css']}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
";
    out("{$d['cat']}/{$d['slug']}/README.md", $readme);
}

function category_page($c) {
    global $SITE, $B;
    $items = in_cat($c['slug']);
    $url = $B . $c['slug'] . '/';
    $img = durl($items[0]) . 'preview.png';
    $schema = ['@context' => 'https://schema.org', '@graph' => [
        ['@type' => 'CollectionPage', '@id' => $url, 'url' => $url, 'name' => $c['title'], 'description' => $c['desc'],
         'isPartOf' => ['@type' => 'WebSite', 'name' => $SITE['name'], 'url' => $B], 'inLanguage' => 'en',
         'mainEntity' => ['@type' => 'ItemList', 'numberOfItems' => count($items), 'itemListElement' => items_list($items)]],
        crumbs_schema([['Home', $B], [$c['name'], $url]])]];
    $tiles = implode('', array_map(fn($d) => tile($d, ''), $items));
    $cn = e($c['name']);
    $body = "<main class=\"wrap\">
<p class=\"crumbs\"><a href=\"$B\">Home</a> / $cn</p>
<h1>$cn CSS Templates</h1>
<p class=\"lead\">" . e($c['intro']) . "</p>
<div class=\"grid\">$tiles</div>
</main>
";
    out("{$c['slug']}/index.html", head($c['title'], $c['desc'], $url, $img, $c['keywords'] ?? 'css templates free', $schema) . $body . foot());
}

function home() {
    global $SITE, $B, $CATEGORIES, $DESIGNS;
    $title = '100 Free CSS Designs: Trending UI Styles with Live Demos';
    $desc = count($DESIGNS) >= 100 ? '100 free CSS design templates with live demos: glassmorphism, bento grid, neo brutalism, AI chat UI, dashboards and more. One HTML file each.' : count($DESIGNS) . ' free CSS design templates live now, growing to 100. Glassmorphism, bento grid, neo brutalism, AI chat UI and more, each with a live demo.';
    $img = durl($DESIGNS[0]) . 'preview.png';
    $faq = [
        ['Are these CSS templates really free?', 'Yes. Every design is released under the MIT license. You can use them for personal sites, client work and paid products without asking.'],
        ['Do I need a framework to use them?', 'No. Each template is one HTML file with the CSS inside it. There is no build step, no npm and no framework. Open it in a browser and it works.'],
        ['How often are new designs added?', 'New designs are added in batches until all 100 are live. Star the GitHub repo to see new ones as they arrive.'],
        ['Can I use these templates for client projects?', 'Yes. The MIT license allows commercial use. A link back is welcome but not required.'],
    ];
    $schema = ['@context' => 'https://schema.org', '@graph' => [
        ['@type' => 'WebSite', '@id' => $B . '#site', 'url' => $B, 'name' => $SITE['name'], 'description' => $desc, 'inLanguage' => 'en',
         'publisher' => ['@type' => 'Person', 'name' => $SITE['author'], 'url' => $SITE['author_url']]],
        ['@type' => 'CollectionPage', 'url' => $B, 'name' => $title, 'description' => $desc, 'isPartOf' => ['@id' => $B . '#site'],
         'mainEntity' => ['@type' => 'ItemList', 'numberOfItems' => count($DESIGNS), 'itemListElement' => items_list($DESIGNS)]],
        faq_schema($faq)]];
    $sections = ''; $soon = '';
    foreach ($CATEGORIES as $c) {
        $cn = e($c['name']);
        if ($c['ready']) {
            $items = in_cat($c['slug']);
            $sections .= "<div class=\"cat\"><h2>{$c['num']}. $cn</h2><a href=\"{$c['slug']}/\">See all " . count($items) . " $cn designs</a></div><div class=\"grid\">"
                . implode('', array_map(fn($d) => tile($d, $c['slug'] . '/'), $items)) . '</div>';
        } else {
            $soon .= "<div><b>{$c['num']}. $cn</b>Coming soon</div>";
        }
    }
    $mmImgs = []; foreach ($CATEGORIES as $mc) { foreach ($DESIGNS as $md) if ($md['cat'] === $mc['slug']) { $mmImgs[] = durl($md) . 'preview.png'; break; } }
    $mmCats = array_values(array_filter($CATEGORIES, fn($mc) => count(array_filter($DESIGNS, fn($md) => $md['cat'] === $mc['slug'])) > 0));
    $mmNames = array_map(fn($mc) => $mc['name'] . ' designs', $mmCats);
    [$mmOpen, $mmClose] = mm_hero('CSS design templates', 'CSS', 'Design styles in the set', $mmNames, $mmImgs, 'Free CSS designs<br>with live demos', (string)count($DESIGNS), count($mmCats) . ' categories', 'Pick a style. Copy the CSS.');
    $body = "<main class=\"wrap\">" . $mmOpen . "
<h1>100 free CSS designs you can use today</h1>
<p class=\"lead\">" . (count($DESIGNS) >= 100 ? "All 100 designs are live. The UI styles" : count($DESIGNS) . " designs are live, with more added every week. The UI styles")." people are searching for right now, each built as a real page you can open and try. Glassmorphism, neumorphism, bento grids, neo brutalism, AI dashboards and more. Every design comes with a live demo, the key CSS to copy, and a single HTML file to download. No sign up, no framework, free for commercial use.</p>
<div class=\"actions\"><a class=\"btn main\" href=\"#categories\">Browse the designs</a><a class=\"btn\" href=\"{$SITE['repo']}/archive/refs/heads/main.zip\">Download everything (ZIP)</a><a class=\"btn\" href=\"{$SITE['repo']}\">Star on GitHub</a></div>" . $mmClose . "
<section id=\"categories\">$sections
" . ($soon ? "<h2 style=\"margin-top:30px\">More categories on the way</h2><div class=\"soon\">$soon</div>" : "") . "</section>
<section class=\"faq\"><h2>Questions people ask</h2>" . faq_html($faq) . "</section>
</main>
";
    out('index.html', head($title, $desc, $B, $img, 'free css templates, css designs, html templates free download, glassmorphism template, neumorphism template, ui design trends', $schema) . $body . MMHEROJS . foot());
}

function root_readme() {
    global $B, $CATEGORIES, $DESIGNS;
    $rows = implode("\n", array_map(fn($d) => sprintf('| %03d | [%s](%s) | %s | [Demo](%sdemo.html) | <img src="%s/%s/preview.png" width="260" alt="%s preview"> |',
        $d['num'], $d['name'], durl($d), $d['example'], durl($d), $d['cat'], $d['slug'], $d['name']), $DESIGNS));
    $cats = implode("\n", array_map(fn($c) => "- {$c['num']}. {$c['name']} (" . ($c['ready'] ? 'live' : 'coming soon') . ')', $CATEGORIES));
    out('README.md', "# 100 Free CSS Designs

Trending UI styles built as real pages, with a live demo and a single HTML file for each one. No framework, no build step, free for commercial use.

**Live gallery:** $B

![Preview of the first designs](01-soft-tactile-ui/001-glassmorphism/preview.png)

## All designs

| # | Design | Example | Live | Preview |
|---|---|---|---|---|
$rows

## Categories

$cats

## How to use a design

1. Open the design folder and download `demo.html`.
2. Change the text, colors and links.
3. Upload it anywhere: GitHub Pages, Netlify, Vercel or your own server.

## License

MIT. Use these designs in personal and commercial projects. A star on the repo helps more people find them.
");
}

function sitemap() {
    global $SITE, $B, $CATEGORIES, $DESIGNS;
    $urls = [$B];
    foreach ($CATEGORIES as $c) if ($c['ready']) $urls[] = $B . $c['slug'] . '/';
    foreach ($DESIGNS as $d) $urls[] = durl($d);
    $body = implode('', array_map(fn($u) => "<url><loc>$u</loc><lastmod>{$SITE['published']}</lastmod></url>", $urls));
    out('sitemap.xml', "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">$body</urlset>\n");
}

foreach ($CATEGORIES as $c) {
    if (!$c['ready']) continue;
    $sib = in_cat($c['slug']);
    foreach ($sib as $i => $d) design_page($d, $i, $sib);
    category_page($c);
}
home(); root_readme(); sitemap();
echo 'Built ' . count($DESIGNS) . " designs\n";
