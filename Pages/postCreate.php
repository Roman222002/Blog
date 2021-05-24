<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../Blocks/headerLibs.php'; ?>
    <script type="application/javascript" src="../lib/js/createPost.js"></script>
    <title>Create Post</title>
    <style type="text/css">
        .bg-nav {
            background: linear-gradient(to right bottom, #3f4756, #4a4a69, #634874, #834074, #a23567);
        }

        .blog-footer {
            color: inherit;
        }
    </style>
</head>
<body>
<?php include '../Blocks/navigation.php'; ?>

<div class="jumbotron jblight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h1 class="display-4">Add Post</h1>
            </div>
            <div class="col-md-3">
                <div class="admin-item-img">
                    <img src="https://www.ancmedia.net/instant-blog/images/defaultuser.png"
                             class="admin-image rounded-circle">

                </div>
                <p class="member-item-user"><?php echo json_decode(substr(stripslashes($_COOKIE["user"]), 1, -1))->name; ?></p>
                <p class="member-item-text"><?php echo json_decode(substr(stripslashes($_COOKIE["user"]), 1, -1))->login; ?></p>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="content">
        <div class="alert alert-success print-success-msg d-none" role="alert"></div>
        <form id="createPostForm">
            <div class="form-group row">
                <label for="post_title" class="offset-md-1 col-md-2 col-form-label">Title</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" id="post_title" name="post_title">
                </div>
            </div>
            <div class="form-group row">
                <label for="post_desc" class="offset-md-1 col-md-2 col-form-label">Description</label>
                <div class="col-md-7">
                    <textarea class="form-control" id="post_desc" name="post_desc"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="post_desc" class="offset-md-1 col-md-2 col-form-label">Post Type</label>
                <div class="col-md-7">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-image-tab" data-toggle="pill" href="#pills-image"
                               role="tab" aria-controls="pills-image" aria-selected="true">Image Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                               aria-controls="pills-video" aria-selected="false">Video Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-text-tab" data-toggle="pill" href="#pills-text" role="tab"
                               aria-controls="pills-text" aria-selected="false">Text Post</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-image" role="tabpanel"
                     aria-labelledby="pills-image-tab">
                    <div class="form-group row">
                        <label class="offset-md-1 col-md-2 col-form-label">Image Upload</label>
                        <div class="col-sm-4 col-md-2 fileinputs">
                            <label class="btn btn-info btn-block btnfile">Browse
                                <input class="fileupload d-none" type="file" name="post_image">
                            </label>
                        </div>
                        <input class="photo_upload" name="post_media" type="hidden" value="">
                        <div class="col-sm-6 col-md-5 fileinfo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="offset-md-1 col-md-2 col-form-label">Image Overlay</label>
                        <div class="col-sm-7">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="post_instant" value="1">
                                <label class="form-check-label" for="gridCheck1">Yes, use image as a background. </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <div class="form-group row">
                        <label for="post_video" class="offset-md-1 col-md-2 col-form-label">Post Video</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="post_video" name="post_video"
                                   aria-describedby="videoHelp">
                            <small id="videoHelp" class="form-text text-muted">Paste YouTube video url. Example :
                                https://www.youtube.com/watch?v=eXaMplE</small>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-text" role="tabpanel" aria-labelledby="pills-text-tab">
                    <div class="form-group row">
                        <label for="post_video" class="offset-md-1 col-md-2 col-form-label">Background Color</label>
                        <div class="col-md-7">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="post_color" id="inlineRadio1" value="bg-primary" checked>
                                <label class="form-check-label color-box bg-primary text-white" for="inlineRadio1"><i class="icon-list icons"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="post_color" id="inlineRadio2" value="bg-secondary">
                                <label class="form-check-label color-box bg-secondary text-white" for="inlineRadio2"><i class="icon-list icons"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="post_color" id="inlineRadio3" value="bg-danger">
                                <label class="form-check-label color-box bg-danger text-white" for="inlineRadio3"><i class="icon-list icons"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="post_color" id="inlineRadio4" value="bg-warning">
                                <label class="form-check-label color-box bg-warning text-white" for="inlineRadio4"><i class="icon-list icons"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="post_color" id="inlineRadio5" value="bg-info">
                                <label class="form-check-label color-box bg-info text-white" for="inlineRadio5"><i class="icon-list icons"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="post_color" id="inlineRadio6" value="bg-dark">
                                <label class="form-check-label color-box bg-dark text-white" for="inlineRadio6"><i class="icon-list icons"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="post_select" class="offset-md-1 col-sm-2 col-form-label">Category</label>
                <div class="col-sm-7">
                    <select class="custom-select" name="tag_id">
                        <option value="">Chose Category</option>
                        <option value="programming">programming</option>
                        <option value="youtube">youtube</option>
                        <option value="space">space</option>
                        <option value="lifestyle">lifestyle</option>
                        <option value="general">general</option>
                        <option value="people">people</option>
                        <option value="news">news</option>
                    </select>
                </div>
            </div>

            <div id="subbtn" class="form-group row mb-5">
                <div class="offset-md-3 col-md-7">
                    <div class="text-danger print-error-msg d-none">
                        <ul></ul>
                    </div>
                    <input type="button" name="submit" id="submit" class="btn btn-success" value="Submit Post"/>
                </div>
            </div>
        </form>
    </div>
</div>


<?php include '../Blocks/footerLibs.php'; ?>

<script src="../lib/js/createPost.js"></script>
</body>
</html>