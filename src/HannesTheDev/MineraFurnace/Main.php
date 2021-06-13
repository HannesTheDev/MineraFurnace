<?php

namespace HannesTheDev\MineraFurnace;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\utils\Config;

class Main extends PluginBase
{

    public $config;
    public $prefix;

    public function onEnable()
    {
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder() . 'config.yml');
        $this->prefix = $this->config->get('prefix');
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool
    {
        switch ($cmd->getName()) {
            case "furnace":
                if ($sender->hasPermission("minerafurnace.furnace.cmd")) {
                    if ($sender instanceof Player) {
                        $item = $sender->getInventory()->getItemInHand();
                        if ($item->getId() === ITEM::COBBLESTONE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::STONE, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('cobblestone'), $message);
                            $message = str_replace('{after}', $this->config->get('clean-stone'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::SAND) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::GLASS, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('sand'), $message);
                            $message = str_replace('{after}', $this->config->get('glass'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === 19 and $item->getDamage() === 1) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::SPONGE, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('wet-sponge'), $message);
                            $message = str_replace('{after}', $this->config->get('sponge'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::COAL_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COAL, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('coal-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('coal'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::IRON_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::IRON_INGOT, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('iron-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('iron'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::GOLD_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::GOLD_INGOT, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('gold-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('gold'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === 21) {
                            $sender->getInventory()->setItemInHand(Item::get(351, 4, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('lapis-lazuli-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('lapis-lazuli'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::DIAMOND_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::DIAMOND, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('diamond-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('diamond'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::REDSTONE_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::REDSTONE, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('redstone-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('redstone'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::EMERALD_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::EMERALD, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('emerald-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('emerald'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::QUARTZ_ORE) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::QUARTZ, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('quartz-ore'), $message);
                            $message = str_replace('{after}', $this->config->get('quarts'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === 17) {
                            if ($item->getDamage() === 1) {
                                $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
                                $message = $this->config->get('prepared');
                                $message = str_replace('{before}', $this->config->get('spruce-wood'), $message);
                                $message = str_replace('{after}', $this->config->get('charcoal'), $message);
                                $message = str_replace('{count}', $item->getCount(), $message);
                                $sender->sendMessage($this->prefix . $message);
                            } elseif ($item->getDamage() === 2) {
                                $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
                                $message = $this->config->get('prepared');
                                $message = str_replace('{before}', $this->config->get('birch-wood'), $message);
                                $message = str_replace('{after}', $this->config->get('charcoal'), $message);
                                $message = str_replace('{count}', $item->getCount(), $message);
                                $sender->sendMessage($this->prefix . $message);
                            } elseif ($item->getDamage() === 3) {
                                $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
                                $message = $this->config->get('prepared');
                                $message = str_replace('{before}', $this->config->get('jungle-wood'), $message);
                                $message = str_replace('{after}', $this->config->get('charcoal'), $message);
                                $message = str_replace('{count}', $item->getCount(), $message);
                                $sender->sendMessage($this->prefix . $message);
                            } else {
                                $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
                                $message = $this->config->get('prepared');
                                $message = str_replace('{before}', $this->config->get('oak-wood'), $message);
                                $message = str_replace('{after}', $this->config->get('charcoal'), $message);
                                $message = str_replace('{count}', $item->getCount(), $message);
                                $sender->sendMessage($this->prefix . $message);
                            }
                        } elseif ($item->getId() === 162) {
                            if ($item->getDamage() === 1) {
                                $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
                                $message = $this->config->get('prepared');
                                $message = str_replace('{before}', $this->config->get('dark-oak-wood'), $message);
                                $message = str_replace('{after}', $this->config->get('charcoal'), $message);
                                $message = str_replace('{count}', $item->getCount(), $message);
                                $sender->sendMessage($this->prefix . $message);
                            } else {
                                $sender->getInventory()->setItemInHand(Item::get(263, 1, $item->getCount()));
                                $message = $this->config->get('prepared');
                                $message = str_replace('{before}', $this->config->get('acacia-wood'), $message);
                                $message = str_replace('{after}', $this->config->get('charcoal'), $message);
                                $message = str_replace('{count}', $item->getCount(), $message);
                                $sender->sendMessage($this->prefix . $message);
                            }
                        } elseif ($item->getId() === ITEM::RAW_BEEF) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_BEEF, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-beef'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-beef'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::RAW_CHICKEN) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_CHICKEN, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-chicken'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-chicken'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::RAW_FISH) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_FISH, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-fish'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-fish'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::RAW_MUTTON) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_MUTTON, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-mutton'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-mutton'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::RAW_PORKCHOP) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_PORKCHOP, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-porkchop'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-porkchop'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::RAW_RABBIT) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_RABBIT, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-rabbit'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-rabbit'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::RAW_SALMON) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::COOKED_SALMON, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('raw-salmon'), $message);
                            $message = str_replace('{after}', $this->config->get('cooked-salmon'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::CACTUS) {
                            $sender->getInventory()->setItemInHand(Item::get(351, 2, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('cactus'), $message);
                            $message = str_replace('{after}', $this->config->get('green-dye'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::POTATO) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::BAKED_POTATO, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('potato'), $message);
                            $message = str_replace('{after}', $this->config->get('baked-potato'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::KELP) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::DRIED_KELP, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('kelp'), $message);
                            $message = str_replace('{after}', $this->config->get('dried-kelp'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::CLAY_BALL) {
                            $sender->getInventory()->setItemInHand(Item::get(ITEM::BRICK, 0, $item->getCount()));
                            $message = $this->config->get('prepared');
                            $message = str_replace('{before}', $this->config->get('clay-ball'), $message);
                            $message = str_replace('{after}', $this->config->get('brick'), $message);
                            $message = str_replace('{count}', $item->getCount(), $message);
                            $sender->sendMessage($this->prefix . $message);
                        } elseif ($item->getId() === ITEM::AIR) {
                            $sender->sendMessage($this->prefix . $this->config->get('emepty-hand'));
                        } else {
                            $sender->sendMessage($this->prefix . $this->config->get('wrong-item'));
                        }
                    } else {
                    $sender->sendMessage($this->prefix . $this->config->get('console'));
                }
                } else {
                    $sender->sendMessage($this->prefix . $this->config->get('no-perm'));
                }
                break;
        }
        return true;
    }
}