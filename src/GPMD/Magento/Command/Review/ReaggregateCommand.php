<?php

namespace GPMD\Magento\Command\Review;

use N98\Magento\Command\AbstractMagentoCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\ChoiceQuestion;

class ReaggregateCommand extends AbstractMagentoCommand
{
    protected function configure()
    {
        $this
            ->setName('reviews:reaggregate')
            ->setDescription('Reaggregate all reviews')
        ;
    }
    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->detectMagento($output);
        if ($this->initMagento()) {
            $reviews = \Mage::getModel('review/review_collection');
            /* Fetch attribute list */
            foreach($reviews as $review) {
                try {
                    $review->reaggregate();
                    $output->writeln('<info>Review ' . $review->getId() . ' has been successfully reaggregated.</info>');
                } catch(\Exception $e) {
                    $output->writeln('<error>' . $e->getMessage() . '</error>');
                }
            }
        }
    }
}
