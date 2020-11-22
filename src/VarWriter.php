<?php
declare(strict_types=1);

namespace Plaisio\Debug;

/**
 * Interface for writing a var dump into a desired format to a desired destination.
 */
interface VarWriter
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called by the Var Dumper before dumping the first variable.
   *
   * @return void
   */
  public function start(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called by the Var Dumper after dumping the last variable.
   *
   * @return void
   */
  public function stop(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called when all elements of an array have been dumped.
   *
   * @param int             $id   The ID of the array.
   * @param string|int|null $name The name of the variable.
   *
   * @return void
   */
  public function writeArrayClose(int $id, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called before dumping the elements of an array.
   *
   * @param int             $id   The ID of the array.
   * @param string|int|null $name The name of the variable.
   *
   * @return void
   */
  public function writeArrayOpen(int $id, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to an array.
   *
   * @param int             $ref  The ID of the array that has been dumped already.
   * @param string|int|null $name The name of the variable.
   *
   * @return void
   */
  public function writeArrayReference(int $ref, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a boolean.
   *
   * @param int|null        $id    The ID of the value.
   * @param int|null        $ref   The ID of the value if the variable is a reference to a value that has been dumped
   *                               already.
   * @param bool            $value The boolean.
   * @param string|int|null $name  The name of the variable.
   *
   * @return void
   */
  public function writeBool(?int $id, ?int $ref, bool &$value, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a float.
   *
   * @param int|null        $id    The ID of the value.
   * @param int|null        $ref   The ID of the value if the variable is a reference to a value that has been dumped
   *                               already.
   * @param float           $value The value.
   * @param string|int|null $name  The name of the variable.
   *
   * @return void
   */
  public function writeFloat(?int $id, ?int $ref, float &$value, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps an integer.
   *
   * @param int|null        $id    The ID of the value.
   * @param int|null        $ref   The ID of the value if the variable is a reference to a value that has been dumped
   *                               already.
   * @param int             $value The value.
   * @param string|int|null $name  The name of the variable.
   *
   * @return void
   */
  public function writeInt(?int $id, ?int $ref, int &$value, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a null.
   *
   * @param int|null        $id   The ID of the value.
   * @param int|null        $ref  The ID of the value if the variable is a reference to a value that has been dumped
   *                              already.
   * @param string|int|null $name The name of the variable.
   *
   * @return void
   */
  public function writeNull(?int $id, ?int $ref, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called when all fields of an object have been dumped.
   *
   * @param int             $id    The ID of the object.
   * @param string|int|null $name  The name of the variable.
   * @param string          $class The name of the class.
   *
   * @return void
   */
  public function writeObjectClose(int $id, $name, string $class): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Will be called before dumping the fields of an object.
   *
   * @param int             $id    The ID of the object.
   * @param string|int|null $name  The name of the variable.
   * @param string          $class The name of the class.
   *
   * @return void
   */
  public function writeObjectOpen(int $id, $name, string $class): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a reference to an object.
   *
   * @param int             $ref   The ID of the object that has been dumped already.
   * @param string|int|null $name  The name of the variable.
   * @param string          $class The name of the class.
   *
   * @return void
   */
  public function writeObjectReference(int $ref, $name, string $class): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a resource.
   *
   * @param int|null        $id   The ID of the resource.
   * @param int|null        $ref  The ID of the value if the variable is a reference to a value that has been dumped
   *                              already.
   * @param string|int|null $name The name of the variable.
   * @param string          $type The type of the resource.
   *
   * @return void
   */
  public function writeResource(?int $id, ?int $ref, $name, string $type): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps a string.
   *
   * @param int|null        $id    The ID of the value.
   * @param int|null        $ref   The ID of the value if the variable is a reference to a value that has been dumped
   *                               already.
   * @param string          $value The value.
   * @param string|int|null $name  The name of the variable.
   *
   * @return void
   */
  public function writeString(?int $id, ?int $ref, string &$value, $name): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dumps an uninitialized property.
   *
   * @param string|int|null $name The name of the property.
   *
   * @return void
   */
  public function writeUninitialized($name): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
