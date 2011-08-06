<?php

/**
 * -----------------------------------------------------------------------------
 * ERP API 
 * -----------------------------------------------------------------------------
 *
 * @author      Alexander Aigner <alex.aigner (at) gmail.com> 
 * 
 * @name        InstanceCheck.php
 * @version     0.1.5 (Aug 6, 2011)
 * @package     util
 * @access      public
 * 
 * Description  here
 * 
 * -----------------------------------------------------------------------------
 */
class Check {

    /**
     * Checks if a node can be used as a subject
     *
     * @param Node $node
     * @return true if node can fit a subject, otherwise false 
     */
    public static function isSubject($subject) {

        if ($subject instanceof Resource)
            return true;

        return false;
    }

    /**
     * Checks if a node can be used as a predicate
     *
     * @param Node $node
     * @return true if node can fit a predicate, otherwise false 
     */
    public static function isPredicate($predicate) {

        //TODO: check if is correcht Ressource (no properties)

        if ($predicate instanceof Resource && !($predicate instanceof BlankNode)) {

            $array = $predicate->getProperties();

            if (empty($array)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if a node can be used as a object
     *
     * @param Node $node
     * @return true if node can fit an object, otherwise false 
     */
    public static function isObject($object) {

        if ($object instanceof Resource || $object instanceof LiteralNode)
            return true;

        return false;
    }

    public static function isStatement($statement) {

        if ($statement instanceof Statement)
            return true;

        return false;
    }

}

?>
