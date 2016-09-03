<?php
include_once "htmlHeader.php";
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Admin User Dashboard</h2>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6">
                <div class="x_content">
                    <table class="table table-striped jambo_table bulk_action">
                        <!-- TODO: id="datatable-fixed-header" -->
                        <thead>
                        <tr class="headings">

                            <th class="column-title" style="display: table-cell;">Name</th>
                            <th class="column-title" style="display: table-cell;">Position</th>
                            <th class="bulk-actions" colspan="7" style="display: none;">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                        class="action-cnt">1 Records Selected</span> ) <i
                                        class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="even pointer">
                            <td>Michael Park</td>
                            <td><select id="role1" class="form-control" required="">
                                    <option value="" disabled>Select the role</option>
                                    <option value="press">Admin</option>
                                    <option value="net">Client</option>
                                    <option value="mouth">Cute little corgi</option>
                                </select></td>
                            </td>
                        </tr>
                        <tr class="odd pointer">
                            <td>Michael Park</td>
                            <td><select id="role2" class="form-control" required="">
                                    <option value="" disabled>Select the role</option>
                                    <option value="press">Admin</option>
                                    <option value="net">Client</option>
                                    <option value="mouth">Cute little corgi</option>
                                </select></td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="x_content">
                    <table class="table table-striped jambo_table bulk_action">
                        <!-- TODO: id="datatable-buttons" -->
                        <thead>
                        <tr class="headings">
                            <th class="column-title no-link last" style="display: table-cell;"><span
                                    class="nobr">Website</span>
                            </th>
                            <th class="bulk-actions" colspan="7" style="display: none;">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                        class="action-cnt">1 Records Selected</span> ) <i
                                        class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="even pointer">
                            <td class=" last">
                                <div class="accordion" id="accordion" role="tablist"
                                     aria-multiselectable="true">

                                    <div class="panel">
                                        <a class="panel-heading" role="tab" id="headingOne"
                                           data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                           aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="panel-title">Developers' Foundation</h4>
                                        </a>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <input id="tags_1" type="text" class="tags form-control"
                                                       value="michaelpark, corgi"/>
                                                <div id="suggestions-container1"
                                                     style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="headingTwo"
                                           data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                           aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title">WithU FM</h4>
                                        </a>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <input id="tags_2" type="text" class="tags form-control" value="corgi"/>
                                                <div id="suggestions-container2"
                                                     style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="headingThree"
                                           data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                           aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">Collapsible Group Items #3</h4>
                                        </a>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <input id="tags_3" type="text" class="tags form-control"
                                                       value="nobodyrandom, michaelpark, corgi"/>
                                                <div id="suggestions-container3"
                                                     style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end of accordion --></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- jQuery Smart Wizard -->
<script>
    $(document).ready(function () {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonNext').addClass('btn btn-success');
        $('.buttonFinish').addClass('btn btn-default');
    });
</script>
<!-- /jQuery Smart Wizard -->
<!-- Datatables -->
<script>
    $(document).ready(function () {
        var handleDataTableButtons = function () {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                        {
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                    ],
                    responsive: true
                });
            }
        };

        TableManageButtons = function () {
            "use strict";
            return {
                init: function () {
                    handleDataTableButtons();
                }
            };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();
    });
</script>
<!-- /Datatables -->

<!-- TODO: You might need to do something with the scrip below for tag -->
<!-- jQuery Tags Input -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(document).ready(function () {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
    $(document).ready(function () {
        $('#tags_2').tagsInput({
            width: 'auto'
        });
    });
    $(document).ready(function () {
        $('#tags_3').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /jQuery Tags Input -->
<?php
include_once "htmlFooter.php";
?>
