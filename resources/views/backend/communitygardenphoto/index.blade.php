@extends('backend.layouts.app')

@section('title', 'Community Garden Photos')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Community Garden Photos</header>
                    <div class="tools">
                     <a class="btn btn-primary ink-reaction" href="{{ route('communitygardenphoto.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="my-table">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="30%">Title</th>
                            <th width="10%">Published</th>
                            <th width="20%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($communitygardenphoto->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.communitygardenphoto.partials.table', $communitygardenphoto, 'communitygardenphoto')
                        @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
