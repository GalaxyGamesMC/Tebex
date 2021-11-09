<?php

declare(strict_types=1);

namespace muqsit\tebex\handler\due\playerlist\indexer;

use InvalidArgumentException;
use muqsit\tebexapi\endpoint\queue\TebexDuePlayer;
use pocketmine\player\Player;

final class XuidBasedPlayerIndexer implements PlayerIndexer{

	public function __construct(){
	}

	public function fromPlayer(Player $player) : string{
		$xuid = $player->getXuid();
		if($xuid === ""){
			throw new InvalidArgumentException("Cannot retrieve XUID of player: {$player->getName()}");
		}
		return $xuid;
	}

	public function fromTebexDuePlayer(TebexDuePlayer $player) : string{
		$xuid = $player->getUuid(); // Tebex player uuids in Minecraft: Bedrock Edition (Online) mode is xbox's xuid
		if($xuid === null){
			throw new InvalidArgumentException("Cannot retrieve XUID of Tebex due player: {$player->getName()}");
		}
		return $xuid;
	}
}