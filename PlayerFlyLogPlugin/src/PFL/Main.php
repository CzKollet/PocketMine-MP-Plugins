<?php
/*
        ///////    ///////  ///////   ///////  ///////      ////////            /////// ///////  //////   ///////
         ///        ///      ///       ///      ///      ///        ///          ///     ///      ///      ///
        ///        //////   ///       ///    ///      ///              ///      ///     ///         /// ///
       ///        ///  /// ///       ////////         ///              ///     ///////////            ///
      ///        ///   //////       ///     ///       ///              ///    ///     ///          ///  ///
     ///        ///      ///       ///        ///        ///        ///      ///     ///        ///       ///
  ///////    ///////  ///////   ///////    ///////          ////////      /////// ///////    ///////   ///////
    このPluginはInkoHXによって制作されました。
    URL: https://github.com/InkoHX/PocketMine-MP-Plugins
*/
namespace PFL;
use pocketmine\Player;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  function FlyLog(\pocketmine\event\player\PlayerToggleFlightEvent $ev)
  {
    $player = $ev->getPlayer();
		if($ev->isFlying())
    {
			$this->Admin("§l§c【警告】§6 " . $player->getName() . " §cはFlyを使用しました");
		} else {
			$this->Admin("§l§c【警告】§6 " . $player->getName() . " §cはFlyを使用しました");
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
    
