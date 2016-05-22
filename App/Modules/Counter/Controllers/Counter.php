<?php

namespace App\Modules\Counter\Controllers;

use System\HMVC\HMVC;
use System\DB\DB;
use System\Utils\JS;

class Counter extends HMVC {

    public function index() {

        function Get_CIP() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if (getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if (getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if (getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if (getenv('HTTP_FORWARDED'))
                $ipaddress = getenv('HTTP_FORWARDED');
            else if (getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }

        function getBrowser() {
            $u_agent = $_SERVER['HTTP_USER_AGENT'];
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version = "";

            if (preg_match('/linux/i', $u_agent)) {
                $platform = 'linux';
            } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                $platform = 'mac';
            } elseif (preg_match('/windows|win32/i', $u_agent)) {
                $platform = 'windows';
            }

            if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
                $bname = 'Internet Explorer';
                $ub = "MSIE";
            } elseif (preg_match('/Firefox/i', $u_agent)) {
                $bname = 'Mozilla Firefox';
                $ub = "Firefox";
            } elseif (preg_match('/Chrome/i', $u_agent)) {
                $bname = 'Google Chrome';
                $ub = "Chrome";
            } elseif (preg_match('/Safari/i', $u_agent)) {
                $bname = 'Apple Safari';
                $ub = "Safari";
            } elseif (preg_match('/Opera/i', $u_agent)) {
                $bname = 'Opera';
                $ub = "Opera";
            } elseif (preg_match('/Netscape/i', $u_agent)) {
                $bname = 'Netscape';
                $ub = "Netscape";
            }

            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) .
                    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            if (!preg_match_all($pattern, $u_agent, $matches)) {
                
            }

            $i = count($matches['browser']);
            if ($i != 1) {
                if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                    $version = $matches['version'][0];
                } else {
                    $version = $matches['version'][1];
                }
            } else {
                $version = $matches['version'][0];
            }

            if ($version == null || $version == "") {
                $version = "?";
            }

            return array(
                'userAgent' => $u_agent,
                'name' => $bname,
                'version' => $version,
                'platform' => $platform,
                'pattern' => $pattern
            );
        }

        $ip = Get_CIP();
        $browser = getBrowser();
        $time = mktime(24, 0, 0) - time();

        $check_add = $this->cookie('Counter');

        if (empty($check_add)) {
            $this->db = new DB();
            $sql = "INSERT INTO sys_counter SET date_c=CURRENT_DATE(),time_c=CURRENT_TIME(),ip_c='" . $ip . "',os_c='" . PHP_OS . "',b_c='" . $browser['name'] . "',bv_c='" . $browser['version'] . "'";
            $this->db->query($sql);
            $this->cookie("Counter", $ip, $time);
        }
        echo JS::re($this->route->go('Show'));
    }

    public function Show() {

        $this->db = new DB();

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE date_c=CURRENT_DATE() LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('Today', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE date_c=CURRENT_DATE()-INTERVAL 1 DAY LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('Yesterday', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE WEEKOFYEAR(date_c)=WEEKOFYEAR(CURRENT_DATE()) LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('ThisWeek', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE WEEKOFYEAR(date_c)=WEEKOFYEAR(CURRENT_DATE() - INTERVAL 1 WEEK) LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('LastWeek', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE EXTRACT(YEAR_MONTH FROM date_c)=EXTRACT(YEAR_MONTH FROM CURRENT_DATE()) LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('ThisMonth', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE EXTRACT(YEAR_MONTH FROM date_c)=EXTRACT(YEAR_MONTH FROM CURRENT_DATE() - INTERVAL 1 MONTH) LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('LastMonth', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE EXTRACT(YEAR FROM date_c)=EXTRACT(YEAR FROM CURRENT_DATE()) LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('ThisYear', $rc->count);

        $sql = "SELECT count(id) AS count FROM sys_counter WHERE EXTRACT(YEAR FROM date_c)=EXTRACT(YEAR FROM CURRENT_DATE() - INTERVAL 1 YEAR) LIMIT 1";
        $rc = $this->db->fetch($this->db->query($sql));
        $this->share('LastYear', $rc->count);

        $this->view('Show');
    }

}

?>