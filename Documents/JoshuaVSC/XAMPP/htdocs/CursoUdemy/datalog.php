<?php

$file = fopen("datalog.txt", "w+");

fwrite($file, date("y-m-d H:i:s"));

$>