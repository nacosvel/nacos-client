<?php

namespace Nacosvel\NacosClient\Contracts\V1\Console;

use Nacosvel\NacosClient\Contracts\V1\VersionInterface;

interface UpdateNamespaceInterface extends VersionInterface
{
    /**
     * @return string
     */
    public function getNamespaceId(): string;


    /**
     * @param string $namespaceId
     *
     * @return static
     */
    public function setNamespaceId(string $namespaceId): static;


    /**
     * @return string
     */
    public function getNamespaceName(): string;


    /**
     * @param string $namespaceName
     *
     * @return static
     */
    public function setNamespaceName(string $namespaceName): static;


    /**
     * @return string
     */
    public function getNamespaceDesc(): string;


    /**
     * @param string $namespaceDesc
     *
     * @return static
     */
    public function setNamespaceDesc(string $namespaceDesc): static;

}
