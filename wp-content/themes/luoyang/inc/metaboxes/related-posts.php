<?php

use HasinHayder\WPHelper\Modules\Metabox;
use HasinHayder\WPHelper\Modules\Posts;


$_posts = Posts::get_latest_posts(-1,'desc',[],WPHELPER_POSTS_FETCH_ID_AND_TITLE);
Metabox::display_metabox('Similars Posts','',['post'],[
    ['id'=>'spost1','type'=>'select','title'=>'Similar Post 1','choices'=>$_posts],
    ['id'=>'spost2','type'=>'select','title'=>'Similar Post 2','choices'=>$_posts],
    ['id'=>'spost3','type'=>'select','title'=>'Similar Post 3','choices'=>$_posts],
],'','side');