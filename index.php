<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Drive</title>
    <link rel="stylesheet" href="stil.css?v67f3">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link id="favicon" rel="icon" type="image/png" href="./Assets/Imgs/default-icon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" />
</head>
<body>


<script>
	window.aiptag = window.aiptag || {cmd: []};
	aiptag.cmd.display = aiptag.cmd.display || [];
	aiptag.cmd.player = aiptag.cmd.player || [];

	//CMP tool settings
	aiptag.cmp = {
		show: true,
		position: "centered",  //centered, bottom
		button: true,
		buttonText: "Privacy settings",
		buttonPosition: "bottom-left" //bottom-left, bottom-right, bottom-center, top-left, top-right
	}
	aiptag.cmd.player.push(function() {
		aiptag.adplayer = new aipPlayer({
			AD_WIDTH: 960,
			AD_HEIGHT: 540,
			AD_DISPLAY: 'center', //default, fullscreen, fill, center, modal-center
			LOADING_TEXT: 'loading advertisement',
			PREROLL_ELEM: function(){return document.getElementById('videoad')},
			AIP_COMPLETE: function (state)  {
				 //lesson_detail();
			}
		});

			});

		function show_videoad() {
 		if (typeof aiptag.adplayer !== 'undefined') {
			aiptag.cmd.player.push(function() { aiptag.adplayer.startVideoAd(); });
		} else {
  			//alert("Ad Could not be loaded, load your content here");
			aiptag.adplayer.aipConfig.AIP_COMPLETE();
		}
	}
		</script>
	<script async src="//api.adinplay.com/libs/aiptag/pub/AGO/grims.pro/tag.min.js"></script>


<div id="videoad"></div>


   <header>
    <nav>
        <ul>
            <li><a id="settings-btn" href="#">Apperance Settings</a></li>
			<li><a href="https://yohox.pro">New Lessons</a></li>
			<li><a href="/">Home</a></li>
            
        </ul>
    </nav>
	<a href="/">
     <div class="logo">
        quiz-88.org
    </div>
	</a>
</header>

<div class="settin">
<h2>Apperance Settings</h2>
<div id="icons-container" style="display: flex; flex-wrap: wrap;">

<style>
.i_img{
	width: 40px;height: 40px;border-radius: 100px;padding: 4px;background: #fff;
}
</style>
   <div class="icon-container" data-icon="./img/google.webp?v4345" data-title="Google">
      <img src="./img/google.webp?v4345" alt="Google" class="i_img">
      <div class="icon-title">Google</div>
   </div>
   <div class="icon-container" data-icon="./img/google-classroom.webp?v4345" data-title="Google Classroom">
      <img src="./img/google-classroom.webp?v4345" alt="Google Classroom" class="i_img">
      <div class="icon-title">Google Classroom</div>
   </div>
   <div class="icon-container" data-icon="./img/google-drive.webp?v4345" data-title="Google Drive">
      <img src="./img/google-drive.webp?v4345" alt="Google Drive" class="i_img">
      <div class="icon-title">Google Drive</div>
   </div>
   <div class="icon-container" data-icon="./img/canvas.webp?v4345" data-title="Dashboard">
      <img src="./img/canvas.webp?v4345" alt="Dashboard" class="i_img">
      <div class="icon-title">Dashboard</div>
   </div>
   <div class="icon-container" data-icon="./img/powerschool.webp?v4345" data-title="Student and Parent Sign">
      <img src="./img/powerschool.webp?v4345" alt="Student and Parent Sign" class="i_img">
      <div class="icon-title">Student and Parent Sign</div>
   </div>
</div>

 </div> 
 
  
	  <div class="axe1">
	  		<div class="class_r" id='grims-pro_970x250'>
		<script type='text/javascript'>
			aiptag.cmd.display.push(function() { aipDisplayTag.display('grims-pro_970x250'); });
		</script>
	</div>
	</div>
	
    <div  id="lessonsContainer">
		  <?php
$jsonData = file_get_contents('lessons.json');
$lessons = json_decode($jsonData, true);

usort($lessons, function($a, $b) {
    preg_match('/(\d+)/', $a['lesson'], $a_matches);
    preg_match('/(\d+)/', $b['lesson'], $b_matches); 
    return (int)$a_matches[0] - (int)$b_matches[0];
});

$totalLessons = count($lessons);

$reklam_limiti = 36;
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
	</div>
   
<div class="article-container">


</div>


<?php
$settings = file_get_contents('set.json');
$settings_data = json_decode($settings, true);
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
document.getElementById('settings-btn').addEventListener('click', function() {
	const sites = <?php echo json_encode($settings_data['sites']); ?>;
	let iconsHtml = '<div id="icons-container" style="display: flex; flex-wrap: wrap;">';
	sites.forEach(function(site) {
	iconsHtml += "<div class='icon-container' data-icon='" + site.icon + "' data-title='" + site.title + "'>";
	iconsHtml += "<img src='" + site.icon + "' alt='" + site.site_name + "' style='width: 40px; height: 40px;'>";
	iconsHtml += "<div class='icon-title'>" + site.title + "</div>";  
	iconsHtml += "</div>";
	});

	Swal.fire({
	title: 'Select Your Apperance',
	html: iconsHtml,
	showCloseButton: true,
	showConfirmButton: false,
	focusConfirm: false,
	width: 800,
	padding: '20px'
	});

	$('#icons-container .icon-container').on('click', function() {
	var iconUrl = $(this).data('icon');
	var pageTitle = $(this).data('title');
	$('#favicon').attr('href', iconUrl);
	$('title').text(pageTitle);
	localStorage.setItem('selectedIcon', iconUrl);
	localStorage.setItem('selectedTitle', pageTitle);
	 location.reload();
	});
});

	$('#icons-container .icon-container').on('click', function() {
	var iconUrl = $(this).data('icon');
	var pageTitle = $(this).data('title');
	$('#favicon').attr('href', iconUrl);
	$('title').text(pageTitle);
	localStorage.setItem('selectedIcon', iconUrl);
	localStorage.setItem('selectedTitle', pageTitle);
	 location.reload();
	});

 $(document).ready(function() {
    if(localStorage.getItem('selectedIcon') && localStorage.getItem('selectedTitle')) {
        var selectedIcon = localStorage.getItem('selectedIcon');
        var selectedTitle = localStorage.getItem('selectedTitle');
        $('#favicon').attr('href', selectedIcon);
        $('title').text(selectedTitle);
    }
});
</script>

    <script>
$(document).ready(function() {
    $('#loadLessonsBtn').click(function() {
		$(this).hide();
        $.ajax({
            url: 'lessons.php',
            type: 'GET',
            success: function(response) {
                $('#lessonsContainer').fadeIn();          
                $('#lessonsContainer').empty();          
                $('#lessonsContainer').html(response);
				$('.lesson-item').each(function(index) {
                    $(this).css('animation-delay', `${index * 0.0125}s`);
                    $(this).addClass('lesson-item');  
                });
            },
            error: function() {
                
            }
        });
    });
});

 
  </script>
  
<div id="iframeContainer"> 
    <button id="closeButton">Close</button>
    <iframe id="gameIframe" src=""></iframe>
</div>
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

 <script async src="https://www.googletagmanager.com/gtag/js?id=G-37PPXCMTVK'"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E7V7ZM331M');
</script>

</body>
</html> 