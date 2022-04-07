<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AbolishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AbolishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddProjectMemberToRoleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddProjectMemberToRoleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddToMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddToMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ApprovePermissionApplyOrderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ApprovePermissionApplyOrderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckFileDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckFileDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagComplementRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagComplementResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagTestRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDagTestResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiAuthorityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiAuthorityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateExportMigrationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateExportMigrationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateImportMigrationAdvanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateImportMigrationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateImportMigrationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateManualDagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateManualDagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRelativeNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRelativeNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateUdfFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateUdfFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiAuthorityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiAuthorityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFromMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFromMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteProjectMemberRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteProjectMemberResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRelativeNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRelativeNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DesensitizeDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DesensitizeDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForCreatingRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForCreatingResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForUpdatingRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForUpdatingResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceGroupRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceGroupResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataSourceMetaRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataSourceMetaResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskMetricInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskMetricInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetManualDagInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetManualDagInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationProcessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationProcessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationSummaryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationSummaryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeChildrenRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeChildrenResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpRiskDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpRiskDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpSensitiveDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetOpSensitiveDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSensitiveDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSensitiveDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIProjectConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIProjectConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListManualDagInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListManualDagInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeInputOrOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeInputOrOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIORequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIOResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByBaselineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByBaselineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectIdsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectIdsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryPublicModelEngineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryPublicModelEngineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RemoveProjectMemberFromRoleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RemoveProjectMemberFromRoleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeColumnPermissionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeColumnPermissionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeTablePermissionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RevokeTablePermissionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunCycleDagNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunCycleDagNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunManualDagNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunManualDagNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunSmokeTestRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunSmokeTestResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunTriggerNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RunTriggerNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ScanSensitiveDataRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ScanSensitiveDataResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchNodesByOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchNodesByOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetDataSourceShareRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetDataSourceShareResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDISyncInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDISyncInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartMigrationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartMigrationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopDISyncInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopDISyncInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TerminateDISyncInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TerminateDISyncInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataSourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataSourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIProjectConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIProjectConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDISyncTaskRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDISyncTaskResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateIDEEventResultRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateIDEEventResultResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableIntroWikiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableIntroWikiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeOwnerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeOwnerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeRunModeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateNodeRunModeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableLevelRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableLevelResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableModelInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableModelInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableThemeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableThemeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateUdfFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateUdfFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateWorkbenchEventResultRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateWorkbenchEventResultResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dataworkspublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'dataworks.ap-northeast-1.aliyuncs.com',
            'ap-south-1'            => 'dataworks.ap-south-1.aliyuncs.com',
            'ap-southeast-1'        => 'dataworks.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dataworks.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dataworks.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dataworks.ap-southeast-5.aliyuncs.com',
            'cn-beijing'            => 'dataworks.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'dataworks.cn-chengdu.aliyuncs.com',
            'cn-hangzhou'           => 'dataworks.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dataworks.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'dataworks.aliyuncs.com',
            'cn-qingdao'            => 'dataworks.aliyuncs.com',
            'cn-shanghai'           => 'dataworks.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'dataworks.cn-shenzhen.aliyuncs.com',
            'cn-zhangjiakou'        => 'dataworks.aliyuncs.com',
            'eu-central-1'          => 'dataworks.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'dataworks.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dataworks.me-east-1.aliyuncs.com',
            'us-east-1'             => 'dataworks.us-east-1.aliyuncs.com',
            'us-west-1'             => 'dataworks.us-west-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dataworks.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dataworks.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dataworks.aliyuncs.com',
            'cn-north-2-gov-1'      => 'dataworks.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataworks-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AbolishDataServiceApiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AbolishDataServiceApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbolishDataServiceApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbolishDataServiceApiRequest $request
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param AddProjectMemberToRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddProjectMemberToRoleResponse
     */
    public function addProjectMemberToRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCode)) {
            $query['RoleCode'] = $request->roleCode;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddProjectMemberToRole',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddProjectMemberToRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddProjectMemberToRoleRequest $request
     *
     * @return AddProjectMemberToRoleResponse
     */
    public function addProjectMemberToRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectMemberToRoleWithOptions($request, $runtime);
    }

    /**
     * @param AddToMetaCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddToMetaCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddToMetaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddToMetaCategoryRequest $request
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addToMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ApprovePermissionApplyOrderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ApprovePermissionApplyOrderResponse
     */
    public function approvePermissionApplyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approveAction)) {
            $query['ApproveAction'] = $request->approveAction;
        }
        if (!Utils::isUnset($request->approveComment)) {
            $query['ApproveComment'] = $request->approveComment;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApprovePermissionApplyOrder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApprovePermissionApplyOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApprovePermissionApplyOrderRequest $request
     *
     * @return ApprovePermissionApplyOrderResponse
     */
    public function approvePermissionApplyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approvePermissionApplyOrderWithOptions($request, $runtime);
    }

    /**
     * @param CheckFileDeploymentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckFileDeploymentResponse
     */
    public function checkFileDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkDetailUrl)) {
            $body['CheckDetailUrl'] = $request->checkDetailUrl;
        }
        if (!Utils::isUnset($request->checkerInstanceId)) {
            $body['CheckerInstanceId'] = $request->checkerInstanceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckFileDeployment',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFileDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckFileDeploymentRequest $request
     *
     * @return CheckFileDeploymentResponse
     */
    public function checkFileDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFileDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param CheckMetaPartitionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->partition)) {
            $query['Partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckMetaPartition',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMetaPartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckMetaPartitionRequest $request
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaPartitionWithOptions($request, $runtime);
    }

    /**
     * @param CheckMetaTableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckMetaTable',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMetaTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckMetaTableRequest $request
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaTableWithOptions($request, $runtime);
    }

    /**
     * @param CreateBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateBusinessResponse
     */
    public function createBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessName)) {
            $body['BusinessName'] = $request->businessName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->useType)) {
            $body['UseType'] = $request->useType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBusiness',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBusinessRequest $request
     *
     * @return CreateBusinessResponse
     */
    public function createBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBusinessWithOptions($request, $runtime);
    }

    /**
     * @param CreateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConnectionResponse
     */
    public function createConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionType)) {
            $query['ConnectionType'] = $request->connectionType;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConnection',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConnectionRequest $request
     *
     * @return CreateConnectionResponse
     */
    public function createConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDISyncTaskResponse
     */
    public function createDISyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskContent)) {
            $query['TaskContent'] = $request->taskContent;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskParam)) {
            $query['TaskParam'] = $request->taskParam;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDISyncTask',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDISyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDISyncTaskRequest $request
     *
     * @return CreateDISyncTaskResponse
     */
    public function createDISyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDISyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDagComplementRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDagComplementResponse
     */
    public function createDagComplementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizBeginTime)) {
            $body['BizBeginTime'] = $request->bizBeginTime;
        }
        if (!Utils::isUnset($request->bizEndTime)) {
            $body['BizEndTime'] = $request->bizEndTime;
        }
        if (!Utils::isUnset($request->endBizDate)) {
            $body['EndBizDate'] = $request->endBizDate;
        }
        if (!Utils::isUnset($request->excludeNodeIds)) {
            $body['ExcludeNodeIds'] = $request->excludeNodeIds;
        }
        if (!Utils::isUnset($request->includeNodeIds)) {
            $body['IncludeNodeIds'] = $request->includeNodeIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeParams)) {
            $body['NodeParams'] = $request->nodeParams;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $body['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->rootNodeId)) {
            $body['RootNodeId'] = $request->rootNodeId;
        }
        if (!Utils::isUnset($request->startBizDate)) {
            $body['StartBizDate'] = $request->startBizDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDagComplement',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDagComplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDagComplementRequest $request
     *
     * @return CreateDagComplementResponse
     */
    public function createDagComplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDagComplementWithOptions($request, $runtime);
    }

    /**
     * @param CreateDagTestRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDagTestResponse
     */
    public function createDagTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeParams)) {
            $body['NodeParams'] = $request->nodeParams;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDagTest',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDagTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDagTestRequest $request
     *
     * @return CreateDagTestResponse
     */
    public function createDagTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDagTestWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiDescription)) {
            $body['ApiDescription'] = $request->apiDescription;
        }
        if (!Utils::isUnset($request->apiMode)) {
            $body['ApiMode'] = $request->apiMode;
        }
        if (!Utils::isUnset($request->apiName)) {
            $body['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->apiPath)) {
            $body['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->protocols)) {
            $body['Protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->registrationDetails)) {
            $body['RegistrationDetails'] = $request->registrationDetails;
        }
        if (!Utils::isUnset($request->requestMethod)) {
            $body['RequestMethod'] = $request->requestMethod;
        }
        if (!Utils::isUnset($request->responseContentType)) {
            $body['ResponseContentType'] = $request->responseContentType;
        }
        if (!Utils::isUnset($request->scriptDetails)) {
            $body['ScriptDetails'] = $request->scriptDetails;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->visibleRange)) {
            $body['VisibleRange'] = $request->visibleRange;
        }
        if (!Utils::isUnset($request->wizardDetails)) {
            $body['WizardDetails'] = $request->wizardDetails;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataServiceApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataServiceApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataServiceApiRequest $request
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceApiAuthorityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDataServiceApiAuthorityResponse
     */
    public function createDataServiceApiAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->authorizedProjectId)) {
            $body['AuthorizedProjectId'] = $request->authorizedProjectId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataServiceApiAuthority',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataServiceApiAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataServiceApiAuthorityRequest $request
     *
     * @return CreateDataServiceApiAuthorityResponse
     */
    public function createDataServiceApiAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApiAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceFolderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDataServiceFolderResponse
     */
    public function createDataServiceFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderName)) {
            $body['FolderName'] = $request->folderName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataServiceFolder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataServiceFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataServiceFolderRequest $request
     *
     * @return CreateDataServiceFolderResponse
     */
    public function createDataServiceFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceFolderWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataServiceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataServiceGroupResponse
     */
    public function createDataServiceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiGatewayGroupId)) {
            $body['ApiGatewayGroupId'] = $request->apiGatewayGroupId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataServiceGroup',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataServiceGroupRequest $request
     *
     * @return CreateDataServiceGroupResponse
     */
    public function createDataServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSource',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateExportMigrationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateExportMigrationResponse
     */
    public function createExportMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->exportMode)) {
            $body['ExportMode'] = $request->exportMode;
        }
        if (!Utils::isUnset($request->exportObjectStatus)) {
            $body['ExportObjectStatus'] = $request->exportObjectStatus;
        }
        if (!Utils::isUnset($request->incrementalSince)) {
            $body['IncrementalSince'] = $request->incrementalSince;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExportMigration',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExportMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateExportMigrationRequest $request
     *
     * @return CreateExportMigrationResponse
     */
    public function createExportMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExportMigrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->advancedSettings)) {
            $body['AdvancedSettings'] = $request->advancedSettings;
        }
        if (!Utils::isUnset($request->autoParsing)) {
            $body['AutoParsing'] = $request->autoParsing;
        }
        if (!Utils::isUnset($request->autoRerunIntervalMillis)) {
            $body['AutoRerunIntervalMillis'] = $request->autoRerunIntervalMillis;
        }
        if (!Utils::isUnset($request->autoRerunTimes)) {
            $body['AutoRerunTimes'] = $request->autoRerunTimes;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $body['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->cronExpress)) {
            $body['CronExpress'] = $request->cronExpress;
        }
        if (!Utils::isUnset($request->cycleType)) {
            $body['CycleType'] = $request->cycleType;
        }
        if (!Utils::isUnset($request->dependentNodeIdList)) {
            $body['DependentNodeIdList'] = $request->dependentNodeIdList;
        }
        if (!Utils::isUnset($request->dependentType)) {
            $body['DependentType'] = $request->dependentType;
        }
        if (!Utils::isUnset($request->endEffectDate)) {
            $body['EndEffectDate'] = $request->endEffectDate;
        }
        if (!Utils::isUnset($request->fileDescription)) {
            $body['FileDescription'] = $request->fileDescription;
        }
        if (!Utils::isUnset($request->fileFolderPath)) {
            $body['FileFolderPath'] = $request->fileFolderPath;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->inputList)) {
            $body['InputList'] = $request->inputList;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->paraValue)) {
            $body['ParaValue'] = $request->paraValue;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->rerunMode)) {
            $body['RerunMode'] = $request->rerunMode;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupIdentifier)) {
            $body['ResourceGroupIdentifier'] = $request->resourceGroupIdentifier;
        }
        if (!Utils::isUnset($request->schedulerType)) {
            $body['SchedulerType'] = $request->schedulerType;
        }
        if (!Utils::isUnset($request->startEffectDate)) {
            $body['StartEffectDate'] = $request->startEffectDate;
        }
        if (!Utils::isUnset($request->startImmediately)) {
            $body['StartImmediately'] = $request->startImmediately;
        }
        if (!Utils::isUnset($request->stop)) {
            $body['Stop'] = $request->stop;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderPath)) {
            $body['FolderPath'] = $request->folderPath;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFolder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFolderRequest $request
     *
     * @return CreateFolderResponse
     */
    public function createFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFolderWithOptions($request, $runtime);
    }

    /**
     * @param CreateImportMigrationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateImportMigrationResponse
     */
    public function createImportMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->calculateEngineMap)) {
            $body['CalculateEngineMap'] = $request->calculateEngineMap;
        }
        if (!Utils::isUnset($request->commitRule)) {
            $body['CommitRule'] = $request->commitRule;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageFile)) {
            $body['PackageFile'] = $request->packageFile;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceGroupMap)) {
            $body['ResourceGroupMap'] = $request->resourceGroupMap;
        }
        if (!Utils::isUnset($request->workspaceMap)) {
            $body['WorkspaceMap'] = $request->workspaceMap;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateImportMigration',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImportMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImportMigrationRequest $request
     *
     * @return CreateImportMigrationResponse
     */
    public function createImportMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImportMigrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateImportMigrationAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateImportMigrationResponse
     */
    public function createImportMigrationAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'dataworks-public',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $createImportMigrationReq = new CreateImportMigrationRequest([]);
        OpenApiUtilClient::convert($request, $createImportMigrationReq);
        if (!Utils::isUnset($request->packageFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->packageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->accessKeyId,
                'policy'              => $authResponse->encodedPolicy,
                'signature'           => $authResponse->signature,
                'key'                 => $authResponse->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $createImportMigrationReq->packageFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->createImportMigrationWithOptions($createImportMigrationReq, $runtime);
    }

    /**
     * @param CreateManualDagRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateManualDagResponse
     */
    public function createManualDagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->dagParameters)) {
            $body['DagParameters'] = $request->dagParameters;
        }
        if (!Utils::isUnset($request->excludeNodeIds)) {
            $body['ExcludeNodeIds'] = $request->excludeNodeIds;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->includeNodeIds)) {
            $body['IncludeNodeIds'] = $request->includeNodeIds;
        }
        if (!Utils::isUnset($request->nodeParameters)) {
            $body['NodeParameters'] = $request->nodeParameters;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateManualDag',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateManualDagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateManualDagRequest $request
     *
     * @return CreateManualDagResponse
     */
    public function createManualDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createManualDagWithOptions($request, $runtime);
    }

    /**
     * @param CreateMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['ParentId'] = $request->parentId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMetaCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMetaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMetaCategoryRequest $request
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param CreatePermissionApplyOrderRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePermissionApplyOrderResponse
     */
    public function createPermissionApplyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyObject)) {
            $query['ApplyObject'] = $request->applyObject;
        }
        if (!Utils::isUnset($request->applyReason)) {
            $query['ApplyReason'] = $request->applyReason;
        }
        if (!Utils::isUnset($request->applyUserIds)) {
            $query['ApplyUserIds'] = $request->applyUserIds;
        }
        if (!Utils::isUnset($request->deadline)) {
            $query['Deadline'] = $request->deadline;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->maxComputeProjectName)) {
            $query['MaxComputeProjectName'] = $request->maxComputeProjectName;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePermissionApplyOrder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePermissionApplyOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePermissionApplyOrderRequest $request
     *
     * @return CreatePermissionApplyOrderResponse
     */
    public function createPermissionApplyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPermissionApplyOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCode)) {
            $query['RoleCode'] = $request->roleCode;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProjectMember',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProjectMemberRequest $request
     *
     * @return CreateProjectMemberResponse
     */
    public function createProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityEntityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->entityLevel)) {
            $body['EntityLevel'] = $request->entityLevel;
        }
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->matchExpression)) {
            $body['MatchExpression'] = $request->matchExpression;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityEntity',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQualityEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateQualityEntityRequest $request
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmMode)) {
            $body['AlarmMode'] = $request->alarmMode;
        }
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->follower)) {
            $body['Follower'] = $request->follower;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityFollower',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQualityFollowerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateQualityFollowerRequest $request
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityRelativeNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->matchExpression)) {
            $body['MatchExpression'] = $request->matchExpression;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->targetNodeProjectId)) {
            $body['TargetNodeProjectId'] = $request->targetNodeProjectId;
        }
        if (!Utils::isUnset($request->targetNodeProjectName)) {
            $body['TargetNodeProjectName'] = $request->targetNodeProjectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityRelativeNode',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQualityRelativeNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateQualityRelativeNodeRequest $request
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRelativeNodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->blockType)) {
            $body['BlockType'] = $request->blockType;
        }
        if (!Utils::isUnset($request->checker)) {
            $body['Checker'] = $request->checker;
        }
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->criticalThreshold)) {
            $body['CriticalThreshold'] = $request->criticalThreshold;
        }
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->expectValue)) {
            $body['ExpectValue'] = $request->expectValue;
        }
        if (!Utils::isUnset($request->methodName)) {
            $body['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->predictType)) {
            $body['PredictType'] = $request->predictType;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->property)) {
            $body['Property'] = $request->property;
        }
        if (!Utils::isUnset($request->propertyType)) {
            $body['PropertyType'] = $request->propertyType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->trend)) {
            $body['Trend'] = $request->trend;
        }
        if (!Utils::isUnset($request->warningThreshold)) {
            $body['WarningThreshold'] = $request->warningThreshold;
        }
        if (!Utils::isUnset($request->whereCondition)) {
            $body['WhereCondition'] = $request->whereCondition;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityRule',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateQualityRuleRequest $request
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateRemindResponse
     */
    public function createRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertInterval)) {
            $body['AlertInterval'] = $request->alertInterval;
        }
        if (!Utils::isUnset($request->alertMethods)) {
            $body['AlertMethods'] = $request->alertMethods;
        }
        if (!Utils::isUnset($request->alertTargets)) {
            $body['AlertTargets'] = $request->alertTargets;
        }
        if (!Utils::isUnset($request->alertUnit)) {
            $body['AlertUnit'] = $request->alertUnit;
        }
        if (!Utils::isUnset($request->baselineIds)) {
            $body['BaselineIds'] = $request->baselineIds;
        }
        if (!Utils::isUnset($request->bizProcessIds)) {
            $body['BizProcessIds'] = $request->bizProcessIds;
        }
        if (!Utils::isUnset($request->detail)) {
            $body['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->dndEnd)) {
            $body['DndEnd'] = $request->dndEnd;
        }
        if (!Utils::isUnset($request->maxAlertTimes)) {
            $body['MaxAlertTimes'] = $request->maxAlertTimes;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $body['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->remindName)) {
            $body['RemindName'] = $request->remindName;
        }
        if (!Utils::isUnset($request->remindType)) {
            $body['RemindType'] = $request->remindType;
        }
        if (!Utils::isUnset($request->remindUnit)) {
            $body['RemindUnit'] = $request->remindUnit;
        }
        if (!Utils::isUnset($request->robotUrls)) {
            $body['RobotUrls'] = $request->robotUrls;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRemind',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRemindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRemindRequest $request
     *
     * @return CreateRemindResponse
     */
    public function createRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemindWithOptions($request, $runtime);
    }

    /**
     * @param CreateTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
     */
    public function createTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGuid)) {
            $query['AppGuid'] = $request->appGuid;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->externalTableType)) {
            $query['ExternalTableType'] = $request->externalTableType;
        }
        if (!Utils::isUnset($request->hasPart)) {
            $query['HasPart'] = $request->hasPart;
        }
        if (!Utils::isUnset($request->isView)) {
            $query['IsView'] = $request->isView;
        }
        if (!Utils::isUnset($request->lifeCycle)) {
            $query['LifeCycle'] = $request->lifeCycle;
        }
        if (!Utils::isUnset($request->location)) {
            $query['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->logicalLevelId)) {
            $query['LogicalLevelId'] = $request->logicalLevelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->physicsLevelId)) {
            $query['PhysicsLevelId'] = $request->physicsLevelId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $body = [];
        if (!Utils::isUnset($request->columns)) {
            $body['Columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $body['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->themes)) {
            $body['Themes'] = $request->themes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTable',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTableRequest $request
     *
     * @return CreateTableResponse
     */
    public function createTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableWithOptions($request, $runtime);
    }

    /**
     * @param CreateTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTableLevelResponse
     */
    public function createTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->levelType)) {
            $query['LevelType'] = $request->levelType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTableLevel',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTableLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTableLevelRequest $request
     *
     * @return CreateTableLevelResponse
     */
    public function createTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param CreateTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTableThemeResponse
     */
    public function createTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTableTheme',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTableThemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTableThemeRequest $request
     *
     * @return CreateTableThemeResponse
     */
    public function createTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param CreateUdfFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->className)) {
            $body['ClassName'] = $request->className;
        }
        if (!Utils::isUnset($request->cmdDescription)) {
            $body['CmdDescription'] = $request->cmdDescription;
        }
        if (!Utils::isUnset($request->example)) {
            $body['Example'] = $request->example;
        }
        if (!Utils::isUnset($request->fileFolderPath)) {
            $body['FileFolderPath'] = $request->fileFolderPath;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->functionType)) {
            $body['FunctionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->parameterDescription)) {
            $body['ParameterDescription'] = $request->parameterDescription;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->resources)) {
            $body['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->returnValue)) {
            $body['ReturnValue'] = $request->returnValue;
        }
        if (!Utils::isUnset($request->udfDescription)) {
            $body['UdfDescription'] = $request->udfDescription;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUdfFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUdfFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUdfFileRequest $request
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUdfFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessId)) {
            $body['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteBusiness',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBusinessRequest $request
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionId)) {
            $query['ConnectionId'] = $request->connectionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnection',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConnectionRequest $request
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDISyncTaskResponse
     */
    public function deleteDISyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDISyncTask',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDISyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDISyncTaskRequest $request
     *
     * @return DeleteDISyncTaskResponse
     */
    public function deleteDISyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDISyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataServiceApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataServiceApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataServiceApiRequest $request
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataServiceApiAuthorityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteDataServiceApiAuthorityResponse
     */
    public function deleteDataServiceApiAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->authorizedProjectId)) {
            $body['AuthorizedProjectId'] = $request->authorizedProjectId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataServiceApiAuthority',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataServiceApiAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataServiceApiAuthorityRequest $request
     *
     * @return DeleteDataServiceApiAuthorityResponse
     */
    public function deleteDataServiceApiAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApiAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFolder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFolderRequest $request
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFolderWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFromMetaCategoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFromMetaCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFromMetaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFromMetaCategoryRequest $request
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFromMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMetaCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMetaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMetaCategoryRequest $request
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProjectMember',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProjectMemberRequest $request
     *
     * @return DeleteProjectMemberResponse
     */
    public function deleteProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectMemberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityEntityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityEntity',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualityEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualityEntityRequest $request
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->followerId)) {
            $body['FollowerId'] = $request->followerId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityFollower',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualityFollowerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualityFollowerRequest $request
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityRelativeNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->matchExpression)) {
            $body['MatchExpression'] = $request->matchExpression;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->targetNodeProjectId)) {
            $body['TargetNodeProjectId'] = $request->targetNodeProjectId;
        }
        if (!Utils::isUnset($request->targetNodeProjectName)) {
            $body['TargetNodeProjectName'] = $request->targetNodeProjectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityRelativeNode',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualityRelativeNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualityRelativeNodeRequest $request
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRelativeNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityRule',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualityRuleRequest $request
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->remindId)) {
            $body['RemindId'] = $request->remindId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRemind',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRemindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRemindRequest $request
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemindWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTableResponse
     */
    public function deleteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGuid)) {
            $query['AppGuid'] = $request->appGuid;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTable',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTableRequest $request
     *
     * @return DeleteTableResponse
     */
    public function deleteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTableLevelResponse
     */
    public function deleteTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->levelId)) {
            $query['LevelId'] = $request->levelId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTableLevel',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTableLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTableLevelRequest $request
     *
     * @return DeleteTableLevelResponse
     */
    public function deleteTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTableThemeResponse
     */
    public function deleteTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->themeId)) {
            $query['ThemeId'] = $request->themeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTableTheme',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTableThemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTableThemeRequest $request
     *
     * @return DeleteTableThemeResponse
     */
    public function deleteTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param DeployDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeployDISyncTaskResponse
     */
    public function deployDISyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployDISyncTask',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployDISyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployDISyncTaskRequest $request
     *
     * @return DeployDISyncTaskResponse
     */
    public function deployDISyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployDISyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeployFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeployFileResponse
     */
    public function deployFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployFileRequest $request
     *
     * @return DeployFileResponse
     */
    public function deployFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFileWithOptions($request, $runtime);
    }

    /**
     * @param DesensitizeDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DesensitizeDataResponse
     */
    public function desensitizeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DesensitizeData',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DesensitizeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DesensitizeDataRequest $request
     *
     * @return DesensitizeDataResponse
     */
    public function desensitizeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->desensitizeDataWithOptions($request, $runtime);
    }

    /**
     * @param EstablishRelationTableToBusinessRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessId)) {
            $body['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $body['TableGuid'] = $request->tableGuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EstablishRelationTableToBusiness',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EstablishRelationTableToBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EstablishRelationTableToBusinessRequest $request
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->establishRelationTableToBusinessWithOptions($request, $runtime);
    }

    /**
     * @param ExportDataSourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportDataSourcesResponse
     */
    public function exportDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportDataSources',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportDataSourcesRequest $request
     *
     * @return ExportDataSourcesResponse
     */
    public function exportDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDISyncTaskConfigForCreatingRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GenerateDISyncTaskConfigForCreatingResponse
     */
    public function generateDISyncTaskConfigForCreatingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskParam)) {
            $query['TaskParam'] = $request->taskParam;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDISyncTaskConfigForCreating',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateDISyncTaskConfigForCreatingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateDISyncTaskConfigForCreatingRequest $request
     *
     * @return GenerateDISyncTaskConfigForCreatingResponse
     */
    public function generateDISyncTaskConfigForCreating($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDISyncTaskConfigForCreatingWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDISyncTaskConfigForUpdatingRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GenerateDISyncTaskConfigForUpdatingResponse
     */
    public function generateDISyncTaskConfigForUpdatingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskParam)) {
            $query['TaskParam'] = $request->taskParam;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDISyncTaskConfigForUpdating',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateDISyncTaskConfigForUpdatingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateDISyncTaskConfigForUpdatingRequest $request
     *
     * @return GenerateDISyncTaskConfigForUpdatingResponse
     */
    public function generateDISyncTaskConfigForUpdating($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDISyncTaskConfigForUpdatingWithOptions($request, $runtime);
    }

    /**
     * @param GetBaselineConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineId)) {
            $body['BaselineId'] = $request->baselineId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBaselineConfig',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBaselineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBaselineConfigRequest $request
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetBaselineKeyPathRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineId)) {
            $body['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->inGroupId)) {
            $body['InGroupId'] = $request->inGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBaselineKeyPath',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBaselineKeyPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBaselineKeyPathRequest $request
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineKeyPathWithOptions($request, $runtime);
    }

    /**
     * @param GetBaselineStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineId)) {
            $body['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->inGroupId)) {
            $body['InGroupId'] = $request->inGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBaselineStatus',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBaselineStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBaselineStatusRequest $request
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetBusinessResponse
     */
    public function getBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessId)) {
            $body['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBusiness',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessRequest $request
     *
     * @return GetBusinessResponse
     */
    public function getBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessWithOptions($request, $runtime);
    }

    /**
     * @param GetDDLJobStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDDLJobStatusResponse
     */
    public function getDDLJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDDLJobStatus',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDDLJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDDLJobStatusRequest $request
     *
     * @return GetDDLJobStatusResponse
     */
    public function getDDLJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDDLJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetDISyncInstanceInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDISyncInstanceInfoResponse
     */
    public function getDISyncInstanceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDISyncInstanceInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDISyncInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDISyncInstanceInfoRequest $request
     *
     * @return GetDISyncInstanceInfoResponse
     */
    public function getDISyncInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDISyncInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDISyncTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDISyncTaskResponse
     */
    public function getDISyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDISyncTask',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDISyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDISyncTaskRequest $request
     *
     * @return GetDISyncTaskResponse
     */
    public function getDISyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDISyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetDISyncTaskMetricInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDISyncTaskMetricInfoResponse
     */
    public function getDISyncTaskMetricInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDISyncTaskMetricInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDISyncTaskMetricInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDISyncTaskMetricInfoRequest $request
     *
     * @return GetDISyncTaskMetricInfoResponse
     */
    public function getDISyncTaskMetricInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDISyncTaskMetricInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDagRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetDagResponse
     */
    public function getDagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dagId)) {
            $body['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDag',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDagRequest $request
     *
     * @return GetDagResponse
     */
    public function getDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDagWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataServiceApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServiceApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataServiceApiRequest $request
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceApplicationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataServiceApplication',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServiceApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataServiceApplicationRequest $request
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApplicationWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceFolderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDataServiceFolderResponse
     */
    public function getDataServiceFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataServiceFolder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServiceFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataServiceFolderRequest $request
     *
     * @return GetDataServiceFolderResponse
     */
    public function getDataServiceFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceFolderWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDataServiceGroupResponse
     */
    public function getDataServiceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataServiceGroup',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataServiceGroupRequest $request
     *
     * @return GetDataServiceGroupResponse
     */
    public function getDataServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServicePublishedApiRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataServicePublishedApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServicePublishedApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataServicePublishedApiRequest $request
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServicePublishedApiWithOptions($request, $runtime);
    }

    /**
     * @param GetDataSourceMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDataSourceMetaResponse
     */
    public function getDataSourceMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasourceName)) {
            $query['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataSourceMeta',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataSourceMetaRequest $request
     *
     * @return GetDataSourceMetaResponse
     */
    public function getDataSourceMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetDeploymentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deploymentId)) {
            $body['DeploymentId'] = $request->deploymentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDeployment',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeploymentRequest $request
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param GetFileRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
     */
    public function getFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFileRequest $request
     *
     * @return GetFileResponse
     */
    public function getFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileWithOptions($request, $runtime);
    }

    /**
     * @param GetFileTypeStatisticRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetFileTypeStatisticResponse
     */
    public function getFileTypeStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFileTypeStatistic',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileTypeStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFileTypeStatisticRequest $request
     *
     * @return GetFileTypeStatisticResponse
     */
    public function getFileTypeStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileTypeStatisticWithOptions($request, $runtime);
    }

    /**
     * @param GetFileVersionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileVersion)) {
            $body['FileVersion'] = $request->fileVersion;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFileVersion',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFileVersionRequest $request
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetFolderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetFolderResponse
     */
    public function getFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->folderPath)) {
            $body['FolderPath'] = $request->folderPath;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFolder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFolderRequest $request
     *
     * @return GetFolderResponse
     */
    public function getFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFolderWithOptions($request, $runtime);
    }

    /**
     * @param GetIDEEventDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetIDEEventDetailResponse
     */
    public function getIDEEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->messageId)) {
            $body['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIDEEventDetail',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIDEEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIDEEventDetailRequest $request
     *
     * @return GetIDEEventDetailResponse
     */
    public function getIDEEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIDEEventDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceConsumeTimeRankRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInstanceConsumeTimeRankResponse
     */
    public function getInstanceConsumeTimeRankWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceConsumeTimeRank',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceConsumeTimeRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceConsumeTimeRankRequest $request
     *
     * @return GetInstanceConsumeTimeRankResponse
     */
    public function getInstanceConsumeTimeRank($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceConsumeTimeRankWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceCountTrendRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceCountTrendResponse
     */
    public function getInstanceCountTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beginDate)) {
            $body['BeginDate'] = $request->beginDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceCountTrend',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceCountTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceCountTrendRequest $request
     *
     * @return GetInstanceCountTrendResponse
     */
    public function getInstanceCountTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceCountTrendWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceErrorRankRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetInstanceErrorRankResponse
     */
    public function getInstanceErrorRankWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceErrorRank',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceErrorRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceErrorRankRequest $request
     *
     * @return GetInstanceErrorRankResponse
     */
    public function getInstanceErrorRank($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceErrorRankWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceLog',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceLogRequest $request
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceStatusCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceStatusCountResponse
     */
    public function getInstanceStatusCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceStatusCount',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceStatusCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceStatusCountRequest $request
     *
     * @return GetInstanceStatusCountResponse
     */
    public function getInstanceStatusCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStatusCountWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceStatusStatisticRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInstanceStatusStatisticResponse
     */
    public function getInstanceStatusStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->dagType)) {
            $body['DagType'] = $request->dagType;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->schedulerType)) {
            $body['SchedulerType'] = $request->schedulerType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceStatusStatistic',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceStatusStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceStatusStatisticRequest $request
     *
     * @return GetInstanceStatusStatisticResponse
     */
    public function getInstanceStatusStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStatusStatisticWithOptions($request, $runtime);
    }

    /**
     * @param GetManualDagInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetManualDagInstancesResponse
     */
    public function getManualDagInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dagId)) {
            $body['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetManualDagInstances',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetManualDagInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetManualDagInstancesRequest $request
     *
     * @return GetManualDagInstancesResponse
     */
    public function getManualDagInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManualDagInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentCategoryId)) {
            $query['ParentCategoryId'] = $request->parentCategoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaCategoryRequest $request
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaColumnLineageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->columnGuid)) {
            $query['ColumnGuid'] = $request->columnGuid;
        }
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaColumnLineage',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaColumnLineageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaColumnLineageRequest $request
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaColumnLineageWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaDBInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaDBInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaDBInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaDBInfoRequest $request
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaDBTableListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGuid)) {
            $query['AppGuid'] = $request->appGuid;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaDBTableList',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaDBTableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaDBTableListRequest $request
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBTableListWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableBasicInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableBasicInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableBasicInfoRequest $request
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableChangeLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeType)) {
            $body['ChangeType'] = $request->changeType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->objectType)) {
            $body['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $body['TableGuid'] = $request->tableGuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableChangeLog',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableChangeLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableChangeLogRequest $request
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableChangeLogWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableColumnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableColumn',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableColumnRequest $request
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableColumnWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableFullInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableFullInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableFullInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableFullInfoRequest $request
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableFullInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableIntroWikiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWikiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->wikiVersion)) {
            $query['WikiVersion'] = $request->wikiVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableIntroWiki',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableIntroWikiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableIntroWikiRequest $request
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWiki($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableIntroWikiWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableLineageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->nextPrimaryKey)) {
            $query['NextPrimaryKey'] = $request->nextPrimaryKey;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableLineage',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableLineageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableLineageRequest $request
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableLineageWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableListByCategoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableListByCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableListByCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableListByCategoryRequest $request
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableListByCategoryWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableOutputRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableOutput',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableOutputRequest $request
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableOutputWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTablePartitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTablePartition',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTablePartitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTablePartitionRequest $request
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTablePartitionWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableThemeLevelRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMetaTableThemeLevelResponse
     */
    public function getMetaTableThemeLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetaTableThemeLevel',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetaTableThemeLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMetaTableThemeLevelRequest $request
     *
     * @return GetMetaTableThemeLevelResponse
     */
    public function getMetaTableThemeLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableThemeLevelWithOptions($request, $runtime);
    }

    /**
     * @param GetMigrationProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMigrationProcessResponse
     */
    public function getMigrationProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->migrationId)) {
            $body['MigrationId'] = $request->migrationId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMigrationProcess',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMigrationProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMigrationProcessRequest $request
     *
     * @return GetMigrationProcessResponse
     */
    public function getMigrationProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMigrationProcessWithOptions($request, $runtime);
    }

    /**
     * @param GetMigrationSummaryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMigrationSummaryResponse
     */
    public function getMigrationSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->migrationId)) {
            $body['MigrationId'] = $request->migrationId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMigrationSummary',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMigrationSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMigrationSummaryRequest $request
     *
     * @return GetMigrationSummaryResponse
     */
    public function getMigrationSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMigrationSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetNodeResponse
     */
    public function getNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNode',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeRequest $request
     *
     * @return GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeChildrenRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetNodeChildrenResponse
     */
    public function getNodeChildrenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeChildren',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeChildrenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeChildrenRequest $request
     *
     * @return GetNodeChildrenResponse
     */
    public function getNodeChildren($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeChildrenWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeCode',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeCodeRequest $request
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeCodeWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeOnBaselineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineId)) {
            $body['BaselineId'] = $request->baselineId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeOnBaseline',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeOnBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeOnBaselineRequest $request
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeOnBaselineWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeParentsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNodeParentsResponse
     */
    public function getNodeParentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeParents',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeParentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeParentsRequest $request
     *
     * @return GetNodeParentsResponse
     */
    public function getNodeParents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeParentsWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeTypeListInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNodeTypeListInfoResponse
     */
    public function getNodeTypeListInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->locale)) {
            $body['Locale'] = $request->locale;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeTypeListInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeTypeListInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeTypeListInfoRequest $request
     *
     * @return GetNodeTypeListInfoResponse
     */
    public function getNodeTypeListInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeTypeListInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetOpRiskDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOpRiskDataResponse
     */
    public function getOpRiskDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOpRiskData',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOpRiskDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOpRiskDataRequest $request
     *
     * @return GetOpRiskDataResponse
     */
    public function getOpRiskData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpRiskDataWithOptions($request, $runtime);
    }

    /**
     * @param GetOpSensitiveDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOpSensitiveDataResponse
     */
    public function getOpSensitiveDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOpSensitiveData',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOpSensitiveDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOpSensitiveDataRequest $request
     *
     * @return GetOpSensitiveDataResponse
     */
    public function getOpSensitiveData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpSensitiveDataWithOptions($request, $runtime);
    }

    /**
     * @param GetPermissionApplyOrderDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetPermissionApplyOrderDetailResponse
     */
    public function getPermissionApplyOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPermissionApplyOrderDetail',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPermissionApplyOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPermissionApplyOrderDetailRequest $request
     *
     * @return GetPermissionApplyOrderDetailResponse
     */
    public function getPermissionApplyOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermissionApplyOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectDetail',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProjectDetailRequest $request
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->matchExpression)) {
            $body['MatchExpression'] = $request->matchExpression;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQualityEntity',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityEntityRequest $request
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityFollowerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQualityFollower',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityFollowerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityFollowerRequest $request
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQualityRule',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityRuleRequest $request
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetRemindRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRemindResponse
     */
    public function getRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->remindId)) {
            $body['RemindId'] = $request->remindId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRemind',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRemindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRemindRequest $request
     *
     * @return GetRemindResponse
     */
    public function getRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemindWithOptions($request, $runtime);
    }

    /**
     * @param GetSensitiveDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSensitiveDataResponse
     */
    public function getSensitiveDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSensitiveData',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSensitiveDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSensitiveDataRequest $request
     *
     * @return GetSensitiveDataResponse
     */
    public function getSensitiveData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSensitiveDataWithOptions($request, $runtime);
    }

    /**
     * @param GetSuccessInstanceTrendRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public function getSuccessInstanceTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSuccessInstanceTrend',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSuccessInstanceTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSuccessInstanceTrendRequest $request
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public function getSuccessInstanceTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuccessInstanceTrendWithOptions($request, $runtime);
    }

    /**
     * @param GetTopicRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTopicResponse
     */
    public function getTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->topicId)) {
            $body['TopicId'] = $request->topicId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTopic',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTopicRequest $request
     *
     * @return GetTopicResponse
     */
    public function getTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicWithOptions($request, $runtime);
    }

    /**
     * @param GetTopicInfluenceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->topicId)) {
            $body['TopicId'] = $request->topicId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTopicInfluence',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTopicInfluenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTopicInfluenceRequest $request
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicInfluenceWithOptions($request, $runtime);
    }

    /**
     * @param ImportDataSourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportDataSourcesResponse
     */
    public function importDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSources)) {
            $query['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportDataSources',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportDataSourcesRequest $request
     *
     * @return ImportDataSourcesResponse
     */
    public function importDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListAlertMessagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertMethods)) {
            $body['AlertMethods'] = $request->alertMethods;
        }
        if (!Utils::isUnset($request->alertRuleTypes)) {
            $body['AlertRuleTypes'] = $request->alertRuleTypes;
        }
        if (!Utils::isUnset($request->alertUser)) {
            $body['AlertUser'] = $request->alertUser;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $body['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remindId)) {
            $body['RemindId'] = $request->remindId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAlertMessages',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlertMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlertMessagesRequest $request
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertMessagesWithOptions($request, $runtime);
    }

    /**
     * @param ListBaselineConfigsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineTypes)) {
            $body['BaselineTypes'] = $request->baselineTypes;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->searchText)) {
            $body['SearchText'] = $request->searchText;
        }
        if (!Utils::isUnset($request->useflag)) {
            $body['Useflag'] = $request->useflag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBaselineConfigs',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBaselineConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBaselineConfigsRequest $request
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineConfigsWithOptions($request, $runtime);
    }

    /**
     * @param ListBaselineStatusesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineTypes)) {
            $body['BaselineTypes'] = $request->baselineTypes;
        }
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->finishStatus)) {
            $body['FinishStatus'] = $request->finishStatus;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->searchText)) {
            $body['SearchText'] = $request->searchText;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->topicId)) {
            $body['TopicId'] = $request->topicId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBaselineStatuses',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBaselineStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBaselineStatusesRequest $request
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineStatusesWithOptions($request, $runtime);
    }

    /**
     * @param ListBusinessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBusinessResponse
     */
    public function listBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBusiness',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBusinessRequest $request
     *
     * @return ListBusinessResponse
     */
    public function listBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusinessWithOptions($request, $runtime);
    }

    /**
     * @param ListCalcEnginesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEnginesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calcEngineType)) {
            $query['CalcEngineType'] = $request->calcEngineType;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCalcEngines',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCalcEnginesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCalcEnginesRequest $request
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEngines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalcEnginesWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConnectionsResponse
     */
    public function listConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnections',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionsRequest $request
     *
     * @return ListConnectionsResponse
     */
    public function listConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListDIProjectConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDIProjectConfigResponse
     */
    public function listDIProjectConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDIProjectConfig',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDIProjectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDIProjectConfigRequest $request
     *
     * @return ListDIProjectConfigResponse
     */
    public function listDIProjectConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDIProjectConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListDagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListDagsResponse
     */
    public function listDagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->opSeq)) {
            $body['OpSeq'] = $request->opSeq;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDags',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDagsRequest $request
     *
     * @return ListDagsResponse
     */
    public function listDags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDagsWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceApiAuthoritiesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->apiNameKeyword)) {
            $body['ApiNameKeyword'] = $request->apiNameKeyword;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServiceApiAuthorities',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServiceApiAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServiceApiAuthoritiesRequest $request
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApiAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiNameKeyword)) {
            $body['ApiNameKeyword'] = $request->apiNameKeyword;
        }
        if (!Utils::isUnset($request->apiPathKeyword)) {
            $body['ApiPathKeyword'] = $request->apiPathKeyword;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServiceApis',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServiceApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServiceApisRequest $request
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApisWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceApplicationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectIdList)) {
            $body['ProjectIdList'] = $request->projectIdList;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServiceApplications',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServiceApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServiceApplicationsRequest $request
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceAuthorizedApisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->apiNameKeyword)) {
            $body['ApiNameKeyword'] = $request->apiNameKeyword;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServiceAuthorizedApis',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServiceAuthorizedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServiceAuthorizedApisRequest $request
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceFoldersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDataServiceFoldersResponse
     */
    public function listDataServiceFoldersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderNameKeyword)) {
            $body['FolderNameKeyword'] = $request->folderNameKeyword;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServiceFolders',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServiceFoldersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServiceFoldersRequest $request
     *
     * @return ListDataServiceFoldersResponse
     */
    public function listDataServiceFolders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceFoldersWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServiceGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataServiceGroupsResponse
     */
    public function listDataServiceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupNameKeyword)) {
            $body['GroupNameKeyword'] = $request->groupNameKeyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServiceGroups',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServiceGroupsRequest $request
     *
     * @return ListDataServiceGroupsResponse
     */
    public function listDataServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListDataServicePublishedApisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiNameKeyword)) {
            $body['ApiNameKeyword'] = $request->apiNameKeyword;
        }
        if (!Utils::isUnset($request->apiPathKeyword)) {
            $body['ApiPathKeyword'] = $request->apiPathKeyword;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataServicePublishedApis',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataServicePublishedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataServicePublishedApisRequest $request
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServicePublishedApisWithOptions($request, $runtime);
    }

    /**
     * @param ListDataSourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSources',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListDeploymentsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creator)) {
            $body['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->endCreateTime)) {
            $body['EndCreateTime'] = $request->endCreateTime;
        }
        if (!Utils::isUnset($request->endExecuteTime)) {
            $body['EndExecuteTime'] = $request->endExecuteTime;
        }
        if (!Utils::isUnset($request->executor)) {
            $body['Executor'] = $request->executor;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDeployments',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeploymentsRequest $request
     *
     * @return ListDeploymentsResponse
     */
    public function listDeployments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentsWithOptions($request, $runtime);
    }

    /**
     * @param ListFileTypeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFileTypeResponse
     */
    public function listFileTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->locale)) {
            $body['Locale'] = $request->locale;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFileType',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFileTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFileTypeRequest $request
     *
     * @return ListFileTypeResponse
     */
    public function listFileType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileTypeWithOptions($request, $runtime);
    }

    /**
     * @param ListFileVersionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFileVersions',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFileVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFileVersionsRequest $request
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListFilesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFilesResponse
     */
    public function listFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileFolderPath)) {
            $body['FileFolderPath'] = $request->fileFolderPath;
        }
        if (!Utils::isUnset($request->fileTypes)) {
            $body['FileTypes'] = $request->fileTypes;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->useType)) {
            $body['UseType'] = $request->useType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFiles',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFilesRequest $request
     *
     * @return ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListFoldersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFoldersResponse
     */
    public function listFoldersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentFolderPath)) {
            $body['ParentFolderPath'] = $request->parentFolderPath;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFolders',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFoldersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFoldersRequest $request
     *
     * @return ListFoldersResponse
     */
    public function listFolders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoldersWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceAmountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceAmountResponse
     */
    public function listInstanceAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beginDate)) {
            $body['BeginDate'] = $request->beginDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceAmount',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceAmountRequest $request
     *
     * @return ListInstanceAmountResponse
     */
    public function listInstanceAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceAmountWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beginBizdate)) {
            $body['BeginBizdate'] = $request->beginBizdate;
        }
        if (!Utils::isUnset($request->bizName)) {
            $body['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->dagId)) {
            $body['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->endBizdate)) {
            $body['EndBizdate'] = $request->endBizdate;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->programType)) {
            $body['ProgramType'] = $request->programType;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListManualDagInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListManualDagInstancesResponse
     */
    public function listManualDagInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dagId)) {
            $body['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListManualDagInstances',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListManualDagInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListManualDagInstancesRequest $request
     *
     * @return ListManualDagInstancesResponse
     */
    public function listManualDagInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManualDagInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListMetaDBRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMetaDBResponse
     */
    public function listMetaDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMetaDB',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMetaDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMetaDBRequest $request
     *
     * @return ListMetaDBResponse
     */
    public function listMetaDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMetaDBWithOptions($request, $runtime);
    }

    /**
     * @param ListNodeIORequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIOWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ioType)) {
            $body['IoType'] = $request->ioType;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodeIO',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeIOResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodeIORequest $request
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIO($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeIOWithOptions($request, $runtime);
    }

    /**
     * @param ListNodeInputOrOutputRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListNodeInputOrOutputResponse
     */
    public function listNodeInputOrOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ioType)) {
            $body['IoType'] = $request->ioType;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodeInputOrOutput',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeInputOrOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodeInputOrOutputRequest $request
     *
     * @return ListNodeInputOrOutputResponse
     */
    public function listNodeInputOrOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInputOrOutputWithOptions($request, $runtime);
    }

    /**
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizName)) {
            $body['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->programType)) {
            $body['ProgramType'] = $request->programType;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @param ListNodesByBaselineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListNodesByBaselineResponse
     */
    public function listNodesByBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baselineId)) {
            $body['BaselineId'] = $request->baselineId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodesByBaseline',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesByBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesByBaselineRequest $request
     *
     * @return ListNodesByBaselineResponse
     */
    public function listNodesByBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesByBaselineWithOptions($request, $runtime);
    }

    /**
     * @param ListNodesByOutputRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListNodesByOutputResponse
     */
    public function listNodesByOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outputs)) {
            $body['Outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodesByOutput',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesByOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesByOutputRequest $request
     *
     * @return ListNodesByOutputResponse
     */
    public function listNodesByOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesByOutputWithOptions($request, $runtime);
    }

    /**
     * @param ListPermissionApplyOrdersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPermissionApplyOrdersResponse
     */
    public function listPermissionApplyOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->flowStatus)) {
            $query['FlowStatus'] = $request->flowStatus;
        }
        if (!Utils::isUnset($request->maxComputeProjectName)) {
            $query['MaxComputeProjectName'] = $request->maxComputeProjectName;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPermissionApplyOrders',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPermissionApplyOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPermissionApplyOrdersRequest $request
     *
     * @return ListPermissionApplyOrdersResponse
     */
    public function listPermissionApplyOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionApplyOrdersWithOptions($request, $runtime);
    }

    /**
     * @param ListProgramTypeCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListProgramTypeCountResponse
     */
    public function listProgramTypeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProgramTypeCount',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProgramTypeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProgramTypeCountRequest $request
     *
     * @return ListProgramTypeCountResponse
     */
    public function listProgramTypeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProgramTypeCountWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectIdsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListProjectIdsResponse
     */
    public function listProjectIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectIds',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectIdsRequest $request
     *
     * @return ListProjectIdsResponse
     */
    public function listProjectIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectIdsWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectMembersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectMembers',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectMembersRequest $request
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectRolesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectRoles',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectRolesRequest $request
     *
     * @return ListProjectRolesResponse
     */
    public function listProjectRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectRolesWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @param ListQualityResultsByEntityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListQualityResultsByEntityResponse
     */
    public function listQualityResultsByEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQualityResultsByEntity',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQualityResultsByEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListQualityResultsByEntityRequest $request
     *
     * @return ListQualityResultsByEntityResponse
     */
    public function listQualityResultsByEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityResultsByEntityWithOptions($request, $runtime);
    }

    /**
     * @param ListQualityResultsByRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListQualityResultsByRuleResponse
     */
    public function listQualityResultsByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQualityResultsByRule',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQualityResultsByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListQualityResultsByRuleRequest $request
     *
     * @return ListQualityResultsByRuleResponse
     */
    public function listQualityResultsByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityResultsByRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListQualityRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQualityRules',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQualityRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListQualityRulesRequest $request
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListRefDISyncTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListRefDISyncTasksResponse
     */
    public function listRefDISyncTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasourceName)) {
            $query['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->refType)) {
            $query['RefType'] = $request->refType;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRefDISyncTasks',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRefDISyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRefDISyncTasksRequest $request
     *
     * @return ListRefDISyncTasksResponse
     */
    public function listRefDISyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRefDISyncTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListRemindsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRemindsResponse
     */
    public function listRemindsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertTarget)) {
            $body['AlertTarget'] = $request->alertTarget;
        }
        if (!Utils::isUnset($request->founder)) {
            $body['Founder'] = $request->founder;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remindTypes)) {
            $body['RemindTypes'] = $request->remindTypes;
        }
        if (!Utils::isUnset($request->searchText)) {
            $body['SearchText'] = $request->searchText;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListReminds',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemindsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRemindsRequest $request
     *
     * @return ListRemindsResponse
     */
    public function listReminds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemindsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizExtKey)) {
            $query['BizExtKey'] = $request->bizExtKey;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->resourceGroupType)) {
            $query['ResourceGroupType'] = $request->resourceGroupType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceGroups',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceGroupsRequest $request
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListSuccessInstanceAmountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSuccessInstanceAmountResponse
     */
    public function listSuccessInstanceAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSuccessInstanceAmount',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSuccessInstanceAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSuccessInstanceAmountRequest $request
     *
     * @return ListSuccessInstanceAmountResponse
     */
    public function listSuccessInstanceAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSuccessInstanceAmountWithOptions($request, $runtime);
    }

    /**
     * @param ListTableLevelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableLevelResponse
     */
    public function listTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTableLevel',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTableLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTableLevelRequest $request
     *
     * @return ListTableLevelResponse
     */
    public function listTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param ListTableThemeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTableThemeResponse
     */
    public function listTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTableTheme',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTableThemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTableThemeRequest $request
     *
     * @return ListTableThemeResponse
     */
    public function listTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param ListTopicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTopicsResponse
     */
    public function listTopicsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beginTime)) {
            $body['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->topicStatuses)) {
            $body['TopicStatuses'] = $request->topicStatuses;
        }
        if (!Utils::isUnset($request->topicTypes)) {
            $body['TopicTypes'] = $request->topicTypes;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTopics',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTopicsRequest $request
     *
     * @return ListTopicsResponse
     */
    public function listTopics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicsWithOptions($request, $runtime);
    }

    /**
     * @param PublishDataServiceApiRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishDataServiceApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishDataServiceApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishDataServiceApiRequest $request
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param QueryDISyncTaskConfigProcessResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryDISyncTaskConfigProcessResultResponse
     */
    public function queryDISyncTaskConfigProcessResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asyncProcessId)) {
            $query['AsyncProcessId'] = $request->asyncProcessId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDISyncTaskConfigProcessResult',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDISyncTaskConfigProcessResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDISyncTaskConfigProcessResultRequest $request
     *
     * @return QueryDISyncTaskConfigProcessResultResponse
     */
    public function queryDISyncTaskConfigProcessResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDISyncTaskConfigProcessResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryPublicModelEngineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPublicModelEngineResponse
     */
    public function queryPublicModelEngineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryPublicModelEngine',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPublicModelEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPublicModelEngineRequest $request
     *
     * @return QueryPublicModelEngineResponse
     */
    public function queryPublicModelEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPublicModelEngineWithOptions($request, $runtime);
    }

    /**
     * @param RemoveProjectMemberFromRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveProjectMemberFromRoleResponse
     */
    public function removeProjectMemberFromRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleCode)) {
            $query['RoleCode'] = $request->roleCode;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveProjectMemberFromRole',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveProjectMemberFromRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveProjectMemberFromRoleRequest $request
     *
     * @return RemoveProjectMemberFromRoleResponse
     */
    public function removeProjectMemberFromRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeProjectMemberFromRoleWithOptions($request, $runtime);
    }

    /**
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestartInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResumeInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RevokeColumnPermissionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RevokeColumnPermissionResponse
     */
    public function revokeColumnPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columns)) {
            $query['Columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->maxComputeProjectName)) {
            $query['MaxComputeProjectName'] = $request->maxComputeProjectName;
        }
        if (!Utils::isUnset($request->revokeUserId)) {
            $query['RevokeUserId'] = $request->revokeUserId;
        }
        if (!Utils::isUnset($request->revokeUserName)) {
            $query['RevokeUserName'] = $request->revokeUserName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeColumnPermission',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeColumnPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeColumnPermissionRequest $request
     *
     * @return RevokeColumnPermissionResponse
     */
    public function revokeColumnPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeColumnPermissionWithOptions($request, $runtime);
    }

    /**
     * @param RevokeTablePermissionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeTablePermissionResponse
     */
    public function revokeTablePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actions)) {
            $query['Actions'] = $request->actions;
        }
        if (!Utils::isUnset($request->maxComputeProjectName)) {
            $query['MaxComputeProjectName'] = $request->maxComputeProjectName;
        }
        if (!Utils::isUnset($request->revokeUserId)) {
            $query['RevokeUserId'] = $request->revokeUserId;
        }
        if (!Utils::isUnset($request->revokeUserName)) {
            $query['RevokeUserName'] = $request->revokeUserName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeTablePermission',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeTablePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeTablePermissionRequest $request
     *
     * @return RevokeTablePermissionResponse
     */
    public function revokeTablePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeTablePermissionWithOptions($request, $runtime);
    }

    /**
     * @param RunCycleDagNodesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunCycleDagNodesResponse
     */
    public function runCycleDagNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizBeginTime)) {
            $body['BizBeginTime'] = $request->bizBeginTime;
        }
        if (!Utils::isUnset($request->bizEndTime)) {
            $body['BizEndTime'] = $request->bizEndTime;
        }
        if (!Utils::isUnset($request->endBizDate)) {
            $body['EndBizDate'] = $request->endBizDate;
        }
        if (!Utils::isUnset($request->excludeNodeIds)) {
            $body['ExcludeNodeIds'] = $request->excludeNodeIds;
        }
        if (!Utils::isUnset($request->includeNodeIds)) {
            $body['IncludeNodeIds'] = $request->includeNodeIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeParams)) {
            $body['NodeParams'] = $request->nodeParams;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $body['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->rootNodeId)) {
            $body['RootNodeId'] = $request->rootNodeId;
        }
        if (!Utils::isUnset($request->startBizDate)) {
            $body['StartBizDate'] = $request->startBizDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCycleDagNodes',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCycleDagNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunCycleDagNodesRequest $request
     *
     * @return RunCycleDagNodesResponse
     */
    public function runCycleDagNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCycleDagNodesWithOptions($request, $runtime);
    }

    /**
     * @param RunManualDagNodesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunManualDagNodesResponse
     */
    public function runManualDagNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->dagParameters)) {
            $body['DagParameters'] = $request->dagParameters;
        }
        if (!Utils::isUnset($request->excludeNodeIds)) {
            $body['ExcludeNodeIds'] = $request->excludeNodeIds;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->includeNodeIds)) {
            $body['IncludeNodeIds'] = $request->includeNodeIds;
        }
        if (!Utils::isUnset($request->nodeParameters)) {
            $body['NodeParameters'] = $request->nodeParameters;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunManualDagNodes',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunManualDagNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunManualDagNodesRequest $request
     *
     * @return RunManualDagNodesResponse
     */
    public function runManualDagNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runManualDagNodesWithOptions($request, $runtime);
    }

    /**
     * @param RunSmokeTestRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunSmokeTestResponse
     */
    public function runSmokeTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizdate)) {
            $body['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeParams)) {
            $body['NodeParams'] = $request->nodeParams;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunSmokeTest',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunSmokeTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunSmokeTestRequest $request
     *
     * @return RunSmokeTestResponse
     */
    public function runSmokeTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSmokeTestWithOptions($request, $runtime);
    }

    /**
     * @param RunTriggerNodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RunTriggerNodeResponse
     */
    public function runTriggerNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->cycleTime)) {
            $body['CycleTime'] = $request->cycleTime;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunTriggerNode',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunTriggerNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunTriggerNodeRequest $request
     *
     * @return RunTriggerNodeResponse
     */
    public function runTriggerNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTriggerNodeWithOptions($request, $runtime);
    }

    /**
     * @param ScanSensitiveDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ScanSensitiveDataResponse
     */
    public function scanSensitiveDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanSensitiveData',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanSensitiveDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanSensitiveDataRequest $request
     *
     * @return ScanSensitiveDataResponse
     */
    public function scanSensitiveData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanSensitiveDataWithOptions($request, $runtime);
    }

    /**
     * @param SearchMetaTablesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGuid)) {
            $query['AppGuid'] = $request->appGuid;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMetaTables',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMetaTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchMetaTablesRequest $request
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMetaTablesWithOptions($request, $runtime);
    }

    /**
     * @param SearchNodesByOutputRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchNodesByOutputResponse
     */
    public function searchNodesByOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outputs)) {
            $body['Outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchNodesByOutput',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchNodesByOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchNodesByOutputRequest $request
     *
     * @return SearchNodesByOutputResponse
     */
    public function searchNodesByOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNodesByOutputWithOptions($request, $runtime);
    }

    /**
     * @param SetDataSourceShareRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDataSourceShareResponse
     */
    public function setDataSourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasourceName)) {
            $query['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectPermissions)) {
            $query['ProjectPermissions'] = $request->projectPermissions;
        }
        if (!Utils::isUnset($request->userPermissions)) {
            $query['UserPermissions'] = $request->userPermissions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDataSourceShare',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataSourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataSourceShareRequest $request
     *
     * @return SetDataSourceShareResponse
     */
    public function setDataSourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataSourceShareWithOptions($request, $runtime);
    }

    /**
     * @param SetSuccessInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetSuccessInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSuccessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSuccessInstanceRequest $request
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuccessInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartDISyncInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartDISyncInstanceResponse
     */
    public function startDISyncInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->startParam)) {
            $query['StartParam'] = $request->startParam;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDISyncInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDISyncInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartDISyncInstanceRequest $request
     *
     * @return StartDISyncInstanceResponse
     */
    public function startDISyncInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDISyncInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartMigrationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartMigrationResponse
     */
    public function startMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->migrationId)) {
            $body['MigrationId'] = $request->migrationId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartMigration',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartMigrationRequest $request
     *
     * @return StartMigrationResponse
     */
    public function startMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMigrationWithOptions($request, $runtime);
    }

    /**
     * @param StopDISyncInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopDISyncInstanceResponse
     */
    public function stopDISyncInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDISyncInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDISyncInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopDISyncInstanceRequest $request
     *
     * @return StopDISyncInstanceResponse
     */
    public function stopDISyncInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDISyncInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitFileResponse
     */
    public function submitFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFileRequest $request
     *
     * @return SubmitFileResponse
     */
    public function submitFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFileWithOptions($request, $runtime);
    }

    /**
     * @param SuspendInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuspendInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendInstanceRequest $request
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendInstanceWithOptions($request, $runtime);
    }

    /**
     * @param TerminateDISyncInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TerminateDISyncInstanceResponse
     */
    public function terminateDISyncInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateDISyncInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateDISyncInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TerminateDISyncInstanceRequest $request
     *
     * @return TerminateDISyncInstanceResponse
     */
    public function terminateDISyncInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateDISyncInstanceWithOptions($request, $runtime);
    }

    /**
     * @param TestNetworkConnectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TestNetworkConnectionResponse
     */
    public function testNetworkConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasourceName)) {
            $query['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $query['ResourceGroup'] = $request->resourceGroup;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TestNetworkConnection',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestNetworkConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestNetworkConnectionRequest $request
     *
     * @return TestNetworkConnectionResponse
     */
    public function testNetworkConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testNetworkConnectionWithOptions($request, $runtime);
    }

    /**
     * @param TopTenElapsedTimeInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TopTenElapsedTimeInstanceResponse
     */
    public function topTenElapsedTimeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TopTenElapsedTimeInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TopTenElapsedTimeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TopTenElapsedTimeInstanceRequest $request
     *
     * @return TopTenElapsedTimeInstanceResponse
     */
    public function topTenElapsedTimeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->topTenElapsedTimeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param TopTenErrorTimesInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TopTenErrorTimesInstanceResponse
     */
    public function topTenErrorTimesInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TopTenErrorTimesInstance',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TopTenErrorTimesInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TopTenErrorTimesInstanceRequest $request
     *
     * @return TopTenErrorTimesInstanceResponse
     */
    public function topTenErrorTimesInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->topTenErrorTimesInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBusinessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessId)) {
            $body['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->businessName)) {
            $body['BusinessName'] = $request->businessName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBusiness',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBusinessRequest $request
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusinessWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionId)) {
            $query['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnection',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConnectionRequest $request
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDIProjectConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDIProjectConfigResponse
     */
    public function updateDIProjectConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->projectConfig)) {
            $query['ProjectConfig'] = $request->projectConfig;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDIProjectConfig',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDIProjectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDIProjectConfigRequest $request
     *
     * @return UpdateDIProjectConfigResponse
     */
    public function updateDIProjectConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDIProjectConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDISyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDISyncTaskResponse
     */
    public function updateDISyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskContent)) {
            $query['TaskContent'] = $request->taskContent;
        }
        if (!Utils::isUnset($request->taskParam)) {
            $query['TaskParam'] = $request->taskParam;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDISyncTask',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDISyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDISyncTaskRequest $request
     *
     * @return UpdateDISyncTaskResponse
     */
    public function updateDISyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDISyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDataServiceApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiDescription)) {
            $body['ApiDescription'] = $request->apiDescription;
        }
        if (!Utils::isUnset($request->apiId)) {
            $body['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiPath)) {
            $body['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->protocols)) {
            $body['Protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->registrationDetails)) {
            $body['RegistrationDetails'] = $request->registrationDetails;
        }
        if (!Utils::isUnset($request->requestMethod)) {
            $body['RequestMethod'] = $request->requestMethod;
        }
        if (!Utils::isUnset($request->responseContentType)) {
            $body['ResponseContentType'] = $request->responseContentType;
        }
        if (!Utils::isUnset($request->scriptDetails)) {
            $body['ScriptDetails'] = $request->scriptDetails;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->visibleRange)) {
            $body['VisibleRange'] = $request->visibleRange;
        }
        if (!Utils::isUnset($request->wizardDetails)) {
            $body['WizardDetails'] = $request->wizardDetails;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataServiceApi',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataServiceApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDataServiceApiRequest $request
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSource',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDataSourceRequest $request
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->advancedSettings)) {
            $body['AdvancedSettings'] = $request->advancedSettings;
        }
        if (!Utils::isUnset($request->autoParsing)) {
            $body['AutoParsing'] = $request->autoParsing;
        }
        if (!Utils::isUnset($request->autoRerunIntervalMillis)) {
            $body['AutoRerunIntervalMillis'] = $request->autoRerunIntervalMillis;
        }
        if (!Utils::isUnset($request->autoRerunTimes)) {
            $body['AutoRerunTimes'] = $request->autoRerunTimes;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $body['ConnectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->cronExpress)) {
            $body['CronExpress'] = $request->cronExpress;
        }
        if (!Utils::isUnset($request->cycleType)) {
            $body['CycleType'] = $request->cycleType;
        }
        if (!Utils::isUnset($request->dependentNodeIdList)) {
            $body['DependentNodeIdList'] = $request->dependentNodeIdList;
        }
        if (!Utils::isUnset($request->dependentType)) {
            $body['DependentType'] = $request->dependentType;
        }
        if (!Utils::isUnset($request->endEffectDate)) {
            $body['EndEffectDate'] = $request->endEffectDate;
        }
        if (!Utils::isUnset($request->fileDescription)) {
            $body['FileDescription'] = $request->fileDescription;
        }
        if (!Utils::isUnset($request->fileFolderPath)) {
            $body['FileFolderPath'] = $request->fileFolderPath;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->inputList)) {
            $body['InputList'] = $request->inputList;
        }
        if (!Utils::isUnset($request->outputList)) {
            $body['OutputList'] = $request->outputList;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->paraValue)) {
            $body['ParaValue'] = $request->paraValue;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->rerunMode)) {
            $body['RerunMode'] = $request->rerunMode;
        }
        if (!Utils::isUnset($request->resourceGroupIdentifier)) {
            $body['ResourceGroupIdentifier'] = $request->resourceGroupIdentifier;
        }
        if (!Utils::isUnset($request->schedulerType)) {
            $body['SchedulerType'] = $request->schedulerType;
        }
        if (!Utils::isUnset($request->startEffectDate)) {
            $body['StartEffectDate'] = $request->startEffectDate;
        }
        if (!Utils::isUnset($request->startImmediately)) {
            $body['StartImmediately'] = $request->startImmediately;
        }
        if (!Utils::isUnset($request->stop)) {
            $body['Stop'] = $request->stop;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->folderId)) {
            $body['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->folderName)) {
            $body['FolderName'] = $request->folderName;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFolder',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFolderRequest $request
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolderWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIDEEventResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateIDEEventResultResponse
     */
    public function updateIDEEventResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkResult)) {
            $body['CheckResult'] = $request->checkResult;
        }
        if (!Utils::isUnset($request->checkResultTip)) {
            $body['CheckResultTip'] = $request->checkResultTip;
        }
        if (!Utils::isUnset($request->extensionCode)) {
            $body['ExtensionCode'] = $request->extensionCode;
        }
        if (!Utils::isUnset($request->messageId)) {
            $body['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIDEEventResult',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIDEEventResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIDEEventResultRequest $request
     *
     * @return UpdateIDEEventResultResponse
     */
    public function updateIDEEventResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIDEEventResultWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMetaCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetaCategory',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMetaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMetaCategoryRequest $request
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMetaTableRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMetaTableResponse
     */
    public function updateMetaTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caption)) {
            $query['Caption'] = $request->caption;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->newOwnerId)) {
            $query['NewOwnerId'] = $request->newOwnerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $body = [];
        if (!Utils::isUnset($request->addedLabels)) {
            $body['AddedLabels'] = $request->addedLabels;
        }
        if (!Utils::isUnset($request->removedLabels)) {
            $body['RemovedLabels'] = $request->removedLabels;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetaTable',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMetaTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMetaTableRequest $request
     *
     * @return UpdateMetaTableResponse
     */
    public function updateMetaTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaTableWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMetaTableIntroWikiRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateMetaTableIntroWikiResponse
     */
    public function updateMetaTableIntroWikiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetaTableIntroWiki',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMetaTableIntroWikiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMetaTableIntroWikiRequest $request
     *
     * @return UpdateMetaTableIntroWikiResponse
     */
    public function updateMetaTableIntroWiki($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaTableIntroWikiWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNodeOwnerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNodeOwnerResponse
     */
    public function updateNodeOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNodeOwner',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNodeOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNodeOwnerRequest $request
     *
     * @return UpdateNodeOwnerResponse
     */
    public function updateNodeOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeOwnerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNodeRunModeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateNodeRunModeResponse
     */
    public function updateNodeRunModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->projectEnv)) {
            $body['ProjectEnv'] = $request->projectEnv;
        }
        if (!Utils::isUnset($request->schedulerType)) {
            $body['SchedulerType'] = $request->schedulerType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNodeRunMode',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNodeRunModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNodeRunModeRequest $request
     *
     * @return UpdateNodeRunModeResponse
     */
    public function updateNodeRunMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeRunModeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateQualityFollowerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollowerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmMode)) {
            $body['AlarmMode'] = $request->alarmMode;
        }
        if (!Utils::isUnset($request->follower)) {
            $body['Follower'] = $request->follower;
        }
        if (!Utils::isUnset($request->followerId)) {
            $body['FollowerId'] = $request->followerId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateQualityFollower',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQualityFollowerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateQualityFollowerRequest $request
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollower($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->blockType)) {
            $body['BlockType'] = $request->blockType;
        }
        if (!Utils::isUnset($request->checker)) {
            $body['Checker'] = $request->checker;
        }
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->criticalThreshold)) {
            $body['CriticalThreshold'] = $request->criticalThreshold;
        }
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->expectValue)) {
            $body['ExpectValue'] = $request->expectValue;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->methodName)) {
            $body['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->openSwitch)) {
            $body['OpenSwitch'] = $request->openSwitch;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->predictType)) {
            $body['PredictType'] = $request->predictType;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->property)) {
            $body['Property'] = $request->property;
        }
        if (!Utils::isUnset($request->propertyType)) {
            $body['PropertyType'] = $request->propertyType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->trend)) {
            $body['Trend'] = $request->trend;
        }
        if (!Utils::isUnset($request->warningThreshold)) {
            $body['WarningThreshold'] = $request->warningThreshold;
        }
        if (!Utils::isUnset($request->whereCondition)) {
            $body['WhereCondition'] = $request->whereCondition;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateQualityRule',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateQualityRuleRequest $request
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRemindRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateRemindResponse
     */
    public function updateRemindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertInterval)) {
            $body['AlertInterval'] = $request->alertInterval;
        }
        if (!Utils::isUnset($request->alertMethods)) {
            $body['AlertMethods'] = $request->alertMethods;
        }
        if (!Utils::isUnset($request->alertTargets)) {
            $body['AlertTargets'] = $request->alertTargets;
        }
        if (!Utils::isUnset($request->alertUnit)) {
            $body['AlertUnit'] = $request->alertUnit;
        }
        if (!Utils::isUnset($request->baselineIds)) {
            $body['BaselineIds'] = $request->baselineIds;
        }
        if (!Utils::isUnset($request->bizProcessIds)) {
            $body['BizProcessIds'] = $request->bizProcessIds;
        }
        if (!Utils::isUnset($request->detail)) {
            $body['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->dndEnd)) {
            $body['DndEnd'] = $request->dndEnd;
        }
        if (!Utils::isUnset($request->maxAlertTimes)) {
            $body['MaxAlertTimes'] = $request->maxAlertTimes;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $body['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->remindId)) {
            $body['RemindId'] = $request->remindId;
        }
        if (!Utils::isUnset($request->remindName)) {
            $body['RemindName'] = $request->remindName;
        }
        if (!Utils::isUnset($request->remindType)) {
            $body['RemindType'] = $request->remindType;
        }
        if (!Utils::isUnset($request->remindUnit)) {
            $body['RemindUnit'] = $request->remindUnit;
        }
        if (!Utils::isUnset($request->robotUrls)) {
            $body['RobotUrls'] = $request->robotUrls;
        }
        if (!Utils::isUnset($request->useFlag)) {
            $body['UseFlag'] = $request->useFlag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRemind',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRemindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRemindRequest $request
     *
     * @return UpdateRemindResponse
     */
    public function updateRemind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemindWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTableResponse
     */
    public function updateTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGuid)) {
            $query['AppGuid'] = $request->appGuid;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->createIfNotExists)) {
            $query['CreateIfNotExists'] = $request->createIfNotExists;
        }
        if (!Utils::isUnset($request->externalTableType)) {
            $query['ExternalTableType'] = $request->externalTableType;
        }
        if (!Utils::isUnset($request->hasPart)) {
            $query['HasPart'] = $request->hasPart;
        }
        if (!Utils::isUnset($request->isView)) {
            $query['IsView'] = $request->isView;
        }
        if (!Utils::isUnset($request->lifeCycle)) {
            $query['LifeCycle'] = $request->lifeCycle;
        }
        if (!Utils::isUnset($request->location)) {
            $query['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->logicalLevelId)) {
            $query['LogicalLevelId'] = $request->logicalLevelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->physicsLevelId)) {
            $query['PhysicsLevelId'] = $request->physicsLevelId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $body = [];
        if (!Utils::isUnset($request->columns)) {
            $body['Columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $body['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->envType)) {
            $body['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->themes)) {
            $body['Themes'] = $request->themes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTable',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTableRequest $request
     *
     * @return UpdateTableResponse
     */
    public function updateTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableAddColumnRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTableAddColumnResponse
     */
    public function updateTableAddColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableAddColumn',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTableAddColumnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTableAddColumnRequest $request
     *
     * @return UpdateTableAddColumnResponse
     */
    public function updateTableAddColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableAddColumnWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableLevelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTableLevelResponse
     */
    public function updateTableLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->levelId)) {
            $query['LevelId'] = $request->levelId;
        }
        if (!Utils::isUnset($request->levelType)) {
            $query['LevelType'] = $request->levelType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableLevel',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTableLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTableLevelRequest $request
     *
     * @return UpdateTableLevelResponse
     */
    public function updateTableLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableLevelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableModelInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTableModelInfoResponse
     */
    public function updateTableModelInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firstLevelThemeId)) {
            $query['FirstLevelThemeId'] = $request->firstLevelThemeId;
        }
        if (!Utils::isUnset($request->levelId)) {
            $query['LevelId'] = $request->levelId;
        }
        if (!Utils::isUnset($request->levelType)) {
            $query['LevelType'] = $request->levelType;
        }
        if (!Utils::isUnset($request->secondLevelThemeId)) {
            $query['SecondLevelThemeId'] = $request->secondLevelThemeId;
        }
        if (!Utils::isUnset($request->tableGuid)) {
            $query['TableGuid'] = $request->tableGuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableModelInfo',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTableModelInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTableModelInfoRequest $request
     *
     * @return UpdateTableModelInfoResponse
     */
    public function updateTableModelInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableModelInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTableThemeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTableThemeResponse
     */
    public function updateTableThemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->themeId)) {
            $query['ThemeId'] = $request->themeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTableTheme',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTableThemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTableThemeRequest $request
     *
     * @return UpdateTableThemeResponse
     */
    public function updateTableTheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTableThemeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUdfFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->className)) {
            $body['ClassName'] = $request->className;
        }
        if (!Utils::isUnset($request->cmdDescription)) {
            $body['CmdDescription'] = $request->cmdDescription;
        }
        if (!Utils::isUnset($request->example)) {
            $body['Example'] = $request->example;
        }
        if (!Utils::isUnset($request->fileFolderPath)) {
            $body['FileFolderPath'] = $request->fileFolderPath;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->functionType)) {
            $body['FunctionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->parameterDescription)) {
            $body['ParameterDescription'] = $request->parameterDescription;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        if (!Utils::isUnset($request->resources)) {
            $body['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->returnValue)) {
            $body['ReturnValue'] = $request->returnValue;
        }
        if (!Utils::isUnset($request->udfDescription)) {
            $body['UdfDescription'] = $request->udfDescription;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUdfFile',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUdfFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUdfFileRequest $request
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUdfFileWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWorkbenchEventResultRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateWorkbenchEventResultResponse
     */
    public function updateWorkbenchEventResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkResult)) {
            $query['CheckResult'] = $request->checkResult;
        }
        if (!Utils::isUnset($request->checkResultTip)) {
            $query['CheckResultTip'] = $request->checkResultTip;
        }
        if (!Utils::isUnset($request->extensionCode)) {
            $query['ExtensionCode'] = $request->extensionCode;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkbenchEventResult',
            'version'     => '2020-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkbenchEventResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkbenchEventResultRequest $request
     *
     * @return UpdateWorkbenchEventResultResponse
     */
    public function updateWorkbenchEventResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkbenchEventResultWithOptions($request, $runtime);
    }
}
