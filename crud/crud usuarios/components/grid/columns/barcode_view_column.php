<?php

class BarcodeViewColumn extends AbstractDatasetFieldViewColumn
{
    /** @var string */
    private $barcodeType;
    /** @var int */
    private $singleBarWidth;
    /** @var int */
    private $barHeight;

    public function __construct($fieldName, $datasetFieldName, $caption, $dataset, $barcodeType, $singleBarWidth, $barHeight)
    {
        parent::__construct($fieldName, $datasetFieldName, $caption, $dataset, false);
        $this->barcodeType = $barcodeType;
        $this->singleBarWidth = $singleBarWidth;
        $this->barHeight = $barHeight;
    }

    public function getBarcodeType() {
        return $this->barcodeType;
    }

    public function setBarcodeType($value) {
        $this->barcodeType = $value;
    }

    public function getSingleBarWidth() {
        return $this->singleBarWidth;
    }

    public function setSingleBarWidth($value) {
        $this->singleBarWidth = $value;
    }

    public function getBarHeight() {
        return $this->barHeight;
    }

    public function setBarHeight($value) {
        $this->barHeight = $value;
    }

    public function Accept($renderer) {
        $renderer->RenderBarcodeViewColumn($this);
    }
}
