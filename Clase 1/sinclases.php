<?php

// Todo sistema es un conjunto de entidades independientes (objeto) relacionadas entre sí.

// ¿Cómo puedo generalizar esto?

// ¿Cuántas líneas de código debo cambiar si quiero agregar una propiedad a Producto? 12

// PRODUCTO 1

$producto001Codigo = "001";
$producto001Nombre = "Celular";
$producto001Precio = 255.65;
$producto001Marca = "Apple"; // CAMBIO

function producto_001_json($nombre, $codigo, $precio, $marca) { // CAMBIO
  echo json_encode([
    'nombre' => $nombre,
    'codigo' => $codigo,
    'precio' => $precio,
    'marca' => $marca // CAMBIO
  ]);
}

producto_001_json($producto001Nombre, $producto001Codigo, $producto001Precio, $producto001Marca); // CAMBIO



// PRODUCTO 2

$producto002Codigo = "002";
$producto002Nombre = "Teclado";
$producto002Precio = 255.65;
$producto002Marca = "LG"; // CAMBIO

function producto_002_json($nombre, $codigo, $precio, $marca) { // CAMBIO
  echo json_encode([
    'nombre' => $nombre,
    'codigo' => $codigo,
    'precio' => $precio,
    'marca' => $marca // CAMBIO
  ]);
}

producto_002_json($producto002Nombre, $producto002Codigo, $producto002Precio, $producto002Marca); // CAMBIO



// PRODUCTO 3

$producto003Codigo = "003";
$producto003Nombre = "Mouse";
$producto003Precio = 255.65;
$producto003Marca = "LG"; // CAMBIO

function producto_003_json($nombre, $codigo, $precio, $marca) { // CAMBIO
  echo json_encode([
    'nombre' => $nombre,
    'codigo' => $codigo,
    'precio' => $precio,
    'marca' => $marca // CAMBIO
  ]);
}

producto_003_json($producto003Nombre, $producto003Codigo, $producto003Precio, $producto003Marca); // CAMBIO


