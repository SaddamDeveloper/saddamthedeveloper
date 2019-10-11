<?php require APPROOT . './views/inc/header.php' ?>

        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                 <h4><?php echo APPNAME; ?></h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->



        <div id="page">
            <?php require APPROOT . './views/inc/sidebar.php' ?>        
            <?php require APPROOT . './views/inc/sidebar-content.php' ?>        

            <!--Main Start-->
            <div id="main" class="site-main">

                <div class="blog-page">
                    <div class="blog-image">
                        <img src="<?php echo URLROOT ?>/img/blog/blog-page-img.jpg" alt="">
                    </div>
                    <div class="blog-container">
                    <?php //foreach($data['posts']) ?>
                        <div class="row">

                            <!--Blog Heading Start-->
                            <div class="blog-heading col-md-8 offset-md-2">
                                <span class="cat">Fashion</span>
                                <h1>Best Way To Design</h1>
                                <span class="blog-date">January 20, 2018</span>
                            </div>
                            <!--Blog Heading Start-->

                            <!--Blog Content Start-->
                            <div class="blog-content col-md-10 offset-md-1">
                                <p>Consectetur rerum veniam vitae sequi voluptatibus unde soluta dolorum. Sint maxime ducimus tenetur vitae corrupti saepe. Veniam sit ea aliquid odit officiis. Quisquam at labore eum commodi in eius In quisquam a a eaque fuga? Debitis magnam deserunt libero voluptates esse at possimus? Voluptatum voluptates exercitationem voluptatum accusantium doloremque nihil, nihil molestias voluptatibus, minus nostrum, aliquid Quisquam neque fugiat quos veniam facere Dicta eaque laboriosam ut voluptas ipsum Officiis nisi maxime soluta optio ipsum quam Dolores aperiam explicabo sed quas unde laborum molestiae. Porro cum incidunt enim minus nisi excepturi rerum! Exercitationem quia excepturi reiciendis illum velit! Consequatur tempora nihil </p>
                                <p>
                                    Sit exercitationem accusamus repudiandae libero natus vero aut Consectetur magni totam sint animi expedita? Eos consequatur facilis corrupti voluptatibus asperiores dolorum vitae ipsa laudantium repellat Voluptates voluptates corporis illum ut asperiores possimus officiis! Laborum rerum eaque minus harum doloremque debitis Ducimus sed commodi commodi illo aliquam. Magnam ipsa blanditiis blanditiis veniam aut Magni unde voluptates culpa dicta placeat! Incidunt delectus beatae excepturi perspiciatis libero praesentium illo Atque sit asperiores unde dolorem cupiditate, nostrum Alias illum voluptate eos commodi modi? Minus est fugiat labore earum obcaecati, omnis. Dicta fugit quod harum eius atque? Exercitationem impedit deleniti quidem voluptas eum cupiditate Consectetur
                                </p>
                                <blockquote>
                                    Consectetur omnis eveniet possimus est necessitatibus. Dolorum magnam officiis ad fugit cumque? Voluptatibus laboriosam incidunt voluptatum beatae dignissimos, nostrum iusto error Optio quam modi adipisci cumque delectus Voluptates iusto doloremque.
                                </blockquote>
                                <p>
                                    Dolor amet culpa esse cum in? Id ab neque ipsa sapiente impedit doloremque quod. Velit veniam in odio voluptatem doloribus Minus laborum voluptates sed ea vel? Aspernatur in quos nulla veniam tempore In quibusdam reprehenderit maiores iste ab Est quae magni nemo repudiandae soluta? Eius qui veniam voluptatem iure molestiae
                                </p>
                            </div>
                            <!--Blog Content End-->

                            <!--Blog Comments Start-->
                            <div class="blog-comments col-md-8 offset-md-2">
                                <h4 class="mb-40">Post Comments</h4>
                                <ul class="comment-list">

                                    <li class="comment">

                                        <div class="author-img">
                                            <img src="<?php echo URLROOT ?>/img/blog/authors/author-1.jpg" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <span class="reply"><a href="#">Reply</a></span>
                                            <h6 class="author">Jane Doe</h6>
                                            <span class="date">June 10, 2018 at 5:39 am</span>
                                            <p>Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko </p>
                                        </div>

                                    </li>

                                    <li class="comment">

                                        <div class="author-img">
                                            <img src="<?php echo URLROOT ?>/img/blog/authors/author-2.jpg" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <span class="reply"><a href="#">Reply</a></span>
                                            <h6 class="author">Jane Doe</h6>
                                            <span class="date">June 10, 2018 at 5:39 am</span>
                                            <p>Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko </p>
                                        </div>

                                    </li>

                                    <li class="comment">

                                        <div class="author-img">
                                            <img src="<?php echo URLROOT ?>/img/blog/authors/author-3.jpg" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <span class="reply"><a href="#">Reply</a></span>
                                            <h6 class="author">Jane Doe</h6>
                                            <span class="date">June 10, 2018 at 5:39 am</span>
                                            <p>Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko </p>
                                        </div>

                                    </li>

                                </ul>
                            </div>
                            <!--Blog Comments End-->

                            <div class="comment-form col-lg-8 offset-lg-2">

                                <h4 class="mt-40 mb-40">Leave A Reply</h4>
                                <form action="#">

                                    <div class="row">
                                        <!--Name Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="name" name="name" required/>
                                                <label class="input__label" for="name">Name</label>
                                            </span>
                                        </div>

                                        <!--Email Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field" type="text" id="email" name="email" required/>
                                                <label class="input__label" for="email">Email</label>
                                            </span>
                                        </div>

                                        <!--Message Box-->
                                        <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea  class="input__field" id="message" name="message" rows="5" required></textarea>
                                                <label class="input__label" for="message">Your Comment</label>
                                            </span>
                                        </div>

                                        <!--Submit Button-->
                                        <div class="col-md-12">
                                            <button class="btn-main">Post Comment</button>
                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

<?php require APPROOT . '/views/inc/footer.php' ?>
