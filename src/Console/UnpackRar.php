<?php


namespace Alva\UnpackRar\Console;

use Alva\UnpackRar\Extract;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class UnpackRar extends Command
{
    /**
     *  Configure command
     */
    protected function configure()
    {
        $this
            ->setName('app:unpackrar')
            ->setDescription('Unpack file rar to dir')
            ->addArgument(
                'pathToRar',
                InputArgument::REQUIRED,
                'path to rar file'
            )
            ->addArgument(
                'outputPath',
                InputArgument::OPTIONAL,
                'output directory'
            )
            ->setHelp('Example:' . PHP_EOL
                . './unpack-rar /path/to/file.rar /output/directory/' . PHP_EOL
                . './unpack-rar /path/to/file.rar' . PHP_EOL
            )
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @throws \RuntimeException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Start</info>');

        $pathToRar = $input->getArgument('pathToRar');

        $outputPath = $input->getArgument('outputPath');
        $outputPath = $outputPath ?? PATH . DS;

        $output->writeln('');
        $output->writeln('<comment>Params:</comment>');
        $output->writeln('<info><pathToRar></info>: - ' . $pathToRar);
        $output->writeln('<info><outputPath></info>: - ' . $outputPath);
        $output->writeln('');

        $output->writeln('<comment>Unpack:</comment>');
        $output->writeln('');

        $output->writeln('<info>Run ...</info>');

        try {
            (new Extract($pathToRar, $outputPath))->run();

//            $output->writeln('');
//            $output->writeln('<comment>Sql files:</comment>');
//            $output->writeln($convertFiles);
//            $output->writeln('');

            $output->writeln('<info>Success</info>');
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage());
        }
    }
}