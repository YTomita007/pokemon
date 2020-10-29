<?php
    session_start();

    require 'system/class/Pokemon.class.php';
    require 'system/class/Assassinate.class.php';
    require 'system/functions/base.php';

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
        if($process == 223){

        } else {
            $mypokemon = my_instance($_mypokemon);
        }
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
        // case 207:
        //     $oppokemon = leaders_pokemon_instance($_oppokemon, $level);
        //     $params = [
        //         'mypokemon' => $mypokemon->identify,
        //         'oppokemon' => $oppokemon->identify,
        //         'level' => $level,
        //         'orders' => $orders,
        //         'gymleader' => $selectleader,
        //     ];
        //     header('Location: ./contents/story/01battle/battle.php?'.http_build_query($params, '', '&'), true, 307);
        //     break;
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
    
        case 901:
            if($dataclear == 'yes'){
                $message = trancate_alldata($dataclear, $degrees);
            } else {
                $message = trancate_alldata($dataclear, $degrees);
            }
            header('Location: ./contents/setting/index.php?message='.$message, true, 307);
            break;
    }
?>
