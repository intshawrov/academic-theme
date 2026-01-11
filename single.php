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

                                    <div class="blog-text">
                                        <?php the_content(); ?>

                                        <div class="blog-tags">
                                            <span>Tags:</span>
                                            <?php the_tags(' ', ', ', '<br>'); ?>
                                        </div>
                                        <div class="social-share"></div>
                                    </div>

                        </div>

                        <!-- Author  Box -->
                        <div class="author-box">
                            <div class="author-avatar">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40) ?>
                                
                            </div>
                            <div class="author-info">
                                <h3>About Abdullah Al Masoud</h3>
                                <p>Masoud is a professional web designer with over 10 years of experience. He has worked with major companies and now runs his own design agency.</p>
                                <div class="author-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
            <?php get_footer(); ?>