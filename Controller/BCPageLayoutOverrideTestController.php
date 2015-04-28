<?php
/**
 * File containing the BCPageLayoutOverrideTestBundle class.
 *
 * @copyright Copyright (C) Brookins Consulting. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 0.0.2
 */

namespace BrookinsConsulting\BCPageLayoutOverrideTestBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;
use eZ\Publish\API\Repository\Values\Content\Location;
use eZ\Publish\Core\Pagination\Pagerfanta\ContentSearchAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;

use EzSystems\DemoBundle\Controller\DemoController;

class BCPageLayoutOverrideTestController extends DemoController
{
    /**
     * Renders page header links with cache control
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function userLinksAction()
    {
        $response = new Response();
        $response->setSharedMaxAge( 3600 );
        $response->setVary( 'Cookie' );

        return $this->render(
            "BCPageLayoutOverrideTestBundle::page_header_links.html.twig",
            array(),
            $response
        );
    }
}
