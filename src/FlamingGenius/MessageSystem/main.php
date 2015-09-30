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
   $this->getServer()->broadcastMessage("§4[Broadcast]§6" . " " . $msg);
  }

  elseif(strtolower($cmd) == "bgod"){
   $this->getServer()->broadcastMessage("§b[GOD]§6" . " " . $msg);
  }

  elseif(strtolower($cmd) == "bhero"){
   $this->getServer()->broadcastMessage("§a[HEROBRINE§6" . " " . $msg);
  }

  elseif(strtolower($cmd) == "announce"){
   $this->getServer()->broadcastMessage("§e[Announce]§6" . " " . $msg);
  }

  elseif(strtolower($cmd) == "server"){
   $this->getServer()->broadcastMessage("§l§f[Server]§6" . " " . $msg);
  }

  elseif(strtolower($cmd) == "console"){
   $this->getServer()->broadcastMessage("§8[Console]§8" . " " . $msg);
  }


 }



}

?>
