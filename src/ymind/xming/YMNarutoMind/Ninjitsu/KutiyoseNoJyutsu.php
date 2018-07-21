<?php
//通灵之术
namespace ymind\xming\YMNarutoMind\Ninjitsu;



class KutiyoseNoJyutsu extends Ninjitsu{

    protected $name = "通灵之术";
    protected $mudra = "亥戌酉申未";
    
    public function launch(array $param){
        $this->main->broadcastMessage("忍术".$name."已发动!");
    }
    
    
}