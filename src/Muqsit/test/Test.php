<?php
namespace Muqsit\test;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\ComamndSender;
use pocketmine\command\CommandExecutor;

class Test extends PluginBase{
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        $commandName = $command->getName();
            if($commandName === "helpme"){
        $sender->sendMessage("§bUsage: §e/helpme <vote|donate>");
      return true;
    }
    return false;
  }
}
