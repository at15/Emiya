# Use clone instead of new

http://designpatternsphp.readthedocs.org/en/latest/Creational/Prototype/README.html

## If the class doesn't have __clone 

clone will be faster and use less memory

clone

````
0.032917976379395
242280
251976
````

new

````
0.038219928741455
242560
252296
````

## If the class have __clone

clone

````
0.086632966995239
242928
252360
````

new

````
0.086632966995239
242928
252360
````

However, it seems clone won't call the `__construct` ? So it might be useful for orm.
