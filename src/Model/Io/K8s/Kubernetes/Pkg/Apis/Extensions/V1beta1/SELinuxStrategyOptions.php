<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1;

/**
 * SELinux  Strategy Options defines the strategy type and any options used to
 * create the strategy.
 */
class SELinuxStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * type is the strategy that will dictate the allowable labels that may be set.
     *
     * @var string
     */
    public $rule = null;

    /**
     * seLinuxOptions required to run as; required for MustRunAs More info:
     * https://git.k8s.io/community/contributors/design-proposals/security_context.md
     *
     * @var \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1\SELinuxOptions
     */
    public $seLinuxOptions = null;


}

