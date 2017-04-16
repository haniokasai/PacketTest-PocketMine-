<?php
namespace haniokasai;
/**
 * Created by PhpStorm.
 * User: htek
 * Date: 2017/04/09
 * Time: 0:51
 */

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\network\protocol\SetCommandsEnabledPacket;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class threadtest extends PluginBase implements Listener{
    public function onEnable(){
        Server::getInstance()->getPluginManager()->registerEvents($this,$this);
    }

    public function  onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $pk = new SetCommandsEnabledPacket();
        $pk->enabled= false;
        $player->dataPacket($pk);

        $pk2 = new enablepk();//DataPacketの雛形を呼び出す
        $pk2->en = true;//変数の内容を入力
        $player->dataPacket($pk);
    }



}
