<?php

/**
 * @category  MessageEntity
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Http\MessageEntity;

/**
 * This class represents List Channel Sets Result Entity
 *
 * @method int                getId()
 * @method string             getChannelType()
 * @method ChannelSetEntity[] getChannelSets()
 * @method bool               getEnabled()
 * @method self               setId(string $id)
 * @method self               setChannelType(string $channelType)
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class ListChannelSetsResultEntity extends ResultEntity
{
    /** @var int $id */
    protected $id;

    /** @var string $channelType */
    protected $channelType;

    /** @var ChannelSetEntity[] $channelSets */
    protected $channelSets;

    /** @var bool $enabled */
    protected $enabled;

    /**
     * Sets Channel Sets
     *
     * @param array $channelSets
     */
    public function setChannelSets($channelSets)
    {
        $this->channelSets = [];

        foreach ($channelSets as $channelSet) {
            $this->channelSets[] = new ChannelSetEntity($channelSet);
        }
    }

    /**
     * Sets Enabled
     *
     * @param string $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = filter_var($enabled, FILTER_VALIDATE_BOOLEAN);
    }
}
