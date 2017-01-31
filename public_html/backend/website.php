<?php
// First auth user
require_once "phpHeader.php";
use Parse\ParseQuery;
use Parse\ParseException;

// Then check if auth to visit current page (TODO: Check for perms to edit current site)
if (!isset($_GET["website"])) {
    require_once "error/page_403.html";
    exit();
}

require_once "htmlHeader.php";
$websiteID = $_GET["website"];

$query = new ParseQuery("Website");
$theWebsite = null;
try {
    $theWebsite = $query->get($websiteID);
    // The object was retrieved successfully.
} catch (ParseException $ex) {
    // Website not found in db???
    require_once "error/page_403.html";
    echo $ex->getMessage();
    exit();
}
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Editing <?php echo $theWebsite->get('nickname'); ?></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form for Editing Website Content</h2>
                        <!-- <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul> -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- Vertical float right tabbed -->
                        <div class="col-xs-9">
                            <!-- Tab panels -->
                            <form class="form-horizontal form-label-left" id="website-form"
                                  data-websiteid="<?php echo $websiteID; ?>"
                                  data-parseUser="<?php echo $user->{'userPrincipalName'}; ?>"
                                  data-parsePW="<?php echo $user->{'objectId'}; ?>"><!-- TODO: add in task remaining counter to prevent early fire of submit button -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="website-step-1">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="web-title">Website Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="web-title" required="required"
                                                       class="form-control col-md-7 col-xs-12"
                                                       value="<?php echo $theWebsite->get('name'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="web-nick">Website Nickname<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="web-nick" required="required"
                                                       class="form-control col-md-7 col-xs-12"
                                                       value="<?php echo $theWebsite->get('nickname'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="web-description">Website Description<span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="web-description" name="web-description"
                                                              required="required"
                                                              class="form-control col-md-7 col-xs-12"
                                                              rows="3"><?php echo $theWebsite->get('description'); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="web-url">Website URL</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12" id="web-url">
                                                <a href="<?php echo $theWebsite->get('url'); ?>"
                                                   target="_blank"><?php echo $theWebsite->get('url'); ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="web-logo">Logo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-2" id="web-logo-preview-container">
                                                <!--<img id="web-logo-preview" class="img-responsive avatar-view" src="" width="100%" onload="">-->
                                                <img id="web-logo-preview-loading" class="img-responsive" width="100%"
                                                     src="assets/img/web-loading.gif">
                                                <script>
                                                    var image_load = document.getElementById('web-logo-preview-loading');
                                                    var img = new Image(),
                                                        url = "<?php if ($theWebsite->get('logoUrl') !== null && $theWebsite->get('logoUrl') != '') {
                                                            echo $theWebsite->get('logoUrl');
                                                        } else {
                                                            echo 'production/images/picture.jpg';
                                                        } ?>",
                                                        container = document.getElementById('web-logo-preview-container');
                                                    img.onload = function () {
                                                        if (image_load)
                                                            image_load.parentNode.removeChild(image_load);
                                                        container.appendChild(img);
                                                    };
                                                    img.id = "web-logo-preview";
                                                    img.className = "img-responsive avatar-view";
                                                    img.src = url;
                                                </script>
                                            </div>
                                            <div class="btn-group col-md-7">
                                                <br/><br/>
                                                <label class="btn btn-default btn-file">
                                                    Choose File
                                                    <input type="file" id="web-logo" data-role="magic-overlay"
                                                           data-target="#pictureBtn" data-edit="insertImage"
                                                           name="Input File"
                                                           data-preview="#web-logo-preview"/>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $execList = $theWebsite->get('exec');
                                    echo '<div class="tab-pane" id="website-step-2" data-execcount="' . count($execList) . '">';
                                    for ($i = 0; $i < count($execList); $i++) {
                                        //$exec = json_decode($execList[$i]);
                                        $exec = $execList[$i];

                                        // Defaults
                                        $execPhotoURL = "production/images/user.png";
                                        $execPhotoName = "Upload Picture";
                                        $execPhotoID = $exec['pictureid'];
                                        if ($exec['pictureid'] != "-1") {
                                            $query = new ParseQuery("ExecPhoto");
                                            // Try get replacement
                                            try {
                                                $theExecPhoto = $query->get($execPhotoID);
                                                // The object was retrieved successfully.
                                                $execPhotoURL = $theExecPhoto->get('pictureUrl');
                                                $execPhotoName = $theExecPhoto->get('picture')->getName();
                                                $execPhotoName = substr($execPhotoName, strpos($execPhotoName, "_") + 1);
                                            } catch (ParseException $ex) {
                                                // Photo not found in db???
                                                echo $ex->getMessage();
                                            }
                                        }
                                        ?>
                                        <div class="form-group exec-group" data-exec="<?php echo $i + 1; ?>" id="exec-info-<?php echo $i + 1?>">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="col-md-12">
                                                        <img src="<?php echo $execPhotoURL; ?>" alt="..."
                                                             class="img-circle profile_img preview-exec-img<?php echo $i + 1; ?>"
                                                             width="100%">
                                                        <br/>
                                                        <br/>
                                                    </div>
                                                    <div class="col-md-12" style="text-align: center">
                                                        <button class="btn btn-success"
                                                                name="picturePlaceHolder<?php echo $i + 1; ?>"
                                                                onclick="triggerProfilePicUpload(event, this);"><?php echo $execPhotoName; ?></button>
                                                        <button class="btn btn-warning"
                                                                name="removeExecutive<?php echo $i + 1; ?>"
                                                                onclick="removeExecutive(event, <?php echo $i + 1?>)">
                                                            Delete Executive
                                                        </button>
                                                        <input type="file" name="pictureToUpload<?php echo $i + 1; ?>"
                                                               class="input-exec-img"
                                                               data-role="magic-overlay" data-target="#pictureBtn"
                                                               data-edit="insertImage"
                                                               data-preview=".preview-exec-img<?php echo $i + 1; ?>"
                                                               data-parsedb="<?php echo $execPhotoID; ?>"
                                                               style="display: none;" onchange="fileSubmit(this);"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="col-md-10 col-md-offset-2">
                                                        <br/>
                                                        <input type="text" id="exec-name<?php echo $i + 1; ?>" required
                                                               class="form-control col-md-7 col-xs-12 exec-name"
                                                               placeholder="Name" value="<?php echo $exec['name']; ?>">
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-2">
                                                        <br/>
                                                        <input type="text" id="exec-position<?php echo $i + 1; ?>"
                                                               required
                                                               class="form-control col-md-7 col-xs-12 exec-position"
                                                               placeholder="Position"
                                                               value="<?php echo $exec['position']; ?>">
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-2">
                                                        <br/>
                                                        <textarea id="exec-description<?php echo $i + 1; ?>"
                                                                  name="exec-description"
                                                                  class="form-control col-md-7 col-xs-12 exec-description"
                                                                  rows="5"
                                                                  placeholder="Information goes here"><?php echo $exec['desc']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <button id="add-exec" class="btn btn-primary">Add another executive</button>
                                </div>
                                <!--  End of website-step-2 and beginning of website-step-3 -->
                                <div class="tab-pane" id="website-step-3">
                                    <select id="heard" class="form-control content-select" required
                                            onchange="switchSection(this)">
                                        <option value="" disabled>Select which area you want to edit</option>
                                        <?php
                                        $contentList = $theWebsite->get('content');
                                        foreach ($contentList['data'] as $content) {
                                            $field = $content['name'];
                                            ?>
                                            <option value="<?php echo $field; ?>"><?php echo $field; ?></option>
                                            <?php
                                        }
                                        $content = $contentList['data'];
                                        ?>
                                    </select>
                                    <div id="alerts"></div>
                                    <div class="btn-toolbar editor" data-role="editor-toolbar"
                                         data-target="#editor">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown"
                                               title="Font"><i
                                                    class="fa fa-font"></i><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown"
                                               title="Font Size"><i
                                                    class="fa fa-text-height"></i>&nbsp;<b
                                                    class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a data-edit="fontSize 5">
                                                        <p style="font-size:17px">Huge</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-edit="fontSize 3">
                                                        <p style="font-size:14px">Normal</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-edit="fontSize 1">
                                                        <p style="font-size:11px">Small</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i
                                                    class="fa fa-bold"></i></a>
                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                                    class="fa fa-italic"></i></a>
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                                    class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                                    class="fa fa-underline"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="insertunorderedlist"
                                               title="Bullet list"><i
                                                    class="fa fa-list-ul"></i></a>
                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                                    class="fa fa-list-ol"></i></a>
                                            <a class="btn" data-edit="outdent"
                                               title="Reduce indent (Shift+Tab)"><i
                                                    class="fa fa-dedent"></i></a>
                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i
                                                    class="fa fa-indent"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="justifyleft"
                                               title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                            <a class="btn" data-edit="justifycenter"
                                               title="Center (Ctrl/Cmd+E)"><i
                                                    class="fa fa-align-center"></i></a>
                                            <a class="btn" data-edit="justifyright"
                                               title="Align Right (Ctrl/Cmd+R)"><i
                                                    class="fa fa-align-right"></i></a>
                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                                    class="fa fa-align-justify"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown"
                                               title="Hyperlink"><i
                                                    class="fa fa-link"></i></a>
                                            <div class="dropdown-menu input-append">
                                                <input class="span2" placeholder="URL" type="text"
                                                       data-edit="createLink"/>
                                                <button class="btn" type="button">Add</button>
                                            </div>
                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i
                                                    class="fa fa-cut"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" title="Insert picture (or just drag & drop)"
                                               id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay"
                                                   data-target="#pictureBtn"
                                                   data-edit="insertImage" style="display: none;"/>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i
                                                    class="fa fa-undo"></i></a>
                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i
                                                    class="fa fa-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div id="editor" class="editor-wrapper placeholderText content-editor-field"
                                         contenteditable="true"
                                         data-contentold="<?php echo $content[0]['name']; ?>"><?php echo $content[0]['content']; ?></div>
                                    <!--Button to create new section-->
                                    <!-- TODO: Only show this button based on proper authentication -->
                                    <?php
                                    if ($isAdmin) {?>
                                        <button id="make-section-button"
                                                class="btn btn-default">Create a new section
                                        </button>
                                        <textarea name="descr" id="descr"
                                                  style="display:none;"><?php echo $content[0]['content']; ?></textarea>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    for ($i = 0; $i < count($content); $i++) {
                                        echo '<div class="content-field" style="display: none;" data-namefield="' . $content[$i]['name'] . '">' . $content[$i]['content'] . '</div>';
                                    }
                                    ?>
                                </div>
                                <!-- End of website-step-3 and beginning to website-step-4 -->
                                <div class="tab-pane" id="website-step-4">
                                    <p>Drag multiple files to the box below for multi upload or click to select files.
                                        This
                                        is for demonstration purposes only, the files are not uploaded to any
                                        server.</p>
                                    <!-- TODO-michael: using a div works.... <form action="website.php" class="dropzone"></form>-->
                                    <div class="dropzone dz-clickable" id="galleryDrop">
                                        <div class="dz-default dz-message" data-dz-message="">
                                            <span>Drop files here to upload</span>
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                </div>
                                <!-- End of website-step-4 and beginning of website-step-5 -->
                                <div class="tab-pane" id="website-step-5">
                                    <div id='calendar'></div>
                                </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-xs-3">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs tabs-right" data-tabs="tabs">
                            <li class="active"><a href="#website-step-1" data-toggle="tab">Basic Website Info</a>
                            </li>
                            <li><a href="#website-step-2" data-toggle="tab">Exec Info</a>
                            </li>
                            <li><a href="#website-step-3" data-toggle="tab">Content Edit</a>
                            </li>
                            <li><a href="#website-step-4" data-toggle="tab">Gallery</a>
                            </li>
                            <li><a href="#website-step-5" data-toggle="tab">Event</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pull-right">
                        <button class="btn btn-default" id="website-form-submit"
                                onclick="formSubmit(document.getElementById('website-form'));">Save All
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- calendar modal -->
<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
            </div>
            <div class="modal-body">
                <div id="testmodal" style="padding: 5px 20px;">
                    <form id="antoform" class="form-horizontal calender" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
            </div>
            <div class="modal-body">

                <div id="testmodal2" style="padding: 5px 20px;">
                    <form id="antoform2" class="form-horizontal calender" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title2" name="title2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
<div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
</div>
</div>
<!-- /page content -->

<?php
$includeFile = "website-submit";
require_once "htmlFooter.php";
?>
