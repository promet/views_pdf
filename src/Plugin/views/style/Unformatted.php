<?php

/**
 * @file
 * Contains \Drupal\views_pdf\Plugin\views\style\Unformatted.
 */

namespace Drupal\views_pdf\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Unformatted style plugin.
 *
 * Renders rows one after another with no decorations.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "views_pdf_unformatted",
 *   title = @Translation("Unformatted PDF"),
 *   help = @Translation("Displays rows one after another."),
 *   theme = "views_pdf_unformatted",
 *   display_types = {"normal"}
 * )
 */
class Unformatted extends StylePluginBase {

  /**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;

}
