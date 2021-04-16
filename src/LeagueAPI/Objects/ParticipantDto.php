<?php

/**
 * Copyright (C) 2016-2021  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class ParticipantDto
 *
 * Used in:
 *   match (v4)
 *     - @see LeagueAPI::getMatchByTournamentCode
 *       @link https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see LeagueAPI::getMatch
 *       @link https://developer.riotgames.com/apis#match-v4/GET_getMatch
 *
 * @linkable getStaticChampion($championId)
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class ParticipantDto extends ApiObjectLinkable
{
	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var int $participantId
	 */
	public $participantId;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var int $championId
	 */
	public $championId;

	/**
	 * List of legacy Rune information. Not included for matches played with
	 * Runes Reforged.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var RuneDto[] $runes
	 */
	public $runes;

	/**
	 * Participant statistics.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var ParticipantStatsDto $stats
	 */
	public $stats;

	/**
	 * 100 for blue side. 200 for red side.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var int $teamId
	 */
	public $teamId;

	/**
	 * Participant timeline data.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var ParticipantTimelineDto $timeline
	 */
	public $timeline;

	/**
	 * First Summoner Spell id.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var int $spell1Id
	 */
	public $spell1Id;

	/**
	 * Second Summoner Spell id.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var int $spell2Id
	 */
	public $spell2Id;

	/**
	 * Highest ranked tier achieved for the previous season in a specific
	 * subset of queueIds, if any, otherwise null. Used to display border in
	 * game loading screen. Please refer to the Ranked Info documentation.
	 * (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER,
	 * BRONZE, UNRANKED).
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var string $highestAchievedSeasonTier
	 */
	public $highestAchievedSeasonTier;

	/**
	 * List of legacy Mastery information. Not included for matches played
	 * with Runes Reforged.
	 *
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchByTournamentCode
	 *   - @see LeagueAPI::getMatch
	 *
	 * @var MasteryDto[] $masteries
	 */
	public $masteries;
}
