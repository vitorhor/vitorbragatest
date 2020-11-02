@extends('layouts.admin.app')

@section('content')

    <div class="card-header">{{ __('Page Content') }}</div>

    <div class="card-body">

        <table class="table table-data2">

            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>

            @forelse ( $entities as $entity)

                <tr class="tr-shadow">
                    <td>{{ucfirst($entity->page_name)}}</td>
                    <td><a href="{{route("admin.content.edit", $entity->id)}}">Edit</a></td>
                </tr>

            @empty

                <tr>
                    <td colspan="2">
                        There's no registered page content.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

@endsection
