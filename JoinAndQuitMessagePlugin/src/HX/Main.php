<?php
namespace HX;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  function onJoinMessage(\pocketmine\event\player\PlayerJoinEvent $event) 
  {
    $event->setJoinMessage(null); //JoinMessageを消す
  }
  function onQuitMessage(\pocketmine\event\player\PlayerQuitEvent $ev)
  {
    $event->setQuitMessage(null); //QuitMessageを消す
  }
}
