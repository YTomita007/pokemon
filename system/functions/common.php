<?php
	session_start();

    require 'instance.php';

    // 開発時のみ有効にする
    // ini_set('display_errors', "On");

    $root = 'http://localhost:8888/pokemon';
    $badge_ids = array('graybadge', 'bluebadge', 'orangebadge', 'rainbowbadge', 'pinkbadge', 'goldbadge', 'crimsonbadge', 'greenbadge');
    $badge_names = array('グレーバッジ', 'ブルーバッジ', 'オレンジバッジ', 'レインボーバッジ', 'ピンクバッジ', 'ゴールドバッジ', 'クリムゾンバッジ', 'グリーンバッジ');
    $pokemon_length = array("フシギダネ", "フシギソウ", "フシギバナ", "ヒトカゲ", "リザード", "リザードン", "ゼニガメ", "カメール", "カメックス", "キャタピー", "トランセル", "バタフリー", "ビードル", "コクーン", "スピアー", "ポッポ", "ピジョン", "ピジョット", "コラッタ", "ラッタ", "オニスズメ", "オニドリル", "アーボ", "アーボック", "ピカチュウ", "ライチュウ", "サンド", "サンドパン", "ニドラン♀", "ニドリーナ", "ニドクイン", "ニドラン♂", "ニドリーノ", "ニドキング", "ピッピ", "ピクシー", "ロコン", "キュウコン", "プリン", "プクリン", "ズバット", "ゴルバット", "ナゾノクサ", "クサイハナ", "ラフレシア", "パラス", "パラセクト", "コンパン", "モルフォン", "ディグダ", "ダグトリオ", "ニャース", "ペルシアン", "コダック", "ゴルダック", "マンキー", "オコリザル", "ガーディ", "ウインディ", "ニョロモ", "ニョロゾ", "ニョロボン", "ケーシィ", "ユンゲラー", "フーディン", "ワンリキー", "ゴーリキー", "カイリキー", "マダツボミ", "ウツドン", "ウツボット", "メノクラゲ", "ドククラゲ", "イシツブテ", "ゴローン", "ゴローニャ", "ポニータ", "ギャロップ", "ヤドン", "ヤドラン", "コイル", "レアコイル", "カモネギ", "ドードー", "ドードリオ", "パウワウ", "ジュゴン", "ベトベター", "ベトベトン", "シェルダー", "パルシェン", "ゴース", "ゴースト", "ゲンガー", "イワーク", "スリープ", "スリーパー", "クラブ", "キングラー", "ビリリダマ", "マルマイン", "タマタマ", "ナッシー", "カラカラ", "ガラガラ", "サワムラー", "エビワラー", "ベロリンガ", "ドガース", "マタドガス", "サイホーン", "サイドン", "ラッキー", "モンジャラ", "ガルーラ", "タッツー", "シードラ", "トサキント", "アズマオウ", "ヒトデマン", "スターミー", "バリヤード", "ストライク", "ルージュラ", "エレブー", "ブーバー", "カイロス", "ケンタロス", "コイキング", "ギャラドス", "ラプラス", "メタモン", "イーブイ", "シャワーズ", "サンダース", "ブースター", "ポリゴン", "オムナイト", "オムスター", "カブト", "カブトプス", "プテラ", "カビゴン", "フリーザー", "サンダー", "ファイヤー", "ミニリュウ", "ハクリュー", "カイリュー", "ミュウツー", "ミュウ");

    function initial_pokemon(){

        $fushigidane = makepokemon('fushigidane', 1);

        $hitokage = makepokemon('hitokage', 1);

        $zenigame = makepokemon('zenigame', 1);

        $pikachu = makepokemon('pikachu', 1);

        $koratta = makepokemon('koratta', 1);

        $colon = makepokemon('colon', 1);

        $nyoromo = makepokemon('nyoromo', 1);

        $tamatama = makepokemon('tamatama', 1);

        $kacy = makepokemon('kacy', 1);

        $inipoke = [$fushigidane, $hitokage, $zenigame, $pikachu, $koratta, $colon, $nyoromo, $tamatama, $kacy];

        return $inipoke;
    }

    function my_instance($_mypokemon){

        $firstlevel = 17;
        $_SESSION['level'] = $firstlevel;

        if (($_SESSION['greenbadge'] == true)) {
            $greenbadgelevel = 63;
            $mypokemon = makepokemon($_mypokemon, $greenbadgelevel);
            $_SESSION['level'] = $greenbadgelevel;
        } elseif ($_SESSION['crimsonbadge'] == true) {
            $crimsonbadgelevel = 57;
            $mypokemon = makepokemon($_mypokemon, $crimsonbadgelevel);
            $_SESSION['level'] = $crimsonbadgelevel;
        } elseif (($_SESSION['goldbadge'] == true)) {
            $goldbadgelevel = 51;
            $mypokemon = makepokemon($_mypokemon, $goldbadgelevel);
            $_SESSION['level'] = $goldbadgelevel;
        } elseif (($_SESSION['pinkbadge'] == true)) {
            $pinkbadgelevel = 45;
            $mypokemon = makepokemon($_mypokemon, $pinkbadgelevel);
            $_SESSION['level'] = $pinkbadgelevel;
        } elseif ($_SESSION['rainbowbadge'] == true) {
            $rainbowbadgelevel = 39;
            $mypokemon = makepokemon($_mypokemon, $rainbowbadgelevel);
            $_SESSION['level'] = $rainbowbadgelevel;
        } elseif (($_SESSION['orangebadge'] == true)) {
            $orangebadgelevel = 33;
            $mypokemon = makepokemon($_mypokemon, $orangebadgelevel);
            $_SESSION['level'] = $orangebadgelevel;
        } elseif ($_SESSION['bluebadge'] == true) {
            $bluebadgelevel = 27;
            $mypokemon = makepokemon($_mypokemon, $bluebadgelevel);
            $_SESSION['level'] = $bluebadgelevel;
        } elseif ($_SESSION['graybadge'] == true) {
            $graybadgelevel = 22;
            $mypokemon = makepokemon($_mypokemon, $graybadgelevel);
            $_SESSION['level'] = $graybadgelevel;
        } else {
        $mypokemon = makepokemon($_mypokemon, $firstlevel);
        }        

        return $mypokemon;
    }

    function gymleader_instance($gymleader_name){

        $gymleader = appear_leaders($gymleader_name);

        return $gymleader;
    }

    function gymleaders_allinstance(){

        $takeshi = appear_leaders('takeshi');

        $kasumi = appear_leaders('kasumi');

        $matisse = appear_leaders('matisse');

        $erika = appear_leaders('erika');

        $kyo = appear_leaders('kyo');

        $natsume = appear_leaders('natsume');

        $katsura = appear_leaders('katsura');

        $sakaki = appear_leaders('sakaki');

        $gymleaders = [$takeshi, $kasumi, $matisse, $erika, $kyo, $natsume, $katsura, $sakaki];

        return $gymleaders;
    }

    function leaders_pokemon_instance($_oppokemon, $level){

        $oppokemon = makepokemon($_oppokemon, $level);

        return $oppokemon;
    }

    function leaders_combination($leaders_name){

        $pokemon3 = "";
        $pokemon4 = "";
        $pokemon5 = "";
        $pokemon6 = "";
        $level3 = "";
        $level4 = "";
        $level5 = "";
        $level6 = "";

        if($leaders_name == 'takeshi'){
            $level1 = 12;
            $level2 = 15;
            $gymleader = appear_leaders('takeshi');
            $pokemon1 = makepokemon('ishitsubute', $level1);
            $pokemon2 = makepokemon('iwaku', $level2);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'kasumi'){
            $level1 = 15;
            $level2 = 19;
            $gymleader = appear_leaders('kasumi');
            $pokemon1 = makepokemon('starman', $level1);
            $pokemon2 = makepokemon('starme', $level2);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'matisse'){
            $level1 = 18;
            $level2 = 25;
            $gymleader = appear_leaders('matisse');
            $pokemon1 = makepokemon('biririball', $level1);
            $pokemon2 = makepokemon('raichu', $level2);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'erika'){
            $level1 = 27;
            $level2 = 29;
            $gymleader = appear_leaders('erika');
            $pokemon1 = makepokemon('utsubbot', $level1);
            $pokemon2 = makepokemon('rafflesia', $level2);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'kyo'){
            $level1 = 35;
            $level2 = 37;
            $gymleader = appear_leaders('kyo');
            $pokemon1 = makepokemon('betbeton', $level1);
            $pokemon2 = makepokemon('golbat', $level2);
            $pokemon3 = makepokemon('matadogas', $level3);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'natsume'){
            $level1 = 39;
            $level2 = 38;
            $level3 = 44;
            $gymleader = appear_leaders('natsume');
            $pokemon1 = makepokemon('yungerer', $level1);
            $pokemon2 = makepokemon('barrierd', $level2);
            $pokemon3 = makepokemon('fudin', $level3);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'katsura'){
            $level1 = 47;
            $level2 = 45;
            $level3 = 51;
            $gymleader = appear_leaders('katsura');
            $pokemon1 = makepokemon('firefox', $level1);
            $pokemon2 = makepokemon('gallop', $level2);
            $pokemon3 = makepokemon('windy', $level3);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'sakaki'){
            $level1 = 50;
            $level2 = 50;
            $level3 = 57;
            $gymleader = appear_leaders('sakaki');
            $pokemon1 = makepokemon('nidoking', $level1);
            $pokemon2 = makepokemon('nidoqueen', $level2);
            $pokemon3 = makepokemon('saidon', $level3);
            $phrases = leaders_phrase($gymleader->identify);
        }

        return array($gymleader, $pokemon1, $level1, $pokemon2, $level2, $pokemon3, $level3, $pokemon4, $level4, $pokemon5, $level5, $pokemon6, $level6, $phrases);
    }

    function battle_instance($_mypokemon, $_oppokemon){

        $mypokemon = makepokemon($_mypokemon, 15);
        $oppokemon = makepokemon($_oppokemon, 15);

        return array($mypokemon, $oppokemon);
    }

    function weapon_instance($_mypokemon, $_oppokemon){
        
        list($myassass1, $myassass2, $myassass3, $myassass4) = acquire_pokemon($_mypokemon, 15);
        list($opassass1, $opassass2, $opassass3, $opassass4) = acquire_pokemon($_oppokemon, 15);

        return array($myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4);
    }

    function winner_pokemon($_winner){

        $winner = makepokemon($_winner, 1);

        return $winner;
    }

    function battle_sequence($mycommand, $myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4){

        $myattack = 0;
        $opattack = 0;
        $mycure = 0;
        $opcure = 0;

        $opattacks = array($opassass1->get_name(), $opassass2->get_name(), $opassass3->get_name(), $opassass4->get_name());

		if($mycommand == $myassass1->get_name()){
			$myattack = $myassass1->get_attack();
			$mycure = $myassass1->get_cure();
			$mycommand = $myassass1->get_display();
		} elseif($mycommand == $myassass2->get_name()){
			$myattack = $myassass2->get_attack();
			$mycure = $myassass2->get_cure();
			$mycommand = $myassass2->get_display();
		} elseif($mycommand == $myassass3->get_name()){
			$myattack = $myassass3->get_attack();
			$mycure = $myassass3->get_cure();
			$mycommand = $myassass3->get_display();
		} elseif($mycommand == $myassass4->get_name()){
			$myattack = $myassass4->get_attack();
			$mycure = $myassass4->get_cure();
			$mycommand = $myassass4->get_display();
		}

		$opcommand = $opattacks[mt_rand(0,3)];
		if($opcommand == $opassass1->get_name()){
			$opattack = $opassass1->get_attack();
			$opcure = $opassass1->get_cure();
			$opcommand = $opassass1->get_display();
		} elseif($opcommand == $opassass2->get_name()){
			$opattack = $opassass2->get_attack();
			$opcure = $opassass2->get_cure();
			$opcommand = $opassass2->get_display();
		} elseif($opcommand == $opassass3->get_name()){
			$opattack = $opassass3->get_attack();
			$opcure = $opassass3->get_cure();
			$opcommand = $opassass3->get_display();
		} elseif($opcommand == $opassass4->get_name()){
			$opattack = $opassass4->get_attack();
			$opcure = $opassass4->get_cure();
			$opcommand = $opassass4->get_display();
		}

        return array($mycommand, $opcommand, $myattack, $mycure, $opattack, $opcure);
    }

    function battle_calculation($mypower, $oppower, $myattack, $mycure, $opattack, $opcure){

		$mypower = $mypower - $opattack + $mycure;
        $oppower = $oppower - $myattack + $opcure;

        return array($mypower, $oppower, $myattack, $opattack);
    }

    function strengthen($oppokemon, $opattack, $opcure) {
        if($oppokemon->identify == 'iwaku'){
            $oppokemon->picture = 'iwaku_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'starme'){
            $oppokemon->picture = 'starme_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'raichu'){
            $oppokemon->picture = 'raichu_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'rafflesia'){
            $oppokemon->picture = 'rafflesia_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'matadogas'){
            $oppokemon->picture = 'matadogas_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'fudin'){
            $oppokemon->picture = 'fudin_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'windy'){
            $oppokemon->picture = 'windy_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'saidon'){
            $oppokemon->picture = 'saidon_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }

        return array($oppokemon, $opattack, $opcure);
    }

    function badge_awards($gymleader){
        if($gymleader == 'takeshi'){
            $badge = 'graybadge';
            $_SESSION['graybadge'] = 'true';
        }elseif($gymleader == 'kasumi'){
            $badge = 'bluebadge';
            $_SESSION['bluebadge'] = 'true';
        }elseif($gymleader == 'matisse'){
            $badge = 'orangebadge';
            $_SESSION['orangebadge'] = 'true';
        }elseif($gymleader == 'erika'){
            $badge = 'rainbowbadge';
            $_SESSION['rainbowbadge'] = 'true';
        }elseif($gymleader == 'kyo'){
            $badge = 'pinkbadge';
            $_SESSION['pinkbadge'] = 'true';
        }elseif($gymleader == 'natsume'){
            $badge = 'goldbadge';
            $_SESSION['goldbadge'] = 'true';
        }elseif($gymleader == 'katsura'){
            $badge = 'crimsonbadge';
            $_SESSION['crimsonbadge'] = 'true';
        }elseif($gymleader == 'sakaki'){
            $badge = 'greenbadge';
            $_SESSION['greenbadge'] = 'true';
        }

        return $badge;
    }

    function trancate_alldata($_dataclear, $_degrees){

        if($_dataclear == 'yes'){
            unset($_SESSION['graybadge']);
            unset($_SESSION['bluebadge']);
            unset($_SESSION['orangebadge']);
            unset($_SESSION['rainbowbadge']);
            unset($_SESSION['pinkbadge']);
            unset($_SESSION['goldbadge']);
            unset($_SESSION['crimsonbadge']);
            unset($_SESSION['greenbadge']);
            unset($_SESSION['level']);
            $message = "バッジデータをクリアしました<br>";
        }

        if(isset($_degrees)){
            switch($_degrees){
                case 'easy':
                    $_SESSION['degrees'] = 'easy';
                    $message = $message."ゲームのレベルを「かんたん」に せっていしました";
                    break;
                case 'moderate':
                    $_SESSION['degrees'] = 'moderate';
                    $message = $message."ゲームのレベルを「それなり」に せっていしました";
                    break;
                case 'hard':
                    $_SESSION['degrees'] = 'hard';
                    $message = $message."ゲームのレベルを「むずいよ」に せっていしました";
                    break;
            }
        }
    
        return $message;
    }
?>
