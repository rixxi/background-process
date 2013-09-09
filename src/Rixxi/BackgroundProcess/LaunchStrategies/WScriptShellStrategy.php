<?php

namespace Rixxi\BackgroundProcess\LaunchStrategies;

use COM;
use Rixxi;
use Nette;


/**
 * This strategy obviously works only on windows systems with WScript shell
 */
class WScriptShellStrategy extends Nette\Object implements Rixxi\BackgroundProcess\ILaunchStrategy
{

	public function launch($commandLine)
	{
		$shell = new COM('WScript.Shell');
		$shell->Run($commandLine, 0, FALSE);
	}

}
