<?php
namespace Sail3\Model;

use Silex\Application;
/**
 * Clase modelo para la tabla Contacto.
 */
class ContactoModel {

  private $db;

  public function __construct(Application $app) {
    $this->db = $app['db'];
  }

  public function retrieveAll() {
    return $this->db->fetchAll("select * from contacto");
  }
  public function retrieveById($id) {
    return $this->db->fetchAssoc("select * from contacto where idcontacto = :idcontacto",array(
      "idcontacto" => $id,
      ));
  }

  public function register($nombre, $apellido, $direccion) {
    /*    // $sql = "insert into contacto (nombre, apellido, direccion) values (:nombre, :apellido, :direccion)";
        // $stm = $app['db']->prepare($sql);
        // $stm->bindValue("nombre",$nombre);
        // $stm->bindValue("apellido",$apellido);
        // $stm->bindValue("direccion",$direccion);
        // // print_r($stm->execute()->lastInsertId('idcontacto'));
        // print_r( $app['db']->lastInsertId('idcontacto'));
        // return $app['db']->lastInsertId();
    */
    $this->db->insert('contacto', array(
      "nombre" => $nombre,
      "apellido" => $apellido,
      "direccion" => $direccion,
    ));
    return ($this->db->lastInsertId());
  }

  public function update($id, $nombre, $apellido, $direccion) {
    return $this->db->executeUpdate("UPDATE contacto set nombre= :nombre, apellido = :apellido, direccion = :direccion WHERE idcontacto= :idcontacto",
      array(
        "nombre" => $nombre,
        "apellido" => $apellido,
        "direccion" => $direccion,
        "idcontacto" => $id,
      )
    );
  }
  public function delete($id) {
    $this->db->delete("contacto",array(
      "idcontacto" => $id,
    ));
  }
}
