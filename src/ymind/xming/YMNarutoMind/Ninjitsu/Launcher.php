<?php
namespace ymind\xming\YMNarutoMind\Ninjitsu;

use pocketmine\{Thread,Player};
use ymind\xming\YMNarutoMind\Main;

class Launcher extends Thread{
    
    private static $main;
    private $param;
    
    private function explodeMudra(string $mudra):array{
        return preg_split('/(?<!^)(?!$)/u' , $str);
    }
    
    public static function setMain(Main $main){
        self::$main = $main;
    }
    
    public function setParams(Ninjitsu $n,Player $p){
        $this->param = array($n,$p);
    }
    
    public function run(){
        $n = $this->param[0];
        $p = $this->param[1];
        $mudra = $n->getMudra();
        $muarr = $this->explodeMudra($mudra);
        //$munum = count($muarr);
        $name = $n->getName();
        $p->sendMessage("你要发动忍术: ".$name."\n开始结印! [".$mudra."]");
        foreach($muarr as $mu){
            $p->sendTip("结印: ".$mu);
            usleep(1000000/2);
        }
        $p->sendMessage("结印完成，忍术发动!");
        self::$main->broadcastMessage(">>>>>>>>>>\n一名玩家发动了忍术!\n  [结印: ".$mudra."]\n[忍术: ".$name."]");
        $n->launch($this->param);
    }
}