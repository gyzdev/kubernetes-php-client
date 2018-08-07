<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Admissionregistration\V1alpha1;

/**
 * AdmissionHookClientConfig contains the information to make a TLS connection with
 * the webhook
 */
class AdmissionHookClientConfig extends \Kubernetes\AbstractModel
{

    /**
     * CABundle is a PEM encoded CA bundle which will be used to validate webhook's
     * server certificate. Required
     *
     * @var string
     */
    public $caBundle = null;

    /**
     * Service is a reference to the service for this webhook. If there is only one
     * port open for the service, that port will be used. If there are multiple ports
     * open, port 443 will be used if it is open, otherwise it is an error. Required
     *
     * @var ServiceReference
     */
    public $service = null;


}

