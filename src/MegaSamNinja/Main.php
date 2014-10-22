//*
class Fall implements Plugin{
   private $api;
   
   public function __construct(ServerAPI $api, $server = false){
     $this->api = $api;
   }
   
    public function init(){
    $this->api->console->register("fall", "Sends the person in space", array($this, "fall"));
    $this->api->ban->cmdwhitelist("fall");
    $this->path = $this->api->plugin->configPath($this);
    $this->config = new Config($this->path . "Fall.yml", CONFIG_YAML, array("Jail" => "This will be used in a later version"));
    }
     
    public function fall($cmd, $args, $issuer){
    $username = $issuer->username;
    $this->api->console->run("tp " . $username . " 100 1000 100", "console");
    $this->api->chat->sendTo(false, "You have been TELEPORTED by MAGIC", $username);
   }
   
   public function __destruct(){
   }
}
*//

