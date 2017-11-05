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
namespace HX;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  function onJoinMessage(\pocketmine\event\player\PlayerJoinEvent $ev) 
  {
    $ev->setJoinMessage(null); //JoinMessageを消す
  }
  function onQuitMessage(\pocketmine\event\player\PlayerQuitEvent $ev)
  {
    $ev->setQuitMessage(null); //QuitMessageを消す
  }
}
