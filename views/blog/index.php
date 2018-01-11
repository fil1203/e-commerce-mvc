<?php include ROOT . '/views/layouts/header.php'; ?>
<?php include ROOT . '/views/layouts/body.php'; ?>
            <div id="page">
                <div id="page-bgtop">
                    <div id="content">
                        <div class="blog-post-area ">
                        <?php foreach ($blogList as $newsItem):?>
                            <div class="single-blog-post ">
                                <h2 class="title"><a href="/blog/<?php echo $newsItem['id'];?>"><?php echo $newsItem['title'];?></a></h2>
                                <p class="byline"><?php echo $newsItem['date'];?></p>
                                <div class="entry">
                                    <p><?php echo $newsItem['short_content'];?></p>
                                </div>
                                <div class="meta">
                                    <p class="links"><a href="/blog/<?php echo $newsItem['id'];?>" class="comments">Read more</a></p>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach;?>

                        </div>
                    </div>

                    <div style="clear: both; height: 1px"></div>
                </div>
            </div>
            <!-- end div#page -->


<?php include ROOT . '/views/layouts/footer.php'; ?>
