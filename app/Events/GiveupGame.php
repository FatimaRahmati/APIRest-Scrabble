<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class GiveupGame implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $gameId;
    private $oppoId;
    public $state;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($gameId, $oppoId, $state)
    {
        $this->gameId = $gameId;
        $this->oppoId = $oppoId;
        $this->state = $state;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn() {
        return new PrivateChannel('game.'.$this->gameId.'.user.'.$this->oppoId);
    }

    public function broadcastAs()
    {
        return 'GiveupGame';
    }
}
