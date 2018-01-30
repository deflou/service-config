<?php
namespace deflou\components\services;

use deflou\interfaces\services\IServiceConfig;

/**
 * Class ServiceConfigAbstract
 *
 * @package deflou\components\services
 * @author aivanov@fix.ru
 */
class ServiceConfigAbstract implements IServiceConfig
{
    /**
     * @var array
     */
    protected $config = [];

    /**
     * ServiceConfigAbstract constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config[static::CONFIG__ROOT] ?? [];
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->config[static::CONFIG__NAME] ?? '';
    }

    /**
     * @return string
     */
    public function getServiceTitle(): string
    {
        return $this->config[static::CONFIG__TITLE] ?? '';
    }

    /**
     * @return string
     */
    public function getServiceDescription(): string
    {
        return $this->config[static::CONFIG__DESCRIPTION] ?? '';
    }

    /**
     * @return string
     */
    public function getServiceResolver(): string
    {
        return $this->config[static::CONFIG__SERVICE_RESOLVER] ?? '';
    }

    /**
     * @return string
     */
    public function getServiceDescriber(): string
    {
        return $this->config[static::CONFIG__SERVICE_DESCRIBER] ?? '';
    }

    /**
     * @return string
     */
    public function getServiceVersion(): string
    {
        return $this->config[static::CONFIG__SERVICE_VERSION] ?? '';
    }

    /**
     * @return array
     */
    public function getServiceAuthors(): array
    {
        return $this->config[static::CONFIG__SERVICE_AUTHORS] ?? [];
    }

    /**
     * @return array
     */
    public function getServiceOptions(): array
    {
        return $this->config[static::CONFIG__SERVICE_OPTIONS] ?? [];
    }

    /**
     * @param string $optionName
     *
     * @return array
     */
    public function getServiceOption($optionName): array
    {
        $options = $this->getServiceOptions();
        $optionsByName = array_column($options, null, static::CONFIG__NAME);

        return $optionsByName[$optionName] ?? [];
    }

    /**
     * @param string $optionName
     *
     * @return bool
     */
    public function hasServiceOption($optionName): bool
    {
        $options = $this->getServiceOptions();
        $optionsByName = array_column($options, null, static::CONFIG__NAME);

        return isset($optionsByName[$optionName]);
    }

    /**
     * @return array
     */
    public function getServiceEvents(): array
    {
        return $this->config[static::CONFIG__SERVICE_EVENTS] ?? [];
    }

    /**
     * @return array
     */
    public function getServiceActions(): array
    {
        return $this->config[static::CONFIG__SERVICE_ACTIONS] ?? [];
    }

    /**
     * @return bool
     */
    public function isNotValid(): bool
    {
        return isset(
            $this->config[static::CONFIG__NAME],
            $this->config[static::CONFIG__TITLE],
            $this->config[static::CONFIG__DESCRIPTION],
            $this->config[static::CONFIG__SERVICE_RESOLVER],
            $this->config[static::CONFIG__SERVICE_DESCRIBER],
            $this->config[static::CONFIG__SERVICE_VERSION],
            $this->config[static::CONFIG__SERVICE_EVENTS],
            $this->config[static::CONFIG__SERVICE_ACTIONS],
            $this->config[static::CONFIG__SERVICE_OPTIONS]
        );
    }

    /**
     * @return array
     */
    public function __toArray(): array
    {
        return $this->config;
    }
}
