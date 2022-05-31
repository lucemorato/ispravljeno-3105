<?php
/**
 * @author Katija Jurić i Lucija Mikulić
 * @copyright 2022
 */

 /**
  * DatabaseException implementacija
  * Exception class je osnovna klasa za sve greške
  */
class DatabaseException extends Exception {

    /**
     * parametri:
     * @param $message - exception message
     * @param $code - exception code
     * @param $previous - previously thrown exception
     */
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        //constructs the exception kad imamo klasu koja extenda Exception class
        parent::__construct($message, $code, $previous);
    }
}