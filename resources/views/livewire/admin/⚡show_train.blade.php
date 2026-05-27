<?php

use App\Models\Train;
use Livewire\Component;

new class extends Component {

    public Train $trains;

    public int $count_player = 0;


    public function mount($id): void
    {
        $this->trains = Train::findOrFail($id);

        $this->trains->players()->get();

        $this->countPresentPlayers();

    }

    public function countPresentPlayers(): void
    {
        foreach ($this->trains->players as $player)
            if ($player->pivot->status === 'present') {
                $this->count_player++;
            }
    }
};
?>

<div>
    <div class="text-white text-2xl mb-8">Joueur présent a l'entrainement
        du {{\Carbon\Carbon::parse($trains->date_train)->locale('fr')->translatedFormat('d F')}}</div>
    <div class="bg-[#23294A] border border-violet-500/30 rounded-2xl px-8 py-4 shadow-lg">
        <div class="text-center">
            <p class="text-violet-300 text-lg font-medium uppercase tracking-wider">
                Nombre de joueurs présents
            </p>

            <span class="text-white text-5xl font-bold">
                            {{ $this->count_player }}
                        </span>
        </div>
    </div>
    <livewire:admin.team :playersWithStatus="$this->trains->players"></livewire:admin.team>

</div>
