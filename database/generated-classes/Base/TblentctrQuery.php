<?php

namespace Base;

use \Tblentctr as ChildTblentctr;
use \TblentctrQuery as ChildTblentctrQuery;
use \Exception;
use \PDO;
use Map\TblentctrTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tblentctr' table.
 *
 *
 *
 * @method     ChildTblentctrQuery orderByIdnentctr($order = Criteria::ASC) Order by the idnentctr column
 * @method     ChildTblentctrQuery orderByIdnentbid($order = Criteria::ASC) Order by the idnentbid column
 * @method     ChildTblentctrQuery orderByTtlentctr($order = Criteria::ASC) Order by the ttlentctr column
 * @method     ChildTblentctrQuery orderByCmsentctr($order = Criteria::ASC) Order by the cmsentctr column
 * @method     ChildTblentctrQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTblentctrQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTblentctrQuery groupByIdnentctr() Group by the idnentctr column
 * @method     ChildTblentctrQuery groupByIdnentbid() Group by the idnentbid column
 * @method     ChildTblentctrQuery groupByTtlentctr() Group by the ttlentctr column
 * @method     ChildTblentctrQuery groupByCmsentctr() Group by the cmsentctr column
 * @method     ChildTblentctrQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTblentctrQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTblentctrQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblentctrQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblentctrQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblentctrQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblentctrQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblentctrQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblentctrQuery leftJoinTblentbid($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentbid relation
 * @method     ChildTblentctrQuery rightJoinTblentbid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentbid relation
 * @method     ChildTblentctrQuery innerJoinTblentbid($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentbid relation
 *
 * @method     ChildTblentctrQuery joinWithTblentbid($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentbid relation
 *
 * @method     ChildTblentctrQuery leftJoinWithTblentbid() Adds a LEFT JOIN clause and with to the query using the Tblentbid relation
 * @method     ChildTblentctrQuery rightJoinWithTblentbid() Adds a RIGHT JOIN clause and with to the query using the Tblentbid relation
 * @method     ChildTblentctrQuery innerJoinWithTblentbid() Adds a INNER JOIN clause and with to the query using the Tblentbid relation
 *
 * @method     ChildTblentctrQuery leftJoinTblentcms($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentcms relation
 * @method     ChildTblentctrQuery rightJoinTblentcms($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentcms relation
 * @method     ChildTblentctrQuery innerJoinTblentcms($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentcms relation
 *
 * @method     ChildTblentctrQuery joinWithTblentcms($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentcms relation
 *
 * @method     ChildTblentctrQuery leftJoinWithTblentcms() Adds a LEFT JOIN clause and with to the query using the Tblentcms relation
 * @method     ChildTblentctrQuery rightJoinWithTblentcms() Adds a RIGHT JOIN clause and with to the query using the Tblentcms relation
 * @method     ChildTblentctrQuery innerJoinWithTblentcms() Adds a INNER JOIN clause and with to the query using the Tblentcms relation
 *
 * @method     \TblentbidQuery|\TblentcmsQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblentctr findOne(ConnectionInterface $con = null) Return the first ChildTblentctr matching the query
 * @method     ChildTblentctr findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblentctr matching the query, or a new ChildTblentctr object populated from the query conditions when no match is found
 *
 * @method     ChildTblentctr findOneByIdnentctr(string $idnentctr) Return the first ChildTblentctr filtered by the idnentctr column
 * @method     ChildTblentctr findOneByIdnentbid(string $idnentbid) Return the first ChildTblentctr filtered by the idnentbid column
 * @method     ChildTblentctr findOneByTtlentctr(string $ttlentctr) Return the first ChildTblentctr filtered by the ttlentctr column
 * @method     ChildTblentctr findOneByCmsentctr(int $cmsentctr) Return the first ChildTblentctr filtered by the cmsentctr column
 * @method     ChildTblentctr findOneByCreatedAt(string $created_at) Return the first ChildTblentctr filtered by the created_at column
 * @method     ChildTblentctr findOneByUpdatedAt(string $updated_at) Return the first ChildTblentctr filtered by the updated_at column *

 * @method     ChildTblentctr requirePk($key, ConnectionInterface $con = null) Return the ChildTblentctr by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentctr requireOne(ConnectionInterface $con = null) Return the first ChildTblentctr matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentctr requireOneByIdnentctr(string $idnentctr) Return the first ChildTblentctr filtered by the idnentctr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentctr requireOneByIdnentbid(string $idnentbid) Return the first ChildTblentctr filtered by the idnentbid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentctr requireOneByTtlentctr(string $ttlentctr) Return the first ChildTblentctr filtered by the ttlentctr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentctr requireOneByCmsentctr(int $cmsentctr) Return the first ChildTblentctr filtered by the cmsentctr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentctr requireOneByCreatedAt(string $created_at) Return the first ChildTblentctr filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentctr requireOneByUpdatedAt(string $updated_at) Return the first ChildTblentctr filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentctr[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblentctr objects based on current ModelCriteria
 * @method     ChildTblentctr[]|ObjectCollection findByIdnentctr(string $idnentctr) Return ChildTblentctr objects filtered by the idnentctr column
 * @method     ChildTblentctr[]|ObjectCollection findByIdnentbid(string $idnentbid) Return ChildTblentctr objects filtered by the idnentbid column
 * @method     ChildTblentctr[]|ObjectCollection findByTtlentctr(string $ttlentctr) Return ChildTblentctr objects filtered by the ttlentctr column
 * @method     ChildTblentctr[]|ObjectCollection findByCmsentctr(int $cmsentctr) Return ChildTblentctr objects filtered by the cmsentctr column
 * @method     ChildTblentctr[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTblentctr objects filtered by the created_at column
 * @method     ChildTblentctr[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTblentctr objects filtered by the updated_at column
 * @method     ChildTblentctr[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblentctrQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblentctrQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Tblentctr', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblentctrQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblentctrQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblentctrQuery) {
            return $criteria;
        }
        $query = new ChildTblentctrQuery();
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
     * @return ChildTblentctr|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblentctrTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblentctrTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblentctr A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentctr, idnentbid, ttlentctr, cmsentctr, created_at, updated_at FROM tblentctr WHERE idnentctr = :p0';
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
            /** @var ChildTblentctr $obj */
            $obj = new ChildTblentctr();
            $obj->hydrate($row);
            TblentctrTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblentctr|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnentctr column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentctr(1234); // WHERE idnentctr = 1234
     * $query->filterByIdnentctr(array(12, 34)); // WHERE idnentctr IN (12, 34)
     * $query->filterByIdnentctr(array('min' => 12)); // WHERE idnentctr > 12
     * </code>
     *
     * @param     mixed $idnentctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByIdnentctr($idnentctr = null, $comparison = null)
    {
        if (is_array($idnentctr)) {
            $useMinMax = false;
            if (isset($idnentctr['min'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $idnentctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentctr['max'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $idnentctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $idnentctr, $comparison);
    }

    /**
     * Filter the query on the idnentbid column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentbid(1234); // WHERE idnentbid = 1234
     * $query->filterByIdnentbid(array(12, 34)); // WHERE idnentbid IN (12, 34)
     * $query->filterByIdnentbid(array('min' => 12)); // WHERE idnentbid > 12
     * </code>
     *
     * @see       filterByTblentbid()
     *
     * @param     mixed $idnentbid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByIdnentbid($idnentbid = null, $comparison = null)
    {
        if (is_array($idnentbid)) {
            $useMinMax = false;
            if (isset($idnentbid['min'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_IDNENTBID, $idnentbid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentbid['max'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_IDNENTBID, $idnentbid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentctrTableMap::COL_IDNENTBID, $idnentbid, $comparison);
    }

    /**
     * Filter the query on the ttlentctr column
     *
     * Example usage:
     * <code>
     * $query->filterByTtlentctr(1234); // WHERE ttlentctr = 1234
     * $query->filterByTtlentctr(array(12, 34)); // WHERE ttlentctr IN (12, 34)
     * $query->filterByTtlentctr(array('min' => 12)); // WHERE ttlentctr > 12
     * </code>
     *
     * @param     mixed $ttlentctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByTtlentctr($ttlentctr = null, $comparison = null)
    {
        if (is_array($ttlentctr)) {
            $useMinMax = false;
            if (isset($ttlentctr['min'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_TTLENTCTR, $ttlentctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ttlentctr['max'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_TTLENTCTR, $ttlentctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentctrTableMap::COL_TTLENTCTR, $ttlentctr, $comparison);
    }

    /**
     * Filter the query on the cmsentctr column
     *
     * Example usage:
     * <code>
     * $query->filterByCmsentctr(1234); // WHERE cmsentctr = 1234
     * $query->filterByCmsentctr(array(12, 34)); // WHERE cmsentctr IN (12, 34)
     * $query->filterByCmsentctr(array('min' => 12)); // WHERE cmsentctr > 12
     * </code>
     *
     * @param     mixed $cmsentctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByCmsentctr($cmsentctr = null, $comparison = null)
    {
        if (is_array($cmsentctr)) {
            $useMinMax = false;
            if (isset($cmsentctr['min'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_CMSENTCTR, $cmsentctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cmsentctr['max'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_CMSENTCTR, $cmsentctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentctrTableMap::COL_CMSENTCTR, $cmsentctr, $comparison);
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
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentctrTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TblentctrTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentctrTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Tblentbid object
     *
     * @param \Tblentbid|ObjectCollection $tblentbid The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByTblentbid($tblentbid, $comparison = null)
    {
        if ($tblentbid instanceof \Tblentbid) {
            return $this
                ->addUsingAlias(TblentctrTableMap::COL_IDNENTBID, $tblentbid->getIdnentbid(), $comparison);
        } elseif ($tblentbid instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentctrTableMap::COL_IDNENTBID, $tblentbid->toKeyValue('PrimaryKey', 'Idnentbid'), $comparison);
        } else {
            throw new PropelException('filterByTblentbid() only accepts arguments of type \Tblentbid or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tblentbid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function joinTblentbid($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tblentbid');

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
            $this->addJoinObject($join, 'Tblentbid');
        }

        return $this;
    }

    /**
     * Use the Tblentbid relation Tblentbid object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblentbidQuery A secondary query class using the current class as primary query
     */
    public function useTblentbidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblentbid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tblentbid', '\TblentbidQuery');
    }

    /**
     * Filter the query by a related \Tblentcms object
     *
     * @param \Tblentcms|ObjectCollection $tblentcms the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblentctrQuery The current query, for fluid interface
     */
    public function filterByTblentcms($tblentcms, $comparison = null)
    {
        if ($tblentcms instanceof \Tblentcms) {
            return $this
                ->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $tblentcms->getIdnentctr(), $comparison);
        } elseif ($tblentcms instanceof ObjectCollection) {
            return $this
                ->useTblentcmsQuery()
                ->filterByPrimaryKeys($tblentcms->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTblentcms() only accepts arguments of type \Tblentcms or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tblentcms relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function joinTblentcms($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tblentcms');

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
            $this->addJoinObject($join, 'Tblentcms');
        }

        return $this;
    }

    /**
     * Use the Tblentcms relation Tblentcms object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblentcmsQuery A secondary query class using the current class as primary query
     */
    public function useTblentcmsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblentcms($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tblentcms', '\TblentcmsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblentctr $tblentctr Object to remove from the list of results
     *
     * @return $this|ChildTblentctrQuery The current query, for fluid interface
     */
    public function prune($tblentctr = null)
    {
        if ($tblentctr) {
            $this->addUsingAlias(TblentctrTableMap::COL_IDNENTCTR, $tblentctr->getIdnentctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tblentctr table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentctrTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblentctrTableMap::clearInstancePool();
            TblentctrTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentctrTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblentctrTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblentctrTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblentctrTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblentctrQuery
