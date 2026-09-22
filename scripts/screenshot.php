<?php
/**
 * Saves preview.png (1280x800) for every demo.html using headless Chrome.
 * Run from the repo root:  php scripts/screenshot.php
 * Set CHROME=/path/to/chrome if Chrome is not on your PATH.
 */
$root = dirname(__DIR__);
$chrome = getenv('CHROME') ?: trim(shell_exec('command -v google-chrome || command -v chromium || command -v chromium-browser'));
if (!$chrome) { fwrite(STDERR, "Chrome not found. Install Chrome or set CHROME.\n"); exit(1); }

foreach (glob("$root/*/*/demo.html") as $demo) {
    $png = dirname($demo) . '/preview.png';
    $cmd = sprintf('%s --headless=new --no-sandbox --disable-gpu --hide-scrollbars --window-size=1280,800 --virtual-time-budget=3000 --screenshot=%s %s 2>/dev/null',
        escapeshellarg($chrome), escapeshellarg($png), escapeshellarg('file://' . $demo));
    exec($cmd, $o, $rc);
    echo ($rc === 0 ? 'saved ' : 'FAILED ') . str_replace("$root/", '', $png) . "\n";
}
