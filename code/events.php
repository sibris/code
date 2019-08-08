<?php include '../tpl/sbadmin/header.php' ?>
<?php include '../tpl/sbadmin/top-menu.php' ?>
<style>
    .fc-toolbar{font-size:1.2em;}
    .bg-tab1{
        background-color: #a58ab3 !important;
    }
    .bg-warning-tab {
        background-color: #2b8a90 !important;
    }
</style>
<div class="page-wrapper bg">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <?php include '../tpl/sbadmin/top-link.php' ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->		<!-- ============================================================== -->
        <div class="alert alert-success ajax_alert" style="display: none;"></div>
        <div class="alert alert-danger ajax_error" style="display: none;"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="">
                        <div class="row">
                            <?/*
                                <div class="col-lg-3">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <!--<a  href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-10 btn-info btn-block waves-effect waves-light">
                                            <i class="ti-plus"> </i><?=$lang['add_new_event'];?>
                                        </a>-->
                                        <span style="display: block;font-weight: bold;"><?=$lang['event_tetle']?></span>
                                        <span><?=$lang['event_subtetle']?></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                */?>
                                            <div class="col-lg-12">
                                <div class="row">
                                <div class="col-md-12   padding-text-before-calendar">
                                    <!--<a  href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-10 btn-info btn-block waves-effect waves-light">
                                    <i class="ti-plus"> </i><?=$lang['add_new_event'];?>
                                    </a>-->
                                    <big class="text-large" style="display: block; font-weight: bold; color:#f00;"><?=$lang['event_tetle']?></big>
                                    <span><?=$lang['event_subtetle']?></span>
                                </div>
                                </div>
                                <div class="card-body b-l calender-sidebar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN MODAL -->
    <!--	<div class="modal none-border test bs-example-modal-lg" id="my-event">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong><?=$lang['add_event'];?></strong></h4>
                    </div>
                        <div class="modal-body">
                         <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label"><?=$lang['event_name'];?></label>
                                    <input required class="form-control form-white select_title" placeholder="<?=$lang['enter_event_name'];?>" type="text" name="category-name" />
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label"><?=$lang['choose_date'];?></label>
                                    <input type="text" required readonly style="opacity: 1;background-color:transparent;" class="form-control" id=""
                                placeholder="mm/dd/yyyy">                            </div>
                                <div class="col-md-6">
                                    <label class="control-label"><?=$lang['time']?></label>
                                    <select id="add_time" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <?php foreach ($lessons as $value): ?>
                                        <?php if ($value['is_lesson'] != 1){
                                            continue;
                                        } ?>
                                        <option start="<?=$value['from_time']?>" end="<?=$value['to_time']?>"><?=$value['to_time'].' - '.$value['from_time']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label m-t-10"><?=$lang['classroom'];?></label>
                                    <select id="add_classroom" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <option value="1">1-3</option>
                                        <option value="2">4-6</option>
                                        <option value="3">7-8</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label m-t-10"><?=$lang['type_of_job'];?></label>
                                    <select id="add_type" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <option value="1"><?=$lang['teacher'];?></option>
                                        <option value="2"><?=$lang['instructor'];?></option>
                                        <option value="3"><?=$lang['tester'];?></option>
                                        <option value="4"><?=$lang['superintendent'];?></option>
                                        <option value="5"><?=$lang['help_test'];?></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label m-t-10"><?=$lang['original_name'];?></label>
                                    <input required class="form-control form-white" id="add_orig_name" placeholder="<?=$lang['place_original_name'];?>" type="text" name="orig-name" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label m-t-10"><?=$lang['lesson'];?></label>
                                    <select id="add_lesson_name" required class="form-control form-white new_event_class" name="category-color">
                                        <option value="1"><?=$lang['general_lesson']?></option>
                                        <option value="2"><?=$lang['math'];?></option>
                                        <option value="3"><?=$lang['hebrew'];?></option>
                                        <option value="4"><?=$lang['eng'];?></option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-header m-t-10" style="width: 100%;" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" style="display: block;" data-parent="#accordion" href="#collapsetwo" aria-expanded="true" aria-controls="collapseOne" class="link accordion_link">
                                                <?=$lang['details'];?><div style="display: inline-block;float: left;"><i class="fa fa-chevron-down"></i></div>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsetwo" class="collapse col-md-12" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="card-body">
                                            <form id="form_ava" class="form-horizontal form-material"  enctype="multipart/form-data" method="post">
                                                <div class="form-group">
                                                    <label class="control-label"><?=$lang['coment'];?></label>
                                                    <textarea class="add_coment form-control" rows="5"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label"><?=$lang['file_upload']?></label>
                                                    <label style="display: block;" for="add_file" style="position:relative;">
                                                        <span  class="btn btn-info add_span m-t-10"  aria-hidden="true"><?=$lang['select_file']; ?>
                                                        </span>
                                                        <input type="file" onchange="changeFileCss(this);" id="add_file" name="gate" style="bottom: 0;display: none; height: 35px; opacity: 0; position: absolute; right: 0; width: 100%;">
                                                    </label>
                                                    <p class="file_info"></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="margin-left: 5px;" id="select_event" class="btn btn-success save-event waves-effect waves-light"><?=$lang['create_event'];?></button>
                        <button id="close_select_event" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><?=$lang['close'];?></button>
                    </div>
                </div>
            </div>
        </div>    -->
        <div class="modal none-border bs-example-modal-lg" id="edit-event">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex flex-row-reverse">
                        <button type="button" class="close m-l-10" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 id="titl_date" class="modal-title ml-auto p-r-20"></h4>
                        <div id="profile_link"></div>
                        <h4 class="modal-title"><strong><?=$lang['edit_event'];?></strong></h4>
                    </div>
                    <!-- <i id="titl_date"></i> -->
                    <div class="modal-body">
                        <form role="form">
                            <div class="row">
                <div class="col-md-2">
                                    <label class="control-label"><?=$lang['event_number'];?></label>
                                    <input required class="form-control form-white event_number edit_number" type="text" name="event_id" disabled/>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label"><?=$lang['event_name'];?></label>
                                    <input required class="form-control form-white edit_event_title edit_title" placeholder="<?=$lang['enter_event_name'];?>" type="text" name="category-name" />
                                </div>
                <!--<div class="col-md-6">
                    <label class="control-label"><?=$lang['time']?></label>
                    <select id="edit_time" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                <?php 
				foreach ($lessons as $value): ?>
                <?php if ($value['is_lesson'] != 1){
                    continue;
                } ?>
                <option start="<?=$value['from_time']?>" end="<?=$value['to_time']?>"><?=$value['to_time'].' - '.$value['from_time']?></option>
                <?php endforeach; ?>
                    </select>
                </div>-->
                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><?=$lang['from_time']?></label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                            <div class="input-group-append">
                                                <span style="border-radius: 0 .25rem .25rem 0;"  class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                            <!-- opacity: 1;background: transparent; -->
                                            <input disabled style="padding-right: 10px;" autocomplete="off" required type="text" id="ed_from_time" name="from_time" class="edit_from_date form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><?=$lang['to_time']?></label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                            <div class="input-group-append">
                                                <span style="border-radius: 0 .25rem .25rem 0;"  class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                            <!-- opacity: 1;background: transparent; -->
                                            <input disabled style="padding-right: 10px;" autocomplete="off" required type="text" id="ed_to_time" name="to_time" class="edit_to_date form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label class="control-label"><?= $lang['working_hours']?></label>
                                    <select id="edit_working_hours" required class="form-control form-white edit_working_hours" name="category-color">
<!--										<option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>           -->
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label m-t-10 full-width"><?=$lang['classroom'];?></label>
                  <div class="custom-control custom-checkbox inline-checkbox">
                      <input type="checkbox" class="custom-control-input new_event_class" name="edit_event_classroom[]" value="1" id="customCheck4">
                      <label class="custom-control-label" for="customCheck4">א-ג</label>
                  </div>
                  <div class="custom-control custom-checkbox inline-checkbox">
                      <input type="checkbox" class="custom-control-input new_event_class" name="edit_event_classroom[]" value="2" id="customCheck5">
                      <label class="custom-control-label" for="customCheck5">ד-ו</label>
                  </div>
                  <div class="custom-control custom-checkbox inline-checkbox">
                      <input type="checkbox" class="custom-control-input new_event_class" name="edit_event_classroom[]" value="3" id="customCheck6">
                      <label class="custom-control-label" for="customCheck6">ז-ח</label>
                  </div>
                  <?/*
                  <label class="control-label"><?=$lang['classroom'];?></label>
                                    <select id="edit_event_classroom" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <option value="1">1-3</option>
                                        <option value="2">4-6</option>
                                        <option value="3">7-8</option>
                                    </select>
                  */?>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label"><?=$lang['type_of_job'];?></label>
                                    <select id="edit_type" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <option value="1"><?=$lang['teacher'];?></option>
                                        <option value="2"><?=$lang['instructor'];?></option>
                                        <option value="3"><?=$lang['tester'];?></option>
                                        <option value="4"><?=$lang['superintendent'];?></option>
                                        <option value="5"><?=$lang['help_test'];?></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label"><?=$lang['original_name'];?></label>
                                    <input required class="form-control form-white" id="edit_name" placeholder="<?=$lang['place_original_name'];?>" type="text" name="orig-name" />
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label"><?=$lang['lesson2'];?></label>
                                    <select id="edit_lesson_name" required class="form-control form-white new_event_class" name="category-color">
                                        <option value="1"><?=$lang['mathematics']?></option>
                                        <option value="2"><?=$lang['english'];?></option>
                                        <option value="3"><?=$lang['hebrew'];?></option>
                                        <option value="4"><?=$lang['arabic'];?></option>
                                        <option value="5"><?=$lang['science'];?></option>
                                        <option value="6"><?=$lang['tanah'];?></option>
                                        <option value="7"><?=$lang['grammatic'];?></option>
                                        <option value="8"><?=$lang['homeland'];?></option>
                                        <option value="9"><?=$lang['history'];?></option>
                                        <option value="10"><?=$lang['geographic'];?></option>
                                        <option value="11"><?=$lang['art'];?></option>
                                        <option value="12"><?=$lang['sport'];?></option>
                                        <option value="13"><?=$lang['other_lesson'];?></option>
                                    </select>
                                </div>						
                                <div class="col-md-12">
                                    <div id="edit_add_lesson">
										<?/*foreach ($lessons as $lesson){?>
												<div><?=$lesson['id'];?></div>
										<?}*/?>
                                    </div>
                                </div>
                                <!--<div class="col-md-12">
                                    <div class="card-header m-t-10" style="width: 100%;" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" style="display: block;" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne" class="link accordion_link">
                                                <?=$lang['details'];?><div style="display: inline-block;float: left;"><i class="fa fa-chevron-down"></i></div>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse col-md-12" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="card-body">
                                            <form id="form_ava" class="form-horizontal form-material"  enctype="multipart/form-data" method="post">
                                                <div class="form-group">
                                                    <label class="control-label"><?=$lang['coment'];?></label>
                                                    <textarea class="edit_coment form-control" rows="5"></textarea>
                                                </div>
                                                    <div class="form-group" id="edit_file_div">
                                                        <label class="control-label edit_file_label"><?=$lang['add_file']?></label>
                                                        <label style="display: block;" for="edit_file" style="position:relative;">
                                                            <span  class="btn span_edit btn-info  m-t-10"  aria-hidden="true"><?=$lang['select_file']; ?>
                                                            </span>
                                                            <input type="file" onchange="changeFileCss(this);" id="edit_file" name="gate" style="bottom: 0;display: none; height: 35px; opacity: 0; position: absolute; right: 0; width: 100%;">
                                                        </label>
                                                        <p class="file_info"></p>
                                                    </div>
                                                    <div class="form-group" style="display: none;" id="edit_file_delete">
                                                        <button id="delete_edit_file" type="button" class="btn btn-danger waves-effect"><?=$lang['delete_file'];?>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    <div class="modal-footer">
                        <button <?/*id="search"*/?> id="save_and_search" data-type="search"  class="btn btn-success waves-effect waves-light">
                            <i class="ti-search"> </i><?=$lang['st_search'];?>
                        </button>
                        <button type="button" id="edit_event" class="btn btn-success save-event waves-effect waves-light"><?=$lang['save_event'];?>
                        </button>
                        <button id="delete_edit_event" type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?=$lang['delete'];?>
                        </button>
                        <?/*<button id="close_edit_event" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><?=$lang['close'];?></button>          */?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Category -->
        <div class="modal fade none-border bs-example-modal-lg" id="add-new-event">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex flex-row-reverse">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong><?=$lang['add_event'];?></strong></h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label"><?=$lang['event_name'];?></label>
                                    <input required class="form-control form-white new_event_title" placeholder="<?=$lang['enter_event_name'];?>" type="text" name="category-name" />
                                </div>
                                <!-- <div class="col-md-6">
                                    <label class="control-label"><?=$lang['choose_event_color'];?></label>
                                    <select required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>"
                                    name="category-color">
                                    <option value="bg-success"><?=$lang['success'];?>
                                    </option>
                                    <option value="bg-danger"><?=$lang['danger'];?></option>
                                    <option value="bg-info"><?=$lang['info'];?></option>
                                    <option value="bg-primary"><?=$lang['primary'];?></option>
                                    <option value="bg-warning"><?=$lang['warning'];?></option>                                    <option value="bg-inverse"><?=$lang['inverse'];?></option>
                                    </select>                            </div>-->
                <div class="col-md-6" style="display:none;">
                                    <label class="control-label"><?=$lang['choose_date'];?></label>
                                    <!--<input required readonly style="opacity: 1;background-color:transparent;" type="text" class="form-control mydatepicker" name="datetimes">-->
                                    <input type="text" readonly style="opacity: 1;background-color:transparent;" class="form-control new_range one-calendar" placeholder="mm/dd/yyyy">
                                </div>

                                <!--<div class="col-md-6">
                                    <label class="control-label m-t-10"><?=$lang['time']?></label>
                                    <select id="time" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <?php foreach ($lessons as $value): ?>
                                        <?php if ($value['is_lesson'] != 1){
                                            continue;
                                        } ?>
                                        <option start="<?=$value['from_time']?>" end="<?=$value['to_time']?>"><?=$value['to_time'].' - '.$value['from_time']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div> -->

                                <div class="col-md-3">
                                    <label class="control-label m-t-10"><?=$lang['type_of_job'];?></label>
                                    <select id="type" required class="form-control form-white new_event_class" data-placeholder="<?=$lang['choose_event_color'];?>" name="category-color">
                                        <option value="1"><?=$lang['teacher'];?></option>
                                        <option value="2"><?=$lang['instructor'];?></option>
                                        <option value="3"><?=$lang['tester'];?></option>
                                        <option value="4"><?=$lang['superintendent'];?></option>
                                        <option value="5"><?=$lang['help_test'];?></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label m-t-10"><?=$lang['main_lesson_evnt'];?></label>
                                    <select id="lesson_name" required class="form-control form-white new_event_class" name="category-color">
                                        <option value="1"><?=$lang['mathematics']?></option>
                                        <option value="2"><?=$lang['english'];?></option>
                                        <option value="3"><?=$lang['hebrew'];?></option>
                                        <option value="4"><?=$lang['arabic'];?></option>
                                        <option value="5"><?=$lang['science'];?></option>
                                        <option value="6"><?=$lang['tanah'];?></option>
                                        <option value="7"><?=$lang['grammatic'];?></option>
                                        <option value="8"><?=$lang['homeland'];?></option>
                                        <option value="9"><?=$lang['history'];?></option>
                                        <option value="10"><?=$lang['geographic'];?></option>
                                        <option value="11"><?=$lang['art'];?></option>
                                        <option value="12"><?=$lang['sport'];?></option>
                                        <option value="13" selected><?=$lang['other_lesson'];?></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label m-t-10"><?=$lang['original_name'];?></label>
                                    <input required class="form-control form-white" id="orig_name" placeholder="<?=$lang['place_original_name'];?>" type="text" name="orig-name" />
                                </div>
                                <div class="col-md-3">
                                        <label class="control-label m-t-10 full-width"><?=$lang['classroom'];?></label>
                                      <div class="custom-control custom-checkbox inline-checkbox">
                                          <input type="checkbox" class="custom-control-input new_event_class" name="new_event_classroom[]" value="1" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">א-ג</label>
                                      </div>
                                      <div class="custom-control custom-checkbox inline-checkbox">
                                          <input type="checkbox" class="custom-control-input new_event_class" name="new_event_classroom[]" value="2" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">ד-ו</label>
                                      </div>
                                      <div class="custom-control custom-checkbox inline-checkbox">
                                          <input type="checkbox" class="custom-control-input new_event_class" name="new_event_classroom[]" value="3" id="customCheck3">
                                          <label class="custom-control-label" for="customCheck3">ז-ח</label>
                                      </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs profile-tab tabs_li" role="tablist" style="padding: 0;">
                                        </ul>
                                        <div class="tab-content tabs_div">
                                        </div>
                                </div>

                                <!--
                                <div class="col-md-12">
                                    <div class="card-header m-t-10" style="width: 100%" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" style="display: block;" data-parent="#accordion" class="link accordion_link" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <?=$lang['details'];?><div style="display: inline-block;float: left;"><i class="fa fa-chevron-down"></i></div>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse col-md-12" role="tabpanel" aria-labelledby="headingOne" style="">
                                        <div class="card-body">
                                            <form id="form_ava" class="form-horizontal form-material"  enctype="multipart/form-data" method="post">
                                                <div class="form-group">
                                                    <label class="control-label"><?=$lang['coment'];?></label>
                                                    <textarea class="new_coment form-control" rows="5"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label"><?=$lang['file_upload']?></label>
                                                    <label style="display: block;" for="new_file" style="position:relative;">
                                                        <span  class="btn span_new btn-info  m-t-10"  aria-hidden="true"><?=$lang['select_file']; ?>
                                                        </span>
                                                        <input type="file" onchange="changeFileCss(this);" id="new_file" name="gate" style="bottom: 0;display: none; height: 35px; opacity: 0; position: absolute; right: 0; width: 100%;">
                                                    </label>
                                                    <p class="file_info"></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="margin-left: 5px;" id="save_and_search" data-type="search" class="btn btn-success waves-effect waves-light save-category"><?=$lang['save_and_search'];?></button>
                        <button type="button" style="margin-left: 5px;" id="save_event" class="btn btn-success waves-effect waves-light save-category"><?=$lang['create_event'];?></button>
                        <button type="button" id="cans" class="btn btn-secondary waves-effect" data-dismiss="modal"><?=$lang['close'];?></button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .fc-event {
                cursor: pointer;
             }
             .fa-chevron-down {
                transition: all 0.5s;
             }
             .accordion_link:hover .fa-chevron-down {
                    color: #fb9678;
             }
             .toggle {
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                transform: rotate(180deg);
                transition: all 0.5s;
             }
             #profile_link{
                line-height: 28px;
                font-size: 18px;
                padding: 0 20px;
             }


        </style>
        <!-- END MODAL -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->    <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
    </div>
</div>
<div id="profile_mod" class="modal  fade in" tabindex="-1" role="dialog" aria-labelledby="profile_label" aria-hidden="true">
  <div class="modal-dialog modal-profile modal-profile-iframe modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex flex-row-reverse">
        <button type="button" class="close" style="margin:0;" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="profile_label"><?= $lang['view_profile']?></h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- The Modal -->
<div class="modal fade" id="myModalView">
  <div class="modal-dialog modal-lg" style="max-width: 80%!important;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div id="media" class="embed-responsive embed-responsive-16by9_">
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">סגור</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="comment_label" aria-hidden="true" id="fileselModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">בחירת קובץ</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div id="contnt" class="embed-responsive embed-responsive-16by9_ h500">
            <? //include('../sbadmin/school/lib-view.php'); ?>
            <iframe src="/lib-view.php" frameborder="0" width="100%" height="500"/></iframe>
            <!-- <iframe src="../sbadmin/school/lib-view.php" style="width: 100%;" frameborder="0" style="border:0" allowfullscreen> -->
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">סגור</button>
      </div>

    </div>
  </div>
</div>

<script>
    function isDate(dateArg) {
        var t = (dateArg instanceof Date) ? dateArg : (new Date(dateArg));    return !isNaN(t.valueOf());
    }
    function isValidRange(minDate, maxDate)
    {
        return (new Date(minDate) <= new Date(maxDate));
    }
    function changeFileCss(el)
    {
        jQuery(el).prev().removeClass('btn-info').addClass('btn-primary').html('<?=$lang['change']; ?>');
        jQuery(el).parent().next().html(jQuery(el).val());
    }
    function betweenDate(startDt, endDt)
    {
        var error = ((isDate(endDt)) && (isDate(startDt)) && isValidRange(startDt, endDt)) ? false : true;
        var between = [];
        if (error) console.log('error occured!!!... Please Enter Valid Dates');
        else {
            var currentDate = new Date(startDt),end = new Date(endDt);
            while (currentDate <= end) {
                between.push(new Date(currentDate));
                currentDate.setDate(currentDate.getDate() + 1);
            }
        }
        return between;
    }
    function newWorkingHours(elem){
      $('#new_working_hours').find('option').remove();
      lessonList = '';
      stSel = $('#nw_from_time').val().replace(/:/g, '');
      enSel = $('#nw_to_time').val().replace(/:/g, '');
      lsn = 0;
      for (var i = 0; i < stLessons.length; i++) {
        stLessons[i] = stLessons[i].replace(/:/g, '');
        enLessons[i] = enLessons[i].replace(/:/g, '');
        if ((stSel <= stLessons[i]) && (enSel >= enLessons[i]) && (stLessons[i] < enLessons[i])) {
          lsn++;
          $('#new_working_hours').append('<option value="'+lsn+'">'+lsn+'</option>');
        }
      }
    }
    function editWorkingHours(elem){
      $('#edit_working_hours').find('option').remove();
      lessonList = '';
      stSel = $('#ed_from_time').val().replace(/:/g, '');
      enSel = $('#ed_to_time').val().replace(/:/g, '');
      lsn = 0;
      for (var i = 0; i < stLessons.length; i++) {
        stLessons[i] = stLessons[i].replace(/:/g, '');
        enLessons[i] = enLessons[i].replace(/:/g, '');
        if ((stSel <= stLessons[i]) && (enSel >= enLessons[i]) && (stLessons[i] < enLessons[i])) {
          lsn++;
          $('#edit_working_hours').append('<option value="'+lsn+'">'+lsn+'</option>');
        }
      }
    }

    function updWorkingHours(elem){
        //var idelem = $(elem).attr('id');
        var idelem = $(elem).attr('id');
        var eday = $(elem).data('day');
        //alert(idelem.slice(0, 12)+' - '+idelem.slice(0, 10)+' - '+eday);
        if ((idelem.slice(0, 12) == 'nw_from_time') || (idelem.slice(0, 10) == 'nw_to_time')) {
            //'.new_from_date[data-day="'+eday+'"]'
      $('.new_working_hours[data-day="'+eday+'"]').find('option').remove();
      lessonList = '';
      stSel = $('.new_from_date[data-day="'+eday+'"]').val().replace(/:/g, '');
      enSel = $('.new_to_date[data-day="'+eday+'"]').val().replace(/:/g, '');
      lsn = 0;
      //alert('='+stLessons+'=');
      for (var i = 0; i < stLessons.length; i++) {

        stLessons[i] = stLessons[i].replace(/:/g, '');
        enLessons[i] = enLessons[i].replace(/:/g, '');
//alert('stSel: '+stSel+' | '+'stLessons[i]: '+stLessons[i]+' === '+'enSel: '+enSel+' | '+'enLessons[i]: '+enLessons[i]);
        if ((stSel <= stLessons[i]) && (enSel >= enLessons[i]) && (stLessons[i] < enLessons[i])) {
          lsn++;    
          $('.new_working_hours[data-day="'+eday+'"]').append('<option value="'+lsn+'">'+lsn+'</option>');
        }
      }
        
      $.ajax({
          url:"/events.php",
          type:"POST",
          data:{action:'get_lesson'},
          success:function(dat)
          {
              var x = JSON.parse(dat);
              var count = 0;              
              var $_new_from_date = $('.new_from_date[data-day="'+eday+'"]');
              var top_limit = $_new_from_date.val();
              var $_new_to_date = $('.new_to_date[data-day="'+eday+'"]');
              var bottom_limit = $_new_to_date.val();
              $('.time[data-day="'+eday+'"]').each(function(){
                  $('.time[data-day="'+eday+'"]').html('');
                  var l = 0;
                  for (var u = 0;u < x.length;u++){
                      if (x[u].is_lesson == 1){
                          l++;
                      }
                      var compare_top = moment(x[u].from_time, 'h:mm').isSameOrAfter(moment(top_limit, 'h:mm'));
                      var compare_bottom = moment(x[u].to_time, 'h:mm').isSameOrBefore(moment(bottom_limit, 'h:mm'));
                      if (compare_top && compare_bottom) {
                        // var asel = '';
                        // if ((x[u].from_time + ' - ' + x[u].to_time) == (zz.time)) {
                        //   var asel = " selected ";
                        // }
                          //console.log(x[u].from_time + ' - ' + x[u].to_time +' /// '+ JSON.stringify(zz));
                          var str = '<option value="' + x[u].from_time + ' - ' + x[u].to_time + '" start="' + x[u].from_time + '" end="' + x[u].to_time + '">';
                          // просмотр списка на сохраненном уроке
                          if (x[u].is_lesson == 1){
                              // l++;
                              str += l+'&nbsp'+ ' שיעור ';
                          } else {
                              str += '&nbsp;&nbsp; הפסקה ';
                          }
                          str += x[u].to_time + ' - ' + x[u].from_time;
                          str += '</option>';
                          $('.time[data-day="'+eday+'"]').append(str);
                      }
                  }
                  
                  // $(this).val(z[count].time);
                  // count++;
              })
          },
          error:function()
          {
              $('.ajax_error').css({
                  display: 'block',
              }).text(langAjaxError);
          },
      })

        } else {
      $('#edit_working_hours').find('option').remove();
      lessonList = '';
      stSel = $('#ed_from_time').val().replace(/:/g, '');
      enSel = $('#ed_to_time').val().replace(/:/g, '');
      lsn = 0;
      for (var i = 0; i < stLessons.length; i++) {

        stLessons[i] = stLessons[i].replace(/:/g, '');
        enLessons[i] = enLessons[i].replace(/:/g, '');
        if ((stSel <= stLessons[i]) && (enSel >= enLessons[i]) && (stLessons[i] < enLessons[i])) {
          lsn++;
          $('#edit_working_hours').append('<option value="'+lsn+'">'+lsn+'</option>');
        }
      }

      $.ajax({
          url:"/events.php",
          type:"POST",
          data:{action:'get_lesson'},
          success:function(dat)
          {
              // console.log('=^^^^^'+JSON.stringify(dat));
              var x = JSON.parse(dat);
              console.log(x);
              var count = 0;              
              var $_new_from_date = $('#ed_from_time');
              var top_limit = $_new_from_date.val();
              var $_new_to_date = $('#ed_to_time');
              var bottom_limit = $_new_to_date.val();
              $('.add_time').each(function(){
                  this_sel = $(this).prop('selectedIndex') + 1;
                  $('.add_time').html('');
                  var l = 0;
                  var lm = 0;
                  for (var u = 0;u < x.length;u++){
                      if (x[u].is_lesson == 1){
                          l++;
                      }
                      var compare_top = moment(x[u].from_time, 'h:mm').isSameOrAfter(moment(top_limit, 'h:mm'));
                      var compare_bottom = moment(x[u].to_time, 'h:mm').isSameOrBefore(moment(bottom_limit, 'h:mm'));
                      if (compare_top && compare_bottom) {
                          if (lm == this_sel) { atttr = 'selected'; } else { atttr = ''; }
                          lm++;
                          // var asel = '';
                          // if ((x[u].from_time + ' - ' + x[u].to_time) == (zz.time)) {
                          //   var asel = " selected ";
                          // }
                          //console.log(x[u].from_time + ' - ' + x[u].to_time +' /// '+ JSON.stringify(zz));
                          var str = '<option value="' + x[u].from_time + ' - ' + x[u].to_time + '" start="' + x[u].from_time + '" end="' + x[u].to_time + '" >';
                          // просмотр списка на сохраненном уроке
                          if (x[u].is_lesson == 1){
                              // l++;
                              str += l+'&nbsp'+ ' שיעור ';
                          } else {
                              str += '&nbsp;&nbsp; הפסקה ';
                          }
                          str += x[u].to_time + ' - ' + x[u].from_time;
                          str += '</option>';
                          $('.add_time').append(str);
                      }
                  }
                  
                  // $(this).val(z[count].time);
                  // count++;
              })
          },
          error:function()
          {
              $('.ajax_error').css({
                  display: 'block',
              }).text(langAjaxError);
          },
      })

        }

    }
</script>

<script>
jQuery(document).ready(function(){
  $(document).on("click", '.rmfile' , function(e){
    e.preventDefault();
    id = ''+$(this).data('id');
    n = $(this).data('n');
    $('#df_'+n+'_'+id).remove();
    ar = JSON.parse($('#fb_'+n).val());
    position = ar.indexOf(id);
    if ( ~position ) ar.splice(position, 1);
    $('#fb_'+n).val(JSON.stringify(ar));

  }); 
}); 
</script>

<script type="text/javascript">
    var langTime = '<?=$lang["time"]; ?>';
    var langAjaxError = '<?=$lang["ajax_error"]?>';
    var langYearOfEducation = '<?=$lang["year_of_educ"]?>';
    var langNumberClass = '<?=$lang["number_class"]?>';
    var langLesson = '<?=$lang["lesson"]?>';
    var langOriginalName = '<?=$lang["original_name"]?>';
    var langOriginalNamePlace = '<?=$lang["place_original_name"];?>';
    var langDetails = '<?=$lang["details"];?>';
    var langComent = '<?=$lang["coment"];?>';
    var langFileUpload = '<?=$lang["file_upload"]?>';
    var langSelectFile = '<?=$lang["select_file2"]; ?>';
    var langFieldError = '<?=$lang["field_error"]; ?>';
    var langEventAdd = '<?=$lang["event_add"]?>';
    var langReplaceFile = '<?=$lang["replace_file"];?>';
    var langAddFile = '<?=$lang["add_file"];?>';
    var langEventUpdate = '<?=$lang["event_updated"]?>';
    var langDeleteFile = '<?=$lang["al_delete_file"]?>';
    var langEventDelete = '<?=$lang["event_delete"]?>';
    var langEventDelete1 = '<?=$lang["del_event"]?>';
    var langMath = '<?=$lang["mathematics"]?>';
    var langEng = '<?=$lang["english"]?>';
    var langHeb = '<?=$lang["hebrew"]?>';
    var langArab = '<?=$lang["arabic"]?>';
    var langScience = '<?=$lang["science"]?>';
    var langTanah = '<?=$lang["tanah"]?>';
    var langGrammatic = '<?=$lang["grammatic"]?>';
    var langHomeland = '<?=$lang["homeland"]?>';
    var langHistory = '<?=$lang["history"]?>';
    var langGeographic = '<?=$lang["geographic"]?>';
    var langArt = '<?=$lang["art"]?>';
    var langSport = '<?=$lang["sport"]?>';
    var langOther_lesson = '<?=$lang["other_lesson"]?>';

    var lang_from_time = '<?=$lang["from_time"]?>';
    var lang_to_time = '<?=$lang["to_time"]?>';
    var lang_working_hours = '<?=$lang["working_hours_r"]?>';
</script>
<?php include '../tpl/sbadmin/footer.php' ?>

<script type="text/javascript" src="dist/js/calendar.js?<?=time()?>"></script>

<script>
jQuery(document).ready(function(){

    $(document).on('click', '.btnView2', function(e){ //$(".btnView2").click(function () {

        var media = $(this).data('media');

        var fileNameExt = media.substr(media.lastIndexOf('.') + 1);

        var wh = ($(window).height()-200)+'';
       
        if ($.inArray(fileNameExt.toLowerCase(), ['jpg', 'jpeg', 'png', 'bmp', 'gif']) != -1){
            $('#myModalView .modal-title').html('Picture '+fileNameExt.toUpperCase());
            $('#media').html('<div style=" style="width: 770px; height: '+wh+'px"><img id="mediaplay" src="'+media+'" style="maxwidth: 640px"></div>');
        }

        if ($.inArray(fileNameExt.toLowerCase(), ['pdf']) != -1){
            $('#myModalView .modal-title').html('Document '+fileNameExt.toUpperCase());
            $('#media').html('<div style="height: '+wh+'px; width: 770px"><iframe src="https://docs.google.com/viewer?url=https://crm.fill-in.systems/'+media+'&embedded=true" style="width: 770px; height: 750px;" frameborder="0">Ваш браузер не поддерживает фреймы</iframe></div>');
        }
        
        if ($.inArray(fileNameExt.toLowerCase(), ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']) != -1){
            $('#myModalView .modal-title').html('Document '+fileNameExt.toUpperCase());
            $('#media').html('<div style="height: '+wh+'px; width: 770px"><iframe src="https://view.officeapps.live.com/op/view.aspx?src=https://crm.fill-in.systems/'+media+'" width="800" height="550" frameborder="0">Ваш браузер не поддерживает фреймы</iframe></div>');
        }
    });
    $('#fileselModal').on('hidden.bs.modal', function () {
        $('body').css('overflow', 'hidden');                // скрыть прокрутку body
        $('#edit-event').css('overflow', 'auto');           // разрешить прокрутку #edit-event (1-го)
    })
    $('#myModalView').on('hidden.bs.modal', function () {
        $('body').css('overflow', 'hidden');
        $('#edit-event').css('overflow', 'auto');
        $('#add-new-event').css('overflow', 'auto');
    })
    $('#edit-event').on('hidden.bs.modal', function () {
        $('body').css('overflow', 'auto');
    })
    $('#add-new-event').on('hidden.bs.modal', function () {
        $('body').css('overflow', 'auto');
    })

  $(document).on('click', '.input-group-text', function(){
    $(this).parent().next().click();
  })

  $('#edit-event .close').click(function(e){
	  if (!$('#edit-event').hasClass('disabled-all')){
		  if (window.confirm("האם ברצונך לשמור את השינויים בדרישה ?")) { // "האם ברצונך לשמור את הדרישה ?"
			$('#edit_event').click();
			return false;
		  }
	  }
  });
  $('#add-new-event .close').click(function(e){
	  if (!$('#add-new-event').hasClass('disabled-all')){
		  if (window.confirm("האם ברצונך לשמור את השינויים בדרישה ?")) { // "האם ברצונך לשמור את הדרישה ?"
			$('#save_event').click();
			return false;
		  }
	  }
  });
  $('#add-new-event #cans').click(function(e){
	  if (!$('#add-new-event').hasClass('disabled-all')){
		  if (window.confirm("האם ברצונך לשמור את השינויים בדרישה ?")) { // "האם ברצונך לשמור את הדרישה ?"
            $('#save_event').click();
			//$('#save_event').click();
			return false;
		  }
	  }
  });  

  window.closeModal = function(){
      $('#fileselModal').modal('hide');
  };
  
  $("#fileselModal").on("hidden.bs.modal", function () {
    // document.getElementById('myiframe').onload = function()
    // {
    //    var a = this.contentWindow || this.contentDocument;
    //    a.document.body.bgColor = 'yellow';
    // }
  });  

    var cloneToolbar = $('<div class="toolbar-clone"></div>').css({
        display: 'none',
        height: $('.fc-toolbar').outerHeight() + 'px'
    });
    $('.fc-toolbar').after(cloneToolbar);

    // clone thead
    var toolbar = $('.fc-toolbar');
    var container = $('.fc thead.fc-head');
    var cloneHead = $('<tr class="fc-first fc-last cloned-head"></tr>').css({
        zIndex: 5,
        display: 'none'
    }).appendTo(container);
    $('#calendar').css({ position: 'relative'});
    $('#calendar thead th').each(function() {
        var cloned = $(this).clone();
        cloned.css('width', $(this).outerWidth());
        cloned.appendTo(cloneHead);
    });

    $('#fileselModal').on('show.bs.modal', function(e) {
        yId = e.relatedTarget.id;
        // alert(yId);
        // $(this).find('.modal-title').text(yId);
        $(this).find('iframe').attr("src", "/lib-view.php?idl="+yId);
    })

    $(document).on('scroll', function() {
        var height = $('.navbar').height();
        var scroll = $(document).scrollTop() + height;
        //var show = container.offset().top + cloneHead.outerHeight() < scroll;
        var show = $('#calendar').offset().top + cloneHead.outerHeight() < scroll;
        //console.log(scroll + ' ' + $('#calendar').offset().top + ' ' + cloneHead.outerHeight());
        if (show) {
            cloneToolbar.show();
            toolbar.css({
              position: 'absolute',
              zIndex: '5',
              width: '100%',
              background: '#ffffff',
              top: scroll - 335 + $('.fc-toolbar').outerHeight()
            });
            cloneHead.show().css({
              position: 'absolute',
              top: scroll - 335 + $('.fc-toolbar').outerHeight()
            });
        } else {
            cloneToolbar.hide();
            cloneHead.hide();
            toolbar.css({
              position: 'static'
            });
        }
    });

});


</script>