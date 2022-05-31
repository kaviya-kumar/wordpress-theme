<?php
require get_template_directory() . '/includes/abcd.php';
/* Custom Post Type Start */
function create_posttype()
{
    register_post_type(
        'book',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('book'),
                'singular_name' => __('book')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'book'),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
/* Custom Post Type End */

function my_first_taxonomy()
{

    $args = array(

        'labels' => array(
            'name' => 'Book Categories',

        ),

        'public' => true,
        'hierarchical' => true,

    );

    register_taxonomy('Book Categories', array('book'), $args);
    $args = array(

        'labels' => array(
            'name' => 'Book Tags',

        ),

        'public' => true,
        'hierarchical' => true,

    );

    register_taxonomy('Book Tags', array('book'), $args);
}
add_action('init', 'my_first_taxonomy');





// function create_user_story_tax() {

//     /* Create Genre Taxonomy */
//     $args = array(
//         'label' => __( 'Genre' ),
//         'rewrite' => array( 'slug' => 'genre' ),
//         'hierarchical' => true,
//     )

//     register_taxonomy( 'genre', 'user-story', $args );
    
//     /* Create Story Type Taxonomy */
//     $args = array(
//             'label' => __( 'Story Type' ),
//             'rewrite' => array( 'slug' => 'story-type' ),
//             'hierarchical' => true,
//         )

//     register_taxonomy( 'story-type', 'user-story', $args );
    
// }


// add_action( 'init', 'create_user_story_tax' );

//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
// Now register the taxonomy
