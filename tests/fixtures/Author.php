<?php

class Author
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $avatarUrl;

    /**
     * @var string
     */
    private $webUrl;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return Author
     */
    public function setId(?int $id): Author
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     *
     * @return Author
     */
    public function setUsername(?string $username): Author
    {
        $this->username = $username;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return Author
     */
    public function setName(?string $name): Author
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return Author
     */
    public function setState(?string $state): Author
    {
        $this->state = $state;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string|null $avatarUrl
     *
     * @return Author
     */
    public function setAvatarUrl(?string $avatarUrl): Author
    {
        $this->avatarUrl = $avatarUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * @param string|null $webUrl
     *
     * @return Author
     */
    public function setWebUrl(?string $webUrl): Author
    {
        $this->webUrl = $webUrl;
        
        return $this;
    }
}

