<?php

// ¿Cuántas líneas de código debo cambiar si quiero agregar una propiedad a Producto? 7

class Producto
{
  // Atributo = Variable + Acceso
  private $nombre;
  private $codigo;
  private $precio;
  private $marca;

  // Método = Función + Acceso
  public function AsignarValores($codigo, $nombre, $precio, $marca)
  {
    $this->nombre = $nombre;
    $this->codigo = $codigo;
    $this->precio = $precio;
    $this->marca = $marca;
  }

  public function ConvertirAJson()
  {
    echo json_encode([
      'codigo' => $this->codigo,
      'nombre' => $this->nombre,
      'precio' => $this->precio,
      'marca' => $this->marca
    ]);
  }
}