@extends('layouts.admin.app')

@section("javascript")

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>

        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [{ 'align': [] }],
            ['clean']                                         // remove formatting button
        ];

        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });

        var currentDescription = document.getElementById("description").value;
        quill.root.innerHTML = currentDescription;

        var onSubmitForm = function(){

            var description = quill.root.innerHTML;
            document.getElementById("description").value = description;

            document.getElementById("customForm").submit();

            return false;

        }
    </script>

@endsection

@section('content')

    <div class="card-header">{{ __('Content') }}</div>

    <div class="card-body">

        <form id="customForm" action="{{route("admin.content.update", $id)}}" method="post" enctype="multipart/form-data" class="form-horizontal"
            onsubmit="return onSubmitForm();">

            {{ method_field('PATCH') }}

            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1"><b>Name:</b></label>
                <input type="text" class="form-control" value="{{ $entity->page_name }}" disabled />
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"><b>Top Title:</b></label>
                <input type="text" name="top_title" id="top_title" class="form-control" value="{{ $entity->top_title }}" />
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"><b>Meta Title:</b></label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $entity->meta_title }}" />
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"><b>Meta Description:</b></label>
                <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ $entity->meta_description }}" />
            </div>

            <div class="form-group">

                <label for="top_image"><b>Top Image:</b></label>

                <div class="col-12 col-md-9">

                    @if(!empty($imageUrl))
                        <img src="{{$imageUrl}}" style="height: 150px; width: auto;" /><br /><br />
                    @endif

                    <input type="file" id="top_image" name="top_image" />

                </div>

            </div>

            <div class="form-group">
                <label><b>Description:</b></label>
                <div id="editor"></div>
                <input type="hidden" name="description" id="description" value="{{old("description", $entity->description)}}" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>

    </div>

@endsection
