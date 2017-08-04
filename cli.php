<?php
namespace Sugarcrm\Sugarcrm\custom\Console\Command;

use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\InstanceModeInterFace;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class ateeqsClass extends Command implements InstanceModeInterFace {
	
	protected function configure(){
		$this
			->setName("Hello Darkness");
			->setDescription("Hello darkness my old friend");
			->setHelp("This command serves no purpose, instead using it might increase your stupidity level");
	}

	protected function execute(InputInterface $in, OutputInterface $out) {
		$out->writeln("Hello Darkness " . $this->getApplication()->getMode());
	}
}
