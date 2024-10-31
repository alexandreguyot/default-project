<?php

namespace App\Livewire\TaskStatus;

use App\Models\TaskStatus;
use Livewire\Component;

class Create extends Component
{
    public TaskStatus $taskStatus;

    public function mount(TaskStatus $taskStatus)
    {
        $this->taskStatus = $taskStatus;
    }

    public function render()
    {
        return view('livewire.task-status.create');
    }

    public function submit()
    {
        $this->validate();

        $this->taskStatus->save();

        return redirect()->route('task-statuses.index');
    }

    protected function rules(): array
    {
        return [
            'taskStatus.name' => [
                'string',
                'required',
            ],
        ];
    }
}
