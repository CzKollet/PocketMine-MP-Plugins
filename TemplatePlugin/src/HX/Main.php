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

//use pocketmine\event\PlayerJoinEvent; など

class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  function onEnable() //Pluginが有効になった時
  {
    $this->getLogger()->info("TemplatePlugin Load"); コンソールにメッセージ送信
  }
  function onDisable()  //Pluginが無効になった時
  {
    $this->getLogger()->info("TemplatePlugin UnLoad"); コンソールにメッセージ送信
  }
}
