@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.testResult.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('test_result_create')
                    <a class="btn btn-indigo" href="{{ route('test-results.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.testResult.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('test-result.index')

    </div>
</div>
@endsection
