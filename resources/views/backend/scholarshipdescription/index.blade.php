@extends('backend.layouts.app')

@section('title', 'Scholarship Description')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Scholarship Description Contents</header>
                    <div class="tools">
                     <a class="btn btn-primary ink-reaction" href="{{ route('scholarshipdescription.create') }}">
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
                            <th width="15%">Scholarship Title</th>
                            <th width="25%">Scholarship Short Description</th>
                            <th width="35%">Content</th>
                            <th width="10%">Published</th>
                            <th width="20%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($scholarshipdescription->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.scholarshipdescription.partials.table', $scholarshipdescription, 'scholarshipdescription')
                        @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
