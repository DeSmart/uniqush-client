<?php namespace DeSmart\Uniqush\Request;

class Message
{
    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $sound;

    /**
     * @var string
     */
    protected $ttl;

    /**
     * @var string
     */
    protected $badge;

    /**
     * @var string
     */
    protected $img;

    /**
     * @var string
     */
    protected $userParam;

    public function __construct(
        $content,
        $sound = "default",
        $ttl = null,
        $badge = null,
        $img = null,
        $userParam = null
    ) {
        $this->content = $content;
        $this->sound = $sound;
        $this->ttl = $ttl;
        $this->badge = $badge;
        $this->img = $img;
        $this->userParam = $userParam;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        return new static(
            $content,
            $this->getSound(),
            $this->getTtl(),
            $this->getBadge(),
            $this->getImg(),
            $this->getUserParam()
        );
    }

    /**
     * @return string
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @param string $sound
     * @return self
     */
    public function setSound($sound)
    {
        return new static(
            $this->getContent(),
            $sound,
            $this->getTtl(),
            $this->getBadge(),
            $this->getImg(),
            $this->getUserParam()
        );
    }

    /**
     * @return string
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @param string $ttl
     * @return self
     */
    public function setTtl($ttl)
    {
        return new static(
            $this->getContent(),
            $this->getSound(),
            $ttl,
            $this->getBadge(),
            $this->getImg(),
            $this->getUserParam()
        );
    }

    /**
     * @return string
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param string $badge
     * @return self
     */
    public function setBadge($badge)
    {
        return new static(
            $this->getContent(),
            $this->getSound(),
            $this->getTtl(),
            $badge,
            $this->getImg(),
            $this->getUserParam()
        );
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return self
     */
    public function setImg($img)
    {
        return new static(
            $this->getContent(),
            $this->getSound(),
            $this->getTtl(),
            $this->getBadge(),
            $img,
            $this->getUserParam()
        );
    }

    /**
     * @return string
     */
    public function getUserParam()
    {
        return $this->userParam;
    }

    /**
     * @param string $userParam
     * @return self
     */
    public function setUserParam($userParam)
    {
        return new static(
            $this->getContent(),
            $this->getSound(),
            $this->getTtl(),
            $this->getBadge(),
            $this->getImg(),
            $userParam
        );
    }
}
