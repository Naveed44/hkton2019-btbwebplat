<?php

namespace Map;

use \Tblentcms;
use \TblentcmsQuery;
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
 * This class defines the structure of the 'tblentcms' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblentcmsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblentcmsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'ftb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tblentcms';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Tblentcms';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Tblentcms';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the idnentcms field
     */
    const COL_IDNENTCMS = 'tblentcms.idnentcms';

    /**
     * the column name for the idnentctr field
     */
    const COL_IDNENTCTR = 'tblentcms.idnentctr';

    /**
     * the column name for the ttlentcms field
     */
    const COL_TTLENTCMS = 'tblentcms.ttlentcms';

    /**
     * the column name for the datsndinv field
     */
    const COL_DATSNDINV = 'tblentcms.datsndinv';

    /**
     * the column name for the datpaycms field
     */
    const COL_DATPAYCMS = 'tblentcms.datpaycms';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'tblentcms.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'tblentcms.updated_at';

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
        self::TYPE_PHPNAME       => array('Idnentcms', 'Idnentctr', 'Ttlentcms', 'Datsndinv', 'Datpaycms', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idnentcms', 'idnentctr', 'ttlentcms', 'datsndinv', 'datpaycms', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(TblentcmsTableMap::COL_IDNENTCMS, TblentcmsTableMap::COL_IDNENTCTR, TblentcmsTableMap::COL_TTLENTCMS, TblentcmsTableMap::COL_DATSNDINV, TblentcmsTableMap::COL_DATPAYCMS, TblentcmsTableMap::COL_CREATED_AT, TblentcmsTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('idnentcms', 'idnentctr', 'ttlentcms', 'datsndinv', 'datpaycms', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idnentcms' => 0, 'Idnentctr' => 1, 'Ttlentcms' => 2, 'Datsndinv' => 3, 'Datpaycms' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
        self::TYPE_CAMELNAME     => array('idnentcms' => 0, 'idnentctr' => 1, 'ttlentcms' => 2, 'datsndinv' => 3, 'datpaycms' => 4, 'createdAt' => 5, 'updatedAt' => 6, ),
        self::TYPE_COLNAME       => array(TblentcmsTableMap::COL_IDNENTCMS => 0, TblentcmsTableMap::COL_IDNENTCTR => 1, TblentcmsTableMap::COL_TTLENTCMS => 2, TblentcmsTableMap::COL_DATSNDINV => 3, TblentcmsTableMap::COL_DATPAYCMS => 4, TblentcmsTableMap::COL_CREATED_AT => 5, TblentcmsTableMap::COL_UPDATED_AT => 6, ),
        self::TYPE_FIELDNAME     => array('idnentcms' => 0, 'idnentctr' => 1, 'ttlentcms' => 2, 'datsndinv' => 3, 'datpaycms' => 4, 'created_at' => 5, 'updated_at' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
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
        $this->setName('tblentcms');
        $this->setPhpName('Tblentcms');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Tblentcms');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnentcms', 'Idnentcms', 'BIGINT', true, null, null);
        $this->addForeignKey('idnentctr', 'Idnentctr', 'BIGINT', 'tblentctr', 'idnentctr', true, null, null);
        $this->addColumn('ttlentcms', 'Ttlentcms', 'DECIMAL', true, 8, null);
        $this->addColumn('datsndinv', 'Datsndinv', 'TIMESTAMP', false, null, null);
        $this->addColumn('datpaycms', 'Datpaycms', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tblentctr', '\\Tblentctr', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':idnentctr',
    1 => ':idnentctr',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Idnentcms', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblentcmsTableMap::CLASS_DEFAULT : TblentcmsTableMap::OM_CLASS;
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
     * @return array           (Tblentcms object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblentcmsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblentcmsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblentcmsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblentcmsTableMap::OM_CLASS;
            /** @var Tblentcms $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblentcmsTableMap::addInstanceToPool($obj, $key);
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
            $key = TblentcmsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblentcmsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Tblentcms $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblentcmsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblentcmsTableMap::COL_IDNENTCMS);
            $criteria->addSelectColumn(TblentcmsTableMap::COL_IDNENTCTR);
            $criteria->addSelectColumn(TblentcmsTableMap::COL_TTLENTCMS);
            $criteria->addSelectColumn(TblentcmsTableMap::COL_DATSNDINV);
            $criteria->addSelectColumn(TblentcmsTableMap::COL_DATPAYCMS);
            $criteria->addSelectColumn(TblentcmsTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(TblentcmsTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.idnentcms');
            $criteria->addSelectColumn($alias . '.idnentctr');
            $criteria->addSelectColumn($alias . '.ttlentcms');
            $criteria->addSelectColumn($alias . '.datsndinv');
            $criteria->addSelectColumn($alias . '.datpaycms');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblentcmsTableMap::DATABASE_NAME)->getTable(TblentcmsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblentcmsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblentcmsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblentcmsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Tblentcms or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Tblentcms object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentcmsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Tblentcms) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblentcmsTableMap::DATABASE_NAME);
            $criteria->add(TblentcmsTableMap::COL_IDNENTCMS, (array) $values, Criteria::IN);
        }

        $query = TblentcmsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblentcmsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblentcmsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tblentcms table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblentcmsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Tblentcms or Criteria object.
     *
     * @param mixed               $criteria Criteria or Tblentcms object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentcmsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Tblentcms object
        }

        if ($criteria->containsKey(TblentcmsTableMap::COL_IDNENTCMS) && $criteria->keyContainsValue(TblentcmsTableMap::COL_IDNENTCMS) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblentcmsTableMap::COL_IDNENTCMS.')');
        }


        // Set the correct dbName
        $query = TblentcmsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblentcmsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblentcmsTableMap::buildTableMap();
