@extends('laramanager::layouts.default')

@section('title')
    {{ $title or 'Edit' }}
@endsection

@section('content')

    <form action="{{ route('admin.' . $resource . '.update', $entity->id) }}" enctype="multipart/form-data" method="POST" class="uk-form uk-form-stacked">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        @foreach($fields as $field)

            @include('laramanager::fields.' . $field['type'] . '.field', ['field' => array_merge($field, ['value' => $entity->{$field['name']}])])

        @endforeach

        <div class="uk-form-row">
            <div class="uk-width-1-6">
                @include('laraform::elements.form.submit', ['value' => 'Update'])
            </div>
        </div>

    </form>

    @include('laramanager::browser.modals.single')

    @include('laramanager::browser.modals.multiple')

@endsection

@section('scripts')

    @if($hasWysiwyg)
        <script src="{{ asset('vendor/laramanager/js/ckeditor/ckeditor.js') }}"></script>
    @endif

    @foreach($fields as $field)

        @if(view()->exists('laramanager::fields.' . $field['type'] . '/scripts'))
            @include('laramanager::fields.' . $field['type'] . '/scripts', $field)
        @endif

    @endforeach

    @include('laramanager::browser.scripts')

@endsection