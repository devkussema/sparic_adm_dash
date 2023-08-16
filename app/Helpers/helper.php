<?php

use Illuminate\Support\Carbon;

function timeAgo($dateTime)
{
    return Carbon::parse($dateTime)->diffForHumans();
}
