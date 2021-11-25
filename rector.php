<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Symfony\Set\SymfonyLevelSetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
	// get parameters
	$parameters = $containerConfigurator->parameters();
	$parameters->set(Option::PATHS, [
		__DIR__ . '/src',
	]);

	$parameters->set(Option::BOOTSTRAP_FILES, [
		__DIR__ . '/vendor/autoload.php'
	]);

	$containerConfigurator->import(SymfonyLevelSetList::UP_TO_SYMFONY_51);
};
