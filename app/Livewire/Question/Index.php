<?php

namespace App\Livewire\Question;

use App\Livewire\WithConfirmation;
use App\Livewire\WithSorting;
use App\Models\Question;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithSorting, WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new Question())->orderable;
    }

    public function render()
    {
        $query = Question::with(['course'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $questions = $query->paginate($this->perPage);

        return view('livewire.question.index', compact('query', 'questions'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('question_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Question::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Question $question)
    {
        abort_if(Gate::denies('question_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $question->delete();
    }
}
