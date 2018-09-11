<?php
class Main/Heal extends PluginBase
{
   public function onEnable()
   {
     $this->getLogger()->info("Plugin aktiviert")
   }
   
   public function onCommand(CommandSender $sender, Command $cmd, array $args)
   {
     switch($cmad->getName() {
         case "info":
             $sender->sendMessage (TextFormat: :Yellow Herzliche Willkommen auf dem Server,". TextFormat: :AQUA . $sender->getName() . TextFormat: :Yellow . "!");
             return true;
         case "heal":
             if($sender instanceof Player){
                 $sender->sendMessage(TextFormat: :Green . "Leben gefüllt!");
                 $sender->setHealth(20);
                 return true;
             } else{
                 $sender->sendMessage(TextFormat: :Red . "Du must ein Spieler sein, um diesen Befehl auszuführen!");
                 return true;
             }
         case "broadcast": // broadcast hier eine nachricht
             if (count($args) >=1){
                  $nachricht = implode(" ", $args);
                  $this->getServer()->broadcastMessage($nachricht)
                  return true;
             } else{
                  $sender->sendMessage(TextFormat: :Yellow . "Usage:" . $cmd->getUsage());
                  return true;
             }
     }
  }
