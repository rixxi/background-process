<?php
namespace Rixxi\BackgroundProcess\LaunchStrategies;

use Rixxi;
use Nette;


/**
 * This strategy obviously works only on *nix systems
 */
class DetachedStrategy extends Nette\Object implements Rixxi\BackgroundProcess\ILaunchStrategy
{

	public function launch($commandLine)
	{
		exec("nohup $commandLine > /dev/null 2> /dev/null  < /dev/null &");
	}

}
