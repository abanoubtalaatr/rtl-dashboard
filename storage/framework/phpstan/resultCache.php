<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1765012167,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.33',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80227,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, paths: [/Users/abanoubtalaat/projects/rtl-dashboard/app, /Users/abanoubtalaat/projects/rtl-dashboard/database], level: 5, scanFiles: [bootstrap/app.php], tmpDir: /Users/abanoubtalaat/projects/rtl-dashboard/storage/framework/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app',
    1 => '/Users/abanoubtalaat/projects/rtl-dashboard/database',
  ),
  'scannedFiles' => 
  array (
    '/Users/abanoubtalaat/projects/rtl-dashboard/bootstrap/app.php' => '3d28f33e2886f6b1b6c14ec0f3b8c53cc1376573',
  ),
  'composerLocks' => 
  array (
    '/Users/abanoubtalaat/projects/rtl-dashboard/composer.lock' => '57cc9d7e155de064fec5e6c4370c9ddd1d102e1c',
  ),
  'composerInstalled' => 
  array (
    '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'almasaeed2010/adminlte' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => 'bd4d9c72931f1dd28601b6bfb387554a381ad540',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../almasaeed2010/adminlte',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'barryvdh/laravel-ide-helper' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '8d00250cba25728373e92c1d8dcebcbf64623d29',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../barryvdh/laravel-ide-helper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'barryvdh/reflection-docblock' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'd103774cbe7e94ddee7e4870f97f727b43fe7201',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../barryvdh/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.0',
          'version' => '0.14.0.0',
          'reference' => '113a8ee2656b882d4c3164fa31aa6e12cbb7aaa2',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/class-map-generator' => 
        array (
          'pretty_version' => '1.7.0',
          'version' => '1.7.0.0',
          'reference' => '2373419b7709815ed323ebf18c3c72d03ff4a8a6',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/./class-map-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.39.0',
          ),
        ),
        'jeroennoten/laravel-adminlte' => 
        array (
          'pretty_version' => 'v3.15.2',
          'version' => '3.15.2.0',
          'reference' => '8f2fe5f6767b69ec5ef28087a10638b9f50e58e7',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../jeroennoten/laravel-adminlte',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.39.0',
          'version' => '12.39.0.0',
          'reference' => '1a6176129ef28eaf42b6b4a6250025120c3d8dac',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => '8cc3d575c1f0e57eeb923f366a37528c50d2385a',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.25.1',
          'version' => '1.25.1.0',
          'reference' => '5016e263f95d97670d71b9a987bd8996ade6d8d9',
          'type' => 'project',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.7',
          'version' => '0.3.7.0',
          'reference' => 'a1891d362714bc40c8d23b0b1d7090f022ea27cc',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.48.1',
          'version' => '1.48.1.0',
          'reference' => 'ef122b223f5fca5e5d88bda5127c846710886329',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.6',
          'version' => '2.0.6.0',
          'reference' => '038ce42edee619599a1debb7e81d7b3759492819',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => '5966a8ba23e62bdb518dd9e0e665c2dbd4b5b277',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => 'ab4f9d0d672f601b102936aa728801dd1a11968d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.6.0',
          'version' => '7.6.0.0',
          'reference' => 'f625804987a0a9112d954f9209d91fec52182344',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.6.0',
          'version' => '7.6.0.0',
          'reference' => 'ccbfb51c0445298e7e0b7f4481b942f589665368',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.10.3',
          'version' => '3.10.3.0',
          'reference' => '8e3643dcd149ae0fe1d2ff4f2c8e4bbfad7c165f',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '3a454ca033b9e06b63282ce19562e892747449bb',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.2',
          'version' => '8.8.2.0',
          'reference' => '60207965f9b7b7a4ce15a0f75d57f9dadb105bdb',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => 'v3.8.0',
          'version' => '3.8.0.0',
          'reference' => 'd13ef96d652d1b2a8f34f1760ba6bf5b9c98112e',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'eb61920a53057a7debd718a5b89c2178032b52c0',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.33',
          'version' => '2.1.33.0',
          'reference' => '9e800e6bee7d5bd02784d4c6069b48032d16224f',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.11',
          'version' => '11.0.11.0',
          'reference' => '4f7722aa9a7b76aa775e2d9d4e95d1ea16eeeef4',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.44',
          'version' => '11.5.44.0',
          'reference' => 'c346885c95423eda3f65d85a194aaa24873cda82',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.14',
          'version' => '0.12.14.0',
          'reference' => '95c29b3756a23855a30566b745d218bee690bef2',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.1',
          'version' => '4.9.1.0',
          'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.1',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.3.6',
          'version' => '7.3.6.0',
          'reference' => 'c28ad91448f86c5f6d9d2c70f0cf68bf135f252a',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.3.6',
          'version' => '7.3.6.0',
          'reference' => '84321188c4754e64273b46b406081ad9b18e8614',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.3.6',
          'version' => '7.3.6.0',
          'reference' => 'bbe40bfab84323d99dab491b716ff142410a92a8',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => 'b7dc69e71de420ac04bc9ab830cf3ffebba48191',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.3.5',
          'version' => '7.3.5.0',
          'reference' => '9f696d2f1e340484b4683f7853b273abff94421f',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.3.7',
          'version' => '7.3.7.0',
          'reference' => 'db488a62f98f7a81d5746f05eea63a74e55bb7c4',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.3.7',
          'version' => '7.3.7.0',
          'reference' => '10b8e9b748ea95fa4539c208e2487c435d3c87ce',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.3.5',
          'version' => '7.3.5.0',
          'reference' => 'fd497c45ba9c10c37864e19466b090dcb60a50ba',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.3.4',
          'version' => '7.3.4.0',
          'reference' => 'b1b828f69cbaf887fa835a091869e55df91d0e35',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.3.4',
          'version' => '7.3.4.0',
          'reference' => 'f24f8f316367b30810810d4eb30c543d7003ff3b',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.3.6',
          'version' => '7.3.6.0',
          'reference' => 'c97abe725f2a1a858deca629a6488c8fc20c3091',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.3.4',
          'version' => '7.3.4.0',
          'reference' => 'f96476035142921000338bad71e5247fbc138872',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.3.4',
          'version' => '7.3.4.0',
          'reference' => 'ec25870502d0c7072d086e8ffba1420c85965174',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.3.1',
          'version' => '7.3.1.0',
          'reference' => 'a69f69f3159b852651a6bf45a9fdd149520525bb',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.3.5',
          'version' => '7.3.5.0',
          'reference' => '476c4ae17f43a9a36650c69879dcf5b1e6ae724d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.3.5',
          'version' => '7.3.5.0',
          'reference' => '90208e2fc6f68f613eae7ca25a2458a931b1bacc',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/abanoubtalaat/projects/rtl-dashboard/vendor/nunomaduro/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///Users/abanoubtalaat/projects/rtl-dashboard/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar:///Users/abanoubtalaat/projects/rtl-dashboard/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/abanoubtalaat/projects/rtl-dashboard/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/abanoubtalaat/projects/rtl-dashboard/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'PDO_ODBC',
    4 => 'Phar',
    5 => 'Reflection',
    6 => 'SPL',
    7 => 'SimpleXML',
    8 => 'Zend OPcache',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dba',
    16 => 'dom',
    17 => 'exif',
    18 => 'fileinfo',
    19 => 'filter',
    20 => 'ftp',
    21 => 'gd',
    22 => 'gettext',
    23 => 'gmp',
    24 => 'hash',
    25 => 'iconv',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'mysqli',
    32 => 'mysqlnd',
    33 => 'odbc',
    34 => 'openssl',
    35 => 'pcntl',
    36 => 'pcre',
    37 => 'pdo_dblib',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'pspell',
    44 => 'random',
    45 => 'readline',
    46 => 'session',
    47 => 'shmop',
    48 => 'soap',
    49 => 'sockets',
    50 => 'sodium',
    51 => 'sqlite3',
    52 => 'standard',
    53 => 'sysvmsg',
    54 => 'sysvsem',
    55 => 'sysvshm',
    56 => 'tidy',
    57 => 'tokenizer',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlwriter',
    61 => 'xsl',
    62 => 'zip',
    63 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'booking\' is not found in App\\Models\\Retrieved model.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'currency\' is not found in App\\Models\\Retrieved model.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in App\\Models\\Supervisor model.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'supervisor\' is not found in App\\Models\\User model.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'supervisor\' is not found in App\\Models\\User model.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Booking::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Ternary operator condition is always true.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
       'line' => 224,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 224,
       'nodeType' => 'PhpParser\\Node\\Expr\\Ternary',
       'identifier' => 'ternary.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Ternary operator condition is always true.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
       'line' => 232,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 232,
       'nodeType' => 'PhpParser\\Node\\Expr\\Ternary',
       'identifier' => 'ternary.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Car::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\CarExpense::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function is_array() with array will always evaluate to true.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 59,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.alreadyNarrowedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function is_array() with array will always evaluate to true.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 76,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.alreadyNarrowedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarType.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\CarType::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarType.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarType.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Company.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Company::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Company.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Company.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Currency.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Currency::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Currency.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Currency.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Customer.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Customer::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Customer.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Customer.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Driver::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\DriverSalary::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Negated boolean expression is always false.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\BooleanNot',
       'identifier' => 'booleanNot.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Negated boolean expression is always false.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\BooleanNot',
       'identifier' => 'booleanNot.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Result of || is always false.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 53,
       'nodeType' => 'PHPStan\\Node\\BooleanOrNode',
       'identifier' => 'booleanOr.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\DriverSalary::getDaysAttribute() should return int|null but returns float.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Location.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<int, string> of property App\\Models\\Location::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Location.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Location.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ForgotPasswordController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.passwords.email',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/LoginController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.login',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/RegisterController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.register',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ResetPasswordController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.passwords.reset',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 42,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'bookings.index',
      1 => 'bookings.create',
      2 => 'bookings.show',
      3 => 'bookings.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 91,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'cars.index',
      1 => 'cars.create',
      2 => 'cars.show',
      3 => 'cars.edit',
      4 => 'cars.availability',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 49,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'car-expenses.index',
      1 => 'car-expenses.create',
      2 => 'car-expenses.show',
      3 => 'car-expenses.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 64,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'car-types.index',
      1 => 'car-types.create',
      2 => 'car-types.show',
      3 => 'car-types.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 42,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'companies.index',
      1 => 'companies.create',
      2 => 'companies.show',
      3 => 'companies.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 48,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'currencies.index',
      1 => 'currencies.create',
      2 => 'currencies.show',
      3 => 'currencies.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 45,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'customers.index',
      1 => 'customers.create',
      2 => 'customers.show',
      3 => 'customers.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 48,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'dashboard.index',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'drivers.index',
      1 => 'drivers.create',
      2 => 'drivers.show',
      3 => 'drivers.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 66,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverSalaryController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'driver_salaries.index',
      1 => 'driver_salaries.create',
      2 => 'driver_salaries.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 73,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 37,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'external-bookings.index',
      1 => 'external-bookings.create',
      2 => 'external-bookings.show',
      3 => 'external-bookings.edit',
      4 => 'external-bookings.unreturned',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 124,
      ),
      1 => 
      array (
        0 => 'abort',
        1 => 148,
      ),
      2 => 
      array (
        0 => 'abort',
        1 => 180,
      ),
      3 => 
      array (
        0 => 'abort',
        1 => 204,
      ),
      4 => 
      array (
        0 => 'abort',
        1 => 221,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'internal-bookings.index',
      1 => 'internal-bookings.create',
      2 => 'internal-bookings.show',
      3 => 'internal-bookings.edit',
      4 => 'internal-bookings.unreturned',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 132,
      ),
      1 => 
      array (
        0 => 'abort',
        1 => 154,
      ),
      2 => 
      array (
        0 => 'abort',
        1 => 184,
      ),
      3 => 
      array (
        0 => 'abort',
        1 => 208,
      ),
      4 => 
      array (
        0 => 'abort',
        1 => 225,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 104,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 111,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'locations.index',
      1 => 'locations.create',
      2 => 'locations.show',
      3 => 'locations.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 45,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'reports.internal-bookings',
      1 => 'reports.external-bookings',
      2 => 'reports.print.internal-client',
      3 => 'reports.print.internal-driver',
      4 => 'reports.print.external-client',
      5 => 'reports.print.external-driver',
      6 => 'reports.car-report',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 136,
      ),
      1 => 
      array (
        0 => 'abort',
        1 => 150,
      ),
      2 => 
      array (
        0 => 'abort',
        1 => 164,
      ),
      3 => 
      array (
        0 => 'abort',
        1 => 178,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'retrieveds.index',
      1 => 'retrieveds.create',
      2 => 'retrieveds.show',
      3 => 'retrieveds.create',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'supervisors.index',
      1 => 'supervisors.create',
      2 => 'supervisors.show',
      3 => 'supervisors.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 27,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'users.index',
      1 => 'users.create',
      2 => 'users.show',
      3 => 'users.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 53,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Middleware/SuperAdminMiddleware.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 28,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/ForgotPasswordRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\ForgotPasswordRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\ForgotPasswordRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\ForgotPasswordRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\ForgotPasswordRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\ForgotPasswordRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\ForgotPasswordRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/LoginRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\LoginRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\LoginRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\LoginRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\LoginRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\LoginRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/RegisterRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\RegisterRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\RegisterRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\RegisterRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\RegisterRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/ResetPasswordRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\ResetPasswordRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\ResetPasswordRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\ResetPasswordRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\ResetPasswordRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreBookingRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreBookingRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreBookingRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreBookingRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreBookingRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarExpenseRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarExpenseRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreCarExpenseRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarExpenseRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreCarExpenseRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreCarRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreCarRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreCarRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarTypeRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarTypeRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreCarTypeRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarTypeRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreCarTypeRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarTypeRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\StoreCarTypeRequest',
      ),
      3 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCarTypeRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreCarTypeRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCompanyRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCompanyRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreCompanyRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCompanyRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreCompanyRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCompanyRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreCompanyRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCurrencyRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCurrencyRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreCurrencyRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCurrencyRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreCurrencyRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCurrencyRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreCurrencyRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCustomerRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCustomerRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreCustomerRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCustomerRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreCustomerRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreCustomerRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreCustomerRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreDriverRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreDriverRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreDriverRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreDriverRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreDriverRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreExternalBookingRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
      ),
      3 => 
      array (
        0 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreExternalBookingRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreInternalBookingRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
      ),
      3 => 
      array (
        0 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreInternalBookingRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreLocationRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreLocationRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreLocationRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreLocationRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreLocationRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreLocationRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\StoreLocationRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreSupervisorRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreSupervisorRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreSupervisorRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreSupervisorRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreSupervisorRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\StoreSupervisorRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreSupervisorRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreUserRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreUserRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\StoreUserRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreUserRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreUserRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateBookingRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateBookingRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateBookingRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateBookingRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateBookingRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarExpenseRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateCarRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateCarRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarTypeRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarTypeRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateCarTypeRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarTypeRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\UpdateCarTypeRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCarTypeRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateCarTypeRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCompanyRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCompanyRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateCompanyRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCompanyRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateCompanyRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCompanyRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateCompanyRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCurrencyRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCurrencyRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateCurrencyRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCurrencyRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateCurrencyRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCurrencyRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateCurrencyRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCustomerRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCustomerRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateCustomerRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCustomerRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateCustomerRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateCustomerRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateCustomerRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateDriverRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateDriverRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateDriverRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateDriverRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateDriverRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateExternalBookingRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
      ),
      3 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateInternalBookingRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
      ),
      3 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateLocationRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateLocationRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateLocationRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateLocationRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateLocationRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateLocationRequest',
        1 => 'attributes',
        2 => 'App\\Http\\Requests\\UpdateLocationRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateSupervisorRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateSupervisorRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateSupervisorRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateSupervisorRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\UpdateSupervisorRequest',
      ),
      2 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateSupervisorRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateSupervisorRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateUserRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateUserRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\UpdateUserRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\UpdateUserRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\UpdateUserRequest',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Booking',
        1 => 'getTypeOptions',
        2 => 'App\\Models\\Booking',
      ),
      1 => 
      array (
        0 => 'App\\Models\\Booking',
        1 => 'getPaymentTypeOptions',
        2 => 'App\\Models\\Booking',
      ),
      2 => 
      array (
        0 => 'App\\Models\\Booking',
        1 => 'getPriceAttribute',
        2 => 'App\\Models\\Booking',
      ),
      3 => 
      array (
        0 => 'App\\Models\\Booking',
        1 => 'getNotesAttribute',
        2 => 'App\\Models\\Booking',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\CarExpense',
        1 => 'getTypeOptions',
        2 => 'App\\Models\\CarExpense',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Driver',
        1 => 'getStatusOptions',
        2 => 'App\\Models\\Driver',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\DriverSalary',
        1 => 'getTotalAttribute',
        2 => 'App\\Models\\DriverSalary',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Location.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Location',
        1 => 'getTypeOptions',
        2 => 'App\\Models\\Location',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'getRoleOptions',
        2 => 'App\\Models\\User',
      ),
      1 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
      2 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'isSuperAdmin',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Providers/AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 27,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 31,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/AdminSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 16,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 23,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 30,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/CarTypeSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 25,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 151,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 173,
      ),
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/LocationSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 25,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Api/CarAvailabilityController.php' => 
  array (
    'fileHash' => '49b5b13cec76c7be15a60002bab41dc85025779d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ForgotPasswordController.php' => 
  array (
    'fileHash' => '316420438eb10232b96a95c1c1e87f2d533cccd8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/LoginController.php' => 
  array (
    'fileHash' => 'cae3ba29504952ea45268aac5f05f728d3daf672',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/RegisterController.php' => 
  array (
    'fileHash' => '9a31413aa0eda69c46c6682fc038605b9b51407a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ResetPasswordController.php' => 
  array (
    'fileHash' => 'd6aebce2e965047dd1246a4eade81ed6e4ef07e3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php' => 
  array (
    'fileHash' => '8c1de688e3681a89bb1b8c57c59bc0fda0492bda',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php' => 
  array (
    'fileHash' => '2d1c3c51ffadbed56e99c5d137f0096fe088281c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php' => 
  array (
    'fileHash' => '6ee96a197688bd660112cdc73f0b30e81fde25d2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php' => 
  array (
    'fileHash' => 'acc841171dfaa9616311cd153647c1765e941ff3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php' => 
  array (
    'fileHash' => '1aeaf40326629137f762f66d817bbd49d8435e33',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Api/CarAvailabilityController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ForgotPasswordController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/LoginController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/RegisterController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ResetPasswordController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php',
      9 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php',
      10 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php',
      11 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php',
      12 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php',
      13 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php',
      14 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverSalaryController.php',
      15 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      16 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      17 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php',
      18 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php',
      19 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
      20 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
      21 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php' => 
  array (
    'fileHash' => 'd362c443178fe83a6d19c0b87ee97cf98854bab0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php' => 
  array (
    'fileHash' => 'd6498a7e693d28cbc78f3b737faa8bc5867d3390',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php' => 
  array (
    'fileHash' => 'e02fe174ed69b96c9302cc982252dcbc85a494bd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php' => 
  array (
    'fileHash' => '518cf21c821835c629ebd7b5595401c9f7aa37d3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverSalaryController.php' => 
  array (
    'fileHash' => '1aa6c030b53c212794c270464a5dcc31ae9c310e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php' => 
  array (
    'fileHash' => '025841de06346a52349e5ad7b9fe5fb121802cc7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php' => 
  array (
    'fileHash' => 'be432bd993dc45a74c0b1af4c91c7d8ff4e5f209',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php' => 
  array (
    'fileHash' => 'b092ac1ebd0dd036a16e3e189bba664bb1d6e91f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php' => 
  array (
    'fileHash' => '76d43ff0c7e893e2752f85e4e6f9f08ed8c723d2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php' => 
  array (
    'fileHash' => 'ea088b0e55fffad4130fbe3f4e2a4d0f69a11e24',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php' => 
  array (
    'fileHash' => '2df5350f4f5f295cda5dfb2e869f5f6fb69b5fef',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php' => 
  array (
    'fileHash' => '2a394ab73e366913006ea03b042d0cdaf8d896f7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Middleware/SuperAdminMiddleware.php' => 
  array (
    'fileHash' => 'b5f8817f662710d33bb49f2476662f82eebbd3a0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/ForgotPasswordRequest.php' => 
  array (
    'fileHash' => 'df78d3dda42473b0bc51299fbbdd4978f0056626',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ForgotPasswordController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/LoginRequest.php' => 
  array (
    'fileHash' => '824bfafb1f65495fd07f21a68cf404d051baee54',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/LoginController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/RegisterRequest.php' => 
  array (
    'fileHash' => '985f8202dcae85eaec4742ddea1b737b324c205e',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/RegisterController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/ResetPasswordRequest.php' => 
  array (
    'fileHash' => '4cac31f9456441ee3a03035d932e73fa1ef337e7',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ResetPasswordController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreBookingRequest.php' => 
  array (
    'fileHash' => '109abaac877d245a4937f3725501f75efcb12748',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarExpenseRequest.php' => 
  array (
    'fileHash' => 'ecc06ea39271da8956f7d44e67754a3009bbaf67',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarRequest.php' => 
  array (
    'fileHash' => 'e1a554b23e186ace8093a4cce3f3ee711ec91218',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarTypeRequest.php' => 
  array (
    'fileHash' => '6b033357b7b4b3c8c202e0bfa8baf1ee830af17e',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCompanyRequest.php' => 
  array (
    'fileHash' => 'e4784bfc4217edab51301a9e81101449ab48fc8a',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCurrencyRequest.php' => 
  array (
    'fileHash' => '4f01950fe8d750f228814d2918916d9d338699c9',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCustomerRequest.php' => 
  array (
    'fileHash' => '78532c5275d1e227f0971554406760266a9b02c9',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreDriverRequest.php' => 
  array (
    'fileHash' => 'a74397042bb6579e4ef7f3836c2fe67dd2fe81f2',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreExternalBookingRequest.php' => 
  array (
    'fileHash' => '93999afef5bf05874c77469c5a9051dce73eb9c1',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreInternalBookingRequest.php' => 
  array (
    'fileHash' => '6b96e0b54587d7857ebe5a6cf269ff18e3b57243',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreLocationRequest.php' => 
  array (
    'fileHash' => 'ef4675e3a2ae9be95846e602ef61f8023f8f5211',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreSupervisorRequest.php' => 
  array (
    'fileHash' => 'c9efe33edce42d99ab27efa7865f4fe1ccf8b1bf',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreUserRequest.php' => 
  array (
    'fileHash' => 'd896b6f94194266c09f92f4f909724aeacb8dfa8',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateBookingRequest.php' => 
  array (
    'fileHash' => '905e45662a9ff8dd3e63480a566d85cb31827d68',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarExpenseRequest.php' => 
  array (
    'fileHash' => '47ed1c91eb7aec45b13d25ab5626af342b21fce8',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarRequest.php' => 
  array (
    'fileHash' => '51e47e7ac9b893a3cc048828cd6d47ebc3e0e755',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarTypeRequest.php' => 
  array (
    'fileHash' => 'b01456a8824ec11723dd2488f0feb8850fd3fa26',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCompanyRequest.php' => 
  array (
    'fileHash' => 'e7f8f0e44acd5ad9bb6ad0c771a7aa8fcf150df8',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCurrencyRequest.php' => 
  array (
    'fileHash' => '17eaaa29666ae0505ffa5d06cb688faa0ad25025',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCustomerRequest.php' => 
  array (
    'fileHash' => '7e06cc73a935bc7ac9829fdc58eb4af255383a70',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateDriverRequest.php' => 
  array (
    'fileHash' => 'dd0ca78f3b69d4b0b094c1f2193502e35598fd7c',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateExternalBookingRequest.php' => 
  array (
    'fileHash' => 'c6d2c4f35af6e65ab66c268880cff4c0ef3eb2ea',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateInternalBookingRequest.php' => 
  array (
    'fileHash' => '270c4d0911361b23f642462e0f8acc78db44a6c8',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateLocationRequest.php' => 
  array (
    'fileHash' => '74ef89f10ae57c03c681921c41b956e58b5160c8',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateSupervisorRequest.php' => 
  array (
    'fileHash' => 'e4ce21f977b95d29f7121fe3aa04e639bf30d03b',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateUserRequest.php' => 
  array (
    'fileHash' => 'c7c194bbf7eb2e8ed4fbcbd9c2ef217afdf80bcf',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php' => 
  array (
    'fileHash' => '139d9fb307e82d8149f07250c4d5d17df1b92e55',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Api/CarAvailabilityController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarType.php',
      9 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Retrieved.php',
      10 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/User.php',
      11 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      12 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php' => 
  array (
    'fileHash' => 'eeae560282c46f4ff5e79dc553ec544f036392ab',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php',
      9 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      10 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php' => 
  array (
    'fileHash' => 'b632a572ad6a7877ddbb781d8dc63315ddfd1b82',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarType.php' => 
  array (
    'fileHash' => '291dce75630bd92ee9fd5d7dfc9568dcab8c411c',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/CarTypeSeeder.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Company.php' => 
  array (
    'fileHash' => '2029aa31a4dc6d06546fcc30b283393d742a53e5',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Currency.php' => 
  array (
    'fileHash' => '8c5a91ded6cc6732e3fcc168e026f4375bdb1c42',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Retrieved.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Customer.php' => 
  array (
    'fileHash' => 'c07dcb883953cb0be2c659fccfe5929922e53c06',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php' => 
  array (
    'fileHash' => '99afae750a1162e56eefbeb1d4be61052a9f0b40',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverSalaryController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateDriverRequest.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php',
      9 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      10 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php' => 
  array (
    'fileHash' => 'df4fd08b4aa4ba32ec536054e4e4c47658b16b26',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverSalaryController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Location.php' => 
  array (
    'fileHash' => '92df6c853702b2cdda54f68124999267a0b94687',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/LocationSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Retrieved.php' => 
  array (
    'fileHash' => 'fce1ff2d05029a7c8b9feef16ff5520112a43880',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Supervisor.php' => 
  array (
    'fileHash' => '137bcb88c8b323c86a9d586d4c2f1b2367f23018',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/User.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/User.php' => 
  array (
    'fileHash' => '5b5096843d9b5c8c31411f5e14ba2cf26087d23f',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/RegisterController.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php',
      2 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php',
      3 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php',
      4 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php',
      5 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php',
      6 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Middleware/SuperAdminMiddleware.php',
      7 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php',
      8 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Supervisor.php',
      9 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/factories/UserFactory.php',
      10 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/AdminSeeder.php',
      11 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DatabaseSeeder.php',
      12 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php',
      13 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => 'f9654478f0f4a42b839f734b5f8cfc0ecde00fc7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/factories/UserFactory.php' => 
  array (
    'fileHash' => '7ac74334b97dded2308b4265ca46014b317a82f9',
    'dependentFiles' => 
    array (
      0 => '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/User.php',
      1 => '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => 'c83722f2f43dc31195e37312e72524af995c15a9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '1e63143baede25661ec2075259ba517cbf2c2400',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => '61d635023428eaa5cc6f27e5b7f9683817125a50',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_202954_create_drivers_table.php' => 
  array (
    'fileHash' => '31dd5098e954e4a93aa2b5c27371e06d2223d29a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_211409_create_customers_table.php' => 
  array (
    'fileHash' => '3a5dd1b1350f8428596c5ab3835ca1ad32783833',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_212005_create_companies_table.php' => 
  array (
    'fileHash' => 'caf1081b182c3099ac5a9e78562b73c60487444b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_212834_create_currencies_table.php' => 
  array (
    'fileHash' => '8747dbf813da1c68babe07595a2b27bada0f2103',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_213221_create_bookings_table.php' => 
  array (
    'fileHash' => '87388c6acfedfc35235cb846398dc892cb419fa5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_215242_create_cars_table.php' => 
  array (
    'fileHash' => '5a0e9b2607ba29845177647efbb48c5b1b92bbfd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_215346_create_car_expenses_table.php' => 
  array (
    'fileHash' => 'afb78525a930c5f0aee7981eb68dfa9dbdbfc754',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_18_215541_add_car_id_to_bookings_table.php' => 
  array (
    'fileHash' => '4fefe8c88a45439ba02f0386ca8b08cfc1cc7c1a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_23_173046_create_car_types_table.php' => 
  array (
    'fileHash' => '6e78eacb289d91652d298d0286c1c2881be876b3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_23_173052_create_locations_table.php' => 
  array (
    'fileHash' => '915d6ab4965d31912935401b785377796b73d8f6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_23_173128_add_internal_booking_fields_to_bookings_table.php' => 
  array (
    'fileHash' => 'c1a94df1a5a077b8614dddcb5d86f2c4bdf7b7a3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_23_173152_add_role_to_users_table.php' => 
  array (
    'fileHash' => '05f0ad13700a77060d5f382fe3e0a88c5f277e7a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_23_174953_add_route_fields_to_bookings_table.php' => 
  array (
    'fileHash' => '46ef50eb8686ec1a801bd7ad7456df15b79cd515',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_23_180002_update_bookings_with_from_to_fields.php' => 
  array (
    'fileHash' => '023ba6e0829715f4d9f0596f44ac59f29e92d71f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_24_175636_add_returned_to_bookings_table.php' => 
  array (
    'fileHash' => 'fa65c207c6aa9ac805cd4c39bbcb669b1ca5c427',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_11_26_172851_update_car_expenses_type_to_json.php' => 
  array (
    'fileHash' => '55db5c87972420b8eec8de8c7b7db511357b7856',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_12_01_142009_add_national_fields_to_drivers_table.php' => 
  array (
    'fileHash' => '529d722e09ceb9dbdce83cb410002cc1755cc5f2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_12_01_142846_create_driver_salaries_table.php' => 
  array (
    'fileHash' => '4e1113eba989c82176d23a09c2f11e9c9f2a96cc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_12_01_145043_add_number_of_days_to_driver_salaries_table.php' => 
  array (
    'fileHash' => '10b1fd3710d0c0939d5bc98abe9172e3edb82ff6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_12_01_194749_create_retrieveds_table.php' => 
  array (
    'fileHash' => '52b087e719bb7a239c57ff665fec61512c899058',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/migrations/2025_12_03_164712_create_supervisors_table.php' => 
  array (
    'fileHash' => '505da338c88e827505aa28edc318b45e5db77cec',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/AdminSeeder.php' => 
  array (
    'fileHash' => '7bef30dca08ac37d7c306c6bff004b0c15923d89',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/CarTypeSeeder.php' => 
  array (
    'fileHash' => '2cca8b7b61c72bddec4e79bfaae376d9bd624985',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/CompanySeeder.php' => 
  array (
    'fileHash' => '7bdd1d5b7362ed43f7ea1cca8e14832b9997cbe0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => 'b7baaa4ff3da53e2766554dd985b74f2d68424a2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DriverSeeder.php' => 
  array (
    'fileHash' => '379de106a5616ef52977eb396fc74e778b3e4b10',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php' => 
  array (
    'fileHash' => 'daec776444466f27fbe37173489e30429f591f28',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php' => 
  array (
    'fileHash' => 'a08838b7b813ef417f617e0447a7b623cebebb80',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/LocationSeeder.php' => 
  array (
    'fileHash' => '1518a5015745c2d5095b95193379a560b69f427d',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Api/CarAvailabilityController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\CarAvailabilityController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'check',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check car availability for booking times.
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'booking' => 'App\\Models\\Booking',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ForgotPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showLinkRequestForm',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for requesting a password reset link.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'forgotpasswordrequest' => 'App\\Http\\Requests\\ForgotPasswordRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendResetLinkEmail',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send a reset link to the given user.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'forgotpasswordrequest' => 'App\\Http\\Requests\\ForgotPasswordRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ForgotPasswordRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/LoginController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\LoginController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showLoginForm',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the login form.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle a login request to the application.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Log the user out of the application.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/RegisterController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\RegisterController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showRegistrationForm',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the registration form.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'registerrequest' => 'App\\Http\\Requests\\RegisterRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle a registration request for the application.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'registerrequest' => 'App\\Http\\Requests\\RegisterRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\RegisterRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Auth/ResetPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showResetForm',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset view for the given token.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'resetpasswordrequest' => 'App\\Http\\Requests\\ResetPasswordRequest',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'token',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Reset the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'resetpasswordrequest' => 'App\\Http\\Requests\\ResetPasswordRequest',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ResetPasswordRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/BookingController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\BookingController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreBookingRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateBookingRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storebookingrequest' => 'App\\Http\\Requests\\StoreBookingRequest',
              'updatebookingrequest' => 'App\\Http\\Requests\\UpdateBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CarController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreCarRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'car',
               'type' => 'App\\Models\\Car',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'car',
               'type' => 'App\\Models\\Car',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateCarRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'car',
               'type' => 'App\\Models\\Car',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'car',
               'type' => 'App\\Models\\Car',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'availability',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display cars availability filter page.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarrequest' => 'App\\Http\\Requests\\StoreCarRequest',
              'updatecarrequest' => 'App\\Http\\Requests\\UpdateCarRequest',
              'car' => 'App\\Models\\Car',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarExpenseController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CarExpenseController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carExpense',
               'type' => 'App\\Models\\CarExpense',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carExpense',
               'type' => 'App\\Models\\CarExpense',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carExpense',
               'type' => 'App\\Models\\CarExpense',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecarexpenserequest' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
              'updatecarexpenserequest' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carExpense',
               'type' => 'App\\Models\\CarExpense',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CarTypeController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CarTypeController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of car types.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new car type.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created car type in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreCarTypeRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified car type.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carType',
               'type' => 'App\\Models\\CarType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified car type.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carType',
               'type' => 'App\\Models\\CarType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified car type in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carType',
               'type' => 'App\\Models\\CarType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified car type from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecartyperequest' => 'App\\Http\\Requests\\StoreCarTypeRequest',
              'updatecartyperequest' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
              'cartype' => 'App\\Models\\CarType',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'carType',
               'type' => 'App\\Models\\CarType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CompanyController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CompanyController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreCompanyRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'company',
               'type' => 'App\\Models\\Company',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'company',
               'type' => 'App\\Models\\Company',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateCompanyRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'company',
               'type' => 'App\\Models\\Company',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecompanyrequest' => 'App\\Http\\Requests\\StoreCompanyRequest',
              'updatecompanyrequest' => 'App\\Http\\Requests\\UpdateCompanyRequest',
              'company' => 'App\\Models\\Company',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'company',
               'type' => 'App\\Models\\Company',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CurrencyController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CurrencyController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreCurrencyRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'App\\Models\\Currency',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'App\\Models\\Currency',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'App\\Models\\Currency',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecurrencyrequest' => 'App\\Http\\Requests\\StoreCurrencyRequest',
              'updatecurrencyrequest' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
              'currency' => 'App\\Models\\Currency',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'App\\Models\\Currency',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/CustomerController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CustomerController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreCustomerRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Models\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Models\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateCustomerRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Models\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storecustomerrequest' => 'App\\Http\\Requests\\StoreCustomerRequest',
              'updatecustomerrequest' => 'App\\Http\\Requests\\UpdateCustomerRequest',
              'customer' => 'App\\Models\\Customer',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Models\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DashboardController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\DashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle the incoming dashboard request.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'company' => 'App\\Models\\Company',
              'customer' => 'App\\Models\\Customer',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\DriverController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreDriverRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateDriverRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storedriverrequest' => 'App\\Http\\Requests\\StoreDriverRequest',
              'updatedriverrequest' => 'App\\Http\\Requests\\UpdateDriverRequest',
              'driver' => 'App\\Models\\Driver',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/DriverSalaryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\DriverSalaryController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driverSalary',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driverSalary',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driver',
               'type' => 'App\\Models\\Driver',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'driverSalary',
               'type' => 'App\\Models\\DriverSalary',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ExternalBookingController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ExternalBookingController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of external bookings.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new external booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created external booking in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified external booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified external booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified external booking in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified external booking from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggleReturn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Toggle the return status of a booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unreturned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of unreturned external bookings.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeexternalbookingrequest' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
              'updateexternalbookingrequest' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/InternalBookingController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\InternalBookingController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of internal bookings.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new internal booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created internal booking in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified internal booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'internalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified internal booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'internalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified internal booking in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'internalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified internal booking from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'internalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggleReturn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Toggle the return status of a booking.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'internalBooking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unreturned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of unreturned internal bookings.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeinternalbookingrequest' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
              'updateinternalbookingrequest' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/LocationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\LocationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of locations.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new location.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created location in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreLocationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified location.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\Location',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified location.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\Location',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified location in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateLocationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\Location',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified location from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storelocationrequest' => 'App\\Http\\Requests\\StoreLocationRequest',
              'updatelocationrequest' => 'App\\Http\\Requests\\UpdateLocationRequest',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\Location',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/ReportController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ReportController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'internalBookings',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Internal bookings report
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'externalBookings',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * External bookings report
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'printInternalClient',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Print internal booking for client
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'printInternalDriver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Print internal booking for driver
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'printExternalClient',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Print external booking for client
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'printExternalDriver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Print external booking for driver
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'booking',
               'type' => 'App\\Models\\Booking',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'carReport',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Car financial report
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'carexpense' => 'App\\Models\\CarExpense',
              'company' => 'App\\Models\\Company',
              'driver' => 'App\\Models\\Driver',
              'location' => 'App\\Models\\Location',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/RetrievedController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\RetrievedController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retrieved',
               'type' => 'App\\Models\\Retrieved',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retrieved',
               'type' => 'App\\Models\\Retrieved',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retrieved',
               'type' => 'App\\Models\\Retrieved',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retrieved',
               'type' => 'App\\Models\\Retrieved',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/SupervisorController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\SupervisorController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreSupervisorRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'supervisor',
               'type' => 'App\\Models\\Supervisor',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'supervisor',
               'type' => 'App\\Models\\Supervisor',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateSupervisorRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'supervisor',
               'type' => 'App\\Models\\Supervisor',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'supervisor',
               'type' => 'App\\Models\\Supervisor',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Controllers/UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\UserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreUserRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateUserRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'storeuserrequest' => 'App\\Http\\Requests\\StoreUserRequest',
              'updateuserrequest' => 'App\\Http\\Requests\\UpdateUserRequest',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Middleware/SuperAdminMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\SuperAdminMiddleware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/ForgotPasswordRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ForgotPasswordRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/RegisterRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\RegisterRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/ResetPasswordRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ResetPasswordRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreBookingRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreBookingRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarExpenseRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreCarExpenseRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreCarRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCarTypeRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreCarTypeRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCompanyRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreCompanyRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCurrencyRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreCurrencyRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreCustomerRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreCustomerRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreDriverRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreDriverRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreExternalBookingRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreExternalBookingRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreInternalBookingRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreInternalBookingRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreLocationRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreLocationRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreSupervisorRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreSupervisorRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/StoreUserRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreUserRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateBookingRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateBookingRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarExpenseRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateCarExpenseRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateCarRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCarTypeRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateCarTypeRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCompanyRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateCompanyRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCurrencyRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateCurrencyRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateCustomerRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateCustomerRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateDriverRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateDriverRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateExternalBookingRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateExternalBookingRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateInternalBookingRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateInternalBookingRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateLocationRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateLocationRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attributes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateSupervisorRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateSupervisorRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Http/Requests/UpdateUserRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateUserRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Booking.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Booking',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'customer',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the customer that owns the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'company',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the company that owns the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'driver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the driver that owns the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currency',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the currency that owns the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'car',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the car that owns the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'carType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the car type that owns the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'returnDriver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the return driver for the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'departureFromLocation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the departure from location.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'departureToLocation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the departure to location.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'returnFromLocation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the return from location.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'returnToLocation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the return to location.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'creator',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the user who created the booking.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromLocation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Alias for departureFromLocation (for reports).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toLocation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Alias for departureToLocation (for reports).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get type options.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPaymentTypeOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get payment type options.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the Arabic type label.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPaymentTypeLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the Arabic payment type label.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDateAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get date accessor (from booking_from).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTimeAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get time accessor (from booking_from).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPriceAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get price accessor (from booking_price).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNotesAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get notes accessor (returns empty string if not set).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeInternal',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Scope a query to only include internal bookings.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeExternal',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Scope a query to only include external bookings.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeReturned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Scope a query to only include returned bookings.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeUnreturned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Scope a query to only include unreturned bookings.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        28 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markAsReturned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the booking as returned.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        29 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markAsNotReturned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the booking as not returned.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Car.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Car',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'expenses',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the expenses for the car.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bookings',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the bookings for the car.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAvailable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if car is available in a given time range.
     * A car is available if it has no bookings that overlap with the requested time range.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'from',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'to',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarExpense.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\CarExpense',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'car',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the car that owns the expense.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get type options with Arabic labels.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the Arabic type labels as comma-separated string.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeLabelsArrayAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get type labels as array.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/CarType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\CarType',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bookings',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the bookings for the car type.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Company.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Company',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Currency.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Currency',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Customer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Customer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Driver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Driver',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'salaries',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get all salary records for the driver.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getLicenseImageUrlAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the license image URL.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNationalImagesUrlsAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get national ID images URLs.
     *
     * @return array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get status options.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the Arabic status label.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/DriverSalary.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\DriverSalary',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'driver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the driver associated with this salary.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDaysAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get number of days dynamically between from_date and to_date (inclusive).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTotalAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the total payable amount (salary + commission - advance - discount).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Location.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Location',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get type options.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the Arabic type label.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Retrieved.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Retrieved',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currency',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booking',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/Supervisor.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Supervisor',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isSuperAdmin',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if user is super admin.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAdmin',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if user is admin.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRoleOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get role options with Arabic labels.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRoleLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the Arabic role label.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bookings',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get bookings created by this user.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'supervisor',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/AdminSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\AdminSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/CarTypeSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\CarTypeSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'cartype' => 'App\\Models\\CarType',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/CompanySeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\CompanySeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/DriverSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DriverSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/ExternalBookingSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\ExternalBookingSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'customer' => 'App\\Models\\Customer',
              'driver' => 'App\\Models\\Driver',
              'user' => 'App\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/InternalBookingSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\InternalBookingSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'booking' => 'App\\Models\\Booking',
              'car' => 'App\\Models\\Car',
              'cartype' => 'App\\Models\\CarType',
              'company' => 'App\\Models\\Company',
              'currency' => 'App\\Models\\Currency',
              'driver' => 'App\\Models\\Driver',
              'user' => 'App\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/abanoubtalaat/projects/rtl-dashboard/database/seeders/LocationSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\LocationSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'location' => 'App\\Models\\Location',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
