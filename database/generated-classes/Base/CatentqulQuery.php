<?php

namespace Base;

use \Catentqul as ChildCatentqul;
use \CatentqulQuery as ChildCatentqulQuery;
use \Exception;
use \PDO;
use Map\CatentqulTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'catentqul' table.
 *
 *
 *
 * @method     ChildCatentqulQuery orderByIdnentqul($order = Criteria::ASC) Order by the idnentqul column
 * @method     ChildCatentqulQuery orderByDscentqul($order = Criteria::ASC) Order by the dscentqul column
 * @method     ChildCatentqulQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildCatentqulQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildCatentqulQuery groupByIdnentqul() Group by the idnentqul column
 * @method     ChildCatentqulQuery groupByDscentqul() Group by the dscentqul column
 * @method     ChildCatentqulQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildCatentqulQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildCatentqulQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCatentqulQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCatentqulQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCatentqulQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCatentqulQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCatentqulQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCatentqulQuery leftJoinTblentprd($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentprd relation
 * @method     ChildCatentqulQuery rightJoinTblentprd($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentprd relation
 * @method     ChildCatentqulQuery innerJoinTblentprd($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentprd relation
 *
 * @method     ChildCatentqulQuery joinWithTblentprd($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentprd relation
 *
 * @method     ChildCatentqulQuery leftJoinWithTblentprd() Adds a LEFT JOIN clause and with to the query using the Tblentprd relation
 * @method     ChildCatentqulQuery rightJoinWithTblentprd() Adds a RIGHT JOIN clause and with to the query using the Tblentprd relation
 * @method     ChildCatentqulQuery innerJoinWithTblentprd() Adds a INNER JOIN clause and with to the query using the Tblentprd relation
 *
 * @method     \TblentprdQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCatentqul findOne(ConnectionInterface $con = null) Return the first ChildCatentqul matching the query
 * @method     ChildCatentqul findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCatentqul matching the query, or a new ChildCatentqul object populated from the query conditions when no match is found
 *
 * @method     ChildCatentqul findOneByIdnentqul(string $idnentqul) Return the first ChildCatentqul filtered by the idnentqul column
 * @method     ChildCatentqul findOneByDscentqul(string $dscentqul) Return the first ChildCatentqul filtered by the dscentqul column
 * @method     ChildCatentqul findOneByCreatedAt(string $created_at) Return the first ChildCatentqul filtered by the created_at column
 * @method     ChildCatentqul findOneByUpdatedAt(string $updated_at) Return the first ChildCatentqul filtered by the updated_at column *

 * @method     ChildCatentqul requirePk($key, ConnectionInterface $con = null) Return the ChildCatentqul by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentqul requireOne(ConnectionInterface $con = null) Return the first ChildCatentqul matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatentqul requireOneByIdnentqul(string $idnentqul) Return the first ChildCatentqul filtered by the idnentqul column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentqul requireOneByDscentqul(string $dscentqul) Return the first ChildCatentqul filtered by the dscentqul column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentqul requireOneByCreatedAt(string $created_at) Return the first ChildCatentqul filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentqul requireOneByUpdatedAt(string $updated_at) Return the first ChildCatentqul filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatentqul[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCatentqul objects based on current ModelCriteria
 * @method     ChildCatentqul[]|ObjectCollection findByIdnentqul(string $idnentqul) Return ChildCatentqul objects filtered by the idnentqul column
 * @method     ChildCatentqul[]|ObjectCollection findByDscentqul(string $dscentqul) Return ChildCatentqul objects filtered by the dscentqul column
 * @method     ChildCatentqul[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildCatentqul objects filtered by the created_at column
 * @method     ChildCatentqul[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildCatentqul objects filtered by the updated_at column
 * @method     ChildCatentqul[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CatentqulQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CatentqulQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Catentqul', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCatentqulQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCatentqulQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCatentqulQuery) {
            return $criteria;
        }
        $query = new ChildCatentqulQuery();
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
     * @return ChildCatentqul|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CatentqulTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CatentqulTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCatentqul A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentqul, dscentqul, created_at, updated_at FROM catentqul WHERE idnentqul = :p0';
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
            /** @var ChildCatentqul $obj */
            $obj = new ChildCatentqul();
            $obj->hydrate($row);
            CatentqulTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCatentqul|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnentqul column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentqul(1234); // WHERE idnentqul = 1234
     * $query->filterByIdnentqul(array(12, 34)); // WHERE idnentqul IN (12, 34)
     * $query->filterByIdnentqul(array('min' => 12)); // WHERE idnentqul > 12
     * </code>
     *
     * @param     mixed $idnentqul The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByIdnentqul($idnentqul = null, $comparison = null)
    {
        if (is_array($idnentqul)) {
            $useMinMax = false;
            if (isset($idnentqul['min'])) {
                $this->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $idnentqul['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentqul['max'])) {
                $this->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $idnentqul['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $idnentqul, $comparison);
    }

    /**
     * Filter the query on the dscentqul column
     *
     * Example usage:
     * <code>
     * $query->filterByDscentqul('fooValue');   // WHERE dscentqul = 'fooValue'
     * $query->filterByDscentqul('%fooValue%', Criteria::LIKE); // WHERE dscentqul LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dscentqul The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByDscentqul($dscentqul = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dscentqul)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentqulTableMap::COL_DSCENTQUL, $dscentqul, $comparison);
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
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CatentqulTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CatentqulTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentqulTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CatentqulTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CatentqulTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentqulTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Tblentprd object
     *
     * @param \Tblentprd|ObjectCollection $tblentprd the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatentqulQuery The current query, for fluid interface
     */
    public function filterByTblentprd($tblentprd, $comparison = null)
    {
        if ($tblentprd instanceof \Tblentprd) {
            return $this
                ->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $tblentprd->getIdnentqul(), $comparison);
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
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
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
     * @param   ChildCatentqul $catentqul Object to remove from the list of results
     *
     * @return $this|ChildCatentqulQuery The current query, for fluid interface
     */
    public function prune($catentqul = null)
    {
        if ($catentqul) {
            $this->addUsingAlias(CatentqulTableMap::COL_IDNENTQUL, $catentqul->getIdnentqul(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the catentqul table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentqulTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CatentqulTableMap::clearInstancePool();
            CatentqulTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CatentqulTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CatentqulTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CatentqulTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CatentqulTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CatentqulQuery
