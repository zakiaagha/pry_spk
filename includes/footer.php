<footer class="text-center">&copy; 2015</footer>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/exporting.js"></script>
    <script>
    var chart1; // globally available
    $(document).ready(function() {
          chart1 = new Highcharts.Chart({
             chart: {
                renderTo: 'container2',
                type: 'column'
             },  
             title: {
                text: 'Grafik Perangkingan '
             },
             xAxis: {
                categories: ['Alternatif']
             },
             yAxis: {
                title: {
                   text: 'Jumlah Nilai'
                }
             },
                  series:            
                [
                <?php
                while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
                      ?>
                     //data yang diambil dari database dimasukan ke variable nama dan data
                     //
                      {
                          name: '<?php echo $row4['nama_alternatif'] ?>',
                          data: [<?php echo $row4['hasil_alternatif'] ?>]
                      },
                      <?php } ?>
                ]
          });
       });  
       </script>
    </body>
</html>