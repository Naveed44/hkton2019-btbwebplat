<?php

namespace Base;

use \Catentcls as ChildCatentcls;
use \CatentclsQuery as ChildCatentclsQuery;
use \Catentqul as ChildCatentqul;
use \CatentqulQuery as ChildCatentqulQuery;
use \Catentuni as ChildCatentuni;
use \CatentuniQuery as ChildCatentuniQuery;
use \Tblentauc as ChildTblentauc;
use \TblentaucQuery as ChildTblentaucQuery;
use \Tblentprd as ChildTblentprd;
use \TblentprdQuery as ChildTblentprdQuery;
use \Users as ChildUsers;
use \UsersQuery as ChildUsersQuery;
use \DateTime;
use \Exception;
use \PDO;
use Map\TblentaucTableMap;
use Map\TblentprdTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'tblentprd' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Tblentprd implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblentprdTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the idnentprd field.
     *
     * @var        string
     */
    protected $idnentprd;

    /**
     * The value for the idnentcls field.
     *
     * @var        string
     */
    protected $idnentcls;

    /**
     * The value for the idnentqul field.
     *
     * @var        string
     */
    protected $idnentqul;

    /**
     * The value for the idnentuni field.
     *
     * @var        string
     */
    protected $idnentuni;

    /**
     * The value for the userid field.
     *
     * @var        string
     */
    protected $userid;

    /**
     * The value for the namentprd field.
     *
     * @var        string
     */
    protected $namentprd;

    /**
     * The value for the dscentprd field.
     *
     * @var        string
     */
    protected $dscentprd;

    /**
     * The value for the qunentprd field.
     *
     * @var        string
     */
    protected $qunentprd;

    /**
     * The value for the created_at field.
     *
     * @var        DateTime
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     *
     * @var        DateTime
     */
    protected $updated_at;

    /**
     * @var        ChildCatentcls
     */
    protected $aCatentcls;

    /**
     * @var        ChildCatentqul
     */
    protected $aCatentqul;

    /**
     * @var        ChildCatentuni
     */
    protected $aCatentuni;

    /**
     * @var        ChildUsers
     */
    protected $aUsers;

    /**
     * @var        ObjectCollection|ChildTblentauc[] Collection to store aggregation of ChildTblentauc objects.
     */
    protected $collTblentaucs;
    protected $collTblentaucsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildTblentauc[]
     */
    protected $tblentaucsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\Tblentprd object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>Tblentprd</code> instance.  If
     * <code>obj</code> is an instance of <code>Tblentprd</code>, delegates to
     * <code>equals(Tblentprd)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|Tblentprd The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [idnentprd] column value.
     *
     * @return string
     */
    public function getIdnentprd()
    {
        return $this->idnentprd;
    }

    /**
     * Get the [idnentcls] column value.
     *
     * @return string
     */
    public function getIdnentcls()
    {
        return $this->idnentcls;
    }

    /**
     * Get the [idnentqul] column value.
     *
     * @return string
     */
    public function getIdnentqul()
    {
        return $this->idnentqul;
    }

    /**
     * Get the [idnentuni] column value.
     *
     * @return string
     */
    public function getIdnentuni()
    {
        return $this->idnentuni;
    }

    /**
     * Get the [userid] column value.
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Get the [namentprd] column value.
     *
     * @return string
     */
    public function getNamentprd()
    {
        return $this->namentprd;
    }

    /**
     * Get the [dscentprd] column value.
     *
     * @return string
     */
    public function getDscentprd()
    {
        return $this->dscentprd;
    }

    /**
     * Get the [qunentprd] column value.
     *
     * @return string
     */
    public function getQunentprd()
    {
        return $this->qunentprd;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTimeInterface ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [idnentprd] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setIdnentprd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idnentprd !== $v) {
            $this->idnentprd = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_IDNENTPRD] = true;
        }

        return $this;
    } // setIdnentprd()

    /**
     * Set the value of [idnentcls] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setIdnentcls($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idnentcls !== $v) {
            $this->idnentcls = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_IDNENTCLS] = true;
        }

        if ($this->aCatentcls !== null && $this->aCatentcls->getIdnentcls() !== $v) {
            $this->aCatentcls = null;
        }

        return $this;
    } // setIdnentcls()

    /**
     * Set the value of [idnentqul] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setIdnentqul($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idnentqul !== $v) {
            $this->idnentqul = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_IDNENTQUL] = true;
        }

        if ($this->aCatentqul !== null && $this->aCatentqul->getIdnentqul() !== $v) {
            $this->aCatentqul = null;
        }

        return $this;
    } // setIdnentqul()

    /**
     * Set the value of [idnentuni] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setIdnentuni($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idnentuni !== $v) {
            $this->idnentuni = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_IDNENTUNI] = true;
        }

        if ($this->aCatentuni !== null && $this->aCatentuni->getIdnentuni() !== $v) {
            $this->aCatentuni = null;
        }

        return $this;
    } // setIdnentuni()

    /**
     * Set the value of [userid] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setUserid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->userid !== $v) {
            $this->userid = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_USERID] = true;
        }

        if ($this->aUsers !== null && $this->aUsers->getId() !== $v) {
            $this->aUsers = null;
        }

        return $this;
    } // setUserid()

    /**
     * Set the value of [namentprd] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setNamentprd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->namentprd !== $v) {
            $this->namentprd = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_NAMENTPRD] = true;
        }

        return $this;
    } // setNamentprd()

    /**
     * Set the value of [dscentprd] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setDscentprd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dscentprd !== $v) {
            $this->dscentprd = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_DSCENTPRD] = true;
        }

        return $this;
    } // setDscentprd()

    /**
     * Set the value of [qunentprd] column.
     *
     * @param string $v new value
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setQunentprd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qunentprd !== $v) {
            $this->qunentprd = $v;
            $this->modifiedColumns[TblentprdTableMap::COL_QUNENTPRD] = true;
        }

        return $this;
    } // setQunentprd()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TblentprdTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TblentprdTableMap::COL_UPDATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblentprdTableMap::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->idnentprd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblentprdTableMap::translateFieldName('Idnentcls', TableMap::TYPE_PHPNAME, $indexType)];
            $this->idnentcls = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblentprdTableMap::translateFieldName('Idnentqul', TableMap::TYPE_PHPNAME, $indexType)];
            $this->idnentqul = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblentprdTableMap::translateFieldName('Idnentuni', TableMap::TYPE_PHPNAME, $indexType)];
            $this->idnentuni = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblentprdTableMap::translateFieldName('Userid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->userid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblentprdTableMap::translateFieldName('Namentprd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->namentprd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblentprdTableMap::translateFieldName('Dscentprd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dscentprd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblentprdTableMap::translateFieldName('Qunentprd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qunentprd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblentprdTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblentprdTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = TblentprdTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Tblentprd'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
        if ($this->aCatentcls !== null && $this->idnentcls !== $this->aCatentcls->getIdnentcls()) {
            $this->aCatentcls = null;
        }
        if ($this->aCatentqul !== null && $this->idnentqul !== $this->aCatentqul->getIdnentqul()) {
            $this->aCatentqul = null;
        }
        if ($this->aCatentuni !== null && $this->idnentuni !== $this->aCatentuni->getIdnentuni()) {
            $this->aCatentuni = null;
        }
        if ($this->aUsers !== null && $this->userid !== $this->aUsers->getId()) {
            $this->aUsers = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblentprdTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblentprdQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCatentcls = null;
            $this->aCatentqul = null;
            $this->aCatentuni = null;
            $this->aUsers = null;
            $this->collTblentaucs = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Tblentprd::setDeleted()
     * @see Tblentprd::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentprdTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblentprdQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentprdTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TblentprdTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCatentcls !== null) {
                if ($this->aCatentcls->isModified() || $this->aCatentcls->isNew()) {
                    $affectedRows += $this->aCatentcls->save($con);
                }
                $this->setCatentcls($this->aCatentcls);
            }

            if ($this->aCatentqul !== null) {
                if ($this->aCatentqul->isModified() || $this->aCatentqul->isNew()) {
                    $affectedRows += $this->aCatentqul->save($con);
                }
                $this->setCatentqul($this->aCatentqul);
            }

            if ($this->aCatentuni !== null) {
                if ($this->aCatentuni->isModified() || $this->aCatentuni->isNew()) {
                    $affectedRows += $this->aCatentuni->save($con);
                }
                $this->setCatentuni($this->aCatentuni);
            }

            if ($this->aUsers !== null) {
                if ($this->aUsers->isModified() || $this->aUsers->isNew()) {
                    $affectedRows += $this->aUsers->save($con);
                }
                $this->setUsers($this->aUsers);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->tblentaucsScheduledForDeletion !== null) {
                if (!$this->tblentaucsScheduledForDeletion->isEmpty()) {
                    \TblentaucQuery::create()
                        ->filterByPrimaryKeys($this->tblentaucsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tblentaucsScheduledForDeletion = null;
                }
            }

            if ($this->collTblentaucs !== null) {
                foreach ($this->collTblentaucs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[TblentprdTableMap::COL_IDNENTPRD] = true;
        if (null !== $this->idnentprd) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblentprdTableMap::COL_IDNENTPRD . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTPRD)) {
            $modifiedColumns[':p' . $index++]  = 'idnentprd';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTCLS)) {
            $modifiedColumns[':p' . $index++]  = 'idnentcls';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTQUL)) {
            $modifiedColumns[':p' . $index++]  = 'idnentqul';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTUNI)) {
            $modifiedColumns[':p' . $index++]  = 'idnentuni';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_USERID)) {
            $modifiedColumns[':p' . $index++]  = 'userid';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_NAMENTPRD)) {
            $modifiedColumns[':p' . $index++]  = 'namentprd';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_DSCENTPRD)) {
            $modifiedColumns[':p' . $index++]  = 'dscentprd';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_QUNENTPRD)) {
            $modifiedColumns[':p' . $index++]  = 'qunentprd';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO tblentprd (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'idnentprd':
                        $stmt->bindValue($identifier, $this->idnentprd, PDO::PARAM_INT);
                        break;
                    case 'idnentcls':
                        $stmt->bindValue($identifier, $this->idnentcls, PDO::PARAM_INT);
                        break;
                    case 'idnentqul':
                        $stmt->bindValue($identifier, $this->idnentqul, PDO::PARAM_INT);
                        break;
                    case 'idnentuni':
                        $stmt->bindValue($identifier, $this->idnentuni, PDO::PARAM_INT);
                        break;
                    case 'userid':
                        $stmt->bindValue($identifier, $this->userid, PDO::PARAM_INT);
                        break;
                    case 'namentprd':
                        $stmt->bindValue($identifier, $this->namentprd, PDO::PARAM_STR);
                        break;
                    case 'dscentprd':
                        $stmt->bindValue($identifier, $this->dscentprd, PDO::PARAM_STR);
                        break;
                    case 'qunentprd':
                        $stmt->bindValue($identifier, $this->qunentprd, PDO::PARAM_STR);
                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdnentprd($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblentprdTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdnentprd();
                break;
            case 1:
                return $this->getIdnentcls();
                break;
            case 2:
                return $this->getIdnentqul();
                break;
            case 3:
                return $this->getIdnentuni();
                break;
            case 4:
                return $this->getUserid();
                break;
            case 5:
                return $this->getNamentprd();
                break;
            case 6:
                return $this->getDscentprd();
                break;
            case 7:
                return $this->getQunentprd();
                break;
            case 8:
                return $this->getCreatedAt();
                break;
            case 9:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['Tblentprd'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tblentprd'][$this->hashCode()] = true;
        $keys = TblentprdTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdnentprd(),
            $keys[1] => $this->getIdnentcls(),
            $keys[2] => $this->getIdnentqul(),
            $keys[3] => $this->getIdnentuni(),
            $keys[4] => $this->getUserid(),
            $keys[5] => $this->getNamentprd(),
            $keys[6] => $this->getDscentprd(),
            $keys[7] => $this->getQunentprd(),
            $keys[8] => $this->getCreatedAt(),
            $keys[9] => $this->getUpdatedAt(),
        );
        if ($result[$keys[8]] instanceof \DateTimeInterface) {
            $result[$keys[8]] = $result[$keys[8]]->format('c');
        }

        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('c');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCatentcls) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'catentcls';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'catentcls';
                        break;
                    default:
                        $key = 'Catentcls';
                }

                $result[$key] = $this->aCatentcls->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCatentqul) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'catentqul';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'catentqul';
                        break;
                    default:
                        $key = 'Catentqul';
                }

                $result[$key] = $this->aCatentqul->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCatentuni) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'catentuni';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'catentuni';
                        break;
                    default:
                        $key = 'Catentuni';
                }

                $result[$key] = $this->aCatentuni->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'users';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'users';
                        break;
                    default:
                        $key = 'Users';
                }

                $result[$key] = $this->aUsers->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTblentaucs) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblentaucs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tblentaucs';
                        break;
                    default:
                        $key = 'Tblentaucs';
                }

                $result[$key] = $this->collTblentaucs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\Tblentprd
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblentprdTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Tblentprd
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdnentprd($value);
                break;
            case 1:
                $this->setIdnentcls($value);
                break;
            case 2:
                $this->setIdnentqul($value);
                break;
            case 3:
                $this->setIdnentuni($value);
                break;
            case 4:
                $this->setUserid($value);
                break;
            case 5:
                $this->setNamentprd($value);
                break;
            case 6:
                $this->setDscentprd($value);
                break;
            case 7:
                $this->setQunentprd($value);
                break;
            case 8:
                $this->setCreatedAt($value);
                break;
            case 9:
                $this->setUpdatedAt($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = TblentprdTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdnentprd($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIdnentcls($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIdnentqul($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIdnentuni($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setUserid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setNamentprd($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDscentprd($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setQunentprd($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCreatedAt($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setUpdatedAt($arr[$keys[9]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Tblentprd The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TblentprdTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTPRD)) {
            $criteria->add(TblentprdTableMap::COL_IDNENTPRD, $this->idnentprd);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTCLS)) {
            $criteria->add(TblentprdTableMap::COL_IDNENTCLS, $this->idnentcls);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTQUL)) {
            $criteria->add(TblentprdTableMap::COL_IDNENTQUL, $this->idnentqul);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_IDNENTUNI)) {
            $criteria->add(TblentprdTableMap::COL_IDNENTUNI, $this->idnentuni);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_USERID)) {
            $criteria->add(TblentprdTableMap::COL_USERID, $this->userid);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_NAMENTPRD)) {
            $criteria->add(TblentprdTableMap::COL_NAMENTPRD, $this->namentprd);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_DSCENTPRD)) {
            $criteria->add(TblentprdTableMap::COL_DSCENTPRD, $this->dscentprd);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_QUNENTPRD)) {
            $criteria->add(TblentprdTableMap::COL_QUNENTPRD, $this->qunentprd);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_CREATED_AT)) {
            $criteria->add(TblentprdTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(TblentprdTableMap::COL_UPDATED_AT)) {
            $criteria->add(TblentprdTableMap::COL_UPDATED_AT, $this->updated_at);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildTblentprdQuery::create();
        $criteria->add(TblentprdTableMap::COL_IDNENTPRD, $this->idnentprd);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getIdnentprd();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getIdnentprd();
    }

    /**
     * Generic method to set the primary key (idnentprd column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdnentprd($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdnentprd();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Tblentprd (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdnentcls($this->getIdnentcls());
        $copyObj->setIdnentqul($this->getIdnentqul());
        $copyObj->setIdnentuni($this->getIdnentuni());
        $copyObj->setUserid($this->getUserid());
        $copyObj->setNamentprd($this->getNamentprd());
        $copyObj->setDscentprd($this->getDscentprd());
        $copyObj->setQunentprd($this->getQunentprd());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getTblentaucs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTblentauc($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdnentprd(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Tblentprd Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a ChildCatentcls object.
     *
     * @param  ChildCatentcls $v
     * @return $this|\Tblentprd The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCatentcls(ChildCatentcls $v = null)
    {
        if ($v === null) {
            $this->setIdnentcls(NULL);
        } else {
            $this->setIdnentcls($v->getIdnentcls());
        }

        $this->aCatentcls = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCatentcls object, it will not be re-added.
        if ($v !== null) {
            $v->addTblentprd($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCatentcls object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCatentcls The associated ChildCatentcls object.
     * @throws PropelException
     */
    public function getCatentcls(ConnectionInterface $con = null)
    {
        if ($this->aCatentcls === null && (($this->idnentcls !== "" && $this->idnentcls !== null))) {
            $this->aCatentcls = ChildCatentclsQuery::create()->findPk($this->idnentcls, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCatentcls->addTblentprds($this);
             */
        }

        return $this->aCatentcls;
    }

    /**
     * Declares an association between this object and a ChildCatentqul object.
     *
     * @param  ChildCatentqul $v
     * @return $this|\Tblentprd The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCatentqul(ChildCatentqul $v = null)
    {
        if ($v === null) {
            $this->setIdnentqul(NULL);
        } else {
            $this->setIdnentqul($v->getIdnentqul());
        }

        $this->aCatentqul = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCatentqul object, it will not be re-added.
        if ($v !== null) {
            $v->addTblentprd($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCatentqul object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCatentqul The associated ChildCatentqul object.
     * @throws PropelException
     */
    public function getCatentqul(ConnectionInterface $con = null)
    {
        if ($this->aCatentqul === null && (($this->idnentqul !== "" && $this->idnentqul !== null))) {
            $this->aCatentqul = ChildCatentqulQuery::create()->findPk($this->idnentqul, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCatentqul->addTblentprds($this);
             */
        }

        return $this->aCatentqul;
    }

    /**
     * Declares an association between this object and a ChildCatentuni object.
     *
     * @param  ChildCatentuni $v
     * @return $this|\Tblentprd The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCatentuni(ChildCatentuni $v = null)
    {
        if ($v === null) {
            $this->setIdnentuni(NULL);
        } else {
            $this->setIdnentuni($v->getIdnentuni());
        }

        $this->aCatentuni = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCatentuni object, it will not be re-added.
        if ($v !== null) {
            $v->addTblentprd($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCatentuni object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCatentuni The associated ChildCatentuni object.
     * @throws PropelException
     */
    public function getCatentuni(ConnectionInterface $con = null)
    {
        if ($this->aCatentuni === null && (($this->idnentuni !== "" && $this->idnentuni !== null))) {
            $this->aCatentuni = ChildCatentuniQuery::create()->findPk($this->idnentuni, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCatentuni->addTblentprds($this);
             */
        }

        return $this->aCatentuni;
    }

    /**
     * Declares an association between this object and a ChildUsers object.
     *
     * @param  ChildUsers $v
     * @return $this|\Tblentprd The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsers(ChildUsers $v = null)
    {
        if ($v === null) {
            $this->setUserid(NULL);
        } else {
            $this->setUserid($v->getId());
        }

        $this->aUsers = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUsers object, it will not be re-added.
        if ($v !== null) {
            $v->addTblentprd($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUsers object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUsers The associated ChildUsers object.
     * @throws PropelException
     */
    public function getUsers(ConnectionInterface $con = null)
    {
        if ($this->aUsers === null && (($this->userid !== "" && $this->userid !== null))) {
            $this->aUsers = ChildUsersQuery::create()->findPk($this->userid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsers->addTblentprds($this);
             */
        }

        return $this->aUsers;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Tblentauc' == $relationName) {
            $this->initTblentaucs();
            return;
        }
    }

    /**
     * Clears out the collTblentaucs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTblentaucs()
     */
    public function clearTblentaucs()
    {
        $this->collTblentaucs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collTblentaucs collection loaded partially.
     */
    public function resetPartialTblentaucs($v = true)
    {
        $this->collTblentaucsPartial = $v;
    }

    /**
     * Initializes the collTblentaucs collection.
     *
     * By default this just sets the collTblentaucs collection to an empty array (like clearcollTblentaucs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTblentaucs($overrideExisting = true)
    {
        if (null !== $this->collTblentaucs && !$overrideExisting) {
            return;
        }

        $collectionClassName = TblentaucTableMap::getTableMap()->getCollectionClassName();

        $this->collTblentaucs = new $collectionClassName;
        $this->collTblentaucs->setModel('\Tblentauc');
    }

    /**
     * Gets an array of ChildTblentauc objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildTblentprd is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildTblentauc[] List of ChildTblentauc objects
     * @throws PropelException
     */
    public function getTblentaucs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collTblentaucsPartial && !$this->isNew();
        if (null === $this->collTblentaucs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTblentaucs) {
                // return empty collection
                $this->initTblentaucs();
            } else {
                $collTblentaucs = ChildTblentaucQuery::create(null, $criteria)
                    ->filterByTblentprd($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collTblentaucsPartial && count($collTblentaucs)) {
                        $this->initTblentaucs(false);

                        foreach ($collTblentaucs as $obj) {
                            if (false == $this->collTblentaucs->contains($obj)) {
                                $this->collTblentaucs->append($obj);
                            }
                        }

                        $this->collTblentaucsPartial = true;
                    }

                    return $collTblentaucs;
                }

                if ($partial && $this->collTblentaucs) {
                    foreach ($this->collTblentaucs as $obj) {
                        if ($obj->isNew()) {
                            $collTblentaucs[] = $obj;
                        }
                    }
                }

                $this->collTblentaucs = $collTblentaucs;
                $this->collTblentaucsPartial = false;
            }
        }

        return $this->collTblentaucs;
    }

    /**
     * Sets a collection of ChildTblentauc objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $tblentaucs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildTblentprd The current object (for fluent API support)
     */
    public function setTblentaucs(Collection $tblentaucs, ConnectionInterface $con = null)
    {
        /** @var ChildTblentauc[] $tblentaucsToDelete */
        $tblentaucsToDelete = $this->getTblentaucs(new Criteria(), $con)->diff($tblentaucs);


        $this->tblentaucsScheduledForDeletion = $tblentaucsToDelete;

        foreach ($tblentaucsToDelete as $tblentaucRemoved) {
            $tblentaucRemoved->setTblentprd(null);
        }

        $this->collTblentaucs = null;
        foreach ($tblentaucs as $tblentauc) {
            $this->addTblentauc($tblentauc);
        }

        $this->collTblentaucs = $tblentaucs;
        $this->collTblentaucsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Tblentauc objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Tblentauc objects.
     * @throws PropelException
     */
    public function countTblentaucs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collTblentaucsPartial && !$this->isNew();
        if (null === $this->collTblentaucs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTblentaucs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTblentaucs());
            }

            $query = ChildTblentaucQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTblentprd($this)
                ->count($con);
        }

        return count($this->collTblentaucs);
    }

    /**
     * Method called to associate a ChildTblentauc object to this object
     * through the ChildTblentauc foreign key attribute.
     *
     * @param  ChildTblentauc $l ChildTblentauc
     * @return $this|\Tblentprd The current object (for fluent API support)
     */
    public function addTblentauc(ChildTblentauc $l)
    {
        if ($this->collTblentaucs === null) {
            $this->initTblentaucs();
            $this->collTblentaucsPartial = true;
        }

        if (!$this->collTblentaucs->contains($l)) {
            $this->doAddTblentauc($l);

            if ($this->tblentaucsScheduledForDeletion and $this->tblentaucsScheduledForDeletion->contains($l)) {
                $this->tblentaucsScheduledForDeletion->remove($this->tblentaucsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildTblentauc $tblentauc The ChildTblentauc object to add.
     */
    protected function doAddTblentauc(ChildTblentauc $tblentauc)
    {
        $this->collTblentaucs[]= $tblentauc;
        $tblentauc->setTblentprd($this);
    }

    /**
     * @param  ChildTblentauc $tblentauc The ChildTblentauc object to remove.
     * @return $this|ChildTblentprd The current object (for fluent API support)
     */
    public function removeTblentauc(ChildTblentauc $tblentauc)
    {
        if ($this->getTblentaucs()->contains($tblentauc)) {
            $pos = $this->collTblentaucs->search($tblentauc);
            $this->collTblentaucs->remove($pos);
            if (null === $this->tblentaucsScheduledForDeletion) {
                $this->tblentaucsScheduledForDeletion = clone $this->collTblentaucs;
                $this->tblentaucsScheduledForDeletion->clear();
            }
            $this->tblentaucsScheduledForDeletion[]= clone $tblentauc;
            $tblentauc->setTblentprd(null);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCatentcls) {
            $this->aCatentcls->removeTblentprd($this);
        }
        if (null !== $this->aCatentqul) {
            $this->aCatentqul->removeTblentprd($this);
        }
        if (null !== $this->aCatentuni) {
            $this->aCatentuni->removeTblentprd($this);
        }
        if (null !== $this->aUsers) {
            $this->aUsers->removeTblentprd($this);
        }
        $this->idnentprd = null;
        $this->idnentcls = null;
        $this->idnentqul = null;
        $this->idnentuni = null;
        $this->userid = null;
        $this->namentprd = null;
        $this->dscentprd = null;
        $this->qunentprd = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collTblentaucs) {
                foreach ($this->collTblentaucs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collTblentaucs = null;
        $this->aCatentcls = null;
        $this->aCatentqul = null;
        $this->aCatentuni = null;
        $this->aUsers = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblentprdTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
