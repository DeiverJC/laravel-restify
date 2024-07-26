<?php

namespace App\Restify;

use App\Models\Post;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class PostRepository extends Repository
{
    public static string $model = Post::class;

    public function fields(RestifyRequest $request): array
    {
        return [
            field('title')->rules('required'),
            field('content')->rules('required'),
        ];
    }

    public function destroy(RestifyRequest $request, $repositoryId)
    {
        //
    }
}
