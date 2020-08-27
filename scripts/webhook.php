<?php
class DiscordWebHook{
        //msg
        private $msg = "";
        private $username = "";
        private $avatarurl = "";
        private $tts = "";
        private $url = "";
        //embed
        private $title = "";
        private $type = "rich";
        private $description = "";
        private $link = "";
        private $color = "000000";
        private $image = "";

        function __construct()
        {
            $str = file_get_contents("../config/webhookConfig.json");
            $CONFIG = json_decode($str,true);

            $this->msg = $CONFIG['default-msg'];
            $this->username = $CONFIG['default-user'];
            $this->avatarurl = $CONFIG['default-avatarUrl'];
            $this->tts = $CONFIG['tts'];
            $this->url = $CONFIG['url'];

            $this->title = $CONFIG['default-title'];
            $this->description = $CONFIG['default-description'];
            $this->link = $CONFIG['default-link'];
            $this->image = $CONFIG['default-image'];
            
            return;
        }
        //GETTERS
        public function getMsg()
        {
            return $this->msg;
        }
        public function getUsrName()
        {
            return $this->username;
        }
        public function getAvatarUrl()
        {
            return $this->avatarurl;
        }
        public function getTts()
        {
            return $this->tts;
        }
        public function getUrl(){
            return $this->url;
        }

        //SETTERS
        public function setMsg($_msg)
        {
            $this->msg = $_msg;
            return;
        }
        
        public function setUserName($_userName)
        {
            $this->username = $_userName;
            return;
        }

        public function setAvatarUrl($_avatarurl)
        {
            $this->avatarurl = $_avatarurl;
            return;
        }

        public function setTts($_tts)
        {
            $this->tts = $_tts;
            return;
        }
        
        public function setTitle($_title)
        {
            $this->title = $_title;
            return;
        }

        public function setDescription($_desc)
        {
            $this->description = $_desc;
            return;
        }

        public function setLink($_link)
        {
            $this->link = $_link;
            return;
        }

        public function setColor($_color)
        {
            $this->color = $_color;
            return;
        }

        public function setImage($_image)
        {
            $this->image = $_image;
        }

        public function send()
        {
            $json = json_encode([
                "content" => $this->msg,
                "username" => $this->username,
                "avatar_url" => $this->avatarurl,
                "tts" => false
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            $curl = curl_init($this->url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($curl);
            if($result)
                $_SESSION['webhook-err'] = "Failed to send webhook - reason: ".$result;
            curl_close($curl);
        }
        
        public function sendEmbed()
        {
            $json = json_encode(
            [
                "username" => $this->username,
                "avatar_url" => $this->avatarurl,
                "tts" => false,
                "embeds" => 
                    [
                        [
                        "title" => $this->title,
                        "url" => $this->link,
                        "type" => $this->type,
                        "description" => $this->description,
                        "color" => hexdec($this->color),
                        "timestamp" => date("c",time()),
                        "image" => 
                            [
                                "url" => $this->image
                            ]
                        ]
                    ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

            $curl = curl_init($this->url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            if($result)
                $_SESSION['webhook-err'] = "Failed to send webhook - reason: ".$result;
            curl_close($curl);
        }

    }