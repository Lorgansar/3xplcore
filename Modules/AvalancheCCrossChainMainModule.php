<?php declare(strict_types = 1);

/*  Idea (c) 2023 Nikita Zhavoronkov, nikzh@nikzh.com
 *  Copyright (c) 2023 3xpl developers, 3@3xpl.com, see CONTRIBUTORS.md
 *  Distributed under the MIT software license, see LICENSE.md  */

/*  This module processes avalanche cross-chain transfers that involve c-chain on either side. Special microservice API by Blockchair is needed (see https://github.com/Blockchair/avax-atomic-unpacker). */

final class AvalancheCCrossChainMainModule extends AvalancheCCrossChainLikeMainModule implements Module 
{
	function initialize() 
	{
		// CoreModule
		$this->blockchain = 'avalanche';
		$this->module = 'avalanche-c-crosschain';
		$this->is_main = false;
		$this->first_block_date = '2020-09-23';
		$this->first_block_id = 1;

		// AvalancheCCrossChain-like
		$this->main_token_descr = [
			'name' => 'Avalanche', 
			'symbol' => 'AVAX', 
			'decimals' => '9', 
			'id' => 'FvwEAhmxKfeiG8SnEvq42hc6whRyY3EFYAvebMqDNDGCgxN5Z'
		];
	}
}