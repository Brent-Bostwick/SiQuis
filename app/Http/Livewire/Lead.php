<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead as Leader;

class Lead extends Component
{
    public $company = '';
    public $name = '';
    public $email = '';

    public function submitLead()
    {
        $this->validate([
            'name' => ['required', 'string'],
            'company' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:leads,email']
        ]);

        $lead = Leader::create([
            'email' => $this->email,
            'name' => $this->name,
            'company' => $this->company
        ]);

        if ($lead) {
            $this->company = '';
            $this->name = '';
            $this->email = '';
        }
    }
    public function render()
    {
        return view('livewire.lead');
    }
}
