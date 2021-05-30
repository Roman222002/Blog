<?php

namespace Model;

use Core\AbstractModel;

class Post extends AbstractModel
{
    public const TITLE = "title";
    public const CONTENT = "content";
    public const IMAGE = "image";
    public const COLOR = "color";
    public const USER_ID = "user_id";
    public const TAG_NAME = "tag_name";
    public const IS_BACKGROUND = "is_background";
    public const CREATED_AT = "created_at";

    private $title, $content, $image, $color, $user_id,
    $is_background, $tag_name, $created_at, $likes, $user_name;


   public function __construct($obj)
   {
       $this->id = $obj->id;
       $this->title = $obj->title;
       $this->color = $obj->color;
       $this->content = $obj->content;
       $this->is_background = $obj->is_background;
       $this->user_id = $obj->user_id;
       $this->image = $obj->image;
       $this->created_at = $obj->created_at;
       $this->tag_name = $obj->tag_name;
       $this->likes = 0;
   }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $cocntent
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }


    /**
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param mixed $likes
     */
    public function setLikes($likes): void
    {
        $this->likes = $likes;
    }

    /**
     * @return mixed
     */
    public function getIsBackground()
    {
        return $this->is_background;
    }

    /**
     * @param mixed $is_background
     */
    public function setIsBackground($is_background): void
    {
        $this->is_background = $is_background;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getTagName()
    {
        return $this->tag_name;
    }

    /**
     * @param mixed $tag_name
     */
    public function setTagName($tag_name): void
    {
        $this->tag_name = $tag_name;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

}