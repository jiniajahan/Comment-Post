<?php
namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostService
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }
    

    public function index($request)
    {
        $per_page = $request->has('per_page') ? $request->input('per_page') : 10;
        return $this->repository->index($request->all(), $per_page);
    }

}
