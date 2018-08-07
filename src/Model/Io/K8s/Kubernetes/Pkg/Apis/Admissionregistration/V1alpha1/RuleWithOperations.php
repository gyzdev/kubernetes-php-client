<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Admissionregistration\V1alpha1;

/**
 * RuleWithOperations is a tuple of Operations and Resources. It is recommended to
 * make sure that all the tuple expansions are valid.
 */
class RuleWithOperations extends \Kubernetes\AbstractModel
{

    /**
     * APIGroups is the API groups the resources belong to. '*' is all groups. If '*'
     * is present, the length of the slice must be one. Required.
     *
     * @var string[]
     */
    public $apiGroups = null;

    /**
     * APIVersions is the API versions the resources belong to. '*' is all versions. If
     * '*' is present, the length of the slice must be one. Required.
     *
     * @var string[]
     */
    public $apiVersions = null;

    /**
     * Operations is the operations the admission hook cares about - CREATE, UPDATE, or
     * * for all operations. If '*' is present, the length of the slice must be one.
     * Required.
     *
     * @var string[]
     */
    public $operations = null;

    /**
     * Resources is a list of resources this rule applies to.
     *
     * For example: 'pods' means pods. 'pods/log' means the log subresource of pods.
     * '*' means all resources, but not subresources. 'pods/*' means all subresources
     * of pods. '*\/scale' means all scale subresources. '*\/*' means all resources and
     * their subresources.
     *
     * If wildcard is present, the validation rule will ensure resources do not overlap
     * with each other.
     *
     * Depending on the enclosing object, subresources might not be allowed. Required.
     *
     * @var string[]
     */
    public $resources = null;


}

