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
      
    }

}
