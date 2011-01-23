<?php

/**
 * This file is automatically generated. Use 'phutil_mapper.php' to rebuild it.
 * @generated
 */

phutil_register_library_map(array(
  'class' =>
  array(
    'Aphront404Response' => 'aphront/response/404',
    'AphrontApplicationConfiguration' => 'aphront/applicationconfiguration',
    'AphrontController' => 'aphront/controller',
    'AphrontDatabaseConnection' => 'storage/connection/base',
    'AphrontDefaultApplicationConfiguration' => 'aphront/default/configuration',
    'AphrontDefaultApplicationController' => 'aphront/default/controller',
    'AphrontDialogResponse' => 'aphront/response/dialog',
    'AphrontDialogView' => 'view/dialog',
    'AphrontErrorView' => 'view/form/error',
    'AphrontFormControl' => 'view/form/control/base',
    'AphrontFormSelectControl' => 'view/form/control/select',
    'AphrontFormSubmitControl' => 'view/form/control/submit',
    'AphrontFormTextAreaControl' => 'view/form/control/textarea',
    'AphrontFormTextControl' => 'view/form/control/text',
    'AphrontFormView' => 'view/form/base',
    'AphrontMySQLDatabaseConnection' => 'storage/connection/mysql',
    'AphrontNullView' => 'view/null',
    'AphrontPageView' => 'view/page/base',
    'AphrontPanelView' => 'view/layout/panel',
    'AphrontQueryConnectionException' => 'storage/exception/connection',
    'AphrontQueryConnectionLostException' => 'storage/exception/connectionlost',
    'AphrontQueryCountException' => 'storage/exception/count',
    'AphrontQueryException' => 'storage/exception/base',
    'AphrontQueryObjectMissingException' => 'storage/exception/objectmissing',
    'AphrontQueryParameterException' => 'storage/exception/parameter',
    'AphrontQueryRecoverableException' => 'storage/exception/recoverable',
    'AphrontRedirectResponse' => 'aphront/response/redirect',
    'AphrontRequest' => 'aphront/request',
    'AphrontResponse' => 'aphront/response/base',
    'AphrontTableView' => 'view/control/table',
    'AphrontURIMapper' => 'aphront/mapper',
    'AphrontView' => 'view/base',
    'AphrontWebpageResponse' => 'aphront/response/webpage',
    'DifferentialAction' => 'applications/review/constants/action',
    'DifferentialChangeType' => 'applications/review/constants/changetype',
    'DifferentialLintStatus' => 'applications/review/constants/lintstatus',
    'DifferentialRevisionStatus' => 'applications/review/constants/revisionstatus',
    'DifferentialUnitStatus' => 'applications/review/constants/unitstatus',
    'LiskDAO' => 'storage/lisk/dao',
    'PhabricatorController' => 'applications/base/controller/base',
    'PhabricatorDirectoryCategory' => 'applications/directory/storage/category',
    'PhabricatorDirectoryCategoryDeleteController' => 'applications/directory/controller/categorydelete',
    'PhabricatorDirectoryCategoryEditController' => 'applications/directory/controller/categoryedit',
    'PhabricatorDirectoryCategoryListController' => 'applications/directory/controller/categorylist',
    'PhabricatorDirectoryController' => 'applications/directory/controller/base',
    'PhabricatorDirectoryDAO' => 'applications/directory/storage/base',
    'PhabricatorDirectoryItem' => 'applications/directory/storage/item',
    'PhabricatorDirectoryItemDeleteController' => 'applications/directory/controller/itemdelete',
    'PhabricatorDirectoryItemEditController' => 'applications/directory/controller/itemedit',
    'PhabricatorDirectoryItemListController' => 'applications/directory/controller/itemlist',
    'PhabricatorDirectoryMainController' => 'applications/directory/controller/main',
    'PhabricatorLiskDAO' => 'applications/base/storage/lisk',
    'PhabricatorStandardPageView' => 'view/page/standard',
  ),
  'function' =>
  array(
    '_qsprintf_check_scalar_type' => 'storage/qsprintf',
    '_qsprintf_check_type' => 'storage/qsprintf',
    'qsprintf' => 'storage/qsprintf',
    'queryfx' => 'storage/queryfx',
    'queryfx_all' => 'storage/queryfx',
    'queryfx_one' => 'storage/queryfx',
    'vqsprintf' => 'storage/qsprintf',
    'vqueryfx' => 'storage/queryfx',
    'xsprintf_query' => 'storage/qsprintf',
  ),
  'requires_class' =>
  array(
    'Aphront404Response' => 'AphrontResponse',
    'AphrontDefaultApplicationConfiguration' => 'AphrontApplicationConfiguration',
    'AphrontDefaultApplicationController' => 'AphrontController',
    'AphrontDialogResponse' => 'AphrontResponse',
    'AphrontDialogView' => 'AphrontView',
    'AphrontErrorView' => 'AphrontView',
    'AphrontFormControl' => 'AphrontView',
    'AphrontFormSelectControl' => 'AphrontFormControl',
    'AphrontFormSubmitControl' => 'AphrontFormControl',
    'AphrontFormTextAreaControl' => 'AphrontFormControl',
    'AphrontFormTextControl' => 'AphrontFormControl',
    'AphrontFormView' => 'AphrontView',
    'AphrontMySQLDatabaseConnection' => 'AphrontDatabaseConnection',
    'AphrontNullView' => 'AphrontView',
    'AphrontPageView' => 'AphrontView',
    'AphrontPanelView' => 'AphrontView',
    'AphrontQueryConnectionException' => 'AphrontQueryException',
    'AphrontQueryConnectionLostException' => 'AphrontQueryRecoverableException',
    'AphrontQueryCountException' => 'AphrontQueryException',
    'AphrontQueryObjectMissingException' => 'AphrontQueryException',
    'AphrontQueryParameterException' => 'AphrontQueryException',
    'AphrontQueryRecoverableException' => 'AphrontQueryException',
    'AphrontRedirectResponse' => 'AphrontResponse',
    'AphrontTableView' => 'AphrontView',
    'AphrontWebpageResponse' => 'AphrontResponse',
    'PhabricatorController' => 'AphrontController',
    'PhabricatorDirectoryCategory' => 'PhabricatorDirectoryDAO',
    'PhabricatorDirectoryCategoryDeleteController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryCategoryEditController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryCategoryListController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryController' => 'PhabricatorController',
    'PhabricatorDirectoryDAO' => 'PhabricatorLiskDAO',
    'PhabricatorDirectoryItem' => 'PhabricatorDirectoryDAO',
    'PhabricatorDirectoryItemDeleteController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryItemEditController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryItemListController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryMainController' => 'PhabricatorDirectoryController',
    'PhabricatorLiskDAO' => 'LiskDAO',
    'PhabricatorStandardPageView' => 'AphrontPageView',
  ),
  'requires_interface' =>
  array(
  ),
));
