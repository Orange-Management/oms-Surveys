<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @copyright  2013 Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
namespace Modules\Surveys;

use phpOMS\Pattern\Multition;

/**
 * Survey class.
 *
 * @category   Surveys
 * @package    Framework
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @license    OMS License 1.0
 * @link       http://orange-management.com
 * @since      1.0.0
 */
class Survey implements Multition
{

    /**
     * ID.
     *
     * @var int
     * @since 1.0.0
     */
    private $id = '';

    /**
     * Name.
     *
     * @var string
     * @since 1.0.0
     */
    private $name = '';

    /**
     * Description.
     *
     * @var string
     * @since 1.0.0
     */
    private $description = '';

    /**
     * Created.
     *
     * @var datetime
     * @since 1.0.0
     */
    private $created = null;

    /**
     * Creator.
     *
     * @var int
     * @since 1.0.0
     */
    private $creator = null;

    private static $instances = [];

    public function __construct($id)
    {
    }

    public function getInstance($id)
    {
        if (!isset(self::$instances[$id])) {
            self::$instances[$id] = new self($id);
        }

        return self::$instances[$id];
    }

    /**
     * {@inheritdoc}
     */
    public function init($id)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function __clone()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($desc)
    {
        $this->description = $desc;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function update()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($data)
    {
    }
}
