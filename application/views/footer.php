  
<?php defined('BASEPATH') or exit('No direct scripts access allowed"!') ?>

  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery2.js">
  <script src="js/din.js">  
    
  </script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>

      $(function(){ 
       $('#seletor-up').click(function()
         {$('#painel').hide('slow');
       });
        $('#seletor-down').click(function()
         {$('#painel').show('slow');
       });
        $('#seletor-up1').click(function()
         {$('#painel1').hide('slow');
       });
        $('#seletor-down1').click(function()
         {$('#painel1').show('slow');
       });
      });


      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?php echo base_url('assets/js/jquery2.js')?>">
  
    
  </script>
  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-ui-1.10.4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.9.2.custom.min.js')?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url('assets/assets/jquery-knob/js/jquery.knob.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.sparkline.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.js')?>"></script>
  <!-- jQuery full calendar -->
  <script src="<?php echo base_url('assets/js/fullcalendar.min.js')?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/fullcalendar.js')?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('assets/js/calendar-custom.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.rateit.min.js')?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('assets/js/jquery.customSelect.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/chart-master/Chart.js')?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('assets/js/sparkline-chart.js')?>"></script>
    <script src="<?php echo base_url('assets/js/easy-pie-chart.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-jvectormap-world-mill-en.js')?>"></script>
    <script src="<?php echo base_url('assets/js/xcharts.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.autosize.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.placeholder.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/gdp-data.js')?>"></script>
    <script src="<?php echo base_url('assets/js/morris.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sparklines.js')?>"></script>
    <script src="<?php echo base_url('assets/js/charts.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
    <script>

      $(function(){ 
       $('#seletor-up').click(function()
         {$('#painel').hide('slow');
       });
        $('#seletor-down').click(function()
         {$('#painel').show('slow');
       });
        $('#seletor-up1').click(function()
         {$('#painel1').hide('slow');
       });
        $('#seletor-down1').click(function()
         {$('#painel1').show('slow');
       });
      });


      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
   

    
      //custom select box
    
      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
