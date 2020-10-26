<?php
    function makepokemon($pokemon_name, $level){

        switch($pokemon_name){
            case 'fushigidane':
                $pokemon = new pokemon('fushigidane', 'フシギダネ', 'fushigidane');
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('poison');
                break;
            case 'hitokage':
                $pokemon = new pokemon('hitokage', 'ヒトカゲ', 'hitokage');
                $pokemon->set_power(35 + $level * 3);
                $pokemon->set_offensive(55);
                $pokemon->set_defense(30);
                $pokemon->set_speed(90);
                $pokemon->set_attribute1('fire');
                break;
            case 'zenigame':
                $pokemon = new pokemon('zenigame', 'ゼニガメ', 'zenigame');
                $pokemon->set_power(30 + $level * 3);
                $pokemon->set_offensive(56);
                $pokemon->set_defense(35);
                $pokemon->set_speed(72);
                $pokemon->set_attribute1('water');
                break;
            case 'pikachu':
                $pokemon = new pokemon('pikachu', 'ピカチュウ', 'pikachu');
                $pokemon->set_power(35 + $level * 3);
                $pokemon->set_offensive(55);
                $pokemon->set_defense(30);
                $pokemon->set_speed(90);
                $pokemon->set_attribute1('electric');
                break;
            case 'koratta':
                $pokemon = new pokemon('koratta', 'コラッタ', 'koratta');
                $pokemon->set_power(30 + $level * 3);
                $pokemon->set_offensive(56);
                $pokemon->set_defense(35);
                $pokemon->set_speed(72);
                $pokemon->set_attribute1('normal');
                break;
            case 'colon':
                $pokemon = new pokemon('colon', 'コロン', 'colon');
                $pokemon->set_power(38 + $level * 3);
                $pokemon->set_offensive(41);
                $pokemon->set_defense(40);
                $pokemon->set_speed(65);
                $pokemon->set_attribute1('fire');
                break;
            case 'nyoromo':
                $pokemon = new pokemon('nyoromo', 'ニョロモ', 'nyoromo');
                $pokemon->set_power(40 + $level * 4);
                $pokemon->set_offensive(50);
                $pokemon->set_defense(40);
                $pokemon->set_speed(90);
                $pokemon->set_attribute1('water');
                break;
            case 'kacy':
                $pokemon = new pokemon('kacy', 'ケーシィ', 'kacy');
                $pokemon->set_power(25 + $level * 2);
                $pokemon->set_offensive(20);
                $pokemon->set_defense(15);
                $pokemon->set_speed(90);
                $pokemon->set_attribute1('esper');
                break;
            case 'tamatama':
                $pokemon = new pokemon('tamatama', 'タマタマ', 'tamatama');
                $pokemon->set_power(60 + $level * 5);
                $pokemon->set_offensive(40);
                $pokemon->set_defense(80);
                $pokemon->set_speed(40);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('esper');
                break;
            case 'ishitsubute':
                $pokemon = new pokemon('ishitsubute', 'イシツブテ', 'ishitsubute');
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('stone');
                $pokemon->set_attribute2('ground');
                break;
            case 'iwaku':
                $pokemon = new pokemon('iwaku', 'イワーク', 'iwaku');
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('stone');
                $pokemon->set_attribute2('ground');
                break;
            case 'starman':
                $pokemon = new pokemon('starman', 'ヒトデマン', 'starman');
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('water');
                break;
            case 'starme':
                $pokemon = new pokemon('starme', 'スターミー', 'starme');
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('water');
                break;
            case 'biririball':
                $pokemon = new pokemon('biririball', 'ビリリダマ', 'biririball');
                $pokemon->set_power(40 + $level * 2);
                $pokemon->set_offensive(30);
                $pokemon->set_defense(50);
                $pokemon->set_speed(100);
                $pokemon->set_attribute1('electric');
                break;
            case 'raichu':
                $pokemon = new pokemon('raichu', 'ライチュウ', 'raichu');
                $pokemon->set_power(45 + $level * 3);
                $pokemon->set_offensive(49);
                $pokemon->set_defense(49);
                $pokemon->set_speed(45);
                $pokemon->set_attribute1('electric');
                break;
            case 'utsubbot':
                $pokemon = new pokemon('utsubbot', 'ウツボット', 'utsubbot');
                $pokemon->set_power(80 + $level * 5);
                $pokemon->set_offensive(105);
                $pokemon->set_defense(65);
                $pokemon->set_speed(70);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('poison');
                break;
            case 'rafflesia':
                $pokemon = new pokemon('rafflesia', 'ラフレシア', 'rafflesia');
                $pokemon->set_power(75 + $level * 5);
                $pokemon->set_offensive(80);
                $pokemon->set_defense(85);
                $pokemon->set_speed(50);
                $pokemon->set_attribute1('weed');
                $pokemon->set_attribute2('poison');
                break;
            case 'betbeton':
                $pokemon = new pokemon('betbeton', 'ベトベトン', 'betbeton');
                $pokemon->set_power(105 + $level * 7);
                $pokemon->set_offensive(105);
                $pokemon->set_defense(75);
                $pokemon->set_speed(50);
                $pokemon->set_attribute1('poison');
                break;
            case 'golbat':
                $pokemon = new pokemon('golbat', 'ゴルバット', 'golbat');
                $pokemon->set_power(75 + $level * 5);
                $pokemon->set_offensive(80);
                $pokemon->set_defense(70);
                $pokemon->set_speed(90);
                $pokemon->set_attribute1('poison');
                break;
            case 'matadogas':
                $pokemon = new pokemon('matadogas', 'マタドガス', 'matadogas');
                $pokemon->set_power(65 + $level * 4);
                $pokemon->set_offensive(90);
                $pokemon->set_defense(120);
                $pokemon->set_speed(60);
                $pokemon->set_attribute1('poison');
                break;
            case 'yungerer':
                $pokemon = new pokemon('yungerer', 'ユンゲラー', 'yungerer');
                $pokemon->set_power(40 + $level * 3);
                $pokemon->set_offensive(35);
                $pokemon->set_defense(30);
                $pokemon->set_speed(105);
                $pokemon->set_attribute1('esper');
                break;
            case 'barrierd':
                $pokemon = new pokemon('barrierd', 'バリヤード', 'barrierd');
                $pokemon->set_power(40 + $level * 3);
                $pokemon->set_offensive(45);
                $pokemon->set_defense(65);
                $pokemon->set_speed(90);
                $pokemon->set_attribute1('esper');
                break;
            case 'fudin':
                $pokemon = new pokemon('fudin', 'フーディン', 'fudin');
                $pokemon->set_power(55 + $level * 4);
                $pokemon->set_offensive(50);
                $pokemon->set_defense(45);
                $pokemon->set_speed(120);
                $pokemon->set_attribute1('esper');
                break;
            case 'firefox':
                $pokemon = new pokemon('firefox', 'キュウコン', 'firefox');
                $pokemon->set_power(73 + $level * 5);
                $pokemon->set_offensive(76);
                $pokemon->set_defense(75);
                $pokemon->set_speed(100);
                $pokemon->set_attribute1('fire');
                break;
            case 'gallop':
                $pokemon = new pokemon('gallop', 'ギャロップ', 'gallop');
                $pokemon->set_power(65 + $level * 5);
                $pokemon->set_offensive(100);
                $pokemon->set_defense(70);
                $pokemon->set_speed(105);
                $pokemon->set_attribute1('fire');
                break;
            case 'windy':
                $pokemon = new pokemon('windy', 'ウィンディ', 'windy');
                $pokemon->set_power(90 + $level * 6);
                $pokemon->set_offensive(110);
                $pokemon->set_defense(80);
                $pokemon->set_speed(95);
                $pokemon->set_attribute1('fire');
                break;
            case 'nidoqueen':
                $pokemon = new pokemon('nidoqueen', 'ニドクイーン', 'nidoqueen');
                $pokemon->set_power(90 + $level * 6);
                $pokemon->set_offensive(82);
                $pokemon->set_defense(87);
                $pokemon->set_speed(76);
                $pokemon->set_attribute1('poison');
                $pokemon->set_attribute1('ground');
                break;
            case 'nidoking':
                $pokemon = new pokemon('nidoking', 'ニドキング', 'nidoking');
                $pokemon->set_power(81 + $level * 6);
                $pokemon->set_offensive(92);
                $pokemon->set_defense(77);
                $pokemon->set_speed(85);
                $pokemon->set_attribute1('poison');
                $pokemon->set_attribute1('ground');
                break;
            case 'saidon':
                $pokemon = new pokemon('saidon', 'サイドン', 'saidon');
                $pokemon->set_power(105 + $level * 7);
                $pokemon->set_offensive(130);
                $pokemon->set_defense(120);
                $pokemon->set_speed(40);
                $pokemon->set_attribute1('stone');
                $pokemon->set_attribute1('ground');
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
            case 'hitokage':
                $assass1 = new Assassinate('fire', 'ひのこ', 26, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('waves', 'でんじは', 8, 6);
                $assass4 = new Assassinate('lightning', 'でんこうせっか', 15, 3);    
                break;
            case 'zenigame':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('wagging', 'しっぽをふる', 0, 8);
                $assass3 = new Assassinate('lightning', 'でんこうせっか', 15, 3);
                $assass4 = new Assassinate('teeth', 'ひっさつまえば', 31, 0);    
                break;
            case 'pikachu':
                $assass1 = new Assassinate('electric', 'でんきショック', 26, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('waves', 'でんじは', 8, 6);
                $assass4 = new Assassinate('lightning', 'でんこうせっか', 15, 3);    
                break;
            case 'koratta':
                $assass1 = new Assassinate('tackle', 'たいあたり', 16, 0);
                $assass2 = new Assassinate('wagging', 'しっぽをふる', 0, 8);
                $assass3 = new Assassinate('lightning', 'でんこうせっか', 15, 3);
                $assass4 = new Assassinate('teeth', 'ひっさつまえば', 31, 0);    
                break;
            case 'colon':
                $assass1 = new Assassinate('fire', 'ひのこ', 26, 0);
                $assass2 = new Assassinate('wagging', 'しっぽをふる', 0, 8);
                $assass3 = new Assassinate('lightning', 'でんこうせっか', 15, 3);
                $assass4 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);    
                break;
            case 'nyoromo':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('hypnosis', 'さいみんじゅつ', 5, 9);
                $assass3 = new Assassinate('hit', 'はたく', 9, 3);
                $assass4 = new Assassinate('madshot', 'どろかけ', 8, 8);    
                break;
            case 'kacy':
                $assass1 = new Assassinate('teleport', 'テレポート', 5, 5);
                $assass2 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass3 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass4 = new Assassinate('Spoon', 'スプーンまげ', 25, 1);    
                break;
            case 'tamatama':
                $assass1 = new Assassinate('hypnosis', 'さいみんじゅつ', 5, 9);
                $assass2 = new Assassinate('absorb', 'すいとる', 22, 6);
                $assass3 = new Assassinate('reflector', 'はねかいえし', 5, 5);
                $assass4 = new Assassinate('mistletoe', 'やどりぎ', 9, 6);    
                break;
            case 'ishitsubute':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('protect', 'まるくなる', 0, 13);
                $assass3 = new Assassinate('madattack', 'どろあそび', 12, 5);
                $assass4 = new Assassinate('rockcut', 'ロックカット', 21, 3);
                break;
            case 'iwaku':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 36, 0);
                break;
            case 'starman':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('hard', 'かたくなる', 0, 13);
                $assass3 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass4 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                break;
            case 'starme':
                $assass1 = new Assassinate('watergun', 'みずでっぽう', 26, 0);
                $assass2 = new Assassinate('hard', 'かたくなる', 0, 13);
                $assass3 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass4 = new Assassinate('rockattact', 'バブルこうせん', 32, 9);
                break;
            case 'biririball':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('sonicboom', 'ソニックブーム', 32, 0);
                $assass4 = new Assassinate('waves', 'でんじは', 8, 6);
                break;
            case 'raichu':
                $assass1 = new Assassinate('tackle', 'でんきショック', 26, 0);
                $assass2 = new Assassinate('whistle', 'なきごえ', 2, 8);
                $assass3 = new Assassinate('waves', 'でんじは', 8, 6);
                $assass4 = new Assassinate('rockattact', '１０まんボルト', 47, 0);
                break;
            case 'utsubbot':
                $assass1 = new Assassinate('tackle', 'でんきショック', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'バブルこうせん', 32, 9);
                break;
            case 'rafflesia':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'はなびらのまい', 36, 0);
                break;
            case 'betbeton':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 11, 0);
                break;
            case 'golbat':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 11, 0);
                break;
            case 'matadogas':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'バブルこうせん', 32, 9);
                break;
            case 'yungerer':
                $assass1 = new Assassinate('psychokinesis', 'サイコキネシス', 39, 0);
                $assass2 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass3 = new Assassinate('spoon', 'スプーンまげ', 25, 1);
                $assass4 = new Assassinate('psycholaser', 'サイケこうせん', 32, 9);
                break;
            case 'barrierd':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 36, 0);
                break;
            case 'fudin':
                $assass1 = new Assassinate('psychokinesis', 'サイコキネシス', 63, 0);
                $assass2 = new Assassinate('paralysis', 'あやしいひかり', 9, 6);
                $assass3 = new Assassinate('spoon', 'スプーンまげ', 32, 1);
                $assass4 = new Assassinate('psycholaser', 'サイケこうせん', 51, 9);
                break;
            case 'firefox':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 36, 0);
                break;
            case 'gallop':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 11, 0);
                break;
            case 'windy':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'バブルこうせん', 32, 9);
                break;
            case 'nidoqueen':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 36, 0);
                break;
            case 'nidoking':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'しめつける', 15, 3);
                $assass4 = new Assassinate('rockattact', 'いわおとし', 11, 0);
                break;
            case 'saidon':
                $assass1 = new Assassinate('tackle', 'たいあたり', 13, 0);
                $assass2 = new Assassinate('noise', 'いやなおと', 8, 8);
                $assass3 = new Assassinate('chorke', 'じしん', 70, 0);
                $assass4 = new Assassinate('rockattact', 'じわれ', 88, 0);            
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
            $phrase2 = "まあ てきびしくて らっしゃる！<br><br><br>てかげん なんか なさらずに<br>さあ ぞんぶんに！<br>";
            $phrase3 = "……！<br><br>まいり ましたわ<br>さすが<br>とのがたは おつよい ですわ<br>この レインボーバッジ<br>さしあげ なくては なりませんね<br>レインボー バッジで<br>レベル50 までの ポケモンが<br>おとなしく いうこと きき ます<br>そして…… かいりきの わざが<br>たたかって なくても つかえます<br><br><br>それから……<br>よろしかったら<br>これも おつかいに なって！<br>わざマシン21の なかみは<br>メガドレイン です<br>あたえた ダメージの はんぶんが<br>ポケモンの えいように なる<br>すばらしい わざ です<br><br><br>あら まあ……<br>ずかんを つくって ますのね<br>ほんとに えらいわ<br>わたし でしたら<br>きれいな ポケモンしか<br>ほしく なりません もの<br>";
            $phrase4 = "まける というのは<br>くやしいもの ですね<br><br><br>でも つよいかたが いるということは<br>はげみにも なりますのよ<br>";
        } elseif($leaders_name == 'kyo') {
            $phrase1 = "…… ファ ファ ファ！<br>こわっぱ ごときが<br>せっしゃに たたかいを いどむとは<br>かたはら いたいわ！<br>…… どくを くらったら じめつ！<br>ねむって しまったら むていこう<br>…… しのびの わざの ごくいを<br>うけて みるが よい！<br>";
            $phrase2 = "うむ！<br>おぬし やりおるな！<br>だが まだまだだ！<br>";
            $phrase3 = "ふん……！<br>おぬし やりおるな！<br>そら！<br>ピンク バッジを うけとれ！<br>ピンク バッジを もって おれば<br>おぬしの ポケモンの<br>ぼうぎょ りょくを あげる！<br>たたかって ない ときでも<br>なみのりの わざを<br>つかえる ように なる！<br>そうだ……！ これを おぬしに！<br>400ねん むかし より<br>わがやに つたわる ポケモン わざ<br>わざマシン06には ごくい！<br>どくどくが ふういん してある！<br>どくどくは どくを あびたら<br>1ターン ごとに どんどん<br>ダメージが おおきく なる！<br>これは あいてに<br>きょうふを あたえる わざ なのだ！<br>";
            $phrase4 = "ファ ファ ファ さいしょから<br>わかっていた ことだ！<br>でなおしてこい<br>";
        } elseif($leaders_name == 'natsume') {
            $phrase1 = "…… やっぱり きたわ！<br>よかんが したのよ！<br>なにげに スプーンを なげたら<br>まがって いらい…… わたし<br>エスパー しょうじょ なの<br>たたかうの すき じゃない けど<br>あなたが のぞむ なら<br>わたしの ちから<br>みせて あげる！<br>";
            $phrase2 = "このあと どうなるか<br>わたしには もう みえているのよ<br><br><br>わたしの エスパー のうりょく<br>みせて あげるわ！<br>";
            $phrase3 = "まける なんて……！<br><br><br>とても ショック！<br>でも まけは まけ……！<br>わたしの しょうぶの あまさを<br>いさぎよく みとめるわ！<br>かった あかしに<br>ゴールド バッジを<br>あなたに さしあげ ましょう<br>ゴールド バッジで<br>レベル70 までの ポケモンが<br>いうことを ききます！<br>それ いじょう<br>つよい ポケモンは<br>ソッポ むいたり ふてね したり<br>あつかいが たいへん です！<br>だけど そだて すぎなきゃ<br>そういう しんぱいは むようよ！<br><br><br>それから……！<br>わざマシンを もって いって<br>わざマシン46は サイコウェーブ！<br>きょうりょくな ねんぱが<br>おおきな ダメージを あたえるわ！<br><br><br>ちょうのうりょくは かぎられた<br>ひとの ちから では ないわ！<br>だれでも もってるのよ！<br>ただ それに きが つかない だけ<br>";
            $phrase4 = "どう<br>これが わたしが みた みらい<br>";
        } elseif($leaders_name == 'katsura') {
            $phrase1 = "うおおーす！<br>わしは もえる おとこ！<br>グレンじま ポケモンジムの カツラ<br>わしの ポケモンは すべてを<br>ほのおで やいて こがしまくる<br>つわもの ばかり なのだー！<br>うおおーす！<br>やけどなおしの よういは いいか<br>";
            $phrase2 = "まだ いけるわい！<br><br><br>あなぐらジムの<br>いじを みせて やるわい！<br>";
            $phrase3 = "わしは もえつきた！<br>おまえに こそ！<br>クリムゾン バッジは ふさわしい！<br>うおーす！<br>この クリムゾン バッジは<br>もってる だけで<br>ポケモンの とくしゅ のうりょくを<br>たかめる こうかが ある！<br><br><br>それから！<br>この わざマシンを うけとれい！<br>わざマシン38は<br>もえる おおわざ！ だいもんじ！<br>だいもんじは<br>ほのお タイプの ポケモン！<br>ロコンや リザードに<br>おぼえさせると よいぞ！<br><br><br>この わざを みんなは<br>だいもんじやき と よんでるが<br>そりゃ まちがいだ！<br>ほんば きょうと では<br>だいもんじ とか おくりび と<br>よんで いるのだ！<br>";
            $phrase4 = "うおおーいっ！<br>みごとな しょうぶであった！<br>";
        } elseif($leaders_name == 'sakaki') {
            $phrase1 = "ははははーッ！<br>ここは おれの かくれが だ！<br>ロケットだん ふっかつの ひ まで<br>この ジムで<br>たいせいを たてなおすのだ！<br>しかし…… きみに<br>みつかって しまっては<br>しょうがない！<br>こんどは てかげん なしだ！<br><br><br>では……<br>いま いちど！<br>さいきょうの トレーナー<br>サカキの うでまえを みよ！<br>";
            $phrase2 = "すこしは やるようだな！<br>だが たたかいは これからだ！<br>";
            $phrase3 = "はー はーッ！<br>はげしい たたかい だった！<br>きみの かちだ！<br><br><br>いま……<br>その あかしに<br>グリーン バッジを わたそう！<br>グリーンバッジさえ あれば<br>どんなに レベルの たかい<br>ポケモンも いうことを きく！<br>きみが いちにんまえの<br>トレーナーに なった あかしだ！<br>これで ポケモンリーグに<br>いどむ ことが できるだろう<br>この わざマシンは……！<br>ポケモンリーグへ いどむ<br>きみへ せんべつだ！<br>わざマシン27は じわれ だ！<br>じわれに さそいこまれた てきは<br>いちげきで ダウン する！<br>さいきょうの わざだ！<br>おれが むかし…… ここで<br>ポケモン ジムを やってる とき<br>つくった ものだ……<br><br><br><br>このような まけかたを しては<br>ぶかたちに しめしが つかない！<br>ロケットだんは……<br>ほんじつを もって かいさんする！<br>わたしは<br>ポケモンの しゅぎょうを<br>いちから しなおす つもりだ！<br>いつの ひか……<br>また あおう！<br>…… さらばだ！<br>";
            $phrase4 = "でなおしてこい！<br>";
        }

        $phrases = array($phrase1, $phrase2, $phrase3, $phrase4, $phrase5, $phrase6);
        return $phrases;
    }
?>