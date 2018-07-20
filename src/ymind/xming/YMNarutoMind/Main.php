<?php
namespace ymind\xming\YMNarutoMind;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use ymind\xming\YMNarutoMind\Ninjitsu\{
    KutiyoseNoJyutsu,
    RaitonChitori
};

class Main extends PluginBase
{
    private $NinjitsuName = [
        "通灵之术" => KutiyoseNoJyutsu::class,
        "雷遁-雷切" => RaitonChitori::class
    ];
    
    private $Ninjitsu = [];

    public function onEnable()
    {
        $this->getLogger()->notice('|YMNarutoMind| 已启动！ 作者xMing');
        //@mkdir($this->getDataFolder(), 0700, true);
        foreach($this->NinjitsuName as $nn => $cn){
            $this->Ninjitsu[$nn] = new $cn($this);
            $this->getServer()->getPluginManager()->registerEvents($this->Ninjitsu[$nn], $this);
            $this->getLogger()->info('--忍术 ['.$nn.'] 已加载!');
        }
    }

    public function onDisable()
    {
        $this->getLogger()->warning('|YMNarutoMind| 已关闭！ 作者xMing');
    }
}