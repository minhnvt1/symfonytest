<?php

use Symfony\Component\Config\Loader\LoaderInterface;

use Oro\Bundle\DistributionBundle\OroKernel;

class AppKernel extends OroKernel
{
    public function registerBundles()
    {
        $bundles = array(
        // bundles,
            new M3e\HelloBundle\M3eHelloBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        if (in_array($this->getEnvironment(), array('test', 'perf'))) {
            $bundles[] = new Oro\Bundle\TestFrameworkBundle\OroTestFrameworkBundle();
        }

        return array_merge(parent::registerBundles(), $bundles);
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
