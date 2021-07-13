<?php

namespace App\Http\Livewire;

use App\Models\Feature;
use Livewire\Component;

class VotingFeature extends Component
{
    public $selectedFeatureId;

    public Feature $feature;

    public $ratings = [
        '?',1,2,3,5,8,10,13,21,40,100
    ];

    public $participants = [
        ['name'=> 'Giovane'],
        ['name'=>'John'],
    ];

    public function mount($selectedFeatureId)
    {
        $this->feature = Feature::findOrFail($selectedFeatureId);
    }

    public function render()
    {
        return view('livewire.voting-feature');
    }

    public function getParticipantsProperty()
    {
        return $this->feature->room->participants;
    }
}
