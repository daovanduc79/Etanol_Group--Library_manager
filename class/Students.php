<?php


namespace Library;


class Students
{
    protected $id;
    protected $name;
    protected $email;
    protected $phone;
    protected $address;
    protected $birthday;
    protected $status;
    protected $image;

    public function __construct($id, $name, $email, $phone, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = null;
        $this->birthday = null;
        $this->status = 'Clean';
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param null $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param null $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
}