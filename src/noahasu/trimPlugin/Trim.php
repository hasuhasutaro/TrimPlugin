<?php
namespace noahasu\trimPlugin;

use pocketmine\item\Armor;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\plugin\PluginBase;

use noahasu\trimPlugin\TrimMaterial;

class Trim extends PluginBase {
    /**
     * アーマーをトリミングします。
     * @param Armor $armor 対象となる装備
     * @param String $trimPattern 装備の模様。オリジナルも指定可能。
     * @param TrimMaterial $trimMaterial 装備の色。オリジナル指定するとバグる。
     */
    public static function createTrimArmor(Armor $armor, string $trimPattern, TrimMaterial $trimMaterial): Armor {
        $tag = $armor -> getNamedTag();
        $tag -> setTag("Trim", (new CompoundTag())
            -> setString("Pattern", $trimPattern)
            -> setString("Material", $trimMaterial -> value)
        );

        $armor -> setNamedTag($tag);
        return $armor;
    }
}