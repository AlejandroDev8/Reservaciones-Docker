<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservation;

class ShowReservations extends Component
{
    protected $listeners = ['deleteReservation'];

    public function deleteReservation(Reservation $reservation)
    {
        $reservation->delete();
    }

    public function render()
    {
        $solicitudes = Reservation::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.show-reservations', [
            'solicitudes' => $solicitudes,
        ]);
    }
}
