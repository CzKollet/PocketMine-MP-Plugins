<?php
namespace rp;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  public function onCommand(\pocketmine\command\CommandSender $p, \pocketmine\command\Command $c, string $l, array $a): bool
  {
    switch (strtolower($c->getName())) 
    {
        case "rp":
        $name = $p->getName();
        return true;
    }
  }
}
