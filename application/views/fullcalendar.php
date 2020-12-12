<!DOCTYPE html>
<html>
<head>
    <title>Fullcalendar in Codeigniter</title>
    <?php $this->load->view('head');  ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php 
		$this->load->view('top_bar'); 
		$this->load->view('left_sidebar');
	?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        FullCalender
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">FullCalender</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
      <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <div id="calendar"></div>
            </div>            
          </div>          
        </div>
      </div>
    </section>
  </div>
  <?php 
	$this->load->view('footer'); 
	$this->load->view('right_sidebar');
?>
</div>
<?php $this->load->view('script'); ?>
<script src="<?php echo base_url(); ?>assets/bower_components/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script>
  $(function () {
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      events :<?php echo $event; ?>
    })
  })
</script>
</body>
</html>
