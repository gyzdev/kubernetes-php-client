<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * ListMeta describes metadata that synthetic resources must have, including lists
 * and various status objects. A resource may have only one of {ObjectMeta,
 * ListMeta}.
 */
class ListMeta extends \Kubernetes\AbstractModel
{

    /**
     * String that identifies the server's internal version of this object that can be
     * used by clients to determine when objects have changed. Value must be treated as
     * opaque by clients and passed unmodified back to the server. Populated by the
     * system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     *
     * @var string
     */
    public $resourceVersion = null;

    /**
     * SelfLink is a URL representing this object. Populated by the system. Read-only.
     *
     * @var string
     */
    public $selfLink = null;


}

