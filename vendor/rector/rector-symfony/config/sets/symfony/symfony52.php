<?php

declare (strict_types=1);
namespace RectorPrefix20220425;

use PHPStan\Type\ObjectType;
use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\ClassConstFetch\RenameClassConstFetchRector;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\PropertyFetch\RenamePropertyRector;
use Rector\Renaming\ValueObject\MethodCallRename;
use Rector\Renaming\ValueObject\RenameClassAndConstFetch;
use Rector\Renaming\ValueObject\RenameProperty;
use Rector\Symfony\Rector\MethodCall\DefinitionAliasSetPrivateToSetPublicRector;
use Rector\Symfony\Rector\MethodCall\FormBuilderSetDataMapperRector;
use Rector\Symfony\Rector\MethodCall\ReflectionExtractorEnableMagicCallExtractorRector;
use Rector\Symfony\Rector\MethodCall\ValidatorBuilderEnableAnnotationMappingRector;
use Rector\Symfony\Rector\New_\PropertyAccessorCreationBooleanToFlagsRector;
use Rector\Symfony\Rector\New_\PropertyPathMapperToDataMapperRector;
use Rector\Symfony\Rector\StaticCall\BinaryFileResponseCreateToNewInstanceRector;
use Rector\Symfony\Set\SymfonySetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector;
use Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration;
# https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([\Rector\Symfony\Set\SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES]);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#form
    $rectorConfig->rule(\Rector\Symfony\Rector\New_\PropertyPathMapperToDataMapperRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#httpfoundation
    $rectorConfig->rule(\Rector\Symfony\Rector\StaticCall\BinaryFileResponseCreateToNewInstanceRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#mime
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\MethodCall\RenameMethodRector::class, [new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Mime\\Address', 'fromString', 'create')]);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#propertyaccess
    $rectorConfig->rule(\Rector\Symfony\Rector\New_\PropertyAccessorCreationBooleanToFlagsRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#propertyinfo
    $rectorConfig->rule(\Rector\Symfony\Rector\MethodCall\ReflectionExtractorEnableMagicCallExtractorRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#security
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\ClassConstFetch\RenameClassConstFetchRector::class, [new \Rector\Renaming\ValueObject\RenameClassAndConstFetch('Symfony\\Component\\Security\\Http\\Firewall\\AccessListener', 'PUBLIC_ACCESS', 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter', 'PUBLIC_ACCESS')]);
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\MethodCall\RenameMethodRector::class, [new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken', 'setProviderKey', 'setFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken', 'getProviderKey', 'getFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', 'setProviderKey', 'setFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', 'getProviderKey', 'getFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\SwitchUserToken', 'setProviderKey', 'setFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\SwitchUserToken', 'getProviderKey', 'getFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken', 'setProviderKey', 'setFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken', 'getProviderKey', 'getFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler', 'setProviderKey', 'setFirewallName'), new \Rector\Renaming\ValueObject\MethodCallRename('Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler', 'getProviderKey', 'getFirewallName')]);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#dependencyinjection
    $rectorConfig->rule(\Rector\Symfony\Rector\MethodCall\DefinitionAliasSetPrivateToSetPublicRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#form
    $rectorConfig->rule(\Rector\Symfony\Rector\MethodCall\FormBuilderSetDataMapperRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#validator
    $rectorConfig->rule(\Rector\Symfony\Rector\MethodCall\ValidatorBuilderEnableAnnotationMappingRector::class);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#notifier
    $rectorConfig->ruleWithConfiguration(\Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector::class, [new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\NotifierInterface', 'send', 1, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\RecipientInterface')), new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\Notifier', 'getChannels', 1, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\RecipientInterface')), new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\Channel\\ChannelInterface', 'notify', 1, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\RecipientInterface')), new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\Channel\\ChannelInterface', 'supports', 1, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\RecipientInterface'))]);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#notifier
    $rectorConfig->ruleWithConfiguration(\Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector::class, [new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\Notification\\ChatNotificationInterface', 'asChatMessage', 0, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\RecipientInterface')), new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\Notification\\EmailNotificationInterface', 'asEmailMessage', 0, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\EmailRecipientInterface')), new \Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration('Symfony\\Component\\Notifier\\Notification\\SmsNotificationInterface', 'asSmsMessage', 0, new \PHPStan\Type\ObjectType('Symfony\\Component\\Notifier\\Recipient\\SmsRecipientInterface'))]);
    # https://github.com/symfony/symfony/blob/5.x/UPGRADE-5.2.md#security
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\PropertyFetch\RenamePropertyRector::class, [new \Rector\Renaming\ValueObject\RenameProperty('Symfony\\Component\\Security\\Http\\RememberMe\\AbstractRememberMeServices', 'providerKey', 'firewallName')]);
};
