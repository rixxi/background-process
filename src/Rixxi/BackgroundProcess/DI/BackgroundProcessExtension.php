<?php

namespace Rixxi\BackgroundProcess\DI;

use Nette;


class BackgroundProcessExtension extends Nette\DI\CompilerExtension
{

	public function loadConfiguration()
	{
		$container = $this->getContainerBuilder();

		if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
			$strategyClassName = 'Rixxi\\BackgroundProcess\\LaunchStrategies\\WScriptShellStrategy';

		} else {
			$strategyClassName = 'Rixxi\\BackgroundProcess\\LaunchStrategies\\DetachedStrategy';
		}

		$container->addDefinition($this->prefix('strategy'))
			->setClass($strategyClassName);

		$container->addDefinition($this->prefix('launcher'))
			->setClass('Rixxi\\BackgroundProcess\\Launcher', array($this->prefix('@strategy')));
	}

}
