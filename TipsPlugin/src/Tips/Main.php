<?php
/*
        ///////    ///////  ///////   ///////  ///////      ////////            /////// ///////  //////   ///////
         ///        ///      ///       ///      ///      ///        ///          ///     ///      ///      ///
        ///        //////   ///       ///    ///      ///              ///      ///     ///         /// ///
       ///        ///  /// ///       ////////         ///              ///     ///////////            ///
      ///        ///   //////       ///     ///       ///              ///    ///     ///          ///  ///
     ///        ///      ///       ///        ///        ///        ///      ///     ///        ///       ///
  ///////    ///////  ///////   ///////    ///////          ////////      /////// ///////    ///////   ///////

    @LINCENSE
    このPluginはInkoHXによって制作されました。
    作成者の名前を変えて配布したり・Pluginの名前だけを変えて配布したり・このPLuginを有料配布するのはやめて下さい。(PluginName 作者名がそのままであれば改造配布しても構いません。ですが https::github.com/InkoHX/PocketMine-MP-Plugins/TipsPlugin このURLも紹介して下さい。)
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
