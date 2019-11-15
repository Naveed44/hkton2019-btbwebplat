<?php

namespace Map;

use \Tblentauc;
use \TblentaucQuery;
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
 * This class defines the structure of the 'tblentauc' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblentaucTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblentaucTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'ftb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tblentauc';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Tblentauc';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Tblentauc';

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
     * the column name for the idnentauc field
     */
    const COL_IDNENTAUC = 'tblentauc.idnentauc';

    /**
     * the column name for the idnentprd field
     */
    const COL_IDNENTPRD = 'tblentauc.idnentprd';

    /**
     * the column name for the datstrauc field
     */
    const COL_DATSTRAUC = 'tblentauc.datstrauc';

    /**
     * the column name for the datendauc field
     */
    const COL_DATENDAUC = 'tblentauc.datendauc';

    /**
     * the column name for the basprcauc field
     */
    const COL_BASPRCAUC = 'tblentauc.basprcauc';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'tblentauc.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'tblentauc.updated_at';

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
        self::TYPE_PHPNAME       => array('Idnentauc', 'Idnentprd', 'Datstrauc', 'Datendauc', 'Basprcauc', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idnentauc', 'idnentprd', 'datstrauc', 'datendauc', 'basprcauc', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(TblentaucTableMap::COL_IDNENTAUC, TblentaucTableMap::COL_IDNENTPRD, TblentaucTableMap::COL_DATSTRAUC, TblentaucTableMap::COL_DATENDAUC, TblentaucTableMap::COL_BASPRCAUC, TblentaucTableMap::COL_CREATED_AT, TblentaucTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('idnentauc', 'idnentprd', 'datstrauc', 'datendauc', 'basprcauc', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idnentauc' => 0, 'Idnentprd' => 1, 'Datstrauc' => 2, 'Datendauc' => 3, 'Basprcauc' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
        self::TYPE_CAMELNAME     => array('idnentauc' => 0, 'idnentprd' => 1, 'datstrauc' => 2, 'datendauc' => 3, 'basprcauc' => 4, 'createdAt' => 5, 'updatedAt' => 6, ),
        self::TYPE_COLNAME       => array(TblentaucTableMap::COL_IDNENTAUC => 0, TblentaucTableMap::COL_IDNENTPRD => 1, TblentaucTableMap::COL_DATSTRAUC => 2, TblentaucTableMap::COL_DATENDAUC => 3, TblentaucTableMap::COL_BASPRCAUC => 4, TblentaucTableMap::COL_CREATED_AT => 5, TblentaucTableMap::COL_UPDATED_AT => 6, ),
        self::TYPE_FIELDNAME     => array('idnentauc' => 0, 'idnentprd' => 1, 'datstrauc' => 2, 'datendauc' => 3, 'basprcauc' => 4, 'created_at' => 5, 'updated_at' => 6, ),
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
        $this->setName('tblentauc');
        $this->setPhpName('Tblentauc');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Tblentauc');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnentauc', 'Idnentauc', 'BIGINT', true, null, null);
        $this->addForeignKey('idnentprd', 'Idnentprd', 'BIGINT', 'tblentprd', 'idnentprd', true, null, null);
        $this->addColumn('datstrauc', 'Datstrauc', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('datendauc', 'Datendauc', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('basprcauc', 'Basprcauc', 'DECIMAL', true, 8, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tblentprd', '\\Tblentprd', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':idnentprd',
    1 => ':idnentprd',
  ),
), null, null, null, false);
        $this->addRelation('Tblentbid', '\\Tblentbid', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':idnentauc',
    1 => ':idnentauc',
  ),
), null, null, 'Tblentbids', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Idnentauc', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblentaucTableMap::CLASS_DEFAULT : TblentaucTableMap::OM_CLASS;
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
     * @return array           (Tblentauc object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblentaucTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblentaucTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblentaucTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblentaucTableMap::OM_CLASS;
            /** @var Tblentauc $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblentaucTableMap::addInstanceToPool($obj, $key);
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
            $key = TblentaucTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblentaucTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Tblentauc $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblentaucTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblentaucTableMap::COL_IDNENTAUC);
            $criteria->addSelectColumn(TblentaucTableMap::COL_IDNENTPRD);
            $criteria->addSelectColumn(TblentaucTableMap::COL_DATSTRAUC);
            $criteria->addSelectColumn(TblentaucTableMap::COL_DATENDAUC);
            $criteria->addSelectColumn(TblentaucTableMap::COL_BASPRCAUC);
            $criteria->addSelectColumn(TblentaucTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(TblentaucTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.idnentauc');
            $criteria->addSelectColumn($alias . '.idnentprd');
            $criteria->addSelectColumn($alias . '.datstrauc');
            $criteria->addSelectColumn($alias . '.datendauc');
            $criteria->addSelectColumn($alias . '.basprcauc');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblentaucTableMap::DATABASE_NAME)->getTable(TblentaucTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblentaucTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblentaucTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblentaucTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Tblentauc or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Tblentauc object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentaucTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Tblentauc) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblentaucTableMap::DATABASE_NAME);
            $criteria->add(TblentaucTableMap::COL_IDNENTAUC, (array) $values, Criteria::IN);
        }

        $query = TblentaucQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblentaucTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblentaucTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tblentauc table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblentaucQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Tblentauc or Criteria object.
     *
     * @param mixed               $criteria Criteria or Tblentauc object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentaucTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Tblentauc object
        }

        if ($criteria->containsKey(TblentaucTableMap::COL_IDNENTAUC) && $criteria->keyContainsValue(TblentaucTableMap::COL_IDNENTAUC) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblentaucTableMap::COL_IDNENTAUC.')');
        }


        // Set the correct dbName
        $query = TblentaucQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblentaucTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblentaucTableMap::buildTableMap();
