<?php

namespace Veljamatic\Travistest;

use Illuminate\Container\Container;

class Main
{
    /**
   * Illuminate container instance.
   *
   * @var \Illuminate\Container\Container
   */
  protected $container;

  /**
   * Version for the request.
   *
   * @var string
   */
  protected $version;

  /**
   * Default version.
   *
   * @var string
   */
  protected $defaultVersion;

  /**
   * Create a new Main instance.
   *
   * @param \Illuminate\Container\Container   $container
   *
   * @return void
   */
  public function __construct(Container $container)
  {
      $this->container = $container;
  }

  /**
   * Set the version of the API for the next request.
   *
   * @param string $version
   *
   * @return \Dingo\Api\Dispatcher
   */
  public function version($version)
  {
      $this->version = $version;

      return $this;
  }

  /**
   * Set the default version.
   *
   * @param string $version
   *
   * @return void
   */
  public function setDefaultVersion($version)
  {
      $this->defaultVersion = $version;
  }

  /**
   * Get the version.
   *
   * @return string
   */
  public function getVersion()
  {
      return $this->version ?: $this->defaultVersion;
  }
}
