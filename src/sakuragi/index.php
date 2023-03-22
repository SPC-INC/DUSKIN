<?php
$include = '../include/'; // パーツ用パス
$home = '../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'sakuragi', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<?php
//
//   ####    ###    ##  ##  ##   ##  #####      ###     ####    ##
//  ##      ## ##   ## ##   ##   ##  ##  ##    ## ##   ##       ##
//   ###   ##   ##  ####    ##   ##  #####    ##   ##  ##  ###  ##
//     ##  #######  ## ##   ##   ##  ##  ##   #######  ##   ##  ##
//  ####   ##   ##  ##  ##   #####   ##   ##  ##   ##   ####    ##
//
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">
    <div class="top__bg">
        <img src="<?php echo HOME ?>img/top_bg.png" alt="">
    </div>
    <div class="w1000 wrap flex bet top">
        <div class="topLeft">
            <h2 class="topLeft__title">
                <img src="<?php echo HOME ?>img/merry_maids.svg" alt="merry maids">
                <span class="topLeft__title--sub">
                    家事代行サービス
                </span>
            </h2>
            <div class="topLeft__list">
                <a href="#topServiceSouji" class="topLeft__link flex bet vcenter op">
                    <div class="">
                        <span class="topLeft__link--sub">
                            キレイにこだわりたいあなたへ
                        </span>
                        <span class="topLeft__link--main">
                            お掃除おまかせサービス
                        </span>
                    </div>
                    <i class="icon icon-right"></i>
                </a>
                <a href="#topServiceKaji" class="topLeft__link flex bet vcenter op">
                    <div class="">
                        <span class="topLeft__link--sub">
                            家事の負担を軽減したいあなたへ
                        </span>
                        <span class="topLeft__link--main">
                            家事おてつだいサービス
                        </span>
                    </div>
                    <i class="icon icon-right"></i>
                </a>
            </div>
            <a class="topLeft__btn op md-btn pink" href="#topContact">
                無料相談・お見積りはこちら
            </a>

            <div class="topLeftInfo">
                <div class="topLeftInfo__title">
                    電話で無料相談・お見積りはこちら
                </div>
                <div class="topLeftInfo__tel flex bet hcenter vcenter">
                    <span class="topLeftInfo__num flex vcenter robo">
                        <i class="icon icon-phone"></i>
                        0120-388-093
                    </span>
                    <span class="topLeftInfo__open">
                        8:00～20:00<br>年中無休
                    </span>
                </div>
            </div>
        </div>
        <div class="topSP">
            <a class="topBottom" href="#topContact">
                無料相談・お見積り
                <i class="icon icon-down"></i>
            </a>
            <section class="topMv">
                <div class="topMv__img">
                    <img src="<?php echo HOME ?>img/top_mv.png" alt="">
                </div>
                <div class="topMv__bottom">
                    <img src="<?php echo HOME ?>img/merry_maids_white.svg" alt="" class="topMv__bottom--logo">
                    <span class="topMv__bottom--head">
                        家事代行サービス
                    </span>
                </div>
            </section>

            <section class="topLink">
                <div class="wrap sp-wrap">
                    <div class="topLinkBtnWrap flex bet">
                        <div class="topLinkBtn__wrap topLinkBtn__wrap--blue">
                            <img src="<?php echo HOME ?>img/shape_01_blue.svg" alt="" class="shape shape--left">
                            <img src="<?php echo HOME ?>img/shape_02_blue.svg" alt="" class="shape shape--right">
                            <span class="topLinkBtn__wrap--underline">
                                キレイに
                            </span>
                            <br>
                            <span class="topLinkBtn__wrap--underline">
                                こだわりたい
                            </span>
                            <br>
                            <span class="topLinkBtn__wrap--underline">
                                あなたへ
                            </span>
                            <a href="#topServiceSouji" class="topLinkBtn md-btn btn blue op">
                                お掃除おまかせ<br>
                                サービス
                                <i class="icon icon-anchor"></i>
                            </a>
                        </div>
                        <div class="topLinkBtn__wrap topLinkBtn__wrap--pink">
                            <img src="<?php echo HOME ?>img/shape_01_pink.svg" alt="" class="shape shape--left">
                            <img src="<?php echo HOME ?>img/shape_02_pink.svg" alt="" class="shape shape--right">
                            <span class="topLinkBtn__wrap--underline">
                                家事の負担を
                            </span>
                            <br>
                            <span class="topLinkBtn__wrap--underline">
                                軽減したい
                            </span>
                            <br>
                            <span class="topLinkBtn__wrap--underline">
                                あなたへ
                            </span>
                            <a href="#topServiceKaji" class="topLinkBtn md-btn btn li-pink op">
                                家事おてつだい<br>
                                サービス
                                <i class="icon icon-anchor"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="topCopy">
                <div class="topCopy__bg">
                    <img src="<?php echo HOME ?>img/copy_bg.png" alt="">
                </div>
                <div class="topCopy__head">
                    <img src="<?php echo HOME ?>img/guruguru_left.svg" alt="" class="guruguru guruguru--left">
                    <span class="topCopy__head--line">
                        時間がなくて
                    </span>
                    <br>
                    <span class="topCopy__head--line">
                        細かいところに手が回らない…
                    </span>
                    <img src="<?php echo HOME ?>img/guruguru_right.svg" alt="" class="guruguru guruguru--right">
                </div>
                <div class="topCopy__img">
                    <img src="<?php echo HOME ?>img/top_copy_people.svg" alt="">
                </div>
                <div class="topCopy__msg">
                    そんな<br>
                    <span class="topCopy__msg--underline">
                        「 キレイにこだわりたい 」
                    </span>
                    <br>
                    あなたへ
                </div>
                <img src="<?php echo HOME ?>img/d-down.svg" alt="">
                <div class="topCopy__sug">
                    一度、<span class="topCopy__sug--dot">お</span><span class="topCopy__sug--dot">掃</span><span class="topCopy__sug--dot">除</span><span class="topCopy__sug--dot">の</span><span class="topCopy__sug--dot">プ</span><span class="topCopy__sug--dot">ロ</span>に<br>頼んでみませんか？
                </div>
            </section>
            <section class="topService" id="topServiceSouji">
                <div class="topService__bg">
                    <img src="<?php echo HOME ?>img/service_bg.png" alt="">
                </div>
                <div class="wrap sp-wrap">
                    <div class="topService__ttl">
                        <span class="topService__ttl--logo flex vcenter hcenter">
                            <img src="<?php echo HOME ?>img/merry_maids_white.svg" alt="">
                        </span>
                        <span class="topService__ttl--main">
                            お掃除おまかせサービス
                        </span>
                        <span class="topService__ttl--sub">
                            ～気になる水まわり～
                        </span>
                    </div>
                    <div class="topServiceCopy">
                        <div class="topServiceCopy__img">
                            <img src="<?php echo HOME ?>img/top_service_copy.jpg" alt="">
                        </div>
                        <p class="topServiceCopy__text">
                            豊富な経験と専門知識を持つプロが<br>
                            普段は行き届かない箇所まで<br>
                            美しく仕上げます。
                        </p>
                    </div>
                    <div class="topServiceItemWrap">
                        <div class="commonTtl topServiceItemWrap__ttl">
                            プロのお掃除
                        </div>
                        <?php $list = array(
                            array(
                                'ttl' => '経験豊富なお掃除のプロが対応！',
                                'content' => '専門のトレーニングを受け、<br>
                                経験を積んだ"お掃除のプロ"が対応します。',
                            ),
                            array(
                                'ttl' => '専用の洗剤・道具でより美しく！',
                                'content' => '汚れに合わせた専用の洗剤や道具で、<br>
                                素材を傷めず美しく仕上げます。',
                            ),
                            array(
                                'ttl' => '満足いただけなければやり直します！',
                                'content' => '各箇所の仕上がりを点検します。<br>
                                充分でなかった場合はやり直しいたします。',
                            ),
                        );
                        $num = 0;
                        foreach ($list as $key => $value) {
                            $num++;
                        ?>
                            <div class="topServiceItem">
                                <div class="topServiceItem__img">
                                    <img src="<?php echo HOME ?>img/service_0<?php echo $num; ?>.jpg" alt="">
                                    <div class="topServiceItem__feature">
                                        <img src="<?php echo HOME ?>img/feature<?php echo $num; ?>.svg" alt="">
                                    </div>
                                </div>
                                <div class="topServiceItem__text">
                                    <div class="topServiceItem__ttl">
                                        「
                                        <span class="topServiceItem__ttl--underline">
                                            <?php echo $value['ttl']; ?>
                                        </span>
                                        」
                                    </div>
                                    <p class="topServiceItem__content">
                                        <?php echo $value['content']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="topServiceSpot">
                    <div class="wrap sp-wrap">
                        <div class="commonHead">
                            <div class="commonHead__head">
                                <span class="commonHead__head--inner">
                                    お掃除おまかせサービス
                                </span>
                            </div>
                            <div class="commonHead__ttl">
                                <div class="commonHead__ttl--copy">
                                    水まわりの気になる汚れを<br>
                                    隅々まで徹底的に除去します
                                </div>
                            </div>
                        </div>
                        <div class="commonTtl">
                            お掃除箇所
                        </div>
                        <div class="topServiceSpot__list flex break bet">
                            <?php $list = array(
                                array(
                                    'spot' => 'キッチン',
                                    'slug' => 'kitchen'
                                ),
                                array(
                                    'spot' => 'レンジフード',
                                    'slug' => 'range'
                                ),
                                array(
                                    'spot' => 'バスルーム',
                                    'slug' => 'bath'
                                ),
                                array(
                                    'spot' => 'トイレ・洗面所',
                                    'slug' => 'toilet'
                                ),
                            );
                            $num = 0;
                            foreach ($list as $key => $value) {
                                $num++;
                            ?>
                                <a class="topServiceSpot__link" href="#<?php echo $value['slug']; ?>">
                                    <div class="md-lay zoom">
                                        <div class="lay-bg">
                                            <img src="<?php echo HOME ?>img/spot_0<?php echo $num; ?>.jpg" alt="">
                                        </div>
                                    </div>
                                    <?php echo $value['spot']; ?><br>
                                    <i class="icon icon-down2"></i>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="topServiceSpotItemWrap">
                            <?php $list = array(
                                array(
                                    'spot' => 'キッチン',
                                    'en' => 'KITCHEN',
                                    'slug' => 'kitchen',
                                    'text' => 'こげつき・ヌメリ・油汚れなど、<br>
                                    キッチン特有の頑固な汚れを除去。',
                                    'price' => '18,700',
                                    'nontax' => '17,000',
                                    'content' => '●収納庫表面(吊り戸棚、調理台下)、収納庫扉枠 ●流し台上の照明(天井照明は除く) ●スイッチプレート ●加熱調理器(魚焼きグリルは除く) ●調理台 ●シンク(排水口・ゴミ受け・洗剤トレイなど) ●蛇口 ●流し台前面壁(窓の内側) ●レンジフード表面 ●床・幅木 ●調味料等小物'
                                ),
                                array(
                                    'spot' => 'レンジフード',
                                    'en' => 'Range food',
                                    'slug' => 'range',
                                    'text' => 'ご家庭では難しい<br>頑固な油汚れもスッキリ！<br>レンジフードが驚くほどキレイに。',
                                    'price' => '19,800',
                                    'nontax' => '18,000',
                                    'content' => '●フード　●パーツ(フィルター・ファ ン・油受けなど)　●本体'
                                ),
                                array(
                                    'spot' => 'バスルーム',
                                    'en' => 'BATHROOM',
                                    'slug' => 'bath',
                                    'text' => '手に負えない壁や天井に生えたカビ、<br>
                                    湯アカ汚れも隅々までキレイに。',
                                    'price' => '19,800',
                                    'nontax' => '18,000',
                                    'content' => '●浴槽・浴槽のふた ●窓ガラス(内側のみ) ●蛇口などの金属部分 ●ドア ●鏡 ●排水口 ●小物(洗面器・シャンプーボトルなど) ●照明器具 ●換気口表面 ●高所(壁面・天井) ●床面'
                                ),
                                array(
                                    'spot' => 'トイレ・洗面所',
                                    'en' => 'TOILET・WASHROOM',
                                    'slug' => 'toilet',
                                    'text' => '洗面ボウルの<br>
                                    黒ずみや鏡のくすみなどを除去。<br>
                                    清潔感あふれる爽やかな空間に。',
                                    'spot1' => '洗面所',
                                    'spot2' => 'トイレ',
                                    'price1' => '9,460',
                                    'nontax1' => '8,600',
                                    'price2' => '9,460',
                                    'nontax2' => '8,600',
                                    'content' => '<span class="head">洗面所</span>●収納庫表面、収納庫扉枠 ●洗面台の照明(天井照明を除く) ●カウンタートップ ●洗面ボウル ●蛇口 ●鏡 ●備品(石けん受けなど) ●ドア ●洗濯機・乾燥機表面 ●床・幅木 ●オープン棚 ●窓ガラス(内側のみ) ●高所<span class="head">トイレ</span>●壁面 ●ペーパーホルダー ●水洗タンク表面と蛇口 ●便器 ●備品(トイレポットなど) ●床・幅木 ●ドア ●照明器具 ●排気口の表面 ●窓ガラス(内側のみ) ●天井 ●温水洗浄ノズル ●オープンの棚 ●収納庫表面、収納庫扉枠'
                                ),
                            );
                            $num = 0;
                            foreach ($list as $key => $value) {
                                $num++;
                            ?>
                                <div class="topServiceSpotItem" id="<?php echo $value['slug']; ?>">
                                    <div class="topServiceSpotItem__head">
                                        <span class="topServiceSpotItem__head--en robo">
                                            <?php echo $value['en']; ?>
                                        </span>
                                        <span class="topServiceSpotItem__head--spot">
                                            <?php echo $value['spot']; ?>
                                        </span>
                                    </div>
                                    <div class="topServiceSpotItem__inner">
                                        <p class="topServiceSpotItem__text">
                                            <?php echo $value['text']; ?>
                                        </p>
                                        <div class="topServiceSpotItem__img flex vcenter bet">
                                            <?php if ($value['slug'] === 'toilet') { ?>
                                                <img src="<?php echo HOME ?>img/toilet1.jpg" alt="" class="topServiceSpotItem__img--toilet">
                                                <img src="<?php echo HOME ?>img/toilet2.jpg" alt="" class="topServiceSpotItem__img--toilet">
                                            <?php } else { ?>
                                                <img src="<?php echo HOME ?>img/before_0<?php echo $num; ?>.jpg" alt="" class="topServiceSpotItem__img--ba">
                                                <img src="<?php echo HOME ?>img/tri.svg" alt="" class="tri">
                                                <img src="<?php echo HOME ?>img/after_0<?php echo $num; ?>.jpg" alt="" class="topServiceSpotItem__img--ba">
                                            <?php } ?>
                                        </div>
                                        <div class="topServiceSpotItem__price">
                                            <div class="topServiceSpotItem__price--head">
                                                標準料金
                                            </div>
                                            <?php if ($value['slug'] === 'toilet') { ?>
                                                <div class="topServiceSpotItem__price--num small flex vcenter">
                                                    <div class="topServiceSpotItem__price--ttl flex vcenter hcenter">
                                                        <?php echo $value['spot1']; ?>
                                                    </div>
                                                    <?php echo $value['price1']; ?>
                                                    <span class="topServiceSpotItem__price--nontax small">
                                                        円(税抜<?php echo $value['nontax1']; ?>円)
                                                    </span>
                                                </div>

                                                <div class="topServiceSpotItem__price--num small flex vcenter">
                                                    <div class="topServiceSpotItem__price--ttl flex vcenter hcenter">
                                                        <?php echo $value['spot2']; ?>
                                                    </div>
                                                    <?php echo $value['price1']; ?>
                                                    <span class="topServiceSpotItem__price--nontax small">
                                                        円(税抜<?php echo $value['nontax2']; ?>円)
                                                    </span>
                                                </div>
                                            <?php } else { ?>
                                                <div class="topServiceSpotItem__price--num">
                                                    <?php echo $value['price']; ?>
                                                    <span class="topServiceSpotItem__price--nontax">
                                                        円(税抜<?php echo $value['nontax']; ?>円)
                                                    </span>
                                                </div>
                                            <?php } ?>
                                            <p class="topServiceSpotItem__price--notice">
                                                ※上記料金でのご利用は条件があります。
                                            </p>
                                        </div>
                                        <div class="topServiceSpotItem__spot">
                                            <div class="topServiceSpotItem__spot--head">
                                                お掃除箇所
                                            </div>
                                            <div class="topServiceSpotItem__spot--content">
                                                <?php echo $value['content']; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="topVoice">
                <div class="topVoice__bg--under">
                </div>
                <div class="topVoice__bg">
                    <img src="<?php echo HOME ?>img/voice_bg.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/voice_bg_sp.png" alt="" class="sp">
                </div>
                <div class="commonHead">
                    <div class="commonHead__head noline">
                        <span class="commonHead__head--inner">
                            お掃除おまかせサービス
                        </span>
                    </div>
                    <div class="commonHead__ttl commonHead__ttl--nobd">
                        <div class="commonHead__ttl--en">
                            USER’S VOICE
                        </div>
                        <div class="commonHead__ttl--ja">
                            お客様の声
                        </div>
                    </div>
                </div>
                <div class="topVoiceItemWrap">
                    <?php $list = array(
                        array(
                            'text' => '浴室クリーニングのオプションで、換気扇や、パッキンのカビなどを依頼しました。とても、綺麗になりプロの力を感じました。過剰なセールストークもなく、薬剤を使用したあとの換気指導、日常の掃除方法などをアドバイスしてくださり、とても助かりました。<br>決して安い料金では、ありませんが、プロ意識を持って、真摯に対応してくださったので、お願いしてよかったとおもいました。'
                        ),
                        array(
                            'text' => '実家の浴室がカビなどが酷く、放置される事でかなり汚れており、自分で綺麗に出来る自信がありませんでした。手軽に申し込める金額ではないので悩みに悩みましたが、結果は大満足。こんなにも綺麗になるのですね。こういうサービスを利用するのが初めてだったのでどこを選んでいいかわからず、有名だという理由だけで選びましたが、従業員さんの対応含め大満足。<br>本当にありがとうございます。'
                        ),
                        array(
                            'text' => 'かなり年季の入った汚れだったため、「完璧にキレイにはならないかもしれない」と予防線を張っておられましたが、なんのなんの！あっという間にキレイにしてくださってビックリしました。確かに変色してしまった部分は取れませんでしたが、想像以上の仕上がりでした。さすがプロだなぁと感心しました。もっと早く頼めば良かったです。今後は浴室もキッチンもお願いしたいと思っています。ありがとうございました。'
                        ),
                    );
                    $num = 0;
                    foreach ($list as $key => $value) {
                        $num++;
                    ?>
                        <div class="topVoiceItem flex bet">
                            <div class="topVoiceItem__img">
                                <img src="<?php echo HOME ?>img/voice_0<?php echo $num; ?>.svg" alt="">
                            </div>
                            <div class="topVoiceItem__text">
                                <?php echo $value['text']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="wrap sp-wrap">
                    <p class="topVoice__notice">
                        出典：ダスキンユーザー(DDuet会員)の商品・サービスレビュー2022年1月以降より
                    </p>
                </div>
            </section>

            <section class="topText">
                <div class="wrap sp-wrap">
                    <p class="topFlow__text">
                        ※表示料金は消費税率10％を含む総額表示です。<br>
                        ※サービスは、予告なしにデザインや仕様、料金の変更や販売を中止することがございますので、ご了承ください。<br>
                        ※一部完全に除去できない汚れ・カビがあります。<br>
                        ※サービスカーの駐車スペースのご用意をお願いします。駐車できない場合は有料駐車場を利用するため、駐車料金をご負担いただきます。<br>
                        ※一部対応できない地域があります。<br>
                        ※渡船や連絡橋等の有料の移動手段を利用する場合は、実費を別途請求させていただきます。<br>
                        ※土・日・祝日のサービスに関しましては、お受けできないことがございます。<br>
                        ※写真・イラストはイメージです。<br>
                        ※サービスは1回あたり11,000円（税込）以上で承ります。
                    </p>
                </div>
            </section>


            <section class="topFlow">
                <div class="topFlow__bg"></div>
                <div class="wrap sp-wrap">
                    <div class="commonHead">
                        <div class="commonHead__head">
                            <span class="commonHead__head--inner">
                                お掃除おまかせサービス
                            </span>
                        </div>
                        <div class="commonHead__ttl">
                            <div class="commonHead__ttl--copy">
                                お申し込みの流れ
                            </div>
                        </div>
                    </div>
                    <div class="topFlowItemWrap flex vert vcenter">
                        <?php $list = array(
                            array(
                                'ttl' => '無料相談・お見積りボタン<br>からお申し込み',
                                'text' => '',
                                'btn-text' => '無料相談・お見積り',
                            ),
                            array(
                                'ttl' => '担当店よりご連絡',
                                'text' => 'ご訪問日を確認します。'
                            ),
                            array(
                                'ttl' => 'ヒアリング・お見積り',
                                'text' => '事前にご自宅に訪問し、<br>お客様にあったプランをご提案いたします。'
                            ),
                            array(
                                'ttl' => 'サービスの実施',
                                'text' => 'ご自宅に訪問し、サービスを実施します。'
                            ),
                        );
                        $num = 0;
                        foreach ($list as $key => $value) {
                            $num++;
                        ?>
                            <div class="topFlowItem  <?php if ($num !== 1) { ?>flex break<?php } ?>">
                                <div class="topFlowItem__step flex vcenter hcenter">
                                    <div class="flex vert">
                                        <span class="topFlowItem__step--head">STEP</span>
                                        <span class="topFlowItem__step--num">0<?php echo $num; ?></span>
                                    </div>
                                </div>
                                <?php if ($num === 1) { ?>
                                    <div class="flex hcenter vcenter vert">
                                        <div class="topFlowItem__ttl">
                                            <?php echo $value['ttl']; ?>
                                        </div>
                                        <a class="topFlowItem__btn op md-btn pink" href="#topContact">
                                            <?php echo $value['btn-text']; ?>
                                        </a>
                                    </div>
                                <?php } else {  ?>
                                    <div class="topFlowItem__img">
                                        <img src="<?php echo HOME ?>img/flow_0<?php echo $num; ?>.jpg" alt="">
                                    </div>
                                    <div class="topFlowItem__text">
                                        <div class="topFlowItem__text--ttl">
                                            <?php echo $value['ttl']; ?>
                                        </div>
                                        <p class="topFlowItem__text--text">
                                            <?php echo $value['text']; ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if ($num !== 4) { ?>
                                <i class="topFlowItem__down icon icon-down"></i>
                            <?php } ?>
                        <?php } ?>
                    </div>

                </div>
            </section>

            <section class="topTel">
                <div class="topTel__bg"></div>
                <div class="topTel__ttl flex vcenter bet">
                    <span class="topTel__ttl--line"></span>
                    <span class="ttl">電話で無料相談・お見積りはこちら</span>
                    <span class="topTel__ttl--line"></span>
                </div>
                <div class="sp-wrap">
                    <div class="topTel__tel flex bet hcenter vcenter">
                        <span class="topTel__num flex vcenter robo">
                            <i class="icon icon-phone"></i>
                            0120-388-093
                        </span>
                        <span class="topTel__open">
                            8:00～20:00<br>年中無休
                        </span>
                    </div>
                </div>
            </section>

            <section class="topCopy">
                <div class="topCopy__bg">
                    <img src="<?php echo HOME ?>img/copy_bg.png" alt="">
                </div>
                <div class="topCopy__head">
                    <img src="<?php echo HOME ?>img/guruguru_left.svg" alt="" class="guruguru guruguru--left">
                    <span class="topCopy__head--line">
                        せっかくのお休みは
                    </span>
                    <br>
                    <span class="topCopy__head--line">
                        家族と楽しく過ごしたい！
                    </span>
                    <img src="<?php echo HOME ?>img/guruguru_right.svg" alt="" class="guruguru guruguru--right">
                </div>
                <div class="topCopy__img">
                    <img src="<?php echo HOME ?>img/top_copy_people_02.svg" alt="">
                </div>
                <div class="topCopy__msg">
                    誰かに
                    <br>
                    <span class="topCopy__msg--underline">
                        「 代わりにやってもらいたい 」
                    </span>
                    <br>
                    あなたへ
                </div>
                <img src="<?php echo HOME ?>img/d-down.svg" alt="">
                <div class="topCopy__sug">
                    その家事、<span class="topCopy__sug--dot">メ</span><span class="topCopy__sug--dot">リ</span><span class="topCopy__sug--dot">ー</span><span class="topCopy__sug--dot">メ</span><span class="topCopy__sug--dot">イ</span><span class="topCopy__sug--dot">ド</span>が<br>お手伝いします！
                </div>
            </section>
            <section class="topService" id="topServiceKaji">
                <div class="topService__bg">
                    <img src="<?php echo HOME ?>img/service_bg_02.png" alt="">
                </div>
                <div class="wrap sp-wrap">
                    <div class="topService__ttl">
                        <span class="topService__ttl--logo flex vcenter hcenter pink">
                            <img src="<?php echo HOME ?>img/merry_maids_white.svg" alt="">
                        </span>
                        <span class="topService__ttl--main">
                            家事おてつだいサービス
                        </span>
                    </div>
                    <div class="topServiceCopy">
                        <div class="topServiceCopy__img topServiceCopy__img--pink">
                            <img src="<?php echo HOME ?>img/top_service_copy_02.jpg" alt="">
                        </div>
                        <p class="topServiceCopy__text">
                            家事経験豊富で研修を<br>
                            受けたスタッフが<br>
                            時間単位で伺います。
                        </p>
                    </div>
                    <div class="topServiceItemWrap topServiceItemWrap--pink">
                        <div class="commonTtl commonTtl--pink topServiceItemWrap__ttl">
                            家事代行
                        </div>
                        <?php $list = array(
                            array(
                                'ttl' => '安心のダスキン！',
                                'content' => 'スタッフは、ダスキンの各店舗が<br>
                                厳しい基準で採用し、直接雇用しています。',
                            ),
                            array(
                                'ttl' => '２時間からお気軽に！',
                                'content' => 'お客様のライフスタイルに合わせて<br>
                                時間単位でご利用いただけます。',
                            ),
                            array(
                                'ttl' => '家事の組み合わせ自由',
                                'content' => '掃除・洗濯・調理・<br>
                                買い物・花の水やりまで、<br>
                                ご要望に合わせてお手伝いします。',
                            ),
                        );
                        $num = 0;
                        foreach ($list as $key => $value) {
                            $num++;
                        ?>
                            <div class="topServiceItem">
                                <div class="topServiceItem__img">
                                    <img src="<?php echo HOME ?>img/service_02_0<?php echo $num; ?>.jpg" alt="">
                                    <div class="topServiceItem__feature">
                                        <img src="<?php echo HOME ?>img/feature<?php echo $num; ?>_pink.svg" alt="">
                                    </div>
                                </div>
                                <div class="topServiceItem__text">
                                    <div class="topServiceItem__ttl">
                                        「
                                        <span class="topServiceItem__ttl--underline">
                                            <?php echo $value['ttl']; ?>
                                        </span>
                                        」
                                    </div>
                                    <p class="topServiceItem__content">
                                        <?php echo $value['content']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="topServiceHelp">
                        <div class="commonHead">
                            <div class="commonHead__head commonHead__head--pink">
                                <span class="commonHead__head--inner pink">
                                    家事おてつだいサービス
                                </span>
                            </div>
                            <div class="commonHead__ttl commonHead__ttl--pink">
                                <div class="commonHead__ttl--copy">
                                    時間内で<br>
                                    さまざまな家事に対応します
                                </div>
                            </div>
                        </div>
                        <div class="topServiceHelp__ttl">
                            1回2時間の中で、ご希望の家事を<br>
                            組み合わせてご利用いただけます
                        </div>
                        <div class="topServiceHelpItemWrap flex bet break">
                            <?php $list = array(
                                array(
                                    'ttl' => '掃除',
                                ),
                                array(
                                    'ttl' => 'かたづけ',
                                ),
                                array(
                                    'ttl' => '洗濯',
                                ),
                                array(
                                    'ttl' => 'アイロンがけ',
                                ),
                                array(
                                    'ttl' => '買い物',
                                ),
                                array(
                                    'ttl' => '調理',
                                ),
                            );
                            $num = 0;
                            foreach ($list as $key => $value) {
                                $num++;
                            ?>
                                <div class="topServiceHelpItem">
                                    <div class="topServiceHelpItem__head">
                                        <?php echo $value['ttl']; ?>
                                    </div>
                                    <div class="topServiceHelpItem__img">
                                        <img src="<?php echo HOME ?>img/help_0<?php echo $num; ?>.jpg" alt="">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <p class="topServiceHelp__notice">
                            ※調理はお客様在宅時のサービスに限ります。<br>
                            ※介護・介助、ベビーシッターなど、お受けできないサービスがございます。<br>
                            ※サービスに必要な道具は、お客様宅のものを使用させていただきます。
                        </p>
                        <div class="topServiceHelp__msg">
                            <div class="topServiceHelp__msg--circle">
                                <img src="<?php echo HOME ?>img/plus.svg" alt="">
                            </div>
                            ほかにも花の水やりなど、お客様のご要望に<br>
                            合わせてお手伝いします。
                        </div>
                    </div>
                </div>
            </section>

            <section class="topVoice">
                <div class="topVoice__bg topVoice__bg--pink"></div>

                <div class="commonHead">
                    <div class="commonHead__head noline">
                        <span class="commonHead__head--inner pink">
                            家事おてつだいサービス
                        </span>
                    </div>
                    <div class="commonHead__ttl commonHead__ttl--nobd commonHead__ttl--pink">
                        <div class="commonHead__ttl--en">
                            USER’S VOICE
                        </div>
                        <div class="commonHead__ttl--ja">
                            お客様の声
                        </div>
                    </div>
                </div>
                <div class="topVoiceItemWrap">
                    <?php $list = array(
                        array(
                            'text' => 'ちょっと無理かな、と思うような庭の物置の中や、散らかったリビングダイニングまで、とても綺麗に整理・掃除いただきました。トイレも、お掃除していただいた後はとてもすっきりとして気持ちよく使えます。仕事に行っている間に家事代行をしてもらっているので、帰宅するのが楽しみです。'
                        ),
                        array(
                            'text' => '何社か同じようなサービスのところでお試しサービスをやってみました。結果、圧倒的にお掃除の仕方や出来が素晴らしいのがダスキンさんでした。最初に営業の方に伝えたことも、実際お掃除する方にきちんと引き継がれていましたし、さすが本業。お掃除に関してはプロ！他の家事代行さんとは違って、掃除の仕方やお風呂、エアコン、レンジフードなど見ただけでお掃除で気をつけるポイントなど知っていて感激しました。家事代行に何を求めるかによって選ぶポイントは違うと思いますが、お掃除に関してはポイント高いです。'
                        ),
                        array(
                            'text' => '初めて利用させて頂きましたが、担当の方の人柄に惹かれた部分がすごく大きかったです！<br>安心してお任せできそうなのでこれからが楽しみです。'
                        ),
                    );
                    $num = 0;
                    foreach ($list as $key => $value) {
                        $num++;
                    ?>
                        <div class="topVoiceItem flex bet">
                            <div class="topVoiceItem__img">
                                <img src="<?php echo HOME ?>img/voice_2_0<?php echo $num; ?>.svg" alt="">
                            </div>
                            <div class="topVoiceItem__text topVoiceItem__text--white">
                                <?php echo $value['text']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="wrap sp-wrap">
                    <p class="topVoice__notice topVoice__notice--pink">
                        出典：ダスキンユーザー(DDuet会員)の商品・サービスレビュー2022年1月以降より
                    </p>
                </div>
            </section>

            <section class="topPrice">
                <div class="wrap sp-wrap">
                    <div class="topPriceItem">
                        <div class="topPriceItem__head">
                            サービス標準料金
                        </div>
                        <div class="topPriceItemContent">
                            <div class="topPriceItem__ttl">
                                家事おてつだいサービス
                            </div>
                            <div class="topPriceItemPointWrap">
                                <div class="topPriceItemPointWrap__ttl">
                                    例えば2時間で...
                                </div>
                                <div class="topPriceItemPoints flex">
                                    <div class="topPriceItemPoint">
                                        <img src="<?php echo HOME ?>img/point_01.png" alt="">
                                        掃除機掛け
                                    </div>
                                    <div class="topPriceItemPoint">
                                        <img src="<?php echo HOME ?>img/point_02.png" alt="">
                                        拭き掃除
                                    </div>
                                    <div class="topPriceItemPoint">
                                        <img src="<?php echo HOME ?>img/point_03.png" alt="">
                                        食器洗い
                                    </div>
                                    <div class="topPriceItemPoint">
                                        <img src="<?php echo HOME ?>img/point_04.png" alt="">
                                        洗濯物干し
                                    </div>
                                </div>
                            </div>
                            <div class="topPriceItem__time">
                                スタッフ1名／2時間
                            </div>
                            <div class="topPriceItem__price flex vcenter">
                                <span class="topPriceItem__price--head flex vcenter hcenter">
                                    定期
                                </span>
                                <span class="topPriceItem__price--num">
                                    7,700
                                </span>
                                <span class="topPriceItem__price--small">
                                    円(税抜7,000円)
                                </span>
                            </div>
                            <div class="topPriceItem__price small flex vcenter">
                                <span class="topPriceItem__price--head small flex vcenter hcenter">
                                    1回のみ
                                </span>
                                <span class="topPriceItem__price--num small">
                                    11,000
                                </span>
                                <span class="topPriceItem__price--small small">
                                    円(税抜10,000円)
                                </span>
                            </div>
                            <p class="topPriceItem__text">
                                ダスキンのスタッフがご自宅にお伺いし、<br>
                                無料でお見積りいたします。<br>
                                まずは、お気軽にご相談ください。
                            </p>
                            <a class="topPriceItem__btn op md-btn pink" href="#topContact">
                                無料相談・お見積りはこちら
                            </a>
                        </div>
                    </div>
                    <p class="topPrice__text">
                        ※表示料金は消費税率10％を含む総額表示です。<br>
                        ※サービスは、予告なしにデザインや仕様、料金の変更や販売を中止することがございますので、ご了承ください。<br>
                        ※1回2時間（延長はご要望に応じて）より、ご希望の家事を組み合わせてご利用いただけます。<br>
                        ※定期サービスは、ご要望に応じて、1週間に2～5回のサイクルもお受けいたします。<br>
                        ※男性のみでご在宅の場合は、スタッフ2名、半分のお時間でお伺いいたします。<br>
                        ※サービスカーの駐車スペースのご用意をお願いします。<br>
                        駐車できない場合は有料駐車場を利用するため、駐車料金をご負担いただきます。<br>
                        ※一部対応できない地域があります。<br>
                        ※渡船や連絡橋等の有料の移動手段を利用する場合は、実費を別途請求させていただきます。<br>
                        ※土・日・祝日のサービスに関しましては、お受けできないことがございます。<br>
                        ※写真・イラストはイメージです。
                    </p>
                </div>
            </section>


            <section class="topFlow">
                <div class="topFlow__bg"></div>
                <div class="wrap sp-wrap">
                    <div class="commonHead">
                        <div class="commonHead__head commonHead__head--pink">
                            <span class="commonHead__head--inner pink">
                                家事おてつだいサービス
                            </span>
                        </div>
                        <div class="commonHead__ttl commonHead__ttl--pink">
                            <div class="commonHead__ttl--copy">
                                お申し込みの流れ
                            </div>
                        </div>
                    </div>
                    <div class="topFlowItemWrap flex vert vcenter">
                        <?php $list = array(
                            array(
                                'ttl' => '無料相談・お見積りボタン<br>からお申し込み',
                                'text' => '',
                                'btn-text' => '無料相談・お見積り',
                            ),
                            array(
                                'ttl' => '担当店よりご連絡',
                                'text' => 'ご訪問日を確認します。'
                            ),
                            array(
                                'ttl' => 'ヒアリング・お見積り',
                                'text' => '事前にご自宅に訪問し、<br>お客様にあったプランをご提案いたします。'
                            ),
                            array(
                                'ttl' => 'サービスの実施',
                                'text' => 'ご自宅に訪問し、サービスを実施します。'
                            ),
                        );
                        $num = 0;
                        foreach ($list as $key => $value) {
                            $num++;
                        ?>
                            <div class="topFlowItem  <?php if ($num !== 1) { ?>flex break<?php } ?>">
                                <div class="topFlowItem__step topFlowItem__step--pink flex vcenter hcenter">
                                    <div class="flex vert">
                                        <span class="topFlowItem__step--head">STEP</span>
                                        <span class="topFlowItem__step--num">0<?php echo $num; ?></span>
                                    </div>
                                </div>
                                <?php if ($num === 1) { ?>
                                    <div class="flex hcenter vcenter vert">
                                        <div class="topFlowItem__ttl">
                                            <?php echo $value['ttl']; ?>
                                        </div>
                                        <a class="topFlowItem__btn op md-btn pink" href="#topContact">
                                            <?php echo $value['btn-text']; ?>
                                        </a>
                                    </div>
                                <?php } else {  ?>
                                    <div class="topFlowItem__img">
                                        <img src="<?php echo HOME ?>img/flow2_0<?php echo $num; ?>.jpg" alt="">
                                    </div>
                                    <div class="topFlowItem__text">
                                        <div class="topFlowItem__text--ttl">
                                            <?php echo $value['ttl']; ?>
                                        </div>
                                        <p class="topFlowItem__text--text">
                                            <?php echo $value['text']; ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if ($num !== 4) { ?>
                                <i class="topFlowItem__down topFlowItem__down--pink icon icon-down"></i>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section class="topChoice">
                <div class="wrap sp-wrap">
                    <div class="topChoice__ttl">
                        あなたのお好みに合わせて<br>
                        お選びください！
                    </div>
                    <div class="topChoiceItemWrap flex bet">
                        <?php $list = array(
                            array(
                                'copy' => 'きれいに<br>こだわりたいあなたへ',
                                'ttl' => 'お掃除おまかせ<br>サービス',
                                'point1' => '汚れを<br>徹底除去',
                                'point2' => '契約箇所を<br>隅々まで掃除',
                                'point3' => 'プロ専用の<br>道具・洗剤を使用',
                                'color' => 'blue',
                            ),
                            array(
                                'copy' => '家事の負担を<br>軽減したいあなたへ',
                                'ttl' => '家事おてつだい<br>サービス',
                                'point1' => '家事全般を<br>お手伝い',
                                'point2' => '時間の中でさまざまな家事を代行',
                                'point3' => 'お客様宅の<br>道具・洗剤を使用',
                                'color' => 'pink',
                            ),
                        );
                        $num = 0;
                        foreach ($list as $key => $value) {
                            $num++;
                        ?>
                            <div class="topChoiceItem__wrap topChoiceItem__wrap--<?php echo $value['color']; ?>">
                                <div class="topChoiceItem__copy">
                                    <?php echo $value['copy']; ?>
                                </div>
                                <div class="topChoiceItem">
                                    <div class="topChoiceItem__head">
                                        <?php echo $value['ttl']; ?>
                                    </div>
                                    <div class="topChoiceItem__img">
                                        <img src="<?php echo HOME ?>img/choice_0<?php echo $num; ?>.jpg" alt="">
                                    </div>
                                    <div class="topChoiceItem__text">
                                        <div class="topChoiceItem__text--point flex vcenter">
                                            <i class="icon icon-chk"></i>
                                            <?php echo $value['point1']; ?>
                                        </div>
                                        <div class="topChoiceItem__text--point flex vcenter">
                                            <i class="icon icon-chk"></i>
                                            <?php echo $value['point2']; ?>
                                        </div>
                                        <div class="topChoiceItem__text--point flex vcenter">
                                            <i class="icon icon-chk"></i>
                                            <?php echo $value['point3']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section class="topImg">
                <div class="wrap sp-wrap">
                    <img src="<?php echo HOME ?>img/mark.png" alt="">
                </div>
                <img src="<?php echo HOME ?>img/copy.png" alt="">
            </section>

            <section class="topFaq">
                <div class="wrap sp-wrap">
                    <div class="topFaq__ttl">
                        よくあるご質問
                    </div>
                    <div class="topFaqItemWrap">
                        <?php $list = array(
                            array(
                                'ques' => '「お掃除サービス」と「家事おてつだいサービス」の違いはなんですか？',
                                'ans' => '「お掃除サービス」は、キッチンやリビングなどお部屋ごとに専用の資器材を使って汚れに応じたお掃除を徹底して行うサービスです。<br>「家事おてつだいサービス」は、毎日の家事（洗濯やアイロンや食器洗いなど）を頼みたいというお客様の声から生まれた家事全般をお手伝いするサービスで、お客様宅でいつも使っておられる道具・洗剤などを利用して時間内にできることを行います。',
                            ),
                            array(
                                'ques' => 'うちは汚れているから、料金は高くなるの？',
                                'ans' => '「お掃除サービス」は、キッチンやリビングなどお部屋ごとに専用の資器材を使って汚れに応じたお掃除を徹底して行うサービスです。<br>「家事おてつだいサービス」は、毎日の家事（洗濯やアイロンや食器洗いなど）を頼みたいというお客様の声から生まれた家事全般をお手伝いするサービスで、お客様宅でいつも使っておられる道具・洗剤などを利用して時間内にできることを行います。',
                            ),
                            array(
                                'ques' => '家事やお掃除をしてもらうときは、留守でもいいの？',
                                'ans' => '「お掃除サービス」は、キッチンやリビングなどお部屋ごとに専用の資器材を使って汚れに応じたお掃除を徹底して行うサービスです。<br>「家事おてつだいサービス」は、毎日の家事（洗濯やアイロンや食器洗いなど）を頼みたいというお客様の声から生まれた家事全般をお手伝いするサービスで、お客様宅でいつも使っておられる道具・洗剤などを利用して時間内にできることを行います。',
                            ),
                            array(
                                'ques' => 'どんな人が来てくれるの？',
                                'ans' => '「お掃除サービス」は、キッチンやリビングなどお部屋ごとに専用の資器材を使って汚れに応じたお掃除を徹底して行うサービスです。<br>「家事おてつだいサービス」は、毎日の家事（洗濯やアイロンや食器洗いなど）を頼みたいというお客様の声から生まれた家事全般をお手伝いするサービスで、お客様宅でいつも使っておられる道具・洗剤などを利用して時間内にできることを行います。',
                            ),
                            array(
                                'ques' => 'サービスは、土日、祝日、夜間も来てくれるの？',
                                'ans' => '「お掃除サービス」は、キッチンやリビングなどお部屋ごとに専用の資器材を使って汚れに応じたお掃除を徹底して行うサービスです。<br>「家事おてつだいサービス」は、毎日の家事（洗濯やアイロンや食器洗いなど）を頼みたいというお客様の声から生まれた家事全般をお手伝いするサービスで、お客様宅でいつも使っておられる道具・洗剤などを利用して時間内にできることを行います。',
                            ),
                            array(
                                'ques' => '申込み後キャンセルした場合、キャンセル料は発生しますか？',
                                'ans' => '「お掃除サービス」は、キッチンやリビングなどお部屋ごとに専用の資器材を使って汚れに応じたお掃除を徹底して行うサービスです。<br>「家事おてつだいサービス」は、毎日の家事（洗濯やアイロンや食器洗いなど）を頼みたいというお客様の声から生まれた家事全般をお手伝いするサービスで、お客様宅でいつも使っておられる道具・洗剤などを利用して時間内にできることを行います。',
                            ),
                        );
                        $num = 0;
                        foreach ($list as $key => $value) {
                            $num++;
                        ?>
                            <div class="topFaqItem">
                                <div class="topFaqItem__ques flex vcenter js-ques-open">
                                    <div class="topFaqItem__ques--head">
                                        Q
                                    </div>
                                    <div class="topFaqItem__ques--text">
                                        <?php echo $value['ques']; ?>
                                    </div>
                                    <span class="icon"></span>
                                </div>
                                <p class="topFaqItem__ans js-ques-content">
                                    <?php echo $value['ans']; ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section class="topContact" id="topContact">
                <div class="wrap sp-wrap">
                    <div class="topContact__ttl">
                        無料お見積りは<br>
                        こちらから
                    </div>
                    <div class="topContactTab flex vend">
                        <a class="topContactTabItem topContactTabItem--blue flex vcenter hcenter current js-form-tab" href="clean">
                            お掃除おまかせ<br>
                            サービス
                        </a>
                        <a class="topContactTabItem topContactTabItem--pink flex vcenter hcenter js-form-tab" href="kaji">
                            家事お手伝い<br>
                            サービス
                        </a>
                    </div>
                    <div class="topContactForm topContactForm--blue js-form show" id="form-clean">
                        <form action="<?php echo HOME; ?>sakuragi/mail.php" method="post">
                            <input type="text" hidden name="サービス内容" value="お掃除おまかせサービス">
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    お名前
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="お名前" placeholder="山田 太郎" class="validate【required】">
                                </div>
                            </div>
                            <div class=" topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    電話番号
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="電話番号" placeholder="000-0000-0000" class="validate【required,custom【phone】】">
                                </div>
                            </div>
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    メールアドレス
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="メールアドレス" placeholder="0000@example.com" class="validate【required,custom【email】】">
                                </div>
                            </div>
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    ご住所
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="郵便番号" placeholder="郵便番号" class="zip validate【required,custom【number】】" onKeyUp="AjaxZip3.zip2addr(this,'','都道府県','市区町村','町域・番地');">
                                </div>
                                <div class="topContactForm__ans">
                                    <select name="都道府県" class="validate【required】">
                                        <option value="" selected>都道府県</option>
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>
                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県">神奈川県</option>
                                        <option value="新潟県">新潟県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="長野県">長野県</option>
                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>
                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県">和歌山県</option>
                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>
                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>
                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県">鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                    </select>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="市区町村" placeholder="市区町村" class="validate【required】">
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="町域・番地" placeholder="町域・番地" class="validate【required】">
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="建物名・部屋番号" placeholder="番地・建物名・部屋番号">
                                </div>
                            </div>
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    依頼したい内容やご相談事
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <textarea name="依頼したい内容やご相談事" id="" placeholder="リビングと寝室のお掃除、犬の散歩をお願いしたいです。" class="validate【required】"></textarea>
                                </div>
                            </div>
                            <div class="topContactFormBtnWrap">
                                <button class="topContactForm__btn btn md-btn pink op" type="submit">
                                    見積りを依頼する
                                </button>
                            </div>
                        </form>
                        <p class="topContactForm__notice">
                            <span class="topContactForm__notice--head">
                                【個人情報の取扱いについて】
                            </span>
                            お預かりした個人情報は、ダスキングループ及びフランチャイズチェーン加盟店にて無料お見積りの受付及びお見積りに必要なご連絡に利用させていただきます。個人情報に関するお問い合わせ、ご自身の個人情報の開示・訂正・利用停止につきましては株式会社ダスキン南関東地域本部03-5909-6732までご連絡ください。
                        </p>
                    </div>

                    <div class="topContactForm topContactForm--pink js-form" id="form-kaji">
                        <form action="<?php echo HOME; ?>mail.php" method="post">
                            <input type="text" hidden name="サービス内容" value="家事お手伝いサービス">
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    お名前
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="お名前" placeholder="山田 太郎" class="validate【required】">
                                </div>
                            </div>
                            <div class=" topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    電話番号
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="電話番号" placeholder="000-0000-0000" class="validate【required,custom【phone】】">
                                </div>
                            </div>
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    メールアドレス
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="メールアドレス" placeholder="0000@example.com" class="validate【required,custom【email】】">
                                </div>
                            </div>
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    ご住所
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="郵便番号" placeholder="郵便番号" class="zip validate【required,custom【number】】" onKeyUp="AjaxZip3.zip2addr(this,'','都道府県','市区町村','町域・番地');">
                                </div>
                                <div class="topContactForm__ans">
                                    <select name="都道府県" class="validate【required】">
                                        <option value="" selected>都道府県</option>
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>
                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県">神奈川県</option>
                                        <option value="新潟県">新潟県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="長野県">長野県</option>
                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>
                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県">和歌山県</option>
                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>
                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>
                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県">鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                    </select>
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="市区町村" placeholder="市区町村" class="validate【required】">
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="町域・番地" placeholder="町域・番地" class="validate【required】">
                                </div>
                                <div class="topContactForm__ans">
                                    <input type="text" name="建物名・部屋番号" placeholder="番地・建物名・部屋番号">
                                </div>
                            </div>
                            <div class="topContactForm__form">
                                <div class="topContactForm__ques flex vcenter">
                                    依頼したい内容やご相談事
                                    <span class="topContactForm__ques--req flex vcenter hcenter">
                                        必須
                                    </span>
                                </div>
                                <div class="topContactForm__ans">
                                    <textarea name="依頼したい内容やご相談事" id="" placeholder="リビングと寝室のお掃除、犬の散歩をお願いしたいです。" class="validate【required】"></textarea>
                                </div>
                            </div>
                            <div class="topContactFormBtnWrap">
                                <button class="topContactForm__btn btn md-btn pink" type="submit">
                                    見積りを依頼する
                                </button>
                            </div>
                        </form>
                        <p class="topContactForm__notice">
                            <span class="topContactForm__notice--head">
                                【個人情報の取扱いについて】
                            </span>
                            お預かりした個人情報は、ダスキングループ及びフランチャイズチェーン加盟店にて無料お見積りの受付及びお見積りに必要なご連絡に利用させていただきます。個人情報に関するお問い合わせ、ご自身の個人情報の開示・訂正・利用停止につきましては株式会社ダスキン南関東地域本部03-5909-6732までご連絡ください。
                        </p>
                    </div>
                    <p class="topContact__notice">
                        ※サービスは、予告なしにデザインや仕様、料金の変更や販売を中止することがございますので、ご了承ください。<br>
                        ※サービス実施日は時期によってご希望に添えない場合がございます。<br>
                        ※サービスカーの駐車スペースのご用意をお願いします。駐車できない場合は有料駐車場を利用するため、駐車料金をご負担いただきます。<br>
                        ※一部対応できない地域・お店があります。<br>
                        ※渡船や連絡橋等の有料の移動手段を利用する場合は、実費を別途請求させていただきます。<br>
                        ※土・日・祝日のサービスに関しましては、お受けできないことがございます。<br>
                        ※写真・イラストはイメージです
                    </p>
                </div>
            </section>
            <section class="topTel">
                <div class="topTel__bg"></div>
                <div class="topTel__ttl flex vcenter bet">
                    <span class="topTel__ttl--line"></span>
                    <span class="ttl">電話で無料相談・お見積りはこちら</span>
                    <span class="topTel__ttl--line"></span>
                </div>
                <div class="sp-wrap">
                    <div class="topTel__tel flex bet hcenter vcenter">
                        <span class="topTel__num flex vcenter robo">
                            <i class="icon icon-phone"></i>
                            0120-388-093
                        </span>
                        <span class="topTel__open">
                            8:00～20:00<br>年中無休
                        </span>
                    </div>
                </div>
            </section>
            <?php
            require_once $include . '_footer.php'; ?>
        </div>
    </div>
</article>