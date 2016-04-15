<?php
namespace AppBundle\Services;
/**
 * Created by PhpStorm.
 * User: jofernandez
 * Date: 15/04/16
 * Time: 19:14
 */
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

class Service1 implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    public function test()
    {
        $this->logger->error('test');
    }
}