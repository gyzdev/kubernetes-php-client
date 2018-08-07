<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * Pod anti affinity is a group of inter pod anti affinity scheduling rules.
 */
class PodAntiAffinity extends \Kubernetes\AbstractModel
{

    /**
     * The scheduler will prefer to schedule pods to nodes that satisfy the
     * anti-affinity expressions specified by this field, but it may choose a node that
     * violates one or more of the expressions. The node that is most preferred is the
     * one with the greatest sum of weights, i.e. for each node that meets all of the
     * scheduling requirements (resource request, requiredDuringScheduling
     * anti-affinity expressions, etc.), compute a sum by iterating through the
     * elements of this field and adding "weight" to the sum if the node has pods which
     * matches the corresponding podAffinityTerm; the node(s) with the highest sum are
     * the most preferred.
     *
     * @var WeightedPodAffinityTerm[]
     */
    public $preferredDuringSchedulingIgnoredDuringExecution = null;

    /**
     * NOT YET IMPLEMENTED. TODO: Uncomment field once it is implemented. If the
     * anti-affinity requirements specified by this field are not met at scheduling
     * time, the pod will not be scheduled onto the node. If the anti-affinity
     * requirements specified by this field cease to be met at some point during pod
     * execution (e.g. due to a pod label update), the system will try to eventually
     * evict the pod from its node. When there are multiple elements, the lists of
     * nodes corresponding to each podAffinityTerm are intersected, i.e. all terms must
     * be satisfied. RequiredDuringSchedulingRequiredDuringExecution []PodAffinityTerm 
     * `json:"requiredDuringSchedulingRequiredDuringExecution,omitempty"` If the
     * anti-affinity requirements specified by this field are not met at scheduling
     * time, the pod will not be scheduled onto the node. If the anti-affinity
     * requirements specified by this field cease to be met at some point during pod
     * execution (e.g. due to a pod label update), the system may or may not try to
     * eventually evict the pod from its node. When there are multiple elements, the
     * lists of nodes corresponding to each podAffinityTerm are intersected, i.e. all
     * terms must be satisfied.
     *
     * @var PodAffinityTerm[]
     */
    public $requiredDuringSchedulingIgnoredDuringExecution = null;


}

