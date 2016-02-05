<?php

/**
 * @file
 * Contains \Drupal\views_pdf\Plugin\views\style\Unformatted.
 */

namespace Drupal\views_pdf\Plugin\views\style;

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
 *   theme = "views_view_unformatted",
 *   display_types = {"normal"}
 * )
 */
class Unformatted extends StylePluginBase {

}
