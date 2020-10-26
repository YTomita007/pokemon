<?php
    session_start();

    require 'system/class/Pokemon.class.php';
    require 'system/class/Assassinate.class.php';
    require 'system/functions/common.php';

    if(isset($_GET['process'])){
        $process = $_GET['process'];
        $orders = $_GET['orders'];
        $_mypokemon = $_GET['mypokemon'];
        $_oppokemon = $_GET['oppokemon'];
        $selectleader = $_GET['gymleader'];
        $badge = $_GET['badge'];
    } else {
        $process = $_POST['process'];
        $orders = $_POST['orders'];
        $_mypokemon = $_POST['mypokemon'];
        $_oppokemon = $_POST['oppokemon'];
        $selectleader = $_POST['gymleader'];
        $badge = $_POST['badge'];
    }

    if(isset($_GET['level']) || isset($_POST['level'])){
        $level = $_GET['level'];
        $level = $_POST['level'];
    }

    $command = $_POST['playmode'];
    $dataclear = $_POST['dataclear'];
    $degrees = $_POST['degrees'];

    if(isset($_mypokemon)){
        $mypokemon = my_instance($_mypokemon);
        $_SESSION['mypokemon'] = $mypokemon->identify;
    }

    switch($process){
        case 101:
            if($command == "rollplay"){
                header('Location: ./contents/story/mypokemon.php', true, 307);
            } elseif($command == "battle"){
                header('Location: ./contents/battle/mypokemon.php', true, 307);
            } elseif($command == "setting"){
                header('Location: ./contents/setting/index.php', true, 307);
            }
            break;
        case 102:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/firstbattle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 201:
            $oppokemon = leaders_pokemon_instance($_oppokemon, $level);
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'level' => $level,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/battle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 202:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/secondbattle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 203:
            $oppokemon = leaders_pokemon_instance($_oppokemon, $level);
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'level' => $level,
                'orders' => $orders,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/battle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 211:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/win.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 212:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/lose.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 213:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'badge' => $badge,
            ];
            header('Location: ./contents/story/growup.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 901:
            if($dataclear == 'yes'){
              unset($_SESSION['graybadge']);
              unset($_SESSION['bluebadge']);
              unset($_SESSION['orangebadge']);
              unset($_SESSION['rainbowbadge']);
              unset($_SESSION['pinkbadge']);
              unset($_SESSION['goldbadge']);
              unset($_SESSION['crimsonbadge']);
              unset($_SESSION['greenbadge']);
              $message = "バッジデータをクリアしました<br>";
            }
            if(isset($degrees)){
                switch($degrees){
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
            header('Location: ./contents/setting/index.php?message='.$message, true, 307);
            break;
    }
?>
