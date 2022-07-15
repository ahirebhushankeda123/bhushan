<?php

declare (strict_types=1);
namespace RectorPrefix20211221;

use Rector\CakePHP\Rector\MethodCall\ModalToGetSetRector;
use Rector\CakePHP\ValueObject\ModalToGetSet;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\MethodCallRename;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
# source: https://book.cakephp.org/3.0/en/appendices/3-5-migration-guide.html
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Rector\Renaming\Rector\Name\RenameClassRector::class)->configure(['Cake\\Http\\Client\\CookieCollection' => 'Cake\\Http\\Cookie\\CookieCollection', 'Cake\\Console\\ShellDispatcher' => 'Cake\\Console\\CommandRunner']);
    $services->set(\Rector\Renaming\Rector\MethodCall\RenameMethodRector::class)->configure([new \Rector\Renaming\ValueObject\MethodCallRename('Cake\\Database\\Schema\\TableSchema', 'column', 'getColumn'), new \Rector\Renaming\ValueObject\MethodCallRename('Cake\\Database\\Schema\\TableSchema', 'constraint', 'getConstraint'), new \Rector\Renaming\ValueObject\MethodCallRename('Cake\\Database\\Schema\\TableSchema', 'index', 'getIndex')]);
    $services->set(\Rector\CakePHP\Rector\MethodCall\ModalToGetSetRector::class)->configure([new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Cache\\Cache', 'config'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Cache\\Cache', 'registry'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Console\\Shell', 'io'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Console\\ConsoleIo', 'outputAs'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Console\\ConsoleOutput', 'outputAs'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Database\\Connection', 'logger'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Database\\TypedResultInterface', 'returnType'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Database\\TypedResultTrait', 'returnType'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Database\\Log\\LoggingStatement', 'logger'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Datasource\\ModelAwareTrait', 'modelType'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Database\\Query', 'valueBinder', 'getValueBinder', 'valueBinder'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Database\\Schema\\TableSchema', 'columnType'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Datasource\\QueryTrait', 'eagerLoaded', 'isEagerLoaded', 'eagerLoaded'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Event\\EventDispatcherInterface', 'eventManager'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Event\\EventDispatcherTrait', 'eventManager'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Error\\Debugger', 'outputAs', 'getOutputFormat', 'setOutputFormat'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Http\\ServerRequest', 'env', 'getEnv', 'withEnv'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Http\\ServerRequest', 'charset', 'getCharset', 'withCharset'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\I18n\\I18n', 'locale'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\I18n\\I18n', 'translator'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\I18n\\I18n', 'defaultLocale'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\I18n\\I18n', 'defaultFormatter'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\ORM\\Association\\BelongsToMany', 'sort'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\ORM\\LocatorAwareTrait', 'tableLocator'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\ORM\\Table', 'validator'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Routing\\RouteBuilder', 'extensions'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Routing\\RouteBuilder', 'routeClass'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Routing\\RouteCollection', 'extensions'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\TestSuite\\TestFixture', 'schema'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\Utility\\Security', 'salt'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\View\\View', 'template'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\View\\View', 'layout'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\View\\View', 'theme'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\View\\View', 'templatePath'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\View\\View', 'layoutPath'), new \Rector\CakePHP\ValueObject\ModalToGetSet('Cake\\View\\View', 'autoLayout', 'isAutoLayoutEnabled', 'enableAutoLayout')]);
};