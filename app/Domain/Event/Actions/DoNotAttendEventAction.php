<?php

namespace App\Domain\Event\Actions;

use App\Domain\Event\Models\Attendee;
use App\Domain\Event\Models\Event;
use App\Domain\User\Models\User;

class DoNotAttendEventAction
{
    public function execute(User $user, Event $event)
    {
        Attendee::query()
            ->where('user_id', $user->id)
            ->where('event_id', $event->id)
            ->delete();

        activity()
            ->performedOn($event)
            ->log("{$user->email} will not attend {$event->name}");
    }
}
