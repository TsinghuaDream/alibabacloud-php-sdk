<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeployK8sApplicationRequest extends Model
{
    /**
     * @description The annotation of an application pod.
     *
     * @example {"annotation-name-1":"annotation-value-1","annotation-name-2":"annotation-value-2"}
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example e83acea6-****-47e1-96ae-c0e953772cdc
     *
     * @var string
     */
    public $appId;

    /**
     * @description The argument array in the container start-up command. Set this parameter to a JSON array in the format of `\["args1","args2"\]`, where each key is set to a string. If you want to cancel this configuration, set this parameter to an empty JSON array in the format of `"\[\]"`.
     *
     * @example ["args1","args2"]
     *
     * @var string
     */
    public $args;

    /**
     * @description The timeout period for an at-a-time release. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $batchTimeout;

    /**
     * @description The minimum time interval for the phased release of pods. For more information, see [minReadySeconds](https://kubernetes.io/docs/concepts/workloads/controllers/deployment/#min-ready-seconds).
     *
     * @example 0
     *
     * @var int
     */
    public $batchWaitTime;

    /**
     * @description The build package number of EDAS Container.
     *
     *   You do not need to set the parameter if you do not need to change the EDAS Container version during the deployment.
     *   Set the parameter if you need to update the EDAS Container version of the application during the deployment.
     *
     * You can query the build package number by using one of the following methods:
     *
     *   Call the ListBuildPack operation. For more information, see [ListBuildPack](~~423222~~).
     *   Obtain the value in the **Build package number** column of the [Release notes for EDAS Container](~~92614~~) topic. For example, `59` indicates `EDAS Container 3.5.8`.
     *
     * @example 59
     *
     * @var string
     */
    public $buildPackId;

    /**
     * @var string
     */
    public $canaryRuleId;

    /**
     * @description The description of the change process.
     *
     * @example Upgrade
     *
     * @var string
     */
    public $changeOrderDesc;

    /**
     * @description The commands that you run to start the container.
     *
     * > If you want to cancel this configuration, set this parameter to an empty string in the format of `""`.
     * @example ls
     *
     * @var string
     */
    public $command;

    /**
     * @description The configuration for mounting a Kubernetes ConfigMap or Secret to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   name: the name of the Kubernetes ConfigMap or Secret.
     *   type: the type of the API object that you want to mount. You can mount a Kubernetes ConfigMap or Secret.
     *   mountPath: the mount path. The mount path must be an absolute path that starts with a forward slash (/).
     *
     * @example [
     * ]
     * @var string
     */
    public $configMountDescs;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is running. Unit: cores. Value 0 indicates that no limit is set on CPU cores.
     *
     * @example 1
     *
     * @var int
     */
    public $cpuLimit;

    /**
     * @description The number of CPU cores requested for each application instance when the application is running. Unit: cores. We recommend that you set this parameter. Value 0 indicates that no limit is set on CPU cores.
     *
     * > You must set this parameter together with the CpuLimit parameter. Make sure that the value of this parameter does not exceed that of the CpuLimit parameter.
     * @example 0
     *
     * @var int
     */
    public $cpuRequest;

    /**
     * @description The affinity configuration of the pod. This parameter takes effect only if both the DeployAcrossNodes and DeployAcrossZones parameters are set to false.
     *
     * @example {"nodeAffinity":{"requiredDuringSchedulingIgnoredDuringExecution":{"nodeSelectorTerms":[{"matchExpressions":[{"key":"beta.kubernetes.io/arch","operator":"NotIn","values":["arm64","arm32"]}]}]},"preferredDuringSchedulingIgnoredDuringExecution":[{"weight":5,"preference":{"matchExpressions":[{"key":"kubernetes.io/os","operator":"In","values":["linux"]}]}}]},"podAffinity":{"requiredDuringSchedulingIgnoredDuringExecution":[{"namespaces":["default"],"topologyKey":"kubernetes.io/hostname","labelSelector":{"matchExpressions":[{"key":"edas.oam.acname","operator":"NotIn","values":["edas-test-app"]}]}}]},"podAntiAffinity":{"preferredDuringSchedulingIgnoredDuringExecution":[{"podAffinityTerm":{"namespaces":["default"],"topologyKey":"failure-domain.beta.kubernetes.io/zone","labelSelector":{"matchExpressions":[{"key":"edas.oam.acname","operator":"In","values":["edas-test-app-2"]}]}},"weight":15}]}}
     *
     * @var string
     */
    public $customAffinity;

    /**
     * @description The scheduling tolerance configuration of the pod. This parameter takes effect only if both the DeployAcrossNodes and DeployAcrossZones parameters are set to false.
     *
     * @example [{"key":"edas-taint-key2","operator":"Exists","effect":"NoExecute","tolerationSeconds":50},{"key":"edas-taint-key","operator":"Equal","value":"edas-taint-value","effect":"PreferNoSchedule"}]
     *
     * @var string
     */
    public $customTolerations;

    /**
     * @description Specifies whether to distribute application instances to multiple nodes. Value true indicates that application instances are distrubuted across zones. Other values indicate that application instances are not distributed across zones.
     *
     * @example true
     *
     * @var string
     */
    public $deployAcrossNodes;

    /**
     * @description Specifies whether to distribute application instances across zones. Value true indicates that application instances are distrubuted across zones. Other values indicate that application instances are not distributed across zones.
     *
     * @example true
     *
     * @var string
     */
    public $deployAcrossZones;

    /**
     * @description The version of EDAS Container on which the deployment package of the application depends. This parameter is applicable to High-Speed Service Framework (HSF) applications that you deploy by using WAR packages. This parameter is unavailable if you deploy applications by using images.
     *
     * @example 3.5.9
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description The configuration for mounting a Kubernetes emptyDir volume to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   mountPath: The mount path in the container. This parameter is required.
     *   readOnly: (Optional) The mount mode. Value true indicates the read-only mode. Value false indicates the read and write mode. Default value: false.
     *   subPathExpr: (Optional) The regular expression that is used to match the subdirectory.
     *
     * @example [{"mountPath":"/app-log","subPathExpr":"$(POD_IP)"},{"readOnly":true,"mountPath":"/etc/nginx"}]
     *
     * @var string
     */
    public $emptyDirs;

    /**
     * @description Specifies whether to enable access to Application High Availability Service (AHAS).
     *
     * @example true
     *
     * @var bool
     */
    public $enableAhas;

    /**
     * @description Specifies whether to enable the empty list protection feature. Valid values:
     *
     *   true: enables the empty list protection feature.
     *   false: disables the empty list protection feature.
     *
     * @example false
     *
     * @var bool
     */
    public $enableEmptyPushReject;

    /**
     * @description Specifies whether to enable graceful start rules. Valid values:
     *
     *   true: enables graceful start rules.
     *   false: disables graceful start rules.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLosslessRule;

    /**
     * @description The Kubernetes environment variables that are configured in EnvFrom mode. A ConfigMap or Secret is mounted to a directory. Each key corresponds to a file in the directory, and the content of the file is the value of the key.
     *
     * This parameter contains the following parameters:
     *
     *   configMapRef: the ConfigMap that is referenced. The following parameter is contained:
     *
     *   name: the name of the ConfigMap.
     *
     *   secretRef: the Secret that is referenced. The following parameter is contained:
     *
     *   name: the name of the Secret.
     *
     * @example [{"name":"appname","valueFrom":{"configMapKeyRef":{"name":"appconf","key":"name"}}}]
     *
     * @var string
     */
    public $envFroms;

    /**
     * @description The environment variables that are used to deploy the application. Set this parameter to a JSON array. Valid values: regular environment variables, Kubernetes ConfigMap environment variables, and Kubernetes Secret environment variables. Specify regular environment variables in the following format:
     *
     * >  If you want to cancel this configuration, set this parameter to an empty JSON array, which is in the format of "\[]".
     * @example [{"name":"x1","value":"y1"},{"name":"x2","valueFrom":{"configMapKeyRef":{"name":"my-config","key":"y2"}}},{"name":"x3","valueFrom":{"secretKeyRef":{"name":"my-secret","key":"y3"}}}]
     *
     * @var string
     */
    public $envs;

    /**
     * @description The absolute URL of the image. This parameter setting overwrites the setting of the ImageTag parameter.
     *
     * @example registry-vpc.cn-beijing.aliyuncs.com/t****\/app:v1
     *
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imagePlatforms;

    /**
     * @description The tag of the image.
     *
     * @example latest
     *
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $initContainers;

    /**
     * @description The version of the Java Development Kit (JDK) on which the deployment package of the application depends. Open JDK 7 and Open JDK 8 are supported. This parameter is unavailable if you deploy applications by using images.
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $JDK;

    /**
     * @description The configuration of Java startup parameters for a Java application. These startup parameters involve the memory, application, garbage collection (GC) policy, tools, service registration and discovery, and custom configurations. Proper parameter settings help reduce the GC overheads, shorten the server response time, and improve the throughput. Set this parameter to a JSON string. In the example, original indicates the configuration value, and startup indicates a startup parameter. The system automatically concatenates all startup values as the settings of Java startup parameters for the application. To delete this configuration, leave the parameter value empty by entering `""` or `"{}"`.
     *
     * @example {"InitialHeapSize":{"original":512,"startup":"-Xms512m"},"MaxHeapSize":{"original":1024,"startup":"-Xmx1024m"}}
     *
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @description The label of an application pod.
     *
     * @example {"label-name-1":"label-value-1","label-name-2":"label-value-2"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description The maximum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the ephemeral storage space.
     *
     * @example 4
     *
     * @var int
     */
    public $limitEphemeralStorage;

    /**
     * @description The configuration for the liveness check on the container. Example: `{"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"tcpSocket":{"host":"", "port":8080}}`. If you want to cancel this configuration, set this parameter to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     *
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"tcpSocket":{"host":"", "port":8080}}
     *
     * @var string
     */
    public $liveness;

    /**
     * @description The configurations that are used when the host files are mounted to the container on which the application is running. Example: `\[{"type":"","nodePath":"/localfiles","mountPath":"/app/files"},{"type":"Directory","nodePath":"/mnt","mountPath":"/app/storage"}\]`. The nodePath parameter specifies the host path, the mountPath parameter specifies the path within the container, and the type parameter specifies the mounting type.
     *
     * @example [{"type":"","nodePath":"/localfiles","mountPath":"/app/files"},{"type":"Directory","nodePath":"/mnt","mountPath":"/app/storage"}]
     *
     * @var string
     */
    public $localVolume;

    /**
     * @description Specifies whether to enable Graceful Rolling Release and configure Complete Service Registration before Readiness Probing. Valid values:
     *
     *   true: If you turn on the switch, the system uses the /health path and provides port 55199 for the health check. The system does not intrude into the application. When the service is registered, the system returns HTTP 200 status code. Otherwise, the system returns HTTP 500 status code.
     *
     * > If you set both the LosslessRuleRelated parameter and this parameter to true, the operation checks whether the service prefetching is complete.
     *
     *   false: If you turn off the switch, the system does not provide a port to check whether the service is registered.
     *
     * @example false
     *
     * @var bool
     */
    public $losslessRuleAligned;

    /**
     * @description The delay of service registration. Valid values: 0 to 86400. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $losslessRuleDelayTime;

    /**
     * @description The number of prefetching curves. Valid values: 0 to 20. The default value is 2, which is suitable for common prefetching scenarios. This value indicates that the received traffic amount of the provider during prefetching is displayed as a quadratic curve.
     *
     * @example 2
     *
     * @var int
     */
    public $losslessRuleFuncType;

    /**
     * @description Specifies whether to enable Graceful Rolling Release and configure Complete Service Prefetching before Readiness Probing. Valid values:
     *
     *   true: If you turn on the switch, the system uses the /health path and provides port 55199 for the health check. The system does not intrude into the application. When service prefetching is complete, the system returns HTTP 200 status code. Otherwise, the system returns HTTP 500 status code.
     *   false: If you turn off the switch, the system does not provide a port to check whether service prefetching is complete.
     *
     * @example false
     *
     * @var bool
     */
    public $losslessRuleRelated;

    /**
     * @description The service prefetching duration. Valid values: 0 to 86400. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $losslessRuleWarmupTime;

    /**
     * @description The maximum number of CPU cores allowed. Unit: cores. Value 0 indicates that no limit is set on CPU cores.
     *
     * @example 0
     *
     * @var int
     */
    public $mcpuLimit;

    /**
     * @description The minimum number of CPU cores required. Unit: cores. Value 0 indicates that no limit is set on CPU cores.
     *
     * > You must set this parameter together with the CpuLimit parameter. Make sure that the value of this parameter does not exceed that of the CpuLimit parameter.
     * @example 4
     *
     * @var int
     */
    public $mcpuRequest;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is running. Unit: MB. Value 0 indicates that no limit is set on the memory size.
     *
     * @example 0
     *
     * @var int
     */
    public $memoryLimit;

    /**
     * @description The size of memory requested for each application instance when the application is running. Unit: MB. We recommend that you set this parameter. If you do not want to apply for a memory quota, set this parameter to 0.
     *
     * > You must set this parameter together with the MemoryLimit parameter. Make sure that the value of this parameter does not exceed that of the MemoryLimit parameter.
     * @example 0
     *
     * @var int
     */
    public $memoryRequest;

    /**
     * @description The description of the NAS mounting configuration. Set this parameter to a serialized JSON string. Example: `\[{"nasPath": "/k8s","mountPath": "/mnt"},{"nasPath": "/files","mountPath": "/app/files"}\]`. The nasPath parameter specifies the file storage path, and the mountPath parameter specifies the path to mount the file system to the container in which the application is running.
     *
     * @example [{"nasPath": "/k8s","mountPath": "/mnt"},{"nasPath": "/files","mountPath": "/app/files"}]
     *
     * @var string
     */
    public $mountDescs;

    /**
     * @description The ID of the Apsara File Storage NAS (NAS) file system mounted to the container in which the application is running. The NAS file system must be in the same region as the cluster. The NAS file system must have an available mount target, or have a mount target on the vSwitch in the virtual private cloud (VPC) in which the application resides. If you do not specify this parameter but specify the MountDescs parameter, a NAS file system is automatically purchased and mounted to the vSwitch in the VPC.
     *
     * @example dfs23****
     *
     * @var string
     */
    public $nasId;

    /**
     * @description The URL of the deployment package. This parameter is required if you use a FatJar or WAR package to deploy the application.
     *
     * > The version of EDAS SDK for Java or Python must be V2.44.0 or later.
     * @example https://e***.oss-cn-beijing.aliyuncs.com/s***-1.0-SNAPSHOT-spring-boot.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required if you use a FatJar or WAR package to deploy the application. You must specify a version.
     *
     * > The version of EDAS SDK for Java or Python must be V2.44.0 or later.
     * @example 20200720
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The version ID of the deployment package.
     *
     * @example 2bcc********
     *
     * @var string
     */
    public $packageVersionId;

    /**
     * @description The post-start script. Example: `{"exec":{"command":\["cat","/etc/group"\]}}`. If you want to cancel this configuration, set this parameter to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     *
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The pre-stop script. Example: `{"tcpSocket":{"host":"", "port":8080}}`. If you want to cancel this configuration, set this parameter to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     *
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The configuration for mounting a Kubernetes PersistentVolumeClaim (PVC) to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   pvcName: the name of the PVC. Make sure that the volume exists and is in the Bound state.
     *
     *   mountPaths: the directory to which you want to mount the PVC. You can configure multiple directories. You can set the following two parameters for each mount directory:
     *
     *   mountPath: the mount path. The mount path must be an absolute path that starts with a forward slash (/).
     *   readOnly: the mount mode. Value true indicates the read-only mode. Value false indicates the read and write mode. Default value: false.
     *
     * @example [{"pvcName":"nas-pvc-1","mountPaths":[{"mountPath":"/usr/share/nginx/data"},{"mountPath":"/usr/share/nginx/html","readOnly":true}]}]
     *
     * @var string
     */
    public $pvcMountDescs;

    /**
     * @description The configuration for the readiness check on the container. If the check fails, the traffic that passes through the Kubernetes service is not transmitted to the container. Example: `{"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"httpGet": {"path": "/consumer","port": 8080,"scheme": "HTTP","httpHeaders": \[{"name": "test","value": "testvalue"}\]}}`. If you want to cancel this configuration, set this parameter to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     *
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"httpGet": {"path": "/consumer","port": 8080,"scheme": "HTTP","httpHeaders": [{"name": "test","value": "testvalue"}]}}
     *
     * @var string
     */
    public $readiness;

    /**
     * @description The number of application instances. The minimum value is 0.
     *
     * @example 1
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The minimum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the ephemeral storage space.
     *
     * @example 2
     *
     * @var int
     */
    public $requestsEphemeralStorage;

    /**
     * @description The type of the container runtime. Valid values:
     *
     *   runc: standard container runtime
     *   runv: sandboxed container runtime
     *
     * This parameter is applicable only to clusters that use sandboxed containers.
     * @example runc
     *
     * @var string
     */
    public $runtimeClassName;

    /**
     * @var string
     */
    public $sidecars;

    /**
     * @description The Logstore configuration. If you want to cancel this configuration, leave the parameter value empty by entering `""` or `"{}"`.
     *
     *   The following parameters are included in the configuration:
     *
     *   type: the collection type. Set this parameter to file to specify the file type. Set this parameter to stdout to specify the standard output type.
     *
     *   logstore: the name of the Logstore. Make sure that the name of the Logstore is unique in the cluster. The name must comply with the following rules:
     *
     *   The name can contain only lowercase letters, digits, hyphens (-), and underscores (\_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length. If you leave this parameter empty, the system automatically generates a name.
     *
     *   logDir: If the standard output type is used, the collection path is stdout.log. If the file type is used, the collection path is the path of the collected file. Wildcards (\*) are supported. The collection path must match the following regular expression: `^/(.+)/(.*)^/$`.
     *
     * @example [{"logstore":"thisisanotherfilelog","type":"file","logDir":"/var/log/*"},{"logstore":"","type":"stdout","logDir":"stdout.log"},{"logstore":"thisisafilelog","type":"file","logDir":"/tmp/log/*"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @var string
     */
    public $startup;

    /**
     * @description The storage type of the NAS file system.
     *
     *   Valid values for General-purpose NAS file systems: Capacity and Performance.
     *   Valid values for Extreme NAS file systems: standard and advance.
     *
     * You can set this parameter only to Performance.
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $terminateGracePeriod;

    /**
     * @description The traffic adjustment policy for a canary release.
     *
     * @example {"http":{"rules":[{"conditionType":"percent","percent":10}]}}
     *
     * @var string
     */
    public $trafficControlStrategy;

    /**
     * @description The phased release policy.
     *
     *   Example 1: One instance for a canary release + Two subsequent batches + Automatic batching + 1-minute batch interval.
     *
     * `{"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":1},"grayUpdate":{"gray":1}}`
     *
     *   Example 2: One instance for a canary release + Two subsequent batches + Manual batching.
     *
     * `{"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"manual"},"grayUpdate":{"gray":1}}`
     *
     *   Example 3: Two batches + Automatic batching + 0-minute batch interval.
     *
     * `{"type":"BatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":0}}`
     * @example {"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":1},"grayUpdate":{"gray":1}}
     *
     * @var string
     */
    public $updateStrategy;

    /**
     * @description The URI encoding scheme. Valid values: ISO-8859-1, GBK, GB2312, and UTF-8.
     *
     * > If you do not specify this parameter in the application configurations, the default URI encoding scheme in the Tomcat container is applied.
     * @example GBK
     *
     * @var string
     */
    public $uriEncoding;

    /**
     * @description Specifies whether to use the encoding scheme specified in the request body for URI query parameters.
     *
     * > If this parameter is not specified in application configuration, the default value false is applied.
     * @example false
     *
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @var string
     */
    public $userBaseImageUrl;

    /**
     * @description The data volume.
     *
     * @example test
     *
     * @var string
     */
    public $volumesStr;

    /**
     * @description The version of the Tomcat container on which the deployment package of the application depends. This parameter is applicable to Spring Cloud and Dubbo applications that you deploy by using WAR packages. This parameter is unavailable if you deploy applications by using images.
     *
     * @example apache-tomcat-7.0.91
     *
     * @var string
     */
    public $webContainer;

    /**
     * @description The Tomcat container configuration. If you want to cancel this configuration, set this parameter to `""` or `"{}"`. The following parameters are included in the configuration:
     *
     *   useDefaultConfig: specifies whether to use the default configuration. Value true indicates to use the default configuration. Value false indicates to use the custom configuration. If the default configuration is used, the following parameters do not take effect.
     *
     *   contextInputType: the type of the access path for the application. Valid values:
     *
     *   war: The access path for the application is the name of the WAR package. You do not need to specify a custom path.
     *   root: The access path for the application is /. You do not need to specify a custom path.
     *   custom: If you select this option, you must specify a custom path for the contextPath parameter.
     *
     *   contextPath: the custom access path for the application. This parameter is required only when you set the contextInputType parameter to custom.
     *
     *   httpPort: the port number. The port number ranges from 1024 to 65535. Though the admin permissions are configured for the container, the root permissions are required to perform operations on ports whose number is less than 1024. Enter a value that ranges from 1025 to 65535 because the container has only the admin permissions. If you do not configure this parameter, the default port number 8080 is used.
     *
     *   maxThreads: the maximum number of connections in the connection pool. Default value: 400.
     *
     **
     *
     **Note**This parameter greatly affects the application performance. We recommend that you set this parameter under professional guidance.
     *
     *   uriEncoding: the URI encoding scheme in the Tomcat container. Valid values: UTF-8, ISO-8859-1, GBK, and GB2312. If you do not specify this parameter, the default value ISO-8859-1 is used.
     *
     *   useBodyEncoding: specifies whether to use the encoding scheme specified in the request body for URI query parameters.
     *
     *   useAdvancedServerXml: specifies whether to use advanced configurations to customize the `server.xml` file. If the preceding parameter types and specific parameters cannot meet your requirements, you can use advanced configurations to customize the `server.xml` file of Tomcat.
     *
     *   serverXml: the content of the `server.xml` file customized by using advanced configurations. This parameter takes effect only when you set the useAdvancedServerXml parameter to true.
     *
     * @example {"useDefaultConfig":false,"contextInputType":"custom","contextPath":"hello","httpPort":8088,"maxThreads":400,"uriEncoding":"UTF-8","useBodyEncoding":true,"useAdvancedServerXml":false}
     *
     * @var string
     */
    public $webContainerConfig;
    protected $_name = [
        'annotations'              => 'Annotations',
        'appId'                    => 'AppId',
        'args'                     => 'Args',
        'batchTimeout'             => 'BatchTimeout',
        'batchWaitTime'            => 'BatchWaitTime',
        'buildPackId'              => 'BuildPackId',
        'canaryRuleId'             => 'CanaryRuleId',
        'changeOrderDesc'          => 'ChangeOrderDesc',
        'command'                  => 'Command',
        'configMountDescs'         => 'ConfigMountDescs',
        'cpuLimit'                 => 'CpuLimit',
        'cpuRequest'               => 'CpuRequest',
        'customAffinity'           => 'CustomAffinity',
        'customTolerations'        => 'CustomTolerations',
        'deployAcrossNodes'        => 'DeployAcrossNodes',
        'deployAcrossZones'        => 'DeployAcrossZones',
        'edasContainerVersion'     => 'EdasContainerVersion',
        'emptyDirs'                => 'EmptyDirs',
        'enableAhas'               => 'EnableAhas',
        'enableEmptyPushReject'    => 'EnableEmptyPushReject',
        'enableLosslessRule'       => 'EnableLosslessRule',
        'envFroms'                 => 'EnvFroms',
        'envs'                     => 'Envs',
        'image'                    => 'Image',
        'imagePlatforms'           => 'ImagePlatforms',
        'imageTag'                 => 'ImageTag',
        'initContainers'           => 'InitContainers',
        'JDK'                      => 'JDK',
        'javaStartUpConfig'        => 'JavaStartUpConfig',
        'labels'                   => 'Labels',
        'limitEphemeralStorage'    => 'LimitEphemeralStorage',
        'liveness'                 => 'Liveness',
        'localVolume'              => 'LocalVolume',
        'losslessRuleAligned'      => 'LosslessRuleAligned',
        'losslessRuleDelayTime'    => 'LosslessRuleDelayTime',
        'losslessRuleFuncType'     => 'LosslessRuleFuncType',
        'losslessRuleRelated'      => 'LosslessRuleRelated',
        'losslessRuleWarmupTime'   => 'LosslessRuleWarmupTime',
        'mcpuLimit'                => 'McpuLimit',
        'mcpuRequest'              => 'McpuRequest',
        'memoryLimit'              => 'MemoryLimit',
        'memoryRequest'            => 'MemoryRequest',
        'mountDescs'               => 'MountDescs',
        'nasId'                    => 'NasId',
        'packageUrl'               => 'PackageUrl',
        'packageVersion'           => 'PackageVersion',
        'packageVersionId'         => 'PackageVersionId',
        'postStart'                => 'PostStart',
        'preStop'                  => 'PreStop',
        'pvcMountDescs'            => 'PvcMountDescs',
        'readiness'                => 'Readiness',
        'replicas'                 => 'Replicas',
        'requestsEphemeralStorage' => 'RequestsEphemeralStorage',
        'runtimeClassName'         => 'RuntimeClassName',
        'sidecars'                 => 'Sidecars',
        'slsConfigs'               => 'SlsConfigs',
        'startup'                  => 'Startup',
        'storageType'              => 'StorageType',
        'terminateGracePeriod'     => 'TerminateGracePeriod',
        'trafficControlStrategy'   => 'TrafficControlStrategy',
        'updateStrategy'           => 'UpdateStrategy',
        'uriEncoding'              => 'UriEncoding',
        'useBodyEncoding'          => 'UseBodyEncoding',
        'userBaseImageUrl'         => 'UserBaseImageUrl',
        'volumesStr'               => 'VolumesStr',
        'webContainer'             => 'WebContainer',
        'webContainerConfig'       => 'WebContainerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->batchTimeout) {
            $res['BatchTimeout'] = $this->batchTimeout;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->canaryRuleId) {
            $res['CanaryRuleId'] = $this->canaryRuleId;
        }
        if (null !== $this->changeOrderDesc) {
            $res['ChangeOrderDesc'] = $this->changeOrderDesc;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = $this->configMountDescs;
        }
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->customAffinity) {
            $res['CustomAffinity'] = $this->customAffinity;
        }
        if (null !== $this->customTolerations) {
            $res['CustomTolerations'] = $this->customTolerations;
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->emptyDirs) {
            $res['EmptyDirs'] = $this->emptyDirs;
        }
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->enableEmptyPushReject) {
            $res['EnableEmptyPushReject'] = $this->enableEmptyPushReject;
        }
        if (null !== $this->enableLosslessRule) {
            $res['EnableLosslessRule'] = $this->enableLosslessRule;
        }
        if (null !== $this->envFroms) {
            $res['EnvFroms'] = $this->envFroms;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imagePlatforms) {
            $res['ImagePlatforms'] = $this->imagePlatforms;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->initContainers) {
            $res['InitContainers'] = $this->initContainers;
        }
        if (null !== $this->JDK) {
            $res['JDK'] = $this->JDK;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->limitEphemeralStorage) {
            $res['LimitEphemeralStorage'] = $this->limitEphemeralStorage;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }
        if (null !== $this->losslessRuleAligned) {
            $res['LosslessRuleAligned'] = $this->losslessRuleAligned;
        }
        if (null !== $this->losslessRuleDelayTime) {
            $res['LosslessRuleDelayTime'] = $this->losslessRuleDelayTime;
        }
        if (null !== $this->losslessRuleFuncType) {
            $res['LosslessRuleFuncType'] = $this->losslessRuleFuncType;
        }
        if (null !== $this->losslessRuleRelated) {
            $res['LosslessRuleRelated'] = $this->losslessRuleRelated;
        }
        if (null !== $this->losslessRuleWarmupTime) {
            $res['LosslessRuleWarmupTime'] = $this->losslessRuleWarmupTime;
        }
        if (null !== $this->mcpuLimit) {
            $res['McpuLimit'] = $this->mcpuLimit;
        }
        if (null !== $this->mcpuRequest) {
            $res['McpuRequest'] = $this->mcpuRequest;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->mountDescs) {
            $res['MountDescs'] = $this->mountDescs;
        }
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->pvcMountDescs) {
            $res['PvcMountDescs'] = $this->pvcMountDescs;
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->requestsEphemeralStorage) {
            $res['RequestsEphemeralStorage'] = $this->requestsEphemeralStorage;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->sidecars) {
            $res['Sidecars'] = $this->sidecars;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }
        if (null !== $this->startup) {
            $res['Startup'] = $this->startup;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->terminateGracePeriod) {
            $res['TerminateGracePeriod'] = $this->terminateGracePeriod;
        }
        if (null !== $this->trafficControlStrategy) {
            $res['TrafficControlStrategy'] = $this->trafficControlStrategy;
        }
        if (null !== $this->updateStrategy) {
            $res['UpdateStrategy'] = $this->updateStrategy;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->userBaseImageUrl) {
            $res['UserBaseImageUrl'] = $this->userBaseImageUrl;
        }
        if (null !== $this->volumesStr) {
            $res['VolumesStr'] = $this->volumesStr;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }
        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = $this->webContainerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['BatchTimeout'])) {
            $model->batchTimeout = $map['BatchTimeout'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['CanaryRuleId'])) {
            $model->canaryRuleId = $map['CanaryRuleId'];
        }
        if (isset($map['ChangeOrderDesc'])) {
            $model->changeOrderDesc = $map['ChangeOrderDesc'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ConfigMountDescs'])) {
            $model->configMountDescs = $map['ConfigMountDescs'];
        }
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['CustomAffinity'])) {
            $model->customAffinity = $map['CustomAffinity'];
        }
        if (isset($map['CustomTolerations'])) {
            $model->customTolerations = $map['CustomTolerations'];
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['EmptyDirs'])) {
            $model->emptyDirs = $map['EmptyDirs'];
        }
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['EnableEmptyPushReject'])) {
            $model->enableEmptyPushReject = $map['EnableEmptyPushReject'];
        }
        if (isset($map['EnableLosslessRule'])) {
            $model->enableLosslessRule = $map['EnableLosslessRule'];
        }
        if (isset($map['EnvFroms'])) {
            $model->envFroms = $map['EnvFroms'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImagePlatforms'])) {
            $model->imagePlatforms = $map['ImagePlatforms'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['InitContainers'])) {
            $model->initContainers = $map['InitContainers'];
        }
        if (isset($map['JDK'])) {
            $model->JDK = $map['JDK'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LimitEphemeralStorage'])) {
            $model->limitEphemeralStorage = $map['LimitEphemeralStorage'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }
        if (isset($map['LosslessRuleAligned'])) {
            $model->losslessRuleAligned = $map['LosslessRuleAligned'];
        }
        if (isset($map['LosslessRuleDelayTime'])) {
            $model->losslessRuleDelayTime = $map['LosslessRuleDelayTime'];
        }
        if (isset($map['LosslessRuleFuncType'])) {
            $model->losslessRuleFuncType = $map['LosslessRuleFuncType'];
        }
        if (isset($map['LosslessRuleRelated'])) {
            $model->losslessRuleRelated = $map['LosslessRuleRelated'];
        }
        if (isset($map['LosslessRuleWarmupTime'])) {
            $model->losslessRuleWarmupTime = $map['LosslessRuleWarmupTime'];
        }
        if (isset($map['McpuLimit'])) {
            $model->mcpuLimit = $map['McpuLimit'];
        }
        if (isset($map['McpuRequest'])) {
            $model->mcpuRequest = $map['McpuRequest'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['MemoryRequest'])) {
            $model->memoryRequest = $map['MemoryRequest'];
        }
        if (isset($map['MountDescs'])) {
            $model->mountDescs = $map['MountDescs'];
        }
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['PvcMountDescs'])) {
            $model->pvcMountDescs = $map['PvcMountDescs'];
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['RequestsEphemeralStorage'])) {
            $model->requestsEphemeralStorage = $map['RequestsEphemeralStorage'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['Sidecars'])) {
            $model->sidecars = $map['Sidecars'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }
        if (isset($map['Startup'])) {
            $model->startup = $map['Startup'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['TerminateGracePeriod'])) {
            $model->terminateGracePeriod = $map['TerminateGracePeriod'];
        }
        if (isset($map['TrafficControlStrategy'])) {
            $model->trafficControlStrategy = $map['TrafficControlStrategy'];
        }
        if (isset($map['UpdateStrategy'])) {
            $model->updateStrategy = $map['UpdateStrategy'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['UserBaseImageUrl'])) {
            $model->userBaseImageUrl = $map['UserBaseImageUrl'];
        }
        if (isset($map['VolumesStr'])) {
            $model->volumesStr = $map['VolumesStr'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }
        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = $map['WebContainerConfig'];
        }

        return $model;
    }
}
