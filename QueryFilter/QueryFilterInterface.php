<?php 

namespace Admingenerator\GeneratorBundle\QueryFilter;

interface QueryFilterInterface
{
    /**
     * @param object $query the query object interface depend of the ORM
     * 
     * @api
     */
    function setQuery($query);
    
    /**
     * @return the query object interface depend of the ORM
     * 
     * @api
     */
    function getQuery();
    
    /**
     * Add filter for Default db types (types, not found
     * by others add*Filter() methods
     * 
     * @param string $field the db field
     * @param string $value the search value
     * 
     * @api
     */
    function addDefaultFilter($field, $value);
    
}