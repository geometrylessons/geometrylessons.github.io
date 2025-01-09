<?php
$jsonData = file_get_contents('lessons.json');
$lessons = json_decode($jsonData, true);

usort($lessons, function($a, $b) {
    preg_match('/(\d+)/', $a['lesson'], $a_matches);
    preg_match('/(\d+)/', $b['lesson'], $b_matches); 
    return (int)$a_matches[0] - (int)$b_matches[0];
});

$totalLessons = count($lessons);

$reklam_limiti = 30;
?>


<div class="lessons-grid">
    <?php for ($i = 0; $i < $reklam_limiti && $i < $totalLessons; $i++): ?>
        <div class="lesson-item">
            <a href="#" onclick="openLesson('lessons/<?php echo htmlspecialchars($lessons[$i]['lesson']); ?>'); return false;">
                <img src="lessons-img/<?php echo htmlspecialchars($lessons[$i]['lesson']); ?>.webp" alt="<?php echo htmlspecialchars($lessons[$i]['lesson']); ?>">
            </a>
        </div>
    <?php endfor; ?>
</div>

<div class="axe1">

	<div class="class_r" id='grims-pro_970x250'>
		<script type='text/javascript'>
			aiptag.cmd.display.push(function() { aipDisplayTag.display('grims-pro_970x250'); });
		</script>
	</div>

</div>

<?php if ($totalLessons > $reklam_limiti): ?>
    <div class="lessons-grid">
        <?php for ($i = $reklam_limiti; $i < $totalLessons; $i++): ?>
            <div class="lesson-item">
                <a href="#" onclick="openLesson('lessons/<?php echo htmlspecialchars($lessons[$i]['lesson']); ?>'); return false;">
                    <img src="lessons-img/<?php echo htmlspecialchars($lessons[$i]['lesson']); ?>.webp" alt="<?php echo htmlspecialchars($lessons[$i]['lesson']); ?>">
                </a>
            </div>
        <?php endfor; ?>
    </div>
<?php endif; ?>



  <script>
function openLesson(lessonLink) {
	show_videoad();
     $('#gameIframe').attr('src', lessonLink);
    $('#iframeContainer').fadeIn();
}

$('#closeButton').click(function() {
     $('#iframeContainer').fadeOut(function() {
        $('#gameIframe').attr('src', '');
    });
});
</script>