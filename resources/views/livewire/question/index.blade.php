<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model.live="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('question_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Livewire/ExcelExport.php')))
                <livewire:excel-export model="Question" format="csv" />
                <livewire:excel-export model="Question" format="xlsx" />
                <livewire:excel-export model="Question" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.live.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.question.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.question.fields.course') }}
                            @include('components.table.sort', ['field' => 'course.title'])
                        </th>
                        <th>
                            {{ trans('cruds.question.fields.question_text') }}
                            @include('components.table.sort', ['field' => 'question_text'])
                        </th>
                        <th>
                            {{ trans('cruds.question.fields.question_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.question.fields.points') }}
                            @include('components.table.sort', ['field' => 'points'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($questions as $question)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $question->id }}" wire:model.live="selected">
                            </td>
                            <td>
                                {{ $question->id }}
                            </td>
                            <td>
                                @if($question->course)
                                    <span class="badge badge-relationship">{{ $question->course->title ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $question->question_text }}
                            </td>
                            <td>
                                @foreach($question->question_image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $question->points }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('question_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('questions.show', $question) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('question_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('questions.edit', $question) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('question_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $question->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $questions->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush
