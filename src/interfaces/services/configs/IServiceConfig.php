<?php
namespace deflou\interfaces\services\configs;

/**
 * IServiceConfig
 */
interface IServiceConfig
{
    const CONFIG__ROOT = 'service';

    const CONFIG__NAME = 'name';
    const CONFIG__TITLE = 'title';
    const CONFIG__DESCRIPTION = 'description';

    const CONFIG__SERVICE_RESOLVER = 'resolver';
    const CONFIG__SERVICE_DESCRIBER = 'describer';
    const CONFIG__SERVICE_VERSION = 'version';
    const CONFIG__SERVICE_AUTHORS = 'authors';

    const CONFIG__SERVICE_OPTIONS = 'options';

    const CONFIG__SERVICE_EVENTS = 'events';
    const CONFIG__SERVICE_EVENT_PARAMETERS = 'parameters';
    const CONFIG__SERVICE_EVENT_DISPATCHERS = 'dispatchers';

    const CONFIG__PARAM_DISPATCHERS = 'dispatchers';
    const CONFIG__PARAM_COMPARES = 'compares';

    const CONFIG__PARAM_VALUE = 'value';
    const CONFIG__PARAM_VALUE__CLASS = 'class';
    const CONFIG__PARAM_VALUE__TYPE = 'type';
    const CONFIG__PARAM_VALUE__VALUE = 'value';

    const CONFIG__VALUE_TYPE_SELECT = 'select';

    const CONFIG__SERVICE_ACTIONS = 'actions';
    const CONFIG__SERVICE_ACTION_PARAMETERS = 'parameters';
    const CONFIG__SERVICE_ACTION_DISPATCHERS = 'dispatchers';

    const COMPARE__EQUAL = 'eq';
    const COMPARE__NOT_EQUAL = 'neq';
    const COMPARE__GREATER = 'gt';
    const COMPARE__LOWER = 'lt';
    const COMPARE__LIKE = 'like';

    const COMPARE__DEFAULT = 'default';

    /**
     * IServiceConfig constructor.
     * @param array $config
     */
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
     * @return string Describer class name
     */
    public function getServiceDescriber(): string;
    
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
    
    /**
     * @return bool
     */
    public function isNotValid(): bool;

    /**
     * @return array
     */
    public function __toArray(): array;
}
