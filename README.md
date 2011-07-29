sfChosenSelectPlugin
======

Fancy selects
-----------------

  sfChosenSelectPlugin lets you use [chosen.js][1] for your selects.


Installation
-----------------

You can clone this repo via git:

    git clone git@github.com:congow/sfChosenSelectPlugin.git

or you can install it as an external SVN dependency:

    svn pe svn:externals plugins
    sfChosenSelectPlugin https://svn.github.com/congow/sfChosenSelectPlugin.git

or checkout via SVN:

    svn co https://svn.github.com/congow/sfChosenSelectPlugin.git plugins/sfChosenSelectPlugin

Don't forget to enable it in your application ( ProjectConfiguration::setup() ):

    $this->enablePlugins('sfChosenSelectPlugin');


Usage
----------------

Every time you want to apply chosenJS to one of your selects you only need to set the renderer class:
    
    $widget->setOption('renderer_class', 'sfWidgetFormChosenChoice');


[1]: http://harvesthq.github.com/chosen/
