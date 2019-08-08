<?php include 'header.php';?> 
<style type="text/css">
    .table {
      table-layout:fixed;
    }

    .table td {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .form-control:focus, .srchh {
      border-color: #fb9678;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(251, 150, 120, 0.6);
    }

</style>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor"><?=$admin_lang['album']?></h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form method="POST">
                          <div class="row m-b-10">
                            <div class="col-6">
                              <input type="text" id="search" name="search" class="form-control" placeholder="Search" value="<?= $search?>">
                            </div>
                            <div class="col">
                              <a class="btn btn-primary pull-right add"><?=$admin_lang['add']?></a>
                            </div>
                          </div>
                        </form>
                        <table class="table table-striped table-sm table-bordered">
                          <thead>
                            <tr>
                              <th width="400"><?=$admin_lang['name']?></th>
                              <th><?=$admin_lang['description']?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?
                            foreach ($res as $k => $row) { ?>
                            <tr>
                              <td><a href="?action=show&id=<?= $row['id']?>"><?= $row['name']?></a></td>
                              <td><?= $row['description']?></td>
                            </tr>
                            <? } ?>
                          </tbody>
                        </table>

                        <div class="pagination m-b-10">
                            <?= $pager?>
                        </div>



<!-- Hidden bottom block -->
                    <div id="add" class="row d-none">


<!-- Add new composition -->
                        <div class="col-6">
                            <div class="card n_composition">
                                <div class="card-body">

                        <h4 class="text-themecolor"><span id="awrd"><?= $actionword ?></span> <?=$admin_lang['album']?></h4>

                        <form method="POST">
                          <input type="hidden" id="action" name="action" value="">
                          <input type="hidden" id="module" name="module" value="album">
                          <div class="form-row">
                            <div class="col-12 m-b-10">
                              <input type="text" id="name" class="form-control autocomplete" placeholder="<?=$admin_lang['album']?> name" value="<?=$item_name?>">
                              <input type="hidden" id="item_id" name="item_id" value="<?=$item_id?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12 m-b-10">
                            <textarea class="form-control" rows="10" placeholder="Description" id="desc" name="desc" value="<?=$item_desc?>"></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-4 m-b-10">
                              <input type="text" class="form-control" id="alb_date" name="alb_date">
                            <!-- <input type="file" id="gallery-photo-add"> -->
                            </div>
                          </div>                          
                          <div class="form-row">
                            <label class="btn btn-warning">
                                Select image file <input type="file" id="gallery-photo-add" hidden>
                            </label>
                            <!-- <input type="file" id="gallery-photo-add"> -->
                          </div>
                          <div class="form-row">
                            <a id="sub" class="btn btn-primary"><?=$admin_lang['saveword']?> <?=$admin_lang['album']?></a>
                            <a id="cancel" class="btn m-l-10" style="background-color: #dedede;"><?=$admin_lang['cancelword']?></a>
                          </div>
                        </form>
                                </div>
                            </div>
                        </div>

                        <hr/>

<!-- Add new ... -->
                        <div class="col-6">
                          <div class="form-row">
                            <div class="col-12 m-b-10">
                              <table class="table table-sm table-bordered table-hover">
<!--                                 <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead> -->
                                <tbody>
                                  <tr>
                                    <!-- <th scope="row">1</th> -->
                                    <td>Mark Otto</td>
                                    <td>artist</td>
                                    <td width="50"><a href="#" class="btn btn-danger btn-sm rm">x</a></td>
                                  </tr>
                                  <tr>
                                    <!-- <th scope="row">2</th> -->
                                    <td>Jacob Thornton</td>
                                    <td>performer</td>
                                    <td width="50"><a href="#" class="btn btn-danger btn-sm rm">x</a></td>
                                  </tr>
                                  <tr>
                                    <!-- <th scope="row">1</th> -->
                                    <td>Mark Otto</td>
                                    <td>artist</td>
                                    <td width="50"><a href="#" class="btn btn-danger btn-sm rm">x</a></td>
                                  </tr>
                                  <tr>
                                    <!-- <th scope="row">2</th> -->
                                    <td>Jacob Thornton</td>
                                    <td>performer</td>
                                    <td width="50"><a href="#" class="btn btn-danger btn-sm rm">x</a></td>
                                  </tr>
                                </tbody>
                              </table>                            
                            </div>
                          </div>
                        </div>

                    </div> <!-- class add -->

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== --> 
<?php include 'footer.php';?>  

<script type="text/javascript">
  $(function() {

    <? if ($action == "show") { ?>
      $('#action').val('update');
      $('#add').removeClass('d-none');
    <? } ?>

    $('#alb_date').daterangepicker({
      buttonClasses: ['btn', 'btn-sm'],
      applyClass: 'btn-danger',
      cancelClass: 'btn-inverse',
      startDate: moment().startOf('month'),
      singleDatePicker: true,
      drops: 'up',
      endDate: moment(),
        locale: {
          "direction": "rtl",
            "format": 'DD/MM/YYYY',
            "separator": " - ",
            "applyLabel": "עדכן תאריך",
            "cancelLabel": "בטל",
            "fromLabel": "מ",
            "toLabel": "עד",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "א'",
                "ב'",
                "ג'",
                "ד'",
                "ה'",
                "ו'",
                "ש'"
            ],
            "monthNames": [
                "ינואר",
                "פברואר",
                "מרץ",
                "אפריל",
                "מאי",
                "יוני",
                "יולי",
                "אוגוסט",
                "ספטמבר",
                "אוקטובר",
                "נובמבר",
                "דצמבר"
            ],
            "firstDayOfWeek": 7
        }
  });


  });
</script>