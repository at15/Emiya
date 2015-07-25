# Design pattern

From this repo https://github.com/domnikl/DesignPatternsPHP

Only pick some of them that might be useful for this project


## [Prototype](http://designpatternsphp.readthedocs.org/en/latest/Creational/Prototype/README.html)

> To avoid the cost of creating objects the standard way (new Foo()) and instead create a prototype and clone it.
> Large amounts of data (e.g. create 1,000,000 rows in a database at once via a ORM).

## [DataMapper](http://designpatternsphp.readthedocs.org/en/latest/Structural/DataMapper/README.html)

> The key point of this pattern is, unlike Active Record pattern, the data model follows Single Responsibility Principle.

- A data entity class, represent one row in database
- A dataMapper class that do CRUD, DAO. 

TODO:example

## [DI](http://designpatternsphp.readthedocs.org/en/latest/Structural/DependencyInjection/README.html)

WORKING

TODO:

Adapter http://designpatternsphp.readthedocs.org/en/latest/Structural/Adapter/README.html

Decorator can be used to render data in different ways, like json and xml

Decorator http://designpatternsphp.readthedocs.org/en/latest/Structural/Decorator/README.html