<?php
namespace Sugarcrm\Sugarcrm\custom\Console\Command;

use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\InstanceModeInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class AteeqsCommand extends Command implements InstanceModeInterface {
	
	protected function configure(){
		$this
			->setName("sugardev:helloworld")
			->setDescription("Hello darkness my old friend")
			->setHelp("This command serves no purpose, instead using it might increase your stupidity level");
	}

	protected function execute(InputInterface $in, OutputInterface $out) {
		$out->writeln("Hello Darkness " . $this->getApplication()->getMode());
	}
}
