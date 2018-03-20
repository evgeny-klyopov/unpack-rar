<?php


namespace Alva\UnpackRar\Console;

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

        var_dump($pathToRar);

//
//        $inOneTable = $input->getArgument('inOneTable');
//        $inOneTable = (null === $inOneTable) ? 1 : (int)$inOneTable;
//        $inOneTable = (0 !== $inOneTable) ? true : false;
//
//        $separatorColumns = $input->getArgument('separatorColumns');
//        $separatorColumns = (null === $separatorColumns) ? ';' : $separatorColumns;
//        $files            = $this->getFiles($pathToCsv);
//
//        $output->writeln('');
//        $output->writeln('<comment>Params:</comment>');
//        $output->writeln('<info><pathToCsv></info>: - ' . $pathToCsv);
//        $output->writeln('<info><inOneTable></info>: - ' . $inOneTable);
//        $output->writeln('<info><separatorColumns></info>: - ' . $separatorColumns);
//        $output->writeln('');
//
//        $output->writeln('<comment>Convert files:</comment>');
//        $output->writeln($files);
//        $output->writeln('');
//
//        $output->writeln('<info>Run ...</info>');
//
//        try {
//            $convertFiles = (new \Alva\CsvToSql\Convert(
//                $files
//                , OUTPUT_DIRECTORY
//                , $inOneTable
//                , $separatorColumns
//            ))->run();
//
//            $output->writeln('');
//            $output->writeln('<comment>Sql files:</comment>');
//            $output->writeln($convertFiles);
//            $output->writeln('');
//
//            $output->writeln('<info>Success</info>');
//        } catch (\Exception $e) {
//            throw new \RuntimeException($e->getMessage());
//        }
    }
}