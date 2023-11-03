<?php

namespace App\Resource;

use Illuminate\Http\Request;

class ArticleDetailResource extends ArticleResource
{
    /**
     * @param Request $request
     */
    public function toArray($request): array
    {
        return parent::toArray($request) + [
                'content' => $this->resource->content
            ];
    }
}
