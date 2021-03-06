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
namespace Tips;
use pocketmine\utils\Config as C;
use pocketmine\Player;
use pocketmine\Server;
class CorePvP extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
	function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		if (!file_exists($this->getDataFolder())) @mkdir($this->getDataFolder(), 0755, true);
		$this->c = new C($this->getDataFolder() . "Config.yml", C::YAML, array("Tips1" => "Text", "Tips2" => "Text", "Tips3" => "Text", "Tips4" => "Text", "Tips5" => "Text",));
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new \pocketmine\scheduler\CallbackTask([$this, 'Tips'], []), 180 * 20);
	}
	public function Tips()
	{
        foreach($this->getServer()->getOnlinePlayers() as $player)
        {
            $rand = mt_rand(1,5);
            if($rand === 1)
            {
                $player->sendMessage($this->c->get("Tips1"));
            } elseif($rand === 2) {
                $player->sendMessage($this->c->get("Tips2"));
            } elseif($rand === 3) {
                $player->sendMessage($this->c->get("Tips3"));
            } elseif($rand === 4) {
                $player->sendMessage($this->c->get("Tips4"));
            } elseif($rand === 5) {
                $player->sendMessage($this->c->get("Tips5"));
            }
        }
    }
}
