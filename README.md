# BCPageLayoutOverrideTestBundle for eZ Publish / eZ Platform

BCPageLayoutOverrideTestBundle represent a working, ready to use example of all that is required to override the eZDemoBundle pagelayout.html.twig template provided in the default demo front-end website with eZ Publish / eZ Platform

This solution was also extended to provide an example of the code required to customize template override the eZDemoBundle login.html.twig template

Later this solution was extended to provide an example of the code required to override content_field templates provided from other bundles, our first example is of the FieldType provided by the NetgenEnhancedSelectionBundle, https://github.com/netgen/NetgenEnhancedSelectionBundle

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

* [Forum thread which inspired the pagelayout example](http://share.ez.no/forums/ez-publish-5-platform/best-way-to-use-override-system-in-ez-publish-5#comment86463)

* [Forum thread which inspired the login example extensions](http://share.ez.no/forums/developer/how-to-add-a-login-box-to-the-frontpage-ezpublish-5.4)

* [Related eZ design bundle inheritance documentation](https://doc.ez.no/display/EZP/How+to+create+a+new+design+using+Bundle+Inheritance)

* [Related Symfony bundle inheritance documentation](http://symfony.com/doc/current/cookbook/bundles/inheritance.html)

* [Related eZ bundle inheritance issue possible when overriding DemoBundle](https://jira.ez.no/browse/EZP-23575)

* [Related eZ Authentication documentation](https://doc.ez.no/display/EZP/Authentication#Authentication-AuthenticationusingSymfonySecuritycomponent)