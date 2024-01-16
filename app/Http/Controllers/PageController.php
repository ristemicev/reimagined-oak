<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug, PageRepository $pageRepository) {

        $page = $pageRepository->forNestedSlug($slug);

        abort_unless($page, 404);

        return view('pages.page', ['page' => $page]);
    }
}
