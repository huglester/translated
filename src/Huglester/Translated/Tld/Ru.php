<?php

namespace Huglester\Translated\Tld;

class Ru implements TldInterface
{

	public function days()
	{
		return array(
			0 => 'Воскресенье',
			1 => 'Понедельник',
			2 => 'Вторник',
			3 => 'Среда',
			4 => 'Четверг',
			5 => 'Пятница',
			6 => 'Суббота',
			7 => 'Воскресенье',
		);
	}

	public function months()
	{
		return array(
			1 => 'Январь',
			'Февраль',
			'Март',
			'Апрель',
			'Май',
			'Июнь',
			'Июль',
			'Август',
			'Сентябрь',
			'Октябрь',
			'Ноябрь',
			'Декабрь',
		);
	}

	public function monthsTo()
	{
		return array(
			1 => 'Января',
			'Февраля',
			'Марта',
			'Апреля',
			'Майя',
			'Июня',
			'Июля',
			'Августа',
			'Сентября',
			'Октября',
			'Ноября',
			'Декабря',
		);
	}



}
