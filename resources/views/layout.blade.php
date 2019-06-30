<!DOCTYPE html>
<html>
    <head>
        <!--head-->
        <meta charset="utf-8">
        <title>チャンネル登録者数１万人未満のYOUTUBER検索|LittleTubers</title>

        <!--ファビコン-->
        <?php
        //echo html_tag('link', array(
        //    'rel' => 'icon',
        //    'href' => Asset::get_file('favicon.ico', 'img'),
        //));
        //?>

        <!--CSS読み込み-->
        <?//= Asset::css('style.css') ?>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />

        <!--fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!--日本語フォント-->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC:400,700&amp;subset=japanese" rel="stylesheet">

    </head>
<body>

{{--ヘッダー--}}
<header class="uk-section uk-section-primary uk-section-xsmall">
    <div class="uk-container uk-container-small">
        <div uk-grid>
            <div class="uk-width-1-2 ">ロゴ</div>
            <div class="uk-width-1-2 uk-text-right">メニュー</div>
        </div>
    </div>
</header>
{{--コンテンツ--}}
<div class="uk-container uk-container-small">
    @yield('content')
</div>
{{--フッター--}}
<footer class="uk-section uk-section-primary uk-section-xsmall">
    <div class="uk-container uk-container-small">
        Copyright LittleTubers  All Rights Reserved.
    </div>
</footer>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>

</body>
</html>