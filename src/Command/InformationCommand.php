<?php

namespace App\Command;

use Ilyaotinov\CLI\AbstractCommand;

class InformationCommand extends AbstractCommand
{

    public function handle(): void
    {
        $arguments = $this->getInputArguments();
        $options = $this->getInputOptions();

        $this->output->writeln('Arguments: ');
        foreach ($arguments as $argument) {
            $this->output->write('  - ');
            $this->output->writeln($argument->getValue());
        }

        $this->output->writeln('');
        $this->output->writeln('Options: ');
        foreach ($options as $option) {
            $optionValues = $option->getValues();
            $this->output->write('Name: ');
            $this->output->writeln($option->getName());
            $this->output->writeln('Values:');
            foreach ($optionValues as $value) {
                $this->output->write('  - ');
                $this->output->writeln($value);
            }
        }
    }
}