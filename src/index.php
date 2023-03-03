<?php
$include = './include/'; // パーツ用パス
$home = './'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'top', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">
    <div class="top__bg pc">
        <img src="<?php echo HOME ?>img/top_bg.png" alt="">
    </div>
    <div class="w1000 wrap flex bet top">
        <div class="topLeft pc">
            <h2 class="topLeft__title">
                <img src="<?php echo HOME ?>img/merry_maids.svg" alt="merry maids">
                <span class="topLeft__title--sub">
                    家事代行サービス
                </span>
            </h2>
            <div class="topLeft__list">
                <a href="" class="topLeft__link flex bet vcenter">
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
                <a href="" class="topLeft__link flex bet vcenter">
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
            <a class="topLeft__btn shine md-btn pink">
                無料相談・お見積りはこちら
            </a>

            <div class="topLeftInfo">
                <div class="topLeftInfo__title">
                    電話で無料相談・お見積りはこちら
                </div>
                <div class="topLeftInfo__tel flex bet hcenter vcenter">
                    <span class="topLeftInfo__num">
                        <i class="icon icon-phone"></i>
                        0120-000-000
                    </span>
                    <span class="topLeftInfo__open">
                        8:00～20:00<br>年中無休
                    </span>
                </div>
            </div>
        </div>
        <div class="topSP">
            <section class="topMv">
                <img src="<?php echo HOME ?>img/top_mv.png" alt="">
                <div class="topMv__bottom">
                    <img src="<?php echo HOME ?>img/merry_maids_white.svg" alt="" class="topMv__bottom--logo">
                    <span class="topMv__bottom--head">
                        家事代行サービス
                    </span>
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
            <section class="topService">
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
                                    <img src="<?php echo HOME ?>img/spot_0<?php echo $num; ?>.jpg" alt="">
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
                                    'price' => '18,700',
                                    'nontax' => '17,000',
                                    'content' => '洗面所<br>●収納庫表面、収納庫扉枠 ●洗面台の照明(天井照明を除く) ●カウンタートップ ●洗面ボウル ●蛇口 ●鏡 ●備品(石けん受けなど) ●ドア ●洗濯機・乾燥機表面 ●床・幅木 ●オープン棚 ●窓ガラス(内側のみ) ●高所<br>トイレ<br>●壁面 ●ペーパーホルダー ●水洗タンク表面と蛇口 ●便器 ●備品(トイレポットなど) ●床・幅木 ●ドア ●照明器具 ●排気口の表面 ●窓ガラス(内側のみ) ●天井 ●温水洗浄ノズル ●オープンの棚 ●収納庫表面、収納庫扉枠'
                                ),
                            );
                            $num = 0;
                            foreach ($list as $key => $value) {
                                $num++;
                            ?>
                                <div class="topServiceSpotItem" id="<?php echo $value['slug']; ?>">
                                    <div class="topServiceSpotItem__head">
                                        <span class="topServiceSpotItem__head--en">
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
                                            <img src="<?php echo HOME ?>img/before_0<?php echo $num; ?>.jpg" alt="">
                                            <img src="<?php echo HOME ?>img/tri.svg" alt="" class="tri">
                                            <img src="<?php echo HOME ?>img/after_0<?php echo $num; ?>.jpg" alt="">
                                        </div>
                                        <div class="topServiceSpotItem__price">
                                            <div class="topServiceSpotItem__price--head">
                                                標準料金
                                            </div>
                                            <div class="topServiceSpotItem__price--num">
                                                <?php echo $value['price']; ?>
                                                <span class="topServiceSpotItem__price--nontax">
                                                    円(税抜<?php echo $value['nontax']; ?>円)
                                                </span>
                                            </div>
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
        </div>
    </div>
</article>
<?php
require_once $include . '_footer.php';
