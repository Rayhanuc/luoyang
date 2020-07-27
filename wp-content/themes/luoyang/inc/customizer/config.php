<?php

use HasinHayder\WPHelper\Modules\KirkiBuilder;

if(!class_exists('Kirki')) {
    return;
}

KirkiBuilder::initialize('luoyang_options');
KirkiBuilder::add_panel('luoyang_panel','Luoyang');
KirkiBuilder::add_section('luoyang_general','luoyang_panel','General Settings');
KirkiBuilder::add_simple_repeater(
    'luoyang_services',
    'luoyang_general',
    'Services',
    'Service',
    'Add Service',
    [
        ['id'=>'heading','type'=>'text','label'=>'Service Name'],
        ['id'=>'icon','type'=>'text','label'=>'Service Icon'],
        ['id'=>'description','type'=>'textarea','label'=>'Service Description'],
    ],
    3
);