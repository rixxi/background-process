<?php

namespace Rixxi\BackgroundProcess;


interface ILauncher
{

	/**
	 * @param string $commandLine
	 * @return void
	 */
	function launch($commandLine);

}
