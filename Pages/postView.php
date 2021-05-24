<?php
//  TODO: !ROMA! Get post by id
$post = [];
?>

<!doctype html>
<html lang="en">
<head>
    <?php include '../Blocks/headerLibs.php'; ?>
    <script type="application/javascript" src="../lib/js/login.js"></script>
    <title>View Post</title>
</head>
<body class="bg-instant">
<?php include '../Blocks/navigation.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo $post['image'] ?>">
                <div class="card-body">
                    <div class="list-item mb-3">
                        <div class="list-left">
                            <img class="avatar img-fluid rounded-circle" src="../media/images/defaultuser.png">
                        </div>
                        <div class="list-body">
                            <div class="text-ellipsis">
                                <p class="nocolor"><?php echo $post['creatorName'] ?></p>
                                <small class="text-muted time"><?php
                                    $now = new DateTime();
                                    $date = new DateTime($post['dateCreate']);
                                    echo $now->diff($date)->format("%y Year %m Month %d Day ago")
                                    ?></small>
                            </div>
                            <div class="text-ellipsis">
                                <small class="text-muted">Creator</small>
                                <img alt="Verified" src="../media/images/patch-check-fill.svg" title="Verified" height="15px" width="15px">
                                <small class="text-muted time">#<?php echo $post['tagName'] ?></small>
                            </div>
                        </div>
                    </div>
                    <h1><?php echo $post['title'] ?></h1>
                    <p><?php echo $post['content'] ?></p>
                </div>
                <div class="card-body card-border">
                    <div class="row">
                        <div class="col like ml-3 lesspadding">
                            <?php echo $_COOKIE["user"] ?
                            '<div class="heart" rel="unlike"></div>' :
                            '<a href="/Pages/login.php"><div class="heartguest"></div></a>' ?>
                            <div class="likeCount"><?php echo $post['likeCount'] ?></div>
                        </div>
                        <div class="col lesspadding">
                            <a data-pin-custom="true" data-pin-do="buttonBookmark" data-pin-tall="true" href="https://www.pinterest.com/pin/create/button/">
                                <button class="btn btn-sm btn-block btn-danger btnpoint" type="button">
                                    <i class="icon-social-pinterest icons"></i>
                                    <span class="d-none d-md-inline-block">Save</span>
                                </button>
                            </a>
                        </div>
                        <div class="col lesspadding">
                            <a class="btn btn-face btn-sm share" href="https://www.facebook.com/sharer/sharer.php?u=/posts/<?php echo str_replace(' ', '-', strtolower($post['title'])) ?>" role="button" target="_blank">
                                <i class="icon-social-facebook icons"></i>
                                <span class="d-none d-md-inline-block">Share</span>
                            </a>
                        </div>
                        <div class="col lesspadding">
                            <a class="btn btn-twit btn-sm share" href="https://twitter.com/share?url=/posts/<?php echo str_replace(' ', '-', strtolower($post['title'])) ?>" role="button" target="_blank">
                                <i class="icon-social-twitter icons"></i>
                                <span class="d-none d-md-inline-block">Share</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
<!--             TODO !Ilia! dynamic popular post creation-->
            <div class="row mb-5">
                <div class="col">
                    <a class="btn btn-block btn-arrow border-one" data-placement="bottom"
                       data-toggle="tooltip" href="/posts/life-on-mars"
                       role="button" title="Previous">
                        <i class="icon-arrow-left icons"></i>
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-block btn-arrow border-one" data-placement="bottom"
                       data-toggle="tooltip"
                       href="/posts/features-of-instant-blog-script" role="button" title="Random">
                        <i class="icon-shuffle icons"></i>
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-block btn-arrow border-one" data-placement="bottom"
                       data-toggle="tooltip"
                       href="/posts/klaus-official-trailer-netflix" role="button" title="Next">
                        <i class="icon-arrow-right icons"></i>
                    </a>
                </div>
            </div>
            <div class="card border-one bg-dark text-white">
                <img class="card-img border-one" src="uploads/1621686502.jpg">
                <div class="card-img-overlay bg-over">
                    <a class="link-over" href="/posts/how-are-you-bro"></a>
                    <h4 class="bottom-txt">
                        HOW ARE YOU BRO
                    </h4>
                    <a class="author" href="/profile/Test">
                        <img class="avatar-sm img-fluid rounded-circle"
                             src="images/defaultuser.png">
                        <div>test</div>
                    </a>
                    <small class="text-muted card-date">19 minutes ago</small>
                </div>
            </div>
            <div class="card border-one bg-dark text-white">
                <img class="card-img border-one" src="uploads/1600259312.jpg">
                <div class="card-img-overlay bg-over">
                    <a class="link-over"
                       href="/posts/how-to-build-confidence-from-scratch"></a>
                    <h4 class="bottom-txt">
                        How To Build Confidence From Scratch
                    </h4>
                    <a class="author" href="/profile/admin">
                        <img class="avatar-sm img-fluid rounded-circle"
                             src="images/defaultuser.png">
                        <div>Admin Name</div>
                    </a>
                    <small class="text-muted card-date">8 months ago</small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../Blocks/footerLibs.php'; ?>
</body>
</html>