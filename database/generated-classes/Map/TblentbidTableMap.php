<?php

namespace Map;

use \Tblentbid;
use \TblentbidQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'tblentbid' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblentbidTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblentbidTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'ftb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tblentbid';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Tblentbid';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Tblentbid';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the idnentbid field
     */
    const COL_IDNENTBID = 'tblentbid.idnentbid';

    /**
     * the column name for the idnentauc field
     */
    const COL_IDNENTAUC = 'tblentbid.idnentauc';

    /**
     * the column name for the usersid field
     */
    const COL_USERSID = 'tblentbid.usersid';

    /**
     * the column name for the datissbid field
     */
    const COL_DATISSBID = 'tblentbid.datissbid';

    /**
     * the column name for the prcunibid field
     */
    const COL_PRCUNIBID = 'tblentbid.prcunibid';

    /**
     * the column name for the qununibid field
     */
    const COL_QUNUNIBID = 'tblentbid.qununibid';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'tblentbid.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'tblentbid.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Idnentbid', 'Idnentauc', 'Usersid', 'Datissbid', 'Prcunibid', 'Qununibid', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idnentbid', 'idnentauc', 'usersid', 'datissbid', 'prcunibid', 'qununibid', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(TblentbidTableMap::COL_IDNENTBID, TblentbidTableMap::COL_IDNENTAUC, TblentbidTableMap::COL_USERSID, TblentbidTableMap::COL_DATISSBID, TblentbidTableMap::COL_PRCUNIBID, TblentbidTableMap::COL_QUNUNIBID, TblentbidTableMap::COL_CREATED_AT, TblentbidTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('idnentbid', 'idnentauc', 'usersid', 'datissbid', 'prcunibid', 'qununibid', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idnentbid' => 0, 'Idnentauc' => 1, 'Usersid' => 2, 'Datissbid' => 3, 'Prcunibid' => 4, 'Qununibid' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
        self::TYPE_CAMELNAME     => array('idnentbid' => 0, 'idnentauc' => 1, 'usersid' => 2, 'datissbid' => 3, 'prcunibid' => 4, 'qununibid' => 5, 'createdAt' => 6, 'updatedAt' => 7, ),
        self::TYPE_COLNAME       => array(TblentbidTableMap::COL_IDNENTBID => 0, TblentbidTableMap::COL_IDNENTAUC => 1, TblentbidTableMap::COL_USERSID => 2, TblentbidTableMap::COL_DATISSBID => 3, TblentbidTableMap::COL_PRCUNIBID => 4, TblentbidTableMap::COL_QUNUNIBID => 5, TblentbidTableMap::COL_CREATED_AT => 6, TblentbidTableMap::COL_UPDATED_AT => 7, ),
        self::TYPE_FIELDNAME     => array('idnentbid' => 0, 'idnentauc' => 1, 'usersid' => 2, 'datissbid' => 3, 'prcunibid' => 4, 'qununibid' => 5, 'created_at' => 6, 'updated_at' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('tblentbid');
        $this->setPhpName('Tblentbid');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Tblentbid');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnentbid', 'Idnentbid', 'BIGINT', true, null, null);
        $this->addForeignKey('idnentauc', 'Idnentauc', 'BIGINT', 'tblentauc', 'idnentauc', true, null, null);
        $this->addForeignKey('usersid', 'Usersid', 'BIGINT', 'users', 'id', true, null, null);
        $this->addColumn('datissbid', 'Datissbid', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('prcunibid', 'Prcunibid', 'DECIMAL', true, 8, null);
        $this->addColumn('qununibid', 'Qununibid', 'DECIMAL', true, 8, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tblentauc', '\\Tblentauc', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':idnentauc',
    1 => ':idnentauc',
  ),
), null, null, null, false);
        $this->addRelation('Users', '\\Users', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':usersid',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('Tblentctr', '\\Tblentctr', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':idnentbid',
    1 => ':idnentbid',
  ),
), null, null, 'Tblentctrs', false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Idnentbid', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TblentbidTableMap::CLASS_DEFAULT : TblentbidTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Tblentbid object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblentbidTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblentbidTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblentbidTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblentbidTableMap::OM_CLASS;
            /** @var Tblentbid $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblentbidTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = TblentbidTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblentbidTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Tblentbid $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblentbidTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TblentbidTableMap::COL_IDNENTBID);
            $criteria->addSelectColumn(TblentbidTableMap::COL_IDNENTAUC);
            $criteria->addSelectColumn(TblentbidTableMap::COL_USERSID);
            $criteria->addSelectColumn(TblentbidTableMap::COL_DATISSBID);
            $criteria->addSelectColumn(TblentbidTableMap::COL_PRCUNIBID);
            $criteria->addSelectColumn(TblentbidTableMap::COL_QUNUNIBID);
            $criteria->addSelectColumn(TblentbidTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(TblentbidTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.idnentbid');
            $criteria->addSelectColumn($alias . '.idnentauc');
            $criteria->addSelectColumn($alias . '.usersid');
            $criteria->addSelectColumn($alias . '.datissbid');
            $criteria->addSelectColumn($alias . '.prcunibid');
            $criteria->addSelectColumn($alias . '.qununibid');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(TblentbidTableMap::DATABASE_NAME)->getTable(TblentbidTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblentbidTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblentbidTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblentbidTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Tblentbid or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Tblentbid object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentbidTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Tblentbid) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblentbidTableMap::DATABASE_NAME);
            $criteria->add(TblentbidTableMap::COL_IDNENTBID, (array) $values, Criteria::IN);
        }

        $query = TblentbidQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblentbidTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblentbidTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tblentbid table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblentbidQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Tblentbid or Criteria object.
     *
     * @param mixed               $criteria Criteria or Tblentbid object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentbidTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Tblentbid object
        }

        if ($criteria->containsKey(TblentbidTableMap::COL_IDNENTBID) && $criteria->keyContainsValue(TblentbidTableMap::COL_IDNENTBID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblentbidTableMap::COL_IDNENTBID.')');
        }


        // Set the correct dbName
        $query = TblentbidQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblentbidTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblentbidTableMap::buildTableMap();
