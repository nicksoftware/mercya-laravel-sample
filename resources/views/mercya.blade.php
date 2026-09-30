<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel on Mercya</title>
  <style>
    :root { color-scheme: dark; }
    body {
      margin: 0; min-height: 100vh; display: grid; place-items: center;
      background: #09090b; color: #fafafa;
      font-family: ui-sans-serif, system-ui, -apple-system, sans-serif;
    }
    main { text-align: center; padding: 2rem; }
    h1 { font-size: 2rem; margin: 0 0 .5rem; letter-spacing: -0.02em; }
    p.lede { color: #a1a1aa; margin: 0 0 2rem; }
    dl {
      display: grid; grid-template-columns: auto auto; gap: .5rem 1.5rem;
      margin: 0 auto; width: max-content; text-align: left;
      font-family: ui-monospace, "Geist Mono", monospace; font-size: .85rem;
    }
    dt { color: #71717a; }
    dd { margin: 0; color: #fafafa; }
    .ok { color: #9ae600; }
  </style>
</head>
<body>
  <main>
    <h1>Laravel on Mercya</h1>
    <p class="lede">Running on AWS Lambda via Bref, behind CloudFront.</p>
    <dl>
      <dt>laravel</dt><dd>{{ $laravel }}</dd>
      <dt>php</dt><dd>{{ $php }}</dd>
      <dt>bref runtime</dt><dd class="ok">{{ $brefRuntime }}</dd>
      <dt>mercya domain</dt><dd>{{ $domain }}</dd>
    </dl>
  </main>
</body>
</html>
