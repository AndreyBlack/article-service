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
                'noindex' => $this->resource->noindex,
                'product_ids' => $this->getProductIdLists(),
                'content' => $this->resource->content,
                'author' => new AuthorResource($this->resource->author),
                'meta' => new SeoResource($this->resource->seo)
            ];
    }

    public function getProductIdLists(): array
    {
        return array_map(static fn ($item) => $item['product_ids'], $this->resource->product_ids);
    }
}
