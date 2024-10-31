<?php

namespace App\Livewire\FaqCategory;

use App\Models\FaqCategory;
use Livewire\Component;

class Edit extends Component
{
    public FaqCategory $faqCategory;

    public function mount(FaqCategory $faqCategory)
    {
        $this->faqCategory = $faqCategory;
    }

    public function render()
    {
        return view('livewire.faq-category.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->faqCategory->save();

        return redirect()->route('faq-categories.index');
    }

    protected function rules(): array
    {
        return [
            'faqCategory.category' => [
                'string',
                'required',
            ],
        ];
    }
}
