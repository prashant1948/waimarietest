@extends('backend.layouts.app')

@section('title', 'Scholarship Photos')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Scholarship Photos</header>
                    <div class="tools">
                     <a class="btn btn-primary ink-reaction" href="{{ route('scholarshiplist.create') }}">
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
                            <th width="30%">Scholarship Type</th>
                            <th width="10%">Published</th>
                            <th width="20%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($scholarshiplist->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.scholarshiplist.partials.table', $scholarshiplist, 'scholarshiplist')
                        @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
