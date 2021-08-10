<?php

namespace Flooris\ShopwareApiIntegration\Models;

use stdClass;

class MediaModel extends AbstractModel
{
    public string $id;
    private string $url;
    private ?string $fileName;
    private ?string $fileExtension;

    public function handleResponse(stdClass $response): void
    {
        $this->id            = $response->id;
        $this->url           = $response->url;
        $this->fileName      = $response->fileName;
        $this->fileExtension = $response->fileExtension;
    }
}
