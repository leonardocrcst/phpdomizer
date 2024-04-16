<?php

namespace Phpdomizer\Element\Basic;

use Phpdomizer\Basement\Attributes\GetAttributesAsString;
use Phpdomizer\Basement\Element;
use Phpdomizer\Element\Basic\Type\HttpEquiv;
use Phpdomizer\Element\Basic\Type\MetaName;
use Phpdomizer\Element\Basic\Type\MetaType;

class Meta extends Element
{
    use GetAttributesAsString;

    public ?string $content = null;
    public ?string $charset = null;
    public ?string $http_equiv = null;
    public ?string $_name = null;

    public function __construct(MetaType $type, HttpEquiv|MetaName|string $content)
    {
        parent::__construct("meta", true);
        if (HttpEquiv::isHttpEquiv($type)) {
            $this->http_equiv = $content->value;
        }
        if (MetaName::isMetaName($type)) {
            $this->_name = $content->value;
        }
        if ($type === MetaType::CHARSET && is_string($content)) {
            $this->charset = $content;
        }
    }

    public function content(string|int $content, ?string $extra = null): void
    {
        $this->content = $content;
        if (!empty($extra)) {
            $this->content .= "; $extra";
        }
    }
}