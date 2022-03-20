<?php

declare(strict_types=1);

namespace Yiisoft\YiiDevTool\App\Command\Git;

use Symfony\Component\Process\Process;
use Yiisoft\YiiDevTool\App\Component\Console\PackageCommand;
use Yiisoft\YiiDevTool\App\Component\Package\Package;

final class StatusCommand extends PackageCommand
{
    protected static $defaultName = 'git/status';
    protected static $defaultDescription = 'Show git status of packages';

    protected function configure(): void
    {
        $this->setAliases(['status', 's']);

        parent::configure();
    }

    protected function getMessageWhenNothingHasBeenOutput(): ?string
    {
        return '<success>✔ nothing to commit, working trees clean</success>';
    }

    protected function processPackage(Package $package): void
    {
        $io = $this->getIO();
        $io->preparePackageHeader($package, 'Git status of {package}');

        $process = new Process(['git', 'status', '-sb'], $package->getPath());
        $process->run();
        $output = $process->getOutput();

        $branchNameMatches = [];
        preg_match('/##\s(.+)/', $output, $branchNameMatches);

        if (!empty($branchNameMatches[0])) {
            $output = trim(str_replace($branchNameMatches[0], '', $output));
        }

        $branchName = null;
        if (!empty($branchNameMatches[1])) {
            $branchName = $branchNameMatches[1];
        }

        if (empty($output)) {
            $successText = '✔ nothing to commit, working tree clean';

            if (!empty($branchName)) {
                $successText = "[$branchName] $successText";
            }

            $io->important()->success($successText);
            $io->done();
        } else {

            if (!empty($branchName)) {
                $output = "[$branchName]".PHP_EOL.$output;
            }

            $io->important()->info($output);
        }
    }
}
