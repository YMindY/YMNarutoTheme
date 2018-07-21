<?php
namespace ymind\xming\YMNarutoMind\Ninjitsu;

use ymind\xming\YMNarutoMind\Main;
use pocketmine\event\Listener;

abstract class Ninjitsu implements Listener{
    
    protected $main;
    protected $name = null;
    protected $mudra = null;
    
    public function __construct(Main $main){
        $this->main = $main;
    }
    
    public static function getName(){
        return self::$name;
    }
    
    public function getMudra(){
        return $this->mudra;
    }
    
}