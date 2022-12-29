<?php

namespace Nanuc\LaravelLexoffice\Endpoints;

use Illuminate\Support\Facades\Http;
use Nanuc\LaravelLexoffice\DataObjects\DocumentFile;

class Files extends Endpoint
{
    public function downloadFile(DocumentFile $file)
    {
        return $this->get('files/' . $file->documentFileId);
    }

    protected function get($url)
    {
        return $this->getClient()
            ->get($url)
            ->body();
    }

    private function getClient()
    {
        return Http::baseUrl(config('services.lexoffice.endpoint'))
            ->withToken(config('services.lexoffice.token'));
    }
}
