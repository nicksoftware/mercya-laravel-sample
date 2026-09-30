# Laravel on Mercya

A minimal Laravel app deployed to AWS Lambda by [Mercya](https://github.com/nicksoftware/Mercya)'s
Laravel buildpack, which runs PHP on Lambda via [Bref](https://bref.sh).

The only thing this app does differently from `laravel new` is the one
requirement Mercya's buildpack enforces:

```bash
composer require bref/bref bref/laravel-bridge --update-with-dependencies
```

`bref/laravel-bridge` repoints Laravel's storage path at `/tmp` (the rest of
the Lambda filesystem is read-only) and adapts the FPM request lifecycle.

`/` renders the runtime facts; `/health` returns the same as JSON.

`APP_KEY` must be set as an environment variable on the Mercya environment —
the build refuses to continue without one rather than generating a key that
would rotate on every deploy.
