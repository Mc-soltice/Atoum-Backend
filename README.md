<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```
Atoum
├─ .editorconfig
├─ .env
├─ README.md
├─ app
│  ├─ Console
│  │  └─ Commands
│  │     └─ GenerateApiDoc.php
│  ├─ Enums
│  │  └─ RolesEnum.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Controller.php
│  │  │  └─ SwaggerTestController.php
│  │  └─ Middleware
│  │     └─ CheckUserLock.php
│  ├─ Modules
│  │  ├─ Auth
│  │  │  ├─ Controllers
│  │  │  │  └─ AuthController.php
│  │  │  ├─ Events
│  │  │  │  ├─ UserLocked.php
│  │  │  │  └─ UserUnlocked.php
│  │  │  ├─ Listeners
│  │  │  │  ├─ SendUserLockedNotifications.php
│  │  │  │  └─ SendUserUnlockedNotification.php
│  │  │  ├─ Models
│  │  │  │  ├─ LoginAttempt.php
│  │  │  │  └─ User.php
│  │  │  ├─ Notifications
│  │  │  │  ├─ AdminUserLockedNotification.php
│  │  │  │  ├─ UserLockedNotification.php
│  │  │  │  └─ UserUnlockedNotification.php
│  │  │  ├─ Repositories
│  │  │  │  └─ AuthRepository.php
│  │  │  ├─ Requests
│  │  │  │  ├─ LoginRequest.php
│  │  │  │  ├─ RegisterRequest.php
│  │  │  │  └─ UserRequest.php
│  │  │  ├─ Resources
│  │  │  │  └─ UserResource.php
│  │  │  └─ Services
│  │  │     └─ AuthService.php
│  │  ├─ Delivery
│  │  │  ├─ Controllers
│  │  │  │  └─ DeliveryOptionController.php
│  │  │  ├─ Models
│  │  │  │  └─ DeliveryOption.php
│  │  │  ├─ Repositories
│  │  │  │  └─ DeliveryOptionRepository.php
│  │  │  ├─ Request
│  │  │  │  └─ DeliveryOptionRequest.php
│  │  │  ├─ Resources
│  │  │  │  └─ DeliveryOptionResource.php
│  │  │  └─ Services
│  │  │     └─ DeliveryOptionService.php
│  │  ├─ Order
│  │  │  ├─ Controllers
│  │  │  │  └─ OrderController.php
│  │  │  ├─ Enums
│  │  │  │  └─ OrderStatus.php
│  │  │  ├─ Events
│  │  │  │  ├─ OrderCreated.php
│  │  │  │  └─ OrderPaid.php
│  │  │  ├─ Listeners
│  │  │  │  ├─ DecreaseProductStock.php
│  │  │  │  └─ SendOrderNotification.php
│  │  │  ├─ Models
│  │  │  │  ├─ Order.php
│  │  │  │  ├─ OrderItem.php
│  │  │  │  └─ StockMovement.php
│  │  │  ├─ Notifications
│  │  │  │  ├─ OrderCancelledNotification.php
│  │  │  │  ├─ OrderNotification.php
│  │  │  │  └─ OrderStatusUpdatedNotification.php
│  │  │  ├─ Observers
│  │  │  │  └─ OrderObserver.php
│  │  │  ├─ Repositories
│  │  │  │  └─ OrderRepository.php
│  │  │  ├─ Requests
│  │  │  │  ├─ OrderCancelRequest.php
│  │  │  │  └─ OrderRequest.php
│  │  │  ├─ Resources
│  │  │  │  ├─ OrderItemResource.php
│  │  │  │  └─ OrderResource.php
│  │  │  ├─ Services
│  │  │  │  ├─ NotificationService.php
│  │  │  │  ├─ OrderService.php
│  │  │  │  └─ StockService.php
│  │  │  └─ order.php
│  │  └─ Product
│  │     ├─ Controllers
│  │     │  ├─ CategoryController.php
│  │     │  └─ ProductController.php
│  │     ├─ Events
│  │     │  ├─ ProductOutOfStock.php
│  │     │  └─ ProductStockLow.php
│  │     ├─ Listeners
│  │     │  └─ SendStockAlertNotification.php
│  │     ├─ Models
│  │     │  ├─ Category.php
│  │     │  ├─ Product.php
│  │     │  └─ ProductImage.php
│  │     ├─ Notifications
│  │     │  └─ ProductStockAlertNotification.php
│  │     ├─ Providers
│  │     │  └─ ProductServiceProvider.php
│  │     ├─ Repositories
│  │     │  ├─ CategoryRepository.php
│  │     │  └─ ProductRepository.php
│  │     ├─ Requests
│  │     │  ├─ DeleteProductImageRequest.php
│  │     │  ├─ StoreCategoryRequest.php
│  │     │  └─ StoreProductRequest.php
│  │     ├─ Resources
│  │     │  ├─ CategoryResource.php
│  │     │  └─ ProductResource.php
│  │     └─ Services
│  │        ├─ CategoryService.php
│  │        └─ ProductService.php
│  ├─ Providers
│  │  ├─ AppServiceProvider.php
│  │  └─ EventServiceProvider.php
│  └─ Traits
│     └─ LogsModelActivity.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ activitylog.php
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ cors.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ l5-swagger.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ octane.php
│  ├─ permission.php
│  ├─ product.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  └─ session.php
├─ create-module-product.ps1
├─ create-module.ps1
├─ database
│  ├─ factories
│  │  ├─ DeliveryFactory.php
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2026_01_09_163446_create_personal_access_tokens_table.php
│  │  ├─ 2026_01_09_164320_create_permission_tables.php
│  │  ├─ 2026_01_09_175103_create_activity_log_table.php
│  │  ├─ 2026_01_09_175104_add_event_column_to_activity_log_table.php
│  │  ├─ 2026_01_09_175105_add_batch_uuid_column_to_activity_log_table.php
│  │  ├─ 2026_01_09_194715_login_attemps.php
│  │  ├─ 2026_01_10_170641_create_categories_table.php
│  │  ├─ 2026_01_10_170719_create_products_table.php
│  │  ├─ 2026_02_01_223546_delivery.php
│  │  ├─ 2026_02_02_102904_order.php
│  │  ├─ 2026_02_02_103035_order_items.php
│  │  ├─ 2026_02_05_223912_stock_movements.php
│  │  ├─ 2026_02_08_184058_alter_orders_user_nullable.php
│  │  └─ 2026_02_11_000000_update_order_status_enum.php
│  └─ seeders
│     ├─ DatabaseSeeder.php
│     ├─ DeliverySeeder.php
│     ├─ RoleSeeder.php
│     └─ UserSeeder.php
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ vendor
│     │  └─ l5-swagger
│     │     └─ index.blade.php
│     └─ welcome.blade.php
├─ routes
│  ├─ api.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ api-docs
│  │  └─ api-docs.json
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  │     └─ products
│  │        └─ elixir-bien-etre-peau-eclatante-detox-yawoum-village-11033
│  │           └─ main
│  │              └─ 1cvxU0KvPmER6gnsbECeFtwjtLEkSjMRWrugieOL.png
│  ├─ bin
│  │  ├─ carbon
│  │  ├─ openapi
│  │  ├─ patch-type-declarations
│  │  ├─ php-parse
│  │  ├─ phpunit
│  │  ├─ pint
│  │  ├─ psysh
│  │  ├─ roadrunner-worker
│  │  ├─ sail
│  │  ├─ swoole-server
│  │  ├─ var-dump-server
│  │  └─ yaml-lint
│  ├─ brick
│  │  └─ math
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     ├─ phpstan.neon
│  │     ├─ src
│  │     │  ├─ BigDecimal.php
│  │     │  ├─ BigInteger.php
│  │     │  ├─ BigNumber.php
│  │     │  ├─ BigRational.php
│  │     │  ├─ Exception
│  │     │  │  ├─ DivisionByZeroException.php
│  │     │  │  ├─ IntegerOverflowException.php
│  │     │  │  ├─ MathException.php
│  │     │  │  ├─ NegativeNumberException.php
│  │     │  │  ├─ NumberFormatException.php
│  │     │  │  └─ RoundingNecessaryException.php
│  │     │  ├─ Internal
│  │     │  │  ├─ Calculator
│  │     │  │  │  ├─ BcMathCalculator.php
│  │     │  │  │  ├─ GmpCalculator.php
│  │     │  │  │  └─ NativeCalculator.php
│  │     │  │  ├─ Calculator.php
│  │     │  │  └─ CalculatorRegistry.php
│  │     │  └─ RoundingMode.php
│  │     └─ tools
│  │        └─ ecs
│  │           ├─ composer.json
│  │           └─ ecs.php
│  ├─ carbonphp
│  │  └─ carbon-doctrine-types
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Carbon
│  │           └─ Doctrine
│  │              ├─ CarbonDoctrineType.php
│  │              ├─ CarbonImmutableType.php
│  │              ├─ CarbonType.php
│  │              ├─ CarbonTypeConverter.php
│  │              ├─ DateTimeDefaultPrecision.php
│  │              ├─ DateTimeImmutableType.php
│  │              └─ DateTimeType.php
│  ├─ composer
│  │  ├─ ClassLoader.php
│  │  ├─ InstalledVersions.php
│  │  ├─ LICENSE
│  │  ├─ autoload_classmap.php
│  │  ├─ autoload_files.php
│  │  ├─ autoload_namespaces.php
│  │  ├─ autoload_psr4.php
│  │  ├─ autoload_real.php
│  │  ├─ autoload_static.php
│  │  ├─ installed.json
│  │  ├─ installed.php
│  │  └─ platform_check.php
│  ├─ darkaonline
│  │  └─ l5-swagger
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ l5-swagger.php
│  │     ├─ phpstan.neon
│  │     ├─ resources
│  │     │  └─ views
│  │     │     └─ index.blade.php
│  │     └─ src
│  │        ├─ ConfigFactory.php
│  │        ├─ Console
│  │        │  └─ GenerateDocsCommand.php
│  │        ├─ Exceptions
│  │        │  └─ L5SwaggerException.php
│  │        ├─ Generator.php
│  │        ├─ GeneratorFactory.php
│  │        ├─ Http
│  │        │  ├─ Controllers
│  │        │  │  ├─ SwaggerAssetController.php
│  │        │  │  └─ SwaggerController.php
│  │        │  └─ Middleware
│  │        │     └─ Config.php
│  │        ├─ L5SwaggerFacade.php
│  │        ├─ L5SwaggerServiceProvider.php
│  │        ├─ SecurityDefinitions.php
│  │        ├─ helpers.php
│  │        └─ routes.php
│  ├─ dflydev
│  │  └─ dot-access-data
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Data.php
│  │        ├─ DataInterface.php
│  │        ├─ Exception
│  │        │  ├─ DataException.php
│  │        │  ├─ InvalidPathException.php
│  │        │  └─ MissingPathException.php
│  │        └─ Util.php
│  ├─ doctrine
│  │  ├─ annotations
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ UPGRADE.md
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  └─ en
│  │  │  │     ├─ annotations.rst
│  │  │  │     ├─ custom.rst
│  │  │  │     ├─ index.rst
│  │  │  │     └─ sidebar.rst
│  │  │  └─ lib
│  │  │     └─ Doctrine
│  │  │        └─ Common
│  │  │           └─ Annotations
│  │  │              ├─ Annotation
│  │  │              │  ├─ Attribute.php
│  │  │              │  ├─ Attributes.php
│  │  │              │  ├─ Enum.php
│  │  │              │  ├─ IgnoreAnnotation.php
│  │  │              │  ├─ NamedArgumentConstructor.php
│  │  │              │  ├─ Required.php
│  │  │              │  └─ Target.php
│  │  │              ├─ Annotation.php
│  │  │              ├─ AnnotationException.php
│  │  │              ├─ AnnotationReader.php
│  │  │              ├─ AnnotationRegistry.php
│  │  │              ├─ DocLexer.php
│  │  │              ├─ DocParser.php
│  │  │              ├─ ImplicitlyIgnoredAnnotationNames.php
│  │  │              ├─ IndexedReader.php
│  │  │              ├─ PhpParser.php
│  │  │              ├─ PsrCachedReader.php
│  │  │              ├─ Reader.php
│  │  │              └─ TokenParser.php
│  │  ├─ inflector
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  └─ en
│  │  │  │     └─ index.rst
│  │  │  └─ src
│  │  │     ├─ CachedWordInflector.php
│  │  │     ├─ GenericLanguageInflectorFactory.php
│  │  │     ├─ Inflector.php
│  │  │     ├─ InflectorFactory.php
│  │  │     ├─ Language.php
│  │  │     ├─ LanguageInflectorFactory.php
│  │  │     ├─ NoopWordInflector.php
│  │  │     ├─ Rules
│  │  │     │  ├─ English
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Esperanto
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ French
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Italian
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ NorwegianBokmal
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Pattern.php
│  │  │     │  ├─ Patterns.php
│  │  │     │  ├─ Portuguese
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Ruleset.php
│  │  │     │  ├─ Spanish
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Substitution.php
│  │  │     │  ├─ Substitutions.php
│  │  │     │  ├─ Transformation.php
│  │  │     │  ├─ Transformations.php
│  │  │     │  ├─ Turkish
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  └─ Word.php
│  │  │     ├─ RulesetInflector.php
│  │  │     └─ WordInflector.php
│  │  └─ lexer
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ UPGRADE.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ AbstractLexer.php
│  │        └─ Token.php
│  ├─ dragonmantank
│  │  └─ cron-expression
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Cron
│  │           ├─ AbstractField.php
│  │           ├─ CronExpression.php
│  │           ├─ DayOfMonthField.php
│  │           ├─ DayOfWeekField.php
│  │           ├─ FieldFactory.php
│  │           ├─ FieldFactoryInterface.php
│  │           ├─ FieldInterface.php
│  │           ├─ HoursField.php
│  │           ├─ MinutesField.php
│  │           └─ MonthField.php
│  ├─ egulias
│  │  └─ email-validator
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ EmailLexer.php
│  │        ├─ EmailParser.php
│  │        ├─ EmailValidator.php
│  │        ├─ MessageIDParser.php
│  │        ├─ Parser
│  │        │  ├─ Comment.php
│  │        │  ├─ CommentStrategy
│  │        │  │  ├─ CommentStrategy.php
│  │        │  │  ├─ DomainComment.php
│  │        │  │  └─ LocalComment.php
│  │        │  ├─ DomainLiteral.php
│  │        │  ├─ DomainPart.php
│  │        │  ├─ DoubleQuote.php
│  │        │  ├─ FoldingWhiteSpace.php
│  │        │  ├─ IDLeftPart.php
│  │        │  ├─ IDRightPart.php
│  │        │  ├─ LocalPart.php
│  │        │  └─ PartParser.php
│  │        ├─ Parser.php
│  │        ├─ Result
│  │        │  ├─ InvalidEmail.php
│  │        │  ├─ MultipleErrors.php
│  │        │  ├─ Reason
│  │        │  │  ├─ AtextAfterCFWS.php
│  │        │  │  ├─ CRLFAtTheEnd.php
│  │        │  │  ├─ CRLFX2.php
│  │        │  │  ├─ CRNoLF.php
│  │        │  │  ├─ CharNotAllowed.php
│  │        │  │  ├─ CommaInDomain.php
│  │        │  │  ├─ CommentsInIDRight.php
│  │        │  │  ├─ ConsecutiveAt.php
│  │        │  │  ├─ ConsecutiveDot.php
│  │        │  │  ├─ DetailedReason.php
│  │        │  │  ├─ DomainAcceptsNoMail.php
│  │        │  │  ├─ DomainHyphened.php
│  │        │  │  ├─ DomainTooLong.php
│  │        │  │  ├─ DotAtEnd.php
│  │        │  │  ├─ DotAtStart.php
│  │        │  │  ├─ EmptyReason.php
│  │        │  │  ├─ ExceptionFound.php
│  │        │  │  ├─ ExpectingATEXT.php
│  │        │  │  ├─ ExpectingCTEXT.php
│  │        │  │  ├─ ExpectingDTEXT.php
│  │        │  │  ├─ ExpectingDomainLiteralClose.php
│  │        │  │  ├─ LabelTooLong.php
│  │        │  │  ├─ LocalOrReservedDomain.php
│  │        │  │  ├─ NoDNSRecord.php
│  │        │  │  ├─ NoDomainPart.php
│  │        │  │  ├─ NoLocalPart.php
│  │        │  │  ├─ RFCWarnings.php
│  │        │  │  ├─ Reason.php
│  │        │  │  ├─ SpoofEmail.php
│  │        │  │  ├─ UnOpenedComment.php
│  │        │  │  ├─ UnableToGetDNSRecord.php
│  │        │  │  ├─ UnclosedComment.php
│  │        │  │  ├─ UnclosedQuotedString.php
│  │        │  │  └─ UnusualElements.php
│  │        │  ├─ Result.php
│  │        │  ├─ SpoofEmail.php
│  │        │  └─ ValidEmail.php
│  │        ├─ Validation
│  │        │  ├─ DNSCheckValidation.php
│  │        │  ├─ DNSGetRecordWrapper.php
│  │        │  ├─ DNSRecords.php
│  │        │  ├─ EmailValidation.php
│  │        │  ├─ Exception
│  │        │  │  └─ EmptyValidationList.php
│  │        │  ├─ Extra
│  │        │  │  └─ SpoofCheckValidation.php
│  │        │  ├─ MessageIDValidation.php
│  │        │  ├─ MultipleValidationWithAnd.php
│  │        │  ├─ NoRFCWarningsValidation.php
│  │        │  └─ RFCValidation.php
│  │        └─ Warning
│  │           ├─ AddressLiteral.php
│  │           ├─ CFWSNearAt.php
│  │           ├─ CFWSWithFWS.php
│  │           ├─ Comment.php
│  │           ├─ DeprecatedComment.php
│  │           ├─ DomainLiteral.php
│  │           ├─ EmailTooLong.php
│  │           ├─ IPV6BadChar.php
│  │           ├─ IPV6ColonEnd.php
│  │           ├─ IPV6ColonStart.php
│  │           ├─ IPV6Deprecated.php
│  │           ├─ IPV6DoubleColon.php
│  │           ├─ IPV6GroupCount.php
│  │           ├─ IPV6MaxGroups.php
│  │           ├─ LocalTooLong.php
│  │           ├─ NoDNSMXRecord.php
│  │           ├─ ObsoleteDTEXT.php
│  │           ├─ QuotedPart.php
│  │           ├─ QuotedString.php
│  │           ├─ TLD.php
│  │           └─ Warning.php
│  ├─ fakerphp
│  │  └─ faker
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ rector-migrate.php
│  │     └─ src
│  │        ├─ Faker
│  │        │  ├─ Calculator
│  │        │  │  ├─ Ean.php
│  │        │  │  ├─ Iban.php
│  │        │  │  ├─ Inn.php
│  │        │  │  ├─ Isbn.php
│  │        │  │  ├─ Luhn.php
│  │        │  │  └─ TCNo.php
│  │        │  ├─ ChanceGenerator.php
│  │        │  ├─ Container
│  │        │  │  ├─ Container.php
│  │        │  │  ├─ ContainerBuilder.php
│  │        │  │  ├─ ContainerException.php
│  │        │  │  ├─ ContainerInterface.php
│  │        │  │  └─ NotInContainerException.php
│  │        │  ├─ Core
│  │        │  │  ├─ Barcode.php
│  │        │  │  ├─ Blood.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Coordinates.php
│  │        │  │  ├─ DateTime.php
│  │        │  │  ├─ File.php
│  │        │  │  ├─ Number.php
│  │        │  │  ├─ Uuid.php
│  │        │  │  └─ Version.php
│  │        │  ├─ DefaultGenerator.php
│  │        │  ├─ Documentor.php
│  │        │  ├─ Extension
│  │        │  │  ├─ AddressExtension.php
│  │        │  │  ├─ BarcodeExtension.php
│  │        │  │  ├─ BloodExtension.php
│  │        │  │  ├─ ColorExtension.php
│  │        │  │  ├─ CompanyExtension.php
│  │        │  │  ├─ CountryExtension.php
│  │        │  │  ├─ DateTimeExtension.php
│  │        │  │  ├─ Extension.php
│  │        │  │  ├─ ExtensionNotFound.php
│  │        │  │  ├─ FileExtension.php
│  │        │  │  ├─ GeneratorAwareExtension.php
│  │        │  │  ├─ GeneratorAwareExtensionTrait.php
│  │        │  │  ├─ Helper.php
│  │        │  │  ├─ NumberExtension.php
│  │        │  │  ├─ PersonExtension.php
│  │        │  │  ├─ PhoneNumberExtension.php
│  │        │  │  ├─ UuidExtension.php
│  │        │  │  └─ VersionExtension.php
│  │        │  ├─ Factory.php
│  │        │  ├─ Generator.php
│  │        │  ├─ Guesser
│  │        │  │  └─ Name.php
│  │        │  ├─ ORM
│  │        │  │  ├─ CakePHP
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  ├─ Doctrine
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  ├─ Populator.php
│  │        │  │  │  └─ backward-compatibility.php
│  │        │  │  ├─ Mandango
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  ├─ Propel
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  ├─ Propel2
│  │        │  │  │  ├─ ColumnTypeGuesser.php
│  │        │  │  │  ├─ EntityPopulator.php
│  │        │  │  │  └─ Populator.php
│  │        │  │  └─ Spot
│  │        │  │     ├─ ColumnTypeGuesser.php
│  │        │  │     ├─ EntityPopulator.php
│  │        │  │     └─ Populator.php
│  │        │  ├─ Provider
│  │        │  │  ├─ Address.php
│  │        │  │  ├─ Barcode.php
│  │        │  │  ├─ Base.php
│  │        │  │  ├─ Biased.php
│  │        │  │  ├─ Color.php
│  │        │  │  ├─ Company.php
│  │        │  │  ├─ DateTime.php
│  │        │  │  ├─ File.php
│  │        │  │  ├─ HtmlLorem.php
│  │        │  │  ├─ Image.php
│  │        │  │  ├─ Internet.php
│  │        │  │  ├─ Lorem.php
│  │        │  │  ├─ Medical.php
│  │        │  │  ├─ Miscellaneous.php
│  │        │  │  ├─ Payment.php
│  │        │  │  ├─ Person.php
│  │        │  │  ├─ PhoneNumber.php
│  │        │  │  ├─ Text.php
│  │        │  │  ├─ UserAgent.php
│  │        │  │  ├─ Uuid.php
│  │        │  │  ├─ ar_EG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ar_JO
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ar_SA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ at_AT
│  │        │  │  │  └─ Payment.php
│  │        │  │  ├─ bg_BG
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ bn_BD
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Utils.php
│  │        │  │  ├─ cs_CZ
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ da_DK
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ de_AT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ de_CH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ de_DE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ el_CY
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ el_GR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ en_AU
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_CA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_GB
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_HK
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_IN
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_NG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_NZ
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_PH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_SG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_UG
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ en_US
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ en_ZA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ es_AR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ es_ES
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ es_PE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ es_VE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ et_EE
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ fa_IR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ fi_FI
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ fr_BE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ fr_CA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ fr_CH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ fr_FR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ he_IL
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ hr_HR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ hu_HU
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ hy_AM
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ id_ID
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ is_IS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ it_CH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ it_IT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ja_JP
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ka_GE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ kk_KZ
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ko_KR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ lt_LT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ lv_LV
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ me_ME
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ mn_MN
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ ms_MY
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Miscellaneous.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ nb_NO
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ ne_NP
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ nl_BE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ nl_NL
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ pl_PL
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ LicensePlate.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ pt_BR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  ├─ Text.php
│  │        │  │  │  └─ check_digit.php
│  │        │  │  ├─ pt_PT
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ ro_MD
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ro_RO
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ ru_RU
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ sk_SK
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ sl_SI
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ sr_Cyrl_RS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ sr_Latn_RS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ sr_RS
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  └─ Person.php
│  │        │  │  ├─ sv_SE
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Municipality.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ th_TH
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ tr_TR
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ uk_UA
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  ├─ PhoneNumber.php
│  │        │  │  │  └─ Text.php
│  │        │  │  ├─ vi_VN
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  ├─ zh_CN
│  │        │  │  │  ├─ Address.php
│  │        │  │  │  ├─ Color.php
│  │        │  │  │  ├─ Company.php
│  │        │  │  │  ├─ DateTime.php
│  │        │  │  │  ├─ Internet.php
│  │        │  │  │  ├─ Payment.php
│  │        │  │  │  ├─ Person.php
│  │        │  │  │  └─ PhoneNumber.php
│  │        │  │  └─ zh_TW
│  │        │  │     ├─ Address.php
│  │        │  │     ├─ Color.php
│  │        │  │     ├─ Company.php
│  │        │  │     ├─ DateTime.php
│  │        │  │     ├─ Internet.php
│  │        │  │     ├─ Payment.php
│  │        │  │     ├─ Person.php
│  │        │  │     ├─ PhoneNumber.php
│  │        │  │     └─ Text.php
│  │        │  ├─ UniqueGenerator.php
│  │        │  └─ ValidGenerator.php
│  │        └─ autoload.php
│  ├─ filp
│  │  └─ whoops
│  │     ├─ .mailmap
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Whoops
│  │           ├─ Exception
│  │           │  ├─ ErrorException.php
│  │           │  ├─ Formatter.php
│  │           │  ├─ Frame.php
│  │           │  ├─ FrameCollection.php
│  │           │  └─ Inspector.php
│  │           ├─ Handler
│  │           │  ├─ CallbackHandler.php
│  │           │  ├─ Handler.php
│  │           │  ├─ HandlerInterface.php
│  │           │  ├─ JsonResponseHandler.php
│  │           │  ├─ PlainTextHandler.php
│  │           │  ├─ PrettyPageHandler.php
│  │           │  └─ XmlResponseHandler.php
│  │           ├─ Inspector
│  │           │  ├─ InspectorFactory.php
│  │           │  ├─ InspectorFactoryInterface.php
│  │           │  └─ InspectorInterface.php
│  │           ├─ Resources
│  │           │  ├─ css
│  │           │  │  ├─ prism.css
│  │           │  │  └─ whoops.base.css
│  │           │  ├─ js
│  │           │  │  ├─ clipboard.min.js
│  │           │  │  ├─ prism.js
│  │           │  │  ├─ whoops.base.js
│  │           │  │  └─ zepto.min.js
│  │           │  └─ views
│  │           │     ├─ env_details.html.php
│  │           │     ├─ frame_code.html.php
│  │           │     ├─ frame_list.html.php
│  │           │     ├─ frames_container.html.php
│  │           │     ├─ frames_description.html.php
│  │           │     ├─ header.html.php
│  │           │     ├─ header_outer.html.php
│  │           │     ├─ layout.html.php
│  │           │     ├─ panel_details.html.php
│  │           │     ├─ panel_details_outer.html.php
│  │           │     ├─ panel_left.html.php
│  │           │     └─ panel_left_outer.html.php
│  │           ├─ Run.php
│  │           ├─ RunInterface.php
│  │           └─ Util
│  │              ├─ HtmlDumperOutput.php
│  │              ├─ Misc.php
│  │              ├─ SystemFacade.php
│  │              └─ TemplateHelper.php
│  ├─ fruitcake
│  │  └─ php-cors
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ CorsService.php
│  │        └─ Exceptions
│  │           └─ InvalidOptionException.php
│  ├─ graham-campbell
│  │  └─ result-type
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Error.php
│  │        ├─ Result.php
│  │        └─ Success.php
│  ├─ guzzlehttp
│  │  ├─ guzzle
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ UPGRADING.md
│  │  │  ├─ composer.json
│  │  │  ├─ package-lock.json
│  │  │  └─ src
│  │  │     ├─ BodySummarizer.php
│  │  │     ├─ BodySummarizerInterface.php
│  │  │     ├─ Client.php
│  │  │     ├─ ClientInterface.php
│  │  │     ├─ ClientTrait.php
│  │  │     ├─ Cookie
│  │  │     │  ├─ CookieJar.php
│  │  │     │  ├─ CookieJarInterface.php
│  │  │     │  ├─ FileCookieJar.php
│  │  │     │  ├─ SessionCookieJar.php
│  │  │     │  └─ SetCookie.php
│  │  │     ├─ Exception
│  │  │     │  ├─ BadResponseException.php
│  │  │     │  ├─ ClientException.php
│  │  │     │  ├─ ConnectException.php
│  │  │     │  ├─ GuzzleException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ RequestException.php
│  │  │     │  ├─ ServerException.php
│  │  │     │  ├─ TooManyRedirectsException.php
│  │  │     │  └─ TransferException.php
│  │  │     ├─ Handler
│  │  │     │  ├─ CurlFactory.php
│  │  │     │  ├─ CurlFactoryInterface.php
│  │  │     │  ├─ CurlHandler.php
│  │  │     │  ├─ CurlMultiHandler.php
│  │  │     │  ├─ EasyHandle.php
│  │  │     │  ├─ HeaderProcessor.php
│  │  │     │  ├─ MockHandler.php
│  │  │     │  ├─ Proxy.php
│  │  │     │  └─ StreamHandler.php
│  │  │     ├─ HandlerStack.php
│  │  │     ├─ MessageFormatter.php
│  │  │     ├─ MessageFormatterInterface.php
│  │  │     ├─ Middleware.php
│  │  │     ├─ Pool.php
│  │  │     ├─ PrepareBodyMiddleware.php
│  │  │     ├─ RedirectMiddleware.php
│  │  │     ├─ RequestOptions.php
│  │  │     ├─ RetryMiddleware.php
│  │  │     ├─ TransferStats.php
│  │  │     ├─ Utils.php
│  │  │     ├─ functions.php
│  │  │     └─ functions_include.php
│  │  ├─ promises
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AggregateException.php
│  │  │     ├─ CancellationException.php
│  │  │     ├─ Coroutine.php
│  │  │     ├─ Create.php
│  │  │     ├─ Each.php
│  │  │     ├─ EachPromise.php
│  │  │     ├─ FulfilledPromise.php
│  │  │     ├─ Is.php
│  │  │     ├─ Promise.php
│  │  │     ├─ PromiseInterface.php
│  │  │     ├─ PromisorInterface.php
│  │  │     ├─ RejectedPromise.php
│  │  │     ├─ RejectionException.php
│  │  │     ├─ TaskQueue.php
│  │  │     ├─ TaskQueueInterface.php
│  │  │     └─ Utils.php
│  │  ├─ psr7
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AppendStream.php
│  │  │     ├─ BufferStream.php
│  │  │     ├─ CachingStream.php
│  │  │     ├─ DroppingStream.php
│  │  │     ├─ Exception
│  │  │     │  └─ MalformedUriException.php
│  │  │     ├─ FnStream.php
│  │  │     ├─ Header.php
│  │  │     ├─ HttpFactory.php
│  │  │     ├─ InflateStream.php
│  │  │     ├─ LazyOpenStream.php
│  │  │     ├─ LimitStream.php
│  │  │     ├─ Message.php
│  │  │     ├─ MessageTrait.php
│  │  │     ├─ MimeType.php
│  │  │     ├─ MultipartStream.php
│  │  │     ├─ NoSeekStream.php
│  │  │     ├─ PumpStream.php
│  │  │     ├─ Query.php
│  │  │     ├─ Request.php
│  │  │     ├─ Response.php
│  │  │     ├─ Rfc7230.php
│  │  │     ├─ ServerRequest.php
│  │  │     ├─ Stream.php
│  │  │     ├─ StreamDecoratorTrait.php
│  │  │     ├─ StreamWrapper.php
│  │  │     ├─ UploadedFile.php
│  │  │     ├─ Uri.php
│  │  │     ├─ UriComparator.php
│  │  │     ├─ UriNormalizer.php
│  │  │     ├─ UriResolver.php
│  │  │     └─ Utils.php
│  │  └─ uri-template
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ UriTemplate.php
│  ├─ hamcrest
│  │  └─ hamcrest-php
│  │     ├─ CHANGES.txt
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE.txt
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ generator
│  │     │  ├─ FactoryCall.php
│  │     │  ├─ FactoryClass.php
│  │     │  ├─ FactoryFile.php
│  │     │  ├─ FactoryGenerator.php
│  │     │  ├─ FactoryMethod.php
│  │     │  ├─ FactoryParameter.php
│  │     │  ├─ GlobalFunctionFile.php
│  │     │  ├─ StaticMethodFile.php
│  │     │  ├─ parts
│  │     │  │  ├─ file_header.txt
│  │     │  │  ├─ functions_footer.txt
│  │     │  │  ├─ functions_header.txt
│  │     │  │  ├─ functions_imports.txt
│  │     │  │  ├─ matchers_footer.txt
│  │     │  │  ├─ matchers_header.txt
│  │     │  │  └─ matchers_imports.txt
│  │     │  └─ run.php
│  │     └─ hamcrest
│  │        ├─ Hamcrest
│  │        │  ├─ Arrays
│  │        │  │  ├─ IsArray.php
│  │        │  │  ├─ IsArrayContaining.php
│  │        │  │  ├─ IsArrayContainingInAnyOrder.php
│  │        │  │  ├─ IsArrayContainingInOrder.php
│  │        │  │  ├─ IsArrayContainingKey.php
│  │        │  │  ├─ IsArrayContainingKeyValuePair.php
│  │        │  │  ├─ IsArrayWithSize.php
│  │        │  │  ├─ MatchingOnce.php
│  │        │  │  └─ SeriesMatchingOnce.php
│  │        │  ├─ AssertionError.php
│  │        │  ├─ BaseDescription.php
│  │        │  ├─ BaseMatcher.php
│  │        │  ├─ Collection
│  │        │  │  ├─ IsEmptyTraversable.php
│  │        │  │  └─ IsTraversableWithSize.php
│  │        │  ├─ Core
│  │        │  │  ├─ AllOf.php
│  │        │  │  ├─ AnyOf.php
│  │        │  │  ├─ CombinableMatcher.php
│  │        │  │  ├─ DescribedAs.php
│  │        │  │  ├─ Every.php
│  │        │  │  ├─ HasToString.php
│  │        │  │  ├─ Is.php
│  │        │  │  ├─ IsAnything.php
│  │        │  │  ├─ IsCollectionContaining.php
│  │        │  │  ├─ IsEqual.php
│  │        │  │  ├─ IsIdentical.php
│  │        │  │  ├─ IsInstanceOf.php
│  │        │  │  ├─ IsNot.php
│  │        │  │  ├─ IsNull.php
│  │        │  │  ├─ IsSame.php
│  │        │  │  ├─ IsTypeOf.php
│  │        │  │  ├─ Set.php
│  │        │  │  └─ ShortcutCombination.php
│  │        │  ├─ Description.php
│  │        │  ├─ DiagnosingMatcher.php
│  │        │  ├─ FeatureMatcher.php
│  │        │  ├─ Internal
│  │        │  │  └─ SelfDescribingValue.php
│  │        │  ├─ Matcher.php
│  │        │  ├─ MatcherAssert.php
│  │        │  ├─ Matchers.php
│  │        │  ├─ NullDescription.php
│  │        │  ├─ Number
│  │        │  │  ├─ IsCloseTo.php
│  │        │  │  └─ OrderingComparison.php
│  │        │  ├─ SelfDescribing.php
│  │        │  ├─ StringDescription.php
│  │        │  ├─ Text
│  │        │  │  ├─ IsEmptyString.php
│  │        │  │  ├─ IsEqualIgnoringCase.php
│  │        │  │  ├─ IsEqualIgnoringWhiteSpace.php
│  │        │  │  ├─ MatchesPattern.php
│  │        │  │  ├─ StringContains.php
│  │        │  │  ├─ StringContainsIgnoringCase.php
│  │        │  │  ├─ StringContainsInOrder.php
│  │        │  │  ├─ StringEndsWith.php
│  │        │  │  ├─ StringStartsWith.php
│  │        │  │  └─ SubstringMatcher.php
│  │        │  ├─ Type
│  │        │  │  ├─ IsArray.php
│  │        │  │  ├─ IsBoolean.php
│  │        │  │  ├─ IsCallable.php
│  │        │  │  ├─ IsDouble.php
│  │        │  │  ├─ IsInteger.php
│  │        │  │  ├─ IsNumeric.php
│  │        │  │  ├─ IsObject.php
│  │        │  │  ├─ IsResource.php
│  │        │  │  ├─ IsScalar.php
│  │        │  │  └─ IsString.php
│  │        │  ├─ TypeSafeDiagnosingMatcher.php
│  │        │  ├─ TypeSafeMatcher.php
│  │        │  ├─ Util.php
│  │        │  └─ Xml
│  │        │     └─ HasXPath.php
│  │        └─ Hamcrest.php
│  ├─ laminas
│  │  └─ laminas-diactoros
│  │     ├─ COPYRIGHT.md
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ AbstractSerializer.php
│  │        ├─ CallbackStream.php
│  │        ├─ ConfigProvider.php
│  │        ├─ Exception
│  │        │  ├─ DeserializationException.php
│  │        │  ├─ ExceptionInterface.php
│  │        │  ├─ InvalidArgumentException.php
│  │        │  ├─ InvalidForwardedHeaderNameException.php
│  │        │  ├─ InvalidProxyAddressException.php
│  │        │  ├─ InvalidStreamPointerPositionException.php
│  │        │  ├─ RuntimeException.php
│  │        │  ├─ SerializationException.php
│  │        │  ├─ UnreadableStreamException.php
│  │        │  ├─ UnrecognizedProtocolVersionException.php
│  │        │  ├─ UnrewindableStreamException.php
│  │        │  ├─ UnseekableStreamException.php
│  │        │  ├─ UntellableStreamException.php
│  │        │  ├─ UnwritableStreamException.php
│  │        │  ├─ UploadedFileAlreadyMovedException.php
│  │        │  └─ UploadedFileErrorException.php
│  │        ├─ HeaderSecurity.php
│  │        ├─ MessageTrait.php
│  │        ├─ Module.php
│  │        ├─ RelativeStream.php
│  │        ├─ Request
│  │        │  ├─ ArraySerializer.php
│  │        │  └─ Serializer.php
│  │        ├─ Request.php
│  │        ├─ RequestFactory.php
│  │        ├─ RequestTrait.php
│  │        ├─ Response
│  │        │  ├─ ArraySerializer.php
│  │        │  ├─ EmptyResponse.php
│  │        │  ├─ HtmlResponse.php
│  │        │  ├─ InjectContentTypeTrait.php
│  │        │  ├─ JsonResponse.php
│  │        │  ├─ RedirectResponse.php
│  │        │  ├─ Serializer.php
│  │        │  ├─ TextResponse.php
│  │        │  └─ XmlResponse.php
│  │        ├─ Response.php
│  │        ├─ ResponseFactory.php
│  │        ├─ ServerRequest.php
│  │        ├─ ServerRequestFactory.php
│  │        ├─ ServerRequestFilter
│  │        │  ├─ DoNotFilter.php
│  │        │  ├─ FilterServerRequestInterface.php
│  │        │  ├─ FilterUsingXForwardedHeaders.php
│  │        │  └─ IPRange.php
│  │        ├─ Stream.php
│  │        ├─ StreamFactory.php
│  │        ├─ UploadedFile.php
│  │        ├─ UploadedFileFactory.php
│  │        ├─ Uri.php
│  │        ├─ UriFactory.php
│  │        └─ functions
│  │           ├─ create_uploaded_file.php
│  │           ├─ marshal_headers_from_sapi.php
│  │           ├─ marshal_method_from_sapi.php
│  │           ├─ marshal_protocol_version_from_sapi.php
│  │           ├─ normalize_server.php
│  │           ├─ normalize_uploaded_files.php
│  │           └─ parse_cookie_header.php
│  ├─ laravel
│  │  ├─ framework
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  ├─ app.php
│  │  │  │  ├─ auth.php
│  │  │  │  ├─ broadcasting.php
│  │  │  │  ├─ cache.php
│  │  │  │  ├─ concurrency.php
│  │  │  │  ├─ cors.php
│  │  │  │  ├─ database.php
│  │  │  │  ├─ filesystems.php
│  │  │  │  ├─ hashing.php
│  │  │  │  ├─ logging.php
│  │  │  │  ├─ mail.php
│  │  │  │  ├─ queue.php
│  │  │  │  ├─ services.php
│  │  │  │  ├─ session.php
│  │  │  │  └─ view.php
│  │  │  ├─ config-stubs
│  │  │  │  └─ app.php
│  │  │  ├─ pint.json
│  │  │  └─ src
│  │  │     └─ Illuminate
│  │  │        ├─ Auth
│  │  │        │  ├─ Access
│  │  │        │  │  ├─ AuthorizationException.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ GateEvaluated.php
│  │  │        │  │  ├─ Gate.php
│  │  │        │  │  ├─ HandlesAuthorization.php
│  │  │        │  │  └─ Response.php
│  │  │        │  ├─ AuthManager.php
│  │  │        │  ├─ AuthServiceProvider.php
│  │  │        │  ├─ Authenticatable.php
│  │  │        │  ├─ AuthenticationException.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ ClearResetsCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ make
│  │  │        │  │        └─ views
│  │  │        │  │           └─ layouts
│  │  │        │  │              └─ app.stub
│  │  │        │  ├─ CreatesUserProviders.php
│  │  │        │  ├─ DatabaseUserProvider.php
│  │  │        │  ├─ EloquentUserProvider.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ Attempting.php
│  │  │        │  │  ├─ Authenticated.php
│  │  │        │  │  ├─ CurrentDeviceLogout.php
│  │  │        │  │  ├─ Failed.php
│  │  │        │  │  ├─ Lockout.php
│  │  │        │  │  ├─ Login.php
│  │  │        │  │  ├─ Logout.php
│  │  │        │  │  ├─ OtherDeviceLogout.php
│  │  │        │  │  ├─ PasswordReset.php
│  │  │        │  │  ├─ PasswordResetLinkSent.php
│  │  │        │  │  ├─ Registered.php
│  │  │        │  │  ├─ Validated.php
│  │  │        │  │  └─ Verified.php
│  │  │        │  ├─ GenericUser.php
│  │  │        │  ├─ GuardHelpers.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Listeners
│  │  │        │  │  └─ SendEmailVerificationNotification.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ Authenticate.php
│  │  │        │  │  ├─ AuthenticateWithBasicAuth.php
│  │  │        │  │  ├─ Authorize.php
│  │  │        │  │  ├─ EnsureEmailIsVerified.php
│  │  │        │  │  ├─ RedirectIfAuthenticated.php
│  │  │        │  │  └─ RequirePassword.php
│  │  │        │  ├─ MustVerifyEmail.php
│  │  │        │  ├─ Notifications
│  │  │        │  │  ├─ ResetPassword.php
│  │  │        │  │  └─ VerifyEmail.php
│  │  │        │  ├─ Passwords
│  │  │        │  │  ├─ CacheTokenRepository.php
│  │  │        │  │  ├─ CanResetPassword.php
│  │  │        │  │  ├─ DatabaseTokenRepository.php
│  │  │        │  │  ├─ PasswordBroker.php
│  │  │        │  │  ├─ PasswordBrokerManager.php
│  │  │        │  │  ├─ PasswordResetServiceProvider.php
│  │  │        │  │  └─ TokenRepositoryInterface.php
│  │  │        │  ├─ Recaller.php
│  │  │        │  ├─ RequestGuard.php
│  │  │        │  ├─ SessionGuard.php
│  │  │        │  ├─ TokenGuard.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Broadcasting
│  │  │        │  ├─ AnonymousEvent.php
│  │  │        │  ├─ BroadcastController.php
│  │  │        │  ├─ BroadcastEvent.php
│  │  │        │  ├─ BroadcastException.php
│  │  │        │  ├─ BroadcastManager.php
│  │  │        │  ├─ BroadcastServiceProvider.php
│  │  │        │  ├─ Broadcasters
│  │  │        │  │  ├─ AblyBroadcaster.php
│  │  │        │  │  ├─ Broadcaster.php
│  │  │        │  │  ├─ LogBroadcaster.php
│  │  │        │  │  ├─ NullBroadcaster.php
│  │  │        │  │  ├─ PusherBroadcaster.php
│  │  │        │  │  ├─ RedisBroadcaster.php
│  │  │        │  │  └─ UsePusherChannelConventions.php
│  │  │        │  ├─ Channel.php
│  │  │        │  ├─ EncryptedPrivateChannel.php
│  │  │        │  ├─ FakePendingBroadcast.php
│  │  │        │  ├─ InteractsWithBroadcasting.php
│  │  │        │  ├─ InteractsWithSockets.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingBroadcast.php
│  │  │        │  ├─ PresenceChannel.php
│  │  │        │  ├─ PrivateChannel.php
│  │  │        │  ├─ UniqueBroadcastEvent.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Bus
│  │  │        │  ├─ Batch.php
│  │  │        │  ├─ BatchFactory.php
│  │  │        │  ├─ BatchRepository.php
│  │  │        │  ├─ Batchable.php
│  │  │        │  ├─ BusServiceProvider.php
│  │  │        │  ├─ ChainedBatch.php
│  │  │        │  ├─ DatabaseBatchRepository.php
│  │  │        │  ├─ Dispatcher.php
│  │  │        │  ├─ DynamoBatchRepository.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ BatchDispatched.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingBatch.php
│  │  │        │  ├─ PrunableBatchRepository.php
│  │  │        │  ├─ Queueable.php
│  │  │        │  ├─ UniqueLock.php
│  │  │        │  ├─ UpdatedBatchJobCounts.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Cache
│  │  │        │  ├─ ApcStore.php
│  │  │        │  ├─ ApcWrapper.php
│  │  │        │  ├─ ArrayLock.php
│  │  │        │  ├─ ArrayStore.php
│  │  │        │  ├─ CacheLock.php
│  │  │        │  ├─ CacheManager.php
│  │  │        │  ├─ CacheServiceProvider.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ CacheTableCommand.php
│  │  │        │  │  ├─ ClearCommand.php
│  │  │        │  │  ├─ ForgetCommand.php
│  │  │        │  │  ├─ PruneStaleTagsCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ cache.stub
│  │  │        │  ├─ DatabaseLock.php
│  │  │        │  ├─ DatabaseStore.php
│  │  │        │  ├─ DynamoDbLock.php
│  │  │        │  ├─ DynamoDbStore.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ CacheEvent.php
│  │  │        │  │  ├─ CacheFailedOver.php
│  │  │        │  │  ├─ CacheFlushFailed.php
│  │  │        │  │  ├─ CacheFlushed.php
│  │  │        │  │  ├─ CacheFlushing.php
│  │  │        │  │  ├─ CacheHit.php
│  │  │        │  │  ├─ CacheMissed.php
│  │  │        │  │  ├─ ForgettingKey.php
│  │  │        │  │  ├─ KeyForgetFailed.php
│  │  │        │  │  ├─ KeyForgotten.php
│  │  │        │  │  ├─ KeyWriteFailed.php
│  │  │        │  │  ├─ KeyWritten.php
│  │  │        │  │  ├─ RetrievingKey.php
│  │  │        │  │  ├─ RetrievingManyKeys.php
│  │  │        │  │  ├─ WritingKey.php
│  │  │        │  │  └─ WritingManyKeys.php
│  │  │        │  ├─ FailoverStore.php
│  │  │        │  ├─ FileLock.php
│  │  │        │  ├─ FileStore.php
│  │  │        │  ├─ HasCacheLock.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Lock.php
│  │  │        │  ├─ LuaScripts.php
│  │  │        │  ├─ MemcachedConnector.php
│  │  │        │  ├─ MemcachedLock.php
│  │  │        │  ├─ MemcachedStore.php
│  │  │        │  ├─ MemoizedStore.php
│  │  │        │  ├─ NoLock.php
│  │  │        │  ├─ NullStore.php
│  │  │        │  ├─ PhpRedisLock.php
│  │  │        │  ├─ RateLimiter.php
│  │  │        │  ├─ RateLimiting
│  │  │        │  │  ├─ GlobalLimit.php
│  │  │        │  │  ├─ Limit.php
│  │  │        │  │  └─ Unlimited.php
│  │  │        │  ├─ RedisLock.php
│  │  │        │  ├─ RedisStore.php
│  │  │        │  ├─ RedisTagSet.php
│  │  │        │  ├─ RedisTaggedCache.php
│  │  │        │  ├─ Repository.php
│  │  │        │  ├─ RetrievesMultipleKeys.php
│  │  │        │  ├─ SessionStore.php
│  │  │        │  ├─ TagSet.php
│  │  │        │  ├─ TaggableStore.php
│  │  │        │  ├─ TaggedCache.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Collections
│  │  │        │  ├─ Arr.php
│  │  │        │  ├─ Collection.php
│  │  │        │  ├─ Enumerable.php
│  │  │        │  ├─ HigherOrderCollectionProxy.php
│  │  │        │  ├─ ItemNotFoundException.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LazyCollection.php
│  │  │        │  ├─ MultipleItemsFoundException.php
│  │  │        │  ├─ Traits
│  │  │        │  │  ├─ EnumeratesValues.php
│  │  │        │  │  └─ TransformsToResourceCollection.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ functions.php
│  │  │        │  └─ helpers.php
│  │  │        ├─ Concurrency
│  │  │        │  ├─ ConcurrencyManager.php
│  │  │        │  ├─ ConcurrencyServiceProvider.php
│  │  │        │  ├─ Console
│  │  │        │  │  └─ InvokeSerializedClosureCommand.php
│  │  │        │  ├─ ForkDriver.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ ProcessDriver.php
│  │  │        │  ├─ SyncDriver.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Conditionable
│  │  │        │  ├─ HigherOrderWhenProxy.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Traits
│  │  │        │  │  └─ Conditionable.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Config
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Repository.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Console
│  │  │        │  ├─ Application.php
│  │  │        │  ├─ BufferedConsoleOutput.php
│  │  │        │  ├─ CacheCommandMutex.php
│  │  │        │  ├─ Command.php
│  │  │        │  ├─ CommandMutex.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ CallsCommands.php
│  │  │        │  │  ├─ ConfiguresPrompts.php
│  │  │        │  │  ├─ CreatesMatchingTest.php
│  │  │        │  │  ├─ FindsAvailableModels.php
│  │  │        │  │  ├─ HasParameters.php
│  │  │        │  │  ├─ InteractsWithIO.php
│  │  │        │  │  ├─ InteractsWithSignals.php
│  │  │        │  │  └─ PromptsForMissingInput.php
│  │  │        │  ├─ ConfirmableTrait.php
│  │  │        │  ├─ ContainerCommandLoader.php
│  │  │        │  ├─ Contracts
│  │  │        │  │  └─ NewLineAware.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ ArtisanStarting.php
│  │  │        │  │  ├─ CommandFinished.php
│  │  │        │  │  ├─ CommandStarting.php
│  │  │        │  │  ├─ ScheduledBackgroundTaskFinished.php
│  │  │        │  │  ├─ ScheduledTaskFailed.php
│  │  │        │  │  ├─ ScheduledTaskFinished.php
│  │  │        │  │  ├─ ScheduledTaskSkipped.php
│  │  │        │  │  └─ ScheduledTaskStarting.php
│  │  │        │  ├─ GeneratorCommand.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ ManuallyFailedException.php
│  │  │        │  ├─ MigrationGeneratorCommand.php
│  │  │        │  ├─ OutputStyle.php
│  │  │        │  ├─ Parser.php
│  │  │        │  ├─ Prohibitable.php
│  │  │        │  ├─ PromptValidationException.php
│  │  │        │  ├─ QuestionHelper.php
│  │  │        │  ├─ Scheduling
│  │  │        │  │  ├─ CacheAware.php
│  │  │        │  │  ├─ CacheEventMutex.php
│  │  │        │  │  ├─ CacheSchedulingMutex.php
│  │  │        │  │  ├─ CallbackEvent.php
│  │  │        │  │  ├─ CommandBuilder.php
│  │  │        │  │  ├─ Event.php
│  │  │        │  │  ├─ EventMutex.php
│  │  │        │  │  ├─ ManagesAttributes.php
│  │  │        │  │  ├─ ManagesFrequencies.php
│  │  │        │  │  ├─ PendingEventAttributes.php
│  │  │        │  │  ├─ Schedule.php
│  │  │        │  │  ├─ ScheduleClearCacheCommand.php
│  │  │        │  │  ├─ ScheduleFinishCommand.php
│  │  │        │  │  ├─ ScheduleInterruptCommand.php
│  │  │        │  │  ├─ ScheduleListCommand.php
│  │  │        │  │  ├─ ScheduleRunCommand.php
│  │  │        │  │  ├─ ScheduleTestCommand.php
│  │  │        │  │  ├─ ScheduleWorkCommand.php
│  │  │        │  │  └─ SchedulingMutex.php
│  │  │        │  ├─ Signals.php
│  │  │        │  ├─ View
│  │  │        │  │  ├─ Components
│  │  │        │  │  │  ├─ Alert.php
│  │  │        │  │  │  ├─ Ask.php
│  │  │        │  │  │  ├─ AskWithCompletion.php
│  │  │        │  │  │  ├─ BulletList.php
│  │  │        │  │  │  ├─ Choice.php
│  │  │        │  │  │  ├─ Component.php
│  │  │        │  │  │  ├─ Confirm.php
│  │  │        │  │  │  ├─ Error.php
│  │  │        │  │  │  ├─ Factory.php
│  │  │        │  │  │  ├─ Info.php
│  │  │        │  │  │  ├─ Line.php
│  │  │        │  │  │  ├─ Mutators
│  │  │        │  │  │  │  ├─ EnsureDynamicContentIsHighlighted.php
│  │  │        │  │  │  │  ├─ EnsureNoPunctuation.php
│  │  │        │  │  │  │  ├─ EnsurePunctuation.php
│  │  │        │  │  │  │  └─ EnsureRelativePaths.php
│  │  │        │  │  │  ├─ Secret.php
│  │  │        │  │  │  ├─ Success.php
│  │  │        │  │  │  ├─ Task.php
│  │  │        │  │  │  ├─ TwoColumnDetail.php
│  │  │        │  │  │  └─ Warn.php
│  │  │        │  │  └─ TaskResult.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        └─ components
│  │  │        │           ├─ alert.php
│  │  │        │           ├─ bullet-list.php
│  │  │        │           ├─ line.php
│  │  │        │           └─ two-column-detail.php
│  │  │        ├─ Container
│  │  │        │  ├─ Attributes
│  │  │        │  │  ├─ Auth.php
│  │  │        │  │  ├─ Authenticated.php
│  │  │        │  │  ├─ Bind.php
│  │  │        │  │  ├─ Cache.php
│  │  │        │  │  ├─ Config.php
│  │  │        │  │  ├─ Context.php
│  │  │        │  │  ├─ CurrentUser.php
│  │  │        │  │  ├─ DB.php
│  │  │        │  │  ├─ Database.php
│  │  │        │  │  ├─ Give.php
│  │  │        │  │  ├─ Log.php
│  │  │        │  │  ├─ RouteParameter.php
│  │  │        │  │  ├─ Scoped.php
│  │  │        │  │  ├─ Singleton.php
│  │  │        │  │  ├─ Storage.php
│  │  │        │  │  └─ Tag.php
│  │  │        │  ├─ BoundMethod.php
│  │  │        │  ├─ Container.php
│  │  │        │  ├─ ContextualBindingBuilder.php
│  │  │        │  ├─ EntryNotFoundException.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ RewindableGenerator.php
│  │  │        │  ├─ Util.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Contracts
│  │  │        │  ├─ Auth
│  │  │        │  │  ├─ Access
│  │  │        │  │  │  ├─ Authorizable.php
│  │  │        │  │  │  └─ Gate.php
│  │  │        │  │  ├─ Authenticatable.php
│  │  │        │  │  ├─ CanResetPassword.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Guard.php
│  │  │        │  │  ├─ Middleware
│  │  │        │  │  │  └─ AuthenticatesRequests.php
│  │  │        │  │  ├─ MustVerifyEmail.php
│  │  │        │  │  ├─ PasswordBroker.php
│  │  │        │  │  ├─ PasswordBrokerFactory.php
│  │  │        │  │  ├─ StatefulGuard.php
│  │  │        │  │  ├─ SupportsBasicAuth.php
│  │  │        │  │  └─ UserProvider.php
│  │  │        │  ├─ Broadcasting
│  │  │        │  │  ├─ Broadcaster.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ HasBroadcastChannel.php
│  │  │        │  │  ├─ ShouldBeUnique.php
│  │  │        │  │  ├─ ShouldBroadcast.php
│  │  │        │  │  ├─ ShouldBroadcastNow.php
│  │  │        │  │  └─ ShouldRescue.php
│  │  │        │  ├─ Bus
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  └─ QueueingDispatcher.php
│  │  │        │  ├─ Cache
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Lock.php
│  │  │        │  │  ├─ LockProvider.php
│  │  │        │  │  ├─ LockTimeoutException.php
│  │  │        │  │  ├─ Repository.php
│  │  │        │  │  └─ Store.php
│  │  │        │  ├─ Concurrency
│  │  │        │  │  └─ Driver.php
│  │  │        │  ├─ Config
│  │  │        │  │  └─ Repository.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ Application.php
│  │  │        │  │  ├─ Isolatable.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  └─ PromptsForMissingInput.php
│  │  │        │  ├─ Container
│  │  │        │  │  ├─ BindingResolutionException.php
│  │  │        │  │  ├─ CircularDependencyException.php
│  │  │        │  │  ├─ Container.php
│  │  │        │  │  ├─ ContextualAttribute.php
│  │  │        │  │  ├─ ContextualBindingBuilder.php
│  │  │        │  │  └─ SelfBuilding.php
│  │  │        │  ├─ Cookie
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  └─ QueueingFactory.php
│  │  │        │  ├─ Database
│  │  │        │  │  ├─ ConcurrencyErrorDetector.php
│  │  │        │  │  ├─ Eloquent
│  │  │        │  │  │  ├─ Builder.php
│  │  │        │  │  │  ├─ Castable.php
│  │  │        │  │  │  ├─ CastsAttributes.php
│  │  │        │  │  │  ├─ CastsInboundAttributes.php
│  │  │        │  │  │  ├─ ComparesCastableAttributes.php
│  │  │        │  │  │  ├─ DeviatesCastableAttributes.php
│  │  │        │  │  │  ├─ SerializesCastableAttributes.php
│  │  │        │  │  │  └─ SupportsPartialRelations.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ MigrationEvent.php
│  │  │        │  │  ├─ LostConnectionDetector.php
│  │  │        │  │  ├─ ModelIdentifier.php
│  │  │        │  │  └─ Query
│  │  │        │  │     ├─ Builder.php
│  │  │        │  │     ├─ ConditionExpression.php
│  │  │        │  │     └─ Expression.php
│  │  │        │  ├─ Debug
│  │  │        │  │  ├─ ExceptionHandler.php
│  │  │        │  │  └─ ShouldntReport.php
│  │  │        │  ├─ Encryption
│  │  │        │  │  ├─ DecryptException.php
│  │  │        │  │  ├─ EncryptException.php
│  │  │        │  │  ├─ Encrypter.php
│  │  │        │  │  └─ StringEncrypter.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  ├─ ShouldDispatchAfterCommit.php
│  │  │        │  │  └─ ShouldHandleEventsAfterCommit.php
│  │  │        │  ├─ Filesystem
│  │  │        │  │  ├─ Cloud.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ FileNotFoundException.php
│  │  │        │  │  ├─ Filesystem.php
│  │  │        │  │  └─ LockTimeoutException.php
│  │  │        │  ├─ Foundation
│  │  │        │  │  ├─ Application.php
│  │  │        │  │  ├─ CachesConfiguration.php
│  │  │        │  │  ├─ CachesRoutes.php
│  │  │        │  │  ├─ ExceptionRenderer.php
│  │  │        │  │  └─ MaintenanceMode.php
│  │  │        │  ├─ Hashing
│  │  │        │  │  └─ Hasher.php
│  │  │        │  ├─ Http
│  │  │        │  │  └─ Kernel.php
│  │  │        │  ├─ JsonSchema
│  │  │        │  │  └─ JsonSchema.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Log
│  │  │        │  │  └─ ContextLogProcessor.php
│  │  │        │  ├─ Mail
│  │  │        │  │  ├─ Attachable.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ MailQueue.php
│  │  │        │  │  ├─ Mailable.php
│  │  │        │  │  └─ Mailer.php
│  │  │        │  ├─ Notifications
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  └─ Factory.php
│  │  │        │  ├─ Pagination
│  │  │        │  │  ├─ CursorPaginator.php
│  │  │        │  │  ├─ LengthAwarePaginator.php
│  │  │        │  │  └─ Paginator.php
│  │  │        │  ├─ Pipeline
│  │  │        │  │  ├─ Hub.php
│  │  │        │  │  └─ Pipeline.php
│  │  │        │  ├─ Process
│  │  │        │  │  ├─ InvokedProcess.php
│  │  │        │  │  └─ ProcessResult.php
│  │  │        │  ├─ Queue
│  │  │        │  │  ├─ ClearableQueue.php
│  │  │        │  │  ├─ EntityNotFoundException.php
│  │  │        │  │  ├─ EntityResolver.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Job.php
│  │  │        │  │  ├─ Monitor.php
│  │  │        │  │  ├─ Queue.php
│  │  │        │  │  ├─ QueueableCollection.php
│  │  │        │  │  ├─ QueueableEntity.php
│  │  │        │  │  ├─ ShouldBeEncrypted.php
│  │  │        │  │  ├─ ShouldBeUnique.php
│  │  │        │  │  ├─ ShouldBeUniqueUntilProcessing.php
│  │  │        │  │  ├─ ShouldQueue.php
│  │  │        │  │  └─ ShouldQueueAfterCommit.php
│  │  │        │  ├─ Redis
│  │  │        │  │  ├─ Connection.php
│  │  │        │  │  ├─ Connector.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  └─ LimiterTimeoutException.php
│  │  │        │  ├─ Routing
│  │  │        │  │  ├─ BindingRegistrar.php
│  │  │        │  │  ├─ Registrar.php
│  │  │        │  │  ├─ ResponseFactory.php
│  │  │        │  │  ├─ UrlGenerator.php
│  │  │        │  │  └─ UrlRoutable.php
│  │  │        │  ├─ Session
│  │  │        │  │  ├─ Middleware
│  │  │        │  │  │  └─ AuthenticatesSessions.php
│  │  │        │  │  └─ Session.php
│  │  │        │  ├─ Support
│  │  │        │  │  ├─ Arrayable.php
│  │  │        │  │  ├─ CanBeEscapedWhenCastToString.php
│  │  │        │  │  ├─ DeferrableProvider.php
│  │  │        │  │  ├─ DeferringDisplayableValue.php
│  │  │        │  │  ├─ HasOnceHash.php
│  │  │        │  │  ├─ Htmlable.php
│  │  │        │  │  ├─ Jsonable.php
│  │  │        │  │  ├─ MessageBag.php
│  │  │        │  │  ├─ MessageProvider.php
│  │  │        │  │  ├─ Renderable.php
│  │  │        │  │  ├─ Responsable.php
│  │  │        │  │  └─ ValidatedData.php
│  │  │        │  ├─ Translation
│  │  │        │  │  ├─ HasLocalePreference.php
│  │  │        │  │  ├─ Loader.php
│  │  │        │  │  └─ Translator.php
│  │  │        │  ├─ Validation
│  │  │        │  │  ├─ CompilableRules.php
│  │  │        │  │  ├─ DataAwareRule.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ ImplicitRule.php
│  │  │        │  │  ├─ InvokableRule.php
│  │  │        │  │  ├─ Rule.php
│  │  │        │  │  ├─ UncompromisedVerifier.php
│  │  │        │  │  ├─ ValidatesWhenResolved.php
│  │  │        │  │  ├─ ValidationRule.php
│  │  │        │  │  ├─ Validator.php
│  │  │        │  │  └─ ValidatorAwareRule.php
│  │  │        │  ├─ View
│  │  │        │  │  ├─ Engine.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ View.php
│  │  │        │  │  └─ ViewCompilationException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Cookie
│  │  │        │  ├─ CookieJar.php
│  │  │        │  ├─ CookieServiceProvider.php
│  │  │        │  ├─ CookieValuePrefix.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AddQueuedCookiesToResponse.php
│  │  │        │  │  └─ EncryptCookies.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Database
│  │  │        │  ├─ Capsule
│  │  │        │  │  └─ Manager.php
│  │  │        │  ├─ ClassMorphViolationException.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ BuildsQueries.php
│  │  │        │  │  ├─ BuildsWhereDateClauses.php
│  │  │        │  │  ├─ CompilesJsonPaths.php
│  │  │        │  │  ├─ ExplainsQueries.php
│  │  │        │  │  ├─ ManagesTransactions.php
│  │  │        │  │  └─ ParsesSearchPath.php
│  │  │        │  ├─ ConcurrencyErrorDetector.php
│  │  │        │  ├─ ConfigurationUrlParser.php
│  │  │        │  ├─ Connection.php
│  │  │        │  ├─ ConnectionInterface.php
│  │  │        │  ├─ ConnectionResolver.php
│  │  │        │  ├─ ConnectionResolverInterface.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ ConnectionFactory.php
│  │  │        │  │  ├─ Connector.php
│  │  │        │  │  ├─ ConnectorInterface.php
│  │  │        │  │  ├─ MariaDbConnector.php
│  │  │        │  │  ├─ MySqlConnector.php
│  │  │        │  │  ├─ PostgresConnector.php
│  │  │        │  │  ├─ SQLiteConnector.php
│  │  │        │  │  └─ SqlServerConnector.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ DatabaseInspectionCommand.php
│  │  │        │  │  ├─ DbCommand.php
│  │  │        │  │  ├─ DumpCommand.php
│  │  │        │  │  ├─ Factories
│  │  │        │  │  │  ├─ FactoryMakeCommand.php
│  │  │        │  │  │  └─ stubs
│  │  │        │  │  │     └─ factory.stub
│  │  │        │  │  ├─ Migrations
│  │  │        │  │  │  ├─ BaseCommand.php
│  │  │        │  │  │  ├─ FreshCommand.php
│  │  │        │  │  │  ├─ InstallCommand.php
│  │  │        │  │  │  ├─ MigrateCommand.php
│  │  │        │  │  │  ├─ MigrateMakeCommand.php
│  │  │        │  │  │  ├─ RefreshCommand.php
│  │  │        │  │  │  ├─ ResetCommand.php
│  │  │        │  │  │  ├─ RollbackCommand.php
│  │  │        │  │  │  ├─ StatusCommand.php
│  │  │        │  │  │  └─ TableGuesser.php
│  │  │        │  │  ├─ MonitorCommand.php
│  │  │        │  │  ├─ PruneCommand.php
│  │  │        │  │  ├─ Seeds
│  │  │        │  │  │  ├─ SeedCommand.php
│  │  │        │  │  │  ├─ SeederMakeCommand.php
│  │  │        │  │  │  ├─ WithoutModelEvents.php
│  │  │        │  │  │  └─ stubs
│  │  │        │  │  │     └─ seeder.stub
│  │  │        │  │  ├─ ShowCommand.php
│  │  │        │  │  ├─ ShowModelCommand.php
│  │  │        │  │  ├─ TableCommand.php
│  │  │        │  │  └─ WipeCommand.php
│  │  │        │  ├─ DatabaseManager.php
│  │  │        │  ├─ DatabaseServiceProvider.php
│  │  │        │  ├─ DatabaseTransactionRecord.php
│  │  │        │  ├─ DatabaseTransactionsManager.php
│  │  │        │  ├─ DeadlockException.php
│  │  │        │  ├─ DetectsConcurrencyErrors.php
│  │  │        │  ├─ DetectsLostConnections.php
│  │  │        │  ├─ Eloquent
│  │  │        │  │  ├─ Attributes
│  │  │        │  │  │  ├─ Boot.php
│  │  │        │  │  │  ├─ CollectedBy.php
│  │  │        │  │  │  ├─ Initialize.php
│  │  │        │  │  │  ├─ ObservedBy.php
│  │  │        │  │  │  ├─ Scope.php
│  │  │        │  │  │  ├─ ScopedBy.php
│  │  │        │  │  │  ├─ UseEloquentBuilder.php
│  │  │        │  │  │  ├─ UseFactory.php
│  │  │        │  │  │  ├─ UsePolicy.php
│  │  │        │  │  │  ├─ UseResource.php
│  │  │        │  │  │  └─ UseResourceCollection.php
│  │  │        │  │  ├─ BroadcastableModelEventOccurred.php
│  │  │        │  │  ├─ BroadcastsEvents.php
│  │  │        │  │  ├─ BroadcastsEventsAfterCommit.php
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ Casts
│  │  │        │  │  │  ├─ ArrayObject.php
│  │  │        │  │  │  ├─ AsArrayObject.php
│  │  │        │  │  │  ├─ AsBinary.php
│  │  │        │  │  │  ├─ AsCollection.php
│  │  │        │  │  │  ├─ AsEncryptedArrayObject.php
│  │  │        │  │  │  ├─ AsEncryptedCollection.php
│  │  │        │  │  │  ├─ AsEnumArrayObject.php
│  │  │        │  │  │  ├─ AsEnumCollection.php
│  │  │        │  │  │  ├─ AsFluent.php
│  │  │        │  │  │  ├─ AsHtmlString.php
│  │  │        │  │  │  ├─ AsStringable.php
│  │  │        │  │  │  ├─ AsUri.php
│  │  │        │  │  │  ├─ Attribute.php
│  │  │        │  │  │  └─ Json.php
│  │  │        │  │  ├─ Collection.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  ├─ GuardsAttributes.php
│  │  │        │  │  │  ├─ HasAttributes.php
│  │  │        │  │  │  ├─ HasEvents.php
│  │  │        │  │  │  ├─ HasGlobalScopes.php
│  │  │        │  │  │  ├─ HasRelationships.php
│  │  │        │  │  │  ├─ HasTimestamps.php
│  │  │        │  │  │  ├─ HasUlids.php
│  │  │        │  │  │  ├─ HasUniqueIds.php
│  │  │        │  │  │  ├─ HasUniqueStringIds.php
│  │  │        │  │  │  ├─ HasUuids.php
│  │  │        │  │  │  ├─ HasVersion4Uuids.php
│  │  │        │  │  │  ├─ HidesAttributes.php
│  │  │        │  │  │  ├─ PreventsCircularRecursion.php
│  │  │        │  │  │  ├─ QueriesRelationships.php
│  │  │        │  │  │  └─ TransformsToResource.php
│  │  │        │  │  ├─ Factories
│  │  │        │  │  │  ├─ BelongsToManyRelationship.php
│  │  │        │  │  │  ├─ BelongsToRelationship.php
│  │  │        │  │  │  ├─ CrossJoinSequence.php
│  │  │        │  │  │  ├─ Factory.php
│  │  │        │  │  │  ├─ HasFactory.php
│  │  │        │  │  │  ├─ Relationship.php
│  │  │        │  │  │  └─ Sequence.php
│  │  │        │  │  ├─ HasBuilder.php
│  │  │        │  │  ├─ HasCollection.php
│  │  │        │  │  ├─ HigherOrderBuilderProxy.php
│  │  │        │  │  ├─ InvalidCastException.php
│  │  │        │  │  ├─ JsonEncodingException.php
│  │  │        │  │  ├─ MassAssignmentException.php
│  │  │        │  │  ├─ MassPrunable.php
│  │  │        │  │  ├─ MissingAttributeException.php
│  │  │        │  │  ├─ Model.php
│  │  │        │  │  ├─ ModelInspector.php
│  │  │        │  │  ├─ ModelNotFoundException.php
│  │  │        │  │  ├─ PendingHasThroughRelationship.php
│  │  │        │  │  ├─ Prunable.php
│  │  │        │  │  ├─ QueueEntityResolver.php
│  │  │        │  │  ├─ RelationNotFoundException.php
│  │  │        │  │  ├─ Relations
│  │  │        │  │  │  ├─ BelongsTo.php
│  │  │        │  │  │  ├─ BelongsToMany.php
│  │  │        │  │  │  ├─ Concerns
│  │  │        │  │  │  │  ├─ AsPivot.php
│  │  │        │  │  │  │  ├─ CanBeOneOfMany.php
│  │  │        │  │  │  │  ├─ ComparesRelatedModels.php
│  │  │        │  │  │  │  ├─ InteractsWithDictionary.php
│  │  │        │  │  │  │  ├─ InteractsWithPivotTable.php
│  │  │        │  │  │  │  ├─ SupportsDefaultModels.php
│  │  │        │  │  │  │  └─ SupportsInverseRelations.php
│  │  │        │  │  │  ├─ HasMany.php
│  │  │        │  │  │  ├─ HasManyThrough.php
│  │  │        │  │  │  ├─ HasOne.php
│  │  │        │  │  │  ├─ HasOneOrMany.php
│  │  │        │  │  │  ├─ HasOneOrManyThrough.php
│  │  │        │  │  │  ├─ HasOneThrough.php
│  │  │        │  │  │  ├─ MorphMany.php
│  │  │        │  │  │  ├─ MorphOne.php
│  │  │        │  │  │  ├─ MorphOneOrMany.php
│  │  │        │  │  │  ├─ MorphPivot.php
│  │  │        │  │  │  ├─ MorphTo.php
│  │  │        │  │  │  ├─ MorphToMany.php
│  │  │        │  │  │  ├─ Pivot.php
│  │  │        │  │  │  └─ Relation.php
│  │  │        │  │  ├─ Scope.php
│  │  │        │  │  ├─ SoftDeletes.php
│  │  │        │  │  └─ SoftDeletingScope.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ ConnectionEstablished.php
│  │  │        │  │  ├─ ConnectionEvent.php
│  │  │        │  │  ├─ DatabaseBusy.php
│  │  │        │  │  ├─ DatabaseRefreshed.php
│  │  │        │  │  ├─ MigrationEnded.php
│  │  │        │  │  ├─ MigrationEvent.php
│  │  │        │  │  ├─ MigrationSkipped.php
│  │  │        │  │  ├─ MigrationStarted.php
│  │  │        │  │  ├─ MigrationsEnded.php
│  │  │        │  │  ├─ MigrationsEvent.php
│  │  │        │  │  ├─ MigrationsPruned.php
│  │  │        │  │  ├─ MigrationsStarted.php
│  │  │        │  │  ├─ ModelPruningFinished.php
│  │  │        │  │  ├─ ModelPruningStarting.php
│  │  │        │  │  ├─ ModelsPruned.php
│  │  │        │  │  ├─ NoPendingMigrations.php
│  │  │        │  │  ├─ QueryExecuted.php
│  │  │        │  │  ├─ SchemaDumped.php
│  │  │        │  │  ├─ SchemaLoaded.php
│  │  │        │  │  ├─ StatementPrepared.php
│  │  │        │  │  ├─ TransactionBeginning.php
│  │  │        │  │  ├─ TransactionCommitted.php
│  │  │        │  │  ├─ TransactionCommitting.php
│  │  │        │  │  └─ TransactionRolledBack.php
│  │  │        │  ├─ Grammar.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LazyLoadingViolationException.php
│  │  │        │  ├─ LostConnectionDetector.php
│  │  │        │  ├─ LostConnectionException.php
│  │  │        │  ├─ MariaDbConnection.php
│  │  │        │  ├─ MigrationServiceProvider.php
│  │  │        │  ├─ Migrations
│  │  │        │  │  ├─ DatabaseMigrationRepository.php
│  │  │        │  │  ├─ Migration.php
│  │  │        │  │  ├─ MigrationCreator.php
│  │  │        │  │  ├─ MigrationRepositoryInterface.php
│  │  │        │  │  ├─ MigrationResult.php
│  │  │        │  │  ├─ Migrator.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ migration.create.stub
│  │  │        │  │     ├─ migration.stub
│  │  │        │  │     └─ migration.update.stub
│  │  │        │  ├─ MultipleColumnsSelectedException.php
│  │  │        │  ├─ MultipleRecordsFoundException.php
│  │  │        │  ├─ MySqlConnection.php
│  │  │        │  ├─ PostgresConnection.php
│  │  │        │  ├─ Query
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ Expression.php
│  │  │        │  │  ├─ Grammars
│  │  │        │  │  │  ├─ Grammar.php
│  │  │        │  │  │  ├─ MariaDbGrammar.php
│  │  │        │  │  │  ├─ MySqlGrammar.php
│  │  │        │  │  │  ├─ PostgresGrammar.php
│  │  │        │  │  │  ├─ SQLiteGrammar.php
│  │  │        │  │  │  └─ SqlServerGrammar.php
│  │  │        │  │  ├─ IndexHint.php
│  │  │        │  │  ├─ JoinClause.php
│  │  │        │  │  ├─ JoinLateralClause.php
│  │  │        │  │  └─ Processors
│  │  │        │  │     ├─ MariaDbProcessor.php
│  │  │        │  │     ├─ MySqlProcessor.php
│  │  │        │  │     ├─ PostgresProcessor.php
│  │  │        │  │     ├─ Processor.php
│  │  │        │  │     ├─ SQLiteProcessor.php
│  │  │        │  │     └─ SqlServerProcessor.php
│  │  │        │  ├─ QueryException.php
│  │  │        │  ├─ README.md
│  │  │        │  ├─ RecordNotFoundException.php
│  │  │        │  ├─ RecordsNotFoundException.php
│  │  │        │  ├─ SQLiteConnection.php
│  │  │        │  ├─ SQLiteDatabaseDoesNotExistException.php
│  │  │        │  ├─ Schema
│  │  │        │  │  ├─ Blueprint.php
│  │  │        │  │  ├─ BlueprintState.php
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ ColumnDefinition.php
│  │  │        │  │  ├─ ForeignIdColumnDefinition.php
│  │  │        │  │  ├─ ForeignKeyDefinition.php
│  │  │        │  │  ├─ Grammars
│  │  │        │  │  │  ├─ Grammar.php
│  │  │        │  │  │  ├─ MariaDbGrammar.php
│  │  │        │  │  │  ├─ MySqlGrammar.php
│  │  │        │  │  │  ├─ PostgresGrammar.php
│  │  │        │  │  │  ├─ SQLiteGrammar.php
│  │  │        │  │  │  └─ SqlServerGrammar.php
│  │  │        │  │  ├─ IndexDefinition.php
│  │  │        │  │  ├─ MariaDbBuilder.php
│  │  │        │  │  ├─ MariaDbSchemaState.php
│  │  │        │  │  ├─ MySqlBuilder.php
│  │  │        │  │  ├─ MySqlSchemaState.php
│  │  │        │  │  ├─ PostgresBuilder.php
│  │  │        │  │  ├─ PostgresSchemaState.php
│  │  │        │  │  ├─ SQLiteBuilder.php
│  │  │        │  │  ├─ SchemaState.php
│  │  │        │  │  ├─ SqlServerBuilder.php
│  │  │        │  │  └─ SqliteSchemaState.php
│  │  │        │  ├─ Seeder.php
│  │  │        │  ├─ SqlServerConnection.php
│  │  │        │  ├─ UniqueConstraintViolationException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Encryption
│  │  │        │  ├─ Encrypter.php
│  │  │        │  ├─ EncryptionServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MissingAppKeyException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Events
│  │  │        │  ├─ CallQueuedListener.php
│  │  │        │  ├─ Dispatcher.php
│  │  │        │  ├─ EventServiceProvider.php
│  │  │        │  ├─ InvokeQueuedClosure.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ NullDispatcher.php
│  │  │        │  ├─ QueuedClosure.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ functions.php
│  │  │        ├─ Filesystem
│  │  │        │  ├─ AwsS3V3Adapter.php
│  │  │        │  ├─ Filesystem.php
│  │  │        │  ├─ FilesystemAdapter.php
│  │  │        │  ├─ FilesystemManager.php
│  │  │        │  ├─ FilesystemServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LocalFilesystemAdapter.php
│  │  │        │  ├─ LockableFile.php
│  │  │        │  ├─ ServeFile.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ functions.php
│  │  │        ├─ Foundation
│  │  │        │  ├─ AliasLoader.php
│  │  │        │  ├─ Application.php
│  │  │        │  ├─ Auth
│  │  │        │  │  ├─ Access
│  │  │        │  │  │  ├─ Authorizable.php
│  │  │        │  │  │  └─ AuthorizesRequests.php
│  │  │        │  │  ├─ EmailVerificationRequest.php
│  │  │        │  │  └─ User.php
│  │  │        │  ├─ Bootstrap
│  │  │        │  │  ├─ BootProviders.php
│  │  │        │  │  ├─ HandleExceptions.php
│  │  │        │  │  ├─ LoadConfiguration.php
│  │  │        │  │  ├─ LoadEnvironmentVariables.php
│  │  │        │  │  ├─ RegisterFacades.php
│  │  │        │  │  ├─ RegisterProviders.php
│  │  │        │  │  └─ SetRequestForConsole.php
│  │  │        │  ├─ Bus
│  │  │        │  │  ├─ Dispatchable.php
│  │  │        │  │  ├─ DispatchesJobs.php
│  │  │        │  │  ├─ PendingChain.php
│  │  │        │  │  ├─ PendingClosureDispatch.php
│  │  │        │  │  └─ PendingDispatch.php
│  │  │        │  ├─ CacheBasedMaintenanceMode.php
│  │  │        │  ├─ Cloud.php
│  │  │        │  ├─ ComposerScripts.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  └─ ResolvesDumpSource.php
│  │  │        │  ├─ Configuration
│  │  │        │  │  ├─ ApplicationBuilder.php
│  │  │        │  │  ├─ Exceptions.php
│  │  │        │  │  └─ Middleware.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ AboutCommand.php
│  │  │        │  │  ├─ ApiInstallCommand.php
│  │  │        │  │  ├─ BroadcastingInstallCommand.php
│  │  │        │  │  ├─ CastMakeCommand.php
│  │  │        │  │  ├─ ChannelListCommand.php
│  │  │        │  │  ├─ ChannelMakeCommand.php
│  │  │        │  │  ├─ ClassMakeCommand.php
│  │  │        │  │  ├─ ClearCompiledCommand.php
│  │  │        │  │  ├─ CliDumper.php
│  │  │        │  │  ├─ ClosureCommand.php
│  │  │        │  │  ├─ ComponentMakeCommand.php
│  │  │        │  │  ├─ ConfigCacheCommand.php
│  │  │        │  │  ├─ ConfigClearCommand.php
│  │  │        │  │  ├─ ConfigMakeCommand.php
│  │  │        │  │  ├─ ConfigPublishCommand.php
│  │  │        │  │  ├─ ConfigShowCommand.php
│  │  │        │  │  ├─ ConsoleMakeCommand.php
│  │  │        │  │  ├─ DocsCommand.php
│  │  │        │  │  ├─ DownCommand.php
│  │  │        │  │  ├─ EnumMakeCommand.php
│  │  │        │  │  ├─ EnvironmentCommand.php
│  │  │        │  │  ├─ EnvironmentDecryptCommand.php
│  │  │        │  │  ├─ EnvironmentEncryptCommand.php
│  │  │        │  │  ├─ EventCacheCommand.php
│  │  │        │  │  ├─ EventClearCommand.php
│  │  │        │  │  ├─ EventGenerateCommand.php
│  │  │        │  │  ├─ EventListCommand.php
│  │  │        │  │  ├─ EventMakeCommand.php
│  │  │        │  │  ├─ ExceptionMakeCommand.php
│  │  │        │  │  ├─ InteractsWithComposerPackages.php
│  │  │        │  │  ├─ InterfaceMakeCommand.php
│  │  │        │  │  ├─ JobMakeCommand.php
│  │  │        │  │  ├─ JobMiddlewareMakeCommand.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  ├─ KeyGenerateCommand.php
│  │  │        │  │  ├─ LangPublishCommand.php
│  │  │        │  │  ├─ ListenerMakeCommand.php
│  │  │        │  │  ├─ MailMakeCommand.php
│  │  │        │  │  ├─ ModelMakeCommand.php
│  │  │        │  │  ├─ NotificationMakeCommand.php
│  │  │        │  │  ├─ ObserverMakeCommand.php
│  │  │        │  │  ├─ OptimizeClearCommand.php
│  │  │        │  │  ├─ OptimizeCommand.php
│  │  │        │  │  ├─ PackageDiscoverCommand.php
│  │  │        │  │  ├─ PolicyMakeCommand.php
│  │  │        │  │  ├─ ProviderMakeCommand.php
│  │  │        │  │  ├─ QueuedCommand.php
│  │  │        │  │  ├─ ReloadCommand.php
│  │  │        │  │  ├─ RequestMakeCommand.php
│  │  │        │  │  ├─ ResourceMakeCommand.php
│  │  │        │  │  ├─ RouteCacheCommand.php
│  │  │        │  │  ├─ RouteClearCommand.php
│  │  │        │  │  ├─ RouteListCommand.php
│  │  │        │  │  ├─ RuleMakeCommand.php
│  │  │        │  │  ├─ ScopeMakeCommand.php
│  │  │        │  │  ├─ ServeCommand.php
│  │  │        │  │  ├─ StorageLinkCommand.php
│  │  │        │  │  ├─ StorageUnlinkCommand.php
│  │  │        │  │  ├─ StubPublishCommand.php
│  │  │        │  │  ├─ TestMakeCommand.php
│  │  │        │  │  ├─ TraitMakeCommand.php
│  │  │        │  │  ├─ UpCommand.php
│  │  │        │  │  ├─ VendorPublishCommand.php
│  │  │        │  │  ├─ ViewCacheCommand.php
│  │  │        │  │  ├─ ViewClearCommand.php
│  │  │        │  │  ├─ ViewMakeCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ api-routes.stub
│  │  │        │  │     ├─ broadcasting-routes.stub
│  │  │        │  │     ├─ cast.inbound.stub
│  │  │        │  │     ├─ cast.stub
│  │  │        │  │     ├─ channel.stub
│  │  │        │  │     ├─ class.invokable.stub
│  │  │        │  │     ├─ class.stub
│  │  │        │  │     ├─ config.stub
│  │  │        │  │     ├─ console.stub
│  │  │        │  │     ├─ echo-bootstrap-js.stub
│  │  │        │  │     ├─ echo-js-ably.stub
│  │  │        │  │     ├─ echo-js-pusher.stub
│  │  │        │  │     ├─ echo-js-reverb.stub
│  │  │        │  │     ├─ enum.backed.stub
│  │  │        │  │     ├─ enum.stub
│  │  │        │  │     ├─ event.stub
│  │  │        │  │     ├─ exception-render-report.stub
│  │  │        │  │     ├─ exception-render.stub
│  │  │        │  │     ├─ exception-report.stub
│  │  │        │  │     ├─ exception.stub
│  │  │        │  │     ├─ interface.stub
│  │  │        │  │     ├─ job.batched.queued.stub
│  │  │        │  │     ├─ job.middleware.stub
│  │  │        │  │     ├─ job.queued.stub
│  │  │        │  │     ├─ job.stub
│  │  │        │  │     ├─ listener.queued.stub
│  │  │        │  │     ├─ listener.stub
│  │  │        │  │     ├─ listener.typed.queued.stub
│  │  │        │  │     ├─ listener.typed.stub
│  │  │        │  │     ├─ mail.stub
│  │  │        │  │     ├─ maintenance-mode.stub
│  │  │        │  │     ├─ markdown-mail.stub
│  │  │        │  │     ├─ markdown-notification.stub
│  │  │        │  │     ├─ markdown.stub
│  │  │        │  │     ├─ model.morph-pivot.stub
│  │  │        │  │     ├─ model.pivot.stub
│  │  │        │  │     ├─ model.stub
│  │  │        │  │     ├─ notification.stub
│  │  │        │  │     ├─ observer.plain.stub
│  │  │        │  │     ├─ observer.stub
│  │  │        │  │     ├─ pest.stub
│  │  │        │  │     ├─ pest.unit.stub
│  │  │        │  │     ├─ policy.plain.stub
│  │  │        │  │     ├─ policy.stub
│  │  │        │  │     ├─ provider.stub
│  │  │        │  │     ├─ request.stub
│  │  │        │  │     ├─ resource-collection.stub
│  │  │        │  │     ├─ resource-json-api.stub
│  │  │        │  │     ├─ resource.stub
│  │  │        │  │     ├─ routes.stub
│  │  │        │  │     ├─ rule.implicit.stub
│  │  │        │  │     ├─ rule.stub
│  │  │        │  │     ├─ scope.stub
│  │  │        │  │     ├─ test.stub
│  │  │        │  │     ├─ test.unit.stub
│  │  │        │  │     ├─ trait.stub
│  │  │        │  │     ├─ view-component.stub
│  │  │        │  │     ├─ view-mail.stub
│  │  │        │  │     ├─ view.pest.stub
│  │  │        │  │     ├─ view.stub
│  │  │        │  │     └─ view.test.stub
│  │  │        │  ├─ EnvironmentDetector.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ DiagnosingHealth.php
│  │  │        │  │  ├─ DiscoverEvents.php
│  │  │        │  │  ├─ Dispatchable.php
│  │  │        │  │  ├─ LocaleUpdated.php
│  │  │        │  │  ├─ MaintenanceModeDisabled.php
│  │  │        │  │  ├─ MaintenanceModeEnabled.php
│  │  │        │  │  ├─ PublishingStubs.php
│  │  │        │  │  ├─ Terminating.php
│  │  │        │  │  └─ VendorTagPublished.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ Handler.php
│  │  │        │  │  ├─ RegisterErrorViewPaths.php
│  │  │        │  │  ├─ Renderer
│  │  │        │  │  │  ├─ Exception.php
│  │  │        │  │  │  ├─ Frame.php
│  │  │        │  │  │  ├─ Listener.php
│  │  │        │  │  │  ├─ Mappers
│  │  │        │  │  │  │  └─ BladeMapper.php
│  │  │        │  │  │  └─ Renderer.php
│  │  │        │  │  ├─ ReportableHandler.php
│  │  │        │  │  ├─ Whoops
│  │  │        │  │  │  ├─ WhoopsExceptionRenderer.php
│  │  │        │  │  │  └─ WhoopsHandler.php
│  │  │        │  │  └─ views
│  │  │        │  │     ├─ 401.blade.php
│  │  │        │  │     ├─ 402.blade.php
│  │  │        │  │     ├─ 403.blade.php
│  │  │        │  │     ├─ 404.blade.php
│  │  │        │  │     ├─ 419.blade.php
│  │  │        │  │     ├─ 429.blade.php
│  │  │        │  │     ├─ 500.blade.php
│  │  │        │  │     ├─ 503.blade.php
│  │  │        │  │     ├─ layout.blade.php
│  │  │        │  │     └─ minimal.blade.php
│  │  │        │  ├─ FileBasedMaintenanceMode.php
│  │  │        │  ├─ Http
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ RequestHandled.php
│  │  │        │  │  ├─ FormRequest.php
│  │  │        │  │  ├─ HtmlDumper.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  ├─ MaintenanceModeBypassCookie.php
│  │  │        │  │  └─ Middleware
│  │  │        │  │     ├─ CheckForMaintenanceMode.php
│  │  │        │  │     ├─ Concerns
│  │  │        │  │     │  └─ ExcludesPaths.php
│  │  │        │  │     ├─ ConvertEmptyStringsToNull.php
│  │  │        │  │     ├─ HandlePrecognitiveRequests.php
│  │  │        │  │     ├─ InvokeDeferredCallbacks.php
│  │  │        │  │     ├─ PreventRequestsDuringMaintenance.php
│  │  │        │  │     ├─ TransformsRequest.php
│  │  │        │  │     ├─ TrimStrings.php
│  │  │        │  │     ├─ ValidateCsrfToken.php
│  │  │        │  │     ├─ ValidatePostSize.php
│  │  │        │  │     └─ VerifyCsrfToken.php
│  │  │        │  ├─ Inspiring.php
│  │  │        │  ├─ MaintenanceModeManager.php
│  │  │        │  ├─ Mix.php
│  │  │        │  ├─ MixFileNotFoundException.php
│  │  │        │  ├─ MixManifestNotFoundException.php
│  │  │        │  ├─ PackageManifest.php
│  │  │        │  ├─ Precognition.php
│  │  │        │  ├─ ProviderRepository.php
│  │  │        │  ├─ Providers
│  │  │        │  │  ├─ ArtisanServiceProvider.php
│  │  │        │  │  ├─ ComposerServiceProvider.php
│  │  │        │  │  ├─ ConsoleSupportServiceProvider.php
│  │  │        │  │  ├─ FormRequestServiceProvider.php
│  │  │        │  │  └─ FoundationServiceProvider.php
│  │  │        │  ├─ Queue
│  │  │        │  │  ├─ InteractsWithUniqueJobs.php
│  │  │        │  │  └─ Queueable.php
│  │  │        │  ├─ Routing
│  │  │        │  │  ├─ PrecognitionCallableDispatcher.php
│  │  │        │  │  └─ PrecognitionControllerDispatcher.php
│  │  │        │  ├─ Support
│  │  │        │  │  └─ Providers
│  │  │        │  │     ├─ AuthServiceProvider.php
│  │  │        │  │     ├─ EventServiceProvider.php
│  │  │        │  │     └─ RouteServiceProvider.php
│  │  │        │  ├─ Testing
│  │  │        │  │  ├─ CachedState.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  ├─ InteractsWithAuthentication.php
│  │  │        │  │  │  ├─ InteractsWithConsole.php
│  │  │        │  │  │  ├─ InteractsWithContainer.php
│  │  │        │  │  │  ├─ InteractsWithDatabase.php
│  │  │        │  │  │  ├─ InteractsWithDeprecationHandling.php
│  │  │        │  │  │  ├─ InteractsWithExceptionHandling.php
│  │  │        │  │  │  ├─ InteractsWithRedis.php
│  │  │        │  │  │  ├─ InteractsWithSession.php
│  │  │        │  │  │  ├─ InteractsWithTestCaseLifecycle.php
│  │  │        │  │  │  ├─ InteractsWithTime.php
│  │  │        │  │  │  ├─ InteractsWithViews.php
│  │  │        │  │  │  ├─ MakesHttpRequests.php
│  │  │        │  │  │  └─ WithoutExceptionHandlingHandler.php
│  │  │        │  │  ├─ DatabaseMigrations.php
│  │  │        │  │  ├─ DatabaseTransactions.php
│  │  │        │  │  ├─ DatabaseTransactionsManager.php
│  │  │        │  │  ├─ DatabaseTruncation.php
│  │  │        │  │  ├─ LazilyRefreshDatabase.php
│  │  │        │  │  ├─ RefreshDatabase.php
│  │  │        │  │  ├─ RefreshDatabaseState.php
│  │  │        │  │  ├─ TestCase.php
│  │  │        │  │  ├─ Traits
│  │  │        │  │  │  └─ CanConfigureMigrationCommands.php
│  │  │        │  │  ├─ WithCachedConfig.php
│  │  │        │  │  ├─ WithCachedRoutes.php
│  │  │        │  │  ├─ WithConsoleEvents.php
│  │  │        │  │  ├─ WithFaker.php
│  │  │        │  │  ├─ WithoutMiddleware.php
│  │  │        │  │  └─ Wormhole.php
│  │  │        │  ├─ Validation
│  │  │        │  │  └─ ValidatesRequests.php
│  │  │        │  ├─ Vite.php
│  │  │        │  ├─ ViteException.php
│  │  │        │  ├─ ViteManifestNotFoundException.php
│  │  │        │  ├─ helpers.php
│  │  │        │  ├─ resources
│  │  │        │  │  ├─ exceptions
│  │  │        │  │  │  └─ renderer
│  │  │        │  │  │     ├─ components
│  │  │        │  │  │     │  ├─ badge.blade.php
│  │  │        │  │  │     │  ├─ empty-state.blade.php
│  │  │        │  │  │     │  ├─ file-with-line.blade.php
│  │  │        │  │  │     │  ├─ formatted-source.blade.php
│  │  │        │  │  │     │  ├─ frame-code.blade.php
│  │  │        │  │  │     │  ├─ frame.blade.php
│  │  │        │  │  │     │  ├─ header.blade.php
│  │  │        │  │  │     │  ├─ http-method.blade.php
│  │  │        │  │  │     │  ├─ icons
│  │  │        │  │  │     │  │  ├─ alert.blade.php
│  │  │        │  │  │     │  │  ├─ check.blade.php
│  │  │        │  │  │     │  │  ├─ chevron-left.blade.php
│  │  │        │  │  │     │  │  ├─ chevron-right.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-down-up.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-left.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-right.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-up-down.blade.php
│  │  │        │  │  │     │  │  ├─ copy.blade.php
│  │  │        │  │  │     │  │  ├─ database.blade.php
│  │  │        │  │  │     │  │  ├─ folder-open.blade.php
│  │  │        │  │  │     │  │  ├─ folder.blade.php
│  │  │        │  │  │     │  │  ├─ globe.blade.php
│  │  │        │  │  │     │  │  ├─ info.blade.php
│  │  │        │  │  │     │  │  └─ laravel-ascii.blade.php
│  │  │        │  │  │     │  ├─ laravel-ascii-spotlight.blade.php
│  │  │        │  │  │     │  ├─ layout.blade.php
│  │  │        │  │  │     │  ├─ query.blade.php
│  │  │        │  │  │     │  ├─ request-body.blade.php
│  │  │        │  │  │     │  ├─ request-header.blade.php
│  │  │        │  │  │     │  ├─ request-url.blade.php
│  │  │        │  │  │     │  ├─ routing-parameter.blade.php
│  │  │        │  │  │     │  ├─ routing.blade.php
│  │  │        │  │  │     │  ├─ section-container.blade.php
│  │  │        │  │  │     │  ├─ separator.blade.php
│  │  │        │  │  │     │  ├─ syntax-highlight.blade.php
│  │  │        │  │  │     │  ├─ topbar.blade.php
│  │  │        │  │  │     │  ├─ trace.blade.php
│  │  │        │  │  │     │  ├─ vendor-frame.blade.php
│  │  │        │  │  │     │  └─ vendor-frames.blade.php
│  │  │        │  │  │     ├─ dist
│  │  │        │  │  │     │  ├─ scripts.js
│  │  │        │  │  │     │  └─ styles.css
│  │  │        │  │  │     ├─ markdown.blade.php
│  │  │        │  │  │     ├─ package-lock.json
│  │  │        │  │  │     ├─ package.json
│  │  │        │  │  │     ├─ scripts.js
│  │  │        │  │  │     ├─ show.blade.php
│  │  │        │  │  │     ├─ styles.css
│  │  │        │  │  │     └─ vite.config.js
│  │  │        │  │  ├─ health-up.blade.php
│  │  │        │  │  └─ server.php
│  │  │        │  └─ stubs
│  │  │        │     └─ facade.stub
│  │  │        ├─ Hashing
│  │  │        │  ├─ AbstractHasher.php
│  │  │        │  ├─ Argon2IdHasher.php
│  │  │        │  ├─ ArgonHasher.php
│  │  │        │  ├─ BcryptHasher.php
│  │  │        │  ├─ HashManager.php
│  │  │        │  ├─ HashServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ composer.json
│  │  │        ├─ Http
│  │  │        │  ├─ Client
│  │  │        │  │  ├─ Batch.php
│  │  │        │  │  ├─ BatchInProgressException.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  └─ DeterminesStatusCode.php
│  │  │        │  │  ├─ ConnectionException.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  ├─ ConnectionFailed.php
│  │  │        │  │  │  ├─ RequestSending.php
│  │  │        │  │  │  └─ ResponseReceived.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ HttpClientException.php
│  │  │        │  │  ├─ PendingRequest.php
│  │  │        │  │  ├─ Pool.php
│  │  │        │  │  ├─ Promises
│  │  │        │  │  │  ├─ FluentPromise.php
│  │  │        │  │  │  └─ LazyPromise.php
│  │  │        │  │  ├─ Request.php
│  │  │        │  │  ├─ RequestException.php
│  │  │        │  │  ├─ Response.php
│  │  │        │  │  ├─ ResponseSequence.php
│  │  │        │  │  └─ StrayRequestException.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ CanBePrecognitive.php
│  │  │        │  │  ├─ InteractsWithContentTypes.php
│  │  │        │  │  ├─ InteractsWithFlashData.php
│  │  │        │  │  └─ InteractsWithInput.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ HttpResponseException.php
│  │  │        │  │  ├─ MalformedUrlException.php
│  │  │        │  │  ├─ PostTooLargeException.php
│  │  │        │  │  └─ ThrottleRequestsException.php
│  │  │        │  ├─ File.php
│  │  │        │  ├─ FileHelpers.php
│  │  │        │  ├─ JsonResponse.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AddLinkHeadersForPreloadedAssets.php
│  │  │        │  │  ├─ CheckResponseForModifications.php
│  │  │        │  │  ├─ FrameGuard.php
│  │  │        │  │  ├─ HandleCors.php
│  │  │        │  │  ├─ SetCacheHeaders.php
│  │  │        │  │  ├─ TrustHosts.php
│  │  │        │  │  ├─ TrustProxies.php
│  │  │        │  │  ├─ ValidatePathEncoding.php
│  │  │        │  │  └─ ValidatePostSize.php
│  │  │        │  ├─ RedirectResponse.php
│  │  │        │  ├─ Request.php
│  │  │        │  ├─ Resources
│  │  │        │  │  ├─ CollectsResources.php
│  │  │        │  │  ├─ ConditionallyLoadsAttributes.php
│  │  │        │  │  ├─ DelegatesToResource.php
│  │  │        │  │  ├─ Json
│  │  │        │  │  │  ├─ AnonymousResourceCollection.php
│  │  │        │  │  │  ├─ JsonResource.php
│  │  │        │  │  │  ├─ PaginatedResourceResponse.php
│  │  │        │  │  │  ├─ ResourceCollection.php
│  │  │        │  │  │  └─ ResourceResponse.php
│  │  │        │  │  ├─ JsonApi
│  │  │        │  │  │  ├─ AnonymousResourceCollection.php
│  │  │        │  │  │  ├─ Concerns
│  │  │        │  │  │  │  ├─ ResolvesJsonApiElements.php
│  │  │        │  │  │  │  └─ ResolvesJsonApiRequest.php
│  │  │        │  │  │  ├─ Exceptions
│  │  │        │  │  │  │  └─ ResourceIdentificationException.php
│  │  │        │  │  │  ├─ JsonApiRequest.php
│  │  │        │  │  │  ├─ JsonApiResource.php
│  │  │        │  │  │  └─ RelationResolver.php
│  │  │        │  │  ├─ MergeValue.php
│  │  │        │  │  ├─ MissingValue.php
│  │  │        │  │  └─ PotentiallyMissing.php
│  │  │        │  ├─ Response.php
│  │  │        │  ├─ ResponseTrait.php
│  │  │        │  ├─ StreamedEvent.php
│  │  │        │  ├─ Testing
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ FileFactory.php
│  │  │        │  │  └─ MimeType.php
│  │  │        │  ├─ UploadedFile.php
│  │  │        │  └─ composer.json
│  │  │        ├─ JsonSchema
│  │  │        │  ├─ JsonSchema.php
│  │  │        │  ├─ JsonSchemaTypeFactory.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Serializer.php
│  │  │        │  ├─ Types
│  │  │        │  │  ├─ ArrayType.php
│  │  │        │  │  ├─ BooleanType.php
│  │  │        │  │  ├─ IntegerType.php
│  │  │        │  │  ├─ NumberType.php
│  │  │        │  │  ├─ ObjectType.php
│  │  │        │  │  ├─ StringType.php
│  │  │        │  │  └─ Type.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Log
│  │  │        │  ├─ Context
│  │  │        │  │  ├─ ContextLogProcessor.php
│  │  │        │  │  ├─ ContextServiceProvider.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  ├─ ContextDehydrating.php
│  │  │        │  │  │  └─ ContextHydrated.php
│  │  │        │  │  └─ Repository.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ MessageLogged.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LogManager.php
│  │  │        │  ├─ LogServiceProvider.php
│  │  │        │  ├─ Logger.php
│  │  │        │  ├─ ParsesLogConfiguration.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ functions.php
│  │  │        ├─ Macroable
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Traits
│  │  │        │  │  └─ Macroable.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Mail
│  │  │        │  ├─ Attachment.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ MessageSending.php
│  │  │        │  │  └─ MessageSent.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MailManager.php
│  │  │        │  ├─ MailServiceProvider.php
│  │  │        │  ├─ Mailable.php
│  │  │        │  ├─ Mailables
│  │  │        │  │  ├─ Address.php
│  │  │        │  │  ├─ Attachment.php
│  │  │        │  │  ├─ Content.php
│  │  │        │  │  ├─ Envelope.php
│  │  │        │  │  └─ Headers.php
│  │  │        │  ├─ Mailer.php
│  │  │        │  ├─ Markdown.php
│  │  │        │  ├─ Message.php
│  │  │        │  ├─ PendingMail.php
│  │  │        │  ├─ SendQueuedMailable.php
│  │  │        │  ├─ SentMessage.php
│  │  │        │  ├─ TextMessage.php
│  │  │        │  ├─ Transport
│  │  │        │  │  ├─ ArrayTransport.php
│  │  │        │  │  ├─ LogTransport.php
│  │  │        │  │  ├─ ResendTransport.php
│  │  │        │  │  ├─ SesTransport.php
│  │  │        │  │  └─ SesV2Transport.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        ├─ html
│  │  │        │        │  ├─ button.blade.php
│  │  │        │        │  ├─ footer.blade.php
│  │  │        │        │  ├─ header.blade.php
│  │  │        │        │  ├─ layout.blade.php
│  │  │        │        │  ├─ message.blade.php
│  │  │        │        │  ├─ panel.blade.php
│  │  │        │        │  ├─ subcopy.blade.php
│  │  │        │        │  ├─ table.blade.php
│  │  │        │        │  └─ themes
│  │  │        │        │     └─ default.css
│  │  │        │        └─ text
│  │  │        │           ├─ button.blade.php
│  │  │        │           ├─ footer.blade.php
│  │  │        │           ├─ header.blade.php
│  │  │        │           ├─ layout.blade.php
│  │  │        │           ├─ message.blade.php
│  │  │        │           ├─ panel.blade.php
│  │  │        │           ├─ subcopy.blade.php
│  │  │        │           └─ table.blade.php
│  │  │        ├─ Notifications
│  │  │        │  ├─ Action.php
│  │  │        │  ├─ AnonymousNotifiable.php
│  │  │        │  ├─ ChannelManager.php
│  │  │        │  ├─ Channels
│  │  │        │  │  ├─ BroadcastChannel.php
│  │  │        │  │  ├─ DatabaseChannel.php
│  │  │        │  │  └─ MailChannel.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ NotificationTableCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ notifications.stub
│  │  │        │  ├─ DatabaseNotification.php
│  │  │        │  ├─ DatabaseNotificationCollection.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ BroadcastNotificationCreated.php
│  │  │        │  │  ├─ NotificationFailed.php
│  │  │        │  │  ├─ NotificationSending.php
│  │  │        │  │  └─ NotificationSent.php
│  │  │        │  ├─ HasDatabaseNotifications.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Messages
│  │  │        │  │  ├─ BroadcastMessage.php
│  │  │        │  │  ├─ DatabaseMessage.php
│  │  │        │  │  ├─ MailMessage.php
│  │  │        │  │  └─ SimpleMessage.php
│  │  │        │  ├─ Notifiable.php
│  │  │        │  ├─ Notification.php
│  │  │        │  ├─ NotificationSender.php
│  │  │        │  ├─ NotificationServiceProvider.php
│  │  │        │  ├─ RoutesNotifications.php
│  │  │        │  ├─ SendQueuedNotifications.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        └─ email.blade.php
│  │  │        ├─ Pagination
│  │  │        │  ├─ AbstractCursorPaginator.php
│  │  │        │  ├─ AbstractPaginator.php
│  │  │        │  ├─ Cursor.php
│  │  │        │  ├─ CursorPaginator.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LengthAwarePaginator.php
│  │  │        │  ├─ PaginationServiceProvider.php
│  │  │        │  ├─ PaginationState.php
│  │  │        │  ├─ Paginator.php
│  │  │        │  ├─ UrlWindow.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ resources
│  │  │        │     └─ views
│  │  │        │        ├─ bootstrap-4.blade.php
│  │  │        │        ├─ bootstrap-5.blade.php
│  │  │        │        ├─ default.blade.php
│  │  │        │        ├─ semantic-ui.blade.php
│  │  │        │        ├─ simple-bootstrap-4.blade.php
│  │  │        │        ├─ simple-bootstrap-5.blade.php
│  │  │        │        ├─ simple-default.blade.php
│  │  │        │        ├─ simple-tailwind.blade.php
│  │  │        │        └─ tailwind.blade.php
│  │  │        ├─ Pipeline
│  │  │        │  ├─ Hub.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Pipeline.php
│  │  │        │  ├─ PipelineServiceProvider.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Process
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ ProcessFailedException.php
│  │  │        │  │  └─ ProcessTimedOutException.php
│  │  │        │  ├─ Factory.php
│  │  │        │  ├─ FakeInvokedProcess.php
│  │  │        │  ├─ FakeProcessDescription.php
│  │  │        │  ├─ FakeProcessResult.php
│  │  │        │  ├─ FakeProcessSequence.php
│  │  │        │  ├─ InvokedProcess.php
│  │  │        │  ├─ InvokedProcessPool.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingProcess.php
│  │  │        │  ├─ Pipe.php
│  │  │        │  ├─ Pool.php
│  │  │        │  ├─ ProcessPoolResults.php
│  │  │        │  ├─ ProcessResult.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Queue
│  │  │        │  ├─ Attributes
│  │  │        │  │  ├─ DeleteWhenMissingModels.php
│  │  │        │  │  └─ WithoutRelations.php
│  │  │        │  ├─ BackgroundQueue.php
│  │  │        │  ├─ BeanstalkdQueue.php
│  │  │        │  ├─ CallQueuedClosure.php
│  │  │        │  ├─ CallQueuedHandler.php
│  │  │        │  ├─ Capsule
│  │  │        │  │  └─ Manager.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ BackgroundConnector.php
│  │  │        │  │  ├─ BeanstalkdConnector.php
│  │  │        │  │  ├─ ConnectorInterface.php
│  │  │        │  │  ├─ DatabaseConnector.php
│  │  │        │  │  ├─ DeferredConnector.php
│  │  │        │  │  ├─ FailoverConnector.php
│  │  │        │  │  ├─ NullConnector.php
│  │  │        │  │  ├─ RedisConnector.php
│  │  │        │  │  ├─ SqsConnector.php
│  │  │        │  │  └─ SyncConnector.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ BatchesTableCommand.php
│  │  │        │  │  ├─ ClearCommand.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  └─ ParsesQueue.php
│  │  │        │  │  ├─ FailedTableCommand.php
│  │  │        │  │  ├─ FlushFailedCommand.php
│  │  │        │  │  ├─ ForgetFailedCommand.php
│  │  │        │  │  ├─ ListFailedCommand.php
│  │  │        │  │  ├─ ListenCommand.php
│  │  │        │  │  ├─ MonitorCommand.php
│  │  │        │  │  ├─ PauseCommand.php
│  │  │        │  │  ├─ PruneBatchesCommand.php
│  │  │        │  │  ├─ PruneFailedJobsCommand.php
│  │  │        │  │  ├─ RestartCommand.php
│  │  │        │  │  ├─ ResumeCommand.php
│  │  │        │  │  ├─ RetryBatchCommand.php
│  │  │        │  │  ├─ RetryCommand.php
│  │  │        │  │  ├─ TableCommand.php
│  │  │        │  │  ├─ WorkCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ batches.stub
│  │  │        │  │     ├─ failed_jobs.stub
│  │  │        │  │     └─ jobs.stub
│  │  │        │  ├─ DatabaseQueue.php
│  │  │        │  ├─ DeferredQueue.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ JobAttempted.php
│  │  │        │  │  ├─ JobExceptionOccurred.php
│  │  │        │  │  ├─ JobFailed.php
│  │  │        │  │  ├─ JobPopped.php
│  │  │        │  │  ├─ JobPopping.php
│  │  │        │  │  ├─ JobProcessed.php
│  │  │        │  │  ├─ JobProcessing.php
│  │  │        │  │  ├─ JobQueued.php
│  │  │        │  │  ├─ JobQueueing.php
│  │  │        │  │  ├─ JobReleasedAfterException.php
│  │  │        │  │  ├─ JobRetryRequested.php
│  │  │        │  │  ├─ JobTimedOut.php
│  │  │        │  │  ├─ Looping.php
│  │  │        │  │  ├─ QueueBusy.php
│  │  │        │  │  ├─ QueueFailedOver.php
│  │  │        │  │  ├─ QueuePaused.php
│  │  │        │  │  ├─ QueueResumed.php
│  │  │        │  │  ├─ WorkerStarting.php
│  │  │        │  │  └─ WorkerStopping.php
│  │  │        │  ├─ Failed
│  │  │        │  │  ├─ CountableFailedJobProvider.php
│  │  │        │  │  ├─ DatabaseFailedJobProvider.php
│  │  │        │  │  ├─ DatabaseUuidFailedJobProvider.php
│  │  │        │  │  ├─ DynamoDbFailedJobProvider.php
│  │  │        │  │  ├─ FailedJobProviderInterface.php
│  │  │        │  │  ├─ FileFailedJobProvider.php
│  │  │        │  │  ├─ NullFailedJobProvider.php
│  │  │        │  │  └─ PrunableFailedJobProvider.php
│  │  │        │  ├─ FailoverQueue.php
│  │  │        │  ├─ InteractsWithQueue.php
│  │  │        │  ├─ InvalidPayloadException.php
│  │  │        │  ├─ Jobs
│  │  │        │  │  ├─ BeanstalkdJob.php
│  │  │        │  │  ├─ DatabaseJob.php
│  │  │        │  │  ├─ DatabaseJobRecord.php
│  │  │        │  │  ├─ FakeJob.php
│  │  │        │  │  ├─ Job.php
│  │  │        │  │  ├─ JobName.php
│  │  │        │  │  ├─ RedisJob.php
│  │  │        │  │  ├─ SqsJob.php
│  │  │        │  │  └─ SyncJob.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Listener.php
│  │  │        │  ├─ ListenerOptions.php
│  │  │        │  ├─ LuaScripts.php
│  │  │        │  ├─ ManuallyFailedException.php
│  │  │        │  ├─ MaxAttemptsExceededException.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ FailOnException.php
│  │  │        │  │  ├─ RateLimited.php
│  │  │        │  │  ├─ RateLimitedWithRedis.php
│  │  │        │  │  ├─ Skip.php
│  │  │        │  │  ├─ SkipIfBatchCancelled.php
│  │  │        │  │  ├─ ThrottlesExceptions.php
│  │  │        │  │  ├─ ThrottlesExceptionsWithRedis.php
│  │  │        │  │  └─ WithoutOverlapping.php
│  │  │        │  ├─ NullQueue.php
│  │  │        │  ├─ Queue.php
│  │  │        │  ├─ QueueManager.php
│  │  │        │  ├─ QueueServiceProvider.php
│  │  │        │  ├─ README.md
│  │  │        │  ├─ RedisQueue.php
│  │  │        │  ├─ SerializesAndRestoresModelIdentifiers.php
│  │  │        │  ├─ SerializesModels.php
│  │  │        │  ├─ SqsQueue.php
│  │  │        │  ├─ SyncQueue.php
│  │  │        │  ├─ TimeoutExceededException.php
│  │  │        │  ├─ Worker.php
│  │  │        │  ├─ WorkerOptions.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Redis
│  │  │        │  ├─ Connections
│  │  │        │  │  ├─ Connection.php
│  │  │        │  │  ├─ PacksPhpRedisValues.php
│  │  │        │  │  ├─ PhpRedisClusterConnection.php
│  │  │        │  │  ├─ PhpRedisConnection.php
│  │  │        │  │  ├─ PredisClusterConnection.php
│  │  │        │  │  └─ PredisConnection.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ PhpRedisConnector.php
│  │  │        │  │  └─ PredisConnector.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ CommandExecuted.php
│  │  │        │  │  └─ CommandFailed.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Limiters
│  │  │        │  │  ├─ ConcurrencyLimiter.php
│  │  │        │  │  ├─ ConcurrencyLimiterBuilder.php
│  │  │        │  │  ├─ DurationLimiter.php
│  │  │        │  │  └─ DurationLimiterBuilder.php
│  │  │        │  ├─ RedisManager.php
│  │  │        │  ├─ RedisServiceProvider.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Reflection
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Reflector.php
│  │  │        │  ├─ Traits
│  │  │        │  │  └─ ReflectsClosures.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ helpers.php
│  │  │        ├─ Routing
│  │  │        │  ├─ AbstractRouteCollection.php
│  │  │        │  ├─ CallableDispatcher.php
│  │  │        │  ├─ CompiledRouteCollection.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ ControllerMakeCommand.php
│  │  │        │  │  ├─ MiddlewareMakeCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ controller.api.stub
│  │  │        │  │     ├─ controller.invokable.stub
│  │  │        │  │     ├─ controller.model.api.stub
│  │  │        │  │     ├─ controller.model.stub
│  │  │        │  │     ├─ controller.nested.api.stub
│  │  │        │  │     ├─ controller.nested.singleton.api.stub
│  │  │        │  │     ├─ controller.nested.singleton.stub
│  │  │        │  │     ├─ controller.nested.stub
│  │  │        │  │     ├─ controller.plain.stub
│  │  │        │  │     ├─ controller.singleton.api.stub
│  │  │        │  │     ├─ controller.singleton.stub
│  │  │        │  │     ├─ controller.stub
│  │  │        │  │     └─ middleware.stub
│  │  │        │  ├─ Contracts
│  │  │        │  │  ├─ CallableDispatcher.php
│  │  │        │  │  └─ ControllerDispatcher.php
│  │  │        │  ├─ Controller.php
│  │  │        │  ├─ ControllerDispatcher.php
│  │  │        │  ├─ ControllerMiddlewareOptions.php
│  │  │        │  ├─ Controllers
│  │  │        │  │  ├─ HasMiddleware.php
│  │  │        │  │  └─ Middleware.php
│  │  │        │  ├─ CreatesRegularExpressionRouteConstraints.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ PreparingResponse.php
│  │  │        │  │  ├─ ResponsePrepared.php
│  │  │        │  │  ├─ RouteMatched.php
│  │  │        │  │  └─ Routing.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ BackedEnumCaseNotFoundException.php
│  │  │        │  │  ├─ InvalidSignatureException.php
│  │  │        │  │  ├─ MissingRateLimiterException.php
│  │  │        │  │  ├─ StreamedResponseException.php
│  │  │        │  │  └─ UrlGenerationException.php
│  │  │        │  ├─ FiltersControllerMiddleware.php
│  │  │        │  ├─ ImplicitRouteBinding.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Matching
│  │  │        │  │  ├─ HostValidator.php
│  │  │        │  │  ├─ MethodValidator.php
│  │  │        │  │  ├─ SchemeValidator.php
│  │  │        │  │  ├─ UriValidator.php
│  │  │        │  │  └─ ValidatorInterface.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ SubstituteBindings.php
│  │  │        │  │  ├─ ThrottleRequests.php
│  │  │        │  │  ├─ ThrottleRequestsWithRedis.php
│  │  │        │  │  └─ ValidateSignature.php
│  │  │        │  ├─ MiddlewareNameResolver.php
│  │  │        │  ├─ PendingResourceRegistration.php
│  │  │        │  ├─ PendingSingletonResourceRegistration.php
│  │  │        │  ├─ Pipeline.php
│  │  │        │  ├─ RedirectController.php
│  │  │        │  ├─ Redirector.php
│  │  │        │  ├─ ResolvesRouteDependencies.php
│  │  │        │  ├─ ResourceRegistrar.php
│  │  │        │  ├─ ResponseFactory.php
│  │  │        │  ├─ Route.php
│  │  │        │  ├─ RouteAction.php
│  │  │        │  ├─ RouteBinding.php
│  │  │        │  ├─ RouteCollection.php
│  │  │        │  ├─ RouteCollectionInterface.php
│  │  │        │  ├─ RouteDependencyResolverTrait.php
│  │  │        │  ├─ RouteFileRegistrar.php
│  │  │        │  ├─ RouteGroup.php
│  │  │        │  ├─ RouteParameterBinder.php
│  │  │        │  ├─ RouteRegistrar.php
│  │  │        │  ├─ RouteSignatureParameters.php
│  │  │        │  ├─ RouteUri.php
│  │  │        │  ├─ RouteUrlGenerator.php
│  │  │        │  ├─ Router.php
│  │  │        │  ├─ RoutingServiceProvider.php
│  │  │        │  ├─ SortedMiddleware.php
│  │  │        │  ├─ UrlGenerator.php
│  │  │        │  ├─ ViewController.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Session
│  │  │        │  ├─ ArraySessionHandler.php
│  │  │        │  ├─ CacheBasedSessionHandler.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ SessionTableCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ database.stub
│  │  │        │  ├─ CookieSessionHandler.php
│  │  │        │  ├─ DatabaseSessionHandler.php
│  │  │        │  ├─ EncryptedStore.php
│  │  │        │  ├─ ExistenceAwareInterface.php
│  │  │        │  ├─ FileSessionHandler.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AuthenticateSession.php
│  │  │        │  │  └─ StartSession.php
│  │  │        │  ├─ NullSessionHandler.php
│  │  │        │  ├─ SessionManager.php
│  │  │        │  ├─ SessionServiceProvider.php
│  │  │        │  ├─ Store.php
│  │  │        │  ├─ SymfonySessionDecorator.php
│  │  │        │  ├─ TokenMismatchException.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Support
│  │  │        │  ├─ AggregateServiceProvider.php
│  │  │        │  ├─ Benchmark.php
│  │  │        │  ├─ BinaryCodec.php
│  │  │        │  ├─ Carbon.php
│  │  │        │  ├─ Composer.php
│  │  │        │  ├─ ConfigurationUrlParser.php
│  │  │        │  ├─ DateFactory.php
│  │  │        │  ├─ DefaultProviders.php
│  │  │        │  ├─ Defer
│  │  │        │  │  ├─ DeferredCallback.php
│  │  │        │  │  └─ DeferredCallbackCollection.php
│  │  │        │  ├─ EncodedHtmlString.php
│  │  │        │  ├─ Env.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  └─ MathException.php
│  │  │        │  ├─ Facades
│  │  │        │  │  ├─ App.php
│  │  │        │  │  ├─ Artisan.php
│  │  │        │  │  ├─ Auth.php
│  │  │        │  │  ├─ Blade.php
│  │  │        │  │  ├─ Broadcast.php
│  │  │        │  │  ├─ Bus.php
│  │  │        │  │  ├─ Cache.php
│  │  │        │  │  ├─ Concurrency.php
│  │  │        │  │  ├─ Config.php
│  │  │        │  │  ├─ Context.php
│  │  │        │  │  ├─ Cookie.php
│  │  │        │  │  ├─ Crypt.php
│  │  │        │  │  ├─ DB.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ Event.php
│  │  │        │  │  ├─ Exceptions.php
│  │  │        │  │  ├─ Facade.php
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ Gate.php
│  │  │        │  │  ├─ Hash.php
│  │  │        │  │  ├─ Http.php
│  │  │        │  │  ├─ Lang.php
│  │  │        │  │  ├─ Log.php
│  │  │        │  │  ├─ Mail.php
│  │  │        │  │  ├─ MaintenanceMode.php
│  │  │        │  │  ├─ Notification.php
│  │  │        │  │  ├─ ParallelTesting.php
│  │  │        │  │  ├─ Password.php
│  │  │        │  │  ├─ Pipeline.php
│  │  │        │  │  ├─ Process.php
│  │  │        │  │  ├─ Queue.php
│  │  │        │  │  ├─ RateLimiter.php
│  │  │        │  │  ├─ Redirect.php
│  │  │        │  │  ├─ Redis.php
│  │  │        │  │  ├─ Request.php
│  │  │        │  │  ├─ Response.php
│  │  │        │  │  ├─ Route.php
│  │  │        │  │  ├─ Schedule.php
│  │  │        │  │  ├─ Schema.php
│  │  │        │  │  ├─ Session.php
│  │  │        │  │  ├─ Storage.php
│  │  │        │  │  ├─ URL.php
│  │  │        │  │  ├─ Validator.php
│  │  │        │  │  ├─ View.php
│  │  │        │  │  └─ Vite.php
│  │  │        │  ├─ Fluent.php
│  │  │        │  ├─ HigherOrderTapProxy.php
│  │  │        │  ├─ HtmlString.php
│  │  │        │  ├─ InteractsWithTime.php
│  │  │        │  ├─ Js.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Lottery.php
│  │  │        │  ├─ Manager.php
│  │  │        │  ├─ MessageBag.php
│  │  │        │  ├─ MultipleInstanceManager.php
│  │  │        │  ├─ NamespacedItemResolver.php
│  │  │        │  ├─ Number.php
│  │  │        │  ├─ Once.php
│  │  │        │  ├─ Onceable.php
│  │  │        │  ├─ Optional.php
│  │  │        │  ├─ Pluralizer.php
│  │  │        │  ├─ ProcessUtils.php
│  │  │        │  ├─ ServiceProvider.php
│  │  │        │  ├─ Sleep.php
│  │  │        │  ├─ Str.php
│  │  │        │  ├─ Stringable.php
│  │  │        │  ├─ Testing
│  │  │        │  │  └─ Fakes
│  │  │        │  │     ├─ BatchFake.php
│  │  │        │  │     ├─ BatchRepositoryFake.php
│  │  │        │  │     ├─ BusFake.php
│  │  │        │  │     ├─ ChainedBatchTruthTest.php
│  │  │        │  │     ├─ EventFake.php
│  │  │        │  │     ├─ ExceptionHandlerFake.php
│  │  │        │  │     ├─ Fake.php
│  │  │        │  │     ├─ MailFake.php
│  │  │        │  │     ├─ NotificationFake.php
│  │  │        │  │     ├─ PendingBatchFake.php
│  │  │        │  │     ├─ PendingChainFake.php
│  │  │        │  │     ├─ PendingMailFake.php
│  │  │        │  │     └─ QueueFake.php
│  │  │        │  ├─ Timebox.php
│  │  │        │  ├─ Traits
│  │  │        │  │  ├─ CapsuleManagerTrait.php
│  │  │        │  │  ├─ Dumpable.php
│  │  │        │  │  ├─ ForwardsCalls.php
│  │  │        │  │  ├─ InteractsWithData.php
│  │  │        │  │  ├─ Localizable.php
│  │  │        │  │  └─ Tappable.php
│  │  │        │  ├─ Uri.php
│  │  │        │  ├─ UriQueryString.php
│  │  │        │  ├─ ValidatedInput.php
│  │  │        │  ├─ ViewErrorBag.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ functions.php
│  │  │        │  └─ helpers.php
│  │  │        ├─ Testing
│  │  │        │  ├─ Assert.php
│  │  │        │  ├─ AssertableJsonString.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ AssertsStatusCodes.php
│  │  │        │  │  ├─ RunsInParallel.php
│  │  │        │  │  └─ TestDatabases.php
│  │  │        │  ├─ Constraints
│  │  │        │  │  ├─ ArraySubset.php
│  │  │        │  │  ├─ CountInDatabase.php
│  │  │        │  │  ├─ HasInDatabase.php
│  │  │        │  │  ├─ NotSoftDeletedInDatabase.php
│  │  │        │  │  ├─ SeeInOrder.php
│  │  │        │  │  └─ SoftDeletedInDatabase.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  └─ InvalidArgumentException.php
│  │  │        │  ├─ Fluent
│  │  │        │  │  ├─ AssertableJson.php
│  │  │        │  │  └─ Concerns
│  │  │        │  │     ├─ Debugging.php
│  │  │        │  │     ├─ Has.php
│  │  │        │  │     ├─ Interaction.php
│  │  │        │  │     └─ Matching.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LoggedExceptionCollection.php
│  │  │        │  ├─ ParallelConsoleOutput.php
│  │  │        │  ├─ ParallelRunner.php
│  │  │        │  ├─ ParallelTesting.php
│  │  │        │  ├─ ParallelTestingServiceProvider.php
│  │  │        │  ├─ PendingCommand.php
│  │  │        │  ├─ TestComponent.php
│  │  │        │  ├─ TestResponse.php
│  │  │        │  ├─ TestResponseAssert.php
│  │  │        │  ├─ TestView.php
│  │  │        │  └─ composer.json
│  │  │        ├─ Translation
│  │  │        │  ├─ ArrayLoader.php
│  │  │        │  ├─ CreatesPotentiallyTranslatedStrings.php
│  │  │        │  ├─ FileLoader.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MessageSelector.php
│  │  │        │  ├─ PotentiallyTranslatedString.php
│  │  │        │  ├─ TranslationServiceProvider.php
│  │  │        │  ├─ Translator.php
│  │  │        │  ├─ composer.json
│  │  │        │  └─ lang
│  │  │        │     └─ en
│  │  │        │        ├─ auth.php
│  │  │        │        ├─ pagination.php
│  │  │        │        ├─ passwords.php
│  │  │        │        └─ validation.php
│  │  │        ├─ Validation
│  │  │        │  ├─ ClosureValidationRule.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ FilterEmailValidation.php
│  │  │        │  │  ├─ FormatsMessages.php
│  │  │        │  │  ├─ ReplacesAttributes.php
│  │  │        │  │  └─ ValidatesAttributes.php
│  │  │        │  ├─ ConditionalRules.php
│  │  │        │  ├─ DatabasePresenceVerifier.php
│  │  │        │  ├─ DatabasePresenceVerifierInterface.php
│  │  │        │  ├─ Factory.php
│  │  │        │  ├─ InvokableValidationRule.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ NestedRules.php
│  │  │        │  ├─ NotPwnedVerifier.php
│  │  │        │  ├─ PresenceVerifierInterface.php
│  │  │        │  ├─ Rule.php
│  │  │        │  ├─ Rules
│  │  │        │  │  ├─ AnyOf.php
│  │  │        │  │  ├─ ArrayRule.php
│  │  │        │  │  ├─ Can.php
│  │  │        │  │  ├─ Contains.php
│  │  │        │  │  ├─ DatabaseRule.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ Dimensions.php
│  │  │        │  │  ├─ DoesntContain.php
│  │  │        │  │  ├─ Email.php
│  │  │        │  │  ├─ Enum.php
│  │  │        │  │  ├─ ExcludeIf.php
│  │  │        │  │  ├─ Exists.php
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ ImageFile.php
│  │  │        │  │  ├─ In.php
│  │  │        │  │  ├─ NotIn.php
│  │  │        │  │  ├─ Numeric.php
│  │  │        │  │  ├─ Password.php
│  │  │        │  │  ├─ ProhibitedIf.php
│  │  │        │  │  ├─ RequiredIf.php
│  │  │        │  │  └─ Unique.php
│  │  │        │  ├─ UnauthorizedException.php
│  │  │        │  ├─ ValidatesWhenResolvedTrait.php
│  │  │        │  ├─ ValidationData.php
│  │  │        │  ├─ ValidationException.php
│  │  │        │  ├─ ValidationRuleParser.php
│  │  │        │  ├─ ValidationServiceProvider.php
│  │  │        │  ├─ Validator.php
│  │  │        │  └─ composer.json
│  │  │        └─ View
│  │  │           ├─ AnonymousComponent.php
│  │  │           ├─ AppendableAttributeValue.php
│  │  │           ├─ Compilers
│  │  │           │  ├─ BladeCompiler.php
│  │  │           │  ├─ Compiler.php
│  │  │           │  ├─ CompilerInterface.php
│  │  │           │  ├─ ComponentTagCompiler.php
│  │  │           │  └─ Concerns
│  │  │           │     ├─ CompilesAuthorizations.php
│  │  │           │     ├─ CompilesClasses.php
│  │  │           │     ├─ CompilesComments.php
│  │  │           │     ├─ CompilesComponents.php
│  │  │           │     ├─ CompilesConditionals.php
│  │  │           │     ├─ CompilesContexts.php
│  │  │           │     ├─ CompilesEchos.php
│  │  │           │     ├─ CompilesErrors.php
│  │  │           │     ├─ CompilesFragments.php
│  │  │           │     ├─ CompilesHelpers.php
│  │  │           │     ├─ CompilesIncludes.php
│  │  │           │     ├─ CompilesInjections.php
│  │  │           │     ├─ CompilesJs.php
│  │  │           │     ├─ CompilesJson.php
│  │  │           │     ├─ CompilesLayouts.php
│  │  │           │     ├─ CompilesLoops.php
│  │  │           │     ├─ CompilesRawPhp.php
│  │  │           │     ├─ CompilesSessions.php
│  │  │           │     ├─ CompilesStacks.php
│  │  │           │     ├─ CompilesStyles.php
│  │  │           │     ├─ CompilesTranslations.php
│  │  │           │     └─ CompilesUseStatements.php
│  │  │           ├─ Component.php
│  │  │           ├─ ComponentAttributeBag.php
│  │  │           ├─ ComponentSlot.php
│  │  │           ├─ Concerns
│  │  │           │  ├─ ManagesComponents.php
│  │  │           │  ├─ ManagesEvents.php
│  │  │           │  ├─ ManagesFragments.php
│  │  │           │  ├─ ManagesLayouts.php
│  │  │           │  ├─ ManagesLoops.php
│  │  │           │  ├─ ManagesStacks.php
│  │  │           │  └─ ManagesTranslations.php
│  │  │           ├─ DynamicComponent.php
│  │  │           ├─ Engines
│  │  │           │  ├─ CompilerEngine.php
│  │  │           │  ├─ Engine.php
│  │  │           │  ├─ EngineResolver.php
│  │  │           │  ├─ FileEngine.php
│  │  │           │  └─ PhpEngine.php
│  │  │           ├─ Factory.php
│  │  │           ├─ FileViewFinder.php
│  │  │           ├─ InvokableComponentVariable.php
│  │  │           ├─ LICENSE.md
│  │  │           ├─ Middleware
│  │  │           │  └─ ShareErrorsFromSession.php
│  │  │           ├─ View.php
│  │  │           ├─ ViewException.php
│  │  │           ├─ ViewFinderInterface.php
│  │  │           ├─ ViewName.php
│  │  │           ├─ ViewServiceProvider.php
│  │  │           └─ composer.json
│  │  ├─ octane
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ art
│  │  │  │  └─ logo.svg
│  │  │  ├─ bin
│  │  │  │  ├─ WorkerState.php
│  │  │  │  ├─ bootstrap.php
│  │  │  │  ├─ createSwooleCacheTable.php
│  │  │  │  ├─ createSwooleServer.php
│  │  │  │  ├─ createSwooleTables.php
│  │  │  │  ├─ createSwooleTimerTable.php
│  │  │  │  ├─ file-watcher.cjs
│  │  │  │  ├─ frankenphp-worker.php
│  │  │  │  ├─ roadrunner-worker
│  │  │  │  └─ swoole-server
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ octane.php
│  │  │  ├─ fixes
│  │  │  │  ├─ fix-symfony-dd.php
│  │  │  │  ├─ fix-symfony-file-moving.php
│  │  │  │  └─ fix-symfony-file-validation.php
│  │  │  └─ src
│  │  │     ├─ ApplicationFactory.php
│  │  │     ├─ ApplicationGateway.php
│  │  │     ├─ Cache
│  │  │     │  ├─ OctaneArrayStore.php
│  │  │     │  └─ OctaneStore.php
│  │  │     ├─ Commands
│  │  │     │  ├─ Command.php
│  │  │     │  ├─ Concerns
│  │  │     │  │  ├─ InstallsFrankenPhpDependencies.php
│  │  │     │  │  ├─ InstallsRoadRunnerDependencies.php
│  │  │     │  │  ├─ InteractsWithEnvironmentVariables.php
│  │  │     │  │  ├─ InteractsWithIO.php
│  │  │     │  │  ├─ InteractsWithServers.php
│  │  │     │  │  └─ InteractsWithTerminal.php
│  │  │     │  ├─ InstallCommand.php
│  │  │     │  ├─ ReloadCommand.php
│  │  │     │  ├─ StartCommand.php
│  │  │     │  ├─ StartFrankenPhpCommand.php
│  │  │     │  ├─ StartRoadRunnerCommand.php
│  │  │     │  ├─ StartSwooleCommand.php
│  │  │     │  ├─ StatusCommand.php
│  │  │     │  ├─ StopCommand.php
│  │  │     │  └─ stubs
│  │  │     │     ├─ Caddyfile
│  │  │     │     ├─ frankenphp-worker.php
│  │  │     │     └─ rr.yaml
│  │  │     ├─ Concerns
│  │  │     │  ├─ ProvidesConcurrencySupport.php
│  │  │     │  ├─ ProvidesDefaultConfigurationOptions.php
│  │  │     │  ├─ ProvidesRouting.php
│  │  │     │  └─ RegistersTickHandlers.php
│  │  │     ├─ Contracts
│  │  │     │  ├─ Client.php
│  │  │     │  ├─ DispatchesCoroutines.php
│  │  │     │  ├─ DispatchesTasks.php
│  │  │     │  ├─ OperationTerminated.php
│  │  │     │  ├─ ServerProcessInspector.php
│  │  │     │  ├─ ServesStaticFiles.php
│  │  │     │  ├─ StoppableClient.php
│  │  │     │  └─ Worker.php
│  │  │     ├─ CurrentApplication.php
│  │  │     ├─ DispatchesEvents.php
│  │  │     ├─ Events
│  │  │     │  ├─ HasApplicationAndSandbox.php
│  │  │     │  ├─ RequestHandled.php
│  │  │     │  ├─ RequestReceived.php
│  │  │     │  ├─ RequestTerminated.php
│  │  │     │  ├─ TaskReceived.php
│  │  │     │  ├─ TaskTerminated.php
│  │  │     │  ├─ TickReceived.php
│  │  │     │  ├─ TickTerminated.php
│  │  │     │  ├─ WorkerErrorOccurred.php
│  │  │     │  ├─ WorkerStarting.php
│  │  │     │  └─ WorkerStopping.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ DdException.php
│  │  │     │  ├─ ServerShutdownException.php
│  │  │     │  ├─ TaskException.php
│  │  │     │  ├─ TaskExceptionResult.php
│  │  │     │  ├─ TaskTimeoutException.php
│  │  │     │  ├─ ValueTooLargeForColumnException.php
│  │  │     │  └─ WorkerException.php
│  │  │     ├─ Exec.php
│  │  │     ├─ Facades
│  │  │     │  └─ Octane.php
│  │  │     ├─ FrankenPhp
│  │  │     │  ├─ Concerns
│  │  │     │  │  └─ FindsFrankenPhpBinary.php
│  │  │     │  ├─ FrankenPhpClient.php
│  │  │     │  ├─ ServerProcessInspector.php
│  │  │     │  └─ ServerStateFile.php
│  │  │     ├─ Listeners
│  │  │     │  ├─ CloseMonologHandlers.php
│  │  │     │  ├─ CollectGarbage.php
│  │  │     │  ├─ CreateConfigurationSandbox.php
│  │  │     │  ├─ CreateUrlGeneratorSandbox.php
│  │  │     │  ├─ DisconnectFromDatabases.php
│  │  │     │  ├─ EnforceRequestScheme.php
│  │  │     │  ├─ EnsureRequestServerPortMatchesScheme.php
│  │  │     │  ├─ EnsureUploadedFilesAreValid.php
│  │  │     │  ├─ EnsureUploadedFilesCanBeMoved.php
│  │  │     │  ├─ FlushArrayCache.php
│  │  │     │  ├─ FlushAuthenticationState.php
│  │  │     │  ├─ FlushDatabaseQueryLog.php
│  │  │     │  ├─ FlushDatabaseRecordModificationState.php
│  │  │     │  ├─ FlushLocaleState.php
│  │  │     │  ├─ FlushLogContext.php
│  │  │     │  ├─ FlushMonologState.php
│  │  │     │  ├─ FlushOnce.php
│  │  │     │  ├─ FlushQueuedCookies.php
│  │  │     │  ├─ FlushSessionState.php
│  │  │     │  ├─ FlushStrCache.php
│  │  │     │  ├─ FlushTemporaryContainerInstances.php
│  │  │     │  ├─ FlushTranslatorCache.php
│  │  │     │  ├─ FlushUploadedFiles.php
│  │  │     │  ├─ FlushVite.php
│  │  │     │  ├─ GiveNewApplicationInstanceToAuthorizationGate.php
│  │  │     │  ├─ GiveNewApplicationInstanceToBroadcastManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToCacheManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToDatabaseManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToDatabaseSessionHandler.php
│  │  │     │  ├─ GiveNewApplicationInstanceToFilesystemManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToHttpKernel.php
│  │  │     │  ├─ GiveNewApplicationInstanceToLogManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToMailManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToNotificationChannelManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToPipelineHub.php
│  │  │     │  ├─ GiveNewApplicationInstanceToQueueManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToRouter.php
│  │  │     │  ├─ GiveNewApplicationInstanceToSessionManager.php
│  │  │     │  ├─ GiveNewApplicationInstanceToValidationFactory.php
│  │  │     │  ├─ GiveNewApplicationInstanceToViewFactory.php
│  │  │     │  ├─ GiveNewRequestInstanceToApplication.php
│  │  │     │  ├─ GiveNewRequestInstanceToPaginator.php
│  │  │     │  ├─ PrepareInertiaForNextOperation.php
│  │  │     │  ├─ PrepareLivewireForNextOperation.php
│  │  │     │  ├─ PrepareScoutForNextOperation.php
│  │  │     │  ├─ PrepareSocialiteForNextOperation.php
│  │  │     │  ├─ RefreshQueryDurationHandling.php
│  │  │     │  ├─ ReportException.php
│  │  │     │  └─ StopWorkerIfNecessary.php
│  │  │     ├─ MarshalsPsr7RequestsAndResponses.php
│  │  │     ├─ MimeType.php
│  │  │     ├─ Octane.php
│  │  │     ├─ OctaneResponse.php
│  │  │     ├─ OctaneServiceProvider.php
│  │  │     ├─ PosixExtension.php
│  │  │     ├─ RequestContext.php
│  │  │     ├─ RoadRunner
│  │  │     │  ├─ Concerns
│  │  │     │  │  └─ FindsRoadRunnerBinary.php
│  │  │     │  ├─ RoadRunnerClient.php
│  │  │     │  ├─ ServerProcessInspector.php
│  │  │     │  └─ ServerStateFile.php
│  │  │     ├─ SequentialCoroutineDispatcher.php
│  │  │     ├─ SequentialTaskDispatcher.php
│  │  │     ├─ Stream.php
│  │  │     ├─ Swoole
│  │  │     │  ├─ Actions
│  │  │     │  │  ├─ ConvertSwooleRequestToIlluminateRequest.php
│  │  │     │  │  └─ EnsureRequestsDontExceedMaxExecutionTime.php
│  │  │     │  ├─ Handlers
│  │  │     │  │  ├─ OnManagerStart.php
│  │  │     │  │  ├─ OnServerStart.php
│  │  │     │  │  └─ OnWorkerStart.php
│  │  │     │  ├─ InvokeTickCallable.php
│  │  │     │  ├─ ServerProcessInspector.php
│  │  │     │  ├─ ServerStateFile.php
│  │  │     │  ├─ SignalDispatcher.php
│  │  │     │  ├─ SwooleClient.php
│  │  │     │  ├─ SwooleCoroutineDispatcher.php
│  │  │     │  ├─ SwooleExtension.php
│  │  │     │  ├─ SwooleHttpTaskDispatcher.php
│  │  │     │  ├─ SwooleTaskDispatcher.php
│  │  │     │  └─ TaskResult.php
│  │  │     ├─ SymfonyProcessFactory.php
│  │  │     ├─ Tables
│  │  │     │  ├─ Concerns
│  │  │     │  │  └─ EnsuresColumnSizes.php
│  │  │     │  ├─ OpenSwooleTable.php
│  │  │     │  ├─ SwooleTable.php
│  │  │     │  └─ TableFactory.php
│  │  │     ├─ Testing
│  │  │     │  └─ Fakes
│  │  │     │     ├─ FakeClient.php
│  │  │     │     └─ FakeWorker.php
│  │  │     ├─ Worker.php
│  │  │     └─ WorkerExceptionInspector.php
│  │  ├─ pail
│  │  │  ├─ LICENSE.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Console
│  │  │     │  └─ Commands
│  │  │     │     └─ PailCommand.php
│  │  │     ├─ Contracts
│  │  │     │  └─ Printer.php
│  │  │     ├─ File.php
│  │  │     ├─ Files.php
│  │  │     ├─ Guards
│  │  │     │  └─ EnsurePcntlIsAvailable.php
│  │  │     ├─ Handler.php
│  │  │     ├─ LoggerFactory.php
│  │  │     ├─ Options.php
│  │  │     ├─ PailServiceProvider.php
│  │  │     ├─ Printers
│  │  │     │  └─ CliPrinter.php
│  │  │     ├─ ProcessFactory.php
│  │  │     └─ ValueObjects
│  │  │        ├─ MessageLogged.php
│  │  │        └─ Origin
│  │  │           ├─ Console.php
│  │  │           ├─ Http.php
│  │  │           └─ Queue.php
│  │  ├─ pint
│  │  │  ├─ LICENSE.md
│  │  │  ├─ builds
│  │  │  │  └─ pint
│  │  │  ├─ composer.json
│  │  │  └─ overrides
│  │  │     └─ Runner
│  │  │        └─ Parallel
│  │  │           └─ ProcessFactory.php
│  │  ├─ prompts
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Clear.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ Colors.php
│  │  │     │  ├─ Cursor.php
│  │  │     │  ├─ Erase.php
│  │  │     │  ├─ Events.php
│  │  │     │  ├─ FakesInputOutput.php
│  │  │     │  ├─ Fallback.php
│  │  │     │  ├─ Interactivity.php
│  │  │     │  ├─ Scrolling.php
│  │  │     │  ├─ Termwind.php
│  │  │     │  ├─ Themes.php
│  │  │     │  ├─ Truncation.php
│  │  │     │  └─ TypedValue.php
│  │  │     ├─ ConfirmPrompt.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ FormRevertedException.php
│  │  │     │  └─ NonInteractiveValidationException.php
│  │  │     ├─ FormBuilder.php
│  │  │     ├─ FormStep.php
│  │  │     ├─ Key.php
│  │  │     ├─ MultiSearchPrompt.php
│  │  │     ├─ MultiSelectPrompt.php
│  │  │     ├─ Note.php
│  │  │     ├─ Output
│  │  │     │  ├─ BufferedConsoleOutput.php
│  │  │     │  └─ ConsoleOutput.php
│  │  │     ├─ PasswordPrompt.php
│  │  │     ├─ PausePrompt.php
│  │  │     ├─ Progress.php
│  │  │     ├─ Prompt.php
│  │  │     ├─ SearchPrompt.php
│  │  │     ├─ SelectPrompt.php
│  │  │     ├─ Spinner.php
│  │  │     ├─ SuggestPrompt.php
│  │  │     ├─ Support
│  │  │     │  ├─ Result.php
│  │  │     │  └─ Utils.php
│  │  │     ├─ Table.php
│  │  │     ├─ Terminal.php
│  │  │     ├─ TextPrompt.php
│  │  │     ├─ TextareaPrompt.php
│  │  │     ├─ Themes
│  │  │     │  ├─ Contracts
│  │  │     │  │  └─ Scrolling.php
│  │  │     │  └─ Default
│  │  │     │     ├─ ClearRenderer.php
│  │  │     │     ├─ Concerns
│  │  │     │     │  ├─ DrawsBoxes.php
│  │  │     │     │  ├─ DrawsScrollbars.php
│  │  │     │     │  └─ InteractsWithStrings.php
│  │  │     │     ├─ ConfirmPromptRenderer.php
│  │  │     │     ├─ MultiSearchPromptRenderer.php
│  │  │     │     ├─ MultiSelectPromptRenderer.php
│  │  │     │     ├─ NoteRenderer.php
│  │  │     │     ├─ PasswordPromptRenderer.php
│  │  │     │     ├─ PausePromptRenderer.php
│  │  │     │     ├─ ProgressRenderer.php
│  │  │     │     ├─ Renderer.php
│  │  │     │     ├─ SearchPromptRenderer.php
│  │  │     │     ├─ SelectPromptRenderer.php
│  │  │     │     ├─ SpinnerRenderer.php
│  │  │     │     ├─ SuggestPromptRenderer.php
│  │  │     │     ├─ TableRenderer.php
│  │  │     │     ├─ TextPromptRenderer.php
│  │  │     │     └─ TextareaPromptRenderer.php
│  │  │     └─ helpers.php
│  │  ├─ sail
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ bin
│  │  │  │  └─ sail
│  │  │  ├─ composer.json
│  │  │  ├─ database
│  │  │  │  ├─ mariadb
│  │  │  │  │  └─ create-testing-database.sh
│  │  │  │  ├─ mysql
│  │  │  │  │  └─ create-testing-database.sh
│  │  │  │  └─ pgsql
│  │  │  │     └─ create-testing-database.sql
│  │  │  ├─ runtimes
│  │  │  │  ├─ 8.0
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.1
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.2
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.3
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  ├─ 8.4
│  │  │  │  │  ├─ Dockerfile
│  │  │  │  │  ├─ php.ini
│  │  │  │  │  ├─ start-container
│  │  │  │  │  └─ supervisord.conf
│  │  │  │  └─ 8.5
│  │  │  │     ├─ Dockerfile
│  │  │  │     ├─ php.ini
│  │  │  │     ├─ start-container
│  │  │  │     └─ supervisord.conf
│  │  │  ├─ src
│  │  │  │  ├─ Console
│  │  │  │  │  ├─ AddCommand.php
│  │  │  │  │  ├─ Concerns
│  │  │  │  │  │  └─ InteractsWithDockerComposeServices.php
│  │  │  │  │  ├─ InstallCommand.php
│  │  │  │  │  └─ PublishCommand.php
│  │  │  │  └─ SailServiceProvider.php
│  │  │  └─ stubs
│  │  │     ├─ compose.stub
│  │  │     ├─ devcontainer.stub
│  │  │     ├─ mailpit.stub
│  │  │     ├─ mariadb.stub
│  │  │     ├─ meilisearch.stub
│  │  │     ├─ memcached.stub
│  │  │     ├─ minio.stub
│  │  │     ├─ mongodb.stub
│  │  │     ├─ mysql.stub
│  │  │     ├─ pgsql.stub
│  │  │     ├─ rabbitmq.stub
│  │  │     ├─ redis.stub
│  │  │     ├─ rustfs.stub
│  │  │     ├─ selenium.stub
│  │  │     ├─ soketi.stub
│  │  │     ├─ typesense.stub
│  │  │     └─ valkey.stub
│  │  ├─ sanctum
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ UPGRADE.md
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ sanctum.php
│  │  │  ├─ database
│  │  │  │  └─ migrations
│  │  │  │     └─ 2019_12_14_000001_create_personal_access_tokens_table.php
│  │  │  ├─ src
│  │  │  │  ├─ Console
│  │  │  │  │  └─ Commands
│  │  │  │  │     └─ PruneExpired.php
│  │  │  │  ├─ Contracts
│  │  │  │  │  ├─ HasAbilities.php
│  │  │  │  │  └─ HasApiTokens.php
│  │  │  │  ├─ Events
│  │  │  │  │  └─ TokenAuthenticated.php
│  │  │  │  ├─ Exceptions
│  │  │  │  │  ├─ MissingAbilityException.php
│  │  │  │  │  └─ MissingScopeException.php
│  │  │  │  ├─ Guard.php
│  │  │  │  ├─ HasApiTokens.php
│  │  │  │  ├─ Http
│  │  │  │  │  ├─ Controllers
│  │  │  │  │  │  └─ CsrfCookieController.php
│  │  │  │  │  └─ Middleware
│  │  │  │  │     ├─ AuthenticateSession.php
│  │  │  │  │     ├─ CheckAbilities.php
│  │  │  │  │     ├─ CheckForAnyAbility.php
│  │  │  │  │     ├─ CheckForAnyScope.php
│  │  │  │  │     ├─ CheckScopes.php
│  │  │  │  │     └─ EnsureFrontendRequestsAreStateful.php
│  │  │  │  ├─ NewAccessToken.php
│  │  │  │  ├─ PersonalAccessToken.php
│  │  │  │  ├─ Sanctum.php
│  │  │  │  ├─ SanctumServiceProvider.php
│  │  │  │  └─ TransientToken.php
│  │  │  └─ testbench.yaml
│  │  ├─ serializable-closure
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Contracts
│  │  │     │  ├─ Serializable.php
│  │  │     │  └─ Signer.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ InvalidSignatureException.php
│  │  │     │  ├─ MissingSecretKeyException.php
│  │  │     │  └─ PhpVersionNotSupportedException.php
│  │  │     ├─ SerializableClosure.php
│  │  │     ├─ Serializers
│  │  │     │  ├─ Native.php
│  │  │     │  └─ Signed.php
│  │  │     ├─ Signers
│  │  │     │  └─ Hmac.php
│  │  │     ├─ Support
│  │  │     │  ├─ ClosureScope.php
│  │  │     │  ├─ ClosureStream.php
│  │  │     │  ├─ ReflectionClosure.php
│  │  │     │  └─ SelfReference.php
│  │  │     └─ UnsignedSerializableClosure.php
│  │  └─ tinker
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ tinker.php
│  │     └─ src
│  │        ├─ ClassAliasAutoloader.php
│  │        ├─ Console
│  │        │  └─ TinkerCommand.php
│  │        ├─ TinkerCaster.php
│  │        └─ TinkerServiceProvider.php
│  ├─ league
│  │  ├─ commonmark
│  │  │  ├─ .phpstorm.meta.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CommonMarkConverter.php
│  │  │     ├─ ConverterInterface.php
│  │  │     ├─ Delimiter
│  │  │     │  ├─ Bracket.php
│  │  │     │  ├─ Delimiter.php
│  │  │     │  ├─ DelimiterInterface.php
│  │  │     │  ├─ DelimiterParser.php
│  │  │     │  ├─ DelimiterStack.php
│  │  │     │  └─ Processor
│  │  │     │     ├─ CacheableDelimiterProcessorInterface.php
│  │  │     │     ├─ DelimiterProcessorCollection.php
│  │  │     │     ├─ DelimiterProcessorCollectionInterface.php
│  │  │     │     ├─ DelimiterProcessorInterface.php
│  │  │     │     └─ StaggeredDelimiterProcessor.php
│  │  │     ├─ Environment
│  │  │     │  ├─ Environment.php
│  │  │     │  ├─ EnvironmentAwareInterface.php
│  │  │     │  ├─ EnvironmentBuilderInterface.php
│  │  │     │  └─ EnvironmentInterface.php
│  │  │     ├─ Event
│  │  │     │  ├─ AbstractEvent.php
│  │  │     │  ├─ DocumentParsedEvent.php
│  │  │     │  ├─ DocumentPreParsedEvent.php
│  │  │     │  ├─ DocumentPreRenderEvent.php
│  │  │     │  ├─ DocumentRenderedEvent.php
│  │  │     │  └─ ListenerData.php
│  │  │     ├─ Exception
│  │  │     │  ├─ AlreadyInitializedException.php
│  │  │     │  ├─ CommonMarkException.php
│  │  │     │  ├─ IOException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ LogicException.php
│  │  │     │  ├─ MissingDependencyException.php
│  │  │     │  └─ UnexpectedEncodingException.php
│  │  │     ├─ Extension
│  │  │     │  ├─ Attributes
│  │  │     │  │  ├─ AttributesExtension.php
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  └─ AttributesListener.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Attributes.php
│  │  │     │  │  │  └─ AttributesInline.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ AttributesBlockContinueParser.php
│  │  │     │  │  │  ├─ AttributesBlockStartParser.php
│  │  │     │  │  │  └─ AttributesInlineParser.php
│  │  │     │  │  └─ Util
│  │  │     │  │     └─ AttributesHelper.php
│  │  │     │  ├─ Autolink
│  │  │     │  │  ├─ AutolinkExtension.php
│  │  │     │  │  ├─ EmailAutolinkParser.php
│  │  │     │  │  └─ UrlAutolinkParser.php
│  │  │     │  ├─ CommonMark
│  │  │     │  │  ├─ CommonMarkCoreExtension.php
│  │  │     │  │  ├─ Delimiter
│  │  │     │  │  │  └─ Processor
│  │  │     │  │  │     └─ EmphasisDelimiterProcessor.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Block
│  │  │     │  │  │  │  ├─ BlockQuote.php
│  │  │     │  │  │  │  ├─ FencedCode.php
│  │  │     │  │  │  │  ├─ Heading.php
│  │  │     │  │  │  │  ├─ HtmlBlock.php
│  │  │     │  │  │  │  ├─ IndentedCode.php
│  │  │     │  │  │  │  ├─ ListBlock.php
│  │  │     │  │  │  │  ├─ ListData.php
│  │  │     │  │  │  │  ├─ ListItem.php
│  │  │     │  │  │  │  └─ ThematicBreak.php
│  │  │     │  │  │  └─ Inline
│  │  │     │  │  │     ├─ AbstractWebResource.php
│  │  │     │  │  │     ├─ Code.php
│  │  │     │  │  │     ├─ Emphasis.php
│  │  │     │  │  │     ├─ HtmlInline.php
│  │  │     │  │  │     ├─ Image.php
│  │  │     │  │  │     ├─ Link.php
│  │  │     │  │  │     └─ Strong.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ Block
│  │  │     │  │  │  │  ├─ BlockQuoteParser.php
│  │  │     │  │  │  │  ├─ BlockQuoteStartParser.php
│  │  │     │  │  │  │  ├─ FencedCodeParser.php
│  │  │     │  │  │  │  ├─ FencedCodeStartParser.php
│  │  │     │  │  │  │  ├─ HeadingParser.php
│  │  │     │  │  │  │  ├─ HeadingStartParser.php
│  │  │     │  │  │  │  ├─ HtmlBlockParser.php
│  │  │     │  │  │  │  ├─ HtmlBlockStartParser.php
│  │  │     │  │  │  │  ├─ IndentedCodeParser.php
│  │  │     │  │  │  │  ├─ IndentedCodeStartParser.php
│  │  │     │  │  │  │  ├─ ListBlockParser.php
│  │  │     │  │  │  │  ├─ ListBlockStartParser.php
│  │  │     │  │  │  │  ├─ ListItemParser.php
│  │  │     │  │  │  │  ├─ ThematicBreakParser.php
│  │  │     │  │  │  │  └─ ThematicBreakStartParser.php
│  │  │     │  │  │  └─ Inline
│  │  │     │  │  │     ├─ AutolinkParser.php
│  │  │     │  │  │     ├─ BacktickParser.php
│  │  │     │  │  │     ├─ BangParser.php
│  │  │     │  │  │     ├─ CloseBracketParser.php
│  │  │     │  │  │     ├─ EntityParser.php
│  │  │     │  │  │     ├─ EscapableParser.php
│  │  │     │  │  │     ├─ HtmlInlineParser.php
│  │  │     │  │  │     └─ OpenBracketParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ Block
│  │  │     │  │     │  ├─ BlockQuoteRenderer.php
│  │  │     │  │     │  ├─ FencedCodeRenderer.php
│  │  │     │  │     │  ├─ HeadingRenderer.php
│  │  │     │  │     │  ├─ HtmlBlockRenderer.php
│  │  │     │  │     │  ├─ IndentedCodeRenderer.php
│  │  │     │  │     │  ├─ ListBlockRenderer.php
│  │  │     │  │     │  ├─ ListItemRenderer.php
│  │  │     │  │     │  └─ ThematicBreakRenderer.php
│  │  │     │  │     └─ Inline
│  │  │     │  │        ├─ CodeRenderer.php
│  │  │     │  │        ├─ EmphasisRenderer.php
│  │  │     │  │        ├─ HtmlInlineRenderer.php
│  │  │     │  │        ├─ ImageRenderer.php
│  │  │     │  │        ├─ LinkRenderer.php
│  │  │     │  │        └─ StrongRenderer.php
│  │  │     │  ├─ ConfigurableExtensionInterface.php
│  │  │     │  ├─ DefaultAttributes
│  │  │     │  │  ├─ ApplyDefaultAttributesProcessor.php
│  │  │     │  │  └─ DefaultAttributesExtension.php
│  │  │     │  ├─ DescriptionList
│  │  │     │  │  ├─ DescriptionListExtension.php
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  ├─ ConsecutiveDescriptionListMerger.php
│  │  │     │  │  │  └─ LooseDescriptionHandler.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Description.php
│  │  │     │  │  │  ├─ DescriptionList.php
│  │  │     │  │  │  └─ DescriptionTerm.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ DescriptionContinueParser.php
│  │  │     │  │  │  ├─ DescriptionListContinueParser.php
│  │  │     │  │  │  ├─ DescriptionStartParser.php
│  │  │     │  │  │  └─ DescriptionTermContinueParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ DescriptionListRenderer.php
│  │  │     │  │     ├─ DescriptionRenderer.php
│  │  │     │  │     └─ DescriptionTermRenderer.php
│  │  │     │  ├─ DisallowedRawHtml
│  │  │     │  │  ├─ DisallowedRawHtmlExtension.php
│  │  │     │  │  └─ DisallowedRawHtmlRenderer.php
│  │  │     │  ├─ Embed
│  │  │     │  │  ├─ Bridge
│  │  │     │  │  │  └─ OscaroteroEmbedAdapter.php
│  │  │     │  │  ├─ DomainFilteringAdapter.php
│  │  │     │  │  ├─ Embed.php
│  │  │     │  │  ├─ EmbedAdapterInterface.php
│  │  │     │  │  ├─ EmbedExtension.php
│  │  │     │  │  ├─ EmbedParser.php
│  │  │     │  │  ├─ EmbedProcessor.php
│  │  │     │  │  ├─ EmbedRenderer.php
│  │  │     │  │  └─ EmbedStartParser.php
│  │  │     │  ├─ ExtensionInterface.php
│  │  │     │  ├─ ExternalLink
│  │  │     │  │  ├─ ExternalLinkExtension.php
│  │  │     │  │  └─ ExternalLinkProcessor.php
│  │  │     │  ├─ Footnote
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  ├─ AnonymousFootnotesListener.php
│  │  │     │  │  │  ├─ FixOrphanedFootnotesAndRefsListener.php
│  │  │     │  │  │  ├─ GatherFootnotesListener.php
│  │  │     │  │  │  └─ NumberFootnotesListener.php
│  │  │     │  │  ├─ FootnoteExtension.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Footnote.php
│  │  │     │  │  │  ├─ FootnoteBackref.php
│  │  │     │  │  │  ├─ FootnoteContainer.php
│  │  │     │  │  │  └─ FootnoteRef.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ AnonymousFootnoteRefParser.php
│  │  │     │  │  │  ├─ FootnoteParser.php
│  │  │     │  │  │  ├─ FootnoteRefParser.php
│  │  │     │  │  │  └─ FootnoteStartParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ FootnoteBackrefRenderer.php
│  │  │     │  │     ├─ FootnoteContainerRenderer.php
│  │  │     │  │     ├─ FootnoteRefRenderer.php
│  │  │     │  │     └─ FootnoteRenderer.php
│  │  │     │  ├─ FrontMatter
│  │  │     │  │  ├─ Data
│  │  │     │  │  │  ├─ FrontMatterDataParserInterface.php
│  │  │     │  │  │  ├─ LibYamlFrontMatterParser.php
│  │  │     │  │  │  └─ SymfonyYamlFrontMatterParser.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  └─ InvalidFrontMatterException.php
│  │  │     │  │  ├─ FrontMatterExtension.php
│  │  │     │  │  ├─ FrontMatterParser.php
│  │  │     │  │  ├─ FrontMatterParserInterface.php
│  │  │     │  │  ├─ FrontMatterProviderInterface.php
│  │  │     │  │  ├─ Input
│  │  │     │  │  │  └─ MarkdownInputWithFrontMatter.php
│  │  │     │  │  ├─ Listener
│  │  │     │  │  │  ├─ FrontMatterPostRenderListener.php
│  │  │     │  │  │  └─ FrontMatterPreParser.php
│  │  │     │  │  └─ Output
│  │  │     │  │     └─ RenderedContentWithFrontMatter.php
│  │  │     │  ├─ GithubFlavoredMarkdownExtension.php
│  │  │     │  ├─ HeadingPermalink
│  │  │     │  │  ├─ HeadingPermalink.php
│  │  │     │  │  ├─ HeadingPermalinkExtension.php
│  │  │     │  │  ├─ HeadingPermalinkProcessor.php
│  │  │     │  │  └─ HeadingPermalinkRenderer.php
│  │  │     │  ├─ Highlight
│  │  │     │  │  ├─ HighlightExtension.php
│  │  │     │  │  ├─ Mark.php
│  │  │     │  │  ├─ MarkDelimiterProcessor.php
│  │  │     │  │  └─ MarkRenderer.php
│  │  │     │  ├─ InlinesOnly
│  │  │     │  │  ├─ ChildRenderer.php
│  │  │     │  │  └─ InlinesOnlyExtension.php
│  │  │     │  ├─ Mention
│  │  │     │  │  ├─ Generator
│  │  │     │  │  │  ├─ CallbackGenerator.php
│  │  │     │  │  │  ├─ MentionGeneratorInterface.php
│  │  │     │  │  │  └─ StringTemplateLinkGenerator.php
│  │  │     │  │  ├─ Mention.php
│  │  │     │  │  ├─ MentionExtension.php
│  │  │     │  │  └─ MentionParser.php
│  │  │     │  ├─ SmartPunct
│  │  │     │  │  ├─ DashParser.php
│  │  │     │  │  ├─ EllipsesParser.php
│  │  │     │  │  ├─ Quote.php
│  │  │     │  │  ├─ QuoteParser.php
│  │  │     │  │  ├─ QuoteProcessor.php
│  │  │     │  │  ├─ ReplaceUnpairedQuotesListener.php
│  │  │     │  │  └─ SmartPunctExtension.php
│  │  │     │  ├─ Strikethrough
│  │  │     │  │  ├─ Strikethrough.php
│  │  │     │  │  ├─ StrikethroughDelimiterProcessor.php
│  │  │     │  │  ├─ StrikethroughExtension.php
│  │  │     │  │  └─ StrikethroughRenderer.php
│  │  │     │  ├─ Table
│  │  │     │  │  ├─ Table.php
│  │  │     │  │  ├─ TableCell.php
│  │  │     │  │  ├─ TableCellRenderer.php
│  │  │     │  │  ├─ TableExtension.php
│  │  │     │  │  ├─ TableParser.php
│  │  │     │  │  ├─ TableRenderer.php
│  │  │     │  │  ├─ TableRow.php
│  │  │     │  │  ├─ TableRowRenderer.php
│  │  │     │  │  ├─ TableSection.php
│  │  │     │  │  ├─ TableSectionRenderer.php
│  │  │     │  │  └─ TableStartParser.php
│  │  │     │  ├─ TableOfContents
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ TableOfContents.php
│  │  │     │  │  │  └─ TableOfContentsPlaceholder.php
│  │  │     │  │  ├─ Normalizer
│  │  │     │  │  │  ├─ AsIsNormalizerStrategy.php
│  │  │     │  │  │  ├─ FlatNormalizerStrategy.php
│  │  │     │  │  │  ├─ NormalizerStrategyInterface.php
│  │  │     │  │  │  └─ RelativeNormalizerStrategy.php
│  │  │     │  │  ├─ TableOfContentsBuilder.php
│  │  │     │  │  ├─ TableOfContentsExtension.php
│  │  │     │  │  ├─ TableOfContentsGenerator.php
│  │  │     │  │  ├─ TableOfContentsGeneratorInterface.php
│  │  │     │  │  ├─ TableOfContentsPlaceholderParser.php
│  │  │     │  │  ├─ TableOfContentsPlaceholderRenderer.php
│  │  │     │  │  └─ TableOfContentsRenderer.php
│  │  │     │  └─ TaskList
│  │  │     │     ├─ TaskListExtension.php
│  │  │     │     ├─ TaskListItemMarker.php
│  │  │     │     ├─ TaskListItemMarkerParser.php
│  │  │     │     └─ TaskListItemMarkerRenderer.php
│  │  │     ├─ GithubFlavoredMarkdownConverter.php
│  │  │     ├─ Input
│  │  │     │  ├─ MarkdownInput.php
│  │  │     │  └─ MarkdownInputInterface.php
│  │  │     ├─ MarkdownConverter.php
│  │  │     ├─ MarkdownConverterInterface.php
│  │  │     ├─ Node
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ AbstractBlock.php
│  │  │     │  │  ├─ Document.php
│  │  │     │  │  ├─ Paragraph.php
│  │  │     │  │  └─ TightBlockInterface.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ AbstractInline.php
│  │  │     │  │  ├─ AbstractStringContainer.php
│  │  │     │  │  ├─ AdjacentTextMerger.php
│  │  │     │  │  ├─ DelimitedInterface.php
│  │  │     │  │  ├─ Newline.php
│  │  │     │  │  └─ Text.php
│  │  │     │  ├─ Node.php
│  │  │     │  ├─ NodeIterator.php
│  │  │     │  ├─ NodeWalker.php
│  │  │     │  ├─ NodeWalkerEvent.php
│  │  │     │  ├─ Query
│  │  │     │  │  ├─ AndExpr.php
│  │  │     │  │  ├─ ExpressionInterface.php
│  │  │     │  │  └─ OrExpr.php
│  │  │     │  ├─ Query.php
│  │  │     │  ├─ RawMarkupContainerInterface.php
│  │  │     │  ├─ StringContainerHelper.php
│  │  │     │  └─ StringContainerInterface.php
│  │  │     ├─ Normalizer
│  │  │     │  ├─ SlugNormalizer.php
│  │  │     │  ├─ TextNormalizer.php
│  │  │     │  ├─ TextNormalizerInterface.php
│  │  │     │  ├─ UniqueSlugNormalizer.php
│  │  │     │  └─ UniqueSlugNormalizerInterface.php
│  │  │     ├─ Output
│  │  │     │  ├─ RenderedContent.php
│  │  │     │  └─ RenderedContentInterface.php
│  │  │     ├─ Parser
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ AbstractBlockContinueParser.php
│  │  │     │  │  ├─ BlockContinue.php
│  │  │     │  │  ├─ BlockContinueParserInterface.php
│  │  │     │  │  ├─ BlockContinueParserWithInlinesInterface.php
│  │  │     │  │  ├─ BlockStart.php
│  │  │     │  │  ├─ BlockStartParserInterface.php
│  │  │     │  │  ├─ DocumentBlockParser.php
│  │  │     │  │  ├─ ParagraphParser.php
│  │  │     │  │  └─ SkipLinesStartingWithLettersParser.php
│  │  │     │  ├─ Cursor.php
│  │  │     │  ├─ CursorState.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ InlineParserInterface.php
│  │  │     │  │  ├─ InlineParserMatch.php
│  │  │     │  │  └─ NewlineParser.php
│  │  │     │  ├─ InlineParserContext.php
│  │  │     │  ├─ InlineParserEngine.php
│  │  │     │  ├─ InlineParserEngineInterface.php
│  │  │     │  ├─ MarkdownParser.php
│  │  │     │  ├─ MarkdownParserInterface.php
│  │  │     │  ├─ MarkdownParserState.php
│  │  │     │  ├─ MarkdownParserStateInterface.php
│  │  │     │  └─ ParserLogicException.php
│  │  │     ├─ Reference
│  │  │     │  ├─ MemoryLimitedReferenceMap.php
│  │  │     │  ├─ Reference.php
│  │  │     │  ├─ ReferenceInterface.php
│  │  │     │  ├─ ReferenceMap.php
│  │  │     │  ├─ ReferenceMapInterface.php
│  │  │     │  ├─ ReferenceParser.php
│  │  │     │  └─ ReferenceableInterface.php
│  │  │     ├─ Renderer
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ DocumentRenderer.php
│  │  │     │  │  └─ ParagraphRenderer.php
│  │  │     │  ├─ ChildNodeRendererInterface.php
│  │  │     │  ├─ DocumentRendererInterface.php
│  │  │     │  ├─ HtmlDecorator.php
│  │  │     │  ├─ HtmlRenderer.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ NewlineRenderer.php
│  │  │     │  │  └─ TextRenderer.php
│  │  │     │  ├─ MarkdownRendererInterface.php
│  │  │     │  ├─ NoMatchingRendererException.php
│  │  │     │  └─ NodeRendererInterface.php
│  │  │     ├─ Util
│  │  │     │  ├─ ArrayCollection.php
│  │  │     │  ├─ Html5EntityDecoder.php
│  │  │     │  ├─ HtmlElement.php
│  │  │     │  ├─ HtmlFilter.php
│  │  │     │  ├─ LinkParserHelper.php
│  │  │     │  ├─ PrioritizedList.php
│  │  │     │  ├─ RegexHelper.php
│  │  │     │  ├─ SpecReader.php
│  │  │     │  ├─ UrlEncoder.php
│  │  │     │  └─ Xml.php
│  │  │     └─ Xml
│  │  │        ├─ FallbackNodeXmlRenderer.php
│  │  │        ├─ MarkdownToXmlConverter.php
│  │  │        ├─ XmlNodeRendererInterface.php
│  │  │        └─ XmlRenderer.php
│  │  ├─ config
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Configuration.php
│  │  │     ├─ ConfigurationAwareInterface.php
│  │  │     ├─ ConfigurationBuilderInterface.php
│  │  │     ├─ ConfigurationInterface.php
│  │  │     ├─ ConfigurationProviderInterface.php
│  │  │     ├─ Exception
│  │  │     │  ├─ ConfigurationExceptionInterface.php
│  │  │     │  ├─ InvalidConfigurationException.php
│  │  │     │  ├─ UnknownOptionException.php
│  │  │     │  └─ ValidationException.php
│  │  │     ├─ MutableConfigurationInterface.php
│  │  │     ├─ ReadOnlyConfiguration.php
│  │  │     └─ SchemaBuilderInterface.php
│  │  ├─ flysystem
│  │  │  ├─ INFO.md
│  │  │  ├─ LICENSE
│  │  │  ├─ composer.json
│  │  │  ├─ readme.md
│  │  │  └─ src
│  │  │     ├─ CalculateChecksumFromStream.php
│  │  │     ├─ ChecksumAlgoIsNotSupported.php
│  │  │     ├─ ChecksumProvider.php
│  │  │     ├─ Config.php
│  │  │     ├─ CorruptedPathDetected.php
│  │  │     ├─ DecoratedAdapter.php
│  │  │     ├─ DirectoryAttributes.php
│  │  │     ├─ DirectoryListing.php
│  │  │     ├─ FileAttributes.php
│  │  │     ├─ Filesystem.php
│  │  │     ├─ FilesystemAdapter.php
│  │  │     ├─ FilesystemException.php
│  │  │     ├─ FilesystemOperationFailed.php
│  │  │     ├─ FilesystemOperator.php
│  │  │     ├─ FilesystemReader.php
│  │  │     ├─ FilesystemWriter.php
│  │  │     ├─ InvalidStreamProvided.php
│  │  │     ├─ InvalidVisibilityProvided.php
│  │  │     ├─ MountManager.php
│  │  │     ├─ PathNormalizer.php
│  │  │     ├─ PathPrefixer.php
│  │  │     ├─ PathTraversalDetected.php
│  │  │     ├─ PortableVisibilityGuard.php
│  │  │     ├─ ProxyArrayAccessToProperties.php
│  │  │     ├─ ResolveIdenticalPathConflict.php
│  │  │     ├─ StorageAttributes.php
│  │  │     ├─ SymbolicLinkEncountered.php
│  │  │     ├─ UnableToCheckDirectoryExistence.php
│  │  │     ├─ UnableToCheckExistence.php
│  │  │     ├─ UnableToCheckFileExistence.php
│  │  │     ├─ UnableToCopyFile.php
│  │  │     ├─ UnableToCreateDirectory.php
│  │  │     ├─ UnableToDeleteDirectory.php
│  │  │     ├─ UnableToDeleteFile.php
│  │  │     ├─ UnableToGeneratePublicUrl.php
│  │  │     ├─ UnableToGenerateTemporaryUrl.php
│  │  │     ├─ UnableToListContents.php
│  │  │     ├─ UnableToMountFilesystem.php
│  │  │     ├─ UnableToMoveFile.php
│  │  │     ├─ UnableToProvideChecksum.php
│  │  │     ├─ UnableToReadFile.php
│  │  │     ├─ UnableToResolveFilesystemMount.php
│  │  │     ├─ UnableToRetrieveMetadata.php
│  │  │     ├─ UnableToSetVisibility.php
│  │  │     ├─ UnableToWriteFile.php
│  │  │     ├─ UnixVisibility
│  │  │     │  ├─ PortableVisibilityConverter.php
│  │  │     │  └─ VisibilityConverter.php
│  │  │     ├─ UnreadableFileEncountered.php
│  │  │     ├─ UrlGeneration
│  │  │     │  ├─ ChainedPublicUrlGenerator.php
│  │  │     │  ├─ PrefixPublicUrlGenerator.php
│  │  │     │  ├─ PublicUrlGenerator.php
│  │  │     │  ├─ ShardedPrefixPublicUrlGenerator.php
│  │  │     │  └─ TemporaryUrlGenerator.php
│  │  │     ├─ Visibility.php
│  │  │     └─ WhitespacePathNormalizer.php
│  │  ├─ flysystem-local
│  │  │  ├─ FallbackMimeTypeDetector.php
│  │  │  ├─ LICENSE
│  │  │  ├─ LocalFilesystemAdapter.php
│  │  │  └─ composer.json
│  │  ├─ mime-type-detection
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ EmptyExtensionToMimeTypeMap.php
│  │  │     ├─ ExtensionLookup.php
│  │  │     ├─ ExtensionMimeTypeDetector.php
│  │  │     ├─ ExtensionToMimeTypeMap.php
│  │  │     ├─ FinfoMimeTypeDetector.php
│  │  │     ├─ GeneratedExtensionToMimeTypeMap.php
│  │  │     ├─ MimeTypeDetector.php
│  │  │     └─ OverridingExtensionToMimeTypeMap.php
│  │  ├─ uri
│  │  │  ├─ BaseUri.php
│  │  │  ├─ Http.php
│  │  │  ├─ HttpFactory.php
│  │  │  ├─ LICENSE
│  │  │  ├─ SchemeType.php
│  │  │  ├─ Uri.php
│  │  │  ├─ UriInfo.php
│  │  │  ├─ UriResolver.php
│  │  │  ├─ UriScheme.php
│  │  │  ├─ UriTemplate
│  │  │  │  ├─ Expression.php
│  │  │  │  ├─ Operator.php
│  │  │  │  ├─ Template.php
│  │  │  │  ├─ TemplateCanNotBeExpanded.php
│  │  │  │  ├─ VarSpecifier.php
│  │  │  │  └─ VariableBag.php
│  │  │  ├─ UriTemplate.php
│  │  │  ├─ Urn.php
│  │  │  └─ composer.json
│  │  └─ uri-interfaces
│  │     ├─ Contracts
│  │     │  ├─ AuthorityInterface.php
│  │     │  ├─ Conditionable.php
│  │     │  ├─ DataPathInterface.php
│  │     │  ├─ DomainHostInterface.php
│  │     │  ├─ FragmentDirective.php
│  │     │  ├─ FragmentInterface.php
│  │     │  ├─ HostInterface.php
│  │     │  ├─ IpHostInterface.php
│  │     │  ├─ PathInterface.php
│  │     │  ├─ PortInterface.php
│  │     │  ├─ QueryInterface.php
│  │     │  ├─ SegmentedPathInterface.php
│  │     │  ├─ UriAccess.php
│  │     │  ├─ UriComponentInterface.php
│  │     │  ├─ UriException.php
│  │     │  ├─ UriInterface.php
│  │     │  └─ UserInfoInterface.php
│  │     ├─ Encoder.php
│  │     ├─ Exceptions
│  │     │  ├─ ConversionFailed.php
│  │     │  ├─ MissingFeature.php
│  │     │  ├─ OffsetOutOfBounds.php
│  │     │  └─ SyntaxError.php
│  │     ├─ FeatureDetection.php
│  │     ├─ HostFormat.php
│  │     ├─ HostRecord.php
│  │     ├─ HostType.php
│  │     ├─ IPv4
│  │     │  ├─ BCMathCalculator.php
│  │     │  ├─ Calculator.php
│  │     │  ├─ Converter.php
│  │     │  ├─ GMPCalculator.php
│  │     │  └─ NativeCalculator.php
│  │     ├─ IPv6
│  │     │  └─ Converter.php
│  │     ├─ Idna
│  │     │  ├─ Converter.php
│  │     │  ├─ Error.php
│  │     │  ├─ Option.php
│  │     │  └─ Result.php
│  │     ├─ KeyValuePair
│  │     │  └─ Converter.php
│  │     ├─ LICENSE
│  │     ├─ QueryString.php
│  │     ├─ UriComparisonMode.php
│  │     ├─ UriString.php
│  │     ├─ UrnComparisonMode.php
│  │     └─ composer.json
│  ├─ mockery
│  │  └─ mockery
│  │     ├─ .phpstorm.meta.php
│  │     ├─ .readthedocs.yml
│  │     ├─ CHANGELOG.md
│  │     ├─ CONTRIBUTING.md
│  │     ├─ COPYRIGHT.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     ├─ docs
│  │     │  ├─ Makefile
│  │     │  ├─ README.md
│  │     │  ├─ _static
│  │     │  ├─ conf.py
│  │     │  ├─ cookbook
│  │     │  │  ├─ big_parent_class.rst
│  │     │  │  ├─ class_constants.rst
│  │     │  │  ├─ default_expectations.rst
│  │     │  │  ├─ detecting_mock_objects.rst
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  ├─ mockery_on.rst
│  │     │  │  ├─ mocking_class_within_class.rst
│  │     │  │  ├─ mocking_hard_dependencies.rst
│  │     │  │  └─ not_calling_the_constructor.rst
│  │     │  ├─ getting_started
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ installation.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  ├─ quick_reference.rst
│  │     │  │  ├─ simple_example.rst
│  │     │  │  └─ upgrading.rst
│  │     │  ├─ index.rst
│  │     │  ├─ mockery
│  │     │  │  ├─ configuration.rst
│  │     │  │  ├─ exceptions.rst
│  │     │  │  ├─ gotchas.rst
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  └─ reserved_method_names.rst
│  │     │  ├─ reference
│  │     │  │  ├─ alternative_should_receive_syntax.rst
│  │     │  │  ├─ argument_validation.rst
│  │     │  │  ├─ creating_test_doubles.rst
│  │     │  │  ├─ demeter_chains.rst
│  │     │  │  ├─ expectations.rst
│  │     │  │  ├─ final_methods_classes.rst
│  │     │  │  ├─ index.rst
│  │     │  │  ├─ instance_mocking.rst
│  │     │  │  ├─ magic_methods.rst
│  │     │  │  ├─ map.rst.inc
│  │     │  │  ├─ partial_mocks.rst
│  │     │  │  ├─ pass_by_reference_behaviours.rst
│  │     │  │  ├─ phpunit_integration.rst
│  │     │  │  ├─ protected_methods.rst
│  │     │  │  ├─ public_properties.rst
│  │     │  │  ├─ public_static_properties.rst
│  │     │  │  └─ spies.rst
│  │     │  └─ requirements.txt
│  │     └─ library
│  │        ├─ Mockery
│  │        │  ├─ Adapter
│  │        │  │  └─ Phpunit
│  │        │  │     ├─ MockeryPHPUnitIntegration.php
│  │        │  │     ├─ MockeryPHPUnitIntegrationAssertPostConditions.php
│  │        │  │     ├─ MockeryTestCase.php
│  │        │  │     ├─ MockeryTestCaseSetUp.php
│  │        │  │     ├─ TestListener.php
│  │        │  │     └─ TestListenerTrait.php
│  │        │  ├─ ClosureWrapper.php
│  │        │  ├─ CompositeExpectation.php
│  │        │  ├─ Configuration.php
│  │        │  ├─ Container.php
│  │        │  ├─ CountValidator
│  │        │  │  ├─ AtLeast.php
│  │        │  │  ├─ AtMost.php
│  │        │  │  ├─ CountValidatorAbstract.php
│  │        │  │  ├─ CountValidatorInterface.php
│  │        │  │  ├─ Exact.php
│  │        │  │  └─ Exception.php
│  │        │  ├─ Exception
│  │        │  │  ├─ BadMethodCallException.php
│  │        │  │  ├─ InvalidArgumentException.php
│  │        │  │  ├─ InvalidCountException.php
│  │        │  │  ├─ InvalidOrderException.php
│  │        │  │  ├─ MockeryExceptionInterface.php
│  │        │  │  ├─ NoMatchingExpectationException.php
│  │        │  │  └─ RuntimeException.php
│  │        │  ├─ Exception.php
│  │        │  ├─ Expectation.php
│  │        │  ├─ ExpectationDirector.php
│  │        │  ├─ ExpectationInterface.php
│  │        │  ├─ ExpectsHigherOrderMessage.php
│  │        │  ├─ Generator
│  │        │  │  ├─ CachingGenerator.php
│  │        │  │  ├─ DefinedTargetClass.php
│  │        │  │  ├─ Generator.php
│  │        │  │  ├─ Method.php
│  │        │  │  ├─ MockConfiguration.php
│  │        │  │  ├─ MockConfigurationBuilder.php
│  │        │  │  ├─ MockDefinition.php
│  │        │  │  ├─ MockNameBuilder.php
│  │        │  │  ├─ Parameter.php
│  │        │  │  ├─ StringManipulation
│  │        │  │  │  └─ Pass
│  │        │  │  │     ├─ AvoidMethodClashPass.php
│  │        │  │  │     ├─ CallTypeHintPass.php
│  │        │  │  │     ├─ ClassAttributesPass.php
│  │        │  │  │     ├─ ClassNamePass.php
│  │        │  │  │     ├─ ClassPass.php
│  │        │  │  │     ├─ ConstantsPass.php
│  │        │  │  │     ├─ InstanceMockPass.php
│  │        │  │  │     ├─ InterfacePass.php
│  │        │  │  │     ├─ MagicMethodTypeHintsPass.php
│  │        │  │  │     ├─ MethodDefinitionPass.php
│  │        │  │  │     ├─ Pass.php
│  │        │  │  │     ├─ RemoveBuiltinMethodsThatAreFinalPass.php
│  │        │  │  │     ├─ RemoveDestructorPass.php
│  │        │  │  │     ├─ RemoveUnserializeForInternalSerializableClassesPass.php
│  │        │  │  │     └─ TraitPass.php
│  │        │  │  ├─ StringManipulationGenerator.php
│  │        │  │  ├─ TargetClassInterface.php
│  │        │  │  └─ UndefinedTargetClass.php
│  │        │  ├─ HigherOrderMessage.php
│  │        │  ├─ Instantiator.php
│  │        │  ├─ LegacyMockInterface.php
│  │        │  ├─ Loader
│  │        │  │  ├─ EvalLoader.php
│  │        │  │  ├─ Loader.php
│  │        │  │  └─ RequireLoader.php
│  │        │  ├─ Matcher
│  │        │  │  ├─ AndAnyOtherArgs.php
│  │        │  │  ├─ Any.php
│  │        │  │  ├─ AnyArgs.php
│  │        │  │  ├─ AnyOf.php
│  │        │  │  ├─ ArgumentListMatcher.php
│  │        │  │  ├─ Closure.php
│  │        │  │  ├─ Contains.php
│  │        │  │  ├─ Ducktype.php
│  │        │  │  ├─ HasKey.php
│  │        │  │  ├─ HasValue.php
│  │        │  │  ├─ IsEqual.php
│  │        │  │  ├─ IsSame.php
│  │        │  │  ├─ MatcherAbstract.php
│  │        │  │  ├─ MatcherInterface.php
│  │        │  │  ├─ MultiArgumentClosure.php
│  │        │  │  ├─ MustBe.php
│  │        │  │  ├─ NoArgs.php
│  │        │  │  ├─ Not.php
│  │        │  │  ├─ NotAnyOf.php
│  │        │  │  ├─ Pattern.php
│  │        │  │  ├─ Subset.php
│  │        │  │  └─ Type.php
│  │        │  ├─ MethodCall.php
│  │        │  ├─ Mock.php
│  │        │  ├─ MockInterface.php
│  │        │  ├─ QuickDefinitionsConfiguration.php
│  │        │  ├─ ReceivedMethodCalls.php
│  │        │  ├─ Reflector.php
│  │        │  ├─ Undefined.php
│  │        │  ├─ VerificationDirector.php
│  │        │  └─ VerificationExpectation.php
│  │        ├─ Mockery.php
│  │        └─ helpers.php
│  ├─ monolog
│  │  └─ monolog
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Monolog
│  │           ├─ Attribute
│  │           │  ├─ AsMonologProcessor.php
│  │           │  └─ WithMonologChannel.php
│  │           ├─ DateTimeImmutable.php
│  │           ├─ ErrorHandler.php
│  │           ├─ Formatter
│  │           │  ├─ ChromePHPFormatter.php
│  │           │  ├─ ElasticaFormatter.php
│  │           │  ├─ ElasticsearchFormatter.php
│  │           │  ├─ FlowdockFormatter.php
│  │           │  ├─ FluentdFormatter.php
│  │           │  ├─ FormatterInterface.php
│  │           │  ├─ GelfMessageFormatter.php
│  │           │  ├─ GoogleCloudLoggingFormatter.php
│  │           │  ├─ HtmlFormatter.php
│  │           │  ├─ JsonFormatter.php
│  │           │  ├─ LineFormatter.php
│  │           │  ├─ LogglyFormatter.php
│  │           │  ├─ LogmaticFormatter.php
│  │           │  ├─ LogstashFormatter.php
│  │           │  ├─ MongoDBFormatter.php
│  │           │  ├─ NormalizerFormatter.php
│  │           │  ├─ ScalarFormatter.php
│  │           │  ├─ SyslogFormatter.php
│  │           │  └─ WildfireFormatter.php
│  │           ├─ Handler
│  │           │  ├─ AbstractHandler.php
│  │           │  ├─ AbstractProcessingHandler.php
│  │           │  ├─ AbstractSyslogHandler.php
│  │           │  ├─ AmqpHandler.php
│  │           │  ├─ BrowserConsoleHandler.php
│  │           │  ├─ BufferHandler.php
│  │           │  ├─ ChromePHPHandler.php
│  │           │  ├─ CouchDBHandler.php
│  │           │  ├─ CubeHandler.php
│  │           │  ├─ Curl
│  │           │  │  └─ Util.php
│  │           │  ├─ DeduplicationHandler.php
│  │           │  ├─ DoctrineCouchDBHandler.php
│  │           │  ├─ DynamoDbHandler.php
│  │           │  ├─ ElasticaHandler.php
│  │           │  ├─ ElasticsearchHandler.php
│  │           │  ├─ ErrorLogHandler.php
│  │           │  ├─ FallbackGroupHandler.php
│  │           │  ├─ FilterHandler.php
│  │           │  ├─ FingersCrossed
│  │           │  │  ├─ ActivationStrategyInterface.php
│  │           │  │  ├─ ChannelLevelActivationStrategy.php
│  │           │  │  └─ ErrorLevelActivationStrategy.php
│  │           │  ├─ FingersCrossedHandler.php
│  │           │  ├─ FirePHPHandler.php
│  │           │  ├─ FleepHookHandler.php
│  │           │  ├─ FlowdockHandler.php
│  │           │  ├─ FormattableHandlerInterface.php
│  │           │  ├─ FormattableHandlerTrait.php
│  │           │  ├─ GelfHandler.php
│  │           │  ├─ GroupHandler.php
│  │           │  ├─ Handler.php
│  │           │  ├─ HandlerInterface.php
│  │           │  ├─ HandlerWrapper.php
│  │           │  ├─ IFTTTHandler.php
│  │           │  ├─ InsightOpsHandler.php
│  │           │  ├─ LogEntriesHandler.php
│  │           │  ├─ LogglyHandler.php
│  │           │  ├─ LogmaticHandler.php
│  │           │  ├─ MailHandler.php
│  │           │  ├─ MandrillHandler.php
│  │           │  ├─ MissingExtensionException.php
│  │           │  ├─ MongoDBHandler.php
│  │           │  ├─ NativeMailerHandler.php
│  │           │  ├─ NewRelicHandler.php
│  │           │  ├─ NoopHandler.php
│  │           │  ├─ NullHandler.php
│  │           │  ├─ OverflowHandler.php
│  │           │  ├─ PHPConsoleHandler.php
│  │           │  ├─ ProcessHandler.php
│  │           │  ├─ ProcessableHandlerInterface.php
│  │           │  ├─ ProcessableHandlerTrait.php
│  │           │  ├─ PsrHandler.php
│  │           │  ├─ PushoverHandler.php
│  │           │  ├─ RedisHandler.php
│  │           │  ├─ RedisPubSubHandler.php
│  │           │  ├─ RollbarHandler.php
│  │           │  ├─ RotatingFileHandler.php
│  │           │  ├─ SamplingHandler.php
│  │           │  ├─ SendGridHandler.php
│  │           │  ├─ Slack
│  │           │  │  └─ SlackRecord.php
│  │           │  ├─ SlackHandler.php
│  │           │  ├─ SlackWebhookHandler.php
│  │           │  ├─ SocketHandler.php
│  │           │  ├─ SqsHandler.php
│  │           │  ├─ StreamHandler.php
│  │           │  ├─ SymfonyMailerHandler.php
│  │           │  ├─ SyslogHandler.php
│  │           │  ├─ SyslogUdp
│  │           │  │  └─ UdpSocket.php
│  │           │  ├─ SyslogUdpHandler.php
│  │           │  ├─ TelegramBotHandler.php
│  │           │  ├─ TestHandler.php
│  │           │  ├─ WebRequestRecognizerTrait.php
│  │           │  ├─ WhatFailureGroupHandler.php
│  │           │  └─ ZendMonitorHandler.php
│  │           ├─ JsonSerializableDateTimeImmutable.php
│  │           ├─ Level.php
│  │           ├─ LogRecord.php
│  │           ├─ Logger.php
│  │           ├─ Processor
│  │           │  ├─ ClosureContextProcessor.php
│  │           │  ├─ GitProcessor.php
│  │           │  ├─ HostnameProcessor.php
│  │           │  ├─ IntrospectionProcessor.php
│  │           │  ├─ LoadAverageProcessor.php
│  │           │  ├─ MemoryPeakUsageProcessor.php
│  │           │  ├─ MemoryProcessor.php
│  │           │  ├─ MemoryUsageProcessor.php
│  │           │  ├─ MercurialProcessor.php
│  │           │  ├─ ProcessIdProcessor.php
│  │           │  ├─ ProcessorInterface.php
│  │           │  ├─ PsrLogMessageProcessor.php
│  │           │  ├─ TagProcessor.php
│  │           │  ├─ UidProcessor.php
│  │           │  └─ WebProcessor.php
│  │           ├─ Registry.php
│  │           ├─ ResettableInterface.php
│  │           ├─ SignalHandler.php
│  │           ├─ Test
│  │           │  ├─ MonologTestCase.php
│  │           │  └─ TestCase.php
│  │           └─ Utils.php
│  ├─ myclabs
│  │  └─ deep-copy
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ DeepCopy
│  │           ├─ DeepCopy.php
│  │           ├─ Exception
│  │           │  ├─ CloneException.php
│  │           │  └─ PropertyException.php
│  │           ├─ Filter
│  │           │  ├─ ChainableFilter.php
│  │           │  ├─ Doctrine
│  │           │  │  ├─ DoctrineCollectionFilter.php
│  │           │  │  ├─ DoctrineEmptyCollectionFilter.php
│  │           │  │  └─ DoctrineProxyFilter.php
│  │           │  ├─ Filter.php
│  │           │  ├─ KeepFilter.php
│  │           │  ├─ ReplaceFilter.php
│  │           │  └─ SetNullFilter.php
│  │           ├─ Matcher
│  │           │  ├─ Doctrine
│  │           │  │  └─ DoctrineProxyMatcher.php
│  │           │  ├─ Matcher.php
│  │           │  ├─ PropertyMatcher.php
│  │           │  ├─ PropertyNameMatcher.php
│  │           │  └─ PropertyTypeMatcher.php
│  │           ├─ Reflection
│  │           │  └─ ReflectionHelper.php
│  │           ├─ TypeFilter
│  │           │  ├─ Date
│  │           │  │  ├─ DateIntervalFilter.php
│  │           │  │  └─ DatePeriodFilter.php
│  │           │  ├─ ReplaceFilter.php
│  │           │  ├─ ShallowCopyFilter.php
│  │           │  ├─ Spl
│  │           │  │  ├─ ArrayObjectFilter.php
│  │           │  │  ├─ SplDoublyLinkedList.php
│  │           │  │  └─ SplDoublyLinkedListFilter.php
│  │           │  └─ TypeFilter.php
│  │           ├─ TypeMatcher
│  │           │  └─ TypeMatcher.php
│  │           └─ deep_copy.php
│  ├─ nesbot
│  │  └─ carbon
│  │     ├─ .phpstorm.meta.php
│  │     ├─ LICENSE
│  │     ├─ bin
│  │     │  ├─ carbon
│  │     │  └─ carbon.bat
│  │     ├─ composer.json
│  │     ├─ extension.neon
│  │     ├─ lazy
│  │     │  └─ Carbon
│  │     │     ├─ MessageFormatter
│  │     │     │  ├─ MessageFormatterMapperStrongType.php
│  │     │     │  └─ MessageFormatterMapperWeakType.php
│  │     │     ├─ ProtectedDatePeriod.php
│  │     │     ├─ TranslatorStrongType.php
│  │     │     ├─ TranslatorWeakType.php
│  │     │     └─ UnprotectedDatePeriod.php
│  │     ├─ readme.md
│  │     └─ src
│  │        └─ Carbon
│  │           ├─ AbstractTranslator.php
│  │           ├─ Callback.php
│  │           ├─ Carbon.php
│  │           ├─ CarbonConverterInterface.php
│  │           ├─ CarbonImmutable.php
│  │           ├─ CarbonInterface.php
│  │           ├─ CarbonInterval.php
│  │           ├─ CarbonPeriod.php
│  │           ├─ CarbonPeriodImmutable.php
│  │           ├─ CarbonTimeZone.php
│  │           ├─ Cli
│  │           │  └─ Invoker.php
│  │           ├─ Exceptions
│  │           │  ├─ BadComparisonUnitException.php
│  │           │  ├─ BadFluentConstructorException.php
│  │           │  ├─ BadFluentSetterException.php
│  │           │  ├─ BadMethodCallException.php
│  │           │  ├─ EndLessPeriodException.php
│  │           │  ├─ Exception.php
│  │           │  ├─ ImmutableException.php
│  │           │  ├─ InvalidArgumentException.php
│  │           │  ├─ InvalidCastException.php
│  │           │  ├─ InvalidDateException.php
│  │           │  ├─ InvalidFormatException.php
│  │           │  ├─ InvalidIntervalException.php
│  │           │  ├─ InvalidPeriodDateException.php
│  │           │  ├─ InvalidPeriodParameterException.php
│  │           │  ├─ InvalidTimeZoneException.php
│  │           │  ├─ InvalidTypeException.php
│  │           │  ├─ NotACarbonClassException.php
│  │           │  ├─ NotAPeriodException.php
│  │           │  ├─ NotLocaleAwareException.php
│  │           │  ├─ OutOfRangeException.php
│  │           │  ├─ ParseErrorException.php
│  │           │  ├─ RuntimeException.php
│  │           │  ├─ UnitException.php
│  │           │  ├─ UnitNotConfiguredException.php
│  │           │  ├─ UnknownGetterException.php
│  │           │  ├─ UnknownMethodException.php
│  │           │  ├─ UnknownSetterException.php
│  │           │  ├─ UnknownUnitException.php
│  │           │  ├─ UnreachableException.php
│  │           │  └─ UnsupportedUnitException.php
│  │           ├─ Factory.php
│  │           ├─ FactoryImmutable.php
│  │           ├─ Lang
│  │           │  ├─ aa.php
│  │           │  ├─ aa_DJ.php
│  │           │  ├─ aa_ER.php
│  │           │  ├─ aa_ER@saaho.php
│  │           │  ├─ aa_ET.php
│  │           │  ├─ af.php
│  │           │  ├─ af_NA.php
│  │           │  ├─ af_ZA.php
│  │           │  ├─ agq.php
│  │           │  ├─ agr.php
│  │           │  ├─ agr_PE.php
│  │           │  ├─ ak.php
│  │           │  ├─ ak_GH.php
│  │           │  ├─ am.php
│  │           │  ├─ am_ET.php
│  │           │  ├─ an.php
│  │           │  ├─ an_ES.php
│  │           │  ├─ anp.php
│  │           │  ├─ anp_IN.php
│  │           │  ├─ ar.php
│  │           │  ├─ ar_AE.php
│  │           │  ├─ ar_BH.php
│  │           │  ├─ ar_DJ.php
│  │           │  ├─ ar_DZ.php
│  │           │  ├─ ar_EG.php
│  │           │  ├─ ar_EH.php
│  │           │  ├─ ar_ER.php
│  │           │  ├─ ar_IL.php
│  │           │  ├─ ar_IN.php
│  │           │  ├─ ar_IQ.php
│  │           │  ├─ ar_JO.php
│  │           │  ├─ ar_KM.php
│  │           │  ├─ ar_KW.php
│  │           │  ├─ ar_LB.php
│  │           │  ├─ ar_LY.php
│  │           │  ├─ ar_MA.php
│  │           │  ├─ ar_MR.php
│  │           │  ├─ ar_OM.php
│  │           │  ├─ ar_PS.php
│  │           │  ├─ ar_QA.php
│  │           │  ├─ ar_SA.php
│  │           │  ├─ ar_SD.php
│  │           │  ├─ ar_SO.php
│  │           │  ├─ ar_SS.php
│  │           │  ├─ ar_SY.php
│  │           │  ├─ ar_Shakl.php
│  │           │  ├─ ar_TD.php
│  │           │  ├─ ar_TN.php
│  │           │  ├─ ar_YE.php
│  │           │  ├─ as.php
│  │           │  ├─ as_IN.php
│  │           │  ├─ asa.php
│  │           │  ├─ ast.php
│  │           │  ├─ ast_ES.php
│  │           │  ├─ ayc.php
│  │           │  ├─ ayc_PE.php
│  │           │  ├─ az.php
│  │           │  ├─ az_AZ.php
│  │           │  ├─ az_Cyrl.php
│  │           │  ├─ az_IR.php
│  │           │  ├─ az_Latn.php
│  │           │  ├─ bas.php
│  │           │  ├─ be.php
│  │           │  ├─ be_BY.php
│  │           │  ├─ be_BY@latin.php
│  │           │  ├─ bem.php
│  │           │  ├─ bem_ZM.php
│  │           │  ├─ ber.php
│  │           │  ├─ ber_DZ.php
│  │           │  ├─ ber_MA.php
│  │           │  ├─ bez.php
│  │           │  ├─ bg.php
│  │           │  ├─ bg_BG.php
│  │           │  ├─ bhb.php
│  │           │  ├─ bhb_IN.php
│  │           │  ├─ bho.php
│  │           │  ├─ bho_IN.php
│  │           │  ├─ bi.php
│  │           │  ├─ bi_VU.php
│  │           │  ├─ bm.php
│  │           │  ├─ bn.php
│  │           │  ├─ bn_BD.php
│  │           │  ├─ bn_IN.php
│  │           │  ├─ bo.php
│  │           │  ├─ bo_CN.php
│  │           │  ├─ bo_IN.php
│  │           │  ├─ br.php
│  │           │  ├─ br_FR.php
│  │           │  ├─ brx.php
│  │           │  ├─ brx_IN.php
│  │           │  ├─ bs.php
│  │           │  ├─ bs_BA.php
│  │           │  ├─ bs_Cyrl.php
│  │           │  ├─ bs_Latn.php
│  │           │  ├─ byn.php
│  │           │  ├─ byn_ER.php
│  │           │  ├─ ca.php
│  │           │  ├─ ca_AD.php
│  │           │  ├─ ca_ES.php
│  │           │  ├─ ca_ES_Valencia.php
│  │           │  ├─ ca_FR.php
│  │           │  ├─ ca_IT.php
│  │           │  ├─ ccp.php
│  │           │  ├─ ccp_IN.php
│  │           │  ├─ ce.php
│  │           │  ├─ ce_RU.php
│  │           │  ├─ cgg.php
│  │           │  ├─ chr.php
│  │           │  ├─ chr_US.php
│  │           │  ├─ ckb.php
│  │           │  ├─ cmn.php
│  │           │  ├─ cmn_TW.php
│  │           │  ├─ crh.php
│  │           │  ├─ crh_UA.php
│  │           │  ├─ cs.php
│  │           │  ├─ cs_CZ.php
│  │           │  ├─ csb.php
│  │           │  ├─ csb_PL.php
│  │           │  ├─ cu.php
│  │           │  ├─ cv.php
│  │           │  ├─ cv_RU.php
│  │           │  ├─ cy.php
│  │           │  ├─ cy_GB.php
│  │           │  ├─ da.php
│  │           │  ├─ da_DK.php
│  │           │  ├─ da_GL.php
│  │           │  ├─ dav.php
│  │           │  ├─ de.php
│  │           │  ├─ de_AT.php
│  │           │  ├─ de_BE.php
│  │           │  ├─ de_CH.php
│  │           │  ├─ de_DE.php
│  │           │  ├─ de_IT.php
│  │           │  ├─ de_LI.php
│  │           │  ├─ de_LU.php
│  │           │  ├─ dje.php
│  │           │  ├─ doi.php
│  │           │  ├─ doi_IN.php
│  │           │  ├─ dsb.php
│  │           │  ├─ dsb_DE.php
│  │           │  ├─ dua.php
│  │           │  ├─ dv.php
│  │           │  ├─ dv_MV.php
│  │           │  ├─ dyo.php
│  │           │  ├─ dz.php
│  │           │  ├─ dz_BT.php
│  │           │  ├─ ebu.php
│  │           │  ├─ ee.php
│  │           │  ├─ ee_TG.php
│  │           │  ├─ el.php
│  │           │  ├─ el_CY.php
│  │           │  ├─ el_GR.php
│  │           │  ├─ en.php
│  │           │  ├─ en_001.php
│  │           │  ├─ en_150.php
│  │           │  ├─ en_AG.php
│  │           │  ├─ en_AI.php
│  │           │  ├─ en_AS.php
│  │           │  ├─ en_AT.php
│  │           │  ├─ en_AU.php
│  │           │  ├─ en_BB.php
│  │           │  ├─ en_BE.php
│  │           │  ├─ en_BI.php
│  │           │  ├─ en_BM.php
│  │           │  ├─ en_BS.php
│  │           │  ├─ en_BW.php
│  │           │  ├─ en_BZ.php
│  │           │  ├─ en_CA.php
│  │           │  ├─ en_CC.php
│  │           │  ├─ en_CH.php
│  │           │  ├─ en_CK.php
│  │           │  ├─ en_CM.php
│  │           │  ├─ en_CX.php
│  │           │  ├─ en_CY.php
│  │           │  ├─ en_DE.php
│  │           │  ├─ en_DG.php
│  │           │  ├─ en_DK.php
│  │           │  ├─ en_DM.php
│  │           │  ├─ en_ER.php
│  │           │  ├─ en_FI.php
│  │           │  ├─ en_FJ.php
│  │           │  ├─ en_FK.php
│  │           │  ├─ en_FM.php
│  │           │  ├─ en_GB.php
│  │           │  ├─ en_GD.php
│  │           │  ├─ en_GG.php
│  │           │  ├─ en_GH.php
│  │           │  ├─ en_GI.php
│  │           │  ├─ en_GM.php
│  │           │  ├─ en_GU.php
│  │           │  ├─ en_GY.php
│  │           │  ├─ en_HK.php
│  │           │  ├─ en_IE.php
│  │           │  ├─ en_IL.php
│  │           │  ├─ en_IM.php
│  │           │  ├─ en_IN.php
│  │           │  ├─ en_IO.php
│  │           │  ├─ en_ISO.php
│  │           │  ├─ en_JE.php
│  │           │  ├─ en_JM.php
│  │           │  ├─ en_KE.php
│  │           │  ├─ en_KI.php
│  │           │  ├─ en_KN.php
│  │           │  ├─ en_KY.php
│  │           │  ├─ en_LC.php
│  │           │  ├─ en_LR.php
│  │           │  ├─ en_LS.php
│  │           │  ├─ en_MG.php
│  │           │  ├─ en_MH.php
│  │           │  ├─ en_MO.php
│  │           │  ├─ en_MP.php
│  │           │  ├─ en_MS.php
│  │           │  ├─ en_MT.php
│  │           │  ├─ en_MU.php
│  │           │  ├─ en_MW.php
│  │           │  ├─ en_MY.php
│  │           │  ├─ en_NA.php
│  │           │  ├─ en_NF.php
│  │           │  ├─ en_NG.php
│  │           │  ├─ en_NL.php
│  │           │  ├─ en_NR.php
│  │           │  ├─ en_NU.php
│  │           │  ├─ en_NZ.php
│  │           │  ├─ en_PG.php
│  │           │  ├─ en_PH.php
│  │           │  ├─ en_PK.php
│  │           │  ├─ en_PN.php
│  │           │  ├─ en_PR.php
│  │           │  ├─ en_PW.php
│  │           │  ├─ en_RW.php
│  │           │  ├─ en_SB.php
│  │           │  ├─ en_SC.php
│  │           │  ├─ en_SD.php
│  │           │  ├─ en_SE.php
│  │           │  ├─ en_SG.php
│  │           │  ├─ en_SH.php
│  │           │  ├─ en_SI.php
│  │           │  ├─ en_SL.php
│  │           │  ├─ en_SS.php
│  │           │  ├─ en_SX.php
│  │           │  ├─ en_SZ.php
│  │           │  ├─ en_TC.php
│  │           │  ├─ en_TK.php
│  │           │  ├─ en_TO.php
│  │           │  ├─ en_TT.php
│  │           │  ├─ en_TV.php
│  │           │  ├─ en_TZ.php
│  │           │  ├─ en_UG.php
│  │           │  ├─ en_UM.php
│  │           │  ├─ en_US.php
│  │           │  ├─ en_US_Posix.php
│  │           │  ├─ en_VC.php
│  │           │  ├─ en_VG.php
│  │           │  ├─ en_VI.php
│  │           │  ├─ en_VU.php
│  │           │  ├─ en_WS.php
│  │           │  ├─ en_ZA.php
│  │           │  ├─ en_ZM.php
│  │           │  ├─ en_ZW.php
│  │           │  ├─ eo.php
│  │           │  ├─ es.php
│  │           │  ├─ es_419.php
│  │           │  ├─ es_AR.php
│  │           │  ├─ es_BO.php
│  │           │  ├─ es_BR.php
│  │           │  ├─ es_BZ.php
│  │           │  ├─ es_CL.php
│  │           │  ├─ es_CO.php
│  │           │  ├─ es_CR.php
│  │           │  ├─ es_CU.php
│  │           │  ├─ es_DO.php
│  │           │  ├─ es_EA.php
│  │           │  ├─ es_EC.php
│  │           │  ├─ es_ES.php
│  │           │  ├─ es_GQ.php
│  │           │  ├─ es_GT.php
│  │           │  ├─ es_HN.php
│  │           │  ├─ es_IC.php
│  │           │  ├─ es_MX.php
│  │           │  ├─ es_NI.php
│  │           │  ├─ es_PA.php
│  │           │  ├─ es_PE.php
│  │           │  ├─ es_PH.php
│  │           │  ├─ es_PR.php
│  │           │  ├─ es_PY.php
│  │           │  ├─ es_SV.php
│  │           │  ├─ es_US.php
│  │           │  ├─ es_UY.php
│  │           │  ├─ es_VE.php
│  │           │  ├─ et.php
│  │           │  ├─ et_EE.php
│  │           │  ├─ eu.php
│  │           │  ├─ eu_ES.php
│  │           │  ├─ ewo.php
│  │           │  ├─ fa.php
│  │           │  ├─ fa_AF.php
│  │           │  ├─ fa_IR.php
│  │           │  ├─ ff.php
│  │           │  ├─ ff_CM.php
│  │           │  ├─ ff_GN.php
│  │           │  ├─ ff_MR.php
│  │           │  ├─ ff_SN.php
│  │           │  ├─ fi.php
│  │           │  ├─ fi_FI.php
│  │           │  ├─ fil.php
│  │           │  ├─ fil_PH.php
│  │           │  ├─ fo.php
│  │           │  ├─ fo_DK.php
│  │           │  ├─ fo_FO.php
│  │           │  ├─ fr.php
│  │           │  ├─ fr_BE.php
│  │           │  ├─ fr_BF.php
│  │           │  ├─ fr_BI.php
│  │           │  ├─ fr_BJ.php
│  │           │  ├─ fr_BL.php
│  │           │  ├─ fr_CA.php
│  │           │  ├─ fr_CD.php
│  │           │  ├─ fr_CF.php
│  │           │  ├─ fr_CG.php
│  │           │  ├─ fr_CH.php
│  │           │  ├─ fr_CI.php
│  │           │  ├─ fr_CM.php
│  │           │  ├─ fr_DJ.php
│  │           │  ├─ fr_DZ.php
│  │           │  ├─ fr_FR.php
│  │           │  ├─ fr_GA.php
│  │           │  ├─ fr_GF.php
│  │           │  ├─ fr_GN.php
│  │           │  ├─ fr_GP.php
│  │           │  ├─ fr_GQ.php
│  │           │  ├─ fr_HT.php
│  │           │  ├─ fr_KM.php
│  │           │  ├─ fr_LU.php
│  │           │  ├─ fr_MA.php
│  │           │  ├─ fr_MC.php
│  │           │  ├─ fr_MF.php
│  │           │  ├─ fr_MG.php
│  │           │  ├─ fr_ML.php
│  │           │  ├─ fr_MQ.php
│  │           │  ├─ fr_MR.php
│  │           │  ├─ fr_MU.php
│  │           │  ├─ fr_NC.php
│  │           │  ├─ fr_NE.php
│  │           │  ├─ fr_PF.php
│  │           │  ├─ fr_PM.php
│  │           │  ├─ fr_RE.php
│  │           │  ├─ fr_RW.php
│  │           │  ├─ fr_SC.php
│  │           │  ├─ fr_SN.php
│  │           │  ├─ fr_SY.php
│  │           │  ├─ fr_TD.php
│  │           │  ├─ fr_TG.php
│  │           │  ├─ fr_TN.php
│  │           │  ├─ fr_VU.php
│  │           │  ├─ fr_WF.php
│  │           │  ├─ fr_YT.php
│  │           │  ├─ fur.php
│  │           │  ├─ fur_IT.php
│  │           │  ├─ fy.php
│  │           │  ├─ fy_DE.php
│  │           │  ├─ fy_NL.php
│  │           │  ├─ ga.php
│  │           │  ├─ ga_IE.php
│  │           │  ├─ gd.php
│  │           │  ├─ gd_GB.php
│  │           │  ├─ gez.php
│  │           │  ├─ gez_ER.php
│  │           │  ├─ gez_ET.php
│  │           │  ├─ gl.php
│  │           │  ├─ gl_ES.php
│  │           │  ├─ gom.php
│  │           │  ├─ gom_Latn.php
│  │           │  ├─ gsw.php
│  │           │  ├─ gsw_CH.php
│  │           │  ├─ gsw_FR.php
│  │           │  ├─ gsw_LI.php
│  │           │  ├─ gu.php
│  │           │  ├─ gu_IN.php
│  │           │  ├─ guz.php
│  │           │  ├─ gv.php
│  │           │  ├─ gv_GB.php
│  │           │  ├─ ha.php
│  │           │  ├─ ha_GH.php
│  │           │  ├─ ha_NE.php
│  │           │  ├─ ha_NG.php
│  │           │  ├─ hak.php
│  │           │  ├─ hak_TW.php
│  │           │  ├─ haw.php
│  │           │  ├─ he.php
│  │           │  ├─ he_IL.php
│  │           │  ├─ hi.php
│  │           │  ├─ hi_IN.php
│  │           │  ├─ hif.php
│  │           │  ├─ hif_FJ.php
│  │           │  ├─ hne.php
│  │           │  ├─ hne_IN.php
│  │           │  ├─ hr.php
│  │           │  ├─ hr_BA.php
│  │           │  ├─ hr_HR.php
│  │           │  ├─ hsb.php
│  │           │  ├─ hsb_DE.php
│  │           │  ├─ ht.php
│  │           │  ├─ ht_HT.php
│  │           │  ├─ hu.php
│  │           │  ├─ hu_HU.php
│  │           │  ├─ hy.php
│  │           │  ├─ hy_AM.php
│  │           │  ├─ i18n.php
│  │           │  ├─ ia.php
│  │           │  ├─ ia_FR.php
│  │           │  ├─ id.php
│  │           │  ├─ id_ID.php
│  │           │  ├─ ig.php
│  │           │  ├─ ig_NG.php
│  │           │  ├─ ii.php
│  │           │  ├─ ik.php
│  │           │  ├─ ik_CA.php
│  │           │  ├─ in.php
│  │           │  ├─ is.php
│  │           │  ├─ is_IS.php
│  │           │  ├─ it.php
│  │           │  ├─ it_CH.php
│  │           │  ├─ it_IT.php
│  │           │  ├─ it_SM.php
│  │           │  ├─ it_VA.php
│  │           │  ├─ iu.php
│  │           │  ├─ iu_CA.php
│  │           │  ├─ iw.php
│  │           │  ├─ ja.php
│  │           │  ├─ ja_JP.php
│  │           │  ├─ jgo.php
│  │           │  ├─ jmc.php
│  │           │  ├─ jv.php
│  │           │  ├─ ka.php
│  │           │  ├─ ka_GE.php
│  │           │  ├─ kab.php
│  │           │  ├─ kab_DZ.php
│  │           │  ├─ kam.php
│  │           │  ├─ kde.php
│  │           │  ├─ kea.php
│  │           │  ├─ khq.php
│  │           │  ├─ ki.php
│  │           │  ├─ kk.php
│  │           │  ├─ kk_KZ.php
│  │           │  ├─ kkj.php
│  │           │  ├─ kl.php
│  │           │  ├─ kl_GL.php
│  │           │  ├─ kln.php
│  │           │  ├─ km.php
│  │           │  ├─ km_KH.php
│  │           │  ├─ kn.php
│  │           │  ├─ kn_IN.php
│  │           │  ├─ ko.php
│  │           │  ├─ ko_KP.php
│  │           │  ├─ ko_KR.php
│  │           │  ├─ kok.php
│  │           │  ├─ kok_IN.php
│  │           │  ├─ ks.php
│  │           │  ├─ ks_IN.php
│  │           │  ├─ ks_IN@devanagari.php
│  │           │  ├─ ksb.php
│  │           │  ├─ ksf.php
│  │           │  ├─ ksh.php
│  │           │  ├─ ku.php
│  │           │  ├─ ku_TR.php
│  │           │  ├─ kw.php
│  │           │  ├─ kw_GB.php
│  │           │  ├─ ky.php
│  │           │  ├─ ky_KG.php
│  │           │  ├─ lag.php
│  │           │  ├─ lb.php
│  │           │  ├─ lb_LU.php
│  │           │  ├─ lg.php
│  │           │  ├─ lg_UG.php
│  │           │  ├─ li.php
│  │           │  ├─ li_NL.php
│  │           │  ├─ lij.php
│  │           │  ├─ lij_IT.php
│  │           │  ├─ lkt.php
│  │           │  ├─ ln.php
│  │           │  ├─ ln_AO.php
│  │           │  ├─ ln_CD.php
│  │           │  ├─ ln_CF.php
│  │           │  ├─ ln_CG.php
│  │           │  ├─ lo.php
│  │           │  ├─ lo_LA.php
│  │           │  ├─ lrc.php
│  │           │  ├─ lrc_IQ.php
│  │           │  ├─ lt.php
│  │           │  ├─ lt_LT.php
│  │           │  ├─ lu.php
│  │           │  ├─ luo.php
│  │           │  ├─ luy.php
│  │           │  ├─ lv.php
│  │           │  ├─ lv_LV.php
│  │           │  ├─ lzh.php
│  │           │  ├─ lzh_TW.php
│  │           │  ├─ mag.php
│  │           │  ├─ mag_IN.php
│  │           │  ├─ mai.php
│  │           │  ├─ mai_IN.php
│  │           │  ├─ mas.php
│  │           │  ├─ mas_TZ.php
│  │           │  ├─ mer.php
│  │           │  ├─ mfe.php
│  │           │  ├─ mfe_MU.php
│  │           │  ├─ mg.php
│  │           │  ├─ mg_MG.php
│  │           │  ├─ mgh.php
│  │           │  ├─ mgo.php
│  │           │  ├─ mhr.php
│  │           │  ├─ mhr_RU.php
│  │           │  ├─ mi.php
│  │           │  ├─ mi_NZ.php
│  │           │  ├─ miq.php
│  │           │  ├─ miq_NI.php
│  │           │  ├─ mjw.php
│  │           │  ├─ mjw_IN.php
│  │           │  ├─ mk.php
│  │           │  ├─ mk_MK.php
│  │           │  ├─ ml.php
│  │           │  ├─ ml_IN.php
│  │           │  ├─ mn.php
│  │           │  ├─ mn_MN.php
│  │           │  ├─ mni.php
│  │           │  ├─ mni_IN.php
│  │           │  ├─ mo.php
│  │           │  ├─ mr.php
│  │           │  ├─ mr_IN.php
│  │           │  ├─ ms.php
│  │           │  ├─ ms_BN.php
│  │           │  ├─ ms_MY.php
│  │           │  ├─ ms_SG.php
│  │           │  ├─ mt.php
│  │           │  ├─ mt_MT.php
│  │           │  ├─ mua.php
│  │           │  ├─ my.php
│  │           │  ├─ my_MM.php
│  │           │  ├─ mzn.php
│  │           │  ├─ nan.php
│  │           │  ├─ nan_TW.php
│  │           │  ├─ nan_TW@latin.php
│  │           │  ├─ naq.php
│  │           │  ├─ nb.php
│  │           │  ├─ nb_NO.php
│  │           │  ├─ nb_SJ.php
│  │           │  ├─ nd.php
│  │           │  ├─ nds.php
│  │           │  ├─ nds_DE.php
│  │           │  ├─ nds_NL.php
│  │           │  ├─ ne.php
│  │           │  ├─ ne_IN.php
│  │           │  ├─ ne_NP.php
│  │           │  ├─ nhn.php
│  │           │  ├─ nhn_MX.php
│  │           │  ├─ niu.php
│  │           │  ├─ niu_NU.php
│  │           │  ├─ nl.php
│  │           │  ├─ nl_AW.php
│  │           │  ├─ nl_BE.php
│  │           │  ├─ nl_BQ.php
│  │           │  ├─ nl_CW.php
│  │           │  ├─ nl_NL.php
│  │           │  ├─ nl_SR.php
│  │           │  ├─ nl_SX.php
│  │           │  ├─ nmg.php
│  │           │  ├─ nn.php
│  │           │  ├─ nn_NO.php
│  │           │  ├─ nnh.php
│  │           │  ├─ no.php
│  │           │  ├─ nr.php
│  │           │  ├─ nr_ZA.php
│  │           │  ├─ nso.php
│  │           │  ├─ nso_ZA.php
│  │           │  ├─ nus.php
│  │           │  ├─ nyn.php
│  │           │  ├─ oc.php
│  │           │  ├─ oc_FR.php
│  │           │  ├─ om.php
│  │           │  ├─ om_ET.php
│  │           │  ├─ om_KE.php
│  │           │  ├─ or.php
│  │           │  ├─ or_IN.php
│  │           │  ├─ os.php
│  │           │  ├─ os_RU.php
│  │           │  ├─ pa.php
│  │           │  ├─ pa_Arab.php
│  │           │  ├─ pa_Guru.php
│  │           │  ├─ pa_IN.php
│  │           │  ├─ pa_PK.php
│  │           │  ├─ pap.php
│  │           │  ├─ pap_AW.php
│  │           │  ├─ pap_CW.php
│  │           │  ├─ pl.php
│  │           │  ├─ pl_PL.php
│  │           │  ├─ prg.php
│  │           │  ├─ ps.php
│  │           │  ├─ ps_AF.php
│  │           │  ├─ pt.php
│  │           │  ├─ pt_AO.php
│  │           │  ├─ pt_BR.php
│  │           │  ├─ pt_CH.php
│  │           │  ├─ pt_CV.php
│  │           │  ├─ pt_GQ.php
│  │           │  ├─ pt_GW.php
│  │           │  ├─ pt_LU.php
│  │           │  ├─ pt_MO.php
│  │           │  ├─ pt_MZ.php
│  │           │  ├─ pt_PT.php
│  │           │  ├─ pt_ST.php
│  │           │  ├─ pt_TL.php
│  │           │  ├─ qu.php
│  │           │  ├─ qu_BO.php
│  │           │  ├─ qu_EC.php
│  │           │  ├─ quz.php
│  │           │  ├─ quz_PE.php
│  │           │  ├─ raj.php
│  │           │  ├─ raj_IN.php
│  │           │  ├─ rm.php
│  │           │  ├─ rn.php
│  │           │  ├─ ro.php
│  │           │  ├─ ro_MD.php
│  │           │  ├─ ro_RO.php
│  │           │  ├─ rof.php
│  │           │  ├─ ru.php
│  │           │  ├─ ru_BY.php
│  │           │  ├─ ru_KG.php
│  │           │  ├─ ru_KZ.php
│  │           │  ├─ ru_MD.php
│  │           │  ├─ ru_RU.php
│  │           │  ├─ ru_UA.php
│  │           │  ├─ rw.php
│  │           │  ├─ rw_RW.php
│  │           │  ├─ rwk.php
│  │           │  ├─ sa.php
│  │           │  ├─ sa_IN.php
│  │           │  ├─ sah.php
│  │           │  ├─ sah_RU.php
│  │           │  ├─ saq.php
│  │           │  ├─ sat.php
│  │           │  ├─ sat_IN.php
│  │           │  ├─ sbp.php
│  │           │  ├─ sc.php
│  │           │  ├─ sc_IT.php
│  │           │  ├─ sd.php
│  │           │  ├─ sd_IN.php
│  │           │  ├─ sd_IN@devanagari.php
│  │           │  ├─ se.php
│  │           │  ├─ se_FI.php
│  │           │  ├─ se_NO.php
│  │           │  ├─ se_SE.php
│  │           │  ├─ seh.php
│  │           │  ├─ ses.php
│  │           │  ├─ sg.php
│  │           │  ├─ sgs.php
│  │           │  ├─ sgs_LT.php
│  │           │  ├─ sh.php
│  │           │  ├─ shi.php
│  │           │  ├─ shi_Latn.php
│  │           │  ├─ shi_Tfng.php
│  │           │  ├─ shn.php
│  │           │  ├─ shn_MM.php
│  │           │  ├─ shs.php
│  │           │  ├─ shs_CA.php
│  │           │  ├─ si.php
│  │           │  ├─ si_LK.php
│  │           │  ├─ sid.php
│  │           │  ├─ sid_ET.php
│  │           │  ├─ sk.php
│  │           │  ├─ sk_SK.php
│  │           │  ├─ sl.php
│  │           │  ├─ sl_SI.php
│  │           │  ├─ sm.php
│  │           │  ├─ sm_WS.php
│  │           │  ├─ smn.php
│  │           │  ├─ sn.php
│  │           │  ├─ so.php
│  │           │  ├─ so_DJ.php
│  │           │  ├─ so_ET.php
│  │           │  ├─ so_KE.php
│  │           │  ├─ so_SO.php
│  │           │  ├─ sq.php
│  │           │  ├─ sq_AL.php
│  │           │  ├─ sq_MK.php
│  │           │  ├─ sq_XK.php
│  │           │  ├─ sr.php
│  │           │  ├─ sr_Cyrl.php
│  │           │  ├─ sr_Cyrl_BA.php
│  │           │  ├─ sr_Cyrl_ME.php
│  │           │  ├─ sr_Cyrl_XK.php
│  │           │  ├─ sr_Latn.php
│  │           │  ├─ sr_Latn_BA.php
│  │           │  ├─ sr_Latn_ME.php
│  │           │  ├─ sr_Latn_XK.php
│  │           │  ├─ sr_ME.php
│  │           │  ├─ sr_RS.php
│  │           │  ├─ sr_RS@latin.php
│  │           │  ├─ ss.php
│  │           │  ├─ ss_ZA.php
│  │           │  ├─ st.php
│  │           │  ├─ st_ZA.php
│  │           │  ├─ sv.php
│  │           │  ├─ sv_AX.php
│  │           │  ├─ sv_FI.php
│  │           │  ├─ sv_SE.php
│  │           │  ├─ sw.php
│  │           │  ├─ sw_CD.php
│  │           │  ├─ sw_KE.php
│  │           │  ├─ sw_TZ.php
│  │           │  ├─ sw_UG.php
│  │           │  ├─ szl.php
│  │           │  ├─ szl_PL.php
│  │           │  ├─ ta.php
│  │           │  ├─ ta_IN.php
│  │           │  ├─ ta_LK.php
│  │           │  ├─ ta_MY.php
│  │           │  ├─ ta_SG.php
│  │           │  ├─ tcy.php
│  │           │  ├─ tcy_IN.php
│  │           │  ├─ te.php
│  │           │  ├─ te_IN.php
│  │           │  ├─ teo.php
│  │           │  ├─ teo_KE.php
│  │           │  ├─ tet.php
│  │           │  ├─ tg.php
│  │           │  ├─ tg_TJ.php
│  │           │  ├─ th.php
│  │           │  ├─ th_TH.php
│  │           │  ├─ the.php
│  │           │  ├─ the_NP.php
│  │           │  ├─ ti.php
│  │           │  ├─ ti_ER.php
│  │           │  ├─ ti_ET.php
│  │           │  ├─ tig.php
│  │           │  ├─ tig_ER.php
│  │           │  ├─ tk.php
│  │           │  ├─ tk_TM.php
│  │           │  ├─ tl.php
│  │           │  ├─ tl_PH.php
│  │           │  ├─ tlh.php
│  │           │  ├─ tn.php
│  │           │  ├─ tn_ZA.php
│  │           │  ├─ to.php
│  │           │  ├─ to_TO.php
│  │           │  ├─ tpi.php
│  │           │  ├─ tpi_PG.php
│  │           │  ├─ tr.php
│  │           │  ├─ tr_CY.php
│  │           │  ├─ tr_TR.php
│  │           │  ├─ ts.php
│  │           │  ├─ ts_ZA.php
│  │           │  ├─ tt.php
│  │           │  ├─ tt_RU.php
│  │           │  ├─ tt_RU@iqtelif.php
│  │           │  ├─ twq.php
│  │           │  ├─ tzl.php
│  │           │  ├─ tzm.php
│  │           │  ├─ tzm_Latn.php
│  │           │  ├─ ug.php
│  │           │  ├─ ug_CN.php
│  │           │  ├─ uk.php
│  │           │  ├─ uk_UA.php
│  │           │  ├─ unm.php
│  │           │  ├─ unm_US.php
│  │           │  ├─ ur.php
│  │           │  ├─ ur_IN.php
│  │           │  ├─ ur_PK.php
│  │           │  ├─ uz.php
│  │           │  ├─ uz_Arab.php
│  │           │  ├─ uz_Cyrl.php
│  │           │  ├─ uz_Latn.php
│  │           │  ├─ uz_UZ.php
│  │           │  ├─ uz_UZ@cyrillic.php
│  │           │  ├─ vai.php
│  │           │  ├─ vai_Latn.php
│  │           │  ├─ vai_Vaii.php
│  │           │  ├─ ve.php
│  │           │  ├─ ve_ZA.php
│  │           │  ├─ vi.php
│  │           │  ├─ vi_VN.php
│  │           │  ├─ vo.php
│  │           │  ├─ vun.php
│  │           │  ├─ wa.php
│  │           │  ├─ wa_BE.php
│  │           │  ├─ wae.php
│  │           │  ├─ wae_CH.php
│  │           │  ├─ wal.php
│  │           │  ├─ wal_ET.php
│  │           │  ├─ wo.php
│  │           │  ├─ wo_SN.php
│  │           │  ├─ xh.php
│  │           │  ├─ xh_ZA.php
│  │           │  ├─ xog.php
│  │           │  ├─ yav.php
│  │           │  ├─ yi.php
│  │           │  ├─ yi_US.php
│  │           │  ├─ yo.php
│  │           │  ├─ yo_BJ.php
│  │           │  ├─ yo_NG.php
│  │           │  ├─ yue.php
│  │           │  ├─ yue_HK.php
│  │           │  ├─ yue_Hans.php
│  │           │  ├─ yue_Hant.php
│  │           │  ├─ yuw.php
│  │           │  ├─ yuw_PG.php
│  │           │  ├─ zgh.php
│  │           │  ├─ zh.php
│  │           │  ├─ zh_CN.php
│  │           │  ├─ zh_HK.php
│  │           │  ├─ zh_Hans.php
│  │           │  ├─ zh_Hans_HK.php
│  │           │  ├─ zh_Hans_MO.php
│  │           │  ├─ zh_Hans_SG.php
│  │           │  ├─ zh_Hant.php
│  │           │  ├─ zh_Hant_HK.php
│  │           │  ├─ zh_Hant_MO.php
│  │           │  ├─ zh_Hant_TW.php
│  │           │  ├─ zh_MO.php
│  │           │  ├─ zh_SG.php
│  │           │  ├─ zh_TW.php
│  │           │  ├─ zh_YUE.php
│  │           │  ├─ zu.php
│  │           │  └─ zu_ZA.php
│  │           ├─ Language.php
│  │           ├─ Laravel
│  │           │  └─ ServiceProvider.php
│  │           ├─ List
│  │           │  ├─ languages.php
│  │           │  └─ regions.php
│  │           ├─ MessageFormatter
│  │           │  └─ MessageFormatterMapper.php
│  │           ├─ Month.php
│  │           ├─ PHPStan
│  │           │  ├─ MacroExtension.php
│  │           │  └─ MacroMethodReflection.php
│  │           ├─ Traits
│  │           │  ├─ Boundaries.php
│  │           │  ├─ Cast.php
│  │           │  ├─ Comparison.php
│  │           │  ├─ Converter.php
│  │           │  ├─ Creator.php
│  │           │  ├─ Date.php
│  │           │  ├─ DeprecatedPeriodProperties.php
│  │           │  ├─ Difference.php
│  │           │  ├─ IntervalRounding.php
│  │           │  ├─ IntervalStep.php
│  │           │  ├─ LocalFactory.php
│  │           │  ├─ Localization.php
│  │           │  ├─ Macro.php
│  │           │  ├─ MagicParameter.php
│  │           │  ├─ Mixin.php
│  │           │  ├─ Modifiers.php
│  │           │  ├─ Mutability.php
│  │           │  ├─ ObjectInitialisation.php
│  │           │  ├─ Options.php
│  │           │  ├─ Rounding.php
│  │           │  ├─ Serialization.php
│  │           │  ├─ StaticLocalization.php
│  │           │  ├─ StaticOptions.php
│  │           │  ├─ Test.php
│  │           │  ├─ Timestamp.php
│  │           │  ├─ ToStringFormat.php
│  │           │  ├─ Units.php
│  │           │  └─ Week.php
│  │           ├─ Translator.php
│  │           ├─ TranslatorImmutable.php
│  │           ├─ TranslatorStrongTypeInterface.php
│  │           ├─ Unit.php
│  │           ├─ WeekDay.php
│  │           └─ WrapperClock.php
│  ├─ nette
│  │  ├─ schema
│  │  │  ├─ composer.json
│  │  │  ├─ license.md
│  │  │  ├─ readme.md
│  │  │  └─ src
│  │  │     └─ Schema
│  │  │        ├─ Context.php
│  │  │        ├─ DynamicParameter.php
│  │  │        ├─ Elements
│  │  │        │  ├─ AnyOf.php
│  │  │        │  ├─ Base.php
│  │  │        │  ├─ Structure.php
│  │  │        │  └─ Type.php
│  │  │        ├─ Expect.php
│  │  │        ├─ Helpers.php
│  │  │        ├─ Message.php
│  │  │        ├─ Processor.php
│  │  │        ├─ Schema.php
│  │  │        └─ ValidationException.php
│  │  └─ utils
│  │     ├─ .phpstorm.meta.php
│  │     ├─ composer.json
│  │     ├─ license.md
│  │     ├─ readme.md
│  │     └─ src
│  │        ├─ HtmlStringable.php
│  │        ├─ Iterators
│  │        │  ├─ CachingIterator.php
│  │        │  └─ Mapper.php
│  │        ├─ SmartObject.php
│  │        ├─ StaticClass.php
│  │        ├─ Translator.php
│  │        ├─ Utils
│  │        │  ├─ ArrayHash.php
│  │        │  ├─ ArrayList.php
│  │        │  ├─ Arrays.php
│  │        │  ├─ Callback.php
│  │        │  ├─ DateTime.php
│  │        │  ├─ FileInfo.php
│  │        │  ├─ FileSystem.php
│  │        │  ├─ Finder.php
│  │        │  ├─ Floats.php
│  │        │  ├─ Helpers.php
│  │        │  ├─ Html.php
│  │        │  ├─ Image.php
│  │        │  ├─ ImageColor.php
│  │        │  ├─ ImageType.php
│  │        │  ├─ Iterables.php
│  │        │  ├─ Json.php
│  │        │  ├─ ObjectHelpers.php
│  │        │  ├─ Paginator.php
│  │        │  ├─ Random.php
│  │        │  ├─ Reflection.php
│  │        │  ├─ ReflectionMethod.php
│  │        │  ├─ Strings.php
│  │        │  ├─ Type.php
│  │        │  ├─ Validators.php
│  │        │  └─ exceptions.php
│  │        ├─ compatibility.php
│  │        └─ exceptions.php
│  ├─ nikic
│  │  └─ php-parser
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ bin
│  │     │  └─ php-parse
│  │     ├─ composer.json
│  │     └─ lib
│  │        └─ PhpParser
│  │           ├─ Builder
│  │           │  ├─ ClassConst.php
│  │           │  ├─ Class_.php
│  │           │  ├─ Declaration.php
│  │           │  ├─ EnumCase.php
│  │           │  ├─ Enum_.php
│  │           │  ├─ FunctionLike.php
│  │           │  ├─ Function_.php
│  │           │  ├─ Interface_.php
│  │           │  ├─ Method.php
│  │           │  ├─ Namespace_.php
│  │           │  ├─ Param.php
│  │           │  ├─ Property.php
│  │           │  ├─ TraitUse.php
│  │           │  ├─ TraitUseAdaptation.php
│  │           │  ├─ Trait_.php
│  │           │  └─ Use_.php
│  │           ├─ Builder.php
│  │           ├─ BuilderFactory.php
│  │           ├─ BuilderHelpers.php
│  │           ├─ Comment
│  │           │  └─ Doc.php
│  │           ├─ Comment.php
│  │           ├─ ConstExprEvaluationException.php
│  │           ├─ ConstExprEvaluator.php
│  │           ├─ Error.php
│  │           ├─ ErrorHandler
│  │           │  ├─ Collecting.php
│  │           │  └─ Throwing.php
│  │           ├─ ErrorHandler.php
│  │           ├─ Internal
│  │           │  ├─ DiffElem.php
│  │           │  ├─ Differ.php
│  │           │  ├─ PrintableNewAnonClassNode.php
│  │           │  ├─ TokenPolyfill.php
│  │           │  └─ TokenStream.php
│  │           ├─ JsonDecoder.php
│  │           ├─ Lexer
│  │           │  ├─ Emulative.php
│  │           │  └─ TokenEmulator
│  │           │     ├─ AsymmetricVisibilityTokenEmulator.php
│  │           │     ├─ AttributeEmulator.php
│  │           │     ├─ EnumTokenEmulator.php
│  │           │     ├─ ExplicitOctalEmulator.php
│  │           │     ├─ KeywordEmulator.php
│  │           │     ├─ MatchTokenEmulator.php
│  │           │     ├─ NullsafeTokenEmulator.php
│  │           │     ├─ PipeOperatorEmulator.php
│  │           │     ├─ PropertyTokenEmulator.php
│  │           │     ├─ ReadonlyFunctionTokenEmulator.php
│  │           │     ├─ ReadonlyTokenEmulator.php
│  │           │     ├─ ReverseEmulator.php
│  │           │     ├─ TokenEmulator.php
│  │           │     └─ VoidCastEmulator.php
│  │           ├─ Lexer.php
│  │           ├─ Modifiers.php
│  │           ├─ NameContext.php
│  │           ├─ Node
│  │           │  ├─ Arg.php
│  │           │  ├─ ArrayItem.php
│  │           │  ├─ Attribute.php
│  │           │  ├─ AttributeGroup.php
│  │           │  ├─ ClosureUse.php
│  │           │  ├─ ComplexType.php
│  │           │  ├─ Const_.php
│  │           │  ├─ DeclareItem.php
│  │           │  ├─ Expr
│  │           │  │  ├─ ArrayDimFetch.php
│  │           │  │  ├─ ArrayItem.php
│  │           │  │  ├─ Array_.php
│  │           │  │  ├─ ArrowFunction.php
│  │           │  │  ├─ Assign.php
│  │           │  │  ├─ AssignOp
│  │           │  │  │  ├─ BitwiseAnd.php
│  │           │  │  │  ├─ BitwiseOr.php
│  │           │  │  │  ├─ BitwiseXor.php
│  │           │  │  │  ├─ Coalesce.php
│  │           │  │  │  ├─ Concat.php
│  │           │  │  │  ├─ Div.php
│  │           │  │  │  ├─ Minus.php
│  │           │  │  │  ├─ Mod.php
│  │           │  │  │  ├─ Mul.php
│  │           │  │  │  ├─ Plus.php
│  │           │  │  │  ├─ Pow.php
│  │           │  │  │  ├─ ShiftLeft.php
│  │           │  │  │  └─ ShiftRight.php
│  │           │  │  ├─ AssignOp.php
│  │           │  │  ├─ AssignRef.php
│  │           │  │  ├─ BinaryOp
│  │           │  │  │  ├─ BitwiseAnd.php
│  │           │  │  │  ├─ BitwiseOr.php
│  │           │  │  │  ├─ BitwiseXor.php
│  │           │  │  │  ├─ BooleanAnd.php
│  │           │  │  │  ├─ BooleanOr.php
│  │           │  │  │  ├─ Coalesce.php
│  │           │  │  │  ├─ Concat.php
│  │           │  │  │  ├─ Div.php
│  │           │  │  │  ├─ Equal.php
│  │           │  │  │  ├─ Greater.php
│  │           │  │  │  ├─ GreaterOrEqual.php
│  │           │  │  │  ├─ Identical.php
│  │           │  │  │  ├─ LogicalAnd.php
│  │           │  │  │  ├─ LogicalOr.php
│  │           │  │  │  ├─ LogicalXor.php
│  │           │  │  │  ├─ Minus.php
│  │           │  │  │  ├─ Mod.php
│  │           │  │  │  ├─ Mul.php
│  │           │  │  │  ├─ NotEqual.php
│  │           │  │  │  ├─ NotIdentical.php
│  │           │  │  │  ├─ Pipe.php
│  │           │  │  │  ├─ Plus.php
│  │           │  │  │  ├─ Pow.php
│  │           │  │  │  ├─ ShiftLeft.php
│  │           │  │  │  ├─ ShiftRight.php
│  │           │  │  │  ├─ Smaller.php
│  │           │  │  │  ├─ SmallerOrEqual.php
│  │           │  │  │  └─ Spaceship.php
│  │           │  │  ├─ BinaryOp.php
│  │           │  │  ├─ BitwiseNot.php
│  │           │  │  ├─ BooleanNot.php
│  │           │  │  ├─ CallLike.php
│  │           │  │  ├─ Cast
│  │           │  │  │  ├─ Array_.php
│  │           │  │  │  ├─ Bool_.php
│  │           │  │  │  ├─ Double.php
│  │           │  │  │  ├─ Int_.php
│  │           │  │  │  ├─ Object_.php
│  │           │  │  │  ├─ String_.php
│  │           │  │  │  ├─ Unset_.php
│  │           │  │  │  └─ Void_.php
│  │           │  │  ├─ Cast.php
│  │           │  │  ├─ ClassConstFetch.php
│  │           │  │  ├─ Clone_.php
│  │           │  │  ├─ Closure.php
│  │           │  │  ├─ ClosureUse.php
│  │           │  │  ├─ ConstFetch.php
│  │           │  │  ├─ Empty_.php
│  │           │  │  ├─ Error.php
│  │           │  │  ├─ ErrorSuppress.php
│  │           │  │  ├─ Eval_.php
│  │           │  │  ├─ Exit_.php
│  │           │  │  ├─ FuncCall.php
│  │           │  │  ├─ Include_.php
│  │           │  │  ├─ Instanceof_.php
│  │           │  │  ├─ Isset_.php
│  │           │  │  ├─ List_.php
│  │           │  │  ├─ Match_.php
│  │           │  │  ├─ MethodCall.php
│  │           │  │  ├─ New_.php
│  │           │  │  ├─ NullsafeMethodCall.php
│  │           │  │  ├─ NullsafePropertyFetch.php
│  │           │  │  ├─ PostDec.php
│  │           │  │  ├─ PostInc.php
│  │           │  │  ├─ PreDec.php
│  │           │  │  ├─ PreInc.php
│  │           │  │  ├─ Print_.php
│  │           │  │  ├─ PropertyFetch.php
│  │           │  │  ├─ ShellExec.php
│  │           │  │  ├─ StaticCall.php
│  │           │  │  ├─ StaticPropertyFetch.php
│  │           │  │  ├─ Ternary.php
│  │           │  │  ├─ Throw_.php
│  │           │  │  ├─ UnaryMinus.php
│  │           │  │  ├─ UnaryPlus.php
│  │           │  │  ├─ Variable.php
│  │           │  │  ├─ YieldFrom.php
│  │           │  │  └─ Yield_.php
│  │           │  ├─ Expr.php
│  │           │  ├─ FunctionLike.php
│  │           │  ├─ Identifier.php
│  │           │  ├─ InterpolatedStringPart.php
│  │           │  ├─ IntersectionType.php
│  │           │  ├─ MatchArm.php
│  │           │  ├─ Name
│  │           │  │  ├─ FullyQualified.php
│  │           │  │  └─ Relative.php
│  │           │  ├─ Name.php
│  │           │  ├─ NullableType.php
│  │           │  ├─ Param.php
│  │           │  ├─ PropertyHook.php
│  │           │  ├─ PropertyItem.php
│  │           │  ├─ Scalar
│  │           │  │  ├─ DNumber.php
│  │           │  │  ├─ Encapsed.php
│  │           │  │  ├─ EncapsedStringPart.php
│  │           │  │  ├─ Float_.php
│  │           │  │  ├─ Int_.php
│  │           │  │  ├─ InterpolatedString.php
│  │           │  │  ├─ LNumber.php
│  │           │  │  ├─ MagicConst
│  │           │  │  │  ├─ Class_.php
│  │           │  │  │  ├─ Dir.php
│  │           │  │  │  ├─ File.php
│  │           │  │  │  ├─ Function_.php
│  │           │  │  │  ├─ Line.php
│  │           │  │  │  ├─ Method.php
│  │           │  │  │  ├─ Namespace_.php
│  │           │  │  │  ├─ Property.php
│  │           │  │  │  └─ Trait_.php
│  │           │  │  ├─ MagicConst.php
│  │           │  │  └─ String_.php
│  │           │  ├─ Scalar.php
│  │           │  ├─ StaticVar.php
│  │           │  ├─ Stmt
│  │           │  │  ├─ Block.php
│  │           │  │  ├─ Break_.php
│  │           │  │  ├─ Case_.php
│  │           │  │  ├─ Catch_.php
│  │           │  │  ├─ ClassConst.php
│  │           │  │  ├─ ClassLike.php
│  │           │  │  ├─ ClassMethod.php
│  │           │  │  ├─ Class_.php
│  │           │  │  ├─ Const_.php
│  │           │  │  ├─ Continue_.php
│  │           │  │  ├─ DeclareDeclare.php
│  │           │  │  ├─ Declare_.php
│  │           │  │  ├─ Do_.php
│  │           │  │  ├─ Echo_.php
│  │           │  │  ├─ ElseIf_.php
│  │           │  │  ├─ Else_.php
│  │           │  │  ├─ EnumCase.php
│  │           │  │  ├─ Enum_.php
│  │           │  │  ├─ Expression.php
│  │           │  │  ├─ Finally_.php
│  │           │  │  ├─ For_.php
│  │           │  │  ├─ Foreach_.php
│  │           │  │  ├─ Function_.php
│  │           │  │  ├─ Global_.php
│  │           │  │  ├─ Goto_.php
│  │           │  │  ├─ GroupUse.php
│  │           │  │  ├─ HaltCompiler.php
│  │           │  │  ├─ If_.php
│  │           │  │  ├─ InlineHTML.php
│  │           │  │  ├─ Interface_.php
│  │           │  │  ├─ Label.php
│  │           │  │  ├─ Namespace_.php
│  │           │  │  ├─ Nop.php
│  │           │  │  ├─ Property.php
│  │           │  │  ├─ PropertyProperty.php
│  │           │  │  ├─ Return_.php
│  │           │  │  ├─ StaticVar.php
│  │           │  │  ├─ Static_.php
│  │           │  │  ├─ Switch_.php
│  │           │  │  ├─ TraitUse.php
│  │           │  │  ├─ TraitUseAdaptation
│  │           │  │  │  ├─ Alias.php
│  │           │  │  │  └─ Precedence.php
│  │           │  │  ├─ TraitUseAdaptation.php
│  │           │  │  ├─ Trait_.php
│  │           │  │  ├─ TryCatch.php
│  │           │  │  ├─ Unset_.php
│  │           │  │  ├─ UseUse.php
│  │           │  │  ├─ Use_.php
│  │           │  │  └─ While_.php
│  │           │  ├─ Stmt.php
│  │           │  ├─ UnionType.php
│  │           │  ├─ UseItem.php
│  │           │  ├─ VarLikeIdentifier.php
│  │           │  └─ VariadicPlaceholder.php
│  │           ├─ Node.php
│  │           ├─ NodeAbstract.php
│  │           ├─ NodeDumper.php
│  │           ├─ NodeFinder.php
│  │           ├─ NodeTraverser.php
│  │           ├─ NodeTraverserInterface.php
│  │           ├─ NodeVisitor
│  │           │  ├─ CloningVisitor.php
│  │           │  ├─ CommentAnnotatingVisitor.php
│  │           │  ├─ FindingVisitor.php
│  │           │  ├─ FirstFindingVisitor.php
│  │           │  ├─ NameResolver.php
│  │           │  ├─ NodeConnectingVisitor.php
│  │           │  └─ ParentConnectingVisitor.php
│  │           ├─ NodeVisitor.php
│  │           ├─ NodeVisitorAbstract.php
│  │           ├─ Parser
│  │           │  ├─ Php7.php
│  │           │  └─ Php8.php
│  │           ├─ Parser.php
│  │           ├─ ParserAbstract.php
│  │           ├─ ParserFactory.php
│  │           ├─ PhpVersion.php
│  │           ├─ PrettyPrinter
│  │           │  └─ Standard.php
│  │           ├─ PrettyPrinter.php
│  │           ├─ PrettyPrinterAbstract.php
│  │           ├─ Token.php
│  │           └─ compatibility_tokens.php
│  ├─ nunomaduro
│  │  ├─ collision
│  │  │  ├─ .temp
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ phpstan-baseline.neon
│  │  │  └─ src
│  │  │     ├─ Adapters
│  │  │     │  ├─ Laravel
│  │  │     │  │  ├─ CollisionServiceProvider.php
│  │  │     │  │  ├─ Commands
│  │  │     │  │  │  └─ TestCommand.php
│  │  │     │  │  ├─ ExceptionHandler.php
│  │  │     │  │  ├─ Exceptions
│  │  │     │  │  │  ├─ NotSupportedYetException.php
│  │  │     │  │  │  └─ RequirementsException.php
│  │  │     │  │  ├─ IgnitionSolutionsRepository.php
│  │  │     │  │  └─ Inspector.php
│  │  │     │  └─ Phpunit
│  │  │     │     ├─ Autoload.php
│  │  │     │     ├─ ConfigureIO.php
│  │  │     │     ├─ Printers
│  │  │     │     │  ├─ DefaultPrinter.php
│  │  │     │     │  └─ ReportablePrinter.php
│  │  │     │     ├─ State.php
│  │  │     │     ├─ Style.php
│  │  │     │     ├─ Subscribers
│  │  │     │     │  ├─ EnsurePrinterIsRegisteredSubscriber.php
│  │  │     │     │  └─ Subscriber.php
│  │  │     │     ├─ Support
│  │  │     │     │  └─ ResultReflection.php
│  │  │     │     └─ TestResult.php
│  │  │     ├─ ArgumentFormatter.php
│  │  │     ├─ ConsoleColor.php
│  │  │     ├─ Contracts
│  │  │     │  ├─ Adapters
│  │  │     │  │  └─ Phpunit
│  │  │     │  │     └─ HasPrintableTestCaseName.php
│  │  │     │  ├─ RenderableOnCollisionEditor.php
│  │  │     │  ├─ RenderlessEditor.php
│  │  │     │  ├─ RenderlessTrace.php
│  │  │     │  └─ SolutionsRepository.php
│  │  │     ├─ Coverage.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ InvalidStyleException.php
│  │  │     │  ├─ ShouldNotHappen.php
│  │  │     │  ├─ TestException.php
│  │  │     │  └─ TestOutcome.php
│  │  │     ├─ Handler.php
│  │  │     ├─ Highlighter.php
│  │  │     ├─ Provider.php
│  │  │     ├─ SolutionsRepositories
│  │  │     │  └─ NullSolutionsRepository.php
│  │  │     └─ Writer.php
│  │  └─ termwind
│  │     ├─ LICENSE.md
│  │     ├─ composer.json
│  │     ├─ playground.php
│  │     └─ src
│  │        ├─ Actions
│  │        │  └─ StyleToMethod.php
│  │        ├─ Components
│  │        │  ├─ Anchor.php
│  │        │  ├─ BreakLine.php
│  │        │  ├─ Dd.php
│  │        │  ├─ Div.php
│  │        │  ├─ Dl.php
│  │        │  ├─ Dt.php
│  │        │  ├─ Element.php
│  │        │  ├─ Hr.php
│  │        │  ├─ Li.php
│  │        │  ├─ Ol.php
│  │        │  ├─ Paragraph.php
│  │        │  ├─ Raw.php
│  │        │  ├─ Span.php
│  │        │  └─ Ul.php
│  │        ├─ Enums
│  │        │  └─ Color.php
│  │        ├─ Exceptions
│  │        │  ├─ ColorNotFound.php
│  │        │  ├─ InvalidChild.php
│  │        │  ├─ InvalidColor.php
│  │        │  ├─ InvalidStyle.php
│  │        │  └─ StyleNotFound.php
│  │        ├─ Functions.php
│  │        ├─ Helpers
│  │        │  └─ QuestionHelper.php
│  │        ├─ Html
│  │        │  ├─ CodeRenderer.php
│  │        │  ├─ InheritStyles.php
│  │        │  ├─ PreRenderer.php
│  │        │  └─ TableRenderer.php
│  │        ├─ HtmlRenderer.php
│  │        ├─ Laravel
│  │        │  └─ TermwindServiceProvider.php
│  │        ├─ Question.php
│  │        ├─ Repositories
│  │        │  └─ Styles.php
│  │        ├─ Terminal.php
│  │        ├─ Termwind.php
│  │        └─ ValueObjects
│  │           ├─ Node.php
│  │           ├─ Style.php
│  │           └─ Styles.php
│  ├─ phar-io
│  │  ├─ manifest
│  │  │  ├─ .php-cs-fixer.dist.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ composer.lock
│  │  │  ├─ manifest.xsd
│  │  │  ├─ src
│  │  │  │  ├─ ManifestDocumentMapper.php
│  │  │  │  ├─ ManifestLoader.php
│  │  │  │  ├─ ManifestSerializer.php
│  │  │  │  ├─ exceptions
│  │  │  │  │  ├─ ElementCollectionException.php
│  │  │  │  │  ├─ Exception.php
│  │  │  │  │  ├─ InvalidApplicationNameException.php
│  │  │  │  │  ├─ InvalidEmailException.php
│  │  │  │  │  ├─ InvalidUrlException.php
│  │  │  │  │  ├─ ManifestDocumentException.php
│  │  │  │  │  ├─ ManifestDocumentLoadingException.php
│  │  │  │  │  ├─ ManifestDocumentMapperException.php
│  │  │  │  │  ├─ ManifestElementException.php
│  │  │  │  │  ├─ ManifestLoaderException.php
│  │  │  │  │  └─ NoEmailAddressException.php
│  │  │  │  ├─ values
│  │  │  │  │  ├─ Application.php
│  │  │  │  │  ├─ ApplicationName.php
│  │  │  │  │  ├─ Author.php
│  │  │  │  │  ├─ AuthorCollection.php
│  │  │  │  │  ├─ AuthorCollectionIterator.php
│  │  │  │  │  ├─ BundledComponent.php
│  │  │  │  │  ├─ BundledComponentCollection.php
│  │  │  │  │  ├─ BundledComponentCollectionIterator.php
│  │  │  │  │  ├─ CopyrightInformation.php
│  │  │  │  │  ├─ Email.php
│  │  │  │  │  ├─ Extension.php
│  │  │  │  │  ├─ Library.php
│  │  │  │  │  ├─ License.php
│  │  │  │  │  ├─ Manifest.php
│  │  │  │  │  ├─ PhpExtensionRequirement.php
│  │  │  │  │  ├─ PhpVersionRequirement.php
│  │  │  │  │  ├─ Requirement.php
│  │  │  │  │  ├─ RequirementCollection.php
│  │  │  │  │  ├─ RequirementCollectionIterator.php
│  │  │  │  │  ├─ Type.php
│  │  │  │  │  └─ Url.php
│  │  │  │  └─ xml
│  │  │  │     ├─ AuthorElement.php
│  │  │  │     ├─ AuthorElementCollection.php
│  │  │  │     ├─ BundlesElement.php
│  │  │  │     ├─ ComponentElement.php
│  │  │  │     ├─ ComponentElementCollection.php
│  │  │  │     ├─ ContainsElement.php
│  │  │  │     ├─ CopyrightElement.php
│  │  │  │     ├─ ElementCollection.php
│  │  │  │     ├─ ExtElement.php
│  │  │  │     ├─ ExtElementCollection.php
│  │  │  │     ├─ ExtensionElement.php
│  │  │  │     ├─ LicenseElement.php
│  │  │  │     ├─ ManifestDocument.php
│  │  │  │     ├─ ManifestElement.php
│  │  │  │     ├─ PhpElement.php
│  │  │  │     └─ RequiresElement.php
│  │  │  └─ tools
│  │  │     └─ php-cs-fixer.d
│  │  │        ├─ PhpdocSingleLineVarFixer.php
│  │  │        └─ header.txt
│  │  └─ version
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ BuildMetaData.php
│  │        ├─ PreReleaseSuffix.php
│  │        ├─ Version.php
│  │        ├─ VersionConstraintParser.php
│  │        ├─ VersionConstraintValue.php
│  │        ├─ VersionNumber.php
│  │        ├─ constraints
│  │        │  ├─ AbstractVersionConstraint.php
│  │        │  ├─ AndVersionConstraintGroup.php
│  │        │  ├─ AnyVersionConstraint.php
│  │        │  ├─ ExactVersionConstraint.php
│  │        │  ├─ GreaterThanOrEqualToVersionConstraint.php
│  │        │  ├─ OrVersionConstraintGroup.php
│  │        │  ├─ SpecificMajorAndMinorVersionConstraint.php
│  │        │  ├─ SpecificMajorVersionConstraint.php
│  │        │  └─ VersionConstraint.php
│  │        └─ exceptions
│  │           ├─ Exception.php
│  │           ├─ InvalidPreReleaseSuffixException.php
│  │           ├─ InvalidVersionException.php
│  │           ├─ NoBuildMetaDataException.php
│  │           ├─ NoPreReleaseSuffixException.php
│  │           └─ UnsupportedVersionConstraintException.php
│  ├─ php-debugbar
│  │  └─ php-debugbar
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ DebugBar
│  │           ├─ Bridge
│  │           │  ├─ CacheCacheCollector.php
│  │           │  ├─ DoctrineCollector.php
│  │           │  ├─ MonologCollector.php
│  │           │  ├─ NamespacedTwigProfileCollector.php
│  │           │  ├─ Propel2Collector.php
│  │           │  ├─ PropelCollector.php
│  │           │  ├─ SlimCollector.php
│  │           │  ├─ SwiftMailer
│  │           │  │  ├─ SwiftLogCollector.php
│  │           │  │  └─ SwiftMailCollector.php
│  │           │  ├─ Symfony
│  │           │  │  └─ SymfonyMailCollector.php
│  │           │  ├─ Twig
│  │           │  │  ├─ DebugTwigExtension.php
│  │           │  │  ├─ DumpTwigExtension.php
│  │           │  │  ├─ MeasureTwigExtension.php
│  │           │  │  ├─ MeasureTwigNode.php
│  │           │  │  ├─ MeasureTwigTokenParser.php
│  │           │  │  ├─ TimeableTwigExtensionProfiler.php
│  │           │  │  ├─ TraceableTwigEnvironment.php
│  │           │  │  ├─ TraceableTwigTemplate.php
│  │           │  │  └─ TwigCollector.php
│  │           │  └─ TwigProfileCollector.php
│  │           ├─ DataCollector
│  │           │  ├─ AggregatedCollector.php
│  │           │  ├─ AssetProvider.php
│  │           │  ├─ ConfigCollector.php
│  │           │  ├─ DataCollector.php
│  │           │  ├─ DataCollectorInterface.php
│  │           │  ├─ ExceptionsCollector.php
│  │           │  ├─ LocalizationCollector.php
│  │           │  ├─ MemoryCollector.php
│  │           │  ├─ MessagesAggregateInterface.php
│  │           │  ├─ MessagesCollector.php
│  │           │  ├─ ObjectCountCollector.php
│  │           │  ├─ PDO
│  │           │  │  ├─ PDOCollector.php
│  │           │  │  ├─ TraceablePDO.php
│  │           │  │  ├─ TraceablePDOStatement.php
│  │           │  │  └─ TracedStatement.php
│  │           │  ├─ PhpInfoCollector.php
│  │           │  ├─ Renderable.php
│  │           │  ├─ RequestDataCollector.php
│  │           │  └─ TimeDataCollector.php
│  │           ├─ DataFormatter
│  │           │  ├─ DataFormatter.php
│  │           │  ├─ DataFormatterInterface.php
│  │           │  ├─ DebugBarVarDumper.php
│  │           │  ├─ HasDataFormatter.php
│  │           │  ├─ HasXdebugLinks.php
│  │           │  └─ VarDumper
│  │           │     └─ DebugBarHtmlDumper.php
│  │           ├─ DebugBar.php
│  │           ├─ DebugBarException.php
│  │           ├─ HttpDriverInterface.php
│  │           ├─ JavascriptRenderer.php
│  │           ├─ OpenHandler.php
│  │           ├─ PhpHttpDriver.php
│  │           ├─ RequestIdGenerator.php
│  │           ├─ RequestIdGeneratorInterface.php
│  │           ├─ Resources
│  │           │  ├─ debugbar.css
│  │           │  ├─ debugbar.js
│  │           │  ├─ openhandler.css
│  │           │  ├─ openhandler.js
│  │           │  ├─ vendor
│  │           │  │  ├─ font-awesome
│  │           │  │  │  └─ css
│  │           │  │  │     └─ font-awesome.min.css
│  │           │  │  ├─ highlightjs
│  │           │  │  │  ├─ highlight.pack.js
│  │           │  │  │  └─ styles
│  │           │  │  │     └─ github.css
│  │           │  │  └─ jquery
│  │           │  │     └─ dist
│  │           │  │        └─ jquery.min.js
│  │           │  ├─ widgets
│  │           │  │  ├─ mails
│  │           │  │  │  ├─ widget.css
│  │           │  │  │  └─ widget.js
│  │           │  │  ├─ sqlqueries
│  │           │  │  │  ├─ widget.css
│  │           │  │  │  └─ widget.js
│  │           │  │  └─ templates
│  │           │  │     ├─ widget.css
│  │           │  │     └─ widget.js
│  │           │  ├─ widgets.css
│  │           │  └─ widgets.js
│  │           ├─ StandardDebugBar.php
│  │           └─ Storage
│  │              ├─ FileStorage.php
│  │              ├─ MemcachedStorage.php
│  │              ├─ PdoStorage.php
│  │              ├─ RedisStorage.php
│  │              ├─ StorageInterface.php
│  │              └─ pdo_storage_schema.sql
│  ├─ phpoption
│  │  └─ phpoption
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ PhpOption
│  │           ├─ LazyOption.php
│  │           ├─ None.php
│  │           ├─ Option.php
│  │           └─ Some.php
│  ├─ phpstan
│  │  └─ phpdoc-parser
│  │     ├─ CLAUDE.MD
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ UPGRADING.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Ast
│  │        │  ├─ AbstractNodeVisitor.php
│  │        │  ├─ Attribute.php
│  │        │  ├─ Comment.php
│  │        │  ├─ ConstExpr
│  │        │  │  ├─ ConstExprArrayItemNode.php
│  │        │  │  ├─ ConstExprArrayNode.php
│  │        │  │  ├─ ConstExprFalseNode.php
│  │        │  │  ├─ ConstExprFloatNode.php
│  │        │  │  ├─ ConstExprIntegerNode.php
│  │        │  │  ├─ ConstExprNode.php
│  │        │  │  ├─ ConstExprNullNode.php
│  │        │  │  ├─ ConstExprStringNode.php
│  │        │  │  ├─ ConstExprTrueNode.php
│  │        │  │  ├─ ConstFetchNode.php
│  │        │  │  └─ DoctrineConstExprStringNode.php
│  │        │  ├─ Node.php
│  │        │  ├─ NodeAttributes.php
│  │        │  ├─ NodeTraverser.php
│  │        │  ├─ NodeVisitor
│  │        │  │  └─ CloningVisitor.php
│  │        │  ├─ NodeVisitor.php
│  │        │  ├─ PhpDoc
│  │        │  │  ├─ AssertTagMethodValueNode.php
│  │        │  │  ├─ AssertTagPropertyValueNode.php
│  │        │  │  ├─ AssertTagValueNode.php
│  │        │  │  ├─ DeprecatedTagValueNode.php
│  │        │  │  ├─ Doctrine
│  │        │  │  │  ├─ DoctrineAnnotation.php
│  │        │  │  │  ├─ DoctrineArgument.php
│  │        │  │  │  ├─ DoctrineArray.php
│  │        │  │  │  ├─ DoctrineArrayItem.php
│  │        │  │  │  └─ DoctrineTagValueNode.php
│  │        │  │  ├─ ExtendsTagValueNode.php
│  │        │  │  ├─ GenericTagValueNode.php
│  │        │  │  ├─ ImplementsTagValueNode.php
│  │        │  │  ├─ InvalidTagValueNode.php
│  │        │  │  ├─ MethodTagValueNode.php
│  │        │  │  ├─ MethodTagValueParameterNode.php
│  │        │  │  ├─ MixinTagValueNode.php
│  │        │  │  ├─ ParamClosureThisTagValueNode.php
│  │        │  │  ├─ ParamImmediatelyInvokedCallableTagValueNode.php
│  │        │  │  ├─ ParamLaterInvokedCallableTagValueNode.php
│  │        │  │  ├─ ParamOutTagValueNode.php
│  │        │  │  ├─ ParamTagValueNode.php
│  │        │  │  ├─ PhpDocChildNode.php
│  │        │  │  ├─ PhpDocNode.php
│  │        │  │  ├─ PhpDocTagNode.php
│  │        │  │  ├─ PhpDocTagValueNode.php
│  │        │  │  ├─ PhpDocTextNode.php
│  │        │  │  ├─ PropertyTagValueNode.php
│  │        │  │  ├─ PureUnlessCallableIsImpureTagValueNode.php
│  │        │  │  ├─ RequireExtendsTagValueNode.php
│  │        │  │  ├─ RequireImplementsTagValueNode.php
│  │        │  │  ├─ ReturnTagValueNode.php
│  │        │  │  ├─ SealedTagValueNode.php
│  │        │  │  ├─ SelfOutTagValueNode.php
│  │        │  │  ├─ TemplateTagValueNode.php
│  │        │  │  ├─ ThrowsTagValueNode.php
│  │        │  │  ├─ TypeAliasImportTagValueNode.php
│  │        │  │  ├─ TypeAliasTagValueNode.php
│  │        │  │  ├─ TypelessParamTagValueNode.php
│  │        │  │  ├─ UsesTagValueNode.php
│  │        │  │  └─ VarTagValueNode.php
│  │        │  └─ Type
│  │        │     ├─ ArrayShapeItemNode.php
│  │        │     ├─ ArrayShapeNode.php
│  │        │     ├─ ArrayShapeUnsealedTypeNode.php
│  │        │     ├─ ArrayTypeNode.php
│  │        │     ├─ CallableTypeNode.php
│  │        │     ├─ CallableTypeParameterNode.php
│  │        │     ├─ ConditionalTypeForParameterNode.php
│  │        │     ├─ ConditionalTypeNode.php
│  │        │     ├─ ConstTypeNode.php
│  │        │     ├─ GenericTypeNode.php
│  │        │     ├─ IdentifierTypeNode.php
│  │        │     ├─ IntersectionTypeNode.php
│  │        │     ├─ InvalidTypeNode.php
│  │        │     ├─ NullableTypeNode.php
│  │        │     ├─ ObjectShapeItemNode.php
│  │        │     ├─ ObjectShapeNode.php
│  │        │     ├─ OffsetAccessTypeNode.php
│  │        │     ├─ ThisTypeNode.php
│  │        │     ├─ TypeNode.php
│  │        │     └─ UnionTypeNode.php
│  │        ├─ Lexer
│  │        │  └─ Lexer.php
│  │        ├─ Parser
│  │        │  ├─ ConstExprParser.php
│  │        │  ├─ ParserException.php
│  │        │  ├─ PhpDocParser.php
│  │        │  ├─ StringUnescaper.php
│  │        │  ├─ TokenIterator.php
│  │        │  └─ TypeParser.php
│  │        ├─ ParserConfig.php
│  │        └─ Printer
│  │           ├─ DiffElem.php
│  │           ├─ Differ.php
│  │           └─ Printer.php
│  ├─ phpunit
│  │  ├─ php-code-coverage
│  │  │  ├─ ChangeLog-11.0.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CodeCoverage.php
│  │  │     ├─ Data
│  │  │     │  ├─ ProcessedCodeCoverageData.php
│  │  │     │  └─ RawCodeCoverageData.php
│  │  │     ├─ Driver
│  │  │     │  ├─ Driver.php
│  │  │     │  ├─ PcovDriver.php
│  │  │     │  ├─ Selector.php
│  │  │     │  └─ XdebugDriver.php
│  │  │     ├─ Exception
│  │  │     │  ├─ BranchAndPathCoverageNotSupportedException.php
│  │  │     │  ├─ DeadCodeDetectionNotSupportedException.php
│  │  │     │  ├─ DirectoryCouldNotBeCreatedException.php
│  │  │     │  ├─ Exception.php
│  │  │     │  ├─ FileCouldNotBeWrittenException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ NoCodeCoverageDriverAvailableException.php
│  │  │     │  ├─ NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
│  │  │     │  ├─ ParserException.php
│  │  │     │  ├─ PathExistsButIsNotDirectoryException.php
│  │  │     │  ├─ PcovNotAvailableException.php
│  │  │     │  ├─ ReflectionException.php
│  │  │     │  ├─ ReportAlreadyFinalizedException.php
│  │  │     │  ├─ StaticAnalysisCacheNotConfiguredException.php
│  │  │     │  ├─ TestIdMissingException.php
│  │  │     │  ├─ UnintentionallyCoveredCodeException.php
│  │  │     │  ├─ WriteOperationFailedException.php
│  │  │     │  ├─ XdebugNotAvailableException.php
│  │  │     │  ├─ XdebugNotEnabledException.php
│  │  │     │  └─ XmlException.php
│  │  │     ├─ Filter.php
│  │  │     ├─ Node
│  │  │     │  ├─ AbstractNode.php
│  │  │     │  ├─ Builder.php
│  │  │     │  ├─ CrapIndex.php
│  │  │     │  ├─ Directory.php
│  │  │     │  ├─ File.php
│  │  │     │  └─ Iterator.php
│  │  │     ├─ Report
│  │  │     │  ├─ Clover.php
│  │  │     │  ├─ Cobertura.php
│  │  │     │  ├─ Crap4j.php
│  │  │     │  ├─ Html
│  │  │     │  │  ├─ Colors.php
│  │  │     │  │  ├─ CustomCssFile.php
│  │  │     │  │  ├─ Facade.php
│  │  │     │  │  ├─ Renderer
│  │  │     │  │  │  ├─ Dashboard.php
│  │  │     │  │  │  ├─ Directory.php
│  │  │     │  │  │  ├─ File.php
│  │  │     │  │  │  └─ Template
│  │  │     │  │  │     ├─ branches.html.dist
│  │  │     │  │  │     ├─ coverage_bar.html.dist
│  │  │     │  │  │     ├─ coverage_bar_branch.html.dist
│  │  │     │  │  │     ├─ css
│  │  │     │  │  │     │  ├─ bootstrap.min.css
│  │  │     │  │  │     │  ├─ custom.css
│  │  │     │  │  │     │  ├─ nv.d3.min.css
│  │  │     │  │  │     │  ├─ octicons.css
│  │  │     │  │  │     │  └─ style.css
│  │  │     │  │  │     ├─ dashboard.html.dist
│  │  │     │  │  │     ├─ dashboard_branch.html.dist
│  │  │     │  │  │     ├─ directory.html.dist
│  │  │     │  │  │     ├─ directory_branch.html.dist
│  │  │     │  │  │     ├─ directory_item.html.dist
│  │  │     │  │  │     ├─ directory_item_branch.html.dist
│  │  │     │  │  │     ├─ file.html.dist
│  │  │     │  │  │     ├─ file_branch.html.dist
│  │  │     │  │  │     ├─ file_item.html.dist
│  │  │     │  │  │     ├─ file_item_branch.html.dist
│  │  │     │  │  │     ├─ icons
│  │  │     │  │  │     │  ├─ file-code.svg
│  │  │     │  │  │     │  └─ file-directory.svg
│  │  │     │  │  │     ├─ js
│  │  │     │  │  │     │  ├─ bootstrap.bundle.min.js
│  │  │     │  │  │     │  ├─ d3.min.js
│  │  │     │  │  │     │  ├─ file.js
│  │  │     │  │  │     │  ├─ jquery.min.js
│  │  │     │  │  │     │  └─ nv.d3.min.js
│  │  │     │  │  │     ├─ line.html.dist
│  │  │     │  │  │     ├─ lines.html.dist
│  │  │     │  │  │     ├─ method_item.html.dist
│  │  │     │  │  │     ├─ method_item_branch.html.dist
│  │  │     │  │  │     └─ paths.html.dist
│  │  │     │  │  └─ Renderer.php
│  │  │     │  ├─ PHP.php
│  │  │     │  ├─ Text.php
│  │  │     │  ├─ Thresholds.php
│  │  │     │  └─ Xml
│  │  │     │     ├─ BuildInformation.php
│  │  │     │     ├─ Coverage.php
│  │  │     │     ├─ Directory.php
│  │  │     │     ├─ Facade.php
│  │  │     │     ├─ File.php
│  │  │     │     ├─ Method.php
│  │  │     │     ├─ Node.php
│  │  │     │     ├─ Project.php
│  │  │     │     ├─ Report.php
│  │  │     │     ├─ Source.php
│  │  │     │     ├─ Tests.php
│  │  │     │     ├─ Totals.php
│  │  │     │     └─ Unit.php
│  │  │     ├─ StaticAnalysis
│  │  │     │  ├─ CacheWarmer.php
│  │  │     │  ├─ CachingFileAnalyser.php
│  │  │     │  ├─ CodeUnitFindingVisitor.php
│  │  │     │  ├─ ExecutableLinesFindingVisitor.php
│  │  │     │  ├─ FileAnalyser.php
│  │  │     │  ├─ IgnoredLinesFindingVisitor.php
│  │  │     │  └─ ParsingFileAnalyser.php
│  │  │     ├─ TestSize
│  │  │     │  ├─ Known.php
│  │  │     │  ├─ Large.php
│  │  │     │  ├─ Medium.php
│  │  │     │  ├─ Small.php
│  │  │     │  ├─ TestSize.php
│  │  │     │  └─ Unknown.php
│  │  │     ├─ TestStatus
│  │  │     │  ├─ Failure.php
│  │  │     │  ├─ Known.php
│  │  │     │  ├─ Success.php
│  │  │     │  ├─ TestStatus.php
│  │  │     │  └─ Unknown.php
│  │  │     ├─ Util
│  │  │     │  ├─ Filesystem.php
│  │  │     │  ├─ Percentage.php
│  │  │     │  └─ Xml.php
│  │  │     └─ Version.php
│  │  ├─ php-file-iterator
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ExcludeIterator.php
│  │  │     ├─ Facade.php
│  │  │     ├─ Factory.php
│  │  │     └─ Iterator.php
│  │  ├─ php-invoker
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Invoker.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ ProcessControlExtensionNotLoadedException.php
│  │  │        └─ TimeoutException.php
│  │  ├─ php-text-template
│  │  │  ├─ .psalm
│  │  │  │  ├─ baseline.xml
│  │  │  │  └─ config.xml
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Template.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ InvalidArgumentException.php
│  │  │        └─ RuntimeException.php
│  │  ├─ php-timer
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Duration.php
│  │  │     ├─ ResourceUsageFormatter.php
│  │  │     ├─ Timer.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ NoActiveTimerException.php
│  │  │        └─ TimeSinceStartOfRequestNotAvailableException.php
│  │  └─ phpunit
│  │     ├─ ChangeLog-11.5.md
│  │     ├─ DEPRECATIONS.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     ├─ phpunit
│  │     ├─ phpunit.xsd
│  │     ├─ schema
│  │     │  ├─ 10.0.xsd
│  │     │  ├─ 10.1.xsd
│  │     │  ├─ 10.2.xsd
│  │     │  ├─ 10.3.xsd
│  │     │  ├─ 10.4.xsd
│  │     │  ├─ 10.5.xsd
│  │     │  ├─ 11.0.xsd
│  │     │  ├─ 11.1.xsd
│  │     │  ├─ 11.2.xsd
│  │     │  ├─ 11.3.xsd
│  │     │  ├─ 11.4.xsd
│  │     │  ├─ 8.5.xsd
│  │     │  ├─ 9.0.xsd
│  │     │  ├─ 9.1.xsd
│  │     │  ├─ 9.2.xsd
│  │     │  ├─ 9.3.xsd
│  │     │  ├─ 9.4.xsd
│  │     │  └─ 9.5.xsd
│  │     └─ src
│  │        ├─ Event
│  │        │  ├─ Dispatcher
│  │        │  │  ├─ CollectingDispatcher.php
│  │        │  │  ├─ DeferringDispatcher.php
│  │        │  │  ├─ DirectDispatcher.php
│  │        │  │  ├─ Dispatcher.php
│  │        │  │  └─ SubscribableDispatcher.php
│  │        │  ├─ Emitter
│  │        │  │  ├─ DispatchingEmitter.php
│  │        │  │  └─ Emitter.php
│  │        │  ├─ Events
│  │        │  │  ├─ Application
│  │        │  │  │  ├─ Finished.php
│  │        │  │  │  ├─ FinishedSubscriber.php
│  │        │  │  │  ├─ Started.php
│  │        │  │  │  └─ StartedSubscriber.php
│  │        │  │  ├─ Event.php
│  │        │  │  ├─ EventCollection.php
│  │        │  │  ├─ EventCollectionIterator.php
│  │        │  │  ├─ Test
│  │        │  │  │  ├─ ComparatorRegistered.php
│  │        │  │  │  ├─ ComparatorRegisteredSubscriber.php
│  │        │  │  │  ├─ HookMethod
│  │        │  │  │  │  ├─ AfterLastTestMethodCalled.php
│  │        │  │  │  │  ├─ AfterLastTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ AfterLastTestMethodErrored.php
│  │        │  │  │  │  ├─ AfterLastTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ AfterLastTestMethodFinished.php
│  │        │  │  │  │  ├─ AfterLastTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ AfterTestMethodCalled.php
│  │        │  │  │  │  ├─ AfterTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ AfterTestMethodErrored.php
│  │        │  │  │  │  ├─ AfterTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ AfterTestMethodFinished.php
│  │        │  │  │  │  ├─ AfterTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodCalled.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodErrored.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodFinished.php
│  │        │  │  │  │  ├─ BeforeFirstTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ BeforeTestMethodCalled.php
│  │        │  │  │  │  ├─ BeforeTestMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ BeforeTestMethodErrored.php
│  │        │  │  │  │  ├─ BeforeTestMethodErroredSubscriber.php
│  │        │  │  │  │  ├─ BeforeTestMethodFinished.php
│  │        │  │  │  │  ├─ BeforeTestMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ PostConditionCalled.php
│  │        │  │  │  │  ├─ PostConditionCalledSubscriber.php
│  │        │  │  │  │  ├─ PostConditionErrored.php
│  │        │  │  │  │  ├─ PostConditionErroredSubscriber.php
│  │        │  │  │  │  ├─ PostConditionFinished.php
│  │        │  │  │  │  ├─ PostConditionFinishedSubscriber.php
│  │        │  │  │  │  ├─ PreConditionCalled.php
│  │        │  │  │  │  ├─ PreConditionCalledSubscriber.php
│  │        │  │  │  │  ├─ PreConditionErrored.php
│  │        │  │  │  │  ├─ PreConditionErroredSubscriber.php
│  │        │  │  │  │  ├─ PreConditionFinished.php
│  │        │  │  │  │  └─ PreConditionFinishedSubscriber.php
│  │        │  │  │  ├─ Issue
│  │        │  │  │  │  ├─ ConsideredRisky.php
│  │        │  │  │  │  ├─ ConsideredRiskySubscriber.php
│  │        │  │  │  │  ├─ DeprecationTriggered.php
│  │        │  │  │  │  ├─ DeprecationTriggeredSubscriber.php
│  │        │  │  │  │  ├─ ErrorTriggered.php
│  │        │  │  │  │  ├─ ErrorTriggeredSubscriber.php
│  │        │  │  │  │  ├─ NoticeTriggered.php
│  │        │  │  │  │  ├─ NoticeTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpDeprecationTriggered.php
│  │        │  │  │  │  ├─ PhpDeprecationTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpNoticeTriggered.php
│  │        │  │  │  │  ├─ PhpNoticeTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpWarningTriggered.php
│  │        │  │  │  │  ├─ PhpWarningTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpunitDeprecationTriggered.php
│  │        │  │  │  │  ├─ PhpunitDeprecationTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpunitErrorTriggered.php
│  │        │  │  │  │  ├─ PhpunitErrorTriggeredSubscriber.php
│  │        │  │  │  │  ├─ PhpunitWarningTriggered.php
│  │        │  │  │  │  ├─ PhpunitWarningTriggeredSubscriber.php
│  │        │  │  │  │  ├─ WarningTriggered.php
│  │        │  │  │  │  └─ WarningTriggeredSubscriber.php
│  │        │  │  │  ├─ Lifecycle
│  │        │  │  │  │  ├─ DataProviderMethodCalled.php
│  │        │  │  │  │  ├─ DataProviderMethodCalledSubscriber.php
│  │        │  │  │  │  ├─ DataProviderMethodFinished.php
│  │        │  │  │  │  ├─ DataProviderMethodFinishedSubscriber.php
│  │        │  │  │  │  ├─ Finished.php
│  │        │  │  │  │  ├─ FinishedSubscriber.php
│  │        │  │  │  │  ├─ PreparationFailed.php
│  │        │  │  │  │  ├─ PreparationFailedSubscriber.php
│  │        │  │  │  │  ├─ PreparationStarted.php
│  │        │  │  │  │  ├─ PreparationStartedSubscriber.php
│  │        │  │  │  │  ├─ Prepared.php
│  │        │  │  │  │  └─ PreparedSubscriber.php
│  │        │  │  │  ├─ Outcome
│  │        │  │  │  │  ├─ Errored.php
│  │        │  │  │  │  ├─ ErroredSubscriber.php
│  │        │  │  │  │  ├─ Failed.php
│  │        │  │  │  │  ├─ FailedSubscriber.php
│  │        │  │  │  │  ├─ MarkedIncomplete.php
│  │        │  │  │  │  ├─ MarkedIncompleteSubscriber.php
│  │        │  │  │  │  ├─ Passed.php
│  │        │  │  │  │  ├─ PassedSubscriber.php
│  │        │  │  │  │  ├─ Skipped.php
│  │        │  │  │  │  └─ SkippedSubscriber.php
│  │        │  │  │  ├─ PrintedUnexpectedOutput.php
│  │        │  │  │  ├─ PrintedUnexpectedOutputSubscriber.php
│  │        │  │  │  └─ TestDouble
│  │        │  │  │     ├─ MockObjectCreated.php
│  │        │  │  │     ├─ MockObjectCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectForAbstractClassCreated.php
│  │        │  │  │     ├─ MockObjectForAbstractClassCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectForIntersectionOfInterfacesCreated.php
│  │        │  │  │     ├─ MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectForTraitCreated.php
│  │        │  │  │     ├─ MockObjectForTraitCreatedSubscriber.php
│  │        │  │  │     ├─ MockObjectFromWsdlCreated.php
│  │        │  │  │     ├─ MockObjectFromWsdlCreatedSubscriber.php
│  │        │  │  │     ├─ PartialMockObjectCreated.php
│  │        │  │  │     ├─ PartialMockObjectCreatedSubscriber.php
│  │        │  │  │     ├─ TestProxyCreated.php
│  │        │  │  │     ├─ TestProxyCreatedSubscriber.php
│  │        │  │  │     ├─ TestStubCreated.php
│  │        │  │  │     ├─ TestStubCreatedSubscriber.php
│  │        │  │  │     ├─ TestStubForIntersectionOfInterfacesCreated.php
│  │        │  │  │     └─ TestStubForIntersectionOfInterfacesCreatedSubscriber.php
│  │        │  │  ├─ TestRunner
│  │        │  │  │  ├─ BootstrapFinished.php
│  │        │  │  │  ├─ BootstrapFinishedSubscriber.php
│  │        │  │  │  ├─ ChildProcessFinished.php
│  │        │  │  │  ├─ ChildProcessFinishedSubscriber.php
│  │        │  │  │  ├─ ChildProcessStarted.php
│  │        │  │  │  ├─ ChildProcessStartedSubscriber.php
│  │        │  │  │  ├─ Configured.php
│  │        │  │  │  ├─ ConfiguredSubscriber.php
│  │        │  │  │  ├─ DeprecationTriggered.php
│  │        │  │  │  ├─ DeprecationTriggeredSubscriber.php
│  │        │  │  │  ├─ EventFacadeSealed.php
│  │        │  │  │  ├─ EventFacadeSealedSubscriber.php
│  │        │  │  │  ├─ ExecutionAborted.php
│  │        │  │  │  ├─ ExecutionAbortedSubscriber.php
│  │        │  │  │  ├─ ExecutionFinished.php
│  │        │  │  │  ├─ ExecutionFinishedSubscriber.php
│  │        │  │  │  ├─ ExecutionStarted.php
│  │        │  │  │  ├─ ExecutionStartedSubscriber.php
│  │        │  │  │  ├─ ExtensionBootstrapped.php
│  │        │  │  │  ├─ ExtensionBootstrappedSubscriber.php
│  │        │  │  │  ├─ ExtensionLoadedFromPhar.php
│  │        │  │  │  ├─ ExtensionLoadedFromPharSubscriber.php
│  │        │  │  │  ├─ Finished.php
│  │        │  │  │  ├─ FinishedSubscriber.php
│  │        │  │  │  ├─ GarbageCollectionDisabled.php
│  │        │  │  │  ├─ GarbageCollectionDisabledSubscriber.php
│  │        │  │  │  ├─ GarbageCollectionEnabled.php
│  │        │  │  │  ├─ GarbageCollectionEnabledSubscriber.php
│  │        │  │  │  ├─ GarbageCollectionTriggered.php
│  │        │  │  │  ├─ GarbageCollectionTriggeredSubscriber.php
│  │        │  │  │  ├─ Started.php
│  │        │  │  │  ├─ StartedSubscriber.php
│  │        │  │  │  ├─ WarningTriggered.php
│  │        │  │  │  └─ WarningTriggeredSubscriber.php
│  │        │  │  └─ TestSuite
│  │        │  │     ├─ Filtered.php
│  │        │  │     ├─ FilteredSubscriber.php
│  │        │  │     ├─ Finished.php
│  │        │  │     ├─ FinishedSubscriber.php
│  │        │  │     ├─ Loaded.php
│  │        │  │     ├─ LoadedSubscriber.php
│  │        │  │     ├─ Skipped.php
│  │        │  │     ├─ SkippedSubscriber.php
│  │        │  │     ├─ Sorted.php
│  │        │  │     ├─ SortedSubscriber.php
│  │        │  │     ├─ Started.php
│  │        │  │     └─ StartedSubscriber.php
│  │        │  ├─ Exception
│  │        │  │  ├─ EventAlreadyAssignedException.php
│  │        │  │  ├─ EventFacadeIsSealedException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ InvalidArgumentException.php
│  │        │  │  ├─ InvalidEventException.php
│  │        │  │  ├─ InvalidSubscriberException.php
│  │        │  │  ├─ MapError.php
│  │        │  │  ├─ NoComparisonFailureException.php
│  │        │  │  ├─ NoDataSetFromDataProviderException.php
│  │        │  │  ├─ NoPreviousThrowableException.php
│  │        │  │  ├─ NoTestCaseObjectOnCallStackException.php
│  │        │  │  ├─ RuntimeException.php
│  │        │  │  ├─ SubscriberTypeAlreadyRegisteredException.php
│  │        │  │  ├─ UnknownEventException.php
│  │        │  │  ├─ UnknownEventTypeException.php
│  │        │  │  ├─ UnknownSubscriberException.php
│  │        │  │  └─ UnknownSubscriberTypeException.php
│  │        │  ├─ Facade.php
│  │        │  ├─ Subscriber.php
│  │        │  ├─ Tracer.php
│  │        │  ├─ TypeMap.php
│  │        │  └─ Value
│  │        │     ├─ ClassMethod.php
│  │        │     ├─ ComparisonFailure.php
│  │        │     ├─ ComparisonFailureBuilder.php
│  │        │     ├─ Runtime
│  │        │     │  ├─ OperatingSystem.php
│  │        │     │  ├─ PHP.php
│  │        │     │  ├─ PHPUnit.php
│  │        │     │  └─ Runtime.php
│  │        │     ├─ Telemetry
│  │        │     │  ├─ Duration.php
│  │        │     │  ├─ GarbageCollectorStatus.php
│  │        │     │  ├─ GarbageCollectorStatusProvider.php
│  │        │     │  ├─ HRTime.php
│  │        │     │  ├─ Info.php
│  │        │     │  ├─ MemoryMeter.php
│  │        │     │  ├─ MemoryUsage.php
│  │        │     │  ├─ Php81GarbageCollectorStatusProvider.php
│  │        │     │  ├─ Php83GarbageCollectorStatusProvider.php
│  │        │     │  ├─ Snapshot.php
│  │        │     │  ├─ StopWatch.php
│  │        │     │  ├─ System.php
│  │        │     │  ├─ SystemMemoryMeter.php
│  │        │     │  ├─ SystemStopWatch.php
│  │        │     │  └─ SystemStopWatchWithOffset.php
│  │        │     ├─ Test
│  │        │     │  ├─ Issue
│  │        │     │  │  ├─ DirectTrigger.php
│  │        │     │  │  ├─ IndirectTrigger.php
│  │        │     │  │  ├─ IssueTrigger.php
│  │        │     │  │  ├─ SelfTrigger.php
│  │        │     │  │  ├─ TestTrigger.php
│  │        │     │  │  └─ UnknownTrigger.php
│  │        │     │  ├─ Phpt.php
│  │        │     │  ├─ Test.php
│  │        │     │  ├─ TestCollection.php
│  │        │     │  ├─ TestCollectionIterator.php
│  │        │     │  ├─ TestData
│  │        │     │  │  ├─ DataFromDataProvider.php
│  │        │     │  │  ├─ DataFromTestDependency.php
│  │        │     │  │  ├─ TestData.php
│  │        │     │  │  ├─ TestDataCollection.php
│  │        │     │  │  └─ TestDataCollectionIterator.php
│  │        │     │  ├─ TestDox.php
│  │        │     │  ├─ TestDoxBuilder.php
│  │        │     │  ├─ TestMethod.php
│  │        │     │  └─ TestMethodBuilder.php
│  │        │     ├─ TestSuite
│  │        │     │  ├─ TestSuite.php
│  │        │     │  ├─ TestSuiteBuilder.php
│  │        │     │  ├─ TestSuiteForTestClass.php
│  │        │     │  ├─ TestSuiteForTestMethodWithDataProvider.php
│  │        │     │  └─ TestSuiteWithName.php
│  │        │     ├─ Throwable.php
│  │        │     └─ ThrowableBuilder.php
│  │        ├─ Exception.php
│  │        ├─ Framework
│  │        │  ├─ Assert
│  │        │  │  └─ Functions.php
│  │        │  ├─ Assert.php
│  │        │  ├─ Attributes
│  │        │  │  ├─ After.php
│  │        │  │  ├─ AfterClass.php
│  │        │  │  ├─ BackupGlobals.php
│  │        │  │  ├─ BackupStaticProperties.php
│  │        │  │  ├─ Before.php
│  │        │  │  ├─ BeforeClass.php
│  │        │  │  ├─ CoversClass.php
│  │        │  │  ├─ CoversFunction.php
│  │        │  │  ├─ CoversMethod.php
│  │        │  │  ├─ CoversNothing.php
│  │        │  │  ├─ CoversTrait.php
│  │        │  │  ├─ DataProvider.php
│  │        │  │  ├─ DataProviderExternal.php
│  │        │  │  ├─ Depends.php
│  │        │  │  ├─ DependsExternal.php
│  │        │  │  ├─ DependsExternalUsingDeepClone.php
│  │        │  │  ├─ DependsExternalUsingShallowClone.php
│  │        │  │  ├─ DependsOnClass.php
│  │        │  │  ├─ DependsOnClassUsingDeepClone.php
│  │        │  │  ├─ DependsOnClassUsingShallowClone.php
│  │        │  │  ├─ DependsUsingDeepClone.php
│  │        │  │  ├─ DependsUsingShallowClone.php
│  │        │  │  ├─ DisableReturnValueGenerationForTestDoubles.php
│  │        │  │  ├─ DoesNotPerformAssertions.php
│  │        │  │  ├─ ExcludeGlobalVariableFromBackup.php
│  │        │  │  ├─ ExcludeStaticPropertyFromBackup.php
│  │        │  │  ├─ Group.php
│  │        │  │  ├─ IgnoreDeprecations.php
│  │        │  │  ├─ IgnorePhpunitDeprecations.php
│  │        │  │  ├─ Large.php
│  │        │  │  ├─ Medium.php
│  │        │  │  ├─ PostCondition.php
│  │        │  │  ├─ PreCondition.php
│  │        │  │  ├─ PreserveGlobalState.php
│  │        │  │  ├─ RequiresFunction.php
│  │        │  │  ├─ RequiresMethod.php
│  │        │  │  ├─ RequiresOperatingSystem.php
│  │        │  │  ├─ RequiresOperatingSystemFamily.php
│  │        │  │  ├─ RequiresPhp.php
│  │        │  │  ├─ RequiresPhpExtension.php
│  │        │  │  ├─ RequiresPhpunit.php
│  │        │  │  ├─ RequiresPhpunitExtension.php
│  │        │  │  ├─ RequiresSetting.php
│  │        │  │  ├─ RunClassInSeparateProcess.php
│  │        │  │  ├─ RunInSeparateProcess.php
│  │        │  │  ├─ RunTestsInSeparateProcesses.php
│  │        │  │  ├─ Small.php
│  │        │  │  ├─ Test.php
│  │        │  │  ├─ TestDox.php
│  │        │  │  ├─ TestWith.php
│  │        │  │  ├─ TestWithJson.php
│  │        │  │  ├─ Ticket.php
│  │        │  │  ├─ UsesClass.php
│  │        │  │  ├─ UsesFunction.php
│  │        │  │  ├─ UsesMethod.php
│  │        │  │  ├─ UsesTrait.php
│  │        │  │  └─ WithoutErrorHandler.php
│  │        │  ├─ Constraint
│  │        │  │  ├─ Boolean
│  │        │  │  │  ├─ IsFalse.php
│  │        │  │  │  └─ IsTrue.php
│  │        │  │  ├─ Callback.php
│  │        │  │  ├─ Cardinality
│  │        │  │  │  ├─ Count.php
│  │        │  │  │  ├─ GreaterThan.php
│  │        │  │  │  ├─ IsEmpty.php
│  │        │  │  │  ├─ LessThan.php
│  │        │  │  │  └─ SameSize.php
│  │        │  │  ├─ Constraint.php
│  │        │  │  ├─ Equality
│  │        │  │  │  ├─ IsEqual.php
│  │        │  │  │  ├─ IsEqualCanonicalizing.php
│  │        │  │  │  ├─ IsEqualIgnoringCase.php
│  │        │  │  │  └─ IsEqualWithDelta.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  ├─ ExceptionCode.php
│  │        │  │  │  ├─ ExceptionMessageIsOrContains.php
│  │        │  │  │  └─ ExceptionMessageMatchesRegularExpression.php
│  │        │  │  ├─ Filesystem
│  │        │  │  │  ├─ DirectoryExists.php
│  │        │  │  │  ├─ FileExists.php
│  │        │  │  │  ├─ IsReadable.php
│  │        │  │  │  └─ IsWritable.php
│  │        │  │  ├─ IsAnything.php
│  │        │  │  ├─ IsIdentical.php
│  │        │  │  ├─ JsonMatches.php
│  │        │  │  ├─ Math
│  │        │  │  │  ├─ IsFinite.php
│  │        │  │  │  ├─ IsInfinite.php
│  │        │  │  │  └─ IsNan.php
│  │        │  │  ├─ Object
│  │        │  │  │  ├─ ObjectEquals.php
│  │        │  │  │  └─ ObjectHasProperty.php
│  │        │  │  ├─ Operator
│  │        │  │  │  ├─ BinaryOperator.php
│  │        │  │  │  ├─ LogicalAnd.php
│  │        │  │  │  ├─ LogicalNot.php
│  │        │  │  │  ├─ LogicalOr.php
│  │        │  │  │  ├─ LogicalXor.php
│  │        │  │  │  ├─ Operator.php
│  │        │  │  │  └─ UnaryOperator.php
│  │        │  │  ├─ String
│  │        │  │  │  ├─ IsJson.php
│  │        │  │  │  ├─ RegularExpression.php
│  │        │  │  │  ├─ StringContains.php
│  │        │  │  │  ├─ StringEndsWith.php
│  │        │  │  │  ├─ StringEqualsStringIgnoringLineEndings.php
│  │        │  │  │  ├─ StringMatchesFormatDescription.php
│  │        │  │  │  └─ StringStartsWith.php
│  │        │  │  ├─ Traversable
│  │        │  │  │  ├─ ArrayHasKey.php
│  │        │  │  │  ├─ IsList.php
│  │        │  │  │  ├─ TraversableContains.php
│  │        │  │  │  ├─ TraversableContainsEqual.php
│  │        │  │  │  ├─ TraversableContainsIdentical.php
│  │        │  │  │  └─ TraversableContainsOnly.php
│  │        │  │  └─ Type
│  │        │  │     ├─ IsInstanceOf.php
│  │        │  │     ├─ IsNull.php
│  │        │  │     └─ IsType.php
│  │        │  ├─ DataProviderTestSuite.php
│  │        │  ├─ Exception
│  │        │  │  ├─ AssertionFailedError.php
│  │        │  │  ├─ CodeCoverageException.php
│  │        │  │  ├─ EmptyStringException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ ExpectationFailedException.php
│  │        │  │  ├─ GeneratorNotSupportedException.php
│  │        │  │  ├─ Incomplete
│  │        │  │  │  ├─ IncompleteTest.php
│  │        │  │  │  └─ IncompleteTestError.php
│  │        │  │  ├─ InvalidArgumentException.php
│  │        │  │  ├─ InvalidCoversTargetException.php
│  │        │  │  ├─ InvalidDataProviderException.php
│  │        │  │  ├─ InvalidDependencyException.php
│  │        │  │  ├─ NoChildTestSuiteException.php
│  │        │  │  ├─ ObjectEquals
│  │        │  │  │  ├─ ActualValueIsNotAnObjectException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotAcceptParameterTypeException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
│  │        │  │  │  ├─ ComparisonMethodDoesNotDeclareParameterTypeException.php
│  │        │  │  │  └─ ComparisonMethodDoesNotExistException.php
│  │        │  │  ├─ PhptAssertionFailedError.php
│  │        │  │  ├─ ProcessIsolationException.php
│  │        │  │  ├─ Skipped
│  │        │  │  │  ├─ SkippedTest.php
│  │        │  │  │  ├─ SkippedTestSuiteError.php
│  │        │  │  │  └─ SkippedWithMessageException.php
│  │        │  │  ├─ UnknownClassOrInterfaceException.php
│  │        │  │  └─ UnknownTypeException.php
│  │        │  ├─ ExecutionOrderDependency.php
│  │        │  ├─ MockObject
│  │        │  │  ├─ ConfigurableMethod.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ BadMethodCallException.php
│  │        │  │  │  ├─ CannotCloneTestDoubleForReadonlyClassException.php
│  │        │  │  │  ├─ CannotUseOnlyMethodsException.php
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  ├─ IncompatibleReturnValueException.php
│  │        │  │  │  ├─ MatchBuilderNotFoundException.php
│  │        │  │  │  ├─ MatcherAlreadyRegisteredException.php
│  │        │  │  │  ├─ MethodCannotBeConfiguredException.php
│  │        │  │  │  ├─ MethodNameAlreadyConfiguredException.php
│  │        │  │  │  ├─ MethodNameNotConfiguredException.php
│  │        │  │  │  ├─ MethodParametersAlreadyConfiguredException.php
│  │        │  │  │  ├─ NeverReturningMethodException.php
│  │        │  │  │  ├─ NoMoreReturnValuesConfiguredException.php
│  │        │  │  │  ├─ ReturnValueNotConfiguredException.php
│  │        │  │  │  └─ RuntimeException.php
│  │        │  │  ├─ Generator
│  │        │  │  │  ├─ Exception
│  │        │  │  │  │  ├─ CannotUseAddMethodsException.php
│  │        │  │  │  │  ├─ ClassIsEnumerationException.php
│  │        │  │  │  │  ├─ ClassIsFinalException.php
│  │        │  │  │  │  ├─ DuplicateMethodException.php
│  │        │  │  │  │  ├─ Exception.php
│  │        │  │  │  │  ├─ InvalidMethodNameException.php
│  │        │  │  │  │  ├─ NameAlreadyInUseException.php
│  │        │  │  │  │  ├─ OriginalConstructorInvocationRequiredException.php
│  │        │  │  │  │  ├─ ReflectionException.php
│  │        │  │  │  │  ├─ RuntimeException.php
│  │        │  │  │  │  ├─ SoapExtensionNotAvailableException.php
│  │        │  │  │  │  ├─ UnknownClassException.php
│  │        │  │  │  │  ├─ UnknownInterfaceException.php
│  │        │  │  │  │  ├─ UnknownTraitException.php
│  │        │  │  │  │  └─ UnknownTypeException.php
│  │        │  │  │  ├─ Generator.php
│  │        │  │  │  ├─ HookedProperty.php
│  │        │  │  │  ├─ HookedPropertyGenerator.php
│  │        │  │  │  ├─ MockClass.php
│  │        │  │  │  ├─ MockMethod.php
│  │        │  │  │  ├─ MockMethodSet.php
│  │        │  │  │  ├─ MockTrait.php
│  │        │  │  │  ├─ MockType.php
│  │        │  │  │  ├─ TemplateLoader.php
│  │        │  │  │  └─ templates
│  │        │  │  │     ├─ deprecation.tpl
│  │        │  │  │     ├─ doubled_method.tpl
│  │        │  │  │     ├─ doubled_static_method.tpl
│  │        │  │  │     ├─ intersection.tpl
│  │        │  │  │     ├─ proxied_method.tpl
│  │        │  │  │     ├─ test_double_class.tpl
│  │        │  │  │     ├─ trait_class.tpl
│  │        │  │  │     ├─ wsdl_class.tpl
│  │        │  │  │     └─ wsdl_method.tpl
│  │        │  │  ├─ MockBuilder.php
│  │        │  │  └─ Runtime
│  │        │  │     ├─ Api
│  │        │  │     │  ├─ DoubledCloneMethod.php
│  │        │  │     │  ├─ ErrorCloneMethod.php
│  │        │  │     │  ├─ GeneratedAsMockObject.php
│  │        │  │     │  ├─ GeneratedAsTestStub.php
│  │        │  │     │  ├─ Method.php
│  │        │  │     │  ├─ MockObjectApi.php
│  │        │  │     │  ├─ MutableStubApi.php
│  │        │  │     │  ├─ ProxiedCloneMethod.php
│  │        │  │     │  ├─ StubApi.php
│  │        │  │     │  └─ TestDoubleState.php
│  │        │  │     ├─ Builder
│  │        │  │     │  ├─ Identity.php
│  │        │  │     │  ├─ InvocationMocker.php
│  │        │  │     │  ├─ InvocationStubber.php
│  │        │  │     │  ├─ MethodNameMatch.php
│  │        │  │     │  ├─ ParametersMatch.php
│  │        │  │     │  └─ Stub.php
│  │        │  │     ├─ Interface
│  │        │  │     │  ├─ MockObject.php
│  │        │  │     │  ├─ MockObjectInternal.php
│  │        │  │     │  ├─ Stub.php
│  │        │  │     │  └─ StubInternal.php
│  │        │  │     ├─ Invocation.php
│  │        │  │     ├─ InvocationHandler.php
│  │        │  │     ├─ Matcher.php
│  │        │  │     ├─ MethodNameConstraint.php
│  │        │  │     ├─ PropertyHook
│  │        │  │     │  ├─ PropertyGetHook.php
│  │        │  │     │  ├─ PropertyHook.php
│  │        │  │     │  └─ PropertySetHook.php
│  │        │  │     ├─ ReturnValueGenerator.php
│  │        │  │     ├─ Rule
│  │        │  │     │  ├─ AnyInvokedCount.php
│  │        │  │     │  ├─ AnyParameters.php
│  │        │  │     │  ├─ InvocationOrder.php
│  │        │  │     │  ├─ InvokedAtLeastCount.php
│  │        │  │     │  ├─ InvokedAtLeastOnce.php
│  │        │  │     │  ├─ InvokedAtMostCount.php
│  │        │  │     │  ├─ InvokedCount.php
│  │        │  │     │  ├─ MethodName.php
│  │        │  │     │  ├─ Parameters.php
│  │        │  │     │  └─ ParametersRule.php
│  │        │  │     └─ Stub
│  │        │  │        ├─ ConsecutiveCalls.php
│  │        │  │        ├─ Exception.php
│  │        │  │        ├─ ReturnArgument.php
│  │        │  │        ├─ ReturnCallback.php
│  │        │  │        ├─ ReturnReference.php
│  │        │  │        ├─ ReturnSelf.php
│  │        │  │        ├─ ReturnStub.php
│  │        │  │        ├─ ReturnValueMap.php
│  │        │  │        └─ Stub.php
│  │        │  ├─ NativeType.php
│  │        │  ├─ Reorderable.php
│  │        │  ├─ SelfDescribing.php
│  │        │  ├─ Test.php
│  │        │  ├─ TestBuilder.php
│  │        │  ├─ TestCase.php
│  │        │  ├─ TestRunner
│  │        │  │  ├─ ChildProcessResultProcessor.php
│  │        │  │  ├─ IsolatedTestRunner.php
│  │        │  │  ├─ IsolatedTestRunnerRegistry.php
│  │        │  │  ├─ SeparateProcessTestRunner.php
│  │        │  │  ├─ TestRunner.php
│  │        │  │  └─ templates
│  │        │  │     ├─ class.tpl
│  │        │  │     └─ method.tpl
│  │        │  ├─ TestSize
│  │        │  │  ├─ Known.php
│  │        │  │  ├─ Large.php
│  │        │  │  ├─ Medium.php
│  │        │  │  ├─ Small.php
│  │        │  │  ├─ TestSize.php
│  │        │  │  └─ Unknown.php
│  │        │  ├─ TestStatus
│  │        │  │  ├─ Deprecation.php
│  │        │  │  ├─ Error.php
│  │        │  │  ├─ Failure.php
│  │        │  │  ├─ Incomplete.php
│  │        │  │  ├─ Known.php
│  │        │  │  ├─ Notice.php
│  │        │  │  ├─ Risky.php
│  │        │  │  ├─ Skipped.php
│  │        │  │  ├─ Success.php
│  │        │  │  ├─ TestStatus.php
│  │        │  │  ├─ Unknown.php
│  │        │  │  └─ Warning.php
│  │        │  ├─ TestSuite.php
│  │        │  └─ TestSuiteIterator.php
│  │        ├─ Logging
│  │        │  ├─ EventLogger.php
│  │        │  ├─ JUnit
│  │        │  │  ├─ JunitXmlLogger.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ Subscriber.php
│  │        │  │     ├─ TestErroredSubscriber.php
│  │        │  │     ├─ TestFailedSubscriber.php
│  │        │  │     ├─ TestFinishedSubscriber.php
│  │        │  │     ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │     ├─ TestPreparationFailedSubscriber.php
│  │        │  │     ├─ TestPreparationStartedSubscriber.php
│  │        │  │     ├─ TestPreparedSubscriber.php
│  │        │  │     ├─ TestPrintedUnexpectedOutputSubscriber.php
│  │        │  │     ├─ TestRunnerExecutionFinishedSubscriber.php
│  │        │  │     ├─ TestSkippedSubscriber.php
│  │        │  │     ├─ TestSuiteFinishedSubscriber.php
│  │        │  │     └─ TestSuiteStartedSubscriber.php
│  │        │  ├─ TeamCity
│  │        │  │  ├─ Subscriber
│  │        │  │  │  ├─ Subscriber.php
│  │        │  │  │  ├─ TestConsideredRiskySubscriber.php
│  │        │  │  │  ├─ TestErroredSubscriber.php
│  │        │  │  │  ├─ TestFailedSubscriber.php
│  │        │  │  │  ├─ TestFinishedSubscriber.php
│  │        │  │  │  ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │  │  ├─ TestPreparedSubscriber.php
│  │        │  │  │  ├─ TestRunnerExecutionFinishedSubscriber.php
│  │        │  │  │  ├─ TestSkippedSubscriber.php
│  │        │  │  │  ├─ TestSuiteBeforeFirstTestMethodErroredSubscriber.php
│  │        │  │  │  ├─ TestSuiteFinishedSubscriber.php
│  │        │  │  │  ├─ TestSuiteSkippedSubscriber.php
│  │        │  │  │  └─ TestSuiteStartedSubscriber.php
│  │        │  │  └─ TeamCityLogger.php
│  │        │  └─ TestDox
│  │        │     ├─ HtmlRenderer.php
│  │        │     ├─ NamePrettifier.php
│  │        │     ├─ PlainTextRenderer.php
│  │        │     └─ TestResult
│  │        │        ├─ Subscriber
│  │        │        │  ├─ Subscriber.php
│  │        │        │  ├─ TestConsideredRiskySubscriber.php
│  │        │        │  ├─ TestErroredSubscriber.php
│  │        │        │  ├─ TestFailedSubscriber.php
│  │        │        │  ├─ TestFinishedSubscriber.php
│  │        │        │  ├─ TestMarkedIncompleteSubscriber.php
│  │        │        │  ├─ TestPassedSubscriber.php
│  │        │        │  ├─ TestPreparedSubscriber.php
│  │        │        │  ├─ TestSkippedSubscriber.php
│  │        │        │  ├─ TestTriggeredDeprecationSubscriber.php
│  │        │        │  ├─ TestTriggeredNoticeSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpunitDeprecationSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpunitErrorSubscriber.php
│  │        │        │  ├─ TestTriggeredPhpunitWarningSubscriber.php
│  │        │        │  └─ TestTriggeredWarningSubscriber.php
│  │        │        ├─ TestResult.php
│  │        │        ├─ TestResultCollection.php
│  │        │        ├─ TestResultCollectionIterator.php
│  │        │        └─ TestResultCollector.php
│  │        ├─ Metadata
│  │        │  ├─ After.php
│  │        │  ├─ AfterClass.php
│  │        │  ├─ Api
│  │        │  │  ├─ CodeCoverage.php
│  │        │  │  ├─ DataProvider.php
│  │        │  │  ├─ Dependencies.php
│  │        │  │  ├─ Groups.php
│  │        │  │  ├─ HookMethods.php
│  │        │  │  └─ Requirements.php
│  │        │  ├─ BackupGlobals.php
│  │        │  ├─ BackupStaticProperties.php
│  │        │  ├─ Before.php
│  │        │  ├─ BeforeClass.php
│  │        │  ├─ Covers.php
│  │        │  ├─ CoversClass.php
│  │        │  ├─ CoversDefaultClass.php
│  │        │  ├─ CoversFunction.php
│  │        │  ├─ CoversMethod.php
│  │        │  ├─ CoversNothing.php
│  │        │  ├─ CoversTrait.php
│  │        │  ├─ DataProvider.php
│  │        │  ├─ DependsOnClass.php
│  │        │  ├─ DependsOnMethod.php
│  │        │  ├─ DisableReturnValueGenerationForTestDoubles.php
│  │        │  ├─ DoesNotPerformAssertions.php
│  │        │  ├─ Exception
│  │        │  │  ├─ AnnotationsAreNotSupportedForInternalClassesException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ InvalidAttributeException.php
│  │        │  │  ├─ InvalidVersionRequirementException.php
│  │        │  │  ├─ NoVersionRequirementException.php
│  │        │  │  └─ ReflectionException.php
│  │        │  ├─ ExcludeGlobalVariableFromBackup.php
│  │        │  ├─ ExcludeStaticPropertyFromBackup.php
│  │        │  ├─ Group.php
│  │        │  ├─ IgnoreDeprecations.php
│  │        │  ├─ IgnorePhpunitDeprecations.php
│  │        │  ├─ Metadata.php
│  │        │  ├─ MetadataCollection.php
│  │        │  ├─ MetadataCollectionIterator.php
│  │        │  ├─ Parser
│  │        │  │  ├─ Annotation
│  │        │  │  │  ├─ DocBlock.php
│  │        │  │  │  └─ Registry.php
│  │        │  │  ├─ AnnotationParser.php
│  │        │  │  ├─ AttributeParser.php
│  │        │  │  ├─ CachingParser.php
│  │        │  │  ├─ Parser.php
│  │        │  │  ├─ ParserChain.php
│  │        │  │  └─ Registry.php
│  │        │  ├─ PostCondition.php
│  │        │  ├─ PreCondition.php
│  │        │  ├─ PreserveGlobalState.php
│  │        │  ├─ RequiresFunction.php
│  │        │  ├─ RequiresMethod.php
│  │        │  ├─ RequiresOperatingSystem.php
│  │        │  ├─ RequiresOperatingSystemFamily.php
│  │        │  ├─ RequiresPhp.php
│  │        │  ├─ RequiresPhpExtension.php
│  │        │  ├─ RequiresPhpunit.php
│  │        │  ├─ RequiresPhpunitExtension.php
│  │        │  ├─ RequiresSetting.php
│  │        │  ├─ RunClassInSeparateProcess.php
│  │        │  ├─ RunInSeparateProcess.php
│  │        │  ├─ RunTestsInSeparateProcesses.php
│  │        │  ├─ Test.php
│  │        │  ├─ TestDox.php
│  │        │  ├─ TestWith.php
│  │        │  ├─ Uses.php
│  │        │  ├─ UsesClass.php
│  │        │  ├─ UsesDefaultClass.php
│  │        │  ├─ UsesFunction.php
│  │        │  ├─ UsesMethod.php
│  │        │  ├─ UsesTrait.php
│  │        │  ├─ Version
│  │        │  │  ├─ ComparisonRequirement.php
│  │        │  │  ├─ ConstraintRequirement.php
│  │        │  │  └─ Requirement.php
│  │        │  └─ WithoutErrorHandler.php
│  │        ├─ Runner
│  │        │  ├─ Baseline
│  │        │  │  ├─ Baseline.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ CannotLoadBaselineException.php
│  │        │  │  │  ├─ CannotWriteBaselineException.php
│  │        │  │  │  └─ FileDoesNotHaveLineException.php
│  │        │  │  ├─ Generator.php
│  │        │  │  ├─ Issue.php
│  │        │  │  ├─ Reader.php
│  │        │  │  ├─ RelativePathCalculator.php
│  │        │  │  ├─ Subscriber
│  │        │  │  │  ├─ Subscriber.php
│  │        │  │  │  ├─ TestTriggeredDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │  │  │  └─ TestTriggeredWarningSubscriber.php
│  │        │  │  └─ Writer.php
│  │        │  ├─ CodeCoverage.php
│  │        │  ├─ DeprecationCollector
│  │        │  │  ├─ Collector.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ InIsolationCollector.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ Subscriber.php
│  │        │  │     ├─ TestPreparedSubscriber.php
│  │        │  │     └─ TestTriggeredDeprecationSubscriber.php
│  │        │  ├─ ErrorHandler.php
│  │        │  ├─ Exception
│  │        │  │  ├─ ClassCannotBeFoundException.php
│  │        │  │  ├─ ClassDoesNotExtendTestCaseException.php
│  │        │  │  ├─ ClassIsAbstractException.php
│  │        │  │  ├─ DirectoryDoesNotExistException.php
│  │        │  │  ├─ ErrorException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ FileDoesNotExistException.php
│  │        │  │  ├─ InvalidOrderException.php
│  │        │  │  ├─ InvalidPhptFileException.php
│  │        │  │  ├─ ParameterDoesNotExistException.php
│  │        │  │  ├─ PhptExternalFileCannotBeLoadedException.php
│  │        │  │  └─ UnsupportedPhptSectionException.php
│  │        │  ├─ Extension
│  │        │  │  ├─ Extension.php
│  │        │  │  ├─ ExtensionBootstrapper.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ ParameterCollection.php
│  │        │  │  └─ PharLoader.php
│  │        │  ├─ Filter
│  │        │  │  ├─ ExcludeGroupFilterIterator.php
│  │        │  │  ├─ ExcludeNameFilterIterator.php
│  │        │  │  ├─ Factory.php
│  │        │  │  ├─ GroupFilterIterator.php
│  │        │  │  ├─ IncludeGroupFilterIterator.php
│  │        │  │  ├─ IncludeNameFilterIterator.php
│  │        │  │  ├─ NameFilterIterator.php
│  │        │  │  └─ TestIdFilterIterator.php
│  │        │  ├─ GarbageCollection
│  │        │  │  ├─ GarbageCollectionHandler.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ ExecutionFinishedSubscriber.php
│  │        │  │     ├─ ExecutionStartedSubscriber.php
│  │        │  │     ├─ Subscriber.php
│  │        │  │     └─ TestFinishedSubscriber.php
│  │        │  ├─ HookMethod
│  │        │  │  ├─ HookMethod.php
│  │        │  │  └─ HookMethodCollection.php
│  │        │  ├─ IssueFilter.php
│  │        │  ├─ PHPT
│  │        │  │  ├─ PhptTestCase.php
│  │        │  │  └─ templates
│  │        │  │     └─ phpt.tpl
│  │        │  ├─ ResultCache
│  │        │  │  ├─ DefaultResultCache.php
│  │        │  │  ├─ NullResultCache.php
│  │        │  │  ├─ ResultCache.php
│  │        │  │  ├─ ResultCacheHandler.php
│  │        │  │  ├─ ResultCacheId.php
│  │        │  │  └─ Subscriber
│  │        │  │     ├─ Subscriber.php
│  │        │  │     ├─ TestConsideredRiskySubscriber.php
│  │        │  │     ├─ TestErroredSubscriber.php
│  │        │  │     ├─ TestFailedSubscriber.php
│  │        │  │     ├─ TestFinishedSubscriber.php
│  │        │  │     ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │     ├─ TestPreparedSubscriber.php
│  │        │  │     ├─ TestSkippedSubscriber.php
│  │        │  │     ├─ TestSuiteFinishedSubscriber.php
│  │        │  │     └─ TestSuiteStartedSubscriber.php
│  │        │  ├─ TestResult
│  │        │  │  ├─ Collector.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ Issue.php
│  │        │  │  ├─ PassedTests.php
│  │        │  │  ├─ Subscriber
│  │        │  │  │  ├─ AfterTestClassMethodErroredSubscriber.php
│  │        │  │  │  ├─ BeforeTestClassMethodErroredSubscriber.php
│  │        │  │  │  ├─ ExecutionStartedSubscriber.php
│  │        │  │  │  ├─ Subscriber.php
│  │        │  │  │  ├─ TestConsideredRiskySubscriber.php
│  │        │  │  │  ├─ TestErroredSubscriber.php
│  │        │  │  │  ├─ TestFailedSubscriber.php
│  │        │  │  │  ├─ TestFinishedSubscriber.php
│  │        │  │  │  ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │  │  ├─ TestPreparedSubscriber.php
│  │        │  │  │  ├─ TestRunnerTriggeredDeprecationSubscriber.php
│  │        │  │  │  ├─ TestRunnerTriggeredWarningSubscriber.php
│  │        │  │  │  ├─ TestSkippedSubscriber.php
│  │        │  │  │  ├─ TestSuiteFinishedSubscriber.php
│  │        │  │  │  ├─ TestSuiteSkippedSubscriber.php
│  │        │  │  │  ├─ TestSuiteStartedSubscriber.php
│  │        │  │  │  ├─ TestTriggeredDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredErrorSubscriber.php
│  │        │  │  │  ├─ TestTriggeredNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpunitDeprecationSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpunitErrorSubscriber.php
│  │        │  │  │  ├─ TestTriggeredPhpunitWarningSubscriber.php
│  │        │  │  │  └─ TestTriggeredWarningSubscriber.php
│  │        │  │  └─ TestResult.php
│  │        │  ├─ TestSuiteLoader.php
│  │        │  ├─ TestSuiteSorter.php
│  │        │  └─ Version.php
│  │        ├─ TextUI
│  │        │  ├─ Application.php
│  │        │  ├─ Command
│  │        │  │  ├─ Command.php
│  │        │  │  ├─ Commands
│  │        │  │  │  ├─ AtLeastVersionCommand.php
│  │        │  │  │  ├─ CheckPhpConfigurationCommand.php
│  │        │  │  │  ├─ GenerateConfigurationCommand.php
│  │        │  │  │  ├─ ListGroupsCommand.php
│  │        │  │  │  ├─ ListTestFilesCommand.php
│  │        │  │  │  ├─ ListTestSuitesCommand.php
│  │        │  │  │  ├─ ListTestsAsTextCommand.php
│  │        │  │  │  ├─ ListTestsAsXmlCommand.php
│  │        │  │  │  ├─ MigrateConfigurationCommand.php
│  │        │  │  │  ├─ ShowHelpCommand.php
│  │        │  │  │  ├─ ShowVersionCommand.php
│  │        │  │  │  ├─ VersionCheckCommand.php
│  │        │  │  │  └─ WarmCodeCoverageCacheCommand.php
│  │        │  │  └─ Result.php
│  │        │  ├─ Configuration
│  │        │  │  ├─ Builder.php
│  │        │  │  ├─ Cli
│  │        │  │  │  ├─ Builder.php
│  │        │  │  │  ├─ Configuration.php
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  └─ XmlConfigurationFileFinder.php
│  │        │  │  ├─ CodeCoverageFilterRegistry.php
│  │        │  │  ├─ Configuration.php
│  │        │  │  ├─ Exception
│  │        │  │  │  ├─ CannotFindSchemaException.php
│  │        │  │  │  ├─ CodeCoverageReportNotConfiguredException.php
│  │        │  │  │  ├─ ConfigurationCannotBeBuiltException.php
│  │        │  │  │  ├─ Exception.php
│  │        │  │  │  ├─ FilterNotConfiguredException.php
│  │        │  │  │  ├─ LoggingNotConfiguredException.php
│  │        │  │  │  ├─ NoBaselineException.php
│  │        │  │  │  ├─ NoBootstrapException.php
│  │        │  │  │  ├─ NoCacheDirectoryException.php
│  │        │  │  │  ├─ NoConfigurationFileException.php
│  │        │  │  │  ├─ NoCoverageCacheDirectoryException.php
│  │        │  │  │  ├─ NoCustomCssFileException.php
│  │        │  │  │  ├─ NoDefaultTestSuiteException.php
│  │        │  │  │  ├─ NoPharExtensionDirectoryException.php
│  │        │  │  │  └─ SpecificDeprecationToStopOnNotConfiguredException.php
│  │        │  │  ├─ Merger.php
│  │        │  │  ├─ PhpHandler.php
│  │        │  │  ├─ Registry.php
│  │        │  │  ├─ SourceFilter.php
│  │        │  │  ├─ SourceMapper.php
│  │        │  │  ├─ TestSuiteBuilder.php
│  │        │  │  ├─ Value
│  │        │  │  │  ├─ Constant.php
│  │        │  │  │  ├─ ConstantCollection.php
│  │        │  │  │  ├─ ConstantCollectionIterator.php
│  │        │  │  │  ├─ Directory.php
│  │        │  │  │  ├─ DirectoryCollection.php
│  │        │  │  │  ├─ DirectoryCollectionIterator.php
│  │        │  │  │  ├─ ExtensionBootstrap.php
│  │        │  │  │  ├─ ExtensionBootstrapCollection.php
│  │        │  │  │  ├─ ExtensionBootstrapCollectionIterator.php
│  │        │  │  │  ├─ File.php
│  │        │  │  │  ├─ FileCollection.php
│  │        │  │  │  ├─ FileCollectionIterator.php
│  │        │  │  │  ├─ FilterDirectory.php
│  │        │  │  │  ├─ FilterDirectoryCollection.php
│  │        │  │  │  ├─ FilterDirectoryCollectionIterator.php
│  │        │  │  │  ├─ Group.php
│  │        │  │  │  ├─ GroupCollection.php
│  │        │  │  │  ├─ GroupCollectionIterator.php
│  │        │  │  │  ├─ IniSetting.php
│  │        │  │  │  ├─ IniSettingCollection.php
│  │        │  │  │  ├─ IniSettingCollectionIterator.php
│  │        │  │  │  ├─ Php.php
│  │        │  │  │  ├─ Source.php
│  │        │  │  │  ├─ TestDirectory.php
│  │        │  │  │  ├─ TestDirectoryCollection.php
│  │        │  │  │  ├─ TestDirectoryCollectionIterator.php
│  │        │  │  │  ├─ TestFile.php
│  │        │  │  │  ├─ TestFileCollection.php
│  │        │  │  │  ├─ TestFileCollectionIterator.php
│  │        │  │  │  ├─ TestSuite.php
│  │        │  │  │  ├─ TestSuiteCollection.php
│  │        │  │  │  ├─ TestSuiteCollectionIterator.php
│  │        │  │  │  ├─ Variable.php
│  │        │  │  │  ├─ VariableCollection.php
│  │        │  │  │  └─ VariableCollectionIterator.php
│  │        │  │  └─ Xml
│  │        │  │     ├─ CodeCoverage
│  │        │  │     │  ├─ CodeCoverage.php
│  │        │  │     │  └─ Report
│  │        │  │     │     ├─ Clover.php
│  │        │  │     │     ├─ Cobertura.php
│  │        │  │     │     ├─ Crap4j.php
│  │        │  │     │     ├─ Html.php
│  │        │  │     │     ├─ Php.php
│  │        │  │     │     ├─ Text.php
│  │        │  │     │     └─ Xml.php
│  │        │  │     ├─ Configuration.php
│  │        │  │     ├─ DefaultConfiguration.php
│  │        │  │     ├─ Exception.php
│  │        │  │     ├─ Generator.php
│  │        │  │     ├─ Groups.php
│  │        │  │     ├─ LoadedFromFileConfiguration.php
│  │        │  │     ├─ Loader.php
│  │        │  │     ├─ Logging
│  │        │  │     │  ├─ Junit.php
│  │        │  │     │  ├─ Logging.php
│  │        │  │     │  ├─ TeamCity.php
│  │        │  │     │  └─ TestDox
│  │        │  │     │     ├─ Html.php
│  │        │  │     │     └─ Text.php
│  │        │  │     ├─ Migration
│  │        │  │     │  ├─ MigrationBuilder.php
│  │        │  │     │  ├─ MigrationException.php
│  │        │  │     │  ├─ Migrations
│  │        │  │     │  │  ├─ ConvertLogTypes.php
│  │        │  │     │  │  ├─ CoverageCloverToReport.php
│  │        │  │     │  │  ├─ CoverageCrap4jToReport.php
│  │        │  │     │  │  ├─ CoverageHtmlToReport.php
│  │        │  │     │  │  ├─ CoveragePhpToReport.php
│  │        │  │     │  │  ├─ CoverageTextToReport.php
│  │        │  │     │  │  ├─ CoverageXmlToReport.php
│  │        │  │     │  │  ├─ IntroduceCacheDirectoryAttribute.php
│  │        │  │     │  │  ├─ IntroduceCoverageElement.php
│  │        │  │     │  │  ├─ LogToReportMigration.php
│  │        │  │     │  │  ├─ Migration.php
│  │        │  │     │  │  ├─ MoveAttributesFromFilterWhitelistToCoverage.php
│  │        │  │     │  │  ├─ MoveAttributesFromRootToCoverage.php
│  │        │  │     │  │  ├─ MoveCoverageDirectoriesToSource.php
│  │        │  │     │  │  ├─ MoveWhitelistExcludesToCoverage.php
│  │        │  │     │  │  ├─ MoveWhitelistIncludesToCoverage.php
│  │        │  │     │  │  ├─ RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
│  │        │  │     │  │  ├─ RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
│  │        │  │     │  │  ├─ RemoveCacheResultFileAttribute.php
│  │        │  │     │  │  ├─ RemoveCacheTokensAttribute.php
│  │        │  │     │  │  ├─ RemoveConversionToExceptionsAttributes.php
│  │        │  │     │  │  ├─ RemoveCoverageElementCacheDirectoryAttribute.php
│  │        │  │     │  │  ├─ RemoveCoverageElementProcessUncoveredFilesAttribute.php
│  │        │  │     │  │  ├─ RemoveEmptyFilter.php
│  │        │  │     │  │  ├─ RemoveListeners.php
│  │        │  │     │  │  ├─ RemoveLogTypes.php
│  │        │  │     │  │  ├─ RemoveLoggingElements.php
│  │        │  │     │  │  ├─ RemoveNoInteractionAttribute.php
│  │        │  │     │  │  ├─ RemovePrinterAttributes.php
│  │        │  │     │  │  ├─ RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute.php
│  │        │  │     │  │  ├─ RemoveTestDoxGroupsElement.php
│  │        │  │     │  │  ├─ RemoveTestSuiteLoaderAttributes.php
│  │        │  │     │  │  ├─ RemoveVerboseAttribute.php
│  │        │  │     │  │  ├─ RenameBackupStaticAttributesAttribute.php
│  │        │  │     │  │  ├─ RenameBeStrictAboutCoversAnnotationAttribute.php
│  │        │  │     │  │  ├─ RenameForceCoversAnnotationAttribute.php
│  │        │  │     │  │  ├─ ReplaceRestrictDeprecationsWithIgnoreDeprecations.php
│  │        │  │     │  │  └─ UpdateSchemaLocation.php
│  │        │  │     │  ├─ Migrator.php
│  │        │  │     │  └─ SnapshotNodeList.php
│  │        │  │     ├─ PHPUnit.php
│  │        │  │     ├─ SchemaDetector
│  │        │  │     │  ├─ FailedSchemaDetectionResult.php
│  │        │  │     │  ├─ SchemaDetectionResult.php
│  │        │  │     │  ├─ SchemaDetector.php
│  │        │  │     │  └─ SuccessfulSchemaDetectionResult.php
│  │        │  │     ├─ SchemaFinder.php
│  │        │  │     ├─ TestSuiteMapper.php
│  │        │  │     └─ Validator
│  │        │  │        ├─ ValidationResult.php
│  │        │  │        └─ Validator.php
│  │        │  ├─ Exception
│  │        │  │  ├─ CannotOpenSocketException.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ InvalidSocketException.php
│  │        │  │  ├─ RuntimeException.php
│  │        │  │  ├─ TestDirectoryNotFoundException.php
│  │        │  │  └─ TestFileNotFoundException.php
│  │        │  ├─ Help.php
│  │        │  ├─ Output
│  │        │  │  ├─ Default
│  │        │  │  │  ├─ ProgressPrinter
│  │        │  │  │  │  ├─ ProgressPrinter.php
│  │        │  │  │  │  └─ Subscriber
│  │        │  │  │  │     ├─ BeforeTestClassMethodErroredSubscriber.php
│  │        │  │  │  │     ├─ Subscriber.php
│  │        │  │  │  │     ├─ TestConsideredRiskySubscriber.php
│  │        │  │  │  │     ├─ TestErroredSubscriber.php
│  │        │  │  │  │     ├─ TestFailedSubscriber.php
│  │        │  │  │  │     ├─ TestFinishedSubscriber.php
│  │        │  │  │  │     ├─ TestMarkedIncompleteSubscriber.php
│  │        │  │  │  │     ├─ TestPreparedSubscriber.php
│  │        │  │  │  │     ├─ TestRunnerExecutionStartedSubscriber.php
│  │        │  │  │  │     ├─ TestSkippedSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredDeprecationSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredErrorSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredNoticeSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpDeprecationSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpNoticeSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpWarningSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpunitDeprecationSubscriber.php
│  │        │  │  │  │     ├─ TestTriggeredPhpunitWarningSubscriber.php
│  │        │  │  │  │     └─ TestTriggeredWarningSubscriber.php
│  │        │  │  │  ├─ ResultPrinter.php
│  │        │  │  │  └─ UnexpectedOutputPrinter.php
│  │        │  │  ├─ Facade.php
│  │        │  │  ├─ Printer
│  │        │  │  │  ├─ DefaultPrinter.php
│  │        │  │  │  ├─ NullPrinter.php
│  │        │  │  │  └─ Printer.php
│  │        │  │  ├─ SummaryPrinter.php
│  │        │  │  └─ TestDox
│  │        │  │     └─ ResultPrinter.php
│  │        │  ├─ ShellExitCodeCalculator.php
│  │        │  ├─ TestRunner.php
│  │        │  └─ TestSuiteFilterProcessor.php
│  │        └─ Util
│  │           ├─ Cloner.php
│  │           ├─ Color.php
│  │           ├─ Exception
│  │           │  ├─ Exception.php
│  │           │  ├─ InvalidDirectoryException.php
│  │           │  ├─ InvalidJsonException.php
│  │           │  ├─ InvalidVersionOperatorException.php
│  │           │  ├─ PhpProcessException.php
│  │           │  └─ XmlException.php
│  │           ├─ ExcludeList.php
│  │           ├─ Exporter.php
│  │           ├─ Filesystem.php
│  │           ├─ Filter.php
│  │           ├─ GlobalState.php
│  │           ├─ Http
│  │           │  ├─ Downloader.php
│  │           │  └─ PhpDownloader.php
│  │           ├─ Json.php
│  │           ├─ PHP
│  │           │  ├─ DefaultJobRunner.php
│  │           │  ├─ Job.php
│  │           │  ├─ JobRunner.php
│  │           │  ├─ JobRunnerRegistry.php
│  │           │  └─ Result.php
│  │           ├─ Reflection.php
│  │           ├─ Test.php
│  │           ├─ ThrowableToStringMapper.php
│  │           ├─ VersionComparisonOperator.php
│  │           └─ Xml
│  │              ├─ Loader.php
│  │              └─ Xml.php
│  ├─ psr
│  │  ├─ cache
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.txt
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CacheException.php
│  │  │     ├─ CacheItemInterface.php
│  │  │     ├─ CacheItemPoolInterface.php
│  │  │     └─ InvalidArgumentException.php
│  │  ├─ clock
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ ClockInterface.php
│  │  ├─ container
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ContainerExceptionInterface.php
│  │  │     ├─ ContainerInterface.php
│  │  │     └─ NotFoundExceptionInterface.php
│  │  ├─ event-dispatcher
│  │  │  ├─ .editorconfig
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ EventDispatcherInterface.php
│  │  │     ├─ ListenerProviderInterface.php
│  │  │     └─ StoppableEventInterface.php
│  │  ├─ http-client
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ClientExceptionInterface.php
│  │  │     ├─ ClientInterface.php
│  │  │     ├─ NetworkExceptionInterface.php
│  │  │     └─ RequestExceptionInterface.php
│  │  ├─ http-factory
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ RequestFactoryInterface.php
│  │  │     ├─ ResponseFactoryInterface.php
│  │  │     ├─ ServerRequestFactoryInterface.php
│  │  │     ├─ StreamFactoryInterface.php
│  │  │     ├─ UploadedFileFactoryInterface.php
│  │  │     └─ UriFactoryInterface.php
│  │  ├─ http-message
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  ├─ PSR7-Interfaces.md
│  │  │  │  └─ PSR7-Usage.md
│  │  │  └─ src
│  │  │     ├─ MessageInterface.php
│  │  │     ├─ RequestInterface.php
│  │  │     ├─ ResponseInterface.php
│  │  │     ├─ ServerRequestInterface.php
│  │  │     ├─ StreamInterface.php
│  │  │     ├─ UploadedFileInterface.php
│  │  │     └─ UriInterface.php
│  │  ├─ log
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AbstractLogger.php
│  │  │     ├─ InvalidArgumentException.php
│  │  │     ├─ LogLevel.php
│  │  │     ├─ LoggerAwareInterface.php
│  │  │     ├─ LoggerAwareTrait.php
│  │  │     ├─ LoggerInterface.php
│  │  │     ├─ LoggerTrait.php
│  │  │     └─ NullLogger.php
│  │  └─ simple-cache
│  │     ├─ .editorconfig
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ CacheException.php
│  │        ├─ CacheInterface.php
│  │        └─ InvalidArgumentException.php
│  ├─ psy
│  │  └─ psysh
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ bin
│  │     │  ├─ fetch-manual
│  │     │  └─ psysh
│  │     ├─ build
│  │     │  ├─ composer.json
│  │     │  └─ composer.lock
│  │     ├─ composer.json
│  │     ├─ src
│  │     │  ├─ CodeCleaner
│  │     │  │  ├─ AbstractClassPass.php
│  │     │  │  ├─ AssignThisVariablePass.php
│  │     │  │  ├─ CallTimePassByReferencePass.php
│  │     │  │  ├─ CalledClassPass.php
│  │     │  │  ├─ CodeCleanerPass.php
│  │     │  │  ├─ EmptyArrayDimFetchPass.php
│  │     │  │  ├─ ExitPass.php
│  │     │  │  ├─ FinalClassPass.php
│  │     │  │  ├─ FunctionContextPass.php
│  │     │  │  ├─ FunctionReturnInWriteContextPass.php
│  │     │  │  ├─ ImplicitReturnPass.php
│  │     │  │  ├─ ImplicitUsePass.php
│  │     │  │  ├─ IssetPass.php
│  │     │  │  ├─ LabelContextPass.php
│  │     │  │  ├─ LeavePsyshAlonePass.php
│  │     │  │  ├─ ListPass.php
│  │     │  │  ├─ LoopContextPass.php
│  │     │  │  ├─ MagicConstantsPass.php
│  │     │  │  ├─ NamespaceAwarePass.php
│  │     │  │  ├─ NamespacePass.php
│  │     │  │  ├─ NoReturnValue.php
│  │     │  │  ├─ PassableByReferencePass.php
│  │     │  │  ├─ RequirePass.php
│  │     │  │  ├─ ReturnTypePass.php
│  │     │  │  ├─ StrictTypesPass.php
│  │     │  │  ├─ UseStatementPass.php
│  │     │  │  ├─ ValidClassNamePass.php
│  │     │  │  ├─ ValidConstructorPass.php
│  │     │  │  └─ ValidFunctionNamePass.php
│  │     │  ├─ CodeCleaner.php
│  │     │  ├─ CodeCleanerAware.php
│  │     │  ├─ Command
│  │     │  │  ├─ BufferCommand.php
│  │     │  │  ├─ ClearCommand.php
│  │     │  │  ├─ CodeArgumentParser.php
│  │     │  │  ├─ Command.php
│  │     │  │  ├─ DocCommand.php
│  │     │  │  ├─ DumpCommand.php
│  │     │  │  ├─ EditCommand.php
│  │     │  │  ├─ ExitCommand.php
│  │     │  │  ├─ HelpCommand.php
│  │     │  │  ├─ HistoryCommand.php
│  │     │  │  ├─ ListCommand
│  │     │  │  │  ├─ ClassConstantEnumerator.php
│  │     │  │  │  ├─ ClassEnumerator.php
│  │     │  │  │  ├─ ConstantEnumerator.php
│  │     │  │  │  ├─ Enumerator.php
│  │     │  │  │  ├─ FunctionEnumerator.php
│  │     │  │  │  ├─ GlobalVariableEnumerator.php
│  │     │  │  │  ├─ MethodEnumerator.php
│  │     │  │  │  ├─ PropertyEnumerator.php
│  │     │  │  │  └─ VariableEnumerator.php
│  │     │  │  ├─ ListCommand.php
│  │     │  │  ├─ ParseCommand.php
│  │     │  │  ├─ PsyVersionCommand.php
│  │     │  │  ├─ ReflectingCommand.php
│  │     │  │  ├─ ShowCommand.php
│  │     │  │  ├─ SudoCommand.php
│  │     │  │  ├─ ThrowUpCommand.php
│  │     │  │  ├─ TimeitCommand
│  │     │  │  │  └─ TimeitVisitor.php
│  │     │  │  ├─ TimeitCommand.php
│  │     │  │  ├─ TraceCommand.php
│  │     │  │  ├─ WhereamiCommand.php
│  │     │  │  ├─ WtfCommand.php
│  │     │  │  └─ YoloCommand.php
│  │     │  ├─ ConfigPaths.php
│  │     │  ├─ Configuration.php
│  │     │  ├─ Context.php
│  │     │  ├─ ContextAware.php
│  │     │  ├─ EnvInterface.php
│  │     │  ├─ Exception
│  │     │  │  ├─ BreakException.php
│  │     │  │  ├─ DeprecatedException.php
│  │     │  │  ├─ ErrorException.php
│  │     │  │  ├─ Exception.php
│  │     │  │  ├─ FatalErrorException.php
│  │     │  │  ├─ InterruptException.php
│  │     │  │  ├─ InvalidManualException.php
│  │     │  │  ├─ ParseErrorException.php
│  │     │  │  ├─ RuntimeException.php
│  │     │  │  ├─ ThrowUpException.php
│  │     │  │  └─ UnexpectedTargetException.php
│  │     │  ├─ ExecutionClosure.php
│  │     │  ├─ ExecutionLoop
│  │     │  │  ├─ AbstractListener.php
│  │     │  │  ├─ ExecutionLoggingListener.php
│  │     │  │  ├─ InputLoggingListener.php
│  │     │  │  ├─ Listener.php
│  │     │  │  ├─ ProcessForker.php
│  │     │  │  ├─ RunkitReloader.php
│  │     │  │  ├─ SignalHandler.php
│  │     │  │  ├─ UopzReloader.php
│  │     │  │  └─ UopzReloaderVisitor.php
│  │     │  ├─ ExecutionLoopClosure.php
│  │     │  ├─ Formatter
│  │     │  │  ├─ CodeFormatter.php
│  │     │  │  ├─ DocblockFormatter.php
│  │     │  │  ├─ LinkFormatter.php
│  │     │  │  ├─ ManualFormatter.php
│  │     │  │  ├─ ManualWrapper.php
│  │     │  │  ├─ ReflectorFormatter.php
│  │     │  │  ├─ SignatureFormatter.php
│  │     │  │  └─ TraceFormatter.php
│  │     │  ├─ Input
│  │     │  │  ├─ CodeArgument.php
│  │     │  │  ├─ FilterOptions.php
│  │     │  │  ├─ ShellInput.php
│  │     │  │  └─ SilentInput.php
│  │     │  ├─ Logger
│  │     │  │  └─ CallbackLogger.php
│  │     │  ├─ Manual
│  │     │  │  ├─ ManualInterface.php
│  │     │  │  ├─ V2Manual.php
│  │     │  │  └─ V3Manual.php
│  │     │  ├─ ManualUpdater
│  │     │  │  ├─ Checker.php
│  │     │  │  ├─ GitHubChecker.php
│  │     │  │  ├─ Installer.php
│  │     │  │  ├─ IntervalChecker.php
│  │     │  │  └─ ManualUpdate.php
│  │     │  ├─ Output
│  │     │  │  ├─ OutputPager.php
│  │     │  │  ├─ PassthruPager.php
│  │     │  │  ├─ ProcOutputPager.php
│  │     │  │  ├─ ShellOutput.php
│  │     │  │  └─ Theme.php
│  │     │  ├─ OutputAware.php
│  │     │  ├─ ParserFactory.php
│  │     │  ├─ Readline
│  │     │  │  ├─ GNUReadline.php
│  │     │  │  ├─ Hoa
│  │     │  │  │  ├─ Autocompleter.php
│  │     │  │  │  ├─ AutocompleterAggregate.php
│  │     │  │  │  ├─ AutocompleterPath.php
│  │     │  │  │  ├─ AutocompleterWord.php
│  │     │  │  │  ├─ Console.php
│  │     │  │  │  ├─ ConsoleCursor.php
│  │     │  │  │  ├─ ConsoleException.php
│  │     │  │  │  ├─ ConsoleInput.php
│  │     │  │  │  ├─ ConsoleOutput.php
│  │     │  │  │  ├─ ConsoleProcessus.php
│  │     │  │  │  ├─ ConsoleTput.php
│  │     │  │  │  ├─ ConsoleWindow.php
│  │     │  │  │  ├─ Event.php
│  │     │  │  │  ├─ EventBucket.php
│  │     │  │  │  ├─ EventException.php
│  │     │  │  │  ├─ EventListenable.php
│  │     │  │  │  ├─ EventListener.php
│  │     │  │  │  ├─ EventListens.php
│  │     │  │  │  ├─ EventSource.php
│  │     │  │  │  ├─ Exception.php
│  │     │  │  │  ├─ ExceptionIdle.php
│  │     │  │  │  ├─ File.php
│  │     │  │  │  ├─ FileDirectory.php
│  │     │  │  │  ├─ FileDoesNotExistException.php
│  │     │  │  │  ├─ FileException.php
│  │     │  │  │  ├─ FileFinder.php
│  │     │  │  │  ├─ FileGeneric.php
│  │     │  │  │  ├─ FileLink.php
│  │     │  │  │  ├─ FileLinkRead.php
│  │     │  │  │  ├─ FileLinkReadWrite.php
│  │     │  │  │  ├─ FileRead.php
│  │     │  │  │  ├─ FileReadWrite.php
│  │     │  │  │  ├─ IStream.php
│  │     │  │  │  ├─ IteratorFileSystem.php
│  │     │  │  │  ├─ IteratorRecursiveDirectory.php
│  │     │  │  │  ├─ IteratorSplFileInfo.php
│  │     │  │  │  ├─ Protocol.php
│  │     │  │  │  ├─ ProtocolException.php
│  │     │  │  │  ├─ ProtocolNode.php
│  │     │  │  │  ├─ ProtocolNodeLibrary.php
│  │     │  │  │  ├─ ProtocolWrapper.php
│  │     │  │  │  ├─ Readline.php
│  │     │  │  │  ├─ Stream.php
│  │     │  │  │  ├─ StreamBufferable.php
│  │     │  │  │  ├─ StreamContext.php
│  │     │  │  │  ├─ StreamException.php
│  │     │  │  │  ├─ StreamIn.php
│  │     │  │  │  ├─ StreamLockable.php
│  │     │  │  │  ├─ StreamOut.php
│  │     │  │  │  ├─ StreamPathable.php
│  │     │  │  │  ├─ StreamPointable.php
│  │     │  │  │  ├─ StreamStatable.php
│  │     │  │  │  ├─ StreamTouchable.php
│  │     │  │  │  ├─ Terminfo
│  │     │  │  │  │  ├─ 77
│  │     │  │  │  │  │  └─ windows-ansi
│  │     │  │  │  │  └─ 78
│  │     │  │  │  │     ├─ xterm
│  │     │  │  │  │     └─ xterm-256color
│  │     │  │  │  ├─ Ustring.php
│  │     │  │  │  └─ Xcallable.php
│  │     │  │  ├─ Libedit.php
│  │     │  │  ├─ Readline.php
│  │     │  │  ├─ Transient.php
│  │     │  │  └─ Userland.php
│  │     │  ├─ Reflection
│  │     │  │  ├─ ReflectionConstant.php
│  │     │  │  ├─ ReflectionLanguageConstruct.php
│  │     │  │  ├─ ReflectionLanguageConstructParameter.php
│  │     │  │  └─ ReflectionNamespace.php
│  │     │  ├─ Shell.php
│  │     │  ├─ ShellLogger.php
│  │     │  ├─ Sudo
│  │     │  │  └─ SudoVisitor.php
│  │     │  ├─ Sudo.php
│  │     │  ├─ SuperglobalsEnv.php
│  │     │  ├─ SystemEnv.php
│  │     │  ├─ TabCompletion
│  │     │  │  ├─ AutoCompleter.php
│  │     │  │  ├─ AutoloadWarmer
│  │     │  │  │  ├─ AutoloadWarmerInterface.php
│  │     │  │  │  └─ ComposerAutoloadWarmer.php
│  │     │  │  └─ Matcher
│  │     │  │     ├─ AbstractContextAwareMatcher.php
│  │     │  │     ├─ AbstractDefaultParametersMatcher.php
│  │     │  │     ├─ AbstractMatcher.php
│  │     │  │     ├─ ClassAttributesMatcher.php
│  │     │  │     ├─ ClassMethodDefaultParametersMatcher.php
│  │     │  │     ├─ ClassMethodsMatcher.php
│  │     │  │     ├─ ClassNamesMatcher.php
│  │     │  │     ├─ CommandsMatcher.php
│  │     │  │     ├─ ConstantsMatcher.php
│  │     │  │     ├─ FunctionDefaultParametersMatcher.php
│  │     │  │     ├─ FunctionsMatcher.php
│  │     │  │     ├─ KeywordsMatcher.php
│  │     │  │     ├─ MongoClientMatcher.php
│  │     │  │     ├─ MongoDatabaseMatcher.php
│  │     │  │     ├─ ObjectAttributesMatcher.php
│  │     │  │     ├─ ObjectMethodDefaultParametersMatcher.php
│  │     │  │     ├─ ObjectMethodsMatcher.php
│  │     │  │     └─ VariablesMatcher.php
│  │     │  ├─ Util
│  │     │  │  ├─ DependencyChecker.php
│  │     │  │  ├─ Docblock.php
│  │     │  │  ├─ Json.php
│  │     │  │  ├─ Mirror.php
│  │     │  │  └─ Str.php
│  │     │  ├─ VarDumper
│  │     │  │  ├─ Cloner.php
│  │     │  │  ├─ Dumper.php
│  │     │  │  ├─ Presenter.php
│  │     │  │  └─ PresenterAware.php
│  │     │  ├─ VersionUpdater
│  │     │  │  ├─ Checker.php
│  │     │  │  ├─ Downloader
│  │     │  │  │  ├─ CurlDownloader.php
│  │     │  │  │  ├─ Factory.php
│  │     │  │  │  └─ FileDownloader.php
│  │     │  │  ├─ Downloader.php
│  │     │  │  ├─ GitHubChecker.php
│  │     │  │  ├─ Installer.php
│  │     │  │  ├─ IntervalChecker.php
│  │     │  │  ├─ NoopChecker.php
│  │     │  │  └─ SelfUpdate.php
│  │     │  └─ functions.php
│  │     └─ test-logger-demo.php
│  ├─ ralouphie
│  │  └─ getallheaders
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ getallheaders.php
│  ├─ ramsey
│  │  ├─ collection
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ AbstractArray.php
│  │  │     ├─ AbstractCollection.php
│  │  │     ├─ AbstractSet.php
│  │  │     ├─ ArrayInterface.php
│  │  │     ├─ Collection.php
│  │  │     ├─ CollectionInterface.php
│  │  │     ├─ DoubleEndedQueue.php
│  │  │     ├─ DoubleEndedQueueInterface.php
│  │  │     ├─ Exception
│  │  │     │  ├─ CollectionException.php
│  │  │     │  ├─ CollectionMismatchException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ InvalidPropertyOrMethod.php
│  │  │     │  ├─ NoSuchElementException.php
│  │  │     │  ├─ OutOfBoundsException.php
│  │  │     │  └─ UnsupportedOperationException.php
│  │  │     ├─ GenericArray.php
│  │  │     ├─ Map
│  │  │     │  ├─ AbstractMap.php
│  │  │     │  ├─ AbstractTypedMap.php
│  │  │     │  ├─ AssociativeArrayMap.php
│  │  │     │  ├─ MapInterface.php
│  │  │     │  ├─ NamedParameterMap.php
│  │  │     │  ├─ TypedMap.php
│  │  │     │  └─ TypedMapInterface.php
│  │  │     ├─ Queue.php
│  │  │     ├─ QueueInterface.php
│  │  │     ├─ Set.php
│  │  │     ├─ Sort.php
│  │  │     └─ Tool
│  │  │        ├─ TypeTrait.php
│  │  │        ├─ ValueExtractorTrait.php
│  │  │        └─ ValueToStringTrait.php
│  │  └─ uuid
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ BinaryUtils.php
│  │        ├─ Builder
│  │        │  ├─ BuilderCollection.php
│  │        │  ├─ DefaultUuidBuilder.php
│  │        │  ├─ DegradedUuidBuilder.php
│  │        │  ├─ FallbackBuilder.php
│  │        │  └─ UuidBuilderInterface.php
│  │        ├─ Codec
│  │        │  ├─ CodecInterface.php
│  │        │  ├─ GuidStringCodec.php
│  │        │  ├─ OrderedTimeCodec.php
│  │        │  ├─ StringCodec.php
│  │        │  ├─ TimestampFirstCombCodec.php
│  │        │  └─ TimestampLastCombCodec.php
│  │        ├─ Converter
│  │        │  ├─ Number
│  │        │  │  ├─ BigNumberConverter.php
│  │        │  │  ├─ DegradedNumberConverter.php
│  │        │  │  └─ GenericNumberConverter.php
│  │        │  ├─ NumberConverterInterface.php
│  │        │  ├─ Time
│  │        │  │  ├─ BigNumberTimeConverter.php
│  │        │  │  ├─ DegradedTimeConverter.php
│  │        │  │  ├─ GenericTimeConverter.php
│  │        │  │  ├─ PhpTimeConverter.php
│  │        │  │  └─ UnixTimeConverter.php
│  │        │  └─ TimeConverterInterface.php
│  │        ├─ DegradedUuid.php
│  │        ├─ DeprecatedUuidInterface.php
│  │        ├─ DeprecatedUuidMethodsTrait.php
│  │        ├─ Exception
│  │        │  ├─ BuilderNotFoundException.php
│  │        │  ├─ DateTimeException.php
│  │        │  ├─ DceSecurityException.php
│  │        │  ├─ InvalidArgumentException.php
│  │        │  ├─ InvalidBytesException.php
│  │        │  ├─ InvalidUuidStringException.php
│  │        │  ├─ NameException.php
│  │        │  ├─ NodeException.php
│  │        │  ├─ RandomSourceException.php
│  │        │  ├─ TimeSourceException.php
│  │        │  ├─ UnableToBuildUuidException.php
│  │        │  ├─ UnsupportedOperationException.php
│  │        │  └─ UuidExceptionInterface.php
│  │        ├─ FeatureSet.php
│  │        ├─ Fields
│  │        │  ├─ FieldsInterface.php
│  │        │  └─ SerializableFieldsTrait.php
│  │        ├─ Generator
│  │        │  ├─ CombGenerator.php
│  │        │  ├─ DceSecurityGenerator.php
│  │        │  ├─ DceSecurityGeneratorInterface.php
│  │        │  ├─ DefaultNameGenerator.php
│  │        │  ├─ DefaultTimeGenerator.php
│  │        │  ├─ NameGeneratorFactory.php
│  │        │  ├─ NameGeneratorInterface.php
│  │        │  ├─ PeclUuidNameGenerator.php
│  │        │  ├─ PeclUuidRandomGenerator.php
│  │        │  ├─ PeclUuidTimeGenerator.php
│  │        │  ├─ RandomBytesGenerator.php
│  │        │  ├─ RandomGeneratorFactory.php
│  │        │  ├─ RandomGeneratorInterface.php
│  │        │  ├─ RandomLibAdapter.php
│  │        │  ├─ TimeGeneratorFactory.php
│  │        │  ├─ TimeGeneratorInterface.php
│  │        │  └─ UnixTimeGenerator.php
│  │        ├─ Guid
│  │        │  ├─ Fields.php
│  │        │  ├─ Guid.php
│  │        │  └─ GuidBuilder.php
│  │        ├─ Lazy
│  │        │  └─ LazyUuidFromString.php
│  │        ├─ Math
│  │        │  ├─ BrickMathCalculator.php
│  │        │  ├─ CalculatorInterface.php
│  │        │  └─ RoundingMode.php
│  │        ├─ Nonstandard
│  │        │  ├─ Fields.php
│  │        │  ├─ Uuid.php
│  │        │  ├─ UuidBuilder.php
│  │        │  └─ UuidV6.php
│  │        ├─ Provider
│  │        │  ├─ Dce
│  │        │  │  └─ SystemDceSecurityProvider.php
│  │        │  ├─ DceSecurityProviderInterface.php
│  │        │  ├─ Node
│  │        │  │  ├─ FallbackNodeProvider.php
│  │        │  │  ├─ NodeProviderCollection.php
│  │        │  │  ├─ RandomNodeProvider.php
│  │        │  │  ├─ StaticNodeProvider.php
│  │        │  │  └─ SystemNodeProvider.php
│  │        │  ├─ NodeProviderInterface.php
│  │        │  ├─ Time
│  │        │  │  ├─ FixedTimeProvider.php
│  │        │  │  └─ SystemTimeProvider.php
│  │        │  └─ TimeProviderInterface.php
│  │        ├─ Rfc4122
│  │        │  ├─ Fields.php
│  │        │  ├─ FieldsInterface.php
│  │        │  ├─ MaxTrait.php
│  │        │  ├─ MaxUuid.php
│  │        │  ├─ NilTrait.php
│  │        │  ├─ NilUuid.php
│  │        │  ├─ TimeTrait.php
│  │        │  ├─ UuidBuilder.php
│  │        │  ├─ UuidInterface.php
│  │        │  ├─ UuidV1.php
│  │        │  ├─ UuidV2.php
│  │        │  ├─ UuidV3.php
│  │        │  ├─ UuidV4.php
│  │        │  ├─ UuidV5.php
│  │        │  ├─ UuidV6.php
│  │        │  ├─ UuidV7.php
│  │        │  ├─ UuidV8.php
│  │        │  ├─ Validator.php
│  │        │  ├─ VariantTrait.php
│  │        │  └─ VersionTrait.php
│  │        ├─ Type
│  │        │  ├─ Decimal.php
│  │        │  ├─ Hexadecimal.php
│  │        │  ├─ Integer.php
│  │        │  ├─ NumberInterface.php
│  │        │  ├─ Time.php
│  │        │  └─ TypeInterface.php
│  │        ├─ Uuid.php
│  │        ├─ UuidFactory.php
│  │        ├─ UuidFactoryInterface.php
│  │        ├─ UuidInterface.php
│  │        ├─ Validator
│  │        │  ├─ GenericValidator.php
│  │        │  └─ ValidatorInterface.php
│  │        └─ functions.php
│  ├─ sebastian
│  │  ├─ cli-parser
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Parser.php
│  │  │     └─ exceptions
│  │  │        ├─ AmbiguousOptionException.php
│  │  │        ├─ Exception.php
│  │  │        ├─ OptionDoesNotAllowArgumentException.php
│  │  │        ├─ RequiredOptionArgumentMissingException.php
│  │  │        └─ UnknownOptionException.php
│  │  ├─ code-unit
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ClassMethodUnit.php
│  │  │     ├─ ClassUnit.php
│  │  │     ├─ CodeUnit.php
│  │  │     ├─ CodeUnitCollection.php
│  │  │     ├─ CodeUnitCollectionIterator.php
│  │  │     ├─ FileUnit.php
│  │  │     ├─ FunctionUnit.php
│  │  │     ├─ InterfaceMethodUnit.php
│  │  │     ├─ InterfaceUnit.php
│  │  │     ├─ Mapper.php
│  │  │     ├─ TraitMethodUnit.php
│  │  │     ├─ TraitUnit.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        ├─ InvalidCodeUnitException.php
│  │  │        ├─ NoTraitException.php
│  │  │        └─ ReflectionException.php
│  │  ├─ code-unit-reverse-lookup
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Wizard.php
│  │  ├─ comparator
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ ArrayComparator.php
│  │  │     ├─ Comparator.php
│  │  │     ├─ ComparisonFailure.php
│  │  │     ├─ DOMNodeComparator.php
│  │  │     ├─ DateTimeComparator.php
│  │  │     ├─ EnumerationComparator.php
│  │  │     ├─ ExceptionComparator.php
│  │  │     ├─ Factory.php
│  │  │     ├─ MockObjectComparator.php
│  │  │     ├─ NumberComparator.php
│  │  │     ├─ NumericComparator.php
│  │  │     ├─ ObjectComparator.php
│  │  │     ├─ ResourceComparator.php
│  │  │     ├─ ScalarComparator.php
│  │  │     ├─ SplObjectStorageComparator.php
│  │  │     ├─ TypeComparator.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        └─ RuntimeException.php
│  │  ├─ complexity
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Calculator.php
│  │  │     ├─ Complexity
│  │  │     │  ├─ Complexity.php
│  │  │     │  ├─ ComplexityCollection.php
│  │  │     │  └─ ComplexityCollectionIterator.php
│  │  │     ├─ Exception
│  │  │     │  ├─ Exception.php
│  │  │     │  └─ RuntimeException.php
│  │  │     └─ Visitor
│  │  │        ├─ ComplexityCalculatingVisitor.php
│  │  │        └─ CyclomaticComplexityCalculatingVisitor.php
│  │  ├─ diff
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Chunk.php
│  │  │     ├─ Diff.php
│  │  │     ├─ Differ.php
│  │  │     ├─ Exception
│  │  │     │  ├─ ConfigurationException.php
│  │  │     │  ├─ Exception.php
│  │  │     │  └─ InvalidArgumentException.php
│  │  │     ├─ Line.php
│  │  │     ├─ LongestCommonSubsequenceCalculator.php
│  │  │     ├─ MemoryEfficientLongestCommonSubsequenceCalculator.php
│  │  │     ├─ Output
│  │  │     │  ├─ AbstractChunkOutputBuilder.php
│  │  │     │  ├─ DiffOnlyOutputBuilder.php
│  │  │     │  ├─ DiffOutputBuilderInterface.php
│  │  │     │  ├─ StrictUnifiedDiffOutputBuilder.php
│  │  │     │  └─ UnifiedDiffOutputBuilder.php
│  │  │     ├─ Parser.php
│  │  │     └─ TimeEfficientLongestCommonSubsequenceCalculator.php
│  │  ├─ environment
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Console.php
│  │  │     └─ Runtime.php
│  │  ├─ exporter
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Exporter.php
│  │  ├─ global-state
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ CodeExporter.php
│  │  │     ├─ ExcludeList.php
│  │  │     ├─ Restorer.php
│  │  │     ├─ Snapshot.php
│  │  │     └─ exceptions
│  │  │        ├─ Exception.php
│  │  │        └─ RuntimeException.php
│  │  ├─ lines-of-code
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Counter.php
│  │  │     ├─ Exception
│  │  │     │  ├─ Exception.php
│  │  │     │  ├─ IllogicalValuesException.php
│  │  │     │  ├─ NegativeValueException.php
│  │  │     │  └─ RuntimeException.php
│  │  │     ├─ LineCountingVisitor.php
│  │  │     └─ LinesOfCode.php
│  │  ├─ object-enumerator
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Enumerator.php
│  │  ├─ object-reflector
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ ObjectReflector.php
│  │  ├─ recursion-context
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     └─ Context.php
│  │  ├─ type
│  │  │  ├─ ChangeLog.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Parameter.php
│  │  │     ├─ ReflectionMapper.php
│  │  │     ├─ TypeName.php
│  │  │     ├─ exception
│  │  │     │  ├─ Exception.php
│  │  │     │  └─ RuntimeException.php
│  │  │     └─ type
│  │  │        ├─ CallableType.php
│  │  │        ├─ FalseType.php
│  │  │        ├─ GenericObjectType.php
│  │  │        ├─ IntersectionType.php
│  │  │        ├─ IterableType.php
│  │  │        ├─ MixedType.php
│  │  │        ├─ NeverType.php
│  │  │        ├─ NullType.php
│  │  │        ├─ ObjectType.php
│  │  │        ├─ SimpleType.php
│  │  │        ├─ StaticType.php
│  │  │        ├─ TrueType.php
│  │  │        ├─ Type.php
│  │  │        ├─ UnionType.php
│  │  │        ├─ UnknownType.php
│  │  │        └─ VoidType.php
│  │  └─ version
│  │     ├─ ChangeLog.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ Version.php
│  ├─ spatie
│  │  ├─ laravel-activitylog
│  │  │  ├─ .php_cs.dist
│  │  │  ├─ .php_cs.laravel
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ UPGRADING.md
│  │  │  ├─ art
│  │  │  │  ├─ README.md
│  │  │  │  ├─ logomark.png
│  │  │  │  ├─ logomark.svg
│  │  │  │  ├─ logomark@2x.png
│  │  │  │  ├─ logomark@3x.png
│  │  │  │  ├─ logomark@4x.png
│  │  │  │  ├─ palette
│  │  │  │  │  ├─ 100.png
│  │  │  │  │  ├─ 200.png
│  │  │  │  │  ├─ 300.png
│  │  │  │  │  ├─ 400.png
│  │  │  │  │  ├─ 500.png
│  │  │  │  │  ├─ 600.png
│  │  │  │  │  ├─ 700.png
│  │  │  │  │  ├─ 800.png
│  │  │  │  │  └─ 900.png
│  │  │  │  └─ socialcard.png
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ activitylog.php
│  │  │  ├─ database
│  │  │  │  └─ migrations
│  │  │  │     ├─ add_batch_uuid_column_to_activity_log_table.php.stub
│  │  │  │     ├─ add_event_column_to_activity_log_table.php.stub
│  │  │  │     └─ create_activity_log_table.php.stub
│  │  │  └─ src
│  │  │     ├─ ActivityLogStatus.php
│  │  │     ├─ ActivityLogger.php
│  │  │     ├─ ActivitylogServiceProvider.php
│  │  │     ├─ CauserResolver.php
│  │  │     ├─ CleanActivitylogCommand.php
│  │  │     ├─ Contracts
│  │  │     │  ├─ Activity.php
│  │  │     │  └─ LoggablePipe.php
│  │  │     ├─ EventLogBag.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ CouldNotLogActivity.php
│  │  │     │  ├─ CouldNotLogChanges.php
│  │  │     │  └─ InvalidConfiguration.php
│  │  │     ├─ Facades
│  │  │     │  ├─ Activity.php
│  │  │     │  ├─ CauserResolver.php
│  │  │     │  └─ LogBatch.php
│  │  │     ├─ LogBatch.php
│  │  │     ├─ LogOptions.php
│  │  │     ├─ Models
│  │  │     │  └─ Activity.php
│  │  │     ├─ PendingActivityLog.php
│  │  │     ├─ Traits
│  │  │     │  ├─ CausesActivity.php
│  │  │     │  └─ LogsActivity.php
│  │  │     └─ helpers.php
│  │  ├─ laravel-package-tools
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ src
│  │  │     ├─ Commands
│  │  │     │  ├─ Concerns
│  │  │     │  │  ├─ AskToRunMigrations.php
│  │  │     │  │  ├─ AskToStarRepoOnGitHub.php
│  │  │     │  │  ├─ PublishesResources.php
│  │  │     │  │  ├─ SupportsServiceProviderInApp.php
│  │  │     │  │  └─ SupportsStartWithEndWith.php
│  │  │     │  └─ InstallCommand.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ Package
│  │  │     │  │  ├─ HasAssets.php
│  │  │     │  │  ├─ HasBladeComponents.php
│  │  │     │  │  ├─ HasCommands.php
│  │  │     │  │  ├─ HasConfigs.php
│  │  │     │  │  ├─ HasInertia.php
│  │  │     │  │  ├─ HasInstallCommand.php
│  │  │     │  │  ├─ HasMigrations.php
│  │  │     │  │  ├─ HasRoutes.php
│  │  │     │  │  ├─ HasServiceProviders.php
│  │  │     │  │  ├─ HasTranslations.php
│  │  │     │  │  ├─ HasViewComposers.php
│  │  │     │  │  ├─ HasViewSharedData.php
│  │  │     │  │  └─ HasViews.php
│  │  │     │  └─ PackageServiceProvider
│  │  │     │     ├─ ProcessAssets.php
│  │  │     │     ├─ ProcessBladeComponents.php
│  │  │     │     ├─ ProcessCommands.php
│  │  │     │     ├─ ProcessConfigs.php
│  │  │     │     ├─ ProcessInertia.php
│  │  │     │     ├─ ProcessMigrations.php
│  │  │     │     ├─ ProcessRoutes.php
│  │  │     │     ├─ ProcessServiceProviders.php
│  │  │     │     ├─ ProcessTranslations.php
│  │  │     │     ├─ ProcessViewComposers.php
│  │  │     │     ├─ ProcessViewSharedData.php
│  │  │     │     └─ ProcessViews.php
│  │  │     ├─ Exceptions
│  │  │     │  └─ InvalidPackage.php
│  │  │     ├─ Package.php
│  │  │     └─ PackageServiceProvider.php
│  │  └─ laravel-permission
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ permission.php
│  │     ├─ database
│  │     │  └─ migrations
│  │     │     ├─ add_teams_fields.php.stub
│  │     │     └─ create_permission_tables.php.stub
│  │     ├─ ide.json
│  │     ├─ pint.json
│  │     └─ src
│  │        ├─ Commands
│  │        │  ├─ AssignRole.php
│  │        │  ├─ CacheReset.php
│  │        │  ├─ CreatePermission.php
│  │        │  ├─ CreateRole.php
│  │        │  ├─ Show.php
│  │        │  └─ UpgradeForTeams.php
│  │        ├─ Contracts
│  │        │  ├─ Permission.php
│  │        │  ├─ PermissionsTeamResolver.php
│  │        │  ├─ Role.php
│  │        │  └─ Wildcard.php
│  │        ├─ DefaultTeamResolver.php
│  │        ├─ Events
│  │        │  ├─ PermissionAttached.php
│  │        │  ├─ PermissionDetached.php
│  │        │  ├─ RoleAttached.php
│  │        │  └─ RoleDetached.php
│  │        ├─ Exceptions
│  │        │  ├─ GuardDoesNotMatch.php
│  │        │  ├─ PermissionAlreadyExists.php
│  │        │  ├─ PermissionDoesNotExist.php
│  │        │  ├─ RoleAlreadyExists.php
│  │        │  ├─ RoleDoesNotExist.php
│  │        │  ├─ UnauthorizedException.php
│  │        │  ├─ WildcardPermissionInvalidArgument.php
│  │        │  ├─ WildcardPermissionNotImplementsContract.php
│  │        │  └─ WildcardPermissionNotProperlyFormatted.php
│  │        ├─ Guard.php
│  │        ├─ Middleware
│  │        │  ├─ PermissionMiddleware.php
│  │        │  ├─ RoleMiddleware.php
│  │        │  └─ RoleOrPermissionMiddleware.php
│  │        ├─ Models
│  │        │  ├─ Permission.php
│  │        │  └─ Role.php
│  │        ├─ PermissionRegistrar.php
│  │        ├─ PermissionServiceProvider.php
│  │        ├─ Traits
│  │        │  ├─ HasPermissions.php
│  │        │  ├─ HasRoles.php
│  │        │  └─ RefreshesPermissionCache.php
│  │        ├─ WildcardPermission.php
│  │        └─ helpers.php
│  ├─ staabm
│  │  └─ side-effects-detector
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ lib
│  │        ├─ SideEffect.php
│  │        ├─ SideEffectsDetector.php
│  │        └─ functionMetadata.php
│  ├─ swagger-api
│  │  └─ swagger-ui
│  │     ├─ .agignore
│  │     ├─ .browserslistrc
│  │     ├─ .commitlintrc.json
│  │     ├─ .dockerignore
│  │     ├─ .editorconfig
│  │     ├─ .eslintignore
│  │     ├─ .eslintrc.js
│  │     ├─ .husky
│  │     │  ├─ commit-msg
│  │     │  └─ pre-commit
│  │     ├─ .lintstagedrc
│  │     ├─ .npmignore
│  │     ├─ .npmrc
│  │     ├─ .nvmrc
│  │     ├─ .prettierrc.yaml
│  │     ├─ .releaserc
│  │     ├─ Dockerfile
│  │     ├─ LICENSE
│  │     ├─ NOTICE
│  │     ├─ README.md
│  │     ├─ SECURITY.md
│  │     ├─ babel.config.js
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  ├─ .eslintrc
│  │     │  └─ jest
│  │     │     ├─ jest.artifact.config.js
│  │     │     └─ jest.unit.config.js
│  │     ├─ cypress.config.js
│  │     ├─ dev-helpers
│  │     │  ├─ dev-helper-initializer.js
│  │     │  ├─ index.html
│  │     │  ├─ oauth2-redirect.html
│  │     │  ├─ oauth2-redirect.js
│  │     │  └─ style.css
│  │     ├─ dist
│  │     │  ├─ favicon-16x16.png
│  │     │  ├─ favicon-32x32.png
│  │     │  ├─ index.css
│  │     │  ├─ index.html
│  │     │  ├─ oauth2-redirect.html
│  │     │  ├─ oauth2-redirect.js
│  │     │  ├─ swagger-initializer.js
│  │     │  ├─ swagger-ui-bundle.js
│  │     │  ├─ swagger-ui-es-bundle-core.js
│  │     │  ├─ swagger-ui-es-bundle.js
│  │     │  ├─ swagger-ui-standalone-preset.js
│  │     │  ├─ swagger-ui.css
│  │     │  └─ swagger-ui.js
│  │     ├─ docker
│  │     │  ├─ configurator
│  │     │  │  ├─ helpers.js
│  │     │  │  ├─ index.js
│  │     │  │  ├─ oauth.js
│  │     │  │  ├─ translator.js
│  │     │  │  └─ variables.js
│  │     │  ├─ cors.conf
│  │     │  ├─ default.conf.template
│  │     │  ├─ docker-entrypoint.d
│  │     │  │  └─ 40-swagger-ui.sh
│  │     │  └─ embedding.conf
│  │     ├─ flavors
│  │     │  └─ swagger-ui-react
│  │     │     ├─ README.md
│  │     │     ├─ dist
│  │     │     │  └─ .npmrc
│  │     │     ├─ index.jsx
│  │     │     └─ release
│  │     │        ├─ create-manifest.js
│  │     │        ├─ run.sh
│  │     │        └─ template.json
│  │     ├─ package-lock.json
│  │     ├─ package.json
│  │     ├─ release
│  │     │  ├─ .release-it.json
│  │     │  ├─ check-for-breaking-changes.sh
│  │     │  └─ get-changelog.sh
│  │     ├─ snapcraft.yaml
│  │     ├─ src
│  │     │  ├─ .eslintrc
│  │     │  ├─ core
│  │     │  │  ├─ assets
│  │     │  │  │  └─ rolling-load.svg
│  │     │  │  ├─ components
│  │     │  │  │  ├─ app.jsx
│  │     │  │  │  ├─ auth
│  │     │  │  │  │  ├─ api-key-auth.jsx
│  │     │  │  │  │  ├─ auth-item.jsx
│  │     │  │  │  │  ├─ authorization-popup.jsx
│  │     │  │  │  │  ├─ authorize-btn.jsx
│  │     │  │  │  │  ├─ authorize-operation-btn.jsx
│  │     │  │  │  │  ├─ auths.jsx
│  │     │  │  │  │  ├─ basic-auth.jsx
│  │     │  │  │  │  ├─ error.jsx
│  │     │  │  │  │  └─ oauth2.jsx
│  │     │  │  │  ├─ clear.jsx
│  │     │  │  │  ├─ contact.jsx
│  │     │  │  │  ├─ content-type.jsx
│  │     │  │  │  ├─ copy-to-clipboard-btn.jsx
│  │     │  │  │  ├─ curl.jsx
│  │     │  │  │  ├─ debug.jsx
│  │     │  │  │  ├─ deep-link.jsx
│  │     │  │  │  ├─ errors.jsx
│  │     │  │  │  ├─ example.jsx
│  │     │  │  │  ├─ examples-select-value-retainer.jsx
│  │     │  │  │  ├─ examples-select.jsx
│  │     │  │  │  ├─ execute.jsx
│  │     │  │  │  ├─ footer.jsx
│  │     │  │  │  ├─ headers.jsx
│  │     │  │  │  ├─ info.jsx
│  │     │  │  │  ├─ initialized-input.jsx
│  │     │  │  │  ├─ jump-to-path.jsx
│  │     │  │  │  ├─ layout-utils.jsx
│  │     │  │  │  ├─ layouts
│  │     │  │  │  │  ├─ base.jsx
│  │     │  │  │  │  └─ xpane.jsx
│  │     │  │  │  ├─ license.jsx
│  │     │  │  │  ├─ live-response.jsx
│  │     │  │  │  ├─ online-validator-badge.jsx
│  │     │  │  │  ├─ openapi-version.jsx
│  │     │  │  │  ├─ operation-extension-row.jsx
│  │     │  │  │  ├─ operation-extensions.jsx
│  │     │  │  │  ├─ operation-summary-method.jsx
│  │     │  │  │  ├─ operation-summary-path.jsx
│  │     │  │  │  ├─ operation-summary.jsx
│  │     │  │  │  ├─ operation-tag.jsx
│  │     │  │  │  ├─ operation.jsx
│  │     │  │  │  ├─ operations.jsx
│  │     │  │  │  ├─ overview.jsx
│  │     │  │  │  ├─ param-body.jsx
│  │     │  │  │  ├─ parameter-extension.jsx
│  │     │  │  │  ├─ parameter-include-empty.jsx
│  │     │  │  │  ├─ parameter-row.jsx
│  │     │  │  │  ├─ parameters
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  └─ parameters.jsx
│  │     │  │  │  ├─ property.jsx
│  │     │  │  │  ├─ providers
│  │     │  │  │  │  ├─ README.md
│  │     │  │  │  │  └─ markdown.jsx
│  │     │  │  │  ├─ response-body.jsx
│  │     │  │  │  ├─ response-extension.jsx
│  │     │  │  │  ├─ response.jsx
│  │     │  │  │  ├─ responses.jsx
│  │     │  │  │  ├─ svg-assets.jsx
│  │     │  │  │  ├─ system-wrapper.jsx
│  │     │  │  │  ├─ try-it-out-button.jsx
│  │     │  │  │  ├─ version-pragma-filter.jsx
│  │     │  │  │  └─ version-stamp.jsx
│  │     │  │  ├─ config
│  │     │  │  │  ├─ defaults.js
│  │     │  │  │  ├─ factorization
│  │     │  │  │  │  ├─ inline-plugin.js
│  │     │  │  │  │  └─ system.js
│  │     │  │  │  ├─ index.js
│  │     │  │  │  ├─ merge.js
│  │     │  │  │  ├─ sources
│  │     │  │  │  │  ├─ query.js
│  │     │  │  │  │  ├─ runtime.js
│  │     │  │  │  │  └─ url.js
│  │     │  │  │  └─ type-cast
│  │     │  │  │     ├─ index.js
│  │     │  │  │     ├─ mappings.js
│  │     │  │  │     └─ type-casters
│  │     │  │  │        ├─ array.js
│  │     │  │  │        ├─ boolean.js
│  │     │  │  │        ├─ dom-node.js
│  │     │  │  │        ├─ filter.js
│  │     │  │  │        ├─ function.js
│  │     │  │  │        ├─ nullable-array.js
│  │     │  │  │        ├─ nullable-function.js
│  │     │  │  │        ├─ nullable-string.js
│  │     │  │  │        ├─ number.js
│  │     │  │  │        ├─ object.js
│  │     │  │  │        ├─ sorter.js
│  │     │  │  │        ├─ string.js
│  │     │  │  │        ├─ syntax-highlight.js
│  │     │  │  │        └─ undefined-string.js
│  │     │  │  ├─ containers
│  │     │  │  │  ├─ OperationContainer.jsx
│  │     │  │  │  ├─ authorize-btn.jsx
│  │     │  │  │  ├─ filter.jsx
│  │     │  │  │  └─ info.jsx
│  │     │  │  ├─ index.js
│  │     │  │  ├─ oauth2-authorize.js
│  │     │  │  ├─ plugins
│  │     │  │  │  ├─ auth
│  │     │  │  │  │  ├─ actions.js
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ lock-auth-icon.jsx
│  │     │  │  │  │  │  └─ unlock-auth-icon.jsx
│  │     │  │  │  │  ├─ configs-extensions
│  │     │  │  │  │  │  └─ wrap-actions.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ reducers.js
│  │     │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  ├─ spec-extensions
│  │     │  │  │  │  │  └─ wrap-actions.js
│  │     │  │  │  │  └─ wrap-actions.js
│  │     │  │  │  ├─ configs
│  │     │  │  │  │  ├─ actions.js
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ reducers.js
│  │     │  │  │  │  └─ selectors.js
│  │     │  │  │  ├─ deep-linking
│  │     │  │  │  │  ├─ README.md
│  │     │  │  │  │  ├─ helpers.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ layout.js
│  │     │  │  │  │  ├─ operation-tag-wrapper.jsx
│  │     │  │  │  │  └─ operation-wrapper.jsx
│  │     │  │  │  ├─ download-url
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ err
│  │     │  │  │  │  ├─ actions.js
│  │     │  │  │  │  ├─ error-transformers
│  │     │  │  │  │  │  ├─ README.md
│  │     │  │  │  │  │  ├─ hook.js
│  │     │  │  │  │  │  └─ transformers
│  │     │  │  │  │  │     ├─ not-of-type.js
│  │     │  │  │  │  │     └─ parameter-oneof.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ reducers.js
│  │     │  │  │  │  └─ selectors.js
│  │     │  │  │  ├─ filter
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  └─ opsFilter.js
│  │     │  │  │  ├─ icons
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ arrow-down.jsx
│  │     │  │  │  │  │  ├─ arrow-up.jsx
│  │     │  │  │  │  │  ├─ arrow.jsx
│  │     │  │  │  │  │  ├─ close.jsx
│  │     │  │  │  │  │  ├─ copy.jsx
│  │     │  │  │  │  │  ├─ lock.jsx
│  │     │  │  │  │  │  └─ unlock.jsx
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ json-schema-2020-12
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ Accordion
│  │     │  │  │  │  │  │  ├─ Accordion.jsx
│  │     │  │  │  │  │  │  └─ _accordion.scss
│  │     │  │  │  │  │  ├─ ExpandDeepButton
│  │     │  │  │  │  │  │  ├─ ExpandDeepButton.jsx
│  │     │  │  │  │  │  │  └─ _expand-deep-button.scss
│  │     │  │  │  │  │  ├─ JSONSchema
│  │     │  │  │  │  │  │  ├─ JSONSchema.jsx
│  │     │  │  │  │  │  │  └─ _json-schema.scss
│  │     │  │  │  │  │  ├─ JSONViewer
│  │     │  │  │  │  │  │  ├─ JSONViewer.jsx
│  │     │  │  │  │  │  │  └─ _json-viewer.scss
│  │     │  │  │  │  │  ├─ _all.scss
│  │     │  │  │  │  │  ├─ _mixins.scss
│  │     │  │  │  │  │  ├─ icons
│  │     │  │  │  │  │  │  └─ ChevronRight.jsx
│  │     │  │  │  │  │  └─ keywords
│  │     │  │  │  │  │     ├─ $anchor.jsx
│  │     │  │  │  │  │     ├─ $comment.jsx
│  │     │  │  │  │  │     ├─ $defs.jsx
│  │     │  │  │  │  │     ├─ $dynamicAnchor.jsx
│  │     │  │  │  │  │     ├─ $dynamicRef.jsx
│  │     │  │  │  │  │     ├─ $id.jsx
│  │     │  │  │  │  │     ├─ $ref.jsx
│  │     │  │  │  │  │     ├─ $schema.jsx
│  │     │  │  │  │  │     ├─ $vocabulary
│  │     │  │  │  │  │     │  ├─ $vocabulary.jsx
│  │     │  │  │  │  │     │  └─ _$vocabulary.scss
│  │     │  │  │  │  │     ├─ AdditionalProperties.jsx
│  │     │  │  │  │  │     ├─ AllOf.jsx
│  │     │  │  │  │  │     ├─ AnyOf.jsx
│  │     │  │  │  │  │     ├─ Const
│  │     │  │  │  │  │     │  ├─ Const.jsx
│  │     │  │  │  │  │     │  └─ _const.scss
│  │     │  │  │  │  │     ├─ Constraint
│  │     │  │  │  │  │     │  ├─ Constraint.jsx
│  │     │  │  │  │  │     │  └─ _constraint.scss
│  │     │  │  │  │  │     ├─ Contains.jsx
│  │     │  │  │  │  │     ├─ ContentSchema.jsx
│  │     │  │  │  │  │     ├─ Default
│  │     │  │  │  │  │     │  ├─ Default.jsx
│  │     │  │  │  │  │     │  └─ _default.scss
│  │     │  │  │  │  │     ├─ DependentRequired
│  │     │  │  │  │  │     │  ├─ DependentRequired.jsx
│  │     │  │  │  │  │     │  └─ _dependent-required.scss
│  │     │  │  │  │  │     ├─ DependentSchemas.jsx
│  │     │  │  │  │  │     ├─ Deprecated.jsx
│  │     │  │  │  │  │     ├─ Description
│  │     │  │  │  │  │     │  ├─ Description.jsx
│  │     │  │  │  │  │     │  └─ _description.scss
│  │     │  │  │  │  │     ├─ Else.jsx
│  │     │  │  │  │  │     ├─ Enum
│  │     │  │  │  │  │     │  ├─ Enum.jsx
│  │     │  │  │  │  │     │  └─ _enum.scss
│  │     │  │  │  │  │     ├─ Examples
│  │     │  │  │  │  │     │  ├─ Examples.jsx
│  │     │  │  │  │  │     │  └─ _examples.scss
│  │     │  │  │  │  │     ├─ ExtensionKeywords
│  │     │  │  │  │  │     │  ├─ ExtensionKeywords.jsx
│  │     │  │  │  │  │     │  └─ _extension-keywords.scss
│  │     │  │  │  │  │     ├─ If.jsx
│  │     │  │  │  │  │     ├─ Items.jsx
│  │     │  │  │  │  │     ├─ Not.jsx
│  │     │  │  │  │  │     ├─ OneOf.jsx
│  │     │  │  │  │  │     ├─ PatternProperties
│  │     │  │  │  │  │     │  ├─ PatternProperties.jsx
│  │     │  │  │  │  │     │  └─ _pattern-properties.scss
│  │     │  │  │  │  │     ├─ PrefixItems.jsx
│  │     │  │  │  │  │     ├─ Properties
│  │     │  │  │  │  │     │  ├─ Properties.jsx
│  │     │  │  │  │  │     │  └─ _properties.scss
│  │     │  │  │  │  │     ├─ PropertyNames.jsx
│  │     │  │  │  │  │     ├─ ReadOnly.jsx
│  │     │  │  │  │  │     ├─ Then.jsx
│  │     │  │  │  │  │     ├─ Title
│  │     │  │  │  │  │     │  ├─ Title.jsx
│  │     │  │  │  │  │     │  └─ _title.scss
│  │     │  │  │  │  │     ├─ Type.jsx
│  │     │  │  │  │  │     ├─ UnevaluatedItems.jsx
│  │     │  │  │  │  │     ├─ UnevaluatedProperties.jsx
│  │     │  │  │  │  │     ├─ WriteOnly.jsx
│  │     │  │  │  │  │     └─ _all.scss
│  │     │  │  │  │  ├─ context.js
│  │     │  │  │  │  ├─ enum.js
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  ├─ hoc.jsx
│  │     │  │  │  │  ├─ hooks.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  └─ prop-types.js
│  │     │  │  │  ├─ json-schema-2020-12-samples
│  │     │  │  │  │  ├─ fn
│  │     │  │  │  │  │  ├─ api
│  │     │  │  │  │  │  │  ├─ encoderAPI.js
│  │     │  │  │  │  │  │  ├─ formatAPI.js
│  │     │  │  │  │  │  │  ├─ mediaTypeAPI.js
│  │     │  │  │  │  │  │  └─ optionAPI.js
│  │     │  │  │  │  │  ├─ class
│  │     │  │  │  │  │  │  ├─ EncoderRegistry.js
│  │     │  │  │  │  │  │  ├─ FormatRegistry.js
│  │     │  │  │  │  │  │  ├─ MediaTypeRegistry.js
│  │     │  │  │  │  │  │  ├─ OptionRegistry.js
│  │     │  │  │  │  │  │  └─ Registry.js
│  │     │  │  │  │  │  ├─ core
│  │     │  │  │  │  │  │  ├─ constants.js
│  │     │  │  │  │  │  │  ├─ example.js
│  │     │  │  │  │  │  │  ├─ merge.js
│  │     │  │  │  │  │  │  ├─ predicates.js
│  │     │  │  │  │  │  │  ├─ random.js
│  │     │  │  │  │  │  │  ├─ type.js
│  │     │  │  │  │  │  │  └─ utils.js
│  │     │  │  │  │  │  ├─ encoders
│  │     │  │  │  │  │  │  ├─ 7bit.js
│  │     │  │  │  │  │  │  ├─ 8bit.js
│  │     │  │  │  │  │  │  ├─ base16.js
│  │     │  │  │  │  │  │  ├─ base32.js
│  │     │  │  │  │  │  │  ├─ base64.js
│  │     │  │  │  │  │  │  ├─ base64url.js
│  │     │  │  │  │  │  │  ├─ binary.js
│  │     │  │  │  │  │  │  └─ quoted-printable.js
│  │     │  │  │  │  │  ├─ generators
│  │     │  │  │  │  │  │  ├─ date-time.js
│  │     │  │  │  │  │  │  ├─ date.js
│  │     │  │  │  │  │  │  ├─ double.js
│  │     │  │  │  │  │  │  ├─ duration.js
│  │     │  │  │  │  │  │  ├─ email.js
│  │     │  │  │  │  │  │  ├─ float.js
│  │     │  │  │  │  │  │  ├─ hostname.js
│  │     │  │  │  │  │  │  ├─ idn-email.js
│  │     │  │  │  │  │  │  ├─ idn-hostname.js
│  │     │  │  │  │  │  │  ├─ int32.js
│  │     │  │  │  │  │  │  ├─ int64.js
│  │     │  │  │  │  │  │  ├─ ipv4.js
│  │     │  │  │  │  │  │  ├─ ipv6.js
│  │     │  │  │  │  │  │  ├─ iri-reference.js
│  │     │  │  │  │  │  │  ├─ iri.js
│  │     │  │  │  │  │  │  ├─ json-pointer.js
│  │     │  │  │  │  │  │  ├─ media-types
│  │     │  │  │  │  │  │  │  ├─ application.js
│  │     │  │  │  │  │  │  │  ├─ audio.js
│  │     │  │  │  │  │  │  │  ├─ image.js
│  │     │  │  │  │  │  │  │  ├─ text.js
│  │     │  │  │  │  │  │  │  └─ video.js
│  │     │  │  │  │  │  │  ├─ password.js
│  │     │  │  │  │  │  │  ├─ regex.js
│  │     │  │  │  │  │  │  ├─ relative-json-pointer.js
│  │     │  │  │  │  │  │  ├─ time.js
│  │     │  │  │  │  │  │  ├─ uri-reference.js
│  │     │  │  │  │  │  │  ├─ uri-template.js
│  │     │  │  │  │  │  │  ├─ uri.js
│  │     │  │  │  │  │  │  └─ uuid.js
│  │     │  │  │  │  │  ├─ get-json-sample-schema.js
│  │     │  │  │  │  │  ├─ get-sample-schema.js
│  │     │  │  │  │  │  ├─ get-xml-sample-schema.js
│  │     │  │  │  │  │  ├─ get-yaml-sample-schema.js
│  │     │  │  │  │  │  ├─ index.js
│  │     │  │  │  │  │  ├─ main.js
│  │     │  │  │  │  │  └─ types
│  │     │  │  │  │  │     ├─ array.js
│  │     │  │  │  │  │     ├─ boolean.js
│  │     │  │  │  │  │     ├─ index.js
│  │     │  │  │  │  │     ├─ integer.js
│  │     │  │  │  │  │     ├─ null.js
│  │     │  │  │  │  │     ├─ number.js
│  │     │  │  │  │  │     ├─ object.js
│  │     │  │  │  │  │     └─ string.js
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ json-schema-5
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ array-model.jsx
│  │     │  │  │  │  │  ├─ enum-model.jsx
│  │     │  │  │  │  │  ├─ json-schema-components.jsx
│  │     │  │  │  │  │  ├─ model-collapse.jsx
│  │     │  │  │  │  │  ├─ model-example.jsx
│  │     │  │  │  │  │  ├─ model-extensions.jsx
│  │     │  │  │  │  │  ├─ model-wrapper.jsx
│  │     │  │  │  │  │  ├─ model.jsx
│  │     │  │  │  │  │  ├─ models.jsx
│  │     │  │  │  │  │  ├─ object-model.jsx
│  │     │  │  │  │  │  ├─ primitive-model.jsx
│  │     │  │  │  │  │  └─ schemes.jsx
│  │     │  │  │  │  ├─ containers
│  │     │  │  │  │  │  └─ schemes.jsx
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ json-schema-5-samples
│  │     │  │  │  │  ├─ fn
│  │     │  │  │  │  │  ├─ get-json-sample-schema.js
│  │     │  │  │  │  │  ├─ get-sample-schema.js
│  │     │  │  │  │  │  ├─ get-xml-sample-schema.js
│  │     │  │  │  │  │  ├─ get-yaml-sample-schema.js
│  │     │  │  │  │  │  └─ index.js
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ layout
│  │     │  │  │  │  ├─ actions.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ reducers.js
│  │     │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  └─ spec-extensions
│  │     │  │  │  │     └─ wrap-selector.js
│  │     │  │  │  ├─ logs
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ oas3
│  │     │  │  │  │  ├─ actions.js
│  │     │  │  │  │  ├─ auth-extensions
│  │     │  │  │  │  │  └─ wrap-selectors.js
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ auth
│  │     │  │  │  │  │  │  └─ http-auth.jsx
│  │     │  │  │  │  │  ├─ callbacks.jsx
│  │     │  │  │  │  │  ├─ index.js
│  │     │  │  │  │  │  ├─ operation-link.jsx
│  │     │  │  │  │  │  ├─ operation-servers.jsx
│  │     │  │  │  │  │  ├─ request-body-editor.jsx
│  │     │  │  │  │  │  ├─ request-body.jsx
│  │     │  │  │  │  │  ├─ servers-container.jsx
│  │     │  │  │  │  │  └─ servers.jsx
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  ├─ helpers.jsx
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ reducers.js
│  │     │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  ├─ spec-extensions
│  │     │  │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  │  └─ wrap-selectors.js
│  │     │  │  │  │  └─ wrap-components
│  │     │  │  │  │     ├─ auth
│  │     │  │  │  │     │  └─ auth-item.jsx
│  │     │  │  │  │     ├─ index.js
│  │     │  │  │  │     ├─ json-schema-string.jsx
│  │     │  │  │  │     ├─ markdown.jsx
│  │     │  │  │  │     ├─ model.jsx
│  │     │  │  │  │     ├─ online-validator-badge.js
│  │     │  │  │  │     └─ openapi-version.jsx
│  │     │  │  │  ├─ oas31
│  │     │  │  │  │  ├─ after-load.js
│  │     │  │  │  │  ├─ auth-extensions
│  │     │  │  │  │  │  └─ wrap-selectors.js
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ _all.scss
│  │     │  │  │  │  │  ├─ auth
│  │     │  │  │  │  │  │  ├─ auths.jsx
│  │     │  │  │  │  │  │  └─ mutual-tls-auth.jsx
│  │     │  │  │  │  │  ├─ contact.jsx
│  │     │  │  │  │  │  ├─ info.jsx
│  │     │  │  │  │  │  ├─ json-schema-dialect.jsx
│  │     │  │  │  │  │  ├─ license.jsx
│  │     │  │  │  │  │  ├─ model
│  │     │  │  │  │  │  │  ├─ _model.scss
│  │     │  │  │  │  │  │  └─ model.jsx
│  │     │  │  │  │  │  ├─ models
│  │     │  │  │  │  │  │  ├─ _models.scss
│  │     │  │  │  │  │  │  └─ models.jsx
│  │     │  │  │  │  │  ├─ version-pragma-filter.jsx
│  │     │  │  │  │  │  └─ webhooks.jsx
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ json-schema-2020-12-extensions
│  │     │  │  │  │  │  ├─ components
│  │     │  │  │  │  │  │  └─ keywords
│  │     │  │  │  │  │  │     ├─ Description.jsx
│  │     │  │  │  │  │  │     ├─ Discriminator
│  │     │  │  │  │  │  │     │  ├─ Discriminator.jsx
│  │     │  │  │  │  │  │     │  └─ DiscriminatorMapping.jsx
│  │     │  │  │  │  │  │     ├─ Example.jsx
│  │     │  │  │  │  │  │     ├─ ExternalDocs.jsx
│  │     │  │  │  │  │  │     ├─ OpenAPIExtensions.jsx
│  │     │  │  │  │  │  │     ├─ Properties.jsx
│  │     │  │  │  │  │  │     └─ Xml.jsx
│  │     │  │  │  │  │  ├─ fn.js
│  │     │  │  │  │  │  └─ wrap-components
│  │     │  │  │  │  │     └─ keywords
│  │     │  │  │  │  │        ├─ Description.jsx
│  │     │  │  │  │  │        ├─ Examples.jsx
│  │     │  │  │  │  │        └─ Properties.jsx
│  │     │  │  │  │  ├─ oas3-extensions
│  │     │  │  │  │  │  └─ fn.js
│  │     │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  ├─ spec-extensions
│  │     │  │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  │  └─ wrap-selectors.js
│  │     │  │  │  │  └─ wrap-components
│  │     │  │  │  │     ├─ auth
│  │     │  │  │  │     │  └─ auth-item.jsx
│  │     │  │  │  │     ├─ auths.jsx
│  │     │  │  │  │     ├─ contact.jsx
│  │     │  │  │  │     ├─ info.jsx
│  │     │  │  │  │     ├─ license.jsx
│  │     │  │  │  │     ├─ model.jsx
│  │     │  │  │  │     ├─ models.jsx
│  │     │  │  │  │     └─ version-pragma-filter.jsx
│  │     │  │  │  ├─ on-complete
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ request-snippets
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ request-snippets.jsx
│  │     │  │  │  │  └─ selectors.js
│  │     │  │  │  ├─ safe-render
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ error-boundary.jsx
│  │     │  │  │  │  │  └─ fallback.jsx
│  │     │  │  │  │  ├─ fn.jsx
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ spec
│  │     │  │  │  │  ├─ actions.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ reducers.js
│  │     │  │  │  │  ├─ selectors.js
│  │     │  │  │  │  └─ wrap-actions.js
│  │     │  │  │  ├─ swagger-client
│  │     │  │  │  │  ├─ configs-wrap-actions.js
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ syntax-highlighting
│  │     │  │  │  │  ├─ after-load.js
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  ├─ HighlightCode.jsx
│  │     │  │  │  │  │  ├─ PlainTextViewer.jsx
│  │     │  │  │  │  │  └─ SyntaxHighlighter.jsx
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  ├─ root-injects.js
│  │     │  │  │  │  └─ wrap-components
│  │     │  │  │  │     └─ SyntaxHighlighter.jsx
│  │     │  │  │  ├─ util
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ versions
│  │     │  │  │  │  ├─ after-load.js
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  ├─ view
│  │     │  │  │  │  ├─ fn.js
│  │     │  │  │  │  ├─ index.js
│  │     │  │  │  │  └─ root-injects.jsx
│  │     │  │  │  └─ view-legacy
│  │     │  │  │     ├─ index.js
│  │     │  │  │     └─ root-injects.jsx
│  │     │  │  ├─ presets
│  │     │  │  │  ├─ apis
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  └─ base
│  │     │  │  │     ├─ index.js
│  │     │  │  │     └─ plugins
│  │     │  │  │        ├─ core-components
│  │     │  │  │        │  └─ index.js
│  │     │  │  │        └─ form-components
│  │     │  │  │           └─ index.js
│  │     │  │  ├─ system.js
│  │     │  │  ├─ utils
│  │     │  │  │  ├─ create-html-ready-id.js
│  │     │  │  │  ├─ get-parameter-schema.js
│  │     │  │  │  ├─ index.js
│  │     │  │  │  ├─ jsonParse.js
│  │     │  │  │  ├─ memoizeN.js
│  │     │  │  │  └─ url.js
│  │     │  │  └─ window.js
│  │     │  ├─ index.js
│  │     │  ├─ standalone
│  │     │  │  ├─ plugins
│  │     │  │  │  ├─ stadalone-layout
│  │     │  │  │  │  ├─ components
│  │     │  │  │  │  │  └─ StandaloneLayout.jsx
│  │     │  │  │  │  └─ index.js
│  │     │  │  │  └─ top-bar
│  │     │  │  │     ├─ assets
│  │     │  │  │     │  ├─ lightbulb-off.svg
│  │     │  │  │     │  ├─ lightbulb.svg
│  │     │  │  │     │  └─ logo_small.svg
│  │     │  │  │     ├─ components
│  │     │  │  │     │  ├─ DarkModeToggle.jsx
│  │     │  │  │     │  ├─ Logo.jsx
│  │     │  │  │     │  └─ TopBar.jsx
│  │     │  │  │     └─ index.js
│  │     │  │  └─ presets
│  │     │  │     └─ standalone
│  │     │  │        └─ index.js
│  │     │  └─ style
│  │     │     ├─ _authorize.scss
│  │     │     ├─ _buttons.scss
│  │     │     ├─ _dark-mode.scss
│  │     │     ├─ _errors.scss
│  │     │     ├─ _form.scss
│  │     │     ├─ _information.scss
│  │     │     ├─ _layout.scss
│  │     │     ├─ _markdown.scss
│  │     │     ├─ _mixins.scss
│  │     │     ├─ _modal.scss
│  │     │     ├─ _models.scss
│  │     │     ├─ _servers.scss
│  │     │     ├─ _split-pane-mode.scss
│  │     │     ├─ _table.scss
│  │     │     ├─ _topbar.scss
│  │     │     ├─ _type.scss
│  │     │     ├─ _variables.scss
│  │     │     └─ main.scss
│  │     ├─ stylelint.config.js
│  │     ├─ swagger-ui-dist-package
│  │     │  ├─ .npmignore
│  │     │  ├─ .npmrc
│  │     │  ├─ README.md
│  │     │  ├─ absolute-path.js
│  │     │  ├─ deploy.sh
│  │     │  ├─ index.js
│  │     │  └─ package.json
│  │     └─ webpack
│  │        ├─ _config-builder.js
│  │        ├─ _helpers.js
│  │        ├─ bundle.js
│  │        ├─ core.js
│  │        ├─ dev-e2e.js
│  │        ├─ dev.js
│  │        ├─ es-bundle-core.js
│  │        ├─ es-bundle.js
│  │        ├─ standalone.js
│  │        └─ stylesheets.js
│  ├─ symfony
│  │  ├─ clock
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Clock.php
│  │  │  ├─ ClockAwareTrait.php
│  │  │  ├─ ClockInterface.php
│  │  │  ├─ DatePoint.php
│  │  │  ├─ LICENSE
│  │  │  ├─ MockClock.php
│  │  │  ├─ MonotonicClock.php
│  │  │  ├─ NativeClock.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ now.php
│  │  │  ├─ Test
│  │  │  │  └─ ClockSensitiveTrait.php
│  │  │  └─ composer.json
│  │  ├─ console
│  │  │  ├─ Application.php
│  │  │  ├─ Attribute
│  │  │  │  ├─ Argument.php
│  │  │  │  ├─ AsCommand.php
│  │  │  │  ├─ Ask.php
│  │  │  │  ├─ Interact.php
│  │  │  │  ├─ InteractiveAttributeInterface.php
│  │  │  │  ├─ MapInput.php
│  │  │  │  ├─ Option.php
│  │  │  │  └─ Reflection
│  │  │  │     └─ ReflectionMember.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CI
│  │  │  │  └─ GithubActionReporter.php
│  │  │  ├─ Color.php
│  │  │  ├─ Command
│  │  │  │  ├─ Command.php
│  │  │  │  ├─ CompleteCommand.php
│  │  │  │  ├─ DumpCompletionCommand.php
│  │  │  │  ├─ HelpCommand.php
│  │  │  │  ├─ InvokableCommand.php
│  │  │  │  ├─ LazyCommand.php
│  │  │  │  ├─ ListCommand.php
│  │  │  │  ├─ LockableTrait.php
│  │  │  │  ├─ SignalableCommandInterface.php
│  │  │  │  └─ TraceableCommand.php
│  │  │  ├─ CommandLoader
│  │  │  │  ├─ CommandLoaderInterface.php
│  │  │  │  ├─ ContainerCommandLoader.php
│  │  │  │  └─ FactoryCommandLoader.php
│  │  │  ├─ Completion
│  │  │  │  ├─ CompletionInput.php
│  │  │  │  ├─ CompletionSuggestions.php
│  │  │  │  ├─ Output
│  │  │  │  │  ├─ BashCompletionOutput.php
│  │  │  │  │  ├─ CompletionOutputInterface.php
│  │  │  │  │  ├─ FishCompletionOutput.php
│  │  │  │  │  └─ ZshCompletionOutput.php
│  │  │  │  └─ Suggestion.php
│  │  │  ├─ ConsoleEvents.php
│  │  │  ├─ Cursor.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ CommandDataCollector.php
│  │  │  ├─ Debug
│  │  │  │  └─ CliRequest.php
│  │  │  ├─ DependencyInjection
│  │  │  │  └─ AddConsoleCommandPass.php
│  │  │  ├─ Descriptor
│  │  │  │  ├─ ApplicationDescription.php
│  │  │  │  ├─ Descriptor.php
│  │  │  │  ├─ DescriptorInterface.php
│  │  │  │  ├─ JsonDescriptor.php
│  │  │  │  ├─ MarkdownDescriptor.php
│  │  │  │  ├─ ReStructuredTextDescriptor.php
│  │  │  │  ├─ TextDescriptor.php
│  │  │  │  └─ XmlDescriptor.php
│  │  │  ├─ Event
│  │  │  │  ├─ ConsoleAlarmEvent.php
│  │  │  │  ├─ ConsoleCommandEvent.php
│  │  │  │  ├─ ConsoleErrorEvent.php
│  │  │  │  ├─ ConsoleEvent.php
│  │  │  │  ├─ ConsoleSignalEvent.php
│  │  │  │  └─ ConsoleTerminateEvent.php
│  │  │  ├─ EventListener
│  │  │  │  └─ ErrorListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ CommandNotFoundException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidOptionException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MissingInputException.php
│  │  │  │  ├─ NamespaceNotFoundException.php
│  │  │  │  ├─ RunCommandFailedException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Formatter
│  │  │  │  ├─ NullOutputFormatter.php
│  │  │  │  ├─ NullOutputFormatterStyle.php
│  │  │  │  ├─ OutputFormatter.php
│  │  │  │  ├─ OutputFormatterInterface.php
│  │  │  │  ├─ OutputFormatterStyle.php
│  │  │  │  ├─ OutputFormatterStyleInterface.php
│  │  │  │  ├─ OutputFormatterStyleStack.php
│  │  │  │  └─ WrappableOutputFormatterInterface.php
│  │  │  ├─ Helper
│  │  │  │  ├─ DebugFormatterHelper.php
│  │  │  │  ├─ DescriptorHelper.php
│  │  │  │  ├─ Dumper.php
│  │  │  │  ├─ FormatterHelper.php
│  │  │  │  ├─ Helper.php
│  │  │  │  ├─ HelperInterface.php
│  │  │  │  ├─ HelperSet.php
│  │  │  │  ├─ InputAwareHelper.php
│  │  │  │  ├─ OutputWrapper.php
│  │  │  │  ├─ ProcessHelper.php
│  │  │  │  ├─ ProgressBar.php
│  │  │  │  ├─ ProgressIndicator.php
│  │  │  │  ├─ QuestionHelper.php
│  │  │  │  ├─ SymfonyQuestionHelper.php
│  │  │  │  ├─ Table.php
│  │  │  │  ├─ TableCell.php
│  │  │  │  ├─ TableCellStyle.php
│  │  │  │  ├─ TableRows.php
│  │  │  │  ├─ TableSeparator.php
│  │  │  │  ├─ TableStyle.php
│  │  │  │  ├─ TerminalInputHelper.php
│  │  │  │  ├─ TreeHelper.php
│  │  │  │  ├─ TreeNode.php
│  │  │  │  └─ TreeStyle.php
│  │  │  ├─ Input
│  │  │  │  ├─ ArgvInput.php
│  │  │  │  ├─ ArrayInput.php
│  │  │  │  ├─ Input.php
│  │  │  │  ├─ InputArgument.php
│  │  │  │  ├─ InputAwareInterface.php
│  │  │  │  ├─ InputDefinition.php
│  │  │  │  ├─ InputInterface.php
│  │  │  │  ├─ InputOption.php
│  │  │  │  ├─ StreamableInputInterface.php
│  │  │  │  └─ StringInput.php
│  │  │  ├─ Interaction
│  │  │  │  └─ Interaction.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Logger
│  │  │  │  └─ ConsoleLogger.php
│  │  │  ├─ Messenger
│  │  │  │  ├─ RunCommandContext.php
│  │  │  │  ├─ RunCommandMessage.php
│  │  │  │  └─ RunCommandMessageHandler.php
│  │  │  ├─ Output
│  │  │  │  ├─ AnsiColorMode.php
│  │  │  │  ├─ BufferedOutput.php
│  │  │  │  ├─ ConsoleOutput.php
│  │  │  │  ├─ ConsoleOutputInterface.php
│  │  │  │  ├─ ConsoleSectionOutput.php
│  │  │  │  ├─ NullOutput.php
│  │  │  │  ├─ Output.php
│  │  │  │  ├─ OutputInterface.php
│  │  │  │  ├─ StreamOutput.php
│  │  │  │  └─ TrimmedBufferOutput.php
│  │  │  ├─ Question
│  │  │  │  ├─ ChoiceQuestion.php
│  │  │  │  ├─ ConfirmationQuestion.php
│  │  │  │  └─ Question.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ hiddeninput.exe
│  │  │  │  ├─ completion.bash
│  │  │  │  ├─ completion.fish
│  │  │  │  └─ completion.zsh
│  │  │  ├─ SignalRegistry
│  │  │  │  ├─ SignalMap.php
│  │  │  │  └─ SignalRegistry.php
│  │  │  ├─ SingleCommandApplication.php
│  │  │  ├─ Style
│  │  │  │  ├─ OutputStyle.php
│  │  │  │  ├─ StyleInterface.php
│  │  │  │  └─ SymfonyStyle.php
│  │  │  ├─ Terminal.php
│  │  │  ├─ Tester
│  │  │  │  ├─ ApplicationTester.php
│  │  │  │  ├─ CommandCompletionTester.php
│  │  │  │  ├─ CommandTester.php
│  │  │  │  ├─ Constraint
│  │  │  │  │  └─ CommandIsSuccessful.php
│  │  │  │  └─ TesterTrait.php
│  │  │  └─ composer.json
│  │  ├─ css-selector
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CssSelectorConverter.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ ExpressionErrorException.php
│  │  │  │  ├─ InternalErrorException.php
│  │  │  │  ├─ ParseException.php
│  │  │  │  └─ SyntaxErrorException.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Node
│  │  │  │  ├─ AbstractNode.php
│  │  │  │  ├─ AttributeNode.php
│  │  │  │  ├─ ClassNode.php
│  │  │  │  ├─ CombinedSelectorNode.php
│  │  │  │  ├─ ElementNode.php
│  │  │  │  ├─ FunctionNode.php
│  │  │  │  ├─ HashNode.php
│  │  │  │  ├─ MatchingNode.php
│  │  │  │  ├─ NegationNode.php
│  │  │  │  ├─ NodeInterface.php
│  │  │  │  ├─ PseudoNode.php
│  │  │  │  ├─ SelectorNode.php
│  │  │  │  ├─ Specificity.php
│  │  │  │  └─ SpecificityAdjustmentNode.php
│  │  │  ├─ Parser
│  │  │  │  ├─ Handler
│  │  │  │  │  ├─ CommentHandler.php
│  │  │  │  │  ├─ HandlerInterface.php
│  │  │  │  │  ├─ HashHandler.php
│  │  │  │  │  ├─ IdentifierHandler.php
│  │  │  │  │  ├─ NumberHandler.php
│  │  │  │  │  ├─ StringHandler.php
│  │  │  │  │  └─ WhitespaceHandler.php
│  │  │  │  ├─ Parser.php
│  │  │  │  ├─ ParserInterface.php
│  │  │  │  ├─ Reader.php
│  │  │  │  ├─ Shortcut
│  │  │  │  │  ├─ ClassParser.php
│  │  │  │  │  ├─ ElementParser.php
│  │  │  │  │  ├─ EmptyStringParser.php
│  │  │  │  │  └─ HashParser.php
│  │  │  │  ├─ Token.php
│  │  │  │  ├─ TokenStream.php
│  │  │  │  └─ Tokenizer
│  │  │  │     ├─ Tokenizer.php
│  │  │  │     ├─ TokenizerEscaping.php
│  │  │  │     └─ TokenizerPatterns.php
│  │  │  ├─ README.md
│  │  │  ├─ XPath
│  │  │  │  ├─ Extension
│  │  │  │  │  ├─ AbstractExtension.php
│  │  │  │  │  ├─ AttributeMatchingExtension.php
│  │  │  │  │  ├─ CombinationExtension.php
│  │  │  │  │  ├─ ExtensionInterface.php
│  │  │  │  │  ├─ FunctionExtension.php
│  │  │  │  │  ├─ HtmlExtension.php
│  │  │  │  │  ├─ NodeExtension.php
│  │  │  │  │  └─ PseudoClassExtension.php
│  │  │  │  ├─ Translator.php
│  │  │  │  ├─ TranslatorInterface.php
│  │  │  │  └─ XPathExpr.php
│  │  │  └─ composer.json
│  │  ├─ deprecation-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ composer.json
│  │  │  └─ function.php
│  │  ├─ error-handler
│  │  │  ├─ BufferingLogger.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  └─ ErrorDumpCommand.php
│  │  │  ├─ Debug.php
│  │  │  ├─ DebugClassLoader.php
│  │  │  ├─ Error
│  │  │  │  ├─ ClassNotFoundError.php
│  │  │  │  ├─ FatalError.php
│  │  │  │  ├─ OutOfMemoryError.php
│  │  │  │  ├─ UndefinedFunctionError.php
│  │  │  │  └─ UndefinedMethodError.php
│  │  │  ├─ ErrorEnhancer
│  │  │  │  ├─ ClassNotFoundErrorEnhancer.php
│  │  │  │  ├─ ErrorEnhancerInterface.php
│  │  │  │  ├─ UndefinedFunctionErrorEnhancer.php
│  │  │  │  └─ UndefinedMethodErrorEnhancer.php
│  │  │  ├─ ErrorHandler.php
│  │  │  ├─ ErrorRenderer
│  │  │  │  ├─ CliErrorRenderer.php
│  │  │  │  ├─ ErrorRendererInterface.php
│  │  │  │  ├─ FileLinkFormatter.php
│  │  │  │  ├─ HtmlErrorRenderer.php
│  │  │  │  └─ SerializerErrorRenderer.php
│  │  │  ├─ Exception
│  │  │  │  ├─ FlattenException.php
│  │  │  │  └─ SilencedErrorContext.php
│  │  │  ├─ Internal
│  │  │  │  └─ TentativeTypes.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ assets
│  │  │  │  │  ├─ css
│  │  │  │  │  │  ├─ error.css
│  │  │  │  │  │  ├─ exception.css
│  │  │  │  │  │  └─ exception_full.css
│  │  │  │  │  ├─ images
│  │  │  │  │  │  ├─ chevron-right.svg
│  │  │  │  │  │  ├─ favicon.png.base64
│  │  │  │  │  │  ├─ icon-book.svg
│  │  │  │  │  │  ├─ icon-copy.svg
│  │  │  │  │  │  ├─ icon-minus-square-o.svg
│  │  │  │  │  │  ├─ icon-minus-square.svg
│  │  │  │  │  │  ├─ icon-plus-square-o.svg
│  │  │  │  │  │  ├─ icon-plus-square.svg
│  │  │  │  │  │  ├─ icon-support.svg
│  │  │  │  │  │  ├─ symfony-ghost.svg.php
│  │  │  │  │  │  └─ symfony-logo.svg
│  │  │  │  │  └─ js
│  │  │  │  │     └─ exception.js
│  │  │  │  ├─ bin
│  │  │  │  │  ├─ extract-tentative-return-types.php
│  │  │  │  │  └─ patch-type-declarations
│  │  │  │  └─ views
│  │  │  │     ├─ error.html.php
│  │  │  │     ├─ exception.html.php
│  │  │  │     ├─ exception_full.html.php
│  │  │  │     ├─ logs.html.php
│  │  │  │     ├─ trace.html.php
│  │  │  │     ├─ traces.html.php
│  │  │  │     └─ traces_text.html.php
│  │  │  ├─ ThrowableUtils.php
│  │  │  └─ composer.json
│  │  ├─ event-dispatcher
│  │  │  ├─ Attribute
│  │  │  │  └─ AsEventListener.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Debug
│  │  │  │  ├─ TraceableEventDispatcher.php
│  │  │  │  └─ WrappedListener.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddEventAliasesPass.php
│  │  │  │  └─ RegisterListenersPass.php
│  │  │  ├─ EventDispatcher.php
│  │  │  ├─ EventDispatcherInterface.php
│  │  │  ├─ EventSubscriberInterface.php
│  │  │  ├─ GenericEvent.php
│  │  │  ├─ ImmutableEventDispatcher.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ event-dispatcher-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Event.php
│  │  │  ├─ EventDispatcherInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ finder
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Comparator
│  │  │  │  ├─ Comparator.php
│  │  │  │  ├─ DateComparator.php
│  │  │  │  └─ NumberComparator.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AccessDeniedException.php
│  │  │  │  └─ DirectoryNotFoundException.php
│  │  │  ├─ Finder.php
│  │  │  ├─ Gitignore.php
│  │  │  ├─ Glob.php
│  │  │  ├─ Iterator
│  │  │  │  ├─ CustomFilterIterator.php
│  │  │  │  ├─ DateRangeFilterIterator.php
│  │  │  │  ├─ DepthRangeFilterIterator.php
│  │  │  │  ├─ ExcludeDirectoryFilterIterator.php
│  │  │  │  ├─ FileTypeFilterIterator.php
│  │  │  │  ├─ FilecontentFilterIterator.php
│  │  │  │  ├─ FilenameFilterIterator.php
│  │  │  │  ├─ LazyIterator.php
│  │  │  │  ├─ MultiplePcreFilterIterator.php
│  │  │  │  ├─ PathFilterIterator.php
│  │  │  │  ├─ RecursiveDirectoryIterator.php
│  │  │  │  ├─ SizeRangeFilterIterator.php
│  │  │  │  ├─ SortableIterator.php
│  │  │  │  └─ VcsIgnoredFilterIterator.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SplFileInfo.php
│  │  │  └─ composer.json
│  │  ├─ http-foundation
│  │  │  ├─ AcceptHeader.php
│  │  │  ├─ AcceptHeaderItem.php
│  │  │  ├─ BinaryFileResponse.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ ChainRequestMatcher.php
│  │  │  ├─ Cookie.php
│  │  │  ├─ EventStreamResponse.php
│  │  │  ├─ Exception
│  │  │  │  ├─ BadRequestException.php
│  │  │  │  ├─ ConflictingHeadersException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ ExpiredSignedUriException.php
│  │  │  │  ├─ JsonException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RequestExceptionInterface.php
│  │  │  │  ├─ SessionNotFoundException.php
│  │  │  │  ├─ SignedUriException.php
│  │  │  │  ├─ SuspiciousOperationException.php
│  │  │  │  ├─ UnexpectedValueException.php
│  │  │  │  ├─ UnsignedUriException.php
│  │  │  │  └─ UnverifiedSignedUriException.php
│  │  │  ├─ File
│  │  │  │  ├─ Exception
│  │  │  │  │  ├─ AccessDeniedException.php
│  │  │  │  │  ├─ CannotWriteFileException.php
│  │  │  │  │  ├─ ExtensionFileException.php
│  │  │  │  │  ├─ FileException.php
│  │  │  │  │  ├─ FileNotFoundException.php
│  │  │  │  │  ├─ FormSizeFileException.php
│  │  │  │  │  ├─ IniSizeFileException.php
│  │  │  │  │  ├─ NoFileException.php
│  │  │  │  │  ├─ NoTmpDirFileException.php
│  │  │  │  │  ├─ PartialFileException.php
│  │  │  │  │  ├─ UnexpectedTypeException.php
│  │  │  │  │  └─ UploadException.php
│  │  │  │  ├─ File.php
│  │  │  │  ├─ Stream.php
│  │  │  │  └─ UploadedFile.php
│  │  │  ├─ FileBag.php
│  │  │  ├─ HeaderBag.php
│  │  │  ├─ HeaderUtils.php
│  │  │  ├─ InputBag.php
│  │  │  ├─ IpUtils.php
│  │  │  ├─ JsonResponse.php
│  │  │  ├─ LICENSE
│  │  │  ├─ ParameterBag.php
│  │  │  ├─ README.md
│  │  │  ├─ RateLimiter
│  │  │  │  ├─ AbstractRequestRateLimiter.php
│  │  │  │  ├─ PeekableRequestRateLimiterInterface.php
│  │  │  │  └─ RequestRateLimiterInterface.php
│  │  │  ├─ RedirectResponse.php
│  │  │  ├─ Request.php
│  │  │  ├─ RequestMatcher
│  │  │  │  ├─ AttributesRequestMatcher.php
│  │  │  │  ├─ ExpressionRequestMatcher.php
│  │  │  │  ├─ HeaderRequestMatcher.php
│  │  │  │  ├─ HostRequestMatcher.php
│  │  │  │  ├─ IpsRequestMatcher.php
│  │  │  │  ├─ IsJsonRequestMatcher.php
│  │  │  │  ├─ MethodRequestMatcher.php
│  │  │  │  ├─ PathRequestMatcher.php
│  │  │  │  ├─ PortRequestMatcher.php
│  │  │  │  ├─ QueryParameterRequestMatcher.php
│  │  │  │  └─ SchemeRequestMatcher.php
│  │  │  ├─ RequestMatcherInterface.php
│  │  │  ├─ RequestStack.php
│  │  │  ├─ Response.php
│  │  │  ├─ ResponseHeaderBag.php
│  │  │  ├─ ServerBag.php
│  │  │  ├─ ServerEvent.php
│  │  │  ├─ Session
│  │  │  │  ├─ Attribute
│  │  │  │  │  ├─ AttributeBag.php
│  │  │  │  │  └─ AttributeBagInterface.php
│  │  │  │  ├─ Flash
│  │  │  │  │  ├─ AutoExpireFlashBag.php
│  │  │  │  │  ├─ FlashBag.php
│  │  │  │  │  └─ FlashBagInterface.php
│  │  │  │  ├─ FlashBagAwareSessionInterface.php
│  │  │  │  ├─ Session.php
│  │  │  │  ├─ SessionBagInterface.php
│  │  │  │  ├─ SessionBagProxy.php
│  │  │  │  ├─ SessionFactory.php
│  │  │  │  ├─ SessionFactoryInterface.php
│  │  │  │  ├─ SessionInterface.php
│  │  │  │  ├─ SessionUtils.php
│  │  │  │  └─ Storage
│  │  │  │     ├─ Handler
│  │  │  │     │  ├─ AbstractSessionHandler.php
│  │  │  │     │  ├─ IdentityMarshaller.php
│  │  │  │     │  ├─ MarshallingSessionHandler.php
│  │  │  │     │  ├─ MemcachedSessionHandler.php
│  │  │  │     │  ├─ MigratingSessionHandler.php
│  │  │  │     │  ├─ MongoDbSessionHandler.php
│  │  │  │     │  ├─ NativeFileSessionHandler.php
│  │  │  │     │  ├─ NullSessionHandler.php
│  │  │  │     │  ├─ PdoSessionHandler.php
│  │  │  │     │  ├─ RedisSessionHandler.php
│  │  │  │     │  ├─ SessionHandlerFactory.php
│  │  │  │     │  └─ StrictSessionHandler.php
│  │  │  │     ├─ MetadataBag.php
│  │  │  │     ├─ MockArraySessionStorage.php
│  │  │  │     ├─ MockFileSessionStorage.php
│  │  │  │     ├─ MockFileSessionStorageFactory.php
│  │  │  │     ├─ NativeSessionStorage.php
│  │  │  │     ├─ NativeSessionStorageFactory.php
│  │  │  │     ├─ PhpBridgeSessionStorage.php
│  │  │  │     ├─ PhpBridgeSessionStorageFactory.php
│  │  │  │     ├─ Proxy
│  │  │  │     │  ├─ AbstractProxy.php
│  │  │  │     │  └─ SessionHandlerProxy.php
│  │  │  │     ├─ SessionStorageFactoryInterface.php
│  │  │  │     └─ SessionStorageInterface.php
│  │  │  ├─ StreamedJsonResponse.php
│  │  │  ├─ StreamedResponse.php
│  │  │  ├─ Test
│  │  │  │  └─ Constraint
│  │  │  │     ├─ RequestAttributeValueSame.php
│  │  │  │     ├─ ResponseCookieValueSame.php
│  │  │  │     ├─ ResponseFormatSame.php
│  │  │  │     ├─ ResponseHasCookie.php
│  │  │  │     ├─ ResponseHasHeader.php
│  │  │  │     ├─ ResponseHeaderLocationSame.php
│  │  │  │     ├─ ResponseHeaderSame.php
│  │  │  │     ├─ ResponseIsRedirected.php
│  │  │  │     ├─ ResponseIsSuccessful.php
│  │  │  │     ├─ ResponseIsUnprocessable.php
│  │  │  │     └─ ResponseStatusCodeSame.php
│  │  │  ├─ UriSigner.php
│  │  │  ├─ UrlHelper.php
│  │  │  └─ composer.json
│  │  ├─ http-kernel
│  │  │  ├─ Attribute
│  │  │  │  ├─ AsController.php
│  │  │  │  ├─ AsTargetedValueResolver.php
│  │  │  │  ├─ Cache.php
│  │  │  │  ├─ IsSignatureValid.php
│  │  │  │  ├─ MapDateTime.php
│  │  │  │  ├─ MapQueryParameter.php
│  │  │  │  ├─ MapQueryString.php
│  │  │  │  ├─ MapRequestPayload.php
│  │  │  │  ├─ MapUploadedFile.php
│  │  │  │  ├─ ValueResolver.php
│  │  │  │  ├─ WithHttpStatus.php
│  │  │  │  └─ WithLogLevel.php
│  │  │  ├─ Bundle
│  │  │  │  ├─ AbstractBundle.php
│  │  │  │  ├─ Bundle.php
│  │  │  │  ├─ BundleExtension.php
│  │  │  │  └─ BundleInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CacheClearer
│  │  │  │  ├─ CacheClearerInterface.php
│  │  │  │  ├─ ChainCacheClearer.php
│  │  │  │  └─ Psr6CacheClearer.php
│  │  │  ├─ CacheWarmer
│  │  │  │  ├─ CacheWarmer.php
│  │  │  │  ├─ CacheWarmerAggregate.php
│  │  │  │  ├─ CacheWarmerInterface.php
│  │  │  │  └─ WarmableInterface.php
│  │  │  ├─ Config
│  │  │  │  └─ FileLocator.php
│  │  │  ├─ Controller
│  │  │  │  ├─ ArgumentResolver
│  │  │  │  │  ├─ BackedEnumValueResolver.php
│  │  │  │  │  ├─ DateTimeValueResolver.php
│  │  │  │  │  ├─ DefaultValueResolver.php
│  │  │  │  │  ├─ NotTaggedControllerValueResolver.php
│  │  │  │  │  ├─ QueryParameterValueResolver.php
│  │  │  │  │  ├─ RequestAttributeValueResolver.php
│  │  │  │  │  ├─ RequestPayloadValueResolver.php
│  │  │  │  │  ├─ RequestValueResolver.php
│  │  │  │  │  ├─ ServiceValueResolver.php
│  │  │  │  │  ├─ SessionValueResolver.php
│  │  │  │  │  ├─ TraceableValueResolver.php
│  │  │  │  │  ├─ UidValueResolver.php
│  │  │  │  │  └─ VariadicValueResolver.php
│  │  │  │  ├─ ArgumentResolver.php
│  │  │  │  ├─ ArgumentResolverInterface.php
│  │  │  │  ├─ ContainerControllerResolver.php
│  │  │  │  ├─ ControllerReference.php
│  │  │  │  ├─ ControllerResolver.php
│  │  │  │  ├─ ControllerResolverInterface.php
│  │  │  │  ├─ ErrorController.php
│  │  │  │  ├─ TraceableArgumentResolver.php
│  │  │  │  ├─ TraceableControllerResolver.php
│  │  │  │  └─ ValueResolverInterface.php
│  │  │  ├─ ControllerMetadata
│  │  │  │  ├─ ArgumentMetadata.php
│  │  │  │  ├─ ArgumentMetadataFactory.php
│  │  │  │  └─ ArgumentMetadataFactoryInterface.php
│  │  │  ├─ DataCollector
│  │  │  │  ├─ AjaxDataCollector.php
│  │  │  │  ├─ ConfigDataCollector.php
│  │  │  │  ├─ DataCollector.php
│  │  │  │  ├─ DataCollectorInterface.php
│  │  │  │  ├─ DumpDataCollector.php
│  │  │  │  ├─ EventDataCollector.php
│  │  │  │  ├─ ExceptionDataCollector.php
│  │  │  │  ├─ LateDataCollectorInterface.php
│  │  │  │  ├─ LoggerDataCollector.php
│  │  │  │  ├─ MemoryDataCollector.php
│  │  │  │  ├─ RequestDataCollector.php
│  │  │  │  ├─ RouterDataCollector.php
│  │  │  │  └─ TimeDataCollector.php
│  │  │  ├─ Debug
│  │  │  │  ├─ ErrorHandlerConfigurator.php
│  │  │  │  ├─ TraceableEventDispatcher.php
│  │  │  │  └─ VirtualRequestStack.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddAnnotatedClassesToCachePass.php
│  │  │  │  ├─ ConfigurableExtension.php
│  │  │  │  ├─ ControllerArgumentValueResolverPass.php
│  │  │  │  ├─ Extension.php
│  │  │  │  ├─ FragmentRendererPass.php
│  │  │  │  ├─ LazyLoadingFragmentHandler.php
│  │  │  │  ├─ LoggerPass.php
│  │  │  │  ├─ MergeExtensionConfigurationPass.php
│  │  │  │  ├─ RegisterControllerArgumentLocatorsPass.php
│  │  │  │  ├─ RegisterLocaleAwareServicesPass.php
│  │  │  │  ├─ RemoveEmptyControllerArgumentLocatorsPass.php
│  │  │  │  ├─ ResettableServicePass.php
│  │  │  │  ├─ ServicesResetter.php
│  │  │  │  └─ ServicesResetterInterface.php
│  │  │  ├─ Event
│  │  │  │  ├─ ControllerArgumentsEvent.php
│  │  │  │  ├─ ControllerEvent.php
│  │  │  │  ├─ ExceptionEvent.php
│  │  │  │  ├─ FinishRequestEvent.php
│  │  │  │  ├─ KernelEvent.php
│  │  │  │  ├─ RequestEvent.php
│  │  │  │  ├─ ResponseEvent.php
│  │  │  │  ├─ TerminateEvent.php
│  │  │  │  └─ ViewEvent.php
│  │  │  ├─ EventListener
│  │  │  │  ├─ AbstractSessionListener.php
│  │  │  │  ├─ AddRequestFormatsListener.php
│  │  │  │  ├─ CacheAttributeListener.php
│  │  │  │  ├─ DebugHandlersListener.php
│  │  │  │  ├─ DisallowRobotsIndexingListener.php
│  │  │  │  ├─ DumpListener.php
│  │  │  │  ├─ ErrorListener.php
│  │  │  │  ├─ FragmentListener.php
│  │  │  │  ├─ IsSignatureValidAttributeListener.php
│  │  │  │  ├─ LocaleAwareListener.php
│  │  │  │  ├─ LocaleListener.php
│  │  │  │  ├─ ProfilerListener.php
│  │  │  │  ├─ ResponseListener.php
│  │  │  │  ├─ RouterListener.php
│  │  │  │  ├─ SessionListener.php
│  │  │  │  ├─ SurrogateListener.php
│  │  │  │  └─ ValidateRequestListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AccessDeniedHttpException.php
│  │  │  │  ├─ BadRequestHttpException.php
│  │  │  │  ├─ ConflictHttpException.php
│  │  │  │  ├─ ControllerDoesNotReturnResponseException.php
│  │  │  │  ├─ GoneHttpException.php
│  │  │  │  ├─ HttpException.php
│  │  │  │  ├─ HttpExceptionInterface.php
│  │  │  │  ├─ InvalidMetadataException.php
│  │  │  │  ├─ LengthRequiredHttpException.php
│  │  │  │  ├─ LockedHttpException.php
│  │  │  │  ├─ MethodNotAllowedHttpException.php
│  │  │  │  ├─ NearMissValueResolverException.php
│  │  │  │  ├─ NotAcceptableHttpException.php
│  │  │  │  ├─ NotFoundHttpException.php
│  │  │  │  ├─ PreconditionFailedHttpException.php
│  │  │  │  ├─ PreconditionRequiredHttpException.php
│  │  │  │  ├─ ResolverNotFoundException.php
│  │  │  │  ├─ ServiceUnavailableHttpException.php
│  │  │  │  ├─ TooManyRequestsHttpException.php
│  │  │  │  ├─ UnauthorizedHttpException.php
│  │  │  │  ├─ UnexpectedSessionUsageException.php
│  │  │  │  ├─ UnprocessableEntityHttpException.php
│  │  │  │  └─ UnsupportedMediaTypeHttpException.php
│  │  │  ├─ Fragment
│  │  │  │  ├─ AbstractSurrogateFragmentRenderer.php
│  │  │  │  ├─ EsiFragmentRenderer.php
│  │  │  │  ├─ FragmentHandler.php
│  │  │  │  ├─ FragmentRendererInterface.php
│  │  │  │  ├─ FragmentUriGenerator.php
│  │  │  │  ├─ FragmentUriGeneratorInterface.php
│  │  │  │  ├─ HIncludeFragmentRenderer.php
│  │  │  │  ├─ InlineFragmentRenderer.php
│  │  │  │  ├─ RoutableFragmentRenderer.php
│  │  │  │  └─ SsiFragmentRenderer.php
│  │  │  ├─ HttpCache
│  │  │  │  ├─ AbstractSurrogate.php
│  │  │  │  ├─ CacheWasLockedException.php
│  │  │  │  ├─ Esi.php
│  │  │  │  ├─ HttpCache.php
│  │  │  │  ├─ ResponseCacheStrategy.php
│  │  │  │  ├─ ResponseCacheStrategyInterface.php
│  │  │  │  ├─ Ssi.php
│  │  │  │  ├─ Store.php
│  │  │  │  ├─ StoreInterface.php
│  │  │  │  ├─ SubRequestHandler.php
│  │  │  │  └─ SurrogateInterface.php
│  │  │  ├─ HttpClientKernel.php
│  │  │  ├─ HttpKernel.php
│  │  │  ├─ HttpKernelBrowser.php
│  │  │  ├─ HttpKernelInterface.php
│  │  │  ├─ Kernel.php
│  │  │  ├─ KernelEvents.php
│  │  │  ├─ KernelInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Log
│  │  │  │  ├─ DebugLoggerConfigurator.php
│  │  │  │  ├─ DebugLoggerInterface.php
│  │  │  │  └─ Logger.php
│  │  │  ├─ Profiler
│  │  │  │  ├─ FileProfilerStorage.php
│  │  │  │  ├─ Profile.php
│  │  │  │  ├─ Profiler.php
│  │  │  │  ├─ ProfilerStateChecker.php
│  │  │  │  └─ ProfilerStorageInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RebootableInterface.php
│  │  │  ├─ Resources
│  │  │  │  └─ welcome.html.php
│  │  │  ├─ TerminableInterface.php
│  │  │  └─ composer.json
│  │  ├─ mailer
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  └─ MailerTestCommand.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ MessageDataCollector.php
│  │  │  ├─ DelayedEnvelope.php
│  │  │  ├─ Envelope.php
│  │  │  ├─ Event
│  │  │  │  ├─ FailedMessageEvent.php
│  │  │  │  ├─ MessageEvent.php
│  │  │  │  ├─ MessageEvents.php
│  │  │  │  └─ SentMessageEvent.php
│  │  │  ├─ EventListener
│  │  │  │  ├─ DkimSignedMessageListener.php
│  │  │  │  ├─ EnvelopeListener.php
│  │  │  │  ├─ MessageListener.php
│  │  │  │  ├─ MessageLoggerListener.php
│  │  │  │  ├─ MessengerTransportListener.php
│  │  │  │  ├─ SmimeCertificateRepositoryInterface.php
│  │  │  │  ├─ SmimeEncryptedMessageListener.php
│  │  │  │  └─ SmimeSignedMessageListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ HttpTransportException.php
│  │  │  │  ├─ IncompleteDsnException.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RuntimeException.php
│  │  │  │  ├─ TransportException.php
│  │  │  │  ├─ TransportExceptionInterface.php
│  │  │  │  ├─ UnexpectedResponseException.php
│  │  │  │  └─ UnsupportedSchemeException.php
│  │  │  ├─ Header
│  │  │  │  ├─ MetadataHeader.php
│  │  │  │  └─ TagHeader.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Mailer.php
│  │  │  ├─ MailerInterface.php
│  │  │  ├─ Messenger
│  │  │  │  ├─ MessageHandler.php
│  │  │  │  └─ SendEmailMessage.php
│  │  │  ├─ README.md
│  │  │  ├─ SentMessage.php
│  │  │  ├─ Test
│  │  │  │  ├─ AbstractTransportFactoryTestCase.php
│  │  │  │  ├─ Constraint
│  │  │  │  │  ├─ EmailCount.php
│  │  │  │  │  └─ EmailIsQueued.php
│  │  │  │  ├─ IncompleteDsnTestTrait.php
│  │  │  │  └─ TransportFactoryTestCase.php
│  │  │  ├─ Transport
│  │  │  │  ├─ AbstractApiTransport.php
│  │  │  │  ├─ AbstractHttpTransport.php
│  │  │  │  ├─ AbstractTransport.php
│  │  │  │  ├─ AbstractTransportFactory.php
│  │  │  │  ├─ Dsn.php
│  │  │  │  ├─ FailoverTransport.php
│  │  │  │  ├─ NativeTransportFactory.php
│  │  │  │  ├─ NullTransport.php
│  │  │  │  ├─ NullTransportFactory.php
│  │  │  │  ├─ RoundRobinTransport.php
│  │  │  │  ├─ SendmailTransport.php
│  │  │  │  ├─ SendmailTransportFactory.php
│  │  │  │  ├─ Smtp
│  │  │  │  │  ├─ Auth
│  │  │  │  │  │  ├─ AuthenticatorInterface.php
│  │  │  │  │  │  ├─ CramMd5Authenticator.php
│  │  │  │  │  │  ├─ LoginAuthenticator.php
│  │  │  │  │  │  ├─ PlainAuthenticator.php
│  │  │  │  │  │  └─ XOAuth2Authenticator.php
│  │  │  │  │  ├─ EsmtpTransport.php
│  │  │  │  │  ├─ EsmtpTransportFactory.php
│  │  │  │  │  ├─ SmtpTransport.php
│  │  │  │  │  └─ Stream
│  │  │  │  │     ├─ AbstractStream.php
│  │  │  │  │     ├─ ProcessStream.php
│  │  │  │  │     └─ SocketStream.php
│  │  │  │  ├─ TransportFactoryInterface.php
│  │  │  │  ├─ TransportInterface.php
│  │  │  │  └─ Transports.php
│  │  │  ├─ Transport.php
│  │  │  └─ composer.json
│  │  ├─ mime
│  │  │  ├─ Address.php
│  │  │  ├─ BodyRendererInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CharacterStream.php
│  │  │  ├─ Crypto
│  │  │  │  ├─ DkimOptions.php
│  │  │  │  ├─ DkimSigner.php
│  │  │  │  ├─ SMime.php
│  │  │  │  ├─ SMimeEncrypter.php
│  │  │  │  └─ SMimeSigner.php
│  │  │  ├─ DependencyInjection
│  │  │  │  └─ AddMimeTypeGuesserPass.php
│  │  │  ├─ DraftEmail.php
│  │  │  ├─ Email.php
│  │  │  ├─ Encoder
│  │  │  │  ├─ AddressEncoderInterface.php
│  │  │  │  ├─ Base64ContentEncoder.php
│  │  │  │  ├─ Base64Encoder.php
│  │  │  │  ├─ Base64MimeHeaderEncoder.php
│  │  │  │  ├─ ContentEncoderInterface.php
│  │  │  │  ├─ EightBitContentEncoder.php
│  │  │  │  ├─ EncoderInterface.php
│  │  │  │  ├─ IdnAddressEncoder.php
│  │  │  │  ├─ MimeHeaderEncoderInterface.php
│  │  │  │  ├─ QpContentEncoder.php
│  │  │  │  ├─ QpEncoder.php
│  │  │  │  ├─ QpMimeHeaderEncoder.php
│  │  │  │  └─ Rfc2231Encoder.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AddressEncoderException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RfcComplianceException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ FileBinaryMimeTypeGuesser.php
│  │  │  ├─ FileinfoMimeTypeGuesser.php
│  │  │  ├─ Header
│  │  │  │  ├─ AbstractHeader.php
│  │  │  │  ├─ DateHeader.php
│  │  │  │  ├─ HeaderInterface.php
│  │  │  │  ├─ Headers.php
│  │  │  │  ├─ IdentificationHeader.php
│  │  │  │  ├─ MailboxHeader.php
│  │  │  │  ├─ MailboxListHeader.php
│  │  │  │  ├─ ParameterizedHeader.php
│  │  │  │  ├─ PathHeader.php
│  │  │  │  └─ UnstructuredHeader.php
│  │  │  ├─ HtmlToTextConverter
│  │  │  │  ├─ DefaultHtmlToTextConverter.php
│  │  │  │  ├─ HtmlToTextConverterInterface.php
│  │  │  │  └─ LeagueHtmlToMarkdownConverter.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Message.php
│  │  │  ├─ MessageConverter.php
│  │  │  ├─ MimeTypeGuesserInterface.php
│  │  │  ├─ MimeTypes.php
│  │  │  ├─ MimeTypesInterface.php
│  │  │  ├─ Part
│  │  │  │  ├─ AbstractMultipartPart.php
│  │  │  │  ├─ AbstractPart.php
│  │  │  │  ├─ DataPart.php
│  │  │  │  ├─ File.php
│  │  │  │  ├─ MessagePart.php
│  │  │  │  ├─ Multipart
│  │  │  │  │  ├─ AlternativePart.php
│  │  │  │  │  ├─ DigestPart.php
│  │  │  │  │  ├─ FormDataPart.php
│  │  │  │  │  ├─ MixedPart.php
│  │  │  │  │  └─ RelatedPart.php
│  │  │  │  ├─ SMimePart.php
│  │  │  │  └─ TextPart.php
│  │  │  ├─ README.md
│  │  │  ├─ RawMessage.php
│  │  │  ├─ Resources
│  │  │  │  └─ bin
│  │  │  ├─ Test
│  │  │  │  └─ Constraint
│  │  │  │     ├─ EmailAddressContains.php
│  │  │  │     ├─ EmailAttachmentCount.php
│  │  │  │     ├─ EmailHasHeader.php
│  │  │  │     ├─ EmailHeaderSame.php
│  │  │  │     ├─ EmailHtmlBodyContains.php
│  │  │  │     ├─ EmailSubjectContains.php
│  │  │  │     └─ EmailTextBodyContains.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-ctype
│  │  │  ├─ Ctype.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-intl-grapheme
│  │  │  ├─ Grapheme.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-intl-idn
│  │  │  ├─ Idn.php
│  │  │  ├─ Info.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ unidata
│  │  │  │     ├─ DisallowedRanges.php
│  │  │  │     ├─ Regex.php
│  │  │  │     ├─ deviation.php
│  │  │  │     ├─ disallowed.php
│  │  │  │     ├─ disallowed_STD3_mapped.php
│  │  │  │     ├─ disallowed_STD3_valid.php
│  │  │  │     ├─ ignored.php
│  │  │  │     ├─ mapped.php
│  │  │  │     └─ virama.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-intl-normalizer
│  │  │  ├─ LICENSE
│  │  │  ├─ Normalizer.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ stubs
│  │  │  │  │  └─ Normalizer.php
│  │  │  │  └─ unidata
│  │  │  │     ├─ canonicalComposition.php
│  │  │  │     ├─ canonicalDecomposition.php
│  │  │  │     ├─ combiningClass.php
│  │  │  │     └─ compatibilityDecomposition.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-mbstring
│  │  │  ├─ LICENSE
│  │  │  ├─ Mbstring.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ unidata
│  │  │  │     ├─ caseFolding.php
│  │  │  │     ├─ lowerCase.php
│  │  │  │     ├─ titleCaseRegexp.php
│  │  │  │     └─ upperCase.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-php80
│  │  │  ├─ LICENSE
│  │  │  ├─ Php80.php
│  │  │  ├─ PhpToken.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ stubs
│  │  │  │     ├─ Attribute.php
│  │  │  │     ├─ PhpToken.php
│  │  │  │     ├─ Stringable.php
│  │  │  │     ├─ UnhandledMatchError.php
│  │  │  │     └─ ValueError.php
│  │  │  ├─ bootstrap.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-php83
│  │  │  ├─ LICENSE
│  │  │  ├─ Php83.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ stubs
│  │  │  │     ├─ DateError.php
│  │  │  │     ├─ DateException.php
│  │  │  │     ├─ DateInvalidOperationException.php
│  │  │  │     ├─ DateInvalidTimeZoneException.php
│  │  │  │     ├─ DateMalformedIntervalStringException.php
│  │  │  │     ├─ DateMalformedPeriodStringException.php
│  │  │  │     ├─ DateMalformedStringException.php
│  │  │  │     ├─ DateObjectError.php
│  │  │  │     ├─ DateRangeError.php
│  │  │  │     ├─ Override.php
│  │  │  │     └─ SQLite3Exception.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap81.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-php84
│  │  │  ├─ LICENSE
│  │  │  ├─ Php84.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ stubs
│  │  │  │     ├─ Deprecated.php
│  │  │  │     └─ ReflectionConstant.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap82.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-php85
│  │  │  ├─ LICENSE
│  │  │  ├─ Php85.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ stubs
│  │  │  │     └─ NoDiscard.php
│  │  │  ├─ bootstrap.php
│  │  │  └─ composer.json
│  │  ├─ polyfill-uuid
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Uuid.php
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  └─ composer.json
│  │  ├─ process
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ ProcessFailedException.php
│  │  │  │  ├─ ProcessSignaledException.php
│  │  │  │  ├─ ProcessStartFailedException.php
│  │  │  │  ├─ ProcessTimedOutException.php
│  │  │  │  ├─ RunProcessFailedException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ ExecutableFinder.php
│  │  │  ├─ InputStream.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Messenger
│  │  │  │  ├─ RunProcessContext.php
│  │  │  │  ├─ RunProcessMessage.php
│  │  │  │  └─ RunProcessMessageHandler.php
│  │  │  ├─ PhpExecutableFinder.php
│  │  │  ├─ PhpProcess.php
│  │  │  ├─ PhpSubprocess.php
│  │  │  ├─ Pipes
│  │  │  │  ├─ AbstractPipes.php
│  │  │  │  ├─ PipesInterface.php
│  │  │  │  ├─ UnixPipes.php
│  │  │  │  └─ WindowsPipes.php
│  │  │  ├─ Process.php
│  │  │  ├─ ProcessUtils.php
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ psr-http-message-bridge
│  │  │  ├─ ArgumentValueResolver
│  │  │  │  └─ PsrServerRequestResolver.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ EventListener
│  │  │  │  └─ PsrResponseListener.php
│  │  │  ├─ Factory
│  │  │  │  ├─ HttpFoundationFactory.php
│  │  │  │  ├─ PsrHttpFactory.php
│  │  │  │  └─ UploadedFile.php
│  │  │  ├─ HttpFoundationFactoryInterface.php
│  │  │  ├─ HttpMessageFactoryInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ composer.json
│  │  ├─ routing
│  │  │  ├─ Alias.php
│  │  │  ├─ Annotation
│  │  │  │  └─ Route.php
│  │  │  ├─ Attribute
│  │  │  │  ├─ DeprecatedAlias.php
│  │  │  │  └─ Route.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CompiledRoute.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddExpressionLanguageProvidersPass.php
│  │  │  │  ├─ RoutingControllerPass.php
│  │  │  │  └─ RoutingResolverPass.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidParameterException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MethodNotAllowedException.php
│  │  │  │  ├─ MissingMandatoryParametersException.php
│  │  │  │  ├─ NoConfigurationException.php
│  │  │  │  ├─ ResourceNotFoundException.php
│  │  │  │  ├─ RouteCircularReferenceException.php
│  │  │  │  ├─ RouteNotFoundException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Generator
│  │  │  │  ├─ CompiledUrlGenerator.php
│  │  │  │  ├─ ConfigurableRequirementsInterface.php
│  │  │  │  ├─ Dumper
│  │  │  │  │  ├─ CompiledUrlGeneratorDumper.php
│  │  │  │  │  ├─ GeneratorDumper.php
│  │  │  │  │  └─ GeneratorDumperInterface.php
│  │  │  │  ├─ UrlGenerator.php
│  │  │  │  └─ UrlGeneratorInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Loader
│  │  │  │  ├─ AttributeClassLoader.php
│  │  │  │  ├─ AttributeDirectoryLoader.php
│  │  │  │  ├─ AttributeFileLoader.php
│  │  │  │  ├─ AttributeServicesLoader.php
│  │  │  │  ├─ ClosureLoader.php
│  │  │  │  ├─ Configurator
│  │  │  │  │  ├─ AliasConfigurator.php
│  │  │  │  │  ├─ CollectionConfigurator.php
│  │  │  │  │  ├─ ImportConfigurator.php
│  │  │  │  │  ├─ RouteConfigurator.php
│  │  │  │  │  ├─ RoutesReference.php
│  │  │  │  │  ├─ RoutingConfigurator.php
│  │  │  │  │  └─ Traits
│  │  │  │  │     ├─ AddTrait.php
│  │  │  │  │     ├─ HostTrait.php
│  │  │  │  │     ├─ LocalizedRouteTrait.php
│  │  │  │  │     ├─ PrefixTrait.php
│  │  │  │  │     └─ RouteTrait.php
│  │  │  │  ├─ ContainerLoader.php
│  │  │  │  ├─ DirectoryLoader.php
│  │  │  │  ├─ GlobFileLoader.php
│  │  │  │  ├─ ObjectLoader.php
│  │  │  │  ├─ PhpFileLoader.php
│  │  │  │  ├─ Psr4DirectoryLoader.php
│  │  │  │  ├─ XmlFileLoader.php
│  │  │  │  ├─ YamlFileLoader.php
│  │  │  │  └─ schema
│  │  │  │     ├─ routing
│  │  │  │     │  └─ routing-1.0.xsd
│  │  │  │     └─ routing.schema.json
│  │  │  ├─ Matcher
│  │  │  │  ├─ CompiledUrlMatcher.php
│  │  │  │  ├─ Dumper
│  │  │  │  │  ├─ CompiledUrlMatcherDumper.php
│  │  │  │  │  ├─ CompiledUrlMatcherTrait.php
│  │  │  │  │  ├─ MatcherDumper.php
│  │  │  │  │  ├─ MatcherDumperInterface.php
│  │  │  │  │  └─ StaticPrefixCollection.php
│  │  │  │  ├─ ExpressionLanguageProvider.php
│  │  │  │  ├─ RedirectableUrlMatcher.php
│  │  │  │  ├─ RedirectableUrlMatcherInterface.php
│  │  │  │  ├─ RequestMatcherInterface.php
│  │  │  │  ├─ TraceableUrlMatcher.php
│  │  │  │  ├─ UrlMatcher.php
│  │  │  │  └─ UrlMatcherInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RequestContext.php
│  │  │  ├─ RequestContextAwareInterface.php
│  │  │  ├─ Requirement
│  │  │  │  ├─ EnumRequirement.php
│  │  │  │  └─ Requirement.php
│  │  │  ├─ Route.php
│  │  │  ├─ RouteCollection.php
│  │  │  ├─ RouteCompiler.php
│  │  │  ├─ RouteCompilerInterface.php
│  │  │  ├─ Router.php
│  │  │  ├─ RouterInterface.php
│  │  │  └─ composer.json
│  │  ├─ service-contracts
│  │  │  ├─ Attribute
│  │  │  │  ├─ Required.php
│  │  │  │  └─ SubscribedService.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ ResetInterface.php
│  │  │  ├─ ServiceCollectionInterface.php
│  │  │  ├─ ServiceLocatorTrait.php
│  │  │  ├─ ServiceMethodsSubscriberTrait.php
│  │  │  ├─ ServiceProviderInterface.php
│  │  │  ├─ ServiceSubscriberInterface.php
│  │  │  ├─ ServiceSubscriberTrait.php
│  │  │  ├─ Test
│  │  │  │  ├─ ServiceLocatorTest.php
│  │  │  │  └─ ServiceLocatorTestCase.php
│  │  │  └─ composer.json
│  │  ├─ string
│  │  │  ├─ AbstractString.php
│  │  │  ├─ AbstractUnicodeString.php
│  │  │  ├─ ByteString.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CodePointString.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Inflector
│  │  │  │  ├─ EnglishInflector.php
│  │  │  │  ├─ FrenchInflector.php
│  │  │  │  ├─ InflectorInterface.php
│  │  │  │  └─ SpanishInflector.php
│  │  │  ├─ LICENSE
│  │  │  ├─ LazyString.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  ├─ data
│  │  │  │  │  ├─ wcswidth_table_wide.php
│  │  │  │  │  └─ wcswidth_table_zero.php
│  │  │  │  └─ functions.php
│  │  │  ├─ Slugger
│  │  │  │  ├─ AsciiSlugger.php
│  │  │  │  └─ SluggerInterface.php
│  │  │  ├─ TruncateMode.php
│  │  │  ├─ UnicodeString.php
│  │  │  └─ composer.json
│  │  ├─ translation
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Catalogue
│  │  │  │  ├─ AbstractOperation.php
│  │  │  │  ├─ MergeOperation.php
│  │  │  │  ├─ OperationInterface.php
│  │  │  │  └─ TargetOperation.php
│  │  │  ├─ CatalogueMetadataAwareInterface.php
│  │  │  ├─ Command
│  │  │  │  ├─ TranslationLintCommand.php
│  │  │  │  ├─ TranslationPullCommand.php
│  │  │  │  ├─ TranslationPushCommand.php
│  │  │  │  ├─ TranslationTrait.php
│  │  │  │  └─ XliffLintCommand.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ TranslationDataCollector.php
│  │  │  ├─ DataCollectorTranslator.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ DataCollectorTranslatorPass.php
│  │  │  │  ├─ LoggingTranslatorPass.php
│  │  │  │  ├─ TranslationDumperPass.php
│  │  │  │  ├─ TranslationExtractorPass.php
│  │  │  │  ├─ TranslatorPass.php
│  │  │  │  └─ TranslatorPathsPass.php
│  │  │  ├─ Dumper
│  │  │  │  ├─ CsvFileDumper.php
│  │  │  │  ├─ DumperInterface.php
│  │  │  │  ├─ FileDumper.php
│  │  │  │  ├─ IcuResFileDumper.php
│  │  │  │  ├─ IniFileDumper.php
│  │  │  │  ├─ JsonFileDumper.php
│  │  │  │  ├─ MoFileDumper.php
│  │  │  │  ├─ PhpFileDumper.php
│  │  │  │  ├─ PoFileDumper.php
│  │  │  │  ├─ QtFileDumper.php
│  │  │  │  ├─ XliffFileDumper.php
│  │  │  │  └─ YamlFileDumper.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ IncompleteDsnException.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidResourceException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MissingRequiredOptionException.php
│  │  │  │  ├─ NotFoundResourceException.php
│  │  │  │  ├─ ProviderException.php
│  │  │  │  ├─ ProviderExceptionInterface.php
│  │  │  │  ├─ RuntimeException.php
│  │  │  │  └─ UnsupportedSchemeException.php
│  │  │  ├─ Extractor
│  │  │  │  ├─ AbstractFileExtractor.php
│  │  │  │  ├─ ChainExtractor.php
│  │  │  │  ├─ ExtractorInterface.php
│  │  │  │  ├─ PhpAstExtractor.php
│  │  │  │  └─ Visitor
│  │  │  │     ├─ AbstractVisitor.php
│  │  │  │     ├─ ConstraintVisitor.php
│  │  │  │     ├─ TransMethodVisitor.php
│  │  │  │     └─ TranslatableMessageVisitor.php
│  │  │  ├─ Formatter
│  │  │  │  ├─ IntlFormatter.php
│  │  │  │  ├─ IntlFormatterInterface.php
│  │  │  │  ├─ MessageFormatter.php
│  │  │  │  └─ MessageFormatterInterface.php
│  │  │  ├─ IdentityTranslator.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Loader
│  │  │  │  ├─ ArrayLoader.php
│  │  │  │  ├─ CsvFileLoader.php
│  │  │  │  ├─ FileLoader.php
│  │  │  │  ├─ IcuDatFileLoader.php
│  │  │  │  ├─ IcuResFileLoader.php
│  │  │  │  ├─ IniFileLoader.php
│  │  │  │  ├─ JsonFileLoader.php
│  │  │  │  ├─ LoaderInterface.php
│  │  │  │  ├─ MoFileLoader.php
│  │  │  │  ├─ PhpFileLoader.php
│  │  │  │  ├─ PoFileLoader.php
│  │  │  │  ├─ QtFileLoader.php
│  │  │  │  ├─ XliffFileLoader.php
│  │  │  │  └─ YamlFileLoader.php
│  │  │  ├─ LocaleSwitcher.php
│  │  │  ├─ LoggingTranslator.php
│  │  │  ├─ MessageCatalogue.php
│  │  │  ├─ MessageCatalogueInterface.php
│  │  │  ├─ MetadataAwareInterface.php
│  │  │  ├─ Provider
│  │  │  │  ├─ AbstractProviderFactory.php
│  │  │  │  ├─ Dsn.php
│  │  │  │  ├─ FilteringProvider.php
│  │  │  │  ├─ NullProvider.php
│  │  │  │  ├─ NullProviderFactory.php
│  │  │  │  ├─ ProviderFactoryInterface.php
│  │  │  │  ├─ ProviderInterface.php
│  │  │  │  ├─ TranslationProviderCollection.php
│  │  │  │  └─ TranslationProviderCollectionFactory.php
│  │  │  ├─ PseudoLocalizationTranslator.php
│  │  │  ├─ README.md
│  │  │  ├─ Reader
│  │  │  │  ├─ TranslationReader.php
│  │  │  │  └─ TranslationReaderInterface.php
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ translation-status.php
│  │  │  │  ├─ data
│  │  │  │  │  └─ parents.json
│  │  │  │  ├─ functions.php
│  │  │  │  └─ schemas
│  │  │  │     ├─ xliff-core-1.2-transitional.xsd
│  │  │  │     ├─ xliff-core-2.0.xsd
│  │  │  │     └─ xml.xsd
│  │  │  ├─ StaticMessage.php
│  │  │  ├─ Test
│  │  │  │  ├─ AbstractProviderFactoryTestCase.php
│  │  │  │  ├─ IncompleteDsnTestTrait.php
│  │  │  │  ├─ ProviderFactoryTestCase.php
│  │  │  │  └─ ProviderTestCase.php
│  │  │  ├─ TranslatableMessage.php
│  │  │  ├─ Translator.php
│  │  │  ├─ TranslatorBag.php
│  │  │  ├─ TranslatorBagInterface.php
│  │  │  ├─ Util
│  │  │  │  ├─ ArrayConverter.php
│  │  │  │  └─ XliffUtils.php
│  │  │  ├─ Writer
│  │  │  │  ├─ TranslationWriter.php
│  │  │  │  └─ TranslationWriterInterface.php
│  │  │  └─ composer.json
│  │  ├─ translation-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ LICENSE
│  │  │  ├─ LocaleAwareInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ Test
│  │  │  │  └─ TranslatorTest.php
│  │  │  ├─ TranslatableInterface.php
│  │  │  ├─ TranslatorInterface.php
│  │  │  ├─ TranslatorTrait.php
│  │  │  └─ composer.json
│  │  ├─ uid
│  │  │  ├─ AbstractUid.php
│  │  │  ├─ BinaryUtil.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  ├─ GenerateUlidCommand.php
│  │  │  │  ├─ GenerateUuidCommand.php
│  │  │  │  ├─ InspectUlidCommand.php
│  │  │  │  └─ InspectUuidCommand.php
│  │  │  ├─ Exception
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  └─ LogicException.php
│  │  │  ├─ Factory
│  │  │  │  ├─ MockUuidFactory.php
│  │  │  │  ├─ NameBasedUuidFactory.php
│  │  │  │  ├─ RandomBasedUuidFactory.php
│  │  │  │  ├─ TimeBasedUuidFactory.php
│  │  │  │  ├─ UlidFactory.php
│  │  │  │  └─ UuidFactory.php
│  │  │  ├─ HashableInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ MaxUlid.php
│  │  │  ├─ MaxUuid.php
│  │  │  ├─ NilUlid.php
│  │  │  ├─ NilUuid.php
│  │  │  ├─ README.md
│  │  │  ├─ TimeBasedUidInterface.php
│  │  │  ├─ Ulid.php
│  │  │  ├─ Uuid.php
│  │  │  ├─ UuidV1.php
│  │  │  ├─ UuidV3.php
│  │  │  ├─ UuidV4.php
│  │  │  ├─ UuidV5.php
│  │  │  ├─ UuidV6.php
│  │  │  ├─ UuidV7.php
│  │  │  ├─ UuidV8.php
│  │  │  └─ composer.json
│  │  ├─ var-dumper
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Caster
│  │  │  │  ├─ AddressInfoCaster.php
│  │  │  │  ├─ AmqpCaster.php
│  │  │  │  ├─ ArgsStub.php
│  │  │  │  ├─ Caster.php
│  │  │  │  ├─ ClassStub.php
│  │  │  │  ├─ ConstStub.php
│  │  │  │  ├─ CurlCaster.php
│  │  │  │  ├─ CutArrayStub.php
│  │  │  │  ├─ CutStub.php
│  │  │  │  ├─ DOMCaster.php
│  │  │  │  ├─ DateCaster.php
│  │  │  │  ├─ DoctrineCaster.php
│  │  │  │  ├─ DsCaster.php
│  │  │  │  ├─ DsPairStub.php
│  │  │  │  ├─ EnumStub.php
│  │  │  │  ├─ ExceptionCaster.php
│  │  │  │  ├─ FFICaster.php
│  │  │  │  ├─ FiberCaster.php
│  │  │  │  ├─ FrameStub.php
│  │  │  │  ├─ GdCaster.php
│  │  │  │  ├─ GmpCaster.php
│  │  │  │  ├─ ImagineCaster.php
│  │  │  │  ├─ ImgStub.php
│  │  │  │  ├─ IntlCaster.php
│  │  │  │  ├─ LinkStub.php
│  │  │  │  ├─ MemcachedCaster.php
│  │  │  │  ├─ MysqliCaster.php
│  │  │  │  ├─ OpenSSLCaster.php
│  │  │  │  ├─ PdoCaster.php
│  │  │  │  ├─ PgSqlCaster.php
│  │  │  │  ├─ ProxyManagerCaster.php
│  │  │  │  ├─ RdKafkaCaster.php
│  │  │  │  ├─ RedisCaster.php
│  │  │  │  ├─ ReflectionCaster.php
│  │  │  │  ├─ ResourceCaster.php
│  │  │  │  ├─ ScalarStub.php
│  │  │  │  ├─ SocketCaster.php
│  │  │  │  ├─ SplCaster.php
│  │  │  │  ├─ SqliteCaster.php
│  │  │  │  ├─ StubCaster.php
│  │  │  │  ├─ SymfonyCaster.php
│  │  │  │  ├─ TraceStub.php
│  │  │  │  ├─ UninitializedStub.php
│  │  │  │  ├─ UuidCaster.php
│  │  │  │  ├─ VirtualStub.php
│  │  │  │  ├─ XmlReaderCaster.php
│  │  │  │  └─ XmlResourceCaster.php
│  │  │  ├─ Cloner
│  │  │  │  ├─ AbstractCloner.php
│  │  │  │  ├─ ClonerInterface.php
│  │  │  │  ├─ Cursor.php
│  │  │  │  ├─ Data.php
│  │  │  │  ├─ DumperInterface.php
│  │  │  │  ├─ Stub.php
│  │  │  │  └─ VarCloner.php
│  │  │  ├─ Command
│  │  │  │  ├─ Descriptor
│  │  │  │  │  ├─ CliDescriptor.php
│  │  │  │  │  ├─ DumpDescriptorInterface.php
│  │  │  │  │  └─ HtmlDescriptor.php
│  │  │  │  └─ ServerDumpCommand.php
│  │  │  ├─ Dumper
│  │  │  │  ├─ AbstractDumper.php
│  │  │  │  ├─ CliDumper.php
│  │  │  │  ├─ ContextProvider
│  │  │  │  │  ├─ CliContextProvider.php
│  │  │  │  │  ├─ ContextProviderInterface.php
│  │  │  │  │  ├─ RequestContextProvider.php
│  │  │  │  │  └─ SourceContextProvider.php
│  │  │  │  ├─ ContextualizedDumper.php
│  │  │  │  ├─ DataDumperInterface.php
│  │  │  │  ├─ HtmlDumper.php
│  │  │  │  └─ ServerDumper.php
│  │  │  ├─ Exception
│  │  │  │  └─ ThrowingCasterException.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ var-dump-server
│  │  │  │  ├─ css
│  │  │  │  │  └─ htmlDescriptor.css
│  │  │  │  ├─ functions
│  │  │  │  │  └─ dump.php
│  │  │  │  └─ js
│  │  │  │     └─ htmlDescriptor.js
│  │  │  ├─ Server
│  │  │  │  ├─ Connection.php
│  │  │  │  └─ DumpServer.php
│  │  │  ├─ Test
│  │  │  │  └─ VarDumperTestTrait.php
│  │  │  ├─ VarDumper.php
│  │  │  └─ composer.json
│  │  └─ yaml
│  │     ├─ CHANGELOG.md
│  │     ├─ Command
│  │     │  └─ LintCommand.php
│  │     ├─ Dumper.php
│  │     ├─ Escaper.php
│  │     ├─ Exception
│  │     │  ├─ DumpException.php
│  │     │  ├─ ExceptionInterface.php
│  │     │  ├─ ParseException.php
│  │     │  └─ RuntimeException.php
│  │     ├─ Inline.php
│  │     ├─ LICENSE
│  │     ├─ Parser.php
│  │     ├─ README.md
│  │     ├─ Resources
│  │     │  └─ bin
│  │     │     └─ yaml-lint
│  │     ├─ Tag
│  │     │  └─ TaggedValue.php
│  │     ├─ Unescaper.php
│  │     ├─ Yaml.php
│  │     └─ composer.json
│  ├─ theseer
│  │  └─ tokenizer
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     ├─ composer.lock
│  │     └─ src
│  │        ├─ Exception.php
│  │        ├─ NamespaceUri.php
│  │        ├─ NamespaceUriException.php
│  │        ├─ Token.php
│  │        ├─ TokenCollection.php
│  │        ├─ TokenCollectionException.php
│  │        ├─ Tokenizer.php
│  │        └─ XMLSerializer.php
│  ├─ tijsverkoyen
│  │  └─ css-to-inline-styles
│  │     ├─ LICENSE.md
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Css
│  │        │  ├─ Processor.php
│  │        │  ├─ Property
│  │        │  │  ├─ Processor.php
│  │        │  │  └─ Property.php
│  │        │  └─ Rule
│  │        │     ├─ Processor.php
│  │        │     └─ Rule.php
│  │        └─ CssToInlineStyles.php
│  ├─ vlucas
│  │  └─ phpdotenv
│  │     ├─ LICENSE
│  │     ├─ composer.json
│  │     └─ src
│  │        ├─ Dotenv.php
│  │        ├─ Exception
│  │        │  ├─ ExceptionInterface.php
│  │        │  ├─ InvalidEncodingException.php
│  │        │  ├─ InvalidFileException.php
│  │        │  ├─ InvalidPathException.php
│  │        │  └─ ValidationException.php
│  │        ├─ Loader
│  │        │  ├─ Loader.php
│  │        │  ├─ LoaderInterface.php
│  │        │  └─ Resolver.php
│  │        ├─ Parser
│  │        │  ├─ Entry.php
│  │        │  ├─ EntryParser.php
│  │        │  ├─ Lexer.php
│  │        │  ├─ Lines.php
│  │        │  ├─ Parser.php
│  │        │  ├─ ParserInterface.php
│  │        │  └─ Value.php
│  │        ├─ Repository
│  │        │  ├─ Adapter
│  │        │  │  ├─ AdapterInterface.php
│  │        │  │  ├─ ApacheAdapter.php
│  │        │  │  ├─ ArrayAdapter.php
│  │        │  │  ├─ EnvConstAdapter.php
│  │        │  │  ├─ GuardedWriter.php
│  │        │  │  ├─ ImmutableWriter.php
│  │        │  │  ├─ MultiReader.php
│  │        │  │  ├─ MultiWriter.php
│  │        │  │  ├─ PutenvAdapter.php
│  │        │  │  ├─ ReaderInterface.php
│  │        │  │  ├─ ReplacingWriter.php
│  │        │  │  ├─ ServerConstAdapter.php
│  │        │  │  └─ WriterInterface.php
│  │        │  ├─ AdapterRepository.php
│  │        │  ├─ RepositoryBuilder.php
│  │        │  └─ RepositoryInterface.php
│  │        ├─ Store
│  │        │  ├─ File
│  │        │  │  ├─ Paths.php
│  │        │  │  └─ Reader.php
│  │        │  ├─ FileStore.php
│  │        │  ├─ StoreBuilder.php
│  │        │  ├─ StoreInterface.php
│  │        │  └─ StringStore.php
│  │        ├─ Util
│  │        │  ├─ Regex.php
│  │        │  └─ Str.php
│  │        └─ Validator.php
│  ├─ voku
│  │  └─ portable-ascii
│  │     ├─ .deepsource.toml
│  │     ├─ CHANGELOG.md
│  │     ├─ LICENSE.txt
│  │     ├─ README.md
│  │     ├─ composer.json
│  │     └─ src
│  │        └─ voku
│  │           └─ helper
│  │              ├─ ASCII.php
│  │              └─ data
│  │                 ├─ ascii_by_languages.php
│  │                 ├─ ascii_extras_by_languages.php
│  │                 ├─ ascii_language_max_key.php
│  │                 ├─ ascii_ord.php
│  │                 ├─ x000.php
│  │                 ├─ x001.php
│  │                 ├─ x002.php
│  │                 ├─ x003.php
│  │                 ├─ x004.php
│  │                 ├─ x005.php
│  │                 ├─ x006.php
│  │                 ├─ x007.php
│  │                 ├─ x009.php
│  │                 ├─ x00a.php
│  │                 ├─ x00b.php
│  │                 ├─ x00c.php
│  │                 ├─ x00d.php
│  │                 ├─ x00e.php
│  │                 ├─ x00f.php
│  │                 ├─ x010.php
│  │                 ├─ x011.php
│  │                 ├─ x012.php
│  │                 ├─ x013.php
│  │                 ├─ x014.php
│  │                 ├─ x015.php
│  │                 ├─ x016.php
│  │                 ├─ x017.php
│  │                 ├─ x018.php
│  │                 ├─ x01d.php
│  │                 ├─ x01e.php
│  │                 ├─ x01f.php
│  │                 ├─ x020.php
│  │                 ├─ x021.php
│  │                 ├─ x022.php
│  │                 ├─ x023.php
│  │                 ├─ x024.php
│  │                 ├─ x025.php
│  │                 ├─ x026.php
│  │                 ├─ x027.php
│  │                 ├─ x028.php
│  │                 ├─ x029.php
│  │                 ├─ x02a.php
│  │                 ├─ x02c.php
│  │                 ├─ x02e.php
│  │                 ├─ x02f.php
│  │                 ├─ x030.php
│  │                 ├─ x031.php
│  │                 ├─ x032.php
│  │                 ├─ x033.php
│  │                 ├─ x04d.php
│  │                 ├─ x04e.php
│  │                 ├─ x04f.php
│  │                 ├─ x050.php
│  │                 ├─ x051.php
│  │                 ├─ x052.php
│  │                 ├─ x053.php
│  │                 ├─ x054.php
│  │                 ├─ x055.php
│  │                 ├─ x056.php
│  │                 ├─ x057.php
│  │                 ├─ x058.php
│  │                 ├─ x059.php
│  │                 ├─ x05a.php
│  │                 ├─ x05b.php
│  │                 ├─ x05c.php
│  │                 ├─ x05d.php
│  │                 ├─ x05e.php
│  │                 ├─ x05f.php
│  │                 ├─ x060.php
│  │                 ├─ x061.php
│  │                 ├─ x062.php
│  │                 ├─ x063.php
│  │                 ├─ x064.php
│  │                 ├─ x065.php
│  │                 ├─ x066.php
│  │                 ├─ x067.php
│  │                 ├─ x068.php
│  │                 ├─ x069.php
│  │                 ├─ x06a.php
│  │                 ├─ x06b.php
│  │                 ├─ x06c.php
│  │                 ├─ x06d.php
│  │                 ├─ x06e.php
│  │                 ├─ x06f.php
│  │                 ├─ x070.php
│  │                 ├─ x071.php
│  │                 ├─ x072.php
│  │                 ├─ x073.php
│  │                 ├─ x074.php
│  │                 ├─ x075.php
│  │                 ├─ x076.php
│  │                 ├─ x077.php
│  │                 ├─ x078.php
│  │                 ├─ x079.php
│  │                 ├─ x07a.php
│  │                 ├─ x07b.php
│  │                 ├─ x07c.php
│  │                 ├─ x07d.php
│  │                 ├─ x07e.php
│  │                 ├─ x07f.php
│  │                 ├─ x080.php
│  │                 ├─ x081.php
│  │                 ├─ x082.php
│  │                 ├─ x083.php
│  │                 ├─ x084.php
│  │                 ├─ x085.php
│  │                 ├─ x086.php
│  │                 ├─ x087.php
│  │                 ├─ x088.php
│  │                 ├─ x089.php
│  │                 ├─ x08a.php
│  │                 ├─ x08b.php
│  │                 ├─ x08c.php
│  │                 ├─ x08d.php
│  │                 ├─ x08e.php
│  │                 ├─ x08f.php
│  │                 ├─ x090.php
│  │                 ├─ x091.php
│  │                 ├─ x092.php
│  │                 ├─ x093.php
│  │                 ├─ x094.php
│  │                 ├─ x095.php
│  │                 ├─ x096.php
│  │                 ├─ x097.php
│  │                 ├─ x098.php
│  │                 ├─ x099.php
│  │                 ├─ x09a.php
│  │                 ├─ x09b.php
│  │                 ├─ x09c.php
│  │                 ├─ x09d.php
│  │                 ├─ x09e.php
│  │                 ├─ x09f.php
│  │                 ├─ x0a0.php
│  │                 ├─ x0a1.php
│  │                 ├─ x0a2.php
│  │                 ├─ x0a3.php
│  │                 ├─ x0a4.php
│  │                 ├─ x0ac.php
│  │                 ├─ x0ad.php
│  │                 ├─ x0ae.php
│  │                 ├─ x0af.php
│  │                 ├─ x0b0.php
│  │                 ├─ x0b1.php
│  │                 ├─ x0b2.php
│  │                 ├─ x0b3.php
│  │                 ├─ x0b4.php
│  │                 ├─ x0b5.php
│  │                 ├─ x0b6.php
│  │                 ├─ x0b7.php
│  │                 ├─ x0b8.php
│  │                 ├─ x0b9.php
│  │                 ├─ x0ba.php
│  │                 ├─ x0bb.php
│  │                 ├─ x0bc.php
│  │                 ├─ x0bd.php
│  │                 ├─ x0be.php
│  │                 ├─ x0bf.php
│  │                 ├─ x0c0.php
│  │                 ├─ x0c1.php
│  │                 ├─ x0c2.php
│  │                 ├─ x0c3.php
│  │                 ├─ x0c4.php
│  │                 ├─ x0c5.php
│  │                 ├─ x0c6.php
│  │                 ├─ x0c7.php
│  │                 ├─ x0c8.php
│  │                 ├─ x0c9.php
│  │                 ├─ x0ca.php
│  │                 ├─ x0cb.php
│  │                 ├─ x0cc.php
│  │                 ├─ x0cd.php
│  │                 ├─ x0ce.php
│  │                 ├─ x0cf.php
│  │                 ├─ x0d0.php
│  │                 ├─ x0d1.php
│  │                 ├─ x0d2.php
│  │                 ├─ x0d3.php
│  │                 ├─ x0d4.php
│  │                 ├─ x0d5.php
│  │                 ├─ x0d6.php
│  │                 ├─ x0d7.php
│  │                 ├─ x0f9.php
│  │                 ├─ x0fa.php
│  │                 ├─ x0fb.php
│  │                 ├─ x0fc.php
│  │                 ├─ x0fd.php
│  │                 ├─ x0fe.php
│  │                 ├─ x0ff.php
│  │                 ├─ x1d4.php
│  │                 ├─ x1d5.php
│  │                 ├─ x1d6.php
│  │                 ├─ x1d7.php
│  │                 └─ x1f1.php
│  └─ zircote
│     └─ swagger-php
│        ├─ CONTRIBUTING.md
│        ├─ LICENSE
│        ├─ NOTICE
│        ├─ README.md
│        ├─ bin
│        │  └─ openapi
│        ├─ composer.json
│        ├─ package.json
│        ├─ rector.php
│        └─ src
│           ├─ Analysers
│           │  ├─ AnalyserInterface.php
│           │  ├─ AnnotationFactoryInterface.php
│           │  ├─ AttributeAnnotationFactory.php
│           │  ├─ ComposerAutoloaderScanner.php
│           │  ├─ DocBlockAnnotationFactory.php
│           │  ├─ DocBlockParser.php
│           │  ├─ ReflectionAnalyser.php
│           │  └─ TokenScanner.php
│           ├─ Analysis.php
│           ├─ Annotations
│           │  ├─ AbstractAnnotation.php
│           │  ├─ AdditionalProperties.php
│           │  ├─ Attachable.php
│           │  ├─ Components.php
│           │  ├─ Contact.php
│           │  ├─ CookieParameter.php
│           │  ├─ Delete.php
│           │  ├─ Discriminator.php
│           │  ├─ Encoding.php
│           │  ├─ Examples.php
│           │  ├─ ExternalDocumentation.php
│           │  ├─ Flow.php
│           │  ├─ Get.php
│           │  ├─ Head.php
│           │  ├─ Header.php
│           │  ├─ HeaderParameter.php
│           │  ├─ Info.php
│           │  ├─ Items.php
│           │  ├─ JsonContent.php
│           │  ├─ License.php
│           │  ├─ Link.php
│           │  ├─ MediaType.php
│           │  ├─ OpenApi.php
│           │  ├─ Operation.php
│           │  ├─ Options.php
│           │  ├─ Parameter.php
│           │  ├─ Patch.php
│           │  ├─ PathItem.php
│           │  ├─ PathParameter.php
│           │  ├─ Post.php
│           │  ├─ Property.php
│           │  ├─ Put.php
│           │  ├─ Query.php
│           │  ├─ QueryParameter.php
│           │  ├─ RequestBody.php
│           │  ├─ Response.php
│           │  ├─ Schema.php
│           │  ├─ SecurityScheme.php
│           │  ├─ Server.php
│           │  ├─ ServerVariable.php
│           │  ├─ Tag.php
│           │  ├─ Trace.php
│           │  ├─ Webhook.php
│           │  ├─ Xml.php
│           │  └─ XmlContent.php
│           ├─ Attributes
│           │  ├─ AdditionalProperties.php
│           │  ├─ Attachable.php
│           │  ├─ Components.php
│           │  ├─ Contact.php
│           │  ├─ CookieParameter.php
│           │  ├─ Delete.php
│           │  ├─ Discriminator.php
│           │  ├─ Encoding.php
│           │  ├─ Examples.php
│           │  ├─ ExternalDocumentation.php
│           │  ├─ Flow.php
│           │  ├─ Get.php
│           │  ├─ Head.php
│           │  ├─ Header.php
│           │  ├─ HeaderParameter.php
│           │  ├─ Info.php
│           │  ├─ Items.php
│           │  ├─ JsonContent.php
│           │  ├─ License.php
│           │  ├─ Link.php
│           │  ├─ MediaType.php
│           │  ├─ OpenApi.php
│           │  ├─ OperationTrait.php
│           │  ├─ Options.php
│           │  ├─ Parameter.php
│           │  ├─ ParameterTrait.php
│           │  ├─ Patch.php
│           │  ├─ PathItem.php
│           │  ├─ PathParameter.php
│           │  ├─ Post.php
│           │  ├─ Property.php
│           │  ├─ Put.php
│           │  ├─ Query.php
│           │  ├─ QueryParameter.php
│           │  ├─ RequestBody.php
│           │  ├─ Response.php
│           │  ├─ Schema.php
│           │  ├─ SecurityScheme.php
│           │  ├─ Server.php
│           │  ├─ ServerVariable.php
│           │  ├─ Tag.php
│           │  ├─ Trace.php
│           │  ├─ Webhook.php
│           │  ├─ Xml.php
│           │  └─ XmlContent.php
│           ├─ Context.php
│           ├─ Generator.php
│           ├─ GeneratorAwareInterface.php
│           ├─ GeneratorAwareTrait.php
│           ├─ Loggers
│           │  ├─ ConsoleLogger.php
│           │  └─ DefaultLogger.php
│           ├─ OpenApiException.php
│           ├─ Pipeline.php
│           ├─ Processors
│           │  ├─ AugmentDiscriminators.php
│           │  ├─ AugmentItems.php
│           │  ├─ AugmentMediaType.php
│           │  ├─ AugmentParameters.php
│           │  ├─ AugmentProperties.php
│           │  ├─ AugmentRefs.php
│           │  ├─ AugmentRequestBody.php
│           │  ├─ AugmentSchemas.php
│           │  ├─ AugmentTags.php
│           │  ├─ BuildPaths.php
│           │  ├─ CleanUnmerged.php
│           │  ├─ CleanUnusedComponents.php
│           │  ├─ Concerns
│           │  │  ├─ AnnotationTrait.php
│           │  │  ├─ DocblockTrait.php
│           │  │  ├─ MergePropertiesTrait.php
│           │  │  └─ RefTrait.php
│           │  ├─ DocBlockDescriptions.php
│           │  ├─ ExpandClasses.php
│           │  ├─ ExpandEnums.php
│           │  ├─ ExpandInterfaces.php
│           │  ├─ ExpandTraits.php
│           │  ├─ MergeIntoComponents.php
│           │  ├─ MergeIntoOpenApi.php
│           │  ├─ MergeJsonContent.php
│           │  ├─ MergeXmlContent.php
│           │  ├─ OperationId.php
│           │  └─ PathFilter.php
│           ├─ Serializer.php
│           ├─ Type
│           │  ├─ AbstractTypeResolver.php
│           │  ├─ LegacyTypeResolver.php
│           │  └─ TypeInfoTypeResolver.php
│           ├─ TypeResolverInterface.php
│           └─ Util.php
└─ vite.config.js

```
