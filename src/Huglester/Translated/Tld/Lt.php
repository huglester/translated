<?php

namespace Huglester\Translated\Tld;

class Lt implements TldInterface
{

	public function days()
	{
		return array(
			'Sekmadienis',
			'Pirmadienis',
			'Antradienis',
			'Trečiadienis',
			'Ketvirtadienis',
			'Pentradienis',
			'Šeštadienis',
			'Sekamdienis',
		);
	}

	public function months()
	{
		return array(
			1 => 'Sausis',
			'Vasaris',
			'Kovas',
			'Balandis',
			'Gegužė',
			'Birželis',
			'Liepa',
			'Rugpjūtis',
			'Rugsėjis',
			'Spalis',
			'Lapkritis',
			'Gruodis',
		);
	}

	public function monthsTo()
	{
		return array(
			1 => 'Sausio',
			'Vasario',
			'Kovo',
			'Balandžio',
			'Gegužės',
			'Birželio',
			'Liepos',
			'Rugpjūčio',
			'Rugsėjo',
			'Spalio',
			'Lapkričio',
			'Gruodžio',
		);
	}

	public function monthsShort()
	{
		return array(
			1 => 'Sau',
			'Vas',
			'Kov',
			'Bal',
			'Geg',
			'Bir',
			'Lie',
			'Rug',
			'Rug',
			'Spa',
			'Lap',
			'Gru',
		);
	}

}
