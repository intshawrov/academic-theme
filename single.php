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


                        

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <h2 class="section-title">Leave a Comment</h2>
                            <form>
                                <div class="form-group">
                                    <textarea placeholder="Write your comment here ..." required></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                            </form>
                        </div>

                    </div>
            <?php endwhile;  endif; ?>
                </div>
            </section>
            </div>

            <?php get_footer(); ?>