<div class="page">

            <div class="container">
                <div class="content">
                    <div class="content-inner">

                        <div class="breadcrumb">
                            <a href="#">Home</a> &raquo; <a href="#">Politics</a> &raquo; Why the Hillary Clinton obsession?
                        </div><!-- end div.breadcrumb -->

                        <div class="publication">
                            <h1>Why the Hillary Clinton obsession?</h1>
                            <div class="published-date">
                                February 11, 2014
                            </div><!-- end div.published-date -->
                            <div class="main-photo">
                                <a href="#"><img src="http://static.guim.co.uk/sys-images/Guardian/Pix/audio/video/2013/1/23/1358956313048/Hillary-Clinton-testifies-011.jpg" alt=""></a>
                                <span class="photo-caption">
                                    Former Secretary of State Hillary Clinton, 
                                    pictured in October 2012, has become one of 
                                    the most powerful people in Washington. 
                                </span><!-- end div.photo-caption -->
                            </div><!-- end div.main-photo -->
                            <div class="publication-text">

                                Sometimes I think the media live in a time warp. There's so much talk about Hillary Clinton and the expanding/shrinking/expanding field of possible Republican candidates, you'd think we're in the middle of an Olympics ratings battle.
                                The media focus on 2016 is like a "Rocky Horror Picture Show," without Rocky. It's really an obsession that is not only misguided but also does a disservice both to voters and candidates.
                                <p>The two-year out speculation track record is pretty bad.
                                    Yes, Clinton is dynamic. Even her most rabid detractors must admit that. But her dynamism is not a guarantee victory. Her nomination is not inevitable.</p>
                                <p>She knows upfront the toll campaigning demands and what being president exacts. As George Harrison said about being a Beatle, you have to give your nervous system.</p>
                                If Clinton decides to run, she has to do so knowing it is a commitment that may last 11 years. She's 66. (Joe Biden, 71, and Mike Huckabee, 58, also have to consider their age.)
                                <p>It's not just how old a person might be at the end of her, or his, term. The question is, will one have the energy and will power to finish the job? We age better and healthier, but being president is aging like nothing else.</p>

                            </div><!-- end div.publication-text -->
                        </div><!-- end div.publication -->

                        <div class="comments">
                            <h4>Comments to this post: 4</h4>

                            <div class="post-comment">
                                <form action="" method="post">
                                    <input type="text" placeholder="Your name" class="text-field">
                                    <textarea placeholder="Your comment"></textarea>
                                    <input type="submit" class="button" value="Post comment">
                                </form>
                            </div><!-- end div.post-comment -->

                            <div class="comment">
                                <div class="name">John Doe</div>
                                <div class="commented-time">
                                    February 11, 2014 13:57
                                </div><!-- end div.commented-time -->
                                <div class="comment-text">
                                    Hello guys! I think this topic has very deep 
                                    problem and I fully support the idea and the author
                                    opinion.
                                </div><!-- end div.comment-text -->
                            </div><!-- end div.comment -->
                            
                            <div class="comment">
                                <div class="name">John Doe</div>
                                <div class="commented-time">
                                    February 11, 2014 13:57
                                </div><!-- end div.commented-time -->
                                <div class="comment-text">
                                    Hello guys! I think this topic has very deep 
                                    problem and I fully support the idea and the author
                                    opinion.
                                </div><!-- end div.comment-text -->
                            </div><!-- end div.comment -->
                            
                            <div class="comment">
                                <div class="name">John Doe</div>
                                <div class="commented-time">
                                    February 11, 2014 13:57
                                </div><!-- end div.commented-time -->
                                <div class="comment-text">
                                    Hello guys! I think this topic has very deep 
                                    problem and I fully support the idea and the author
                                    opinion.
                                </div><!-- end div.comment-text -->
                            </div><!-- end div.comment -->
                            
                            
                            
                        </div><!-- end div.comments -->



                    </div><!-- end div.content-inner -->
                </div><!-- end div.content -->




<?php


$post_id = $_GET['id'];

$db = new Database();
$db->query("SELECT * from posts WHERE post_id = '$post_id'");
$rows = $db->resultset();


foreach ($rows as $row) {

    print "<h2>" . $row['post_title'] . "</h2>";
    print "<br><br>";
    print $row['post_published_date'];
    print "<br><br>";
    print "<h3>" . $row['post_subtitle'] . "</h3>";
    print "<br><br>";
    print $row['post_content'];
}

print "<br><br>";
print "Comments";
print "<br><br>";


$db->query("SELECT * from comments WHERE post_id = '$post_id'");
$rows_comments = $db->resultset();


foreach ($rows_comments as $row_comments) {
    print "Name: " . $row_comments['comment_author'];
    print "<br>";
    print $row_comments['comment_date'];
    print "<br>";
    print $row_comments['comment_content'];
    print "<br><br>";
}






?>
