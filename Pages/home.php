<!doctype html>
<html lang="en">
<head>
    <?php include '../Blocks/headerLibs.php'; ?>
    <script type="application/javascript" src="../lib/js/login.js"></script>
    <title>Home</title>
</head>

<body class="bg-instant">
<?php include '../Blocks/navigation.php'; ?>
<div class="se-pre-con"></div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="grid" data-columns="4">
            <?php
            use Model\Post;
            use Repository\PostRepository;
            $posts = PostRepository::getAll();
            /**
             * @var Post $post
             */
            foreach ($posts as $post){
                $date = date_diff(date_create(date("Y-m-d H:i:s")) , date_create($post->getCreatedAt()))->format("%y Year %m Month %d Day ago");
                $date = preg_replace('/0 \w+ /', '', $date);
                if($post->getIsBackground()){
                    echo '
                    <div class="card border-one text-center bg-dark text-white cover" style="background-image: ' . $post->getImage() . '">
                        <div class="category">
                            <a class="bg-secondary" href="postView.php/' . $post->getId() . '" style="background-color: ' . $post->getColor(). '">' . $post->getTagName() . '</a>
                        </div>
                        <div class="card-txt-body bg-over">
                            <a class="link-over" href="/postView.php/' . $post->getId() . '"></a>
                            <small><i class="icon-clock icons mr-2"></i>' .  $date. '</small>
                            <h4 class="txt-shad mt-4">' . $post->getTitle() . '</h4>
                            <p class="card-text txt-shad mb-5">' . $post->getContent(). '</p>
                            <a class="author" href="/profile/admin">
                                <div>' . $post->getColor() . '</div>
                                <div class="vbadge">
                                    <img alt="Verified" title="Verified" src="../media/images/patch-check-fill-w.svg" width="15px" height="15px">
                                </div>
                            </a>
                            <div class="card-like">' .
                                ($_COOKIE["user"] ?
                                    '<div class="heart" rel="unlike"></div>' :
                                    '<a href="/login.php"><div class="heartguest"></div></a>') .
                                '<div class="card-count">' . $post->getLikes() . '</div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                else {
                    echo '
                    <div class="card border-one text-center bg-dark text-white">
                        <div class="category">
                            <a class="bg-secondary" href=/postView.php/"' . $post->getId() . '" style="background-color: ' . $post->getColor() . '">' . $post->getTagName() . '</a>
                        </div>
                        <div class="bg-over">
                            <img class="card-img border-two" src="' . $post->getImage() . '">
                            <a class="link-over"
                               href="postView.php?id=' . $post->getId() . '"></a>
                            <div class="card-blog-body">
                                <small><i class="icon-clock icons mr-2"></i>' . $date . '</small>
                                <h4 class="mt-4">' . $post->getTitle() . '</h4>
                                <p class="card-text mb-5">' . $post->getContent() . '</p>
                                <a class="author" href="/profile/admin">
                                    <div>' . $post->getUserName() . '</div>
                                    <div class="vbadge">
                                        <img alt="Verified" title="Verified" src="../media/images/patch-check-fill-w.svg" width="15px" height="15px">
                                    </div>
                                </a>
                                <div class="card-like"> ' .
                                    ($_COOKIE["user"] ?
                                        '<div class="heart" rel="unlike"></div>' :
                                        '<a href="/login.php"><div class="heartguest"></div></a>') .
                                    '<div class="card-count">' . $post->getLikes() . '</div>
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
