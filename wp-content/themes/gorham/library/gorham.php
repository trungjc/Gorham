<?php
/**
 * 1. html_tag_schema
 * 2. gorham_comment_form
 * 3. gorham_comment
 * 4. gorham_attached_image
 * 5. gorham_wp_title
 * 6. gorham_paginate
 * 7. gorham_paginate_loop
 * 8. gorham_password_form
 * 9. gorham_post_nav
 * 10. gorham_truncate_text
 */


/**
 * 1. html_tag_schema
 * Schema for HTML, used in header.php
 * Used in header.php
 */
if ( ! ( function_exists( 'html_tag_schema' ) ) ):

function html_tag_schema() {
    $schema = 'http://schema.org/';

    // Is single post
    if(is_single()) {
        $type = "Article";
    }

    if(is_home()) {
        $type = "BlogPage";
    }

    // Is author page
    elseif( is_author() ) {
        $type = 'ProfilePage';
    }

    // Is search results page
    elseif( is_search() ) {
        $type = 'SearchResultsPage';
    }

    else {
        $type = 'WebPage';
    }

    echo 'itemscope="itemscope" itemtype="' . $schema . $type . '"';
}

endif; // end html_tag_schema


/**
 * 2. gorham_comment_form
 * Customized Comment Form
 */
if ( ! function_exists( 'gorham_comment_form' ) ) :

function gorham_comment_form($args) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $args['fields'] = array(
        'author' => '
            <div class="comment-form-author form-group">
                <input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ( $req ? " aria-required='true'" : '' ) . ' placeholder="' . __( 'Your Name', 'gorham' ) . ( $req ? '*' : '' ) . '" />
            </div>
        ',

        'email' => '
            <div class="comment-form-email form-group">
                <input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .    '" size="30"' . ( $req ? " aria-required='true'" : '' ) . ' placeholder="' . __( 'Your Email', 'gorham' ) . ( $req ? '*' : '' ) . '" />
            </div>
        ',

        'url' => '
            <div class="comment-form-url last form-group">
                <input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="' . __( 'Your Website', 'gorham' ) . '" />
            </div>
        '
    );
    $args['comment_notes_before'] = "";
    $args['comment_notes_after'] = '';
    $args['label_submit'] = "Submit";
    $args['comment_field'] = '
        <div class="comment-form-comment form-group">
            <textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true" placeholder="'. __( 'Your Comment Here ...', 'gorham' ) .'"></textarea>
        </div>
    ';
    return $args;
}
add_filter('comment_form_defaults', 'gorham_comment_form');

endif; // end gorham_comment_form


/**
 * 3. gorham_comment
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
if ( ! function_exists( 'gorham_comment' ) ) :

function gorham_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;

  if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

  <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'media' ); ?>>
    <div class="comment-body">
      <?php _e( 'Pingback:', 'gorham' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'gorham' ), '<span class="edit-link"><span" class="glyphicon glyphicon-edit"></span>', '</span>' ); ?>
    </div>

  <?php else : ?>

  <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
    <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media" itemscope="itemscope" itemtype="http://schema.org/UserComments">
      <div class="comment-author vcard">
        <a href="#" itemprop="image">
          <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </a>
      </div>

      <div class="media-body">
        <div class="media-body-wrap panel panel-default">

          <div class="panel-heading">
            <h5 class="media-heading" itemprop="name"><?php printf( __( '%s <span class="says">says:</span>', 'gorham' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></h5>
            <div class="comment-meta">
              <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                <time datetime="<?php comment_time( 'c' ); ?>" itemprop="commentTime">
                  <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'gorham' ), get_comment_date(), get_comment_time() ); ?>
                </time>
              </a>
              <?php edit_comment_link( __( 'Edit', 'gorham' ), '<span class="edit-link"><span" class="glyphicon glyphicon-edit"></span>', '</span>' ); ?>
            </div>
          </div>

          <?php if ( '0' == $comment->comment_approved ) : ?>
            <div class="alert alert-info">
              <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'gorham' ); ?></p>
            </div>
          <?php endif; ?>

          <div class="comment-content panel-body" itemprop="commentText">
            <?php comment_text(); ?>
          </div><!-- .comment-content -->

          <?php comment_reply_link(
            array_merge(
              $args, array(
                'add_below' => 'div-comment',
                'depth'   => $depth,
                'max_depth' => $args['max_depth'],
                'before'  => '<footer class="reply comment-reply panel-footer">',
                'after'   => '</footer><!-- .reply -->'
              )
            )
          ); ?>

        </div>
      </div><!-- .media-body -->

    </article><!-- .comment-body -->

  <?php
  endif;
}

endif; // end gorham_comment()


/**
 * 4. gorham_attached_image
 * Prints the attached image with a link to the next attached image.
 * Used in image.php
 */
if ( ! function_exists( 'gorham_attached_image' ) ) :

function gorham_attached_image() {
  $post                = get_post();
  $attachment_size     = apply_filters( 'gorham_attachment_size', array( 1200, 1200 ) );
  $next_attachment_url = wp_get_attachment_url();

  /**
   * Grab the IDs of all the image attachments in a gallery so we can get the
   * URL of the next adjacent image in a gallery, or the first image (if
   * we're looking at the last image in a gallery), or, in a gallery of one,
   * just the link to that image file.
   */
  $attachment_ids = get_posts( array(
    'post_parent'    => $post->post_parent,
    'fields'         => 'ids',
    'numberposts'    => -1,
    'post_status'    => 'inherit',
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'order'          => 'ASC',
    'orderby'        => 'menu_order ID'
  ) );

  // If there is more than 1 attachment in a gallery...
  if ( count( $attachment_ids ) > 1 ) {
    foreach ( $attachment_ids as $attachment_id ) {
      if ( $attachment_id == $post->ID ) {
        $next_id = current( $attachment_ids );
        break;
      }
    }

    // get the URL of the next image attachment...
    if ( $next_id )
      $next_attachment_url = get_attachment_link( $next_id );

    // or get the URL of the first image attachment.
    else
      $next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
  }

  printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
    esc_url( $next_attachment_url ),
    the_title_attribute( array( 'echo' => false ) ),
    wp_get_attachment_image( $post->ID, $attachment_size )
  );
}

endif; // end gorham_attached_image


/**
 * 5. gorham_wp_title
 * Fix empty title. Replace with posted date.
 */
if ( ! function_exists( 'gorham_wp_title' ) ) :

function gorham_wp_title( $title, $sep ) {
  if (empty($title)) {
      $title = esc_html( get_the_date() );
  }
  return $title;
}
add_filter( 'wp_title', 'gorham_wp_title', 10, 2 );

function gorham_the_title( $title, $id ) {
  if (empty($title)) {
      $title = esc_html( get_the_date() );
  }
  return $title;
}
add_filter( 'the_title', 'gorham_the_title', 10, 2 );

endif; // end gorham_wp_title


/**
 * 6. gorham_paginate
 * Bootstrap Style Pagination
 * http://www.ericmmartin.com/pagination-function-for-wordpress/
 */
if ( ! function_exists( 'gorham_paginate' ) ) :

function gorham_paginate($args = null) {
    $defaults = array(
        'page' => null, 'pages' => null,
        'range' => 3, 'gap' => 3, 'anchor' => 1,
        'before' => '<ul class="pagination">', 'after' => '</ul>',
        'nextpage' => __('&raquo;', 'gorham'), 'previouspage' => __('&laquo', 'gorham'),
        'echo' => 1
    );

  $r = wp_parse_args($args, $defaults);
    extract($r, EXTR_SKIP);

    if (!$page && !$pages) {
        global $wp_query;

        $page = get_query_var('paged');
        $page = !empty($page) ? intval($page) : 1;

        $posts_per_page = intval(get_query_var('posts_per_page'));
        $pages = intval(ceil($wp_query->found_posts / $posts_per_page));
    }

    $output = "";
    if ($pages > 1) {
        $output .= "$before";
        $ellipsis = "<li><span>...</span></li>";

        if ($page > 1 && !empty($previouspage)) {
            $output .= "<li><a href='" . get_pagenum_link($page - 1) . "'>$previouspage</a></li>";
        }

        $min_links = $range * 2 + 1;
        $block_min = min($page - $range, $pages - $min_links);
        $block_high = max($page + $range, $min_links);
        $left_gap = (($block_min - $anchor - $gap) > 0) ? true : false;
        $right_gap = (($block_high + $anchor + $gap) < $pages) ? true : false;

        if ($left_gap && !$right_gap) {
            $output .= sprintf('%s%s%s',
                gorham_paginate_loop(1, $anchor),
                $ellipsis,
                gorham_paginate_loop($block_min, $pages, $page)
            );
        }
        else if ($left_gap && $right_gap) {
            $output .= sprintf('%s%s%s%s%s',
                gorham_paginate_loop(1, $anchor),
                $ellipsis,
                gorham_paginate_loop($block_min, $block_high, $page),
                $ellipsis,
                gorham_paginate_loop(($pages - $anchor + 1), $pages)
            );
        }
        else if ($right_gap && !$left_gap) {
            $output .= sprintf('%s%s%s',
                gorham_paginate_loop(1, $block_high, $page),
                $ellipsis,
                gorham_paginate_loop(($pages - $anchor + 1), $pages)
            );
        }
        else {
            $output .= gorham_paginate_loop(1, $pages, $page);
        }

        if ($page < $pages && !empty($nextpage)) {
            $output .= "<li><a href='" . get_pagenum_link($page + 1) . "'>$nextpage</a></li>";
        }

        $output .= $after;
    }

    if ($echo) {
        echo $output;
    }

    return $output;
}

endif; // end gorham_paginate


/**
 * 7. gorham_paginate_loop
 * Helper function for pagination which builds the page links.
 */
if ( ! function_exists( 'gorham_paginate_loop' ) ) :

function gorham_paginate_loop($start, $max, $page = 0) {
    $output = "";
    for ($i = $start; $i <= $max; $i++) {
        $output .= ($page === intval($i))
            ? "<li><span class='active'>$i</span></li>"
            : "<li><a href='" . get_pagenum_link($i) . "' class=''>$i</a></li>";
    }
    return $output;
}

endif; // end gorham_paginate_loop


/**
 * 8. gorham_password_form
 * Bootstrap style for password input adn submit button for password protected post.
 */
if ( ! function_exists( 'gorham_password_form' ) ) :

function gorham_password_form() {
  global $post;
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
  $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="form-inline">
  ' . __( "This content is password protected. To view it please enter your password below:", 'gorham' ) . '
  <label for="' . $label . '">' . __( "Password: ", 'gorham' ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control" /><input type="submit" class="btn btn-default" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
  </form>
  ';
  return $o;
}
add_filter( 'the_password_form', 'gorham_password_form' );

endif; // end gorham_password_form


/**
 * 9. gorham_post_nav
 * Single Post Nav.
 */
if ( ! function_exists( 'gorham_post_nav' ) ) :

function gorham_post_nav() {

  $trunc_limit = 30;
  ?>
  <nav class="navigation post-navigation" role="navigation">
      <h2 class="screen-reader-text"><?php _e( 'Post navigation', 'gorham' ); ?></h2>
      <ul class="pager">

      <?php if( '' != get_previous_post() ) { ?>
        <li class="previous">
          <?php previous_post_link( '<span class="nav-previous">%link</span>', __( '<i class="fa fa-caret-left"></i>', 'gorham' ) . '&nbsp;' . gorham_truncate_text( get_previous_post()->post_title, $trunc_limit ) ); ?>
        </li>
      <?php } // end if ?>

      <?php if( '' != get_next_post() ) { ?>
        <li class="next">
          <?php next_post_link( '<span class="no-previous-page-link nav-next">%link</span>', '&nbsp;' . gorham_truncate_text( get_next_post()->post_title, $trunc_limit ) . '&nbsp;' . __( '<i class="fa fa-caret-right"></i>', 'gorham' ) ); ?>
        </li>
      <?php } // end if ?>

      </ul><!-- .pager -->
  </nav><!-- .navigation -->
<?php
}

endif; // end gorham_post_nav


/**
 * 10. gorham_truncate_text
 * Truncate Text helper for single post nav.
 */
if ( ! function_exists( 'gorham_truncate_text' ) ) :

function gorham_truncate_text( $string, $character_limit = 50, $truncation_indicator = '...' ) {

        $truncated = null == $string ? '' : $string;
    if ( strlen( $string ) >= ( $character_limit + 1 ) ) {

        $truncated = substr( $string, 0, $character_limit );

        if ( substr_count( $truncated, ' ') > 1 ) {
            $last_space = strrpos( $truncated, ' ' );
            $truncated = substr( $truncated, 0, $last_space );
        } // end if

        $truncated = $truncated . $truncation_indicator;

    } // end if/else

    return $truncated;

}

endif; // end gorham_truncate_text
?>
