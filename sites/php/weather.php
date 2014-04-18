	<?php
$weather_data_now = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=52&lon=13");
$weather_data_today = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=52&lon=13");
?>

<script type="text/javascript">
    var weather_data_now = <?php echo $weather_data_now; ?>;
    var weather_data_today = <?php echo $weather_data_today; ?>;
</script>

<script src="../js/weather.js"></script>