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
   */
  public function writeArrayClose();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called before dumping the elements of an array.
   *
   * @param int    $id      The ID of the array.
   * @param string $name    The name of the variable.
   * @param string $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeArrayOpen($id, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to an array.
   *
   * @param int    $ref     The ID of the array that has been dumped already.
   * @param string $name    The name of the variable.
   * @param string $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeArrayReference($ref, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a boolean.
   *
   * @param int|null $id      The ID of the value.
   * @param int|null $ref     The ID of the value if the variable is a reference to a value that has been dumped
   *                          already.
   * @param bool     $value   The boolean.
   * @param string   $name    The name of the variable.
   * @param string   $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeBool($id, $ref, &$value, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a float.
   *
   * @param int|null $id      The ID of the value.
   * @param int|null $ref     The ID of the value if the variable is a reference to a value that has been dumped
   *                          already.
   * @param bool     $value   The value.
   * @param string   $name    The name of the variable.
   * @param string   $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeFloat($id, $ref, &$value, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps an integer.
   *
   * @param int|null $id      The ID of the value.
   * @param int|null $ref     The ID of the value if the variable is a reference to a value that has been dumped
   *                          already.
   * @param bool     $value   The value.
   * @param string   $name    The name of the variable.
   * @param string   $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeInt($id, $ref, &$value, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a null.
   *
   * @param int|null $id      The ID of the value.
   * @param int|null $ref     The ID of the value if the variable is a reference to a value that has been dumped
   *                          already.
   * @param string   $name    The name of the variable.
   * @param string   $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeNull($id, $ref, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called when all fields of an object have been dumped.
   */
  public function writeObjectClose();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called before dumping the fields of an object.
   *
   * @param int    $id      The ID of the object.
   * @param string $name    The name of the variable.
   * @param string $keyType When the name of the variable is key of an array the type of the key (int or string).
   * @param string $class   The name of the class.
   */
  public function writeObjectOpen($id, $name, $keyType, $class);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to an object.
   *
   * @param int    $ref     The ID of the object that has been dumped already.
   * @param string $name    The name of the variable.
   * @param string $keyType When the name of the variable is key of an array the type of the key (int or string).
   * @param string $class   The name of the class.
   */
  public function writeObjectReference($ref, $name, $keyType, $class);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a resource.
   *
   * @param int    $id      The ID of the resource.
   * @param string $name    The name of the variable.
   * @param string $keyType When the name of the variable is key of an array the type of the key (int or string).
   * @param string $type    The type of the resource.
   */
  public function writeResource($id, $name, $keyType, $type);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to resource.
   *
   * @param int    $ref     The ID of the referenced resource.
   * @param string $name    The name of the variable.
   * @param string $keyType When the name of the variable is key of an array the type of the key (int or string).
   * @param string $type    The type of the resource.
   */
  public function writeResourceReference($ref, $name, $keyType, $type);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a string.
   *
   * @param int|null $id      The ID of the value.
   * @param int|null $ref     The ID of the value if the variable is a reference to a value that has been dumped
   *                          already.
   * @param bool     $value   The value.
   * @param string   $name    The name of the variable.
   * @param string   $keyType When the name of the variable is key of an array the type of the key (int or string).
   */
  public function writeString($id, $ref, &$value, $name, $keyType);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
