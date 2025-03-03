<?php


$result = getActivity();


renderView('home_get',[
    'activity' => $result]);
