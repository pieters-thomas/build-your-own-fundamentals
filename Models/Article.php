<?php


class Article
{
private int $id;
private string $title;
private string $slug;
private string $content;

    /**
     * Article constructor.
     * @param int $id
     * @param string $title
     * @param string $slug
     * @param string $content
     */
    public function __construct(int $id, string $title, string $slug, string $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }




}
