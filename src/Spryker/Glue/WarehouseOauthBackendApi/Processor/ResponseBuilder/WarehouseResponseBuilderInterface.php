<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\WarehouseOauthBackendApi\Processor\ResponseBuilder;

use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\OauthErrorTransfer;
use Generated\Shared\Transfer\OauthResponseTransfer;

interface WarehouseResponseBuilderInterface
{
    public function createForbiddenErrorResponse(): GlueResponseTransfer;

    public function createOauthBadRequestErrorResponse(OauthErrorTransfer $oauthErrorTransfer): GlueResponseTransfer;

    public function createWarehouseTokenResponse(OauthResponseTransfer $oauthResponseTransfer): GlueResponseTransfer;
}
