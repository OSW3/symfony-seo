<?php 
namespace OSW3\SEO;

use OSW3\SEO\Utils\ConfigurationYaml;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SEOBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        ConfigurationYaml::write($container->getParameter('kernel.project_dir'));
    }
}