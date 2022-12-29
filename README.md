## Installation
`composer require nanuc/laravel-lexoffice`

Add the following to your `config/services.php` and add the values to your `.env`:
```
'lexoffice' => [
    'endpoint' => env('LEXOFFICE_ENDPOINT', 'https://api.lexoffice.io/v1'),
    'token' => env('LEXOFFICE_TOKEN'),
],
```

