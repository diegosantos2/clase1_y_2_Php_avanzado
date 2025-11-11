<?php
/*
[TIPO] class NOMBRE [IMPLEMENTACIONES / HERENCIA]
{
  MIEMBROS => Una característica de un objeto (atributos - variables o metodos - funciones)
}
*/

class Producto
{
  // Atributo = Variable + Acceso
  private $campos = [];

  // Método = Función + Acceso
  public function AsignarValores($campos = [])
  {
    foreach ($campos as $campo => $valor) {
      $this->campos[$campo] = $valor;
    }
  }

  public function ConvertirAJson()
  {
    echo json_encode($this->campos);
  }
}

$p001 = new Producto();
$p001->AsignarValores([
  'codigo' => '001', 
  'nombre' => 'Celular', 
  'precio' => 2500,
  'marca' => 'Apple' // CAMBIO
]);
$p001->ConvertirAJson();

$p002 = new Producto();
$p002->AsignarValores([
  'codigo' => '002', 
  'nombre' => 'Mouse', 
  'precio' => 1500,
  'marca' => 'Lg' // CAMBIO
]);
$p002->ConvertirAJson();

$p003 = new Producto();
$p003->AsignarValores([
  'codigo' => '003', 
  'nombre' => 'Teclado', 
  'precio' => 2000,
  'marca' => 'Lg' // CAMBIO
]);
$p003->ConvertirAJson();

$p004 = new Producto();
$p004->AsignarValores([
  'codigo' => '003', 
  'nombre' => 'Teclado'
]);
$p004->ConvertirAJson();

$p005 = new Producto();
$p005->AsignarValores([
  'codigo' => '003', 
  'nombre' => 'Teclado', 
  'precio' => 2000,
  'marca' => 'Lg',
  'stock' => 8
]);
$p005->ConvertirAJson();