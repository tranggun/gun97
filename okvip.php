<?php
        class semvak
{
        public $token;
        public $id;
       
           public function __construct($token,$id)
           {
                   $this->token = $token;
                   $this->id = $id;
           }
        private function xstring($string,$start,$end)
        {
        $str = explode($start,$string);
        $str = explode($end,$str[1]);
        return $str[0];
    }
        private function xaccess($url)
        {
       
                $ch = curl_init($url);
                curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch,CURLOPT_REFERER,$url);                
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
                curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36');
                curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');
                curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');                              
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $body = curl_exec($ch);
                $info = curl_getinfo($ch);
                $redir = $info['redirect_url'];
                $redirect = $redir;
                return $body;
        }
        private function copyright()
        {
                $w = '<body style="background-color:black">
                <font color="white" style="Times New Roman"><b>
                <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
                <pre>
        <center><font color="red" size="10"> Nobita76_Dev </font>
        </pre>';
        echo $w;
        }
        private function getCaptcha($lokasi)
     {
         $ch = curl_init($lokasi);
              curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');      
              curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');      
              curl_setopt($ch,CURLOPT_COOKIESESSION,true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch,CURLOPT_REFERER,$lokasi);
              curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
              curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
              curl_setopt($ch,CURLOPT_HEADER,0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         $y = curl_exec($ch);
         return $xa;
                 curl_close($ch);
        }
                private function Submit($url,$fields)
        {
        $random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
        $field_string = http_build_query($fields);
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch,CURLOPT_FRESH_CONNECT,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
        curl_setopt($ch,CURLOPT_TCP_NODELAY,true);             
        curl_setopt($ch,CURLOPT_REFERER,$url);          
        curl_setopt($ch,CURLOPT_TIMEOUT,5);            
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
        curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');
        curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');
        curl_setopt($ch, CURLOPT_POST, count($field_string));
        curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $body = curl_exec($ch);
        if(!curl_errno($ch)){
        $info = curl_getinfo($ch);
        $redir = $info['redirect_url'];
        $code = $info['http_code'];
        curl_close($ch);
        return $redir." <br> Nobita76 Code = ".$code."";
        }
        unlink("cookie.txt");
        curl_close($ch);
        }
        private function dj()
    {
        $II = "http://m.likerhub.com/login.php?user=".$this->token;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://m.likerhub.com/like.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
        echo $this->Submit($II,$III);
        echo "<br>";
        echo $this->Submit($IIII,$IIIII);
        echo "<br>";
        echo "Nobita76_Dev";
        echo "<br>";        
    }
                 private function monkey()
    {
        $II = "http://fb-autolikers.com/comment/login.php?tokenn=".$this->token;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://fb-autolikers.com/comment/m_comment.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "privacy" => "Public",      
        "c" => "210",
        "submit" => "AUTO-COMMENT",
        );
        echo $this->Submit($II,$III);
        echo "<br>";
        echo $this->Submit($IIII,$IIIII);
        echo "<br>";
        echo "Nobita76_Dev";
        echo "<br>";        
    }
                        private function mg()
    {
        $II = "http://m.machineliker.com/login.php?user=".$this->token;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://m.machineliker.com/like.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "selector" => "200",
        "submit" => "Submit",
        );
        echo $this->Submit($II,$III);
        echo "<br>";
        echo $this->Submit($IIII,$IIIII);
        echo "<br>";
        echo "Nobita76_Dev";
        echo "<br>";        
    }
                private function kdliker()
        {
                $II = "http://www.kdliker.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.kdliker.com/index.php";
                $IIIII = array(
                "id" => $this->id,
                "limitlike" => "150",
                "access_token" => $this->token,
                "pancal" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function royaliker()
        {
                $II = "http://www.royaliker.net/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.royaliker.net/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                        private function likelo()
        {
                $II = "http://likelo.in/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://likelo.in/index.php";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => $this->token,
                "pancal" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function myfbliker()
        {
                $II = "http://www.myfbliker.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.myfbliker.com/home.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                "selector" => "150",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function swaglikers()
        {
                $II = "http://www.swaglikers.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.swaglikers.com/index.php";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function vipautoliker()
        {
                $II = "http://thislike.ga/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://thislike.ga/liker.php?type=status";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function fblikess()
        {
                $II = "http://fblikess.com/login.php";
                $III = array(
                "null" => "null",
                );
                $III = array(
                "user" => $this->token,
                "submit" => "Submit",
                );
                $IIII = "http://fblikess.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function fourliker()
        {
                $II = "http://4liker.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://4liker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "likerange" => "200",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                        private function newfbautoliker()
        {
                $II = "http://newfbautoliker.com/Access.php?user=";
                $III = array(
                "null" => "null",
                );
                $III = array(
                "pass" => $this->token,
                "submit" => "Submit",
                );
                $IIII = "http://newfbautoliker.com/likes/?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        
                      private function official()
        {
                $II = "http://official-liker.net/code.login.php?user=".$this->token;
                $IIIX = "http://official-liker.net/code_login.php";
                $III = array(
                "answer" => $this->getCaptcha($IIIX),
                "login" => "Continue",
                "IL_IN_TAG" => "2",
                );
                $IIII = "http://official-liker.net/like.php?type=custom";
                $IIIIX ="http://official-liker.net/code.php";
                $IIIII = array(
                "answer" => $this->getCaptcha($IIIIX),
                "id" => $this->id,
                "limit" => "400",
                "custompostid" => "Submit",
                "IL_IN_TAG" => "2",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function fbautolikerz()
        {
                $II = "http://fb-autolikerz.com/";
                $IIIX = "http://fb-autolikerz.com/captcha.php";
                $III = array(
                "access_token" => $this->token,
                "capt" => $this->getCaptcha($IIIX),
                "submit" => "Login",
                );
                $IIII = "http://fb-autolikerz.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "likes" => "150",
                "submit" => "Submit",
               
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function fbautolikers()
        {
                $II = "http://67.212.191.74/validate.php?answer=".$this->getCaptcha($IIIX)."&user=".$this->token;
                $IIIX = "http://67.212.191.74/captcha.php";
                $III = array(
               "null" => "null",
                );
                $IIII = "http://67.212.191.74/like/?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "privacy" => "Public",
                "c" => "210",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function rockliker()
        {
                $II = "http://www.rockliker.net/panel.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://m.rockliker.net/liker.php?type=status";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function autolikesgroups()
        {
                $II = "http://www.autolikesgroups.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.autolikesgroups.com/home.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "selector" => "150",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
private function vliker()
        {
                $II = "http://vliker.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://vliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => $this->token,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
private function facebookauto()
        {
                $II = "http://facebook-autoliker.com/Access.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://facebook-autoliker.com/dashboard.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function autolikein()
        {
                $II = "https://autolike.in/login_web.php?auth=".$this->token;
                $III = "https://autolike.in/capcay.php";
                $III = array(
                "kode" => $this->getCaptcha($III),
                "submit" => "Continue",
                );
                $IIII = "https://autolike.in/?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                       private function autolikerfb()
        {
                $II = "http://www.autolikerfb.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://autolikerfb.com/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
               private function autolikefbpw()
        {
                $II = "https://www.autolikefb.pw/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "https://www.autolikefb.pw/serverliker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => $this->token,
                "submit" => "Likes",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
      private function solike()
        {
                $II = "http://solike.tk/Go.logine.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://solike.tk/m_liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => $this->token,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
private function sunda()
        {
                $II = "http://sundalikers.net/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://sundalikers.net/sundaa.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => $this->token,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
private function raja()
        {
                $II = "http://www.rajaliker.com/cek.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.rajaliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
private function fansliker()
        {
                $II = "http://fansliker.com/login.php?user=".$this->token;
                $III = array(
                "submit" => "Submit.!",
                );
                $IIII = "http://fansliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
               private function devoliker()
        {
                $II = "http://devoliker.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://devoliker.com/home.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "selector" => "200",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
            private function topautolike()
       {
            $II = "http://www.topautolike.com/login.php?user=".$this->token;
            $III = array(
               "null" => "null",
              );
            $IIII = "http://www.topautolike.com/like.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
        echo $this->Submit($II,$III);
        echo "<br>";
        echo $this->Submit($IIII,$IIIII);
        echo "<br>";
        echo "Nobita76_Dev";
        echo "<br>";        
        }

            private function fbcoment()
        {
                $II = "http://fb-autolikers.com/comment/login.php?tokenn=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://fb-autolikers.com/comment/commenter.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "privacy" => "Public",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                        private function pubiwayliker()
        {
                $II = "http://pubiwayliker.com/loginuser.php?mandiri=".$this->token;
                $III = "http://pubiwayliker.com/gambar.php";
                $III = array(
                "nilaiCaptcha" => $this->getCaptcha($III),
                "submit" => "Continue!",
                );
                $IIII = "http://pubiwayliker.com/pilihsuka.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function autolikecoid()
        {
                $II = "http://autolike.co.id/login.php?user=".$this->token;
                $IIIX = "http://autolike.co.id/cap/captcha.php";
                $III = array(
                "answer" => $this->getCaptcha($IIIX),
                "submit" => "Continue",
                );
                $IIII = "http://autolike.co.id/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                "yourlimitpost" => "150",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function nobita76()
        {
                $II = "http://kingliker.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://kingliker.com/etautolikes.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "yourlimitpost" => "220",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function nobita761()
        {
                $II = "http://www.rockliker.net/panel.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.rockliker.net/rock-liker-panel.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Send Likes",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function nobita762()
        {
                $II = "http://vipautoliker.com/Go.login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://vipautoliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function nobita763()
        {
                $II = "http://www.autolike.xyz/login.php?access_token=".$this->token;
                $III = array(
                "submit" => "null",
                );
                $IIII = "http://www.autolike.xyz/?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "pancal" => "submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita764()
        {
                $II = "www.autolikesgroups.com/login.php?user=".$this->token;
                $III = array(
                "submit" => "null",
                );
                $IIII = "http://www.autolikesgroups.com/home.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                "selector" => "300"
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";  
        }
        private function nobita765()
        {
                $II = "http://get-liker.com/login.php?user=".$this->token;
                $III = "http://get-liker.com/captcha.php";
                $III = array(
                "captcha" => $this->getCaptcha($III),
                "submit" => "Continue",
                );
                $IIII = "http://get-liker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
         private function nobita766()
        {
                $II = "http://lmj-likerz.com/login2.php?access_token=".$this->token;
                $III = "http://lmj-likerz.com/capcay2.php";
                $III = array(
                "kode" => $this->getCaptcha($III),
                "submit" => "Continue",
                );
                $IIII = "http://lmj-likerz.com/?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "like" => "null",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
                private function nobita767()
        {
                $II = "http://autolike-us.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://fb-autolikers.com/comment/commenter.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita768()
        {
                $II = "http://www.fesbuk-liker.cf/login.php?user=".$this->token;
                $III = array(
                "masuk" => " Submit ",
                );
                $III = "http://www.fesbuk-liker.cf/cek.php";
                $III = array(
                "code" => $this->getCaptcha($III),
                );
                $IIII = "http://lmj-likerz.com/?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "limit" => "250",
                "arjunaray"=> "SUBMIT",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita769()
        {
                $II = "http://yoliker.net/login.php?access_token=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://yoliker.net/yoliker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => "null",
                "submit" => "Send Likes",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7610()
        {
                $II = "http://postliker.net/Go.login.php?user=".$this->token;
                $III = "http://postliker.net/code.php";
                $III = array(
                "answer" => $this->getCaptcha($III),
                "login" => "Continue",
                );
                $IIII = "http://postliker.net/?type=custom";
                $IIIII = array(
                "answer" => $this->getCaptcha($III),
                "id" => $this->id,
                "custompostid" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7611()
        {
                $II = "https://likeeer.com/login.php?accesstoken=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "https://likeeer.com/p.php";
                $IIIII = array(
                "likeeerid" => $this->id,
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7612()
        {
                $II = "http://autolikero.com/login.php?accesstoken=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://autolikero.com/liker.php?type=custom";
                $IIIII = array(
                "idz" => $this->id,
                "submit" => "Submit",
                "likes" => "150",
                 );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7613()
        {
                $II = "http://monsterlikes.com/clogin.php?user=".$this->token;
                $III = "http://monsterlikes.com/captcha.php";
                $III = array(
                "capt" => $this->getCaptcha($III),
                "submit" => "Continue or Login",
                );
                $IIII = "http://monsterlikes.com/likess.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                 );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7614()
        {
                $II = "http://proautoliker.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://proautoliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7615()
        {
                $II = "http://arabfblike.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://arabfblike.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7616()
        {
                $II = "http://www.likerhub.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.likerhub.com/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7617()
        {
                $II = "http://www.sexyliker.com/verify.php?fbtoken=".$this->token;
                $III = "http://www.sexyliker.com/cap/captcha.php";
                $III = array(
                "answer" => $this->getCaptcha($III),
                );
                $IIII = "http://www.sexyliker.com/done.php";
                $IIIII = array(
                "token" => $this->token,    
                "id" => $this->id,
                "pancal" => "null",
                "yourlimitpost" => "150",
                 );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7618()
        {
                $II = "http://www.cianjurliker.pw/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.cianjurliker.pw";
                $IIIII = array(
                "id" => $this->id,
                "access_token" => $this->token,
                "pancal" => "null",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7619()
        {
                $II = "http://autolike.co/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://autolike.co/m/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "pancal" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7620()
        {
                $II = "http://www.dliker.ga/login.php?user=".$this->token;
                $III = "http://www.dliker.ga/cek.php";
                $III = array(
                "code" => $this->getCaptcha($III),
                );
                $IIII = "http://www.dliker.ga/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "limit" => "300",
                "arjunaray" => " SUBMIT ",
                 );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7621()
        {
                $II = "http://manishlikes.cf/verify.php?fbtoken=".$this->token;
                $III = "http://manishlikes.cf/cap/captcha.php";
                $III = array(
                "answer" => $this->getCaptcha($III),
                );
                $IIII = "http://manishlikes.cf/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "null",
                "yourlimitpost" => "150",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7622()
        {
                $II = "http://autovipviet.tk/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://autovipviet.tk/K-LIKE.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7623()
        {
                $II = "http://autoliker.biz/verify.php?user=".$this->token;
                $III = "http://autoliker.biz/captcha.php";
                $III = array(
                "capt" => $this->getCaptcha($III),
                "submit" => "Continue",
                );
                $IIII = "http://autoliker.biz/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "null",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7624()
        {
                $II = "https://autoliker.truelikes.net/process.php?token=".$this->token;
                $III = array(
                "submit" => "SUBMIT",
                );
                $IIII = "https://autoliker.truelikes.net/liker.php";
                $IIIII = array(
                "page_id" => $this->id,
                "submit_page" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7625()
        {
                $II = "https://likers.ulikers.net/beta/login.php?access_token=".$this->token;
                $III = array(
                "submit" => "Submit",
                );
                $IIII = "https://autoliker.truelikes.net/liker.php";
                $IIIII = array(
                "pid" => $this->id,
                "submit" => "submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
         private function nobita7626()
        {
                $II = "http://www.autolikefb.pw/login.php?access_token=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.autolikefb.pw/serverliker.php";
                $IIIII = array(
                "id" => $this->id,
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7627()
        {
                $II = "hhttp://likelikego.com/login.php?accesstoken=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://likelikego.com/p.php";
                $IIIII = array(
                "likelikegoid" => $this->id,
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }        
        private function nobita7628()
        {
                $II = "http://www.officialliker.in/login.php?token=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.officialliker.in/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
         private function nobita7629()
        {
                $II = "http://geo-liker.ga/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://geo-liker.ga/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "????????",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7630()
        {
                $II = "http://diliker.net/login.php?user=".$this->token;
                $III = array(
                "country" => "null",
                "_" => "accessToken",
                );
                $IIII = "http://diliker.net/ty.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "pancal" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7631()
        {
                $II = "http://faliker.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://faliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7632()
        {
                $II = "http://friendsliker.com/Go.login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://friendsliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }
        private function nobita7633()
        {
                $II = "http://5liker.com/login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://5liker.com/Likes.php?type=custom&lang=en";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
                echo "<br>";
                echo "Nobita76_Dev";
                echo "<br>";           
        }                                
        public function SADAP()
        {
                ignore_user_abort(true);
                while (@ob_end_flush());      
                ob_implicit_flush(true);
                echo $this->copyright();
                echo $this->dj();
                echo $this->monkey();
                echo $this->mg();
                echo $this->kdliker();
                echo $this->royaliker();
                echo $this->likelo();
                echo $this->myfbliker();
                echo $this->swaglikers();
                echo $this->vipautoliker();
                echo $this->fblikess();
                echo $this->fourliker();
                echo $this->newfbautoliker();
                echo $this->official();
                echo $this->fbautolikerz();
                echo $this->fbautolikers();
                echo $this->rockliker();
                echo $this->autolikesgroups();
                echo $this->vliker();
                echo $this->facebookauto();
                echo $this->autolikein();
                echo $this->autolikerfb();
                echo $this->autolikefbpw();
                echo $this->solike();
                echo $this->sunda();
                echo $this->raja();
                echo $this->fansliker();
                echo $this->devoliker();
                echo $this->topautolike();
                echo $this->fbcoment();
                echo $this->pubiwayliker();
                echo $this->autolikecoid();
                echo $this->nobita76();
                echo $this->nobita761();
                echo $this->nobita762();
                echo $this->nobita763();
                echo $this->nobita764();
                echo $this->nobita765();
                echo $this->nobita766();
                echo $this->nobita767();
                echo $this->nobita768();
                echo $this->nobita769();
                echo $this->nobita7610();
                echo $this->nobita7611();
                echo $this->nobita7612();
                echo $this->nobita7613();
                echo $this->nobita7614();
                echo $this->nobita7615();
                echo $this->nobita7616();
                echo $this->nobita7617();
                echo $this->nobita7618();
                echo $this->nobita7619();
                echo $this->nobita7620();
                echo $this->nobita7621();
                echo $this->nobita7622();
                echo $this->nobita7623();
                echo $this->nobita7624();
                echo $this->nobita7625();
                echo $this->nobita7626();
                echo $this->nobita7627();
                echo $this->nobita7628();
                echo $this->nobita7629();
                echo $this->nobita7630();
                echo $this->nobita7631();
                echo $this->nobita7632();
                echo $this->nobita7633();
                break;
        }
}
include 'config.php';
$token = file_get_contents("".$linktoken."");
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$id_like.'/feed?access_token='.$token.'&limit=1'),true); //Limit Id 1 Status
for($i=0;$i<count($feed[data]);$i++){ // Parse ID
$id = $feed[data][$i][id];  
$sllike = $feed[data][$i][likes][count]; 
} 
$try = new semvak;
$try->token=$token;
$try->id=$id;
$try->SADAP();