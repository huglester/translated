<?php

namespace Huglester\Translated\Tld;

class En implements TldInterface
{

	public function days()
	{
		return array(
			'Sunday',
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday',
			'Sunday',
		);
	}

	public function months()
	{
		return array(
			1 => 'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December',
		);
	}

	public function monthsTo()
	{
		return $this->months();
	}

	public function monthsShort()
	{
		return array(
			1 => 'Jan',
			'Feb',
			'Mar',
			'Apr',
			'May',
			'Jun',
			'Jul',
			'Aug',
			'Sep',
			'Oct',
			'Nov',
			'Dec',
		);
	}

}
