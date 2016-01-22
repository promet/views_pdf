<?php

/**
 * @file
 * Contains \Drupal\views_pdf\Plugin\views\display\Page.
 */

namespace Drupal\views_pdf\Plugin\views\display;

use Drupal\views\Plugin\views\display\DisplayPluginBase;

/**
 * This class contains all the functionality of the PDF display.
 *
 * @ingroup views_display_plugins
 *
 * @ViewsDisplay(
 *   id = "pdf",
 *   title = @Translation("PDF Page"),
 *   admin = @Translation("PDF Page"),
 *   help = @Translation("Generates a PDF from views."),
 *   theme = "views_view",
 *   register_theme = FALSE,
 *   uses_menu_links = FALSE,
 * )
 */
class Page extends DisplayPluginBase {

}
