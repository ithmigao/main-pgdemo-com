<?php

declare(strict_types=1);

namespace App\Renderer;

class LinkCard
{
    private string $targetUrl;
    private string $keyword;
    private string $title;
    private string $description;
    private string $iconUrl;

    public function __construct(
        string $targetUrl = 'https://main-pgdemo.com',
        string $keyword = 'pg模拟器',
        string $title = 'PG Demo',
        string $description = '体验pg模拟器的乐趣',
        string $iconUrl = ''
    ) {
        $this->targetUrl = $targetUrl;
        $this->keyword = $keyword;
        $this->title = $title;
        $this->description = $description;
        $this->iconUrl = $iconUrl;
    }

    public function setTargetUrl(string $url): void
    {
        $this->targetUrl = $url;
    }

    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setIconUrl(string $iconUrl): void
    {
        $this->iconUrl = $iconUrl;
    }

    public function render(): string
    {
        $escapedUrl = htmlspecialchars($this->targetUrl, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $escapedKeyword = htmlspecialchars($this->keyword, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $escapedTitle = htmlspecialchars($this->title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $escapedDescription = htmlspecialchars($this->description, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        $iconHtml = '';
        if ($this->iconUrl !== '') {
            $escapedIcon = htmlspecialchars($this->iconUrl, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $iconHtml = '<img src="' . $escapedIcon . '" alt="" class="link-card-icon" />';
        }

        return <<<HTML
<div class="link-card">
    <a href="{$escapedUrl}" target="_blank" rel="noopener noreferrer" class="link-card-anchor">
        <div class="link-card-content">
            <h3 class="link-card-title">{$escapedTitle}</h3>
            <p class="link-card-description">{$escapedDescription}</p>
            <span class="link-card-keyword">{$escapedKeyword}</span>
        </div>
        {$iconHtml}
    </a>
</div>
HTML;
    }

    public static function createDefault(): self
    {
        return new self(
            'https://main-pgdemo.com',
            'pg模拟器',
            'PG Demo 体验',
            '点击访问 pg模拟器 官方演示站点',
            ''
        );
    }

    public static function fromArray(array $data): self
    {
        $card = new self();
        if (isset($data['url'])) {
            $card->setTargetUrl((string) $data['url']);
        }
        if (isset($data['keyword'])) {
            $card->setKeyword((string) $data['keyword']);
        }
        if (isset($data['title'])) {
            $card->setTitle((string) $data['title']);
        }
        if (isset($data['description'])) {
            $card->setDescription((string) $data['description']);
        }
        if (isset($data['icon'])) {
            $card->setIconUrl((string) $data['icon']);
        }
        return $card;
    }
}