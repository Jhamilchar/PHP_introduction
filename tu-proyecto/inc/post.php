<?php 

function get_all_posts() {
    return [
        [
            "id" => 1,
            "title" => "Lorem ipsum dolor sit amet",
            "excerpt" => "Lorem ipsum dolor sit amet,list of list 1243",
            "content" => "Lorem ipsum dolor sit amet,list of list 1243,list of list 182983",
            "pusblished_on" => "2018-01-2020",
        ],
        [
            "id" => 1,
            "title" => "Lorem ipsum dolor sit amet",
            "excerpt" => "Lorem ipsum dolor sit amet,list of list 1243",
            "content" => "Lorem ipsum dolor sit amet,list of list 1243,list of list 182983",
            "pusblished_on" => "2018-01-2020",
        ],
    ];

}

function get_post ($post_id) {
    foreach ( get_all_posts() as $post ) {
		if ( $post['id'] == $post_id ) {
			return $post;
		}
	}
}
