<?php

declare(strict_types=1);

namespace Lifetrenz\HL7\Tests;

use Lifetrenz\Exceptions\HL7ConnectionException;
use Lifetrenz\Exceptions\HL7Exception;
use Lifetrenz\HL7\Message;
use Lifetrenz\HL7\Connection;
use RuntimeException;

class ConnectionTest extends TestCase
{
    use Hl7ListenerTrait;

    protected int $port = 12011;

    protected function tearDown(): void
    {
        $this->deletePipe();
        parent::tearDown();
    }

    /**
     * @test
     * @throws HL7ConnectionException
     * @throws HL7Exception
     */
    public function a_message_can_be_sent_to_a_hl7_server(): void
    {
        if (!extension_loaded('pcntl')) {
            self::markTestSkipped("Extension pcntl_fork is not loaded");
        }
        $pid = pcntl_fork();
        if ($pid === -1) {
            throw new RuntimeException('Could not fork');
        }
        if (!$pid) { // In child process
            $this->createTcpServer($this->port, 1);
        }
        if ($pid) { // in Parent process...
            sleep(2); // Give a second to server (child) to start up. TODO: Speed up by polling

            $connection = new Connection('localhost', $this->port);
            $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true, true);
            $ack = $connection->send($msg);
            self::assertInstanceOf(Message::class, $ack);
            self::assertSame('MSH|^~\&|1||||||ACK|\nMSA|AA|\n|\n', $ack->toString());

            self::assertStringContainsString("MSH|^~\\&|1|\nPV1|1|O|^AAAA1^^^BB|", $this->getWhatServerGot());

            $this->closeTcpSocket($connection->getSocket()); // Clean up listener
            pcntl_wait($status); // Wait till child is closed
        }
    }

    /**
     * @test
     * @throws HL7ConnectionException
     * @throws HL7Exception
     */
    public function do_not_wait_for_ack_after_sending_if_corresponding_parameter_is_set(): void
    {
        if (!extension_loaded('pcntl')) {
            self::markTestSkipped("Extension pcntl_fork is not loaded");
        }
        $pid = pcntl_fork();
        if ($pid === -1) {
            throw new RuntimeException('Could not fork');
        }
        if (!$pid) { // In child process
            $this->createTcpServer($this->port, 1);
        }
        if ($pid) { // in Parent process...
            sleep(2); // Give a second to server (child) to start up

            $connection = new Connection('localhost', $this->port);
            $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true, true);
            self::assertNull($connection->send($msg, ' UTF-8', true));

            $this->closeTcpSocket($connection->getSocket()); // Clean up listener
            pcntl_wait($status); // Wait till child is closed
        }
    }
}
