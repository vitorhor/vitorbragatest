<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $entities = PageContent::all();
        return view('admin.content.dashboard', compact("entities"));
    }

    public function showForm(Request $request, PageContent $pageContent)
    {
        $id = $pageContent->id;
        $entity = $pageContent;

        $imageUrl = $entity->top_image ? url('/') . "/uploads/" . $entity->top_image : '';

        return view('admin.content.edit', compact("entity", "id", "imageUrl"));
    }

    public function update(Request $request, PageContent $pageContent)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        }

        $pageContent->top_title = $request->post("top_title");
        $pageContent->meta_title = $request->post("meta_title");
        $pageContent->meta_description = $request->post("meta_description");
        $pageContent->description = $request->post("description");

        if( $request->file("top_image") != null ){
            $pageContent->top_image = $request->file("top_image")->store('', ['disk' => 'public_uploads']);
        }

        $pageContent->save();

        return redirect()->route("admin.dashboard")->with('message', "Saved successfully");
    }

    protected function validator(array $data)
    {
        $attributeNames = array(
            'description' => "Description",
            'top_image' => "Top Image",
        );

        $validator = Validator::make($data, [
            'description' => 'string',
            'top_image' => "image"
        ]);

        $validator->setAttributeNames($attributeNames);

        return $validator;
    }
}
