<?php

declare (strict_types=1);
namespace RectorPrefix20210512\PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;
\class_exists(\Composer\InstalledVersions::class);
/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'rector/rector-src';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS = array('composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6', 'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464', 'composer/xdebug-handler' => '2.0.1@964adcdd3a28bf9ed5d9ac6450064e0d71ed7496', 'danielstjules/stringy' => '3.1.0@df24ab62d2d8213bbbe88cc36fc35a4503b4bd7e', 'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210', 'ergebnis/json-printer' => '3.1.1@e4190dadd9937a77d8afcaf2b6c42a528ab367d6', 'idiosyncratic/editorconfig' => '0.1.1@50f742daee8b7a632b795f5927d8d88c43dd3a4f', 'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303', 'nette/caching' => 'v3.1.1@3e771c589dee414724be473c24ad16dae50c1960', 'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50', 'nette/neon' => 'v3.2.2@e4ca6f4669121ca6876b1d048c612480e39a28d5', 'nette/utils' => 'v3.2.2@967cfc4f9a1acd5f1058d76715a424c53343c20c', 'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f', 'phpstan/phpdoc-parser' => '0.5.4@e352d065af1ae9b41c12d1dfd309e90f7b1f55c9', 'phpstan/phpstan' => '0.12.86@a84fdc53ecca7643dbc89ef8880d8b393a6c155a', 'phpstan/phpstan-phpunit' => '0.12.19@52f7072ddc5f81492f9d2de65a24813a48c90b18', 'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf', 'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0', 'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11', 'rector/extension-installer' => '0.10.2@56c97630fca170b5586b2f08e76348f924ebb8dd', 'rector/rector-cakephp' => '0.10.4@5155ac30d2cd04144690c118a030af0a4a1e68f4', 'rector/rector-doctrine' => '0.10.6@52dbdf1d60c522c1c40142a194960610db451f91', 'rector/rector-laravel' => '0.10.2@d4ccd50d7975bea9a0ce961bbaded385b5ede739', 'rector/rector-nette' => '0.10.10@e9f0de1ffb3ba1eecdaa281fcd64fda1d3515e6f', 'rector/rector-nette-to-symfony' => '0.10.0@27be9cb982ac7ad3799e0ac7fd45be0a46d7fb0b', 'rector/rector-phpunit' => '0.10.8@2b272b61cacf29bf0e448719165c8376cd41872e', 'rector/rector-symfony' => '0.10.6@583e77ad2fc8c7740418d55884beb3d18822e115', 'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d', 'shanethehat/pretty-xml' => '1.0.2@2b063c6544c8dc9563c53cb72eb06d1d74c9e75f', 'symfony/config' => 'v5.2.8@8dfa5f8adea9cd5155920069224beb04f11d6b7e', 'symfony/console' => 'v5.2.8@864568fdc0208b3eba3638b6000b69d2386e6768', 'symfony/dependency-injection' => 'v5.2.8@024e929da5a994cbab0ce2291d332f7edf926acf', 'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627', 'symfony/error-handler' => 'v5.2.8@1416bc16317a8188aabde251afef7618bf4687ac', 'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240', 'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11', 'symfony/filesystem' => 'v5.2.7@056e92acc21d977c37e6ea8e97374b2a6c8551b0', 'symfony/finder' => 'v5.2.8@eccb8be70d7a6a2230d05f6ecede40f3fdd9e252', 'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4', 'symfony/http-foundation' => 'v5.2.8@e8fbbab7c4a71592985019477532629cb2e142dc', 'symfony/http-kernel' => 'v5.2.8@c3cb71ee7e2d3eae5fe1001f81780d6a49b37937', 'symfony/polyfill-ctype' => 'v1.22.1@c6c942b1ac76c82448322025e084cadc56048b4e', 'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170', 'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248', 'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1', 'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2', 'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91', 'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb', 'symfony/string' => 'v5.2.8@01b35eb64cac8467c3f94cd0ce2d0d376bb7d1db', 'symfony/var-dumper' => 'v5.2.8@d693200a73fae179d27f8f1b16b4faf3e8569eba', 'symfony/yaml' => 'v5.2.7@76546cbeddd0a9540b4e4e57eddeec3e9bb444a5', 'symplify/astral' => 'v9.3.10@5b975f944bc21baed6755e84dbf3e9cebd4e4f9a', 'symplify/autowire-array-parameter' => 'v9.3.10@79ec04d0f6f6d2375700c61c71cf3299276400f5', 'symplify/composer-json-manipulator' => 'v9.3.10@845004dcb52f7c4b9ab416a69be3975f4038c8dc', 'symplify/console-color-diff' => 'v9.3.10@7910766e3a4fce04e656a6265fb963f7bf1e4fa5', 'symplify/console-package-builder' => 'v9.3.10@468415fe1d596b1faafb156e65b5fcede9d3916d', 'symplify/easy-testing' => 'v9.3.10@fc1a041dd0183e3e203fa101eac3572c8d8f2d99', 'symplify/package-builder' => 'v9.3.10@11cabebd09425815d88351778a73ea8e0b70b10a', 'symplify/rule-doc-generator-contracts' => 'v9.3.10@06f23a3bfe1426030c4032e99665472a229d5b43', 'symplify/set-config-resolver' => 'v9.3.10@62e36ae829deef8d9b57a10460ad582b5822f18d', 'symplify/simple-php-doc-parser' => 'v9.3.10@84727d0850b2668d6d4707bc6e89d91957e367f4', 'symplify/skipper' => 'v9.3.10@4bc743dc5e6160bee0127b1e239d363be1a43af8', 'symplify/smart-file-system' => 'v9.3.10@aafc000f17d9f4b2d1274115095e3cbc2c32d63d', 'symplify/symfony-php-config' => 'v9.3.5@9dc9a4010871f822394628487cbc5721c83fe3de', 'symplify/symplify-kernel' => 'v9.3.10@f24a17fd6068ce65e0a19dd16cf25cf86ad14098', 'tracy/tracy' => 'v2.8.4@cb7d3dcd9469aa2aa6722edf6bee2d5d75188079', 'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25', 'rector/rector' => '0.10.x-dev@', 'rector/rector-src' => '0.10.x-dev@');
    private function __construct()
    {
    }
    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!\class_exists(\Composer\InstalledVersions::class, \false) || !\Composer\InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }
        return \Composer\InstalledVersions::getRootPackage()['name'];
    }
    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName) : string
    {
        if (\class_exists(\Composer\InstalledVersions::class, \false) && \Composer\InstalledVersions::getRawData()) {
            return \Composer\InstalledVersions::getPrettyVersion($packageName) . '@' . \Composer\InstalledVersions::getReference($packageName);
        }
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }
        throw new \OutOfBoundsException('Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files');
    }
}
