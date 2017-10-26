<?php

namespace HX;

//use

class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener 
{
  function onEnable() 
  {
    $this->getLogger()->info("TemplatePlugin Load");
  }
}
