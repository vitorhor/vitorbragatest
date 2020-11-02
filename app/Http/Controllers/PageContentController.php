<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use http\Url;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function find(Request $request, $pageName)
    {
        $pageContent = PageContent::where("page_name", $pageName)->first();
        $pageContent->imageFullUrl = url("uploads/" . $pageContent->top_image);
        return response()->json($pageContent);
    }
}
