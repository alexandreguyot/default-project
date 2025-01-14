@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.productTag.title_singular') }}:
                    {{ trans('cruds.productTag.fields.id') }}
                    {{ $productTag->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.productTag.fields.id') }}
                            </th>
                            <td>
                                {{ $productTag->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.productTag.fields.name') }}
                            </th>
                            <td>
                                {{ $productTag->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('product_tag_edit')
                    <a href="{{ route('product-tags.edit', $productTag) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('product-tags.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
