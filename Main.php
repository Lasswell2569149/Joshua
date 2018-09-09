<?php
class Main extends PluginBase
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
     }
   }
