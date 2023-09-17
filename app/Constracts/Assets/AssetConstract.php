<?php

namespace App\Constracts\Assets;

use App\Constracts\AssetTypeEnum;
use App\Core\Assets\AssetOptions;

interface AssetConstract
{
    public function setDeps($deps): AssetConstract;

    public function setOptions(AssetOptions $options): AssetConstract;

    public function setVersion($version): AssetConstract;

    public function setPriority(int $priority): AssetConstract;

    public function setAssetType(AssetTypeEnum $assetType): AssetConstract;

    public function isValid(): bool;

    public function getId();

    public function getAssetType(): AssetTypeEnum;

    public function isEnqueue(): bool;

    public function enqueue();

    public function printHtml();

    public function getOptions(): ?AssetOptionsConstract;

    public function getOption($name, $defaultValue = null, $classObject = null);
}