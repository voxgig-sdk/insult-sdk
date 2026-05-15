<?php
declare(strict_types=1);

// Insult SDK base feature

class InsultBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(InsultContext $ctx, array $options): void {}
    public function PostConstruct(InsultContext $ctx): void {}
    public function PostConstructEntity(InsultContext $ctx): void {}
    public function SetData(InsultContext $ctx): void {}
    public function GetData(InsultContext $ctx): void {}
    public function GetMatch(InsultContext $ctx): void {}
    public function SetMatch(InsultContext $ctx): void {}
    public function PrePoint(InsultContext $ctx): void {}
    public function PreSpec(InsultContext $ctx): void {}
    public function PreRequest(InsultContext $ctx): void {}
    public function PreResponse(InsultContext $ctx): void {}
    public function PreResult(InsultContext $ctx): void {}
    public function PreDone(InsultContext $ctx): void {}
    public function PreUnexpected(InsultContext $ctx): void {}
}
