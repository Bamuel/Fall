<?php

namespace MegaSamNinja;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;

class Main extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info("Fall has been enabled.");
    }
    
    public function onDisable(){
        $this->getLogger()->info("You have disable THIS AWESOME CODE FALL");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
            case "fall":
            if($sender instanceof Player) //thanks Falk
               $surprise = "100 1000 100";
               $sender->getName(); //thanks Falk
               $sender->teleport($surprise);
               $sender->sendMessage("You have been TELEPORTED by MAGIC");
               return true;
               break;
   }
            else {
               $sender->sendMessage("Please run command in game.");
               $sender->sendMessage("Seriously do you think this plugin will work via Console");
               return true;
   }
    
/*
class Fall implements Plugin{
   private $api;
   
   public function __construct(ServerAPI $api, $server = false){
     $this->api = $api;
   }
   
    public function init(){
    $this->api->console->register("fall", "Sends the person in space", array($this, "fall"));
    $this->api->ban->cmdwhitelist("fall");
    $this->path = $this->api->plugin->configPath($this);
    $this->config = new Config($this->path . "Fall.yml", CONFIG_YAML, array("fall" => "This will be used in a later version"));
    }
     
    public function fall($cmd, $args, $issuer){
    $username = $issuer->username;
    $this->api->console->run("tp " . $username . " 100 1000 100", "console");
    $this->api->chat->sendTo(false, "You have been TELEPORTED by MAGIC", $username);
   }
   
   public function __destruct(){
   }
}
*/

