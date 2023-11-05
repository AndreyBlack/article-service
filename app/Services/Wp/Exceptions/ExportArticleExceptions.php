<?php

namespace App\Services\Wp\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class ExportArticleExceptions extends Exception
{
    public function report()
    {
        Log::channel('export-article')->error($this->getMessage(), ['exception' => $this]);
    }
}
