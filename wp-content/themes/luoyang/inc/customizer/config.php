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


KirkiBuilder::add_section('luoyang_social','luoyang_panel','Social Links');
KirkiBuilder::add_simple_field('text','social_heading','luoyang_social','Heading');
KirkiBuilder::add_simple_repeater(
    'luoyang_socials',
    'luoyang_social',
    'Social Links',
    'Social Link',
    'Add Links',
    [
        ['id'=>'label','type'=>'text','label'=>'Label'],
        ['id'=>'url','type'=>'text','label'=>'Url'],
    ],
    4
);

// About page custom field
KirkiBuilder::add_section('luoyang_about','luoyang_panel','About Us','',20,function(){
    return is_page_template('page-templates/about-us.php');
});
KirkiBuilder::add_simple_field('text','luoyang_sub_heading_1','luoyang_about','Sub Heading 1');

