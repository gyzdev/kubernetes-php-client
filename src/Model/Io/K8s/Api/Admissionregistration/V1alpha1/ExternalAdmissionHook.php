<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

/**
 * ExternalAdmissionHook describes an external admission webhook and the resources
 * and operations it applies to.
 */
class ExternalAdmissionHook extends \Kubernetes\AbstractModel
{

    /**
     * ClientConfig defines how to communicate with the hook. Required
     *
     * @var AdmissionHookClientConfig
     */
    public $clientConfig = null;

    /**
     * FailurePolicy defines how unrecognized errors from the admission endpoint are
     * handled - allowed values are Ignore or Fail. Defaults to Ignore.
     *
     * @var string
     */
    public $failurePolicy = null;

    /**
     * The name of the external admission webhook. Name should be fully qualified,
     * e.g., imagepolicy.kubernetes.io, where "imagepolicy" is the name of the webhook,
     * and kubernetes.io is the name of the organization. Required.
     *
     * @var string
     */
    public $name = null;

    /**
     * Rules describes what operations on what resources/subresources the webhook cares
     * about. The webhook cares about an operation if it matches _any_ Rule.
     *
     * @var RuleWithOperations[]
     */
    public $rules = null;


}

