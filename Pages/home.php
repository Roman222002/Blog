<!doctype html>
<html lang="en">
<head>
    <?php include '../Blocks/headerLibs.php'; ?>
<!--    <script type="application/javascript" src="../lib/js/login.js"></script>-->
    <title>Home</title>
</head>

<body class="bg-instant">
<?php include '../Blocks/navigation.php'; ?>
<div class="se-pre-con"></div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="grid" data-columns="4">
            <?php
            $posts = [];
            // TODO: !Roman! Create some backend shit to get posts array

            foreach ($posts as $post){
                if($post['isBackground']){
                    echo '
                    <div class="card border-one text-center bg-dark text-white cover" style="background-image: ' . $post['image'] . '">
                        <div class="category">
                            <a class="bg-secondary" href="#" style="background-color: ' . $post['color'] . '">' . $post['tagName'] . '</a>
                        </div>
                        <div class="card-txt-body bg-over">
                            <a class="link-over" href="#"></a>
                            <small><i class="icon-clock icons mr-2"></i>' . date_diff($post['dateCreate'], date('Y/m/d H:i:s'))->format("%y Year %m Month %d Day ago") . '</small>
                            <h4 class="txt-shad mt-4">' . $post['title'] . '</h4>
                            <p class="card-text txt-shad mb-5">' . $post['content'] . '</p>
                            <a class="author" href="/profile/admin">
                                <div>' . $post['creatorName'] . '</div>
                                <div class="vbadge">
                                    <img alt="Verified" title="Verified" src="../media/images/patch-check-fill-w.svg" width="15px" height="15px">
                                </div>
                            </a>
                            <div class="card-like">' .
                                $_COOKIE["user"] ?
                                    '<div class="heart" rel="unlike"></div>' :
                                    '<a href="/Pages/login.php"><div class="heartguest"></div></a>' .
                                '<div class="card-count">' . $post['likeCount'] . '</div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                else {
                    echo '
                    <div class="card border-one text-center bg-dark text-white">
                        <div class="category">
                            <a class="bg-secondary" href="#" style="background-color: ' . $post['color'] . '">' . $post['tagName'] . '</a>
                        </div>
                        <div class="bg-over">
                            <img class="card-img border-two" src="' . $post['image'] . '">
                            <a class="link-over"
                               href="#"></a>
                            <div class="card-blog-body">
                                <small><i class="icon-clock icons mr-2"></i>' . date_diff($post['dateCreate'], date('Y/m/d H:i:s'))->format("%y Year %m Month %d Day ago") . '</small>
                                <h4 class="mt-4">' . $post['title'] . '</h4>
                                <p class="card-text mb-5">' . $post['content'] . '</p>
                                <a class="author" href="/profile/admin">
                                    <div>' . $post['creatorName'] . '</div>
                                    <div class="vbadge">
                                        <img alt="Verified" title="Verified" src="../media/images/patch-check-fill-w.svg" width="15px" height="15px">
                                    </div>
                                </a>
                                <div class="card-like"> ' .
                                    $_COOKIE["user"] ?
                                        '<div class="heart" rel="unlike"></div>' :
                                        '<a href="/Pages/login.php"><div class="heartguest"></div></a>' .
                                    '<div class="card-count">' . $post['likeCount'] . '</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include '../Blocks/footerLibs.php'; ?>
</body>
</html>
