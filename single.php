     <?php get_header(); ?>
            <!-- Blog Details Section -->
            <section class="blog-details">
                <div class="container">
                    <div class="blog-details-wrapper">

                        <!-- Main Blog Content -->
                        <div class="blog-content">
                            <?php if (have_posts()):
                                while (have_posts()) : the_post();

                            ?>
                                    <div class="blog-meta">
                                        <div class="date">
                                            <div class="yellow-circle"></div>
                                            <span><?php echo get_the_date() ?></span>
                                        </div>
                                        <h1 class="blog-title"> <?php the_title() ?></h1>
                                        <div class="author">

                                            <?php echo get_avatar(get_the_author_meta('ID'), 40) ?>
                                            <span class="author-name">By <?php the_author() ?></span>
                                        </div>
                                    </div>
                                    <div class="featured-image">

                                        <?php the_post_thumbnail('full'); ?>

                                    </div>

                                   
            <?php get_footer(); ?>