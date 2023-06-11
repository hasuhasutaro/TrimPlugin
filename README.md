# TrimPlugin
装備に簡単に模様をつけるプラグインです。

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
createTrimArmor(Armor $armor, string $trimPattern, TrimMaterial $trimMaterial) {}
```
___

### オリジナルの模様を指定する
createTrimArmorの$trimPatternにオリジナルの模様の名前を渡してください。
```php
Trim::createTrimArmor($armor, 'original trim', TrimMaterial::Amethyst);
```
※ 模様はテクスチャパックで追加する必要があります。
※ TrimMaterialは追加不可(現状追加するとアイテムが透明になるため)
___

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

> コード例:
  ```php
  TrimMaterial::Copper;
  ```
___

### TrimPatternの定数一覧
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

> コード例:
  ```php
  TrimPattern::Dune;
  ```
