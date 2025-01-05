<?php

namespace App\Actions;

use App\Models\User;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UploadHelper
{
    public function store($location,$file)
    {
        $path = $file->store($location, ['disk' => "public"]);
       
        return url('/').'/storage/' . $path;
    }
    public function storePrivate($file)
    {
        $path = $file->store('docs');
       
        return url('/').'/web/' . $path;
    }
}
