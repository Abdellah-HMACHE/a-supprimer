<?php

namespace Accessap\YousignComponent\Model;

/**
 * Class SignatureUi
 * @package Accessap\YousignComponent\Model
 */
class SignatureUi
{
    /**
     * @var string|null
     */
    public ?string $id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var int
     */
    public $defaultZoom = 100;

    /**
     * @var string|null
     */
    public ?string $logo = null;

    /**
     * @var array|null
     */
    public ?array $languages = null;

    /**
     * @var string
     */
    public string $defaultLanguage = 'fr';

    /**
     * @var array|null
     */
    public ?array $signImageTypesAvailable = null;

    /**
     * @var bool
     */
    public bool $enableHeaderBar = false;

    /**
     * @var bool
     */
    public bool $enableHeaderBarSignAs = false;

    /**
     * @var bool
     */
    public bool $enableSidebar = false;

    /**
     * @var bool
     */
    public bool $enableMemberList = false;

    /**
     * @var bool
     */
    public bool $enableDocumentList = false;

    /**
     * @var bool
     */
    public bool $enableDocumentDownload = false;

    /**
     * @var bool
     */
    public bool $enableActivities = false;

    /**
     * @var bool
     */
    public bool $authenticationPopup = false;

    /**
     * @var bool
     */
    public bool $enableRefuseComment = false;

    /**
     * @var Label[]|null
     */
    public ?array $labels = null;

    /**
     * @var array|null
     */
    public ?array $fonts = null;

    /**
     * @var string|null
     */
    public ?string $style = null;

    /**
     * @var Redirect|null
     */
    public $redirectCancel = null;

    /**
     * @var Redirect|null
     */
    public $redirectError = null;

    /**
     * @var Redirect|null
     */
    public $redirectSuccess = null;
}
