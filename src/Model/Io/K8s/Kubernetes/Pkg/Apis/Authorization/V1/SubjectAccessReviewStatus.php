<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Authorization\V1;

/**
 * SubjectAccessReviewStatus
 */
class SubjectAccessReviewStatus extends \Kubernetes\AbstractModel
{

    /**
     * Allowed is required.  True if the action would be allowed, false otherwise.
     *
     * @var boolean
     */
    public $allowed = null;

    /**
     * EvaluationError is an indication that some error occurred during the
     * authorization check. It is entirely possible to get an error and be able to
     * continue determine authorization status in spite of it. For instance, RBAC can
     * be missing a role, but enough roles are still present and bound to reason about
     * the request.
     *
     * @var string
     */
    public $evaluationError = null;

    /**
     * Reason is optional.  It indicates why a request was allowed or denied.
     *
     * @var string
     */
    public $reason = null;


}

