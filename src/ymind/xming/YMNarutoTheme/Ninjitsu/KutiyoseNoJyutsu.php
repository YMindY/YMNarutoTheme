<?php
//通灵之术
namespace ymind\xming\YMNarutoTheme\Ninjitsu;

use pocketmine\Player;

class KutiyoseNoJyutsu extends Ninjitsu{

    protected $name = "通灵之术";
    protected $mudra = "亥戌酉申未";
    
    public function launch(Player $p,array $param){
        $this->main->broadcastMessage("忍术".$name."已发动!");
    }
}