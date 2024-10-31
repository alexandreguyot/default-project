<?php

namespace App\Livewire\CrmStatus;

use App\Models\CrmStatus;
use Livewire\Component;

class Create extends Component
{
    public CrmStatus $crmStatus;

    public function mount(CrmStatus $crmStatus)
    {
        $this->crmStatus = $crmStatus;
    }

    public function render()
    {
        return view('livewire.crm-status.create');
    }

    public function submit()
    {
        $this->validate();

        $this->crmStatus->save();

        return redirect()->route('crm-statuses.index');
    }

    protected function rules(): array
    {
        return [
            'crmStatus.name' => [
                'string',
                'required',
            ],
        ];
    }
}
