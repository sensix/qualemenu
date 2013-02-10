<?php

namespace Bitapp\QualemenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dish")
 *
 */

class Dish {
	/**
	 * @ORM\id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 *
	 */
	protected $dish_id;
	/**
	 * @ORM\Column(type="string")
	 *
	 */
	protected $name;
	/**
	 * @ORM\Column(type="decimal", scale=2)
	 *
	 */
	protected $price;
}