<?php

namespace Base;

use \Tblentbid as ChildTblentbid;
use \TblentbidQuery as ChildTblentbidQuery;
use \Exception;
use \PDO;
use Map\TblentbidTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tblentbid' table.
 *
 *
 *
 * @method     ChildTblentbidQuery orderByIdnentbid($order = Criteria::ASC) Order by the idnentbid column
 * @method     ChildTblentbidQuery orderByIdnentauc($order = Criteria::ASC) Order by the idnentauc column
 * @method     ChildTblentbidQuery orderByUsersid($order = Criteria::ASC) Order by the usersid column
 * @method     ChildTblentbidQuery orderByDatissbid($order = Criteria::ASC) Order by the datissbid column
 * @method     ChildTblentbidQuery orderByPrcunibid($order = Criteria::ASC) Order by the prcunibid column
 * @method     ChildTblentbidQuery orderByQununibid($order = Criteria::ASC) Order by the qununibid column
 * @method     ChildTblentbidQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTblentbidQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTblentbidQuery groupByIdnentbid() Group by the idnentbid column
 * @method     ChildTblentbidQuery groupByIdnentauc() Group by the idnentauc column
 * @method     ChildTblentbidQuery groupByUsersid() Group by the usersid column
 * @method     ChildTblentbidQuery groupByDatissbid() Group by the datissbid column
 * @method     ChildTblentbidQuery groupByPrcunibid() Group by the prcunibid column
 * @method     ChildTblentbidQuery groupByQununibid() Group by the qununibid column
 * @method     ChildTblentbidQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTblentbidQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTblentbidQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblentbidQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblentbidQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblentbidQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblentbidQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblentbidQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblentbidQuery leftJoinTblentauc($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentauc relation
 * @method     ChildTblentbidQuery rightJoinTblentauc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentauc relation
 * @method     ChildTblentbidQuery innerJoinTblentauc($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentauc relation
 *
 * @method     ChildTblentbidQuery joinWithTblentauc($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentauc relation
 *
 * @method     ChildTblentbidQuery leftJoinWithTblentauc() Adds a LEFT JOIN clause and with to the query using the Tblentauc relation
 * @method     ChildTblentbidQuery rightJoinWithTblentauc() Adds a RIGHT JOIN clause and with to the query using the Tblentauc relation
 * @method     ChildTblentbidQuery innerJoinWithTblentauc() Adds a INNER JOIN clause and with to the query using the Tblentauc relation
 *
 * @method     ChildTblentbidQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method     ChildTblentbidQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method     ChildTblentbidQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method     ChildTblentbidQuery joinWithUsers($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Users relation
 *
 * @method     ChildTblentbidQuery leftJoinWithUsers() Adds a LEFT JOIN clause and with to the query using the Users relation
 * @method     ChildTblentbidQuery rightJoinWithUsers() Adds a RIGHT JOIN clause and with to the query using the Users relation
 * @method     ChildTblentbidQuery innerJoinWithUsers() Adds a INNER JOIN clause and with to the query using the Users relation
 *
 * @method     ChildTblentbidQuery leftJoinTblentctr($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentctr relation
 * @method     ChildTblentbidQuery rightJoinTblentctr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentctr relation
 * @method     ChildTblentbidQuery innerJoinTblentctr($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentctr relation
 *
 * @method     ChildTblentbidQuery joinWithTblentctr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentctr relation
 *
 * @method     ChildTblentbidQuery leftJoinWithTblentctr() Adds a LEFT JOIN clause and with to the query using the Tblentctr relation
 * @method     ChildTblentbidQuery rightJoinWithTblentctr() Adds a RIGHT JOIN clause and with to the query using the Tblentctr relation
 * @method     ChildTblentbidQuery innerJoinWithTblentctr() Adds a INNER JOIN clause and with to the query using the Tblentctr relation
 *
 * @method     \TblentaucQuery|\UsersQuery|\TblentctrQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblentbid findOne(ConnectionInterface $con = null) Return the first ChildTblentbid matching the query
 * @method     ChildTblentbid findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblentbid matching the query, or a new ChildTblentbid object populated from the query conditions when no match is found
 *
 * @method     ChildTblentbid findOneByIdnentbid(string $idnentbid) Return the first ChildTblentbid filtered by the idnentbid column
 * @method     ChildTblentbid findOneByIdnentauc(string $idnentauc) Return the first ChildTblentbid filtered by the idnentauc column
 * @method     ChildTblentbid findOneByUsersid(string $usersid) Return the first ChildTblentbid filtered by the usersid column
 * @method     ChildTblentbid findOneByDatissbid(string $datissbid) Return the first ChildTblentbid filtered by the datissbid column
 * @method     ChildTblentbid findOneByPrcunibid(string $prcunibid) Return the first ChildTblentbid filtered by the prcunibid column
 * @method     ChildTblentbid findOneByQununibid(string $qununibid) Return the first ChildTblentbid filtered by the qununibid column
 * @method     ChildTblentbid findOneByCreatedAt(string $created_at) Return the first ChildTblentbid filtered by the created_at column
 * @method     ChildTblentbid findOneByUpdatedAt(string $updated_at) Return the first ChildTblentbid filtered by the updated_at column *

 * @method     ChildTblentbid requirePk($key, ConnectionInterface $con = null) Return the ChildTblentbid by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOne(ConnectionInterface $con = null) Return the first ChildTblentbid matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentbid requireOneByIdnentbid(string $idnentbid) Return the first ChildTblentbid filtered by the idnentbid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByIdnentauc(string $idnentauc) Return the first ChildTblentbid filtered by the idnentauc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByUsersid(string $usersid) Return the first ChildTblentbid filtered by the usersid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByDatissbid(string $datissbid) Return the first ChildTblentbid filtered by the datissbid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByPrcunibid(string $prcunibid) Return the first ChildTblentbid filtered by the prcunibid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByQununibid(string $qununibid) Return the first ChildTblentbid filtered by the qununibid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByCreatedAt(string $created_at) Return the first ChildTblentbid filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentbid requireOneByUpdatedAt(string $updated_at) Return the first ChildTblentbid filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentbid[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblentbid objects based on current ModelCriteria
 * @method     ChildTblentbid[]|ObjectCollection findByIdnentbid(string $idnentbid) Return ChildTblentbid objects filtered by the idnentbid column
 * @method     ChildTblentbid[]|ObjectCollection findByIdnentauc(string $idnentauc) Return ChildTblentbid objects filtered by the idnentauc column
 * @method     ChildTblentbid[]|ObjectCollection findByUsersid(string $usersid) Return ChildTblentbid objects filtered by the usersid column
 * @method     ChildTblentbid[]|ObjectCollection findByDatissbid(string $datissbid) Return ChildTblentbid objects filtered by the datissbid column
 * @method     ChildTblentbid[]|ObjectCollection findByPrcunibid(string $prcunibid) Return ChildTblentbid objects filtered by the prcunibid column
 * @method     ChildTblentbid[]|ObjectCollection findByQununibid(string $qununibid) Return ChildTblentbid objects filtered by the qununibid column
 * @method     ChildTblentbid[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTblentbid objects filtered by the created_at column
 * @method     ChildTblentbid[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTblentbid objects filtered by the updated_at column
 * @method     ChildTblentbid[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblentbidQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblentbidQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Tblentbid', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblentbidQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblentbidQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblentbidQuery) {
            return $criteria;
        }
        $query = new ChildTblentbidQuery();
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
     * @return ChildTblentbid|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblentbidTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblentbidTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblentbid A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentbid, idnentauc, usersid, datissbid, prcunibid, qununibid, created_at, updated_at FROM tblentbid WHERE idnentbid = :p0';
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
            /** @var ChildTblentbid $obj */
            $obj = new ChildTblentbid();
            $obj->hydrate($row);
            TblentbidTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblentbid|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $keys, Criteria::IN);
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
     * @param     mixed $idnentbid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByIdnentbid($idnentbid = null, $comparison = null)
    {
        if (is_array($idnentbid)) {
            $useMinMax = false;
            if (isset($idnentbid['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $idnentbid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentbid['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $idnentbid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $idnentbid, $comparison);
    }

    /**
     * Filter the query on the idnentauc column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentauc(1234); // WHERE idnentauc = 1234
     * $query->filterByIdnentauc(array(12, 34)); // WHERE idnentauc IN (12, 34)
     * $query->filterByIdnentauc(array('min' => 12)); // WHERE idnentauc > 12
     * </code>
     *
     * @see       filterByTblentauc()
     *
     * @param     mixed $idnentauc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByIdnentauc($idnentauc = null, $comparison = null)
    {
        if (is_array($idnentauc)) {
            $useMinMax = false;
            if (isset($idnentauc['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_IDNENTAUC, $idnentauc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentauc['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_IDNENTAUC, $idnentauc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_IDNENTAUC, $idnentauc, $comparison);
    }

    /**
     * Filter the query on the usersid column
     *
     * Example usage:
     * <code>
     * $query->filterByUsersid(1234); // WHERE usersid = 1234
     * $query->filterByUsersid(array(12, 34)); // WHERE usersid IN (12, 34)
     * $query->filterByUsersid(array('min' => 12)); // WHERE usersid > 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $usersid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByUsersid($usersid = null, $comparison = null)
    {
        if (is_array($usersid)) {
            $useMinMax = false;
            if (isset($usersid['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_USERSID, $usersid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usersid['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_USERSID, $usersid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_USERSID, $usersid, $comparison);
    }

    /**
     * Filter the query on the datissbid column
     *
     * Example usage:
     * <code>
     * $query->filterByDatissbid('2011-03-14'); // WHERE datissbid = '2011-03-14'
     * $query->filterByDatissbid('now'); // WHERE datissbid = '2011-03-14'
     * $query->filterByDatissbid(array('max' => 'yesterday')); // WHERE datissbid > '2011-03-13'
     * </code>
     *
     * @param     mixed $datissbid The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByDatissbid($datissbid = null, $comparison = null)
    {
        if (is_array($datissbid)) {
            $useMinMax = false;
            if (isset($datissbid['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_DATISSBID, $datissbid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datissbid['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_DATISSBID, $datissbid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_DATISSBID, $datissbid, $comparison);
    }

    /**
     * Filter the query on the prcunibid column
     *
     * Example usage:
     * <code>
     * $query->filterByPrcunibid(1234); // WHERE prcunibid = 1234
     * $query->filterByPrcunibid(array(12, 34)); // WHERE prcunibid IN (12, 34)
     * $query->filterByPrcunibid(array('min' => 12)); // WHERE prcunibid > 12
     * </code>
     *
     * @param     mixed $prcunibid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByPrcunibid($prcunibid = null, $comparison = null)
    {
        if (is_array($prcunibid)) {
            $useMinMax = false;
            if (isset($prcunibid['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_PRCUNIBID, $prcunibid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prcunibid['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_PRCUNIBID, $prcunibid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_PRCUNIBID, $prcunibid, $comparison);
    }

    /**
     * Filter the query on the qununibid column
     *
     * Example usage:
     * <code>
     * $query->filterByQununibid(1234); // WHERE qununibid = 1234
     * $query->filterByQununibid(array(12, 34)); // WHERE qununibid IN (12, 34)
     * $query->filterByQununibid(array('min' => 12)); // WHERE qununibid > 12
     * </code>
     *
     * @param     mixed $qununibid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByQununibid($qununibid = null, $comparison = null)
    {
        if (is_array($qununibid)) {
            $useMinMax = false;
            if (isset($qununibid['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_QUNUNIBID, $qununibid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qununibid['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_QUNUNIBID, $qununibid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_QUNUNIBID, $qununibid, $comparison);
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
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TblentbidTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentbidTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Tblentauc object
     *
     * @param \Tblentauc|ObjectCollection $tblentauc The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByTblentauc($tblentauc, $comparison = null)
    {
        if ($tblentauc instanceof \Tblentauc) {
            return $this
                ->addUsingAlias(TblentbidTableMap::COL_IDNENTAUC, $tblentauc->getIdnentauc(), $comparison);
        } elseif ($tblentauc instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentbidTableMap::COL_IDNENTAUC, $tblentauc->toKeyValue('PrimaryKey', 'Idnentauc'), $comparison);
        } else {
            throw new PropelException('filterByTblentauc() only accepts arguments of type \Tblentauc or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tblentauc relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function joinTblentauc($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tblentauc');

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
            $this->addJoinObject($join, 'Tblentauc');
        }

        return $this;
    }

    /**
     * Use the Tblentauc relation Tblentauc object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblentaucQuery A secondary query class using the current class as primary query
     */
    public function useTblentaucQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblentauc($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tblentauc', '\TblentaucQuery');
    }

    /**
     * Filter the query by a related \Users object
     *
     * @param \Users|ObjectCollection $users The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof \Users) {
            return $this
                ->addUsingAlias(TblentbidTableMap::COL_USERSID, $users->getId(), $comparison);
        } elseif ($users instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentbidTableMap::COL_USERSID, $users->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsers() only accepts arguments of type \Users or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Users relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Users');

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
            $this->addJoinObject($join, 'Users');
        }

        return $this;
    }

    /**
     * Use the Users relation Users object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UsersQuery A secondary query class using the current class as primary query
     */
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', '\UsersQuery');
    }

    /**
     * Filter the query by a related \Tblentctr object
     *
     * @param \Tblentctr|ObjectCollection $tblentctr the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblentbidQuery The current query, for fluid interface
     */
    public function filterByTblentctr($tblentctr, $comparison = null)
    {
        if ($tblentctr instanceof \Tblentctr) {
            return $this
                ->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $tblentctr->getIdnentbid(), $comparison);
        } elseif ($tblentctr instanceof ObjectCollection) {
            return $this
                ->useTblentctrQuery()
                ->filterByPrimaryKeys($tblentctr->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTblentctr() only accepts arguments of type \Tblentctr or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tblentctr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function joinTblentctr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tblentctr');

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
            $this->addJoinObject($join, 'Tblentctr');
        }

        return $this;
    }

    /**
     * Use the Tblentctr relation Tblentctr object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblentctrQuery A secondary query class using the current class as primary query
     */
    public function useTblentctrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblentctr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tblentctr', '\TblentctrQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblentbid $tblentbid Object to remove from the list of results
     *
     * @return $this|ChildTblentbidQuery The current query, for fluid interface
     */
    public function prune($tblentbid = null)
    {
        if ($tblentbid) {
            $this->addUsingAlias(TblentbidTableMap::COL_IDNENTBID, $tblentbid->getIdnentbid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tblentbid table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentbidTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblentbidTableMap::clearInstancePool();
            TblentbidTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentbidTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblentbidTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblentbidTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblentbidTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblentbidQuery
