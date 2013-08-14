<?php
/**
 * Author: Stanislav Anisimov <stanislav@ww9.ru>
 * Date: 14.08.13
 * Time: 13:40
 */

namespace DoctrineORMModuleTest\Assets\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation as Form;

/**
 * @ORM\Entity
 * @ORM\Table(name="doctrine_orm_module_unique_constraint_entity",
 *            uniqueConstraints={@ORM\UniqueConstraint(name="unique_idx", columns={"index_a", "index_b"})}
 * )
 */
class UniqueConstraintEntity
{
    /**
     * @ORM\Column(type="integer", name="index_a")
     */
    protected $indexA;

    /**
     * @ORM\Column(type="integer", name="index_b")
     */
    protected $indexB;
}
