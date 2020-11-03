<?php
	include ('allconfig.php');

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
    $pokelevel = $_POST['pokelevel'];
    $mypokelevel = $_POST['mypokelevel'];

    if(isset($_GET['oppokelevel'])){
        $mypokelevel = $_GET['mypokelevel'];
        $oppokelevel = $_GET['oppokelevel'];
    }

    if(isset($_SESSION['battle_mode'])){
        $mypokemon = battle_single($_mypokemon, 17);
    } else {
        $mypokemon = my_instance($_mypokemon);
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
        case 103:
            if($command == "battle"){
                $params = [
                    'mypokemon' => $mypokemon->identify,
                ];
                header('Location: ./contents/story/01battle/selectleader.php?'.http_build_query($params, '', '&'), true, 307);
            } elseif($command == "profile"){
                $params = [
                    'mypokemon' => $mypokemon->identify,
                ];
                header('Location: ./contents/story/02centre/profile.php?'.http_build_query($params, '', '&'), true, 307);
            }
            break;
        case 105:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/firstbattle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 201:
            $oppokemon = leaders_pokemon_instance($_oppokemon, $level);
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'level' => $level,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/battle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 202:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/secondbattle.php?'.http_build_query($params, '', '&'), true, 307);
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
            header('Location: ./contents/story/01battle/battle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 206:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/thirdbattle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 207:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/fourthbattle.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 211:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/win.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 212:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'gymleader' => $selectleader,
            ];
            header('Location: ./contents/story/01battle/lose.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 221:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'badge' => $badge,
            ];
            header('Location: ./contents/story/01battle/growup.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 222:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'process' => $process,
            ];
            header('Location: ./contents/story/01battle/result.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 223:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'process' => $process,
            ];
            header('Location: ./contents/story/01battle/result.php?'.http_build_query($params, '', '&'), true, 307);
            break;

        case 301:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'process' => $process,
                'pokelevel' => $pokelevel,
            ];
            header('Location: ./contents/battle/levelsetting.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 302:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'process' => $process,
                'pokelevel' => $pokelevel,
            ];
            header('Location: ./contents/battle/oppokemon.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 303:
            $oppokemon = battle_single($_oppokemon, 17);
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'process' => $process,
                'pokelevel' => $pokelevel,
            ];
            header('Location: ./contents/battle/levelsetting.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 304:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'process' => $process,
                'mypokelevel' => $mypokelevel,
                'pokelevel' => $pokelevel,
            ];
            header('Location: ./contents/battle/onmarks.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 311:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'mypokelevel' => $mypokelevel,
                'oppokelevel' => $oppokelevel,
            ];
            header('Location: ./contents/battle/onmarks.php?'.http_build_query($params, '', '&'), true, 307);
            break;
        case 312:
            $params = [
                'mypokemon' => $mypokemon->identify,
                'oppokemon' => $oppokemon->identify,
                'mypokelevel' => $mypokelevel,
                'oppokelevel' => $oppokelevel,
            ];
            header('Location: ./contents/battle/onmarks.php?'.http_build_query($params, '', '&'), true, 307);
            break;
                                    
        case 901:
            if($dataclear == 'yes'){
                list($message, $clearflag) = trancate_alldata($dataclear, $degrees);
            } else {
                list($message, $clearflag) = trancate_alldata($dataclear, $degrees);
            }
            $params = [
                'message' => $message,
                'clearflag' => $clearflag,
            ];
            header('Location: ./contents/setting/index.php?'.http_build_query($params, '', '&'), true, 307);
            break;
    }
?>
