<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Glue\WarehouseOauthBackendApi\Plugin\GlueBackendApiApplication;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\WarehouseOauthBackendApi\Plugin\GlueBackendApiApplication\WarehouseRequestBuilderPlugin;
use SprykerTest\Glue\WarehouseOauthBackendApi\WarehouseOauthBackendApiTester;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Glue
 * @group WarehouseOauthBackendApi
 * @group Plugin
 * @group GlueBackendApiApplication
 * @group WarehouseRequestBuilderPluginTest
 * Add your own group annotations below this line
 */
class WarehouseRequestBuilderPluginTest extends Unit
{
    /**
     * JWT where sub claim is a plain numeric string, not a JSON-encoded object.
     * Triggers `json_decode("1234567890", true)` returning int instead of array.
     *
     * @var string
     */
    protected const JWT_TOKEN_WITH_NON_JSON_OBJECT_SUB = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c';

    /**
     * @var \SprykerTest\Glue\WarehouseOauthBackendApi\WarehouseOauthBackendApiTester
     */
    protected WarehouseOauthBackendApiTester $tester;

    public function testBuildReturnsGlueRequestWithoutRequestWarehouseWhenAuthorizationTokenNotProvided(): void
    {
        // Act
        $glueRequestTransfer = (new WarehouseRequestBuilderPlugin())->build(new GlueRequestTransfer());

        // Assert
        $this->assertEmpty($glueRequestTransfer->getRequestWarehouse());
    }

    public function testBuildReturnsGlueRequestWithoutRequestWarehouseWhenJwtSubClaimIsNotJsonObject(): void
    {
        // Arrange
        $glueRequestTransfer = (new GlueRequestTransfer())
            ->setMeta(['authorization' => [0 => 'Bearer ' . static::JWT_TOKEN_WITH_NON_JSON_OBJECT_SUB]]);

        // Act
        $glueRequestTransfer = (new WarehouseRequestBuilderPlugin())->build($glueRequestTransfer);

        // Assert
        $this->assertEmpty($glueRequestTransfer->getRequestWarehouse());
    }
}
