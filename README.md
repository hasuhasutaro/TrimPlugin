# TrimPlugin
装備に簡単に模様を付与するプラグインです。

### 使用方法
```php
use noahasu\trimPlugin\Trim;
use noahasu\trimPlugin\TrimMaterial;
use noahasu\trimPlugin\TrimPattern;

$armor = VanillaItems::IRON_CHESTPLATE();
$newArmor = Trim::createTrimArmor($armor, TrimPattern::Wayfinder, TrimMaterial::Amethyst);
```

##### Trim Class Method
```php
createTrimArmor(Armor $armor, TrimPattern $trimPattern, TrimMaterial $trimMaterial) {}
```

### TrimMaterialのcase一覧
- Amethyst
- Copper
- Diamond
- Emerald
- Gold
- Iron
- Lapis
- Netherite
- Quartz
- Redstone

> 使用例:
  ```php
  TrimMaterial::Copper;
  ```

### TrimPatternのcase一覧
- Coast
- Dune
- Eye
- Host
- Raiser
- Rib
- Sentry
- Shaper
- Silence
- Snout
- Spire
- Tide
- Vex
- Ward
- Wayfinder
- Wild

> 使用例:
  ```php
  TrimPattern::Dune;
  ```
