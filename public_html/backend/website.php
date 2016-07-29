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
                                  data-parsePW="<?php echo $user->{'objectId'}; ?>">
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
                                                   for="web-url">Website URL
                                            </label>
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
                                                <img id="web-logo-preview-loading" class="img-responsive" width="100%" src="assets/img/web-loading.gif">
                                                <script>
                                                    var img = new Image(),
                                                        url = "<?php if ($theWebsite->get('logoUrl') !== null && $theWebsite->get('logoUrl') != '') {
                                                            echo $theWebsite->get('logoUrl');
                                                        } else {
                                                            echo 'production/images/picture.jpg';
                                                        } ?>",
                                                        container = document.getElementById('web-logo-preview-container');
                                                    img.onload = function () {
                                                        container.appendChild(img);
                                                    };
                                                    img.id = "web-logo-preview";
                                                    img.className = "img-responsive avatar-view";
                                                    img.src = url;
                                                </script>
                                            </div>
                                            <div class="btn-group col-md-7">
                                                <br/><br/>
                                                <input type="file" id="web-logo" data-role="magic-overlay"
                                                       data-target="#pictureBtn" data-edit="insertImage"
                                                       data-preview="#web-logo-preview"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="website-step-2">
                                        <div class="form-group exec-group" data-exec="1">
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1">
                                                    <img src="production/images/user.png" alt="..."
                                                         class="img-circle profile_img preview-exec-img1" width="100%">
                                                    <br/>
                                                    <button class="btn btn-success"
                                                            name="picturePlaceHolder1"
                                                            onclick="triggerProfilePicUpload(event, this);">
                                                        Upload Picture
                                                    </button>
                                                    <input type="file" name="pictureToUpload1" class="input-exec-img"
                                                           data-role="magic-overlay" data-target="#pictureBtn"
                                                           data-edit="insertImage" data-preview=".preview-exec-img1"
                                                           style="display: none;" onchange="fileSubmit(this);"/>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="col-md-10 col-md-offset-2">
                                                        <br/>
                                                        <input type="text" id="exec-name1" required
                                                               class="form-control col-md-7 col-xs-12"
                                                               placeholder="Name">
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-2">
                                                        <br/>
                                                        <input type="text" id="exec-position1" required
                                                               class="form-control col-md-7 col-xs-12"
                                                               placeholder="Position">
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-2">
                                                        <br/>
                                                        <textarea id="exec-description1" name="exec-description"
                                                                  class="form-control col-md-7 col-xs-12"
                                                                  rows="5"
                                                                  placeholder="Information goes here"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="website-step-3">
                                        <select id="heard" class="form-control" required="">
                                            <option value="" disabled>Select which area you want to edit</option>
                                            <option value="press">temp1</option>
                                            <option value="net">temp2</option>
                                            <option value="mouth">temp3</option>
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
                                        <div id="editor" class="editor-wrapper placeholderText"
                                             contenteditable="true"></div>
                                        <textarea name="descr" id="descr" style="display:none;"></textarea>
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
</div>
<!-- /page content -->

<?php
$includeFile = "website-submit";
require_once "htmlFooter.php";
?>
