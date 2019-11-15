<?php

namespace Base;

use \Tblentauc as ChildTblentauc;
use \TblentaucQuery as ChildTblentaucQuery;
use \Tblentbid as ChildTblentbid;
use \TblentbidQuery as ChildTblentbidQuery;
use \Tblentctr as ChildTblentctr;
use \TblentctrQuery as ChildTblentctrQuery;
use \Users as ChildUsers;
use \UsersQuery as ChildUsersQuery;
use \DateTime;
use \Exception;
use \PDO;
use Map\TblentbidTableMap;
use Map\TblentctrTableMap;
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
 * Base class that represents a row from the 'tblentbid' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Tblentbid implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblentbidTableMap';


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
     * The value for the idnentbid field.
     *
     * @var        string
     */
    protected $idnentbid;

    /**
     * The value for the idnentauc field.
     *
     * @var        string
     */
    protected $idnentauc;

    /**
     * The value for the usersid field.
     *
     * @var        string
     */
    protected $usersid;

    /**
     * The value for the datissbid field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $datissbid;

    /**
     * The value for the prcunibid field.
     *
     * @var        string
     */
    protected $prcunibid;

    /**
     * The value for the qununibid field.
     *
     * @var        string
     */
    protected $qununibid;

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
     * @var        ChildTblentauc
     */
    protected $aTblentauc;

    /**
     * @var        ChildUsers
     */
    protected $aUsers;

    /**
     * @var        ObjectCollection|ChildTblentctr[] Collection to store aggregation of ChildTblentctr objects.
     */
    protected $collTblentctrs;
    protected $collTblentctrsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildTblentctr[]
     */
    protected $tblentctrsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
    }

    /**
     * Initializes internal state of Base\Tblentbid object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
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
     * Compares this with another <code>Tblentbid</code> instance.  If
     * <code>obj</code> is an instance of <code>Tblentbid</code>, delegates to
     * <code>equals(Tblentbid)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Tblentbid The current object, for fluid interface
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
     * Get the [idnentbid] column value.
     *
     * @return string
     */
    public function getIdnentbid()
    {
        return $this->idnentbid;
    }

    /**
     * Get the [idnentauc] column value.
     *
     * @return string
     */
    public function getIdnentauc()
    {
        return $this->idnentauc;
    }

    /**
     * Get the [usersid] column value.
     *
     * @return string
     */
    public function getUsersid()
    {
        return $this->usersid;
    }

    /**
     * Get the [optionally formatted] temporal [datissbid] column value.
     *
     *
     * @param      string|null $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatissbid($format = 'Y-m-d H:i:s')
    {
        if ($format === null) {
            return $this->datissbid;
        } else {
            return $this->datissbid instanceof \DateTimeInterface ? $this->datissbid->format($format) : null;
        }
    }

    /**
     * Get the [prcunibid] column value.
     *
     * @return string
     */
    public function getPrcunibid()
    {
        return $this->prcunibid;
    }

    /**
     * Get the [qununibid] column value.
     *
     * @return string
     */
    public function getQununibid()
    {
        return $this->qununibid;
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
     * Set the value of [idnentbid] column.
     *
     * @param string $v new value
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setIdnentbid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idnentbid !== $v) {
            $this->idnentbid = $v;
            $this->modifiedColumns[TblentbidTableMap::COL_IDNENTBID] = true;
        }

        return $this;
    } // setIdnentbid()

    /**
     * Set the value of [idnentauc] column.
     *
     * @param string $v new value
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setIdnentauc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idnentauc !== $v) {
            $this->idnentauc = $v;
            $this->modifiedColumns[TblentbidTableMap::COL_IDNENTAUC] = true;
        }

        if ($this->aTblentauc !== null && $this->aTblentauc->getIdnentauc() !== $v) {
            $this->aTblentauc = null;
        }

        return $this;
    } // setIdnentauc()

    /**
     * Set the value of [usersid] column.
     *
     * @param string $v new value
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setUsersid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usersid !== $v) {
            $this->usersid = $v;
            $this->modifiedColumns[TblentbidTableMap::COL_USERSID] = true;
        }

        if ($this->aUsers !== null && $this->aUsers->getId() !== $v) {
            $this->aUsers = null;
        }

        return $this;
    } // setUsersid()

    /**
     * Sets the value of [datissbid] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setDatissbid($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datissbid !== null || $dt !== null) {
            if ($this->datissbid === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->datissbid->format("Y-m-d H:i:s.u")) {
                $this->datissbid = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TblentbidTableMap::COL_DATISSBID] = true;
            }
        } // if either are not null

        return $this;
    } // setDatissbid()

    /**
     * Set the value of [prcunibid] column.
     *
     * @param string $v new value
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setPrcunibid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prcunibid !== $v) {
            $this->prcunibid = $v;
            $this->modifiedColumns[TblentbidTableMap::COL_PRCUNIBID] = true;
        }

        return $this;
    } // setPrcunibid()

    /**
     * Set the value of [qununibid] column.
     *
     * @param string $v new value
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setQununibid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qununibid !== $v) {
            $this->qununibid = $v;
            $this->modifiedColumns[TblentbidTableMap::COL_QUNUNIBID] = true;
        }

        return $this;
    } // setQununibid()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TblentbidTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TblentbidTableMap::COL_UPDATED_AT] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblentbidTableMap::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->idnentbid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblentbidTableMap::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->idnentauc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblentbidTableMap::translateFieldName('Usersid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usersid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblentbidTableMap::translateFieldName('Datissbid', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->datissbid = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblentbidTableMap::translateFieldName('Prcunibid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prcunibid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblentbidTableMap::translateFieldName('Qununibid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qununibid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblentbidTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblentbidTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = TblentbidTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Tblentbid'), 0, $e);
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
        if ($this->aTblentauc !== null && $this->idnentauc !== $this->aTblentauc->getIdnentauc()) {
            $this->aTblentauc = null;
        }
        if ($this->aUsers !== null && $this->usersid !== $this->aUsers->getId()) {
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
            $con = Propel::getServiceContainer()->getReadConnection(TblentbidTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblentbidQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTblentauc = null;
            $this->aUsers = null;
            $this->collTblentctrs = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Tblentbid::setDeleted()
     * @see Tblentbid::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentbidTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblentbidQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentbidTableMap::DATABASE_NAME);
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
                TblentbidTableMap::addInstanceToPool($this);
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

            if ($this->aTblentauc !== null) {
                if ($this->aTblentauc->isModified() || $this->aTblentauc->isNew()) {
                    $affectedRows += $this->aTblentauc->save($con);
                }
                $this->setTblentauc($this->aTblentauc);
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

            if ($this->tblentctrsScheduledForDeletion !== null) {
                if (!$this->tblentctrsScheduledForDeletion->isEmpty()) {
                    \TblentctrQuery::create()
                        ->filterByPrimaryKeys($this->tblentctrsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tblentctrsScheduledForDeletion = null;
                }
            }

            if ($this->collTblentctrs !== null) {
                foreach ($this->collTblentctrs as $referrerFK) {
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

        $this->modifiedColumns[TblentbidTableMap::COL_IDNENTBID] = true;
        if (null !== $this->idnentbid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblentbidTableMap::COL_IDNENTBID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblentbidTableMap::COL_IDNENTBID)) {
            $modifiedColumns[':p' . $index++]  = 'idnentbid';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_IDNENTAUC)) {
            $modifiedColumns[':p' . $index++]  = 'idnentauc';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_USERSID)) {
            $modifiedColumns[':p' . $index++]  = 'usersid';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_DATISSBID)) {
            $modifiedColumns[':p' . $index++]  = 'datissbid';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_PRCUNIBID)) {
            $modifiedColumns[':p' . $index++]  = 'prcunibid';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_QUNUNIBID)) {
            $modifiedColumns[':p' . $index++]  = 'qununibid';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO tblentbid (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'idnentbid':
                        $stmt->bindValue($identifier, $this->idnentbid, PDO::PARAM_INT);
                        break;
                    case 'idnentauc':
                        $stmt->bindValue($identifier, $this->idnentauc, PDO::PARAM_INT);
                        break;
                    case 'usersid':
                        $stmt->bindValue($identifier, $this->usersid, PDO::PARAM_INT);
                        break;
                    case 'datissbid':
                        $stmt->bindValue($identifier, $this->datissbid ? $this->datissbid->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'prcunibid':
                        $stmt->bindValue($identifier, $this->prcunibid, PDO::PARAM_STR);
                        break;
                    case 'qununibid':
                        $stmt->bindValue($identifier, $this->qununibid, PDO::PARAM_STR);
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
        $this->setIdnentbid($pk);

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
        $pos = TblentbidTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdnentbid();
                break;
            case 1:
                return $this->getIdnentauc();
                break;
            case 2:
                return $this->getUsersid();
                break;
            case 3:
                return $this->getDatissbid();
                break;
            case 4:
                return $this->getPrcunibid();
                break;
            case 5:
                return $this->getQununibid();
                break;
            case 6:
                return $this->getCreatedAt();
                break;
            case 7:
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

        if (isset($alreadyDumpedObjects['Tblentbid'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tblentbid'][$this->hashCode()] = true;
        $keys = TblentbidTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdnentbid(),
            $keys[1] => $this->getIdnentauc(),
            $keys[2] => $this->getUsersid(),
            $keys[3] => $this->getDatissbid(),
            $keys[4] => $this->getPrcunibid(),
            $keys[5] => $this->getQununibid(),
            $keys[6] => $this->getCreatedAt(),
            $keys[7] => $this->getUpdatedAt(),
        );
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('c');
        }

        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('c');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aTblentauc) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblentauc';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tblentauc';
                        break;
                    default:
                        $key = 'Tblentauc';
                }

                $result[$key] = $this->aTblentauc->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->collTblentctrs) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblentctrs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tblentctrs';
                        break;
                    default:
                        $key = 'Tblentctrs';
                }

                $result[$key] = $this->collTblentctrs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Tblentbid
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblentbidTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Tblentbid
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdnentbid($value);
                break;
            case 1:
                $this->setIdnentauc($value);
                break;
            case 2:
                $this->setUsersid($value);
                break;
            case 3:
                $this->setDatissbid($value);
                break;
            case 4:
                $this->setPrcunibid($value);
                break;
            case 5:
                $this->setQununibid($value);
                break;
            case 6:
                $this->setCreatedAt($value);
                break;
            case 7:
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
        $keys = TblentbidTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdnentbid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIdnentauc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setUsersid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDatissbid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPrcunibid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQununibid($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCreatedAt($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setUpdatedAt($arr[$keys[7]]);
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
     * @return $this|\Tblentbid The current object, for fluid interface
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
        $criteria = new Criteria(TblentbidTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblentbidTableMap::COL_IDNENTBID)) {
            $criteria->add(TblentbidTableMap::COL_IDNENTBID, $this->idnentbid);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_IDNENTAUC)) {
            $criteria->add(TblentbidTableMap::COL_IDNENTAUC, $this->idnentauc);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_USERSID)) {
            $criteria->add(TblentbidTableMap::COL_USERSID, $this->usersid);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_DATISSBID)) {
            $criteria->add(TblentbidTableMap::COL_DATISSBID, $this->datissbid);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_PRCUNIBID)) {
            $criteria->add(TblentbidTableMap::COL_PRCUNIBID, $this->prcunibid);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_QUNUNIBID)) {
            $criteria->add(TblentbidTableMap::COL_QUNUNIBID, $this->qununibid);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_CREATED_AT)) {
            $criteria->add(TblentbidTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(TblentbidTableMap::COL_UPDATED_AT)) {
            $criteria->add(TblentbidTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildTblentbidQuery::create();
        $criteria->add(TblentbidTableMap::COL_IDNENTBID, $this->idnentbid);

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
        $validPk = null !== $this->getIdnentbid();

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
        return $this->getIdnentbid();
    }

    /**
     * Generic method to set the primary key (idnentbid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdnentbid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdnentbid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Tblentbid (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdnentauc($this->getIdnentauc());
        $copyObj->setUsersid($this->getUsersid());
        $copyObj->setDatissbid($this->getDatissbid());
        $copyObj->setPrcunibid($this->getPrcunibid());
        $copyObj->setQununibid($this->getQununibid());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getTblentctrs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTblentctr($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdnentbid(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Tblentbid Clone of current object.
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
     * Declares an association between this object and a ChildTblentauc object.
     *
     * @param  ChildTblentauc $v
     * @return $this|\Tblentbid The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblentauc(ChildTblentauc $v = null)
    {
        if ($v === null) {
            $this->setIdnentauc(NULL);
        } else {
            $this->setIdnentauc($v->getIdnentauc());
        }

        $this->aTblentauc = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildTblentauc object, it will not be re-added.
        if ($v !== null) {
            $v->addTblentbid($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblentauc object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblentauc The associated ChildTblentauc object.
     * @throws PropelException
     */
    public function getTblentauc(ConnectionInterface $con = null)
    {
        if ($this->aTblentauc === null && (($this->idnentauc !== "" && $this->idnentauc !== null))) {
            $this->aTblentauc = ChildTblentaucQuery::create()->findPk($this->idnentauc, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTblentauc->addTblentbids($this);
             */
        }

        return $this->aTblentauc;
    }

    /**
     * Declares an association between this object and a ChildUsers object.
     *
     * @param  ChildUsers $v
     * @return $this|\Tblentbid The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsers(ChildUsers $v = null)
    {
        if ($v === null) {
            $this->setUsersid(NULL);
        } else {
            $this->setUsersid($v->getId());
        }

        $this->aUsers = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUsers object, it will not be re-added.
        if ($v !== null) {
            $v->addTblentbid($this);
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
        if ($this->aUsers === null && (($this->usersid !== "" && $this->usersid !== null))) {
            $this->aUsers = ChildUsersQuery::create()->findPk($this->usersid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsers->addTblentbids($this);
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
        if ('Tblentctr' == $relationName) {
            $this->initTblentctrs();
            return;
        }
    }

    /**
     * Clears out the collTblentctrs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTblentctrs()
     */
    public function clearTblentctrs()
    {
        $this->collTblentctrs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collTblentctrs collection loaded partially.
     */
    public function resetPartialTblentctrs($v = true)
    {
        $this->collTblentctrsPartial = $v;
    }

    /**
     * Initializes the collTblentctrs collection.
     *
     * By default this just sets the collTblentctrs collection to an empty array (like clearcollTblentctrs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTblentctrs($overrideExisting = true)
    {
        if (null !== $this->collTblentctrs && !$overrideExisting) {
            return;
        }

        $collectionClassName = TblentctrTableMap::getTableMap()->getCollectionClassName();

        $this->collTblentctrs = new $collectionClassName;
        $this->collTblentctrs->setModel('\Tblentctr');
    }

    /**
     * Gets an array of ChildTblentctr objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildTblentbid is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildTblentctr[] List of ChildTblentctr objects
     * @throws PropelException
     */
    public function getTblentctrs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collTblentctrsPartial && !$this->isNew();
        if (null === $this->collTblentctrs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTblentctrs) {
                // return empty collection
                $this->initTblentctrs();
            } else {
                $collTblentctrs = ChildTblentctrQuery::create(null, $criteria)
                    ->filterByTblentbid($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collTblentctrsPartial && count($collTblentctrs)) {
                        $this->initTblentctrs(false);

                        foreach ($collTblentctrs as $obj) {
                            if (false == $this->collTblentctrs->contains($obj)) {
                                $this->collTblentctrs->append($obj);
                            }
                        }

                        $this->collTblentctrsPartial = true;
                    }

                    return $collTblentctrs;
                }

                if ($partial && $this->collTblentctrs) {
                    foreach ($this->collTblentctrs as $obj) {
                        if ($obj->isNew()) {
                            $collTblentctrs[] = $obj;
                        }
                    }
                }

                $this->collTblentctrs = $collTblentctrs;
                $this->collTblentctrsPartial = false;
            }
        }

        return $this->collTblentctrs;
    }

    /**
     * Sets a collection of ChildTblentctr objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $tblentctrs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildTblentbid The current object (for fluent API support)
     */
    public function setTblentctrs(Collection $tblentctrs, ConnectionInterface $con = null)
    {
        /** @var ChildTblentctr[] $tblentctrsToDelete */
        $tblentctrsToDelete = $this->getTblentctrs(new Criteria(), $con)->diff($tblentctrs);


        $this->tblentctrsScheduledForDeletion = $tblentctrsToDelete;

        foreach ($tblentctrsToDelete as $tblentctrRemoved) {
            $tblentctrRemoved->setTblentbid(null);
        }

        $this->collTblentctrs = null;
        foreach ($tblentctrs as $tblentctr) {
            $this->addTblentctr($tblentctr);
        }

        $this->collTblentctrs = $tblentctrs;
        $this->collTblentctrsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Tblentctr objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Tblentctr objects.
     * @throws PropelException
     */
    public function countTblentctrs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collTblentctrsPartial && !$this->isNew();
        if (null === $this->collTblentctrs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTblentctrs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTblentctrs());
            }

            $query = ChildTblentctrQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTblentbid($this)
                ->count($con);
        }

        return count($this->collTblentctrs);
    }

    /**
     * Method called to associate a ChildTblentctr object to this object
     * through the ChildTblentctr foreign key attribute.
     *
     * @param  ChildTblentctr $l ChildTblentctr
     * @return $this|\Tblentbid The current object (for fluent API support)
     */
    public function addTblentctr(ChildTblentctr $l)
    {
        if ($this->collTblentctrs === null) {
            $this->initTblentctrs();
            $this->collTblentctrsPartial = true;
        }

        if (!$this->collTblentctrs->contains($l)) {
            $this->doAddTblentctr($l);

            if ($this->tblentctrsScheduledForDeletion and $this->tblentctrsScheduledForDeletion->contains($l)) {
                $this->tblentctrsScheduledForDeletion->remove($this->tblentctrsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildTblentctr $tblentctr The ChildTblentctr object to add.
     */
    protected function doAddTblentctr(ChildTblentctr $tblentctr)
    {
        $this->collTblentctrs[]= $tblentctr;
        $tblentctr->setTblentbid($this);
    }

    /**
     * @param  ChildTblentctr $tblentctr The ChildTblentctr object to remove.
     * @return $this|ChildTblentbid The current object (for fluent API support)
     */
    public function removeTblentctr(ChildTblentctr $tblentctr)
    {
        if ($this->getTblentctrs()->contains($tblentctr)) {
            $pos = $this->collTblentctrs->search($tblentctr);
            $this->collTblentctrs->remove($pos);
            if (null === $this->tblentctrsScheduledForDeletion) {
                $this->tblentctrsScheduledForDeletion = clone $this->collTblentctrs;
                $this->tblentctrsScheduledForDeletion->clear();
            }
            $this->tblentctrsScheduledForDeletion[]= clone $tblentctr;
            $tblentctr->setTblentbid(null);
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
        if (null !== $this->aTblentauc) {
            $this->aTblentauc->removeTblentbid($this);
        }
        if (null !== $this->aUsers) {
            $this->aUsers->removeTblentbid($this);
        }
        $this->idnentbid = null;
        $this->idnentauc = null;
        $this->usersid = null;
        $this->datissbid = null;
        $this->prcunibid = null;
        $this->qununibid = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->collTblentctrs) {
                foreach ($this->collTblentctrs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collTblentctrs = null;
        $this->aTblentauc = null;
        $this->aUsers = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblentbidTableMap::DEFAULT_STRING_FORMAT);
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
