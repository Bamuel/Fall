<?php
namespace megasamninja\fall;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements CommandExecutor{
    
    public function onEnable() {
    	@mkdir($this->getDataFolder());
        $this->configFile = (new Config($this->getDataFolder()."config.yml", Config::YAML, array(
            "Y-Axis" => "1000"
        )))->getAll();
        $this->getLogger()->info("Fall has been enabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if($sender instanceof Player){
           $sender->teleport(new Vector3(100, $this->configFile['Y-Axis'], 100));
           $sender->sendMessage("You have been TELEPORTED by MAGIC");
           return true;
        }
        else {
           $sender->sendMessage("Please run command in game.");
           $sender->sendMessage("Seriously do you think this plugin will work via Console");
           return true;
        }
   }
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
