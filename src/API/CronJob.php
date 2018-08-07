<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJobList as CronJobList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob as TheCronJob;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class CronJob extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind CronJob
     *
     * @return CronJobList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/cronjobs"
        		,[
        		]
        	)
        	, 'listBatchV2alpha1CronJobForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind CronJob
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
     * @param $namespace
     * @param array $queries
     * @return CronJobList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * create a CronJob
     *
     * @param $namespace
     * @param TheCronJob $Model
     * @return TheCronJob|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * delete collection of CronJob
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
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV2alpha1CollectionNamespacedCronJob'
        );
    }

    /**
     * read the specified CronJob
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheCronJob|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * replace the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @param TheCronJob $Model
     * @return TheCronJob|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * delete a CronJob
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * partially update the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheCronJob|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchBatchV2alpha1NamespacedCronJob'
        );
    }

    /**
     * read status of the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @return TheCronJob|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        		]
        	)
        	, 'readBatchV2alpha1NamespacedCronJobStatus'
        );
    }

    /**
     * replace status of the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @param TheCronJob $Model
     * @return TheCronJob|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceBatchV2alpha1NamespacedCronJobStatus'
        );
    }

    /**
     * partially update status of the specified CronJob
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheCronJob|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/cronjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchBatchV2alpha1NamespacedCronJobStatus'
        );
    }

    /**
     * watch individual changes to a list of CronJob
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/cronjobs"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1CronJobListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of CronJob
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/namespaces/{$namespace}/cronjobs"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1NamespacedCronJobList'
        );
    }

    /**
     * watch changes to an object of kind CronJob
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/namespaces/{$namespace}/cronjobs/{$name}"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1NamespacedCronJob'
        );
    }


}

