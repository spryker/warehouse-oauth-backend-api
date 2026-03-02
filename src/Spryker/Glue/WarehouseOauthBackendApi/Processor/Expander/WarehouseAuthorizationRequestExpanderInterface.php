<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\WarehouseOauthBackendApi\Processor\Expander;

use Generated\Shared\Transfer\AuthorizationRequestTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;

interface WarehouseAuthorizationRequestExpanderInterface
{
    public function expand(
        AuthorizationRequestTransfer $authorizationRequestTransfer,
        GlueRequestTransfer $glueRequestTransfer
    ): AuthorizationRequestTransfer;
}
