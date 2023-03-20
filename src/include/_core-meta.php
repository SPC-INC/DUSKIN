<?php
/*
########     ###     ######  ########
##     ##   ## ##   ##    ## ##
##     ##  ##   ##  ##       ##
########  ##     ##  ######  ######
##     ## #########       ## ##
##     ## ##     ## ##    ## ##
########  ##     ##  ######  ########
*/
// デフォルトの情報を設定
$meta = array(
    'sitetop' => '/', // https～末尾スラッシュまでの完全なTOPページURL
    'title' => '【メリーメイド】家事代行サービス', // サイトタイトル
    'description' => 'ダスキンが運営する家事代行サービス【メリーメイド】の、お掃除おまかせサービス、家事おてつだいサービスの特設サイトです。面倒な水回りのお掃除や日常の家事はプロにお任せ！専用の道具＆徹底した品質保証で隅々までぴかぴかにします。', // デフォルトディスクリプション
    'keyword' => '家事代行,メリーメイド,ダスキン,ハウスクリーニング', // キーワード　,で区切って指定
);

/*
########     ###     ######   ########
##     ##   ## ##   ##    ##  ##
##     ##  ##   ##  ##        ##
########  ##     ## ##   #### ######
##        ######### ##    ##  ##
##        ##     ## ##    ##  ##
##        ##     ##  ######   ########
*/
// ページ個別のメタ情報を設定
$pageMeta = array(
    'hoge' => array(
        'title' => 'テストページ1 | テストサイト',
        'keyword' => 'テスト,ほげ',
        'description' => '下層ページメタ情報のサンプルです。',
    ),
    'fuga' => array(
        'title' => 'テストページ2 | テストサイト',
        'keyword' => 'テスト,ふが',
        'description' => '下層ページメタ情報のサンプルその2です。',
    ),

);



// 以下基本的には調整不要

// デフォルトのタイトルをサイト名とする
$meta['sitename'] = $meta['title'];

// 個別データがあればそれぞれ差し替え
if (!empty($pageMeta[IS_PAGE]['title'])) {
    $meta['title'] = $pageMeta[IS_PAGE]['title'];
}
if (!empty($pageMeta[IS_PAGE]['description'])) {
    $meta['description'] = $pageMeta[IS_PAGE]['description'];
}
if (!empty($pageMeta[IS_PAGE]['keyword'])) {
    $meta['keyword'] = $pageMeta[IS_PAGE]['keyword'];
}

//カノニカルURLを形成
$meta['canonical'] = $meta['sitetop'] . SLUG;

return $meta;
