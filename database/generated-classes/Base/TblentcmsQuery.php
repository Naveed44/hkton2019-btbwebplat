<?php

namespace Base;

use \Tblentcms as ChildTblentcms;
use \TblentcmsQuery as ChildTblentcmsQuery;
use \Exception;
use \PDO;
use Map\TblentcmsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tblentcms' table.
 *
 *
 *
 * @method     ChildTblentcmsQuery orderByIdnentcms($order = Criteria::ASC) Order by the idnentcms column
 * @method     ChildTblentcmsQuery orderByIdnentctr($order = Criteria::ASC) Order by the idnentctr column
 * @method     ChildTblentcmsQuery orderByTtlentcms($order = Criteria::ASC) Order by the ttlentcms column
 * @method     ChildTblentcmsQuery orderByDatsndinv($order = Criteria::ASC) Order by the datsndinv column
 * @method     ChildTblentcmsQuery orderByDatpaycms($order = Criteria::ASC) Order by the datpaycms column
 * @method     ChildTblentcmsQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTblentcmsQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTblentcmsQuery groupByIdnentcms() Group by the idnentcms column
 * @method     ChildTblentcmsQuery groupByIdnentctr() Group by the idnentctr column
 * @method     ChildTblentcmsQuery groupByTtlentcms() Group by the ttlentcms column
 * @method     ChildTblentcmsQuery groupByDatsndinv() Group by the datsndinv column
 * @method     ChildTblentcmsQuery groupByDatpaycms() Group by the datpaycms column
 * @method     ChildTblentcmsQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTblentcmsQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTblentcmsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblentcmsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblentcmsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblentcmsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblentcmsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblentcmsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblentcmsQuery leftJoinTblentctr($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentctr relation
 * @method     ChildTblentcmsQuery rightJoinTblentctr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentctr relation
 * @method     ChildTblentcmsQuery innerJoinTblentctr($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentctr relation
 *
 * @method     ChildTblentcmsQuery joinWithTblentctr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentctr relation
 *
 * @method     ChildTblentcmsQuery leftJoinWithTblentctr() Adds a LEFT JOIN clause and with to the query using the Tblentctr relation
 * @method     ChildTblentcmsQuery rightJoinWithTblentctr() Adds a RIGHT JOIN clause and with to the query using the Tblentctr relation
 * @method     ChildTblentcmsQuery innerJoinWithTblentctr() Adds a INNER JOIN clause and with to the query using the Tblentctr relation
 *
 * @method     \TblentctrQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblentcms findOne(ConnectionInterface $con = null) Return the first ChildTblentcms matching the query
 * @method     ChildTblentcms findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblentcms matching the query, or a new ChildTblentcms object populated from the query conditions when no match is found
 *
 * @method     ChildTblentcms findOneByIdnentcms(string $idnentcms) Return the first ChildTblentcms filtered by the idnentcms column
 * @method     ChildTblentcms findOneByIdnentctr(string $idnentctr) Return the first ChildTblentcms filtered by the idnentctr column
 * @method     ChildTblentcms findOneByTtlentcms(string $ttlentcms) Return the first ChildTblentcms filtered by the ttlentcms column
 * @method     ChildTblentcms findOneByDatsndinv(string $datsndinv) Return the first ChildTblentcms filtered by the datsndinv column
 * @method     ChildTblentcms findOneByDatpaycms(string $datpaycms) Return the first ChildTblentcms filtered by the datpaycms column
 * @method     ChildTblentcms findOneByCreatedAt(string $created_at) Return the first ChildTblentcms filtered by the created_at column
 * @method     ChildTblentcms findOneByUpdatedAt(string $updated_at) Return the first ChildTblentcms filtered by the updated_at column *

 * @method     ChildTblentcms requirePk($key, ConnectionInterface $con = null) Return the ChildTblentcms by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOne(ConnectionInterface $con = null) Return the first ChildTblentcms matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentcms requireOneByIdnentcms(string $idnentcms) Return the first ChildTblentcms filtered by the idnentcms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOneByIdnentctr(string $idnentctr) Return the first ChildTblentcms filtered by the idnentctr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOneByTtlentcms(string $ttlentcms) Return the first ChildTblentcms filtered by the ttlentcms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOneByDatsndinv(string $datsndinv) Return the first ChildTblentcms filtered by the datsndinv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOneByDatpaycms(string $datpaycms) Return the first ChildTblentcms filtered by the datpaycms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOneByCreatedAt(string $created_at) Return the first ChildTblentcms filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentcms requireOneByUpdatedAt(string $updated_at) Return the first ChildTblentcms filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentcms[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblentcms objects based on current ModelCriteria
 * @method     ChildTblentcms[]|ObjectCollection findByIdnentcms(string $idnentcms) Return ChildTblentcms objects filtered by the idnentcms column
 * @method     ChildTblentcms[]|ObjectCollection findByIdnentctr(string $idnentctr) Return ChildTblentcms objects filtered by the idnentctr column
 * @method     ChildTblentcms[]|ObjectCollection findByTtlentcms(string $ttlentcms) Return ChildTblentcms objects filtered by the ttlentcms column
 * @method     ChildTblentcms[]|ObjectCollection findByDatsndinv(string $datsndinv) Return ChildTblentcms objects filtered by the datsndinv column
 * @method     ChildTblentcms[]|ObjectCollection findByDatpaycms(string $datpaycms) Return ChildTblentcms objects filtered by the datpaycms column
 * @method     ChildTblentcms[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTblentcms objects filtered by the created_at column
 * @method     ChildTblentcms[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTblentcms objects filtered by the updated_at column
 * @method     ChildTblentcms[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblentcmsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblentcmsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Tblentcms', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblentcmsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblentcmsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblentcmsQuery) {
            return $criteria;
        }
        $query = new ChildTblentcmsQuery();
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
     * @return ChildTblentcms|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblentcmsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblentcmsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblentcms A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentcms, idnentctr, ttlentcms, datsndinv, datpaycms, created_at, updated_at FROM tblentcms WHERE idnentcms = :p0';
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
            /** @var ChildTblentcms $obj */
            $obj = new ChildTblentcms();
            $obj->hydrate($row);
            TblentcmsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblentcms|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCMS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCMS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnentcms column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentcms(1234); // WHERE idnentcms = 1234
     * $query->filterByIdnentcms(array(12, 34)); // WHERE idnentcms IN (12, 34)
     * $query->filterByIdnentcms(array('min' => 12)); // WHERE idnentcms > 12
     * </code>
     *
     * @param     mixed $idnentcms The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByIdnentcms($idnentcms = null, $comparison = null)
    {
        if (is_array($idnentcms)) {
            $useMinMax = false;
            if (isset($idnentcms['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCMS, $idnentcms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentcms['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCMS, $idnentcms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCMS, $idnentcms, $comparison);
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
     * @see       filterByTblentctr()
     *
     * @param     mixed $idnentctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByIdnentctr($idnentctr = null, $comparison = null)
    {
        if (is_array($idnentctr)) {
            $useMinMax = false;
            if (isset($idnentctr['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCTR, $idnentctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentctr['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCTR, $idnentctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCTR, $idnentctr, $comparison);
    }

    /**
     * Filter the query on the ttlentcms column
     *
     * Example usage:
     * <code>
     * $query->filterByTtlentcms(1234); // WHERE ttlentcms = 1234
     * $query->filterByTtlentcms(array(12, 34)); // WHERE ttlentcms IN (12, 34)
     * $query->filterByTtlentcms(array('min' => 12)); // WHERE ttlentcms > 12
     * </code>
     *
     * @param     mixed $ttlentcms The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByTtlentcms($ttlentcms = null, $comparison = null)
    {
        if (is_array($ttlentcms)) {
            $useMinMax = false;
            if (isset($ttlentcms['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_TTLENTCMS, $ttlentcms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ttlentcms['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_TTLENTCMS, $ttlentcms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_TTLENTCMS, $ttlentcms, $comparison);
    }

    /**
     * Filter the query on the datsndinv column
     *
     * Example usage:
     * <code>
     * $query->filterByDatsndinv('2011-03-14'); // WHERE datsndinv = '2011-03-14'
     * $query->filterByDatsndinv('now'); // WHERE datsndinv = '2011-03-14'
     * $query->filterByDatsndinv(array('max' => 'yesterday')); // WHERE datsndinv > '2011-03-13'
     * </code>
     *
     * @param     mixed $datsndinv The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByDatsndinv($datsndinv = null, $comparison = null)
    {
        if (is_array($datsndinv)) {
            $useMinMax = false;
            if (isset($datsndinv['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_DATSNDINV, $datsndinv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datsndinv['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_DATSNDINV, $datsndinv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_DATSNDINV, $datsndinv, $comparison);
    }

    /**
     * Filter the query on the datpaycms column
     *
     * Example usage:
     * <code>
     * $query->filterByDatpaycms('2011-03-14'); // WHERE datpaycms = '2011-03-14'
     * $query->filterByDatpaycms('now'); // WHERE datpaycms = '2011-03-14'
     * $query->filterByDatpaycms(array('max' => 'yesterday')); // WHERE datpaycms > '2011-03-13'
     * </code>
     *
     * @param     mixed $datpaycms The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByDatpaycms($datpaycms = null, $comparison = null)
    {
        if (is_array($datpaycms)) {
            $useMinMax = false;
            if (isset($datpaycms['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_DATPAYCMS, $datpaycms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datpaycms['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_DATPAYCMS, $datpaycms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_DATPAYCMS, $datpaycms, $comparison);
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
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TblentcmsTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentcmsTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Tblentctr object
     *
     * @param \Tblentctr|ObjectCollection $tblentctr The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentcmsQuery The current query, for fluid interface
     */
    public function filterByTblentctr($tblentctr, $comparison = null)
    {
        if ($tblentctr instanceof \Tblentctr) {
            return $this
                ->addUsingAlias(TblentcmsTableMap::COL_IDNENTCTR, $tblentctr->getIdnentctr(), $comparison);
        } elseif ($tblentctr instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentcmsTableMap::COL_IDNENTCTR, $tblentctr->toKeyValue('PrimaryKey', 'Idnentctr'), $comparison);
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
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
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
     * @param   ChildTblentcms $tblentcms Object to remove from the list of results
     *
     * @return $this|ChildTblentcmsQuery The current query, for fluid interface
     */
    public function prune($tblentcms = null)
    {
        if ($tblentcms) {
            $this->addUsingAlias(TblentcmsTableMap::COL_IDNENTCMS, $tblentcms->getIdnentcms(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tblentcms table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentcmsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblentcmsTableMap::clearInstancePool();
            TblentcmsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentcmsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblentcmsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblentcmsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblentcmsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblentcmsQuery
