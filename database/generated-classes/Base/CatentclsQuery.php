<?php

namespace Base;

use \Catentcls as ChildCatentcls;
use \CatentclsQuery as ChildCatentclsQuery;
use \Exception;
use \PDO;
use Map\CatentclsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'catentcls' table.
 *
 *
 *
 * @method     ChildCatentclsQuery orderByIdnentcls($order = Criteria::ASC) Order by the idnentcls column
 * @method     ChildCatentclsQuery orderByDscentcls($order = Criteria::ASC) Order by the dscentcls column
 * @method     ChildCatentclsQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildCatentclsQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildCatentclsQuery groupByIdnentcls() Group by the idnentcls column
 * @method     ChildCatentclsQuery groupByDscentcls() Group by the dscentcls column
 * @method     ChildCatentclsQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildCatentclsQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildCatentclsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCatentclsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCatentclsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCatentclsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCatentclsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCatentclsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCatentclsQuery leftJoinTblentprd($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentprd relation
 * @method     ChildCatentclsQuery rightJoinTblentprd($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentprd relation
 * @method     ChildCatentclsQuery innerJoinTblentprd($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentprd relation
 *
 * @method     ChildCatentclsQuery joinWithTblentprd($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentprd relation
 *
 * @method     ChildCatentclsQuery leftJoinWithTblentprd() Adds a LEFT JOIN clause and with to the query using the Tblentprd relation
 * @method     ChildCatentclsQuery rightJoinWithTblentprd() Adds a RIGHT JOIN clause and with to the query using the Tblentprd relation
 * @method     ChildCatentclsQuery innerJoinWithTblentprd() Adds a INNER JOIN clause and with to the query using the Tblentprd relation
 *
 * @method     \TblentprdQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCatentcls findOne(ConnectionInterface $con = null) Return the first ChildCatentcls matching the query
 * @method     ChildCatentcls findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCatentcls matching the query, or a new ChildCatentcls object populated from the query conditions when no match is found
 *
 * @method     ChildCatentcls findOneByIdnentcls(string $idnentcls) Return the first ChildCatentcls filtered by the idnentcls column
 * @method     ChildCatentcls findOneByDscentcls(string $dscentcls) Return the first ChildCatentcls filtered by the dscentcls column
 * @method     ChildCatentcls findOneByCreatedAt(string $created_at) Return the first ChildCatentcls filtered by the created_at column
 * @method     ChildCatentcls findOneByUpdatedAt(string $updated_at) Return the first ChildCatentcls filtered by the updated_at column *

 * @method     ChildCatentcls requirePk($key, ConnectionInterface $con = null) Return the ChildCatentcls by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentcls requireOne(ConnectionInterface $con = null) Return the first ChildCatentcls matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatentcls requireOneByIdnentcls(string $idnentcls) Return the first ChildCatentcls filtered by the idnentcls column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentcls requireOneByDscentcls(string $dscentcls) Return the first ChildCatentcls filtered by the dscentcls column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentcls requireOneByCreatedAt(string $created_at) Return the first ChildCatentcls filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentcls requireOneByUpdatedAt(string $updated_at) Return the first ChildCatentcls filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatentcls[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCatentcls objects based on current ModelCriteria
 * @method     ChildCatentcls[]|ObjectCollection findByIdnentcls(string $idnentcls) Return ChildCatentcls objects filtered by the idnentcls column
 * @method     ChildCatentcls[]|ObjectCollection findByDscentcls(string $dscentcls) Return ChildCatentcls objects filtered by the dscentcls column
 * @method     ChildCatentcls[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildCatentcls objects filtered by the created_at column
 * @method     ChildCatentcls[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildCatentcls objects filtered by the updated_at column
 * @method     ChildCatentcls[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CatentclsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CatentclsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Catentcls', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCatentclsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCatentclsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCatentclsQuery) {
            return $criteria;
        }
        $query = new ChildCatentclsQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCatentcls|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CatentclsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CatentclsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCatentcls A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentcls, dscentcls, created_at, updated_at FROM catentcls WHERE idnentcls = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCatentcls $obj */
            $obj = new ChildCatentcls();
            $obj->hydrate($row);
            CatentclsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCatentcls|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnentcls column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentcls(1234); // WHERE idnentcls = 1234
     * $query->filterByIdnentcls(array(12, 34)); // WHERE idnentcls IN (12, 34)
     * $query->filterByIdnentcls(array('min' => 12)); // WHERE idnentcls > 12
     * </code>
     *
     * @param     mixed $idnentcls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByIdnentcls($idnentcls = null, $comparison = null)
    {
        if (is_array($idnentcls)) {
            $useMinMax = false;
            if (isset($idnentcls['min'])) {
                $this->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $idnentcls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentcls['max'])) {
                $this->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $idnentcls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $idnentcls, $comparison);
    }

    /**
     * Filter the query on the dscentcls column
     *
     * Example usage:
     * <code>
     * $query->filterByDscentcls('fooValue');   // WHERE dscentcls = 'fooValue'
     * $query->filterByDscentcls('%fooValue%', Criteria::LIKE); // WHERE dscentcls LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dscentcls The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByDscentcls($dscentcls = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dscentcls)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentclsTableMap::COL_DSCENTCLS, $dscentcls, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CatentclsTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CatentclsTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentclsTableMap::COL_CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CatentclsTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CatentclsTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentclsTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Tblentprd object
     *
     * @param \Tblentprd|ObjectCollection $tblentprd the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatentclsQuery The current query, for fluid interface
     */
    public function filterByTblentprd($tblentprd, $comparison = null)
    {
        if ($tblentprd instanceof \Tblentprd) {
            return $this
                ->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $tblentprd->getIdnentcls(), $comparison);
        } elseif ($tblentprd instanceof ObjectCollection) {
            return $this
                ->useTblentprdQuery()
                ->filterByPrimaryKeys($tblentprd->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTblentprd() only accepts arguments of type \Tblentprd or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tblentprd relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function joinTblentprd($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tblentprd');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Tblentprd');
        }

        return $this;
    }

    /**
     * Use the Tblentprd relation Tblentprd object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblentprdQuery A secondary query class using the current class as primary query
     */
    public function useTblentprdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblentprd($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tblentprd', '\TblentprdQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCatentcls $catentcls Object to remove from the list of results
     *
     * @return $this|ChildCatentclsQuery The current query, for fluid interface
     */
    public function prune($catentcls = null)
    {
        if ($catentcls) {
            $this->addUsingAlias(CatentclsTableMap::COL_IDNENTCLS, $catentcls->getIdnentcls(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the catentcls table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentclsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CatentclsTableMap::clearInstancePool();
            CatentclsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentclsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CatentclsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CatentclsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CatentclsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CatentclsQuery
