<?php

namespace Flugg\Responder\Http;

/**
 * Abstract data transfer object class for a response.
 */
abstract class Response
{
    /**
     * Response status code.
     *
     * @var int
     */
    protected $status;

    /**
     * Response headers.
     *
     * @var array
     */
    protected $headers = [];

    /**
     * Additional metadata attached to the response data.
     *
     * @var array
     */
    protected $meta = [];

    /**
     * Get the response status code.
     *
     * @return int
     */
    public function status(): int
    {
        return $this->status;
    }

    /**
     * Get the response headers.
     *
     * @return array
     */
    public function headers(): array
    {
        return $this->headers;
    }

    /**
     * Get the metadata attached to the response.
     *
     * @return array
     */
    public function meta(): array
    {
        return $this->meta;
    }

    /**
     * Set the response status code.
     *
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set the response headers.
     *
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set metadata attached to the response.
     *
     * @param array $meta
     * @return $this
     */
    public function setMeta(array $meta)
    {
        $this->meta = $meta;

        return $this;
    }
}
