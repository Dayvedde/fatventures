<?php

$players = DB::select('select * from player');
var_dump($players);
