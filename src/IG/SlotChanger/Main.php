<?php
namespace IG\SlotChanger;

use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public $cfg;

   public function onEnable() {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveDefaultConfig();
        $this->cfg = $this->getConfig()->getAll();

   }

   public function slotChange(QueryRegenerateEvent $e) {

        $max = $this->cfg['max_count'];
        $count = $this->cfg['player_count'];

        $e->setMaxPlayerCount($max);
        $e->setPlayerCount($count);

   }
}
