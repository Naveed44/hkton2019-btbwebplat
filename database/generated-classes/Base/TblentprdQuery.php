<?php

namespace Base;

use \Tblentprd as ChildTblentprd;
use \TblentprdQuery as ChildTblentprdQuery;
use \Exception;
use \PDO;
use Map\TblentprdTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tblentprd' table.
 *
 *
 *
 * @method     ChildTblentprdQuery orderByIdnentprd($order = Criteria::ASC) Order by the idnentprd column
 * @method     ChildTblentprdQuery orderByIdnentcls($order = Criteria::ASC) Order by the idnentcls column
 * @method     ChildTblentprdQuery orderByIdnentqul($order = Criteria::ASC) Order by the idnentqul column
 * @method     ChildTblentprdQuery orderByIdnentuni($order = Criteria::ASC) Order by the idnentuni column
 * @method     ChildTblentprdQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method     ChildTblentprdQuery orderByNamentprd($order = Criteria::ASC) Order by the namentprd column
 * @method     ChildTblentprdQuery orderByDscentprd($order = Criteria::ASC) Order by the dscentprd column
 * @method     ChildTblentprdQuery orderByQunentprd($order = Criteria::ASC) Order by the qunentprd column
 * @method     ChildTblentprdQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTblentprdQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTblentprdQuery groupByIdnentprd() Group by the idnentprd column
 * @method     ChildTblentprdQuery groupByIdnentcls() Group by the idnentcls column
 * @method     ChildTblentprdQuery groupByIdnentqul() Group by the idnentqul column
 * @method     ChildTblentprdQuery groupByIdnentuni() Group by the idnentuni column
 * @method     ChildTblentprdQuery groupByUserid() Group by the userid column
 * @method     ChildTblentprdQuery groupByNamentprd() Group by the namentprd column
 * @method     ChildTblentprdQuery groupByDscentprd() Group by the dscentprd column
 * @method     ChildTblentprdQuery groupByQunentprd() Group by the qunentprd column
 * @method     ChildTblentprdQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTblentprdQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTblentprdQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblentprdQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblentprdQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblentprdQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblentprdQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblentprdQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblentprdQuery leftJoinCatentcls($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catentcls relation
 * @method     ChildTblentprdQuery rightJoinCatentcls($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catentcls relation
 * @method     ChildTblentprdQuery innerJoinCatentcls($relationAlias = null) Adds a INNER JOIN clause to the query using the Catentcls relation
 *
 * @method     ChildTblentprdQuery joinWithCatentcls($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catentcls relation
 *
 * @method     ChildTblentprdQuery leftJoinWithCatentcls() Adds a LEFT JOIN clause and with to the query using the Catentcls relation
 * @method     ChildTblentprdQuery rightJoinWithCatentcls() Adds a RIGHT JOIN clause and with to the query using the Catentcls relation
 * @method     ChildTblentprdQuery innerJoinWithCatentcls() Adds a INNER JOIN clause and with to the query using the Catentcls relation
 *
 * @method     ChildTblentprdQuery leftJoinCatentqul($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catentqul relation
 * @method     ChildTblentprdQuery rightJoinCatentqul($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catentqul relation
 * @method     ChildTblentprdQuery innerJoinCatentqul($relationAlias = null) Adds a INNER JOIN clause to the query using the Catentqul relation
 *
 * @method     ChildTblentprdQuery joinWithCatentqul($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catentqul relation
 *
 * @method     ChildTblentprdQuery leftJoinWithCatentqul() Adds a LEFT JOIN clause and with to the query using the Catentqul relation
 * @method     ChildTblentprdQuery rightJoinWithCatentqul() Adds a RIGHT JOIN clause and with to the query using the Catentqul relation
 * @method     ChildTblentprdQuery innerJoinWithCatentqul() Adds a INNER JOIN clause and with to the query using the Catentqul relation
 *
 * @method     ChildTblentprdQuery leftJoinCatentuni($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catentuni relation
 * @method     ChildTblentprdQuery rightJoinCatentuni($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catentuni relation
 * @method     ChildTblentprdQuery innerJoinCatentuni($relationAlias = null) Adds a INNER JOIN clause to the query using the Catentuni relation
 *
 * @method     ChildTblentprdQuery joinWithCatentuni($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catentuni relation
 *
 * @method     ChildTblentprdQuery leftJoinWithCatentuni() Adds a LEFT JOIN clause and with to the query using the Catentuni relation
 * @method     ChildTblentprdQuery rightJoinWithCatentuni() Adds a RIGHT JOIN clause and with to the query using the Catentuni relation
 * @method     ChildTblentprdQuery innerJoinWithCatentuni() Adds a INNER JOIN clause and with to the query using the Catentuni relation
 *
 * @method     ChildTblentprdQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method     ChildTblentprdQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method     ChildTblentprdQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method     ChildTblentprdQuery joinWithUsers($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Users relation
 *
 * @method     ChildTblentprdQuery leftJoinWithUsers() Adds a LEFT JOIN clause and with to the query using the Users relation
 * @method     ChildTblentprdQuery rightJoinWithUsers() Adds a RIGHT JOIN clause and with to the query using the Users relation
 * @method     ChildTblentprdQuery innerJoinWithUsers() Adds a INNER JOIN clause and with to the query using the Users relation
 *
 * @method     ChildTblentprdQuery leftJoinTblentauc($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentauc relation
 * @method     ChildTblentprdQuery rightJoinTblentauc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentauc relation
 * @method     ChildTblentprdQuery innerJoinTblentauc($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentauc relation
 *
 * @method     ChildTblentprdQuery joinWithTblentauc($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentauc relation
 *
 * @method     ChildTblentprdQuery leftJoinWithTblentauc() Adds a LEFT JOIN clause and with to the query using the Tblentauc relation
 * @method     ChildTblentprdQuery rightJoinWithTblentauc() Adds a RIGHT JOIN clause and with to the query using the Tblentauc relation
 * @method     ChildTblentprdQuery innerJoinWithTblentauc() Adds a INNER JOIN clause and with to the query using the Tblentauc relation
 *
 * @method     \CatentclsQuery|\CatentqulQuery|\CatentuniQuery|\UsersQuery|\TblentaucQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblentprd findOne(ConnectionInterface $con = null) Return the first ChildTblentprd matching the query
 * @method     ChildTblentprd findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblentprd matching the query, or a new ChildTblentprd object populated from the query conditions when no match is found
 *
 * @method     ChildTblentprd findOneByIdnentprd(string $idnentprd) Return the first ChildTblentprd filtered by the idnentprd column
 * @method     ChildTblentprd findOneByIdnentcls(string $idnentcls) Return the first ChildTblentprd filtered by the idnentcls column
 * @method     ChildTblentprd findOneByIdnentqul(string $idnentqul) Return the first ChildTblentprd filtered by the idnentqul column
 * @method     ChildTblentprd findOneByIdnentuni(string $idnentuni) Return the first ChildTblentprd filtered by the idnentuni column
 * @method     ChildTblentprd findOneByUserid(string $userid) Return the first ChildTblentprd filtered by the userid column
 * @method     ChildTblentprd findOneByNamentprd(string $namentprd) Return the first ChildTblentprd filtered by the namentprd column
 * @method     ChildTblentprd findOneByDscentprd(string $dscentprd) Return the first ChildTblentprd filtered by the dscentprd column
 * @method     ChildTblentprd findOneByQunentprd(string $qunentprd) Return the first ChildTblentprd filtered by the qunentprd column
 * @method     ChildTblentprd findOneByCreatedAt(string $created_at) Return the first ChildTblentprd filtered by the created_at column
 * @method     ChildTblentprd findOneByUpdatedAt(string $updated_at) Return the first ChildTblentprd filtered by the updated_at column *

 * @method     ChildTblentprd requirePk($key, ConnectionInterface $con = null) Return the ChildTblentprd by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOne(ConnectionInterface $con = null) Return the first ChildTblentprd matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentprd requireOneByIdnentprd(string $idnentprd) Return the first ChildTblentprd filtered by the idnentprd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByIdnentcls(string $idnentcls) Return the first ChildTblentprd filtered by the idnentcls column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByIdnentqul(string $idnentqul) Return the first ChildTblentprd filtered by the idnentqul column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByIdnentuni(string $idnentuni) Return the first ChildTblentprd filtered by the idnentuni column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByUserid(string $userid) Return the first ChildTblentprd filtered by the userid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByNamentprd(string $namentprd) Return the first ChildTblentprd filtered by the namentprd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByDscentprd(string $dscentprd) Return the first ChildTblentprd filtered by the dscentprd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByQunentprd(string $qunentprd) Return the first ChildTblentprd filtered by the qunentprd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByCreatedAt(string $created_at) Return the first ChildTblentprd filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentprd requireOneByUpdatedAt(string $updated_at) Return the first ChildTblentprd filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentprd[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblentprd objects based on current ModelCriteria
 * @method     ChildTblentprd[]|ObjectCollection findByIdnentprd(string $idnentprd) Return ChildTblentprd objects filtered by the idnentprd column
 * @method     ChildTblentprd[]|ObjectCollection findByIdnentcls(string $idnentcls) Return ChildTblentprd objects filtered by the idnentcls column
 * @method     ChildTblentprd[]|ObjectCollection findByIdnentqul(string $idnentqul) Return ChildTblentprd objects filtered by the idnentqul column
 * @method     ChildTblentprd[]|ObjectCollection findByIdnentuni(string $idnentuni) Return ChildTblentprd objects filtered by the idnentuni column
 * @method     ChildTblentprd[]|ObjectCollection findByUserid(string $userid) Return ChildTblentprd objects filtered by the userid column
 * @method     ChildTblentprd[]|ObjectCollection findByNamentprd(string $namentprd) Return ChildTblentprd objects filtered by the namentprd column
 * @method     ChildTblentprd[]|ObjectCollection findByDscentprd(string $dscentprd) Return ChildTblentprd objects filtered by the dscentprd column
 * @method     ChildTblentprd[]|ObjectCollection findByQunentprd(string $qunentprd) Return ChildTblentprd objects filtered by the qunentprd column
 * @method     ChildTblentprd[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTblentprd objects filtered by the created_at column
 * @method     ChildTblentprd[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTblentprd objects filtered by the updated_at column
 * @method     ChildTblentprd[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblentprdQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblentprdQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Tblentprd', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblentprdQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblentprdQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblentprdQuery) {
            return $criteria;
        }
        $query = new ChildTblentprdQuery();
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
     * @return ChildTblentprd|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblentprdTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblentprdTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblentprd A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentprd, idnentcls, idnentqul, idnentuni, userid, namentprd, dscentprd, qunentprd, created_at, updated_at FROM tblentprd WHERE idnentprd = :p0';
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
            /** @var ChildTblentprd $obj */
            $obj = new ChildTblentprd();
            $obj->hydrate($row);
            TblentprdTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblentprd|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnentprd column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentprd(1234); // WHERE idnentprd = 1234
     * $query->filterByIdnentprd(array(12, 34)); // WHERE idnentprd IN (12, 34)
     * $query->filterByIdnentprd(array('min' => 12)); // WHERE idnentprd > 12
     * </code>
     *
     * @param     mixed $idnentprd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByIdnentprd($idnentprd = null, $comparison = null)
    {
        if (is_array($idnentprd)) {
            $useMinMax = false;
            if (isset($idnentprd['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $idnentprd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentprd['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $idnentprd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $idnentprd, $comparison);
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
     * @see       filterByCatentcls()
     *
     * @param     mixed $idnentcls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByIdnentcls($idnentcls = null, $comparison = null)
    {
        if (is_array($idnentcls)) {
            $useMinMax = false;
            if (isset($idnentcls['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTCLS, $idnentcls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentcls['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTCLS, $idnentcls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_IDNENTCLS, $idnentcls, $comparison);
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
     * @see       filterByCatentqul()
     *
     * @param     mixed $idnentqul The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByIdnentqul($idnentqul = null, $comparison = null)
    {
        if (is_array($idnentqul)) {
            $useMinMax = false;
            if (isset($idnentqul['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTQUL, $idnentqul['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentqul['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTQUL, $idnentqul['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_IDNENTQUL, $idnentqul, $comparison);
    }

    /**
     * Filter the query on the idnentuni column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnentuni(1234); // WHERE idnentuni = 1234
     * $query->filterByIdnentuni(array(12, 34)); // WHERE idnentuni IN (12, 34)
     * $query->filterByIdnentuni(array('min' => 12)); // WHERE idnentuni > 12
     * </code>
     *
     * @see       filterByCatentuni()
     *
     * @param     mixed $idnentuni The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByIdnentuni($idnentuni = null, $comparison = null)
    {
        if (is_array($idnentuni)) {
            $useMinMax = false;
            if (isset($idnentuni['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTUNI, $idnentuni['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentuni['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_IDNENTUNI, $idnentuni['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_IDNENTUNI, $idnentuni, $comparison);
    }

    /**
     * Filter the query on the userid column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userid = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userid IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userid > 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_USERID, $userid, $comparison);
    }

    /**
     * Filter the query on the namentprd column
     *
     * Example usage:
     * <code>
     * $query->filterByNamentprd('fooValue');   // WHERE namentprd = 'fooValue'
     * $query->filterByNamentprd('%fooValue%', Criteria::LIKE); // WHERE namentprd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $namentprd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByNamentprd($namentprd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($namentprd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_NAMENTPRD, $namentprd, $comparison);
    }

    /**
     * Filter the query on the dscentprd column
     *
     * Example usage:
     * <code>
     * $query->filterByDscentprd('fooValue');   // WHERE dscentprd = 'fooValue'
     * $query->filterByDscentprd('%fooValue%', Criteria::LIKE); // WHERE dscentprd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dscentprd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByDscentprd($dscentprd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dscentprd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_DSCENTPRD, $dscentprd, $comparison);
    }

    /**
     * Filter the query on the qunentprd column
     *
     * Example usage:
     * <code>
     * $query->filterByQunentprd(1234); // WHERE qunentprd = 1234
     * $query->filterByQunentprd(array(12, 34)); // WHERE qunentprd IN (12, 34)
     * $query->filterByQunentprd(array('min' => 12)); // WHERE qunentprd > 12
     * </code>
     *
     * @param     mixed $qunentprd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByQunentprd($qunentprd = null, $comparison = null)
    {
        if (is_array($qunentprd)) {
            $useMinMax = false;
            if (isset($qunentprd['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_QUNENTPRD, $qunentprd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qunentprd['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_QUNENTPRD, $qunentprd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_QUNENTPRD, $qunentprd, $comparison);
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
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TblentprdTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentprdTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Catentcls object
     *
     * @param \Catentcls|ObjectCollection $catentcls The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByCatentcls($catentcls, $comparison = null)
    {
        if ($catentcls instanceof \Catentcls) {
            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTCLS, $catentcls->getIdnentcls(), $comparison);
        } elseif ($catentcls instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTCLS, $catentcls->toKeyValue('PrimaryKey', 'Idnentcls'), $comparison);
        } else {
            throw new PropelException('filterByCatentcls() only accepts arguments of type \Catentcls or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Catentcls relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function joinCatentcls($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Catentcls');

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
            $this->addJoinObject($join, 'Catentcls');
        }

        return $this;
    }

    /**
     * Use the Catentcls relation Catentcls object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CatentclsQuery A secondary query class using the current class as primary query
     */
    public function useCatentclsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCatentcls($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Catentcls', '\CatentclsQuery');
    }

    /**
     * Filter the query by a related \Catentqul object
     *
     * @param \Catentqul|ObjectCollection $catentqul The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByCatentqul($catentqul, $comparison = null)
    {
        if ($catentqul instanceof \Catentqul) {
            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTQUL, $catentqul->getIdnentqul(), $comparison);
        } elseif ($catentqul instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTQUL, $catentqul->toKeyValue('PrimaryKey', 'Idnentqul'), $comparison);
        } else {
            throw new PropelException('filterByCatentqul() only accepts arguments of type \Catentqul or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Catentqul relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function joinCatentqul($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Catentqul');

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
            $this->addJoinObject($join, 'Catentqul');
        }

        return $this;
    }

    /**
     * Use the Catentqul relation Catentqul object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CatentqulQuery A secondary query class using the current class as primary query
     */
    public function useCatentqulQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCatentqul($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Catentqul', '\CatentqulQuery');
    }

    /**
     * Filter the query by a related \Catentuni object
     *
     * @param \Catentuni|ObjectCollection $catentuni The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByCatentuni($catentuni, $comparison = null)
    {
        if ($catentuni instanceof \Catentuni) {
            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTUNI, $catentuni->getIdnentuni(), $comparison);
        } elseif ($catentuni instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTUNI, $catentuni->toKeyValue('PrimaryKey', 'Idnentuni'), $comparison);
        } else {
            throw new PropelException('filterByCatentuni() only accepts arguments of type \Catentuni or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Catentuni relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function joinCatentuni($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Catentuni');

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
            $this->addJoinObject($join, 'Catentuni');
        }

        return $this;
    }

    /**
     * Use the Catentuni relation Catentuni object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CatentuniQuery A secondary query class using the current class as primary query
     */
    public function useCatentuniQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCatentuni($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Catentuni', '\CatentuniQuery');
    }

    /**
     * Filter the query by a related \Users object
     *
     * @param \Users|ObjectCollection $users The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof \Users) {
            return $this
                ->addUsingAlias(TblentprdTableMap::COL_USERID, $users->getId(), $comparison);
        } elseif ($users instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentprdTableMap::COL_USERID, $users->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
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
     * Filter the query by a related \Tblentauc object
     *
     * @param \Tblentauc|ObjectCollection $tblentauc the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblentprdQuery The current query, for fluid interface
     */
    public function filterByTblentauc($tblentauc, $comparison = null)
    {
        if ($tblentauc instanceof \Tblentauc) {
            return $this
                ->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $tblentauc->getIdnentprd(), $comparison);
        } elseif ($tblentauc instanceof ObjectCollection) {
            return $this
                ->useTblentaucQuery()
                ->filterByPrimaryKeys($tblentauc->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildTblentprd $tblentprd Object to remove from the list of results
     *
     * @return $this|ChildTblentprdQuery The current query, for fluid interface
     */
    public function prune($tblentprd = null)
    {
        if ($tblentprd) {
            $this->addUsingAlias(TblentprdTableMap::COL_IDNENTPRD, $tblentprd->getIdnentprd(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tblentprd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentprdTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblentprdTableMap::clearInstancePool();
            TblentprdTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentprdTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblentprdTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblentprdTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblentprdTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblentprdQuery
