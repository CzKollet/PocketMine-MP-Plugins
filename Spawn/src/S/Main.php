<?php
namespace S;
use pocketmine\Player;
use pocketmine\level\Level;
use pocketmine\event\entity\EntityTeleportEvent;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  public function onMoveTP(\pocketmine\event\player\PlayerMoveEvent $ev) 
  {
    $player = $ev->getPlayer();
    if ($ev->getPlayer()->getY() < 0) 
    {
      $x = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getX();
      $y = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getY();
      $z = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getZ();
      $level = $this->getServer()->getDefaultLevel();
      $player->setLevel($level);
      $player->teleport(new \pocketmine\math\Vector3($x, $y, $z, $level));
    }
  }
}
