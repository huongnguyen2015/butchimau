<?php

namespace ZfcUser\Validator;

use Zend\Validator\AbstractValidator;
use ZfcUser\Mapper\UserInterface;

use Zend\Log\Writer\Stream;
use Zend\Log\Logger;

abstract class AbstractRecord extends AbstractValidator
{
    /**
     * Error constants
     */
    const ERROR_NO_RECORD_FOUND = 'noRecordFound';
    const ERROR_RECORD_FOUND    = 'recordFound';

    /**
     * @var array Message templates
     */
    protected $messageTemplates = array(
        self::ERROR_NO_RECORD_FOUND => "No record matching the input was found",
        self::ERROR_RECORD_FOUND    => "A record matching the input was found",
    );

    /**
     * @var UserInterface
     */
    protected $mapper;

    /**
     * @var string
     */
    protected $key;

    /**
     * Required options are:
     *  - key     Field to use, 'emial' or 'username'
     */
    public function __construct(array $options)
    {
        if (!array_key_exists('key', $options)) {
		$writer = new Stream('D:\\xampp\\htdocs\\butchimau\\public\\mylog.txt');
		$logger = new Logger();
		$logger->addWriter($writer);
		$logger->info('No key provided');

            throw new Exception\InvalidArgumentException('No key provided');
        }

        $this->setKey($options['key']);

        parent::__construct($options);
    }

    /**
     * getMapper
     *
     * @return UserInterface
     */
    public function getMapper()
    {
        return $this->mapper;
    }

    /**
     * setMapper
     *
     * @param UserInterface $mapper
     * @return AbstractRecord
     */
    public function setMapper(UserInterface $mapper)
    {
        $this->mapper = $mapper;
        return $this;
    }

    /**
     * Get key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set key.
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Grab the user from the mapper
     *
     * @param string $value
     * @return mixed
     */
    protected function query($value)
    {
        $result = false;
		//echo $this->getKey().'<br/>';
	$writer = new Stream('D:\\xampp\\htdocs\\butchimau\\public\\mylog.txt');
$logger = new Logger();
$logger->addWriter($writer);

$logger->info('Key:'.$this->getKey());

        switch ($this->getKey()) {
            case 'parent_email':
                $result = $this->getMapper()->findByEmail($value);
                break;

            // case 'username':
                // $result = $this->getMapper()->findByUsername($value);
                // break;

            default:
                throw new \Exception('Invalid key used in ZfcUser validator');
                break;
        }

        return $result;
    }
	
	function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
}
