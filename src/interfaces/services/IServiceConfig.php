<?php
namespace deflou\interfaces\services;

/**
 * IServiceConfig
 */
interface IServiceConfig
{
    public function __construct(array $config);
    
    /**
     * @return string
     */
    public function getServiceName(): string;
    
    /**
     * @return string
     */
    public function getServiceTitle(): string;
    
    /**
     * @return string
     */
    public function getServiceDescription(): string;
    
    /**
     * @return string
     */
    public function getServiceVersion(): string;
    
    /**
     * @return string Resolver class name
     */
    public function getServiceResolver(): string;
    
    /**
     * @return array
     */
    public function getServiceAuthors(): array;
    
    /**
     * @return array
     */
    public function getServiceOptions(): array;
    
    /**
     * @param string $optionName
     *
     * @return array
     */
    public function getServiceOption($optionName): array;
    
    /**
     * @param string $optionName
     *
     * @return bool
     */
    public function hasServiceOption($optionName): bool;
    
    /**
     * @return array
     */
    public function getServiceEvents(): array;
    
    /**
     * @return array
     */
    public function getServiceActions(): array;
}
