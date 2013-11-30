CleentfaarDoctrineTablePrefixBundle
===================================

This bundle allows doctrine to recognize any prefix you might use on your table names (e.g. acme_).
It is an updated and revisioned version of the original bundle by GrifiS, which had a lot of compatibility issues and
missed some key things that I needed such as having Doctrine also recognize the prefix when generating entities.

In other words: doctrine will no longer create entities named ``AcmeFoobar`` (acme being the prefix), but only ``Foobar``,
this is because in my use-cases, the table prefix had no further meaning within the file structure, and leaving it in
would have added unnecessary differentiation among the entities.

The added behaviour mentioned above is still under development, so don't expect more then the default behaviour yet!

## Installation

### Step 1: Download CleentfaarDoctrineTablePrefixBundle using composer

Add CleentfaarDoctrineTablePrefixBundle in your composer.json:

``` js
{
    "require": {
        "cleentfaar/doctrine-table-prefix-bundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update cleentfaar/doctrine-table-prefix-bundle
```
Composer will install the bundle to your project's `vendor/cleentfaar` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Cleentfaar\Bundle\DoctrineTablePrefixBundle\CleentfaarDoctrineTablePrefixBundle(),
    );
}
```

Default prefix is "sf_".

You can change the prefix in your configuration:

``` yaml
# app/config/config.yml
cleentfaar_doctrine_table_prefix:
    prefix: sf_
```