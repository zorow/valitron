<?php


namespace Valitron\Rules;


use Valitron\RuleInterface;

/**
 * Validate optional field
 *
 * Class OptionalRule
 * @package Valitron\Rules
 */
class OptionalRule implements RuleInterface
{

    /**
     * Run validation and return boolean result
     * @param string $field
     * @param mixed $value
     * @param array $params
     * @param array $data
     * @return bool
     */
    public function validate($field, $value, $params = array(), $data = array())
    {
        //Always return true
        return true;
    }
}