<?php
/**
 * Copyright © 2018-2021 Hokodo. All Rights Reserved.
 * See LICENSE for license details.
 */
declare(strict_types=1);

namespace Hokodo\BnplCommerce\Ui\Component\Company\Form;

use Magento\Framework\View\Element\ComponentVisibilityInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

class HokodoFieldset extends \Magento\Ui\Component\Form\Fieldset implements ComponentVisibilityInterface
{
    /**
     * @param ContextInterface $context
     * @param array            $components
     * @param array            $data
     */
    public function __construct(
        ContextInterface $context,
        array $components = [],
        array $data = []
    ) {
        $this->context = $context;
        parent::__construct($context, $components, $data);
    }

    /**
     *  Show or Hide Hokodo Tab.
     *
     * @return bool
     */
    public function isComponentVisible(): bool
    {
        $companyId = $this->context->getRequestParam('id');
        return (bool) $companyId;
    }
}
