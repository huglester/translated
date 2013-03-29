<?php

namespace Huglester\Translated;
use Symfony\Component\Finder\Finder;

class Date
{
	protected $to = null;
	protected $from = 'en';
	protected $mode = 'basic';
	
	protected $validLanguages = array(
		'en',
		'lt',
		'ru',
	);

	public function setFrom($lang)
	{
		if ( ! in_array(strtolower($lang), $this->validLanguages))
		{
			throw new \Exception("Invalid FROM language specified.");
		}

		$this->from = $lang;

		return $this;
	}

	public function setMode($mode)
	{
		$this->mode = ($mode == 'to') ? 'to' : $this->mode;

		return $this;
	}

	public function setTo($lang)
	{
		if ( ! in_array(strtolower($lang), $this->validLanguages))
		{
			throw new \Exception("Invalid TO language specified.");
		}

		$this->to = $lang;

		return $this;
	}

	public function tr($str, $to = null, $from = null)
	{	
		// Set up languages if given
		($to) and $this->setTo($to);
		($from) and $this->setFrom($from);

		if ( ! $this->to)
		{
			throw new \Exception("TO language should be specified.");
		}

		// No need to translate
		if ($this->from === $this->to) { return $str; }

		$from_class = 'Huglester\Translated\Tld\\'.ucfirst($this->from);
		$to_class = 'Huglester\Translated\Tld\\'.ucfirst($this->to);

		$from_class = new $from_class;
		$to_class = new $to_class;

		// Kovo instaed of: Kovas
		// Мaртa instead of: Март etc..
		$mode = ($this->mode === 'to') ? 'monthsTo' : 'months';

		$from_array = array_merge($from_class->$mode(), $from_class->days());
		$to_array = array_merge($to_class->$mode(), $to_class->days());
		
		return str_replace($from_array, $to_array, $str);
	}

/*	protected function _prep_languages()
	{
		$finder = new Finder();

		foreach ($finder->files()->in(__DIR__.'/Tld') as $file)
		{
			$lang = str_replace('.php', '', $file->getFilename());

			// only add Tld.php files, without interface, etc
			(strlen($lang) === 2) and $this->validLanguages[] = strtolower($lang);
		}
	}*/

}