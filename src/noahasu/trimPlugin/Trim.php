<?php
namespace noahasu\trimPlugin;

use pocketmine\item\Armor;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\plugin\PluginBase;

use noahasu\trimPlugin\{TrimMaterial, TrimPattern};

class Trim extends PluginBase {
    public static function createTrimArmor(Armor $armor, TrimPattern $trimPattern, TrimMaterial $trimMaterial): Armor {
        $tag = $armor -> getNamedTag();
        $tag -> setTag("Trim", (new CompoundTag())
            -> setString("Pattern", $trimPattern -> value)
            -> setString("Material", $trimMaterial -> value)
        );

        $armor -> setNamedTag($tag);
        return $armor;
    }
}