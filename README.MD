# Description
A quick symfony sandbox to try stuff out. Branch main contains skeleton. Each branch has a different POC

# EntryPoint
- Start a local server symfony serve -d 
- Usually localhost::8000/test (TestController)

# Prerequisites and Helpful Docs
- PHP 8.1 or greater
- Configure and create your DB 
  - https://symfony.com/doc/current/doctrine.html#configuring-the-database
- To create entities use the maker bundle
  - bin/console create:entity
- Migrations
  - https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema
- Fixtures
  - https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html#writing-fixtures
  - https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html#loading-fixtures