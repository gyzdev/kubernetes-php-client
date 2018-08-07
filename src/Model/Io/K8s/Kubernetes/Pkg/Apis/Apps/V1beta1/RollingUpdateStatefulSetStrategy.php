<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1;

/**
 * RollingUpdateStatefulSetStrategy is used to communicate parameter for
 * RollingUpdateStatefulSetStrategyType.
 */
class RollingUpdateStatefulSetStrategy extends \Kubernetes\AbstractModel
{

    /**
     * Partition indicates the ordinal at which the StatefulSet should be partitioned.
     *
     * @var integer
     */
    public $partition = null;


}

