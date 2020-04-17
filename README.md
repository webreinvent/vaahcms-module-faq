# vaahcms-module-faq
Faq Module for VaahCMS


#### To Run Modules Dusk Test:
- Change path of dusk in `phpunit.dusk.xml` to following:
```xml
...
<directory suffix="Test.php">./VaahCms/Modules/Faq/Tests/Browser</directory>
...
```

- Then run `php artisan dusk`