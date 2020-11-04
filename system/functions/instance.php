<?php
    function makepokemon($pokemon_name, $level, $status_flag){

        switch($pokemon_name){
            case 'fushigidane':
                if($level > 30 && $status_flag != 9){
                    $pokemon = new pokemon('fushigisou', 'フシギソウ', 'fushigisou', $status_flag);
                    $pokemon->set_power(60 + $level * 4);
                    $pokemon->set_offensive(62 + $level * 2);
                    $pokemon->set_defense(63 + $level * 3);
                    $pokemon->set_speed(60 + $level * 1);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('poison');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('fushigidane');
                    $pokemon->set_prename1('フシギダネ');
                } else {
                    $pokemon = new pokemon('fushigidane', 'フシギダネ', 'fushigidane', $status_flag);
                    $pokemon->set_power(45 + $level * 3);
                    $pokemon->set_offensive(49 + $level * 2);
                    $pokemon->set_defense(49 + $level * 3);
                    $pokemon->set_speed(45 + $level * 1);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('poison');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                }
                break;
            case 'fushigisou':
                if($level > 50 && $status_flag != 9){
                    $pokemon = new pokemon('fushigibana', 'フシギバナ', 'fushigibana', $status_flag);
                    $pokemon->set_power(80 + $level * 5);
                    $pokemon->set_offensive(82 + $level * 4);
                    $pokemon->set_defense(83 + $level * 4);
                    $pokemon->set_speed(80 + $level * 3);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('poison');
                    $pokemon->set_evolution(2);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('fushigidane');
                    $pokemon->set_prename1('フシギダネ');
                    $pokemon->set_preform2('fushigisou');
                    $pokemon->set_prename2('フシギソウ');
                } else {
                    $pokemon = new pokemon('fushigisou', 'フシギソウ', 'fushigisou', $status_flag);
                    $pokemon->set_power(60 + $level * 4);
                    $pokemon->set_offensive(62 + $level * 2);
                    $pokemon->set_defense(63 + $level * 3);
                    $pokemon->set_speed(60 + $level * 1);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('poison');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('fushigidane');
                    $pokemon->set_prename1('フシギダネ');
                }
                break;
            case 'fushigibana':
                $pokemon = new pokemon('fushigibana', 'フシギバナ', 'fushigibana', $status_flag);
                $pokemon->set_power(80 + $level * 5);
                $pokemon->set_offensive(82 + $level * 4);
                $pokemon->set_defense(83 + $level * 4);
                $pokemon->set_speed(80 + $level * 3);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('poison');
                $pokemon->set_evolution(2);
                $pokemon->set_formlevel1(30);
                $pokemon->set_formlevel2(50);
                $pokemon->set_preform1('fushigidane');
                $pokemon->set_prename1('フシギダネ');
                $pokemon->set_preform2('fushigisou');
                $pokemon->set_prename2('フシギソウ');
                break;
            case 'hitokage':
                if($level > 30 && $status_flag != 9){
                    $pokemon = new pokemon('rezard', 'リザード', 'rezard', $status_flag);
                    $pokemon->set_power(58 + $level * 4);
                    $pokemon->set_offensive(64 + $level * 3);
                    $pokemon->set_defense(58 + $level * 2);
                    $pokemon->set_speed(80 + $level * 4);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('hitokage');
                    $pokemon->set_prename1('ヒトカゲ');
                } else {
                    $pokemon = new pokemon('hitokage', 'ヒトカゲ', 'hitokage', $status_flag);
                    $pokemon->set_power(35 + $level * 3);
                    $pokemon->set_offensive(49 + $level * 2);
                    $pokemon->set_defense(49 + $level * 3);
                    $pokemon->set_speed(90 + $level * 1);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                }
                break;
            case 'rezard':
                if($level > 50 && $status_flag != 9){
                    $pokemon = new pokemon('rezardon', 'リザードン', 'rezardon', $status_flag);
                    $pokemon->set_power(78 + $level * 5);
                    $pokemon->set_offensive(84 + $level * 4);
                    $pokemon->set_defense(78 + $level * 3);
                    $pokemon->set_speed(100 + $level * 4);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(2);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('hitokage');
                    $pokemon->set_prename1('ヒトカゲ');
                    $pokemon->set_preform2('rezard');
                    $pokemon->set_prename2('リザード');
                } else {
                    $pokemon = new pokemon('rezard', 'リザード', 'rezard', $status_flag);
                    $pokemon->set_power(58 + $level * 4);
                    $pokemon->set_offensive(64 + $level * 3);
                    $pokemon->set_defense(58 + $level * 2);
                    $pokemon->set_speed(80 + $level * 4);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('hitokage');
                    $pokemon->set_prename1('ヒトカゲ');
                }
                break;
            case 'rezardon':
                $pokemon = new pokemon('rezardon', 'リザードン', 'rezardon', $status_flag);
                $pokemon->set_power(78 + $level * 5);
                $pokemon->set_offensive(84 + $level * 4);
                $pokemon->set_defense(78 + $level * 3);
                $pokemon->set_speed(100 + $level * 4);
                $pokemon->set_attribute1('fire');
                $pokemon->set_evolution(2);
                $pokemon->set_formlevel1(30);
                $pokemon->set_formlevel2(50);
                $pokemon->set_preform1('hitokage');
                $pokemon->set_prename1('ヒトカゲ');
                $pokemon->set_preform2('rezard');
                $pokemon->set_prename2('リザード');
                break;
            case 'zenigame':
                if($level > 30 && $status_flag != 9){
                    $pokemon = new pokemon('kamel', 'カメール', 'kamel', $status_flag);
                    $pokemon->set_power(59 + $level * 4);
                    $pokemon->set_offensive(63 + $level * 2);
                    $pokemon->set_defense(80 + $level * 3);
                    $pokemon->set_speed(58 + $level * 2);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('zenigame');
                    $pokemon->set_prename1('ゼニガメ');
                } else {
                    $pokemon = new pokemon('zenigame', 'ゼニガメ', 'zenigame', $status_flag);
                    $pokemon->set_power(30 + $level * 3);
                    $pokemon->set_offensive(56);
                    $pokemon->set_defense(35);
                    $pokemon->set_speed(72);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                }
                break;
            case 'kamel':
                if($level > 50 && $status_flag != 9){
                    $pokemon = new pokemon('kamex', 'カメックス', 'kamex', $status_flag);
                    $pokemon->set_power(79 + $level * 5);
                    $pokemon->set_offensive(83 + $level * 4);
                    $pokemon->set_defense(100 + $level * 5);
                    $pokemon->set_speed(78 + $level * 2);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(2);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('zenigame');
                    $pokemon->set_prename1('ゼニガメ');
                    $pokemon->set_preform2('kamel');
                    $pokemon->set_prename2('カメール');
                } else {
                    $pokemon = new pokemon('kamel', 'カメール', 'kamel', $status_flag);
                    $pokemon->set_power(59 + $level * 4);
                    $pokemon->set_offensive(63 + $level * 2);
                    $pokemon->set_defense(80 + $level * 3);
                    $pokemon->set_speed(58 + $level * 2);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                    $pokemon->set_preform1('zenigame');
                    $pokemon->set_prename1('ゼニガメ');
                }
                break;
            case 'kamex':
                $pokemon = new pokemon('kamex', 'カメックス', 'kamex', $status_flag);
                $pokemon->set_power(79 + $level * 5);
                $pokemon->set_offensive(83 + $level * 4);
                $pokemon->set_defense(100 + $level * 5);
                $pokemon->set_speed(78 + $level * 2);
                $pokemon->set_attribute1('water');
                $pokemon->set_evolution(2);
                $pokemon->set_formlevel1(30);
                $pokemon->set_formlevel2(50);
                $pokemon->set_preform1('zenigame');
                $pokemon->set_prename1('ゼニガメ');
                $pokemon->set_preform2('kamel');
                $pokemon->set_prename2('カメール');
                break;
            case 'koratta':
                if($level > 25){
                    $pokemon = new pokemon('ratta', 'ラッタ', 'ratta', $status_flag);
                    $pokemon->set_power(55 + $level * 3);
                    $pokemon->set_offensive(81 + $level * 3);
                    $pokemon->set_defense(60 + $level * 2);
                    $pokemon->set_speed(97 + $level * 4);
                    $pokemon->set_attribute1('normal');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(25);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('koratta');
                    $pokemon->set_prename1('コラッタ');
                } else {
                    $pokemon = new pokemon('koratta', 'コラッタ', 'koratta', $status_flag);
                    $pokemon->set_power(30 + $level * 3);
                    $pokemon->set_offensive(56 + $level * 3);
                    $pokemon->set_defense(35 + $level * 1);
                    $pokemon->set_speed(72 + $level * 3);
                    $pokemon->set_attribute1('normal');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(25);
                    $pokemon->set_formlevel2(999);
                }
                break;
            case 'ratta':
                $pokemon = new pokemon('ratta', 'ラッタ', 'ratta', $status_flag);
                $pokemon->set_power(55 + $level * 3);
                $pokemon->set_offensive(81 + $level * 3);
                $pokemon->set_defense(60 + $level * 2);
                $pokemon->set_speed(97 + $level * 4);
                $pokemon->set_attribute1('normal');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(25);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('koratta');
                $pokemon->set_prename1('コラッタ');
                break;
            case 'nyoromo':
                if($level > 26 && $status_flag != 9){
                    $pokemon = new pokemon('nyorozo', 'ニョロゾー', 'nyorozo', $status_flag);
                    $pokemon->set_power(65 + $level * 4);
                    $pokemon->set_offensive(65 + $level * 2);
                    $pokemon->set_defense(65 + $level * 2);
                    $pokemon->set_speed(90 + $level * 5);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(26);
                    $pokemon->set_formlevel2(45);
                    $pokemon->set_preform1('nyoromo');
                    $pokemon->set_prename1('ニョロモ');
                } else {
                    $pokemon = new pokemon('nyoromo', 'ニョロモ', 'nyoromo', $status_flag);
                    $pokemon->set_power(40 + $level * 4);
                    $pokemon->set_offensive(50 + $level * 1.5);
                    $pokemon->set_defense(40 + $level * 1);
                    $pokemon->set_speed(90 + $level * 3);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(26);
                    $pokemon->set_formlevel2(45);
                }
                break;
            case 'nyorozo':
                if($level > 26 && $status_flag != 9){
                    $pokemon = new pokemon('nyorobon', 'ニョロボン', 'nyorobon', $status_flag);
                    $pokemon->set_power(90 + $level * 5);
                    $pokemon->set_offensive(85 + $level * 3);
                    $pokemon->set_defense(95 + $level * 4);
                    $pokemon->set_speed(70 + $level * 3);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_attribute2('fighter');
                    $pokemon->set_evolution(2);
                    $pokemon->set_formlevel1(26);
                    $pokemon->set_formlevel2(45);
                    $pokemon->set_preform1('nyoromo');
                    $pokemon->set_prename1('ニョロモ');
                    $pokemon->set_preform2('nyorozo');
                    $pokemon->set_prename2('ニョロゾー');
                } else {
                    $pokemon = new pokemon('nyorozo', 'ニョロゾー', 'nyorozo', $status_flag);
                    $pokemon->set_power(65 + $level * 4);
                    $pokemon->set_offensive(65 + $level * 2);
                    $pokemon->set_defense(65 + $level * 2);
                    $pokemon->set_speed(90 + $level * 5);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(26);
                    $pokemon->set_formlevel2(45);
                    $pokemon->set_preform1('nyoromo');
                    $pokemon->set_prename1('ニョロモ');
                }
                break;
            case 'nyorobon':
                $pokemon = new pokemon('nyorobon', 'ニョロボン', 'nyorobon', $status_flag);
                $pokemon->set_power(90 + $level * 5);
                $pokemon->set_offensive(85 + $level * 3);
                $pokemon->set_defense(95 + $level * 4);
                $pokemon->set_speed(70 + $level * 3);
                $pokemon->set_attribute1('water');
                $pokemon->set_attribute2('fighter');
                $pokemon->set_evolution(2);
                $pokemon->set_formlevel1(26);
                $pokemon->set_formlevel2(45);
                $pokemon->set_preform1('nyoromo');
                $pokemon->set_prename1('ニョロモ');
                $pokemon->set_preform2('nyorozo');
                $pokemon->set_prename2('ニョロゾー');
                break;    
            case 'tamatama':
                if($level > 37){
                    $pokemon = new pokemon('nassy', 'ナッシー', 'nassy', $status_flag);
                    $pokemon->set_power(95 + $level * 4);
                    $pokemon->set_offensive(95 + $level * 4);
                    $pokemon->set_defense(85 + $level * 3);
                    $pokemon->set_speed(55 + $level * 1);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('esper');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(37);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('nassy');
                    $pokemon->set_prename1('ナッシー');
                } else {
                    $pokemon = new pokemon('tamatama', 'タマタマ', 'tamatama', $status_flag);
                    $pokemon->set_power(60 + $level * 3);
                    $pokemon->set_offensive(40);
                    $pokemon->set_defense(80);
                    $pokemon->set_speed(40);
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(37);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('esper');
                }
                break;
            case 'nassy':
                $pokemon = new pokemon('nassy', 'ナッシー', 'nassy', $status_flag);
                $pokemon->set_power(95 + $level * 4);
                $pokemon->set_offensive(95 + $level * 4);
                $pokemon->set_defense(85 + $level * 3);
                $pokemon->set_speed(55 + $level * 1);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('esper');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(37);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('nassy');
                $pokemon->set_prename1('ナッシー');
                break;
            case 'ishitsubute':
                if($level > 29 && $status_flag != 9){
                    $pokemon = new pokemon('gorron', 'ゴローン', 'gorron', $status_flag);
                    $pokemon->set_power(55 + $level * 3);
                    $pokemon->set_offensive(95 + $level * 4.5);
                    $pokemon->set_defense(115 + $level * 5);
                    $pokemon->set_speed(35 + $level * 1);
                    $pokemon->set_attribute1('stone');
                    $pokemon->set_attribute2('ground');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(29);
                    $pokemon->set_formlevel2(46);
                    $pokemon->set_preform1('ishitsubute');
                    $pokemon->set_prename1('イシツブテ');
                } else {
                    $pokemon = new pokemon('ishitsubute', 'イシツブテ', 'ishitsubute', $status_flag);
                    $pokemon->set_power(45 + $level * 2);
                    $pokemon->set_offensive(49);
                    $pokemon->set_defense(49);
                    $pokemon->set_speed(45);
                    $pokemon->set_attribute1('stone');
                    $pokemon->set_attribute2('ground');
                }
                break;
            case 'gorron':
                if($level > 29 && $status_flag != 9){
                    $pokemon = new pokemon('gorronya', 'ゴローニャ', 'gorronya', $status_flag);
                    $pokemon->set_power(80 + $level * 3);
                    $pokemon->set_offensive(110 + $level * 5);
                    $pokemon->set_defense(130 + $level * 7);
                    $pokemon->set_speed(45 + $level * 1);
                    $pokemon->set_attribute1('stone');
                    $pokemon->set_attribute2('ground');
                    $pokemon->set_evolution(2);
                    $pokemon->set_formlevel1(29);
                    $pokemon->set_formlevel2(46);
                    $pokemon->set_preform1('ishitsubute');
                    $pokemon->set_prename1('イシツブテ');
                    $pokemon->set_preform2('gorron');
                    $pokemon->set_prename2('ゴローン');
                } else {
                    $pokemon = new pokemon('gorron', 'ゴローン', 'gorron', $status_flag);
                    $pokemon->set_power(55 + $level * 3);
                    $pokemon->set_offensive(95 + $level * 4.5);
                    $pokemon->set_defense(115 + $level * 5);
                    $pokemon->set_speed(35 + $level * 1);
                    $pokemon->set_attribute1('stone');
                    $pokemon->set_attribute2('ground');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(29);
                    $pokemon->set_formlevel2(46);
                    $pokemon->set_preform1('ishitsubute');
                    $pokemon->set_prename1('イシツブテ');
                }
                break;
            case 'gorronya':
                $pokemon = new pokemon('gorronya', 'ゴローニャ', 'gorronya', $status_flag);
                $pokemon->set_power(80 + $level * 3);
                $pokemon->set_offensive(110 + $level * 5);
                $pokemon->set_defense(130 + $level * 7);
                $pokemon->set_speed(45 + $level * 1);
                $pokemon->set_attribute1('stone');
                $pokemon->set_attribute2('ground');
                $pokemon->set_evolution(2);
                $pokemon->set_formlevel1(29);
                $pokemon->set_formlevel2(46);
                $pokemon->set_preform1('ishitsubute');
                $pokemon->set_prename1('イシツブテ');
                $pokemon->set_preform2('gorron');
                $pokemon->set_prename2('ゴローン');
                break;
            case 'iwaku_takeshi':
                $pokemon = new pokemon('iwaku_takeshi', 'イワーク', 'iwaku', $status_flag);
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('stone');
                $pokemon->set_attribute2('ground');
                break;
            case 'iwaku':
                $pokemon = new pokemon('iwaku', 'イワーク', 'iwaku', $status_flag);
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('stone');
                $pokemon->set_attribute2('ground');
                break;
            case 'starman':
                if($level > 38){
                    $pokemon = new pokemon('starme', 'スターミー', 'starme', $status_flag);
                    $pokemon->set_power(60 + $level * 3);
                    $pokemon->set_offensive(75 + $level * 3);
                    $pokemon->set_defense(85 + $level * 4);
                    $pokemon->set_speed(115 + $level * 6);
                    $pokemon->set_attribute1('water');
                    $pokemon->set_attribute2('esper');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(38);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('starman');
                    $pokemon->set_prename1('ヒトデマン');
                } else {
                    $pokemon = new pokemon('starman', 'ヒトデマン', 'starman', $status_flag);
                    $pokemon->set_power(45 + $level * 2.5);
                    $pokemon->set_offensive(49 + $level * 2);
                    $pokemon->set_defense(49 + $level * 2);
                    $pokemon->set_speed(45 + $level * 2);
                    $pokemon->set_formlevel1(38);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_evolution(0);
                    $pokemon->set_attribute1('water');
                }
                break;
            case 'starme':
                $pokemon = new pokemon('starme', 'スターミー', 'starme', $status_flag);
                $pokemon->set_power(60 + $level * 3);
                $pokemon->set_offensive(75 + $level * 3);
                $pokemon->set_defense(85 + $level * 4);
                $pokemon->set_speed(115 + $level * 6);
                $pokemon->set_attribute1('water');
                $pokemon->set_attribute2('esper');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(38);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('starman');
                $pokemon->set_prename1('ヒトデマン');
                break;
            case 'starme_kasumi':
                $pokemon = new pokemon('starme_kasumi', 'スターミー', 'starme', $status_flag);
                $pokemon->set_power(60 + $level * 3);
                $pokemon->set_offensive(75 + $level * 3);
                $pokemon->set_defense(85 + $level * 4);
                $pokemon->set_speed(115 + $level * 6);
                $pokemon->set_attribute1('water');
                $pokemon->set_attribute2('esper');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(38);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('starman');
                $pokemon->set_prename1('ヒトデマン');
                break;
            case 'biririball':
                if($level > 32){
                    $pokemon = new pokemon('marumain', 'マルマイン', 'marumain', $status_flag);
                    $pokemon->set_power(60 + $level * 3);
                    $pokemon->set_offensive(50 + $level * 2);
                    $pokemon->set_defense(70 + $level * 3);
                    $pokemon->set_speed(140 + $level * 8);
                    $pokemon->set_attribute1('electric');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(32);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('biririball');
                    $pokemon->set_prename1('ビリリダマ');
                } else {
                    $pokemon = new pokemon('biririball', 'ビリリダマ', 'biririball', $status_flag);
                    $pokemon->set_power(40 + $level * 2);
                    $pokemon->set_offensive(30);
                    $pokemon->set_defense(50);
                    $pokemon->set_speed(100);
                    $pokemon->set_attribute1('electric');
                }
                break;
            case 'marumain':
                $pokemon = new pokemon('marumain', 'マルマイン', 'marumain', $status_flag);
                $pokemon->set_power(60 + $level * 3);
                $pokemon->set_offensive(50 + $level * 2);
                $pokemon->set_defense(70 + $level * 3);
                $pokemon->set_speed(140 + $level * 8);
                $pokemon->set_attribute1('electric');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(32);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('biririball');
                $pokemon->set_prename1('ビリリダマ');
                break;
            case 'pikachu':
                if($level > 38){
                    $pokemon = new pokemon('raichu', 'ライチュウ', 'raichu', $status_flag);
                    $pokemon->set_power(60 + $level * 3);
                    $pokemon->set_offensive(90 + $level * 5);
                    $pokemon->set_defense(55 + $level * 1);
                    $pokemon->set_speed(100 + $level * 5);
                    $pokemon->set_attribute1('electric');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(38);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('pikachu');
                    $pokemon->set_prename1('ピカチュウ');
                } else {
                    $pokemon = new pokemon('pikachu', 'ピカチュウ', 'pikachu', $status_flag);
                    $pokemon->set_power(35 + $level * 3);
                    $pokemon->set_offensive(55);
                    $pokemon->set_defense(30);
                    $pokemon->set_speed(90);
                    $pokemon->set_formlevel1(38);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_evolution(0);
                    $pokemon->set_attribute1('electric');
                }
                break;
            case 'raichu':
                $pokemon = new pokemon('raichu', 'ライチュウ', 'raichu', $status_flag);
                $pokemon->set_power(60 + $level * 3);
                $pokemon->set_offensive(90 + $level * 5);
                $pokemon->set_defense(55 + $level * 1);
                $pokemon->set_speed(100 + $level * 5);
                $pokemon->set_attribute1('electric');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(38);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('pikachu');
                $pokemon->set_prename1('ピカチュウ');
                break;
            case 'raichu_matisse':
                $pokemon = new pokemon('raichu_matisse', 'ライチュウ', 'raichu_matisse', $status_flag);
                $pokemon->set_power(60 + $level * 3);
                $pokemon->set_offensive(90 + $level * 5);
                $pokemon->set_defense(55 + $level * 1);
                $pokemon->set_speed(100 + $level * 5);
                $pokemon->set_attribute1('electric');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(38);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('pikachu');
                $pokemon->set_prename1('ピカチュウ');
                break;
            case 'paras':
                if($level > 42){
                    $pokemon = new pokemon('parasect', 'パラセクト', 'parasect', $status_flag);
                    $pokemon->set_power(60 + $level * 2);
                    $pokemon->set_offensive(95 + $level * 4);
                    $pokemon->set_defense(80 + $level * 3);
                    $pokemon->set_speed(30 + $level * 1);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('insecta');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(42);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('paras');
                    $pokemon->set_prename1('パラス');
                } else {
                    $pokemon = new pokemon('paras', 'パラス', 'paras', $status_flag);
                    $pokemon->set_power(40 + $level * 2);
                    $pokemon->set_offensive(30);
                    $pokemon->set_defense(50);
                    $pokemon->set_speed(100);
                    $pokemon->set_attribute1('weed');
                    $pokemon->set_attribute2('insecta');
                    $pokemon->set_formlevel1(42);
                    $pokemon->set_formlevel2(999);
                }
                break;
            case 'parasect':
                $pokemon = new pokemon('parasect', 'パラセクト', 'parasect', $status_flag);
                $pokemon->set_power(60 + $level * 2);
                $pokemon->set_offensive(95 + $level * 4);
                $pokemon->set_defense(80 + $level * 3);
                $pokemon->set_speed(30 + $level * 1);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('insecta');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(42);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('paras');
                $pokemon->set_prename1('パラス');
                break;
            case 'monjara':
                $pokemon = new pokemon('monjara', 'モンジャラ', 'monjara', $status_flag);
                $pokemon->set_power(65 + $level * 4);
                $pokemon->set_offensive(55 + $level * 2);
                $pokemon->set_defense(115 + $level * 5);
                $pokemon->set_speed(60 + $level * 2);
                $pokemon->set_attribute1('weed');
                break;
            case 'utsubbot_erika':
                $pokemon = new pokemon('utsubbot_erika', 'ウツボット', 'utsubbot', $status_flag);
                $pokemon->set_power(80 + $level * 5);
                $pokemon->set_offensive(105);
                $pokemon->set_defense(65);
                $pokemon->set_speed(70);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('poison');
                break;
            case 'rafflesia_erika':
                $pokemon = new pokemon('rafflesia_erika', 'ラフレシア', 'rafflesia', $status_flag);
                $pokemon->set_power(75 + $level * 5);
                $pokemon->set_offensive(80);
                $pokemon->set_defense(85);
                $pokemon->set_speed(50);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('poison');
                break;
            case 'betbeton':
                $pokemon = new pokemon('betbeton', 'ベトベトン', 'betbeton', $status_flag);
                $pokemon->set_power(105 + $level * 6);
                $pokemon->set_offensive(105 + $level * 5);
                $pokemon->set_defense(75 + $level * 2);
                $pokemon->set_speed(50 + $level * 1);
                $pokemon->set_attribute1('poison');
                break;
            case 'golbat':
                $pokemon = new pokemon('golbat', 'ゴルバット', 'golbat', $status_flag);
                $pokemon->set_power(75 + $level * 5);
                $pokemon->set_offensive(80 + $level * 3);
                $pokemon->set_defense(70 + $level * 2);
                $pokemon->set_speed(90 + $level * 3);
                $pokemon->set_attribute1('poison');
                break;
            case 'matadogas':
                $pokemon = new pokemon('matadogas', 'マタドガス', 'matadogas', $status_flag);
                $pokemon->set_power(65 + $level * 5);
                $pokemon->set_offensive(90 + $level * 3);
                $pokemon->set_defense(120 + $level * 5);
                $pokemon->set_speed(60 + $level * 2);
                $pokemon->set_attribute1('poison');
                break;
            case 'kacy':
                if($level > 21 && $status_flag != 9){
                    $pokemon = new pokemon('yungerer', 'ユンゲラー', 'yungerer', $status_flag);
                    $pokemon->set_power(40 + $level * 2.5);
                    $pokemon->set_offensive(35 + $level * 4);
                    $pokemon->set_defense(30 + $level * 1);
                    $pokemon->set_speed(105 + $level * 6);
                    $pokemon->set_attribute1('esper');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(21);
                    $pokemon->set_formlevel2(36);
                    $pokemon->set_preform1('kacy');
                    $pokemon->set_prename1('ケーシィ');
                } else {
                    $pokemon = new pokemon('kacy', 'ケーシィ', 'kacy', $status_flag);
                    $pokemon->set_power(25 + $level * 2);
                    $pokemon->set_offensive(20 + $level * 3);
                    $pokemon->set_defense(15 + $level * 1);
                    $pokemon->set_speed(90 + $level * 2);
                    $pokemon->set_attribute1('esper');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(30);
                    $pokemon->set_formlevel2(50);
                }
                break;
            case 'yungerer':
                if($level > 36 && $status_flag != 9){
                    $pokemon = new pokemon('fudin', 'フーディン', 'fudin', $status_flag);
                    $pokemon->set_power(55 + $level * 2.5);
                    $pokemon->set_offensive(50 + $level * 6);
                    $pokemon->set_defense(45 + $level * 1);
                    $pokemon->set_speed(120 + $level * 7);
                    $pokemon->set_attribute1('esper');
                    $pokemon->set_evolution(2);
                    $pokemon->set_formlevel1(21);
                    $pokemon->set_formlevel2(36);
                    $pokemon->set_preform1('kacy');
                    $pokemon->set_prename1('ケーシィ');
                    $pokemon->set_preform2('yungerer');
                    $pokemon->set_prename2('ユンゲラー');
                } else {
                    $pokemon = new pokemon('yungerer', 'ユンゲラー', 'yungerer', $status_flag);
                    $pokemon->set_power(40 + $level * 2.5);
                    $pokemon->set_offensive(35 + $level * 4);
                    $pokemon->set_defense(30 + $level * 1);
                    $pokemon->set_speed(105 + $level * 6);
                    $pokemon->set_attribute1('esper');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(21);
                    $pokemon->set_formlevel2(36);
                    $pokemon->set_preform1('kacy');
                    $pokemon->set_prename1('ケーシィ');
                }
                break;
            case 'fudin':
                $pokemon = new pokemon('fudin', 'フーディン', 'fudin', $status_flag);
                $pokemon->set_power(55 + $level * 2.5);
                $pokemon->set_offensive(50 + $level * 6);
                $pokemon->set_defense(45 + $level * 1);
                $pokemon->set_speed(120 + $level * 7);
                $pokemon->set_attribute1('esper');
                $pokemon->set_evolution(2);
                $pokemon->set_formlevel1(21);
                $pokemon->set_formlevel2(36);
                $pokemon->set_preform1('kacy');
                $pokemon->set_prename1('ケーシィ');
                $pokemon->set_preform2('yungerer');
                $pokemon->set_prename2('ユンゲラー');
                break;
            case 'barrierd':
                $pokemon = new pokemon('barrierd', 'バリヤード', 'barrierd', $status_flag);
                $pokemon->set_power(40 + $level * 3);
                $pokemon->set_offensive(45 + $level * 3);
                $pokemon->set_defense(65 + $level * 3);
                $pokemon->set_speed(90 + $level * 5);
                $pokemon->set_attribute1('esper');
                $pokemon->set_formlevel1(999);
                $pokemon->set_formlevel2(999);
                break;
            case 'colon':
                if($level > 32){
                    $pokemon = new pokemon('firefox', 'キュウコン', 'firefox', $status_flag);
                    $pokemon->set_power(73 + $level * 5);
                    $pokemon->set_offensive(76 + $level * 4);
                    $pokemon->set_defense(75 + $level * 2);
                    $pokemon->set_speed(100 + $level * 4);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(32);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('colon');
                    $pokemon->set_prename1('コロン');
                } else {
                    $pokemon = new pokemon('colon', 'コロン', 'colon', $status_flag);
                    $pokemon->set_power(38 + $level * 3);
                    $pokemon->set_offensive(41 + $level * 1);
                    $pokemon->set_defense(40 + $level * 1);
                    $pokemon->set_speed(65 + $level * 1.5);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(32);
                }
                break;
            case 'firefox':
                $pokemon = new pokemon('firefox', 'キュウコン', 'firefox', $status_flag);
                $pokemon->set_power(73 + $level * 5);
                $pokemon->set_offensive(76 + $level * 4);
                $pokemon->set_defense(75 + $level * 2);
                $pokemon->set_speed(100 + $level * 4);
                $pokemon->set_attribute1('fire');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(32);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('colon');
                $pokemon->set_prename1('コロン');
                break;
            case 'ponnieta':
                if($level > 33){
                    $pokemon = new pokemon('gallop', 'ギャロップ', 'gallop', $status_flag);
                    $pokemon->set_power(65 + $level * 4);
                    $pokemon->set_offensive(100 + $level * 5);
                    $pokemon->set_defense(70 + $level * 2);
                    $pokemon->set_speed(105 + $level * 5);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(33);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('ponnieta');
                    $pokemon->set_prename1('ポニータ');
                } else {
                    $pokemon = new pokemon('ponnieta', 'ポニータ', 'ponnieta', $status_flag);
                    $pokemon->set_power(50 + $level * 2);
                    $pokemon->set_offensive(85 + $level * 3);
                    $pokemon->set_defense(55 + $level * 1);
                    $pokemon->set_speed(90 + $level * 3);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(36);
                    $pokemon->set_formlevel2(999);
                }
                break;
            case 'gallop':
                $pokemon = new pokemon('gallop', 'ギャロップ', 'gallop', $status_flag);
                $pokemon->set_power(65 + $level * 4);
                $pokemon->set_offensive(100 + $level * 5);
                $pokemon->set_defense(70 + $level * 2);
                $pokemon->set_speed(105 + $level * 5);
                $pokemon->set_attribute1('fire');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(33);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('ponnieta');
                $pokemon->set_prename1('ポニータ');
                break;
            case 'gardy':
                if($level > 36){
                    $pokemon = new pokemon('windy', 'ウィンディ', 'windy', $status_flag);
                    $pokemon->set_power(90 + $level * 6);
                    $pokemon->set_offensive(110 + $level * 5);
                    $pokemon->set_defense(80 + $level * 3);
                    $pokemon->set_speed(95 + $level * 4);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(36);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('gardy');
                    $pokemon->set_prename1('ガーディ');
                } else {
                    $pokemon = new pokemon('gardy', 'ガーディ', 'gardy', $status_flag);
                    $pokemon->set_power(55 + $level * 1.5);
                    $pokemon->set_offensive(70 + $level * 2);
                    $pokemon->set_defense(45 + $level * 1.5);
                    $pokemon->set_speed(60 + $level * 2);
                    $pokemon->set_attribute1('fire');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(36);
                    $pokemon->set_formlevel2(999);
                }
                break;
            case 'windy':
                $pokemon = new pokemon('windy', 'ウィンディ', 'windy', $status_flag);
                $pokemon->set_power(90 + $level * 6);
                $pokemon->set_offensive(110 + $level * 5);
                $pokemon->set_defense(80 + $level * 3);
                $pokemon->set_speed(95 + $level * 4);
                $pokemon->set_attribute1('fire');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(36);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('gardy');
                $pokemon->set_prename1('ガーディ');
                break;
            case 'dugda':
                if($level > 34){
                    $pokemon = new pokemon('dugtrio', 'ダグトリオ', 'dugtrio', $status_flag);
                    $pokemon->set_power(35 + $level * 3);
                    $pokemon->set_offensive(80 + $level * 4);
                    $pokemon->set_defense(50 + $level * 2);
                    $pokemon->set_speed(120 + $level * 6);
                    $pokemon->set_attribute1('ground');
                    $pokemon->set_evolution(1);
                    $pokemon->set_formlevel1(34);
                    $pokemon->set_formlevel2(999);
                    $pokemon->set_preform1('dugda');
                    $pokemon->set_prename1('ディグダ');
                } else {
                    $pokemon = new pokemon('dugda', 'ディグダ', 'dugda', $status_flag);
                    $pokemon->set_power(10 + $level * 1);
                    $pokemon->set_offensive(55 + $level * 2);
                    $pokemon->set_defense(25 + $level * 1);
                    $pokemon->set_speed(95 + $level * 5);
                    $pokemon->set_attribute1('ground');
                    $pokemon->set_evolution(0);
                    $pokemon->set_formlevel1(36);
                    $pokemon->set_formlevel2(999);
                }
                break;
            case 'dugtrio':
                $pokemon = new pokemon('dugtrio', 'ダグトリオ', 'dugtrio', $status_flag);
                $pokemon->set_power(35 + $level * 3);
                $pokemon->set_offensive(80 + $level * 4);
                $pokemon->set_defense(50 + $level * 2);
                $pokemon->set_speed(120 + $level * 6);
                $pokemon->set_attribute1('ground');
                $pokemon->set_evolution(1);
                $pokemon->set_formlevel1(34);
                $pokemon->set_formlevel2(999);
                $pokemon->set_preform1('dugda');
                $pokemon->set_prename1('ディグダ');
                break;
            case 'nidoqueen':
                $pokemon = new pokemon('nidoqueen', 'ニドクイーン', 'nidoqueen', $status_flag);
                $pokemon->set_power(90 + $level * 6);
                $pokemon->set_offensive(82 + $level * 3);
                $pokemon->set_defense(87 + $level * 3);
                $pokemon->set_speed(76 + $level * 3);
                $pokemon->set_attribute1('poison');
                $pokemon->set_attribute2('ground');
                break;
            case 'nidoking':
                $pokemon = new pokemon('nidoking', 'ニドキング', 'nidoking', $status_flag);
                $pokemon->set_power(81 + $level * 6);
                $pokemon->set_offensive(92 + $level * 4);
                $pokemon->set_defense(77 + $level * 2);
                $pokemon->set_speed(85 + $level * 3);
                $pokemon->set_attribute1('poison');
                $pokemon->set_attribute2('ground');
                break;
            case 'saidon':
                $pokemon = new pokemon('saidon', 'サイドン', 'saidon', $status_flag);
                $pokemon->set_power(105 + $level * 7);
                $pokemon->set_offensive(130 + $level * 7);
                $pokemon->set_defense(120 + $level * 7);
                $pokemon->set_speed(40 + $level * 1);
                $pokemon->set_attribute1('ground');
                $pokemon->set_attribute2('stone');
                break;    
        }

        return $pokemon;
    }

    function acquire_pokemon($pokemon_name, $level){

        switch($pokemon_name){
            case 'fushigidane':
                $assass1 = new Assassinate('whipping', 'つるのむち', 29, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('tackle', 'たいあたり', 16, 0);
                $assass4 = new Assassinate('mistletoe', 'やどりぎ', 9, 6); 
                break;
            case 'fushigisou':
                $assass1= new Assassinate('leafcutter', 'はっぱカッター', 45, 0);
                $assass2 = new Assassinate('whipping', 'つるのむち', 29, 0);
                $assass3 = new Assassinate('poisonpowder', 'どくのこな', 8, 15);
                $assass4 = new Assassinate('seedbom', 'たねばくだん', 58, 0); 
                break;
            case 'fushigibana':
                $assass1 = new Assassinate('solorbeem', 'ソーラービーム', 80, -20);
                $assass2 = new Assassinate('leafcutter', 'はっぱカッター', 45, 0);
                $assass3 = new Assassinate('sttackle', 'とっしん', 42, 0);
                $assass4 = new Assassinate('seedbom', 'たねばくだん', 58, 0); 
                break;
            case 'hitokage':
                $assass1 = new Assassinate('fire', 'ひのこ', 26, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('claw', 'ひっかく', 13, 0);
                $assass4 = new Assassinate('gaze', 'にらみつける', 9, 9);    
                break;
            case 'rezard':
                $assass1 = new Assassinate('gaze', 'きりさく', 49, 0);    
                $assass2 = new Assassinate('whistle', 'いかり', 39, 0);
                $assass3 = new Assassinate('claw', 'ひっかく', 13, 0);
                $assass4 = new Assassinate('fire', 'ひのこ', 26, 0);
                break;
            case 'rezardon':
                $assass1 = new Assassinate('firebreath', 'かえんほうしゃ', 65, 0);
                $assass2 = new Assassinate('firetornado', 'ほのおのうず', 51, 20);
                $assass3 = new Assassinate('gaze', 'きりさく', 49, 0);    
                $assass4 = new Assassinate('flying', 'そらをとぶ', 47, 15);
                break;
            case 'zenigame':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('wagging', 'しっぽをふる', 0, 8);
                $assass3 = new Assassinate('babbles', 'あわ', 19, 3);
                $assass4 = new Assassinate('tackle', 'たいあたり', 16, 0);
                break;
            case 'kamel':
                $assass1 = new Assassinate('headbad', 'ずつき', 46, 0);
                $assass2 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass3 = new Assassinate('biting', 'かみつく', 39, 25);
                $assass4 = new Assassinate('covershell', 'からにこもる', 5, 35);    
                break;
            case 'kamex':
                $assass1 = new Assassinate('hydropomp', 'ハイドロポンプ', 65, 0);
                $assass2 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass3 = new Assassinate('biting', 'かみつく', 39, 25);
                $assass4 = new Assassinate('surfing', 'なみのり', 55, 5);    
                break;
            case 'koratta':
                $assass1 = new Assassinate('tackle', 'たいあたり', 16, 0);
                $assass2 = new Assassinate('wagging', 'しっぽをふる', 0, 8);
                $assass3 = new Assassinate('lightning', 'でんこうせっか', 15, 3);
                $assass4 = new Assassinate('teeth', 'ひっさつまえば', 36, 0);    
                break;
            case 'ratta':
                $assass1 = new Assassinate('stteeth', 'いかりのまえば', 66, 0);    
                $assass2 = new Assassinate('spirit', 'きあいだめ', 5, 35);
                $assass3 = new Assassinate('lightning', 'でんこうせっか', 15, 3);
                $assass4 = new Assassinate('teeth', 'ひっさつまえば', 36, 0);    
                break;
            case 'nyoromo':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('hypnosis', 'さいみんじゅつ', 5, 9);
                $assass3 = new Assassinate('hit', 'はたく', 9, 3);
                $assass4 = new Assassinate('madshot', 'どろかけ', 8, 8);    
                break;
            case 'nyorozo':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('hypnosis', 'さいみんじゅつ', 5, 9);
                $assass3 = new Assassinate('pressing', 'のしかかり', 42, 3);
                $assass4 = new Assassinate('babblebeem', 'バブルこうせん', 37, 9);
                break;
            case 'nyorobon':
                $assass1 = new Assassinate('hydropomp', 'ハイドロポンプ', 65, 0);
                $assass2 = new Assassinate('babblebeem', 'バブルこうせん', 37, 9);
                $assass3 = new Assassinate('pressing', 'のしかかり', 42, 3);
                $assass4 = new Assassinate('surfing', 'なみのり', 55, 5);    
                break;
            case 'tamatama':
                $assass1 = new Assassinate('hypnosis', 'さいみんじゅつ', 5, 9);
                $assass2 = new Assassinate('absorb', 'すいとる', 22, 22);
                $assass3 = new Assassinate('reflector', 'はねかいえし', 5, 5);
                $assass4 = new Assassinate('mistletoe', 'やどりぎ', 9, 6);    
                break;
            case 'nassy':
                $assass1 = new Assassinate('megadrain', 'メガドレイン', 42, 42);
                $assass2 = new Assassinate('absorb', 'すいとる', 22, 22);
                $assass3 = new Assassinate('trampling', 'ふみつけ', 39, 5);
                $assass4 = new Assassinate('mistletoe', 'やどりぎ', 9, 6);    
                break;
            case 'ishitsubute':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('protect', 'まるくなる', 0, 13);
                $assass3 = new Assassinate('madattack', 'どろあそび', 12, 5);
                $assass4 = new Assassinate('rockcut', 'ロックカット', 21, 3);
                break;
            case 'nassy':
                $assass1 = new Assassinate('megadrain', 'メガドレイン', 42, 42);
                $assass2 = new Assassinate('absorb', 'すいとる', 22, 22);
                $assass3 = new Assassinate('trampling', 'ふみつけ', 39, 5);
                $assass4 = new Assassinate('mistletoe', 'やどりぎ', 9, 6);    
                break;
            case 'ishitsubute':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('protect', 'まるくなる', 0, 13);
                $assass3 = new Assassinate('madattack', 'どろあそび', 12, 5);
                $assass4 = new Assassinate('rockcut', 'ロックカット', 21, 3);
                break;
            case 'iwaku_takeshi':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 36, 0);
                break;
            case 'iwaku':
                $assass1 = new Assassinate('rockavalanche', 'いわなだれ', 65, 0);
                $assass2 = new Assassinate('digging', 'あなをほる', 45, 20);
                $assass3 = new Assassinate('slam', 'たたきつける', 55, 5);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 36, 0);
                break;
            case 'starman':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('hard', 'かたくなる', 0, 13);
                $assass3 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass4 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                break;
            case 'starme':
                $assass1 = new Assassinate('surfing', 'なみのり', 55, 5);    
                $assass2 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass3 = new Assassinate('renewal', 'じこさいせい', 0, 66);
                $assass4 = new Assassinate('babblebeem', 'バブルこうせん', 37, 9);
                break;
            case 'starme_kasumi':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('hard', 'かたくなる', 0, 13);
                $assass3 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass4 = new Assassinate('babblebeem', 'バブルこうせん', 37, 9);
                break;
            case 'biririball':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('sonicboom', 'ソニックブーム', 32, 0);
                $assass4 = new Assassinate('waves', 'でんじは', 8, 6);
                break;
            case 'marumain':
                $assass1 = new Assassinate('speedstar', 'スピードスター', 29, 20);
                $assass2 = new Assassinate('superexplosion', 'だいばくはつ', 200, -300);
                $assass3 = new Assassinate('sonicboom', 'ソニックブーム', 32, 0);
                $assass4 = new Assassinate('rockattact', '１０まんボルト', 47, 0);
                break;
            case 'paras':
                $assass1 = new Assassinate('claw', 'ひっかく', 13, 0);
                $assass2 = new Assassinate('numbpowder', 'しびれごな', 13, 6);
                $assass3 = new Assassinate('sucking', 'きゅうけつ', 18, 18);
                $assass4 = new Assassinate('spore', 'きのこのほうし', 15, 23);    
                break;
            case 'parasect':
                $assass1 = new Assassinate('gaze', 'きりさく', 49, 0);
                $assass2 = new Assassinate('megadrain', 'メガドレイン', 42, 42);
                $assass3 = new Assassinate('sucking', 'きゅうけつ', 18, 18);
                $assass4 = new Assassinate('spore', 'きのこのほうし', 15, 23);    
                break;
            case 'pikachu':
                $assass1 = new Assassinate('electric', 'でんきショック', 26, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('waves', 'でんじは', 8, 6);
                $assass4 = new Assassinate('lightning', 'でんこうせっか', 15, 3);    
                break;
            case 'raichu':
                $assass1 = new Assassinate('thunder', 'カミナリ', 66, 0);
                $assass2 = new Assassinate('waves', 'でんじは', 8, 6);
                $assass3 = new Assassinate('rockattact', '１０まんボルト', 47, 0);
                $assass4 = new Assassinate('thunderpunch', 'かみなりパンチ', 48, 5);
                break;
            case 'raichu_matisse':
                $assass1 = new Assassinate('tackle', 'でんきショック', 26, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('waves', 'でんじは', 8, 6);
                $assass4 = new Assassinate('rockattact', '１０まんボルト', 47, 0);
                break;
            case 'monjara':
                $assass1 = new Assassinate('megadrain', 'メガドレイン', 42, 42);
                $assass2 = new Assassinate('absorb', 'すいとる', 22, 22);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('whipping', 'つるのむち', 29, 0);
                break;
            case 'utsubbot':
                $assass1 = new Assassinate('leafcutter', 'はっぱカッター', 45, 0);
                $assass2 = new Assassinate('whipping', 'つるのむち', 29, 0);
                $assass3 = new Assassinate('seedbom', 'たねばくだん', 58, 0); 
                $assass4 = new Assassinate('sleeppowder', 'ねむりごな', 3, 33);
                break;
            case 'rafflesia':
                $assass1 = new Assassinate('rockattact', 'はなびらのまい', 62, -15);
                $assass2 = new Assassinate('poisonpowder', 'どくのこな', 8, 15);
                $assass3 = new Assassinate('solorbeem', 'ソーラービーム', 80, -20);
                $assass4 = new Assassinate('megadrain', 'メガドレイン', 42, 42);
                break;
            case 'utsubbot_erika':
                $assass1 = new Assassinate('leafcutter', 'はっぱカッター', 45, 0);
                $assass2 = new Assassinate('whipping', 'つるのむち', 29, 0);
                $assass3 = new Assassinate('poisonpowder', 'どくのこな', 8, 15);
                $assass4 = new Assassinate('sleeppowder', 'ねむりごな', 3, 33);
                break;
            case 'rafflesia_erika':
                $assass1 = new Assassinate('rockattact', 'はなびらのまい', 62, -15);
                $assass2 = new Assassinate('poisonpowder', 'どくのこな', 8, 15);
                $assass3 = new Assassinate('sleeppowder', 'ねむりごな', 3, 33);
                $assass4 = new Assassinate('megadrain', 'メガドレイン', 42, 42);
                break;
            case 'betbeton':
                $assass1 = new Assassinate('poisonspear', 'どくづき', 49, 0);
                $assass2 = new Assassinate('dissolution', 'ようかいえき', 36, 8);
                $assass3 = new Assassinate('licking', 'したでなめる', 25, 9);
                $assass4 = new Assassinate('sludge', 'ヘドロこうげき', 37, 8);
                break;
            case 'golbat':
                $assass1 = new Assassinate('poisonspear', 'どくづき', 49, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('licking', 'したでなめる', 25, 9);
                $assass4 = new Assassinate('wingattack', 'つばさでうつ', 48, 0);
                break;
            case 'matadogas':
                $assass1 = new Assassinate('smork', 'どくがす', 13, 25);
                $assass2 = new Assassinate('dissolution', 'ようかいえき', 36, 8);
                $assass3 = new Assassinate('explosion', 'じばく', 100, -150);
                $assass4 = new Assassinate('sludge', 'ヘドロこうげき', 42, 8);
                break;
            case 'kacy':
                $assass1 = new Assassinate('teleport', 'テレポート', 5, 5);
                $assass2 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass3 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass4 = new Assassinate('Spoon', 'スプーンまげ', 25, 1);    
                break;
            case 'yungerer':
                $assass1 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass2 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass3 = new Assassinate('superkinesis', 'スーパーキネシス', 66, 0);
                $assass4 = new Assassinate('psycholaser', 'サイケこうせん', 51, 21);
                break;
            case 'fudin':
                $assass1 = new Assassinate('hyperkinesis', 'ハイパーキネシス', 88, 0);
                $assass2 = new Assassinate('superkinesis', 'スーパーキネシス', 66, 0);
                $assass3 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass4 = new Assassinate('psycholaser', 'サイケこうせん', 51, 21);
                break;
            case 'barrierd':
                $assass1 = new Assassinate('yogapose', 'ヨガのポーズ', 13, 33);
                $assass2 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass3 = new Assassinate('lightshield', 'ひかりのかべ', 0, 66);
                $assass4 = new Assassinate('psycholaser', 'サイケこうせん', 51, 21);
                break;
            case 'colon':
                $assass1 = new Assassinate('fire', 'ひのこ', 26, 0);
                $assass2 = new Assassinate('wagging', 'しっぽをふる', 0, 8);
                $assass3 = new Assassinate('lightning', 'でんこうせっか', 15, 3);
                $assass4 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);    
                break;
            case 'firefox':
                $assass1 = new Assassinate('firebreath', 'かえんほうしゃ', 65, 0);
                $assass2 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass3 = new Assassinate('fire', 'ひのこ', 26, 0);
                $assass4 = new Assassinate('firetornado', 'ほのおのうず', 51, 20);
                break;
            case 'gallop':
                $assass1 = new Assassinate('firebreath', 'かえんほうしゃ', 65, 0);
                $assass2 = new Assassinate('sttackle', 'とっしん', 42, 0);
                $assass3 = new Assassinate('firetornado', 'ほのおのうず', 51, 20);
                $assass4 = new Assassinate('trampling', 'ふみつけ', 39, 5);
                break;
            case 'windy':
                $assass1 = new Assassinate('biting', 'かみつく', 39, 25);
                $assass2 = new Assassinate('sttackle', 'とっしん', 42, 0);
                $assass3 = new Assassinate('firetornado', 'ほのおのうず', 51, 20);
                $assass4 = new Assassinate('daimonji', 'だいもんじ', 88, 0);
                break;
            case 'nidoqueen':
                $assass1 = new Assassinate('biting', 'かみつく', 39, 25);
                $assass2 = new Assassinate('sttackle', 'とっしん', 42, 0);
                $assass3 = new Assassinate('quake', 'じしん', 65, 0);
                $assass4 = new Assassinate('nidokick', 'にどげり', 45, 0);
                break;
            case 'nidoking':
                $assass1 = new Assassinate('hornattack', 'つのドリル', 52, 0);
                $assass2 = new Assassinate('spirit', 'きあいだめ', 5, 35);
                $assass3 = new Assassinate('quake', 'じしん', 65, 0);
                $assass4 = new Assassinate('nidokick', 'にどげり', 45, 0);
                break;
            case 'dugtrio':
                $assass1 = new Assassinate('digging', 'あなをほる', 45, 20);
                $assass2 = new Assassinate('gaze', 'きりさく', 49, 0);    
                $assass3 = new Assassinate('quake', 'じしん', 65, 0);
                $assass4 = new Assassinate('headbad', 'ずつき', 46, 0);
                break;
            case 'saidon':
                $assass1 = new Assassinate('sttackle', 'とっしん', 42, 0);
                $assass2 = new Assassinate('gaze', 'にらみつける', 9, 9);
                $assass3 = new Assassinate('quake', 'じしん', 65, 0);
                $assass4 = new Assassinate('crack', 'じわれ', 88, 0);            
                break;
        }

        return array($assass1, $assass2, $assass3, $assass4);
    }

    function appear_leaders($leader_name){

        switch($leader_name){
            case 'takeshi':
                $gymleader = new gymleader('takeshi', 'タケシ', 'takeshi');
                break;
            case 'kasumi':
                $gymleader = new gymleader('kasumi', 'カスミ', 'kasumi');
                break;
            case 'matisse':
                $gymleader = new gymleader('matisse', 'マチス', 'matisse');
                break;
            case 'erika':
                $gymleader = new gymleader('erika', 'エリカ', 'erika');
                break;
            case 'kyo':
                $gymleader = new gymleader('kyo', 'キョウ', 'kyo');
                break;
            case 'natsume':
                $gymleader = new gymleader('natsume', 'ナツメ', 'natsume');
                break;
            case 'katsura':
                $gymleader = new gymleader('katsura', 'カツラ', 'katsura');
                break;
            case 'sakaki':
                $gymleader = new gymleader('sakaki', 'サカキ', 'sakaki');
                break;        
        }
        
        return $gymleader;
    }

    function leaders_phrase($leaders_name){

        $phrase5 = "";
        $phrase6 = "";

        if($leaders_name == 'takeshi'){
            $phrase1 = "きたな！<br>おれは ニビ ポケモン ジム<br>リーダーの タケシ！<br>おれの かたい いしは<br>おれの ポケモンにも あらわれる！<br>かたくて がまん づよい！<br>そう！ つかうのは<br>いわ タイプ ばっかりだ！<br>ふはは！<br>まけると わかって たたかうか！<br>ポケモン トレーナーの さがだな<br>いいだろう！<br>かかって こい！<br>";
            $phrase2 = "イシツブテとの たたかいに しょうり した！<br><br><br>すこしは そだてたらしいな！<br>しかし、イワークの てき ではない！！<br>";
            $phrase3 = "きみを<br>みくびって いた ようだ<br>ぼくに かった あかしに<br>ポケモン リーグ こうにん<br>グレー バッジを さずけよう！<br>グレー バッジを つけてると<br>それだけで<br>きみの ポケモンは つよくなる！<br>フラッシュ という わざを<br>もっている ポケモンは<br>たたかって なくても フラッシュを<br>つかえる ように なる！<br><br><br>あと…… そうだ！<br>これを きみに あげよう！<br>わざマシンを つかうと ポケモンは<br>すぐ その わざを おぼえる！<br>ただし マシンは つかい すてだ！<br>どの ポケモンに おぼえさせるか<br>よく かんがえた ほうが いい<br><br><br>ところで……<br>わざマシン34には<br>がまん が はいっている！<br>こうげき されてる とき<br>じっと たえて…… あとで<br>いっきに 2ばいにして かえす！<br>おもしろい わざだ！<br><br><br>この ひろい せかいでは<br>いろんな やつが ポケモンで<br>たたかいを くりひろげてる！<br>きみには<br>ポケモン トレーナーの<br>さいのうが ある ようだ！<br>ハナダ シティの ジムにも いき<br>きみの ちからを<br>ためして みると いい<br>";
            $phrase4 = "ぼくの かちだ！<br>でなおしてきたまえ！<br>";
        } elseif($leaders_name == 'kasumi') {
            $phrase1 = "あのね きみ！<br>ポケモン そだてる にも<br>ポリシーが ある やつ だけが<br>プロに なれるの！<br>あなたは ポケモン つかまえて<br>そだてる とき<br>なにを かんがえてる？<br>わたしの ポリシーはね…<br><br>みず タイプ ポケモンで せめて<br>せめて …せめまくる ことよ！<br>";
            $phrase2 = "ヒトデマンとの たたかいに しょうり した！<br><br><br>ふーん なかなか やるわね！<br><br>でも まだまだよ！<br>つよく、おおしく、うつくしく！<br> わたしの あおい スイートハート。<br>スターミーとしょうぶしなさい！";
            $phrase3 = "うーん…！<br>わたしの まけね<br>しょうが ない！<br>わたしに かった しょうこに<br>ブルー バッジを あげる！<br><br><br>ブルー バッジが あれば<br>レベル30までの ポケモンは<br>おとなしく いうこと きくわ！<br>それが たとえ<br>ひとから もらった ポケモンでもね<br>それと たたかって なくても<br>いあいぎりが つかえるわ<br>ほそい きを きりたおして<br>とおれる ように なるの<br>… あと これは わたしの<br>じまんの わざマシンよ！<br>わざマシン03は みずのはどうを<br>ポケモンに おしえるの<br>みずに すむ ポケモンに<br>つかって あげて！<br>";
            $phrase4 = "あんたのこと なんていうか<br>しってる!?<br>オジャマムシ って いうのよ！<br>でなおしてきなさい！<br>";
        } elseif($leaders_name == 'matisse') {
            $phrase1 = "ヘーイ！<br>プア リトル キッド！<br>ユーの ハンパな パワーでは<br>せんじょうじゃ いき のこれないネ<br>ミーは せんそうで<br>エレクトリック ポケモン つかって<br>いき のびたネ！<br>みんな ビリビリ シビレて<br>うごけナーイ！<br>ユーも おなじ みち たどる<br>ちがい ナーイ！<br>";
            $phrase2 = "まだまだ これからが<br>ほんとうの スタート デース！<br>ライチュー！ ユー のでばんネ！<br>カモーン！<br>";
            $phrase3 = "オー ノー！<br>ユーの つよさ トゥルース！<br>つまり ほんもの ネー！<br>オッケー！<br>オレンジ バッジ やるヨ！<br><br><br>オレンジ バッジ もってる だけで<br>ユーの ポケモン スピード アップ<br>アーンド！ そらをとぶ わざは<br>ファイト ない ときも<br>つかえる ように なるヨ！<br>ユーは スペシャル！<br>これは ミーの きもちネ！<br>わざマシン34は<br>でんき ビリビリ でんげきは<br>エレクトリック ポケモンに<br>おしえて くだサーイ！<br><br><br>ヘイ！<br>それから ユーに アドバイス！<br>エレクトリック パワー<br>ビリビリ つよいネー！<br>でも じめん タイプには<br>パワー すいとられて しまって<br>ぜんぜん きかないヨー！<br>";
            $phrase4 = "ヘイ ユー！<br><br><br>ミーと もういちど<br>リターンマッチ しましょう！<br>アー ユー オーケイ？<br>";
        } elseif($leaders_name == 'erika') {
            $phrase1 = "はあーい……<br>よい おてんきね<br>きもち いい……<br>…… すー…… すー<br>…… あら いけない<br>ねて しまったわ…… ようこそ<br>わたくし タマムシ ジムの<br>エリカと もうします<br>おはなを いけるのが しゅみで<br>ポケモンは くさタイプ ばかり<br>…… あら やだ<br>しあいの もうしこみ ですの？<br>そんな……<br>わたくし まけませんわよ<br>";
            $phrase2 = "まあ てきびしくて らっしゃる！<br>";
            $phrase3 = "……！<br><br>まいり ましたわ<br>さすが<br>とのがたは おつよい ですわ<br>この レインボーバッジ<br>さしあげ なくては なりませんね<br>レインボー バッジで<br>レベル50 までの ポケモンが<br>おとなしく いうこと きき ます<br>そして…… かいりきの わざが<br>たたかって なくても つかえます<br><br><br>それから……<br>よろしかったら<br>これも おつかいに なって！<br>わざマシン21の なかみは<br>メガドレイン です<br>あたえた ダメージの はんぶんが<br>ポケモンの えいように なる<br>すばらしい わざ です<br><br><br>あら まあ……<br>ずかんを つくって ますのね<br>ほんとに えらいわ<br>わたし でしたら<br>きれいな ポケモンしか<br>ほしく なりません もの<br>";
            $phrase4 = "まける というのは<br>くやしいもの ですね<br><br><br>でも つよいかたが いるということは<br>はげみにも なりますのよ<br>";
            $phrase5 = "まあ<br>どうしたもの でしょう<br><br><br><br>てかげん なんか なさらずに<br>さあ ぞんぶんに いきます！<br>";
        } elseif($leaders_name == 'kyo') {
            $phrase1 = "…… ファ ファ ファ！<br>こわっぱ ごときが<br>せっしゃに たたかいを いどむとは<br>かたはら いたいわ！<br>…… どくを くらったら じめつ！<br>ねむって しまったら むていこう<br>…… しのびの わざの ごくいを<br>うけて みるが よい！<br>";
            $phrase2 = "うむ！<br>おぬし やりおるな！<br>だが まだまだだ！<br>";
            $phrase3 = "ふん……！<br>おぬし やりおるな！<br>そら！<br>ピンク バッジを うけとれ！<br>ピンク バッジを もって おれば<br>おぬしの ポケモンの<br>ぼうぎょ りょくを あげる！<br>たたかって ない ときでも<br>なみのりの わざを<br>つかえる ように なる！<br>そうだ……！ これを おぬしに！<br>400ねん むかし より<br>わがやに つたわる ポケモン わざ<br>わざマシン06には ごくい！<br>どくどくが ふういん してある！<br>どくどくは どくを あびたら<br>1ターン ごとに どんどん<br>ダメージが おおきく なる！<br>これは あいてに<br>きょうふを あたえる わざ なのだ！<br>";
            $phrase4 = "ファ ファ ファ さいしょから<br>わかっていた ことだ！<br>でなおしてこい<br>";
            $phrase5 = "ぬぬ！<br>またも！<br>なら これならどうだ！<br>";
        } elseif($leaders_name == 'natsume') {
            $phrase1 = "…… やっぱり きたわ！<br>よかんが したのよ！<br>なにげに スプーンを なげたら<br>まがって いらい…… わたし<br>エスパー しょうじょ なの<br>たたかうの すき じゃない けど<br>あなたが のぞむ なら<br>わたしの ちから<br>みせて あげる！<br>";
            $phrase2 = "このあと どうなるか<br>わたしには もう みえているのよ<br><br><br>わたしの エスパー のうりょく<br>みせて あげるわ！<br>";
            $phrase3 = "まける なんて……！<br><br><br>とても ショック！<br>でも まけは まけ……！<br>わたしの しょうぶの あまさを<br>いさぎよく みとめるわ！<br>かった あかしに<br>ゴールド バッジを<br>あなたに さしあげ ましょう<br>ゴールド バッジで<br>レベル70 までの ポケモンが<br>いうことを ききます！<br>それ いじょう<br>つよい ポケモンは<br>ソッポ むいたり ふてね したり<br>あつかいが たいへん です！<br>だけど そだて すぎなきゃ<br>そういう しんぱいは むようよ！<br><br><br>それから……！<br>わざマシンを もって いって<br>わざマシン46は サイコウェーブ！<br>きょうりょくな ねんぱが<br>おおきな ダメージを あたえるわ！<br><br><br>ちょうのうりょくは かぎられた<br>ひとの ちから では ないわ！<br>だれでも もってるのよ！<br>ただ それに きが つかない だけ<br>";
            $phrase4 = "どう<br>これが わたしが みた みらい<br>";
            $phrase5 = "どうやら ほんきでやらなければ<br>いけないようね<br>";
        } elseif($leaders_name == 'katsura') {
            $phrase1 = "うおおーす！<br>わしは もえる おとこ！<br>グレンじま ポケモンジムの カツラ<br>わしの ポケモンは すべてを<br>ほのおで やいて こがしまくる<br>つわもの ばかり なのだー！<br>うおおーす！<br>やけどなおしの よういは いいか<br>";
            $phrase2 = "まだ いけるわい！<br><br><br>あなぐらジムの<br>いじを みせて やるわい！<br>";
            $phrase3 = "わしは もえつきた！<br>おまえに こそ！<br>クリムゾン バッジは ふさわしい！<br>うおーす！<br>この クリムゾン バッジは<br>もってる だけで<br>ポケモンの とくしゅ のうりょくを<br>たかめる こうかが ある！<br><br><br>それから！<br>この わざマシンを うけとれい！<br>わざマシン38は<br>もえる おおわざ！ だいもんじ！<br>だいもんじは<br>ほのお タイプの ポケモン！<br>ロコンや リザードに<br>おぼえさせると よいぞ！<br><br><br>この わざを みんなは<br>だいもんじやき と よんでるが<br>そりゃ まちがいだ！<br>ほんば きょうと では<br>だいもんじ とか おくりび と<br>よんで いるのだ！<br>";
            $phrase4 = "うおおーいっ！<br>みごとな しょうぶであった！<br>";
            $phrase5 = "うおおおおおお！<br>きみ いいしあい してくれるじゃないか！<br>だが ジムのなにかけて<br>まけるわけには いかんのじゃ！<br>";
        } elseif($leaders_name == 'sakaki') {
            $phrase1 = "ははははーッ！<br>ここは おれの かくれが だ！<br>ロケットだん ふっかつの ひ まで<br>この ジムで<br>たいせいを たてなおすのだ！<br>しかし…… きみに<br>みつかって しまっては<br>しょうがない！<br>こんどは てかげん なしだ！<br><br><br>では……<br>いま いちど！<br>さいきょうの トレーナー<br>サカキの うでまえを みよ！<br>";
            $phrase2 = "すこしは やるようだな！<br>だが たたかいは これからだ！<br>";
            $phrase3 = "はー はーッ！<br>はげしい たたかい だった！<br>きみの かちだ！<br><br><br>いま……<br>その あかしに<br>グリーン バッジを わたそう！<br>グリーンバッジさえ あれば<br>どんなに レベルの たかい<br>ポケモンも いうことを きく！<br>きみが いちにんまえの<br>トレーナーに なった あかしだ！<br>これで ポケモンリーグに<br>いどむ ことが できるだろう<br>この わざマシンは……！<br>ポケモンリーグへ いどむ<br>きみへ せんべつだ！<br>わざマシン27は じわれ だ！<br>じわれに さそいこまれた てきは<br>いちげきで ダウン する！<br>さいきょうの わざだ！<br>おれが むかし…… ここで<br>ポケモン ジムを やってる とき<br>つくった ものだ……<br><br><br><br>このような まけかたを しては<br>ぶかたちに しめしが つかない！<br>ロケットだんは……<br>ほんじつを もって かいさんする！<br>わたしは<br>ポケモンの しゅぎょうを<br>いちから しなおす つもりだ！<br>いつの ひか……<br>また あおう！<br>…… さらばだ！<br>";
            $phrase4 = "でなおしてこい！<br>";
            $phrase5 = "うむ ずいぶんと そだてているな<br>だが たたかいは これからだ！<br>";
            $phrase6 = "やるようだな！<br>ならば これならどうだ！<br>いけ！サイドン！<br>";
        }

        $phrases = array($phrase1, $phrase2, $phrase3, $phrase4, $phrase5, $phrase6);
        return $phrases;
    }
?>