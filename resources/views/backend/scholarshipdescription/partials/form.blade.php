<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-head">

                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body tab-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('title',old('title'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('title','Scholarship Title*') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('meta_description',old('meta_description'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('meta_description','Scholarship short description*') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::textarea('content',old('content'),['class'=>'my-ckeditor','required', 'id' => 'my-ckeditor']) }}
                            <br>
                            {{ Form::label('Content','Content')}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('scholarshipdescription.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($scholarshipdescription) && $scholarshipdescription->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
{{--<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>--}}
{{--<script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>--}}
{{--<script>--}}
    {{--CKEDITOR.replace( 'my-ckeditor' );--}}
{{--</script>--}}
@endpush
