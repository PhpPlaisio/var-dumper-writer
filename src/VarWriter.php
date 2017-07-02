<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Debug;

/**
 * Interface for classes for writing a var dump into a desired format to a desired destination.
 */
interface VarWriter
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called by the Var Dumper before dumping the first variable.
   */
  public function start();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called by the Var Dumper after dumping the last variable.
   */
  public function stop();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called when all elements of an array have been dumped.
   *
   * @param int    $id   The ID of the array.
   * @param string $name The name of the variable.
   */
  public function writeArrayClose($id, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called before dumping the elements of an array.
   *
   * @param int    $id   The ID of the array.
   * @param string $name The name of the variable.
   */
  public function writeArrayOpen($id, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to an array.
   *
   * @param int    $ref  The ID of the array that has been dumped already.
   * @param string $name The name of the variable.
   */
  public function writeArrayReference($ref, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a boolean.
   *
   * @param int|null $id    The ID of the value.
   * @param int|null $ref   The ID of the value if the variable is a reference to a value that has been dumped already.
   * @param bool     $value The boolean.
   * @param string   $name  The name of the variable.
   */
  public function writeBool($id, $ref, &$value, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a float.
   *
   * @param int|null $id    The ID of the value.
   * @param int|null $ref   The ID of the value if the variable is a reference to a value that has been dumped already.
   * @param float    $value The value.
   * @param string   $name  The name of the variable.
   */
  public function writeFloat($id, $ref, &$value, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps an integer.
   *
   * @param int|null $id    The ID of the value.
   * @param int|null $ref   The ID of the value if the variable is a reference to a value that has been dumped already.
   * @param bool     $value The value.
   * @param string   $name  The name of the variable.
   */
  public function writeInt($id, $ref, &$value, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a null.
   *
   * @param int|null $id   The ID of the value.
   * @param int|null $ref  The ID of the value if the variable is a reference to a value that has been dumped already.
   * @param string   $name The name of the variable.
   */
  public function writeNull($id, $ref, $name);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called when all fields of an object have been dumped.
   *
   * @param int    $id    The ID of the object.
   * @param string $name  The name of the variable.
   * @param string $class The name of the class.
   */
  public function writeObjectClose($id, $name, $class);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called before dumping the fields of an object.
   *
   * @param int    $id    The ID of the object.
   * @param string $name  The name of the variable.
   * @param string $class The name of the class.
   */
  public function writeObjectOpen($id, $name, $class);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to an object.
   *
   * @param int    $ref   The ID of the object that has been dumped already.
   * @param string $name  The name of the variable.
   * @param string $class The name of the class.
   */
  public function writeObjectReference($ref, $name, $class);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a resource.
   *
   * @param int|null $id   The ID of the resource.
   * @param int|null $ref  The ID of the value if the variable is a reference to a value that has been dumped already.
   * @param string   $name The name of the variable.
   * @param string   $type The type of the resource.
   */
  public function writeResource($id, $ref, $name, $type);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a string.
   *
   * @param int|null $id    The ID of the value.
   * @param int|null $ref   The ID of the value if the variable is a reference to a value that has been dumped already.
   * @param string   $value The value.
   * @param string   $name  The name of the variable.
   */
  public function writeString($id, $ref, &$value, $name);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
