<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 31.03.16
 * Time: 19:25
 */

namespace database;


class db
{
    private $host;
    private $user;
    private $pw;
    private $db;

    public function dbConnect()
    {
        $mysqli = new \mysqli($host, $user, $pw, $db);
        return $mysqli;
    }
    
    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param mixed $pw
     */
    public function setPw($pw)
    {
        $this->pw = $pw;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }




}