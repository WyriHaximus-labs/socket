<?php

namespace React\Socket;

use React\Promise\PromiseInterface;

/**
 * @see DuplexStreamInterface
 * @see ServerInterface
 * @see ConnectionInterface
 */
interface OpportunisticTlsConnectionInterface extends ConnectionInterface
{
    /**
     * @return PromiseInterface<OpportunisticTlsConnectionInterface>
     */
    public function enableEncryption();
}
