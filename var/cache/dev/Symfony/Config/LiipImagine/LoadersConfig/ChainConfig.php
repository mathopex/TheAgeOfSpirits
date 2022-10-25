<?php

namespace Symfony\Config\LiipImagine\LoadersConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ChainConfig 
{
    private $loaders;
    
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function loaders(ParamConfigurator|array $value): static
    {
        $this->loaders = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['loaders'])) {
            $this->loaders = $value['loaders'];
            unset($value['loaders']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->loaders) {
            $output['loaders'] = $this->loaders;
        }
    
        return $output;
    }

}
