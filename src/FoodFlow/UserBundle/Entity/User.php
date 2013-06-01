<?php

namespace FoodFlow\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{
    /**
     *
     * @var string
     */
    protected $twitter_id;

    /**
     *
     * @var string
     */
    protected $twitter_access_token;

    /**
     * @var string
     */
    private $facebook_id;

    /**
     * @var string
     */
    private $facebook_access_token;

    /**
     * @var string
     */
    private $foursquare_id;

    /**
     * @var string
     */
    private $foursquare_access_token;


    /**
     * Set twitter_id
     *
     * @param string $twitterId
     * @return User
     */
    public function setTwitterId($twitterId)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitter_id
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    /**
     * Set twitter_access_token
     *
     * @param string $twitterAccessToken
     * @return User
     */
    public function setTwitterAccessToken($twitterAccessToken)
    {
        $this->twitter_access_token = serialize($twitterAccessToken);

        return $this;
    }

    /**
     * Get twitter_access_token
     *
     * @return string 
     */
    public function getTwitterAccessToken()
    {
        return unserialize($this->twitter_access_token);
    }

    /**
     * Set facebook_id
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string 
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

   /**
     * Set foursquare_id
     *
     * @param string $foursquareId
     * @return User
     */
    public function setFoursquareId($foursquareId)
    {
        $this->foursquare_id = $foursquareId;

        return $this;
    }

    /**
     * Get foursquare_id
     *
     * @return string 
     */
    public function getFoursquareId()
    {
        return $this->foursquare_id;
    }

    /**
     * Set foursquare_access_token
     *
     * @param string $foursquareAccessToken
     * @return User
     */
    public function setFoursquareAccessToken($foursquareAccessToken)
    {
        $this->foursquare_access_token = $foursquareAccessToken;

        return $this;
    }

    /**
     * Get foursquare_access_token
     *
     * @return string 
     */
    public function getFoursquareAccessToken()
    {
        return $this->foursquare_access_token;
    }
}
