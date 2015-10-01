<?php

namespace FlamingGenius\MessageSystem;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;


class main extends PluginBase{

 public function onEnable(){
  $this->saveDefaultConfig();
 
 }

 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  $cmd = $command->getName();
  $msg = implode(" " , $args);
  
  if(strtolower($cmd) == "broadcast"){
   $tag = $this->getConfig()->get("broadcast-tag");
   $color = $this->getConfig()->get("broadcast-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }

  elseif(strtolower($cmd) == "bgod"){
   $tag = $this->getConfig()->get("bgod-tag");
   $color = $this->getConfig()->get("bgod-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }

  elseif(strtolower($cmd) == "bhero"){
   $tag = $this->getConfig()->get("bhero-tag");
   $color = $this->getConfig()->get("bhero-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }

  elseif(strtolower($cmd) == "announce"){
   $tag = $this->getConfig()->get("announce-tag");
   $color = $this->getConfig()->get("announce-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }

  elseif(strtolower($cmd) == "server"){
   $tag = $this->getConfig()->get("server-tag");
   $color = $this->getConfig()->get("server-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }

  elseif(strtolower($cmd) == "console"){
   $tag = $this->getConfig()->get("console-tag");
   $color = $this->getConfig()->get("console-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }
  
  elseif(strtolower($cmd) == "bcia"){
   $tag = $this->getConfig()->get("bcia-tag");
   $color = $this->getConfig()->get("bcia-color");
   $this->getServer()->broadcastMessage($color . $tag . " " . $msg);
  }


 }



}

?>
