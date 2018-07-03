<?php

    require ('lang.php');

    $prin = $_POST['principal'];
    $repl = $_POST['replacement'];
    $list = $_POST['list'];

    $list = explode("\n", $list);
    $pool = array();
    $chsn = array();

    $count = count($list);

    if ($count < 2) returnJSON($j['Draw']['Failed']['0x1']);
    if ($count < $prin) returnJSON($j['Draw']['Failed']['0x2']);
    if (($count - $prin) < $repl) returnJSON($j['Draw']['Failed']['0x3']);

    foreach ($list as $k){
        $k = trim($k);
        if (strlen($k) < 1) continue;
        array_push($pool, $k);
    }

    shuffle($pool);

    $x = $y = false;
    
    for($i = 1; $i <= $prin; $i++){
        if (!empty($pool)){
            $x = true;
            $a = array_rand($pool);
            $chsn['prin'][$i] = $pool[$a];
            unset($pool[$a]);
        }
    }

    for($i = 1; $i <= $repl; $i++){
        if (!empty($pool)){
            $y = true;
            $a = array_rand($pool);
            $chsn['repl'][$i] = $pool[$a];
            unset($pool[$a]);
        }
    }

    $j['Draw']['Success'] = array(
        'a' => 200,
        'b' => 'Başarılı',
        'c' => 'Çekiliş Yapıldı',
        'd' => 'success',
        'e' => $x,
        'f' => $y,
        'g' => json_encode($chsn['prin'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
        'h' => json_encode($chsn['repl'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    );

    returnJSON($j['Draw']['Success']);