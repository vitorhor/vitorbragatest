@extends('layouts.admin.app')

@section("javascript")



@endsection

@section('content')

    <div class="card-header">{{ __('Configuration') }}</div>

    <div class="card-body">

        <form id="customForm" action="{{route("admin.configuration.update")}}" method="post" enctype="multipart/form-data" class="form-horizontal"
            onsubmit="return onSubmitForm();">

            {{ method_field('PATCH') }}

            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1"><b>Facebook Pixel:</b></label>
                <textarea rows="15" name="facebook_pixel" class="form-control" >{{ $entity->facebook_pixel }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"><b>Google Analytics:</b></label>
                <textarea rows="10" name="google_analytics" class="form-control" >{{ $entity->google_analytics }}</textarea>
            </div>

            <div class="form-group">
                <label><b>Mail Host:</b></label>
                <input type="text" name="mail_host" class="form-control" value="{{ $entity->mail_host }}" />
            </div>

            <div class="form-group">
                <label><b>Mail Port:</b></label>
                <input type="text" name="mail_port" class="form-control" value="{{ $entity->mail_port }}" />
            </div>

            <div class="form-group">
                <label><b>Mail Username:</b></label>
                <input type="text" name="mail_username" class="form-control" value="{{ $entity->mail_username }}" />
            </div>

            <div class="form-group">
                <label><b>Mail Password:</b></label>
                <input type="text" name="mail_password" class="form-control" value="{{ $entity->mail_password }}" />
            </div>

            <div class="form-group">
                <label><b>Mail From Address:</b></label>
                <input type="text" name="mail_from_address" class="form-control" value="{{ $entity->mail_from_address }}" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>

    </div>

@endsection
