<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita28ebe6f2b01a72b6cbf95a83877fd07
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/../..' . '/Package/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dotenv\\Dotenv' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Environment\\AbstractVariables' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/AbstractVariables.php',
        'Dotenv\\Environment\\Adapter\\AdapterInterface' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/Adapter/AdapterInterface.php',
        'Dotenv\\Environment\\Adapter\\ApacheAdapter' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/Adapter/ApacheAdapter.php',
        'Dotenv\\Environment\\Adapter\\ArrayAdapter' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/Adapter/ArrayAdapter.php',
        'Dotenv\\Environment\\Adapter\\EnvConstAdapter' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/Adapter/EnvConstAdapter.php',
        'Dotenv\\Environment\\Adapter\\PutenvAdapter' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/Adapter/PutenvAdapter.php',
        'Dotenv\\Environment\\Adapter\\ServerConstAdapter' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/Adapter/ServerConstAdapter.php',
        'Dotenv\\Environment\\DotenvFactory' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/DotenvFactory.php',
        'Dotenv\\Environment\\DotenvVariables' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/DotenvVariables.php',
        'Dotenv\\Environment\\FactoryInterface' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/FactoryInterface.php',
        'Dotenv\\Environment\\VariablesInterface' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Environment/VariablesInterface.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Lines' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Lines.php',
        'Dotenv\\Loader' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Loader.php',
        'Dotenv\\Parser' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Parser.php',
        'Dotenv\\Regex\\Error' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Regex/Error.php',
        'Dotenv\\Regex\\Regex' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Regex/Regex.php',
        'Dotenv\\Regex\\Result' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Regex/Result.php',
        'Dotenv\\Regex\\Success' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Regex/Success.php',
        'Dotenv\\Validator' => __DIR__ . '/../..' . '/Package/vlucas/phpdotenv/src/Validator.php',
        'Illuminate\\Container\\BoundMethod' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Container/BoundMethod.php',
        'Illuminate\\Container\\Container' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Container/Container.php',
        'Illuminate\\Container\\ContextualBindingBuilder' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Container/ContextualBindingBuilder.php',
        'Illuminate\\Container\\EntryNotFoundException' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Container/EntryNotFoundException.php',
        'Illuminate\\Contracts\\Container\\BindingResolutionException' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Contracts/Container/BindingResolutionException.php',
        'Illuminate\\Contracts\\Container\\Container' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Contracts/Container/Container.php',
        'Illuminate\\Contracts\\Container\\ContextualBindingBuilder' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Contracts/Container/ContextualBindingBuilder.php',
        'Illuminate\\Contracts\\Foundation\\Application' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Contracts/Foundation/Application.php',
        'Illuminate\\Contracts\\Support\\Arrayable' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Contracts/Support/Arrayable.php',
        'Illuminate\\Contracts\\Support\\Jsonable' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Contracts/Support/Jsonable.php',
        'Illuminate\\Foundation\\Application' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Foundation/Application.php',
        'Illuminate\\Foundation\\Bootstrap\\LoadEnvironmentVariables' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Foundation/Bootstrap/LoadEnvironmentVariables.php',
        'Illuminate\\Http\\Concerns\\InteractsWithContentTypes' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Http/Concerns/InteractsWithContentTypes.php',
        'Illuminate\\Http\\Concerns\\InteractsWithInput' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Http/Concerns/InteractsWithInput.php',
        'Illuminate\\Http\\Request' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Http/Request.php',
        'Illuminate\\Support\\Arr' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Support/Arr.php',
        'Illuminate\\Support\\Collection' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Support/Collection.php',
        'Illuminate\\Support\\HigherOrderCollectionProxy' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Support/HigherOrderCollectionProxy.php',
        'Illuminate\\Support\\Str' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Support/Str.php',
        'Illuminate\\Support\\Traits\\Macroable' => __DIR__ . '/../..' . '/Package/laravel/framework/src/illuminate/Support/Traits/Macroable.php',
        'PhpOption\\LazyOption' => __DIR__ . '/../..' . '/Package/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/../..' . '/Package/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/../..' . '/Package/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/../..' . '/Package/phpoption/phpoption/src/PhpOption/Some.php',
        'Stringable' => __DIR__ . '/../..' . '/Package/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeader' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/AcceptHeader.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeaderItem' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/AcceptHeaderItem.php',
        'Symfony\\Component\\HttpFoundation\\ApacheRequest' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/ApacheRequest.php',
        'Symfony\\Component\\HttpFoundation\\BinaryFileResponse' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/BinaryFileResponse.php',
        'Symfony\\Component\\HttpFoundation\\Cookie' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Cookie.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Exception/ConflictingHeadersException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Exception/RequestExceptionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Exception/SuspiciousOperationException.php',
        'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/ExpressionRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\FileBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/FileBag.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/AccessDeniedException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\CannotWriteFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/CannotWriteFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\ExtensionFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/ExtensionFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/FileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/FileNotFoundException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FormSizeFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/FormSizeFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\IniSizeFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/IniSizeFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\NoFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/NoFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\NoTmpDirFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/NoTmpDirFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\PartialFileException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/PartialFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Exception/UploadException.php',
        'Symfony\\Component\\HttpFoundation\\File\\File' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/File.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/ExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesserInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileBinaryMimeTypeGuesser' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileinfoMimeTypeGuesser' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeExtensionGuesser' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/MimeTypeExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\Stream' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/Stream.php',
        'Symfony\\Component\\HttpFoundation\\File\\UploadedFile' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/File/UploadedFile.php',
        'Symfony\\Component\\HttpFoundation\\HeaderBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/HeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\HeaderUtils' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/HeaderUtils.php',
        'Symfony\\Component\\HttpFoundation\\IpUtils' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/IpUtils.php',
        'Symfony\\Component\\HttpFoundation\\JsonResponse' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/JsonResponse.php',
        'Symfony\\Component\\HttpFoundation\\ParameterBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/ParameterBag.php',
        'Symfony\\Component\\HttpFoundation\\RedirectResponse' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/RedirectResponse.php',
        'Symfony\\Component\\HttpFoundation\\Request' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Request.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/RequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/RequestMatcherInterface.php',
        'Symfony\\Component\\HttpFoundation\\RequestStack' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/RequestStack.php',
        'Symfony\\Component\\HttpFoundation\\Response' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Response.php',
        'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/ResponseHeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\ServerBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/ServerBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Attribute/AttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Flash/FlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Session' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Session.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/SessionBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagProxy' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/SessionBagProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/SessionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionUtils' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/SessionUtils.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MigratingSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\RedisSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/MetadataBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
        'Symfony\\Component\\HttpFoundation\\StreamedResponse' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/StreamedResponse.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\RequestAttributeValueSame' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseCookieValueSame' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasCookie' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseHasCookie.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasHeader' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseHasHeader.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHeaderSame' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseHeaderSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsRedirected' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsSuccessful' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseIsSuccessful.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseStatusCodeSame' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php',
        'Symfony\\Component\\HttpFoundation\\UrlHelper' => __DIR__ . '/../..' . '/Package/symfony/http-foundation/UrlHelper.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/DsCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/DsPairStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/GmpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ImagineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImgStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ImgStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/IntlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/UuidCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/ContextualizedDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Dumper/ServerDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Server/Connection.php',
        'Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Server/DumpServer.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/../..' . '/Package/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/../..' . '/Package/symfony/polyfill-php80/Php80.php',
        'UnhandledMatchError' => __DIR__ . '/../..' . '/Package/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/../..' . '/Package/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita28ebe6f2b01a72b6cbf95a83877fd07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita28ebe6f2b01a72b6cbf95a83877fd07::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita28ebe6f2b01a72b6cbf95a83877fd07::$classMap;

        }, null, ClassLoader::class);
    }
}
