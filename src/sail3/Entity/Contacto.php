<?php
namespace Sail3\Entity;

/**
 * Clase entidad para la tabla Contacto.
 */
class Contacto {

    protected $nombre;
    protected $apellido;
    protected $direccion;

    public function getNombre() {
      return $this->nombre;
    }
    public function setNombre($nombre = "") {
      $this->nombre = $nombre;
    }

    public function getApellido() {
      return $this->apellido;
    }
    public function setApellido($nombre = "") {
      $this->apellido = $nombre;
    }

    public function getDireccion() {
      return $this->direccion;
    }
    public function setDireccion($nombre = "") {
      $this->direccion = $nombre;
    }



}
