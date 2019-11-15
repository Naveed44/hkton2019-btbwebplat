<?php

namespace Base;

use \Tblentauc as ChildTblentauc;
use \TblentaucQuery as ChildTblentaucQuery;
use \Exception;
use \PDO;
use Map\TblentaucTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tblentauc' table.
 *
 *
 *
 * @method     ChildTblentaucQuery orderByIdnentauc($order = Criteria::ASC) Order by the idnentauc column
 * @method     ChildTblentaucQuery orderByIdnentprd($order = Criteria::ASC) Order by the idnentprd column
 * @method     ChildTblentaucQuery orderByDatstrauc($order = Criteria::ASC) Order by the datstrauc column
 * @method     ChildTblentaucQuery orderByDatendauc($order = Criteria::ASC) Order by the datendauc column
 * @method     ChildTblentaucQuery orderByBasprcauc($order = Criteria::ASC) Order by the basprcauc column
 * @method     ChildTblentaucQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTblentaucQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTblentaucQuery groupByIdnentauc() Group by the idnentauc column
 * @method     ChildTblentaucQuery groupByIdnentprd() Group by the idnentprd column
 * @method     ChildTblentaucQuery groupByDatstrauc() Group by the datstrauc column
 * @method     ChildTblentaucQuery groupByDatendauc() Group by the datendauc column
 * @method     ChildTblentaucQuery groupByBasprcauc() Group by the basprcauc column
 * @method     ChildTblentaucQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTblentaucQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTblentaucQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblentaucQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblentaucQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblentaucQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblentaucQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblentaucQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblentaucQuery leftJoinTblentprd($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentprd relation
 * @method     ChildTblentaucQuery rightJoinTblentprd($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentprd relation
 * @method     ChildTblentaucQuery innerJoinTblentprd($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentprd relation
 *
 * @method     ChildTblentaucQuery joinWithTblentprd($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentprd relation
 *
 * @method     ChildTblentaucQuery leftJoinWithTblentprd() Adds a LEFT JOIN clause and with to the query using the Tblentprd relation
 * @method     ChildTblentaucQuery rightJoinWithTblentprd() Adds a RIGHT JOIN clause and with to the query using the Tblentprd relation
 * @method     ChildTblentaucQuery innerJoinWithTblentprd() Adds a INNER JOIN clause and with to the query using the Tblentprd relation
 *
 * @method     ChildTblentaucQuery leftJoinTblentbid($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tblentbid relation
 * @method     ChildTblentaucQuery rightJoinTblentbid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tblentbid relation
 * @method     ChildTblentaucQuery innerJoinTblentbid($relationAlias = null) Adds a INNER JOIN clause to the query using the Tblentbid relation
 *
 * @method     ChildTblentaucQuery joinWithTblentbid($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tblentbid relation
 *
 * @method     ChildTblentaucQuery leftJoinWithTblentbid() Adds a LEFT JOIN clause and with to the query using the Tblentbid relation
 * @method     ChildTblentaucQuery rightJoinWithTblentbid() Adds a RIGHT JOIN clause and with to the query using the Tblentbid relation
 * @method     ChildTblentaucQuery innerJoinWithTblentbid() Adds a INNER JOIN clause and with to the query using the Tblentbid relation
 *
 * @method     \TblentprdQuery|\TblentbidQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblentauc findOne(ConnectionInterface $con = null) Return the first ChildTblentauc matching the query
 * @method     ChildTblentauc findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblentauc matching the query, or a new ChildTblentauc object populated from the query conditions when no match is found
 *
 * @method     ChildTblentauc findOneByIdnentauc(string $idnentauc) Return the first ChildTblentauc filtered by the idnentauc column
 * @method     ChildTblentauc findOneByIdnentprd(string $idnentprd) Return the first ChildTblentauc filtered by the idnentprd column
 * @method     ChildTblentauc findOneByDatstrauc(string $datstrauc) Return the first ChildTblentauc filtered by the datstrauc column
 * @method     ChildTblentauc findOneByDatendauc(string $datendauc) Return the first ChildTblentauc filtered by the datendauc column
 * @method     ChildTblentauc findOneByBasprcauc(string $basprcauc) Return the first ChildTblentauc filtered by the basprcauc column
 * @method     ChildTblentauc findOneByCreatedAt(string $created_at) Return the first ChildTblentauc filtered by the created_at column
 * @method     ChildTblentauc findOneByUpdatedAt(string $updated_at) Return the first ChildTblentauc filtered by the updated_at column *

 * @method     ChildTblentauc requirePk($key, ConnectionInterface $con = null) Return the ChildTblentauc by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOne(ConnectionInterface $con = null) Return the first ChildTblentauc matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentauc requireOneByIdnentauc(string $idnentauc) Return the first ChildTblentauc filtered by the idnentauc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOneByIdnentprd(string $idnentprd) Return the first ChildTblentauc filtered by the idnentprd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOneByDatstrauc(string $datstrauc) Return the first ChildTblentauc filtered by the datstrauc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOneByDatendauc(string $datendauc) Return the first ChildTblentauc filtered by the datendauc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOneByBasprcauc(string $basprcauc) Return the first ChildTblentauc filtered by the basprcauc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOneByCreatedAt(string $created_at) Return the first ChildTblentauc filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblentauc requireOneByUpdatedAt(string $updated_at) Return the first ChildTblentauc filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblentauc[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblentauc objects based on current ModelCriteria
 * @method     ChildTblentauc[]|ObjectCollection findByIdnentauc(string $idnentauc) Return ChildTblentauc objects filtered by the idnentauc column
 * @method     ChildTblentauc[]|ObjectCollection findByIdnentprd(string $idnentprd) Return ChildTblentauc objects filtered by the idnentprd column
 * @method     ChildTblentauc[]|ObjectCollection findByDatstrauc(string $datstrauc) Return ChildTblentauc objects filtered by the datstrauc column
 * @method     ChildTblentauc[]|ObjectCollection findByDatendauc(string $datendauc) Return ChildTblentauc objects filtered by the datendauc column
 * @method     ChildTblentauc[]|ObjectCollection findByBasprcauc(string $basprcauc) Return ChildTblentauc objects filtered by the basprcauc column
 * @method     ChildTblentauc[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTblentauc objects filtered by the created_at column
 * @method     ChildTblentauc[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTblentauc objects filtered by the updated_at column
 * @method     ChildTblentauc[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblentaucQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblentaucQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'ftb', $modelName = '\\Tblentauc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblentaucQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblentaucQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblentaucQuery) {
            return $criteria;
        }
        $query = new ChildTblentaucQuery();
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
     * @return ChildTblentauc|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblentaucTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblentaucTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblentauc A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idnentauc, idnentprd, datstrauc, datendauc, basprcauc, created_at, updated_at FROM tblentauc WHERE idnentauc = :p0';
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
            /** @var ChildTblentauc $obj */
            $obj = new ChildTblentauc();
            $obj->hydrate($row);
            TblentaucTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblentauc|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $keys, Criteria::IN);
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
     * @param     mixed $idnentauc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByIdnentauc($idnentauc = null, $comparison = null)
    {
        if (is_array($idnentauc)) {
            $useMinMax = false;
            if (isset($idnentauc['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $idnentauc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentauc['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $idnentauc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $idnentauc, $comparison);
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
     * @see       filterByTblentprd()
     *
     * @param     mixed $idnentprd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByIdnentprd($idnentprd = null, $comparison = null)
    {
        if (is_array($idnentprd)) {
            $useMinMax = false;
            if (isset($idnentprd['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_IDNENTPRD, $idnentprd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnentprd['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_IDNENTPRD, $idnentprd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_IDNENTPRD, $idnentprd, $comparison);
    }

    /**
     * Filter the query on the datstrauc column
     *
     * Example usage:
     * <code>
     * $query->filterByDatstrauc('2011-03-14'); // WHERE datstrauc = '2011-03-14'
     * $query->filterByDatstrauc('now'); // WHERE datstrauc = '2011-03-14'
     * $query->filterByDatstrauc(array('max' => 'yesterday')); // WHERE datstrauc > '2011-03-13'
     * </code>
     *
     * @param     mixed $datstrauc The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByDatstrauc($datstrauc = null, $comparison = null)
    {
        if (is_array($datstrauc)) {
            $useMinMax = false;
            if (isset($datstrauc['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_DATSTRAUC, $datstrauc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datstrauc['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_DATSTRAUC, $datstrauc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_DATSTRAUC, $datstrauc, $comparison);
    }

    /**
     * Filter the query on the datendauc column
     *
     * Example usage:
     * <code>
     * $query->filterByDatendauc('2011-03-14'); // WHERE datendauc = '2011-03-14'
     * $query->filterByDatendauc('now'); // WHERE datendauc = '2011-03-14'
     * $query->filterByDatendauc(array('max' => 'yesterday')); // WHERE datendauc > '2011-03-13'
     * </code>
     *
     * @param     mixed $datendauc The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByDatendauc($datendauc = null, $comparison = null)
    {
        if (is_array($datendauc)) {
            $useMinMax = false;
            if (isset($datendauc['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_DATENDAUC, $datendauc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datendauc['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_DATENDAUC, $datendauc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_DATENDAUC, $datendauc, $comparison);
    }

    /**
     * Filter the query on the basprcauc column
     *
     * Example usage:
     * <code>
     * $query->filterByBasprcauc(1234); // WHERE basprcauc = 1234
     * $query->filterByBasprcauc(array(12, 34)); // WHERE basprcauc IN (12, 34)
     * $query->filterByBasprcauc(array('min' => 12)); // WHERE basprcauc > 12
     * </code>
     *
     * @param     mixed $basprcauc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByBasprcauc($basprcauc = null, $comparison = null)
    {
        if (is_array($basprcauc)) {
            $useMinMax = false;
            if (isset($basprcauc['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_BASPRCAUC, $basprcauc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basprcauc['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_BASPRCAUC, $basprcauc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_BASPRCAUC, $basprcauc, $comparison);
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
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TblentaucTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblentaucTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Tblentprd object
     *
     * @param \Tblentprd|ObjectCollection $tblentprd The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByTblentprd($tblentprd, $comparison = null)
    {
        if ($tblentprd instanceof \Tblentprd) {
            return $this
                ->addUsingAlias(TblentaucTableMap::COL_IDNENTPRD, $tblentprd->getIdnentprd(), $comparison);
        } elseif ($tblentprd instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblentaucTableMap::COL_IDNENTPRD, $tblentprd->toKeyValue('PrimaryKey', 'Idnentprd'), $comparison);
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
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
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
     * Filter the query by a related \Tblentbid object
     *
     * @param \Tblentbid|ObjectCollection $tblentbid the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblentaucQuery The current query, for fluid interface
     */
    public function filterByTblentbid($tblentbid, $comparison = null)
    {
        if ($tblentbid instanceof \Tblentbid) {
            return $this
                ->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $tblentbid->getIdnentauc(), $comparison);
        } elseif ($tblentbid instanceof ObjectCollection) {
            return $this
                ->useTblentbidQuery()
                ->filterByPrimaryKeys($tblentbid->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildTblentauc $tblentauc Object to remove from the list of results
     *
     * @return $this|ChildTblentaucQuery The current query, for fluid interface
     */
    public function prune($tblentauc = null)
    {
        if ($tblentauc) {
            $this->addUsingAlias(TblentaucTableMap::COL_IDNENTAUC, $tblentauc->getIdnentauc(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tblentauc table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblentaucTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblentaucTableMap::clearInstancePool();
            TblentaucTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblentaucTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblentaucTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblentaucTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblentaucTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblentaucQuery
