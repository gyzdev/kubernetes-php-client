<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ThirdPartyResourceList as ThirdPartyResourceList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ThirdPartyResource as TheThirdPartyResource;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ThirdPartyResource extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ThirdPartyResource
     *
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ThirdPartyResourceList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/thirdpartyresources"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1ThirdPartyResource'
        );
    }

    /**
     * create a ThirdPartyResource
     *
     * @param TheThirdPartyResource $Model
     * @return TheThirdPartyResource|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ThirdPartyResource $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/thirdpartyresources"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1ThirdPartyResource'
        );
    }

    /**
     * delete collection of ThirdPartyResource
     *
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
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
        		"/apis/extensions/v1beta1/thirdpartyresources"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionThirdPartyResource'
        );
    }

    /**
     * read the specified ThirdPartyResource
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheThirdPartyResource|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/thirdpartyresources/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1ThirdPartyResource'
        );
    }

    /**
     * replace the specified ThirdPartyResource
     *
     * @param $name
     * @param TheThirdPartyResource $Model
     * @return TheThirdPartyResource|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ThirdPartyResource $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/thirdpartyresources/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1ThirdPartyResource'
        );
    }

    /**
     * delete a ThirdPartyResource
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
        		"/apis/extensions/v1beta1/thirdpartyresources/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1ThirdPartyResource'
        );
    }

    /**
     * partially update the specified ThirdPartyResource
     *
     * @param $name
     * @param Patch $Model
     * @return TheThirdPartyResource|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/thirdpartyresources/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1ThirdPartyResource'
        );
    }

    /**
     * watch individual changes to a list of ThirdPartyResource
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/thirdpartyresources"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1ThirdPartyResourceList'
        );
    }

    /**
     * watch changes to an object of kind ThirdPartyResource
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/thirdpartyresources/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1ThirdPartyResource'
        );
    }


}

