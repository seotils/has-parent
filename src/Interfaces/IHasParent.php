<?php
/*
 * IHasParent inteface
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0
 * @author deMagog <seotils@gmail.com>
 *
 */

namespace Seotils\Intefaces;

/**
 * Interface for classes that has a parent
 */
interface IHasParent {

  /**
   * Parent class getter/setter
   *
   * @param mixed $parentClass Parent class instance
   * @return mixed Parent class
   */
  public function parentClass( $parentClass );

}
