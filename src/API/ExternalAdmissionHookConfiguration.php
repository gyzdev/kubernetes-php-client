<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ExternalAdmissionHookConfigurationList as ExternalAdmissionHookConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ExternalAdmissionHookConfiguration as TheExternalAdmissionHookConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ExternalAdmissionHookConfiguration extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ExternalAdmissionHookConfiguration
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ExternalAdmissionHookConfigurationList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }

    /**
     * create an ExternalAdmissionHookConfiguration
     *
     * @param TheExternalAdmissionHookConfiguration $Model
     * @return TheExternalAdmissionHookConfiguration|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ExternalAdmissionHookConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }

    /**
     * delete collection of ExternalAdmissionHookConfiguration
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1alpha1CollectionExternalAdmissionHookConfiguration'
        );
    }

    /**
     * read the specified ExternalAdmissionHookConfiguration
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheExternalAdmissionHookConfiguration|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }

    /**
     * replace the specified ExternalAdmissionHookConfiguration
     *
     * @param $name
     * @param TheExternalAdmissionHookConfiguration $Model
     * @return TheExternalAdmissionHookConfiguration|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ExternalAdmissionHookConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }

    /**
     * delete an ExternalAdmissionHookConfiguration
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }

    /**
     * partially update the specified ExternalAdmissionHookConfiguration
     *
     * @param $name
     * @param Patch $Model
     * @return TheExternalAdmissionHookConfiguration|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1alpha1/externaladmissionhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }

    /**
     * watch individual changes to a list of ExternalAdmissionHookConfiguration
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/externaladmissionhookconfigurations"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1alpha1ExternalAdmissionHookConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind ExternalAdmissionHookConfiguration
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/externaladmissionhookconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1alpha1ExternalAdmissionHookConfiguration'
        );
    }


}

