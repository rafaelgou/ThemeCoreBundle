# Core Admin Theme

## deps

    [ThemeCoreBundle]
        git=git://github.com/rafaelgou/ThemeCoreBundle.git
        target=bundles/Theme/CoreBundle
        
(add to deps file and run `./bin/vendors install`)

## AppKernel

      //...
      
      new Theme\CoreBundle\ThemeCoreBundle(),

      //...


## autoload

      //...

      'Theme'            => __DIR__.'/../vendor/bundles',

      //...

