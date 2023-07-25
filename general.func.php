<?php

// Check Function Login
function is_login() {
    if (isset($_SESSION['uname']) && $_SESSION['uname'] != "") {
        return true;
    } else {
        return false;
    }
}

function getAllSubdirectories($base) {
    $dir_array = array();
    if (!is_dir($base)) {
        return $dir_array;
    }

    if ($dh = opendir($base)) {
        while (($file = readdir($dh)) !== false) {
            if ($file == '.' || $file == '..')
                continue;

            if (is_dir($base . '/' . $file)) {
                $dir_array[] = $file;
            } else {
                array_merge($dir_array, getAllSubdirectories($base . '/' . $file));
            }
        }
        closedir($dh);
        return $dir_array;
        
    }
}

function the_head() {
    require_once __DIR__ . '/../tpl/head.php';
}

function the_footer() {
    require_once __DIR__ . '/../tpl/footer.php';
}

function menu_render($menuarray) {
    ksort($menuarray);
    ?>
    <div class="collapse navbar-collapse" id="topnav-menu-content">
    <ul class="navbar-nav">
            <?php foreach ($menuarray as $key => $value) { ?>
            <li <?php echo (has_sub($value) ? 'class="nav-item dropdown"' : ''); ?>><a href="<?php echo $value["url"]; ?>" class="nav-link dropdown-toggle arrow-none"><i class="<?php echo $value["icon"]; ?>" data-feather="file-text"></i> <span><?php echo $value["label"]; ?></span></a>
            <?php if (has_sub($value)) { ?>
                    <div class="dropdown-menu">
            <?php the_sub($value["sub"]); ?>
                    </div>
        <?php } ?>
            </li>
    <?php } ?>
    </ul>
    </div>
    <?php
}

function has_sub($array) {
    if (array_key_exists("sub", $array)) {
        return true;
    } else {
        return false;
    }
}

function the_sub($array) {
    ksort($array);
    foreach ($array as $key => $value) {
        ?>
        <a href="<?php echo $value["url"]; ?>" class="dropdown-item"><?php echo $value["label"]; ?></a>
    <?php
    }
}

function current_fund() {
    global $db;
    // Get The income
    $db->bind("to_id", $_SESSION["uid"]);
    $income = $db->query("SELECT SUM(nominal) as funds FROM fund_transaction WHERE to_id = :to_id AND type <> 10;");
    // Get The Expense
    $db->bind("from_id", $_SESSION["uid"]);
    $expense = $db->query("SELECT SUM(nominal) as expense FROM fund_transaction WHERE from_id = :from_id AND (type <> '10' AND type <> '9');");
    // Calculate Available Funds
    $available = $income[0]["funds"] - $expense[0]["expense"];
    return ($_SESSION["role"] == "1" ? $available : 999999999999999999999999999);
}

//account verification status
function verifyAccount () {
    global $db;
    $db->bind("uid", $_SESSION["uid"]);
    $verify = $db->query("SELECT verify FROM user_id WHERE uid = :uid");
    $verifyUser = $verify[0]["verify"];
    return $verifyUser;
}

function current_register_fund() {
    global $db;
    // Get The register (Pending) Fund
    $db->bind("from_id", $_SESSION["uid"]);
    $db->bind("to_id", $_SESSION["uid"]);
    $available = $db->query("SELECT SUM(nominal) as funds FROM fund_transaction WHERE (type = 2 AND from_id = :from_id) OR (type = 10 AND to_id = :to_id);");
    // Register (Pending) Fund Used
    $db->bind("from_id", $_SESSION["uid"]);
    $used = $db->query("SELECT SUM(nominal) as funds FROM fund_transaction WHERE (type = 9 OR type = 10) AND from_id = :from_id;");
    $registerfund = $available[0]["funds"] - $used[0]["funds"];
    //return $registerfund;
    return ($_SESSION["role"] == "1" ? $registerfund : 999999999999999999999999999);
}
//display transaction count
function displayTranscount() {
    global $db;
    $transCount = $db->query("SELECT COUNT(trans_id) AS totaltrans FROM fund_transaction");
    return $transCount[0]['totaltrans'] * 100;
    }

//display transaction count different per 7 days
function displayWeeklytrans () {
    global $db;
    $weeklyTransactions = $db->query("SELECT COUNT(trans_id) AS weeklyday FROM fund_transaction WHERE DATE(date) > (NOW() - INTERVAL 7 DAY);");
    return $weeklyTransactions[0]['weeklyday'] * 10;
}
//display transaction sum
function sumTransactions () {
    global $db;
    $transSum = $db->query("SELECT SUM(nominal) as sumTotal FROM fund_transaction");
    $evalue = ($transSum[0]["sumTotal"] * 100) / 1000000;
    $rvalue = round($evalue, 2);
    return $rvalue;
}
//display weekly transaction sum 
function sumWeekly () {
    global $db;
    $weekSum = $db->query("SELECT SUM(nominal) as weekTotal FROM fund_transaction WHERE DATE(date) > (NOW() - INTERVAL 7 DAY)");
    $wvalue = round($weekSum[0]["weekTotal"] / 1000,2);
    return $wvalue;
}
function getProfileData($uid, $data) {
    global $db;
    $db->bind("uid", $uid);
    $profile = $db->query("SELECT * FROM user_detail WHERE uid=:uid");
    return (count($profile)>0?$profile[0][$data]:"");
}

function getBankData($uid, $data) {
    global $db;
    $db->bind("uid", $uid);
    $bank = $db->query("SELECT * FROM user_bank WHERE uid=:uid");
    return (count($bank)>0?$bank[0][$data]:"");
}

function get_data($uid, $kolom) {
    global $db;
    $data = "";
    $db->bind("uid", $uid);
    $data = $db->query("SELECT * FROM user_id WHERE uid = :uid;");
    if ($data) {
        return $data[0][$kolom];
    } else {
        return "0";
    }
}

function getProduct($id, $kol) {
    global $db;
    $data = "";
    $db->bind("idprod", $id);
    $data = $db->query("SELECT * FROM product WHERE product_id = :idprod;");
    return $data[0][$kol];
}

function getUID($name) {
    global $db;
    $db->bind('user', $name);
    $dataz = $db->query("SELECT uid FROM user_id WHERE `uname` = :user");
    return $dataz[0]["uid"];
}

function get_parent($uid, $model = "int") {
    global $db;
    $data = "";
    $db->bind("uid", $uid);
    $data = $db->query("SELECT * FROM genealogy WHERE uid = :uid;");
    if ($model != "int") {
        get_data($data[0]["parentid"], $model);
    } else {
        return $data[0]["parentid"];
    }
}

function get_sponsor($uid, $model = "int") {
    global $db;
    $data = "";
    $db->bind("uid", $uid);
    $data = $db->query("SELECT * FROM genealogy WHERE uid = :uid;");
    if ($model != "int") {
        return get_data($data[0]["sponsorid"], $model);
    } else {
        return $data[0]["sponsorid"];
    }
}

function xToken($length = 8) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}

function userExist($uname) {
    global $db;
    $db->bind("uname", $uname);
    $row = $db->query("SELECT * FROM user_id WHERE uname = :uname");
    return (count($row) > 0 ? true : false);
}

function userID($uname) {
    global $db;
    $db->bind("uname", $uname);
    $row = $db->query("SELECT * FROM user_id WHERE uname = :uname");
    return $row[0]["uid"];
}

function isHariLibur($tgl) {
    global $db;
    $db->bind("tanggal", $tgl);
    $hari = $db->query("SELECT * FROM holiday WHERE date = :tanggal");
    if (count($hari) > 0) {
        return true;
    } else {
        return false;
    }
}

function bankExists($wal) {
    global $db;
    $db->bind('walletaddress', $wal);
    $banks = $db->query("SELECT bank_id FROM user_bank WHERE walletaddress = :walletaddress");
    return (count($banks) > 0 ? true : false);
}

function isWeekend($date) {
    return (date('N', strtotime($date)) >= 7);
}

function getSetting($key) {
    global $db;
    $db->bind('keys', $key);
    $result = $db->query("SELECT * FROM settings WHERE name = :keys");
    return (count($result)>0?$result[0]["value"]:"");
}
?>