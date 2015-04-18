# BCPageLayoutOverrideTestBundle for eZ Publish / eZ Platform

BCPageLayoutOverrideTestBundle represent an working ready to use example of all that is required to override the eZDemoBundle pagelayout.html.twig template provided in the default demo front-end website with eZ Publish / eZ Platform

# Installation via Composer

    $ cd /path/to/ezpublish-root-directory; composer.phar require "brookinsconsulting/bcpagelayoutoverridetestbundle" "dev-master";

# Uninstall via Composer

    $ cd /path/to/ezpublish-root-directory; composer.phar remove brookinsconsulting/bcpagelayoutoverridetestbundle;

# Manual Activation

These steps are not required if the bundle is installed via composer.

* Edit `ezpublish/EzPublishKernel.php`

* Add the following line to the use statement blocks (at the bottom of existing list):

    `use BrookinsConsulting\BCPageLayoutOverrideTestBundle\BCPageLayoutOverrideTestBundle;`

* Add the following line to the registerBundles function's $bundles array definition (again at the bottom of the existing list)

    `, new BCPageLayoutOverrideTestBundle()`

* Here is a more verbose example of what you will see after making the required changes. Please note that you **must** add a comma after the last bundle definition **before** you add your own new custom bundle or you will introduce a php syntax error into the file.

    ```
    public function registerBundles()
    {
        $bundles = array(
            new FrameworkBundle(),

            // skipping existing bundle activation statements for brevity sake

            new OneupFlysystemBundle(),

            new BCPageLayoutOverrideTestBundle()

        );
```

If you extend this bundle to provide more features, than more installation steps may be required :)

# Documentation

* [Composer package](https://packagist.org/packages/brookinsconsulting/bcpagelayoutoverridetestbundle)

* [License](https://github.com/brookinsconsulting/bcpagelayoutoverridetestbundle/blob/master/LICENSE)

* [Forum thread which inspired this example](http://share.ez.no/forums/ez-publish-5-platform/best-way-to-use-override-system-in-ez-publish-5#comment86463)

* [Related bundle inheritance documentation](http://symfony.com/doc/current/cookbook/bundles/inheritance.html)

* [Related bundle inheritance issue possible when overriding DemoBundle](https://jira.ez.no/browse/EZP-23575)
