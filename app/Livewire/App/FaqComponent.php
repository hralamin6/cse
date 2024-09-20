<?php

namespace App\Livewire\App;

use App\Models\Faq;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class FaqComponent extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $selectedRows = [];
    public $selectPageRows = false;
    public $itemPerPage = 20;
    public $orderBy = 'id';
    public $searchBy = 'question';
    public $orderDirection = 'asc';
    public $search = '';
    public $itemStatus;
    protected $queryString = [
        'search' => ['except' => ''],
        'itemStatus' => ['except' => null],
    ];

    public $faq;
    public $question, $answer,  $status = 'active';
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedItemPerPage()
    {
        $this->resetPage();
    }

    public function updatedSelectPageRows($value)
    {
        if ($value) {
            $this->selectedRows = $this->data->pluck('id')->map(function ($id) {
                return (string)$id;
            });
        } else {
            $this->reset('selectedRows', 'selectPageRows');
        }
    }

    public function resetData()
    {
        $this->reset('question', 'answer', 'status');
    }

    public function saveData()
    {
        $this->authorize('app.faqs.create');

        $data = $this->validate([
            'question' => 'required|string|max:255',
            'answer' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $data = Faq::create($data);
        $var = $data->id;
        $this->dispatch('dataAdded', dataId: "item-id-$var");
        $this->goToPage($this->getDataProperty()->lastPage());
        $this->alert('success', __('Data saved successfully!'));
        $this->resetData();
    }

    public function loadData(Faq $faq)
    {
        $this->resetData();
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->status = $faq->status;
        $this->faq = $faq;
    }

    public function editData()
    {
        $this->authorize('app.faqs.edit');

        $data = $this->validate([
            'question' => 'required|string|max:255',
            'answer' => 'nullable|string',
            'status' => 'required|in:active,inactive'
        ]);

        $this->faq->update($data);
        $var = $this->faq->id;
        $this->dispatch('dataAdded', dataId: "item-id-$var");
        $this->alert('success', __('Data updated successfully!'));
        $this->resetData();
    }

    public function deleteSingle(Faq $faq)
    {
        $this->authorize('app.faqs.delete');

        $faq->delete();
        $this->alert('success', __('Data deleted successfully!'));
    }
    public function orderByDirection($field)
    {
        if ($this->orderBy == $field){

            $this->orderDirection==='asc'? $this->orderDirection='desc': $this->orderDirection='asc';
        }else{
            $this->orderBy = $field;
            $this->orderDirection==='asc';

        }
    }
    public function deleteMultiple()
    {
        $this->authorize('app.faqs.delete');

        Faq::whereIn('id', $this->selectedRows)->delete();
        $this->selectedRows = [];
        $this->alert('success', __('Data deleted successfully!'));
    }

    public function getDataProperty()
    {
        return Faq::where($this->searchBy, 'like', '%' . $this->search . '%')
            ->orderBy($this->orderBy, $this->orderDirection)->when($this->itemStatus, function ($query) {
                return $query->where('status', $this->itemStatus);
            })
            ->paginate($this->itemPerPage)->withQueryString();
    }
    public function changeStatus(Faq $faq)
    {
        $this->authorize('app.faqs.edit');

        $this->authorize('app.faqs.edit');

        $faq->status=='inactive'?$faq->update(['status'=>'active']):$faq->update(['status'=>'inactive']);
//        $page->notify(new PageApproved($page->question, $page->status, $page));

        $this->alert('success', __('Data updated successfully'));
    }
    public function render()
    {
        $this->authorize('app.faqs.index');

        $faqs = $this->data;

        return view('livewire.app.faq-component', compact('faqs'));
    }
}
