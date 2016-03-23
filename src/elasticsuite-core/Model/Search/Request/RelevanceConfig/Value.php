<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCore
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\ElasticSuiteCore\Model\Search\Request\RelevanceConfig;

/**
 * Relevance Configuration Value class
 *
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 *
 * @category Smile
 * @package  Smile_ElasticSuiteCore
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class Value extends \Magento\Framework\App\Config\Value
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    // @codingStandardsIgnoreStart Property is inherited
    protected $_eventPrefix = 'smile_elasticsuite_relevance_config_value';
    //@codingStandardsIgnoreEnd

    /**
     * Parameter name in event
     *
     * In observe method you can use $observer->getEvent()->getObject() in this case
     *
     * @var string
     */
    // @codingStandardsIgnoreStart Property is inherited
    protected $_eventObject = 'smile_elasticsuite_relevance_config_value';
    //@codingStandardsIgnoreEnd

    /**
     * Processing object's after save. Overriden to prevent invalidation of "config" cache tag.
     *
     * @SuppressWarnings(PHPMD.StaticAccess)
     *
     * @return $this
     */
    public function afterSave()
    {
        return \Magento\Framework\Model\AbstractModel::afterSave();
    }
}
