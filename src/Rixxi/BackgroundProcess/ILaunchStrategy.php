<?php

namespace Rixxi\BackgroundProcess;


interface ILaunchStrategy
{

	/**
	 * @param string $commandLine
	 * @return void
	 */
	function launch($commandLine);

}
