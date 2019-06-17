<?php
/**
 * craftFormSubmissionsPull plugin for Craft CMS 3.x
 *
 * Pulls form submissions throughout the day.
 *
 * @link      http://google.com
 * @copyright Copyright (c) 2019 Mike Schlosser
 */

namespace test\craftformsubmissionspull\services;

use test\craftformsubmissionspull\CraftFormSubmissionsPull;

use Craft;
use craft\base\Component;

/**
 * CraftFormSubmissionsPullService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Mike Schlosser
 * @package   CraftFormSubmissionsPull
 * @since     1.0.0
 */
class CraftFormSubmissionsPullService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     CraftFormSubmissionsPull::$plugin->craftFormSubmissionsPullService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
