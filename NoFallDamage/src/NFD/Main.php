<?php
namespace NFD;
use pocketmine\Server;
use pocketmime\Player;
use pocketmine\event\entity\EntityDamageEvent;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener {
  function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  )
  public function onEntityEventDamage(EntityDamageEvent $event) {
        if ($event->getCause() == EntityDamageEvent::CAUSE_VOID or $event->getCause() == EntityDamageEvent::CAUSE_FALL) {
            $event->setCancelled();
        }
    }
}
