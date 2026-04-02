<?php
namespace Collect;

require_once 'vendor/autoload.php';

$records =
    [
        'id' => 2135,
        'first_name' => 'Joe',
        'last_name' => 'Biden',
    ];
var_dump(collection($records)->toArray());
