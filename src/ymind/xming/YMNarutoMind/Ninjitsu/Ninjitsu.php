<?php
namespace ymind\xming\YMNarutoMind\Ninjitsu;

use ymind\xming\YMNarutoMind\Main;
use pocketmine\event\Listener;

abstract class Ninjitsu implements Listener{
    
    protected $main;
    
    public function __construct(Main $main){
        $this->main = $main;
    }
}