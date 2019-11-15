<?php

namespace Map;

use \Tblentprd;
use \TblentprdQuery;
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
 * This class defines the structure of the 'tblentprd' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblentprdTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblentprdTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'ftb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tblentprd';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Tblentprd';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Tblentprd';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the idnentprd field
     */
    const COL_IDNENTPRD = 'tblentprd.idnentprd';

    /**
     * the column name for the idnentcls field
     */
    const COL_IDNENTCLS = 'tblentprd.idnentcls';

    /**
     * the column name for the idnentqul field
     */
    const COL_IDNENTQUL = 'tblentprd.idnentqul';

    /**
     * the column name for the idnentuni field
     */
    const COL_IDNENTUNI = 'tblentprd.idnentuni';

    /**
     * the column name for the userid field
     */
    const COL_USERID = 'tblentprd.userid';

    /**
     * the column name for the namentprd field
     */
    const COL_NAMENTPRD = 'tblentprd.namentprd';

    /**
     * the column name for the dscentprd field
     */
    const COL_DSCENTPRD = 'tblentprd.dscentprd';

    /**
     * the column name for the qunentprd field
     */
    const COL_QUNENTPRD = 'tblentprd.qunentprd';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'tblentprd.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'tblentprd.updated_at';

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
        self::TYPE_PHPNAME       => array('Idnentprd', 'Idnentcls', 'Idnentqul', 'Idnentuni', 'Userid', 'Namentprd', 'Dscentprd', 'Qunentprd', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idnentprd', 'idnentcls', 'idnentqul', 'idnentuni', 'userid', 'namentprd', 'dscentprd', 'qunentprd', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(TblentprdTableMap::COL_IDNENTPRD, TblentprdTableMap::COL_IDNENTCLS, TblentprdTableMap::COL_IDNENTQUL, TblentprdTableMap::COL_IDNENTUNI, TblentprdTableMap::COL_USERID, TblentprdTableMap::COL_NAMENTPRD, TblentprdTableMap::COL_DSCENTPRD, TblentprdTableMap::COL_QUNENTPRD, TblentprdTableMap::COL_CREATED_AT, TblentprdTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('idnentprd', 'idnentcls', 'idnentqul', 'idnentuni', 'userid', 'namentprd', 'dscentprd', 'qunentprd', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idnentprd' => 0, 'Idnentcls' => 1, 'Idnentqul' => 2, 'Idnentuni' => 3, 'Userid' => 4, 'Namentprd' => 5, 'Dscentprd' => 6, 'Qunentprd' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ),
        self::TYPE_CAMELNAME     => array('idnentprd' => 0, 'idnentcls' => 1, 'idnentqul' => 2, 'idnentuni' => 3, 'userid' => 4, 'namentprd' => 5, 'dscentprd' => 6, 'qunentprd' => 7, 'createdAt' => 8, 'updatedAt' => 9, ),
        self::TYPE_COLNAME       => array(TblentprdTableMap::COL_IDNENTPRD => 0, TblentprdTableMap::COL_IDNENTCLS => 1, TblentprdTableMap::COL_IDNENTQUL => 2, TblentprdTableMap::COL_IDNENTUNI => 3, TblentprdTableMap::COL_USERID => 4, TblentprdTableMap::COL_NAMENTPRD => 5, TblentprdTableMap::COL_DSCENTPRD => 6, TblentprdTableMap::COL_QUNENTPRD => 7, TblentprdTableMap::COL_CREATED_AT => 8, TblentprdTableMap::COL_UPDATED_AT => 9, ),
        self::TYPE_FIELDNAME     => array('idnentprd' => 0, 'idnentcls' => 1, 'idnentqul' => 2, 'idnentuni' => 3, 'userid' => 4, 'namentprd' => 5, 'dscentprd' => 6, 'qunentprd' => 7, 'created_at' => 8, 'updated_at' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $this->setName('tblentprd');
        $this->setPhpName('Tblentprd');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Tblentprd');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnentprd', 'Idnentprd', 'BIGINT', true, null, null);
        $this->addForeignKey('idnentcls', 'Idnentcls', 'BIGINT', 'catentcls', 'idnentcls', true, null, null);
        $this->addForeignKey('idnentqul', 'Idnentqul', 'BIGINT', 'catentqul', 'idnentqul', true, null, null);
        $this->addForeignKey('idnentuni', 'Idnentuni', 'BIGINT', 'catentuni', 'idnentuni', true, null, null);
        $this->addForeignKey('userid', 'Userid', 'BIGINT', 'users', 'id', true, null, null);
        $this->addColumn('namentprd', 'Namentprd', 'VARCHAR', true, 191, null);
        $this->addColumn('dscentprd', 'Dscentprd', 'VARCHAR', true, 191, null);
        $this->addColumn('qunentprd', 'Qunentprd', 'DECIMAL', true, 8, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Catentcls', '\\Catentcls', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':idnentcls',
    1 => ':idnentcls',
  ),
), null, null, null, false);
        $this->addRelation('Catentqul', '\\Catentqul', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':idnentqul',
    1 => ':idnentqul',
  ),
), null, null, null, false);
        $this->addRelation('Catentuni', '\\Catentuni', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':idnentuni',
    1 => ':idnentuni',
  ),
), null, null, null, false);
        $this->addRelation('Users', '\\Users', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':userid',
    1 => ':id',
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Idnentprd', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblentprdTableMap::CLASS_DEFAULT : TblentprdTableMap::OM_CLASS;
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
     * @return array           (Tblentprd object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblentprdTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblentprdTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblentprdTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblentprdTableMap::OM_CLASS;
            /** @var Tblentprd $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblentprdTableMap::addInstanceToPool($obj, $key);
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
            $key = TblentprdTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblentprdTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Tblentprd $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblentprdTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblentprdTableMap::COL_IDNENTPRD);
            $criteria->addSelectColumn(TblentprdTableMap::COL_IDNENTCLS);
            $criteria->addSelectColumn(TblentprdTableMap::COL_IDNENTQUL);
            $criteria->addSelectColumn(TblentprdTableMap::COL_IDNENTUNI);
            $criteria->addSelectColumn(TblentprdTableMap::COL_USERID);
            $criteria->addSelectColumn(TblentprdTableMap::COL_NAMENTPRD);
            $criteria->addSelectColumn(TblentprdTableMap::COL_DSCENTPRD);
            $criteria->addSelectColumn(TblentprdTableMap::COL_QUNENTPRD);
            $criteria->addSelectColumn(TblentprdTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(TblentprdTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.idnentprd');
            $criteria->addSelectColumn($alias . '.idnentcls');
            $criteria->addSelectColumn($alias . '.idnentqul');
            $criteria->addSelectColumn($alias . '.idnentuni');
            $criteria->addSelectColumn($alias . '.userid');
            $criteria->addSelectColumn($alias . '.namentprd');
            $criteria->addSelectColumn($alias . '.dscentprd');
            $criteria->addSelectColumn($alias . '.qunentprd');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblentprdTableMap::DATABASE_NAME)->getTable(TblentprdTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblentprdTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblentprdTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblentprdTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Tblentprd or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Tblentprd object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentprdTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Tblentprd) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblentprdTableMap::DATABASE_NAME);
            $criteria->add(TblentprdTableMap::COL_IDNENTPRD, (array) $values, Criteria::IN);
        }

        $query = TblentprdQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblentprdTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblentprdTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tblentprd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblentprdQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Tblentprd or Criteria object.
     *
     * @param mixed               $criteria Criteria or Tblentprd object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentprdTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Tblentprd object
        }

        if ($criteria->containsKey(TblentprdTableMap::COL_IDNENTPRD) && $criteria->keyContainsValue(TblentprdTableMap::COL_IDNENTPRD) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblentprdTableMap::COL_IDNENTPRD.')');
        }


        // Set the correct dbName
        $query = TblentprdQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblentprdTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblentprdTableMap::buildTableMap();
