<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

class NetworkPolicyPort extends \Kubernetes\AbstractModel
{

    /**
     * If specified, the port on the given protocol.  This can either be a numerical or
     * named port on a pod.  If this field is not provided, this matches all port names
     * and numbers. If present, only traffic on the specified protocol AND port will be
     * matched.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $port = null;

    /**
     * Optional.  The protocol (TCP or UDP) which traffic must match. If not specified,
     * this field defaults to TCP.
     *
     * @var string
     */
    public $protocol = null;


}

