<?php
namespace rp;
use pocketmine\Player;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  public function onCommand(\pocketmine\command\CommandSender $p, \pocketmine\command\Command $c, string $l, array $a): bool
  {
    switch (strtolower($c->getName())) 
    {
        case "rp":
        $name = $p->getName();
        /*
        $p
        */
        return true;
    }
  }
  public function Admin($m) 
  {
    foreach($this->getServer()->getOnlinePlayers() as $player) 
    {
        if($player->isOp()) 
        {
           $player->sendMessage($m);
	}
    }
    $this->getLogger()->info($m);
  }
}
