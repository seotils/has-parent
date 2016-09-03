<?php
/**
 * HasParent trait assigns parent to a class.
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0
 * @author deMagog <seotils@gmail.com>
 *
 */

namespace Seotils\Traits;

use Seotils\Traits\DeferredExceptions;

/**
 * Assigns parent to a class.
 */
trait HasParent {

  use DeferredExceptions;

  /**
   * Instance of the parent class
   * @var mixed
   */
  protected $traitHasParentClass;

  /**
   * Parent class getter/setter
   *
   * @param mixed $parentClass Parent class instance
   * @return mixed Parent class
   */
  public function parentClass( $parentClass = 'undefined') {
    if( 'undefined' !== $parentClass ){
      if( ! is_object( $parentClass)){
        $this->exception('Invalid instance of a parent class.');
      } else {
        $this->traitHasParentClass = $parentClass;
      }
    }
    return $this->traitHasParentClass;
  }

}
