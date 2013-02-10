<?php

namespace Bitapp\QualemenuBundle\Entity;

use  Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 * 
 */

class Item {
	

	/**
	* @ORM\id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*
	*/
	protected $item_id;
	
	/**
	 * 
	 * @ORM\Column(type="boolean")
	 *
	 */
	protected $lunch;

	/**
	 * @ORM\Column(type="boolean")
	 *
	 */
	protected $dinner;

	/**
	 * @ORM\Column(type="date")
	 *
	 */
	protected $start_date;
	
	
	/**
	 * @ORM\Column(type="date")
	 *
	 */protected $end_date;

    /**
     * Get item_id
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Set lunch
     *
     * @param boolean $lunch
     * @return Item
     */
    public function setLunch($lunch)
    {
        $this->lunch = $lunch;
    
        return $this;
    }

    /**
     * Get lunch
     *
     * @return boolean 
     */
    public function getLunch()
    {
        return $this->lunch;
    }

    /**
     * Set dinner
     *
     * @param boolean $dinner
     * @return Item
     */
    public function setDinner($dinner)
    {
        $this->dinner = $dinner;
    
        return $this;
    }

    /**
     * Get dinner
     *
     * @return boolean 
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Item
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    
        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return Item
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
    
        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
}