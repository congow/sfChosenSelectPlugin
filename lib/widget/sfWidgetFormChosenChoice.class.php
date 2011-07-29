<?php

/*
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class sfWidgetFormChosenChoice
 *
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */
class sfWidgetFormChosenChoice extends sfWidgetFormChoice
{
  const PLUGIN      = 'sfChosenSelectPlugin';
  const HTML_CLASS  = 'chz-select';
  
  public function render($name, $value = null, $attributes = array(), $errors = array())
  { 
    if (isset($attributes['class']) && $attributes['class'])
    {
      $attributes['class'] .= ' ' . self::HTML_CLASS;
    }
    else
    {
      $attributes['class'] = self::HTML_CLASS;
    }
    
    return parent::render($name, $value, $attributes, $errors);
  }
  
  /**
   * Gets the stylesheet paths associated with the widget.
   *
   * @return array An array of stylesheet paths
   */
  public function getStylesheets()
  {
    return array('/' . self::PLUGIN . '/chosen.css' => 'all');
  }

  /**
   * Gets the JavaScript paths associated with the widget.
   *
   * @return array An array of JavaScript paths
   */
  public function getJavascripts()
  {
    return array(
      '/' . self::PLUGIN . '/chosen.jquery.min.js',
      '/' . self::PLUGIN . '/chosen.js',
    );
  }

}

