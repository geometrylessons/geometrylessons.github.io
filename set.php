<?php
 $settings = file_get_contents('set.json');
$settings_data = json_decode($settings, true);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayarlar</title>

     <link id="favicon" rel="icon" type="image/png" href="./img/google.webp?v2">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>Apperance Settings</h1>

     <div id="icons-container">
        <?php
        foreach ($settings_data['sites'] as $site) {
            echo '<div class="icon-container" style="display: inline-block; margin-right: 10px; cursor: pointer;" data-icon="'.$site['icon'].'" data-title="'.$site['title'].'">';
            echo '<img src="'.$site['icon'].'" alt="'.$site['site_name'].'" style="width: 40px; height: 40px;">';  
            echo '</div>';
        }
        ?>
    </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
             if(localStorage.getItem('selectedIcon') && localStorage.getItem('selectedTitle')) {
                var selectedIcon = localStorage.getItem('selectedIcon');
                var selectedTitle = localStorage.getItem('selectedTitle');
                $('#favicon').attr('href', selectedIcon);
                $('title').text(selectedTitle);
            }

             $('.icon-container').on('click', function() {
                var iconUrl = $(this).data('icon');
                var pageTitle = $(this).data('title');

                 $('#favicon').attr('href', iconUrl);
                $('title').text(pageTitle);

                 localStorage.setItem('selectedIcon', iconUrl);
                localStorage.setItem('selectedTitle', pageTitle);

                 location.reload();
            });
        });
    </script>

</body>
</html>
