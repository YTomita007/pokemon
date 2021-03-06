<?php
    function initial_pokemon(){

        $fushigidane = makepokemon('fushigidane', 1, 9);

        $hitokage = makepokemon('hitokage', 1, 9);

        $zenigame = makepokemon('zenigame', 1, 9);

        $pikachu = makepokemon('pikachu', 1, 9);

        $kacy = makepokemon('kacy', 1, 9);

        $colon = makepokemon('colon', 1, 9);

        $nyoromo = makepokemon('nyoromo', 1, 9);

        $tamatama = makepokemon('tamatama', 1, 9);

        $starman = makepokemon('starman', 1, 9);

        $koratta = makepokemon('koratta', 1, 9);

        $biririball = makepokemon('biririball', 1, 9);

        $paras = makepokemon('paras', 1, 9);

        $ishitsubute = makepokemon('ishitsubute', 1, 9);

        $gardy = makepokemon('gardy', 1, 9);

        $dugda = makepokemon('dugda', 1, 9);

        $inipoke = [
            $fushigidane, $hitokage, $zenigame, $pikachu, $kacy, $colon, 
            $nyoromo, $tamatama, $starman, $koratta, $biririball, $paras,
            $ishitsubute, $gardy, $dugda
                    ];

        return $inipoke;
    }

    function my_instance($_mypokemon){

        $firstlevel = 17;
        $_SESSION['level'] = $firstlevel;

        if (isset($_SESSION['greenbadge'])) {
            $greenbadgelevel = 63;
            $mypokemon = makepokemon($_mypokemon, $greenbadgelevel, 1);
            $_SESSION['level'] = $greenbadgelevel;
        } elseif (isset($_SESSION['crimsonbadge'])) {
            $crimsonbadgelevel = 57;
            $mypokemon = makepokemon($_mypokemon, $crimsonbadgelevel, 1);
            $_SESSION['level'] = $crimsonbadgelevel;
        } elseif (isset($_SESSION['goldbadge'])) {
            $goldbadgelevel = 51;
            $mypokemon = makepokemon($_mypokemon, $goldbadgelevel, 1);
            $_SESSION['level'] = $goldbadgelevel;
        } elseif (isset($_SESSION['pinkbadge'])) {
            $pinkbadgelevel = 45;
            $mypokemon = makepokemon($_mypokemon, $pinkbadgelevel, 1);
            $_SESSION['level'] = $pinkbadgelevel;
        } elseif (isset($_SESSION['rainbowbadge'])) {
            $rainbowbadgelevel = 39;
            $mypokemon = makepokemon($_mypokemon, $rainbowbadgelevel, 1);
            $_SESSION['level'] = $rainbowbadgelevel;
        } elseif (isset($_SESSION['orangebadge'])) {
            $orangebadgelevel = 33;
            $mypokemon = makepokemon($_mypokemon, $orangebadgelevel, 1);
            $_SESSION['level'] = $orangebadgelevel;
        } elseif (isset($_SESSION['bluebadge'])) {
            $bluebadgelevel = 27;
            $mypokemon = makepokemon($_mypokemon, $bluebadgelevel, 1);
            $_SESSION['level'] = $bluebadgelevel;
        } elseif (isset($_SESSION['graybadge'])) {
            $graybadgelevel = 22;
            $mypokemon = makepokemon($_mypokemon, $graybadgelevel, 1);
            $_SESSION['level'] = $graybadgelevel;
        } else {
        $mypokemon = makepokemon($_mypokemon, $firstlevel, 1);
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

        $oppokemon = makepokemon($_oppokemon, $level, 9);

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
            $level1 = 15;
            $level2 = 17;
            $gymleader = appear_leaders('takeshi');
            $pokemon1 = makepokemon('ishitsubute', $level1, 9);
            $pokemon2 = makepokemon('iwaku_takeshi', $level2, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'kasumi'){
            $level1 = 19;
            $level2 = 21;
            $gymleader = appear_leaders('kasumi');
            $pokemon1 = makepokemon('starman', $level1, 9);
            $pokemon2 = makepokemon('starme_kasumi', $level2, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'matisse'){
            $level1 = 24;
            $level2 = 27;
            $gymleader = appear_leaders('matisse');
            $pokemon1 = makepokemon('biririball', $level1, 9);
            $pokemon2 = makepokemon('raichu_matisse', $level2, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'erika'){
            $level1 = 27;
            $level2 = 29;
            $level3 = 29;
            $gymleader = appear_leaders('erika');
            $pokemon1 = makepokemon('utsubbot_erika', $level1, 9);
            $pokemon2 = makepokemon('monjara', $level2, 9);
            $pokemon3 = makepokemon('rafflesia_erika', $level3, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'kyo'){
            $level1 = 32;
            $level2 = 38;
            $level3 = 39;
            $gymleader = appear_leaders('kyo');
            $pokemon1 = makepokemon('betbeton', $level1, 9);
            $pokemon2 = makepokemon('golbat', $level2, 9);
            $pokemon3 = makepokemon('matadogas', $level3, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'natsume'){
            $level1 = 46;
            $level2 = 43;
            $level3 = 49;
            $gymleader = appear_leaders('natsume');
            $pokemon1 = makepokemon('yungerer', $level1, 9);
            $pokemon2 = makepokemon('barrierd', $level2, 9);
            $pokemon3 = makepokemon('fudin', $level3, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'katsura'){
            $level1 = 49;
            $level2 = 48;
            $level3 = 51;
            $gymleader = appear_leaders('katsura');
            $pokemon1 = makepokemon('firefox', $level1, 9);
            $pokemon2 = makepokemon('gallop', $level2, 9);
            $pokemon3 = makepokemon('windy', $level3, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }elseif($leaders_name == 'sakaki'){
            $level1 = 52;
            $level2 = 52;
            $level3 = 57;
            $level4 = 58;
            $gymleader = appear_leaders('sakaki');
            $pokemon1 = makepokemon('nidoking', $level1, 9);
            $pokemon2 = makepokemon('nidoqueen', $level2, 9);
            $pokemon3 = makepokemon('dugtrio', $level3, 9);
            $pokemon4 = makepokemon('saidon', $level4, 9);
            $phrases = leaders_phrase($gymleader->identify);
        }

        return array($gymleader, $pokemon1, $level1, $pokemon2, $level2, $pokemon3, $level3, $pokemon4, $level4, $pokemon5, $level5, $pokemon6, $level6, $phrases);
    }

    function battle_single($_pokemon, $pokelevel){

        if ($pokelevel == 'greenbadge') {
            $greenbadgelevel = 63;
            $battlepokemon = makepokemon($_pokemon, $greenbadgelevel, 1);
        } elseif ($pokelevel == 'crimsonbadge') {
            $crimsonbadgelevel = 57;
            $battlepokemon = makepokemon($_pokemon, $crimsonbadgelevel, 1);
        } elseif ($pokelevel == 'goldbadge') {
            $goldbadgelevel = 51;
            $battlepokemon = makepokemon($_pokemon, $goldbadgelevel, 1);
            $_SESSION['level'] = $goldbadgelevel;
        } elseif ($pokelevel == 'pinkbadge') {
            $pinkbadgelevel = 45;
            $battlepokemon = makepokemon($_pokemon, $pinkbadgelevel, 1);
            $_SESSION['level'] = $pinkbadgelevel;
        } elseif ($pokelevel == 'rainbowbadge') {
            $rainbowbadgelevel = 39;
            $battlepokemon = makepokemon($_pokemon, $rainbowbadgelevel, 1);
            $_SESSION['level'] = $rainbowbadgelevel;
        } elseif ($pokelevel == 'orangebadge') {
            $orangebadgelevel = 33;
            $battlepokemon = makepokemon($_pokemon, $orangebadgelevel, 1);
            $_SESSION['level'] = $orangebadgelevel;
        } elseif ($pokelevel == 'bluebadge') {
            $bluebadgelevel = 27;
            $battlepokemon = makepokemon($_pokemon, $bluebadgelevel, 1);
            $_SESSION['level'] = $bluebadgelevel;
        } elseif ($pokelevel == 'graybadge') {
            $graybadgelevel = 22;
            $battlepokemon = makepokemon($_pokemon, $graybadgelevel, 1);
            $_SESSION['level'] = $graybadgelevel;
        } elseif ($pokelevel == 'nonbadge') {
            $nonbadgelevel = 17;
            $battlepokemon = makepokemon($_pokemon, $nonbadgelevel, 1);
        } else {
            $battlepokemon = makepokemon($_pokemon, 1, 1);
        }

        return $battlepokemon;
    }

    function weapon_instance($_mypokemon, $_oppokemon){
        
        list($myassass1, $myassass2, $myassass3, $myassass4) = acquire_pokemon($_mypokemon, 15, 9);
        list($opassass1, $opassass2, $opassass3, $opassass4) = acquire_pokemon($_oppokemon, 15, 9);

        return array($myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4);
    }

    function winner_pokemon($_winner){

        $winner = makepokemon($_winner, 1, 9);

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

    function strengthen1($oppokemon, $opattack, $opcure) {
        if($oppokemon->identify == 'iwaku_takeshi'){
            $oppokemon->picture = 'iwaku_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'starme_kasumi'){
            $oppokemon->picture = 'starme_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'raichu_matisse'){
            $oppokemon->picture = 'raichu_s';
            $opattack = $opattack + 5;
            $opcure = $opcure - 8;
        }elseif($oppokemon->identify == 'betbeton'){
            $oppokemon->picture = 'betbeton_s';
            $opattack = $opattack + 7;
            $opcure = $opcure - 15;
        }elseif($oppokemon->identify == 'barrierd'){
            $oppokemon->picture = 'barrierd_s';
            $opattack = $opattack + 10;
            $opcure = $opcure - 15;
        }elseif($oppokemon->identify == 'gallop'){
            $oppokemon->picture = 'gallop_s';
            $opattack = $opattack + 12;
            $opcure = $opcure - 8;
        }

        return array($oppokemon, $opattack, $opcure);
    }

    function strengthen2($oppokemon, $opattack, $opcure) {
        
        if($oppokemon->identify == 'rafflesia_erika'){
            $oppokemon->picture = 'rafflesia_s';
            $opattack = $opattack + 25;
            $opcure = $opcure - 15;
        }elseif($oppokemon->identify == 'matadogas'){
            $oppokemon->picture = 'matadogas_s';
            $opattack = $opattack + 25;
            $opcure = $opcure - 15;
        }elseif($oppokemon->identify == 'fudin'){
            $oppokemon->picture = 'fudin_s';
            $opattack = $opattack + 25;
            $opcure = $opcure - 15;
        }elseif($oppokemon->identify == 'windy'){
            $oppokemon->picture = 'windy_s';
            $opattack = $opattack + 25;
            $opcure = $opcure - 15;
        }elseif($oppokemon->identify == 'dugtrio'){
            $oppokemon->picture = 'dugtrio_s';
            $opattack = $opattack + 15;
            $oppower = $oppower + 30;
        }elseif($oppokemon->identify == 'saidon'){
            $oppokemon->picture = 'saidon_s';
            $opattack = $opattack + 25;
            $opcure = $opcure - 15;
        }

        return array($oppokemon, $opattack, $opcure);
    }

    function terminate_battle_go_next($mypokemon, $oppokemon, $gymleader, $orders, $mypower, $oppower){
        if($mypokemon->get_speed() < $oppokemon->get_speed()){
            if($mypower < 1){
                header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=212"."&gymleader=".$gymleader->identify, true, 307);
            } elseif($oppower < 1){
                    if($orders > 1){
                        if($gymleader->identify == 'erika' || $gymleader->identify == 'kyo' || $gymleader->identify == 'natsume' || $gymleader->identify == 'katsura' || $gymleader->identify == 'sakaki'){
                            if($orders > 2){
                                if($gymleader->identify == 'sakaki'){
                                    if($orders > 3){
                                        header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
                                    } else {
                                        header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=207"."&gymleader=".$gymleader->identify, true, 307);
                                    }
                                } else {
                                    header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
                                }
                            } else {
                                header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=206"."&gymleader=".$gymleader->identify, true, 307);
                            }
                        } else {
                            header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
                        }
                    } else {
                        header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=202"."&gymleader=".$gymleader->identify, true, 307);
                    }
            }
        } else {
            if($oppower < 1){
                if($orders > 1){
                    if($gymleader->identify == 'erika' || $gymleader->identify == 'kyo' || $gymleader->identify == 'natsume' || $gymleader->identify == 'katsura' || $gymleader->identify == 'sakaki'){
                        if($orders > 2){
                            if($gymleader->identify == 'sakaki'){
                                if($orders > 3){
                                    header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
                                } else {
                                    header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=207"."&gymleader=".$gymleader->identify, true, 307);
                                }
                            } else {
                                header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
                            }
                        } else {
                            header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=206"."&gymleader=".$gymleader->identify, true, 307);
                        }
                    } else {
                        header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
                    }
                } else {
                    header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=202"."&gymleader=".$gymleader->identify, true, 307);
                }
            } elseif($mypower < 1){
                header('Location: ../../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=212"."&gymleader=".$gymleader->identify, true, 307);
            } 	
        }    
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
            session_destroy();
            $message = "バッジやポケモンデータをクリアしました<br>";
            $clearflag = true;
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
    
        return array($message, $clearflag);
    }

    function battle_done($mypokemon, $oppokemon, $mypower, $oppower, $mypokelevel, $oppokelevel){
        if($mypokemon->get_speed() < $oppokemon->get_speed()){
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'mypokelevel' => $mypokelevel,
                'oppokelevel' => $oppokelevel,
            ];
            if($mypower < 1){
                $_SESSION['winner'] = $oppokemon->identify;
                header('Location: result.php?'.http_build_query($params, '', '&'), true, 307);
            } elseif($oppower < 1){
                $_SESSION['winner'] = $mypokemon->identify;
                header('Location: result.php?'.http_build_query($params, '', '&'), true, 307);
            }
        } else {
            if($oppower < 1){
                $_SESSION['winner'] = $mypokemon->identify;
                header('Location: result.php?'.http_build_query($params, '', '&'), true, 307);
            } elseif($mypower < 1){
                $_SESSION['winner'] = $oppokemon->identify;
                header('Location: result.php?'.http_build_query($params, '', '&'), true, 307);
            }
        }    
    }
?>
