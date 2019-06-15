<?php
    $title = "Home";
    chdir($_SERVER['DOCUMENT_ROOT']);
    include 'boilerplate-top.php';
?>

<p>
Please check the calendar (embedded below) which should have all of our events. <br> Click on an event to see the room location.
<br><br>
If you find any discrepancies on the calendar then please <a href="/contact">let us know</a> and we'll get them fixed.
<br><br>
We have an iCal format link if you want to import the calendar to your own personal calendar:<br>
<a href="https://calendar.google.com/calendar/ical/warwickvgdsoc%40googlemail.com/public/basic.ics">https://calendar.google.com/calendar/ical/warwickvgdsoc%40googlemail.com/public/basic.ics</a>
<br><br>
Note that the <b>map link</b> is automatically generated and goes to google maps! We recommend you use the <a href="http://campus.warwick.ac.uk">campus map</a> instead.
</p>
<br><br>

<iframe class="calendar" src="https://calendar.google.com/calendar/embed?src=warwickvgdsoc%40googlemail.com&ctz=Europe/London&mode=AGENDA">
</iframe>

<?php
    include 'boilerplate-bottom.php';
?>


