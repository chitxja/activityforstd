<?php

logout();
$result = getActivity();


renderView('home_get',[
    'activity' => $result]);
