<?php
namespace haniokasai;
use pocketmine\network\protocol\DataPacket;

/**
 * Created by PhpStorm.
 * User: htek
 * Date: 2017/04/16
 * Time: 22:41
 */


#include <rules/DataPacket.h>
class enablepk extends DataPacket{

    const NETWORK_ID = "0x3c";

    public $en;/*変数を、パケットの必要とする引数の数だけ書きます。　

呼び出しは
　
*/

    public function decode(){//mcpe->serverのパケットに関する処理
    }

    public function encode(){//server->mcpeのパケットに関する処理
        $this->reset();//お掃除
        $this->putBool($this->en);//libminecraftpe.soにgetBoolと書かれているので、型を合わせるのでputBoolとします。
    }
}
