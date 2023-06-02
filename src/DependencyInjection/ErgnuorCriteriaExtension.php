<?php

declare(strict_types=1);

namespace Ergnuor\CriteriaBundle\DependencyInjection;

use Ergnuor\Criteria\FieldMapper\FieldExpressionMapperInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

class ErgnuorCriteriaExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new PhpFileLoader(
            $container,
            new FileLocator(\dirname(__DIR__) . '/Resources/config')
        );

        $loader->load('criteria.php');

        $container->registerForAutoconfiguration(FieldExpressionMapperInterface::class)
            ->addTag('ergnuor.criteria.field_expression_mapper');
    }
}
