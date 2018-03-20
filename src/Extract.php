<?php
/**
 * Created by PhpStorm.
 * User: klepov.e
 * Date: 20.03.2018
 * Time: 20:23
 */

namespace Alva\UnpackRar;

use Symfony\Component\Console\Output\OutputInterface;

class Extract
{

    /**
     * Extract constructor.
     *
     * @param mixed           $pathToRar
     * @param mixed|string    $outputPath
     * @param OutputInterface $outputInterface
     */
    public function __construct(string $pathToRar, string $outputPath, OutputInterface $outputInterface = null)
    {
        if($outputInterface) {

            $outputInterface->writeln('test');
        }
    }

    public function run(): void
    {

    }


}