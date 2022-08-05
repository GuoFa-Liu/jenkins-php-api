<?php

namespace JenkinsKhan\Jenkins;

use JenkinsKhan\Jenkins;

class QueueReference
{

    /**
     * @var Jenkins
     */
    private $location;


    /**
     * @param Jenkins   $location
     */
    public function __construct($location)
    {
        $this->location = $location;
    }

    /**
     * @return Jenkins
     */
    public function getLocation()
    {
        return $this->location;
    }
}