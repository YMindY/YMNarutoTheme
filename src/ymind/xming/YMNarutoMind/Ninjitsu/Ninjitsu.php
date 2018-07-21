<?php
namespace ymind\xming\YMNarutoMind\Ninjitsu;

use ymind\xming\YMNarutoMind\Main;
use pocketmine\event\Listener;
use pocketmine\Player;

abstract class Ninjitsu implements Listener{
    
    protected $main;
    protected $name = null;
    protected $mudra = null;
    
    public function __construct(Main $main){
        $this->main = $main;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getMudra(){
        return $this->mudra;
    }
    
    //忍术初始执行
    public function startLauncher(Ninjitsu $n,Player $p){
        $launcher = new Launcher();
        $launcher->setParams($n,$p);
    }
    
    //忍术发动
     abstract public function launch(array $param);
}