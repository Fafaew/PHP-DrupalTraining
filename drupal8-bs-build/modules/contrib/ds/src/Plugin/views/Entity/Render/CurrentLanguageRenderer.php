<?php

namespace Drupal\ds\Plugin\views\Entity\Render;

use Drupal\views\ResultRow;

/**
 * Renders entities in the current language.
 */
class CurrentLanguageRenderer extends RendererBase {

  /**
   * Returns NULL so that the current language is used.
   *
   * @param \Drupal\views\ResultRow $row
   *   The result row.
   *
   * @return string
   */
  public function getLangcode(ResultRow $row) {
    return $this->languageManager->getCurrentLanguage()->getId();
  }

}
