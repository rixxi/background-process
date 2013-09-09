<?php

namespace Rixxi\BackgroundProcess;

use Nette;


class Launcher extends Nette\Object implements ILauncher
{

	/** @var ILaunchStrategy */
	private $strategy;


	public function __construct(ILaunchStrategy $strategy)
	{
		$this->strategy = $strategy;
	}


	public function launch($commandLine)
	{
		$this->strategy->launch($commandLine);
	}

}
