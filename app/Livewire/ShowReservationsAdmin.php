<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservation;

class ShowReservationsAdmin extends Component
{
    public $sala;
    public $user;
    public $estado;

    protected $listeners = ['searchTerms' => 'search'];

    public function search($sala, $user, $estado)
    {
        $this->sala = $sala;
        $this->user = $user;
        $this->estado = $estado;
    }

    public function render()
    {
        $solicitudes = Reservation::where('sala_id', 'like', '%' . $this->sala . '%')
            ->where('user_id', 'like', '%' . $this->user . '%')
            ->where('estado_id', 'like', '%' . $this->estado . '%')
            ->get();

        return view('livewire.show-reservations-admin', [
            'solicitudes' => $solicitudes,
        ]);
    }
}
