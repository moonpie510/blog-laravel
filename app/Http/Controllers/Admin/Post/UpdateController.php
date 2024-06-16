<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);
        return view('admin.post.show', compact('post'));
    }
}
