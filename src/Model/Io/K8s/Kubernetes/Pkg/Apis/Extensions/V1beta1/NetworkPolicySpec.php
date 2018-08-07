<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1;

class NetworkPolicySpec extends \Kubernetes\AbstractModel
{

    /**
     * List of ingress rules to be applied to the selected pods. Traffic is allowed to
     * a pod if there are no NetworkPolicies selecting the pod OR if the traffic source
     * is the pod's local node, OR if the traffic matches at least one ingress rule
     * across all of the NetworkPolicy objects whose podSelector matches the pod. If
     * this field is empty then this NetworkPolicy does not allow any traffic (and
     * serves solely to ensure that the pods it selects are isolated by default).
     *
     * @var NetworkPolicyIngressRule[]
     */
    public $ingress = null;

    /**
     * Selects the pods to which this NetworkPolicy object applies.  The array of
     * ingress rules is applied to any pods selected by this field. Multiple network
     * policies can select the same set of pods.  In this case, the ingress rules for
     * each are combined additively. This field is NOT optional and follows standard
     * label selector semantics. An empty podSelector matches all pods in this
     * namespace.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $podSelector = null;


}

