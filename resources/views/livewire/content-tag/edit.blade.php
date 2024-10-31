<form wire:submit="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contentTag.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.contentTag.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model="contentTag.name">
        <div class="validation-message">
            {{ $errors->first('contentTag.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contentTag.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contentTag.slug') ? 'invalid' : '' }}">
        <label class="form-label" for="slug">{{ trans('cruds.contentTag.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" wire:model="contentTag.slug">
        <div class="validation-message">
            {{ $errors->first('contentTag.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contentTag.fields.slug_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('content-tags.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
