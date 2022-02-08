<?php

function getCourse()
{
    $result = App\Models\course::all();
    return $result;
}
