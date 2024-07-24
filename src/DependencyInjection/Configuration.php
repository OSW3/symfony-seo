<?php 
namespace OSW3\SEO\DependencyInjection;

use Symfony\Component\Filesystem\Path;
use OSW3\SEO\DependencyInjection\DefinitionConfigurator;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	/**
	 * define the name of the configuration tree.
	 * > /config/packages/seo.yaml
	 *
	 * @var string
	 */
	public const string NAME = "seo";

	/**
	 * Define the translation domain
	 *
	 * @var string
	 */
	public const string DOMAIN = 'seo';

	/**
	 * Update and return the Configuration Builder
	 *
	 * @return TreeBuilder
	 */
	public function getConfigTreeBuilder(): TreeBuilder
    {
        $definition = require Path::join(__DIR__, "../../", "config/definition/definition.php");
        $builder    = new TreeBuilder( static::NAME );

        $definition(new DefinitionConfigurator($builder->getRootNode()));

		return $builder;
    }
}