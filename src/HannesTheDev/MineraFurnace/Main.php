<?php

namespace HannesTheDev\MineraFurnace;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;
use pocketmine\item\Item;

class Main extends PluginBase
{
  
  public function onLoad()
  {
    $this->getLogger()->info(TF::GREEN . "Load Plugin...");
  }
  
  public function onEnable()
  {
    $this->getLogger()->info(TF::GREEN . "Plugin activated!");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool
  {
    switch ($cmd->getName()) {
      case "furnace":
        $prefix = "§8[§6§lMinera§r§8] §r";
        if ($sender->hasPermission("minera.furnace.command")) {
          if ($sender instanceof Player) {
            $item = $sender->getInventory()->getItemInHand();
            if ($item->getId() == ITEM::COBBLESTONE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::STONE, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aCobblestone §7to §aClean Stone§7! (§a" . $item->getCount() . "§7x)");
            } elseif ($item->getId() == ITEM::SAND) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::GLASS, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aSand §7to §aGlass§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::SPONGE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::WET_SPONGE, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully dried §aWet Sponge §7to §aSponge§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::SAND) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::GLASS, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aSand §7to §aGlass§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::COAL_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COAL, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aCoal Ore §7to §aCoal§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::IRON_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::IRON_INGOT, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aIron Ore §7to §aIron§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::GOLD_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::GOLD_INGOT, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aGold yorr §7to §aGold§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::LAPIS_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::LAPIS, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aLapis Ore §7to §aLapis§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::DIAMOND_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::DIAMOND, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aDiamond Ore §7to §aDiamond§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::REDSTONE_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::REDSTONE, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aRedstone Ore §7to §aRedstone§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::EMERALD_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::EMERALD, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aEmerald Ore §7to §aEmerald§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::QUARTZ_ORE) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::QUARTZ, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aQuarz Ore §7to §aQuarz§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == 17) {
              $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aOak Wood §7to §aCharcoal§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == "17:1") {
              $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aSpruce Wood §7to §aCharcoal§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == "17:2") {
              $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aBirch Wood §7to §aCharcoal§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == "17:3") {
              $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aJungle Wood §7to §aCharcoal§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == 162) {
              $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aAcacia Wood §7to §aCharcoal§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == "162:1") {
              $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aDark Oak Wood §7to §aCharcoa§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_BEEF) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_BEEF, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Beef §7to §aCooked Beef§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_CHICKEN) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_CHICKEN, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Chikrn §7to §aCooked Chicken§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_FISH) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_FISH, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Fish §7to §aCooked Fish§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_MUTTON) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_MUTTON, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Mutton §7to §aCooked Mutton§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_PORKCHOP) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_PORKCHOP, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Porkchop §7to §aCooked Porkchop§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_RABBIT) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_RABBIT, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Rabbit §7to §aCooked Rabbit§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::RAW_SALMON) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_SALMON,0,$item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully cook §aRaw Salmon §7to §aCooked Salmon§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::CACTUS) {
              $sender->getInventory()->setItemInHand(Item::get(351, 2, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully smelt §aCactus §7to §aGreen Dye§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::POTATO) {
              $sender->getInventory()->setItemInHand(Item::get(ITEM::BAKED_POTATO, 0, $item->getCount()));
              $sender->sendMessage($prefix . "§7You've successfully bake §aPotato §7to §aBaked Potato§7! (§a" . $item->getCount() . "x§7)");
            } elseif ($item->getId() == ITEM::AIR){
              $sender->sendMessage($prefix . "§cYou must hold an Item in your hand!");
            } else {
              $sender->sendMessage($prefix . "§cYou can't smelt/cook/bake that Item!");
            }
          } else {
            $sender->sendMessage($prefix . "§cYou must be a Player to use this Command!");
          }
        } else {
          $sender->sendMessage($prefix . "§cYou haven't permission to use this Command");
        }
        break;
    }
    return true;
  }
  
  public function onDisable()
  {
    $this->getLogger()->info(TF::GREEN . "Plugin deactivated!");
  }
}