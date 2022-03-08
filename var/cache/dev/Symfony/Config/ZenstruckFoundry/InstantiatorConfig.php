<?php

namespace Symfony\Config\ZenstruckFoundry;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class InstantiatorConfig 
{
    private $withoutConstructor;
    private $allowExtraAttributes;
    private $alwaysForceProperties;
    private $service;
    
    /**
     * Whether or not to call an object's constructor during instantiation.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function withoutConstructor($value): self
    {
        $this->withoutConstructor = $value;
    
        return $this;
    }
    
    /**
     * Whether or not to allow extra attributes.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowExtraAttributes($value): self
    {
        $this->allowExtraAttributes = $value;
    
        return $this;
    }
    
    /**
     * Whether or not to skip setters and force set object properties (public/private/protected) directly.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function alwaysForceProperties($value): self
    {
        $this->alwaysForceProperties = $value;
    
        return $this;
    }
    
    /**
     * Customize the instantiator service.
     * @example my_instantiator
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['without_constructor'])) {
            $this->withoutConstructor = $value['without_constructor'];
            unset($value['without_constructor']);
        }
    
        if (isset($value['allow_extra_attributes'])) {
            $this->allowExtraAttributes = $value['allow_extra_attributes'];
            unset($value['allow_extra_attributes']);
        }
    
        if (isset($value['always_force_properties'])) {
            $this->alwaysForceProperties = $value['always_force_properties'];
            unset($value['always_force_properties']);
        }
    
        if (isset($value['service'])) {
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->withoutConstructor) {
            $output['without_constructor'] = $this->withoutConstructor;
        }
        if (null !== $this->allowExtraAttributes) {
            $output['allow_extra_attributes'] = $this->allowExtraAttributes;
        }
        if (null !== $this->alwaysForceProperties) {
            $output['always_force_properties'] = $this->alwaysForceProperties;
        }
        if (null !== $this->service) {
            $output['service'] = $this->service;
        }
    
        return $output;
    }
    

}
