<?php

namespace MegaSamNinja;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;

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
               $surprise = "100 1000 100";
               $username = $issuer->username;
               $username->teleport($surprise);//not sure this is correct
               $sender->sendMessage("You have been TELEPORTED by MAGIC");
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

