<?php

/**
 * 
 * ¿Cómo puedo resumir toda esta clase EN UN SOLO PASO?
 * 
 * Cosas comunes
 * 
 * menu, titulo, estilos (header.php)
 * el pie, js (footer.php)
 * 
 * 
 * Esta clase representa el proceso de renderizar una página
 * 
 * renderizar => mostrar en la ui
 * 
 */
class PageRenderer
{

  private function before_render($pagina)
  {
    require_once 'layout/header.php';
  }

  private function on_render($pagina)
  {
    require_once $pagina.'.php';
  }

  private function after_render($pagina)
  {
    require_once 'layout/footer.php';
  }

  /**
   * La función render(), en este caso, será el resumen
   * de toda la funcionalidad de esta clase. Es decir,
   * toda la clase sirve a render()
   */
  public function render($pagina)
  {
    $this->before_render($pagina);
    $this->on_render($pagina);
    $this->after_render($pagina);
  }

}