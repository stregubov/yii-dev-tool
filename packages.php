<?php

/**
 * See file packages.local.php.example for customization examples.
 *
 * DO NOT EDIT THIS FILE. To customize the configuration, create your local configuration
 * packages.local.php using file packages.local.php.example as example.
 */
$packages = [
    'docs' => true,

    // Config plugin
    'config' => true,

    // Error handler
    'error-handler' => true,
    'friendly-exception' => true,

    // Dependency injection
    'definitions' => true,
    'di' => true,
    'proxy' => true,
    'injector' => true,
    'factory' => true,

    // Events
    'event-dispatcher' => true,
    'yii-event' => true,

    // Core packages
    'aliases' => true,
    'network-utilities' => true,
    'http' => true,

    // Security
    'security' => true,
    'rate-limiter' => true,
    'csrf' => true,

    // Authentication and authorization
    'access' => true,
    'auth' => true,
    'auth-jwt' => true,
    'user' => true,
    'yii-auth-client' => true,

    // RBAC
    'rbac' => true,
    'rbac-db' => true,
    'rbac-php' => true,
    'rbac-cycle-db' => true,
    'rbac-rules-container' => true,

    // Cache
    'cache' => true,
    'cache-apcu' => true,
    'cache-wincache' => true,
    'cache-file' => true,
    'cache-db' => true,
    'cache-memcached' => true,
    'cache-redis' => true,

    // Log
    'log' => true,
    'log-target-db' => true,
    'log-target-email' => true,
    'log-target-file' => true,
    'log-target-syslog' => true,

    // i18n
    'i18n' => true,
    'translator' => true,
    'translator-extractor' => true,
    'translator-message-php' => true,
    'translator-message-gettext' => true,
    'translator-message-db' => true,
    'translator-formatter-intl' => true,
    'translator-formatter-simple' => true,

    // Queue
    'yii-queue' => true,
    'yii-queue-amqp' => true,

    // Mutex
    'mutex' => true,
    'mutex-file' => true,
    'mutex-pdo-pgsql' => true,
    'mutex-pdo-oracle' => true,
    'mutex-pdo-mysql' => true,
    'mutex-redis' => true,

    // Mailer
    'mailer' => true,
    'mailer-swiftmailer' => true,
    'mailer-symfony' => true,

    // Helpers and utilities
    'arrays' => true,
    'strings' => true,
    'files' => true,
    'var-dumper' => true,
    'html' => true,
    'json' => true,

    // Console
    'yii-console' => true,

    // Tools
    'yii-swagger' => true,
    'profiler' => true,

    // Databases
    'db' => true,
    'db-mysql' => true,
    'db-pgsql' => true,
    'db-sqlite' => true,
    'db-mssql' => true,
    'db-oracle' => true,
    //'db-mongodb' => true,
    'db-mariadb' => true,
    'active-record' => true,
    'yii-db-migration' => true,
    'yii-cycle' => true,
    // 'db-sphinx' => true,
    // 'db-redis' => true,
    'data-db' => true,

    // Router
    'router' => true,
    'router-fastroute' => true,

    // Web
    'data-response' => true,
    'request-model' => true,
    'middleware-dispatcher' => true,
    'request-body-parser' => true,
    'session' => true,
    'cookies' => true,
    'yii-http' => true,
    'yii-middleware' => true,

    // View, assets, templates and widgets
    'view' => true,
    'view-twig' => true,
    'yii-view' => true,
    'widget' => true,
    'yii-widgets' => true,
    'form' => true,
    'assets' => true,
    'yii-jquery' => true,
    'yii-masked-input' => true,

    // Data abstractions and widgets
    'data' => true,
    'validator' => true,
    'yii-dataview' => true,

    // Debugger
    'yii-debug' => true,
    'yii-debug-api' => true,
    'yii-debug-viewer' => true,

    // Gii
    'yii-gii' => true,
    'yii-gii-frontend' => true,

    // CSS frameworks
    'yii-bootstrap5' => true,
    'yii-bulma' => true,

    'yii-captcha' => true,
    'yii-filesystem' => true,

    // Runners
    'yii-runner' => true,
    'yii-runner-http' => true,
    'yii-runner-console' => true,
    'yii-runner-roadrunner' => true,

    // Demo
    'demo' => true,
    'demo-api' => true,

    // Application templates
    'app' => true,
    'app-api' => true,

    // Docker
    'yii-docker' => true,

    // Testing
    'test-support' => true,
    'psr-dummy-provider' => true,
    'dummy-provider' => true,

    // Requirements checker
    'requirements' => true,

    // Package template
    'package-template' => true,

    // Integrations
    'yii-sentry' => true,
];

if (file_exists($localFile = __DIR__ . '/packages.local.php')) {
    /** @noinspection PhpIncludeInspection */
    $packages = array_merge($packages, require $localFile);
}

return $packages;
