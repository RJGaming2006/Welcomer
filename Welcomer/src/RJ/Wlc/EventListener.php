<?php namespace RJ\Wlc;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class EventListener implements Listener {

    public function onJoin(PlayerJoinEvent $event) : void
    {
        $player = $event->getPlayer();
        $joinMessage = [
            "",
            "           §l§dOrix§5MC",
            "§l§dSTORE:§r§f store.orixmc.net",
            "§l§dTWITTER:§r§f orixmcpe  ",
            "§d§lDISCORD:§r§f discord.orixmc.net",
            ""
        ];
        $player->sendMessage(join("\n", $joinMessage));//sends a message to the player - the join() joins all the arrays with a line break (\n)
        $event->setJoinMessage("§2 + §a" . $player->getName());//u dont need to define $event because its defined in the onJoin(EVENT VAR)
    }
// oofies
    public function onQuit(PlayerQuitEvent $event) : void {
        $player = $event->getPlayer();
        $event->setQuitMessage("§4 - §c" . $player->getName());
    }
}