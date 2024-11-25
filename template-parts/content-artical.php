
        <div class="container">
                                        <header class="content-header">
                        <!-- here we are ggetting the date dynamically from the database -->
                                                <div class="meta mb-3"><span class="date"><?php the_date(); ?></span>
                        <!--here we are getting the tags dyanmically for the pst -->
                        <?php
                        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
                        ?>

                        <!-- <span class="tag"><i class='fa fa-tag'></i> category</span> -->
                        <!-- word press  function to count comments -->
                        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number()?> </a></span></div>
                                        </header>

                <?php
        
                        the_title('<h1>', '</h1>');
                        the_content();
                ?>

                <?php
                // <!-- this line below get the comments got from the comments file and dispplay them in  this section -->
                comments_template();
                ?>

        </div>
        