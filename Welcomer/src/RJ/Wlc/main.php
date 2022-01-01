<?php namespace RJ\Wlc;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

public function onEnable() : void {

$this->GetServer()->getPluginManager()->registerEvents(new EventListener(), $this);
$this->GetLogger()->info("Successfully enabled Welcomer.");

}

}

